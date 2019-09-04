<?php $__env->startSection('content'); ?>


        <div class="container-fluid col-lg-12 col-sm-12 col-md-12">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Home </a>

      </li>
      <li class="breadcrumb-item active">User</li>
    </ol>


      <div class="container">
        <div >
          <center> <a href="User/create" class="btn btn-danger float-right"> <i class="fa fa-plus" aria-hidden="true"></i></a>
          </center>
        </div>
        <br>
        <table class="table table-striped">
          <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
              <th colspan="2">Action</th>
          </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($post['id']); ?></td>
              <td><?php echo e($post['name']); ?></td>
              <td><?php echo e($post['email']); ?></td>
              <td><?php echo e($post['phone_no']); ?></td>
              <td><a href="<?php echo e(action('UserController@edit', $post['id'])); ?>" class="btn btn-warning">Edit</a></td>
              <td>
                <form action="<?php echo e(action('UserController@destroy', $post['id'])); ?>" method="post">
                  <?php echo e(csrf_field()); ?>

                  <input name="_method" type="hidden" value="DELETE">
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>