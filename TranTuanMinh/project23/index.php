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
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../icon.png" type="image/x-icon">
    <title>Login Form</title>
</head>
<body>
    <?php
        
    ?>

    <div class="container mt-5">
        <div class="row align-middle">
            <div class="col"></div>
            <div class="col  border border-success">
                <h2>Login Form</h2>
                <form action="process_login.php" method="post">
                    <div class="form-group col-md-12 mb-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group mb-3 justify-content-center d-flex">
                        <button type="submit" class="btn btn-primary ">Login</button>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>
</html>