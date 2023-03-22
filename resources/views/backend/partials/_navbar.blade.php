<nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">


            <a href="{{ URL::to('admin/dashboard') }}" class="nav-link">Home</a>
        </li>

        @if (Route::is('blog.index'))
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('getTrashedItem')}}" class="nav-link"><i class="fa fa-trash" aria-hidden="true"></i>
                    Trash Box</a>
            </li>
        @endif
        @role('Administrator')
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('app.clearcache') }}" class="nav-link btn btn-success">Clear Cache </a>
        </li>
        @endrole
        
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">


        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
                role="button">
                {{-- <i class="far fa-bell"></i> --}}
                {{-- <span class="badge badge-warning navbar-badge"></span> --}}

                @if (Auth::check())
                    {{ Auth::user()->fname }}
                @endif

            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>

    </ul>
</nav>
