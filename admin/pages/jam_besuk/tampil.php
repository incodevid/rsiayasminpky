<!-- Content Wrapper. Contains page content -->

   <div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 ">Kelola Jam Besuk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?p=dashboard" style="color:black;">Beranda</a></li>
              <li class="breadcrumb-item active">Kelola Jam Besuk</li>
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
                <h3 class="card-title">Data Jam Besuk</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>

              <?php
      
       
    if (isset($_POST['BtnSmpanBesuk'])) {
    
  
    $hari_besuk      = $_POST['hari_besuk'];
    $jam_besuk       = $_POST['jam_besuk'];



$sql = mysqli_query($koneksi,"SELECT * FROM tb_besuk WHERE  hari_besuk='$hari_besuk' AND jam_besuk='$jam_besuk'  ") or die(mysql_error());
$cek=mysqli_num_rows($sql);

if ($cek > 0){
   echo "<script> alert ('Tambah data gagal, Data besuk hari ".$hari_besuk." pada jam ".$jam_besuk." sudah ada!');window.location.href='?p=besuk' </script>" ;
} else {

    
            $sql = mysqli_query($koneksi," INSERT INTO tb_besuk (hari_besuk,jam_besuk) 
            VALUES ('$hari_besuk','$jam_besuk')  ");


            if ($sql) {
               echo "<script> alert ('Tambah Data Besuk Berhasil!');window.location.href='?p=besuk' </script>" ;
             } else {
              echo "<script> alert ('Tambah Data Besuk Gagal!');window.location.href='?p=besuk' </script>" ;
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
                    <th>Hari Besuk</th>
                    <th>Jam Besuk</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                  $no = 1;
$query = mysqli_query($koneksi,"SELECT * FROM tb_besuk ORDER BY id_besuk DESC");
while($data  = mysqli_fetch_assoc($query)){
?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['hari_besuk']; ?></td>
                    <td><?php echo $data['jam_besuk']; ?></td>
                    <td>
                  
                      <a data-toggle="modal" data-target="#modalUbah<?php echo $data['id_besuk']; ?>" class="btn btn-block btn-info" ><i class="fas fa-pen" style="color:white;"></i></a>
                 
                  
                      <a href="?p=hbesuk&akn=<?php echo $data['id_besuk']; ?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-block btn-danger" ><i class="fas fa-trash" style="color:white;"></i></a>
                
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
              <h4 class="modal-title">Tambah Data Besuk</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Hari Besuk</label>
                    <input type="text" name="hari_besuk" class="form-control"  placeholder="Masukkan hari besuk CONTOH: Senin - Sabtu" required>
                  </div>

                  <div class="form-group">
                    <label for="">Jam Besuk</label>
                    <input type="text" name="jam_besuk" class="form-control"  placeholder="Masukkan jam besuk CONTOH: Siang 11.00 - 13.00 WIB " required>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnSmpanBesuk" class="btn btn-primary">Simpan</button>
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

$qubes = mysqli_query($koneksi,"SELECT * FROM tb_besuk ORDER BY id_besuk DESC");
while($datbes=mysqli_fetch_assoc($qubes)){

?>
<div class="modal fade" id="modalUbah<?php echo $datbes['id_besuk']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Data Besuk </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahBesuk'])) {
    
    $id_besuk              = $_POST['id_besuk'];
    $hari_besuk            = $_POST['hari_besuk'];
    $jam_besuk             = $_POST['jam_besuk'];
    
            $sql = mysqli_query($koneksi," UPDATE tb_besuk SET hari_besuk='$hari_besuk',jam_besuk='$jam_besuk' WHERE id_besuk='$id_besuk'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Data Besuk Berhasil!");window.location.href="?p=besuk" </script>' ;
             } else {
              echo '<script> alert ("Ubah Data Besuk Gagal!");window.location.href="?p=besuk" </script>' ;
             }
      

  

  }
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <input type="hidden" name="id_besuk" class="form-control"  value="<?php echo $datbes['id_besuk']; ?>" required>
                  <div class="form-group">
                    <label for="">Hari Besuk</label>
                    <input type="text" name="hari_besuk" class="form-control" value="<?php echo $datbes['hari_besuk']; ?>"  placeholder="Masukkan hari besuk CONTOH: Senin - Sabtu" required>
                  </div>

                  <div class="form-group">
                    <label for="">Jam Besuk</label>
                    <input type="text" name="jam_besuk" class="form-control" value="<?php echo $datbes['jam_besuk']; ?>"  placeholder="Masukkan jam besuk CONTOH: Siang 11.00 - 13.00 WIB " required>
                  </div>
                                    
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahBesuk" class="btn btn-primary">Simpan</button>
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