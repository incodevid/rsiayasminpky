<?php
$akn	= $_GET['akn'];

$sql 	= 'DELETE FROM tb_jadwal_dokter WHERE id_jadwal_dokter="'.$akn.'"';
$query	= mysqli_query($koneksi,$sql);

if ($sql) {
               echo "<script>alert('Data Jadwal Berhasil Dihapus...');window.location='?p=jadwal_dokter'</script>" ;
             } else {
              echo "<script>alert('Data Jadwal Gagal Dihapus...');window.location='?p=jadwal_dokter'</script>" ;
             }
?>