-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 04, 2022 at 09:48 PM
-- Server version: 10.3.32-MariaDB-log-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsiayasm_profil`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id_akun` int(50) NOT NULL,
  `nama_akun` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nik` varchar(100) DEFAULT NULL,
  `departemen` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level_akses` enum('super','admin') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_akun`
--

INSERT INTO `tb_akun` (`id_akun`, `nama_akun`, `jenis_kelamin`, `email`, `nik`, `departemen`, `username`, `password`, `level_akses`) VALUES
(1, 'Benny Sarmoko', 'Laki-Laki', 'benny.sarmoko27@gmail.com', '2103187', 'IT', 'benny0852', '123', 'super'),
(2, 'Kristanto', 'Laki-Laki', 'kristanto@gmail.com', '2019001', 'Pemasaran dan Humas', 'kris123', '123', 'admin'),
(3, 'Lisa Nazla, SP', 'Perempuan', 'example@gmail.com', '1603124', 'Auditoring', 'lisa123', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_album`
--

CREATE TABLE `tb_album` (
  `id_album` int(50) NOT NULL,
  `nama_album` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_album`
--

INSERT INTO `tb_album` (`id_album`, `nama_album`) VALUES
(1, 'Senam Hamil'),
(3, 'Posyandu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(50) NOT NULL,
  `judul_artikel` varchar(100) DEFAULT NULL,
  `isi_artikel` text DEFAULT NULL,
  `tgl_upload` datetime DEFAULT NULL,
  `foto_artikel_cover` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `tgl_upload`, `foto_artikel_cover`) VALUES
(1, 'PENANGANAN DEMAM PADA ANAK 123', '<p>                        </p><p><span style=\"color: rgb(0, 0, 0); font-family: \" pt=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><b>BENNY SARMOKO</b></span></p><p><span style=\"color: rgb(0, 0, 0); font-family: \" pt=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">Demam pada anak merupakan alasan konsultasi tersering &nbsp;ke dokter anak dan dokter umum, sekitar 30% dari seluruh total kunjungan. Demam merupakan reaksi normal tubuh yang bermanfaat melawan kuman. Walaupun banyak orangtua memberikan obat penurun panas, perlu ditekankan bahwa tujuan utama obat tersebut adalah membuat anak merasa nyaman, bukan mempertahankan suhu yang normal.</span>                      </p>', '2021-08-27 08:33:00', 'PENANGANAN DEMAM PADA ANAK.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(50) NOT NULL,
  `judul_berita` varchar(100) DEFAULT NULL,
  `isi_berita` text DEFAULT NULL,
  `tgl_upload` datetime DEFAULT NULL,
  `foto_berita_cover` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul_berita`, `isi_berita`, `tgl_upload`, `foto_berita_cover`) VALUES
