<?php
$akn   = $_GET['akn'];

$pilih = mysqli_query($koneksi,"SELECT * FROM tb_kerjasama WHERE id_kerjasama='$akn' ");
$data = mysqli_fetch_assoc($pilih);

$foto    = $data['foto_cover'];

unlink("dist/img/kerjasama/".$foto);


$sql 	= 'DELETE FROM tb_kerjasama WHERE id_kerjasama="'.$akn.'"';
$query	= mysqli_query($koneksi,$sql);

if ($sql) {
               echo "<script> alert ('Data Berhasil Dihapus!');window.location.href='?p=kerjasama' </script>" ;
             } else {
              echo "<script> alert ('Data Gagal Dihapus!');window.location.href='?p=kerjasama' </script>" ;
             }



?>