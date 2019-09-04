<div class="body">
    <header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
        <div class="header-body">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-logo">
                            <a href="<?php echo e(route('Site.Home')); ?>">
                                <img alt="Porto" width="174" height="104" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="<?php echo e(asset('img/logo.png')); ?>">
                            </a>
                        </div>
                    </div>
                    <div class="header-column">
                        <?php echo $__env->make(env('THEME') . '._layouts.partials.header-nav-top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make(env('THEME') . '._layouts.partials.header-nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </header>