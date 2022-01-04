<?php
$akn   = $_GET['akn'];

$pilih = mysqli_query($koneksi,"SELECT * FROM tb_struktur WHERE id_struktur='$akn' ");
$data = mysqli_fetch_assoc($pilih);

$foto    = $data['foto_struktur'];

unlink("dist/img/struktur_organisasi/".$foto);


$sql 	= 'DELETE FROM tb_struktur WHERE id_struktur="'.$akn.'"';
$query	= mysqli_query($koneksi,$sql);

if ($sql) {
               echo "<script> alert ('Data Berhasil Dihapus!');window.location.href='?p=struktur_organisasi' </script>" ;
             } else {
              echo "<script> alert ('Data Gagal Dihapus!');window.location.href='?p=struktur_organisasi' </script>" ;
             }



?>