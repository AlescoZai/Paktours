<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>PakTours</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->
		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/icofont.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <!-- Start Header Area -->
        <!-- End Header Area -->
        <!-- Start Banner Area -->
        <section class="breadcrumb-area" data-overlay="5" style="background-image: url(img/bg/about-breadcrumb.jpg);">
            <header class="header-area fixed-top">
            <div class="container">
                <div class="main-menu">
                    <div class="row">
                        <div class="col-lg-3 d-flex align-items-center">
                            <div class="logo">
                                <a href="index-2">
                                    <img src="img/logo/logo.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="basic-menu f-right">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li>
                                            <a class="text-white" href="index-2">HOME
                                            </a>

                                        </li>
                                        <li>
                                            <a class="text-white" href="package-grid">TOURS</a>
                                        </li>

                                        <li>
                                            <a class="text-white" href="package-3-col">PACKAGE
                                            </a>

                                        </li>
                                        <li>
                                            <a class="text-white" href="#">PAGES
                                                <i class="icofont icofont-rounded-down"></i>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="about">About</a>
                                                </li>
                                                <li>
                                                    <a href="contact">Contact</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="text-white" href="blog-details">BLOG
                                            </a>
                                        </li>
                                        <!--login-->

                                        <?php
                                        if(Auth::user())
                                        {
                                        ?>
                                        <li>
                                            <a class="text-white" href="#"><?php echo Auth::user()->name; ?>
                                                <i class="icofont icofont-rounded-down"></i>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="/dashboard">DashBoard</a>
                                                </li>
                                                <li>
                                                    <a href="/U_Logout">Logout</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <?php

                                        }
                                        else
                                        {
                                        ?>
                                        <li>
                                            <a class="text-white" href="#">LOGIN / REGISTER
                                                <i class="icofont icofont-rounded-down"></i>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="login">LogIn</a>
                                                </li>
                                                <li>
                                                    <a href="register">Register</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </nav>
                            </div>
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-wrapper text-center">
                            <h3>ABOUT US</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item active">About</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner Area -->
        <!-- Start About History -->
        <section class="about-history-area pt-110 pb-120">
            <div class="container">
                <div class="section-title text-center pb-80">
                    <h2>ABOUT OUR
                        <span>HISTORY</span>
                    </h2>
                    <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure
                        of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue;
                        and equal blame belongs.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="video-box">
                            <div class="about-history-content">
                                <img src="img/bg/video-img-2.jpg" alt="about-img">
                                <a href="https://www.youtube.com/watch?v=AVhIRPhUj0M" class="video-play home-2">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About History -->
        <!-- Start Facts Up Area -->
        <section class="facts-area pt-300 pb-90" data-overlay="3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="single-facts-item text-center mb-30">
                                    <span class="counter">10</span>+
                                    <h5>People on team</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="single-facts-item text-center mb-30">
                                    <span class="counter">50</span>+
                                    <h5>Great Deals</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="single-facts-item text-center mb-30">
                                    <span class="counter">70</span>+
                                    <h5>Happy client’s</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="single-facts-item text-center mb-30">
                                    <span class="counter">2018</span>
                                    <h5>Starting year</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Facts Up Area -->
        <section class="testimonial-area pt-110 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="testimonial-active owl-carousel">
                            <div class="testimonial-single-item">
                                <div class="testimonial-icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <h4>If you are always trying to be normal, you will never know how amazing you can be.</h4>
                                <div class="designation">
                                    <h4>Richard Smith</h4>
                                    CEO, At JT Ltd.
                                </div>
                            </div> <!-- end single testimonial item -->
                            <div class="testimonial-single-item">
                                <div class="testimonial-icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <h4>If you are always trying to be normal, you will never know how amazing you can be.</h4>
                                <div class="designation">
                                    <h4>Richard Smith</h4>
                                    CEO, At JT Ltd.
                                </div>
                            </div> <!-- end single testimonial item -->
                            <div class="testimonial-single-item">
                                <div class="testimonial-icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <h4>If you are always trying to be normal, you will never know how amazing you can be.</h4>
                                <div class="designation">
                                    <h4>Richard Smith</h4>
                                    CEO, At JT Ltd.
                                </div>
                            </div> <!-- end single testimonial item -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-area">
                            <div class="faq-title">
                                <h3>FREE-QUENTLY ASKED QUESTIONS.?</h3>
                            </div>
                            <div class="faq-content">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="item1">
                                            <h5 class="mb-0">
                                                <button class="btn faq" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Which city is the best for tourist?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="item1" data-parent="#accordion">
                                            <div class="card-body">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="item2">
                                            <h5 class="mb-0">
                                                <button class="btn faq collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                How can find the new places?
                                                </button>
                                             </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="item2" data-parent="#accordion">
                                            <div class="card-body">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="item3">
                                            <h5 class="mb-0">
                                                <button class="btn faq collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                How can find the latest tours?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="item3" data-parent="#accordion">
                                            <div class="card-body">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="item4">
                                            <h5 class="mb-0">
                                                <button class="btn faq collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                How to book a package/tour?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="item4" data-parent="#accordion">
                                            <div class="card-body">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-area start -->
        <section class="feature-area">
            <div class="container">
                <div class="separator pt-115 pb-110">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="single-feature-item d-lg-flex align-items-center">
                                <div class="feature-img">
                                    <img src="img/icon/tower.png" alt="feature-img">
                                </div>
                                <div class="feature-content">
                                    <h4>DESTINATION</h4>
                                    <p>We denounce with righteous more.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-feature-item d-lg-flex align-items-center">
                                <div class="feature-img">
                                    <img src="img/icon/rate.png" alt="feature-img">
                                </div>
                                <div class="feature-content">
                                    <h4>TOP PLACE</h4>
                                    <p>We denounce with righteous more.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-feature-item d-lg-flex align-items-center">
                                <div class="feature-img">
                                    <img src="img/icon/notebook.png" alt="feature-img">
                                </div>
                                <div class="feature-content">
                                    <h4>BOOKING NOW</h4>
                                    <p>We denounce with righteous more.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Feature Area -->
        <!-- Start Promote Area -->
        <section class="promote-area pt-110 pb-120">
            <div class="container">
                <div class="promote-content text-center">
                    <h2>GET DISCOUNT <span>10-20% </span>OFF ANY TOUR PACKAGE</h2>
                    <h4>WHEN YOU PURCHASE ANY PACKAGE & GET NEXT TOUR</h4>
                    <a class="btn-1" href="#">START YOUR TRIP NOW</a>
                </div>
            </div>
        </section>
        <!-- End Promote Area -->
        <!-- footer start -->
        <footer class="footer-area">
            <div class="footer-top-area pt-110 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-5 ">
                            <div class="footer-widget mb-30">
                                <h4 class="white">CONTACT US</h4>
                                <p class="white">If you are going to use a passage of Lorem Ipsum, you need to be sure</p>
                                <ul class="footer-social-icon">
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-pinterest-p"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-2">
                            <div class="footer-widget mb-30">
                                <h4 class="white">NEWS</h4>
                                <ul class="footer-link">
                                    <li>
                                        <a href="#">Subsciption</a>
                                    </li>
                                    <li>
                                        <a href="#">New Apps</a>
                                    </li>
                                    <li>
                                        <a href="#">Download now</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-2">
                            <div class="footer-widget mb-30">
                                <h4 class="white">COMPANY</h4>
                                <ul class="footer-link">
                                    <li>
                                        <a href="#">Screenshot</a>
                                    </li>
                                    <li>
                                        <a href="#">Fetures</a>
                                    </li>
                                    <li>
                                        <a href="#">Price</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="footer-widget mb-30">
                                <h4 class="white">RESOURCES</h4>
                                <ul class="footer-link">
                                    <li>
                                        <a href="#">Support</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacy & term</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area pb-50">
                <div class="container">
                    <p class="copyright text-center">PAKTOUR SERVICES</p>
                </div>
            </div>
        </footer>
        <!-- footer end -->

		<!-- JS here -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/waypoint.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/jquery.meanmenu.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
