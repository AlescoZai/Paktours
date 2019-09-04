<?php if(session()->has('message')): ?>
    <div class="alert alert-dismissable alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
        <?php echo e(session()->get('message')); ?>

    </div>
<?php endif; ?>