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
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_akun`
--

LOCK TABLES `tb_akun` WRITE;
/*!40000 ALTER TABLE `tb_akun` DISABLE KEYS */;
INSERT INTO `tb_akun` VALUES (1,'Benny Sarmoko','Laki-Laki','benny.sarmoko27@gmail.com','2103187','IT','benny0852','toor123','super'),(5,'BENNY SARMOKO, ST','Laki-Laki','benny.sarmoko27@gmail.com','2103187','IT/SERVER','benny123','toor123','karyawan'),(7,'EMILLIAH','Perempuan','emilemil1984@gmail.com','050103','ADMISI','050103','050103','karyawan'),(8,'JUMIATI','Perempuan','jumiati0619@gmail.com','1711132','ADMISI','1711132','1711132','karyawan'),(9,'CHRISMONIKA AYU WULANDARI, S.Pd','Perempuan','default@gmail.com','-','ADMISI','2102185','2102185','karyawan'),(10,'EMMYLYA YANTHY','Perempuan','-','080513','CLEANING SERVICE','080513','080513','karyawan'),(11,'HARIANI','Perempuan','default@gmail.com','-','CLEANING SERVICE','1908166','1908166','karyawan'),(12,'MARTINAH','Perempuan','-','1805141','CLEANING SERVICE','1805141','1805141','karyawan'),(13,'MURNI','Perempuan','murniacil4@gmail.com','121068','CLEANING SERVICE','121068','121068','karyawan'),(14,'DITA YUSTIA','Perempuan','ditasaja308@gmail.com','-','CLEANING SERVICE','2107189','2107189','karyawan'),(15,'TRIWATI','Perempuan','triwati25okt@gmail.com','111251','CLEANING SERVICE','111251','111251','karyawan'),(16,'dr. MARIA DEWI PURWANTI','Perempuan','mariadewipurwanti@gmail.com','141098','DIREKTUR','141098','141098','karyawan'),(17,'SUMARDI','Laki-Laki','-','120562','DRIVER','120562','120562','karyawan'),(18,'Apt. Hana kasintha S.Farm','Perempuan','Hanakasintha2709@gmail.com','1901152','FARMASI','1901152','1901152','karyawan'),(19,'KHAIRATUL AWALIYAH, A. Md. Farm.','Perempuan','-','1901151','FARMASI','1901151','1901151','karyawan'),(20,'LISTRA DANIATY, A. Md. Farm','Perempuan','listra.daniaty93@gmail.com','1504110','FARMASI','1504110','1504110','karyawan'),(21,'MEIRY FITRIANI, A.Md.Farm','Perempuan','default@gmail.com','-','FARMASI','2112182','2112182','karyawan'),(22,'DEA PRESTIA MEGANTARI, A.Md.Farm','Perempuan','default@gmail.com','-','FARMASI','2201200','2201200','karyawan'),(23,'SEPTI KUSUMAWARDHANI, A. Md. Farm','Perempuan','septikusumawardhani1@gmail.com','1507115','FARMASI','1507115','1507115','karyawan'),(24,'NENI RAHMAYANI, Amd. Gz','Perempuan','nenirahmayani@yahoo.co.id','140892','GIZI','Neni Rahmayani, A.Md. Gz','140892','karyawan'),(25,'IKA ENDAH P. RINI MD, S. Far. Apt.','Perempuan','-','100336','KABID','100336','100336','kabid'),(26,'MILAWATI. AS, ST','Perempuan','watimila80@yahoo.co.id','080212','KABID','080212','080212','kabid'),(27,'MELAN SANDRA, SE','Perempuan','default@gmail.com','-','KASIR','2112198','2112198','karyawan'),(28,'THIO HAMONANGAN SIMANJUNTAK, SE','Laki-Laki','default@gmail.com','-','KASIR','2112195','2112195','karyawan'),(29,'DIAH WULANDARI','Perempuan','-','1411102','KASIR','1411102','1411102','karyawan'),(30,'MAHBUBAH, A. Md.','Perempuan','mahbubahamayayoo@gmail.com','1903157','KASIR','1903157','cantikan','karyawan'),(31,'ELISA PANJAITAN, Amd. Keb','Perempuan','elisapanjaitan@yahoo.com','120256','KEBIDANAN','120256','120256','karyawan'),(32,'HANIYAH, A. Md. Keb','Perempuan','-','1705130','KEBIDANAN','1705130','1705130','karyawan'),(33,'HESTIRIA PINTARI, Amd. Keb','Perempuan','-','111253','KEBIDANAN','111253','111253','karyawan'),(34,'JAMIYAH PUSPITASARI, A. Md. Keb','Perempuan','-','1705129','KEBIDANAN','1705129','1705129','karyawan'),(35,'MELINDA TRI JAYANTI, A. Md. Keb','Perempuan','melindatri1994@gmail.com','1707131','KEBIDANAN','1707131','1707131','karyawan'),(36,'NIKE INDRIYANI, Amd. Keb','Perempuan','nikeyasmin89@gmail.com','110141','KEBIDANAN','110141','110141','karyawan'),(37,'NISA FIKA RAHAYU, Amd. Keb','Perempuan','nisafikara@gmail.com','1509117','KEBIDANAN','1509117','1509117','karyawan'),(38,'AGUS BUDIARTO, Amd. AK','Laki-Laki','aguz.budiarto@yahoo.com','111049','LABORATORIUM','111049','111049','karyawan'),(39,'ATIK FARIHAH, Amd. AK','Perempuan','atx.fari22@gmail.com','091129','LABORATORIUM','091129','091129','karyawan'),(40,'HIKMAH, A. Md. AK','Perempuan','hikmahhikmah220@yahoo.com','130480','LABORATORIUM','130480','130480','karyawan'),(41,'INDARTI TRI HANDAYANI, A. Md. AK','Perempuan','iin.trihandayanii29@gamail.com','120864','LABORATORIUM','120864','120864','karyawan'),(42,'KRISTI OKTAVIYANI, A. Md. AK','Perempuan','kristi.oktaviani31@gmail.com','120865','LABORATORIUM','120865','120865','karyawan'),(43,'SUPIANOR, Amd. AK','Laki-Laki','sufiannorthan@yahoo.co.id','111048','LABORATORIUM','111048','111048','karyawan'),(44,'DEWI KARTIKA','Perempuan','dkartika03@yahoo.com','081123','LOGISTIK DAN RUMAH TANGA','081123','081123','karyawan'),(45,'LENI FURNAYANTY, A. Md. Kep','Perempuan','lenifurnayanty@gmail.com','1502104','NEONATUS DAN ANAK','1502104','1502104','karyawan'),(46,'MALIANA AS','Perempuan','16.maliana@gmail.com','070610','NEONATUS DAN ANAK','070610','070610','karyawan'),(47,'Murni Marpaung, Amd. Kep','Perempuan','murninew123@gmail.com','081017','NEONATUS DAN ANAK','081017','081017','karyawan'),(48,'NIKA INDRIYANA, Amd. Kep','Perempuan','niekha89@gmail.com','110142','NEONATUS DAN ANAK','110142','110142','karyawan'),(49,'RAYSHA KATHLEEN C. MIHING, Amd. Kep','Perempuan','rayshakathleen.pky25@gmail.com','100233','NEONATUS DAN ANAK','100233','100233','karyawan'),(50,'SITI MAWARDAH, A. Md. Kep.','Perempuan','-','1901153','NEONATUS DAN ANAK','1901153','1901153','karyawan'),(51,'YULIA NINGSIH','Perempuan','-','070611','NEONATUS DAN ANAK','070611','070611','karyawan'),(52,'GINERSON','Laki-Laki','-','130478','OB','130478','130478','karyawan'),(53,'MASKUR','Laki-Laki','-','1703127','OB','1703127','1703127','karyawan'),(54,'ANI','Perempuan','-','1704135','PANTRY','1704135','1704135','karyawan'),(55,'MASRUFAH','Perempuan','-','050102','PANTRY','050102','050102','karyawan'),(56,'SHERLY  VONNIANTRY, A. Ma','Perempuan','default@gmail.com','-','PANTRY','1901177','1901177','karyawan'),(57,'RIKA VIRAMA WIRYAWAN, SE','Perempuan','rikaharada77@gmail.com','070305','PERSONALIA','RikaVW','harada77','personalia'),(58,'LAELY PURNAMA, A. Md. Keb','Perempuan','laelypurnama010@gmail.com','1901154','POLI RAJAL','1901154','1901154','karyawan'),(59,'NINING NOR PEBRIAWATI, A. Md. Kep','Perempuan','-','1502105','POLI RAJAL','1502105','1502105','karyawan'),(60,'VERA OKTAVIANA, Amd. Keb','Perempuan','-','1802138','POLI RAJAL','1802138','1802138','karyawan'),(61,'TRIANA FEBRIANI, Amd. Kep','Perempuan','trianafebriani.pky@gmail.com','101240','PPI','101240','101240','karyawan'),(62,'KIKI NOR FITRIA WIDIANTI','Perempuan','kikinur331@gmail.com','1903156','PRAMUSAJI','1903156','1903156','karyawan'),(63,'ABDUL HADI','Laki-Laki','-','111252','SATPAM','111252','111252','karyawan'),(64,'INDRA','Laki-Laki','-','090828','SATPAM','090828','090828','karyawan'),(65,'SAINI','Laki-Laki','default@gmail.com','-','SATPAM','2201199','2201199','karyawan'),(66,'SUBIYANTO','Laki-Laki','subi@gmail.com','-','SATPAM','1906161','1906161','karyawan'),(67,'LISA NAZLA, SP','Perempuan','-','1603124','SPI','1603124','1603124','admin'),(68,'DIARINI TRESYA, Amd. Keb','Perempuan','dearini.tresya@gmail.com','1601120','UGD','1601120','1601120','karyawan'),(69,'dr. PRISKA REFANI','Perempuan','priskarefani@gmail.com','1905160','UGD','Priska','Priska','karyawan'),(70,'dr. RESTU HIJRIAH','Perempuan','restuhij@gmail.com','1808146','UGD','1808146','1808146','karyawan'),(71,'dr. PAMELA ESTERIA LUSIANA','Perempuan','default@gmail.com','-','UGD','2010179','2010179','karyawan'),(72,'dr. THYRISTER NINA ASARYA SEMBIRING','Perempuan','-','1904158','UGD','1904158','1904158','karyawan'),(73,'NOVA AYU LOLITASARI, A. Md. Keb','Perempuan','default@gmail.com','-','UGD','1907163','1907163','karyawan'),(74,'RENO RAMADHAN, A.Md.Kep','Laki-Laki','renorama04@gmail.com','1902155','UGD','1902155','1902155','karyawan'),(75,'SUPARDIANTO, Amd. Kep','Laki-Laki','supardyan@yahoo.com','121270','UGD','121270','121270','karyawan'),(76,'MISRAN','Laki-Laki','rika_virama82@yahoo.co.id','050101','UPSRS','050101','050101','karyawan'),(77,'RENDRA SUHENDRA, S. Sos','Laki-Laki','-','1401142','UPSRS','1401142','1401142','karyawan'),(78,'SAMSUL','Laki-Laki','-','081020','UPSRS','081020','081020','karyawan'),(79,'PUJA','Perempuan','-','2201202','ADMISI','2201202','2201202','karyawan'),(80,'HERIKA MEILAHIRNI, A.Md.Keb','Perempuan','-','2108190','KEBIDANAN','2108190','2108190','karyawan'),(81,'SARTIKA YULIANA DEWI, A.Md.Keb','Perempuan','-','2108191','KEBIDANAN','2108191','2108191','karyawan'),(82,'FANDI JUMAEDY, S.Kep., Ners','Laki-Laki','-','2201205','NEONATUS DAN ANAK','2201205','2201205','karyawan'),(83,'MARLINA, A.Md.Kep','Perempuan','-','2108192','NEONATUS DAN ANAK','2108192','2108192','karyawan'),(84,'INDRALIN SAPUTRA, A.Md.Kep','Laki-Laki','-','2112196','NEONATUS DAN ANAK','2112196','2112196','karyawan'),(85,'ROSI VITA ASTARIA, A.Md.Keb','Perempuan','-','2201201','RAJAL ','2201201','2201201','karyawan'),(86,'WINDA ARIANTY, A.Md.Kep','Perempuan','-','2201204','RAJAL ','2201204','2201204','karyawan'),(87,'L. ERNY SRI ANJANI, A.Md.RMIK','Perempuan','-','2201206','RM','2201206','2201206','karyawan'),(88,'DINE RINAWARTI','Perempuan','-','2104188','RM','2104188','2104188','karyawan'),(89,'ELGA AGUSTINA, A.Md.RMIK','Perempuan','DEFAULT@GMAIL.COM','2102186','RM','2102186','2102186','karyawan'),(90,'DIYAH MARYANI, Amd.PK','Perempuan','-','100337','RM','100337','100337','karyawan'),(91,'YANTI SEFTIANI,A.Md.Kep','Perempuan','-','2201203','UGD','2201203','2201203','karyawan'),(150,'HASANAH AYSIAH, A.Md.Keb','Perempuan','DEFAULT@GMAIL.COM','2201208','RAWAT JALAN','2201208','2201208','karyawan'),(151,'VIRGINIA AURA RUTH ASRIDARAYA, A.Md.Keb','Perempuan','DEFAULT@GMAIL.COM','2201207','KEBIDANAN','2201207','2201207','karyawan');
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
) ENGINE=InnoDB AUTO_INCREMENT=1025 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_timelineunit`
--

