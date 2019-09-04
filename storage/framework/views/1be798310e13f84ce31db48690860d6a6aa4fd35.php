<?php $__env->startSection('breadcrumbs'); ?>
<?php $__env->stopSection(); ?>

<!-- Панель навигации основная слева (navbar-basic-left) -->
<?php $__env->startSection('navbar-basic-left'); ?>
    <?php echo $__env->make('dashboard.admin._partials.navbar-basic-left', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Главная страница админки</h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard._layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>