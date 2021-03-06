<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title><?php echo e($title); ?></title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?php echo e(asset('dashboard/css/bootstrap.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('dashboard/css/font-awesome.css')); ?>" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="<?php echo e(asset('dashboard/css/ace-fonts.css')); ?>" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo e(asset('dashboard/css/ace.css')); ?>" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php echo e(asset('dashboard/css/ace-part2.css')); ?>" class="ace-main-stylesheet" />
    <![endif]-->

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php echo e(asset('dashboard/css/ace-ie.css')); ?>" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="<?php echo e(asset('dashboard/js/ace-extra.js')); ?>"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="<?php echo e(asset('dashboard/js/html5shiv.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/js/respond.js')); ?>"></script>
    <![endif]-->
</head>