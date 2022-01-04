<?php
$akn   = $_GET['akn'];

$pilih = mysqli_query($koneksi,"SELECT * FROM tb_galeri WHERE id_galeri='$akn' ");
$data = mysqli_fetch_assoc($pilih);

$foto    = $data['file_foto'];

unlink("dist/img/galeri/".$foto);


$sql 	= 'DELETE FROM tb_galeri WHERE id_galeri="'.$akn.'"';
$query	= mysqli_query($koneksi,$sql);

if ($sql) {
               echo "<script> alert ('Data Berhasil Dihapus!');window.location.href='?p=galeri' </script>" ;
             } else {
              echo "<script> alert ('Data Gagal Dihapus!');window.location.href='?p=galeri' </script>" ;
             }



?>