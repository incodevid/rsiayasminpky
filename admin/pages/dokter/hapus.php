<?php
$akn   = $_GET['akn'];

$pilih = mysqli_query($koneksi,"SELECT * FROM tb_dokter_kami WHERE id_dokter_kami='$akn' ");
$data = mysqli_fetch_assoc($pilih);

$foto    = $data['foto_dokter'];

unlink("dist/img/foto_dokter/".$foto);


$sql 	= 'DELETE FROM tb_dokter_kami WHERE id_dokter_kami="'.$akn.'"';
$query	= mysqli_query($koneksi,$sql);

if ($sql) {
               echo "<script> alert ('Data Berhasil Dihapus!');window.location.href='?p=ddokter' </script>" ;
             } else {
              echo "<script> alert ('Data Gagal Dihapus!');window.location.href='?p=ddokter' </script>" ;
             }



?>