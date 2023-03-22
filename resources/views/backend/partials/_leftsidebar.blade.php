<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('frontend.main') }}" target="_blank" class="brand-link">
        <img src="{{ asset('assets/adminlte/dist/img/AdminLTELogo.png') }}" alt="Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Visit Website</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->fname}}</a>
                <small class="text-white"> 
                    @forelse (Auth::user()->roles->take(1) as $role)
                    {{$role->name}}
                    @empty
                    Not assigned
                    @endforelse
                </small>
            </div>
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                 
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                    </ul>
                   
                    @can('user_management')
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('user.index') }}" class="nav-link">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="far fa-circle nav-icon"></i>
                                <p>User Management</p>
                            </a>
                        </li>
                    </ul>
                    @endcan
                    @can('role_management')
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('role-permissions.index') }}" class="nav-link">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="far fa-circle nav-icon"></i>
                                <p>Role Management</p>
                            </a>
                        </li>
                    </ul>
                    @endcan

                    @can('contact_us_inbox')
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('contactus.index') }}" class="nav-link">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contact Us Inbox</p>
                            </a>
                        </li>
                    </ul>
                    @endcan

                    @can('home_content')
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('home-content.index') }}" class="nav-link">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home Content</p>
                            </a>
                        </li>
                    </ul>
                    @endcan

                </li>
                @can('category')
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-briefcase"></i>

                            <p>Category

                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('category.index') }}" class="nav-link">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Category</p>
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                            <a href="{{ route('subcategory.index') }}" class="nav-link">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sub Category</p>
                            </a>
                        </li> --}}
                        </ul>
                    </li>
                    @endcan

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Blog
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can('blog_post_create')
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/blog/create') }}" class="nav-link">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blog Post Create</p>
                            </a>
                        </li>
                        @endcan
                        @can('blog_post_own')
                         <li class="nav-item">
                            <a href="{{ URL::to('admin/blog/myblog') }}" class="nav-link">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="far fa-circle nav-icon"></i>
                                <p>My Blog Posts</p>
                            </a>
                        </li>
                        @endcan
                        @can('blog_post_all')
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/blog') }}" class="nav-link">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blog Post Lists</p>
                            </a>
                        </li> 
                        @endcan    
                    </ul>
                </li>
               @can('newsletter')
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            Newsletter
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/newsletter') }}" class="nav-link">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="far fa-circle nav-icon"></i>
                                <p>Email List</p>
                            </a>
                        </li>

                    </ul>
                </li>
                @endcan
                @can('advertisement')
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            Advertisement
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('advertisement.index') }}" class="nav-link">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="far fa-circle nav-icon"></i>
                                <p>Custom Ad</p>
                            </a>
                        </li>

                    </ul>
                </li>
                @endcan
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
