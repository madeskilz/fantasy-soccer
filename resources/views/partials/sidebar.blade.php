@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/admin/home') }}">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>

            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>@lang('quickadmin.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-user-plus"></i>
                            <span>@lang('quickadmin.roles.title')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span>@lang('quickadmin.users.title')</span>
                        </a>
                    </li>
                    
                </ul>
            </li>@endcan
            
            @can('team_access')
            <li>
                <a href="{{ route('admin.teams.index') }}">
                    <i class="fa fa-cogs"></i>
                    <span>@lang('quickadmin.teams.title')</span>
                </a>
            </li>@endcan
            
            @can('player_access')
            <li>
                <a href="{{ route('admin.players.index') }}">
                    <i class="fa fa-user-circle"></i>
                    <span>@lang('quickadmin.players.title')</span>
                </a>
            </li>@endcan
            
            @can('game_access')
            <li>
                <a href="{{ route('admin.games.index') }}">
                    <i class="fa fa-gamepad"></i>
                    <span>@lang('quickadmin.games.title')</span>
                </a>
            </li>@endcan
            

            

            



            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-sign-out"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>

