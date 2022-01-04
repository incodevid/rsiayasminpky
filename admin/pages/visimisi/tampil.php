<!-- Content Wrapper. Contains page content -->

   <div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 ">Kelola Visi Dan Misi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?p=dashboard" style="color:black;">Beranda</a></li>
              <li class="breadcrumb-item active">Kelola Visi Dan Misi</li>
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
                <h3 class="card-title">Data Visi</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>

              <?php
      
       
    if (isset($_POST['BtnSmpanVisi'])) {
    
  
    $text_visi      = $_POST['text_visi'];


    
            $sql = mysqli_query($koneksi," INSERT INTO tb_visi (text_visi) 
            VALUES ('$text_visi')  ");


            if ($sql) {
               echo "<script> alert ('Tambah Data Visi Berhasil!');window.location.href='?p=visimisi' </script>" ;
             } else {
              echo "<script> alert ('Tambah Data Visi Gagal!');window.location.href='?p=visimisi' </script>" ;
             }
 

  }
  
       
  ?>


  
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row mb-2">
                    <?php
                    $qvisi = mysqli_query($koneksi, "SELECT *,COUNT(id_visi) AS jml_visi FROM tb_visi ");
                    while($datvisi=mysqli_fetch_assoc($qvisi)){
                    if($datvisi['jml_visi']=='0'){
                    ?>
                    <div class="col-sm-2">
                    <a type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-visi" style="color:white;"><i class="fas fa-plus"></i> Tambah</a>
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
                    <th>Teks</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                  $no = 1;
$query = mysqli_query($koneksi,"SELECT * FROM tb_visi ");
while($data  = mysqli_fetch_assoc($query)){
?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['text_visi']; ?></td>
                  
                    <td>
                  
                      <a data-toggle="modal" data-target="#modalUbahVisi<?php echo $data['id_visi']; ?>" class="btn btn-block btn-info" ><i class="fas fa-pen" style="color:white;"></i></a>
                 
                  
                      <a href="?p=hpsvisi&akn=<?php echo $data['id_visi']; ?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-block btn-danger" ><i class="fas fa-trash" style="color:white;"></i></a>
                
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


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Misi</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>

              <?php
      
       
    if (isset($_POST['BtnSmpanMisi'])) {
    
  
    $text_misi      = $_POST['text_misi'];





    
            $sql = mysqli_query($koneksi," INSERT INTO tb_misi (text_misi) 
            VALUES ('$text_misi')  ");


            if ($sql) {
               echo "<script> alert ('Tambah Data Misi Berhasil!');window.location.href='?p=visimisi' </script>" ;
             } else {
              echo "<script> alert ('Tambah Data Misi Gagal!');window.location.href='?p=visimisi' </script>" ;
             }

           
            

  }
  
       
  ?>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row mb-2">
                  <?php
                    $qvisi = mysqli_query($koneksi, "SELECT *,COUNT(id_misi) AS jml_misi FROM tb_misi ");
                    while($datvisi=mysqli_fetch_assoc($qvisi)){
                    if($datvisi['jml_misi']=='0'){
                    ?>
                    <div class="col-sm-2">
                    <a type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-misi" style="color:white;"><i class="fas fa-plus"></i> Tambah</a>
                    </div>
                    <?php }else{ ?>
                    <?php }} ?>
                    <div class="col-sm-2">
                    <a href="?p=dashboard" class="btn btn-block btn-warning" style="color:white;">Kembali</a>
                    </div>
                </div>
            
                <table id="example2" width="1900px" class="table table-bordered table-striped ">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Teks</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                  $no = 1;
$query = mysqli_query($koneksi,"SELECT * FROM tb_misi ");
while($data  = mysqli_fetch_assoc($query)){
?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['text_misi']; ?></td>
                  
                    <td>
                  
                      <a data-toggle="modal" data-target="#modalUbahMisi<?php echo $data['id_misi']; ?>" class="btn btn-block btn-info" ><i class="fas fa-pen" style="color:white;"></i></a>
                 
                  
                      <a href="?p=hpsmisi&akn=<?php echo $data['id_misi']; ?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-block btn-danger" ><i class="fas fa-trash" style="color:white;"></i></a>
                
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

<div class="modal fade" id="modal-visi">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Visi</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Teks Visi</label>
                    <textarea class="ckeditor" id="editor1" name="text_visi" >
                        Tulis <u>visi</u> <strong>disini</strong>
                    </textarea>
                  </div>
                  
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnSmpanVisi" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <div class="modal fade" id="modal-misi">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Misi</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Teks Misi</label>
                    <textarea class="ckeditor" id="editor1" name="text_misi" >
                        Tulis <u>misi</u> <strong>disini</strong>
                    </textarea>
                  </div>
                  
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnSmpanMisi" class="btn btn-primary">Simpan</button>
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

$quakun = mysqli_query($koneksi,"SELECT * FROM tb_visi ");
while($datvis=mysqli_fetch_assoc($quakun)){

?>
<div class="modal fade" id="modalUbahVisi<?php echo $datvis['id_visi']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Visi</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahVisi'])) {
    
    $id_visi         = $_POST['id_visi'];
    $text_visi       = $_POST['text_visi'];
    
            $sql = mysqli_query($koneksi," UPDATE tb_visi SET text_visi='$text_visi' WHERE id_visi='$id_visi'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Visi Berhasil!");window.location.href="?p=visimisi" </script>' ;
             } else {
              echo '<script> alert ("Ubah Visi Gagal!");window.location.href="?p=visimisi" </script>' ;
             }
      

  

  }
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Teks Visi</label>
                    <textarea class="ckeditor" id="editor1" name="text_visi" >
                        <?php echo $datvis['text_visi']; ?>
                    </textarea>
                    <input type="hidden" name="id_visi" class="form-control"  value="<?php echo $datvis['id_visi']; ?>" required>
                  </div>
                                    
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahVisi" class="btn btn-primary">Simpan</button>
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

$quakun = mysqli_query($koneksi,"SELECT * FROM tb_misi ");
while($datmis=mysqli_fetch_assoc($quakun)){

?>
<div class="modal fade" id="modalUbahMisi<?php echo $datmis['id_misi']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Misi</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahMisi'])) {
    
    $id_misi         = $_POST['id_misi'];
    $text_misi       = $_POST['text_misi'];
    
            $sql = mysqli_query($koneksi," UPDATE tb_misi SET text_misi='$text_misi' WHERE id_misi='$id_misi'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Misi Berhasil!");window.location.href="?p=visimisi" </script>' ;
             } else {
              echo '<script> alert ("Ubah Misi Gagal!");window.location.href="?p=visimisi" </script>' ;
             }
      

  

  }
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Teks Misi</label>
                    <textarea class="ckeditor" id="editor1" name="text_misi" >
                        <?php echo $datmis['text_misi']; ?>
                    </textarea>
                    <input type="hidden" name="id_misi" class="form-control"  value="<?php echo $datmis['id_misi']; ?>" required>
                  </div>
                                    
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahMisi" class="btn btn-primary">Simpan</button>
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


