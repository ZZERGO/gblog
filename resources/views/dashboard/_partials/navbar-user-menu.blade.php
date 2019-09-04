<li class="light-blue">
    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
        <img class="nav-user-photo" src="{{ asset('dashboard/avatars/user.jpg') }}" alt="Jason's Photo" />
        <span class="user-info">
            <small>Welcome,</small> {{ Auth::user()->name }}
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

        <li><a href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                {{ trans('auth.logout') }}
            </a>
        </li>

        <li>

            <form id="logout-form" action="{{ route('Work.Exit') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                <a href="{{ route('Work.Exit') }}">
                    <i class="ace-icon fa fa-power-off"></i>
                    {{ trans('auth.logout') }}
                </a>
            </form>
        </li>
    </ul>
</li>