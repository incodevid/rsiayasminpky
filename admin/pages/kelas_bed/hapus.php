<?php
$akn	= $_GET['akn'];

$sql 	= 'DELETE FROM tb_kelas_bed WHERE id_kelas_bed="'.$akn.'"';
$query	= mysqli_query($koneksi,$sql);

if ($sql) {
               echo "<script>alert('Data Kelas Bed Berhasil Dihapus...');window.location='?p=kelas_bed'</script>" ;
             } else {
              echo "<script>alert('Data Kelas Bed Gagal Dihapus...');window.location='?p=kelas_bed'</script>" ;
             }
?>