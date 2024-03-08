<?php

require_once ROOT . '/models/User.php';

class UserService {
    public function getAllUser() {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=project32", "root", "himakevolution");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->query("SELECT * FROM users");

            $users = [];
            while ($row = $stmt->fetch()) {
                $user = new User($row['username'], $row['pass'], $row['userRole'], $row['employeeID']);
                $users[] = $user;
            }
            return $users;
        } catch (PDOException $e) {
            return $users = [];
        }
    }
}