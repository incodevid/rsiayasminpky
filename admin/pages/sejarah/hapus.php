<?php
$akn   = $_GET['akn'];

$pilih = mysqli_query($koneksi,"SELECT * FROM tb_sejarah WHERE id_sejarah='$akn' ");
$data = mysqli_fetch_assoc($pilih);

$foto    = $data['foto_cover'];

unlink("dist/img/sejarah/".$foto);


$sql 	= 'DELETE FROM tb_sejarah WHERE id_sejarah="'.$akn.'"';
$query	= mysqli_query($koneksi,$sql);

if ($sql) {
               echo "<script> alert ('Data Berhasil Dihapus!');window.location.href='?p=sejarah' </script>" ;
             } else {
              echo "<script> alert ('Data Gagal Dihapus!');window.location.href='?p=sejarah' </script>" ;
             }



?>