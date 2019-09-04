<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
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
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('css/icofont.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>
<body id="body-top">

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

    @keyframes animatetop {
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


<div id="app">

    @if(Auth::check())
        <section class="breadcrumb-area about-page" data-overlay="5" style="background-image: url({{ asset('img/bg/about-breadcrumb.jpg')}})">
        <header class="header-area fixed-top">
            <div class="container">
                <div class="main-menu">
                    <div class="row">
                        <div class="col-lg-3 d-flex align-items-center">
                            <div class="logo">
                                <a href="index-2">
                                    <img src="{{ asset('img/logo/logo.png') }}" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="basic-menu f-right">
                                <nav id="mobile-menu">
                                    <ul>
                                        
                                        <li>
                                            <a class="text-white" href="http://localhost:8000/company">DASHBOARD</a>
                                        </li>

                                        <li>
                                            <a class="text-white" href="http://localhost:8000/Booking">BOOKING
                                            </a>

                                        </li>
                                        <li>
                                            <a class="text-white" href="http://localhost:8000/Bidding">BIDDING
                                            </a>

                                        </li>
                                        <li>
                                            <a class="text-white" href="#">TOURS
                                                <i class="icofont icofont-rounded-down"></i>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="http://localhost:8000/Tour">View Tours</a>
                                                </li>
                                                <li>
                                                    <a href="http://localhost:8000/Tour/create">Add Tours</a>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                        <!--login-->

                                        <?php
                                        if(Auth::user())
                                        {
                                        ?>
                                        <li>
                                            <a class="text-white" href="#"> 
                                                <i class="fa fa-fw fa-user"></i>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a  href="#">Hi, {{ Auth::user()->CompanyName}}!</a>
                                                </li>
                                                <li>
                                                    <a href="/company">DashBoard</a>
                                                </li>
                                                <li style="height= 70%;">
                                                    <a href="/editpassword1">Change </br> Password</a>
                                                </li>
                                                <li>
                                                    <a href="/C_Logout">Logout</a>
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
                            <h3>COMPANY</h3>
                            <ul class="breadcrumb">
                                
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container-fluid">
            <div class="row wrapper"  style="min-height: calc(100vh - 50px);">
                
                <main class="col bg-faded py-3">

                    @include('partial.errors')

                    @include('partial.success')

                    <main class="py-4">
                        @yield('content')
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
@endif

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- Bootstrap core JavaScript-->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<!-- Page level plugin JavaScript-->
<script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.js') }}"></script>
<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin.min.js') }}"></script>
<!-- Custom scripts for this page-->
<script src="{{ asset('js/sb-admin-datatables.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-charts.min.js') }}"></script>
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
    function confirmdelete()
    {
        var x = confirm("Are you sure you want to delete?");
        if (x)
          return true;
        else
        return false;
    }
    function confirmedit()
    {
        var x = confirm("Are you sure you want to edit?");
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
