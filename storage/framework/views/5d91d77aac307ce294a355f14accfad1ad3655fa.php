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
        <!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/icofont.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 200px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 10px;
            border: 10px solid #888;
            width: 80%;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        /* Add Animation */
        @-webkit-keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        @keyframes  animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        /* The Close Button */
        .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {

            padding: 2px 16px;
            background-color: lightyellow;
            color: white;
        }

        .modal-body {padding: 2px 16px;}

        .modal-footer {
            padding: 2px 16px;
            background-color: lightyellow;
            color: white;
        }
        .mobile-menu {
            color: white;
        }
    </style>
    <body>
    <?php if(Session::has('flash_message')): ?>
        <div class="alert alert-success">
            <strong> <?php echo session('flash_message'); ?></strong>
        </div>
     <?php endif; ?>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <!-- Start Header Area -->
        <!-- End Header Area -->

        <!-- Start Banner Area -->
        <section class="breadcrumb-area about-page" data-overlay="5" style="background-image: url(img/bg/about-breadcrumb.jpg);">
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
                            <h3>TOURS PACKAGE</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item active">Tours</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner Area -->
       <section class="package-area pt-110 pb-118">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="package-top-bar mb-60 separator clearfix">
                            <div class="package-search f-left">
                                <form method="POST" action="/search1">
                                    <?php echo e(csrf_field()); ?>

                                    <input  type="text" class="form-control" name="name" placeholder="search">
                                    <button><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                            <div class="package-view text-right f-right">
                                <ul class="nav package-tab justify-content-end" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-th"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-list-ul"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="package-search-result f-right">
                                <p>Showing 1- 5 of 20 results</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row flex-md-wrap-reverse">
                    <div class="col-lg-4">
                        <div class="widget">
                            <h3 class="book-now-title">FIND YOUR TRIP</h3>
                            <div class="sidebar-booking">
                                <form action="/search2" method="post">
                                    <?php echo e(csrf_field()); ?>

                                <div class="form-action">
                                    <ul class="select-bar">
                                        <li class="location clearfix">
                                            <select name="location" class="location-here">
                                                <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($value->name); ?>"><?php echo e($value->name); ?> </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </li>
                                        <li class="location clearfix">

                                                <input name="departure" class="datepicker" type="text" placeholder="Departure">

                                        </li>
                                        <li class="location clearfix">

                                            <input style=" border: 1px solid #e8e8e8;  height: 41px; padding: 0 41px; font-size: 14px; width: 100%; " class="" name="budget" type="number" placeholder="Enter Budget">

                                        </li>
                                    </ul>
                                </div>
                                <div class="filter-button">
                                    <button type="submit">SEARCH NOW</button>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="advertise-area">
                                <a href="#"><img src="img/blog/ads.jpg" alt="advertise-img"></a>
                            </div> <!-- end ad area -->
                        </div>
                        <div class="widget">
                            <div class="widget-title">
                                <h5>LATEST NEWS</h5>
                            </div>
                            <div class="widget-body">
                                <div class="widget-single-content">
                                    <div class="widget-thumb">
                                        <img src="img/blog/latest-post1.jpg" alt="latest-news">
                                    </div>
                                    <div class="widget-content">
                                        <a href="#">
                                        </a>
                                        <span>Murree</span>
                                        <p>May 20, 2017</p>
                                    </div>
                                </div>
                                <div class="widget-single-content">
                                    <div class="widget-thumb">
                                        <img src="img/blog/latest-post2.jpg" alt="latest-news">
                                    </div>
                                    <div class="widget-content">
                                        <a href="#">
                                        </a>
                                        <span>Naran valley</span>
                                        <p>May 20, 2017</p>
                                    </div>
                                </div>
                                <div class="widget-single-content">
                                    <div class="widget-thumb">
                                        <img src="img/blog/latest-post3.jpg" alt="latest-news">
                                    </div>
                                    <div class="widget-content">
                                        <a href="#">
                                        </a>
                                        <span>swat valley</span>
                                        <p>May 20, 2017</p>
                                    </div>
                                </div>
                                <div class="widget-single-content">
                                    <div class="widget-thumb">
                                        <img src="img/blog/latest-post4.jpg" alt="latest-news">
                                    </div>
                                    <div class="widget-content">
                                        <a href="#">
                                        </a>
                                        <span>Gilgit</span>
                                        <p>May 20, 2017</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end widget area -->
                    <div class="col-lg-8 md-space">
                        <div class="tab-content package-style" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">

                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-5 col-md-5">
                                    <div class="single-package mb-50">
                                        <div class="package-img">
                                            <img src="\Tours\Image\<?php echo e($value->Image); ?>" width="100" height="240" alt="package image">
                                            <div class="package-cost"><?php echo e($value->Budget); ?></div>
                                        </div>
                                        <h5>
                                            <span><?php echo e($value->name); ?></span></h5>
                                        <p><?php echo e($value->days); ?></p>
                                        <a data-modal="modal<?php echo e($value->id); ?>" class="bt">READ MORE
                                            <i class="icofont icofont-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Single Package -->
                                        <!--popup-->
                                        <!-- The Modal -->
                                        <div id="modal<?php echo e($value->id); ?>" class="modal">

                                            <!-- Modal content -->
                                            <div class="modal-content">
                                                <div class="modal-header" style="text-align: center;">
                                                    <div class='col-12 modal-title text-center'>
                                                        <h2><?php echo e($value->name); ?></h2>
                                                    </div>
                                                    <span style="align-items: right" class="close">&times;</span>
                                                </div>
                                                <div class="modal-body" style="text-align: center";>
                                                    <p><img src="\Tours\Image\<?php echo e($value->Image); ?>" width="500" height="200" alt=""></p>
                                                    <p><b>Days: </b><?php echo e($value->days); ?></p>
                                                    <p><b>Departure date: </b><?php echo e($value->departure); ?></p>
                                                    <p><b>Budget: </b><?php echo e($value->Budget); ?></p>
                                                    <p><b style="font-size: larger">Details:</b></br>
                                                    <?php echo e($value->Details); ?></p>
                                                    <p><div class="float-left">Total Seats = <?php echo e($value->NSA); ?> </div>
                                                    <div class="float-right">Remaining Seats = <?php echo e($value->NSA -$value->NRP); ?> </div></p>
                                                </div>
                                                <div style="align-items: normal" class="modal-footer">
                                                    <form method="post" action="/Book/<?php echo e($value->id); ?>">
                                                        <?php echo e(csrf_field()); ?>

                                                        <div class="form-group row">

                                                            <label>No Of Seats</label>
                                                            <div class="col-md-10">
                                                                <input type="number" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="0" name="seats">
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-light">Book Now</button>

                                                    </form>


                                                </div>
                                            </div>

                                        </div>
                                        <!--End Of PopUp-->
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>

                        </div>
                        <div class="pagination-area pt-50">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link pagi-icon" href="#">
                                            <i class="fas fa-chevron-left" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">4</a>
                                    </li>
                                    <li class="page-item ">
                                        <a class="page-link" href="#">5</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">6</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link pagi-icon" href="#">
                                            <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- Start Promote Area -->
        <section class="promote-area gray-bg pt-110 pb-120">
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
                    <p class="copyright text-center">PAKTOURS SERVICES</p>
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
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/waypoint.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script>

            var modalBtns = [...document.querySelectorAll(".bt")];
            modalBtns.forEach(function(btn){
                btn.onclick = function() {
                    var modal = btn.getAttribute('data-modal');
                    document.getElementById(modal).style.display = "block";
                }
            });

            var closeBtns = [...document.querySelectorAll(".close")];
            closeBtns.forEach(function(btn){
                btn.onclick = function() {
                    var modal = btn.closest('.modal');
                    modal.style.display = "none";
                }
            });

            window.onclick = function(event) {
                if (event.target.className === "modal") {
                    event.target.style.display = "none";
                }
            }
        </script>
    </body>
</html>
