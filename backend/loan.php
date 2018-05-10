<?php
//renew book, calculate outstanding charges per user, take book out, return book,
// view over due books. create homepage before search catlogue that contains links for
// 'welcome to sky Library please login', (2) page 'view your acount account', 'search catalogue'
// 'signout' (3a) page search catalogue (leads to issue book if librarian) and view loan history (3b) page librarian page to
// search through overdue loans, clear fines, add new book, register new account, renew book.

require_once "db.php";

function getLoans()
{
    $db = new DB;
    return $db->query("SELECT books.title, borrowed_items.date_due,
    CONCAT(borrowers.first_name, ' ', borrowers.last_name) as borrower_full_name
    FROM borrowed_items
    INNER JOIN	books ON books.id = borrowed_items.books_id
    INNER JOIN borrowers ON borrowers.id = borrowed_items.borrower_id
    WHERE date_due >= now()
    AND date_in IS NULL");
  
}

function isBookAvail($bookid)
{
    $db = new DB;
    $results = $db->query("SELECT books.id
    FROM borrowed_items
    INNER JOIN	books ON books.id = borrowed_items.books_id
    INNER JOIN borrowers ON borrowers.id = borrowed_items.borrower_id
    WHERE date_due <= now()
    AND date_in IS NULL
    AND books.id = ?", [$bookid]);

    if (isset($results[0])) {

        return false;
    } else {
        return true;
    }
}

function chargesDue()
{
    $db = new DB;
    return $db->query("SELECT
	books.title,
    borrowed_items.id,
	borrowed_items.date_due,
	borrowed_items.date_in,
	CONCAT(borrowers.first_name, ' ' , borrowers.last_name) as borrower_full_name,
	IF(
		date_in IS NULL,
		datediff(CURRENT_DATE(), date_due) * 0.2,
		datediff(date_in, date_due) * 0.2
	) as amount_outstanding
FROM borrowed_items
INNER JOIN	books ON books.id = borrowed_items.books_id
INNER JOIN borrowers ON borrowers.id = borrowed_items.borrower_id
LEFT JOIN borrowed_transactions ON borrowed_transactions.`borrowed_items_id` = `borrowed_items`.`id`
WHERE ((date_due <= now() AND date_in IS NULL)
OR (date_due <= date_in))
AND borrowed_transactions.id IS NULL");

}

function bookOut($bookid, $borrowerid)
{
    $db = new DB;
    return $db->insert("INSERT INTO borrowed_items (date_out, date_due, books_id, borrower_id)
VALUES  (current_date, current_date + interval 21 day, ?, ?)", [$bookid, $borrowerid]);
}

function payFine($borrowed_item_id, $librarian_id)
{
    $db = new DB;
    $db->insert('INSERT INTO borrowed_transactions(transaction_date, amount, borrowed_items_id, librarian_id)
 SELECT
     CURRENT_DATE,
     IF(
         date_in IS NULL,
         datediff(CURRENT_DATE(), date_due) * 0.2,
         datediff(date_in, date_due) * 0.2
     ) as amount_outstanding,
     ?,
     ?
 FROM borrowed_items
 WHERE id = ?', [$borrowed_item_id, $librarian_id, $borrowed_item_id]);
}
