<?php

class DB 
{
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
    
    public function update($sql, $args = []) {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($args);     
        return;
    
    }
}