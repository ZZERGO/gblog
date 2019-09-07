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
                <?php echo e(trans('dashboard.allUsers')); ?>

            </div>

            <!-- div.table-responsive -->

            <!-- div.dataTables_borderWrap -->
            <div>

                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo e(trans('users.displayName')); ?></th>
                            <th><?php echo e(trans('users.login')); ?></th>
                            <th><?php echo e(trans('users.lastName')); ?></th>
                            <th><?php echo e(trans('users.firstName')); ?></th>
                            <th><?php echo e(trans('users.middleName')); ?></th>
                            <th><?php echo e(trans('users.country')); ?></th>
                            <th><?php echo e(trans('users.birthday')); ?></th>
                            <th><?php echo e(trans('users.mobilePhone')); ?></th>
                            <th><?php echo e(trans('users.createdDate')); ?></th>
                            <th><?php echo e(trans('users.status')); ?></th>
                            <th>Действие</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <a href="<?php echo e(route('Admin.Users.Edit', $user->id)); ?>"> <?php echo e($user->name); ?> </a>
                            </td>
                            <td><?php echo e($user->login); ?></td>
                            <td><?php echo e($user->last_name); ?></td>
                            <td><?php echo e($user->first_name); ?></td>
                            <td><?php echo e($user->middle_name); ?></td>
                            <td>
                                <a href="<?php echo e(route('Admin.Country.Members', $user->country_id)); ?>"> <?php echo e($user->country->name); ?>  </a>
                            </td>
                            <td><?php echo e($user->birthday); ?></td>
                            <td><?php echo e($user->mobile_phone); ?></td>
                            <td><?php echo e($user->created_at); ?></td>

                            <td class="hidden-480"><span class="label label-sm label-warning">Активный</span></td>

                            <td>
                                <form action="<?php echo e(route('Admin.Users.Delete', $user->id)); ?>" name="delete" method="post">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="submit" name="delete" value="Удалить">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
        </div>

        <div>
            <a href="<?php echo e(route('Admin.Users.Add')); ?>"><input type="button" value="<?php echo e(trans('users.createUser')); ?>"></a>
        </div>


    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.admin.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>