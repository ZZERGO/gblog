<?php $__env->startSection('content'); ?>

    <h1>Список пользователей с гражданством: <?php echo e($country->name); ?> </h1>

    <ul>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php echo e(route('Admin.Users.Edit', $user->id)); ?>" title="<?php echo e(trans('dashboard.edit')); ?>"> <?php echo e($user->name); ?> </a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <form action="<?php echo e(route('Admin.Users.Add')); ?>" name="add" method="get">
        <?php echo e(csrf_field()); ?>

        <a href="<?php echo e(route('Admin.Users.List')); ?>"><input type="button" value="<?php echo e(trans('pagination.previous')); ?>"></a>
        <a href="<?php echo e(route('Admin.Users.Add', ['country_id' => $country->id])); ?>"> <input type="button" value="<?php echo e(trans('dashboard.add')); ?>"> </a>
    </form>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.admin.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>