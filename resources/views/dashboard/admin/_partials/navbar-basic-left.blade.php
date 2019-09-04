<ul class="nav nav-list">
    <li class="">
        <a href="{{ route('Admin.Main') }}">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> {{ trans('dashboard.main') }} </span>
        </a>
        <b class="arrow"></b>
    </li>

    <li class="">
        <a href="{{ route('Admin.Users.List') }}">
            <i class="menu-icon fa fa-caret-right"></i>
            {{ trans('dashboard.users') }}
        </a>
    </li>

    <li class="">
        <a href="{{ route('Admin.Category.Index') }}">
            <i class="menu-icon fa fa-caret-right"></i>
            {{ trans('dashboard.categories') }}
        </a>
    </li>

    <li class="">
        <a href="{{ route('Admin.Articles.List') }}">
            <i class="menu-icon fa fa-caret-right"></i>
            {{ trans('dashboard.articles') }}
        </a>
    </li>

    <li class="">
        <a href="{{ route('Admin.Country.List') }}">
            <i class="menu-icon fa fa-caret-right"></i>
            {{ trans('dashboard.countries') }}
        </a>
    </li>


</ul>
<!-- /.nav-list -->