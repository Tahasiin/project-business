<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>
                <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                    <a href="{{url('dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-user"></i> <span>My Profile </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="" class="{{ Request::is('') ? 'active' : '' }}">Profile Details</a></li>
                        <li><a href="" class="{{ Request::is('') ? 'active' : '' }}">Manage Profile</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-list-alt"></i> <span> Category </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{url('createCategory')}}" class="{{Request::is('createCategory') ? 'active' : ''}}">Create Category</a></li>
                        <li><a href="{{url('manageCategory')}}" class="{{ Request::is('manageCategory') ? 'active' : '' }}">Manage Category</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-car"></i> <span> Products </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">

                        @if(Request::is('categoryProducts'))
                            <li><a href="" class="{{ Request::is('categoryProducts') ? 'active' : '' }}"> Products </a></li>
                        @endif

                        <li><a href="{{url('createProduct')}}" class="{{ Request::is('createProduct') ? 'active' : '' }}"> Create Product </a></li>
                        <li><a href="{{url('manageProduct')}}" class="{{ Request::is('manageProduct') ? 'active' : '' }}">Manage Product</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-envelope"></i> <span>Messages </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{url('mails')}}" class="{{ Request::is('mails') ? 'active' : '' }}">Mails[]</a></li>
                        <li><a href="{{url('orders')}}" class="{{ Request::is('orders') ? 'active' : '' }}">Orders[]</a></li>
                    </ul>
                </li>
                <li >
                    <a href="{{url('templateHome')}}"><i class="fa fa-laptop"></i> <span>Template</span> <span class="menu-arrow"></span></a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
