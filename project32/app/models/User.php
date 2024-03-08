<?php
class User {
    private $username;
    private $pass;
    private $userRole;
    private $employeeId;
    public function __construct($username, $pass, $userRole, $employeeId) {
        $this->username = $username;
        $this->pass = $pass;
        $this->userRole = $userRole;
        $this->employeeId = $employeeId;
    }

    public function getPass() {
        return $this->pass;
    }
    public function setPass($pass) {
        $this->pass = $pass;
    }
    public function getUsername() {
        return $this->username;
    }
    public function setUsername($username) {
        $this->username = $username;
    }
    public function getUserRole() {
        return $this->userRole;
    }
    public function setUserRole($userRole) {
        $this->userRole = $userRole;
    }
    public function getEmployeeId() {
        return $this->employeeId;
    }
    public function setEmployeeId($employeeId) {
        $this->employeeId = $employeeId;
    }
}