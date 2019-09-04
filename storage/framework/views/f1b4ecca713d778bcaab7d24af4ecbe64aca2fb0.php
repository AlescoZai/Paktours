<?php $__env->startSection('content'); ?>


        <div class="container-fluid col-lg-12 col-sm-12 col-md-12">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                
                <li class="breadcrumb-item active">Admin Dashboard</li>
            </ol>
            <!-- Icon Cards-->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-comments"></i>
                            </div>
                            <div class="mr-5">1 Added Travel Agencies</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="Travel">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-book"></i>
                            </div>
                            <div class="mr-5">11 Added Tours</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="viewtours">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-success o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-user "></i>
                            </div>
                            <div class="mr-5">123 Total Users!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-support"></i>
                            </div>
                            <div class="mr-5">13 Bookings!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="viewbookings">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Area Chart Example-->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>