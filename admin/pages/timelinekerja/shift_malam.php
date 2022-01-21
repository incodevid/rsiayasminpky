<!-- Content Wrapper. Contains page content -->



   <div class="content-wrapper">

    <!-- Content Header (Page header) --> 

    <div class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1 class="m-0 ">Kelola Timeline Karyawan</h1>

          </div><!-- /.col -->

          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="?p=dashboard" style="color:black;">Beranda</a></li>

              <li class="breadcrumb-item active">Kelola Timeline Karyawan</li>

            </ol>

          </div><!-- /.col -->

        </div><!-- /.row -->

      </div><!-- /.container-fluid -->

    </div>

    <!-- /.content-header -->



<!-- Main content -->
<section class="content">
      <div class="container-fluid">

        <!-- Timelime example  -->
        <div class="row">
          <div class="col-md-12">
            <!-- The time line -->
            <div class="timeline">
              <!-- timeline time label -->
              <div class="time-label">
                <span class="bg-gray"><?php echo tgl_indo(date("Y-m-d")); ?></span>
                <span class="bg-gray">SHIFT MALAM</span>
                <span class="bg-red">CLOSE : 10.00 WIB</span>
                <span class="bg-yellow"><i class="fa fa-chevron-left"></i> <a href="?p=timelinekerja">KEMBALI</a></span>
              </div>
               
             
              <!-- /.timeline-label -->


              <?php
              


              $now1   = date("Y-m-d H:i");
              $coba   = date("Y-m-d H:i", strtotime('13 hours 21:00'));/*MENCOBA*/

           
              $start1 = date('Y-m-d 21:00');
              $start2 = date('Y-m-d 00:00');
              $end2   = date('Y-m-d 10:00');
              $end1   = date('Y-m-d H:i', strtotime('next day 10:00'));



              if($now1 >= $start1 && $now1 <= $coba || $now1 >= $start2 && $now1 <= $end2){

               
              ?>

              
              <!-- timeline item -->
              <div>
                <i class="fas fa-paste bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 21.00 - 21.30</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn21002130'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "21.00-21.30";

    $tglkemarin        = date('Y-m-d', strtotime('previous day'));
    $jm_skrg           = date("H:i");
    $jm_1              = "21:00";
    $jm_2              = "24:00";


    if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){

    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    } else {

    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglkemarin' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    }

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "21.00-21.30";

    $tglkemarin        = date('Y-m-d', strtotime('previous day'));
    $jm_skrg           = date("H:i");
    $jm_1              = "21:00";
    $jm_2              = "24:00";


    if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang'  ");

    } else {

      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglkemarin'  ");


    }


      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tgl_timeline','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftmalam' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftmalam' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "21.00-21.30";
                    $tglkemarin        = date('Y-m-d', strtotime('previous day'));
                    $jm_skrg           = date("H:i");
                    $jm_1              = "21:00";
                    $jm_2              = "24:00";


                    if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){

                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang'  ");

                    } else {

                      $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE tgl_timeline BETWEEN '$tglkemarin' AND '$tglsekarang' AND id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu'    ");

                    }


                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="21.00-21.30">
                      <?php
                      $tglkemarin        = date('Y-m-d', strtotime('previous day'));
                      $jm_skrg           = date("H:i");
                      $jm_1              = "21:00";
                      $jm_2              = "24:00";  
                      if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){
                      ?>
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                      <?php }else{?>
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo $tglkemarin ?>">
                      <?php } ?>
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="21.00-21.30">
                      <?php
                      $tglkemarin        = date('Y-m-d', strtotime('previous day'));
                      $jm_skrg           = date("H:i");
                      $jm_1              = "21:00";
                      $jm_2              = "24:00";  
                      if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){
                      ?>
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                      <?php }else{?>
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo $tglkemarin ?>">
                      <?php } ?>
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn21002130">Simpan/Update</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-paste bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 21.30 - 22.00</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn21302200'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "21.30-22.00";

    $tglkemarin        = date('Y-m-d', strtotime('previous day'));
    $jm_skrg           = date("H:i");
    $jm_1              = "21:00";
    $jm_2              = "24:00";


    if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){

    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    } else {

    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglkemarin' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    }



    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "21.30-22.00";


    $tglkemarin        = date('Y-m-d', strtotime('previous day'));
    $jm_skrg           = date("H:i");
    $jm_1              = "21:00";
    $jm_2              = "24:00";


    if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang'  ");

    } else {

      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglkemarin'  ");


    }


      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tgl_timeline','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftmalam' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftmalam' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "21.30-22.00";
                    $tglkemarin        = date('Y-m-d', strtotime('previous day'));
                    $jm_skrg           = date("H:i");
                    $jm_1              = "21:00";
                    $jm_2              = "24:00";


                    if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){

                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang'  ");

                    } else {

                      $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE tgl_timeline BETWEEN '$tglkemarin' AND '$tglsekarang' AND id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu'    ");

                    }


                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="21.30-22.00">
                      <?php
                      $tglkemarin        = date('Y-m-d', strtotime('previous day'));
                      $jm_skrg           = date("H:i");
                      $jm_1              = "21:00";
                      $jm_2              = "24:00";  
                      if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){
                      ?>
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                      <?php }else{?>
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo $tglkemarin ?>">
                      <?php } ?>
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="21.30-22.00">
                      <?php
                      $tglkemarin        = date('Y-m-d', strtotime('previous day'));
                      $jm_skrg           = date("H:i");
                      $jm_1              = "21:00";
                      $jm_2              = "24:00";  
                      if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){
                      ?>
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                      <?php }else{?>
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo $tglkemarin ?>">
                      <?php } ?>
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn21302200">Simpan/Update</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-paste bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 22.00 - 22.30</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn22002230'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "22.00-22.30";

    $tglkemarin        = date('Y-m-d', strtotime('previous day'));
    $jm_skrg           = date("H:i");
    $jm_1              = "21:00";
    $jm_2              = "24:00";


    if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){

    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    } else {

    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglkemarin' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    }

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "22.00-22.30";


    $tglkemarin        = date('Y-m-d', strtotime('previous day'));
    $jm_skrg           = date("H:i");
    $jm_1              = "21:00";
    $jm_2              = "24:00";


    if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang'  ");

    } else {

      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglkemarin'  ");


    }

      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tgl_timeline','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftmalam' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftmalam' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "22.00-22.30";
                    $tglkemarin        = date('Y-m-d', strtotime('previous day'));
                    $jm_skrg           = date("H:i");
                    $jm_1              = "21:00";
                    $jm_2              = "24:00";


                    if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){

                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang'  ");

                    } else {

                      $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE tgl_timeline BETWEEN '$tglkemarin' AND '$tglsekarang' AND id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu'    ");

                    }

                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="22.00-22.30">
                      <?php
                      $tglkemarin        = date('Y-m-d', strtotime('previous day'));
                      $jm_skrg           = date("H:i");
                      $jm_1              = "21:00";
                      $jm_2              = "24:00";  
                      if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){
                      ?>
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                      <?php }else{?>
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo $tglkemarin ?>">
                      <?php } ?>
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="22.00-22.30">
                      <?php
                      $tglkemarin        = date('Y-m-d', strtotime('previous day'));
                      $jm_skrg           = date("H:i");
                      $jm_1              = "21:00";
                      $jm_2              = "24:00";  
                      if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){
                      ?>
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                      <?php }else{?>
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo $tglkemarin ?>">
                      <?php } ?>
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn22002230">Simpan/Update</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-paste bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 22.30 - 23.00</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn22302300'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "22.30-23.00";

    $tglkemarin        = date('Y-m-d', strtotime('previous day'));
    $jm_skrg           = date("H:i");
    $jm_1              = "21:00";
    $jm_2              = "24:00";


    if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){

    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    } else {

    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglkemarin' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    }

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "22.30-23.00";


    $tglkemarin        = date('Y-m-d', strtotime('previous day'));
    $jm_skrg           = date("H:i");
    $jm_1              = "21:00";
    $jm_2              = "24:00";


    if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang'  ");

    } else {

      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglkemarin'  ");


    }

      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tgl_timeline','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftmalam' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftmalam' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "22.30-23.00";
                    $tglkemarin        = date('Y-m-d', strtotime('previous day'));
                    $jm_skrg           = date("H:i");
                    $jm_1              = "21:00";
                    $jm_2              = "24:00";


                    if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){

                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang'  ");

                    } else {

                      $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE tgl_timeline BETWEEN '$tglkemarin' AND '$tglsekarang' AND id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu'    ");

                    }

                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="22.30-23.00">
                      <?php
                      $tglkemarin        = date('Y-m-d', strtotime('previous day'));
                      $jm_skrg           = date("H:i");
                      $jm_1              = "21:00";
                      $jm_2              = "24:00";  
                      if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){
                      ?>
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                      <?php }else{?>
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo $tglkemarin ?>">
                      <?php } ?>
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="22.30-23.00">
                      <?php
                      $tglkemarin        = date('Y-m-d', strtotime('previous day'));
                      $jm_skrg           = date("H:i");
                      $jm_1              = "21:00";
                      $jm_2              = "24:00";  
                      if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){
                      ?>
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                      <?php }else{?>
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo $tglkemarin ?>">
                      <?php } ?>
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn22302300">Simpan/Update</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-paste bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 23.00 - 23.30</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn23002330'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "23.00-23.30";

    $tglkemarin        = date('Y-m-d', strtotime('previous day'));
    $jm_skrg           = date("H:i");
    $jm_1              = "21:00";
    $jm_2              = "24:00";


    if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){

    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    } else {

    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglkemarin' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    }

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "23.00-23.30";


    $tglkemarin        = date('Y-m-d', strtotime('previous day'));
    $jm_skrg           = date("H:i");
    $jm_1              = "21:00";
    $jm_2              = "24:00";


    if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang'  ");

    } else {

      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglkemarin'  ");


    }

      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tgl_timeline','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftmalam' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftmalam' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "23.00-23.30";
                    $tglkemarin        = date('Y-m-d', strtotime('previous day'));
                    $jm_skrg           = date("H:i");
                    $jm_1              = "21:00";
                    $jm_2              = "24:00";


                    if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){

                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang'  ");

                    } else {

                      $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE tgl_timeline BETWEEN '$tglkemarin' AND '$tglsekarang' AND id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu'    ");

                    }

                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="23.00-23.30">
                      <?php
                      $tglkemarin        = date('Y-m-d', strtotime('previous day'));
                      $jm_skrg           = date("H:i");
                      $jm_1              = "21:00";
                      $jm_2              = "24:00";  
                      if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){
                      ?>
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                      <?php }else{?>
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo $tglkemarin ?>">
                      <?php } ?>
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="23.00-23.30">
                      <?php
                      $tglkemarin        = date('Y-m-d', strtotime('previous day'));
                      $jm_skrg           = date("H:i");
                      $jm_1              = "21:00";
                      $jm_2              = "24:00";  
                      if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){
                      ?>
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                      <?php }else{?>
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo $tglkemarin ?>">
                      <?php } ?>
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn23002330">Simpan/Update</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-paste bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 23.30 - 00.00</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn23300000'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "23.30-00.00";

    $tglkemarin        = date('Y-m-d', strtotime('previous day'));
    $jm_skrg           = date("H:i");
    $jm_1              = "21:00";
    $jm_2              = "24:00";


    if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){

    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    } else {

    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglkemarin' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    }

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "23.30-00.00";


    $tglkemarin        = date('Y-m-d', strtotime('previous day'));
    $jm_skrg           = date("H:i");
    $jm_1              = "21:00";
    $jm_2              = "24:00";


    if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang'  ");

    } else {

      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglkemarin'  ");


    }

      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tgl_timeline','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftmalam' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftmalam' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "23.30-00.00";
                    $tglkemarin        = date('Y-m-d', strtotime('previous day'));
                    $jm_skrg           = date("H:i");
                    $jm_1              = "21:00";
                    $jm_2              = "24:00";


                    if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){

                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang'  ");

                    } else {

                      $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE tgl_timeline BETWEEN '$tglkemarin' AND '$tglsekarang' AND id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu'    ");

                    }

                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="23.30-00.00">
                      <?php
                      $tglkemarin        = date('Y-m-d', strtotime('previous day'));
                      $jm_skrg           = date("H:i");
                      $jm_1              = "21:00";
                      $jm_2              = "24:00";  
                      if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){
                      ?>
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                      <?php }else{?>
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo $tglkemarin ?>">
                      <?php } ?>
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="23.30-00.00">
                      <?php
                      $tglkemarin        = date('Y-m-d', strtotime('previous day'));
                      $jm_skrg           = date("H:i");
                      $jm_1              = "21:00";
                      $jm_2              = "24:00";  
                      if($jm_skrg >= $jm_1 && $jm_skrg <= $jm_2){
                      ?>
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                      <?php }else{?>
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo $tglkemarin ?>">
                      <?php } ?>
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn23300000">Simpan/Update</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-paste bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 00.00 - 00.30</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn00000030'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "00.00-00.30";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "00.00-00.30";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftmalam' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftmalam' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "00.00-00.30";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="00.00-00.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="00.00-00.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn00000030">Simpan/Update</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-paste bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 00.30 - 01.00</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn00300100'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "00.30-01.00";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "00.30-01.00";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftmalam' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftmalam' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "00.30-01.00";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="00.30-01.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="00.30-01.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn00300100">Simpan/Update</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-paste bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 01.00 - 01.30</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn01000130'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "01.00-01.30";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "01.00-01.30";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftmalam' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftmalam' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "01.00-01.30";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="01.00-01.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="01.00-01.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn01000130">Simpan/Update</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-paste bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 01.30 - 02.00</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn01300200'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "01.30-02.00";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "01.30-02.00";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftmalam' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftmalam' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "01.30-02.00";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="01.30-02.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="01.30-02.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn01300200">Simpan/Update</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-paste bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 02.00 - 02.30</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn02000230'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "02.00-02.30";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "02.00-02.30";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftmalam' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftmalam' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "02.00-02.30";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="02.00-02.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="02.00-02.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn02000230">Simpan/Update</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-paste bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 02.30 - 03.00</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn02300300'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "02.30-03.00";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "02.30-03.00";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftmalam' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftmalam' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "02.30-03.00";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="02.30-03.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="02.30-03.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn02300300">Simpan/Update</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-paste bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 03.00 - 03.30</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn03000330'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "03.00-03.30";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "03.00-03.30";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftmalam' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftmalam' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "03.00-03.30";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="03.00-03.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="03.00-03.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn03000330">Simpan/Update</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-paste bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 03.30 - 04.00</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn03300400'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "03.30-04.00";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "03.30-04.00";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftmalam' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftmalam' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "03.30-04.00";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="03.30-04.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="03.30-04.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn03300400">Simpan/Update</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-paste bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 04.00 - 04.30</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn04000430'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "04.00-04.30";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "04.00-04.30";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftmalam' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftmalam' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "04.00-04.30";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="04.00-04.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="04.00-04.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn04000430">Simpan/Update</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-paste bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 04.30 - 05.00</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn04300500'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "04.30-05.00";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "04.30-05.00";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftmalam' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftmalam' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "04.30-05.00";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="04.30-05.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="04.30-05.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn04300500">Simpan/Update</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-paste bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 05.00 - 05.30</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn05000530'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "05.00-05.30";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "05.00-05.30";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftmalam' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftmalam' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "05.00-05.30";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="05.00-05.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="05.00-05.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn05000530">Simpan/Update</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-paste bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 05.30 - 06.00</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn05300600'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "05.30-06.00";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "05.30-06.00";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftmalam' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftmalam' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "05.30-06.00";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="05.30-06.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="05.30-06.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn05300600">Simpan/Update</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-paste bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 06.00 - 06.30</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn06000630'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "06.00-06.30";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "06.00-06.30";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftmalam' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftmalam' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "06.00-06.30";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="06.00-06.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="06.00-06.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn06000630">Simpan/Update</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-paste bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 06.30 - 07.00</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn06300700'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "06.30-07.00";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "06.30-07.00";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftmalam' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftmalam' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "06.30-07.00";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='MALAM' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="06.30-07.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="MALAM">
                      <input type="hidden" class="form-control" name="waktu" value="06.30-07.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn06300700">Simpan/Update</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              
              <?php } else { ?>

              <center><h3>TIME LINE CLOSE!</h3></center>

              <?php } ?>
              
              <div>
                <i class="fas fa-clock bg-gray"></i>
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
      </div>
      <!-- /.timeline -->

    </section>
    <!-- /.content -->



    



    




 </div>

  <!-- /.content-wrapper -->



