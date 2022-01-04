<?php
$akn	= $_GET['akn'];

$sql 	= 'DELETE FROM tb_akun WHERE id_akun="'.$akn.'"';
$query	= mysqli_query($koneksi,$sql);

if ($sql) {
               echo "<script>alert('Data Akun Berhasil Dihapus...');window.location='?p=akun'</script>" ;
             } else {
              echo "<script>alert('Data Akun Gagal Dihapus...');window.location='?p=akun'</script>" ;
             }
?>