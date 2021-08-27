<?php
$akn   = $_GET['akn'];

$pilih = mysqli_query($koneksi,"SELECT * FROM tb_medsos WHERE id_medsos='$akn' ");
$data = mysqli_fetch_assoc($pilih);

$foto    = $data['icon_medsos'];

unlink("dist/img/medsos/".$foto);


$sql 	= 'DELETE FROM tb_medsos WHERE id_medsos="'.$akn.'"';
$query	= mysqli_query($koneksi,$sql);

if ($sql) {
               echo "<script> alert ('Data Berhasil Dihapus!');window.location.href='?p=medsos' </script>" ;
             } else {
              echo "<script> alert ('Data Gagal Dihapus!');window.location.href='?p=medsos' </script>" ;
             }



?>