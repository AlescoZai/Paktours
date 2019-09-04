<?php $__env->startSection('content'); ?>


    <div class="container-fluid col-lg-12 col-sm-12 col-md-12">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home </a>/
                <a href="#">Company </a>
            </li>
            <li class="breadcrumb-item active">Create</li>
        </ol>

        <div class="container col-lg-11 col-sm-11 col-md-11">

            <br>
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">



                    <center><h3>Add New Travel Agency</h3></center>
                </div>
                <div class="col-md-3">
                </div>
            </div>
            <br>


            <form method="post" action="<?php echo e(url('Tour')); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="lgFormGroupInput" placeholder="title" name="name">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Departure</label>
                    <div class="col-md-10">
                        <input type="date" class="form-control" id="lgFormGroupInput" placeholder="title" name="departure">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Days</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="lgFormGroupInput" placeholder="title" name="days">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Details</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="lgFormGroupInput" placeholder="title" name="Details">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Budget</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="lgFormGroupInput" placeholder="title" name="Budget">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">No of Available Seats</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="lgFormGroupInput" placeholder="title" name="NSA">
                    </div>
                </div>
				
				
                <div class="form-group row">
                    <label for="smFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Image</label>
                    <div class="col-md-10">
                        <input type="file" name="Image" accept="image/*">
                    </div>
                </div>
                <div class="form-group row  float-right">
                    <div class="col-md-12">
                        <center> <button type="submit" class="btn btn-primary">Submit</button></center>
                    </div>

                </div>
            </form>
            <br>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.companyapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>