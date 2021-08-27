<?php
$akn   = $_GET['akn'];

$pilih = mysqli_query($koneksi,"SELECT * FROM tb_slide WHERE id_slide='$akn' ");
$data = mysqli_fetch_assoc($pilih);

$foto    = $data['foto_slide'];

unlink("dist/img/slider/".$foto);


$sql 	= 'DELETE FROM tb_slide WHERE id_slide="'.$akn.'"';
$query	= mysqli_query($koneksi,$sql);

if ($sql) {
               echo "<script> alert ('Data Berhasil Dihapus!');window.location.href='?p=slider' </script>" ;
             } else {
              echo "<script> alert ('Data Gagal Dihapus!');window.location.href='?p=slider' </script>" ;
             }



?>