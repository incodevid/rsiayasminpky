<?php
$akn	= $_GET['akn'];

$sql 	= 'DELETE FROM tb_besuk WHERE id_besuk="'.$akn.'"';
$query	= mysqli_query($koneksi,$sql);

if ($sql) {
               echo "<script>alert('Data Besuk Berhasil Dihapus...');window.location='?p=besuk'</script>" ;
             } else {
              echo "<script>alert('Data Besuk Gagal Dihapus...');window.location='?p=besuk'</script>" ;
             }
?>