<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
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
        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/nice-select.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/fontawesome-all.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/meanmenu.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/slick.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/icofont.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/jquery-ui.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/default.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>">
    </head>
    <style>
        ::placeholder {
            color: white;
            opacity: 1; /* Firefox */
        }

    </style>
<body>
    <div id="app">
        <header class="header-area home-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 d-flex align-items-center">
                        <div class="logo">
                            <a href="http://localhost:8000/index-2"><img src="<?php echo e(asset('img/logo/logo.png')); ?>" alt="logo"></a>
                        </div>
                    </div>
                    

                <div class="col-lg-9">
                    <div class="basic-menu f-right">
                        <nav id="mobile-menu">
                            <ul>
                                <li>
                                    <a href="http://localhost:8000/index-2">HOME

                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            </div>
        </header>
        
        <section class="slider-area ">
            
            <div class="slider-wrapper">
                <div class="slider-large-active">
                    <div class="single-slider home-2" style="background: url(<?php echo e(asset('/img/bg/slider.jpg')); ?>);" data-overlay="6">

                    </div>
                </div>
                <div class="row">
                    <div class="slider-search-form">
                        <div>
                            <?php echo $__env->yieldContent('content'); ?>
                        </div>
                    </div>
                </div>
            </div>

            
        </section>


    </div>

    <!-- JS here -->
        <script src="<?php echo e(asset('js/vendor/modernizr-3.5.0.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/vendor/jquery-1.12.4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/isotope.pkgd.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/jquery.nice-select.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/slick.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/jquery.meanmenu.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/ajax-form.js')); ?>"></script>
        <script src="<?php echo e(asset('js/jquery-ui.js')); ?>"></script>
        <script src="<?php echo e(asset('js/waypoint.js')); ?>"></script>
        <script src="<?php echo e(asset('js/jquery.counterup.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/imagesloaded.pkgd.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/jquery.magnific-popup.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/plugins.js')); ?>"></script>
        <script src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>
</html>
