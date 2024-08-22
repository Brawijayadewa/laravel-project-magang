<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center" href="{{ 
        auth()->user()->role === 'admin' ? route('admin.index') : 
        auth()->user()->role === 'sales' ? route('sales.index') : '#'
    }}">
        <img src="{{ asset('assets/images/school_icon.png') }}" alt="" style="width:40px; height:auto;">
        <h6 class="ml-2 mt-2">School Management</h6>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->path() === 'admin/dashboard' || request()->path() === 'sales/dashboard' ? 'active' : '' }}">
        <a class="nav-link" href="{{ auth()->user()->role == "admin" ? route('admin.index') : '#' }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    @if(auth()->user()->role === 'admin')
        <li class="nav-item {{ request()->path() === 'user-admin' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('user.index') }}">
                <i class="fas fa-user-cog"></i>
                <span>User</span>
            </a>
        </li>
    @else

    @endif

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>