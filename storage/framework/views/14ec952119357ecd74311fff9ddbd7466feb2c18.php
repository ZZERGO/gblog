<?php $__env->startSection('content'); ?>
    <h1>Редактирование пользователя по имени: <?php echo e($user->name); ?></h1>

    <form name="edit" action="<?php echo e(route('Admin.Users.Edit', $user->id)); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <input type="text" name="name" value="<?php echo e($user->name); ?>"><br>
        <input type="email" name="email" value="<?php echo e($user->email); ?>"><br>
        <input type="password" name="password" value="<?php echo e($user->password); ?>"><br>

        <a href="<?php echo e(route('Admin.Users.List')); ?>"> <input type="button" value="<?php echo e(trans('dashboard.cancel')); ?>"></a>
        <input type="submit" value="Сохранить">
    </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.admin.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>