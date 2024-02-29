<?php
    include 'data.php';
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
    $totalPages = ceil(count($products) / 4);
    $currentPageItems = array_slice($products, ($currentPage - 1) * 4, 4);
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/bootstrap-5.3.3/css/bootstrap.min.css">
</head>

<body>
    <div class="main border-danger mt-5">
        <div class="row container-fluid">
            <?php foreach ($currentPageItems as $product): ?>
            <div class="col-3">
                <div class="card text-start">
                    <img class="card-img-top" src="<?php echo $product['img'] ?>" alt="Title" />
                    <div class="card-body text-center">
                        <p class="card-text"><?php echo $product['name']  ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="pagination mx-3">
            <?php if ($currentPage > 1): ?>
            <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <?php if ($i == $currentPage): ?>
            <span class="active"><?php echo $i; ?></span>
            <?php else: ?>
            <a class="text-dark text-decoration-none mx-1" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php endif; ?>
            <?php endfor; ?>
            <?php if ($currentPage < $totalPages): ?>
            <a class="text-dark text-decoration-none" href="?page=<?php echo $currentPage + 1; ?>">Next</a>
            <?php endif; ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="./assets/bootstrap-5.3.3/js/bootstrap.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>