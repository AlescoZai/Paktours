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
            padding: 0;
            border: 1px solid #888;
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
    </style>
    <body>
       
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
                            <h3>Add Tour For Bidding</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2">Home</a></li>
                                <li class="breadcrumb-item active">Add Tour</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Add Tour Form-->
        <section class="package-area pt-110 pb-118">
                <?php $__env->startSection('content'); ?>
    <?php if(Session::has('flash_message')): ?>
        <div class="alert alert-success">
            <strong style="text-align: center"> <?php echo session('flash_message'); ?></strong>
        </div>
    <?php endif; ?>
            <div class="container col-md-10 offset-md-1">
                <div class="promote-content text-center">
                    <h2>Add Tour For Bidding</h2>
                
                </div>
                <br><br><br>
                <br>
                <div class="row">
                <form style="width: 50%" method="post" action="/addutour">
                <?php echo e(csrf_field()); ?>

                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label">Name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="lgFormGroupInput" placeholder="title" name="name">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label ">Departure</label>
                    <div class="col-md-10">
                        <input type="date" class="form-control" id="lgFormGroupInput" placeholder="title" name="departure">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  ">Days</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="lgFormGroupInput" placeholder="title" name="days">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label">Details</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="lgFormGroupInput" placeholder="title" name="Details">
                    </div>
                </div>
               
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label">Booked Seats</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="lgFormGroupInput" placeholder="title" name="NRP">
                    </div>
                </div>
				
                <div class="form-group row  float-right">
                    <div class="col-md-12">
                        <center> <button type="submit" class="btn btn-primary">Submit</button></center>
                    </div>

                </div>
            </form>
        </div>
    </div>
</section>
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
        <script src="js/slick.min.js"></script>
        <script src="js/jquery.meanmenu.min.js"></script>
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
        <script>
            $(document).ready(function(){
              $(window).scroll(function() { // check if scroll event happened
                if ($(document).scrollTop() > 4) { // check if user scrolled more than 50 from top of the browser window
                  $(".main-menu").css("visibility", "hidden"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
                } else {
                  $(".main-menu").css("visibility", "visible"); // if not, change it back to transparent
                }
              });
            });
        </script>