<?php $__env->startSection('content'); ?>


    <div class="container-fluid col-lg-10 col-sm-10 col-md-10">
        <!-- Breadcrumbs-->
        <ol style="opacity: 0.5; " class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Company</a>
            </li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        
        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-life-ring"></i>
                        </div>
                        <div class="mr-5">11 Added Tours!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="Tour">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-comments"></i>
                        </div>
                        <div class="mr-5">12 Bookings!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="Booking">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-user"></i>
                  </div>
                  <div class="mr-5">2 Total Bidding!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="Bidding">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>

          </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.companyapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>