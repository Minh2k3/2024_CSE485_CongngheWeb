<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate amd update user profile
    $errors = [];
    $user = [
        "id" => 1,
        "name" => "Trần Minh",
        "email" => "himakevolution@example.com",
        'phone' => '0987654321',
        'address' => '175 Tây Sơn',
        "avatar" => "../icon.png"
    ];
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    if ($name != "") {
        $user['name'] = $name;
    }
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if ($email != "") {
        $user['email'] = $email;
    }
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    if ($phone != "") {
        $user['phone'] = $phone;
    }
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    if ($address != "") {
        $user['address'] = $address;
    }
    // Handle avatar upload
    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    $maxSize = 1048576;
    $targetDir = 'uploads/';

    if (!empty($_FILES['avatar']['tmp_name'])) {
        $fileInfo = pathinfo($_FILES['avatar']['name']);
        if (!in_array($fileInfo['extension'], $allowedExtensions)) {
            $errors[] = 'Invalid file type. Only JPG, JPEG, and PNG files are allowed.';
        } else if ($_FILES['avatar']['size'] > $maxSize) {
            $errors[] = 'File size exceeds limit. Limit is 1MB.';
        } else {
            $fileName = uniqid() . '.' . $fileInfo['extension'];
            $targetPath = $targetDir . $fileName;
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetPath)) {
                $user['avatar'] = $targetPath;
            } else {
                $errors[] = 'Failed to upload file.';
            }
        }
    }

    // Handle errors or update user profile
    if (empty($errors)) {
        // echo 'Profile updated successfully.';
        session_start();
        $_SESSION['new_Profile'] = $user;
        header("Location: index.php");
    } else {
        echo "Error: ";
        foreach ($errors as $error) {
            echo "<br> - $error";
        }
    }
}