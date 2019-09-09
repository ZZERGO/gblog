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
                <?php echo e(trans('articles.All')); ?>

            </div>

            <!-- div.table-responsive -->

            <!-- div.dataTables_borderWrap -->
            <div>

                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo e(trans('articles.Title')); ?></th>
                            <th><?php echo e(trans('articles.Category')); ?></th>
                            <th><?php echo e(trans('articles.Author')); ?></th>
                            <th><?php echo e(trans('dashboard.action')); ?></th>
                            <th>ID</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><a href="<?php echo e(route('Admin.Articles.Edit', $article->id)); ?>"> <?php echo e($article->title); ?> </a></td>
                            <td><a href="<?php echo e(route('Admin.Category.Index')); ?>"><?php echo e($article->category->name); ?></a></></td>
                            <td><?php echo e($article->user->last_name); ?></td>

                            <td>
                                <form action="<?php echo e(route('Admin.Articles.Delete', $article->id)); ?>" name="delete" method="post">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="submit" name="delete" value="<?php echo e(trans('articles.Delete')); ?>">
                                </form>
                            </td>
                            <td><?php echo e($article->id); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
        </div>

        <div>
            <a href="<?php echo e(route('Admin.Articles.Add')); ?>"><input type="button" value="<?php echo e(trans('articles.Add')); ?>"></a>
        </div>


    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.admin.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>