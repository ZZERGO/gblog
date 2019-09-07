<?php $__env->startSection('content'); ?>

    <h1>Редактирование страны по имени: <?php echo e($country->name); ?></h1>

    <form name="edit" action="<?php echo e(route('Admin.Country.Edit', $country->id)); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <table>
            <tr>
                <td><?php echo e(trans('country.named')); ?></td>
                <td><input type="text" name="name" value="<?php echo e($country->name); ?>"><br></td>
            </tr>
            <tr>
                <td><?php echo e(trans('country.alias')); ?></td>
                <td><input type="text" name="alias" value="<?php echo e($country->alias); ?>"><br></td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="Сохранить">
                </td>
            </tr>
        </table>


    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.admin.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>