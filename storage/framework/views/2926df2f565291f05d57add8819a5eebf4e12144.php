<?php $__env->startSection('content'); ?>


 <div class="container-fluid col-lg-11 col-sm-11 col-md-11">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Home </a>

      </li>
      <li class="breadcrumb-item active">Travels</li>
    </ol>


      
        <div >
          <center> <a href="Travel/create" class="btn btn-danger float-right"> <i class="fa fa-plus" aria-hidden="true"></i></a>
          </center>
        </div>
        <br>
        <table class="table table-striped">
          <thead>
          <tr>
            <th>ID</th>
            <th>CompanyName</th>
            <th>Email</th>
            <!--<th>Password</th>-->
            <th>Image</th>
              <th colspan="2">Action</th>
          </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = $travel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($post['id']); ?></td>
              <td><?php echo e($post['CompanyName']); ?></td>
              <td><?php echo e($post['email']); ?></td>
              <!--<td><?php echo e($post['password']); ?></td>-->
              <td> <img src="/TravelAgencies/Image/<?php echo e($post['Image']); ?>" width="75" height="75"> </td>
              <td><a href="<?php echo e(action('TravelController@edit', $post['id'])); ?>" class="btn btn-warning">Edit</a></td>
              <td>
                <form action="<?php echo e(action('TravelController@destroy', $post['id'])); ?>" method="post">
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>