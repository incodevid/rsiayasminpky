<?php
$akn	= $_GET['akn'];

$sql 	= 'DELETE FROM tb_poli WHERE id_poli="'.$akn.'"';
$query	= mysqli_query($koneksi,$sql);

if ($sql) {
               echo "<script>alert('Data Poliklinik Berhasil Dihapus...');window.location='?p=poli'</script>" ;
             } else {
              echo "<script>alert('Data Poliklinik Gagal Dihapus...');window.location='?p=poli'</script>" ;
             }
?>