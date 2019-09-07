<?php $__env->startSection('content'); ?>
    <h3>Редактирование статьи</h3>
    <h1><?php echo e($article->title); ?></h1>


    <form name="update" action="<?php echo e(route('Admin.Articles.Update', $article->id)); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

        <?php echo e(trans('articles.Title')); ?><br>
        <input size="50" type="text" name="title" value="<?php echo e($article->title); ?>"><br><br>

        <?php echo e(trans('articles.shortText')); ?>:<br>
        <textarea cols="50" rows="5" name="short_text"  ><?php echo e($article->short_text); ?></textarea><br><br>

        <?php echo e(trans('articles.fullText')); ?>:<br>
        <textarea cols="50" rows="5" name="full_text"><?php echo e($article->full_text); ?></textarea><br><br>

        <?php echo e(trans('articles.selectCategory')); ?>:
        <select name="category_id" required>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if( $category->id == $article->category->id): ?>
                    <option value="<?php echo e($category->id); ?>" selected><?php echo e($category->name); ?></option>
                <?php else: ?>
                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <br><br>
        <input type="submit" value="<?php echo e(trans('dashboard.save')); ?>">
    </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.admin.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>