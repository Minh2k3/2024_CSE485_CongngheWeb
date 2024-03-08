<?php
    session_start();
    session_regenerate_id(true);
    session_destroy(); // Destroy session
    setcookie('logged_in', "", 1, "/"); // Expire cookie
    header('Location: index.php'); // Redirect to login page
?>