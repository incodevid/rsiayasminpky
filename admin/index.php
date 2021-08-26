
<?php
error_reporting(0);
session_start();
include 'config.php';
date_default_timezone_set('Asia/Jakarta');
$tgl=date('Y-m-d');
function tglIndonesia($str){
       $tr   = trim($str);
       $str    = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr);
       return $str;
   }
if (empty($_SESSION['username']) AND empty($_SESSION['password']))
 {echo "<script>document.location='login' </script> ";}
else {
    
    
            $id_akun=$_SESSION['id_akun'];
            $sql = mysqli_query($koneksi, "SELECT * FROM tb_akun where id_akun='$id_akun' ");
            $t = mysqli_fetch_assoc($sql);
            
        
 ?>
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

  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">


  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

   <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">


 <style>
.myScrollTable {

border:0px solid 3FF6600;
height:auto;
width:auto;
overflow-y:auto;
overflow-x:scroll;
}
.circular-image {
     border: 1px solid #ffffff;
     width: 150px;
     height: 150px;
     overflow: hidden;
     border-radius: 50%; /* Tambahkan baris berikut */
}
</style>


</head>
<body class="hold-transition  sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" onload="startclock()">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <a class="animation__wobble" style="color: black;"><i class="fas fa-hourglass-start"></i> Mohon Tunggu...</a>
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Selamat Datang di Sistem Administrator Wesite RSIA YASMIN, <?php echo $t['nama_akun']; ?></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item" style="color: white;">
        <span id="date"></span>, <span id="clock"></span><span>  WIB</span>
      </li>
      
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <center><span class="brand-text font-weight-light"><h3>RSIA YASMIN PKY</h3></span></center>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/logo-yasmin.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $t['nama_akun']; ?></a>
          <a href="#" class="d-block">NIK : <?php echo $t['nik']; ?></a>
          <a href="#" class="d-block">DEP : <?php echo $t['departemen']; ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form 
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

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
                <a href="?p=kdokter" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Dokter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?p=ddokter" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Dokter</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-user-md"></i>
              <p>
                Kelola Data Layanan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?p=klayanan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Layanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?p=layanan" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Layanan</p>
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
                <a href="?p=visimisi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visi dan Misi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?p=struktur_organisasi" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Struktur Organisasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?p=sejarah" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sejarah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?p=profil_rs" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profil RS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?p=besuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jam Besuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?p=kerjasama" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kerjasama</p>
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
              <i class="nav-icon fas fa-clone"></i>
              <p>
                Kelola Slide
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
            <a href="logout" class="nav-link">
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
        case "hakun";
        include "pages/akun/hapus.php";
        break;


        case "kdokter";
        include "pages/kategori_dokter/tampil.php";
        break;
        case "hkdokter";
        include "pages/kategori_dokter/hapus.php";
        break;

        case "ddokter";
        include "pages/dokter/tampil.php";
        break;
        case "hddokter";
        include "pages/dokter/hapus.php";
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
        case "hstruktur_organisasi";
        include "pages/struktur_organisasi/hapus.php";
        break;


        case "sejarah";
        include "pages/sejarah/tampil.php";
        break;
        case "hsejarah";
        include "pages/sejarah/hapus.php";
        break;


        case "profil_rs";
        include "pages/profil_rs/tampil.php";
        break;
        case "hprofil_rs";
        include "pages/profil_rs/hapus.php";
        break;


        case "besuk";
        include "pages/jam_besuk/tampil.php";
        break;
        case "hbesuk";
        include "pages/jam_besuk/hapus.php";
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



        case "klayanan";
        include "pages/kategori_layanan/tampil.php";
        break;
        case "hklayanan";
        include "pages/kategori_layanan/hapus.php";
        break;


        case "layanan";
        include "pages/layanan/tampil.php";
        break;
        case "hlayanan";
        include "pages/layanan/hapus.php";
        break;

        case "visimisi";
        include "pages/visimisi/tampil.php";
        break;
        case "hpsvisi";
        include "pages/visimisi/hapusvisi.php";
        break;
        case "hpsmisi";
        include "pages/visimisi/hapusmisi.php";
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


        case "kerjasama";
        include "pages/kerjasama/tampil.php";
        break;
        case "hkerjasama";
        include "pages/kerjasama/hapus.php";
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
<!-- Bootstrap 4 -->
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

<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>


<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="js/jam.js" ></script>


<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>

<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>




<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      "language" : {
      "url":"indonesia.json",
      "sEmptyTable":"Tidads"
      }
    });
  });
</script>

<script>
  $(function () {
    $("#example2").DataTable({
      "responsive": true,
      "autoWidth": false,
      "language" : {
      "url":"indonesia.json",
      "sEmptyTable":"Tidads"
      }
    });
  });
</script>

<script>
  $('#pesan').fadeIn('slow').delay(3000).fadeOut('slow');
</script>

<script >
    function tgl_indo($tanggal){
    $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    
    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun
 
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
</script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'YYYY-MM-DD'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>

<script>
$(function () {
  bsCustomFileInput.init();
});
</script>

<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>

<script>
  $(function () {
    // Summernote
    $('#summernoteubah').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>

<script>
  $(function () {
    // Summernote
    $('#summernotevisi').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>

<script>
  $(function () {
    // Summernote
    $('#summernotemisi').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>

<script>
  $(function () {
    // Summernote
    $('#summernotemisi2').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>

</body>
</html>
<?php } ?>