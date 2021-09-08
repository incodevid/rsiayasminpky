
<option value="">--PILIH DOKTER--</option>

<?php
include "config.php";
if (isset($_POST['poli'])) {
    $poli = $_POST["poli"];


    $hasil = mysqli_query($koneksi, "SELECT * FROM tb_jadwal_dokter a INNER JOIN tb_poli b ON a.id_poli=b.id_poli INNER JOIN tb_dokter_kami c ON a.id_dokter_kami=c.id_dokter_kami WHERE a.id_poli='$poli' GROUP BY a.id_dokter_kami ");
    while ($data = mysqli_fetch_assoc($hasil)) {
        ?>
        <option value="<?php echo  $data['id_dokter_kami']; ?>"><?php echo $data['nama_dokter']; ?></option>
        <?php
    }
}

?>
