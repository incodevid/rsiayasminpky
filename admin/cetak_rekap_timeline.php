<?php
error_reporting(0);
session_start();
include 'config.php';
date_default_timezone_set('Asia/Jakarta');
$tgl=date('Y-m-d');
function harga($rp){
          $harga = number_format ($rp, 0, ',', '.');
          return "Rp.".$harga;
          }
function tglIndonesia($str){
       $tr   = trim($str);
       $str    = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr);
       return $str;
   }
if (empty($_SESSION['username']) AND empty($_SESSION['password']))
 {echo "<script>document.location='login' </script> ";}
else {
    
    
            $id_akun=$_GET['dt'];
            $sql = mysqli_query($koneksi, "SELECT * FROM tb_akun where id_akun='$id_akun' ");
            $t = mysqli_fetch_assoc($sql);

            $akun=$_SESSION['id_akun'];
            $sql1 = mysqli_query($koneksi, "SELECT * FROM tb_akun where id_akun='$akun' ");
            $takun = mysqli_fetch_assoc($sql1);
         
    

 ?>

<!DOCTYPE html>
<html lang="en" >

<head>


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="shortcut icon" href="dist/img/logo-yasmin.jpg" type="image/x-icon">
<title>RSIA YASMIN PALANGKA RAYA</title>




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





  <!-- Bootstrap4 Duallistbox -->

  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">



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
#myScrollTable tbody {
clear:both;
border:0px solid 3FF6600;
height:200px;
overflow:auto;
width:100%;
}
.unggahFile {
    position: relative;
    overflow: hidden;
    margin: 5px;
}
.unggahFile input.unggah {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
.round {
  margin-top:30px;
    border-radius: 50%;
    overflow: hidden;
    width: 100px;
    height: 100px;
  border:2px solid white;
    }
.round img {
    display: block;
    min-width: 100%;
    min-height: 100%;
}


table { page-break-inside:auto }
tr    { page-break-inside:avoid; page-break-after:auto }

</style>

<link rel="stylesheet" type="text/css" href="assets/css/select2.css">


</head>
<body style="width: 100%;height: 100%;">



<table width="100%">
<tr>
<td width="25" align="center"><img src="dist/img/logo-yasmin.jpg" width="60%"></td>
<td width="50" align="center"><h4 class="media-heading f-w-600">RSIA YASMIN PALANGA RAYA</h4>
<p>
JL. Tjilik Riwut, No. 04 KM. 1, 5, Palangka, Kec. Jekan Raya, Kota Palangka Raya, Kalimantan Tengah 74874
<br><span class="digits">Telp. +625363226193</span>
</p>
</td>
<td width="25" align="center"></td>
</tr>
</table>
<hr>									
								

						<!-- End InvoiceTop-->
						<div class="row invo-profile">
							<div class="col-12">
									<div >
										<center><h3>TIME LINE UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3></center>
										<p>
											NAMA : <strong><?php echo $t['nama_akun']; ?></strong><br>
											UNIT : <strong><?php echo $t['departemen']; ?></strong>
										</p>
									</div>
									<!-- End Title-->
							</div>
							<div class="col-sm-4">
								<div class="text-xl-end" id="project">
									<!--<h6>No. Faktur : <strong></strong></h6>-->
								</div>
							</div>
						</div>
						<!-- End Invoice Mid-->
						<div>
							<div >
								<table class="table table-bordered ">
								<tbody>
								<tr>
									<td class="Hours"  style="text-align: center; vertical-align: middle;">
										<h6 class="p-2 mb-0" style="font-size: 16px;">WAKTU</h6>
									</td>
									<td class="Hours"  style="text-align: center; vertical-align: middle;">
										<h6 class="p-2 mb-0" style="font-size: 16px;">SHIFT</h6>
									</td>
									<td class="Hours"  style="text-align: center; vertical-align: middle;">
										<h6 class="p-2 mb-0" style="font-size: 16px;">TANGGAL</h6>
									</td>
									<td class="subtotal"  style="text-align: center; vertical-align: middle;">
										<h6 class="p-2 mb-0" style="font-size: 16px;">ISI KEGIATAN</h6>
									</td>
								</tr>
								<?php
								$dt 	= $_GET['dt'];
								$mulai  = $_GET['tgl_mulai'];
								$akhir  = $_GET['tgl_akhir'];
								$qtimeline=mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE tgl_timeline BETWEEN '$mulai' AND '$akhir' AND id_akun='$dt' ORDER BY tgl_timeline ASC, waktu ASC");

								while($data=mysqli_fetch_assoc($qtimeline)){
								?>
								<tr>
									<td>
										<p style="font-size: 13px;"><?php echo $data['waktu']; ?></p>
									</td>
									<td>
										<p style="font-size: 13px;"><?php echo $data['shift_waktu']; ?></p>
									</td>
									<td>
										<p style="font-size: 13px;"><?php echo tgl_indo($data['tgl_timeline']); ?></p>
									</td>
									<td>
										<p style="font-size: 13px;"><?php echo $data['isi_kegiatan']; ?></p>
									</td>
								</tr>
								<?php } ?>
								
								
															
								</tbody>
								</table>
                <br>
              <table >
              <tbody>
              <tr>
                <td style="width: 370px"></td>
                <td style="width: 270px"></td>
                <td style="width: 270px"></td>
                <td style="width: 280px">
                  <span>Palangka Raya, <?php echo tgl_indo(date("Y-m-d")); ?></span>
                </td>
              </tr>
              <tr>
                <td style="width: 370px"></td>
                <td style="width: 270px"></td>
                <td style="width: 270px"></td>
                <td style="width: 280px"></td>
              </tr>
              <tr>
                <td style="width: 370px"></td>
                <td style="width: 270px"></td>
                <td style="width: 270px"></td>
                <td style="width: 280px"></td>
              </tr>
              <tr>
                <td style="width: 370px"></td>
                <td style="width: 270px"></td>
                <td style="width: 270px"></td>
                <td style="width: 280px;height: 50px"></td>
              </tr>
              <tr>
                <td style="width: 370px"></td>
                <td style="width: 270px"></td>
                <td style="width: 270px"></td>
                <td style="width: 150px">
                  <span><strong><u><?php echo $takun['nama_akun']; ?></u></strong></span><br>
                  <span><strong>NIK. <?php echo $takun['nik']; ?></strong></span>
                </td>
              </tr>
              </tbody>
              </table>
							</div>
							<!-- End Table-->
							<div class="row mt-3">
								<div class="col-md-8">
									<div>
										<p class="legal">
											<i data-feather="award"></i><strong></strong>
										</p>
									</div>
								</div>
								
							</div>
						</div>


						<!-- End InvoiceBot-->

					<!-- End Invoice-->
					<!-- End Invoice Holder-->

<!-- Container-fluid Ends-->



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

<!-- InputMask -->

<script src="plugins/moment/moment.min.js"></script>

<script src="plugins/inputmask/jquery.inputmask.min.js"></script>

<!-- date-range-picker -->

<script src="plugins/daterangepicker/daterangepicker.js"></script>





<!-- DataTables -->

<script src="plugins/datatables/jquery.dataTables.min.js"></script>

<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>

<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>



<script src="js/jam.js" ></script>



<!-- Tempusdominus Bootstrap 4 -->

<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>



<!-- Bootstrap4 Duallistbox -->

<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>



<!-- Select2 -->

<script src="plugins/select2/js/select2.full.min.js"></script>



<!-- bs-custom-file-input -->

<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>



<!-- Summernote -->

<script src="plugins/summernote/summernote-bs4.min.js"></script>



<!-- bootstrap color picker -->

<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>






<!-- Bootstrap Switch -->

<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>



<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<script>
 new Chart(document.getElementById("myChart"), {
  type: 'line',
  data: {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [{ 
        data: [86,114,106,106,107,111,90],
        label: "Grafik Penjualan",
        borderColor: "#3e95cd",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Grafik Penjualan Perbulan'
    }
  }
});  
</script>

<script type="text/javascript">
$(function () {
    $("#basic-1").DataTable({
      "language" : {
      "url":"indonesia.json",
      "sEmptyTable":"Tidak Ada Data"
      }
    });
  });
</script>

<script type="text/javascript">
  /*----------------------------------------
passward show hide
----------------------------------------*/
function change()
         {
            var x = document.getElementById('pass').type;

            if (x == 'password')
            {
               document.getElementById('pass').type = 'text';
               document.getElementById('mybutton').innerHTML = '<i class="material-icons">visibility</i>';
            }
            else
            {
               document.getElementById('pass').type = 'password';
               document.getElementById('mybutton').innerHTML = '<i class="material-icons">visibility_off</i>';
            }
         }
</script>

<script type="text/javascript">
  'use strict';
var notify = $.notify('<i class="fa fa-hourglass-start"></i><strong>Loading</strong> Mohon tunggu...', {
    type: 'theme',
    allow_dismiss: true,
    delay: 2000,
    showProgressbar: true,
    timer: 300
});

setTimeout(function() {
    notify.update('message', '<i class="fa fa-hourglass-end"></i><strong>Loading</strong> Selesai.');
}, 1000);

</script>

<script >
$(function() {
$('#tglpiker').datepicker({
 //merubah format tanggal datepicker ke dd-mm-yyyy
    language: "en",
    dateFormat: 'yyyy-mm-dd'
});
});
</script>

<script>
$(function() {
$('#tglpiker1').datepicker({
 //merubah format tanggal datepicker ke dd-mm-yyyy
    language: "en",
    today: 'Today',
    dateFormat: 'yyyy-mm-dd hh:ii'
});
});
</script>
<script>
$(function() {
$('#tglretur').datepicker({
 //merubah format tanggal datepicker ke dd-mm-yyyy
    language: "en",
    today: 'Today',
    dateFormat: 'yyyy-mm-dd'
});
});
</script>
<script>
$(function() {
$('.tgluretur').datepicker({
 //merubah format tanggal datepicker ke dd-mm-yyyy
    language: "en",
    dateFormat: 'yyyy-mm-dd'
});
});
</script>
<script>
$(function() {
$('#tglpiker2').datepicker({
 //merubah format tanggal datepicker ke dd-mm-yyyy
    language: "en",
    dateFormat: 'yyyy-mm-dd hh:ii'
});
});
</script>
<script>
$(function() {
$('#tglpiker3').datepicker({
 //merubah format tanggal datepicker ke dd-mm-yyyy
    language: "en",
    dateFormat: 'yyyy-mm-dd'
});
});
</script>
<script>
$(function() {
$('.tglpiker4').datepicker({
 //merubah format tanggal datepicker ke dd-mm-yyyy
    language: "en",
    dateFormat: 'yyyy-mm-dd hh:ii'
});
});
</script>
<script>
$(function() {
$('.tglpiker5').datepicker({
 //merubah format tanggal datepicker ke dd-mm-yyyy
    language: "en",
    dateFormat: 'yyyy-mm-dd hh:ii'
});
});
</script>
<script>
$(function() {
$('.tglpiker6').datepicker({
 //merubah format tanggal datepicker ke dd-mm-yyyy
    language: "en",
    dateFormat: 'yyyy-mm-dd'
});
});
</script>


<script>

const vid = document.getElementById('shuttle');

function toggleFullScreen() {
  if (!document.fullscreenElement && vid.requestFullscreen) {
    vid.requestFullscreen();
  } else {
    if (document.exitFullscreen) {
      document.exitFullscreen(); 
    }
  }
}
</script>


<script type="text/javascript">
     $(document).ready(function() {
$(".js-example-basic-single").select2();
});
</script>

<!--LOAD PRINT
<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>-->



</body>
</html>
<?php } ?>