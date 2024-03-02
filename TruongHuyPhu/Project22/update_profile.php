<?php
include_once 'user.php';
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//    // Validate amd update user profile
    $errors = [];
    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    $maxSize = 1048576;
    $targetDir = 'assets/images/';
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
        session_start();
        $_SESSION['new_Profile'] = $user;
        header('Location: index.php');
    } else {
//        header("Location: index.php");
        echo "Error: ";
        foreach ($errors as $error) {
            echo "<br> - $error";
        }
    }
}
