<?php
$akn	= $_GET['akn'];

$sql 	= 'DELETE FROM tb_kontak WHERE id_kontak="'.$akn.'"';
$query	= mysqli_query($koneksi,$sql);

if ($sql) {
               echo "<script>alert('Data Berhasil Dihapus...');window.location='?p=kontak'</script>" ;
             } else {
              echo "<script>alert('Data Gagal Dihapus...');window.location='?p=kontak'</script>" ;
             }
?>