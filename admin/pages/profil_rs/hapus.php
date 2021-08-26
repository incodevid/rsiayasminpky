<?php
$akn   = $_GET['akn'];

$pilih = mysqli_query($koneksi,"SELECT * FROM tb_profil_rs WHERE id_profil_rs='$akn' ");
$data = mysqli_fetch_assoc($pilih);

$foto    = $data['foto_cover'];

unlink("dist/img/profil_rs/".$foto);


$sql 	= 'DELETE FROM tb_profil_rs WHERE id_profil_rs="'.$akn.'"';
$query	= mysqli_query($koneksi,$sql);

if ($sql) {
               echo "<script> alert ('Data Berhasil Dihapus!');window.location.href='?p=profil_rs' </script>" ;
             } else {
              echo "<script> alert ('Data Gagal Dihapus!');window.location.href='?p=profil_rs' </script>" ;
             }



?>