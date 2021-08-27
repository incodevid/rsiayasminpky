<?php
$akn   = $_GET['akn'];

$pilih = mysqli_query($koneksi,"SELECT * FROM tb_berita WHERE id_berita='$akn' ");
$data = mysqli_fetch_assoc($pilih);

$foto    = $data['foto_berita_cover'];

unlink("dist/img/berita/".$foto);


$sql 	= 'DELETE FROM tb_berita WHERE id_berita="'.$akn.'"';
$query	= mysqli_query($koneksi,$sql);

if ($sql) {
               echo "<script> alert ('Data Berhasil Dihapus!');window.location.href='?p=berita' </script>" ;
             } else {
              echo "<script> alert ('Data Gagal Dihapus!');window.location.href='?p=berita' </script>" ;
             }



?>