<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        {{--<img src="../../dist/img/AdminLTELogo.png"--}}
             {{--alt="AdminLTE Logo"--}}
             {{--class="brand-image img-circle elevation-3"--}}
             {{--style="opacity: .8">--}}
        <span class="brand-text font-weight-light" style="text-align: center;"><h3 ctyle="color:#fff; ">ASM</h3></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://forum.mikrotik.com/styles/canvas/theme/images/no_avatar.jpg"
                     class="img-circle elevation-2"
                     alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            Apartment
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('apartment.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('option.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Option</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('type.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Type</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('content.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-file-code"></i>
                        <p>
                            Content Manager
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('file.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            File Manager
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('booking.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-calendar-check"></i>
                        <p>
                            Bookings
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('users.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>