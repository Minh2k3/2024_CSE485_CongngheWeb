<?php
    include 'products.php';
    // Số bản ghi mỗi trang
    $records_per_page = 4;

    // Trang hiện tại (mặc định là trang 1 nếu không có tham số trang)
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

    // Tính toán vị trí bắt đầu lấy dữ liệu
    $start_from = ($current_page - 1) * $records_per_page;

    // Lấy một phần của dữ liệu cho trang hiện tại
    $current_page_items = array_slice($products, $start_from, $records_per_page);

    // Tạo các liên kết phân trang
    $total_records = count($products);
    $total_pages = ceil($total_records / $records_per_page);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/solid.css">
    <title>Document</title>
</head>
<body>
<div class="container mt-5 border border-primary">
    <div class="row">
        <?php foreach ($current_page_items as $item): ?>
                <div class='col-3'>
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $item['img_product'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item['name'] ?></h5>
                            <p class="card-text">$<?php echo $item['price']?></p>
                            <a href="#" class="btn btn-primary">Buy</a>
                        </div>
                    </div>
                </div>
        <?php endforeach; ?>
    </div>
    <div class="row mt-5">
        <ul class='pagination justify-content-md-start'>
            <?php if ($current_page > 1) { ?>
                <li class="page-item"><a class="page-link" href="?page=<?php echo $current_page - 1; ?>">Previous</a></li>
            <?php } ?>

            <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                <li class='page-item'><a class='page-link' href='?page=<?php echo $i ?>'> <?php echo $i ?></a></li>
            <?php } ?>

            <?php if ($current_page < $total_pages) { ?>
                <li class="page-item"><a class="page-link" href="?page=<?php echo $current_page + 1; ?>">Next</a></li>
            <?php } ?>
        </ul>
    </div>
</div>
</body>
</html>