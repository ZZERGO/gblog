<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Porto - Responsive HTML5 Template 4.3.1</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('img/favicon.ico')); ?>" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo e(asset('img/apple-touch-icon.png')); ?>">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/font-awesome/css/font-awesome.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/simple-line-icons/css/simple-line-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/owl.carousel/assets/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/owl.carousel/assets/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/magnific-popup/magnific-popup.css')); ?>">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/theme.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/theme-elements.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/theme-blog.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/theme-shop.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/theme-animate.css')); ?>">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/rs-plugin/css/settings.css')); ?>" media="screen">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/rs-plugin/css/layers.css')); ?>" media="screen">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/rs-plugin/css/navigation.css')); ?>" media="screen">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/circle-flip-slideshow/css/component.css')); ?>" media="screen">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/skins/default.css')); ?>">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">

    <!-- Head Libs -->
    <script src="<?php echo e(asset('vendor/modernizr/modernizr.js')); ?>"></script>

</head>
<body>

<?php echo $__env->make('geops._layouts.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
