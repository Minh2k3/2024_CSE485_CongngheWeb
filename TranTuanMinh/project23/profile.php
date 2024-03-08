<?php
    session_start();
    if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
        header('Location: login.php'); // Redirect to login if not authenticated
    }
    $username = $_SESSION['user_id'];
    // Retrieve user data from array using the username
    $user = null;
    foreach ($users as $u) {
        if ($u['username'] === $username) {
            $user = $u;
            break;
        }
    }
    if ($user) {
    // Display user information
    ?>
    
        <form action="logout.php">
            <button type="submit">LOGOUT</button>
        </form>

    <?php
    } else {
        echo "Error: User not found.";
    }
?>