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
                <span class="bg-green"><?php echo tgl_indo(date("Y-m-d")); ?></span>
                <span class="bg-green">SHIFT PAGI</span>
                <span class="bg-red">CLOSE : 17.00 WIB</span>
                <span class="bg-yellow"><i class="fa fa-chevron-left"></i> <a href="?p=timelinekerja">KEMBALI</a></span>
              </div>
               
             
              <!-- /.timeline-label -->
              <?php

            $now1   = date("H:i");
            $start1 = "07:00";
            $end1   = "17:00";



             if($now1 <= $end1 && $now1 >= $start1){

               
              ?>

              
              <!-- timeline item -->
              <div>
                <i class="fas fa-paste bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 07.00 - 07.30</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn07000730'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "07.00-07.30";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "07.00-07.30";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Tambah Kegiatan Berhasil!');window.location.href='?p=shiftpagi' </script>" ;

             } else {

              echo "<script> alert ('Tambah Kegiatan Gagal!');window.location.href='?p=shiftpagi' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "07.00-07.30";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" maxlength="200" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="07.00-07.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="07.00-07.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn07000730">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 07.30 - 08.00</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn07300800'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "07.30-08.00";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "07.30-08.00";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Tambah Kegiatan Berhasil!');window.location.href='?p=shiftpagi' </script>" ;

             } else {

              echo "<script> alert ('Tambah Kegiatan Gagal!');window.location.href='?p=shiftpagi' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "07.30-08.00";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" maxlength="200" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="07.30-08.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="07.30-08.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn07300800">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 08.00 - 08.30</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn08000830'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "08.00-08.30";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "08.00-08.30";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Tambah Kegiatan Berhasil!');window.location.href='?p=shiftpagi' </script>" ;

             } else {

              echo "<script> alert ('Tambah Kegiatan Gagal!');window.location.href='?p=shiftpagi' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "08.00-08.30";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" maxlength="200" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="08.00-08.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="08.00-08.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn08000830">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 08.30 - 09.00</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn08300900'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "08.30-09.00";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "08.30-09.00";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Tambah Kegiatan Berhasil!');window.location.href='?p=shiftpagi' </script>" ;

             } else {

              echo "<script> alert ('Tambah Kegiatan Gagal!');window.location.href='?p=shiftpagi' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "08.30-09.00";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" maxlength="200" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="08.30-09.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="08.30-09.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn08300900">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 09.00 - 09.30</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn09000930'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "09.00-09.30";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "09.00-09.30";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Tambah Kegiatan Berhasil!');window.location.href='?p=shiftpagi' </script>" ;

             } else {

              echo "<script> alert ('Tambah Kegiatan Gagal!');window.location.href='?p=shiftpagi' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "09.00-09.30";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" maxlength="200" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="09.00-09.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="09.00-09.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn09000930">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 09.30 - 10.00</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn09301000'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "09.30-10.00";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "09.30-10.00";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Tambah Kegiatan Berhasil!');window.location.href='?p=shiftpagi' </script>" ;

             } else {

              echo "<script> alert ('Tambah Kegiatan Gagal!');window.location.href='?p=shiftpagi' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "09.30-10.00";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" maxlength="200" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="09.30-10.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="09.30-10.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn09301000">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 10.00 - 10.30</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn10001030'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "10.00-10.30";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "10.00-10.30";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Tambah Kegiatan Berhasil!');window.location.href='?p=shiftpagi' </script>" ;

             } else {

              echo "<script> alert ('Tambah Kegiatan Gagal!');window.location.href='?p=shiftpagi' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "10.00-10.30";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" maxlength="200" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="10.00-10.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="10.00-10.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn10001030">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 10.30 - 11.00</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn10301100'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "10.30-11.00";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "10.30-11.00";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Tambah Kegiatan Berhasil!');window.location.href='?p=shiftpagi' </script>" ;

             } else {

              echo "<script> alert ('Tambah Kegiatan Gagal!');window.location.href='?p=shiftpagi' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "10.30-11.00";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" maxlength="200" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="10.30-11.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="10.30-11.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn10301100">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 11.00 - 11.30</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn11001130'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "11.00-11.30";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "11.00-11.30";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Tambah Kegiatan Berhasil!');window.location.href='?p=shiftpagi' </script>" ;

             } else {

              echo "<script> alert ('Tambah Kegiatan Gagal!');window.location.href='?p=shiftpagi' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "11.00-11.30";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" maxlength="200" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="11.00-11.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="11.00-11.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn11001130">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 11.30 - 12.00</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn11301200'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "11.30-12.00";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "11.30-12.00";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Tambah Kegiatan Berhasil!');window.location.href='?p=shiftpagi' </script>" ;

             } else {

              echo "<script> alert ('Tambah Kegiatan Gagal!');window.location.href='?p=shiftpagi' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "11.30-12.00";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" maxlength="200" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="11.30-12.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="11.30-12.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn11301200">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 12.00 - 12.30</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn12001230'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "12.00-12.30";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "12.00-12.30";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Tambah Kegiatan Berhasil!');window.location.href='?p=shiftpagi' </script>" ;

             } else {

              echo "<script> alert ('Tambah Kegiatan Gagal!');window.location.href='?p=shiftpagi' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "12.00-12.30";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" maxlength="200" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="12.00-12.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="12.00-12.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn12001230">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 12.30 - 13.00</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn12301300'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "12.30-13.00";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "12.30-13.00";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Tambah Kegiatan Berhasil!');window.location.href='?p=shiftpagi' </script>" ;

             } else {

              echo "<script> alert ('Tambah Kegiatan Gagal!');window.location.href='?p=shiftpagi' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "12.30-13.00";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" maxlength="200" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="12.30-13.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="12.30-13.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn12301300">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 13.00 - 13.30</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn13001330'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "13.00-13.30";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "13.00-13.30";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Tambah Kegiatan Berhasil!');window.location.href='?p=shiftpagi' </script>" ;

             } else {

              echo "<script> alert ('Tambah Kegiatan Gagal!');window.location.href='?p=shiftpagi' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "13.00-13.30";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" maxlength="200" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="13.00-13.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="13.00-13.30">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn13001330">Simpan/Update</button>
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
                  <span class="time"><i class="fas fa-clock"></i> 13.30 - 14.00</span>
                  <h3 class="timeline-header"><a href="#">TIME LINE </a> UNIT <?php echo $t['departemen']; ?> RSIA YASMIN PALANGKA RAYA</h3>
                  <div class="timeline-body">
                    <?php

    if (isset($_POST['Btn13301400'])) {

    $id_akun           = $_SESSION['id_akun'];
    $tglsekarang       = date("Y-m-d");
    $waktu             = "13.30-14.00";
    $qkeg = mysqli_query($koneksi,"SELECT * FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
    $dkeg = mysqli_fetch_assoc($qkeg);

    $id_timelineunit   = $dkeg['id_timelineunit'];
    $shift_waktu       = $_POST['shift_waktu'];
    $waktu             = $_POST['waktu'];
    $tgl_timeline      = $_POST['tgl_timeline'];
    $isi_kegiatan      = $_POST['isi_kegiatan'];
    $id_akun           = $_SESSION['id_akun'];

    $tglsekarang       = date("Y-m-d");
    $waktu             = "13.30-14.00";


      $id_akun=$_SESSION['id_akun'];
      $sql1 = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jumlah FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
      while($data = mysqli_fetch_assoc($sql1)){

      if($data['jumlah']=="0"){ 


            $sql = mysqli_query($koneksi," INSERT INTO tb_timelineunit (id_akun,shift_waktu,waktu,tgl_timeline,isi_kegiatan) 

            VALUES ('$id_akun','$shift_waktu','$waktu','$tglsekarang','$isi_kegiatan')  ");

          } else {

            $sql = mysqli_query($koneksi,"UPDATE tb_timelineunit SET isi_kegiatan='$isi_kegiatan' WHERE id_timelineunit='$id_timelineunit' ");


          }}


            if ($sql) {

               echo "<script> alert ('Tambah Kegiatan Berhasil!');window.location.href='?p=shiftpagi' </script>" ;

             } else {

              echo "<script> alert ('Tambah Kegiatan Gagal!');window.location.href='?p=shiftpagi' </script>" ;

             }


  }
  ?>
                  <form method="post" enctype="multipart/form-data">
                    <?php
                    $id_akun           = $_SESSION['id_akun'];
                    $tglsekarang       = date("Y-m-d");
                    $waktu             = "13.30-14.00";
                    $qform = mysqli_query($koneksi,"SELECT *, COUNT(id_timelineunit) AS jlh_id FROM tb_timelineunit WHERE id_akun='$id_akun' AND shift_waktu='PAGI' AND waktu='$waktu' AND tgl_timeline='$tglsekarang' ");
                    while($dform=mysqli_fetch_assoc($qform)){

                    if($dform['jlh_id']=="0"){ 
                    ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" maxlength="200" required></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="13.30-14.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                      <textarea class="form-control" name="isi_kegiatan" required><?php echo $dform['isi_kegiatan']; ?></textarea>
                      <input type="hidden" class="form-control" name="shift_waktu" value="PAGI">
                      <input type="hidden" class="form-control" name="waktu" value="13.30-14.00">
                      <input type="hidden" class="form-control" name="tgl_timeline" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    <?php }} ?>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit" name="Btn13301400">Simpan/Update</button>
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