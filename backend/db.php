<?php

class DB
{
    private $db;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=library';
        $this->db = new PDO($dsn, 'root', '', array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ));
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    public function query($sql, $args = [])
    {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($args);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($sql, $args = [])
    {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($args);
        return;
    }

    public function update($sql, $args = [])
    {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($args);
        return;
    }
}
