<?php
require_once ('../config/config.php');
require_once (ROOT . '/controllers/UserController.php');

$userController = new UserController();
$userController->index();


