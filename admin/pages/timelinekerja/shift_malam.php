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
                  <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <textarea class="form-control" name="" required></textarea>
                    </div>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit">Simpan/Update</button>
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
                  <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <textarea class="form-control" name="" required></textarea>
                    </div>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit">Simpan/Update</button>
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
                  <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <textarea class="form-control" name="" required></textarea>
                    </div>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit">Simpan/Update</button>
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
                  <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <textarea class="form-control" name="" required></textarea>
                    </div>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit">Simpan/Update</button>
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
                  <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <textarea class="form-control" name="" required></textarea>
                    </div>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit">Simpan/Update</button>
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
                  <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <textarea class="form-control" name="" required></textarea>
                    </div>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit">Simpan/Update</button>
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
                  <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <textarea class="form-control" name="" required></textarea>
                    </div>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit">Simpan/Update</button>
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
                  <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <textarea class="form-control" name="" required></textarea>
                    </div>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit">Simpan/Update</button>
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
                  <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <textarea class="form-control" name="" required></textarea>
                    </div>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit">Simpan/Update</button>
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
                  <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <textarea class="form-control" name="" required></textarea>
                    </div>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit">Simpan/Update</button>
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
                  <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <textarea class="form-control" name="" required></textarea>
                    </div>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit">Simpan/Update</button>
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
                  <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <textarea class="form-control" name="" required></textarea>
                    </div>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit">Simpan/Update</button>
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
                  <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <textarea class="form-control" name="" required></textarea>
                    </div>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit">Simpan/Update</button>
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
                  <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <textarea class="form-control" name="" required></textarea>
                    </div>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit">Simpan/Update</button>
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
                  <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <textarea class="form-control" name="" required></textarea>
                    </div>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit">Simpan/Update</button>
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
                  <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <textarea class="form-control" name="" required></textarea>
                    </div>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit">Simpan/Update</button>
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
                  <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <textarea class="form-control" name="" required></textarea>
                    </div>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit">Simpan/Update</button>
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
                  <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <textarea class="form-control" name="" required></textarea>
                    </div>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit">Simpan/Update</button>
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
                  <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <textarea class="form-control" name="" required></textarea>
                    </div>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit">Simpan/Update</button>
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
                  <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <textarea class="form-control" name="" required></textarea>
                    </div>
                    <div class="timeline-footer">
                      <button class="btn btn-primary btn-sm" type="submit">Simpan/Update</button>
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