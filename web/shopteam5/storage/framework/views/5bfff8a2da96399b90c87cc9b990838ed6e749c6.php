<?php if(Session::has('error')): ?>
	<p class="alert alert-danger"><?php echo e(Session::get('error')); ?></p>
<?php endif; ?>

<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<p class="alert alert-danger"><?php echo e($error); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php if(Session::has('signinok')): ?>
	<p class="alert alert-danger"><?php echo e(Session::get('signinok')); ?></p>
<?php endif; ?>


<?php if(Session::has('loginfail')): ?>
	<p class="alert alert-danger"><?php echo e(Session::get('loginfail')); ?></p>
<?php endif; ?>