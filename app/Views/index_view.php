<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiTepat</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- custom css file -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/index.css') ?>">
</head>
<body>

    
    <!-- header section starts -->

    <header class="header">

        <a href="#" class="logo">
            <img src="<?= base_url('assets/images/logo.png') ?>" alt="">
        </a>

        <nav class="navbar">
            <div id="close" class="fas fa-times"></div>
            <a href="<?= site_url('contact') ?>" class="nav_item">Contact</a>
            <a href="<?= site_url('login') ?>" class="nav_item">Login</a>
            

        </nav>

        <div id="menu" class="fas fa-bars"></div>

    </header>

    <!-- header section ends -->

    <!-- home section starts -->

    <section class="home">

        <div class="content">
            <h1 class="title"> <span>Si</span>Te<span>pat</span> </h1>
            <p class="description">Temukan Peluang Karir Sesuai Minat dan Bakatmu</p>
            <a href="<?= site_url('register') ?>" class="btn">Daftar Sekarang</a>
        </div>

        <div class="image">
            <img src="<?= base_url('assets/images/home.png') ?>" alt="" data-speed="-3" class="move">
        </div>

    </section>


    <!-- home section ends -->















    <!-- GSAP CDN Link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

    <!-- custom js file -->
    <script src="script.js"></script>
</body>
</html>