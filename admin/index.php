<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | RSIAYASMIN</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <a class="animation__wobble" style="color: white;"><i class="fas fa-hourglass-start"></i> Mohon Tunggu...</a>
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Selamat Datang di Sistem Administrator Wesite RSIA YASMIN, Nama</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/logo-yasmin.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">RSIA YASMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Nama Pengguna</a>
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
          
          <li class="nav-header">MENU UTAMA</li>
          <li class="nav-item">
            <a href="?p=dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?p=akun" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Kelola Pengguna
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-user-md"></i>
              <p>
                Kelola Data Dokter
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Dokter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Dokter</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-id-card"></i>
              <p>
                Profil RS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visi dan Misi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Struktur Organisasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sejarah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profil RS</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Berita
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Artikel
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Kelola Galeri
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Album</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Galeri</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-photo-video"></i>
              <p>
                Kelola Video Profil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/kanban.html" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Kelola Kontak
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/kanban.html" class="nav-link">
              <i class="nav-icon fas fa-share-alt-square"></i>
              <p>
                Kelola Media Sosial
              </p>
            </a>
          </li>

          
          
          
          
          <li class="nav-header">PENGATURAN</li>
          <li class="nav-item">
            <a href="iframe.html" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Profil Akun</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Keluar</p>
            </a>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <!-- Main content -->
    <?php
      
    if(isset($_GET['p'])) {
        switch($_GET['p'])
        {
            case "index";
            include "pages/home.php";
            break;

      
            
        case "dashboard";
        include "pages/home.php";
        break;


        case "akun";
        include "pages/akun/tampil.php";
        break;
        case "uakun";
        include "pages/akun/ubah.php";
        break;
        case "hakun";
        include "pages/akun/hapus.php";
        break;


        case "visi_misi";
        include "pages/visi_misi/tampil.php";
        break;
        case "uvisi";
        include "pages/visi_misi/ubah_visi.php";
        break;
        case "umisi";
        include "pages/visi_misi/ubah_misi.php";
        break;
        case "hvisi";
        include "pages/visi_misi/hapus_visi.php";
        break;
        case "hmisi";
        include "pages/visi_misi/hapus_misi.php";
        break;


        case "struktur_organisasi";
        include "pages/struktur_organisasi/tampil.php";
        break;
        case "ustruktur_organisasi";
        include "pages/struktur_organisasi/ubah.php";
        break;
        case "hstruktur_organisasi";
        include "pages/struktur_organisasi/hapus.php";
        break;


        case "profil_kadis";
        include "pages/profil_kadis/tampil.php";
        break;



        case "berita";
        include "pages/berita/tampil.php";
        break;
        case "uberita";
        include "pages/berita/ubah.php";
        break;
        case "hberita";
        include "pages/berita/hapus.php";
        break;



        case "agenda";
        include "pages/agenda/tampil.php";
        break;
        case "uagenda";
        include "pages/agenda/ubah.php";
        break;
        case "hagenda";
        include "pages/agenda/hapus.php";
        break;


        
        case "album";
        include "pages/album/tampil.php";
        break;
        case "ualbum";
        include "pages/album/ubah.php";
        break;
        case "halbum";
        include "pages/album/hapus.php";
        break;


        case "galeri";
        include "pages/galeri/tampil.php";
        break;
        case "ugaleri";
        include "pages/galeri/ubah.php";
        break;
        case "hgaleri";
        include "pages/galeri/hapus.php";
        break;


        case "pengumuman";
        include "pages/pengumuman/tampil.php";
        break;
        case "upengumuman";
        include "pages/pengumuman/ubah.php";
        break;
        case "hpengumuman";
        include "pages/pengumuman/hapus.php";
        break;


        case "video";
        include "pages/video/tampil.php";
        break;
        case "uvideo";
        include "pages/video/ubah.php";
        break;
        case "hvideo";
        include "pages/video/hapus.php";
        break;


        case "kontak";
        include "pages/kontak/tampil.php";
        break;


        case "buku_tamu";
        include "pages/buku_tamu/tampil.php";
        break;
        case "hbuku_tamu";
        include "pages/buku_tamu/hapus.php";
        break;
        


        case "profil";
        include "pages/profil/tampil.php";
        break;
        

        case "medsos";
        include "pages/medsos/tampil.php";
        break;
        case "umedsos";
        include "pages/medsos/ubah.php";
        break;
        case "hmedsos";
        include "pages/medsos/hapus.php";
        break;


        


       


       
       

        




    
    
        }
        } else {
            include "pages/home.php";
            
}
?>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2010-<?php echo date('Y'); ?> <a href="#">RSIA YASMIN</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>
