<?php

require_once ROOT . '/services/UserService.php';

class UserController {

    public function index() {
        // Goi du lieu tu UserService
        $userService = new UserService();
        $users = $userService->getAllUser();

        // Render du lieu ra user/index.php
        include ROOT . '/views/users/index.php';
    }
    public function getAllUser() {
        $userService = new UserService();
        $users = $userService->getAllUser();
        return $users;
    }
}