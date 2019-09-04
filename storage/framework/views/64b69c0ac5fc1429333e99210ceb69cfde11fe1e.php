<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>WayToGO</title>
    <!-- Bootstrap core CSS-->
    <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?php echo e(asset('vendor/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.css')); ?>" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?php echo e(asset('css/sb-admin.css')); ?>" rel="stylesheet">

    <style>

    </style>

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="#">waytogo</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="http://127.0.0.1:8000/Company">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="http://127.0.0.1:8000/viewbooking">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">Booking</span>
                </a>
            </li>



            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-file"></i>
                    <span class="nav-link-text"> Tours</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                    <li>
                        <a href="http://localhost:8000/Company/create">Add Tours</a>
                    </li>
                    <li>
                        <a href="http://localhost:8000/Company">view Tours</a>
                    </li>

                </ul>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">



            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home </a>/
                <a href="#">Company </a>
            </li>
            <li class="breadcrumb-item active">Create</li>
        </ol>

        <div class="container" style="background-color:#D0D3D4">

            <br>
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">



                    <center><h3 style="background-color:#ECF0F1" >Add New Travel Agency</h3></center>
                </div>
                <div class="col-md-3">
                </div>
            </div>
            <br>




            <form method="post" action="<?php echo e(url('Company')); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Details</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="Details">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Budget</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="Budget">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">No of Available Seats</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="NSA">
                    </div>
                </div>
				
				
				
				
				
				
				
				
				
				
				
				
                <div class="form-group row">
                    <label for="smFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Image</label>
                    <div class="col-md-10">
                        <input type="file" name="Image" accept="image/*">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <center> <button type="submit" class="btn btn-primary">Submit</button></center>
                    </div>

                </div>
            </form>
            <br>
        </div>






        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small></small>
                </div>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
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
                        <a class="btn btn-primary" href="C_Logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
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
    </div>
</body>

</html>
