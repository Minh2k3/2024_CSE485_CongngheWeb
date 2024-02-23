<!-- courses.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khóa học</title>
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/solid.css">
    <link rel="stylesheet" href="./bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-5.3.0-alpha3-dist/css/bootstrap-grid.css">
    <style>
        /* Thêm các định kiểu CSS của bạn ở đây */
        body {
            /*background-color: aquamarine;*/
        }
        .course {
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 20px;
        }
        .course h3 {
            color: #333;
            margin-top: 10px;
        }
        .course p {
            color: #666;
        }
        .course i {
            color: #9b292a;
            padding-right: 5px;
        }
        h1 {
            color: #9b292a;
            border-left: #9b292a 8px solid;
            padding-left: 5px;
            margin: 15px 0;
        }

    </style>
</head>

<body>
    <?php
        // Dữ liệu khóa học lưu động trong mảng
        $courses = [
            [
                'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
        Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
        quốc tế.',
                'fee' => '15.000.000 VND','start_date' => '2/2/24',
                'duration' => '2 - 2.5 năm'
            ],
            [
                'title' => 'LẬP TRÌNH WEB FULLSTACK',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
        Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
        quốc tế.',
                'fee' => 'Ưu đãi giảm 15% học phí','start_date' => '2/2/24',
                'duration' => '2 - 2.5 năm'
            ],
            [
                'title' => 'LẬP TRÌNH JAVA FULLSTACK',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
        Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
        quốc tế.',
                'fee' => 'Ưu đãi giảm 15% học phí','start_date' => '2/2/24',
                'duration' => '2 - 2.5 năm'
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
            // Thêm các khóa học khác vào đây
        ];
        // Hiển thị danh sách khóa học
        echo '<div class="container mt-3">';
            echo '<h1>KHÓA HỌC SẮP KHAI GIẢNG</h1>';
            echo '<div class="row">';
                foreach ($courses as $course) {
                    echo '<div class="course col-4">';
                        echo '<img src="./Images/takt op destiny.jpg" alt="Hình ảnh khóa học" style="width: 100%;">';
                        echo '<h3>' . $course['title'] . '</h3>';
                        echo '<p>' . $course['description'] . '</p>';
                        echo '<p><i class="fa fa-gift" aria-hidden="true"></i>Học phí: ' . $course['fee'] . '</p>';
                        echo '<p><i class="fa-solid fa-clock"></i>Khải giảng: ' . $course['start_date'] . '</p>';
                        echo '<p><i class="fa fa-bookmark" aria-hidden="true"></i>Thời lượng: ' . $course['duration'] . '</p>';
                    echo '</div>';
                }
            echo '</div>';
        echo '</div>';

    ?>
</body>
</html>