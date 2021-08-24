<?php
$akn	= $_GET['akn'];

$sql 	= 'DELETE FROM tb_kategori_dokter WHERE id_kategori_dokter="'.$akn.'"';
$query	= mysqli_query($koneksi,$sql);

if ($sql) {
               echo "<script>alert('Data Kategori Berhasil Dihapus...');window.location='?p=kdokter'</script>" ;
             } else {
              echo "<script>alert('Data Kategori Gagal Dihapus...');window.location='?p=kdokter'</script>" ;
             }
?>