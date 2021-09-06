<!-- Content Wrapper. Contains page content -->

   <div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 ">Kelola Data Artikel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?p=dashboard" style="color:black;">Beranda</a></li>
              <li class="breadcrumb-item active">Kelola Data Artikel</li>
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
                <h3 class="card-title">Daftar Data Artikel</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>

              <?php
      
       
    if (isset($_POST['BtnSmpanArtikel'])) {
    
  
    
    $judul_artikel    = $_POST['judul_artikel'];
    $isi_artikel      = $_POST['isi_artikel'];
    $tgl_upload       = $_POST['tgl_upload'];

    $namafolder      ="dist/img/artikel/";






    if (!empty($_FILES["foto_artikel_cover"]["tmp_name"])) {   
    $jenis_gambar=$_FILES['foto_artikel_cover']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")     {      
     $jpg =  $judul_artikel.".jpg";               
    if (move_uploaded_file($_FILES['foto_artikel_cover']['tmp_name'], $namafolder . $jpg)) {


    
            $sql = mysqli_query($koneksi," INSERT INTO tb_artikel (judul_artikel,isi_artikel,tgl_upload,foto_artikel_cover) 
            VALUES ('$judul_artikel','$isi_artikel','$tgl_upload','$jpg')  ");


            if ($sql) {
               echo "<script> alert ('Tambah Artikel Berhasil!');window.location.href='?p=artikel' </script>" ;
             } else {
              echo "<script> alert ('Tambah Artikel Gagal!');window.location.href='?p=artikel' </script>" ;
             }

            } else {
    ?>        
    <script> alert ('Gagal Upload!');window.location.href='?p=artikel' </script>
    <?php
} 
    }
    else {    
     ?>
     <script> alert ('Upload Gagal!, File Bukan JPG/Jpeg');window.location.href='?p=artikel' </script>

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
                    <th>Judul Artikel</th>
                    <th>Isi Artikel</th>
                    <th>Tanggal Upload</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                  $no = 1;
$query = mysqli_query($koneksi,"SELECT * FROM tb_artikel ORDER BY id_artikel DESC");
while($data  = mysqli_fetch_assoc($query)){

?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['judul_artikel']; ?></td>
                    <td>
                        <a data-toggle="modal" data-target="#modalIsiArtikel<?php echo $data['id_artikel']; ?>" class="btn btn-block btn-success" ><i class="fas fa-newspaper" style="color:white;"></i> Lihat</a>
                    </td>
                    <td><?php echo $data['tgl_upload']; ?></td>
                    <td>
                      <center>
                      <img src="dist/img/artikel/<?php echo $data['foto_artikel_cover']; ?>" style="border-radius: 5%;" width="400px" data-toggle="modal" data-target="#modalUbahFoto<?php echo $data['id_artikel']; ?>" ></td>
                      </center>
                    </td>
                  
                    <td>
                  
                      <a data-toggle="modal" data-target="#modalUbah<?php echo $data['id_artikel']; ?>" class="btn btn-block btn-info" ><i class="fas fa-pen" style="color:white;"></i></a>
                 
                  
                      <a href="?p=hartikel&akn=<?php echo $data['id_artikel']; ?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-block btn-danger" ><i class="fas fa-trash" style="color:white;"></i></a>
                
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
              <h4 class="modal-title">Tambah Data Artikel</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Judul Artikel</label>
                    <input type="text" name="judul_artikel" class="form-control"  placeholder="Masukkan Judul Artikel" required>
                  </div>
                  <div class="form-group">
                    <label for="">Isi Artikel</label>
                      <textarea class="ckeditor" id="editor1" name="isi_artikel" >
                        Tulis <em>suatu</em> <u>artikel</u> <strong>disini</strong>
                      </textarea>
                  </div>
                  <!-- Date -->
                  <div class="form-group">
                    <label for="">Tanggal Upload</label>
                      <div class="input-group date " id="reservationdatetime" data-target-input="nearest">
                          <input type="text" name="tgl_upload" class="form-control datetimepicker-input" data-target="#reservationdatetime" placeholder="Tanggal Upload Artikel" required/>
                          <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                  </div>
                  <!-- Date -->
                  <div class="form-group">
                    <label for="">Foto Cover</label>
                    <div class="custom-file">
                    <input type="file" name="foto_artikel_cover" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Pilih File Foto Cover</label>
                  </div>
                  </div>
                  
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnSmpanArtikel" class="btn btn-primary">Simpan</button>
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

$qudat = mysqli_query($koneksi,"SELECT * FROM tb_artikel ORDER BY id_artikel DESC");
while($datar=mysqli_fetch_assoc($qudat)){

?>
<div class="modal fade" id="modalUbah<?php echo $datar['id_artikel']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Data Artikel<br> "<?php echo $datar['judul_artikel']; ?>"</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahArtikel'])) {
    
    $id_artikel           = $_POST['id_artikel'];
    $judul_artikel        = $_POST['judul_artikel'];
    $tgl_upload           = $_POST['tgl_upload'];
    $isi_artikel          = $_POST['isi_artikel'];
    
            $sql = mysqli_query($koneksi," UPDATE tb_artikel SET judul_artikel='$judul_artikel',tgl_upload='$tgl_upload',isi_artikel='$isi_artikel' WHERE id_artikel='$id_artikel'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Artikel Berhasil!");window.location.href="?p=artikel" </script>' ;
             } else {
              echo '<script> alert ("Ubah Artikel Gagal!");window.location.href="?p=artikel" </script>' ;
             }
      

  

  }
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Judul Artikel</label>
                    <input type="text" name="judul_artikel" class="form-control"  placeholder="Masukkan Judul Berita" value="<?php echo $datar['judul_artikel']; ?>" required>
                    <input type="hidden" name="id_artikel" class="form-control"  value="<?php echo $datar['id_artikel']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="">Isi Berita</label>
                      <textarea class="ckeditor" id="editor1" name="isi_artikel" >
                        <?php echo $datar['isi_artikel']; ?>
                      </textarea>
                  </div>
                  <!-- Date -->
                  <div class="form-group">
                    <label for="">Tanggal Upload</label>
                      <div class="input-group date " id="reservationdatetimeubah" data-target-input="nearest">
                          <input type="text" name="tgl_upload" class="form-control datetimepicker-input" data-target="#reservationdatetimeubah" placeholder="Tanggal Upload Berita" value="<?php echo $datar['tgl_upload']; ?>" required/>
                          <div class="input-group-append" data-target="#reservationdatetimeubah" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                  </div>
                                    
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahArtikel" class="btn btn-primary">Simpan</button>
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

$quber = mysqli_query($koneksi,"SELECT * FROM tb_artikel ORDER BY id_artikel DESC");
while($datli=mysqli_fetch_assoc($quber)){

?>
<div class="modal fade" id="modalIsiArtikel<?php echo $datli['id_artikel']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Lihat Artikel <br>"<?php echo $datli['judul_artikel']; ?>"</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <a><?php echo $datli['isi_artikel']; ?></a>
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

$qufot = mysqli_query($koneksi,"SELECT * FROM tb_artikel ORDER BY id_artikel DESC");
while($datfot=mysqli_fetch_assoc($qufot)){

?>
<div class="modal fade" id="modalUbahFoto<?php echo $datfot['id_artikel']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Foto Artikel<br> "<?php echo $datfot['judul_artikel']; ?>"</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahFotoArtikel'])) {
    
    $id_artikel             = $_POST['id_artikel'];
    $judul_artikel          = $_POST['judul_artikel'];

    $namafolder                ="dist/img/artikel/";

    if (!empty($_FILES["foto_artikel_cover"]["tmp_name"])) {   
    $jenis_gambar=$_FILES['foto_artikel_cover']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")     {      
     $jpg =  $judul_artikel.".jpg";               
    if (move_uploaded_file($_FILES['foto_artikel_cover']['tmp_name'], $namafolder . $jpg)) {
    
            $sql = mysqli_query($koneksi," UPDATE tb_artikel SET foto_artikel_cover='$jpg' WHERE id_artikel='$id_artikel'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Data Foto Berhasil!");window.location.href="?p=artikel" </script>' ;
             } else {
              echo '<script> alert ("Ubah Data Foto Gagal!");window.location.href="?p=artikel" </script>' ;
             }
      
             } else {
    ?>        
    <script> alert ('Gagal Upload!');window.location.href='?p=artikel' </script>
    <?php
} 
    }
    else {    
     ?>
     <script> alert ('Upload Gagal!, File Bukan JPG/Jpeg');window.location.href='?p=artikel' </script>

      <?php
 } 
    }

}
  

  
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <center>
                  <img src="dist/img/artikel/<?php echo $datfot['foto_artikel_cover']; ?>" style="border-radius: 5%;" width="400px" >
                  </center><br>
                  <div class="form-group">
                    <label for="">Judul Artikel</label>
                    <input type="text" name="judul_artikel" class="form-control"   value="<?php echo $datfot['judul_artikel']; ?>" readonly>
                    <input type="hidden" name="id_artikel" class="form-control"   value="<?php echo $datfot['id_artikel']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="">Foto Baru</label>
                    <div class="custom-file">
                    <input type="file" name="foto_artikel_cover" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Pilih File Foto Artikel</label>
                  </div>
                  </div>
                                    
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahFotoArtikel" class="btn btn-primary">Simpan</button>
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


