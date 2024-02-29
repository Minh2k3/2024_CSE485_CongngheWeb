

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/solid.css">
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha3-dist/css/bootstrap-grid.css">
    <title>Profile</title>
</head>
<body>
    <?php
        session_start();
        $user = [];
        if (!$_SESSION['new_Profile']) {
            header('Location: index.php');
        }
        $user = $_SESSION['new_Profile'];
    ?>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-sm-4 col-md-3">
                <div class="card mt-4">
                    <form action=""></form>
                    <img src="<?=$user['avatar']?>" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title"><?=$user['name']?></h4>
                        <p class="card-text">Mail: <?=$user['mail']?></p>
                        <p class="card-text">Phone number: <?=$user['phone']?></p>
                        <!-- <p class="card-text"><?=$user['address']?></p> -->
                        <p class="card-text">Address: <?=$user['address']?></p>
                        <div class="justify-content-start">
                            <a href="index.php" class="btn btn-primary btn-sm">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>