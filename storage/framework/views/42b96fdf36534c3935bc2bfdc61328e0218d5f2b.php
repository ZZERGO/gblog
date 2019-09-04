<?php $__env->startSection('page-header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-3">
                <div class="featured-boxes">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="featured-box featured-box-primary align-left mt-xlg">
                                <div class="box-content">
                                    <h4 class="heading-primary text-uppercase mb-md"><?php echo e(trans('auth.SignInData')); ?></h4>
                                    <form action="<?php echo e(route('login')); ?>" method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label><?php echo e(trans('auth.E-MailAddress')); ?></label>
                                                    <input id="email" name="email" type="email" value="<?php echo e(old('email')); ?>" class="form-control input-lg" required>
                                                    <?php if($errors->has('email')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <a class="pull-right" href="<?php echo e(route('password.request')); ?>"><?php echo e(trans('auth.ForgotPassword')); ?></a>
                                                    <label><?php echo e(trans('auth.Password')); ?></label>
                                                    <input  id="password" name="password" type="password"  value="" class="form-control input-lg" required>

                                                    <?php if($errors->has('password')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <span class="remember-box checkbox">
                                                    <label for="rememberme">
                                                        <input type="checkbox" id="rememberme" name="rememberme" <?php echo e(old('rememberme') ? 'checked' : ''); ?>><?php echo e(trans('auth.RememberMe')); ?>

                                                    </label>
                                                </span>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="submit" value="<?php echo e(trans('auth.login')); ?>" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(env('THEME') . '._layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>