<?php
include 'data.php';
session_start(); // Start session
$username = $_POST['username'];
$password = $_POST['password'];
$user = null;
foreach ($users as $u) {
 if ($u['username'] === $username) {
 $user = $u;
 break;
 }
}
if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['username'];
    setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/"); 
    header('Location: profile.php'); 
} else {
    echo "Invalid username or password.";
}
?>