<ul class="nav nav-list">
    <li class="">
        <a href="<?php echo e(route('Admin.Main')); ?>">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> <?php echo e(trans('dashboard.main')); ?> </span>
        </a>
        <b class="arrow"></b>
    </li>

    <li class="">
        <a href="<?php echo e(route('Admin.Users.List')); ?>">
            <i class="menu-icon fa fa-caret-right"></i>
            <?php echo e(trans('dashboard.users')); ?>

        </a>
    </li>

    <li class="">
        <a href="<?php echo e(route('Admin.Category.Index')); ?>">
            <i class="menu-icon fa fa-caret-right"></i>
            <?php echo e(trans('dashboard.categories')); ?>

        </a>
    </li>

    <li class="">
        <a href="<?php echo e(route('Admin.Articles.List')); ?>">
            <i class="menu-icon fa fa-caret-right"></i>
            <?php echo e(trans('dashboard.articles')); ?>

        </a>
    </li>

    <li class="">
        <a href="<?php echo e(route('Admin.Country.List')); ?>">
            <i class="menu-icon fa fa-caret-right"></i>
            <?php echo e(trans('dashboard.countries')); ?>

        </a>
    </li>


</ul>
<!-- /.nav-list -->