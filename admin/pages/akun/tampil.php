<!-- Content Wrapper. Contains page content -->

   <div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 ">Kelola Akun Pengguna</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?p=dashboard" style="color:white;">Beranda</a></li>
              <li class="breadcrumb-item active">Kelola Akun Pengguna</li>
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
                <h3 class="card-title">Daftar Akun Pengguna</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>

              <?php
      
       
    if (isset($_POST['BtnSmpanAkun'])) {
    
  
    $nama_akun      = $_POST['nama_akun'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $email          = $_POST['email'];
    $no_hp          = $_POST['no_hp'];
    $username       = $_POST['username']; 
    $password       = $_POST['password']; 
    $level_akses    = $_POST['level_akses']; 




      $sql = mysqli_query($koneksi,"SELECT * FROM tb_akun WHERE  username='$username'  ") or die(mysql_error());
$cek=mysqli_num_rows($sql);

if ($cek > 0){
   echo "<script> alert ('Tambah akun gagal, Username ".$username." sudah ada!');window.location.href='?p=akun' </script>" ;
} else {

    
            $sql = mysqli_query($koneksi," INSERT INTO tb_akun (nama_akun,jenis_kelamin,email,no_hp,username,password,level_akses) 
            VALUES ('$nama_akun','$jenis_kelamin','$email','$no_hp','$username','$password','$level_akses')  ");


            if ($sql) {
               echo "<script> alert ('Tambah Data Akun Pengguna Berhasil!');window.location.href='?p=akun' </script>" ;
             } else {
              echo "<script> alert ('Tambah Data Akun Pengguna Gagal!');window.location.href='?p=akun' </script>" ;
             }

           }
      

 

  }
  
       
  ?>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-2">
                    <a type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-default" style="color:white;"><i class="fas fa-plus"></i> Tambah</a>
                    </div>
                    <div class="col-sm-2">
                    <a href="?p=index" class="btn btn-block btn-warning" style="color:grey;">Kembali</a>
                    </div>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pengguna</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>No Hp</th>
                    <th>Username</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                  $no = 1;
$query = mysqli_query($koneksi,"SELECT * FROM tb_akun WHERE level_akses NOT LIKE '%Admin%' GROUP BY id_akun DESC");
while($data  = mysqli_fetch_assoc($query)){
?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['nama_akun']; ?></td>
                    <td><?php echo $data['jenis_kelamin']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['no_hp']; ?></td>
                    <td><?php echo $data['username']; ?></td>
                    <td>
                  
                      <a href="?p=uakun&akn=<?php echo $data['id_akun']; ?>" class="btn btn-block btn-info" ><i class="fas fa-pen" style="color:white;"></i></a>
                 
                  
                      <a href="?p=hakun&akn=<?php echo $data['id_akun']; ?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-block btn-danger" ><i class="fas fa-trash" style="color:white;"></i></a>
                
                    </td>
                  </tr>
                <?php $no++; } ?>
                  </tbody>
                </table>

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
              <h4 class="modal-title">Tambah Akun Pengguna</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Nama Akun</label>
                    <input type="text" name="nama_akun" class="form-control"  placeholder="Masukkan Nama Lengkap" required>
                  </div>
                  <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <!-- select -->
                      <div class="form-group">
                        <select class="custom-select" name="jenis_kelamin">
                          <option value="">-- PILIH JENIS KELAMIN --</option>
                          <option value="Laki - Laki">Laki - Laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control"  placeholder="Masukkan Alamat Email" required>
                  </div>
                  <div class="form-group">
                    <label for="">Nomor HP</label>
                    <input type="text" name="no_hp" class="form-control"  placeholder="Masukkan Nomor Hp" required>
                  </div>
                  <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control"  placeholder="Username" required>
                  </div>
                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control"  placeholder="Password" required>
                  </div>
                  <div class="form-group">
                    <label for="">Pilih Level Akses</label>
                      <!-- select -->
                      <div class="form-group">
                        <select class="custom-select" name="level_akses" required>
                          <option value="">-- PILIH Level --</option>
                          <option value="user">USER</option>
                        </select>
                      </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnSmpanAkun" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->