<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("user.profil") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        <li
            class="c-sidebar-nav-dropdown {{ request()->is("user/permissions*") ? "c-show" : "" }} {{ request()->is("user/roles*") ? "c-show" : "" }} {{ request()->is("user/users*") ? "c-show" : "" }} {{ request()->is("user/user-positions*") ? "c-show" : "" }}">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                </i>
                {{ trans('cruds.userManagement.title') }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a href="{{ route("user.users.index") }}"
                        class="c-sidebar-nav-link">
                        <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                        </i>
                        {{ trans('cruds.user.title') }}
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a href="{{ route('user.companies.index') }}"
                        class="c-sidebar-nav-link {{ request()->is("user/companies") || request()->is("user/companies/*") ? "c-active" : "" }}">
                        <i class="fa-fw fas fa-building c-sidebar-nav-icon">

                        </i>
                        {{ trans('cruds.companies.title') }}
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a href="{{ route('user.employees.index') }}"
                        class="c-sidebar-nav-link {{ request()->is("user/employees") || request()->is("user/employees/*") ? "c-active" : "" }}">
                        <i class="fa-fw fas fa-user-friends c-sidebar-nav-icon">

                        </i>
                        {{ trans('cruds.employees.title') }}
                    </a>
                </li>
            </ul>
        </li>
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
        @can('profile_password_edit')
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}"
                href="{{ route('profile.password.edit') }}">
                <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                </i>
                {{ trans('global.change_password') }}
            </a>
        </li>
        @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link"
                onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>
