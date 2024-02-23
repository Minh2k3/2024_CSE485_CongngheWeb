<?php
    include 'data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tlu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="header">
        <?php
            echo "
                <ul>
                    <li style='border-left:none;'>
                        <i class='bi bi-house-door'></i>
                    </li>
                </ul>
            ";
            foreach ($navItems as $item) {
                echo "
                    <ul>
                        <li>
                            <span>
                                $item
                            </span>
                        </li>
                    </ul>
                ";
            }
        ?>
    </div>
</body>

</html>