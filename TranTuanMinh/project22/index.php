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
    <title>Update Profile</title>
    <style>
        .all {
    border: 1px solid #00c3ff;
    border-radius: 1%;
}
        </style>
</head>
<body>
    <?php
        session_start();
        $user = [];
        if (!$_SESSION['new_Profile']) {
            $user = [
                "id" => 1,
                "name" => "Trần Minh",
                "email" => "himakevolution@example.com",
                'phone' => '0987654321',
                'address' => '175 Tây Sơn',
                "avatar" => "../icon.png" // Initial avatar URL
            ];
            echo "1";
            print_r($user);
        } else {
            $user = $_SESSION['new_Profile'];
            echo "2";
            print_r($user);
        }
        // print_r($user);
    ?>
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-2 col-md-2"></div>
            <div class="col-sm-8 col-md-8 all">
                <h2 class="mt-5 text-warning text-center">Account Settings</h2>
                <div class="row">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 mt-5">
                            <div class="list-group">
                                <a href="#" class="border-0 list-group-item list-group-item-action text-danger">Profile</a>
                                <a href="#" class="border-0 list-group-item list-group-item-action">Password</a>
                                <a href="#" class="border-0 list-group-item list-group-item-action">Integrations</a>
                                <a href="#" class="border-0 list-group-item list-group-item-action">Billing</a>
                            </div>
                        </div>
                        <!-- <div class="col-sm-2 col-md-2"></div> -->
                        <div class="col-sm-8 col-md-8">
                            <form class="justify-content-center container" action="uploadProfile.php" method="post" enctype="multipart/form-data">
                                <div class="form-group mb-3">
                                    <div class="rounded-circle overflow-hidden mx-auto d-block square-image" style=" max-width: 5rem; height:5rem;">
                                        <img class="img-fluid" src="<?=$user['avatar']?>" alt="Avatar">
                                    </div>
                                    <div class="d-flex justify-content-center mt-3">
                                        <input type="file" name="avatar" id="">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="fullName">Full Name:</label><br>
                                    <input type="text" name="name" id="" placeholder="<?=$user["name"]?>" class="col-sm-10 col-md-12">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email">Email:</label><br>
                                    <!-- <input type="email" name="email" id="" placeholder="<?=$user['mail']?>"> -->
                                    <input type="email" name="email" id="" placeholder="<?=$user["email"]?>" class="col-sm-10 col-md-12">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="phoneNumber">Phone Number:</label><br>
                                    <input type="tel" name="phone" id="" placeholder="<?=$user["phone"]?>"  class="col-sm-10 col-md-12">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="address">Address:</label class="col-sm-12 col-md-12"><br>
                                    <input type="text" name="address" id="" placeholder="<?=$user["address"]?>" class="col-sm-10 col-md-12">
                                </div>
                                <button type="submit" class="mb-3">Update Profile</button>
                            </form>
                        </div>
                    </div>
                </div>
            <div class="col-sm-2 col-md-2"></div>
        </div>
    </div>
</body>
</html>