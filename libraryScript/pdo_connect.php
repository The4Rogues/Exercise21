<?php

class DB {
    private $db;
    
    public function __construct() {
        $dsn= 'mysql:host=localhost;dbname=test3';
        $this->db = new PDO($dsn, 'root','');
    }
    
    public function query($sql, $args = []) {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($args);     
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function insert($sql, $args = []) {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($args);     
        return;
    }
}




// books.php

require_once("db.php");

function getAllBooks() {
    $db = new DB;
    return $db->query("SELECT * FROM books");
}

function searchBookByTitle($title) {
    $db = new DB;
    return $db->query("SELECT * FROM books WHERE title LIKE '%{$title}%'");
}

// loans.php

require_once("db.php");

function getAllLoansForBorrower($borrowerId) {
    $db = new DB;
    return $db->query("SELECT * FROM loans WHERE borrower_id = ?", [$borrowerId]);
}

 