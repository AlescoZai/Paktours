<?php $__env->startSection('content'); ?>


    <div class="container-fluid col-lg-10 col-sm-10 col-md-10">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Company </a>/
                <a href="Contact">Messages </a>
            </li>
            <li class="breadcrumb-item active">View</li>
        </ol>


      <div class="container">

        <br>
        <table class="table table-striped">
          <thead>
          <tr>
            <th><div style="width: 10px;">ID</div></th>
            <th><div style="width: 30px;">User Name</div></th>
            <th><div style="width: 30px;">First Name</div></th>
            <th><div style="width: 25px;">Last Name</div></th>
            <th><div style="width: 40px;">Email</div></th>
            <th><div style="width: 25px;">Phone</div></th>
            <th><div style="width: 35px;">Subject</div></th>

            <th><div style="width: 45px;">Message</div></th>

            <th colspan="2">Action</th>
          </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($post['id']); ?></td>
              <td><?php echo e($post['uname']); ?></td>
              <td><?php echo e($post['name']); ?></td>
              <td><?php echo e($post['last_name']); ?></td>
              <td><?php echo e($post['email']); ?></td>
              <td><?php echo e($post['phone']); ?></td>
              <td><?php echo e($post['subject']); ?></td>
              <td><?php echo e($post['message']); ?></td>


              <td>
                <form action="<?php echo e(action('TourController@destroy', $post['id'])); ?>" method="post">
                  <?php echo e(csrf_field()); ?>

                  <input name="_method" type="hidden" value="DELETE">
                  <button class="btn btn-danger" type="submit" onclick="return confirmdelete()">Delete</button>
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