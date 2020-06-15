<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="{{route('admin.dashboard')}}" class="d-block">{{Auth::user()->name}}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-child-indent nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tree"></i>
                    <p>
                        Products
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('admin.products.index')}}" class="nav-link">
                            <i class="fa fa-ship nav-icon"></i>
                            <p>All Products</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.products.create')}}" class="nav-link">
                            <i class="fa fa-shopping-basket nav-icon"></i>
                            <p>Add new Product</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.categories.index')}}" class="nav-link">
                            <i class="fa fa-tasks nav-icon"></i>
                            <p>Categories</p>
                        </a>
                    </li>
                </ul>
            </li>
            @can('view-any',Auth::user())
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Users Management
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.users.index')}}" class="nav-link">
                                <i class="fa fa-users nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                    </ul>
                </li>
            @endcan
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-envelope-square"></i>
                    <p>
                        Visitors Contact
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('admin.contacts.index')}}" class="nav-link">
                            <i class="fa fa-envelope nav-icon"></i>
                            <p>Contacts</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-envelope-square"></i>
                    <p>
                        My Account
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fa fa-user-friends nav-icon"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('logout')}}" class="nav-link">
                            <i class="fa fa-lock nav-icon"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>