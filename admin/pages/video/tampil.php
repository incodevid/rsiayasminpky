<!-- Content Wrapper. Contains page content -->

   <div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 ">Kelola Video Profil</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?p=dashboard" style="color:black;">Beranda</a></li>
              <li class="breadcrumb-item active">Kelola Video Profil</li>
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
                <h3 class="card-title">Data Video</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>

              <?php
      
       
    if (isset($_POST['BtnSmpanVideo'])) {
    
  
    $judul_video     = $_POST['judul_video'];
    $link_video      = $_POST['link_video'];
    $keterangan      = $_POST['keterangan'];

 

    
            $sql = mysqli_query($koneksi," INSERT INTO tb_video_profil (judul_video,link_video,keterangan) 
            VALUES ('$judul_video','$link_video','$keterangan')  ");


            if ($sql) {
               echo "<script> alert ('Tambah Video Profil Berhasil!');window.location.href='?p=video' </script>" ;
             } else {
              echo "<script> alert ('Tambah Video Profil Gagal!');window.location.href='?p=video' </script>" ;
             }

 
  }
  
       
  ?>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row mb-2">
                  <?php
                    $qvideo = mysqli_query($koneksi, "SELECT *,COUNT(id_video_profil) AS jml_video FROM tb_video_profil ");
                    while($datvideo=mysqli_fetch_assoc($qvideo)){
                    if($datvideo['jml_video']=='0'){
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
                    <th>Judul Video</th>
                    <th>Link Video</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                  $no = 1;
$query = mysqli_query($koneksi,"SELECT * FROM tb_video_profil ORDER BY id_video_profil DESC");
while($data  = mysqli_fetch_assoc($query)){

?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['judul_video']; ?></td>
                    <td><a href="<?php echo $data['link_video']; ?>" target="_blank"><?php echo $data['link_video']; ?></a></td>
                    <td><?php echo $data['keterangan']; ?></td>
                    <td>
                  
                      <a data-toggle="modal" data-target="#modalUbah<?php echo $data['id_video_profil']; ?>" class="btn btn-block btn-info" ><i class="fas fa-pen" style="color:white;"></i></a>
                 
                  
                      <a href="?p=hvideo&akn=<?php echo $data['id_video_profil']; ?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-block btn-danger" ><i class="fas fa-trash" style="color:white;"></i></a>
                
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
              <h4 class="modal-title">Tambah Data Video</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Judul Video</label>
                    <input type="text" name="judul_video" class="form-control"  placeholder="Masukkan judul video" required>
                  </div>
                  <div class="form-group">
                    <label for="">Link Video</label>
                    <input type="text" name="link_video" class="form-control"  placeholder="Masukkan link video" required>
                  </div>
                  <div class="form-group">
                    <label for="">Keterangan</label>
                      <textarea id="summernote" name="keterangan" >
                        Tulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong>
                      </textarea>
                  </div>
                  
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnSmpanVideo" class="btn btn-primary">Simpan</button>
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

$qvideo = mysqli_query($koneksi,"SELECT * FROM tb_video_profil ORDER BY id_video_profil");
while($datvideo=mysqli_fetch_assoc($qvideo)){

?>
<div class="modal fade" id="modalUbah<?php echo $datvideo['id_video_profil']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Video<br> "<?php echo $datvideo['judul_video']; ?>"</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahVideo'])) {
    
    $id_video_profil   = $_POST['id_video_profil'];
    $judul_video       = $_POST['judul_video'];
    $link_video        = $_POST['link_video'];
    $keterangan        = $_POST['keterangan'];
    
            $sql = mysqli_query($koneksi," UPDATE tb_video_profil SET judul_video='$judul_video',link_video='$link_video',keterangan='$keterangan' WHERE id_video_profil='$id_video_profil'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Data Berhasil!");window.location.href="?p=video" </script>' ;
             } else {
              echo '<script> alert ("Ubah Data Gagal!");window.location.href="?p=video" </script>' ;
             }
      

  

  }
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Judul Video</label>
                    <input type="text" name="judul_video" class="form-control"  placeholder="Masukkan judul video" value="<?php echo $datvideo['judul_video']; ?>" required>
                    <input type="hidden" name="id_video_profil" class="form-control"  value="<?php echo $datvideo['id_video_profil']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="">Link Video</label>
                    <input type="text" name="link_video" class="form-control"  placeholder="Masukkan link video" value="<?php echo $datvideo['link_video']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="">Keterangan</label>
                      <textarea id="summernoteubah" name="keterangan" >
                        <?php echo $datvideo['keterangan']; ?>
                      </textarea>
                  </div>
                                    
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahVideo" class="btn btn-primary">Simpan</button>
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







