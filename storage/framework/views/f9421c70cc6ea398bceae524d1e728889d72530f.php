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
      <form method="post" action="<?php echo e(route('Travel.update', [$travel->id])); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PATCH'); ?>
        <div class="form-group row">

          <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">CompanyName</label>
          <div class="col-md-10">
            <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="CompanyName" value="<?php echo e($travel->CompanyName); ?>">
          </div>
        </div>
        <div class="form-group row">

          <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Email</label>
          <div class="col-md-10">
            <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="email" value="<?php echo e($travel->email); ?>">
          </div>
        </div>

        <div class="form-group row">
          <div class="col-md-2"></div>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>