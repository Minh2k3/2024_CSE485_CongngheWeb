<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project12</title>
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/solid.css">
    <link rel="stylesheet" href="./bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-5.3.0-alpha3-dist/css/bootstrap-grid.css">
    <style>
        nav {
            background-color: #0a1f77;
        }
        .border-left {
            display: inline-block;
            border-left: 1px solid #fff;
        }
        li {
            padding: 0 10px;
        }

    </style>
</head>
<body>
    <?php
        $navItems = [
            "GIỚI THIỆU",
            "TIN TỨC & THÔNG BÁO",
            "TUYỂN SINH",
            "ĐÀO TẠO",
            "NGHIÊN CỨU",
            "ĐỐI NGOẠI",
            "VĂN BẢN",
            "SINH VIÊN",
            "LIÊN HỆ"
        ];
        echo '<nav class="navbar navbar-expand navbar-light mt-5">';
            echo '<div class="container-fluid">';
                echo '<ul class="navbar-nav">';
                    echo '<li class="nav-item"><a class="nav-link" href="#"><i class="fa-solid fa-house text-white" style="font-size: 24px; margin-left: -5px"></i></a></li>';
                    foreach ($navItems as $item) {
                        echo '<li class="nav-item border-left">';
                        echo '<a class="nav-link text-white" href="#">'. $item . '</a></li>';
                    }
        echo '</ul></div></nav>';
    ?>
</body>
</html>