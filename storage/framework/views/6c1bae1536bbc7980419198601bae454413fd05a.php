<?php $__env->startSection('content'); ?>


        <div class="container-fluid col-lg-12 col-sm-12 col-md-12">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Home </a>/
        <a href="#">Travel </a>
      </li>
      <li class="breadcrumb-item active">Create</li>
    </ol>
    <!-- edit.blade.php -->

    <div class="container" style="width: 50%;">
      <form method="post" action="updatepassword">
        <?php echo csrf_field(); ?>
       
        <div container-fluid col-lg-6 col-sm-8 col-md-6>
        <div class="form-group row">

          <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Password</label>
          <div class="col-md-10">
            <input type="text" class="form-control" id="lgFormGroupInput" placeholder="Password" name="password"
            value="">
          </div>
        </div>
          <div class="form-group row  float-right">
          <div class="col-md-2"></div>
          <button type="submit" class="btn btn-danger" onclick="return confirmupdate()">Update</button>
        </div>
      </div>
      </form>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.userapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>