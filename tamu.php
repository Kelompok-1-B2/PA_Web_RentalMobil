<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"> <span>RENT</span>CARS </a>

    <nav class="navbar">
    <a href="register-tamu.php">Buat Pesanan</a>
        <button class="dark-mode" onclick="myFunction()"><a>Mode</a></button>
        <i class="bi bi-brightness-high-fill" id="toggleDark"></i>
    </nav>

    <div id="login-btn">

        <a href="login.php"><button class="btn">login</button></a>
        <i class="far fa-user"></i>
    </div>

</header> 
    
<div class="login-form-container">

    <span id="close-login-form" class="fas fa-times"></span>

</div>

<section class="home" id="home"> </section>

<section class="vehicles" id="vehicles">

    <h1 class="heading"> Ready <span>vehicles</span> </h1>

    <div class="swiper vehicles-slider">

    <div class="swiper-wrapper">
            <?php 
            $slide = mysqli_query($db,"SELECT * FROM car");
            if(mysqli_num_rows($slide)){
                while($row=mysqli_fetch_array($slide)){
                
            ?>
            <div class="swiper-slide box">
                <img src="image/<?php echo $row['foto'] ?>" alt="">
                <div class="content">
                    <h3><?php echo $row['name'] ?></h3>
                    <div class="price"> <span>Per/24 jam : </span><?php echo $row['harga'] ?></div>
                    <p>
                        
                        <span class="fas fa-circle"></span> <?php echo $row['transmisi'] ?>
                    </p>
                    <!-- <a href="register-tamu.php" class="btn">check out</a> -->
                </div>
            </div>
            <?php
                }}
            ?>
        </div>

        <div class="swiper-pagination"></div>

    </div>
</section>

<section class="newsletter"></section>

<section class="footer" id="footer">

    <div class="box-container">
        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class=""></i> Facebook </a>
            <a href="#"> <i class=""></i> Instagram </a>
            <a href="#"> <i class=""></i> WhatsApp </a>
        </div>

    </div>

    <div class="credit"> created by three brother </div>

</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>