<div role="main" class="main">

<?php $__env->startSection('header-banner'); ?>

        <!-- ДОПОЛНИТЕЛЬНЫЙ БЛОК ПОСЛЕ НАВИГАЦИИ -->
            <div class="home-intro" id="home-intro">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <p>
                                The fastest way to grow your business with the leader in <em>Technology</em>
                                <span>Check out our options and features included.</span>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <div class="get-started">
                                <a href="#" class="btn btn-lg btn-primary">Get Started Now!</a>
                                <div class="learn-more">or <a href="index.html">learn more.</a></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('page-header'); ?>
        <section class="page-header page-header-color page-header-primary page-header-more-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Header Color <span>This is a subtitle example.</span></h1>
                        <ul class="breadcrumb breadcrumb-valign-mid">
                            <li><a href="#">Features</a></li>
                            <li class="active">Header Color</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    <?php echo $__env->yieldSection(); ?>

    <?php echo $__env->yieldContent('content'); ?>

</div>