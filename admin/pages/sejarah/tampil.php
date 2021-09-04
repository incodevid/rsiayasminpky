<!-- Content Wrapper. Contains page content -->

   <div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 ">Kelola Data Sejarah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?p=dashboard" style="color:black;">Beranda</a></li>
              <li class="breadcrumb-item active">Kelola Data Sejarah</li>
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
                <h3 class="card-title">Data Sejarah</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>

              <?php
      
       
    if (isset($_POST['BtnSmpanSejarah'])) {
    
  
    $tanggal                  = date('YmdHis');
    $text_sejarah             = $_POST['text_sejarah'];

    $namafolder               ="dist/img/sejarah/";


if (!empty($_FILES["foto_cover"]["tmp_name"])) {   
    $jenis_gambar=$_FILES['foto_cover']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")     {      
     $jpg =  $tanggal.".jpg";               
    if (move_uploaded_file($_FILES['foto_cover']['tmp_name'], $namafolder . $jpg)) {

    
            $sql = mysqli_query($koneksi," INSERT INTO tb_sejarah (text_sejarah,foto_cover) 
            VALUES ('$text_sejarah','$jpg')  ");


            if ($sql) {
               echo "<script> alert ('Tambah Sejarah Berhasil!');window.location.href='?p=sejarah' </script>" ;
             } else {
              echo "<script> alert ('Tambah Sejarah Gagal!');window.location.href='?p=sejarah' </script>" ;
             }


             } else {
    ?>        
    <script> alert ('Gagal Upload!');window.location.href='?p=sejarah' </script>
    <?php
} 
    }
    else {    
     ?>
     <script> alert ('Upload Gagal!, File Bukan JPG/Jpeg');window.location.href='?p=sejarah' </script>

      <?php
 } 
    }

           
 
  }
  
       
  ?>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row mb-2">
                  <?php
                    $qvisi = mysqli_query($koneksi, "SELECT *,COUNT(id_sejarah) AS jml_sejarah FROM tb_sejarah ");
                    while($datvisi=mysqli_fetch_assoc($qvisi)){
                    if($datvisi['jml_sejarah']=='0'){
                    ?>
                    <div class="col-sm-2">
                    <a type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-default" style="color:white;"><i class="fas fa-plus"></i> Tambah</a>
                    </div>
                    <?php }else{ ?>
                  <?php }} ?>

                    <div class="col-sm-2">
                    <a href="?p=dashboard" class="btn btn-block btn-warning" style="color:white;">Kembali</a>
                    </div>
                </div>
            
                <table id="example1" width="1900px" class="table table-bordered table-striped ">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Teks Sejarah</th>
                    <th>Foto Cover</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                  $no = 1;
$query = mysqli_query($koneksi,"SELECT * FROM tb_sejarah ");
while($data  = mysqli_fetch_assoc($query)){

?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['text_sejarah']; ?></td>
                    <td>
                      <center>
                      <img src="dist/img/sejarah/<?php echo $data['foto_cover']; ?>" class="rounded" width="400px"  data-toggle="modal" data-target="#modalUbahFoto<?php echo $data['id_sejarah']; ?>" ></td>
                      </center>
                    </td>
                  
                    <td>
                  
                      <a data-toggle="modal" data-target="#modalUbah<?php echo $data['id_sejarah']; ?>" class="btn btn-block btn-info" ><i class="fas fa-pen" style="color:white;"></i></a>
                 
                  
                      <a href="?p=hsejarah&akn=<?php echo $data['id_sejarah']; ?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-block btn-danger" ><i class="fas fa-trash" style="color:white;"></i></a>
                
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
              <h4 class="modal-title">Tambah Data Sejarah</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Teks Sejarah</label>
                      <textarea name="text_sejarah" class="ckeditor" id="editor1"  cols="35" rows="10">
                        Tulis <u>sejarah</u> <strong>disini</strong>
                      </textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Foto Cover</label>
                    <div class="custom-file">
                    <input type="file" name="foto_cover" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Pilih File Foto Cover</label>
                  </div>
                  </div>
                  
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnSmpanSejarah" class="btn btn-primary">Simpan</button>
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

$qsej = mysqli_query($koneksi,"SELECT * FROM tb_sejarah");
while($datsej=mysqli_fetch_assoc($qsej)){

?>
<div class="modal fade" id="modalUbah<?php echo $datsej['id_sejarah']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Data Sejarah</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahSejarah'])) {
    
    $id_sejarah                = $_POST['id_sejarah'];
    $text_sejarah              = $_POST['text_sejarah'];
    
            $sql = mysqli_query($koneksi," UPDATE tb_sejarah SET text_sejarah='$text_sejarah' WHERE id_sejarah='$id_sejarah'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Data Sejarah Berhasil!");window.location.href="?p=sejarah" </script>' ;
             } else {
              echo '<script> alert ("Ubah Data Sejarah Gagal!");window.location.href="?p=sejarah" </script>' ;
             }
      

  

  }
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Teks Sejarah</label>
                      <textarea class="ckeditor" id="editor1"  name="text_sejarah" >
                        <?php echo $datsej['text_sejarah']; ?>
                      </textarea>
                      <input type="hidden" name="id_sejarah" class="form-control"  placeholder="Masukkan Nama Layanan" value="<?php echo $datsej['id_sejarah']; ?>" required>
                  </div>
                                    
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahSejarah" class="btn btn-primary">Simpan</button>
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

$qusej = mysqli_query($koneksi,"SELECT * FROM tb_sejarah");
while($datfot=mysqli_fetch_assoc($qusej)){

?>
<div class="modal fade" id="modalUbahFoto<?php echo $datfot['id_sejarah']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Foto Sejarah</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahFotoSejarah'])) {
    
    $id_sejarah            = $_POST['id_sejarah'];
    $tanggal               = date('YmdHis');

    $namafolder                ="dist/img/sejarah/";

    if (!empty($_FILES["foto_cover"]["tmp_name"])) {   
    $jenis_gambar=$_FILES['foto_cover']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")     {      
     $jpg =  $tanggal.".jpg";               
    if (move_uploaded_file($_FILES['foto_cover']['tmp_name'], $namafolder . $jpg)) {
    
            $sql = mysqli_query($koneksi," UPDATE tb_sejarah SET foto_cover='$jpg' WHERE id_sejarah='$id_sejarah'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Data Foto Berhasil!");window.location.href="?p=sejarah" </script>' ;
             } else {
              echo '<script> alert ("Ubah Data Foto Gagal!");window.location.href="?p=sejarah" </script>' ;
             }
      
             } else {
    ?>        
    <script> alert ('Gagal Upload!');window.location.href='?p=sejarah' </script>
    <?php
} 
    }
    else {    
     ?>
     <script> alert ('Upload Gagal!, File Bukan JPG/Jpeg');window.location.href='?p=sejarah' </script>

      <?php
 } 
    }

}
  

  
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <center>
                  <img src="dist/img/sejarah/<?php echo $datfot['foto_cover']; ?>" class="rounded" width="400px" >
                  </center><br>
                  <input type="hidden" name="id_sejarah" class="form-control"   value="<?php echo $datfot['id_sejarah']; ?>" readonly>
                  <div class="form-group">
                    <label for="">Foto Baru</label>
                    <div class="custom-file">
                    <input type="file" name="foto_cover" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Pilih File Foto Cover</label>
                  </div>
                  </div>
                                    
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahFotoSejarah" class="btn btn-primary">Simpan</button>
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


