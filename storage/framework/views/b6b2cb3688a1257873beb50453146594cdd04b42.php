<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-xs-12">
            <?php if(Session::has('message')): ?>
                <h2><?php echo Session::get('message'); ?></h2>
            <?php endif; ?>

            <div class="clearfix">
                <div class="pull-right tableTools-container"></div>
            </div>
            <div class="table-header">
                <?php echo e(trans('country.all')); ?>

            </div>

            <!-- div.table-responsive -->

            <!-- div.dataTables_borderWrap -->
            <div>

                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th><?php echo e(trans('country.named')); ?></th>
                        <th><?php echo e(trans('country.alias')); ?></th>
                        <th><?php echo e(trans('dashboard.action')); ?></th>
                    </tr>
                    </thead>

                    <tbody>

                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($country->id); ?></td>
                            <td><a href="<?php echo e(route('Admin.Country.Edit', $country->id)); ?>"> <?php echo e($country->name); ?> </a></td>
                            <td><?php echo e($country->alias); ?></td>

                            <td>
                                <form action="<?php echo e(route('Admin.Country.Delete', $country->id)); ?>" name="delete" method="post">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="submit" name="delete" value="<?php echo e(trans('country.delete')); ?>">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
        </div>

        <div>
            <a href="<?php echo e(route('Admin.Country.Add')); ?>"><input type="button" value="<?php echo e(trans('country.add')); ?>"></a>
        </div>


    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.admin.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>