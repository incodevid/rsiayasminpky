<?php
$akn	= $_GET['akn'];

$sql 	= 'DELETE FROM tb_album WHERE id_album="'.$akn.'"';
$query	= mysqli_query($koneksi,$sql);

if ($sql) {
               echo "<script>alert('Data Album Berhasil Dihapus...');window.location='?p=album'</script>" ;
             } else {
              echo "<script>alert('Data Album Gagal Dihapus...');window.location='?p=album'</script>" ;
             }
?>