<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class DB {
    private $db;
    
    public function __construct() {
        $dsn= 'mysql:host=localhost;dbname=lib4';
        $this->db = new PDO($dsn, 'root','');
    }
    
    public function query($sql, $args = []) {
       $stmt = $this->db->prepare($sql);
        $stmt->execute($args);
        // fetch all the assocotove array - will be ultoidimention
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function insert($sql, $args = []) {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($args);     
        return;
    }
}
?>
