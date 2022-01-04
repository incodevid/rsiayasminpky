<!-- Content Wrapper. Contains page content -->

   <div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 ">Kelola Data Slider</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?p=dashboard" style="color:black;">Beranda</a></li>
              <li class="breadcrumb-item active">Kelola Data Slider</li>
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
                <h3 class="card-title">Daftar Data Slider</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>

              <?php
      
       
    if (isset($_POST['BtnSmpanSlide'])) {
    
  
    $tanggal          = date('YmdHis');
    $namafolder       ="dist/img/slider/";




    if (!empty($_FILES["foto_slide"]["tmp_name"])) {   
    $jenis_gambar=$_FILES['foto_slide']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")     {      
     $jpg =  $tanggal.".jpg";               
    if (move_uploaded_file($_FILES['foto_slide']['tmp_name'], $namafolder . $jpg)) {


    
            $sql = mysqli_query($koneksi," INSERT INTO tb_slide (foto_slide) 
            VALUES ('$jpg')  ");


            if ($sql) {
               echo "<script> alert ('Tambah Data Slide Berhasil!');window.location.href='?p=slider' </script>" ;
             } else {
              echo "<script> alert ('Tambah Data Slide Gagal!');window.location.href='?p=slider' </script>" ;
             }

            } else {
    ?>        
    <script> alert ('Gagal Upload!');window.location.href='?p=slider' </script>
    <?php
} 
    }
    else {    
     ?>
     <script> alert ('Upload Gagal!, File Bukan JPG/Jpeg');window.location.href='?p=slider' </script>

      <?php
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
                    <th>Foto Slider</th>
                    <th>Status Aktif</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                  $no = 1;
$query = mysqli_query($koneksi,"SELECT *,COUNT(aktif) AS jml_aktif FROM tb_slide GROUP BY id_slide DESC");
while($data  = mysqli_fetch_assoc($query)){

?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td>
                      <center>
                      <img src="dist/img/slider/<?php echo $data['foto_slide']; ?>" style="border-radius: 5%;" width="400px" data-toggle="modal" data-target="#modalUbahFoto<?php echo $data['id_slide']; ?>" ></td>
                      </center>
                    </td>
                    <td>
                      <?php
                      if($data['jml_aktif']=='1'){
                      ?>
                      <a class="btn btn-block btn-success"><?php echo $data['aktif']; ?></a>
                    <?php }else{ ?>
                      <a class="btn btn-block btn-success">Tidak Aktif</a>
                    <?php } ?>
                    </td>
                    <td>
                  
                      <a data-toggle="modal" data-target="#modalUbah<?php echo $data['id_slide']; ?>" class="btn btn-block btn-info" ><i class="fas fa-pen" style="color:white;"></i></a>               
                  
                      <a href="?p=hslider&akn=<?php echo $data['id_slide']; ?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-block btn-danger" ><i class="fas fa-trash" style="color:white;"></i></a>
                
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
              <h4 class="modal-title">Tambah Data Slider</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Foto Slider</label>
                    <div class="custom-file">
                    <input type="file" name="foto_slide" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Pilih File Foto Slider</label>
                  </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnSmpanSlide" class="btn btn-primary">Simpan</button>
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

$quslide = mysqli_query($koneksi,"SELECT * FROM tb_slide ORDER BY id_slide DESC");
while($datslide=mysqli_fetch_assoc($quslide)){

?>
<div class="modal fade" id="modalUbah<?php echo $datslide['id_slide']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Status Slide</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahStatusSlide'])) {
    
    $id_slide        = $_POST['id_slide'];
    $aktif           = $_POST['aktif'];
    
            $sql1 = mysqli_query($koneksi," UPDATE tb_slide SET aktif='no' WHERE aktif='active'  ");
            $sql = mysqli_query($koneksi," UPDATE tb_slide SET aktif='$aktif' WHERE id_slide='$id_slide'  ");


            if ($sql) {
               echo '<script> alert ("Update Status Berhasil!");window.location.href="?p=slider" </script>' ;
             } else {
              echo '<script> alert ("Update Status Gagal!");window.location.href="?p=slider" </script>' ;
             }
      

  

  }
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <input type="hidden" name="id_slide" value="<?php echo $datslide['id_slide']; ?>">
                  <div class="form-group">
                    <label for="">Status Aktif</label>
                    <select class="form-control select2" name="aktif" required>
                      <option value="">--PILIH STATUS--</option>
                      <option value="active">Aktif</option>
                      <option value="no">Tidak</option>
                    </select>
                  </div>
                                    
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahStatusSlide" class="btn btn-primary">Simpan</button>
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

$qusli = mysqli_query($koneksi,"SELECT * FROM tb_slide ORDER BY id_slide DESC");
while($datfot=mysqli_fetch_assoc($qusli)){

?>
<div class="modal fade" id="modalUbahFoto<?php echo $datfot['id_slide']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Foto Slider</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahFotoSlider'])) {
    
    $id_slide            = $_POST['id_slide'];
    $tanggal             = date('YmdHis');

    $namafolder                ="dist/img/slider/";

    if (!empty($_FILES["foto_slide"]["tmp_name"])) {   
    $jenis_gambar=$_FILES['foto_slide']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")     {      
     $jpg =  $tanggal.".jpg";               
    if (move_uploaded_file($_FILES['foto_slide']['tmp_name'], $namafolder . $jpg)) {
    
            $sql = mysqli_query($koneksi," UPDATE tb_slide SET foto_slide='$jpg' WHERE id_slide='$id_slide'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Data Foto Berhasil!");window.location.href="?p=slider" </script>' ;
             } else {
              echo '<script> alert ("Ubah Data Foto Gagal!");window.location.href="?p=slider" </script>' ;
             }
      
             } else {
    ?>        
    <script> alert ('Gagal Upload!');window.location.href='?p=slider' </script>
    <?php
} 
    }
    else {    
     ?>
     <script> alert ('Upload Gagal!, File Bukan JPG/Jpeg');window.location.href='?p=slider' </script>

      <?php
 } 
    }

}
  

  
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <center>
                  <img src="dist/img/slider/<?php echo $datfot['foto_slide']; ?>" style="border-radius: 5%;" width="400px" >
                  </center><br>
                  <input type="hidden" name="id_slide" class="form-control"   value="<?php echo $datfot['id_slide']; ?>" readonly>
                  <div class="form-group">
                    <label for="">Foto Baru</label>
                    <div class="custom-file">
                    <input type="file" name="foto_slide" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Pilih File Foto Slider</label>
                  </div>
                  </div>
                                    
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahFotoSlider" class="btn btn-primary">Simpan</button>
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