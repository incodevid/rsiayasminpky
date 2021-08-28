<div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Profil Akun</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?p=index" style="color:#6c757d;">Beranda</a></li>
              <li class="breadcrumb-item active">Profil Akun</li>
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
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-warning card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img 
                       src="dist/img/logo-yasmin.jpg"
                       alt="User profile picture"
                       class="circular-image"
                       style="border-color: black;">
                </div>
                <h3 class="profile-username text-center"><?php echo $t['nama_akun']; ?></h3>
                <a href="#" class="btn btn-warning btn-block"><b style="text-transform: uppercase;">Administrator</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            
            <!-- /.card -->
          </div>


          <?php
      
       
    if (isset($_POST['btnSimpan'])) {
    
    $id_akun        = $_SESSION['id_akun'];
    $nama_akun      = $_POST['nama_akun'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $email          = $_POST['email'];
    $nik            = $_POST['nik'];
    $username       = $_POST['username']; 
    $password       = $_POST['password']; 
   


            $sql = mysqli_query($koneksi," UPDATE tb_akun set nama_akun='$nama_akun',jenis_kelamin='$jenis_kelamin',email='$email',nik='$nik',username='$username',password='$password' WHERE id_akun='$id_akun'  ");
            if ($sql) {
               echo "<script> alert ('Update Data Profil Berhasil!');window.location.href='?p=profil' </script>" ;
             } else {
              echo "<script> alert ('Update Data Profil Gagal!');window.location.href='?p=profil' </script>" ;
             }
      
/* 
}
*/
  }
   
            
       
  ?>


  




          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <h3 class="card-title">Ubah Data Profil Akun</h3>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  
                  <div class="tab-pane active" id="settings">
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                      
                      <div class="form-group">
                        <label for="">Nama Akun</label>
                        <input type="text" name="nama_akun" class="form-control"  placeholder="Masukkan Nama Lengkap" required value="<?php echo $t['nama_akun']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" required>
                          <option value="<?php echo $t['jenis_kelamin']; ?>"><?php echo $t['jenis_kelamin']; ?></option>
                          <option value="Laki-Laki">Laki - Laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Tempat Lahir" value="<?php echo $t['email']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="">NIK (Nomor Induk Karyawan)</label>
                        <input type="text" name="nik" class="form-control" placeholder="Tempat Lahir" value="<?php echo $t['nik']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control"  placeholder="Username" required value="<?php echo $t['username']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control"  placeholder="Password" required value="<?php echo $t['password']; ?>">
                      </div>
                      
                      
                      <div class="form-group">
                  
                          <button  class="btn btn-danger">Batal</button>
                          <button type="submit" name="btnSimpan" class="btn btn-info">Simpan</button>
                   
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->

       
          
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


  </div>