(1, 'Telah Dibuka Rehabilitasi Medik 123', '<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Rehabilitasi Medik RS Islam PKU Muhammadiyah Palangka Raya resmi dibuka sejak 17 Mei 2017 dengan memberikan pelayanan:</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Dokter Spesialis Kedokteran Fisik dan Rehabilitasi</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Fisioterapi</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Melayani pasien umum, pasien BPJS Kesehatan dengan faskes tk. 1 (dokter keluarga / Puskesmas), dan pasien dengan asurasi perusahaan lainnya</span></p>\r\n', '2021-08-26 22:59:00', 'Telah Dibuka Rehabilitasi Medik.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_besuk`
--

CREATE TABLE `tb_besuk` (
  `id_besuk` int(50) NOT NULL,
  `hari_besuk` varchar(100) DEFAULT NULL,
  `jam_besuk` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_besuk`
--

INSERT INTO `tb_besuk` (`id_besuk`, `hari_besuk`, `jam_besuk`) VALUES
(1, 'Senin - Sabtu', 'Mohon maaf, selama pandemi Covid19, tidak ada jam besuk'),
(2, 'Senin - Sabtu', 'Mohon maaf, selama pandemi Covid19, tidak ada jam besuk'),
(4, 'Minggu', 'Mohon maaf, selama pandemi Covid19, tidak ada jam besuk');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter_kami`
--

CREATE TABLE `tb_dokter_kami` (
  `id_dokter_kami` int(50) NOT NULL,
  `id_kategori_dokter` int(50) DEFAULT NULL,
  `nama_dokter` varchar(100) DEFAULT NULL,
  `profil_dokter` text DEFAULT NULL,
  `tips_gaya_sehat` text DEFAULT NULL,
  `foto_dokter` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dokter_kami`
--

INSERT INTO `tb_dokter_kami` (`id_dokter_kami`, `id_kategori_dokter`, `nama_dokter`, `profil_dokter`, `tips_gaya_sehat`, `foto_dokter`) VALUES
(2, 3, 'dr. Pamela Esteria Lusiana', 'Dokter Pamela adalah dokter umum yang bertugas sebagai dokter layanan tingkat pertama, berperan dalam memberikan pencegahan, diagnosis dan penanganan awal, serta merujuk ke dokter spesialis jika diperlukan', 'dasdasdasdasd,dasdasdasd,asdasd,asdasd', 'dr. Pamela Esteria Lusiana.jpg'),
(3, 3, 'dr. Restu Hijriah', 'Dokter Restu adalah dokter umum yang bertugas sebagai dokter layanan tingkat pertama, berperan dalam memberikan pencegahan, diagnosis dan penanganan awal, serta merujuk ke dokter spesialis jika diperlukan', 'Menjaga kebersihan,\r\nMakan dan minum teratur, konsumsi diet bergizi dan seimbang,\r\nLebih aktif & banyak bergerak,\r\nKelola stres & tidur yang cukup', 'dr. Restu Hijriah.jpg'),
(4, 3, 'dr. Priska Refani', 'Dokter Priska adalah dokter umum yang bertugas sebagai dokter layanan tingkat pertama, berperan dalam memberikan pencegahan, diagnosis dan penanganan awal, serta merujuk ke dokter spesialis jika diperlukan', 'tuliskan tips disini. Berikan tanda koma di akhir kalimat jika tips lebih dari satu.', 'dr. Priska Refani.jpg'),
(5, 3, 'dr. Ratnasari Ridar Widyaningrum', 'Dokter Ratnasari adalah dokter umum yang bertugas sebagai dokter layanan tingkat pertama, berperan dalam memberikan pencegahan, diagnosis dan penanganan awal, serta merujuk ke dokter spesialis jika diperlukan', 'tuliskan tips disini. Berikan tanda koma di akhir kalimat jika tips lebih dari satu.', 'dr. Ratnasari Ridar Widyaningrum.jpg'),
(6, 4, 'Dr. dr. Sigit Nurfianto, Sp.OG(K)', 'tuliskan tentang dokter disini.', 'tuliskan tips disini. Berikan tanda koma di akhir kalimat jika tips lebih dari satu.', 'Dr. dr. Sigit Nurfianto, Sp.OG(K).jpg'),
(8, 4, 'dr.  I Gde Hary Eka Adnyana, Sp.OG., M.Biome', 'tuliskan tentang dokter disini.', 'tuliskan tips disini. Berikan tanda koma di akhir kalimat jika tips lebih dari satu.', 'dr.  I Gde Hary Eka Adnyana, Sp.OG., M.Biome.jpg'),
(9, 2, 'dr. Enny Karyani, Sp.A', 'tuliskan tentang dokter disini.', 'tuliskan tips disini. Berikan tanda koma di akhir kalimat jika tips lebih dari satu.', 'dr. Enny Karyani, Sp.A.jpg'),
(11, 2, 'dr. Andar Juan R. P. Sitanggang, Sp.A., M.Sc', 'tuliskan tentang dokter disini.', 'tuliskan tips disini. Berikan tanda koma di akhir kalimat jika tips lebih dari satu.', 'dr. Andar Juan R. P. Sitanggang, Sp.A., M.Sc.jpg'),
(12, 1, 'drg. Marissa Octavia', 'tuliskan tentang dokter disini.', 'tuliskan tips disini. Berikan tanda koma di akhir kalimat jika tips lebih dari satu.', 'drg. Marissa Octavia.jpg'),
(13, 1, 'drg.  Christo', 'tuliskan tentang dokter disini.', 'tuliskan tips disini. Berikan tanda koma di akhir kalimat jika tips lebih dari satu.', 'drg.  Christo.jpg'),
(14, 5, 'drg. Desi Wadianawati,  Sp.KG', 'tuliskan tentang dokter disini.', 'tuliskan tips disini. Berikan tanda koma di akhir kalimat jika tips lebih dari satu.', 'drg. Desi Wadianawati.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(50) NOT NULL,
  `id_album` int(50) DEFAULT NULL,
  `nama_foto` varchar(100) DEFAULT NULL,
  `file_foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `id_album`, `nama_foto`, `file_foto`) VALUES
(2, 3, 'Kegiatan Imunisasi Pasca Pandemi COVID-19 Kedua', 'Kegiatan Imunisasi Pasca Pandemi COVID-19 Kedua.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_dokter`
--

CREATE TABLE `tb_jadwal_dokter` (
  `id_jadwal_dokter` int(50) NOT NULL,
  `id_poli` int(50) DEFAULT NULL,
  `id_dokter_kami` int(50) DEFAULT NULL,
  `pelayanan` enum('Reguler','Tekon') DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam_kerja` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal_dokter`
--

INSERT INTO `tb_jadwal_dokter` (`id_jadwal_dokter`, `id_poli`, `id_dokter_kami`, `pelayanan`, `tanggal`, `jam_kerja`) VALUES
(1, 2, 11, 'Reguler', '2021-09-07', '19.00-21.00'),
(2, 5, 8, 'Reguler', '2021-09-09', '16.00-19.00'),
(3, 5, 6, 'Reguler', '2021-10-09', '19.00-21.00'),
(5, 2, 9, 'Reguler', '2021-09-13', '13.00-16.00'),
(6, 3, 13, 'Reguler', '2021-09-10', '17.30-21.00'),
(7, 3, 14, 'Reguler', '2021-09-13', '16.00-20.00'),
(8, 3, 12, 'Reguler', '2021-09-10', '08.00-11.00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_dokter`
--

CREATE TABLE `tb_kategori_dokter` (
  `id_kategori_dokter` int(50) NOT NULL,
  `nama_kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori_dokter`
--

INSERT INTO `tb_kategori_dokter` (`id_kategori_dokter`, `nama_kategori`) VALUES
(1, 'Dokter Gigi'),
(2, 'Dokter Spesialis Anak'),
(3, 'Dokter Umum'),
(4, 'Dokter Spesialis Kebidanan dan Penyakit Kandungan'),
(5, 'Dokter Spesialis Gigi dan Mulut');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_layanan`
--

CREATE TABLE `tb_kategori_layanan` (
  `id_kategori_layanan` int(50) NOT NULL,
  `nama_kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori_layanan`
--

INSERT INTO `tb_kategori_layanan` (`id_kategori_layanan`, `nama_kategori`) VALUES
(1, 'Rawat Inap'),
(2, 'Rawat Jalan'),
(3, 'Penunjang'),
(4, 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas_bed`
--

CREATE TABLE `tb_kelas_bed` (
  `id_kelas_bed` int(50) NOT NULL,
  `nama_kelas_bed` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas_bed`
--

INSERT INTO `tb_kelas_bed` (`id_kelas_bed`, `nama_kelas_bed`) VALUES
(1, 'VIP'),
(2, 'VVIP'),
(3, 'Kelas I'),
(4, 'Kelas II');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kerjasama`
--

CREATE TABLE `tb_kerjasama` (
  `id_kerjasama` int(50) NOT NULL,
  `text_kerjasama` text DEFAULT NULL,
  `foto_cover` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kerjasama`
--

INSERT INTO `tb_kerjasama` (`id_kerjasama`, `text_kerjasama`, `foto_cover`) VALUES
(3, '<p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; font-size: 14px; line-height: 30px; color: rgb(0, 0, 0); display: inline-block; z-index: 1; position: relative; font-family: &quot;PT Sans&quot;, sans-serif;\">Dalam rangka membantu memberikan layanan kesehatan kepada masyarakat, dilakukan perjanjian kerjasama dengan beberapa perusahaan/ asuransi, yaitu :</p><span style=\"color: rgb(0, 0, 0); font-family: &quot;PT Sans&quot;, sans-serif; font-size: 14px;\"></span><ol style=\"margin-bottom: 25px; list-style-position: initial; list-style-image: initial; padding-left: 25px; color: rgb(0, 0, 0); font-family: &quot;PT Sans&quot;, sans-serif; font-size: 14px;\"><li style=\"margin: 10px 0px;\">FEDERAL INTERNATIONAL FINANCE</li><li style=\"margin: 10px 0px;\">ASURANSI JIWA INHEALTH INDONESIA</li><li style=\"margin: 10px 0px;\">BNI LIFE INDONESIA</li><li style=\"margin: 10px 0px;\">EKA ASIH ABADI (<span style=\"font-weight: 700;\">SOS/ PRUDENTIAL</span>)</li><li style=\"margin: 10px 0px;\">ASURANSI WINTERTHUR LIFE INDONESIA</li><li style=\"margin: 10px 0px;\">ASURANSI ASTRA BUANA (GARDA MEDIKA)</li><li style=\"margin: 10px 0px;\">YAKES TELKOM AREA KALIMANTAN</li><li style=\"margin: 10px 0px;\">BANK SYARIAH MANDIRI</li><li style=\"margin: 10px 0px;\">EQUITYNLIFE INDONESIA</li><li style=\"margin: 10px 0px;\">ASURANSI SINAR MAS</li><li style=\"margin: 10px 0px;\">ANGLO EASTERN PLANTATION MANAJEMEN</li><li style=\"margin: 10px 0px;\">MNC LIFE ASURANSI</li><li style=\"margin: 10px 0px;\">ASURANSI RELIANCE INDONESIA</li><li style=\"margin: 10px 0px;\">ASURANSI ADIRA DINAMIKA</li><li style=\"margin: 10px 0px;\">SAWIT GRAHA MANUNGGAL DAN PT. KAHAYAN AGRO PLANTATION</li><li style=\"margin: 10px 0px;\">PERTAMINA</li><li style=\"margin: 10px 0px;\">PRODIAWIUDYAHUSADA</li><li style=\"margin: 10px 0px;\">ASURANSI BINTANG, Tbk.</li><li style=\"margin: 10px 0px;\">LIPPO GENERAL INSURANCE, Tbk.</li><li style=\"margin: 10px 0px;\">MUTIARA MEDICAL SERVICE</li></ol>', '20210826210713.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id_kontak` int(50) NOT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fax_telp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kontak`
--

INSERT INTO `tb_kontak` (`id_kontak`, `alamat`, `email`, `fax_telp`) VALUES
(4, 'Jl. Tjilik Riwut Km. 1,5 No. 04 Palangka Raya Kalimantan Tengah 73112', 'rsiayasmin.plk@gmail.com', '(0536) 3226193');

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `id_layanan` int(50) NOT NULL,
  `id_kategori_layanan` int(50) DEFAULT NULL,
  `nama_layanan` varchar(100) DEFAULT NULL,
  `deskripsi_layanan` text DEFAULT NULL,
  `foto_layanan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_layanan`
--

INSERT INTO `tb_layanan` (`id_layanan`, `id_kategori_layanan`, `nama_layanan`, `deskripsi_layanan`, `foto_layanan`) VALUES
(2, 3, 'LABORATORIUM', '<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:12px\"><span style=\"color:#000000\">Pemeriksaan pada sel darah meliputi kadar hemoglobin, jumlah eritrosit, hematokrit, nilai eritrosit rerata (nilai NER), jumlah leukosit dan trombosit. Selain itu pemeriksaan hematologi meliputi pula hitung retikulosit, hitung eosinofil, aktifitas&nbsp;</span><em>glucose-6-phosphate dehydrogenase</em><span style=\"color:#000000\">&nbsp;(G6PD), daya tahan osmotik eritrosit yang dikenal sebagai resistensi osmotik eritrosit, penetapan fraksi hemoglobin dalam eritrosit yang diperiksa dengan analisa hemoglobin, pemeriksaan sel lupus eritematosus (LE) serta penetapan golongan darah. Selain itu, pemeriksaan hematologi yang terpenting adalah pemeriksaan hitung jenis leukosit&nbsp; disertai dengan penilaian morfologi sel darah yang dapat diketahui dengan pemeriksaan gambaran darah tepi. Pemeriksaan gambaran darah tepi dapat menilai kelainan bentuk dari eritrosit, leukosit dan trombosit yang dapat menimbulkan kelainan secara hematologis.</span></span></span></p>\r\n', 'LABORATORIUM.jpg'),
(3, 3, 'Farmasi', '<p>,,,,layanan OABHP RS,,,,,Tulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n', 'Farmasi.jpg'),
(4, 2, 'Rapid Swab Antigen', '<p>Rapid swab antigen adalah,,,, Tarif layanan ,,,,,</p>\r\n', 'Rapid Swab Antigen.jpg'),
(5, 2, 'PCR Swab Test', '<p>PCR Swab Test adalah ,,,,, tarif ,,,,Tulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n', 'PCR Swab Test.jpg'),
(6, 2, 'Hai Dok (Telemedicine)', '<p>Hai Dok adalah layanan konsultasi kesehatan secara online (telemedicine)&nbsp; bersama dokter umum atau dokter spesialis kebidanan dan kandungan.</p>\r\n', 'Hai Dok (Telemedicine).jpg'),
(7, 3, 'USG 4D', '<p>......Tulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n', 'USG 4D.jpg'),
(8, 2, 'Unit Gawat Darurat', '<p>Tulis <em>suffffatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n', 'Unit Gawat Darurat.jpg'),
(9, 2, 'Poli Kandungan', '<p>....Tulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n', 'Poli Kandungan.jpg'),
(10, 2, 'Poli Gigi dan Mulut', '<p>.....Tulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n', 'Poli Gigi dan Mulut.jpg'),
(11, 2, 'Poli Anak', '<p>.....Tulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n', 'Poli Anak.jpg'),
(12, 3, 'Ambulance', '<p>.....Tulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n', 'Ambulance.jpg'),
(13, 3, 'Imunisasi Bayi dan Anak', '<p>T....ulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n', 'Imunisasi Bayi dan Anak.jpg'),
(14, 4, 'Senam HAmil', '<p>Tu...lis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n', 'Senam HAmil.jpg'),
(15, 1, 'Kamar Perawatan VVIP', '<p>Fasilitas , tarif....Tulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n', 'Kamar Perawatan VVIP.jpg'),
(16, 1, 'Kamar Perawatan VIP', '<p>fasilitas ,,, tarif&nbsp; Tulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n', 'Kamar Perawatan VIP.jpg'),
(17, 1, 'Kmar Perawatan Kelas II', '<p>Tulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n', 'Kmar Perawatan Kelas II.jpg'),
(18, 1, 'Kamar Perawatan Kelas I', '<p>Tulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n', 'Kamar Perawatan Kelas I.jpg'),
(19, 4, 'ATM BCA', '<p>Terdapat ATM (Anjungan Tunai Mandiri) BCA Untuk memudahkan Anda dalam bertransaksi keuangan.&nbsp;Mesin ini memiliki sejumlah fungsi layanan yang meliputi menarik uang tunai, melakukan pengiriman uang, mengecek saldo rekening tabungan, dan membayar berbagai jenis tagihan.</p>\r\n\r\n<p>ATM ini juga dapat melakukan transaksi dengan jaringan ATM:</p>\r\n\r\n<ul>\r\n	<li>Bersama</li>\r\n	<li>Prima</li>\r\n	<li>Link</li>\r\n</ul>\r\n', 'ATM BCA.jpg'),
(20, 4, 'Musholla', '<p>Musholla RSIA Yasmin tertelak di gedung utama dengan kapasitas yang cukup luas sehingga memberikan rasa nyaman untuk beribadah. Selain itu juga tersedia Al-quran dan alat shalat untuk pria dan wanita.</p>\r\n', 'Musholla.jpg'),
(21, 4, 'Area Parkir', '<p>Area parkir kendaraan roda 2 dan 4 di RSIA Yasmin tersedia dengan memanfaatkan lahan yang ada, dan dijaga oleh petugas keamanan yang akan menjaga keamanan kendaraan anda serta tersedianya CCTV yang aktif selama 24 jam.</p>\r\n', 'Area Parkir.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_medsos`
--

CREATE TABLE `tb_medsos` (
  `id_medsos` int(50) NOT NULL,
  `nama_medsos` varchar(100) DEFAULT NULL,
  `link_medsos` varchar(100) DEFAULT NULL,
  `icon_medsos` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_medsos`
--

INSERT INTO `tb_medsos` (`id_medsos`, `nama_medsos`, `link_medsos`, `icon_medsos`) VALUES
(3, 'Youtube', 'https://www.youtube.com/channel/UC3VjiGfBckkeDIUe1th4s9g', 'Youtube.jpg'),
(4, 'Facebook', 'https://www.facebook.com/rsia.yasmin', 'Facebook.jpg'),
(5, 'Instagram', 'https://www.instagram.com/rsiayasmin_palangkaraya/', 'Instagram.jpg'),
(6, 'Whatsapps', 'https://api.whatsapp.com/send?phone=+62816280007', 'Whatsapps.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_misi`
--

CREATE TABLE `tb_misi` (
  `id_misi` int(50) NOT NULL,
  `text_misi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_misi`
--

INSERT INTO `tb_misi` (`id_misi`, `text_misi`) VALUES
(2, '<ol>\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Menyelenggarakan pelayanan kesehatan ibu dan anak yang prima dengan berorientasi pada kepuasan pelanggan</span></span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Mewujudkan kehandalan sumber daya manusia, sarana dan prasarana pelayanan yang terstandar dengan berorientasi pada keselamatan pasien</span></span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Menyelenggarakan tata kelola rumah sakit secara efektif, efisien dan akuntabel</span></span></span></span></li>\r\n</ol>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_poli`
--

CREATE TABLE `tb_poli` (
  `id_poli` int(50) NOT NULL,
  `nama_poli` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_poli`
--

INSERT INTO `tb_poli` (`id_poli`, `nama_poli`) VALUES
(1, 'Fisioterapi'),
(2, 'Anak'),
(3, 'Gigi dan Mulut'),
(4, 'Gizi'),
(5, 'Kandungan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil_rs`
--

CREATE TABLE `tb_profil_rs` (
  `id_profil_rs` int(50) NOT NULL,
  `text_profil_rs` text DEFAULT NULL,
  `foto_cover` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_profil_rs`
--

INSERT INTO `tb_profil_rs` (`id_profil_rs`, `text_profil_rs`, `foto_cover`) VALUES
(2, '<pre>\r\nNama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: Rumah Sakit Ibu dan Anak Yasmin Palangka Raya\r\nLokasi           : Jl. Tjilik Riwut KM. 1,5 No. 4 Palangka Raya, Kalimantan Tengah 73112 \r\nStatus           : Swasta \r\nTipe&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp;Tipe C \r\nTelp.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp;(0536) 3226193 \r\nEmail&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp;rsiayasmin.plk@gmail.com\r\nKepemilikan&nbsp; &nbsp; &nbsp; :&nbsp;Yayasan Pusat Nihin</pre>\r\n', '20210826103811.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sejarah`
--

CREATE TABLE `tb_sejarah` (
  `id_sejarah` int(50) NOT NULL,
  `text_sejarah` text DEFAULT NULL,
  `foto_cover` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sejarah`
--

INSERT INTO `tb_sejarah` (`id_sejarah`, `text_sejarah`, `foto_cover`) VALUES
(2, '<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:12px\"><span style=\"color:#000000\">&nbsp; &nbsp; Rumah Sakit Ibu dan Anak Yasmin dahulunya adalah Klinik Bersalin Yasmin yang dibangun mulai tahun 2007 dan selesai pada tahun 2008. Status pertama kali adalah sebagai Klinik Bersalin Lina (kontrak) tanggal 9 Agustus 2007 dan menjadi Klinik Bersalin Yasmin pada tanggal 28 Oktober 2008 dengan SK Ijin Operasional Penyelenggaraan Pelayanan Kesehatan Klinik Bersalin oleh Kepala Dinas Kesehatan Kota Palangka Raya Nomor : 040/JSK/X/2008. Dana pembangunan berasal dari pihak pemilik dan penyantun.</span></span></span></p>\r\n', '20210826083738.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slide`
--

CREATE TABLE `tb_slide` (
  `id_slide` int(50) NOT NULL,
  `foto_slide` varchar(100) DEFAULT NULL,
  `aktif` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_slide`
--

INSERT INTO `tb_slide` (`id_slide`, `foto_slide`, `aktif`) VALUES
(1, '20210910120420.jpg', 'active'),
(3, '20210910115933.jpg', 'no'),
(4, '20210910115759.jpg', 'no'),
(5, '20210910121316.jpg', NULL),
(6, '20210910121952.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_struktur`
--

CREATE TABLE `tb_struktur` (
  `id_struktur` int(50) NOT NULL,
  `foto_struktur` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_struktur`
--

INSERT INTO `tb_struktur` (`id_struktur`, `foto_struktur`) VALUES
(3, '20210905154219.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tersedia_bed`
--

CREATE TABLE `tb_tersedia_bed` (
  `id_tersedia_bed` int(50) NOT NULL,
  `id_kelas_bed` int(50) DEFAULT NULL,
  `id_usia_bed` int(50) DEFAULT NULL,
  `nama_kamar` varchar(100) DEFAULT NULL,
  `jenis_kelamin_bed` enum('Laki-Laki','Perempuan','Semua') DEFAULT NULL,
  `status_tersedia` enum('Kosong','Terpakai') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tersedia_bed`
--

INSERT INTO `tb_tersedia_bed` (`id_tersedia_bed`, `id_kelas_bed`, `id_usia_bed`, `nama_kamar`, `jenis_kelamin_bed`, `status_tersedia`) VALUES
(1, 1, 5, 'VIP 104', 'Semua', 'Kosong'),
(2, 1, 5, 'VIP 110', 'Semua', 'Kosong'),
(3, 1, 1, 'VIP 111', 'Perempuan', 'Kosong'),
(4, 1, 5, 'VIP 203', 'Semua', 'Kosong'),
(5, 2, 5, 'VVIP 108', 'Semua', 'Terpakai'),
(6, 3, 5, 'Yasmin 101', 'Semua', 'Kosong'),
(7, 3, 5, 'Yasmin 102', 'Semua', 'Kosong'),
(8, 3, 5, 'Yasmin 106', 'Semua', 'Terpakai'),
(9, 4, 5, 'Yasmin 105', 'Semua', 'Kosong'),
(10, 4, 5, 'Yasmin 109', 'Semua', 'Kosong'),
(11, 4, 5, 'Yasmin 112', 'Semua', 'Kosong');

-- --------------------------------------------------------

--
-- Table structure for table `tb_usia_bed`
--

CREATE TABLE `tb_usia_bed` (
  `id_usia_bed` int(50) NOT NULL,
  `nama_usia_bed` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_usia_bed`
--

INSERT INTO `tb_usia_bed` (`id_usia_bed`, `nama_usia_bed`) VALUES
(1, 'Anak-Anak'),
(2, 'Bayi'),
(3, 'Dewasa'),
(5, 'Semua');

-- --------------------------------------------------------

--
-- Table structure for table `tb_video_profil`
--

CREATE TABLE `tb_video_profil` (
  `id_video_profil` int(50) NOT NULL,
  `judul_video` varchar(100) DEFAULT NULL,
  `link_video` varchar(100) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_video_profil`
--

INSERT INTO `tb_video_profil` (`id_video_profil`, `judul_video`, `link_video`, `keterangan`) VALUES
(2, 'Video Profil RSIA YASMIN', 'https://www.youtube.com/watch?v=8koMXU-MyIQ', 'Video Profil RSIA Yasmin Agustus 2021');

-- --------------------------------------------------------

--
-- Table structure for table `tb_visi`
--

CREATE TABLE `tb_visi` (
  `id_visi` int(50) NOT NULL,
  `text_visi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_visi`
--

INSERT INTO `tb_visi` (`id_visi`, `text_visi`) VALUES
(2, '<p><strong><em>&quot;</em></strong><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Menjadi Rumah Sakit Khusus Ibu dan Anak pilihan utama keluarga di Kalimantan Tengah</span></span></span><strong><em>&quot;.</em></strong></p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `tb_album`
--
ALTER TABLE `tb_album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_besuk`
--
ALTER TABLE `tb_besuk`
  ADD PRIMARY KEY (`id_besuk`);

--
-- Indexes for table `tb_dokter_kami`
--
ALTER TABLE `tb_dokter_kami`
  ADD PRIMARY KEY (`id_dokter_kami`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tb_jadwal_dokter`
--
ALTER TABLE `tb_jadwal_dokter`
  ADD PRIMARY KEY (`id_jadwal_dokter`);

--
-- Indexes for table `tb_kategori_dokter`
--
ALTER TABLE `tb_kategori_dokter`
  ADD PRIMARY KEY (`id_kategori_dokter`);

--
-- Indexes for table `tb_kategori_layanan`
--
ALTER TABLE `tb_kategori_layanan`
  ADD PRIMARY KEY (`id_kategori_layanan`);

--
-- Indexes for table `tb_kelas_bed`
--
ALTER TABLE `tb_kelas_bed`
  ADD PRIMARY KEY (`id_kelas_bed`);

--
-- Indexes for table `tb_kerjasama`
--
ALTER TABLE `tb_kerjasama`
  ADD PRIMARY KEY (`id_kerjasama`);

--
-- Indexes for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `tb_medsos`
--
ALTER TABLE `tb_medsos`
  ADD PRIMARY KEY (`id_medsos`);

--
-- Indexes for table `tb_misi`
--
ALTER TABLE `tb_misi`
  ADD PRIMARY KEY (`id_misi`);

--
-- Indexes for table `tb_poli`
--
ALTER TABLE `tb_poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `tb_profil_rs`
--
ALTER TABLE `tb_profil_rs`
  ADD PRIMARY KEY (`id_profil_rs`);

--
-- Indexes for table `tb_sejarah`
--
ALTER TABLE `tb_sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indexes for table `tb_slide`
--
ALTER TABLE `tb_slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `tb_struktur`
--
ALTER TABLE `tb_struktur`
  ADD PRIMARY KEY (`id_struktur`);

--
-- Indexes for table `tb_tersedia_bed`
--
ALTER TABLE `tb_tersedia_bed`
  ADD PRIMARY KEY (`id_tersedia_bed`);

--
-- Indexes for table `tb_usia_bed`
--
ALTER TABLE `tb_usia_bed`
  ADD PRIMARY KEY (`id_usia_bed`);

--
-- Indexes for table `tb_video_profil`
--
ALTER TABLE `tb_video_profil`
  ADD PRIMARY KEY (`id_video_profil`);

--
-- Indexes for table `tb_visi`
--
ALTER TABLE `tb_visi`
  ADD PRIMARY KEY (`id_visi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id_akun` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_album`
--
ALTER TABLE `tb_album`
  MODIFY `id_album` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_besuk`
--
ALTER TABLE `tb_besuk`
  MODIFY `id_besuk` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_dokter_kami`
--
ALTER TABLE `tb_dokter_kami`
  MODIFY `id_dokter_kami` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_jadwal_dokter`
--
ALTER TABLE `tb_jadwal_dokter`
  MODIFY `id_jadwal_dokter` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_kategori_dokter`
--
ALTER TABLE `tb_kategori_dokter`
  MODIFY `id_kategori_dokter` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kategori_layanan`
--
ALTER TABLE `tb_kategori_layanan`
  MODIFY `id_kategori_layanan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_kelas_bed`
--
ALTER TABLE `tb_kelas_bed`
  MODIFY `id_kelas_bed` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kerjasama`
--
ALTER TABLE `tb_kerjasama`
  MODIFY `id_kerjasama` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id_kontak` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `id_layanan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_medsos`
--
ALTER TABLE `tb_medsos`
  MODIFY `id_medsos` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_misi`
--
ALTER TABLE `tb_misi`
  MODIFY `id_misi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_poli`
--
ALTER TABLE `tb_poli`
  MODIFY `id_poli` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_profil_rs`
--
ALTER TABLE `tb_profil_rs`
  MODIFY `id_profil_rs` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_sejarah`
--
ALTER TABLE `tb_sejarah`
  MODIFY `id_sejarah` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_slide`
--
ALTER TABLE `tb_slide`
  MODIFY `id_slide` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_struktur`
--
ALTER TABLE `tb_struktur`
  MODIFY `id_struktur` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_tersedia_bed`
--
ALTER TABLE `tb_tersedia_bed`
  MODIFY `id_tersedia_bed` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_usia_bed`
--
ALTER TABLE `tb_usia_bed`
  MODIFY `id_usia_bed` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_video_profil`
--
ALTER TABLE `tb_video_profil`
  MODIFY `id_video_profil` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_visi`
--
ALTER TABLE `tb_visi`
  MODIFY `id_visi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
