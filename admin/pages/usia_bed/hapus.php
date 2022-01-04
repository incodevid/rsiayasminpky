<?php
$akn	= $_GET['akn'];

$sql 	= 'DELETE FROM tb_usia_bed WHERE id_usia_bed="'.$akn.'"';
$query	= mysqli_query($koneksi,$sql);

if ($sql) {
               echo "<script>alert('Data Usia Bed Berhasil Dihapus...');window.location='?p=usia_bed'</script>" ;
             } else {
              echo "<script>alert('Data Usia Bed Gagal Dihapus...');window.location='?p=usia_bed'</script>" ;
             }
?>