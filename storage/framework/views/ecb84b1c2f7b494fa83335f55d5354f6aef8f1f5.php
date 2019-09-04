<?php $__env->startSection('content'); ?>
  <div class="container-fluid col-lg-10 col-sm-10 col-md-10">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Company </a>

      </li>
      <li class="breadcrumb-item active">Bookings</li>
    </ol>


      <div class="container">

        <table class="table table-striped">
          <thead>
          <tr>
            <th>User Name</th>
            <th>Phone Number</th>
            <th>ID</th>
            <th>Name</th>
            <th>Days</th>
            <th>Details</th>
            <th>Budget</th>
            <th>Departure</th>
            <th>Image</th>
          </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($post['uname']); ?></td>
              <td><?php echo e($post['phone_no']); ?></td>
              <td><?php echo e($post['id']); ?></td>
              <td><?php echo e($post['name']); ?></td>
              <td><?php echo e($post['days']); ?></td>
              <td><?php echo e($post['Details']); ?></td>
              <td><?php echo e($post['Budget']); ?></td>
              <td><?php echo e($post['departure']); ?></td>
              <td> <img src="/Tours/Image/<?php echo e($post['Image']); ?>" width="75" height="75"> </td>

            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
  </div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.companyapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>