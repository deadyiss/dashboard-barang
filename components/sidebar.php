<?php
$currentPage = $_GET['page'] ?? 'dashboard';
$masterOpen = in_array($currentPage, ['barang', 'barangtambah', 'barangedit', 'login', '404']);
?>
<style>
.sidebar .nav-link.active,
.sidebar .collapse-item.active {
    background-color: #4e73df !important;
    color: #fff !important;
}
.sidebar .collapse-item.active:hover {
    color: #fff !important;
}
.sidebar.toggled {
    width: 6.5rem !important;
    overflow: visible !important;
}

.sidebar.toggled .sidebar-brand-text,
.sidebar.toggled .sidebar-heading,
.sidebar.toggled .collapse-inner,
.sidebar.toggled .nav-item .nav-link span {
    display: none !important;
}

.sidebar.toggled .sidebar-brand {
    height: auto;
    padding: 1rem 0;
}

.sidebar.toggled .sidebar-divider:not(.d-none) {
    display: none !important;
}

.sidebar.toggled .nav-item {
    margin-bottom: 1rem;
}

.sidebar.toggled .nav-link {
    text-align: center;
    padding: 1rem 0 !important;
}

.sidebar.toggled .nav-link i {
    margin-right: 0 !important;
}

.sidebar.toggled .sidebar-dark #sidebarToggle {
    width: 100%;
}
</style>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="?page=dashboard">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Praktikum</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item <?= $currentPage === 'dashboard' ? 'active' : '' ?>">
    <a class="nav-link <?= $currentPage === 'dashboard' ? 'active' : '' ?>" href="?page=dashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Data
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item <?= $masterOpen ? 'active' : '' ?>">
    <a class="nav-link <?= $masterOpen ? '' : 'collapsed' ?>" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="<?= $masterOpen ? 'true' : 'false' ?>" aria-controls="collapsePages">
        <i class="fas fa-fw fa-cog"></i>
        <span>Master</span>
    </a>
    <div id="collapsePages" class="collapse <?= $masterOpen ? 'show' : '' ?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Bagian 1:</h6>
            <a class="collapse-item <?= in_array($currentPage, ['barang', 'barangedit']) ? 'active' : '' ?>" href="?page=barang">Barang</a>
            <a class="collapse-item <?= $currentPage === 'barangtambah' ? 'active' : '' ?>" href="?page=barangtambah">Tambah Barang</a>
            <a class="collapse-item <?= $currentPage === 'login' ? 'active' : '' ?>" href="?page=login">Login</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Bagian 2:</h6>
            <a class="collapse-item <?= $currentPage === '404' ? 'active' : '' ?>" href="?page=404">404 Page</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline" style="width: 100%;">
    <button class="rounded-circle border-0" id="sidebarToggle" type="button" style="width: 2.5rem; height: 2.5rem; background-color: rgba(255,255,255,0.2); cursor: pointer; color: rgba(255,255,255,0.5); font-size: 1.25rem; display: inline-flex; align-items: center; justify-content: center; padding: 0; margin-bottom: 1rem;"></button>
</div>

</ul>