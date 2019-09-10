<?php $__env->startSection('content'); ?>

    <h1>Добавление статьи

    </h1>

    <?php if(Session::has('message')): ?>
        <h2><?php echo Session::get('message'); ?></h2>
    <?php endif; ?>

    <form name="register" action="<?php echo e(route('Admin.Articles.Save')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

        <input size="50" type="text" name="title" placeholder="<?php echo e(trans('articles.Title')); ?>" required><br>

        <?php echo e(trans('articles.shortText')); ?>:<br>
        <textarea cols="50" rows="5" name="short_text" placeholder="Здесь короткая новость" required></textarea><br>

        <?php echo e(trans('articles.fullText')); ?>:<br>
        <textarea cols="50" rows="5" name="full_text"></textarea><br>

        <?php echo e(trans('articles.selectCategory')); ?>:
        <select name="category_id" required>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(  $_GET['category_id']   == $category->id): ?>
                    <option value="<?php echo e($category->id); ?>" selected><?php echo e($category->name); ?></option>
                <?php else: ?>
                    <option value="<?php echo e($category->id); ?>" ><?php echo e($category->name); ?></option>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <br><br>
        <input type="submit" value="<?php echo e(trans('dashboard.save')); ?>">
    </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.admin.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>