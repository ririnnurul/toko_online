  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
      <span >Administrator</span>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
               <!--  MENU DASBOR -->
          <li class="nav-item">
            <a href="<?php echo base_url ('admin/dasbor') ?>" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <span><p>Dashboard</p></span>
            </a>
          </li>

                <!-- MENU PRODUK -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa-sitemap"></i>
              <p>
                Produk
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url ('admin/produk') ?>" class="nav-link">
                  <i class="fa fa-table"></i>
                  <p>Data Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url ('admin/produk/tambah') ?>" class="nav-link">
                  <i class="fa fa-plus"></i>
                  <p>Tambah Produk</p>
                <a href="<?php echo base_url ('admin/kategori') ?>" class="nav-link">
                  <i class="fa fa-tags"></i>
                  <p>Kategori Produk</p>
                </a>
              </li>
            </ul>
          </li>

               <!-- MENU USER -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p>
                Pengguna
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url ('admin/user') ?>" class="nav-link">
                  <i class="fa fa-table nav-icon"></i>
                  <p>Data Pengguna</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url ('admin/user/tambah') ?>" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Tambah Pengguna</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <?php echo $title?>
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              </div>
              <!-- /.card-header -->
              <div class="card-body">