LOCK TABLES `tb_timelineunit` WRITE;
/*!40000 ALTER TABLE `tb_timelineunit` DISABLE KEYS */;
INSERT INTO `tb_timelineunit` VALUES (1,5,'PAGI','07.00-07.30','2022-01-24','Input data harian pada Sirs Online Kemkes'),(2,5,'PAGI','07.30-08.00','2022-01-24','Cek barang pesanan ,3 kotak STB ZTE'),(3,5,'PAGI','08.00-08.30','2022-01-24','Update website pada hosting web profile yasmin, tambahan input time line unit'),(4,5,'PAGI','08.30-09.00','2022-01-24','Import database baru pada web hosting, tambahan time line unit'),(5,5,'PAGI','09.00-09.30','2022-01-24','Rapat singkat terkait Lab dan SIMRS dengan Kabid'),(6,5,'PAGI','09.30-10.00','2022-01-24','Rapat singkat terkait Lab dan SIMRS dengan Kabid'),(7,5,'PAGI','10.00-10.30','2022-01-24','Rapat singkat terkait Lab dan SIMRS dengan Kabid'),(8,5,'PAGI','10.30-11.00','2022-01-24','Mengkonfirmasi terkait notulen rapat lab dan simrs, kepada pihak simkes khanza'),(9,5,'PAGI','11.00-11.30','2022-01-24','Rapat personal evaluasi peningkatan kinerja bersama Direktur dan jajarannya'),(10,5,'PAGI','11.30-12.00','2022-01-24','Rapat personal evaluasi peningkatan kinerja bersama Direktur dan jajarannya'),(11,5,'PAGI','07.00-07.30','2022-01-25','Menginput data sirs online kemkes'),(12,5,'PAGI','07.30-08.00','2022-01-25','Setting STB tv Android ZTE pada jaringan server'),(13,5,'PAGI','08.00-08.30','2022-01-25','Setting STB tv Android ZTE pada jaringan server'),(14,5,'PAGI','08.30-09.00','2022-01-25','Pemasangan STB tv Android pada kamar pasien'),(15,5,'PAGI','09.00-09.30','2022-01-25','Pemasangan STB tv Android pada kamar pasien'),(16,5,'PAGI','09.30-10.00','2022-01-25','Mengatur ulang posisi komputer dan perangkat lainnya pada ruang kasir'),(17,5,'PAGI','10.00-10.30','2022-01-25','Mengatur ulang posisi komputer dan perangkat lainnya pada ruang kasir'),(18,5,'PAGI','10.30-11.00','2022-01-25','Mengatur ulang posisi komputer dan perangkat lainnya pada ruang kasir'),(19,5,'PAGI','11.00-11.30','2022-01-25','Mengatur ulang posisi komputer dan perangkat lainnya pada ruang kasir'),(20,5,'PAGI','11.30-12.00','2022-01-25','Mengatur ulang posisi komputer dan perangkat lainnya pada ruang kasir'),(21,42,'MALAM','21.00-21.30','2022-01-25','Melakukan pemeriksaan lab u/ rawat inap UGD'),(22,42,'MALAM','21.30-22.00','2022-01-25','Menulis arsip di buku Pemeriksaan lab'),(23,42,'MALAM','22.30-23.00','2022-01-25','istirahat'),(24,42,'MALAM','22.00-22.30','2022-01-25','Mencuci alat lab dan mematikan alat '),(25,42,'MALAM','04.30-05.00','2022-01-26','Menghidupkan alat lab '),(26,42,'MALAM','05.30-06.00','2022-01-26','Mengerjakan pemeriksaan lab, mengetik hasil dan menulis arsip di buku pemeriksaan. '),(27,42,'MALAM','05.00-05.30','2022-01-26','Melakukan swab antigen u/ pasien Rawat Inap UGD Ny. Fitria'),(28,62,'PAGI','07.00-07.30','2022-01-26','9.membersihkan meja,lemari,kompor dapur.\r\n10. kembali ke ruangan mngisi laporan pramusaji,buku breafing.'),(29,62,'PAGI','07.30-08.00','2022-01-26','11.menyediakan minuman vaksin, poli gigi,anak,kandungan, UGD.\r\n12.Mengambil piring ke kamr pasien.\r\n13.Mencuci piring pasien.\r\n14.Mengisi Stok bahan makanan yg mau habis di dapur.\r\n15 jam 8 pulang'),(30,74,'PAGI','07.00-07.30','2022-01-26','Aplusan dinas Malam ke Pagi'),(31,74,'PAGI','07.30-08.00','2022-01-26','Bersih-bersih UGD'),(32,74,'PAGI','08.00-08.30','2022-01-26','Pasien anak datang dengan kejang, indikasi rawat inap'),(33,74,'PAGI','08.30-09.00','2022-01-26','Menunggu hasil lab dan konsul dokter anak'),(34,74,'PAGI','09.00-09.30','2022-01-26','Ngantar pasien anak ke ruang 109, dan aplusan ke perawat jaga perinatologi'),(35,5,'PAGI','08.00-08.30','2022-01-26','Menginput data sirs online pada website kemkes rs online'),(36,5,'PAGI','08.30-09.00','2022-01-26','Mengatur data pemeriksaan LAB dan harga di ruangan laboratorium'),(37,5,'PAGI','09.00-09.30','2022-01-26','Mengatur data pemeriksaan LAB dan harga di ruangan laboratorium'),(38,5,'PAGI','09.30-10.00','2022-01-26','Mengatur data pemeriksaan LAB dan harga di ruangan laboratorium'),(39,5,'PAGI','10.00-10.30','2022-01-26','Mengatur periferal kabel perangkat komputer dll, di ruangan kasir'),(40,47,'PAGI','07.00-07.30','2022-01-26','Aplusan, baca buku briefing'),(41,5,'PAGI','10.30-11.00','2022-01-26','Memasang STB tv Android pada kamar pasien 105'),(42,25,'PAGI','07.00-07.30','2022-01-26','Penerimaan amprahan obat dan pengadaan obat dan verifikasi'),(43,24,'PAGI','07.00-07.30','2022-01-26','Aplusan / isi buku bereafing'),(44,25,'PAGI','07.30-08.00','2022-01-26','Pengecekan SPO persiapan operasi'),(45,24,'PAGI','07.30-08.00','2022-01-26','Aplusan / isi buku breafing'),(46,24,'PAGI','08.00-08.30','2022-01-26','Visite pasien'),(47,24,'PAGI','08.30-09.00','2022-01-26','Visite pasien'),(48,24,'PAGI','09.00-09.30','2022-01-26','Ke dapur Thamrin'),(49,24,'PAGI','09.30-10.00','2022-01-26','Ke dapur Thamrin'),(50,24,'PAGI','10.00-10.30','2022-01-26','Visite pasien baru / isi status.'),(51,24,'PAGI','10.30-11.00','2022-01-26','Ngetik label pasien'),(52,24,'PAGI','11.00-11.30','2022-01-26','Persiapan kontribusi makanan pasien'),(53,24,'PAGI','11.30-12.00','2022-01-26','Persiapan kontribusi makanan pasien, ishoma.'),(54,5,'PAGI','11.00-11.30','2022-01-26','Menginput harga pemeriksaan LAB di ruang Laboratorium'),(55,57,'PAGI','07.00-07.30','2022-01-26','Absen datang\r\nMengantar perawat baru ke unit neonatus dan anak'),(56,57,'PAGI','07.30-08.00','2022-01-26','Ngeprint lembar isian pelamar bidan'),(57,44,'PAGI','08.00-08.30','2022-01-26','Cek satpam'),(58,74,'PAGI','09.30-10.00','2022-01-26','Pasien anak datang dengan kejang 2 x dirumah, saran rawat inap, swab antigen, pasang infus'),(59,74,'PAGI','10.00-10.30','2022-01-26','Lapor DPJP pasien anak dr. Andar, Sp.A, \r\nDapat terapi injeksi.'),(60,74,'PAGI','10.30-11.00','2022-01-26','Antar pasien ke ruang inap'),(61,74,'PAGI','11.00-11.30','2022-01-26','Melengkapi status inap pasien'),(62,74,'PAGI','11.30-12.00','2022-01-26','ISOMA'),(63,74,'PAGI','12.00-12.30','2022-01-26','Pasien datang meminta surat keterangan sehat'),(64,74,'PAGI','12.30-13.00','2022-01-26','Amprah ABHP UGD'),(65,44,'PAGI','08.30-09.00','2022-01-26','Order amprahan n follow up '),(66,30,'PAGI','07.00-07.30','2022-01-26','Bersih2 ruangan,  membaca aplusan'),(67,44,'PAGI','09.00-09.30','2022-01-26','Order amprahan n follow up '),(68,30,'PAGI','07.30-08.00','2022-01-26','Memasukan pemasukan dan pengeluaran yg belum d selesaikan bookeping'),(69,44,'PAGI','09.30-10.00','2022-01-26','Cek barang loudry '),(70,30,'PAGI','08.00-08.30','2022-01-26','Perinci ulang px pulang yg sudah d kerjakan tdi malam'),(71,30,'PAGI','08.30-09.00','2022-01-26','Verifikasi ke kabid keuangan dan bidan'),(72,44,'PAGI','10.00-10.30','2022-01-26','Lanjut Order dan melanyani amprahan unit'),(73,30,'PAGI','09.00-09.30','2022-01-26','Menerima pembayaran px repid, poli kandungan dan Apotek'),(74,30,'PAGI','09.30-10.00','2022-01-26','Administrasi px pulang y-112'),(75,44,'PAGI','10.30-11.00','2022-01-26','Diskusi kecil persiapan ruang ganti baju tim ok'),(76,62,'PAGI','11.00-11.30','2022-01-26','16. masuk kembali kerja jam 11\r\n17.mnyiapkan alat saji pasien'),(77,30,'PAGI','10.00-10.30','2022-01-26','Menghitung uang pemasukan dan pengeluaran '),(78,57,'PAGI','08.00-08.30','2022-01-26','menerima pelamar bidan yang mau tes tertulis dan wawancara'),(79,30,'PAGI','10.30-11.00','2022-01-26','Merinci obat dan rincian bidan px pulang'),(80,30,'PAGI','11.00-11.30','2022-01-26','Verifikasi ke kabid dan bidan'),(81,44,'PAGI','11.30-12.00','2022-01-26','Lanjut diskusi permintaan barang /fasilitas di kamar pasien dll'),(82,30,'PAGI','11.30-12.00','2022-01-26','Membuat sks,  pembayaran rapid dan poli kandungan '),(83,30,'PAGI','12.00-12.30','2022-01-26','Isoma '),(84,44,'PAGI','12.00-12.30','2022-01-26','Istirahat dan lanjut kerjan fom time line'),(85,44,'PAGI','12.30-13.00','2022-01-26','Pulang'),(86,57,'PAGI','08.30-09.00','2022-01-26','memonitoring tim vaksin'),(87,8,'PAGI','07.00-07.30','2022-01-26','- bersih2,menyiapkan atk dan lain\r\n- pelayanan pasien ugd dan lain'),(88,8,'PAGI','07.30-08.00','2022-01-26','-pelayanan pasien bjps dan ugd'),(89,8,'PAGI','08.00-08.30','2022-01-26','- pelayanan pasien ugd dan umum'),(90,8,'PAGI','08.30-09.00','2022-01-26','pelayanan pasien ugd ranap dan umum'),(91,8,'PAGI','09.00-09.30','2022-01-26','pelayanan pasien umum + ranap ugd'),(92,8,'PAGI','09.30-10.00','2022-01-26','masih pelayanan umum+ranap ugd'),(93,12,'PAGI','07.00-07.30','2022-01-26','Menyiapkan peralatan: sapu, pel, air pel²an, serok, tisu², keset, plastik hitam dan kuning'),(94,8,'PAGI','10.00-10.30','2022-01-26','masih pelayanan ranap ugd+ umum dan pelayanan pendaftaran poli kandungan'),(95,74,'PAGI','13.00-13.30','2022-01-26','Bersih2 UGD'),(96,8,'PAGI','10.30-11.00','2022-01-26','pelayanan umum'),(97,12,'PAGI','07.30-08.00','2022-01-26','Menyiapkan troli untuk baju kotor OK, Membersihkan kamar pasien dan unit²'),(98,74,'PAGI','13.30-14.00','2022-01-26','Aplusan dinas pagi ke sore'),(99,8,'PAGI','11.00-11.30','2022-01-26','pelayananan pasien umum lain lain'),(100,12,'PAGI','08.00-08.30','2022-01-26','Membersihkan kamar pasien dan unit²'),(101,12,'PAGI','08.30-09.00','2022-01-26','Membersihkan ruang OK'),(102,8,'PAGI','11.30-12.00','2022-01-26','persiapan istirahat'),(103,8,'PAGI','12.00-12.30','2022-01-26','ishoma'),(104,8,'PAGI','12.30-13.00','2022-01-26','pelayanan umum'),(105,12,'PAGI','09.00-09.30','2022-01-26','Menyiapkan kamar pasien 109, Mencuci baju OK'),(106,66,'PAGI','07.00-07.30','2022-01-26','Aplusan dinas malam ke pagi'),(107,12,'PAGI','09.30-10.00','2022-01-26','Mencuci baju dan menjemur linen OK, membersihkan VK 2'),(108,66,'PAGI','07.30-08.00','2022-01-26','Bersih- bersih pos'),(109,66,'PAGI','08.00-08.30','2022-01-26','Mengatur prkiran pasin vaksin'),(110,66,'PAGI','08.30-09.00','2022-01-26','Cek oksigen'),(111,66,'PAGI','09.00-09.30','2022-01-26','Mendurong oksigen ke Yasmin 109'),(112,12,'PAGI','10.00-10.30','2022-01-26','Membersihkan kamar Y 112 pasien pulang'),(113,66,'PAGI','09.30-10.00','2022-01-26','Mengatur parkiran dan membantu pasing  vaksin keluarkan mtornya'),(114,66,'PAGI','10.00-10.30','2022-01-26','Mendrung pasien dari UGD ke Yasmin 106'),(115,12,'PAGI','10.30-11.00','2022-01-26','Membersihkan Y 112, melipat linen, menyiapkan Y 106 pasien baru'),(116,66,'PAGI','10.30-11.00','2022-01-26','Mendurong pasin pakai kursi roda ke Yasmin 110 pasin dari VKA 1'),(117,66,'PAGI','11.00-11.30','2022-01-26','Mengatur parkiran vaksin'),(118,12,'PAGI','11.00-11.30','2022-01-26','Melipat linen, membersihkan poli gigi, mencuci linen Y 112'),(119,66,'PAGI','11.30-12.00','2022-01-26','Istrahat makan siang'),(120,66,'PAGI','12.00-12.30','2022-01-26','Patroli atau keliling RS yasmin'),(121,12,'PAGI','11.30-12.00','2022-01-26','Mengantar linen OK ke ruang OK dan CSSD, menyiapkan Y 110 pasien baru'),(122,66,'PAGI','12.30-13.00','2022-01-26','Mengatar orang yg mau  ke sangar miting atau interfiu'),(123,66,'PAGI','13.00-13.30','2022-01-26','Bersih-bersih pos'),(124,66,'PAGI','13.30-14.00','2022-01-26','Aplusan dari pagi ke sore'),(125,35,'PAGI','07.00-07.30','2022-01-26','Aplusan'),(126,20,'PAGI','07.00-07.30','2022-01-26','Bl barang untuk sc'),(127,35,'PAGI','07.30-08.00','2022-01-26','Sc ny.siti 115'),(128,12,'PAGI','12.00-12.30','2022-01-26','Istirahat makan'),(129,20,'PAGI','07.30-08.00','2022-01-26','Menyiapkan paket dan barang sc'),(130,35,'PAGI','08.00-08.30','2022-01-26','Visite pasien dr.sigit sp.OG(k)\r\nGv pasien 114'),(131,20,'PAGI','08.00-08.30','2022-01-26','Menulis pesanan obat dan alkes'),(132,35,'PAGI','08.30-09.00','2022-01-26','Melaksanakan advice \r\nInj omz extra\r\nAff infus 114'),(133,20,'PAGI','08.30-09.00','2022-01-26','Membuat surat pesanan obat dan alkes'),(134,35,'PAGI','09.00-09.30','2022-01-26','Mengajarkan mobilisasi duduk pasien post sc'),(135,20,'PAGI','09.00-09.30','2022-01-26','Menerima resep dr sigit '),(136,35,'PAGI','09.30-10.00','2022-01-26','Mengecek perdarahan pasien post sc'),(137,35,'PAGI','10.00-10.30','2022-01-26','Aff dc pasien 116'),(138,20,'PAGI','09.30-10.00','2022-01-26','Menerima resep ugd ranap dan barang datang'),(139,35,'PAGI','10.30-11.00','2022-01-26','Tensi dan membagikan obat untuk pasien '),(140,20,'PAGI','10.00-10.30','2022-01-26','Menerima resep ugd ranap'),(141,62,'PAGI','11.30-12.00','2022-01-26','18.menyajikan alat pasien\r\n19.menyajikan makanan pasien\r\n20.mengantar mkanan pasien'),(142,20,'PAGI','10.30-11.00','2022-01-26','Menerima barang datang'),(143,35,'PAGI','11.00-11.30','2022-01-26','Merinci adm pasien pulang'),(144,35,'PAGI','11.30-12.00','2022-01-26','Ishoma'),(145,20,'PAGI','11.00-11.30','2022-01-26','Membantu merinci pasien pulang'),(146,20,'PAGI','11.30-12.00','2022-01-26','Menyiapkan abhp dan obat untuk ranap'),(147,35,'PAGI','12.00-12.30','2022-01-26','Mengganti infus dgn tranfusi darah pasien post sc'),(148,20,'PAGI','12.00-12.30','2022-01-26','Menerima barang datang '),(149,35,'PAGI','13.00-13.30','2022-01-26','Menulis laporan'),(150,20,'PAGI','12.30-13.00','2022-01-26','Menerima resep dr sigit'),(151,35,'PAGI','13.30-14.00','2022-01-26','Aplusan'),(152,20,'PAGI','13.00-13.30','2022-01-26','Menrima barang dtg dan tutup buku'),(153,20,'PAGI','13.30-14.00','2022-01-26','Aplusan '),(154,62,'PAGI','12.00-12.30','2022-01-26','21.mengantar mkanan pasien\r\n22.mencuci rantang mkanan\r\n23.membersihkan meja'),(155,26,'PAGI','07.00-07.30','2022-01-26','1. Datang absen, ke unit kasir pengambilan file book keeping '),(156,62,'PAGI','12.30-13.00','2022-01-26','24.istrhat makan,shalat\r\n25.mengambil piring pasien dan mncuci piring pasien\r\n26.pulang'),(157,12,'PAGI','12.30-13.00','2022-01-26','Keliling, belajar mengisi timeline'),(158,26,'PAGI','07.30-08.00','2022-01-26','2. pengecekan semua rekening bank RSIA YASMIN\r\n3.  memasukan pendapatan yang di transfer melalui bank ke book keeping'),(159,12,'PAGI','13.00-13.30','2022-01-26','Membersihkan poli kandungan, membersihkan laboratorium, membersihkan RM, membersihkan dapur'),(160,13,'PAGI','07.00-07.30','2022-01-26','Menyiapkan  teh buat sc dan gerobak buat sc.'),(161,26,'PAGI','08.00-08.30','2022-01-26','4.  Rekap pendapatan dan pengeluaran untuk laporan mingguan\r\n5. Verifikasi rincian pasien rawat inap dengan tindakan SC '),(162,13,'PAGI','07.30-08.00','2022-01-26','Menyiapkan alat pel Dan menyusun ratang.'),(163,13,'PAGI','08.00-08.30','2022-01-26','Memgepel kmr pasien'),(164,26,'PAGI','08.30-09.00','2022-01-26','6. Pengecekan email dari ansurasni Sinarmas yang ingin bekerjasama\r\n7. Rekap investaris barang yang baru di beli'),(165,13,'PAGI','08.30-09.00','2022-01-26','Mengepel peri.apotik,Ugd dan kasir.'),(166,13,'PAGI','09.00-09.30','2022-01-26','Membersihkan Ok'),(167,13,'PAGI','09.30-10.00','2022-01-26','Menyuci linen ok dan menyiapkan kmr buat pasien baru 109'),(168,13,'PAGI','10.00-10.30','2022-01-26','Membersihkan kmr pasien pulang 112'),(169,13,'PAGI','10.30-11.00','2022-01-26','Membersihkan VK 2'),(170,26,'PAGI','09.00-09.30','2022-01-26','8.  Perbaikan data Valid karyawan BPJS Ketenagakerjaan dan perubahan Upah sesuai UMK untuk di kirim ke BPJS Ketenagakerjaan\r\n9. Interview untuk Staf Kebidanan karyawan baru '),(171,13,'PAGI','11.00-11.30','2022-01-26','Menyiapkan kmr buat pasien baru 106 membersihkan poli gigi'),(172,13,'PAGI','11.30-12.00','2022-01-26','Melipat linen dan mengantar baju ok dan menyiapkan kmr pasien baru 110'),(173,26,'PAGI','09.30-10.00','2022-01-26','10.  Perbaikan data Valid karyawan BPJS Ketenagakerjaan dan perubahan Upah sesuai UMK untuk di kirim ke BPJS Ketenagakerjaan\r\n11. Verifikasi rincian pasien rawat inap dengan tindakan Laparotomi\r\n'),(174,13,'PAGI','12.00-12.30','2022-01-26','Istirahat dan makan'),(175,26,'PAGI','10.00-10.30','2022-01-26','12. Rekap pengunaan Oksigen tahun 2021,2022'),(176,26,'PAGI','12.00-12.30','2022-01-26','16. Istirahat'),(177,39,'PAGI','07.00-07.30','2022-01-26','melakukan pengambilan darah keruangan Y116'),(178,39,'PAGI','07.30-08.00','2022-01-26','melakukan pemeriksaan darah pasien ruangan'),(179,39,'PAGI','08.00-08.30','2022-01-26','melakukan pemeriksaan antigen di ruang pasien antigen'),(180,8,'PAGI','13.00-13.30','2022-01-26','pelayanan umum'),(181,39,'PAGI','08.30-09.00','2022-01-26','melakukan pengambilan darah pasien an. yeremia  di ugd dan melkaukan pemeriksaan diruang laboratorium'),(182,39,'PAGI','09.00-09.30','2022-01-26','mengambil darah dan melakukan pemeriksaan psien pro kuret '),(183,39,'PAGI','09.30-10.00','2022-01-26','melakukan pemeriksaan antigen psien rawat jalan'),(184,39,'PAGI','10.00-10.30','2022-01-26','mengambil darah dan melakukan pemeriksaan psien baru an. alin di ruang ugd'),(185,39,'PAGI','10.30-11.00','2022-01-26','menyelesaikan pencatatan di buku msing-masing register'),(186,39,'PAGI','11.00-11.30','2022-01-26','melakukan penginputan data psien antigen ke aplikasi peduli lindungi'),(187,39,'PAGI','12.00-12.30','2022-01-26','istirahat siang'),(188,39,'PAGI','12.30-13.00','2022-01-26','mencuci alat habis pakai'),(189,39,'PAGI','13.00-13.30','2022-01-26','mengisi time line , mengisi buku aplusan '),(190,25,'PAGI','08.00-08.30','2022-01-26','Pembuatan SPO Kamar Operasi'),(191,25,'PAGI','08.30-09.00','2022-01-26','Pembuatan SPO Kamar Operasi'),(192,25,'PAGI','09.00-09.30','2022-01-26','Rekrutmen Bidan (Sifa, Afifah, Eka W, Meirinda, Hasanah'),(193,25,'PAGI','09.30-10.00','2022-01-26','Pembuatan SPO Kamar Operasi'),(194,25,'PAGI','10.00-10.30','2022-01-26','Pembuatan SPO Kamar Operasi'),(195,25,'PAGI','10.30-11.00','2022-01-26','Pembuatan SPO Kamar Operasi'),(196,25,'PAGI','11.00-11.30','2022-01-26','Pembuatan SPO Kamar Operasi'),(197,25,'PAGI','11.30-12.00','2022-01-26','Koordinasi Kanit Bidan Terkait Karyawan Baru'),(198,8,'PAGI','13.30-14.00','2022-01-26','-'),(199,25,'PAGI','12.00-12.30','2022-01-26','Rekrutmen Bidan (Jesiva, Mutia, Virginia, Sinta Bela, Suciati)'),(200,25,'PAGI','12.30-13.00','2022-01-26','Rekrutmen Bidan (Jesiva, Mutia, Virginia, Sinta Bela, Suciati)'),(201,25,'PAGI','13.00-13.30','2022-01-26','Koordinasi Direktur, Kabid, Personalia, Kanit Bidan'),(202,25,'PAGI','13.30-14.00','2022-01-26','Koordinasi Direktur, Kabid, Personalia, Kanit Bidan, Herika dan Sartika Serta Nova tentang Penambahan dinas di Kebidanan Rawat Inap'),(203,13,'PAGI','12.30-13.00','2022-01-26','Keliling melap meja2'),(204,13,'PAGI','13.00-13.30','2022-01-26','Membersihkan poli kandungan,lep dan RM'),(205,12,'PAGI','13.30-14.00','2022-01-26','Membersihkan Y 114 pasien pulang, mencuci linen Y 114, menjemur linen Y 114'),(206,13,'PAGI','13.30-14.00','2022-01-26','Membersihkan kmr pasien 114 pulang ,nyuci linen dan membersihkan dapur'),(207,26,'PAGI','10.30-11.00','2022-01-26','13. Rekap pengunaan Oksigen tahun 2021,2022'),(208,26,'PAGI','11.30-12.00','2022-01-26','15. Pembuatan Bukti Potong Pajak tahunan karyawan  2021 '),(209,11,'SORE','14.00-14.30','2022-01-26','Menyiapi rantang mkanan , menyiapi gerobak dan peralatan kerja'),(210,26,'PAGI','11.00-11.30','2022-01-26','14. Pembuatan Bukti Potong Pajak tahunan karyawan  2021'),(211,26,'PAGI','12.30-13.00','2022-01-26','17. Pembuatan Bukti Potong Pajak tahunan karyawan  2021 '),(212,26,'PAGI','13.00-13.30','2022-01-26','18.  Pembuatan Bukti Potong Pajak tahunan karyawan  2021 '),(213,26,'PAGI','13.30-14.00','2022-01-26','19.Pembuatan Bukti Potong Pajak tahunan karyawan  2021 '),(214,47,'PAGI','07.30-08.00','2022-01-26','Persiapan +SC px kmr 115 by ny pitria'),(215,47,'PAGI','08.00-08.30','2022-01-26','SC, minta RM px baru by ny pitria ke admisi'),(216,7,'PAGI','10.00-10.30','2022-01-26','Absen.mengecek ruangan USG.'),(217,30,'PAGI','12.30-13.00','2022-01-26','Administrasi px pulang y-114'),(218,30,'PAGI','13.00-13.30','2022-01-26','Infut data px pulang ke jasa dokter dan obat '),(219,30,'PAGI','13.30-14.00','2022-01-26','Menghitung uang dan menulis aplusan '),(220,7,'PAGI','13.30-14.00','2022-01-26','Beres.beres Rungan USG.matikan USG dan peralatan elektronik lainnya'),(221,47,'PAGI','08.30-09.00','2022-01-26','Dampingi dr andar SpA visite kmr  104'),(222,47,'PAGI','09.00-09.30','2022-01-26','Dampingi dr andar SpA visite kmr 111 n kmr 116'),(223,47,'PAGI','09.30-10.00','2022-01-26','Aplusan px baru kmr 109 n dampingi visite dr andar SpA  ke kmr 109'),(224,47,'PAGI','10.00-10.30','2022-01-26','Amprah obat px baru n anter resep kmr 111 n kmr 116 ke apotik'),(225,47,'PAGI','10.30-11.00','2022-01-26','Antar bayi ke kmr VK 1 menyusui dgn ibunya'),(226,47,'PAGI','11.00-11.30','2022-01-26','Aplusan dgn UGD px baru kmr 106 n lengkapi status px baru'),(227,47,'PAGI','11.30-12.00','2022-01-26','Ajarin bayi kmr 116 menyusui dgn ibunya, ganti popok, oles salep kepala'),(228,47,'PAGI','12.00-12.30','2022-01-26','Makan siang, injeksi, antar obat oral, vital sign kmr 111'),(229,29,'SORE','14.00-14.30','2022-01-26','Aplusan, rekap jasa dokter anak'),(230,57,'PAGI','09.00-09.30','2022-01-26','Wawancara pelamar'),(231,57,'PAGI','09.30-10.00','2022-01-26','Wawancara calon bidan'),(232,47,'PAGI','12.30-13.00','2022-01-26','Tulis laporan bayi, buku briefing laporan anak, isi grafik px kmr 111'),(233,57,'PAGI','10.00-10.30','2022-01-26','Masih wawancara'),(234,47,'PAGI','13.00-13.30','2022-01-26','Injeksi, antar obat oral siang, vital sign ke kmr 106 n 109,n isi grafik'),(235,47,'PAGI','13.30-14.00','2022-01-26','Ngecek kembali laporan anak n bayi, ketik laporan px ke grup akreditasi n aplusan ke dns sore'),(236,57,'PAGI','10.30-11.00','2022-01-26','Wawancara dan menyerahkan lembar tes pelamar'),(237,57,'PAGI','11.00-11.30','2022-01-26','Istirahat'),(238,57,'PAGI','11.30-12.00','2022-01-26','Rapat dengan kanit kebidanan'),(239,57,'PAGI','12.00-12.30','2022-01-26','Interview calon bidan baru'),(240,57,'PAGI','12.30-13.00','2022-01-26','Masih interview'),(241,57,'PAGI','13.00-13.30','2022-01-26','Rapat dengan sartika dan herika'),(242,57,'PAGI','13.30-14.00','2022-01-26','Rapat dengan nova'),(243,73,'SORE','14.00-14.30','2022-01-26','Aplusan dinas pagi ke sore'),(244,73,'SORE','14.30-15.00','2022-01-26','Bersih” UGD dan menulis buku briefing'),(245,9,'SORE','14.00-14.30','2022-01-26','Menginput data pasien rawat jalan'),(246,5,'PAGI','11.30-12.00','2022-01-26','Menginput harga pemeriksaan LAB di ruang Laboratorium'),(247,62,'SORE','15.30-16.00','2022-01-26','- Datang kerja 15.30\r\n- Nyiapim snack untuk pasien.\r\n\r\n'),(248,65,'SORE','14.00-14.30','2022-01-26','Keliling ruangan dan menghapal nama ruangan'),(249,73,'SORE','15.00-15.30','2022-01-26','Amprah ABHP UGD'),(250,65,'SORE','14.30-15.00','2022-01-26','Membantu amang parkir'),(251,65,'SORE','16.00-16.30','2022-01-26','Ngidupin lampu'),(252,73,'SORE','16.00-16.30','2022-01-26','Pasien datang meminta surat keterangan sehat'),(253,65,'SORE','15.00-15.30','2022-01-26','Mengontrol ruangan'),(254,62,'SORE','16.00-16.30','2022-01-26','- Antar snack pasien\r\n- Nyiapin alat saji pasien'),(255,73,'SORE','15.30-16.00','2022-01-26','Menyusun amprahan ABHP UGD'),(256,65,'SORE','15.30-16.00','2022-01-26','Bantu pasien pindah ruangan dari vk1 ke ruangan 115'),(257,62,'SORE','16.30-17.00','2022-01-26','- masih nyiapin alat pasien\r\n- lipat tisu\r\n- menyajikan makanan pasien.'),(258,73,'SORE','17.00-17.30','2022-01-26','Px datang rawat jalan'),(259,34,'SORE','14.00-14.30','2022-01-26','Aplusan laporan dengan dinas pagi'),(260,34,'SORE','14.30-15.00','2022-01-26','Menyiapkan terapi dan persiapan tindakan.'),(261,34,'SORE','15.00-15.30','2022-01-26','Melakukan tindakan/ memberikan terapi dan menulis laporan'),(262,34,'SORE','15.30-16.00','2022-01-26','Melakukan tindakan dan menulis laporan'),(263,34,'SORE','16.00-16.30','2022-01-26','Melakukan tindakan / memberikan terapi dan menulis laporan.'),(264,34,'SORE','16.30-17.00','2022-01-26','Melakukan tindakan dan menulis laporan.'),(265,34,'SORE','17.00-17.30','2022-01-26','Melakukan tindakan/memberikan terapi\r\nMempersiapkan tindakan curet serta menulis laporan'),(266,34,'SORE','17.30-18.00','2022-01-26','Melakukan tindakan/memberikan terapi/\r\nMempersiapkan tindakan curet serta menulis laporan'),(267,34,'SORE','18.00-18.30','2022-01-26','Melakukan tindakan/memberikan terapi\r\nMempersiapkan tindakan curet serta menemani visite dr. Hary sp.og'),(268,34,'SORE','18.30-19.00','2022-01-26','Menunggu dr. Sigit Sp.og untuk melakukan tindakan kuret'),(269,73,'SORE','17.30-18.00','2022-01-26','ISOMA'),(270,40,'SORE','14.00-14.30','2022-01-26','merapikan meja, ngisi peralatan sampling'),(271,62,'SORE','17.00-17.30','2022-01-26','- Masih Lanjut menyajikan makanan pasien.\r\n- mengantar makanan pasien\r\n- mencuci rantang\r\n'),(272,62,'SORE','17.30-18.00','2022-01-26','- instrhat makan dll..'),(273,62,'SORE','18.00-18.30','2022-01-26','ngambil piring pasien'),(274,40,'SORE','15.00-15.30','2022-01-26','sholat'),(275,62,'SORE','18.30-19.00','2022-01-26','- mencuci alat makan pasien\r\n- pulang'),(276,40,'SORE','15.30-16.00','2022-01-26','Pemeriksaan Laboratorium Pasien Rawat jalan'),(277,40,'SORE','16.00-16.30','2022-01-26','Pemeriksaan Swab Antigen'),(278,40,'SORE','16.30-17.00','2022-01-26','Pemeriksaan laboratorium Pasien Rawat Jalan'),(279,40,'SORE','17.30-18.00','2022-01-26','Pemeriksaan Swab Antigen '),(280,40,'SORE','18.00-18.30','2022-01-26','sholat & makan'),(281,40,'SORE','19.30-20.00','2022-01-26','Pemeriksaan Swab Antigen'),(282,40,'SORE','20.00-20.30','2022-01-26','Pemeriksaan Swab Antigen'),(283,69,'SORE','15.00-15.30','2022-01-26','Px SKS (2)\r\nAx singkat\r\nTes buta warna dll'),(284,69,'SORE','17.00-17.30','2022-01-26','Px rajal\r\nAx,px,tx'),(285,34,'SORE','19.30-20.00','2022-01-26','Membersihkan pasien, alat, ruangan, setelah tindakan kuret.'),(286,34,'SORE','19.00-19.30','2022-01-26','Melakukan tindakan kuret dengan dr. Sigit Sp.og'),(287,34,'SORE','20.00-20.30','2022-01-26','Melakukan Nst pasien rawat jalan.\r\nMemastikan jadwal terapi telah diberikan atau yg akan diberikan.'),(288,34,'SORE','20.30-21.00','2022-01-26','Melengkapi laporan dinas di buku aplusan, di grub dan melakukan aplusan dinas dengan dinas malam'),(289,88,'SORE','14.00-14.30','2022-01-26','Menyusun status di rak'),(290,88,'SORE','14.30-15.00','2022-01-26','Menyusun status RM di rak'),(291,88,'SORE','15.00-15.30','2022-01-26','Merakit status Rawat Jalan '),(292,88,'SORE','15.30-16.00','2022-01-26','Merakit setatus UGD'),(293,88,'SORE','16.00-16.30','2022-01-26','Istirahat (makan)\r\nRekap laporan penyakit'),(294,40,'SORE','20.30-21.00','2022-01-26','Pemeriksaan Pasien Rawat Jalan'),(295,88,'SORE','16.30-17.00','2022-01-26','Rekap laporan penyakit dan mencari kode setatus rawat jalan (konfirmasi via telpon dari rajal)'),(296,88,'SORE','17.00-17.30','2022-01-26','Rekap laporan penyakit'),(297,88,'SORE','17.30-18.00','2022-01-26','Rekap laporan penyakit'),(298,88,'SORE','18.00-18.30','2022-01-26','Rekap laporan penyakit'),(299,73,'SORE','20.00-20.30','2022-01-26','Bersih” UGD'),(300,88,'SORE','18.30-19.00','2022-01-26','Rekap laporan penyakit'),(301,73,'SORE','20.30-21.00','2022-01-26','Aplusan dinas sore ke malam'),(302,88,'SORE','19.00-19.30','2022-01-26','Rekap laporan penyakit'),(303,88,'SORE','19.30-20.00','2022-01-26','Rekap laporan penyakit'),(304,88,'SORE','20.00-20.30','2022-01-26','Rekap laporan penyakit'),(305,88,'SORE','20.30-21.00','2022-01-26','Rekap laporan penyakit'),(306,29,'SORE','14.30-15.00','2022-01-26','Pelayanan pasien apotek dan rajal'),(307,29,'SORE','15.00-15.30','2022-01-26','Rekap kasbon obat karyawan'),(308,29,'SORE','15.30-16.00','2022-01-26','Rekap kasbon obat, merinci obat pasien pulang'),(309,29,'SORE','16.00-16.30','2022-01-26','Merinci pasien pulang dan pelayanan pasien rajal'),(310,29,'SORE','16.30-17.00','2022-01-26','Pelayanan pasien poli kandungan'),(311,29,'SORE','17.00-17.30','2022-01-26','Pelayanan pasien poli kandungan dan ugd'),(312,29,'SORE','17.30-18.00','2022-01-26','Isoman'),(313,22,'SORE','14.00-14.30','2022-01-26','Mengecek barang datang'),(314,22,'SORE','14.30-15.00','2022-01-26','Menyiapkan amprahan ruangan'),(315,29,'SORE','18.00-18.30','2022-01-26','Pelayanan poli kandungan, poli anak dan rajal'),(316,22,'SORE','15.00-15.30','2022-01-26','Mengerjakan resep'),(317,73,'MALAM','21.00-21.30','2022-01-26','Aplusan dinas sore ke malam'),(318,29,'SORE','18.30-19.00','2022-01-26','Pelayanan pasien poli kandungan, poli anak dan rajal umum'),(319,73,'MALAM','21.30-22.00','2022-01-26','Bersih” UGD dan menulis buku briefing'),(320,22,'SORE','15.30-16.00','2022-01-26','Mengerjakan resep'),(321,22,'SORE','16.00-16.30','2022-01-26','Mengerjakan resep '),(322,29,'SORE','19.00-19.30','2022-01-26','Pelayanan poli kandungan, anak dan rajal umum'),(323,22,'SORE','16.30-17.00','2022-01-26','Barang datang'),(324,29,'SORE','19.30-20.00','2022-01-26','Pelayanan poli kandungan, anak dan rajal umum'),(325,22,'SORE','17.00-17.30','2022-01-26','Mengerjakan resep'),(326,22,'SORE','17.30-18.00','2022-01-26','Mengerjakan resep '),(327,73,'MALAM','06.00-06.30','2022-01-26','Bersih” UGD'),(328,22,'SORE','18.00-18.30','2022-01-26','Mengerjakan resep'),(329,29,'SORE','20.00-20.30','2022-01-26','Pelayanan poli kandungan, anak, rajal umum'),(330,73,'MALAM','06.30-07.00','2022-01-26','Aplusan dinas malam ke pagi'),(331,22,'SORE','18.30-19.00','2022-01-26','Mengerjakan resep '),(332,29,'SORE','20.30-21.00','2022-01-26','Rekap bookeping, pelayanan, hitung pendapatan, aplusan'),(333,22,'SORE','19.00-19.30','2022-01-26','Mengerjakan resep'),(334,22,'SORE','19.30-20.00','2022-01-26','Tutup buku'),(335,22,'SORE','20.00-20.30','2022-01-26','Mengerjakan resep'),(336,22,'SORE','20.30-21.00','2022-01-26','Mengerjakan resep dan aplusan'),(337,85,'SORE','14.00-14.30','2022-01-26','Menunggu bidan senior yg datang untuk diorientasi di ruangan dr.praktek obgyn'),(338,85,'SORE','14.30-15.00','2022-01-26','Sambil menunggu dr. Obgyn  dtg, saya dan bidan senior mempersiapkan alat-alat seperti menghidupkan alat USG dan merapikan tempat dr.'),(339,85,'SORE','15.00-15.30','2022-01-26','Menunggu pasien datang'),(340,85,'SORE','15.30-16.00','2022-01-26','Menganamnesa pasien yg datang dgn menanyakan keluhan serta melakukan ttv seperti mengukur TD dan BB pasien tersebut'),(341,85,'SORE','16.00-16.30','2022-01-26','Memanggil pasien untuk dilakukan pemeriksaan oleh dr. Obgyn seperti USG 2D dan 4D serta membersihkan bekas gel yang ada disekitar area perut pasien tersebut'),(342,85,'SORE','16.30-17.00','2022-01-26','Kembali lagi ke meja pemeriksaan untuk menganamnesa pasien'),(343,85,'SORE','17.00-17.30','2022-01-26','Memanggil pasien untuk dilakukan pemeriksaan USG 4D dan membersihkan gell menggunakan tissue diarea perut pasien'),(344,85,'SORE','17.30-18.00','2022-01-26','Menganamnesa pasien dgn menanyakan keluhan pasien serta mengukur TTV seperti  TD dan BB '),(345,85,'SORE','18.00-18.30','2022-01-26','Mengantar Pasien ke ruang ranap untuk dilakukan NST'),(346,85,'SORE','18.30-19.00','2022-01-26','Kembali memanggil pasien untuk dilakukan anamnesa seperti menanyakan keluhan dan mengukur TTV seperti TD dan BB'),(347,86,'SORE','14.00-14.30','2022-01-26','Absen datang'),(348,86,'SORE','16.30-17.00','2022-01-26','Bantu-bantu poli kandungan'),(349,85,'SORE','19.00-19.30','2022-01-26','Memanggil pasien untuk dilakukan pemeriksaan USG 2D oleh dr. Obgyn dan membersikan gel yg ada diarea abdomen pasien '),(350,86,'SORE','17.30-18.00','2022-01-26','Bersih2 ruanga anak sebelum dokter datang'),(351,86,'SORE','18.30-19.00','2022-01-26','Anemnesa pasien baru datang'),(352,85,'SORE','19.30-20.00','2022-01-26','Memanggil pasien untuk dilakukan anamnesa seperti menanyakan keluhan HPHT dan mengukur TTV seperti TD dan BB'),(353,86,'SORE','19.00-19.30','2022-01-26','Anemnesa pasien baru datang'),(354,86,'SORE','19.30-20.00','2022-01-26','Asiten dokter'),(355,86,'SORE','20.00-20.30','2022-01-26','Asisten dokter'),(356,86,'SORE','20.30-21.00','2022-01-26','-asisten dokter\r\n-beres2 dan bersih2 sebelum pulang '),(357,85,'SORE','20.00-20.30','2022-01-26','Memanggil pasien terakhir untuk dilakukan pemeriksaan USG dgn keluhan pasien tidak haid selama 8 bln setelah melahirkan serta membersihkan gel yg ada dibagian abdomen pasien '),(358,9,'SORE','14.30-15.00','2022-01-26','Penginputan data pasien rawat jalan ugd'),(359,9,'SORE','15.00-15.30','2022-01-26','Mencover sttus rawat jalan'),(360,85,'SORE','20.30-21.00','2022-01-26','Mematikan alat USG, TV dan AC serta merapikan meja dr. Dan kursi pasien dan membuka pintu ruangan '),(361,9,'SORE','15.30-16.00','2022-01-26','Penginputan data pasien rawat jalan poli'),(362,9,'SORE','17.30-18.00','2022-01-26','Isoman'),(363,9,'SORE','19.00-19.30','2022-01-26','Penginputan data pasien poli'),(364,60,'SORE','20.30-21.00','2022-01-26','Asisten dokter sampai selesai dan merapikan ruangan'),(365,60,'SORE','14.00-14.30','2022-01-26','Mengajari bidan baru tata cara menghidupkan mesin usg dan lainnya'),(366,60,'SORE','14.30-15.00','2022-01-26','Masih mengajari bidan baru '),(367,60,'SORE','15.00-15.30','2022-01-26','Mempersiapkan ruangan untuk praktek dokter Hary,Sp.OG'),(368,60,'SORE','15.30-16.00','2022-01-26','Anamnesa pasien dokter Hary yg datang USG'),(369,60,'SORE','16.00-16.30','2022-01-26','Asisten dokter diruang'),(370,60,'SORE','16.30-17.00','2022-01-26','Asisten dokter diruang'),(371,60,'SORE','17.00-17.30','2022-01-26','Asisten dokter diruang'),(372,60,'SORE','17.30-18.00','2022-01-26','Asisten dokter diruang'),(373,60,'SORE','18.00-18.30','2022-01-26','Mempersiapkan ruangan prakter dokter Sigit,Sp.OG'),(374,60,'SORE','18.30-19.00','2022-01-26','Anamnesa pasien dokter sigit yg datang'),(375,60,'SORE','19.00-19.30','2022-01-26','Masih anamnesa'),(376,60,'SORE','19.30-20.00','2022-01-26','Asisten dokter diruangan'),(377,60,'SORE','20.00-20.30','2022-01-26','Asisten dokter diruangan'),(378,10,'MALAM','21.00-21.30','2022-01-26','Baca brefing, mencatat kamar kosong pasien, persiapan alat.'),(379,48,'MALAM','21.00-21.30','2022-01-26','Operan dinas dari jaga sore ke jaga malam'),(380,35,'MALAM','21.00-21.30','2022-01-26','Aplusan'),(381,35,'MALAM','21.30-22.00','2022-01-26','Menyiapkan injeksi'),(382,35,'MALAM','22.00-22.30','2022-01-26','Menulis askeb'),(383,35,'MALAM','22.30-23.00','2022-01-26','Memberikan obat untuk pasien'),(384,35,'MALAM','23.00-23.30','2022-01-26','Memberikan obat untuk pasien'),(385,35,'MALAM','23.30-00.00','2022-01-26','Memindahkan pasien post kuret'),(386,35,'MALAM','00.00-00.30','2022-01-27','Istirahat'),(387,35,'MALAM','00.30-01.00','2022-01-27','Istirahat'),(388,35,'MALAM','01.00-01.30','2022-01-27','Istirahat'),(389,35,'MALAM','01.30-02.00','2022-01-27','Mengganti infus habis'),(390,35,'MALAM','02.00-02.30','2022-01-27','Istirahat'),(391,35,'MALAM','02.30-03.00','2022-01-27','Istirahat'),(392,35,'MALAM','03.00-03.30','2022-01-27','Menyuntikan obat untuk pasien'),(393,35,'MALAM','03.30-04.00','2022-01-27','Istirahat'),(394,35,'MALAM','04.00-04.30','2022-01-27','Istirahat'),(395,35,'MALAM','04.30-05.00','2022-01-27','Istirahat'),(396,35,'MALAM','05.00-05.30','2022-01-27','Istirahat'),(397,35,'MALAM','05.30-06.00','2022-01-27','Menyeka pasien post sc'),(398,35,'MALAM','06.00-06.30','2022-01-27','Memberikan obat untuk pasien dan ttv'),(399,35,'MALAM','06.30-07.00','2022-01-27','Membuat laporan dan aplusan'),(400,23,'MALAM','21.00-21.30','2022-01-26','Aplusan'),(401,23,'MALAM','21.30-22.00','2022-01-26','Melayani resep poli anak'),(402,23,'MALAM','22.00-22.30','2022-01-26','Melayanai resep poli anak'),(403,23,'MALAM','22.30-23.00','2022-01-26','Melayani penjualan'),(404,23,'MALAM','23.00-23.30','2022-01-26','Mencatat pemakaian obat'),(405,23,'MALAM','23.30-00.00','2022-01-26','Istirahat'),(406,23,'MALAM','00.00-00.30','2022-01-27','Istirahat'),(407,23,'MALAM','00.30-01.00','2022-01-27','Istirahat'),(408,23,'MALAM','01.00-01.30','2022-01-27','Istirahat'),(409,48,'MALAM','21.30-22.00','2022-01-26','Buat laporan'),(410,23,'MALAM','01.30-02.00','2022-01-27','Melayani penjualan obat'),(411,23,'MALAM','02.00-02.30','2022-01-27','Istirahat'),(412,48,'MALAM','22.00-22.30','2022-01-26','Membuat injeksi'),(413,48,'MALAM','22.30-23.00','2022-01-26','Melakukan tindakan nyuntik sesuai jadwal'),(414,23,'MALAM','06.30-07.00','2022-01-27','Aplusan'),(415,48,'MALAM','23.00-23.30','2022-01-26','Mengukur tanda-tanda vital pasien'),(416,23,'MALAM','06.00-06.30','2022-01-27','Tutup buku'),(417,73,'MALAM','06.00-06.30','2022-01-27','Bersih” UGD '),(418,48,'MALAM','23.30-00.00','2022-01-26','Observasi pasien demam'),(419,73,'MALAM','06.30-07.00','2022-01-27','Aplusan dinas malam ke pagi'),(420,23,'MALAM','05.30-06.00','2022-01-27','Memotong kartu stok'),(421,48,'MALAM','00.00-00.30','2022-01-27','Observasi pasien demam'),(422,23,'MALAM','02.30-03.00','2022-01-27','Istirahat'),(423,48,'MALAM','00.30-01.00','2022-01-27','Mengganti cairan infus'),(424,48,'MALAM','01.00-01.30','2022-01-27','Observasi pasien'),(425,23,'MALAM','05.00-05.30','2022-01-27','Menyusun obat'),(426,48,'MALAM','01.30-02.00','2022-01-27','Observasi pasien'),(427,23,'MALAM','03.00-03.30','2022-01-27','Istirahat'),(428,48,'MALAM','02.00-02.30','2022-01-27','Mengganti cairan infus'),(429,23,'MALAM','03.30-04.00','2022-01-27','Istirahat'),(430,48,'MALAM','02.30-03.00','2022-01-27','Observasi pasien'),(431,48,'MALAM','03.00-03.30','2022-01-27','Observasi pasien'),(432,48,'MALAM','03.30-04.00','2022-01-27','Observasi pasien'),(433,23,'MALAM','04.00-04.30','2022-01-27','Istirahat'),(434,48,'MALAM','04.00-04.30','2022-01-27','Observasi pasien'),(435,23,'MALAM','04.30-05.00','2022-01-27','Istirahat'),(436,48,'MALAM','04.30-05.00','2022-01-27','Ibadah shalat subuh'),(437,48,'MALAM','05.00-05.30','2022-01-27','Keliling membagikan obat ke setiap kamar pasien'),(438,48,'MALAM','05.30-06.00','2022-01-27','Memandikan bayi'),(439,48,'MALAM','06.00-06.30','2022-01-27','Memandikan bayi dan bersih-bersih ruangan'),(440,48,'MALAM','06.30-07.00','2022-01-27','Mencatat laporan keadaan umum dan tanda-tanda vital hasil pemeriksaan '),(441,46,'MALAM','21.00-21.30','2022-01-26','Operan  dinas dari jaga sore ke jaga malan'),(442,46,'MALAM','21.30-22.00','2022-01-26','Buat laporan '),(443,46,'MALAM','22.00-22.30','2022-01-26','Membuat  injeksi '),(444,46,'MALAM','22.30-23.00','2022-01-26','Melakukan tindakan  nyuntik  sesuai jadwal '),(445,46,'MALAM','23.00-23.30','2022-01-26','Mengukur tanda-tanda vital  pasien '),(446,46,'MALAM','23.30-00.00','2022-01-26','Observasi pasien demam '),(447,46,'MALAM','00.00-00.30','2022-01-27','Observasi pasien demam '),(448,46,'MALAM','00.30-01.00','2022-01-27','Observasi pasien demam '),(449,46,'MALAM','01.00-01.30','2022-01-27','Observasi pasien demam '),(450,46,'MALAM','01.30-02.00','2022-01-27','Observasi pasien demam '),(451,46,'MALAM','02.00-02.30','2022-01-27','Mengganti  caranya infus'),(452,46,'MALAM','02.30-03.00','2022-01-27','Observasi pasien demam '),(453,46,'MALAM','03.00-03.30','2022-01-27','Observasi pasien '),(454,46,'MALAM','03.30-04.00','2022-01-27','Observasi pasien '),(455,46,'MALAM','04.00-04.30','2022-01-27','Observasi pasien '),(456,46,'MALAM','04.30-05.00','2022-01-27','Ibadah  sholat  subuh'),(457,46,'MALAM','05.00-05.30','2022-01-27','Keliling membagikan obat ke setiap  kamar pasien '),(458,46,'MALAM','05.30-06.00','2022-01-27','Memandikan bayi '),(459,46,'MALAM','06.00-06.30','2022-01-27','Memandikan bayi dan bersih-bersih ruangan'),(460,46,'MALAM','06.30-07.00','2022-01-27','Mencatat laporan keadaan  umum dan tanda-tanda  vital hasil pemeriksaan'),(461,10,'MALAM','21.30-22.00','2022-01-26','Membersihkan LAB, membersihkan poli anak, membersihkan poli kandungan.'),(462,10,'MALAM','22.00-22.30','2022-01-26','Mengambil sampah LAB, poli kandungan, poli anak, wc rj dan rj.\r\nMembersihkan rawat jalan.'),(463,10,'MALAM','22.30-23.00','2022-01-26','Membersihkan apotik, UGD, rapidtest.\r\nMengambil sampah.'),(464,10,'MALAM','23.00-23.30','2022-01-26','Mengambil sampah bidan dan depan kamar pasien.\r\nMenyapu selasaran depan ugd sampai area vk2.'),(465,10,'MALAM','03.30-04.00','2022-01-27','Memesan/ me WA jumlah makanan pasien ke dapur tamrin.'),(466,10,'MALAM','04.00-04.30','2022-01-27','Membersihkan dan mengepel selasaran depan UGD sampai area VK2'),(467,10,'MALAM','04.30-05.00','2022-01-27','Membersihkan selasaran / teras depan yasmin dan mengambil sampah.'),(468,10,'MALAM','05.30-06.00','2022-01-27','Membersihkan wc rj, wc vk 1 dan wc cs/ dapur.'),(469,10,'MALAM','06.00-06.30','2022-01-27','Mencuci dan menjemur sprey karyawan, baju jas dokter dan karyawan . Dan kain pel.'),(470,10,'MALAM','06.30-07.00','2022-01-27','Menulis brefing\r\nDan aplusan dengan shif pagi'),(471,28,'MALAM','21.00-21.30','2022-01-26','Ganti shift dengan ka diah'),(472,28,'MALAM','21.30-22.00','2022-01-26','Mengecek uang'),(473,28,'MALAM','22.00-22.30','2022-01-26','Memasukan pendapatan apotek di bookeping'),(474,28,'MALAM','22.30-23.00','2022-01-26','Mengecek rincian pasien pulang'),(475,28,'MALAM','23.00-23.30','2022-01-26','Siapa siaga melayani pasien'),(476,28,'MALAM','23.30-00.00','2022-01-26','Siapa siaga melayani pasien'),(477,28,'MALAM','00.00-00.30','2022-01-27','Siapa siaga melayani pasien'),(478,28,'MALAM','00.30-01.00','2022-01-27','Siapa siaga melayani pasien'),(479,28,'MALAM','01.00-01.30','2022-01-27','Ambil kasur di dapur buat istirahat'),(480,28,'MALAM','01.30-02.00','2022-01-27','Siapa siaga melayani pasien'),(481,78,'PAGI','07.00-07.30','2022-01-27','Absen pagi'),(482,28,'MALAM','02.00-02.30','2022-01-27','Istirahat dan sambil jaga-jaga'),(483,28,'MALAM','02.30-03.00','2022-01-27','Istirahat dan sambil jaga-jaga'),(484,28,'MALAM','03.00-03.30','2022-01-27','Istirahat dan sambil jaga-jaga'),(485,28,'MALAM','03.30-04.00','2022-01-27','Istirahat dan sambil jaga-jaga'),(486,28,'MALAM','04.00-04.30','2022-01-27','Istirahat dan sambil jaga-jaga'),(487,28,'MALAM','04.30-05.00','2022-01-27','Istirahat dan sambil jaga-jaga'),(488,25,'PAGI','07.00-07.30','2022-01-27','Input data pasien laboratorium, rawat jalan dan rawat inap'),(489,28,'MALAM','05.00-05.30','2022-01-27','Istirahat dan sambil jaga-jaga'),(490,25,'PAGI','07.30-08.00','2022-01-27','Input faktur barang datang dan verifikasi pesanan dan pengadaan obat'),(491,28,'MALAM','05.30-06.00','2022-01-27','Istirahat dan sambil jaga-jaga'),(492,28,'MALAM','06.00-06.30','2022-01-27','Istirahat dan sambil jaga-jaga'),(493,28,'MALAM','06.30-07.00','2022-01-27','Ganti shift dengan melan'),(494,26,'PAGI','07.00-07.30','2022-01-27','Datang absen, ke unit kasir pengambilan file dan verifikasi pasien pulang tindakan curet'),(495,25,'PAGI','08.00-08.30','2022-01-27','Koordinasi by wa mengenai kesiapan akreditasi dan laporan pasien kunjungan rawat jalan dan rawat inap'),(496,78,'PAGI','07.30-08.00','2022-01-27','Beli pasir sama semen buat tukang'),(497,13,'PAGI','07.00-07.30','2022-01-27','Membaca buku briefing , menyiapkan alat pel dan memyusun ratang'),(498,13,'PAGI','07.30-08.00','2022-01-27','Membersihkan peri,kmr 109,110,111.dan menyiapkan kmr 203 pasien baru'),(499,13,'PAGI','08.00-08.30','2022-01-27','Membersihkan ruangan gizi ,kmr 106,102,104 dan ruangan kasir'),(500,13,'PAGI','08.30-09.00','2022-01-27','Membersihkan apotik,Ugd ,ruangan rapites dan logistik'),(501,13,'PAGI','09.00-09.30','2022-01-27','Membersihkan kmr pasien pulang 110 dan membuang sampah ke TPS'),(502,13,'PAGI','09.30-10.00','2022-01-27','Nyuci linen dan menjemurnya dan melipat linen yg sudah kering.'),(503,5,'PAGI','07.00-07.30','2022-01-27','Menginput data sirs online pada website kemkes rs online'),(504,5,'PAGI','07.30-08.00','2022-01-27','Memperbaiki error pada pc mini mens room'),(505,5,'PAGI','08.00-08.30','2022-01-27','Memperbaiki error pada pc mini mens room'),(506,5,'PAGI','08.30-09.00','2022-01-27','Memginput data nilai rujukan normal pada pemeriksaan lab'),(507,13,'PAGI','10.00-10.30','2022-01-27','Keliling  melap2 meja,ampar dan lukisan di dinding'),(508,5,'PAGI','09.00-09.30','2022-01-27','Rapat evaluasi mingguan'),(509,36,'PAGI','07.00-07.30','2022-01-27','Aplusan dinas '),(510,36,'PAGI','07.30-08.00','2022-01-27','Mengajarkan karyawan baru membuat jdwal injeksi dan obat '),(511,13,'PAGI','10.30-11.00','2022-01-27','Menyiapkan kmr buat pasien baru 110'),(512,26,'PAGI','07.30-08.00','2022-01-27','Pengecekan semua rekening bank, menginput pemasukan dan pengeluaran dari bank'),(513,26,'PAGI','08.00-08.30','2022-01-27','merekap pendapatan dan pengeluaran harian ke laporan mingguan'),(514,26,'PAGI','08.30-09.00','2022-01-27','Memasuki tagihan obat daftar kewajiban yang harus di bayarkan'),(515,13,'PAGI','11.00-11.30','2022-01-27','Melipat linen lgi'),(516,26,'PAGI','09.00-09.30','2022-01-27','Rapat mingguan seluruh kanit'),(517,26,'PAGI','09.30-10.00','2022-01-27','Rapat mingguan seluruh kanit'),(518,26,'PAGI','10.00-10.30','2022-01-27','Rapat mingguan seluruh kanit'),(519,26,'PAGI','10.30-11.00','2022-01-27','Rapat mingguan seluruh kanit'),(520,24,'PAGI','08.00-08.30','2022-01-27','Aplusan / isi buku breafing'),(521,24,'PAGI','08.30-09.00','2022-01-27','Visite pasien / isi status pasien.'),(522,24,'PAGI','09.00-09.30','2022-01-27','Visite pasien / isi status pasien.'),(523,24,'PAGI','09.30-10.00','2022-01-27','Rapat mingguan'),(524,24,'PAGI','10.00-10.30','2022-01-27','Rapat mingguan'),(525,44,'PAGI','08.00-08.30','2022-01-27','Buat laporan rutin unit dan koordinasi ke satpan dan cs'),(526,13,'PAGI','11.30-12.00','2022-01-27','Istirahat dan makan'),(527,24,'PAGI','10.30-11.00','2022-01-27','Visite pasien baru dan ngetik etiket pasien.'),(528,44,'PAGI','08.30-09.00','2022-01-27','Melayanani permintaan amprahan unit'),(529,78,'PAGI','08.30-09.00','2022-01-27','Rapat'),(530,24,'PAGI','11.00-11.30','2022-01-27','Input laporan harian dan Menyajian makanan pasien'),(531,44,'PAGI','09.00-09.30','2022-01-27','Rapat rutin setiap hari kamis'),(532,24,'PAGI','11.30-12.00','2022-01-27','Menyajikan makanan pasien dan ishoma.'),(533,44,'PAGI','09.30-10.00','2022-01-27','Sda (rapat) '),(534,78,'PAGI','10.00-10.30','2022-01-27','Pasang pegangan di k mandi 206'),(535,44,'PAGI','10.00-10.30','2022-01-27','Sda (rapat) '),(536,44,'PAGI','10.30-11.00','2022-01-27','Sda (rapat) '),(537,78,'PAGI','11.30-12.00','2022-01-27','Apsen pulang'),(538,44,'PAGI','11.00-11.30','2022-01-27','Follow up amprahan dan melayani permintaan untit'),(539,44,'PAGI','11.30-12.00','2022-01-27','Istirahat sambil follow up amprahan'),(540,26,'PAGI','11.00-11.30','2022-01-27','Menginput pembayaran tagihan ke bank dan memasukin ke pengeluaran ke book keeping'),(541,15,'PAGI','07.00-07.30','2022-01-27','Menyiapkan peralatan kerja,dan menyusun rantang.'),(542,8,'PAGI','07.00-07.30','2022-01-27','-bersih bersih, smenyapkan atk dan lain lain'),(543,8,'PAGI','07.30-08.00','2022-01-27','-pendaftaran poli gigi bpjs dan umum\r\n-pelayanan umum, antigen danlain-lain'),(544,8,'PAGI','08.00-08.30','2022-01-27','-pendaftaran poli gigi bpjs dan umum\r\n-pelayanan umum, antigen danlain-lain'),(545,8,'PAGI','08.30-09.00','2022-01-27','-pendaftaran poli gigi bpjs dan umum\r\n-pelayanan umum, antigen danlain-lain'),(546,15,'PAGI','07.30-08.00','2022-01-27','Membersih ruangan pery.'),(547,15,'PAGI','08.00-08.30','2022-01-27','Membersih ruangan pasien'),(548,8,'PAGI','09.00-09.30','2022-01-27','pelayanan ugd  umum dan pasien ranap ugd\r\npelayanan pendaftaran ke poli kandungan'),(549,15,'PAGI','08.30-09.00','2022-01-27','Membersih ruangan pasien.'),(550,15,'PAGI','09.00-09.30','2022-01-27','Membersih ruangan UGD, Apotik,ADM'),(551,8,'PAGI','09.30-10.00','2022-01-27','pelayanan pasien ugd ranap dan pelayanan umum antigen dan lain lain\r\n-pelayanan pasien poli gigi umum'),(552,8,'PAGI','10.00-10.30','2022-01-27','pelayanan pasien poli kandungan'),(553,8,'PAGI','10.30-11.00','2022-01-27','pelayanan pendaftaran pasien poli kandungan'),(554,8,'PAGI','11.00-11.30','2022-01-27','pelayanan pendaftaran poli kandungan\r\npelayanan umum'),(555,8,'PAGI','12.00-12.30','2022-01-27','- input kunjungan online bpjs'),(556,15,'PAGI','09.30-10.00','2022-01-27','Membersih UGD, Apotik, ADM'),(557,8,'PAGI','11.30-12.00','2022-01-27','pelayanan umum'),(558,15,'PAGI','10.30-11.00','2022-01-27','Ikut rapat'),(559,44,'PAGI','12.00-12.30','2022-01-27','Lanjut melayani permintaan unit, \r\nPulang'),(560,15,'PAGI','10.00-10.30','2022-01-27','Membersih WC gigi.'),(561,62,'PAGI','07.00-07.30','2022-01-27','  Kegiatan yg dinas malam lupa di isi ????\r\n\r\n1. Mencuci rantang makanan\r\n2.Membersihkan ricecooker\r\n3.Membersihkan meja,kompor,lemari\r\n'),(562,62,'PAGI','07.30-08.00','2022-01-27','4. Mengisi laporan pramusaji,buku breafing\r\n5.Mengantra mnum poli gigi,kandungan,anak, insem.\r\n6.mengambil piring pasien dan mencuci\r\n7. pulang'),(563,62,'PAGI','11.30-12.00','2022-01-27','10.Menyajikan makanan pasien\r\n11.mengantar makanaan pasien'),(564,62,'PAGI','12.00-12.30','2022-01-27','12. mengantar makan pasien\r\n13. mebersihkan meja\r\n14.menata nampan pasien'),(565,62,'PAGI','12.30-13.00','2022-01-27','15. Istrhat makan dll\r\n16. mengambil piring pasien dan mencuci + memberi angket kepuasan pasien\r\n17.pulang'),(566,13,'PAGI','12.00-12.30','2022-01-27','Membersihkan kmr pasien 104 pulang.'),(567,57,'PAGI','07.00-07.30','2022-01-27','Nginput amprahan gaji bidan (jadwal)'),(568,57,'PAGI','07.30-08.00','2022-01-27','orientasi karyawan baru (bidan)'),(569,57,'PAGI','08.00-08.30','2022-01-27','menginput amprahan gaji rajal dan lab'),(570,57,'PAGI','08.30-09.00','2022-01-27','menginput jadwal unit neonatus'),(571,57,'PAGI','09.00-09.30','2022-01-27','rapat kepala unit'),(572,57,'PAGI','09.30-10.00','2022-01-27','rapat kepala unit'),(573,57,'PAGI','10.00-10.30','2022-01-27','masih rapat kepala unit'),(574,57,'PAGI','10.30-11.00','2022-01-27','rapat kepala unit dan edit amprahan lab'),(575,57,'PAGI','11.00-11.30','2022-01-27','orientasi bidan baru (aura)'),(576,57,'PAGI','11.30-12.00','2022-01-27','rapat dengan supar dan nike tentang doble job nova'),(577,57,'PAGI','12.00-12.30','2022-01-27','masih rapat sambil nginput jadwal neonatus dan dokter ugd'),(578,13,'PAGI','12.30-13.00','2022-01-27','Membersihkan ruangan inseminasi,lep dan RM.'),(579,47,'PAGI','07.00-07.30','2022-01-27','Aplusan, baca laporan, briefing'),(580,15,'PAGI','11.00-11.30','2022-01-27','Ikut rapat'),(581,47,'PAGI','07.30-08.00','2022-01-27','Dampingi dr andar SpA visite kmr 111,kmr 109'),(582,47,'PAGI','08.00-08.30','2022-01-27','Msh visite sm dr andar SpA kmr 115,116,104,107'),(583,50,'PAGI','07.00-07.30','2022-01-27','Apusan dan Menyiapkan obat injeksi dan oral'),(584,15,'PAGI','11.30-12.00','2022-01-27','Melipat linen'),(585,47,'PAGI','08.30-09.00','2022-01-27','Ngecek status utk melihat perubahan therapy px stlh dr andar visite'),(586,50,'PAGI','07.30-08.00','2022-01-27','Injeksi kamar 109'),(587,47,'PAGI','09.00-09.30','2022-01-27','Antar resep n sisa obat px yg pulang ke apotik, n rapat di sanggam meeting'),(588,50,'PAGI','08.00-08.30','2022-01-27','Menulis laporan dan buku injeksi'),(589,50,'PAGI','08.30-09.00','2022-01-27','Menulis askep'),(590,47,'PAGI','09.30-10.00','2022-01-27','Rapat kanit n manajemen di sanggam meeting lt 2'),(591,47,'PAGI','10.00-10.30','2022-01-27','Masih mengikuti rapat'),(592,47,'PAGI','10.30-11.00','2022-01-27','Masih mengikuti rapat di lt 2 ruang sanggam meeting'),(593,50,'PAGI','09.00-09.30','2022-01-27','Melengkapi status pasien anak kamar 104 untuk persiapan pulang'),(594,8,'PAGI','12.30-13.00','2022-01-27','-ishoma\r\n- nyusun status rajal'),(595,8,'PAGI','13.00-13.30','2022-01-27','input kembali pasien bpjs'),(596,47,'PAGI','11.00-11.30','2022-01-27','Membuat amprahan jadwal dinas n tindakan ruangan'),(597,50,'PAGI','09.30-10.00','2022-01-27','Melengkapi status pasien bayi kamar 116 untuk pulang '),(598,50,'PAGI','10.00-10.30','2022-01-27','Meminta TTD orang tua bayi kamar 116 dan edukasi ke orang tua untuk perawatan bayi di rumah'),(599,47,'PAGI','11.30-12.00','2022-01-27','Msh menghitung amprahan tindakan, injeksi n bagi obat siang, vital sign kmr 106'),(600,50,'PAGI','10.30-11.00','2022-01-27','Mengganti infus kamar 111'),(601,50,'PAGI','11.00-11.30','2022-01-27','Serah terima pasien baru dari UGD'),(602,47,'PAGI','12.00-12.30','2022-01-27','Injeksi, vital sign px kmr 109,ajarin bayi menyusui ke ibunya kmr 115'),(603,50,'PAGI','11.30-12.00','2022-01-27','Mengamprah cairan dan obat ke apotik'),(604,41,'PAGI','07.00-07.30','2022-01-27','Absen,Aplusan'),(605,50,'PAGI','12.00-12.30','2022-01-27','Vital sign dan membagikan obat pasien ke kamar 110 dan 111'),(606,47,'PAGI','12.30-13.00','2022-01-27','Antar amprahan jadwal dns, tindakan n print jadwal ruangan ke mba rika'),(607,50,'PAGI','12.30-13.00','2022-01-27','Melengkapi status pasien baru masuk'),(608,47,'PAGI','13.00-13.30','2022-01-27','Konsul hasil pemeriksaan urin px anak ke dr andar, n konsul hasil FL ke dr made via wa'),(609,50,'PAGI','13.00-13.30','2022-01-27','Menulis jadwal injeksi dan buku laporan untuk pasien yang baru masuk'),(610,25,'PAGI','08.30-09.00','2022-01-27','Koordinasi dengan karyawan baru (Hasanah dan Virginia) mengenai tugas dan tanggung jawab'),(611,25,'PAGI','09.00-09.30','2022-01-27','Rapat Koordinasi dengan Kanit sekaligus perkenalan dengan MPP baru (Triana Febriani)'),(612,25,'PAGI','10.30-11.00','2022-01-27','Rapat Koordinasi dengan Kanit sekaligus perkenalan dengan MPP baru (Triana Febriani)'),(613,25,'PAGI','09.30-10.00','2022-01-27','Rapat Koordinasi dengan Kanit sekaligus perkenalan dengan MPP baru (Triana Febriani)'),(614,25,'PAGI','10.00-10.30','2022-01-27','Rapat Koordinasi dengan Kanit sekaligus perkenalan dengan MPP baru (Triana Febriani)'),(615,25,'PAGI','11.00-11.30','2022-01-27','Koordinasi dengan Kanit UGD mengenai mutasi karyawan '),(616,25,'PAGI','11.30-12.00','2022-01-27','Koordinasi dengan Kanit Neonatus dan Anak mengenai jadwal dinas'),(617,41,'PAGI','07.30-08.00','2022-01-27','Merapikan dan membersihkan alat-alat '),(618,25,'PAGI','12.00-12.30','2022-01-27','Koordinasi dengan Kanit UGD dan Kebidanan Rawat Inap mengenai mutasi karyawan dan karyawan baru'),(619,70,'PAGI','07.00-07.30','2022-01-27','Membereskan meja dokter\r\nCek laporan harian dokter UGD'),(620,25,'PAGI','13.00-13.30','2022-01-27','Koordinasi dengan Kanit Laboratorium'),(621,25,'PAGI','13.30-14.00','2022-01-27','Revisi SPO Kamar Operasi'),(622,41,'PAGI','08.00-08.30','2022-01-27','mengambil sampling darah ke ruangan rawat inap dan memeriksa sampel'),(623,70,'PAGI','07.30-08.00','2022-01-27','Melayani pasien membuat SKS'),(624,70,'PAGI','08.00-08.30','2022-01-27','Melayani pasien membuat SKS'),(625,41,'PAGI','08.30-09.00','2022-01-27','melakukan pemeriksaan swab antigen dan pemeriksaan Lab pasien inseminasi dan calon karyawan baru'),(626,70,'PAGI','08.30-09.00','2022-01-27','Melayani pasien rawat inap'),(627,70,'PAGI','09.00-09.30','2022-01-27','Melayani pasien rawat inap'),(628,26,'PAGI','12.00-12.30','2022-01-27','Isoman'),(629,70,'PAGI','09.30-10.00','2022-01-27','Melayani pasien rawat inap'),(630,70,'PAGI','10.00-10.30','2022-01-27','Melayani pasien rawat inap'),(631,26,'PAGI','12.30-13.00','2022-01-27','Isoman'),(632,41,'PAGI','09.00-09.30','2022-01-27','melakukan swab antigen pasien ugd '),(633,26,'PAGI','11.30-12.00','2022-01-27','Cek tindakan dokter di register pasien '),(634,41,'PAGI','09.30-10.00','2022-01-27','inseminasi'),(635,41,'PAGI','10.00-10.30','2022-01-27','inseminasi'),(636,13,'PAGI','13.00-13.30','2022-01-27','Membersihkan poli kandungan dan poli Gigi'),(637,70,'PAGI','10.30-11.00','2022-01-27','Melayani pasien rawat jalan'),(638,41,'PAGI','10.30-11.00','2022-01-27','melakukan pemeriksaan swab antigen, mengambil sampel darah di ruangan rawat inap'),(639,70,'PAGI','11.00-11.30','2022-01-27','Melayani pasien rawat jalan'),(640,70,'PAGI','11.30-12.00','2022-01-27','Melayani pasien rawat jalan'),(641,70,'PAGI','12.00-12.30','2022-01-27','Melayani pasien rawat jalan'),(642,41,'PAGI','11.00-11.30','2022-01-27','inseminasi , sekaligus mengerjakan pemeriksaan urine dan feses pasien rawat inap'),(643,70,'PAGI','12.30-13.00','2022-01-27','Melayani pasien rawat jalan'),(644,41,'PAGI','11.30-12.00','2022-01-27','inseminasi'),(645,13,'PAGI','13.30-14.00','2022-01-27','Nyuci linen, membersihkan dapur dan menulis berifing.'),(646,41,'PAGI','12.00-12.30','2022-01-27','menulis hasil pemeriksaan pasien rawat jalan, rawat inap, pasien antigen dan pasien inseminasi'),(647,41,'PAGI','12.30-13.00','2022-01-27','makan siang duluu.....'),(648,41,'PAGI','13.00-13.30','2022-01-27','koordinasi bersama kabid tentang pelayanan'),(649,70,'PAGI','13.00-13.30','2022-01-27','Mencatat laporan pasien'),(650,70,'PAGI','13.30-14.00','2022-01-27','Mencatat laporan pasien\r\nMenyiapkan aplusan'),(651,18,'PAGI','07.00-07.30','2022-01-27','Cek stok obat dan ABHP'),(652,18,'PAGI','07.30-08.00','2022-01-27','Pelayanan resep'),(653,18,'PAGI','08.00-08.30','2022-01-27','Pelayanan resep'),(654,18,'PAGI','08.30-09.00','2022-01-27','Pelayanan resep'),(655,26,'PAGI','13.00-13.30','2022-01-27','Cek tindakan dokter di register pasien '),(656,18,'PAGI','09.00-09.30','2022-01-27','Rapat mingguan semua unit'),(657,26,'PAGI','13.30-14.00','2022-01-27','Cek tindakan dokter di register pasien '),(658,18,'PAGI','09.30-10.00','2022-01-27','Rapat mingguan semua unit'),(659,18,'PAGI','10.00-10.30','2022-01-27','Rapat mingguan semua unit'),(660,18,'PAGI','10.30-11.00','2022-01-27','Membuat laporan pajak'),(661,18,'PAGI','11.00-11.30','2022-01-27','Membuat laporan pajak'),(662,18,'PAGI','11.30-12.00','2022-01-27','Pelayanan resep'),(663,18,'PAGI','12.00-12.30','2022-01-27','Pelayanan resep'),(664,21,'PAGI','07.00-07.30','2022-01-27','Menulis   obat dan abhp '),(665,18,'PAGI','12.30-13.00','2022-01-27','Pelayanan resep'),(666,21,'PAGI','07.30-08.00','2022-01-27','Pelayanan resep'),(667,18,'PAGI','13.00-13.30','2022-01-27','Tutup buku'),(668,21,'PAGI','08.00-08.30','2022-01-27','Pelayanan resep'),(669,21,'PAGI','08.30-09.00','2022-01-27','Pelayanan resep'),(670,18,'PAGI','13.30-14.00','2022-01-27','Tutup buku'),(671,21,'PAGI','09.00-09.30','2022-01-27','Pelayanan resep'),(672,21,'PAGI','09.30-10.00','2022-01-27','Pelayanan resep'),(673,41,'PAGI','13.30-14.00','2022-01-27','mencuci alat pemeriksaan, mematikan alat, menulis aplusan dan pulaaangggg.....'),(674,21,'PAGI','10.00-10.30','2022-01-27','Pelayanan resep'),(675,21,'PAGI','10.30-11.00','2022-01-27','Pelayanan resep'),(676,21,'PAGI','11.00-11.30','2022-01-27','Pelayanan resep'),(677,36,'PAGI','08.00-08.30','2022-01-27','Mengajarkan karyawan baru bkin askeb dan merinci pasien dr.sigit plg'),(678,21,'PAGI','11.30-12.00','2022-01-27','Pelayanan resep'),(679,21,'PAGI','12.00-12.30','2022-01-27','Pelayanan resep'),(680,36,'PAGI','08.30-09.00','2022-01-27','Menyiapkan obat pasien'),(681,21,'PAGI','12.30-13.00','2022-01-27','Pelayanan resep'),(682,36,'PAGI','09.00-09.30','2022-01-27','Rapat presentasi mingguan'),(683,21,'PAGI','13.00-13.30','2022-01-27','Tutup buku'),(684,36,'PAGI','09.30-10.00','2022-01-27','Rapat'),(685,36,'PAGI','10.00-10.30','2022-01-27','Rapat'),(686,21,'PAGI','13.30-14.00','2022-01-27','Pelayanan resep, aplusan'),(687,36,'PAGI','10.30-11.00','2022-01-27','Rapat'),(688,50,'PAGI','13.30-14.00','2022-01-27','Repair infus kamar 106 dan aplusan'),(689,36,'PAGI','11.00-11.30','2022-01-27','Mendampingi dr.hary viste'),(690,36,'PAGI','11.30-12.00','2022-01-27','Merinci pasien dr.hary plg'),(691,47,'PAGI','13.30-14.00','2022-01-27','Mengisi laporan, isi grafik, buat laporan ke grup akreditasi n aplusan.. '),(692,36,'PAGI','12.00-12.30','2022-01-27','Mendampingi dr.sigit visite'),(693,12,'SORE','14.00-14.30','2022-01-27','Menyiapkan peralatan'),(694,36,'PAGI','12.30-13.00','2022-01-27','Memeriksa TTV pasien '),(695,36,'PAGI','13.00-13.30','2022-01-27','Memasukan hasil pemeriksaan ke status pasien'),(696,36,'PAGI','13.30-14.00','2022-01-27','Aplusan dinas '),(697,75,'PAGI','13.30-14.00','2022-01-27','Ada pasien rawat jalan\r\nNyeteril alat ugd\r\nBersih2 ruangan'),(698,75,'PAGI','07.00-07.30','2022-01-27','Aplusan dinas malam ke pagi\r\nBersih2 UGD\r\nAmpran BHP UGd\r\n'),(699,81,'PAGI','09.30-10.00','2022-01-27','Datang ke RSIA Yasmin rawat jalan kebidanan dan absen masuk'),(700,81,'PAGI','10.00-10.30','2022-01-27','Menghidupkan USG dan menyiapkan ruangan'),(701,81,'PAGI','10.30-11.00','2022-01-27','Melakukan anamnesa pada pasien rawat jalan '),(702,75,'PAGI','07.30-08.00','2022-01-27','Menulis buku breafing\r\nDll'),(703,27,'PAGI','07.00-07.30','2022-01-27','Absen Dinas Pagi '),(704,75,'PAGI','08.00-08.30','2022-01-27','Ada pasien rawat jalan dan rawat inap'),(705,75,'PAGI','08.30-09.00','2022-01-27','Ada pasien rawat inap'),(706,75,'PAGI','09.00-09.30','2022-01-27','Ada pasien rawat inap'),(707,81,'PAGI','11.00-11.30','2022-01-27','Menyiapkan pasien dan asisten dokter Sp.OG '),(708,81,'PAGI','11.30-12.00','2022-01-27','Melakukan anamnesa pasien'),(709,75,'PAGI','09.30-10.00','2022-01-27','Ada pasien rawat inap\r\nDan rawat jalan'),(710,81,'PAGI','12.00-12.30','2022-01-27','Menyiapkan pasien untuk USG dan asisten obgyn '),(711,75,'PAGI','10.00-10.30','2022-01-27','Cek alat ugd di cssd'),(712,81,'PAGI','12.30-13.00','2022-01-27','Menyiapkan pasien untuk GIN dan asisten obgyn'),(713,75,'PAGI','10.30-11.00','2022-01-27','Ada pasien rawat inap'),(714,27,'PAGI','07.30-08.00','2022-01-27','Curret Y- 110 Ny. Cintya pulang (free ditanggung dr. Yayu'),(715,75,'PAGI','13.00-13.30','2022-01-27','Ada pasien rawat jalan'),(716,81,'PAGI','13.00-13.30','2022-01-27','Merapikan pasien, alat dan merapikan tempat praktek mematikan USG '),(717,27,'PAGI','08.00-08.30','2022-01-27','Px Y-104 An. Allena perawatan anak pulang '),(718,75,'PAGI','12.30-13.00','2022-01-27','Ada pasien rawat jalan'),(719,81,'PAGI','13.30-14.00','2022-01-27','Merapikan tempat anamnesa dirawat jalan dan menunggu absen pulang'),(720,75,'PAGI','12.00-12.30','2022-01-27','Cek obat emergency di ugd'),(721,68,'SORE','14.00-14.30','2022-01-27',' Absen dan Membersihkan UGD'),(722,75,'PAGI','11.30-12.00','2022-01-27','Istirahat makan siang'),(723,81,'SORE','14.00-14.30','2022-01-27','Absen masuk dan aplusan dengan dinas pagi'),(724,75,'PAGI','11.00-11.30','2022-01-27','Rapat menbahas jadwal dinas,menbahas karyawan baru,dll'),(725,81,'SORE','14.30-15.00','2022-01-27','Melakukan penulisan laporan dan menyiapkan alat untuk Aff DC dan infus serta menyiapkan obat obatan '),(726,27,'PAGI','08.30-09.00','2022-01-27','Klinik kandungan dr. Sigit ada 9 PX, jasa belum di setor pagi ini'),(727,27,'PAGI','09.00-09.30','2022-01-27','File rincian farmasa sudah dikomputer kasir'),(728,68,'SORE','14.30-15.00','2022-01-27','Memeriksa pasien rajal'),(729,27,'PAGI','09.30-10.00','2022-01-27','Rujukan PX UGD '),(730,27,'PAGI','10.00-10.30','2022-01-27','PX tanya Biaya Inap, Untuk perawatan Ibu dan anak '),(731,151,'PAGI','10.00-10.30','2022-01-27','Datang di RSIA Yasmin Palangka Raya untuk melakukan tes kesehatan'),(732,27,'PAGI','10.30-11.00','2022-01-27','FX tanya biaya SC'),(733,151,'PAGI','10.30-11.00','2022-01-27','Melakukan tes kesehatan di laboratorium'),(734,151,'PAGI','13.00-13.30','2022-01-27','Istirahat'),(735,27,'PAGI','11.00-11.30','2022-01-27','Y-102  Y-116 belum dirinci, dan hari ini pulang'),(736,151,'PAGI','11.30-12.00','2022-01-27','Mengikuti visit dokter'),(737,151,'PAGI','12.00-12.30','2022-01-27','Mengikuti visit dokter dan melakukan ttv'),(738,151,'PAGI','11.00-11.30','2022-01-27','Perkenalan dengan lingkungan kerja dan rekan kerja lainnya'),(739,27,'PAGI','11.30-12.00','2022-01-27','Ny. Mustika  Ayu (inseminasi)\r\nPulang hari ini juga'),(740,27,'PAGI','12.00-12.30','2022-01-27','Pendapatan apotik pas'),(741,151,'PAGI','12.30-13.00','2022-01-27','Mempelajari hal-hal yang ada di RSIA Yasmin Palangka Raya'),(742,27,'PAGI','12.30-13.00','2022-01-27','Pendapatan UGD pas'),(743,151,'PAGI','13.30-14.00','2022-01-27','Mempelajari seperti visi dan misi RSIA Yasmin Palangka Raya dll'),(744,27,'PAGI','13.00-13.30','2022-01-27','Px brp kali tanya Rincian '),(745,27,'PAGI','13.30-14.00','2022-01-27','Yang lain aman'),(746,8,'PAGI','13.30-14.00','2022-01-27','-Input bpjs\r\n- Aplusan \r\n-pulang jam 14.00'),(747,85,'PAGI','07.00-07.30','2022-01-27','Menunggu bidan senior dtg diruang petugas '),(748,85,'PAGI','08.00-08.30','2022-01-27','Membantu mempersiapkan alat untuk inseminasi'),(749,85,'PAGI','08.30-09.00','2022-01-27','Menunggu hasil inseminasi'),(750,85,'PAGI','09.30-10.00','2022-01-27','Menganamnesa pasien yg datang untuk kontrol kehamilan mengukur TD dan BB'),(751,85,'PAGI','10.00-10.30','2022-01-27','Menganamnesa pasien menanyakan keluhan dan mengukur TD dan BB'),(752,85,'PAGI','10.30-11.00','2022-01-27','Menganamnesa pasien menanyakan keluhan dan mengukur TD dan BB'),(753,85,'PAGI','11.00-11.30','2022-01-27','Menganamnesa dan menanyakan keluhan pasien mengukur TD dan BB'),(754,85,'PAGI','11.30-12.00','2022-01-27','Memanggil pasien untuk dilakukan pemeriksaan oleh dr obgyn dan mempersilahkan pasien untuk berbaring serta membersihkan gel yg ada diarea abdomen pasien'),(755,85,'PAGI','12.00-12.30','2022-01-27','Memanggil pasien untuk dilakukan pemeriksaan oleh dr obgyn'),(756,85,'PAGI','12.30-13.00','2022-01-27','Memanggil pasien untuk dilakukan pemeriksaan oleh dr.obgyn'),(757,85,'PAGI','13.00-13.30','2022-01-27','Memanggil pasien untuk dilakukan pemeriksaan oleh dr obgyn'),(758,85,'PAGI','13.30-14.00','2022-01-27','Memanggil pasien untuk dilakukan pemeriksaan oleh dr obgyn'),(759,15,'PAGI','12.00-12.30','2022-01-27','Membersih ruang lab dan ruang praktek bapak'),(760,68,'SORE','15.00-15.30','2022-01-27','Menulis buku Briefing UGD'),(761,15,'PAGI','12.30-13.00','2022-01-27','Membersihkan ruang inseminasi'),(762,15,'PAGI','13.00-13.30','2022-01-27','Membersihkan ruang gigi'),(763,15,'PAGI','13.30-14.00','2022-01-27','Mencuci linen gigi dan membersihkan ruang dapur'),(764,64,'SORE','14.00-14.30','2022-01-27','Absen\r\nMerapikan parkiran\r\nStanbay didepan\r\n'),(765,64,'SORE','14.30-15.00','2022-01-27','Menutup gerbang samping\r\nKeliling rsia yasmin/kontrol\r\nStanbay didepan'),(766,64,'SORE','15.00-15.30','2022-01-27','Merapikan parkiran\r\nKontrol tong air\r\nStanbay didepan'),(767,64,'SORE','15.30-16.00','2022-01-27','Stanbay didepan'),(768,150,'PAGI','07.00-07.30','2022-01-27','Tes laboratorium dan antigen'),(769,64,'SORE','16.00-16.30','2022-01-27','Keliling rsia yasmin /kontrol\r\nStanbay didepan'),(770,150,'PAGI','07.30-08.00','2022-01-27','Menunggu hasil laboratorium dan antigen'),(771,150,'PAGI','08.00-08.30','2022-01-27','Orientasi ruangan-ruangan di rsia yasmin'),(772,150,'PAGI','09.00-09.30','2022-01-27','Orientasi diruang rawat inap'),(773,150,'PAGI','08.30-09.00','2022-01-27','Perkenalan dengan direktur dan karyawan di rsia yasmin'),(774,150,'PAGI','09.30-10.00','2022-01-27','Orientasi di ruang poli gigi dan perkenalan dengan dokter jaga '),(775,150,'PAGI','10.00-10.30','2022-01-27','Mengecek saturasi pasien sebelum masuk ruang pemeriksaan'),(776,150,'PAGI','10.30-11.00','2022-01-27','Melihat dan membantu mengasisten dokter tindakan dengan pasien'),(777,150,'PAGI','11.00-11.30','2022-01-27','Menyiapkan alat dan bahan untuk pasien'),(778,150,'PAGI','11.30-12.00','2022-01-27','Membantu dokter tindakan scalling kepada pasien'),(779,150,'PAGI','12.00-12.30','2022-01-27','Membantu menyiapkan devit untuk pasien '),(780,150,'PAGI','12.30-13.00','2022-01-27','Mencuci alat dan membuang bahan habis pakai'),(781,150,'PAGI','13.00-13.30','2022-01-27','Membereskan ruangan setelah tindakan dokter kepada pasien'),(782,150,'PAGI','13.30-14.00','2022-01-27','Makan siang, absen, dan izin pulang'),(783,14,'SORE','14.00-14.30','2022-01-27','Menyiapkan peralatan kerja ,sapu, serok,Pell,air,tisu,keset ,plastik.'),(784,14,'SORE','14.30-15.00','2022-01-27','Menyapu kamar pasien,ruang anak , apotek,UGD ,tempat,bidan,kasir.'),(785,14,'SORE','15.00-15.30','2022-01-27','Menyapu Selasaran bidan,pasien,gizi,gigi,ruangan anak ,rawat jalan .'),(786,14,'SORE','15.30-16.00','2022-01-27','Nyuci handuk ,keset ,jubah yang kotor '),(787,14,'SORE','16.00-16.30','2022-01-27','Nyuci tempat masak,memasak nasi '),(788,14,'SORE','16.30-17.00','2022-01-27','Menjemur cucian yang sudah dicuci'),(789,14,'SORE','17.00-17.30','2022-01-27','Istirahat '),(790,14,'SORE','17.30-18.00','2022-01-27','Makan ,menyediakan kamar untuk kamar 107pasien masuk.'),(791,64,'SORE','16.30-17.00','2022-01-27','Mengarahkan pasien berobat di UGD\r\nMengarahkan pasien yang mau swab antigen\r\nStanbay didepan'),(792,12,'SORE','14.30-15.00','2022-01-27','Membersihkan kamar pasien dan unit²'),(793,12,'SORE','15.00-15.30','2022-01-27','Membersihkan kamar pasien, unit² dan selasaran'),(794,12,'SORE','15.30-16.00','2022-01-27','Membersihkan unit² dan selasaran'),(795,14,'SORE','18.00-18.30','2022-01-27','Membersihkan kamar 116 ,pasien pulang '),(796,12,'SORE','16.00-16.30','2022-01-27','Membuang sampah, mencuci linen'),(797,12,'SORE','17.00-17.30','2022-01-27','Membersihkan Y 111'),(798,12,'SORE','16.30-17.00','2022-01-27','Menyiapkan kamar pasien baru Y 107'),(799,81,'SORE','15.00-15.30','2022-01-27','Melakukan penulisan laporan '),(800,81,'SORE','15.30-16.00','2022-01-27','Melepas infus pasien dan menjelaskan tentang obat untuk dibawa pulang '),(801,81,'SORE','16.00-16.30','2022-01-27','Melakukan KIE pasien post SC tentang mobilisasi '),(802,81,'SORE','16.30-17.00','2022-01-27','Menyiapkan obat dan melakukan ttv '),(803,64,'SORE','17.00-17.30','2022-01-27','Menyalakan lampu2\r\nMengarahkn pasien yg mau swab antigen'),(804,64,'SORE','18.00-18.30','2022-01-27','Dorong pasien pulang pakai kursi roda, yasmin 102\r\nMemindahkan oksigen dari y 102 ke pojok oksigen\r\n'),(805,14,'SORE','18.30-19.00','2022-01-27','Membersihkan  kamar 102,pasien pulang.'),(806,14,'SORE','19.00-19.30','2022-01-27','Nyuci sprei sarung tilam ,sarung bantal ,pasien pulang .'),(807,12,'SORE','17.30-18.00','2022-01-27','Istirahat makan'),(808,12,'SORE','18.00-18.30','2022-01-27','Membersihkan Y116 pasien pulang'),(809,12,'SORE','18.30-19.00','2022-01-27','Membersihkan Y 102 pasien pulang, membersihkan wc bidan & wc wudhu'),(810,89,'SORE','14.00-14.30','2022-01-27','Tiba di kantor'),(811,89,'SORE','14.30-15.00','2022-01-27','Rekap UGD '),(812,89,'SORE','15.00-15.30','2022-01-27','Rekap UGD'),(813,89,'SORE','15.30-16.00','2022-01-27','Rekap UGD'),(814,89,'SORE','16.00-16.30','2022-01-27','Rekap UGD'),(815,89,'SORE','16.30-17.00','2022-01-27','Rekap UGD'),(816,12,'SORE','19.00-19.30','2022-01-27','Mencuci linen pasien yg pulang, mencuci tempat makan/rantang yg dari dapur Thamrin'),(817,68,'SORE','15.30-16.00','2022-01-27','Membuat spalk'),(818,68,'SORE','16.00-16.30','2022-01-27','Memeriksa pasien rawat inap'),(819,68,'SORE','16.30-17.00','2022-01-27','Memeriksa pasien rawat inap'),(820,68,'SORE','17.00-17.30','2022-01-27','Memeriksa pasien rawat jalan'),(821,68,'SORE','17.30-18.00','2022-01-27','Melakukan Tindakan Nebulizer'),(822,30,'SORE','14.00-14.30','2022-01-27','Merinci obat dan rincian px pulang y-116 & verifikasi dg kabid keuangan'),(823,30,'SORE','14.30-15.00','2022-01-27','Merinci obat dan rincian px pulang y-102'),(824,89,'SORE','17.00-17.30','2022-01-27','Rekap UGD'),(825,89,'SORE','17.30-18.00','2022-01-27','Rekap Gigi Mulut 2020 dan 2021'),(826,89,'SORE','18.00-18.30','2022-01-27','Rekap Gigi Mulut 2020 dan 2021'),(827,30,'SORE','15.00-15.30','2022-01-27','Mengantar rincian keruangan px dan menerima pembayaran obat'),(828,89,'SORE','18.30-19.00','2022-01-27','Rekap Gigi Mulut 2020 dan 2021'),(829,89,'SORE','19.00-19.30','2022-01-27','Rekap Gigi Mulut 2020 dan 2021'),(830,89,'SORE','19.30-20.00','2022-01-27','Rekap Gigi Mulut 2020 dan 2021'),(831,89,'SORE','20.00-20.30','2022-01-27','Rekap Gigi Mulut 2020 dan 2021'),(832,89,'SORE','20.30-21.00','2022-01-27','Rekap Gigi Mulut 2020 dan 2021'),(833,30,'SORE','15.30-16.00','2022-01-27','Pembayaran px pulang y-116'),(834,30,'SORE','16.00-16.30','2022-01-27','Pembayaran px pulang y-102 dan pembayaran antigen '),(835,30,'SORE','16.30-17.00','2022-01-27','Pembayaran obat,  antigen dan poli kandungan'),(836,30,'SORE','17.00-17.30','2022-01-27','Merinci obat dan rincian px inseminasi y-203'),(837,30,'SORE','17.30-18.00','2022-01-27','Isoma'),(838,30,'SORE','18.00-18.30','2022-01-27','Pembayaran obat,  antigen dan poli kandungan'),(839,30,'SORE','18.30-19.00','2022-01-27','Menghitung duit dan menulis aplusan'),(840,30,'SORE','19.00-19.30','2022-01-27','Pembayaran obat,  antigen dan poli kandungan & anak'),(841,30,'SORE','19.30-20.00','2022-01-27','Menghitung pembagian dan setoran dr.  Hary'),(842,64,'SORE','19.00-19.30','2022-01-27','Mearahkan pasien ke poli kandungan\r\nMengatur parkir'),(843,81,'SORE','17.00-17.30','2022-01-27','Menulis laporan bidan '),(844,81,'SORE','17.30-18.00','2022-01-27','Menyiapkan alat dan melepas DC pasien post SC '),(845,64,'SORE','19.30-20.00','2022-01-27','Mengarahkn parkir mobil\r\nMerapikan parkir motor'),(846,81,'SORE','18.00-18.30','2022-01-27','Memberikan KIE tentang nyeri post SC dan motivasi mobilisasi pada pasien'),(847,81,'SORE','18.30-19.00','2022-01-27','Menulis laporan kebidanan dan pengecekan pasien yang pulang '),(848,81,'SORE','19.00-19.30','2022-01-27','Mengganti cairan infus pada pasien'),(849,81,'SORE','19.30-20.00','2022-01-27','Visite pasien inseminasi dengan dr. Sp.OG '),(850,64,'SORE','20.30-21.00','2022-01-27','Keliling rsia yasmin\r\nStanbay didepan'),(851,81,'SORE','20.00-20.30','2022-01-27','Menulis laporan kebidanan dan mencek kembali kegiatan yang dilakukan  '),(852,81,'SORE','20.30-21.00','2022-01-27','Aplusan dengan dinas malam dan absen pulang '),(853,68,'SORE','18.00-18.30','2022-01-27','Menulis status ranap'),(854,68,'SORE','18.30-19.00','2022-01-27','Membersihkan ugd'),(855,68,'SORE','19.00-19.30','2022-01-27','Memotong  hYpapix'),(856,68,'SORE','19.30-20.00','2022-01-27','Membersihkan bed pasien'),(857,68,'SORE','20.00-20.30','2022-01-27','Menulis formulir bundle flebitis'),(858,12,'SORE','19.30-20.00','2022-01-27','Menjemur semua linen'),(859,12,'SORE','20.00-20.30','2022-01-27','Membersihkan dapur, membuang sampah'),(860,14,'SORE','19.30-20.00','2022-01-27','Menjemur linen yang sudah dicuci'),(861,14,'SORE','20.00-20.30','2022-01-27','Membersihkan Dapur ,cuci sisa rantang ratang dari Tamrin ,membuang sampah '),(862,14,'SORE','20.30-21.00','2022-01-27','Menunggu poli gigi selesai praktek ,tapi belum juga selesai selesai \r\nSelamat malam \r\nTerimakasih '),(863,12,'SORE','20.30-21.00','2022-01-27','Menunggu poli gigi selesai praktek (tapi masih belum selesai sampai jam 21.00)\r\n\r\nHappy Kiyowo ????'),(864,68,'SORE','20.30-21.00','2022-01-27','Absen pulang'),(865,74,'MALAM','21.00-21.30','2022-01-27','Aplusan dinas sore ke pagi'),(866,74,'MALAM','21.30-22.00','2022-01-27','Bersih-bersih UGD'),(867,74,'MALAM','22.00-22.30','2022-01-27','Amprah ABHP UGD'),(868,43,'MALAM','21.00-21.30','2022-01-27','Periksa sampel'),(869,9,'SORE','14.00-14.30','2022-01-27','Penginputan data pasien ugd'),(870,9,'SORE','14.30-15.00','2022-01-27','Pelayanan pasien via tlpon dan wa'),(871,62,'SORE','15.00-15.30','2022-01-27','masuk kerja\r\nnyiapin snack pasien'),(872,9,'SORE','15.30-16.00','2022-01-27','Penginputan data pasien poli kandungan'),(873,62,'SORE','15.30-16.00','2022-01-27','antar snack pasien'),(874,9,'SORE','16.00-16.30','2022-01-27','Penginputan data pasien rawat inap dan pasien rawat jalan'),(875,9,'SORE','16.30-17.00','2022-01-27','Pelayanan Antigen'),(876,9,'SORE','17.30-18.00','2022-01-27','Isoman'),(877,62,'SORE','16.00-16.30','2022-01-27','nyiapin alat saji pasien\r\ndan nyuci sebagian alat'),(878,9,'SORE','18.00-18.30','2022-01-27','Penginputan data pasien poli kandungan dan anak'),(879,62,'SORE','16.30-17.00','2022-01-27','menyajikan makanan'),(880,30,'SORE','20.00-20.30','2022-01-27','Pembayaran obat, antigen, poli anak dan kandungan'),(881,9,'SORE','18.30-19.00','2022-01-27','Penginputan pasien poli gigi dan mencari rm pasien'),(882,62,'SORE','17.00-17.30','2022-01-27','mengantar makanan pasien '),(883,9,'SORE','20.00-20.30','2022-01-27','Pendataan pasien poli kandungan'),(884,30,'SORE','20.30-21.00','2022-01-27','Pembayaran obat,  lab,  menulis aplusan, mencek pemasukan pengeluaran dan menghitung uang'),(885,62,'SORE','17.30-18.00','2022-01-27','mencuci rantang makanan\r\ndan \r\nmenata nampan pasien'),(886,62,'SORE','18.00-18.30','2022-01-27','istrhat makan dll'),(887,62,'SORE','18.30-19.00','2022-01-27','mengambil piring pasien\r\ndan \r\nmencuci alat saji pasien'),(888,62,'SORE','19.00-19.30','2022-01-27','masih lanjut mencuci alat pasien\r\ndan\r\npulang'),(889,5,'PAGI','09.30-10.00','2022-01-27','Rapat evaluasi mingguan'),(890,5,'PAGI','10.00-10.30','2022-01-27','Rapat evaluasi mingguan'),(891,5,'PAGI','10.30-11.00','2022-01-27','Rapat evaluasi mingguan'),(892,5,'PAGI','11.00-11.30','2022-01-27','Rapat evaluasi mingguan'),(893,5,'PAGI','11.30-12.00','2022-01-27','Menginput data nilai normal rujukan LAB pada simrs'),(894,60,'SORE','18.00-18.30','2022-01-27','Anamnesa pasien poli anak + mendampingi perawat anak yang baru'),(895,60,'SORE','18.30-19.00','2022-01-27','Menulis laporan pasien poli obgyn'),(896,60,'SORE','19.00-19.30','2022-01-27','Anamnesa pasien poli anak'),(897,60,'SORE','19.30-20.00','2022-01-27','Menulis laporan pasien poli obgyn'),(898,60,'SORE','20.00-20.30','2022-01-27','Menulis laporan pasien poli obgyn'),(899,60,'SORE','20.30-21.00','2022-01-27','Menulis laporan pasien poli obgyn s/d selesai dan merapikan tempat praktek.'),(900,87,'SORE','14.00-14.30','2022-01-27','Rekap kandungan 2020'),(901,87,'SORE','14.30-15.00','2022-01-27','Rekap kandungan 2020'),(902,87,'SORE','15.00-15.30','2022-01-27','Rekap kandungan 2020'),(903,87,'SORE','15.30-16.00','2022-01-27','Rekap kandungan 2020'),(904,87,'SORE','16.00-16.30','2022-01-27','Rekap kandungan 2020'),(905,87,'SORE','16.30-17.00','2022-01-27','Rekap kandungan 2020'),(906,87,'SORE','17.00-17.30','2022-01-27','Rekap kandungan 2020'),(907,87,'SORE','17.30-18.00','2022-01-27','Rekap kandungan 2020'),(908,87,'SORE','18.00-18.30','2022-01-27','Rekap kandungan 2020'),(909,87,'SORE','18.30-19.00','2022-01-27','Rekap kandungan 2020'),(910,87,'SORE','19.00-19.30','2022-01-27','Rekap kandungan 2020'),(911,87,'SORE','19.30-20.00','2022-01-27','Rekap kandungan 2020'),(912,87,'SORE','20.00-20.30','2022-01-27','Rekap kandungan 2020'),(913,87,'SORE','20.30-21.00','2022-01-27','Rekap kandungan 2020'),(914,86,'SORE','14.00-14.30','2022-01-27','Absen datang'),(915,86,'SORE','17.30-18.00','2022-01-27','Bantu tensi pasien kandungan'),(916,86,'SORE','18.00-18.30','2022-01-27','Bantu tensi pasien kandungan'),(917,86,'SORE','18.30-19.00','2022-01-27','Bantu tensi pasien kandungan'),(918,86,'SORE','19.00-19.30','2022-01-27','Anamnesa pasien anak dan asisten dokter'),(919,86,'SORE','19.30-20.00','2022-01-27','Anamnesa pasien anak dan asisten dokter'),(920,86,'SORE','20.30-21.00','2022-01-27','Absen pulang'),(921,43,'MALAM','21.30-22.00','2022-01-27','Periksa sampel'),(922,43,'MALAM','23.00-23.30','2022-01-27','Ngetik hasil'),(923,43,'MALAM','22.00-22.30','2022-01-27','Periksa sampel'),(924,43,'MALAM','23.30-00.00','2022-01-27','Tertidur'),(925,43,'MALAM','22.30-23.00','2022-01-27','Periksa sampel'),(926,43,'MALAM','00.00-00.30','2022-01-28','Tertidur'),(927,43,'MALAM','00.30-01.00','2022-01-28','Tertidur'),(928,43,'MALAM','02.00-02.30','2022-01-28','Tidur'),(929,43,'MALAM','01.00-01.30','2022-01-28','Tidur'),(930,43,'MALAM','01.30-02.00','2022-01-28','Tidur'),(931,43,'MALAM','02.30-03.00','2022-01-28','Tidur'),(932,43,'MALAM','03.00-03.30','2022-01-28','Tidur'),(933,43,'MALAM','03.30-04.00','2022-01-28','Tidur'),(934,43,'MALAM','04.00-04.30','2022-01-28','Subuhan'),(935,43,'MALAM','04.30-05.00','2022-01-28','Bersih-bersih'),(936,43,'MALAM','05.00-05.30','2022-01-28','Pasien ambil hasil'),(937,46,'MALAM','21.00-21.30','2022-01-27','-Berdoa                                                         -operan Dinas dari dinas  sore kedinas malam            '),(938,46,'MALAM','21.30-22.00','2022-01-27','-Briefing pasien                                          '),(939,46,'MALAM','22.00-22.30','2022-01-27','-membuat  injeksi  dan memberi tendangan injeksi pada pasien '),(940,46,'MALAM','22.30-23.00','2022-01-27','-Melakukan skin test antibiotik pada pasien dan mempersiapkan  injeksi   pada pasien  ,hasil skin test(+)'),(941,46,'MALAM','23.00-23.30','2022-01-27','Mengukur tanda-tanda vital pasien '),(942,46,'MALAM','23.30-00.00','2022-01-27','-Membuat laporan dan buku Briefing'),(943,46,'MALAM','00.00-00.30','2022-01-28','Observasi  pasien demam '),(944,46,'MALAM','00.30-01.00','2022-01-28','Observasi pasien '),(945,46,'MALAM','01.00-01.30','2022-01-28','Memperbaiki  infus  macet '),(946,46,'MALAM','01.30-02.00','2022-01-28','Memberikan  injeksi  pasien sesuai  jadwalnya '),(947,46,'MALAM','02.00-02.30','2022-01-28','OBSERVASI PASIEN '),(948,46,'MALAM','02.30-03.00','2022-01-28','Mengganti  Cairan  infus  pasien '),(949,84,'MALAM','21.00-21.30','2022-01-27','-Berdoa\r\n-operan'),(950,46,'MALAM','03.00-03.30','2022-01-28','Observasi pasien '),(951,84,'MALAM','21.30-22.00','2022-01-27','Bersih bersih ringan'),(952,46,'MALAM','03.30-04.00','2022-01-28','Observasi pasien '),(953,46,'MALAM','04.00-04.30','2022-01-28','Ibadah '),(954,84,'MALAM','22.00-22.30','2022-01-27','Membuat injeksi'),(955,84,'MALAM','22.30-23.00','2022-01-27','obs ke kamar pasien'),(956,46,'MALAM','04.30-05.00','2022-01-28','Persiapan pembagian  obat  oral kepasien '),(957,84,'MALAM','23.00-23.30','2022-01-27','Melakukan injeksi kpd pasien sesuai jadwal injeksi'),(958,35,'MALAM','21.00-21.30','2022-01-27','Aplusan'),(959,35,'MALAM','21.30-22.00','2022-01-27','Menulis askeb'),(960,35,'MALAM','22.00-22.30','2022-01-27','Menyiapkan injeksi'),(961,84,'MALAM','23.30-00.00','2022-01-27','Mengukur TTV pasien'),(962,35,'MALAM','22.30-23.00','2022-01-27','Menyiapkan injeksi'),(963,84,'MALAM','00.00-00.30','2022-01-28','Melakukan skin test antibiotik'),(964,35,'MALAM','23.00-23.30','2022-01-27','Memberikan obat untuk pasien'),(965,84,'MALAM','00.30-01.00','2022-01-28','Observasi pasien demam'),(966,35,'MALAM','23.30-00.00','2022-01-27','Mengganti infus habis'),(967,35,'MALAM','00.00-00.30','2022-01-28','Istirahat'),(968,35,'MALAM','00.30-01.00','2022-01-28','Istirahat'),(969,46,'MALAM','05.00-05.30','2022-01-28','Pengukuran  tanda-tanda vital  dan keadaan umum  pasien \r\n'),(970,35,'MALAM','01.00-01.30','2022-01-28','Istirahat'),(971,35,'MALAM','01.30-02.00','2022-01-28','Istirahat'),(972,35,'MALAM','02.00-02.30','2022-01-28','Istirahat'),(973,35,'MALAM','02.30-03.00','2022-01-28','Membenarkan infus macet'),(974,35,'MALAM','03.00-03.30','2022-01-28','Istirahat'),(975,35,'MALAM','03.30-04.00','2022-01-28','Istirahat'),(976,35,'MALAM','04.30-05.00','2022-01-28','Istirahat'),(977,35,'MALAM','05.00-05.30','2022-01-28','Istirahat'),(978,35,'MALAM','04.00-04.30','2022-01-28','Istirahat'),(979,35,'MALAM','05.30-06.00','2022-01-28','Istirahat'),(980,46,'MALAM','05.30-06.00','2022-01-28','Mengisi tanda-tanda vital dan Keluhan  px ke buku laporan dan membuat  Askep '),(981,35,'MALAM','06.00-06.30','2022-01-28','Memberikan obat dan ttv pasien'),(982,35,'MALAM','06.30-07.00','2022-01-28','Aplusan'),(983,46,'MALAM','06.00-06.30','2022-01-28','Memandikan  bayi'),(984,46,'MALAM','06.30-07.00','2022-01-28','Menutup  buku laporan  dan bersih-bersih  ruangan  .'),(985,84,'MALAM','01.00-01.30','2022-01-28','Observasi pasien'),(986,84,'MALAM','06.30-07.00','2022-01-28','Operan'),(987,74,'MALAM','22.30-23.00','2022-01-27','Istirahat tidur'),(988,74,'MALAM','06.00-06.30','2022-01-28','Bersih-bersih UGD'),(989,74,'MALAM','06.30-07.00','2022-01-28','Aplusan dinas malam ke pagi'),(990,84,'MALAM','01.30-02.00','2022-01-28','Membuat laporan pasien bayi dan anak'),(991,84,'MALAM','02.00-02.30','2022-01-28','Membuat asuhan keperawatan pasien'),(992,84,'MALAM','02.30-03.00','2022-01-28','Memberikan obat kepada pasen sesuai jadwal'),(993,84,'MALAM','03.00-03.30','2022-01-28','Mengganti cairan infus pasien'),(994,84,'MALAM','03.30-04.00','2022-01-28','Membaca laporan dan askep pasien anak dan bayi'),(995,84,'MALAM','04.00-04.30','2022-01-28','Mengecek alkes obat askep dan laoran '),(996,84,'MALAM','05.00-05.30','2022-01-28','Berdoa'),(997,84,'MALAM','04.30-05.00','2022-01-28','Persiapan injeksi dan pemberian obat oral pasien'),(998,84,'MALAM','05.30-06.00','2022-01-28','Obs TTV pasien'),(999,84,'MALAM','06.00-06.30','2022-01-28','Memandikan bayi mengisi askep dan laoran'),(1000,75,'PAGI','07.00-07.30','2022-01-28','Aplusan dinas malam ke pagi\r\nBersih2 ruangan ugd\r\n'),(1001,29,'MALAM','21.00-21.30','2022-01-27','Aplusan'),(1002,29,'MALAM','21.30-22.00','2022-01-27','Pelayanan poli rajal'),(1003,75,'PAGI','07.30-08.00','2022-01-28','Buat amprahan BHP ugd\r\nBeres2 alat ugd\r\nIsi buku breafing'),(1004,29,'MALAM','22.00-22.30','2022-01-27','Rekap kasbon obat karyawan'),(1005,29,'MALAM','22.30-23.00','2022-01-27','Cek ulang harga obat ranap dan rajal'),(1006,75,'PAGI','11.00-11.30','2022-01-28','Istirahat makan siang'),(1007,29,'MALAM','23.00-23.30','2022-01-27','Aman'),(1008,29,'MALAM','23.30-00.00','2022-01-27','Aman'),(1009,29,'MALAM','00.00-00.30','2022-01-28','Aman'),(1010,29,'MALAM','00.30-01.00','2022-01-28','Aman'),(1011,29,'MALAM','01.00-01.30','2022-01-28','Aman'),(1012,29,'MALAM','01.30-02.00','2022-01-28','Aman'),(1013,75,'PAGI','13.30-14.00','2022-01-28','Aplusan dinas pagi ke siang'),(1014,29,'MALAM','02.00-02.30','2022-01-28','Aman'),(1015,29,'MALAM','02.30-03.00','2022-01-28','Aman'),(1016,29,'MALAM','03.00-03.30','2022-01-28','Aman'),(1017,29,'MALAM','03.30-04.00','2022-01-28','Aman'),(1018,29,'MALAM','04.00-04.30','2022-01-28','Aman'),(1019,29,'MALAM','04.30-05.00','2022-01-28','Aman'),(1020,29,'MALAM','05.00-05.30','2022-01-28','Aman'),(1021,29,'MALAM','05.30-06.00','2022-01-28','Aman, cek pendapatan malam'),(1022,29,'MALAM','06.00-06.30','2022-01-28','Rekap bookeping'),(1023,29,'MALAM','06.30-07.00','2022-01-28','Hitung uang, aplusan'),(1024,78,'PAGI','07.00-07.30','2022-01-28','Adsen');
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

-- Dump completed on 2022-01-28  8:43:50
