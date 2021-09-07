<!-- Content Wrapper. Contains page content -->

   <div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 ">Kelola Kelas Bed</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?p=dashboard" style="color:black;">Beranda</a></li>
              <li class="breadcrumb-item active">Kelola Kelas Bed</li>
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
                <h3 class="card-title">Daftar Kelas Bed</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>

              <?php
      
       
    if (isset($_POST['BtnSmpanKelasBed'])) {
    
  
    $nama_kelas_bed      = $_POST['nama_kelas_bed'];



$sql = mysqli_query($koneksi,"SELECT * FROM tb_kelas_bed WHERE  nama_kelas_bed='$nama_kelas_bed'  ") or die(mysql_error());
$cek=mysqli_num_rows($sql);

if ($cek > 0){
   echo "<script> alert ('Tambah data kelas gagal, Nama kelas ".$nama_kelas_bed." sudah ada!');window.location.href='?p=kelas_bed' </script>" ;
} else {

    
            $sql = mysqli_query($koneksi," INSERT INTO tb_kelas_bed (nama_kelas_bed) 
            VALUES ('$nama_kelas_bed')  ");


            if ($sql) {
               echo "<script> alert ('Tambah Data Kelas Bed Berhasil!');window.location.href='?p=kelas_bed' </script>" ;
             } else {
              echo "<script> alert ('Tambah Data Kelas Bed Gagal!');window.location.href='?p=kelas_bed' </script>" ;
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
                    <th>Nama Kelas Bed</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                  $no = 1;
$query = mysqli_query($koneksi,"SELECT * FROM tb_kelas_bed ORDER BY id_kelas_bed DESC");
while($data  = mysqli_fetch_assoc($query)){
?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['nama_kelas_bed']; ?></td>
                    <td>
                  
                      <a data-toggle="modal" data-target="#modalUbah<?php echo $data['id_kelas_bed']; ?>" class="btn btn-block btn-info" ><i class="fas fa-pen" style="color:white;"></i></a>
                 
                  
                      <a href="?p=hkelas_bed&akn=<?php echo $data['id_kelas_bed']; ?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-block btn-danger" ><i class="fas fa-trash" style="color:white;"></i></a>
                
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
              <h4 class="modal-title">Tambah Data Kelas Bed</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Nama Kelas Bed</label>
                    <input type="text" name="nama_kelas_bed" class="form-control"  placeholder="Masukkan Nama Kelas Bed" required>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnSmpanKelasBed" class="btn btn-primary">Simpan</button>
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

$quakun = mysqli_query($koneksi,"SELECT * FROM tb_kelas_bed ORDER BY id_kelas_bed DESC");
while($datkun=mysqli_fetch_assoc($quakun)){

?>
<div class="modal fade" id="modalUbah<?php echo $datkun['id_kelas_bed']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Data Kelas Bed</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahKelasBed'])) {
    
    $id_kelas_bed        = $_POST['id_kelas_bed'];
    $nama_kelas_bed      = $_POST['nama_kelas_bed'];
    
            $sql = mysqli_query($koneksi," UPDATE tb_kelas_bed SET nama_kelas_bed='$nama_kelas_bed' WHERE id_kelas_bed='$id_kelas_bed'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Data Kelas Bed Berhasil!");window.location.href="?p=kelas_bed" </script>' ;
             } else {
              echo '<script> alert ("Ubah Data Kelas Bed Gagal!");window.location.href="?p=kelas_bed" </script>' ;
             }
      

  

  }
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Nama Kelas Bed</label>
                    <input type="text" name="nama_kelas_bed" class="form-control"  value="<?php echo $datkun['nama_kelas_bed']; ?>" required>
                    <input type="hidden" name="id_kelas_bed" class="form-control"  value="<?php echo $datkun['id_kelas_bed']; ?>" required>
                  </div>
                                    
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahKelasBed" class="btn btn-primary">Simpan</button>
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