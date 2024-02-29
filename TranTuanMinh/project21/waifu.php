<?php
include_once 'database.php';

class WaifuManager {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db->pdo;
    }

    public function getAllWaifus() {
        $sql = "SELECT * FROM waifus";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll();
    }
}