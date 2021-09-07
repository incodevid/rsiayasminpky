<?php
$akn	= $_GET['akn'];

$sql 	= 'DELETE FROM tb_tersedia_bed WHERE id_tersedia_bed="'.$akn.'"';
$query	= mysqli_query($koneksi,$sql);

if ($sql) {
               echo "<script>alert('Data Kamar Berhasil Dihapus...');window.location='?p=tersedia_bed'</script>" ;
             } else {
              echo "<script>alert('Data Kamar Gagal Dihapus...');window.location='?p=tersedia_bed'</script>" ;
             }
?>