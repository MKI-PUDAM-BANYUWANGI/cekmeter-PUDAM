<ul class="navbar-nav sidebar sidebar-night accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('../assets/logo-cekmeter.png') }}" alt="cek-meter" width="100%">
        </div>
        <div class="sidebar-brand-text mx-3">Admin Dashboard</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-home"></i>
            <span>Beranda</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data
    </div>

    <!-- Nav Item - Data Pelanggan -->
    <li class="nav-item">
        <a class="nav-link" href="/pelanggan">
            <i class="fas fa-fw fa-users"></i>
            <span>Pelanggan</span></a>
    </li>

    <!-- Nav Item - Data Merk Meter -->
    <li class="nav-item">
        <a class="nav-link" href="/dashboard/merkmeter">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Merk Meter</span></a>
    </li>

    <!-- Nav Item - Data Staff -->
    <li class="nav-item">
        <a class="nav-link" href="/staff">
            <i class="fas fa-fw fa-user"></i>
            <span>Staff/User</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
