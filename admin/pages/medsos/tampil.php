<!-- Content Wrapper. Contains page content -->

   <div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 ">Kelola Data Media Sosial</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?p=dashboard" style="color:black;">Beranda</a></li>
              <li class="breadcrumb-item active">Kelola Data Media Sosial</li>
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
                <h3 class="card-title">Daftar Data Media Sosial</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>

              <?php
      
       
    if (isset($_POST['BtnSmpanMedsos'])) {
    
  
    $nama_medsos    = $_POST['nama_medsos'];
    $link_medsos    = $_POST['link_medsos'];

    $namafolder     ="dist/img/medsos/";



$sql = mysqli_query($koneksi,"SELECT * FROM tb_medsos WHERE nama_medsos='$nama_medsos'  ") or die(mysql_error());
$cek=mysqli_num_rows($sql);

if ($cek > 0){
   echo "<script> alert ('Tambah media sosial gagal, Media ".$nama_medsos." sudah ada!');window.location.href='?p=medsos' </script>" ;
} else {



    if (!empty($_FILES["icon_medsos"]["tmp_name"])) {   
    $jenis_gambar=$_FILES['icon_medsos']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")     {      
     $jpg =  $nama_medsos.".jpg";               
    if (move_uploaded_file($_FILES['icon_medsos']['tmp_name'], $namafolder . $jpg)) {


    
            $sql = mysqli_query($koneksi," INSERT INTO tb_medsos (nama_medsos,link_medsos,icon_medsos) 
            VALUES ('$nama_medsos','$link_medsos','$jpg')  ");


            if ($sql) {
               echo "<script> alert ('Tambah Data Berhasil!');window.location.href='?p=medsos' </script>" ;
             } else {
              echo "<script> alert ('Tambah Data Gagal!');window.location.href='?p=medsos' </script>" ;
             }

            } else {
    ?>        
    <script> alert ('Gagal Upload!');window.location.href='?p=medsos' </script>
    <?php
} 
    }
    else {    
     ?>
     <script> alert ('Upload Gagal!, File Bukan JPG/Jpeg');window.location.href='?p=medsos' </script>

      <?php
 } 
    }


           
      }
 
  }
  
       
  ?>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row mb-2">
                  <?php
                    $qmed = mysqli_query($koneksi, "SELECT *,COUNT(id_medsos) AS jml_medsos FROM tb_medsos ");
                    while($datmed=mysqli_fetch_assoc($qmed)){
                    if($datmed['jml_medsos']=='3'){
                    ?>
                    
                    <?php }else{ ?>
                      <div class="col-sm-2">
                      <a type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-default" style="color:white;"><i class="fas fa-plus"></i> Tambah</a>
                      </div>
                  <?php }} ?>

                    <div class="col-sm-2">
                    <a href="?p=dashboard" class="btn btn-block btn-warning" style="color:white;">Kembali</a>
                    </div>
                </div>
            
                <table id="example1" width="1900px" class="table table-bordered table-striped ">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Media Sosial</th>
                    <th>Link Media</th>
                    <th>Icon Media</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                  $no = 1;
