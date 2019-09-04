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
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/icofont.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <style>
        ::placeholder {
            color: white;
            opacity: 1; /* Firefox */
        }

    </style>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <!-- ========= Start Header Area========= -->
        <header class="header-area home-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 d-flex align-items-center">
                        <div class="logo">
                            <a href="index-2"><img src="img/logo/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="basic-menu f-right">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li>
                                            <a href="index-2">HOME

                                            </a>

                                        <li>
                                            <a href="package-grid">TOURS</a>
                                        </li>

                                        <li>
                                            <a href="package-3-col">PACKAGE
                                            </a>

                                        <li>
                                            <a href="#">PAGES
                                                <i class="icofont icofont-rounded-down"></i>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="about">About</a>
                                                </li>
                                                <li>
                                                    <a href="contact">contact</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="blog-details">BLOG
                                            </a>


                                        </li>
                                        <!--login-->

                                        <?php
                                        if(Auth::user())
                                        {
                                        ?>
                                        <li>
                                            <a href="#"><?php echo Auth::user()->name; ?>
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
                                            <a href="#">LOGIN / REGISTER
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
                        <div class="mobile-menu menu-trans"></div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Area -->


		<!-- ========= Start Slider Area========= -->
        <section class="slider-area ">
            <div class="slider-wrapper">
                <div class="slider-large-active">
                    <div class="single-slider home-2" style="background: url(img/bg/bg-2.jpg);" data-overlay="6">
                        <div class="container">
                            <div class="slider-content text-center">
                                <h1>TOUR OF PAKISTAN</h1>
                                <h4>START YOUR TRIP NOW!</h4>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider home-2" style="background: url(img/bg/slider.jpg);" data-overlay="6">
                        <div class="container">
                            <div class="slider-content text-center">
                                <h1>TOUR OF PAKISTAN</h1>
                                <h4>START YOUR TRIP NOW!</h4>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider home-2" style="background: url(img/bg/bg-2.jpg);" data-overlay="6">
                        <div class="container">
                            <div class="slider-content text-center">
                                <h1>TOUR OF PAKISTAN</h1>
                                <h4>START YOUR TRIP NOW!</h4>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider home-2" style="background: url(img/bg/slider.jpg);" data-overlay="6">
                        <div class="container">
                            <div class="slider-content text-center">
                                <h1>TOUR OF PAKISTAN</h1>
                                <h4>START YOUR TRIP NOW!</h4>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider home-2" style="background: url(img/bg/bg-2.jpg);" data-overlay="6">
                        <div class="container">
                            <div class="slider-content text-center">
                                <h1>TOUR OF PAKISTAN</h1>
                                <h4>START YOUR TRIP NOW!</h4>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider home-2" style="background: url(img/bg/slider.jpg);" data-overlay="6">
                        <div class="container">
                            <div class="slider-content text-center">
                                <h1>TOUR OF PAKISTAN</h1>
                                <h4>START YOUR TRIP NOW!</h4>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider home-2" style="background: url(img/bg/bg-2.jpg);" data-overlay="6">
                        <div class="container">
                            <div class="slider-content text-center">
                                <h1>TOUR OF PAKISTAN</h1>
                                <h4>START YOUR TRIP NOW!</h4>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider home-2" style="background: url(img/bg/slider.jpg);" data-overlay="6">
                        <div class="container">
                            <div class="slider-content text-center">
                                <h1>TOUR OF PAKISTAN</h1>
                                <h4>START YOUR TRIP NOW!</h4>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider home-2" style="background: url(img/bg/slider.jpg);" data-overlay="6">
                        <div class="container">
                            <div class="slider-content text-center">
                                <h1>TOUR OF PAKISTAN</h1>
                                <h4>START YOUR TRIP NOW!</h4>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider home-2" style="background: url(img/bg/bg-2.jpg);" data-overlay="6">
                        <div class="container">
                            <div class="slider-content text-center">
                                <h1>TOUR OF PAKISTAN</h1>
                                <h4>START YOUR TRIP NOW!</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-search-form">
                    <div class="container">
                        <div class="trip-search style-2">
                            <div class="form-action clearfix">

                                <form action="/search2" method="post">
                                <?php echo e(csrf_field()); ?>

                                    <ul class="select-bar">
                                    <li class="location">
                                        <select name="location" class="location-here ">
                                            <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($value->name); ?>"><?php echo e($value->name); ?> </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </li>
                                    <li class="location">
                                            <input class="datepicker" type="text" name="departure" placeholder="Departure">
                                    </li>

                                    <li class="location">

                                            <input class="text-white" style=" border: 1px solid #e8e8e8; color: #fff; height: 41px; padding: 0 41px; font-size: 14px; width: 100%; background-color: transparent; border-color: #af9792;" name="budget" type="number" placeholder="Budget">

                                    </li>

                                    <li class="location search-width f-right text-right">
                                        <button type="submit" class="trip-btn btn-1">SEARCH NOW</button>
                                    </li>
                                </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-nav">
                <div class="slider-thumb">
                    <div class="inner-thumb">
                        <img src="img/slider/slider-thumb1.jpg" alt="">
                        <div class="slider-btn-info">
                            <h4><a href="#">Khunjerab</a></h4>
                            <a class="video-play-link" href="https://www.youtube.com/watch?v=Rk6_hdRtJOE"><i class="icofont icofont-ui-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slider-thumb">
                    <div class="inner-thumb">
                        <img src="img/slider/slider-thumb2.jpg" alt="">
                        <div class="slider-btn-info">
                            <h4><a href="#">Muree</a></h4>
                            <a class="video-play-link" href="https://www.youtube.com/watch?v=6lt2JfJdGSY"><i class="icofont icofont-ui-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slider-thumb">
                    <div class="inner-thumb">
                        <img src="img/slider/slider-thumb3.jpg" alt="">
                        <div class="slider-btn-info">
                            <h4><a href="#">Naran-kaghan</a></h4>
                            <a class="video-play-link" href="https://www.youtube.com/watch?v=6lt2JfJdGSY"><i class="icofont icofont-ui-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slider-thumb">
                    <div class="inner-thumb">
                        <img src="img/slider/slider-thumb4.jpg" alt="">
                        <div class="slider-btn-info">
                            <h4><a href="#">Skardu</a></h4>
                            <a class="video-play-link" href="https://www.youtube.com/watch?v=6lt2JfJdGSY"><i class="icofont icofont-ui-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slider-thumb">
                    <div class="inner-thumb">
                        <img src="img/slider/slider-thumb1.jpg" alt="">
                        <div class="slider-btn-info">
                            <h4><a href="#">Swat</a></h4>
                            <a class="video-play-link" href="https://www.youtube.com/watch?v=6lt2JfJdGSY"><i class="icofont icofont-ui-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slider-thumb">
                    <div class="inner-thumb">
                        <img src="img/slider/slider-thumb2.jpg" alt="">
                        <div class="slider-btn-info">
                            <h4><a href="#">Hunza</a></h4>
                            <a class="video-play-link" href="https://www.youtube.com/watch?v=6lt2JfJdGSY"><i class="icofont icofont-ui-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slider-thumb">
                    <div class="inner-thumb">
                        <img src="img/slider/slider-thumb3.jpg" alt="">
                        <div class="slider-btn-info">
                            <h4><a href="#">Neelum</a></h4>
                            <a class="video-play-link" href="https://www.youtube.com/watch?v=6lt2JfJdGSY"><i class="icofont icofont-ui-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slider-thumb">
                    <div class="inner-thumb">
                        <img src="img/slider/slider-thumb4.jpg" alt="">
                        <div class="slider-btn-info">
                            <h4><a href="#">Chitral</a></h4>
                            <a class="video-play-link" href="https://www.youtube.com/watch?v=6lt2JfJdGSY"><i class="icofont icofont-ui-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slider-thumb">
                    <div class="inner-thumb">
                        <img src="img/slider/slider-thumb1.jpg" alt="">
                        <div class="slider-btn-info">
                            <h4><a href="#">Gilgit</a></h4>
                            <a class="video-play-link" href="https://www.youtube.com/watch?v=6lt2JfJdGSY"><i class="icofont icofont-ui-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slider-thumb">
                    <div class="inner-thumb">
                        <img src="img/slider/slider-thumb2.jpg" alt="">
                        <div class="slider-btn-info">
                            <h4><a href="#">Azad Kashmir</a></h4>
                            <a class="video-play-link" href="https://www.youtube.com/watch?v=6lt2JfJdGSY"><i class="icofont icofont-ui-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Slider Area -->
        <!-- Start Home Service Area -->
        <section class="service-home pt-115 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="service-home-img">
                            <img src="img/service/service.png" alt="service-image">
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="service-home-content">
                            <h2>POPULAR SERVICE</h2>
                            <h5>ENJOY THE VIEWS OF A LIFETIME</h5>
                            <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs.</p>
                            <ul>
                                <li><i class="icofont icofont-arrow-right"></i>First Class Service</li>
                                <li><i class="icofont icofont-arrow-right"></i>City Tours</li>
                                <li><i class="icofont icofont-arrow-right"></i>Holiday & Seasonal Tours</li>
                                <li><i class="icofont icofont-arrow-right"></i>Specisl Packege Tours</li>
                                <li><i class="icofont icofont-arrow-right"></i>Cultural & Theater Tours</li>
                                <li><i class="icofont icofont-arrow-right"></i>Wild & Adventure Tours</li>
                            </ul>
                            <a class="btn-2" href="#">POINTS OF INTEREST</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- End Home Service Area -->
        <!-- Start Facts Up Area -->
        <section class="package-area home-package pt-110 pb-90" data-overlay="3">
            <div class="container">
                <div class="section-title text-center pb-45">
                    <h2 class="white">POPULAR PACKAGES</h2>
                    <h4 class="white">PAK TOURS PROVIDE</h4>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-package mb-30">
                            <div class="package-img">
                                <img src="img/package/pack-1.jpg" alt="package image">
                                <div class="package-cost">Rs.3000</div>
                            </div>
                            <h5 class="white"><span>NARAN-KAGHAN</span> - 5 Days, 4 Nights</h5>
                            <p class="white">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected.</p>
                            <a class="read-more" href="#">READ MORE <i class="icofont icofont-arrow-right"></i></a>
                        </div>
                    </div> <!-- End Single Package -->
                    <div class="col-lg-4">
                        <div class="single-package mb-30">
                            <div class="package-img">
                                <img src="img/package/pack-2.jpg" alt="package image">
                                <div class="package-cost">Rs.4000</div>
                            </div>
                            <h5 class="white"><span>CHITRAL</span> - 4 Days, 3 Nights</h5>
                            <p class="white">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected.</p>
                            <a class="read-more" href="#">READ MORE <i class="icofont icofont-arrow-right"></i></a>
                        </div>
                    </div> <!-- End Single Package -->
                    <div class="col-lg-4 ">
                        <div class="single-package mb-30">
                            <div class="package-img">
                                <img src="img/package/pack-3.jpg" alt="package image">
                                <div class="package-cost">Rs.5000</div>
                            </div>
                            <h5 class="white"><span>SWAT</span> - 3 Days, 2 Nights</h5>
                            <p class="white">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected.</p>
                            <a class="read-more" href="#">READ MORE <i class="icofont icofont-arrow-right"></i></a>
                        </div>
                    </div> <!-- End Single Package -->
                </div>
                <div class="more-package text-center">
                    <a class="btn-1 more-pack" href="#">MORE PACKAGE</a>
                </div>
            </div>
        </section>
        <!-- End Facts Up Area -->
        <!-- ========= Start Popular Place Area========= -->
        <section class="popular-place pt-110 pb-90">
            <div class="container">
                <div class="section-title text-center pb-60">
                    <h2>EXPLORE MORE POPULAR PLACE</h2>
                    <h4>WE DENOUNCE WITH RIGHTEOUS INDIGNATION.</h4>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="pp-list-item">
                            <div class="single-pp">
                                <div class="single-pp-thumb">
                                    <img src="img/package/pp-1.jpg" alt="popular image">
                                </div>
                                <div class="pp-wrapper-content">
                                    <div class="popular-pp-info">
                                        <a href="#">
                                            <h5>Gilgit valley</h5>
                                        </a>
                                        <p> 5 Days, 4 Night Tour</p>
                                        <div class="package-meta">
                                            <span>
                                                <i class="icofont icofont-ui-rating"></i>20</span>
                                            <span>
                                                <i class="far fa-heart"></i>10</span>
                                            <span>
                                                <i class="far fa-comment"></i>5</span>
                                        </div>
                                    </div>
                                    <div class="popular-p-pricing">
                                        <span>Rs.5000</span>
                                        <a class="btn-1 pp-btn" href="#">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pp-list-item">
                            <div class="single-pp">
                                <div class="single-pp-thumb">
                                    <img src="img/package/pp-2.jpg" alt="popular image">
                                </div>
                                <div class="popular-pp-info">
                                    <a href="#">
                                        <h5>Kalash valley</h5>
                                    </a>
                                    <p> 5 Days, 4 Night Tour</p>
                                    <div class="package-meta">
                                        <span>
                                            <i class="icofont icofont-ui-rating"></i>20</span>
                                        <span>
                                            <i class="far fa-heart"></i>10</span>
                                        <span>
                                            <i class="far fa-comment"></i>5</span>
                                    </div>
                                </div>
                                <div class="popular-p-pricing">
                                    <span>Rs.8000</span>
                                    <a class="btn-1 pp-btn" href="#">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="pp-list-item">
                            <div class="single-pp">
                                <div class="single-pp-thumb">
                                    <img src="img/package/pp-3.jpg" alt="popular image">
                                </div>
                                <div class="popular-pp-info">
                                    <a href="#">
                                        <h5>urak valley</h5>
                                    </a>
                                    <p> 5 Days, 4 Night Tour</p>
                                    <div class="package-meta">
                                        <span>
                                            <i class="icofont icofont-ui-rating"></i>20</span>
                                        <span>
                                            <i class="far fa-heart"></i>10</span>
                                        <span>
                                            <i class="far fa-comment"></i>5</span>
                                    </div>
                                </div>
                                <div class="popular-p-pricing">
                                    <span>Rs.11000</span>
                                    <a class="btn-1 pp-btn" href="#">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="pp-list-item">
                            <div class="single-pp">
                                <div class="single-pp-thumb">
                                    <img src="img/package/pp-4.jpg" alt="popular image">
                                </div>
                                <div class="popular-pp-info">
                                    <a href="#">
                                        <h5>Palas valley</h5>
                                    </a>
                                    <p> 5 Days, 4 Night Tour</p>
                                    <div class="package-meta">
                                        <span>
                                            <i class="icofont icofont-ui-rating"></i>20</span>
                                        <span>
                                            <i class="far fa-heart"></i>10</span>
                                        <span>
                                            <i class="far fa-comment"></i>5</span>
                                    </div>
                                </div>
                                <div class="popular-p-pricing">
                                    <span>Rs.15000</span>
                                    <a class="btn-1 pp-btn" href="#">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pp-list-item-right">
                            <div class="single-pp">
                                <div class="single-pp-thumb">
                                    <img src="img/package/pp-5.jpg" alt="popular image">
                                </div>
                                <div class="popular-pp-info">
                                    <a href="#">
                                        <h5>Neelum valey</h5>
                                    </a>
                                    <p>5 Days, 4 Night Tour</p>
                                    <div class="package-meta">
                                        <span>
                                            <i class="icofont icofont-ui-rating"></i>20</span>
                                        <span>
                                            <i class="far fa-heart"></i>10</span>
                                        <span>
                                            <i class="far fa-comment"></i>5</span>
                                    </div>
                                </div>
                                <div class="popular-p-pricing">
                                    <span>5000</span>
                                    <a class="btn-1 pp-btn" href="#">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="pp-list-item-right">
                            <div class="single-pp">
                                <div class="single-pp-thumb">
                                    <img src="img/package/pp-6.jpg" alt="popular image">
                                </div>
                                <div class="popular-pp-info">
                                    <a href="#">
                                        <h5>Kaghan valley</h5>
                                    </a>
                                    <p>5 Days, 4 Night Tour</p>
                                    <div class="package-meta">
                                        <span>
                                            <i class="icofont icofont-ui-rating"></i>20</span>
                                        <span>
                                            <i class="far fa-heart"></i>10</span>
                                        <span>
                                            <i class="far fa-comment"></i>5</span>
                                    </div>
                                </div>
                                <div class="popular-p-pricing">
                                    <span>Rs.7000</span>
                                    <a class="btn-1 pp-btn" href="#">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="pp-list-item-right">
                            <div class="single-pp">
                                <div class="single-pp-thumb">
                                    <img src="img/package/pp-7.jpg" alt="popular image">
                                </div>
                                <div class="popular-pp-info">
                                    <a href="#">
                                        <h5>Bagrot valley</h5>
                                    </a>
                                    <p>5 Days, 4 Night Tour</p>
                                    <div class="package-meta">
                                        <span>
                                            <i class="icofont icofont-ui-rating"></i>20</span>
                                        <span>
                                            <i class="far fa-heart"></i>10</span>
                                        <span>
                                            <i class="far fa-comment"></i>5</span>
                                    </div>
                                </div>
                                <div class="popular-p-pricing">
                                    <span>Rs.9000</span>
                                    <a class="btn-1 pp-btn" href="#">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="pp-list-item-right">
                            <div class="single-pp">
                                <div class="single-pp-thumb">
                                    <img src="img/package/pp-8.jpg" alt="popular image">
                                </div>
                                <div class="popular-pp-info">
                                    <a href="#">
                                        <h5>Rupal valley</h5>
                                    </a>
                                    <p> 5 Days, 4 Night Tour</p>
                                    <div class="package-meta">
                                        <span>
                                            <i class="icofont icofont-ui-rating"></i>20</span>
                                        <span>
                                            <i class="far fa-heart"></i>10</span>
                                        <span>
                                            <i class="far fa-comment"></i>5</span>
                                    </div>
                                </div>
                                <div class="popular-p-pricing">
                                    <span>Rs.12000</span>
                                    <a class="btn-1 pp-btn" href="#">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!--Tour Companies-->
        <section class="package-area home-package pt-110 pb-90" data-overlay="3">
            <div class="container">
                <div class="section-title text-center pb-45">
                    <h2 class="white">Take A Look At Our Partners</h2>
                    <h4 class="white">PAK TOURS PROVIDE</h4>
                </div>

                <div class="row">

                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4">
                        <div class="single-package mb-30">
                            <div class="package-img">
                                <img src="\TravelAgencies\Image\<?php echo e($value->Image); ?>" width="370" height="242.984" alt="package image">
                                <div class="package-cost"><!--Add Some Details If Needed --></div>
                            </div>
                            <h5 class="white"><span><?php echo e($value->CompanyName); ?></span> </h5>
                            <p class="white"><!--Company Details if added--></p>
                            <a class="read-more" href="#">READ MORE <i class="icofont icofont-arrow-right"></i></a>
                        </div>
                    </div> <!-- End Single Package -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
           
        </section>
  <?php echo e($data->links()); ?>







        <!-- ========= Start Blog Area========= -->
        <section class="blog-area pt-110">
            <div class="container">
                <div class="section-title text-center pb-80">
                    <h2>LATEST NEWS FROM BLOG</h2>
                    <h4>EXPERIENCE FROM TRAVELERS</h4>
                </div>
                <div class="section-devider pb-80">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="single-blog-post mb-30">
                                <a href="#"><img src="img/blog/blog-1.jpg" alt="blog-image"></a>
                                <div class="single-blog-content">
                                    <span class="blog-date">10 July 2017</span>
                                    <a href="#">
                                        <h4>What's Open in the Caribbean After Hurricanes Irma and Maria</h4>
                                    </a>
                                    <a class="read-more blog-btn" href="#">READ MORE
                                        <i class="icofont icofont-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-blog-post mb-30">
                                <a href="#"><img src="img/blog/blog-2.jpg" alt="blog-image"></a>
                                <div class="single-blog-content">
                                    <span class="blog-date">20 June 2017 </span>
                                    <a href="#">
                                        <h4>First New louvre of the New Year: the Seabourn museum</h4>
                                    </a>
                                    <a class="read-more blog-btn" href="#">READ MORE
                                        <i class="icofont icofont-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-blog-post mb-30">
                                <a href="#"><img src="img/blog/blog-3.jpg" alt="blog-image"></a>
                                <div class="single-blog-content">
                                    <span class="blog-date">10 May 2017 </span>
                                    <a href="#">
                                        <h4>Avalon Southeast Asia: A World of Difference site</h4>
                                    </a>
                                    <a class="read-more blog-btn" href="#">READ MORE
                                        <i class="icofont icofont-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========= Start Gallery Area========= -->

        <!-- ========= Start Footer Area========= -->

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

		<!-- JS here -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/jquery.meanmenu.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/waypoint.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
