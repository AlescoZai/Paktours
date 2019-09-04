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

    <div class="container">
      <form method="post" action="<?php echo e(route('User.update', [$user->id])); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PATCH'); ?>
        <div container-fluid col-lg-6 col-sm-8 col-md-6>
        <div class="form-group row">

          <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Name</label>
          <div class="col-md-10">
            <input type="text" class="form-control" id="lgFormGroupInput" placeholder="title" name="name"
            value="<?php echo e($user->name); ?>">
          </div>
        </div>
        <div class="form-group row">

          <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Email</label>
          <div class="col-md-10">
            <input type="text" class="form-control" id="lgFormGroupInput" placeholder="title" name="email"
            value="<?php echo e($user->email); ?>">
          </div>
        </div>


          <div class="form-group row">

            <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Phone Number</label>
            <div class="col-md-10">
              <input type="number" class="form-control" id="lgFormGroupInput" placeholder="title" name="phone_no"
              value="<?php echo e($user->phone_no); ?>">
            </div>
          </div>


        <div class="form-group row float-right">
          <div class="col-md-2"></div>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
      </form>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>