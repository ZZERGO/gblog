<?php $__env->startSection('content'); ?>
    <h1>Добавление пользователя</h1>

    <?php if(Session::has('message')): ?>
        <h2><?php echo Session::get('message'); ?></h2>
    <?php endif; ?>

    <form name="register" action="<?php echo e(route('Admin.Users.Add')); ?>" method="post">
        <?php echo e(csrf_field()); ?>





    </form>

    <form action="<?php echo e(route('Admin.Users.Add')); ?>" method="post" name="register">
        <?php echo e(csrf_field()); ?>

        <table>
            <tr>
                <td> <?php echo e(trans('users.displayName')); ?>: </td>
                <td><input type="text" name="name" id="name" placeholder="<?php echo e(trans('users.login')); ?>" required="required" /></td>
            </tr>

            <tr>
                <td> <?php echo e(trans('users.firstName')); ?>: </td>
                <td><input type="text" name="first_name" required="required" /></td>
            </tr>

            <tr>
                <td> <?php echo e(trans('users.middleName')); ?>: </td>
                <td><input type="text" name="middle_name" /></td>
            </tr>

            <tr>
                <td> <?php echo e(trans('users.lastName')); ?>: </td>
                <td><input type="text" name="last_name" /></td>
            </tr>

            <tr>
                <td> <?php echo e(trans('users.mobilePhone')); ?>: </td>
                <td><input type="text" name="phone_mobile" /></td>
            </tr>

            <tr>
                <td> <?php echo e(trans('users.birthday')); ?>: </td>
                <td><input type="date" name="birthday"></td>
            </tr>

            <tr>
                <td> <?php echo e(trans('users.country')); ?>: </td>
                <td>
                    <select name="country_id">
                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($country->id); ?>"> <?php echo e($country->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td> <?php echo e(trans('auth.E-MailAddress')); ?>: </td>
                <td><input type="email" name="email" id="email" placeholder="<?php echo e(trans('auth.E-MailAddress')); ?>" required="required"></td>
            </tr>

            <tr>
                <td> <?php echo e(trans('auth.Password')); ?>: </td>
                <td><input type="password" name="password" id="password" placeholder="<?php echo e(trans('auth.Password')); ?>" required="required" /></td>
            </tr>

            <tr>
                <td colspan="2"> <input type="submit" value="Сохранить"></td>
            </tr>

        </table>
    </form>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.admin.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>