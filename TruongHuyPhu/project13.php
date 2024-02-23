<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/solid.css">
    <title>Danh sách khóa học</title>
    <style>
        .course {
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 20px;
        }
        .course h2 {
            color: #333;
        }
        .course p {
            color: #666;
        }

    </style>
</head>
<body>
    <?php
        $courses = [
            [
                'title' => 'Học viên quốc tế',
                'description' => 'Chương trình đào tạo chính thức
                tại VIệt Nam từ Aptech Global. Phát triển nghề nghiệp
                sinh vin IT như một lập trình viên quốc tế.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24',
                'duration' => '2 - 2.5 năm'
            ],
            [
                'title' => 'LẬP TRÌNH WEB FULLSTACK',
                'description' => 'Khóa học phù hợp với người bắt đầu 
                lập trình hoặc người chuyển nghề. Trang bị từ frontend đến backend,
                xây dựng website hoàn chỉnh sau khóa học',
                'fee' => 'Ưu đãi giảm 15% học phí',
                'start_date' => '2/2024',
                'duration' => '6 tháng'
            ],
            [
                'title' => 'LẬP TRÌNH JAVA FULLSTACK',
                'description' => 'Phát triển ứng dụng web từ cơ bản đến 
                nâng cao bằng, java, các ứng dụng doanh nghiệp sử dụng J2EE, Serviet, 
                JSP, Spring framewwork, EJB, ...',
                'fee' => 'Ưu đãi giảm 15% học phí',
                'start_date' => '2/24',
                'duration' => '236 giờ'
            ],
            [
                'title' => 'LẬP TRÌNH PHP & LARAVEL',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
                Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
                quốc tế.',
                'fee' => '9.600.000 VND','start_date' => '2/2/24',
                'duration' => '36 giờ'
            ],
            [
                'title' => 'KHÓA HỌC LẬP TRÌNH .NET',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
                Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
                quốc tế.',
                'fee' => '6.000.000 VND','start_date' => '2/2/24',
                'duration' => '40 giờ'
            ],
            [
                'title' => 'LẬP TRÌNH SQL SERVER',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
                Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
                quốc tế.',
                'fee' => '4.500.000 VND','start_date' => '2/2/24',
                'duration' => '30 giờ'
            ],
        ];
// Hien thi khoa hoc
    echo '<div class="container-fluid mt-5">';
        echo '<h1 style="color: rgba(255,0,0,0.45)">KHÓA HỌC SẮP KHAI GIẢNG</h1>';
        echo '<div class="row">';
        $courseCount = 0;
        foreach ($courses as $course) {
            if ($courseCount % 3 == 0) {
                echo '<div class="w-100"></div>'; // Tạo một dòng mới sau mỗi hàng
            }
            echo '<div class="course col-sm-4">';
                echo '<img src="./Img/6033159_2 - Copy.jpg" style="width: 100%">';
                echo "<h5> {$course['title']} </h5>";
                echo "<p> {$course['description']} </p>";
                echo "<p> <i class='fa fa-gift'></i> {$course['fee']} </p>";
                echo "<p> <i class='fa-solid fa-clock'></i> Khai giảng:{$course['start_date']} </p>";
                echo "<p> <i class='fa fa-bookmark'></i> Thời lượng:{$course['duration']} </p>";
            echo '</div>';
            $courseCount++;
        }
        echo '</div>';
    echo '</div>';

    ?>

</body>
</html>

<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <title>Bootstrap 5 Example</title>-->
<!--    <meta charset="utf-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <link href="./bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">-->
<!--    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap-grid.css">-->
<!--</head>-->
<!--<body>-->
<!---->
<!--<div class="container-fluid p-5 bg-primary text-white text-center">-->
<!--    <h1>My First Bootstrap Page</h1>-->
<!--    <p>Resize this responsive page to see the effect!</p>-->
<!--</div>-->
<!---->
<!--<div class="container mt-5">-->
<!--    <div class="row">-->
<!--        <div class="col-sm-4">-->
<!--            <h3>Column 1</h3>-->
<!--            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>-->
<!--            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>-->
<!--        </div>-->
<!--        <div class="col-sm-4">-->
<!--            <h3>Column 2</h3>-->
<!--            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>-->
<!--            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>-->
<!--        </div>-->
<!--        <div class="col-sm-4">-->
<!--            <h3>Column 3</h3>-->
<!--            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>-->
<!--            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--</body>-->
<!--</html>-->
