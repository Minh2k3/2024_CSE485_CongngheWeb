<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/solid.css">
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha3-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../icon.png" type="image/x-icon">
    <title>Pagination</title>
</head>
<body>
    <?php
        include_once 'waifu.php';
        $db = new Database();
        $waifuManager = new WaifuManager($db);
        $waifus = $waifuManager->getAllWaifus();
        // This array is the data to test on another computer
        // $waifus = [
        //     [
        //         "id" => 1,
        //         "image" => "./Images/Kaori Miyazono.jpg",
        //         "name" => "Waifu 1",
        //         "price" =>    "99$",
        //         "description" => "A comfortable and stylish T-Shirt."
        //     ],
        //     [
        //         "id" => 2,
        //         "image" => "./Images/Mishuha.png",
        //         "name" => "Waifu 2",
        //         "price" => "99$",
        //         "description" => "A comfortable and stylish Jean."
        //     ],
        //     [
        //         "id" => 3,
        //         "image" => "./Images/retro-punk.jpg",
        //         "name" => "Waifu 3",
        //         "price" =>    "99$",
        //         "description" => "A comfortable and stylish T-Shirt."
        //     ],
        //     [
        //         "id" => 4,
        //         "image" => "./Images/Shouko Nishimiya.png",
        //         "name" => "Waifu 4",
        //         "price" => "99$",
        //         "description" => "A comfortable and stylish Jean."
        //     ],
        //     [
        //         "id" => 5,
        //         "image" => "./Images/takt op destiny.jpg",
        //         "name" => "Waifu 5",
        //         "price" =>    "99$",
        //         "description" => "A comfortable and stylish T-Shirt."
        //     ],
        //     [
        //         "id" => 6,
        //         "image" => "./Images/trungtru.jpg",
        //         "name" => "Waifu 6",
        //         "price" => "99$",
        //         "description" => "A comfortable and stylish Jean."
        //     ],
        //     [
        //         "id" => 7,
        //         "image" => "./Images/Kaori Miyazono.jpg",
        //         "name" => "Waifu 7",
        //         "price" =>    "99$",
        //         "description" => "A comfortable and stylish T-Shirt."
        //     ],
        //     [
        //         "id" => 8,
        //         "image" => "./Images/Mishuha.png",
        //         "name" => "Waifu 8",
        //         "price" => "99$",
        //         "description" => "A comfortable and stylish Jean."
        //     ],
        //     [
        //         "id" => 9,
        //         "image" => "./Images/retro-punk.jpg",
        //         "name" => "Waifu 9",
        //         "price" =>    "99$",
        //         "description" => "A comfortable and stylish T-Shirt."
        //     ],
        //     [
        //         "id" => 10,
        //         "image" => "./Images/Shouko Nishimiya.png",
        //         "name" => "Waifu 10",
        //         "price" => "99$",
        //         "description" => "A comfortable and stylish Jean."
        //     ],
        //     [
        //         "id" =>11,
        //         "image" => "./Images/takt op destiny.jpg",
        //         "name" => "Waifu 11",
        //         "price" =>    "99$",
        //         "description" => "A comfortable and stylish T-Shirt."
        //     ],
        //     [
        //         "id" => 12,
        //         "image" => "./Images/trungtru.jpg",
        //         "name" => "Waifu 12",
        //         "price" => "99$",
        //         "description" => "A comfortable and stylish Jean."
        //     ],            
        //     [
        //         "id" => 13,
        //         "image" => "./Images/Kaori Miyazono.jpg",
        //         "name" => "Waifu 13",
        //         "price" =>    "99$",
        //         "description" => "A comfortable and stylish T-Shirt."
        //     ],
        //     [
        //         "id" => 14,
        //         "image" => "./Images/Mishuha.png",
        //         "name" => "Waifu 14",
        //         "price" => "99$",
        //         "description" => "A comfortable and stylish Jean."
        //     ],
        //     [
        //         "id" => 15,
        //         "image" => "./Images/retro-punk.jpg",
        //         "name" => "Waifu 15",
        //         "price" =>    "99$",
        //         "description" => "A comfortable and stylish T-Shirt."
        //     ],
        //     [
        //         "id" => 16,
        //         "image" => "./Images/Shouko Nishimiya.png",
        //         "name" => "Waifu 16",
        //         "price" => "99$",
        //         "description" => "A comfortable and stylish Jean."
        //     ],
        //     [
        //         "id" => 17,
        //         "image" => "./Images/takt op destiny.jpg",
        //         "name" => "Waifu 17",
        //         "price" =>    "99$",
        //         "description" => "A comfortable and stylish T-Shirt."
        //     ],
        //     [
        //         "id" => 18,
        //         "image" => "./Images/trungtru.jpg",
        //         "name" => "Waifu 18",
        //         "price" => "99$",
        //         "description" => "A comfortable and stylish Jean."
        //     ],
        //     [
        //         "id" => 19,
        //         "image" => "./Images/Kaori Miyazono.jpg",
        //         "name" => "Waifu 19",
        //         "price" =>    "99$",
        //         "description" => "A comfortable and stylish T-Shirt."
        //     ],
        //     [
        //         "id" => 20,
        //         "image" => "./Images/Mishuha.png",
        //         "name" => "Waifu 20",
        //         "price" => "99$",
        //         "description" => "A comfortable and stylish Jean."
        //     ],
        //     [
        //         "id" => 21,
        //         "image" => "./Images/retro-punk.jpg",
        //         "name" => "Waifu 21",
        //         "price" =>    "99$",
        //         "description" => "A comfortable and stylish T-Shirt."
        //     ],
        //     [
        //         "id" => 22,
        //         "image" => "./Images/noname.png",
        //         "name" => "Waifu 22",
        //         "price" => "99$",
        //         "description" => "A comfortable and stylish Jean."
        //     ],
        //     [
        //         "id" =>23,
        //         "image" => "./Images/takt op destiny.jpg",
        //         "name" => "Waifu 23",
        //         "price" =>    "99$",
        //         "description" => "A comfortable and stylish T-Shirt."
        //     ],
        //     [
        //         "id" => 24,
        //         "image" => "./Images/asuna.jpg",
        //         "name" => "Waifu 24",
        //         "price" => "99$",
        //         "description" => "A comfortable and stylish Jean."
        //     ],
                                        
            // ... add more products
        // ];
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
        $itemsPerPage = isset($_GET['itemsperpage']) ? $_GET['itemsperpage'] : 8;
        $totalPages = ceil(count($waifus) / $itemsPerPage);
        $currentPageItems = array_slice($waifus, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);

    ?>
    <?php include_once 'heading.php' ?>
    <audio id="audioPlayer" src="anya-waka-waka.mp3"></audio>
    <div class="container mt-3">
        <div class="row justify-content-center">
        <?php foreach ($currentPageItems as $waifu): ?>
            <div class="col-sm-4 col-md-3">
                <div class="card mt-4">
                    <img src="<?=$waifu['image']?>" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title"><?=$waifu['wname']?></h4>
                        <p class="card-text">Rented: <?=$waifu['rented']?></p>
                        <p class="card-text font-italic"><?=$waifu['address']?></p>
                        <!-- <p class="card-text"><?=$waifu['des']?></p> -->
                        <p class="card-text">Price : <?=$waifu['price']?>$</p>
                        <div class="justify-content-start">
                            <a href="#" class="btn btn-primary btn-sm">RENT NOW</a>
                            <button onclick="playSound()" class="btn btn-like"><i class="fa-regular fa-heart"></i></i></button>
                            <a href="#" class="btn btn-outline-primary btn-sm">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php include 'pagination.php' ?>
    <script>
        function playSound() {
            var audio = document.getElementById("audioPlayer");
            audio.play();
        }
    </script>
</body>
</html>