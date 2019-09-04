<?php $__env->startSection('content'); ?>


    <div class="container-fluid col-lg-10 col-sm-10 col-md-10">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Company </a>/
        <a href="#">Tour </a>
      </li>
      <li class="breadcrumb-item active">Edit</li>
    </ol>
    <!-- edit.blade.php -->

    <div class="container col-lg-6 col-sm-6 col-md-6">
      <form method="post" action="<?php echo e(action('TourController@update', $id)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PATCH'); ?>
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
          <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Image</label>
          <div class="col-sm-10">
            <input type="file" name="Image" accept="image/*">
          </div>
        </div>
        <div class="form-group row  float-right">
          <div class="col-md-2"></div>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.companyapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>