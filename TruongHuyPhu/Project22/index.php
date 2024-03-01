<?php
    include 'user.php';
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
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-7">
                            <img src="<?php echo $user['avatar'] ?>" alt="" class="img-thumbnail">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-1"></div>
                        <div class="col-11">
                            <form class="input-group input-group-sm mb-3" action="update_profile.php" method="post" enctype="multipart/form-data">
                                <input type="file" accept="image/*" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $user['name']?>">
                                <button class="btn btn-danger" type="submit">Update Profile</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5"></div>
                <div class="col-7">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text">Full Name</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $user['name']?>">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text">Email</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $user['email']?>">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text">Phone Number</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $user['phoneNumber']?>">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text">Company Name</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $user['companyNumber']?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>