<!-- Content Wrapper. Contains page content -->



   <div class="content-wrapper">

    <!-- Content Header (Page header) --> 

    <div class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1 class="m-0 ">Halaman Rekap Laporan Time Line Karyawan</h1>

          </div><!-- /.col -->

          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="?p=dashboard" style="color:black;">Beranda</a></li>

              <li class="breadcrumb-item active">Halaman Rekap Laporan Time Line Karyawan</li>

            </ol>

          </div><!-- /.col -->

        </div><!-- /.row -->

      </div><!-- /.container-fluid -->

    </div>

    <!-- /.content-header -->


<!-- Main content -->

    <section class="content">

      <div class="container-fluid">

        <div class="row">

          <div class="col-12">

            <div class="card">

              <div class="card-header">

                <h3 class="card-title">Rekap Laporan Time Line Karyawan</h3>

                <div class="card-tools">

                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">

                    <i class="fas fa-minus"></i></button>

                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">

                    <i class="fas fa-times"></i></button>

                </div>

              </div>




              <!-- /.card-header -->

              <div class="card-body">

                <form action="cetak_rekap_timeline" target="_blank" method="GET" enctype="multipart/form-data">
                <div class="row mb-2">


                    <div class="col-sm-3">

                    <div class="form-group">
                      <select class="custom-select select2" name="dt" required>
                        <option value="">--PILIH KARYAWAN--</option>
                        <?php
                        $qkaryawan = mysqli_query($koneksi,"SELECT * FROM tb_akun WHERE level_akses NOT LIKE '%super%' ORDER BY nama_akun ASC");
                        while($data=mysqli_fetch_assoc($qkaryawan)){
                        ?>
                        <option value="<?php echo $data['id_akun']; ?>" style="text-transform: uppercase;"><?php echo $data['nama_akun']; ?></option>
                        <?php } ?>
                      </select>                      
                    </div>

                    </div>
                    <div class="col-sm-3">

                      <div class="form-group">
                        <div class="input-group date " id="reservationdate" data-target-input="nearest">

                          <input type="text" name="tgl_mulai" class="form-control datetimepicker-input" data-target="#reservationdate" placeholder="Pilih Tanggal" required autocomplete="off" />

                          <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">

                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>

                          </div>

                      </div>
                        
                      </div>
                      
                    </div>
                    <div class="col-sm-3">

                      <div class="form-group">
                        <div class="input-group date " id="reservationdate2" data-target-input="nearest">

                          <input type="text" name="tgl_akhir" class="form-control datetimepicker-input" data-target="#reservationdate2" placeholder="Pilih Tanggal" required autocomplete="off" />

                          <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">

                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>

                          </div>

                      </div>
                        
                      </div>
                      
                    </div>

                    <div class="col-sm-2">

                    <button  class="btn btn-block btn-info" type="submit"><i class="fa fa-print"></i> Cetak</button>

                    </div>

                </div>
                </form>

            

                

          



              </div>

              <!-- /.card-body -->

            </div>

            <!-- /.card -->

          </div>

          <!-- /.col -->

        </div>

        <!-- /.row -->

      </div>

      <!-- /.container-fluid -->

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
              <span><button class="btn btn-success" onclick="window.location.href='?p=shiftpagi'">SHIFT PAGI</button></span>
              <span><button class="btn btn-warning" onclick="window.location.href='?p=shiftsore'">SHIFT SORE</button></span>
              <span><button class="btn btn-secondary" onclick="window.location.href='?p=shiftmalam'">SHIFT MALAM</button></span>
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