<?php $__env->startSection('content'); ?>


    <div class="container-fluid col-lg-10 col-sm-10 col-md-10">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Company </a>/
                <a href="#">Tour </a>
            </li>
            <li class="breadcrumb-item active">View</li>
        </ol>


      <div class="container">
        <div >
          <center> <a href="http://localhost:8000/Tour/create" class="btn btn-danger float-right"> <i class="fa fa-plus" aria-hidden="true"></i></a>
          </center>
        </div>
        <br>
        <table class="table table-striped">
          <thead>
          <tr>
            <th><div style="width: 10px;">ID</div></th>
            <th><div style="width: 30px;">Name</div></th>
            <th><div style="width: 30px;">Days</div></th>
            <th><div style="width: 40px;">Company Id</div></th>
            <th><div style="width: 30px;">Details</div></th>
            <th><div style="width: 35px;">Budget</div></th>
            <th>Departure</th>
            <th><div style="width: 45px;">Seats Available</div></th>
            <th><div style="width: 45px;">Registered Seats</div></th>
            <th>Image</th>
            <th colspan="2">Action</th>
          </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = $tour; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($post['id']); ?></td>
              <td><?php echo e($post['name']); ?></td>
              <td><?php echo e($post['days']); ?></td>
              <td><?php echo e($post['CompanyId']); ?></td>
              <td><?php echo e($post['Details']); ?></td>
              <td><?php echo e($post['Budget']); ?></td>
              <td><?php echo e($post['departure']); ?></td>
              <td><?php echo e($post['NSA']); ?></td>
              <td><?php echo e($post['NRP']); ?></td>
              <td> <img src="/Tours/Image/<?php echo e($post['Image']); ?>" width="75" height="75"> </td>
              <td><a href="<?php echo e(action('TourController@edit', $post['id'])); ?>" class="btn btn-warning">Edit</a></td>
              <td>
                <form action="<?php echo e(action('TourController@destroy', $post['id'])); ?>" method="post">
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
<?php echo $__env->make('layouts.companyapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>