<div class="modal fade" id="modal-default">

        <div class="modal-dialog">

          <div class="modal-content">

            <div class="modal-header">

              <h4 class="modal-title">Tambah Data Time Line</h4>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                <span aria-hidden="true">&times;</span>

              </button>

            </div>

            <div class="modal-body">

              <center>
              <span><button class="btn btn-success">SHIFT PAGI</button></span>
              <span><button class="btn btn-warning">SHIFT MALAM</button></span>
              <span><button class="btn btn-secondary">SHIFT MALAM</button></span>
              </center>

            </div>

            

          </div>

          <!-- /.modal-content -->

        </div>

        <!-- /.modal-dialog -->

      </div>

      <!-- /.modal -->







<?php



$quakun = mysqli_query($koneksi,"SELECT * FROM tb_akun ORDER BY id_akun DESC");

while($datkun=mysqli_fetch_assoc($quakun)){



?>

<div class="modal fade" id="modalUbah<?php echo $datkun['id_akun']; ?>">

        <div class="modal-dialog">

          <div class="modal-content">

            <div class="modal-header">

              <h4 class="modal-title">Ubah Akun Pengguna</h4>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                <span aria-hidden="true">&times;</span>

              </button>

            </div>

            <div class="modal-body">



            <?php

      

       

    if (isset($_POST['BtnUbahAkun'])) {

    

    $id_akun        = $_POST['id_akun'];

    $nama_akun      = $_POST['nama_akun'];

    $jenis_kelamin  = $_POST['jenis_kelamin'];

    $email          = $_POST['email'];

    $nik            = $_POST['nik'];

    $departemen     = $_POST['departemen'];

    $username       = $_POST['username']; 

    $password       = $_POST['password']; 

    

            $sql = mysqli_query($koneksi," UPDATE tb_akun set nama_akun='$nama_akun',jenis_kelamin='$jenis_kelamin',email='$email',nik='$nik',departemen='$departemen',username='$username',password='$password' WHERE id_akun='$id_akun'  ");





            if ($sql) {

               echo '<script> alert ("Ubah Data Akun Pengguna Berhasil!");window.location.href="?p=akun" </script>' ;

             } else {

              echo '<script> alert ("Ubah Data Akun Pengguna Gagal!");window.location.href="?p=akun" </script>' ;

             }

      



  



  }

  

       

  ?>



              <!-- form start -->

              <form role="form" method="POST" enctype="multipart/form-data" >

                <div class="card-body">

                  <div class="form-group">

                    <label for="">Nama Akun</label>

                    <input type="text" name="nama_akun" class="form-control"  value="<?php echo $datkun['nama_akun']; ?>" required>

                    <input type="hidden" name="id_akun" class="form-control"  value="<?php echo $datkun['id_akun']; ?>" required>

                  </div>

                  <div class="form-group">

                    <label for="">Jenis Kelamin</label>

                    <!-- select -->

                      <div class="form-group">

                        <select class="custom-select" name="jenis_kelamin" required>

                          <option value="<?php echo $datkun['jenis_kelamin']; ?>"><?php echo $datkun['jenis_kelamin']; ?></option>

                          <option value="Laki-Laki">Laki - Laki</option>

                          <option value="Perempuan">Perempuan</option>

                        </select>

                      </div>

                  </div>

                  <div class="form-group">

                    <label for="">Email</label>

                    <input type="email" name="email" class="form-control" value="<?php echo $datkun['email']; ?>" required>

                  </div>

                  <div class="form-group">

                    <label for="">NIK</label>

                    <input type="text" name="nik" class="form-control" value="<?php echo $datkun['nik']; ?>" required>

                  </div>

                  <div class="form-group">

                    <label for="">Departemen Unit</label>

                    <input type="text" name="departemen" class="form-control" value="<?php echo $datkun['departemen']; ?>" required>

                  </div>

                  <div class="form-group">

                    <label for="">Username</label>

                    <input type="text" name="username" class="form-control" value="<?php echo $datkun['username']; ?>" required>

                  </div>

                  <div class="form-group">

                    <label for="">Password</label>

                    <input type="text" name="password" class="form-control"  value="<?php echo $datkun['password']; ?>" required>

                  </div>

                  

                 

                </div>

                <!-- /.card-body -->



                

                <div class="modal-footer justify-content-between">

                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>

                  <button type="submit" name="BtnUbahAkun" class="btn btn-primary">Simpan</button>

                </div>

              </form>

            </div>

            

          </div>

          <!-- /.modal-content -->

        </div>

        <!-- /.modal-dialog -->

      </div>

      <!-- /.modal -->

      <?php } ?>