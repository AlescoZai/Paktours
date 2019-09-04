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
<body id="body-top">
<div id="app">

    
        <section class="breadcrumb-area about-page" data-overlay="5" style="background-image: url(<?php echo e(asset('img/bg/about-breadcrumb.jpg')); ?>)">
        <header class="header-area fixed-top">
            <div class="container">
                <div class="main-menu">
                    <div class="row">
                        <div class="col-lg-3 d-flex align-items-center">
                            <div class="logo">
                                <a href="index-2">
                                    <img src="<?php echo e(asset('img/logo/logo.png')); ?>" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="basic-menu f-right">
                                <nav id="mobile-menu" class="text-white">
                                    <ul>
                                        <li>
                                            <a style="color: white;" href="../index-2">HOME

                                            </a>

                                        <li>
                                            <a style="color: white;" href="../package-grid">TOURS</a>
                                        </li>

                                        <li>
                                            <a style="color: white;" href="../package-3-col">PACKAGE
                                            </a>

                                        <li>
                                            <a style="color: white;" href="#">PAGES
                                                <i class="icofont icofont-rounded-down"></i>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="../about">About</a>
                                                </li>
                                                <li>
                                                    <a href="../contact">contact</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a style="color: white;" href="../blog-details">BLOG
                                            </a>


                                        </li>
                                        <!--login-->

                                        <?php
                                        if(Auth::user())
                                        {
                                        ?>
                                        <li>
                                            <a style="color: white;" href="#"><?php echo Auth::user()->name; ?>
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
                                            <a style="color: white;" href="#">LOGIN / REGISTER
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
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container-fluid">
            <div class="row wrapper"  style="min-height: calc(100vh - 50px);">
                
                <main class="col bg-faded py-3">

                    <?php echo $__env->make('partial.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <?php echo $__env->make('partial.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <main class="py-4">
                        <?php echo $__env->yieldContent('content'); ?>
                    </main>

                </main>

                <!-- Scroll to Top Button-->
                <!--<a class="scroll-to-top rounded" href="#page-top">
                    <i class="fa fa-angle-up"></i>-->
                </a>
                <!-- Logout Modal-->

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Logout!</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>

                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="http://127.0.0.1:8000/Logout">Logout</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#wrapper -->


        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Paktours 2018</span>
                </div>
            </div>
        </footer>
</div>


<!-- Scripts -->
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo e(asset('vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
<!-- Page level plugin JavaScript-->
<script src="<?php echo e(asset('vendor/chart.js/Chart.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/datatables/jquery.dataTables.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.js')); ?>"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo e(asset('js/sb-admin.min.js')); ?>"></script>
<!-- Custom scripts for this page-->
<script src="<?php echo e(asset('js/sb-admin-datatables.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/sb-admin-charts.min.js')); ?>"></script>

<script>
            $(document).ready(function(){
              $(window).scroll(function() { // check if scroll event happened
                if ($(document).scrollTop() > 4) { // check if user scrolled more than 50 from top of the browser window
                  $(".basic-menu").css("visibility", "hidden");
                  $(".logo").css("visibility", "hidden");
                   // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
                } else {
                  $(".basic-menu").css("visibility", "visible");
                  $(".logo").css("visibility", "visible");
                   // if not, change it back to transparent
                }
              });
            });
</script>

<script>
    function confirmcancel()
      {
        var x = confirm("Are you sure you want to cancel this booking?");
        if (x)
          return true;
        else
        return false;
      }
      function confirmupdate()
      {
        var x = confirm("Are you sure you want to update the Password?");
        if (x)
          return true;
        else
        return false;
      }
</script>


</body>
</html>
