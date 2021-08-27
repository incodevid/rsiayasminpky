<!-- Content Wrapper. Contains page content -->

   <div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 ">Kelola Data Galeri</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?p=dashboard" style="color:black;">Beranda</a></li>
              <li class="breadcrumb-item active">Kelola Data Galeri</li>
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
                <h3 class="card-title">Daftar Data Galeri</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>

              <?php
      
       
    if (isset($_POST['BtnSmpanGaleri'])) {
    
  
    $id_album    = $_POST['id_album'];
    $nama_foto   = $_POST['nama_foto'];

    $namafolder  ="dist/img/galeri/";



$sql = mysqli_query($koneksi,"SELECT * FROM tb_galeri WHERE nama_foto='$nama_foto'  ") or die(mysql_error());
$cek=mysqli_num_rows($sql);

if ($cek > 0){
   echo "<script> alert ('Tambah galeri gagal, Nama foto ".$nama_foto." sudah ada!');window.location.href='?p=galeri' </script>" ;
} else {



    if (!empty($_FILES["file_foto"]["tmp_name"])) {   
    $jenis_gambar=$_FILES['file_foto']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")     {      
     $jpg =  $nama_foto.".jpg";               
    if (move_uploaded_file($_FILES['file_foto']['tmp_name'], $namafolder . $jpg)) {


    
            $sql = mysqli_query($koneksi," INSERT INTO tb_galeri (id_album,nama_foto,file_foto) 
            VALUES ('$id_album','$nama_foto','$jpg')  ");


            if ($sql) {
               echo "<script> alert ('Tambah Galeri Berhasil!');window.location.href='?p=galeri' </script>" ;
             } else {
              echo "<script> alert ('Tambah Galeri Gagal!');window.location.href='?p=galeri' </script>" ;
             }

            } else {
    ?>        
    <script> alert ('Gagal Upload!');window.location.href='?p=galeri' </script>
    <?php
} 
    }
    else {    
     ?>
     <script> alert ('Upload Gagal!, File Bukan JPG/Jpeg');window.location.href='?p=galeri' </script>

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
                    <th>Nama Album</th>
                    <th>Nama Foto</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                  $no = 1;
$query = mysqli_query($koneksi,"SELECT * FROM tb_galeri a INNER JOIN tb_album b ON a.id_album=b.id_album ORDER BY a.id_galeri DESC");
while($data  = mysqli_fetch_assoc($query)){

?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['nama_album']; ?></td>
                    <td><?php echo $data['nama_foto']; ?></td>
                    <td>
                      <center>
                      <img src="dist/img/galeri/<?php echo $data['file_foto']; ?>" style="border-radius: 5%;" width="400px" data-toggle="modal" data-target="#modalUbahFoto<?php echo $data['id_galeri']; ?>" ></td>
                      </center>
                    </td>
                  
                    <td>
                  
                      <a data-toggle="modal" data-target="#modalUbah<?php echo $data['id_galeri']; ?>" class="btn btn-block btn-info" ><i class="fas fa-pen" style="color:white;"></i></a>
                 
                  
                      <a href="?p=hgaleri&akn=<?php echo $data['id_galeri']; ?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-block btn-danger" ><i class="fas fa-trash" style="color:white;"></i></a>
                
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
              <h4 class="modal-title">Tambah Data Galeri</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Album Galeri</label>
                    <select class="form-control select2" name="id_album" required>
                      <option value="">--PILIH ALBUM--</option>
                      <?php
                      $qbum = mysqli_query($koneksi, "SELECT * FROM tb_album");
                      while($datbum=mysqli_fetch_assoc($qbum)){
                      ?>
                      <option value="<?php echo $datbum['id_album']; ?>"><?php echo $datbum['nama_album']; ?></option>
                    <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Nama Foto</label>
                    <input type="text" name="nama_foto" class="form-control"  placeholder="Masukkan Nama Foto Galeri" required>
                  </div>
                  <div class="form-group">
                    <label for="">Foto Galeri</label>
                    <div class="custom-file">
                    <input type="file" name="file_foto" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Pilih File Foto Galeri</label>
                  </div>
                  </div>
                  
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnSmpanGaleri" class="btn btn-primary">Simpan</button>
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

$qudatgal = mysqli_query($koneksi,"SELECT * FROM tb_galeri a INNER JOIN tb_album b ON a.id_album=b.id_album ORDER BY a.id_galeri DESC");
while($datgal=mysqli_fetch_assoc($qudatgal)){

?>
<div class="modal fade" id="modalUbah<?php echo $datgal['id_galeri']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Data </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahGaleri'])) {
    
    $id_galeri      = $_POST['id_galeri'];
    $id_album       = $_POST['id_album'];
    $nama_foto      = $_POST['nama_foto'];
    
            $sql = mysqli_query($koneksi," UPDATE tb_galeri SET id_album='$id_album',nama_foto='$nama_foto' WHERE id_galeri='$id_galeri'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Data Galeri Berhasil!");window.location.href="?p=galeri" </script>' ;
             } else {
              echo '<script> alert ("Ubah Data Galeri Gagal!");window.location.href="?p=galeri" </script>' ;
             }
      

  

  }
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Album Galeri</label>
                    <select class="form-control select2" name="id_album" required>
                      <option value="<?php echo $datgal['id_album']; ?>"><?php echo $datgal['nama_album']; ?></option>
                      <?php
                      $qbum = mysqli_query($koneksi, "SELECT * FROM tb_album");
                      while($datbum=mysqli_fetch_assoc($qbum)){
                      ?>
                      <option value="<?php echo $datbum['id_album']; ?>"><?php echo $datbum['nama_album']; ?></option>
                    <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Nama Foto</label>
                    <input type="hidden" name="id_galeri" class="form-control" value="<?php echo $datgal['id_galeri']; ?>" required>
                    <input type="text" name="nama_foto" class="form-control"  placeholder="Masukkan Nama Foto Galeri" value="<?php echo $datgal['nama_foto']; ?>" required>
                  </div>
                                    
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahGaleri" class="btn btn-primary">Simpan</button>
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

$qugal = mysqli_query($koneksi,"SELECT * FROM tb_galeri a INNER JOIN tb_album b ON a.id_album=b.id_album ORDER BY a.id_galeri DESC");
while($datfot=mysqli_fetch_assoc($qugal)){

?>
<div class="modal fade" id="modalUbahFoto<?php echo $datfot['id_galeri']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Foto Galeri<br> "<?php echo $datfot['nama_foto']; ?>"</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahFotoGaleri'])) {
    
    $id_galeri            = $_POST['id_galeri'];
    $nama_foto            = $_POST['nama_foto'];

    $namafolder                ="dist/img/galeri/";

    if (!empty($_FILES["file_foto"]["tmp_name"])) {   
    $jenis_gambar=$_FILES['file_foto']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")     {      
     $jpg =  $nama_foto.".jpg";               
    if (move_uploaded_file($_FILES['file_foto']['tmp_name'], $namafolder . $jpg)) {
    
            $sql = mysqli_query($koneksi," UPDATE tb_galeri SET file_foto='$jpg' WHERE id_galeri='$id_galeri'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Data Foto Berhasil!");window.location.href="?p=galeri" </script>' ;
             } else {
              echo '<script> alert ("Ubah Data Foto Gagal!");window.location.href="?p=galeri" </script>' ;
             }
      
             } else {
    ?>        
    <script> alert ('Gagal Upload!');window.location.href='?p=galeri' </script>
    <?php
} 
    }
    else {    
     ?>
     <script> alert ('Upload Gagal!, File Bukan JPG/Jpeg');window.location.href='?p=galeri' </script>

      <?php
 } 
    }

}
  

  
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <center>
                  <img src="dist/img/galeri/<?php echo $datfot['file_foto']; ?>" style="border-radius: 5%;" width="400px" >
                  </center><br>
                  <div class="form-group">
                    <label for="">Nama Foto</label>
                    <input type="text" name="nama_foto" class="form-control"   value="<?php echo $datfot['nama_foto']; ?>" readonly>
                    <input type="hidden" name="id_galeri" class="form-control"   value="<?php echo $datfot['id_galeri']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="">Foto Baru</label>
                    <div class="custom-file">
                    <input type="file" name="file_foto" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Pilih File Foto Galeri</label>
                  </div>
                  </div>
                                    
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahFotoGaleri" class="btn btn-primary">Simpan</button>
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