$query = mysqli_query($koneksi,"SELECT * FROM tb_medsos ORDER BY id_medsos DESC");
while($data  = mysqli_fetch_assoc($query)){

?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['nama_medsos']; ?></td>
                    <td><a href="<?php echo $data['link_medsos']; ?>" target="_blank"><?php echo $data['link_medsos']; ?></a></td>
                    <td>
                      <center>
                      <img src="dist/img/medsos/<?php echo $data['icon_medsos']; ?>" class="circular-image" data-toggle="modal" data-target="#modalUbahFoto<?php echo $data['id_medsos']; ?>" ></td>
                      </center>
                    </td>
                  
                    <td>
                  
                      <a data-toggle="modal" data-target="#modalUbah<?php echo $data['id_medsos']; ?>" class="btn btn-block btn-info" ><i class="fas fa-pen" style="color:white;"></i></a>
                 
                  
                      <a href="?p=hmedsos&akn=<?php echo $data['id_medsos']; ?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-block btn-danger" ><i class="fas fa-trash" style="color:white;"></i></a>
                
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
              <h4 class="modal-title">Tambah Data Media Sosial</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="">Nama Media Sosial</label>
                    <input type="text" name="nama_medsos" class="form-control"  placeholder="Masukkan Nama Layanan" required>
                  </div>
                  <div class="form-group">
                    <label for="">Link Media Sosial</label>
                    <input type="text" name="link_medsos" class="form-control"  placeholder="Masukkan Nama Layanan" required>
                  </div>
                  <div class="form-group">
                    <label for="">Icon Media Sosial</label>
                    <div class="custom-file">
                    <input type="file" name="icon_medsos" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Pilih File Icon Media Sosial</label>
                  </div>
                  </div>
                  
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnSmpanMedsos" class="btn btn-primary">Simpan</button>
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

$qudamed = mysqli_query($koneksi,"SELECT * FROM tb_medsos ORDER BY id_medsos DESC");
while($datmed=mysqli_fetch_assoc($qudamed)){

?>
<div class="modal fade" id="modalUbah<?php echo $datmed['id_medsos']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Data<br> "<?php echo $datmed['nama_medsos']; ?>"</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahMedsos'])) {
    
    $id_medsos         = $_POST['id_medsos'];
    $nama_medsos       = $_POST['nama_medsos'];
    $link_medsos       = $_POST['link_medsos'];
    
            $sql = mysqli_query($koneksi," UPDATE tb_medsos SET nama_medsos='$nama_medsos',link_medsos='$link_medsos' WHERE id_medsos='$id_medsos'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Data Berhasil!");window.location.href="?p=medsos" </script>' ;
             } else {
              echo '<script> alert ("Ubah Data Gagal!");window.location.href="?p=medsos" </script>' ;
             }
      

  

  }
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Nama Media Sosial</label>
                    <input type="text" name="nama_medsos" class="form-control" value="<?php echo $datmed['nama_medsos']; ?>" placeholder="Masukkan Nama Layanan" required>
                    <input type="hidden" name="id_medsos" class="form-control" value="<?php echo $datmed['id_medsos']; ?>"  required>
                  </div>
                  <div class="form-group">
                    <label for="">Link Media Sosial</label>
                    <input type="text" name="link_medsos" class="form-control" value="<?php echo $datmed['link_medsos']; ?>"  placeholder="Masukkan Nama Layanan" required>
                  </div>
                                    
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahMedsos" class="btn btn-primary">Simpan</button>
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

$qumed = mysqli_query($koneksi,"SELECT * FROM tb_medsos ORDER BY id_medsos DESC");
while($datfot=mysqli_fetch_assoc($qumed)){

?>
<div class="modal fade" id="modalUbahFoto<?php echo $datfot['id_medsos']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Foto Media Sosial<br> "<?php echo $datfot['nama_medsos']; ?>"</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahFotomedsos'])) {
    
    $id_medsos            = $_POST['id_medsos'];
    $nama_medsos          = $_POST['nama_medsos'];

    $namafolder           ="dist/img/medsos/";

    if (!empty($_FILES["icon_medsos"]["tmp_name"])) {   
    $jenis_gambar=$_FILES['icon_medsos']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")     {      
     $jpg =  $nama_medsos.".jpg";               
    if (move_uploaded_file($_FILES['icon_medsos']['tmp_name'], $namafolder . $jpg)) {
    
            $sql = mysqli_query($koneksi," UPDATE tb_medsos SET icon_medsos='$jpg' WHERE id_medsos='$id_medsos'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Data Icon Berhasil!");window.location.href="?p=medsos" </script>' ;
             } else {
              echo '<script> alert ("Ubah Data Icon Gagal!");window.location.href="?p=medsos" </script>' ;
             }
      
             } else {
    ?>        
    <script> alert ('Gagal Upload!');window.location.href='?p=medsos' </script>
    <?php
} 
    }
    else {    
     ?>
     <script> alert ('Upload Gagal!, File Bukan JPG/Jpeg');window.location.href='?p=medsos' </script>

      <?php
 } 
    }

}
  

  
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <center>
                  <img src="dist/img/medsos/<?php echo $datfot['icon_medsos']; ?>" class="circular-image" >
                  </center>
                  <div class="form-group">
                    <label for="">Nama Media Sosial</label>
                    <input type="text" name="nama_medsos" class="form-control"   value="<?php echo $datfot['nama_medsos']; ?>" readonly>
                    <input type="hidden" name="id_medsos" class="form-control"   value="<?php echo $datfot['id_medsos']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="">Icon Media Sosial</label>
                    <div class="custom-file">
                    <input type="file" name="icon_medsos" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Pilih File Icon Media Sosial</label>
                  </div>
                  </div>
                                    
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahFotomedsos" class="btn btn-primary">Simpan</button>
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


