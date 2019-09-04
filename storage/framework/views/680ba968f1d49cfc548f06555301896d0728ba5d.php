<?php echo $__env->make(env('THEME') . '._layouts.partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make(env('THEME') . '._layouts.partials.body', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make(env('THEME') . '._layouts.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>