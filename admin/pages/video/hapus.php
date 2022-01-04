<?php
$akn	= $_GET['akn'];

$sql 	= 'DELETE FROM tb_video_profil WHERE id_video_profil="'.$akn.'"';
$query	= mysqli_query($koneksi,$sql);

if ($sql) {
               echo "<script>alert('Data Berhasil Dihapus...');window.location='?p=video'</script>" ;
             } else {
              echo "<script>alert('Data Gagal Dihapus...');window.location='?p=video'</script>" ;
             }
?>