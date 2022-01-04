<!-- Content Wrapper. Contains page content -->

   <div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 ">Kelola Ketersediaan Bed</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?p=dashboard" style="color:black;">Beranda</a></li>
              <li class="breadcrumb-item active">Kelola Ketersediaan Bed</li>
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
                <h3 class="card-title">Daftar Ketersediaan Bed</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>

              <?php
      
       
    if (isset($_POST['BtnSmpanKamar'])) {
    
  
    $id_kelas_bed        = $_POST['id_kelas_bed'];
    $id_usia_bed         = $_POST['id_usia_bed'];
    $nama_kamar          = $_POST['nama_kamar'];
    $jenis_kelamin_bed   = $_POST['jenis_kelamin_bed'];
    $status_tersedia     = $_POST['status_tersedia'];




$sql = mysqli_query($koneksi,"SELECT * FROM tb_tersedia_bed WHERE  nama_kamar='$nama_kamar'   ") or die(mysql_error());
$cek=mysqli_num_rows($sql);

if ($cek > 0){
   echo "<script> alert ('Tambah kamar gagal, data sudah ada!');window.location.href='?p=tersedia_bed' </script>" ;
} else {

    
            $sql = mysqli_query($koneksi," INSERT INTO tb_tersedia_bed (id_kelas_bed,id_usia_bed,nama_kamar,jenis_kelamin_bed,status_tersedia) 
            VALUES ('$id_kelas_bed','$id_usia_bed','$nama_kamar','$jenis_kelamin_bed','$status_tersedia')  ");


            if ($sql) {
               echo "<script> alert ('Tambah Data Kamar Berhasil!');window.location.href='?p=tersedia_bed' </script>" ;
             } else {
              echo "<script> alert ('Tambah Data Kamar Gagal!');window.location.href='?p=tersedia_bed' </script>" ;
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
                    <th>Kelas</th>
                    <th>Usia Bed</th>
                    <th>Nama Kamar</th>
                    <th>Jenis Kelamin</th>
                    <th>Status Tersedia</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                  $no = 1;
$query = mysqli_query($koneksi,"SELECT * FROM tb_tersedia_bed a INNER JOIN tb_kelas_bed b ON a.id_kelas_bed=b.id_kelas_bed INNER JOIN tb_usia_bed c ON a.id_usia_bed=c.id_usia_bed  ORDER BY a.id_tersedia_bed DESC");
while($data  = mysqli_fetch_assoc($query)){
?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['nama_kelas_bed']; ?></td>
                    <td><?php echo $data['nama_usia_bed']; ?></td>
                    <td><?php echo $data['nama_kamar']; ?></td>
                    <td><?php echo $data['jenis_kelamin_bed']; ?></td>
                    <td>
                      <?php
                      if($data['status_tersedia']=='Kosong'){
                      ?>
                      <a data-toggle="modal" data-target="#modalUbahStatus<?php echo $data['id_tersedia_bed']; ?>" class="btn btn-block btn-info" ><i class="fas fa-bed" style="color:white;"></i> <?php echo $data['status_tersedia']; ?></a> 
                      <?php }else{ ?>
                      <a data-toggle="modal" data-target="#modalUbahStatus<?php echo $data['id_tersedia_bed']; ?>" class="btn btn-block btn-success" ><i class="fas fa-bed" style="color:white;"></i> <?php echo $data['status_tersedia']; ?></a>  
                      <?php } ?>
                    </td>
                    <td>
                  
                      <a data-toggle="modal" data-target="#modalUbah<?php echo $data['id_tersedia_bed']; ?>" class="btn btn-block btn-info" ><i class="fas fa-pen" style="color:white;"></i></a>
                 
                  
                      <a href="?p=htersedia_bed&akn=<?php echo $data['id_tersedia_bed']; ?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-block btn-danger" ><i class="fas fa-trash" style="color:white;"></i></a>
                
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
              <h4 class="modal-title">Tambah Data Bed</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  
                  
                  <div class="form-group">
                    <label for="">Kelas Bed</label>
                    <!-- select -->
                      <div class="form-group">
                        <select class="custom-select select2" name="id_kelas_bed" required>
                          <option value="">-- PILIH KELAS BED --</option>
                          <?php
                            $qpol=mysqli_query($koneksi,"SELECT * FROM tb_kelas_bed ");
                            while($dpol=mysqli_fetch_assoc($qpol)){
                            ?>
                          <option value="<?php echo $dpol['id_kelas_bed']; ?>"><?php echo $dpol['nama_kelas_bed']; ?></option>
                            <?php } ?>
                        </select>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="">Usia Bed</label>
                    <!-- select -->
                      <div class="form-group">
                        <select class="custom-select select2" name="id_usia_bed" required>
                          <option value="">-- PILIH USIA BED --</option>
                          <?php
                            $qdok=mysqli_query($koneksi,"SELECT * FROM tb_usia_bed ");
                            while($ddok=mysqli_fetch_assoc($qdok)){
                            ?>
                          <option value="<?php echo $ddok['id_usia_bed']; ?>"><?php echo $ddok['nama_usia_bed']; ?></option>
                            <?php } ?>
                        </select>
                      </div>
                  </div>
                
                  <div class="form-group">
                    <label for="">Nama Kamar</label>
                    <input type="text" name="nama_kamar" class="form-control"  placeholder="Masukkan Nama Kamar"  required>
                  </div>

                  <div class="form-group">
                    <label for="">Jenis Kelamin Bed</label>
                    <!-- select -->
                      <div class="form-group">
                        <select class="custom-select" name="jenis_kelamin_bed" required>
                          <option value="">-- PILIH JENIS --</option>
                          <option value="Laki-Laki">Laki - Laki</option>
                          <option value="Perempuan">Perempuan</option>
                          <option value="Semua">Semua</option>
                        </select>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="">Pilih Status Kamar</label>
                    <!-- select -->
                      <div class="form-group">
                        <select class="custom-select" name="status_tersedia" required>
                          <option value="">-- PILIH STATUS --</option>
                          <option value="Kosong">Kosong</option>
                          <option value="Terpakai">Terpakai</option>
                        </select>
                      </div>
                  </div>
                  
                  
                  
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnSmpanKamar" class="btn btn-primary">Simpan</button>
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

$quakun = mysqli_query($koneksi,"SELECT * FROM tb_tersedia_bed a INNER JOIN tb_kelas_bed b ON a.id_kelas_bed=b.id_kelas_bed INNER JOIN tb_usia_bed c ON a.id_usia_bed=c.id_usia_bed ORDER BY a.id_tersedia_bed DESC");
while($datkun=mysqli_fetch_assoc($quakun)){

?>
<div class="modal fade" id="modalUbah<?php echo $datkun['id_tersedia_bed']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Data Kamar</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahKamar'])) {
    
    $id_tersedia_bed     = $_POST['id_tersedia_bed'];
    $id_kelas_bed        = $_POST['id_kelas_bed'];
    $id_usia_bed         = $_POST['id_usia_bed'];
    $nama_kamar          = $_POST['nama_kamar'];
    $jenis_kelamin_bed   = $_POST['jenis_kelamin_bed'];
    
            $sql = mysqli_query($koneksi," UPDATE tb_tersedia_bed SET id_kelas_bed='$id_kelas_bed',id_usia_bed='$id_usia_bed',nama_kamar='$nama_kamar',jenis_kelamin_bed='$jenis_kelamin_bed' WHERE id_tersedia_bed='$id_tersedia_bed'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Data Kamar Berhasil!");window.location.href="?p=tersedia_bed" </script>' ;
             } else {
              echo '<script> alert ("Ubah Data Kamar Gagal!");window.location.href="?p=tersedia_bed" </script>' ;
             }
      

  

  }
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  
                  <input type="hidden" name="id_tersedia_bed" value="<?php echo $datkun['id_tersedia_bed']; ?>">
                  <div class="form-group">
                    <label for="">Kelas Bed</label>
                    <!-- select -->
                      <div class="form-group">
                        <select class="custom-select select2" name="id_kelas_bed" required>
                          <option value="<?php echo $datkun['id_kelas_bed']; ?>"><?php echo $datkun['nama_kelas_bed']; ?></option>
                          <?php
                            $qpol=mysqli_query($koneksi,"SELECT * FROM tb_kelas_bed ");
                            while($dpol=mysqli_fetch_assoc($qpol)){
                            ?>
                          <option value="<?php echo $dpol['id_kelas_bed']; ?>"><?php echo $dpol['nama_kelas_bed']; ?></option>
                            <?php } ?>
                        </select>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="">Usia Bed</label>
                    <!-- select -->
                      <div class="form-group">
                        <select class="custom-select select2" name="id_usia_bed" required>
                          <option value="<?php echo $datkun['id_usia_bed']; ?>"><?php echo $datkun['nama_usia_bed']; ?></option>
                          <?php
                            $qdok=mysqli_query($koneksi,"SELECT * FROM tb_usia_bed ");
                            while($ddok=mysqli_fetch_assoc($qdok)){
                            ?>
                          <option value="<?php echo $ddok['id_usia_bed']; ?>"><?php echo $ddok['nama_usia_bed']; ?></option>
                            <?php } ?>
                        </select>
                      </div>
                  </div>
                
                  <div class="form-group">
                    <label for="">Nama Kamar</label>
                    <input type="text" name="nama_kamar" class="form-control"  placeholder="Masukkan Nama Kamar" value="<?php echo $datkun['nama_kamar']; ?>" required>
                  </div>

                  <div class="form-group">
                    <label for="">Jenis Kelamin Bed</label>
                    <!-- select -->
                      <div class="form-group">
                        <select class="custom-select" name="jenis_kelamin_bed" required>
                          <option value="<?php echo $datkun['jenis_kelamin_bed']; ?>"><?php echo $datkun['jenis_kelamin_bed']; ?></option>
                          <option value="Laki-Laki">Laki - Laki</option>
                          <option value="Perempuan">Perempuan</option>
                          <option value="Semua">Semua</option>
                        </select>
                      </div>
                  </div>

                 

                  
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahKamar" class="btn btn-primary">Simpan</button>
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

$quakun = mysqli_query($koneksi,"SELECT * FROM tb_tersedia_bed a INNER JOIN tb_kelas_bed b ON a.id_kelas_bed=b.id_kelas_bed INNER JOIN tb_usia_bed c ON a.id_usia_bed=c.id_usia_bed ORDER BY a.id_tersedia_bed DESC");
while($datkun=mysqli_fetch_assoc($quakun)){

?>
<div class="modal fade" id="modalUbahStatus<?php echo $datkun['id_tersedia_bed']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Status Ketersediaan Kamar <br>"Kamar <?php echo $datkun['nama_kamar']; ?>"</h4>
              <h4 class="modal-title"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahStatus'])) {
    
    $id_tersedia_bed     = $_POST['id_tersedia_bed'];
    $status_tersedia     = $_POST['status_tersedia'];
    
            $sql = mysqli_query($koneksi," UPDATE tb_tersedia_bed SET status_tersedia='$status_tersedia' WHERE id_tersedia_bed='$id_tersedia_bed'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Status Kamar Berhasil!");window.location.href="?p=tersedia_bed" </script>' ;
             } else {
              echo '<script> alert ("Ubah Status Kamar Gagal!");window.location.href="?p=tersedia_bed" </script>' ;
             }
      

  

  }
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  
                  <input type="hidden" name="id_tersedia_bed" value="<?php echo $datkun['id_tersedia_bed']; ?>">
                  

                  <div class="form-group">
                    <label for="">Pilih Status Kamar</label>
                    <!-- select -->
                      <div class="form-group">
                        <select class="custom-select" name="status_tersedia" required>
                          <option value="">--PILIH STATUS--</option>
                          <option value="Kosong">Kosong</option>
                          <option value="Terpakai">Terpakai</option>
                        </select>
                      </div>
                  </div>

                  
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahStatus" class="btn btn-primary">Simpan</button>
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