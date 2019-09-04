
<!-- basic scripts -->

<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='<?php echo e(asset('dashboard/js/jquery.js')); ?>'>"+"<"+"/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='<?php echo e(asset('dashboard/js/jquery1x.js')); ?>'>"+"<"+"/script>");
</script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo e(asset('dashboard/js/jquery.mobile.custom.js')); ?>'>"+"<"+"/script>");
</script>
<script src="<?php echo e(asset('dashboard/js/bootstrap.js')); ?>"></script>

<!-- page specific plugin scripts -->

<!-- ace scripts -->
<script src="<?php echo e(asset('dashboard/js/ace/elements.scroller.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/ace/elements.colorpicker.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/ace/elements.fileinput.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/ace/elements.typeahead.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/ace/elements.wysiwyg.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/ace/elements.spinner.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/ace/elements.treeview.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/ace/elements.wizard.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/ace/elements.aside.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/ace/ace.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/ace/ace.ajax-content.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/ace/ace.touch-drag.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/ace/ace.sidebar.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/ace/ace.sidebar-scroll-1.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/ace/ace.submenu-hover.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/ace/ace.widget-box.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/ace/ace.settings.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/ace/ace.settings-rtl.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/ace/ace.settings-skin.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/ace/ace.widget-on-reload.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/ace/ace.searchbox-autocomplete.js')); ?>"></script>

<!-- inline scripts related to this page -->

<!-- the following scripts are used in demo only for onpage help and you don't need them -->
<link rel="stylesheet" href="<?php echo e(asset('dashboard/css/ace.onpage-help.css')); ?>" />

<script type="text/javascript"> ace.vars['base'] = '..'; </script>
<script src="<?php echo e(asset('dashboard/js/ace/elements.onpage-help.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/js/ace/ace.onpage-help.js')); ?>"></script>