<?php include "z_db.php"; ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Description -->
    <meta name="description" content="">
    <meta name="author" content="Themeland">

    <!-- Title  -->
    <title>Quangitech</title>

    <!-- Favicon  -->
    <link rel="icon" href="assets/img/logo/favicon.png">

    <!-- ***** All CSS Files ***** -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <!-- Swiper CSS -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/aos.css">
</head>

<body class="page-services">
    <!--====== Preloader Area Start ======-->
    <div id="preloader">
        <!-- Digimax Preloader -->
        <div id="digimax-preloader" class="digimax-preloader">
            <!-- Preloader Animation -->
            <div class="preloader-animation">
                <!-- Spinner -->
                <div class="spinner"></div>
                <!-- Loader -->
                <div class="loader">
                    <span data-text-preloader="Q" class="animated-letters">Q</span>
                    <span data-text-preloader="U" class="animated-letters">U</span>
                    <span data-text-preloader="A" class="animated-letters">A</span>
                    <span data-text-preloader="N" class="animated-letters">N</span>
                    <span data-text-preloader="G" class="animated-letters">G</span>
                    <span data-text-preloader="I" class="animated-letters">I</span>
                    <span data-text-preloader="T" class="animated-letters">T</span>
                    <span data-text-preloader="E" class="animated-letters">E</span>
                    <span data-text-preloader="C" class="animated-letters">C</span>
                    <span data-text-preloader="H" class="animated-letters">H</span>
                </div>
                <p class="fw-5 text-center text-uppercase">Loading</p>
            </div>
            <!-- Loader Animation -->
            <div class="loader-animation">
                <div class="row h-100">
                    <!-- Single Loader -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                    <!-- Single Loader -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                    <!-- Single Loader -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                    <!-- Single Loader -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== Preloader Area End ======-->

    <!--====== Scroll To Top Area Start ======-->
    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!--====== Scroll To Top Area End ======-->

    <div class="main overflow-hidden">
        <!-- ***** Header Start ***** -->
        <header id="header">
            <!-- Navbar -->
            <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
                <div class="container header">
                    <!-- Navbar Brand-->
                    <a class="navbar-brand" href="index.php">
                        <img class="navbar-brand-regular" src="assets\img\logo\logo.1.png" alt="brand-logo">
                        <img class="navbar-brand-sticky" src="assets\img\logo\logo.1.png" alt="brand-logo" alt="sticky brand-logo">
                    </a>
                    <div class="ml-auto"></div>
                    <!-- Navbar -->
                    <ul class="navbar-nav items">
                        <li class="nav-item">
                            <a class="nav-link" href="home">หน้าหลัก </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link">เกี่ยวกับเรา</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="about">ข้อมูลองค์กร</a></li>
                                <li><a class="dropdown-item" href="team.php">คณะผู้บริหาร</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link">บริการ</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="service1detail.php">System Development</a></li>
                                <li><a class="dropdown-item" href="service2detail.php">Office Supplies</a></li>
                                <li><a class="dropdown-item" href="service3detail.php">Data Analysis & Cleaning</a></li>
                                <li><a class="dropdown-item" href="service4detail.php">Printing Services</a></li>
                                <li><a class="dropdown-item" href="service5detail.php">Computer Training</a></li>
                                <li><a class="dropdown-item" href="service6detail.php">Package Programs</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="portfolio" class="nav-link">ผลงาน</a>
                        </li>
                        <li class="nav-item">
                            <a href="content.php" class="nav-link">ข่าวสารและกิจกรรม</a>
                        </li>
                    </ul>
                    </ul>

                    <!-- Navbar Toggler -->
                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                                <i class="fas fa-bars toggle-icon m-0"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Navbar Action Button -->
                    <ul class="navbar-nav action">
                        <li class="nav-item ml-3">
                            <a href="contact" class="btn ml-lg-auto btn-bordered-white"><i 
                            class="fas fa-paper-plane contact-icon mr-md-2"></i>ติดต่อเรา</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ***** Header End ***** -->
        <!-- JS (before </body>) -->
        <script src="assets/js/swiper/swiper-bundle.min.js"></script>
        <script src="assets/js/active.js"></script>
</body>

</html>

