<li class="light-blue">
    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
        <img class="nav-user-photo" src="<?php echo e(asset('dashboard/avatars/user.jpg')); ?>" alt="Jason's Photo" />
        <span class="user-info">
            <small>Welcome,</small> <?php echo e(Auth::user()->name); ?>

        </span>

        <i class="ace-icon fa fa-caret-down"></i>
    </a>

    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
        <li>
            <a href="#">
                <i class="ace-icon fa fa-cog"></i>
                Settings
            </a>
        </li>

        <li>
            <a href="profile.html">
                <i class="ace-icon fa fa-user"></i>
                Profile
            </a>
        </li>

        <li class="divider"></li>

        <li><a href="<?php echo e(route('logout')); ?>"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                <?php echo e(trans('auth.logout')); ?>

            </a>
        </li>

        <li>

            <form id="logout-form" action="<?php echo e(route('Work.Exit')); ?>" method="POST" style="display: none;">
                <?php echo e(csrf_field()); ?>

                <a href="<?php echo e(route('Work.Exit')); ?>">
                    <i class="ace-icon fa fa-power-off"></i>
                    <?php echo e(trans('auth.logout')); ?>

                </a>
            </form>
        </li>
    </ul>
</li>