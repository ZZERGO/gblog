<?php $__env->startSection('content'); ?>

    <h1><?php echo e(trans('categories.List')); ?></h1>

    <div class="row">
        <div class="col-xs-12">
            <?php if(Session::has('message')): ?>
                <h2><?php echo Session::get('message'); ?></h2>
            <?php endif; ?>

            <div class="clearfix">
                <div class="pull-right tableTools-container"></div>
            </div>
            <div class="table-header">
                <?php echo e(trans('categories.List')); ?>

            </div>

            <!-- div.table-responsive -->

            <!-- div.dataTables_borderWrap -->
            <div>

                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th><?php echo e(trans('categories.Name')); ?></th>
                        <th><?php echo e(trans('dashboard.action')); ?></th>
                    </tr>
                    </thead>

                    <tbody>

                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($category->id); ?></td>
                            <td><a href="<?php echo e(route('Admin.Category.Edit', $category->id)); ?>"> <?php echo e($category->name); ?> </a></td>

                            <td>
                                <form action="<?php echo e(route('Admin.Category.Delete', $category->id)); ?>" name="delete" method="post">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="submit" name="delete" value="<?php echo e(trans('categories.Delete')); ?>">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
        </div>

        <div>
            <a href="<?php echo e(route('Admin.Category.Add')); ?>"><input type="button" value="<?php echo e(trans('categories.Add')); ?>"></a>
        </div>


    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.admin.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>