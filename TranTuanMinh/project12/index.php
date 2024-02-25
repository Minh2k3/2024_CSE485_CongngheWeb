<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project12</title>
    <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/solid.css">
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha3-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $navItems = [
            "GIỚI THIỆU" => [
                "Tổng quan",
                "Sứ mệnh - Tầm nhìn",
                "Cơ cấu tổ chức và nhân lực",
                "Cơ sở vật chất",
                "Công tác Đảng",
                "Công tác Công đoàn"
            ],
            "TIN TỨC & THÔNG BÁO" => [
                "Tin tức",
                "Thông báo"
            ],
            "TUYỂN SINH" => [
                "Tuyển sinh đại học",
                "Tuyển sinh thạc sĩ",
                "Tuyển sinh tiến sĩ",
                "Vừa làm vừa học",
            ],
            "ĐÀO TẠO" => [
                "Thạc sĩ",
                "Đại học chính quy",
                "Cam kết đảm bảo chất lượng đào tạo",
                "Thông báo, tin tức dhcq",
                "Tiến sĩ",
                "Vừa làm vừa học",
            ],
            "NGHIÊN CỨU" => [
                "Tin khoa học công nghệ",
                "Tạp chí khoa học",
            ],
            "ĐỐI NGOẠI" => [
                "Giới thiệu chung",
                "Dự án quốc tế",
                "Hợp tác đào tạo quốc tế",
                "Tin tức đối ngoại",
                "Liên hệ",
                "Thoả thuận hợp tác",
            ],
            "VĂN BẢN" => [

            ],
            "SINH VIÊN" => [
                "Thông báo",
                "Hỗ trợ sinh viên",
                "Gương mặt sinh viên",
                "Hoạt động sinh viên",
                "Học phí",
                "Gương mặt cựu sinh viên",
                "Danh sách sinh viên tốt nghiệp",
                "Giáo viên chủ nhiệm"
            ],
            "LIÊN HỆ" => []
        ];
        echo '<nav class="navbar navbar-expand navbar-light mt-5">';
            echo '<div class="container-fluid">';
                echo '<ul class="navbar-nav">';
                    echo '<li class="nav-item"><a class="nav-link" href="#"><i class="fa-solid fa-house text-white" style="font-size: 24px; margin-left: -5px"></i></a></li>';
                    foreach ($navItems as $key => $value) {
                        echo '<li class="nav-item border-left dropdown">';
                            echo '<a class="nav-link text-white" href="#">'. $key . '</a>';
                            if ($value != []) {
                                echo '<div class="dropdown-menu bg-drop" aria-labelledby="navbarDropdown">';
                                foreach ($value as $item) {
                                    echo '<a class="dropdown-item text-white bg-drop" href="#">' . $item . '</a>';
                                }
                                echo '</div>';
                            }
                        echo '</li>';
                    }
        echo '</ul></div></nav>';
    ?>
</body>
</html>