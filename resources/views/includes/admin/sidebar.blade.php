<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
    <div class="sidebar-brand-text mx-3">
        NOMADS Admin
    </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if ('admin/dashboard' == request()->path())
        active
    @endif">
    <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <li class="nav-item @if ('admin/user' == request()->path())
        active
    @elseif ('admin/user/create' == request()->path())
        active
    @elseif ('admin/user/edit' == request()->path())
        active
    @endif">
    <a class="nav-link" href="{{ route('user.index') }}">
        <i class="fas fa-fw fa-users"></i>
        <span>User</span></a>
    </li>
    
    <li class="nav-item @if ('admin/travel-package' == request()->path())
        active
    @elseif ('admin/travel-package/create' == request()->path())
        active
    @elseif ('admin/travel-package/edit' == request()->path())
        active
    @endif">
    <a class="nav-link" href="{{ route('travel-package.index') }}">
        <i class="fas fa-fw fa-hotel"></i>
        <span>Paket Travel</span></a>
    </li>

    <li class="nav-item @if ('admin/gallery' == request()->path())
        active
    @elseif ('admin/gallery/create' == request()->path())
        active
    @elseif ('admin/gallery/edit' == request()->path())
        active
    @endif">
    <a class="nav-link" href="{{ route('gallery.index') }}">
        <i class="fas fa-fw fa-images"></i>
        <span>Galeri Travel</span></a>
    </li>

    <li class="nav-item @if ('admin/transaction' == request()->path())
        active
    @elseif ('admin/transaction/create' == request()->path())
        active
    @elseif ('admin/transaction/edit' == request()->path())
        active
    @endif">
    <a class="nav-link" href="{{ route('transaction.index') }}">
        <i class="fas fa-fw fa-dollar-sign"></i>
        <span>Transaksi</span></a>
    </li>

    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
