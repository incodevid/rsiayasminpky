<!-- Content Wrapper. Contains page content -->

   <div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 ">Kelola Kontak</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?p=dashboard" style="color:black;">Beranda</a></li>
              <li class="breadcrumb-item active">Kelola Kontak</li>
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
                <h3 class="card-title">Data Kontak</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>

              <?php
      
       
    if (isset($_POST['BtnSmpanKontak'])) {
    
  
    $alamat      = $_POST['alamat'];
    $email       = $_POST['email'];
    $fax_telp    = $_POST['fax_telp'];




    
            $sql = mysqli_query($koneksi," INSERT INTO tb_kontak (alamat,email,fax_telp) 
            VALUES ('$alamat','$email','$fax_telp')  ");


            if ($sql) {
               echo "<script> alert ('Tambah Data Kontak Berhasil!');window.location.href='?p=kontak' </script>" ;
             } else {
              echo "<script> alert ('Tambah Data Kontak Gagal!');window.location.href='?p=kontak' </script>" ;
             }

           
           
 

  }
  
       
  ?>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row mb-2">
                  <?php
                    $qkontak = mysqli_query($koneksi, "SELECT *,COUNT(id_kontak) AS jml_kontak FROM tb_kontak ");
                    while($datkontak=mysqli_fetch_assoc($qkontak)){
                    if($datkontak['jml_kontak']=='0'){
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
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Fax Telp</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                  $no = 1;
$query = mysqli_query($koneksi,"SELECT * FROM tb_kontak ");
while($data  = mysqli_fetch_assoc($query)){
?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['fax_telp']; ?></td>
                  
                    <td>
                  
                      <a data-toggle="modal" data-target="#modalUbah<?php echo $data['id_kontak']; ?>" class="btn btn-block btn-info" ><i class="fas fa-pen" style="color:white;"></i></a>
                 
                  
                      <a href="?p=hkontak&akn=<?php echo $data['id_kontak']; ?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-block btn-danger" ><i class="fas fa-trash" style="color:white;"></i></a>
                
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
              <h4 class="modal-title">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control"  placeholder="Masukkan alamat" required>
                  </div>
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control"  placeholder="Masukkan email" required>
                  </div>
                  <div class="form-group">
                    <label for="">Fax Telp</label>
                    <input type="text" name="fax_telp" class="form-control"  placeholder="Masukkan Fax Telp" required>
                  </div>
                  
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnSmpanKontak" class="btn btn-primary">Simpan</button>
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

$qukon = mysqli_query($koneksi,"SELECT * FROM tb_kontak ");
while($datukon=mysqli_fetch_assoc($qukon)){

?>
<div class="modal fade" id="modalUbah<?php echo $datukon['id_kontak']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Data Kontak</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahKontak'])) {
    
    $id_kontak       = $_POST['id_kontak'];
    $alamat          = $_POST['alamat'];
    $email           = $_POST['email'];
    $fax_telp        = $_POST['fax_telp'];
    
            $sql = mysqli_query($koneksi," UPDATE tb_kontak SET alamat='$alamat',email='$email',fax_telp='$fax_telp' WHERE id_kontak='$id_kontak'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Data Kontak Berhasil!");window.location.href="?p=kontak" </script>' ;
             } else {
              echo '<script> alert ("Ubah Data Kontak Gagal!");window.location.href="?p=kontak" </script>' ;
             }
      

  

  }
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $datukon['alamat']; ?>"  placeholder="Masukkan alamat" required>
                    <input type="hidden" name="id_kontak" class="form-control" value="<?php echo $datukon['id_kontak']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $datukon['email']; ?>"  placeholder="Masukkan email" required>
                  </div>
                  <div class="form-group">
                    <label for="">Fax Telp</label>
                    <input type="text" name="fax_telp" class="form-control" value="<?php echo $datukon['fax_telp']; ?>"  placeholder="Masukkan Fax Telp" required>
                  </div>
                                    
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahKontak" class="btn btn-primary">Simpan</button>
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



