<!-- Content Wrapper. Contains page content -->

   <div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 ">Kelola Data Berita</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?p=dashboard" style="color:black;">Beranda</a></li>
              <li class="breadcrumb-item active">Kelola Data Berita</li>
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
                <h3 class="card-title">Daftar Data Berita</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>

              <?php
      
       
    if (isset($_POST['BtnSmpanBerita'])) {
    
  
    
    $judul_berita    = $_POST['judul_berita'];
    $isi_berita      = $_POST['isi_berita'];
    $tgl_upload      = $_POST['tgl_upload'];

    $namafolder      ="dist/img/berita/";






    if (!empty($_FILES["foto_berita_cover"]["tmp_name"])) {   
    $jenis_gambar=$_FILES['foto_berita_cover']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")     {      
     $jpg =  $judul_berita.".jpg";               
    if (move_uploaded_file($_FILES['foto_berita_cover']['tmp_name'], $namafolder . $jpg)) {


    
            $sql = mysqli_query($koneksi," INSERT INTO tb_berita (judul_berita,isi_berita,tgl_upload,foto_berita_cover) 
            VALUES ('$judul_berita','$isi_berita','$tgl_upload','$jpg')  ");


            if ($sql) {
               echo "<script> alert ('Tambah Berita Berhasil!');window.location.href='?p=berita' </script>" ;
             } else {
              echo "<script> alert ('Tambah Berita Gagal!');window.location.href='?p=berita' </script>" ;
             }

            } else {
    ?>        
    <script> alert ('Gagal Upload!');window.location.href='?p=berita' </script>
    <?php
} 
    }
    else {    
     ?>
     <script> alert ('Upload Gagal!, File Bukan JPG/Jpeg');window.location.href='?p=berita' </script>

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
                    <th>Judul Berita</th>
                    <th>Isi Berita</th>
                    <th>Tanggal Upload</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                  $no = 1;
$query = mysqli_query($koneksi,"SELECT * FROM tb_berita ORDER BY id_berita DESC");
while($data  = mysqli_fetch_assoc($query)){

?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['judul_berita']; ?></td>
                    <td>
                        <a data-toggle="modal" data-target="#modalIsiBerita<?php echo $data['id_berita']; ?>" class="btn btn-block btn-success" ><i class="fas fa-newspaper" style="color:white;"></i> Lihat</a>
                    </td>
                    <td><?php echo $data['tgl_upload']; ?></td>
                    <td>
                      <center>
                      <img src="dist/img/berita/<?php echo $data['foto_berita_cover']; ?>" style="border-radius: 5%;" width="400px" data-toggle="modal" data-target="#modalUbahFoto<?php echo $data['id_berita']; ?>" ></td>
                      </center>
                    </td>
                  
                    <td>
                  
                      <a data-toggle="modal" data-target="#modalUbah<?php echo $data['id_berita']; ?>" class="btn btn-block btn-info" ><i class="fas fa-pen" style="color:white;"></i></a>
                 
                  
                      <a href="?p=hberita&akn=<?php echo $data['id_berita']; ?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-block btn-danger" ><i class="fas fa-trash" style="color:white;"></i></a>
                
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
              <h4 class="modal-title">Tambah Data Berita</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Judul Berita</label>
                    <input type="text" name="judul_berita" class="form-control"  placeholder="Masukkan Judul Berita" required>
                  </div>
                  <div class="form-group">
                    <label for="">Isi Berita</label>
                      <textarea id="summernote" name="isi_berita" >
                        Tulis <em>suatu</em> <u>berita</u> <strong>disini</strong>
                      </textarea>
                  </div>
                  <!-- Date -->
                  <div class="form-group">
                    <label for="">Tanggal Upload</label>
                      <div class="input-group date " id="reservationdatetime" data-target-input="nearest">
                          <input type="text" name="tgl_upload" class="form-control datetimepicker-input" data-target="#reservationdatetime" placeholder="Tanggal Upload Berita" required/>
                          <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                  </div>
                  <!-- Date -->
                  <div class="form-group">
                    <label for="">Foto Cover</label>
                    <div class="custom-file">
                    <input type="file" name="foto_berita_cover" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Pilih File Foto Cover</label>
                  </div>
                  </div>
                  
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnSmpanBerita" class="btn btn-primary">Simpan</button>
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

$quberdat = mysqli_query($koneksi,"SELECT * FROM tb_berita ORDER BY id_berita DESC");
while($datber=mysqli_fetch_assoc($quberdat)){

?>
<div class="modal fade" id="modalUbah<?php echo $datber['id_berita']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Data Berita<br> "<?php echo $datber['judul_berita']; ?>"</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahBerita'])) {
    
    $id_berita           = $_POST['id_berita'];
    $judul_berita        = $_POST['judul_berita'];
    $tgl_upload          = $_POST['tgl_upload'];
    $isi_berita          = $_POST['isi_berita'];
    
            $sql = mysqli_query($koneksi," UPDATE tb_berita SET judul_berita='$judul_berita',tgl_upload='$tgl_upload',isi_berita='$isi_berita' WHERE id_berita='$id_berita'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Berita Berhasil!");window.location.href="?p=berita" </script>' ;
             } else {
              echo '<script> alert ("Ubah Berita Gagal!");window.location.href="?p=berita" </script>' ;
             }
      

  

  }
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Judul Berita</label>
                    <input type="text" name="judul_berita" class="form-control"  placeholder="Masukkan Judul Berita" value="<?php echo $datber['judul_berita']; ?>" required>
                    <input type="hidden" name="id_berita" class="form-control"  value="<?php echo $datber['id_berita']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="">Isi Berita</label>
                      <textarea id="summernoteubah" name="isi_berita" >
                        <?php echo $datber['isi_berita']; ?>
                      </textarea>
                  </div>
                  <!-- Date -->
                  <div class="form-group">
                    <label for="">Tanggal Upload</label>
                      <div class="input-group date " id="reservationdatetimeubah" data-target-input="nearest">
                          <input type="text" name="tgl_upload" class="form-control datetimepicker-input" data-target="#reservationdatetimeubah" placeholder="Tanggal Upload Berita" value="<?php echo $datber['tgl_upload']; ?>" required/>
                          <div class="input-group-append" data-target="#reservationdatetimeubah" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                  </div>
                                    
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahBerita" class="btn btn-primary">Simpan</button>
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

$quber = mysqli_query($koneksi,"SELECT * FROM tb_berita ORDER BY id_berita DESC");
while($datli=mysqli_fetch_assoc($quber)){

?>
<div class="modal fade" id="modalIsiBerita<?php echo $datli['id_berita']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Lihat Berita <br>"<?php echo $datli['judul_berita']; ?>"</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <a><?php echo $datli['isi_berita']; ?></a>
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

$quberfot = mysqli_query($koneksi,"SELECT * FROM tb_berita ORDER BY id_berita DESC");
while($datfot=mysqli_fetch_assoc($quberfot)){

?>
<div class="modal fade" id="modalUbahFoto<?php echo $datfot['id_berita']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Foto Berita<br> "<?php echo $datfot['judul_berita']; ?>"</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahFotoBerita'])) {
    
    $id_berita             = $_POST['id_berita'];
    $judul_berita          = $_POST['judul_berita'];

    $namafolder                ="dist/img/berita/";

    if (!empty($_FILES["foto_berita_cover"]["tmp_name"])) {   
    $jenis_gambar=$_FILES['foto_berita_cover']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")     {      
     $jpg =  $judul_berita.".jpg";               
    if (move_uploaded_file($_FILES['foto_berita_cover']['tmp_name'], $namafolder . $jpg)) {
    
            $sql = mysqli_query($koneksi," UPDATE tb_berita SET foto_berita_cover='$jpg' WHERE id_berita='$id_berita'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Data Foto Berhasil!");window.location.href="?p=berita" </script>' ;
             } else {
              echo '<script> alert ("Ubah Data Foto Gagal!");window.location.href="?p=berita" </script>' ;
             }
      
             } else {
    ?>        
    <script> alert ('Gagal Upload!');window.location.href='?p=berita' </script>
    <?php
} 
    }
    else {    
     ?>
     <script> alert ('Upload Gagal!, File Bukan JPG/Jpeg');window.location.href='?p=berita' </script>

      <?php
 } 
    }

}
  

  
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <center>
                  <img src="dist/img/berita/<?php echo $datfot['foto_berita_cover']; ?>" style="border-radius: 5%;" width="400px" >
                  </center><br>
                  <div class="form-group">
                    <label for="">Judul Berita</label>
                    <input type="text" name="judul_berita" class="form-control"   value="<?php echo $datfot['judul_berita']; ?>" readonly>
                    <input type="hidden" name="id_berita" class="form-control"   value="<?php echo $datfot['id_berita']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="">Foto Baru</label>
                    <div class="custom-file">
                    <input type="file" name="foto_berita_cover" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Pilih File Foto Berita</label>
                  </div>
                  </div>
                                    
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahFotoBerita" class="btn btn-primary">Simpan</button>
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


