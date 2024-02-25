<!-- courses.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khóa học</title>
    <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/solid.css">
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha3-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        // Dữ liệu khóa học lưu động trong mảng
        $courses = [
            [
                'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ',
                'img' => '../Images/takt op destiny.jpg',
                'description' => 'Chương trình đào tạo chuẩn quốc tế và toàn diện. Phù hợp với học sinh tốt nghiệp THPT, sinh viên và người định hướng theo nghề lập trình chuyên nghiệp.',
                'fee' => '15.000.000 VND','start_date' => '2/2/24',
                'duration' => '2 - 2.5 năm'
            ],
            [
                'title' => 'LẬP TRÌNH WEB FULLSTACK',
                'img' => '../Images/Kaori_Miyazono.jpg',
                'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. Trang bị từ frontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
                'fee' => 'Ưu đãi giảm 15% học phí','start_date' => '2/2/24',
                'duration' => '2 - 2.5 năm'
            ],
            [
                'title' => 'LẬP TRÌNH JAVA FULLSTACK',
                'img' => '../Images/retro-punk-anime-girl-lying-on-bed-5k-aj-1920x1080.jpg',
                'description' => 'Phát triển ứng dụng web cơ bản đến nâng cao bằng Java, các ứng dụng doanh nghiệp sử dụng J2EE, Servlet, JSP, Spring Framework, EJB,...',
                'fee' => 'Ưu đãi giảm 15% học phí','start_date' => '2/2/24',
                'duration' => '236 giờ'
            ],
            [
                'title' => 'LẬP TRÌNH PHP & LARAVEL',
                'img' => '../Images/Shouko Nishimiya.png',
                'description' => 'PHP là một trong các ngôn ngữ thiết kế web mạnh nhất. Khóa học trang bị kỹ năng xây dựng web hoàn chỉnh sử dụng PHP kết hợp Laravel Framwork.',
                'fee' => '9.600.000 VND','start_date' => '2/2/24',
                'duration' => '36 giờ'
            ],
            [
                'title' => 'KHÓA HỌC LẬP TRÌNH .NET',
                'img' => '../Images/trungtru.jpg',
                'description' => 'Phát triển ứng dụng web sử dụng nền tảng ASP.NET Core MVC. Để học tốt khóa học yêu cầu học viên đã có kiến thức C# và Frontend.',
                'fee' => '6.000.000 VND','start_date' => '2/2/24',
                'duration' => '40 giờ'
            ],
            [
                'title' => 'LẬP TRÌNH SQL SERVER',
                'img' => '../Images/Mishuha.png',
                'description' => 'Trang bị những kiến thức nền tảng vững chắc về SQL Server như các kỹ thuật: lọc dữ liệu, phân tích, thiết kế và quản trị cơ sở dữ liệu,..',
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
                    echo '<div class="course col-sm-4 col-md-4">';
                        echo '<img src="' . $course['img'] .'" alt="Hình ảnh khóa học" style="width: 100%;">';
                        echo '<h4>' . $course['title'] . '</h4>';
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