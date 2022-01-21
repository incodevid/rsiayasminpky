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
                <span class="bg-orange"><?php echo tgl_indo(date("Y-m-d")); ?></span>
                <span class="bg-orange">SHIFT SORE</span>
                <span class="bg-red">CLOSE : 24.00 WIB</span>
                <span class="bg-yellow"><i class="fa fa-chevron-left"></i> <a href="?p=timelinekerja">KEMBALI</a></span>
              </div>
               
             
              <!-- /.timeline-label -->


              <?php

            $now1   = date("H:i");
            $start1 = "14:00";
            $end1   = "24:00";



             if($now1 <= $end1 && $now1 >= $start1){

               
              ?>
              <!-- timeline item -->
              <div>
                <i class="fas fa-paste bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 14.00 - 14.30</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                   <?php

    if (isset($_POST['Btn14001430'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "14.00-14.30";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "14.00-14.30";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftsore' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftsore' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "14.00-14.30";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="14.00-14.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="14.00-14.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn14001430">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 14.30 - 15.00</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn14301500'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "14.30-15.00";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "14.30-15.00";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftsore' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftsore' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "14.30-15.00";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="14.30-15.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="14.30-15.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn14301500">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 15.00 - 15.30</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn15001530'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "15.00-15.30";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "15.00-15.30";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftsore' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftsore' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "15.00-15.30";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="15.00-15.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="15.00-15.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn15001530">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 15.30 - 16.00</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn15301600'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "15.30-16.00";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "15.30-16.00";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftsore' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftsore' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "15.30-16.00";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="15.30-16.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="15.30-16.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn15301600">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 16.00 - 16.30</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn16001630'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "16.00-16.30";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "16.00-16.30";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftsore' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftsore' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "16.00-16.30";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="16.00-16.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="16.00-16.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn16001630">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 16.30 - 17.00</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn16301700'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "16.30-17.00";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "16.30-17.00";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftsore' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftsore' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "16.30-17.00";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="16.30-17.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="16.30-17.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn16301700">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 17.00 - 17.30</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn17001730'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "17.00-17.30";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "17.00-17.30";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftsore' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftsore' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "17.00-17.30";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="17.00-17.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="17.00-17.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn17001730">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 17.30 - 18.00</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn17301800'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "17.30-18.00";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "17.30-18.00";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftsore' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftsore' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "17.30-18.00";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="17.30-18.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="17.30-18.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn17301800">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 18.00 - 18.30</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn18001830'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "18.00-18.30";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "18.00-18.30";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftsore' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftsore' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "18.00-18.30";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="18.00-18.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="18.00-18.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn18001830">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 18.30 - 19.00</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn18301900'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "18.30-19.00";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "18.30-19.00";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftsore' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftsore' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "18.30-19.00";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="18.30-19.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="18.30-19.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn18301900">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 19.00 - 19.30</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn19001930'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "19.00-19.30";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "19.00-19.30";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftsore' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftsore' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "19.00-19.30";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="19.00-19.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="19.00-19.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn19001930">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 19.30 - 20.00</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn19302000'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "19.30-20.00";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "19.30-20.00";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftsore' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftsore' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "19.30-20.00";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="19.30-20.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="19.30-20.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn19302000">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 20.00 - 20.30</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn20002030'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "20.00-20.30";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "20.00-20.30";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftsore' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftsore' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "20.00-20.30";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="20.00-20.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="20.00-20.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn20002030">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 20.30 - 21.00</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn20302100'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "20.30-21.00";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "20.30-21.00";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Simpan/Update Kegiatan Berhasil!');window.location.href='?p=shiftsore' </script>" ;

             } else {

              echo "<script> alert ('Simpan/Update Kegiatan Gagal!');window.location.href='?p=shiftsore' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "20.30-21.00";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='SORE' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="20.30-21.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="SORE">
                      <input type="hidden" class="form-control" name="waktu" value="20.30-21.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn20302100">Simpan/Update</button>
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
              <span><button class="btn btn-warning">SHIFT SORE</button></span>
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