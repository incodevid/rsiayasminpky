<!-- Content Wrapper. Contains page content -->

   <div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 ">Kelola Data Layanan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?p=dashboard" style="color:black;">Beranda</a></li>
              <li class="breadcrumb-item active">Kelola Data layanan</li>
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
                <h3 class="card-title">Daftar Data Layanan</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>

              <?php
      
       
    if (isset($_POST['BtnSmpanlayanan'])) {
    
  
    $id_kategori_layanan    = $_POST['id_kategori_layanan'];
    $nama_layanan           = $_POST['nama_layanan'];
    $deskripsi_layanan      = $_POST['deskripsi_layanan'];

    $namafolder              ="dist/img/layanan/";



$sql = mysqli_query($koneksi,"SELECT * FROM tb_layanan WHERE nama_layanan='$nama_layanan'  ") or die(mysql_error());
$cek=mysqli_num_rows($sql);

if ($cek > 0){
   echo "<script> alert ('Tambah layanan gagal, Layanan ".$nama_layanan." sudah ada!');window.location.href='?p=layanan' </script>" ;
} else {



    if (!empty($_FILES["foto_layanan"]["tmp_name"])) {   
    $jenis_gambar=$_FILES['foto_layanan']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")     {      
     $jpg =  $nama_layanan.".jpg";               
    if (move_uploaded_file($_FILES['foto_layanan']['tmp_name'], $namafolder . $jpg)) {


    
            $sql = mysqli_query($koneksi," INSERT INTO tb_layanan (id_kategori_layanan,nama_layanan,deskripsi_layanan,foto_layanan) 
            VALUES ('$id_kategori_layanan','$nama_layanan','$deskripsi_layanan','$jpg')  ");


            if ($sql) {
               echo "<script> alert ('Tambah Layanan Berhasil!');window.location.href='?p=layanan' </script>" ;
             } else {
              echo "<script> alert ('Tambah Layanan Gagal!');window.location.href='?p=layanan' </script>" ;
             }

            } else {
    ?>        
    <script> alert ('Gagal Upload!');window.location.href='?p=layanan' </script>
    <?php
} 
    }
    else {    
     ?>
     <script> alert ('Upload Gagal!, File Bukan JPG/Jpeg');window.location.href='?p=layanan' </script>

      <?php
 } 
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
                    <th>Nama Layanan</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                  $no = 1;
$query = mysqli_query($koneksi,"SELECT * FROM tb_layanan a INNER JOIN tb_kategori_layanan b ON a.id_kategori_layanan=b.id_kategori_layanan ORDER BY a.id_layanan DESC");
while($data  = mysqli_fetch_assoc($query)){

?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['nama_layanan']; ?></td>
                    <td><?php echo $data['nama_kategori']; ?></td>
                    <td>
                        <a data-toggle="modal" data-target="#modalLihat<?php echo $data['id_layanan']; ?>" class="btn btn-block btn-info" ><i class="fas fa-eye" style="color:white;"></i> Lihat</a>
                    </td>
                    <td>
                      <center>
                      <img src="dist/img/layanan/<?php echo $data['foto_layanan']; ?>" class="circular-image" data-toggle="modal" data-target="#modalUbahFoto<?php echo $data['id_layanan']; ?>" ></td>
                      </center>
                    </td>
                  
                    <td>
                  
                      <a data-toggle="modal" data-target="#modalUbah<?php echo $data['id_layanan']; ?>" class="btn btn-block btn-info" ><i class="fas fa-pen" style="color:white;"></i></a>
                 
                  
                      <a href="?p=hlayanan&akn=<?php echo $data['id_layanan']; ?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-block btn-danger" ><i class="fas fa-trash" style="color:white;"></i></a>
                
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
              <h4 class="modal-title">Tambah Data Layanan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Kategori Layanan</label>
                    <select class="form-control select2" name="id_kategori_layanan" required>
                      <option value="">--PILIH KATEGORI--</option>
                      <?php
                      $qkdokter = mysqli_query($koneksi, "SELECT * FROM tb_kategori_layanan");
                      while($datkat=mysqli_fetch_assoc($qkdokter)){
                      ?>
                      <option value="<?php echo $datkat['id_kategori_layanan']; ?>"><?php echo $datkat['nama_kategori']; ?></option>
                    <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Nama Layanan</label>
                    <input type="text" name="nama_layanan" class="form-control"  placeholder="Masukkan Nama Layanan" required>
                  </div>
                  <div class="form-group">
                    <label for="">Deskripsi</label>
                      <textarea class="ckeditor" id="editor1" name="deskripsi_layanan" >
                        Tulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong>
                      </textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Foto Cover</label>
                    <div class="custom-file">
                    <input type="file" name="foto_layanan" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Pilih File Foto Cover</label>
                  </div>
                  </div>
                  
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnSmpanlayanan" class="btn btn-primary">Simpan</button>
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

$quakun = mysqli_query($koneksi,"SELECT * FROM tb_layanan a INNER JOIN tb_kategori_layanan b ON a.id_kategori_layanan=b.id_kategori_layanan ORDER BY a.id_layanan DESC");
while($datla=mysqli_fetch_assoc($quakun)){

?>
<div class="modal fade" id="modalUbah<?php echo $datla['id_layanan']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Layanan <?php echo $datla['nama_layanan']; ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahlayanan'])) {
    
    $id_layanan                = $_POST['id_layanan'];
    $id_kategori_layanan       = $_POST['id_kategori_layanan'];
    $nama_layanan              = $_POST['nama_layanan'];
    $deskripsi_layanan         = $_POST['deskripsi_layanan'];
    
            $sql = mysqli_query($koneksi," UPDATE tb_layanan SET id_kategori_layanan='$id_kategori_layanan',nama_layanan='$nama_layanan',deskripsi_layanan='$deskripsi_layanan' WHERE id_layanan='$id_layanan'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Layanan Berhasil!");window.location.href="?p=layanan" </script>' ;
             } else {
              echo '<script> alert ("Ubah Layanan Gagal!");window.location.href="?p=layanan" </script>' ;
             }
      

  

  }
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Kategori Layanan</label>
                    <select class="form-control select2" name="id_kategori_layanan" required>
                      <option value="<?php echo $datla['id_kategori_layanan']; ?>"><?php echo $datla['nama_kategori']; ?></option>
                      <?php
                      $qkdokter = mysqli_query($koneksi, "SELECT * FROM tb_kategori_layanan");
                      while($datkat=mysqli_fetch_assoc($qkdokter)){
                      ?>
                      <option value="<?php echo $datkat['id_kategori_layanan']; ?>"><?php echo $datkat['nama_kategori']; ?></option>
                    <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Nama Layanan</label>
                    <input type="text" name="nama_layanan" class="form-control"  placeholder="Masukkan Nama Layanan" value="<?php echo $datla['nama_layanan']; ?>" required>
                    <input type="hidden" name="id_layanan" class="form-control"  placeholder="Masukkan Nama Layanan" value="<?php echo $datla['id_layanan']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="">Deskripsi</label>
                      <textarea class="ckeditor" id="editor1" name="deskripsi_layanan" >
                        <?php echo $datla['deskripsi_layanan']; ?>
                      </textarea>
                  </div>
                                    
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahlayanan" class="btn btn-primary">Simpan</button>
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




      <?php

$quakun = mysqli_query($koneksi,"SELECT * FROM tb_layanan a INNER JOIN tb_kategori_layanan b ON a.id_kategori_layanan=b.id_kategori_layanan ORDER BY a.id_layanan DESC");
while($datli=mysqli_fetch_assoc($quakun)){

?>
<div class="modal fade" id="modalLihat<?php echo $datli['id_layanan']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Lihat Deskripsi <?php echo $datli['nama_layanan']; ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <a><?php echo $datli['deskripsi_layanan']; ?></a>
                  </div>
                                    
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
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


<?php

$quakun = mysqli_query($koneksi,"SELECT * FROM tb_layanan a INNER JOIN tb_kategori_layanan b ON a.id_kategori_layanan=b.id_kategori_layanan ORDER BY a.id_layanan DESC");
while($datfot=mysqli_fetch_assoc($quakun)){

?>
<div class="modal fade" id="modalUbahFoto<?php echo $datfot['id_layanan']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Foto Layanan <?php echo $datfot['nama_layanan']; ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahFotoLayanan'])) {
    
    $id_layanan            = $_POST['id_layanan'];
    $nama_layanan          = $_POST['nama_layanan'];

    $namafolder                ="dist/img/layanan/";

    if (!empty($_FILES["foto_layanan"]["tmp_name"])) {   
    $jenis_gambar=$_FILES['foto_layanan']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")     {      
     $jpg =  $nama_layanan.".jpg";               
    if (move_uploaded_file($_FILES['foto_layanan']['tmp_name'], $namafolder . $jpg)) {
    
            $sql = mysqli_query($koneksi," UPDATE tb_layanan SET foto_layanan='$jpg' WHERE id_layanan='$id_layanan'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Data Foto Berhasil!");window.location.href="?p=layanan" </script>' ;
             } else {
              echo '<script> alert ("Ubah Data Foto Gagal!");window.location.href="?p=layanan" </script>' ;
             }
      
             } else {
    ?>        
    <script> alert ('Gagal Upload!');window.location.href='?p=layanan' </script>
    <?php
} 
    }
    else {    
     ?>
     <script> alert ('Upload Gagal!, File Bukan JPG/Jpeg');window.location.href='?p=layanan' </script>

      <?php
 } 
    }

}
  

  
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <center>
                  <img src="dist/img/layanan/<?php echo $datfot['foto_layanan']; ?>" class="circular-image" >
                  </center>
                  <div class="form-group">
                    <label for="">Nama Layanan</label>
                    <input type="text" name="nama_layanan" class="form-control"   value="<?php echo $datfot['nama_layanan']; ?>" readonly>
                    <input type="hidden" name="id_layanan" class="form-control"   value="<?php echo $datfot['id_layanan']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="">Foto Baru</label>
                    <div class="custom-file">
                    <input type="file" name="foto_layanan" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Pilih File Foto Layanan</label>
                  </div>
                  </div>
                                    
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahFotoLayanan" class="btn btn-primary">Simpan</button>
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


