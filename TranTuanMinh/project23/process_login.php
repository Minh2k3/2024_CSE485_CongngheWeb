
<?php
    // $users = [
    //     [
    //     "username" => "tm7",
    //     "password" => password_hash("tranminh", PASSWORD_DEFAULT),
    //     "name" => "Trần Minh",
    //     "email" => "himakevolution@example.com",
    //     ],
    //     [
    //     "username" => "admin",
    //     "password" => password_hash("admin", PASSWORD_DEFAULT),
    //     "name" => "HY",
    //     "email" => "admin@example.com",
    //     ]
    // ];

    include_once 'users.php';

    $db = new Database();
    $user = new User($db);

    function createPass() {
        $pass = "";
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        for ($i = 0; $i < 8; $i++) {
            $pass .= $chars[rand(0, strlen($chars) - 1)];
        }
        return $pass;
    }

    $img = [
        "Images/asuna.jpg",
        "Images/Kaori Miyazono.jpg",
        "Images/Mishuha.png",
        "Images/retro-punk.jpg",
        "Images/takt op destiny.jpg"
    ];

    function createAvatar() {
        global $img;
        return $img[rand(0, count($img) - 1)];
    }

    function createUser($username, $fullName) {
        global $user;
        $password = createPass();
        $avatar = createAvatar();
        $passHashed = password_hash($password, PASSWORD_DEFAULT);
        $user->createUser($username, $passHashed, $fullName, $avatar);
    }

    // for ($i = 0; $i < 100; $i++) {
    //     $username = "user" . ($i < 10 ? "0" : "") . $i;
    //     $fullName = "User " . ($i < 10 ? "0" : "") . $i;
    //     createUser($username, $fullName);
    // }

    // createUser("admin", "Trần Minh");

    $users = $user->getAllUsers();

    session_start(); // Start session
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Check if username exists
    $user = null;
    foreach ($users as $u) {
        if ($u['username'] === $username) {
            $user = $u;
            break;
        }
    }
    // echo $user['pass'];
    // echo $password;
    if ($user && password_hash($password, PASSWORD_DEFAULT) == $user['pass']) {
        // Login successful
        $_SESSION['user_id'] = $user['username']; // Store user ID in session
        setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/"); // Set cookie for 30 days
        header('Location: profile.php'); // Redirect to profile page
    } else {
        // Login failed
        echo "Invalid username or password.";
    }
?>