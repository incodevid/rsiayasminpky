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
              <li class="breadcrumb-item"><a href="?p=dashboard" style="color:black;">Beranda</a></li>
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
    $nik            = $_POST['nik'];
    $departemen     = $_POST['departemen'];
    $username       = $_POST['username']; 
    $password       = $_POST['password']; 
    $level_akses    = $_POST['level_akses']; 




      $sql = mysqli_query($koneksi,"SELECT * FROM tb_akun WHERE  username='$username'  ") or die(mysql_error());
$cek=mysqli_num_rows($sql);

if ($cek > 0){
   echo "<script> alert ('Tambah akun gagal, Username ".$username." sudah ada!');window.location.href='?p=akun' </script>" ;
} else {

    
            $sql = mysqli_query($koneksi," INSERT INTO tb_akun (nama_akun,jenis_kelamin,email,nik,departemen,username,password,level_akses) 
            VALUES ('$nama_akun','$jenis_kelamin','$email','$nik','$departemen','$username','$password','$level_akses')  ");


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
                    <a href="?p=dashboard" class="btn btn-block btn-warning" style="color:white;">Kembali</a>
                    </div>
                </div>
            
                <table id="example1" width="1900px" class="table table-bordered table-striped ">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pengguna</th>
                    <th >Jenis Kelamin</th>
                    <th>Email</th>
                    <th>NIK</th>
                    <th>Departemen</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                  $no = 1;
$query = mysqli_query($koneksi,"SELECT * FROM tb_akun WHERE level_akses NOT LIKE '%super%' GROUP BY id_akun DESC");
while($data  = mysqli_fetch_assoc($query)){
?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['nama_akun']; ?></td>
                    <td ><?php echo substr($data['jenis_kelamin'],0,1) ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['nik']; ?></td>
                    <td><?php echo $data['departemen']; ?></td>
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['password']; ?></td>
                    <td><?php echo $data['level_akses']; ?></td>
                    <td>
                  
                      <a data-toggle="modal" data-target="#modalUbah<?php echo $data['id_akun']; ?>" class="btn btn-block btn-info" ><i class="fas fa-pen" style="color:white;"></i></a>
                 
                  
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
                        <select class="custom-select" name="jenis_kelamin" required>
                          <option value="">-- PILIH JENIS KELAMIN --</option>
                          <option value="Laki-Laki">Laki - Laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control"  placeholder="Masukkan Alamat Email" required>
                  </div>
                  <div class="form-group">
                    <label for="">NIK</label>
                    <input type="text" name="nik" class="form-control"  placeholder="Masukkan Nomor NIK(Nomor Induk Karyawan)" required>
                  </div>
                  <div class="form-group">
                    <label for="">Departemen Unit</label>
                    <input type="text" name="departemen" class="form-control"  placeholder="Masukkan Departemen Unit Karyawan" required>
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
                          <option value="admin">Admin</option>
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