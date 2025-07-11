<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html" style="height: 70px;">
        <img src="{{ asset('admin_assets') }}/img/xlablogo.png" style="height: 50px; margin-right: 10px;" alt="Logo XLAB">
        <div class="sidebar-brand-text" style="font-weight: bold;">ADMIN XLAB</div>
    </a>


    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-home" style="margin-right: 8px;"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Nav Item - Produk -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('products') }}">
            <i class="fas fa-fw fa-box-open" style="margin-right: 8px;"></i>
            <span>Produk</span>
        </a>
    </li>

    <!-- Nav Item - Profile -->
    <li class="nav-item">
        <a class="nav-link" href="/profile">
            <i class="fas fa-fw fa-user" style="margin-right: 8px;"></i>
            <span>Profile</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('users') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Daftar Pengguna</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>