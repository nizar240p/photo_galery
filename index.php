<?php
$img = array('anya','bleach','bluelock','bocchi','csm','deku','iamatomic','mob','sugoidekai');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Galery ORI CSS</title>

    <link rel="preload" as="image" href="img/anime/anya.webp">
    <link rel="preload" as="image" href="img/anime/bleach.webp">
    <link rel="preload" as="image" href="img/anime/bluelock.webp">
    <link rel="preload" as="image" href="img/anime/bocchi.webp">
    <link rel="preload" as="image" href="img/anime/csm.webp">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Hero Section Start -->
    <header id="home" class="pt-36 pb-32 bg-slate-100">
        <div class="container">
            
        </div>
    </header>
    <!-- Hero Section End -->

    <!-- Main Galery Start -->
    <section id="main">
        <div class="container">
            <div class="parent">
                <?php for($x = 0; $x < 2; $x++): ?>
                <?php for($i = 0; $i < 9; $i++): ?>
                <div class="card">
                    <div class="card-content">
                        <div class="image-container">
                            <img src="img/anime/<?=$img[$i]?>.webp" loading="lazy" alt="<?=$img[$i]?>">
                        </div>
                        <div class="desc-container">
                            <h3 class="desc-title"><?=$img[$i]?></h3>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
                <?php endfor; ?>
            </div>
        </div>
    </section>
    <!-- Main Galery End -->

    <!-- Footer Start -->
    <footer>
        <div class="container">
            <p class="footer-text">Made by Nizar menggunakan CSS biasa</p>
            <p class="footer-text">Copyright &copy; 2023</p>
        </div>
    </footer>
    <!-- Footer End -->
</body>
</html>