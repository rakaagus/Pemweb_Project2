<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('index.php/dashboard/')?>" class="brand-link text-center">
      <span class="brand-text font-weight-light text-center">W-Depok</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('dist/img/user2-160x160.jpg')?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('index.php/dashboard/') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="nav-icon fas fa-book"></i>
            <p>Manage</p>
            <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url() ?>index.php/jeniswisata" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenis Wisata</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>index.php/kecamatan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kecamatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>index.php/tempatwisata" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tempat Wisata</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Comment -->
          <li class="nav-item">
            <a href="<?= base_url() ?>index.php/komentar" class="nav-link">
            <i class="nav-icon far fa-envelope"></i>
            <p>
              Komentar
            </p>
          </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>index.php/user" class="nav-link">
            <i class="nav-icon far fa-user"></i>
            <p>
              User
            </p>
          </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>index.php/login/logout" class="nav-link">
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>