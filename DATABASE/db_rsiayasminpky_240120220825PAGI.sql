-- MariaDB dump 10.19  Distrib 10.4.21-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: db_rsiayasminpky
-- ------------------------------------------------------
-- Server version	10.4.21-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_akun`
--

DROP TABLE IF EXISTS `tb_akun`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_akun` (
  `id_akun` int(50) NOT NULL AUTO_INCREMENT,
  `nama_akun` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nik` varchar(100) DEFAULT NULL,
  `departemen` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level_akses` enum('super','admin','karyawan','personalia','kabid') DEFAULT NULL,
  PRIMARY KEY (`id_akun`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_akun`
--

LOCK TABLES `tb_akun` WRITE;
/*!40000 ALTER TABLE `tb_akun` DISABLE KEYS */;
INSERT INTO `tb_akun` VALUES (1,'Benny Sarmoko','Laki-Laki','benny.sarmoko27@gmail.com','2103187','IT','benny0852','123','super'),(5,'Benny Sarmoko','Laki-Laki','benny.sarmoko27@gmail.com','2103187','IT/SERVER','benny123','123','karyawan'),(7,'EMILLIAH','Perempuan','emilemil1984@gmail.com','050103','ADMISI','050103','050103','karyawan'),(8,'JUMIATI','Perempuan','jumiati0619@gmail.com','1711132','ADMISI','1711132','1711132','karyawan'),(9,'CHRISMONIKA AYU WULANDARI, S.Pd','Perempuan','-','-','ADMISI','wulan123','123','karyawan'),(10,'EMMYLYA YANTHY','Perempuan','-','080513','CLEANING SERVICE','080513','080513','karyawan'),(11,'HARIANI','Perempuan','-','-','CLEANING SERVICE','hariani','123','karyawan'),(12,'MARTINAH','Perempuan','-','1805141','CLEANING SERVICE','1805141','1805141','karyawan'),(13,'MURNI','Perempuan','-','121068','CLEANING SERVICE','121068','121068','karyawan'),(14,'DITA YUSTIA','Perempuan','-','-','CLEANING SERVICE','dita123','123','karyawan'),(15,'TRIWATI','Perempuan','-','111251','CLEANING SERVICE','111251','111251','karyawan'),(16,'dr. MARIA DEWI PURWANTI','Perempuan','mariadewipurwanti@gmail.com','141098','DIREKTUR','141098','141098','karyawan'),(17,'SUMARDI','Laki-Laki','-','120562','DRIVER','120562','120562','karyawan'),(18,'HANA KASINTHA, S. Farm., Apt.','Perempuan','-','1901152','FARMASI','1901152','1901152','karyawan'),(19,'KHAIRATUL AWALIYAH, A. Md. Farm.','Perempuan','-','1901151','FARMASI','1901151','1901151','karyawan'),(20,'LISTRA DANIATY, A. Md. Farm','Perempuan','listra.daniaty93@gmail.com','1504110','FARMASI','1504110','1504110','karyawan'),(21,'MEIRY FITRIANI, A.Md.Farm','Perempuan','-','-','FARMASI','meiry123','123','karyawan'),(22,'DEA PRESTIA MEGANTARI, A.Md.Farm','Perempuan','-','-','FARMASI','dea123','123','karyawan'),(23,'SEPTI KUSUMAWARDHANI, A. Md. Farm','Perempuan','septikusumawardhani1@gmail.com','1507115','FARMASI','1507115','1507115','karyawan'),(24,'NENI RAHMAYANI, Amd. Gz','Perempuan','nenirahmayani@yahoo.co.id','140892','GIZI','140892','140892','karyawan'),(25,'IKA ENDAH P. RINI MD, S. Far. Apt.','Perempuan','-','100336','KABID','100336','100336','kabid'),(26,'MILAWATI. AS, ST','Perempuan','-','080212','KABID','080212','080212','kabid'),(27,'MELAN SANDRA, SE','Perempuan','-','-','KASIR','melan123','123','karyawan'),(28,'THIO HAMONANGAN SIMANJUNTAK, SE','Laki-Laki','-','-','KASIR','thio123','123','karyawan'),(29,'DIAH WULANDARI','Perempuan','-','1411102','KASIR','1411102','1411102','karyawan'),(30,'MAHBUBAH, A. Md.','Perempuan','mahbubahamayayoo@gmail.com','1903157','KASIR','1903157','1903157','karyawan'),(31,'ELISA PANJAITAN, Amd. Keb','Perempuan','elisapanjaitan@yahoo.com','120256','KEBIDANAN','120256','120256','karyawan'),(32,'HANIYAH, A. Md. Keb','Perempuan','-','1705130','KEBIDANAN','1705130','1705130','karyawan'),(33,'HESTIRIA PINTARI, Amd. Keb','Perempuan','-','111253','KEBIDANAN','111253','111253','karyawan'),(34,'JAMIYAH PUSPITASARI, A. Md. Keb','Perempuan','-','1705129','KEBIDANAN','1705129','1705129','karyawan'),(35,'MELINDA TRI JAYANTI, A. Md. Keb','Perempuan','melindatri1994@gmail.com','1707131','KEBIDANAN','1707131','1707131','karyawan'),(36,'NIKE INDRIYANI, Amd. Keb','Perempuan','nikeyasmin89@gmail.com','110141','KEBIDANAN','110141','110141','karyawan'),(37,'NISA FIKA RAHAYU, Amd. Keb','Perempuan','nisafikara@gmail.com','1509117','KEBIDANAN','1509117','1509117','karyawan'),(38,'AGUS BUDIARTO, Amd. AK','Laki-Laki','aguz.budiarto@yahoo.com','111049','LABORATORIUM','111049','111049','karyawan'),(39,'ATIK FARIHAH, Amd. AK','Perempuan','atx.fari22@gmail.com','091129','LABORATORIUM','091129','091129','karyawan'),(40,'HIKMAH, A. Md. AK','Perempuan','hikmahhikmah220@yahoo.com','130480','LABORATORIUM','130480','130480','karyawan'),(41,'INDARTI TRI HANDAYANI, A. Md. AK','Perempuan','iin.trihandayanii29@gamail.com','120864','LABORATORIUM','120864','120864','karyawan'),(42,'KRISTI OKTAVIYANI, A. Md. AK','Perempuan','kristi.oktaviani31@gmail.com','120865','LABORATORIUM','120865','120865','karyawan'),(43,'SUPIANOR, Amd. AK','Laki-Laki','sufiannorthan@yahoo.co.id','111048','LABORATORIUM','111048','111048','karyawan'),(44,'DEWI KARTIKA','Perempuan','dkartika03@yahoo.com','081123','LOGISTIK DAN RUMAH TANGA','081123','081123','karyawan'),(45,'LENI FURNAYANTY, A. Md. Kep','Perempuan','lenifurnayanty@gmail.com','1502104','NEONATUS DAN ANAK','1502104','1502104','karyawan'),(46,'MALIANA AS','Perempuan','16.maliana@gmail.com','070610','NEONATUS DAN ANAK','070610','070610','karyawan'),(47,'MURNI MARPAUNG, Amd. Kep','Perempuan','-','081017','NEONATUS DAN ANAK','081017','081017','karyawan'),(48,'NIKA INDRIYANA, Amd. Kep','Perempuan','niekha89@gmail.com','110142','NEONATUS DAN ANAK','110142','110142','karyawan'),(49,'RAYSHA KATHLEEN C. MIHING, Amd. Kep','Perempuan','rayshakathleen.pky25@gmail.com','100233','NEONATUS DAN ANAK','100233','100233','karyawan'),(50,'SITI MAWARDAH, A. Md. Kep.','Perempuan','-','1901153','NEONATUS DAN ANAK','1901153','1901153','karyawan'),(51,'YULIA NINGSIH','Perempuan','-','070611','NEONATUS DAN ANAK','070611','070611','karyawan'),(52,'GINERSON','Laki-Laki','-','130478','OB','130478','130478','karyawan'),(53,'MASKUR','Laki-Laki','-','1703127','OB','1703127','1703127','karyawan'),(54,'ANI','Perempuan','-','1704135','PANTRY','1704135','1704135','karyawan'),(55,'MASRUFAH','Perempuan','-','050102','PANTRY','050102','050102','karyawan'),(56,'SHERLY  VONNIANTRY, A. Ma','Perempuan','-','-','PANTRY','sherly123','123','karyawan'),(57,'RIKA VIRAMA WIRYAWAN, SE','Perempuan','rikaharada77@yahoo.co.id','070305','PERSONALIA','070305','070305','personalia'),(58,'LAELY PURNAMA, A. Md. Keb','Perempuan','laelypurnama010@gmail.com','1901154','POLI RAJAL','1901154','1901154','karyawan'),(59,'NINING NOR PEBRIAWATI, A. Md. Kep','Perempuan','-','1502105','POLI RAJAL','1502105','1502105','karyawan'),(60,'VERA OKTAVIANA, Amd. Keb','Perempuan','-','1802138','POLI RAJAL','1802138','1802138','karyawan'),(61,'TRIANA FEBRIANI, Amd. Kep','Perempuan','trianafebriani.pky@gmail.com','101240','PPI','101240','101240','karyawan'),(62,'KIKI NOR FITRIA WIDIANTI','Perempuan','kikiwaid2.fitriaahmad@gmail.com','1903156','PRAMUSAJI','1903156','1903156','karyawan'),(63,'ABDUL HADI','Laki-Laki','-','111252','SATPAM','111252','111252','karyawan'),(64,'INDRA','Laki-Laki','-','090828','SATPAM','090828','090828','karyawan'),(65,'SAINI','Laki-Laki','-','-','SATPAM','saini123','123','karyawan'),(66,'SUBIYANTO','Laki-Laki','-','-','SATPAM','subiyanto123','123','karyawan'),(67,'LISA NAZLA, SP','Perempuan','-','1603124','SPI','1603124','1603124','admin'),(68,'DIARINI TRESYA, Amd. Keb','Perempuan','dearini.tresya@gmail.com','1601120','UGD','1601120','1601120','karyawan'),(69,'dr. PRISKA REFANI','Perempuan','priskarefani@gmail.com','1905160','UGD','1905160','1905160','karyawan'),(70,'dr. RESTU HIJRIAH','Perempuan','-','1808146','UGD','1808146','1808146','karyawan'),(71,'dr. PAMELA ESTERIA LUSIANA','Perempuan','-','-','UGD','pamela123','123','karyawan'),(72,'dr. THYRISTER NINA ASARYA SEMBIRING','Perempuan','-','1904158','UGD','1904158','1904158','karyawan'),(73,'NOVA AYU LOLITASARI, A. Md. Keb','Perempuan','-','-','UGD','nova123','123','karyawan'),(74,'RENO RAMADHAN, Amd. Kep','Laki-Laki','-','1902155','UGD','1902155','1902155','karyawan'),(75,'SUPARDIANTO, Amd. Kep','Laki-Laki','supardyan@yahoo.com','121270','UGD','121270','121270','karyawan'),(76,'MISRAN','Laki-Laki','rika_virama82@yahoo.co.id','050101','UPSRS','050101','050101','karyawan'),(77,'RENDRA SUHENDRA, S. Sos','Laki-Laki','-','1401142','UPSRS','1401142','1401142','karyawan'),(78,'SAMSUL','Laki-Laki','-','081020','UPSRS','081020','081020','karyawan');
/*!40000 ALTER TABLE `tb_akun` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_album`
--

DROP TABLE IF EXISTS `tb_album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_album` (
  `id_album` int(50) NOT NULL AUTO_INCREMENT,
  `nama_album` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_album`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_album`
--

LOCK TABLES `tb_album` WRITE;
/*!40000 ALTER TABLE `tb_album` DISABLE KEYS */;
INSERT INTO `tb_album` VALUES (1,'Senam Hamil'),(3,'Posyandu');
/*!40000 ALTER TABLE `tb_album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_artikel`
--

DROP TABLE IF EXISTS `tb_artikel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_artikel` (
  `id_artikel` int(50) NOT NULL AUTO_INCREMENT,
  `judul_artikel` varchar(100) DEFAULT NULL,
  `isi_artikel` text DEFAULT NULL,
  `tgl_upload` datetime DEFAULT NULL,
  `foto_artikel_cover` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_artikel`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_artikel`
--

LOCK TABLES `tb_artikel` WRITE;
/*!40000 ALTER TABLE `tb_artikel` DISABLE KEYS */;
INSERT INTO `tb_artikel` VALUES (1,'PENANGANAN DEMAM PADA ANAK 123','<p>                        </p><p><span style=\"color: rgb(0, 0, 0); font-family: \" pt=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><b>BENNY SARMOKO</b></span></p><p><span style=\"color: rgb(0, 0, 0); font-family: \" pt=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">Demam pada anak merupakan alasan konsultasi tersering &nbsp;ke dokter anak dan dokter umum, sekitar 30% dari seluruh total kunjungan. Demam merupakan reaksi normal tubuh yang bermanfaat melawan kuman. Walaupun banyak orangtua memberikan obat penurun panas, perlu ditekankan bahwa tujuan utama obat tersebut adalah membuat anak merasa nyaman, bukan mempertahankan suhu yang normal.</span>                      </p>','2021-08-27 08:33:00','PENANGANAN DEMAM PADA ANAK.jpg');
/*!40000 ALTER TABLE `tb_artikel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_berita`
--

DROP TABLE IF EXISTS `tb_berita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_berita` (
  `id_berita` int(50) NOT NULL AUTO_INCREMENT,
  `judul_berita` varchar(100) DEFAULT NULL,
  `isi_berita` text DEFAULT NULL,
  `tgl_upload` datetime DEFAULT NULL,
  `foto_berita_cover` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_berita`
--

LOCK TABLES `tb_berita` WRITE;
/*!40000 ALTER TABLE `tb_berita` DISABLE KEYS */;
INSERT INTO `tb_berita` VALUES (1,'Telah Dibuka Rehabilitasi Medik 123','<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Rehabilitasi Medik RS Islam PKU Muhammadiyah Palangka Raya resmi dibuka sejak 17 Mei 2017 dengan memberikan pelayanan:</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Dokter Spesialis Kedokteran Fisik dan Rehabilitasi</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Fisioterapi</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Melayani pasien umum, pasien BPJS Kesehatan dengan faskes tk. 1 (dokter keluarga / Puskesmas), dan pasien dengan asurasi perusahaan lainnya</span></p>\r\n','2021-08-26 22:59:00','Telah Dibuka Rehabilitasi Medik.jpg');
/*!40000 ALTER TABLE `tb_berita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_besuk`
--

DROP TABLE IF EXISTS `tb_besuk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_besuk` (
  `id_besuk` int(50) NOT NULL AUTO_INCREMENT,
  `hari_besuk` varchar(100) DEFAULT NULL,
  `jam_besuk` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_besuk`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_besuk`
--

LOCK TABLES `tb_besuk` WRITE;
/*!40000 ALTER TABLE `tb_besuk` DISABLE KEYS */;
INSERT INTO `tb_besuk` VALUES (1,'Senin - Sabtu','Mohon maaf, selama pandemi Covid19, tidak ada jam besuk'),(2,'Senin - Sabtu','Mohon maaf, selama pandemi Covid19, tidak ada jam besuk'),(4,'Minggu','Mohon maaf, selama pandemi Covid19, tidak ada jam besuk');
/*!40000 ALTER TABLE `tb_besuk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_dokter_kami`
--

DROP TABLE IF EXISTS `tb_dokter_kami`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_dokter_kami` (
  `id_dokter_kami` int(50) NOT NULL AUTO_INCREMENT,
  `id_kategori_dokter` int(50) DEFAULT NULL,
  `nama_dokter` varchar(100) DEFAULT NULL,
  `profil_dokter` text DEFAULT NULL,
  `tips_gaya_sehat` text DEFAULT NULL,
  `foto_dokter` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_dokter_kami`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_dokter_kami`
--

LOCK TABLES `tb_dokter_kami` WRITE;
/*!40000 ALTER TABLE `tb_dokter_kami` DISABLE KEYS */;
INSERT INTO `tb_dokter_kami` VALUES (2,3,'dr. Pamela Esteria Lusiana','Dokter Pamela adalah dokter umum yang bertugas sebagai dokter layanan tingkat pertama, berperan dalam memberikan pencegahan, diagnosis dan penanganan awal, serta merujuk ke dokter spesialis jika diperlukan','dasdasdasdasd,dasdasdasd,asdasd,asdasd','dr. Pamela Esteria Lusiana.jpg'),(3,3,'dr. Restu Hijriah','Dokter Restu adalah dokter umum yang bertugas sebagai dokter layanan tingkat pertama, berperan dalam memberikan pencegahan, diagnosis dan penanganan awal, serta merujuk ke dokter spesialis jika diperlukan','Menjaga kebersihan,\r\nMakan dan minum teratur, konsumsi diet bergizi dan seimbang,\r\nLebih aktif & banyak bergerak,\r\nKelola stres & tidur yang cukup','dr. Restu Hijriah.jpg'),(4,3,'dr. Priska Refani','Dokter Priska adalah dokter umum yang bertugas sebagai dokter layanan tingkat pertama, berperan dalam memberikan pencegahan, diagnosis dan penanganan awal, serta merujuk ke dokter spesialis jika diperlukan','tuliskan tips disini. Berikan tanda koma di akhir kalimat jika tips lebih dari satu.','dr. Priska Refani.jpg'),(5,3,'dr. Ratnasari Ridar Widyaningrum','Dokter Ratnasari adalah dokter umum yang bertugas sebagai dokter layanan tingkat pertama, berperan dalam memberikan pencegahan, diagnosis dan penanganan awal, serta merujuk ke dokter spesialis jika diperlukan','tuliskan tips disini. Berikan tanda koma di akhir kalimat jika tips lebih dari satu.','dr. Ratnasari Ridar Widyaningrum.jpg'),(6,4,'Dr. dr. Sigit Nurfianto, Sp.OG(K)','tuliskan tentang dokter disini.','tuliskan tips disini. Berikan tanda koma di akhir kalimat jika tips lebih dari satu.','Dr. dr. Sigit Nurfianto, Sp.OG(K).jpg'),(8,4,'dr.  I Gde Hary Eka Adnyana, Sp.OG., M.Biome','tuliskan tentang dokter disini.','tuliskan tips disini. Berikan tanda koma di akhir kalimat jika tips lebih dari satu.','dr.  I Gde Hary Eka Adnyana, Sp.OG., M.Biome.jpg'),(9,2,'dr. Enny Karyani, Sp.A','tuliskan tentang dokter disini.','tuliskan tips disini. Berikan tanda koma di akhir kalimat jika tips lebih dari satu.','dr. Enny Karyani, Sp.A.jpg'),(11,2,'dr. Andar Juan R. P. Sitanggang, Sp.A., M.Sc','tuliskan tentang dokter disini.','tuliskan tips disini. Berikan tanda koma di akhir kalimat jika tips lebih dari satu.','dr. Andar Juan R. P. Sitanggang, Sp.A., M.Sc.jpg'),(12,1,'drg. Marissa Octavia','tuliskan tentang dokter disini.','tuliskan tips disini. Berikan tanda koma di akhir kalimat jika tips lebih dari satu.','drg. Marissa Octavia.jpg'),(13,1,'drg.  Christo','tuliskan tentang dokter disini.','tuliskan tips disini. Berikan tanda koma di akhir kalimat jika tips lebih dari satu.','drg.  Christo.jpg'),(14,5,'drg. Desi Wadianawati,  Sp.KG','tuliskan tentang dokter disini.','tuliskan tips disini. Berikan tanda koma di akhir kalimat jika tips lebih dari satu.','drg. Desi Wadianawati.jpg');
/*!40000 ALTER TABLE `tb_dokter_kami` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_galeri`
--

DROP TABLE IF EXISTS `tb_galeri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_galeri` (
  `id_galeri` int(50) NOT NULL AUTO_INCREMENT,
  `id_album` int(50) DEFAULT NULL,
  `nama_foto` varchar(100) DEFAULT NULL,
  `file_foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_galeri`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_galeri`
--

LOCK TABLES `tb_galeri` WRITE;
/*!40000 ALTER TABLE `tb_galeri` DISABLE KEYS */;
INSERT INTO `tb_galeri` VALUES (2,3,'Kegiatan Imunisasi Pasca Pandemi COVID-19 Kedua','Kegiatan Imunisasi Pasca Pandemi COVID-19 Kedua.jpg');
/*!40000 ALTER TABLE `tb_galeri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_jadwal_dokter`
--

DROP TABLE IF EXISTS `tb_jadwal_dokter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_jadwal_dokter` (
  `id_jadwal_dokter` int(50) NOT NULL AUTO_INCREMENT,
  `id_poli` int(50) DEFAULT NULL,
  `id_dokter_kami` int(50) DEFAULT NULL,
  `pelayanan` enum('Reguler','Tekon') DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam_kerja` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_jadwal_dokter`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_jadwal_dokter`
--

LOCK TABLES `tb_jadwal_dokter` WRITE;
/*!40000 ALTER TABLE `tb_jadwal_dokter` DISABLE KEYS */;
INSERT INTO `tb_jadwal_dokter` VALUES (1,2,11,'Reguler','2021-09-07','19.00-21.00'),(2,5,8,'Reguler','2021-09-09','16.00-19.00'),(3,5,6,'Reguler','2021-10-09','19.00-21.00'),(5,2,9,'Reguler','2021-09-13','13.00-16.00'),(6,3,13,'Reguler','2021-09-10','17.30-21.00'),(7,3,14,'Reguler','2021-09-13','16.00-20.00'),(8,3,12,'Reguler','2021-09-10','08.00-11.00');
/*!40000 ALTER TABLE `tb_jadwal_dokter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_kategori_dokter`
--

DROP TABLE IF EXISTS `tb_kategori_dokter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_kategori_dokter` (
  `id_kategori_dokter` int(50) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_dokter`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_kategori_dokter`
--

LOCK TABLES `tb_kategori_dokter` WRITE;
/*!40000 ALTER TABLE `tb_kategori_dokter` DISABLE KEYS */;
INSERT INTO `tb_kategori_dokter` VALUES (1,'Dokter Gigi'),(2,'Dokter Spesialis Anak'),(3,'Dokter Umum'),(4,'Dokter Spesialis Kebidanan dan Penyakit Kandungan'),(5,'Dokter Spesialis Gigi dan Mulut');
/*!40000 ALTER TABLE `tb_kategori_dokter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_kategori_layanan`
--

DROP TABLE IF EXISTS `tb_kategori_layanan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_kategori_layanan` (
  `id_kategori_layanan` int(50) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_layanan`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_kategori_layanan`
--

LOCK TABLES `tb_kategori_layanan` WRITE;
/*!40000 ALTER TABLE `tb_kategori_layanan` DISABLE KEYS */;
INSERT INTO `tb_kategori_layanan` VALUES (1,'Rawat Inap'),(2,'Rawat Jalan'),(3,'Penunjang'),(4,'Umum');
/*!40000 ALTER TABLE `tb_kategori_layanan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_kelas_bed`
--

DROP TABLE IF EXISTS `tb_kelas_bed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_kelas_bed` (
  `id_kelas_bed` int(50) NOT NULL AUTO_INCREMENT,
  `nama_kelas_bed` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_kelas_bed`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_kelas_bed`
--

LOCK TABLES `tb_kelas_bed` WRITE;
/*!40000 ALTER TABLE `tb_kelas_bed` DISABLE KEYS */;
INSERT INTO `tb_kelas_bed` VALUES (1,'VIP'),(2,'VVIP'),(3,'Kelas I'),(4,'Kelas II');
/*!40000 ALTER TABLE `tb_kelas_bed` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_kerjasama`
--

DROP TABLE IF EXISTS `tb_kerjasama`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_kerjasama` (
  `id_kerjasama` int(50) NOT NULL AUTO_INCREMENT,
  `text_kerjasama` text DEFAULT NULL,
  `foto_cover` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_kerjasama`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_kerjasama`
--

LOCK TABLES `tb_kerjasama` WRITE;
/*!40000 ALTER TABLE `tb_kerjasama` DISABLE KEYS */;
INSERT INTO `tb_kerjasama` VALUES (3,'<p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; font-size: 14px; line-height: 30px; color: rgb(0, 0, 0); display: inline-block; z-index: 1; position: relative; font-family: &quot;PT Sans&quot;, sans-serif;\">Dalam rangka membantu memberikan layanan kesehatan kepada masyarakat, dilakukan perjanjian kerjasama dengan beberapa perusahaan/ asuransi, yaitu :</p><span style=\"color: rgb(0, 0, 0); font-family: &quot;PT Sans&quot;, sans-serif; font-size: 14px;\"></span><ol style=\"margin-bottom: 25px; list-style-position: initial; list-style-image: initial; padding-left: 25px; color: rgb(0, 0, 0); font-family: &quot;PT Sans&quot;, sans-serif; font-size: 14px;\"><li style=\"margin: 10px 0px;\">FEDERAL INTERNATIONAL FINANCE</li><li style=\"margin: 10px 0px;\">ASURANSI JIWA INHEALTH INDONESIA</li><li style=\"margin: 10px 0px;\">BNI LIFE INDONESIA</li><li style=\"margin: 10px 0px;\">EKA ASIH ABADI (<span style=\"font-weight: 700;\">SOS/ PRUDENTIAL</span>)</li><li style=\"margin: 10px 0px;\">ASURANSI WINTERTHUR LIFE INDONESIA</li><li style=\"margin: 10px 0px;\">ASURANSI ASTRA BUANA (GARDA MEDIKA)</li><li style=\"margin: 10px 0px;\">YAKES TELKOM AREA KALIMANTAN</li><li style=\"margin: 10px 0px;\">BANK SYARIAH MANDIRI</li><li style=\"margin: 10px 0px;\">EQUITYNLIFE INDONESIA</li><li style=\"margin: 10px 0px;\">ASURANSI SINAR MAS</li><li style=\"margin: 10px 0px;\">ANGLO EASTERN PLANTATION MANAJEMEN</li><li style=\"margin: 10px 0px;\">MNC LIFE ASURANSI</li><li style=\"margin: 10px 0px;\">ASURANSI RELIANCE INDONESIA</li><li style=\"margin: 10px 0px;\">ASURANSI ADIRA DINAMIKA</li><li style=\"margin: 10px 0px;\">SAWIT GRAHA MANUNGGAL DAN PT. KAHAYAN AGRO PLANTATION</li><li style=\"margin: 10px 0px;\">PERTAMINA</li><li style=\"margin: 10px 0px;\">PRODIAWIUDYAHUSADA</li><li style=\"margin: 10px 0px;\">ASURANSI BINTANG, Tbk.</li><li style=\"margin: 10px 0px;\">LIPPO GENERAL INSURANCE, Tbk.</li><li style=\"margin: 10px 0px;\">MUTIARA MEDICAL SERVICE</li></ol>','20210826210713.jpg');
/*!40000 ALTER TABLE `tb_kerjasama` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_kontak`
--

DROP TABLE IF EXISTS `tb_kontak`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_kontak` (
  `id_kontak` int(50) NOT NULL AUTO_INCREMENT,
  `alamat` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fax_telp` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_kontak`
--

LOCK TABLES `tb_kontak` WRITE;
/*!40000 ALTER TABLE `tb_kontak` DISABLE KEYS */;
INSERT INTO `tb_kontak` VALUES (4,'Jl. Tjilik Riwut Km. 1,5 No. 04 Palangka Raya Kalimantan Tengah 73112','rsiayasmin.plk@gmail.com','(0536) 3226193');
/*!40000 ALTER TABLE `tb_kontak` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_layanan`
--

DROP TABLE IF EXISTS `tb_layanan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_layanan` (
  `id_layanan` int(50) NOT NULL AUTO_INCREMENT,
  `id_kategori_layanan` int(50) DEFAULT NULL,
  `nama_layanan` varchar(100) DEFAULT NULL,
  `deskripsi_layanan` text DEFAULT NULL,
  `foto_layanan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_layanan`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_layanan`
--

LOCK TABLES `tb_layanan` WRITE;
/*!40000 ALTER TABLE `tb_layanan` DISABLE KEYS */;
INSERT INTO `tb_layanan` VALUES (2,3,'LABORATORIUM','<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:12px\"><span style=\"color:#000000\">Pemeriksaan pada sel darah meliputi kadar hemoglobin, jumlah eritrosit, hematokrit, nilai eritrosit rerata (nilai NER), jumlah leukosit dan trombosit. Selain itu pemeriksaan hematologi meliputi pula hitung retikulosit, hitung eosinofil, aktifitas&nbsp;</span><em>glucose-6-phosphate dehydrogenase</em><span style=\"color:#000000\">&nbsp;(G6PD), daya tahan osmotik eritrosit yang dikenal sebagai resistensi osmotik eritrosit, penetapan fraksi hemoglobin dalam eritrosit yang diperiksa dengan analisa hemoglobin, pemeriksaan sel lupus eritematosus (LE) serta penetapan golongan darah. Selain itu, pemeriksaan hematologi yang terpenting adalah pemeriksaan hitung jenis leukosit&nbsp; disertai dengan penilaian morfologi sel darah yang dapat diketahui dengan pemeriksaan gambaran darah tepi. Pemeriksaan gambaran darah tepi dapat menilai kelainan bentuk dari eritrosit, leukosit dan trombosit yang dapat menimbulkan kelainan secara hematologis.</span></span></span></p>\r\n','LABORATORIUM.jpg'),(3,3,'Farmasi','<p>,,,,layanan OABHP RS,,,,,Tulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n','Farmasi.jpg'),(4,2,'Rapid Swab Antigen','<p>Rapid swab antigen adalah,,,, Tarif layanan ,,,,,</p>\r\n','Rapid Swab Antigen.jpg'),(5,2,'PCR Swab Test','<p>PCR Swab Test adalah ,,,,, tarif ,,,,Tulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n','PCR Swab Test.jpg'),(6,2,'Hai Dok (Telemedicine)','<p>Hai Dok adalah layanan konsultasi kesehatan secara online (telemedicine)&nbsp; bersama dokter umum atau dokter spesialis kebidanan dan kandungan.</p>\r\n','Hai Dok (Telemedicine).jpg'),(7,3,'USG 4D','<p>......Tulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n','USG 4D.jpg'),(8,2,'Unit Gawat Darurat','<p>Tulis <em>suffffatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n','Unit Gawat Darurat.jpg'),(9,2,'Poli Kandungan','<p>....Tulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n','Poli Kandungan.jpg'),(10,2,'Poli Gigi dan Mulut','<p>.....Tulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n','Poli Gigi dan Mulut.jpg'),(11,2,'Poli Anak','<p>.....Tulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n','Poli Anak.jpg'),(12,3,'Ambulance','<p>.....Tulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n','Ambulance.jpg'),(13,3,'Imunisasi Bayi dan Anak','<p>T....ulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n','Imunisasi Bayi dan Anak.jpg'),(14,4,'Senam HAmil','<p>Tu...lis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n','Senam HAmil.jpg'),(15,1,'Kamar Perawatan VVIP','<p>Fasilitas , tarif....Tulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n','Kamar Perawatan VVIP.jpg'),(16,1,'Kamar Perawatan VIP','<p>fasilitas ,,, tarif&nbsp; Tulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n','Kamar Perawatan VIP.jpg'),(17,1,'Kmar Perawatan Kelas II','<p>Tulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n','Kmar Perawatan Kelas II.jpg'),(18,1,'Kamar Perawatan Kelas I','<p>Tulis <em>suatu</em> <u>deskripsi</u> <strong>disini</strong></p>\r\n','Kamar Perawatan Kelas I.jpg'),(19,4,'ATM BCA','<p>Terdapat ATM (Anjungan Tunai Mandiri) BCA Untuk memudahkan Anda dalam bertransaksi keuangan.&nbsp;Mesin ini memiliki sejumlah fungsi layanan yang meliputi menarik uang tunai, melakukan pengiriman uang, mengecek saldo rekening tabungan, dan membayar berbagai jenis tagihan.</p>\r\n\r\n<p>ATM ini juga dapat melakukan transaksi dengan jaringan ATM:</p>\r\n\r\n<ul>\r\n	<li>Bersama</li>\r\n	<li>Prima</li>\r\n	<li>Link</li>\r\n</ul>\r\n','ATM BCA.jpg'),(20,4,'Musholla','<p>Musholla RSIA Yasmin tertelak di gedung utama dengan kapasitas yang cukup luas sehingga memberikan rasa nyaman untuk beribadah. Selain itu juga tersedia Al-quran dan alat shalat untuk pria dan wanita.</p>\r\n','Musholla.jpg'),(21,4,'Area Parkir','<p>Area parkir kendaraan roda 2 dan 4 di RSIA Yasmin tersedia dengan memanfaatkan lahan yang ada, dan dijaga oleh petugas keamanan yang akan menjaga keamanan kendaraan anda serta tersedianya CCTV yang aktif selama 24 jam.</p>\r\n','Area Parkir.jpg');
/*!40000 ALTER TABLE `tb_layanan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_medsos`
--

DROP TABLE IF EXISTS `tb_medsos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_medsos` (
  `id_medsos` int(50) NOT NULL AUTO_INCREMENT,
  `nama_medsos` varchar(100) DEFAULT NULL,
  `link_medsos` varchar(100) DEFAULT NULL,
  `icon_medsos` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_medsos`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_medsos`
--

LOCK TABLES `tb_medsos` WRITE;
/*!40000 ALTER TABLE `tb_medsos` DISABLE KEYS */;
INSERT INTO `tb_medsos` VALUES (3,'Youtube','https://www.youtube.com/channel/UC3VjiGfBckkeDIUe1th4s9g','Youtube.jpg'),(4,'Facebook','https://www.facebook.com/rsia.yasmin','Facebook.jpg'),(5,'Instagram','https://www.instagram.com/rsiayasmin_palangkaraya/','Instagram.jpg'),(6,'Whatsapps','https://api.whatsapp.com/send?phone=+62816280007','Whatsapps.jpg');
/*!40000 ALTER TABLE `tb_medsos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_misi`
--

DROP TABLE IF EXISTS `tb_misi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_misi` (
  `id_misi` int(50) NOT NULL AUTO_INCREMENT,
  `text_misi` text DEFAULT NULL,
  PRIMARY KEY (`id_misi`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_misi`
--

LOCK TABLES `tb_misi` WRITE;
/*!40000 ALTER TABLE `tb_misi` DISABLE KEYS */;
INSERT INTO `tb_misi` VALUES (2,'<ol>\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Menyelenggarakan pelayanan kesehatan ibu dan anak yang prima dengan berorientasi pada kepuasan pelanggan</span></span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Mewujudkan kehandalan sumber daya manusia, sarana dan prasarana pelayanan yang terstandar dengan berorientasi pada keselamatan pasien</span></span></span></span></li>\r\n	<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Menyelenggarakan tata kelola rumah sakit secara efektif, efisien dan akuntabel</span></span></span></span></li>\r\n</ol>\r\n');
/*!40000 ALTER TABLE `tb_misi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_poli`
--

DROP TABLE IF EXISTS `tb_poli`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_poli` (
  `id_poli` int(50) NOT NULL AUTO_INCREMENT,
  `nama_poli` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_poli`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_poli`
--

LOCK TABLES `tb_poli` WRITE;
/*!40000 ALTER TABLE `tb_poli` DISABLE KEYS */;
INSERT INTO `tb_poli` VALUES (1,'Fisioterapi'),(2,'Anak'),(3,'Gigi dan Mulut'),(4,'Gizi'),(5,'Kandungan');
/*!40000 ALTER TABLE `tb_poli` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_profil_rs`
--

DROP TABLE IF EXISTS `tb_profil_rs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_profil_rs` (
  `id_profil_rs` int(50) NOT NULL AUTO_INCREMENT,
  `text_profil_rs` text DEFAULT NULL,
  `foto_cover` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_profil_rs`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_profil_rs`
--

LOCK TABLES `tb_profil_rs` WRITE;
/*!40000 ALTER TABLE `tb_profil_rs` DISABLE KEYS */;
INSERT INTO `tb_profil_rs` VALUES (2,'<pre>\r\nNama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: Rumah Sakit Ibu dan Anak Yasmin Palangka Raya\r\nLokasi           : Jl. Tjilik Riwut KM. 1,5 No. 4 Palangka Raya, Kalimantan Tengah 73112 \r\nStatus           : Swasta \r\nTipe&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp;Tipe C \r\nTelp.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp;(0536) 3226193 \r\nEmail&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp;rsiayasmin.plk@gmail.com\r\nKepemilikan&nbsp; &nbsp; &nbsp; :&nbsp;Yayasan Pusat Nihin</pre>\r\n','20210826103811.jpg');
/*!40000 ALTER TABLE `tb_profil_rs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_sejarah`
--

DROP TABLE IF EXISTS `tb_sejarah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_sejarah` (
  `id_sejarah` int(50) NOT NULL AUTO_INCREMENT,
  `text_sejarah` text DEFAULT NULL,
  `foto_cover` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_sejarah`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_sejarah`
--

LOCK TABLES `tb_sejarah` WRITE;
/*!40000 ALTER TABLE `tb_sejarah` DISABLE KEYS */;
INSERT INTO `tb_sejarah` VALUES (2,'<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:12px\"><span style=\"color:#000000\">&nbsp; &nbsp; Rumah Sakit Ibu dan Anak Yasmin dahulunya adalah Klinik Bersalin Yasmin yang dibangun mulai tahun 2007 dan selesai pada tahun 2008. Status pertama kali adalah sebagai Klinik Bersalin Lina (kontrak) tanggal 9 Agustus 2007 dan menjadi Klinik Bersalin Yasmin pada tanggal 28 Oktober 2008 dengan SK Ijin Operasional Penyelenggaraan Pelayanan Kesehatan Klinik Bersalin oleh Kepala Dinas Kesehatan Kota Palangka Raya Nomor : 040/JSK/X/2008. Dana pembangunan berasal dari pihak pemilik dan penyantun.</span></span></span></p>\r\n','20210826083738.jpg');
/*!40000 ALTER TABLE `tb_sejarah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_slide`
--

DROP TABLE IF EXISTS `tb_slide`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_slide` (
  `id_slide` int(50) NOT NULL AUTO_INCREMENT,
  `foto_slide` varchar(100) DEFAULT NULL,
  `aktif` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_slide`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_slide`
--

LOCK TABLES `tb_slide` WRITE;
/*!40000 ALTER TABLE `tb_slide` DISABLE KEYS */;
INSERT INTO `tb_slide` VALUES (1,'20210910120420.jpg','active'),(3,'20210910115933.jpg','no'),(4,'20210910115759.jpg','no'),(5,'20210910121316.jpg',NULL),(6,'20210910121952.jpg',NULL);
/*!40000 ALTER TABLE `tb_slide` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_struktur`
--

DROP TABLE IF EXISTS `tb_struktur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_struktur` (
  `id_struktur` int(50) NOT NULL AUTO_INCREMENT,
  `foto_struktur` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_struktur`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_struktur`
--

LOCK TABLES `tb_struktur` WRITE;
/*!40000 ALTER TABLE `tb_struktur` DISABLE KEYS */;
INSERT INTO `tb_struktur` VALUES (3,'20210905154219.jpg');
/*!40000 ALTER TABLE `tb_struktur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_tersedia_bed`
--

DROP TABLE IF EXISTS `tb_tersedia_bed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_tersedia_bed` (
  `id_tersedia_bed` int(50) NOT NULL AUTO_INCREMENT,
  `id_kelas_bed` int(50) DEFAULT NULL,
  `id_usia_bed` int(50) DEFAULT NULL,
  `nama_kamar` varchar(100) DEFAULT NULL,
  `jenis_kelamin_bed` enum('Laki-Laki','Perempuan','Semua') DEFAULT NULL,
  `status_tersedia` enum('Kosong','Terpakai') DEFAULT NULL,
  PRIMARY KEY (`id_tersedia_bed`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_tersedia_bed`
--

LOCK TABLES `tb_tersedia_bed` WRITE;
/*!40000 ALTER TABLE `tb_tersedia_bed` DISABLE KEYS */;
INSERT INTO `tb_tersedia_bed` VALUES (1,1,5,'VIP 104','Semua','Kosong'),(2,1,5,'VIP 110','Semua','Kosong'),(3,1,1,'VIP 111','Perempuan','Kosong'),(4,1,5,'VIP 203','Semua','Kosong'),(5,2,5,'VVIP 108','Semua','Terpakai'),(6,3,5,'Yasmin 101','Semua','Kosong'),(7,3,5,'Yasmin 102','Semua','Kosong'),(8,3,5,'Yasmin 106','Semua','Terpakai'),(9,4,5,'Yasmin 105','Semua','Kosong'),(10,4,5,'Yasmin 109','Semua','Kosong'),(11,4,5,'Yasmin 112','Semua','Kosong');
/*!40000 ALTER TABLE `tb_tersedia_bed` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_timelineunit`
--

DROP TABLE IF EXISTS `tb_timelineunit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_timelineunit` (
  `id_timelineunit` int(50) NOT NULL AUTO_INCREMENT,
  `id_akun` int(50) DEFAULT NULL,
  `shift_waktu` enum('PAGI','SORE','MALAM') DEFAULT NULL,
  `waktu` varchar(100) DEFAULT NULL,
  `tgl_timeline` date DEFAULT NULL,
  `isi_kegiatan` text DEFAULT NULL,
  PRIMARY KEY (`id_timelineunit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_timelineunit`
--

LOCK TABLES `tb_timelineunit` WRITE;
/*!40000 ALTER TABLE `tb_timelineunit` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_timelineunit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_usia_bed`
--

DROP TABLE IF EXISTS `tb_usia_bed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_usia_bed` (
  `id_usia_bed` int(50) NOT NULL AUTO_INCREMENT,
  `nama_usia_bed` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_usia_bed`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_usia_bed`
--

LOCK TABLES `tb_usia_bed` WRITE;
/*!40000 ALTER TABLE `tb_usia_bed` DISABLE KEYS */;
INSERT INTO `tb_usia_bed` VALUES (1,'Anak-Anak'),(2,'Bayi'),(3,'Dewasa'),(5,'Semua');
/*!40000 ALTER TABLE `tb_usia_bed` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_video_profil`
--

DROP TABLE IF EXISTS `tb_video_profil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_video_profil` (
  `id_video_profil` int(50) NOT NULL AUTO_INCREMENT,
  `judul_video` varchar(100) DEFAULT NULL,
  `link_video` varchar(100) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_video_profil`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_video_profil`
--

LOCK TABLES `tb_video_profil` WRITE;
/*!40000 ALTER TABLE `tb_video_profil` DISABLE KEYS */;
INSERT INTO `tb_video_profil` VALUES (2,'Video Profil RSIA YASMIN','https://www.youtube.com/watch?v=8koMXU-MyIQ','Video Profil RSIA Yasmin Agustus 2021');
/*!40000 ALTER TABLE `tb_video_profil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_visi`
--

DROP TABLE IF EXISTS `tb_visi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_visi` (
  `id_visi` int(50) NOT NULL AUTO_INCREMENT,
  `text_visi` text DEFAULT NULL,
  PRIMARY KEY (`id_visi`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_visi`
--

LOCK TABLES `tb_visi` WRITE;
/*!40000 ALTER TABLE `tb_visi` DISABLE KEYS */;
INSERT INTO `tb_visi` VALUES (2,'<p><strong><em>&quot;</em></strong><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Menjadi Rumah Sakit Khusus Ibu dan Anak pilihan utama keluarga di Kalimantan Tengah</span></span></span><strong><em>&quot;.</em></strong></p>\r\n');
/*!40000 ALTER TABLE `tb_visi` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-01-24  8:25:50
