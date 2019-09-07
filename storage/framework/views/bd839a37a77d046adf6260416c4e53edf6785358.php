<?php $__env->startSection('content'); ?>

    <h1><?php echo e(trans('categories.Editing')); ?></h1>
    <form action="<?php echo e(route('Admin.Category.Update', $category->id)); ?>" method="post">
        <?php echo e(csrf_field()); ?>


        <?php echo e(trans('categories.Name')); ?>: <br>
        <input type="text" name="name" id="name" required="required" value="<?php echo e($category->name); ?>"/>

        <br><br>
        <input type="submit" value="<?php echo e(trans('dashboard.save')); ?>">
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.admin.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>