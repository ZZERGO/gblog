<?php $__env->startSection('breadcrumbs'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Контент</h1>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard._layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>