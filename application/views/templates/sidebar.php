<?php $id_level = $this->session->userdata('level'); ?>
<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Penjualan</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item <?php if($title == 'Dashboard') echo 'active' ?>">
    <a class="nav-link" href="<?= base_url('admin') ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  

  <!-- Divider -->
  <hr class="sidebar-divider">

  <?php if($id_level == 1) : ?>
  <!-- Heading -->
  <div class="sidebar-heading">
    Admin
  </div>

  <!-- Nav Item - Charts -->
  <li class="nav-item <?php if($title == 'User') echo 'active' ?>">
    <a class="nav-link" href="<?= base_url('user') ?>">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>User</span></a>
  </li>

  <!-- Nav Item - Tables -->
  <li class="nav-item <?php if($title == 'Menu') echo 'active' ?>">
    <a class="nav-link" href="<?= base_url('menu') ?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Menu</span></a>
  </li>
  <?php endif; ?>

  <?php if($id_level == 2) : ?>
  <!-- Heading -->
  <div class="sidebar-heading">
    Kasir
  </div>

  <!-- Nav Item - Charts -->
  <li class="nav-item <?php if($title == 'Transaksi') echo 'active' ?>">
    <a class="nav-link" href="<?= base_url('transaksi') ?>">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Tambah Transaksi</span></a>
  </li>

  <!-- Nav Item - Tables -->
  <li class="nav-item <?php if($title == 'Riwayat') echo 'active' ?>">
    <a class="nav-link" href="<?= base_url('transaksi/riwayat') ?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Riwayat Transaksi</span></a>
  </li>
  <?php endif; ?>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">


    <!-- Nav Item - logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>
    

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->