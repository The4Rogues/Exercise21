
<?php
//renew book, calculate outstanding charges per user, take book out, return book,
// view over due books

require_once("db.php");

function getLoans() {
    $db = new DB;
    return $db->query("SELECT books.title, borrowed_items.date_due, 
    CONCAT(borrowers.first_name, ' ', borrowers.last_name) as borrower_full_name 
    FROM borrowed_items 
    INNER JOIN	books ON books.id = borrowed_items.books_id
    INNER JOIN borrowers ON borrowers.id = borrowed_items.borrower_id 
    WHERE date_due <= now() 
    AND date_in IS NULL"); 
    
}
 function payCharges() {
     $db = new DB;
     return $db->query("SELECT 
	books.title, 
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
    
 function bookOut($bookid, $borrowerid) {
     $db = new DB;
     return $db->insert("INSERT INTO borrowed_items (date_out, date_due, books_id, borrower_id)
VALUES  (current_date, current_date + interval 21 day, ?, ?)", [$bookid, $borrowerid]);
 }
     
     
 //function returnBook(){
         
         
 
                    
