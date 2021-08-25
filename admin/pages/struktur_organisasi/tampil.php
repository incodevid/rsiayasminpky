<!-- Content Wrapper. Contains page content -->

   <div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 ">Kelola Struktur Organisasi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?p=dashboard" style="color:black;">Beranda</a></li>
              <li class="breadcrumb-item active">Kelola Struktur Organisasi</li>
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
                <h3 class="card-title">Data Struktur Organisasi</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>

              <?php
      
       
    if (isset($_POST['BtnSmpanStruktur'])) {
    
  
    $tanggal            = date('YmdHis');
    $namafolder         ="dist/img/struktur_organisasi/";




    if (!empty($_FILES["foto_struktur"]["tmp_name"])) {   
    $jenis_gambar=$_FILES['foto_struktur']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")     {      
     $jpg =  $tanggal.".jpg";               
    if (move_uploaded_file($_FILES['foto_struktur']['tmp_name'], $namafolder . $jpg)) {


    
            $sql = mysqli_query($koneksi," INSERT INTO tb_struktur (foto_struktur) 
            VALUES ('$jpg')  ");


            if ($sql) {
               echo "<script> alert ('Gambar Struktur Berhasil Diupload!');window.location.href='?p=struktur_organisasi' </script>" ;
             } else {
              echo "<script> alert ('Gambar Struktur Gagal Diupload!');window.location.href='?p=struktur_organisasi' </script>" ;
             }

         } else {
    ?>        
    <script> alert ('Gagal Upload!');window.location.href='?p=struktur_organisasi' </script>
    <?php
} 
    }
    else {    
     ?>
     <script> alert ('Upload Gagal!, File Bukan JPG/Jpeg');window.location.href='?p=struktur_organisasi' </script>

      <?php
 } 
    }  
           
 

  }
  
       
  ?>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row mb-2">
                    <?php
                    $qvisi = mysqli_query($koneksi, "SELECT *,COUNT(id_struktur) AS jml_struktur FROM tb_struktur ");
                    while($datvisi=mysqli_fetch_assoc($qvisi)){
                    if($datvisi['jml_struktur']=='0'){
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
                    <th>Struktur Organisasi</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                  $no = 1;
$query = mysqli_query($koneksi,"SELECT * FROM tb_struktur");
while($data  = mysqli_fetch_assoc($query)){
?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td>
                      <center>
                      <img src="dist/img/struktur_organisasi/<?php echo $data['foto_struktur']; ?>" class="rounded" width="400px" >
                      </center>
                    </td>
                  
                    <td>
                  
                      <a data-toggle="modal" data-target="#modalUbah<?php echo $data['id_struktur']; ?>" class="btn btn-block btn-info" ><i class="fas fa-pen" style="color:white;"></i></a>
                 
                  
                      <a href="?p=hstruktur_organisasi&akn=<?php echo $data['id_struktur']; ?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-block btn-danger" ><i class="fas fa-trash" style="color:white;"></i></a>
                
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
              <h4 class="modal-title">Tambah Struktur</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Gambar Struktur</label>
                    <div class="custom-file">
                    <input type="file" name="foto_struktur" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Pilih File Gambar Struktur Organisasi</label>
                    </div>
                  
                 </div>
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnSmpanStruktur" class="btn btn-primary">Simpan</button>
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

$quakun = mysqli_query($koneksi,"SELECT * FROM tb_struktur ");
while($datstru=mysqli_fetch_assoc($quakun)){

?>
<div class="modal fade" id="modalUbah<?php echo $datstru['id_struktur']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Gambar Struktur</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahFoto'])) {
    
    $id_struktur            = $_POST['id_struktur'];
    $tanggal                = date('YmdHis');

    $namafolder                ="dist/img/struktur_organisasi/";

    if (!empty($_FILES["foto_struktur"]["tmp_name"])) {   
    $jenis_gambar=$_FILES['foto_struktur']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")     {      
     $jpg =  $tanggal.".jpg";               
    if (move_uploaded_file($_FILES['foto_struktur']['tmp_name'], $namafolder . $jpg)) {
    
            $sql = mysqli_query($koneksi," UPDATE tb_struktur SET foto_struktur='$jpg' WHERE id_struktur='$id_struktur'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Data Foto Berhasil!");window.location.href="?p=struktur_organisasi" </script>' ;
             } else {
              echo '<script> alert ("Ubah Data Foto Gagal!");window.location.href="?p=struktur_organisasi" </script>' ;
             }
      
             } else {
    ?>        
    <script> alert ('Gagal Upload!');window.location.href='?p=struktur_organisasi' </script>
    <?php
} 
    }
    else {    
     ?>
     <script> alert ('Upload Gagal!, File Bukan JPG/Jpeg');window.location.href='?p=struktur_organisasi' </script>

      <?php
 } 
    }

}
  

  
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <center>
                  <img src="dist/img/struktur_organisasi/<?php echo $datstru['foto_struktur']; ?>" class="rounded" width="400px" >
                  </center><br>
                  <div class="form-group">
                    <label for="">Gambar Struktur Rubah</label>
                    <div class="custom-file">
                    <input type="file" name="foto_struktur" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Pilih File Gambar Struktur Organisasi</label>
                    </div>
                    <input type="hidden" name="id_struktur" class="form-control"  value="<?php echo $datstru['id_struktur']; ?>" required>
                  </div>
                                    
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahFoto" class="btn btn-primary">Simpan</button>
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



