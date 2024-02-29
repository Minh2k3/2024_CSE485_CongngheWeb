<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 $errors = [];
 $allowedExtensions = ['jpg', 'jpeg', 'png'];
 $maxSize = 1048576; // 1MB
 $targetDir = "uploads/"; // Adjust directory path
 if (!empty($_FILES['avatar']['tmp_name'])) {
    $fileInfo = pathinfo($_FILES['avatar']['name']);
 if (!in_array($fileInfo['extension'], $allowedExtensions)) {
    $errors[] = "Only JPG, JPEG, and PNG files are allowed.";
 } else if ($_FILES['avatar']['size'] > $maxSize) {
 $errors[] = "File size must be less than 1MB.";
 } else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $path = basename($_FILES['avatar']['name']);
    $target_dir = "uploads/";
    $target_file = $target_dir . $path;
    if (move_uploaded_file($_FILES['avatar']['tmp_name'], $target_file)) {
    } else {
        echo "Failed to upload";
    }
 }
 }
}
include 'data.php';
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <h1>Account Settings</h1>

        <div class="row d-flex justify-content-between">
            <div class="col-1 ">
                <a class="text-decoration-none text-dark" href="">Profile</a>
                <a class="text-decoration-none text-dark" href="">Password</a>
                <a class="text-decoration-none text-dark" href="">Integrations</a>
                <a class="text-decoration-none text-dark" href="">Billing</a>
            </div>
            <div class="col-6">
                <div class="text-center">
                    <img style="border-radius: 50%; width: 120px;height: 120px;" class="w-25 text-center"
                        src="<?php echo $target_file ?>" alt="">
                    <br>
                    <button class="btn btn-danger text-center">Change My Avatar</button>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Full name</label>
                    <input value="<?php echo $user['name'] ?>" type="text" class="form-control" name="" id=""
                        aria-describedby="helpId" placeholder="" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input value="<?php echo $user['email'] ?>" type="text" class="form-control" name="" id=""
                        aria-describedby="helpId" placeholder="" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Phone Number</label>
                    <input value="<?php echo $user['phone'] ?>" type="text" class="form-control" name="" id=""
                        aria-describedby="helpId" placeholder="" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Company Name</label>
                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="" />
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>