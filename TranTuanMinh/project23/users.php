<?php

include_once 'database.php';

class User {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db->pdo;
    }

    public function createUser($username, $password, $fullName, $avatar) {
        $passHashed = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, pass, fullname, avatar) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$username, $passHashed, $fullName, $avatar]);
    }

    public function getAllUsers() {
        $sql = "SELECT * FROM users";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll();
    }
}