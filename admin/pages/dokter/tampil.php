<!-- Content Wrapper. Contains page content -->

   <div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 ">Kelola Data Dokter</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?p=dashboard" style="color:black;">Beranda</a></li>
              <li class="breadcrumb-item active">Kelola Data Dokter</li>
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
                <h3 class="card-title">Daftar Data Dokter</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>

              <?php
      
       
    if (isset($_POST['BtnSmpanDokter'])) {
    
  
    $id_kategori_dokter      = $_POST['id_kategori_dokter'];
    $nama_dokter             = $_POST['nama_dokter'];
    $profil_dokter           = $_POST['profil_dokter'];
    $tips_gaya_sehat         = $_POST['tips_gaya_sehat'];

    $namafolder              ="dist/img/foto_dokter/";



$sql = mysqli_query($koneksi,"SELECT * FROM tb_kategori_dokter WHERE  nama_kategori='$nama_kategori'  ") or die(mysql_error());
$cek=mysqli_num_rows($sql);

if ($cek > 0){
   echo "<script> alert ('Tambah akun gagal, Kategori ".$nama_kategori." sudah ada!');window.location.href='?p=ddokter' </script>" ;
} else {


  if (!empty($_FILES["foto_dokter"]["tmp_name"])) {   
    $jenis_gambar=$_FILES['foto_dokter']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")     {      
     $jpg =  $nama_dokter.".jpg";               
    if (move_uploaded_file($_FILES['foto_dokter']['tmp_name'], $namafolder . $jpg)) {

    
            $sql = mysqli_query($koneksi," INSERT INTO tb_dokter_kami (id_kategori_dokter,nama_dokter,profil_dokter,tips_gaya_sehat,foto_dokter) 
            VALUES ('$id_kategori_dokter','$nama_dokter','$profil_dokter','$tips_gaya_sehat','$jpg')  ");


            if ($sql) {
               echo "<script> alert ('Tambah Data Dokter Berhasil!');window.location.href='?p=ddokter' </script>" ;
             } else {
              echo "<script> alert ('Tambah Data Dokter Gagal!');window.location.href='?p=ddokter' </script>" ;
             }

           } else {
    ?>        
    <script> alert ('Gagal Upload!');window.location.href='?p=ddokter' </script>
    <?php
} 
    }
    else {    
     ?>
     <script> alert ('Upload Gagal!, File Bukan JPG/Jpeg');window.location.href='?p=ddokter' </script>

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
                    <th>Nama Dokter</th>
                    <th>Kategori Dokter</th>
                    <th>Profil Dokter</th>
                    <th>Tips Kesehatan</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                  $no = 1;
$query = mysqli_query($koneksi,"SELECT * FROM tb_dokter_kami a INNER JOIN tb_kategori_dokter b ON a.id_kategori_dokter=b.id_kategori_dokter ORDER BY a.id_dokter_kami DESC");
while($data  = mysqli_fetch_assoc($query)){
?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['nama_dokter']; ?></td>
                    <td><?php echo $data['nama_kategori']; ?></td>
                    <td><?php echo $data['profil_dokter']; ?></td>
                    <td><?php echo $data['tips_gaya_sehat']; ?></td>
                    <td>
                    <center>
                      <img src="dist/img/foto_dokter/<?php echo $data['foto_dokter']; ?>" class="circular-image" data-toggle="modal" data-target="#modalUbahFoto<?php echo $data['id_dokter_kami']; ?>" ></td>
                    </center>
                    <td>
                  
                      <a data-toggle="modal" data-target="#modalUbah<?php echo $data['id_dokter_kami']; ?>" class="btn btn-block btn-info" ><i class="fas fa-pen" style="color:white;"></i></a>
                 
                  
                      <a href="?p=hddokter&akn=<?php echo $data['id_dokter_kami']; ?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-block btn-danger" ><i class="fas fa-trash" style="color:white;"></i></a>
                
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
              <h4 class="modal-title">Tambah Data Dokter</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Kategori Dokter</label>
                    <select class="form-control select2" name="id_kategori_dokter" required>
                      <option value="">--PILIH KATEGORI--</option>
                      <?php
                      $qkdokter = mysqli_query($koneksi, "SELECT * FROM tb_kategori_dokter");
                      while($datkat=mysqli_fetch_assoc($qkdokter)){
                      ?>
                      <option value="<?php echo $datkat['id_kategori_dokter']; ?>"><?php echo $datkat['nama_kategori']; ?></option>
                    <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Nama Dokter</label>
                    <input type="text" name="nama_dokter" class="form-control"  placeholder="Masukkan Nama Dokter" required>
                  </div>
                  <div class="form-group">
                    <label for="">Tentang Dokter</label>
                    <textarea class="form-control" name="profil_dokter">tuliskan tentang dokter disini.</textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Tips Gaya Sehat</label>
                    <textarea class="form-control" name="tips_gaya_sehat">tuliskan tips disini. Berikan tanda koma di akhir kalimat jika tips lebih dari satu.</textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Foto Dokter</label>
                    <div class="custom-file">
                    <input type="file" name="foto_dokter" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Pilih File Foto Dokter</label>
                  </div>
                  </div>
                  
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnSmpanDokter" class="btn btn-primary">Simpan</button>
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

$quakun = mysqli_query($koneksi,"SELECT * FROM tb_dokter_kami a INNER JOIN tb_kategori_dokter b ON a.id_kategori_dokter=b.id_kategori_dokter ORDER BY a.id_dokter_kami DESC");
while($datkun=mysqli_fetch_assoc($quakun)){

?>
<div class="modal fade" id="modalUbah<?php echo $datkun['id_dokter_kami']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Data Dokter <?php echo $datkun['nama_dokter']; ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahDataDokter'])) {
    
    $id_dokter_kami            = $_POST['id_dokter_kami'];
    $id_kategori_dokter        = $_POST['id_kategori_dokter'];
    $nama_dokter               = $_POST['nama_dokter'];
    $profil_dokter             = $_POST['profil_dokter'];
    $tips_gaya_sehat           = $_POST['tips_gaya_sehat'];
    
            $sql = mysqli_query($koneksi," UPDATE tb_dokter_kami SET id_kategori_dokter='$id_kategori_dokter',nama_dokter='$nama_dokter',profil_dokter='$profil_dokter',tips_gaya_sehat='$tips_gaya_sehat' WHERE id_dokter_kami='$id_dokter_kami'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Data Dokter Berhasil!");window.location.href="?p=ddokter" </script>' ;
             } else {
              echo '<script> alert ("Ubah Data Dokter Gagal!");window.location.href="?p=ddokter" </script>' ;
             }
      

  

  }
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Kategori Dokter</label>
                    <select class="form-control select2" name="id_kategori_dokter" required>
                      <option value="<?php echo $datkun['id_kategori_dokter']; ?>"><?php echo $datkun['nama_kategori']; ?></option>
                      <?php
                      $qkdokter = mysqli_query($koneksi, "SELECT * FROM tb_kategori_dokter");
                      while($datkat=mysqli_fetch_assoc($qkdokter)){
                      ?>
                      <option value="<?php echo $datkat['id_kategori_dokter']; ?>"><?php echo $datkat['nama_kategori']; ?></option>
                    <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Nama Dokter</label>
                    <input type="text" name="nama_dokter" class="form-control"  placeholder="Masukkan Nama Dokter" value="<?php echo $datkun['nama_dokter']; ?>" required>
                    <input type="hidden" name="id_dokter_kami" class="form-control"  placeholder="Masukkan Nama Dokter" value="<?php echo $datkun['id_dokter_kami']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="">Tentang Dokter</label>
                    <textarea class="form-control" name="profil_dokter"><?php echo $datkun['profil_dokter']; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Tips Gaya Sehat</label>
                    <textarea class="form-control" name="tips_gaya_sehat"><?php echo $datkun['tips_gaya_sehat']; ?></textarea>
                  </div>
                                    
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahDataDokter" class="btn btn-primary">Simpan</button>
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

$quakun = mysqli_query($koneksi,"SELECT * FROM tb_dokter_kami a INNER JOIN tb_kategori_dokter b ON a.id_kategori_dokter=b.id_kategori_dokter ORDER BY a.id_dokter_kami DESC");
while($datfot=mysqli_fetch_assoc($quakun)){

?>
<div class="modal fade" id="modalUbahFoto<?php echo $datfot['id_dokter_kami']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Foto Dokter <?php echo $datfot['nama_dokter']; ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahFotoDokter'])) {
    
    $id_dokter_kami            = $_POST['id_dokter_kami'];
    $nama_dokter               = $_POST['nama_dokter'];

    $namafolder                ="dist/img/foto_dokter/";

    if (!empty($_FILES["foto_dokter"]["tmp_name"])) {   
    $jenis_gambar=$_FILES['foto_dokter']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")     {      
     $jpg =  $nama_dokter.".jpg";               
    if (move_uploaded_file($_FILES['foto_dokter']['tmp_name'], $namafolder . $jpg)) {
    
            $sql = mysqli_query($koneksi," UPDATE tb_dokter_kami SET foto_dokter='$jpg' WHERE id_dokter_kami='$id_dokter_kami'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Data Foto Berhasil!");window.location.href="?p=ddokter" </script>' ;
             } else {
              echo '<script> alert ("Ubah Data Foto Gagal!");window.location.href="?p=ddokter" </script>' ;
             }
      
             } else {
    ?>        
    <script> alert ('Gagal Upload!');window.location.href='?p=ddokter' </script>
    <?php
} 
    }
    else {    
     ?>
     <script> alert ('Upload Gagal!, File Bukan JPG/Jpeg');window.location.href='?p=ddokter' </script>

      <?php
 } 
    }

}
  

  
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <center>
                  <img src="dist/img/foto_dokter/<?php echo $datfot['foto_dokter']; ?>" class="circular-image" >
                  </center>
                  <div class="form-group">
                    <label for="">Nama Dokter</label>
                    <input type="text" name="nama_dokter" class="form-control"  placeholder="Masukkan Nama Dokter" value="<?php echo $datfot['nama_dokter']; ?>" readonly>
                    <input type="hidden" name="id_dokter_kami" class="form-control"  placeholder="Masukkan Nama Dokter" value="<?php echo $datfot['id_dokter_kami']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="">Foto Baru</label>
                    <div class="custom-file">
                    <input type="file" name="foto_dokter" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Pilih File Foto Dokter</label>
                    </div>
                  </div>
                                    
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahFotoDokter" class="btn btn-primary">Simpan</button>
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