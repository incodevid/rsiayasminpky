<!-- Content Wrapper. Contains page content -->

   <div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 ">Kelola Data Kerjasama</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?p=dashboard" style="color:black;">Beranda</a></li>
              <li class="breadcrumb-item active">Kelola Data Kerjasama</li>
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
                <h3 class="card-title">Data Kerjasama</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>

              <?php
      
       
    if (isset($_POST['BtnSmpanKerjasama'])) {
    
  
    $tanggal                 = date('YmdHis');
    $text_kerjasama          = $_POST['text_kerjasama'];

    $namafolder              ="dist/img/kerjasama/";




    if (!empty($_FILES["foto_cover"]["tmp_name"])) {   
    $jenis_gambar=$_FILES['foto_cover']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")     {      
     $jpg =  $tanggal.".jpg";               
    if (move_uploaded_file($_FILES['foto_cover']['tmp_name'], $namafolder . $jpg)) {


    
            $sql = mysqli_query($koneksi," INSERT INTO tb_kerjasama (text_kerjasama,foto_cover) 
            VALUES ('$text_kerjasama','$jpg')  ");


            if ($sql) {
               echo "<script> alert ('Tambah Data Kerjasama Berhasil!');window.location.href='?p=kerjasama' </script>" ;
             } else {
              echo "<script> alert ('Tambah Data Kerjasama Gagal!');window.location.href='?p=kerjasama' </script>" ;
             }

            } else {
    ?>        
    <script> alert ('Gagal Upload!');window.location.href='?p=kerjasama' </script>
    <?php
} 
    }
    else {    
     ?>
     <script> alert ('Upload Gagal!, File Bukan JPG/Jpeg');window.location.href='?p=kerjasama' </script>

      <?php
 } 
    }


           
      
 
  }
  
       
  ?>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row mb-2">
                  <?php
                    $qvisi = mysqli_query($koneksi, "SELECT *,COUNT(id_kerjasama) AS jml_kerjasama FROM tb_kerjasama ");
                    while($datvisi=mysqli_fetch_assoc($qvisi)){
                    if($datvisi['jml_kerjasama']=='0'){
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
                    <th>Teks Kerjasama</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                  $no = 1;
$query = mysqli_query($koneksi,"SELECT * FROM tb_kerjasama");
while($data  = mysqli_fetch_assoc($query)){

?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td>
                        <a data-toggle="modal" data-target="#modalLihat<?php echo $data['id_kerjasama']; ?>" class="btn btn-block btn-info" ><i class="fas fa-eye" style="color:white;"></i> Lihat</a>
                    </td>
                    <td>
                      <center>
                      <img src="dist/img/kerjasama/<?php echo $data['foto_cover']; ?>" style="border-radius: 5%;" width="400px" data-toggle="modal" data-target="#modalUbahFoto<?php echo $data['id_kerjasama']; ?>" ></td>
                      </center>
                    </td>
                  
                    <td>
                  
                      <a data-toggle="modal" data-target="#modalUbah<?php echo $data['id_kerjasama']; ?>" class="btn btn-block btn-info" ><i class="fas fa-pen" style="color:white;"></i></a>
                 
                  
                      <a href="?p=hkerjasama&akn=<?php echo $data['id_kerjasama']; ?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-block btn-danger" ><i class="fas fa-trash" style="color:white;"></i></a>
                
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
              <h4 class="modal-title">Tambah Data Kerjasama</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Teks Kerjasama</label>
                      <textarea class="ckeditor" id="editor1" name="text_kerjasama" >
                        Tulis <u>kerjasama</u> <strong>disini</strong>
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
                  <button type="submit" name="BtnSmpanKerjasama" class="btn btn-primary">Simpan</button>
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

$quker = mysqli_query($koneksi,"SELECT * FROM tb_kerjasama");
while($datker=mysqli_fetch_assoc($quker)){

?>
<div class="modal fade" id="modalUbah<?php echo $datker['id_kerjasama']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Data Kerjasama</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahkerjasama'])) {
    
    $id_kerjasama              = $_POST['id_kerjasama'];
    $text_kerjasama            = $_POST['text_kerjasama'];
    
            $sql = mysqli_query($koneksi," UPDATE tb_kerjasama SET text_kerjasama='$text_kerjasama' WHERE id_kerjasama='$id_kerjasama'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Data Berhasil!");window.location.href="?p=kerjasama" </script>' ;
             } else {
              echo '<script> alert ("Ubah Data Gagal!");window.location.href="?p=kerjasama" </script>' ;
             }
      

  

  }
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <input type="hidden" name="id_kerjasama" value="<?php echo $datker['id_kerjasama']; ?>">
                  <div class="form-group">
                    <label for="">Teks Kerjasama</label>
                      <textarea class="ckeditor" id="editor1" name="text_kerjasama" >
                        <?php echo $datker['text_kerjasama']; ?>
                      </textarea>
                  </div>
                                    
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahkerjasama" class="btn btn-primary">Simpan</button>
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

$quakun = mysqli_query($koneksi,"SELECT * FROM tb_kerjasama");
while($datli=mysqli_fetch_assoc($quakun)){

?>
<div class="modal fade" id="modalLihat<?php echo $datli['id_kerjasama']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Lihat Deskripsi </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <a><?php echo $datli['text_kerjasama']; ?></a>
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

$quakun = mysqli_query($koneksi,"SELECT * FROM tb_kerjasama");
while($datfot=mysqli_fetch_assoc($quakun)){

?>
<div class="modal fade" id="modalUbahFoto<?php echo $datfot['id_kerjasama']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Foto Cover</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahFotoCover'])) {
    
    $id_kerjasama          = $_POST['id_kerjasama'];
    $tanggal               = date('YmdHis');

    $namafolder                ="dist/img/kerjasama/";

    if (!empty($_FILES["foto_cover"]["tmp_name"])) {   
    $jenis_gambar=$_FILES['foto_cover']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")     {      
     $jpg =  $tanggal.".jpg";               
    if (move_uploaded_file($_FILES['foto_cover']['tmp_name'], $namafolder . $jpg)) {
    
            $sql = mysqli_query($koneksi," UPDATE tb_kerjasama SET foto_cover='$jpg' WHERE id_kerjasama='$id_kerjasama'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Data Foto Berhasil!");window.location.href="?p=kerjasama" </script>' ;
             } else {
              echo '<script> alert ("Ubah Data Foto Gagal!");window.location.href="?p=kerjasama" </script>' ;
             }
      
             } else {
    ?>        
    <script> alert ('Gagal Upload!');window.location.href='?p=kerjasama' </script>
    <?php
} 
    }
    else {    
     ?>
     <script> alert ('Upload Gagal!, File Bukan JPG/Jpeg');window.location.href='?p=kerjasama' </script>

      <?php
 } 
    }

}
  

  
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <center>
                  <img src="dist/img/kerjasama/<?php echo $datfot['foto_cover']; ?>" style="border-radius: 5%;" width="400px" >
                  </center><br>
                  <input type="hidden" name="id_kerjasama" class="form-control"   value="<?php echo $datfot['id_kerjasama']; ?>" readonly>
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
                  <button type="submit" name="BtnUbahFotoCover" class="btn btn-primary">Simpan</button>
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


