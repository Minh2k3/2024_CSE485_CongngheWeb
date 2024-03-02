<?php
    session_start();
    if (isset($_SESSION['new_Profile'])) {
        $user = $_SESSION['new_Profile'];
    }
    else {
        include_once 'user.php';
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/solid.css">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-6 border border-primary">
            <h1 class="h1 ms-2">Account Settings</h1>
            <div class="row ms-1">
                <div class="col-6">
                    <div class="row"><a class="text-decoration-none text-dark mt-4" href="#">Profile</a></div>
                    <div class="row"><a class="text-decoration-none text-dark mt-4" href="#">Password</a></div>
                    <div class="row"><a class="text-decoration-none text-dark mt-4" href="#">Integration</a></div>
                    <div class="row"><a class="text-decoration-none text-dark mt-4" href="#">Billing</a></div>
                </div>
                <div class="col-6">
                    <form action="update_profile.php" method="post" class="justify-content-sm-center" enctype="multipart/form-data">
                        <img src="<?= $user['avatar'] ?>" class="rounded mx-auto d-block img-thumbnail" alt="Something like that">
                        <div class="mb-3 mt-2">
                            <input class="form-control" type="file" id="formFile" name="avatar">
                            <button class="btn-danger mt-2" type="submit">Upload</button>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?= $user['name'] ?>">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?= $user['email'] ?>">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Phone</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?= $user['phone'] ?>">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Address</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?= $user['address'] ?>">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>