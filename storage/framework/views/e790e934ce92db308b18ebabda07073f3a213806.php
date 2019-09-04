<?php $__env->startSection('content'); ?>


    <div class="container-fluid col-lg-12 col-sm-12 col-md-12">
        <!-- Breadcrumbs-->


        <div class="container col-lg-11 col-sm-11 col-md-11">

            <br>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>User Name</th>
                    <th>No Of Seats</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Days</th>
                    <th><div style="width: 30px;">Details</div></th>
                    <th>Budget</th>
                    <th>Departure</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($post['uname']); ?></td>
                        <td><?php echo e($post['seats']); ?></td>
                        <td><?php echo e($post['id']); ?></td>
                        <td><?php echo e($post['name']); ?></td>
                        <td><?php echo e($post['days']); ?></td>
                        <td><?php echo e($post['Details']); ?></td>
                        <td><?php echo e($post['Budget']); ?></td>
                        <td><?php echo e($post['departure']); ?></td>
                        <td> <img src="/Tours/Image/<?php echo e($post['Image']); ?>" width="75" height="75"> </td>
                        <td>
                            <form action="<?php echo e(action('BookController@destroy', $post['id'])); ?>" method="get">
                                <?php echo e(csrf_field()); ?>

                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger" type="submit" onclick="return confirmcancel();">Cancel Booking</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.userapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>