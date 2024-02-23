<?php
    include 'data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khóa học</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="container mt-3">
        <h2>KHÓA HỌC SẮP KHAI GIẢNG</h2>
        <div class="row">
            <?php
            foreach($courses as $course){
                echo '
                <div class="col-4 mt-3">
                    <div class="card" style="">
                        <img src=" '.$course['img'].' " alt="...">
                        <div class="card-body">
                            <h2>' . $course['title'] . '</h2>
                            <p>' . $course['description'] . '</p>
                            <p>Học phí: ' . $course['fee'] . '</p>
                            <p>Khải giảng: ' . $course['start_date'] . '</p>
                            <p>Thời lượng: ' . $course['duration'] . '</p>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</body>

</html>