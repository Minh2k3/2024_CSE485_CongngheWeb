<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container_menu {
            background: darkblue;
            height: 60px;
        }
        .menu {
            color: bisque;
        }
        .item {
            color: white;
            display: inline-block;
            margin-left: 30px;
            margin-top: 20px;
            border-left: 1px solid aliceblue;
            padding: 0 5px;
        }
        #home {
            border: 0;
            color: white;
            display: inline-block;
            margin-left: 0px;
            padding: 0 5px;
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
        echo '<nav class="menu"> <div class="container_menu"> <ul>';
        echo '<li class="item" id="home"> btnHome </li>';
        foreach ($navItems as $item) {
            echo "<li class='item'>$item</li>";
        }
        echo '</nav> </div> </ul>';
    ?>
</body>
</html>
