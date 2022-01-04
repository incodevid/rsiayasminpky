<?php
$akn	= $_GET['akn'];

$sql 	= 'DELETE FROM tb_misi WHERE id_misi="'.$akn.'"';
$query	= mysqli_query($koneksi,$sql);

if ($sql) {
               echo "<script>alert('Data Berhasil Dihapus...');window.location='?p=visimisi'</script>" ;
             } else {
              echo "<script>alert('Data Gagal Dihapus...');window.location='?p=visimisi'</script>" ;
             }
?>