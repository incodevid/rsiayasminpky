<?php
$akn	= $_GET['akn'];

$sql 	= 'DELETE FROM tb_kategori_layanan WHERE id_kategori_layanan="'.$akn.'"';
$query	= mysqli_query($koneksi,$sql);

if ($sql) {
               echo "<script>alert('Data Kategori Berhasil Dihapus...');window.location='?p=klayanan'</script>" ;
             } else {
              echo "<script>alert('Data Kategori Gagal Dihapus...');window.location='?p=klayanan'</script>" ;
             }
?>