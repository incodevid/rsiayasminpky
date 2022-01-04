<?php
$akn   = $_GET['akn'];

$pilih = mysqli_query($koneksi,"SELECT * FROM tb_layanan WHERE id_layanan='$akn' ");
$data = mysqli_fetch_assoc($pilih);

$foto    = $data['foto_layanan'];

unlink("dist/img/layanan/".$foto);


$sql 	= 'DELETE FROM tb_layanan WHERE id_layanan="'.$akn.'"';
$query	= mysqli_query($koneksi,$sql);

if ($sql) {
               echo "<script> alert ('Data Berhasil Dihapus!');window.location.href='?p=layanan' </script>" ;
             } else {
              echo "<script> alert ('Data Gagal Dihapus!');window.location.href='?p=layanan' </script>" ;
             }



?>