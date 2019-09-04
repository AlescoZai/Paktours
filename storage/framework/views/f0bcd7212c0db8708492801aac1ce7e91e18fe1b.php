<?php $__env->startSection('content'); ?>


    <div class="container-fluid col-lg-12 col-sm-12 col-md-12">        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="http://localhost:8000/admin">Home </a>/
                <a href="http://localhost:8000/User">User </a>
            </li>
            <li class="breadcrumb-item active">Create</li>
        </ol>

        <div class="container">

            <br>
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">



                    <center><h3>Add New User</h3></center>
                </div>
                <div class="col-md-3">
                </div>
            </div>
            <br>




            <form method="post" action="<?php echo e(url('User')); ?>">
                <?php echo e(csrf_field()); ?>


                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="lgFormGroupInput" placeholder="" name="name">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Email</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="lgFormGroupInput" placeholder="" name="email">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Phone Number</label>
                    <div class="col-md-10">
                        <input type="number" class="form-control" id="lgFormGroupInput" placeholder="" name="phone">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Password</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="lgFormGroupInput" placeholder="" name="password">
                    </div>
                </div>

                <div class="form-group row float-right">
                    <div class="col-md-12">
                        <center> <button type="submit" class="btn btn-primary">Submit</button></center>
                    </div>

                </div>
            </form>
            <br>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>