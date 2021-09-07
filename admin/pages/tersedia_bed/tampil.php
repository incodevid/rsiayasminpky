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
    
  
    $id_poli            = $_POST['id_poli'];
    $id_dokter_kami     = $_POST['id_dokter_kami'];
    $pelayanan          = $_POST['pelayanan'];
    $tanggal            = $_POST['tanggal'];
    $jam_kerja          = $_POST['jam_kerja'];




$sql = mysqli_query($koneksi,"SELECT * FROM tb_jadwal_dokter WHERE  id_poli='$id_poli' AND id_dokter_kami='$id_dokter_kami' AND pelayanan='$pelayanan' AND tanggal='$tanggal' AND jam_kerja='$jam_kerja'  ") or die(mysql_error());
$cek=mysqli_num_rows($sql);

if ($cek > 0){
   echo "<script> alert ('Tambah jadwal gagal, data sudah ada!');window.location.href='?p=jadwal_dokter' </script>" ;
} else {

    
            $sql = mysqli_query($koneksi," INSERT INTO tb_jadwal_dokter (id_poli,id_dokter_kami,pelayanan,tanggal,jam_kerja) 
            VALUES ('$id_poli','$id_dokter_kami','$pelayanan','$tanggal','$jam_kerja')  ");


            if ($sql) {
               echo "<script> alert ('Tambah Data Jadwal Berhasil!');window.location.href='?p=jadwal_dokter' </script>" ;
             } else {
              echo "<script> alert ('Tambah Data Jadwal Gagal!');window.location.href='?p=jadwal_dokter' </script>" ;
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
$query = mysqli_query($koneksi,"SELECT * FROM tb_tersedia_bed a INNER JOIN tb_kelas_bed b ON a.id_kelas_bed=b.id_kelas_bed INNER JOIN tb_usia_bed c ON a.id_usia_bed=c.id_usia_bed ORDER BY a.id_tersedia_bed DESC");
while($data  = mysqli_fetch_assoc($query)){
?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['nama_kelas_bed']; ?></td>
                    <td><?php echo $data['nama_usia_bed']; ?></td>
                    <td><?php echo $data['nama_kamar']; ?></td>
                    <td><?php echo $data['jeni_kelamin_bed']; ?></td>
                    <td>
                      <a data-toggle="modal" data-target="#modalUbahStatus<?php echo $data['id_tersedia_bed']; ?>" class="btn btn-block btn-info" ><i class="fas fa-pen" style="color:white;"></i> <?php echo $data['status_tersedia']; ?></a>                      
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
                        <select class="custom-select" name="jeni_kelamin_bed" required>
                          <option value="">-- PILIH JENIS --</option>
                          <option value="Laki-Laki">Laki - Laki</option>
                          <option value="Perempuan">Perempuan</option>
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

$quakun = mysqli_query($koneksi,"SELECT * FROM tb_jadwal_dokter a INNER JOIN tb_poli b ON a.id_poli=b.id_poli INNER JOIN tb_dokter_kami c ON a.id_dokter_kami=c.id_dokter_kami ORDER BY a.id_jadwal_dokter DESC");
while($datkun=mysqli_fetch_assoc($quakun)){

?>
<div class="modal fade" id="modalUbah<?php echo $datkun['id_jadwal_dokter']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Akun Pengguna</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <?php
      
       
    if (isset($_POST['BtnUbahJadwal'])) {
    
    $id_jadwal_dokter   = $_POST['id_jadwal_dokter'];
    $id_poli            = $_POST['id_poli'];
    $id_dokter_kami     = $_POST['id_dokter_kami'];
    $pelayanan          = $_POST['pelayanan'];
    $tanggal            = $_POST['tanggal'];
    $jam_kerja          = $_POST['jam_kerja'];
    
            $sql = mysqli_query($koneksi," UPDATE tb_jadwal_dokter SET id_poli='$id_poli',id_dokter_kami='$id_dokter_kami',pelayanan='$pelayanan',tanggal='$tanggal',jam_kerja='$jam_kerja' WHERE id_jadwal_dokter='$id_jadwal_dokter'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Data Jadwal Berhasil!");window.location.href="?p=jadwal_dokter" </script>' ;
             } else {
              echo '<script> alert ("Ubah Data Jadwal Gagal!");window.location.href="?p=jadwal_dokter" </script>' ;
             }
      

  

  }
  
       
  ?>

              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  
                  <input type="hidden" name="id_jadwal_dokter" value="<?php echo $datkun['id_jadwal_dokter']; ?>">
                  <div class="form-group">
                    <label for="">Poliklinik</label>
                    <!-- select -->
                      <div class="form-group">
                        <select class="custom-select select2" name="id_poli" required>
                          <option value="<?php echo $datkun['id_poli']; ?>"><?php echo $datkun['nama_poli']; ?></option>
                          <?php
                            $qpol=mysqli_query($koneksi,"SELECT * FROM tb_poli ");
                            while($dpol=mysqli_fetch_assoc($qpol)){
                            ?>
                          <option value="<?php echo $dpol['id_poli']; ?>"><?php echo $dpol['nama_poli']; ?></option>
                            <?php } ?>
                        </select>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="">Dokter</label>
                    <!-- select -->
                      <div class="form-group">
                        <select class="custom-select select2" name="id_dokter_kami" required>
                          <option value="<?php echo $datkun['id_dokter_kami']; ?>"><?php echo $datkun['nama_dokter']; ?></option>
                          <?php
                            $qdok=mysqli_query($koneksi,"SELECT * FROM tb_dokter_kami ");
                            while($ddok=mysqli_fetch_assoc($qdok)){
                            ?>
                          <option value="<?php echo $ddok['id_dokter_kami']; ?>"><?php echo $ddok['nama_dokter']; ?></option>
                            <?php } ?>
                        </select>
                      </div>
                  </div>
                

                  <div class="form-group">
                    <label for="">Jenis Pelayanan</label>
                    <!-- select -->
                      <div class="form-group">
                        <select class="custom-select" name="pelayanan" required>
                          <option value="<?php echo $datkun['pelayanan']; ?>"><?php echo $datkun['pelayanan']; ?></option>
                          <option value="Reguler">Reguler</option>
                          <option value="Tekon">TEKON / Telemedicine</option>
                        </select>
                      </div>
                  </div>
                  <!-- Date -->
                  <div class="form-group">
                    <label for="">Tanggal</label>
                      <div class="input-group date " id="reservationdate1" data-target-input="nearest">
                          <input type="text" name="tanggal" class="form-control datetimepicker-input" data-target="#reservationdate1" placeholder="Tanggal Jadwal Dokter" value="<?php echo $datkun['tanggal']; ?>" required/>
                          <div class="input-group-append" data-target="#reservationdate1" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                  </div>
                  <!-- Date -->
                  <div class="form-group">
                    <label for="">Jam Kerja</label>
                    <input type="text" name="jam_kerja" class="form-control"  placeholder="Masukkan Jam Kerja, contoh: 12.00 - 13.00 WIB" maxlength="11" value="<?php echo $datkun['jam_kerja']; ?>" required>
                  </div>

                  
                 
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnUbahJadwal" class="btn btn-primary">Simpan</button>
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