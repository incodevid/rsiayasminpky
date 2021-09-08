
<option value="">--PILIH USIA--</option>

<?php
include "config.php";
if (isset($_POST['kelas'])) {
    $kelas = $_POST["kelas"];


    $hasil = mysqli_query($koneksi, "SELECT * FROM tb_tersedia_bed a INNER JOIN tb_kelas_bed b ON a.id_kelas_bed=b.id_kelas_bed INNER JOIN tb_usia_bed c ON a.id_usia_bed=c.id_usia_bed WHERE a.id_kelas_bed='$kelas' GROUP BY a.id_usia_bed ");
    while ($data = mysqli_fetch_assoc($hasil)) {
        ?>
        <option value="<?php echo  $data['id_usia_bed']; ?>"><?php echo $data['nama_usia_bed']; ?></option>
        <?php
    }
}

?>
