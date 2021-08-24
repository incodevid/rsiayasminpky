-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Agu 2021 pada 07.30
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_rsiayasminpky`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akun`
--

CREATE TABLE IF NOT EXISTS `tb_akun` (
`id_akun` int(50) NOT NULL,
  `nama_akun` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nik` varchar(100) DEFAULT NULL,
  `departemen` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level_akses` enum('super','admin') DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_akun`
--

INSERT INTO `tb_akun` (`id_akun`, `nama_akun`, `jenis_kelamin`, `email`, `nik`, `departemen`, `username`, `password`, `level_akses`) VALUES
(1, 'Benny Sarmoko', 'Laki-Laki', 'benny.sarmoko27@gmail.com', '2103187', 'IT', 'benny0852', '123', 'super'),
(2, 'Kristanto', 'Laki-Laki', 'kristanto@gmail.com', '2019001', 'Pemasaran dan Humas', 'kris123', '123', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_album`
--

CREATE TABLE IF NOT EXISTS `tb_album` (
`id_album` int(50) NOT NULL,
  `nama_album` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_artikel`
--

CREATE TABLE IF NOT EXISTS `tb_artikel` (
`id_artikel` int(50) NOT NULL,
  `judul_artikel` varchar(100) DEFAULT NULL,
  `isi_artikel` text,
  `tgl_upload` datetime DEFAULT NULL,
  `foto_artikel_cover` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE IF NOT EXISTS `tb_berita` (
`id_berita` int(50) NOT NULL,
  `judul_berita` varchar(100) DEFAULT NULL,
  `isi_berita` text,
  `tgl_upload` datetime DEFAULT NULL,
  `foto_berita_cover` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_besuk`
--

CREATE TABLE IF NOT EXISTS `tb_besuk` (
`id_besuk` int(50) NOT NULL,
  `hari_besuk` varchar(100) DEFAULT NULL,
  `jam_besuk` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokter_kami`
--

CREATE TABLE IF NOT EXISTS `tb_dokter_kami` (
`id_dokter_kami` int(50) NOT NULL,
  `id_kategori_dokter` int(50) DEFAULT NULL,
  `nama_dokter` varchar(100) DEFAULT NULL,
  `foto_dokter` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galeri`
--

CREATE TABLE IF NOT EXISTS `tb_galeri` (
`id_galeri` int(50) NOT NULL,
  `id_album` int(50) DEFAULT NULL,
  `nama_foto` varchar(100) DEFAULT NULL,
  `file_foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_dokter`
--

CREATE TABLE IF NOT EXISTS `tb_kategori_dokter` (
`id_kategori_dokter` int(50) NOT NULL,
  `nama_kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori_dokter`
--

INSERT INTO `tb_kategori_dokter` (`id_kategori_dokter`, `nama_kategori`) VALUES
(1, 'Dokter Gigi'),
(2, 'Dokter Anak'),
(3, 'Dokter Umum'),
(4, 'Dokter Kulit dan Kelamin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_layanan`
--

CREATE TABLE IF NOT EXISTS `tb_kategori_layanan` (
`id_kategori_layanan` int(50) NOT NULL,
  `nama_kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kerjasama`
--

CREATE TABLE IF NOT EXISTS `tb_kerjasama` (
`id_kerjasama` int(50) NOT NULL,
  `text_kerjasama` text,
  `foto_cover` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kontak`
--

CREATE TABLE IF NOT EXISTS `tb_kontak` (
`id_kontak` int(50) NOT NULL,
  `alamat` text,
  `email` varchar(100) DEFAULT NULL,
  `fax_telp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_layanan`
--

CREATE TABLE IF NOT EXISTS `tb_layanan` (
`id_layanan` int(50) NOT NULL,
  `id_kategori_layanan` int(50) DEFAULT NULL,
  `nama_layanan` varchar(100) DEFAULT NULL,
  `deskripsi_layanan` text,
  `foto_layanan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_medsos`
--

CREATE TABLE IF NOT EXISTS `tb_medsos` (
`id_medsos` int(50) NOT NULL,
  `nama_medsos` varchar(100) DEFAULT NULL,
  `link_medsos` varchar(100) DEFAULT NULL,
  `icon_medsos` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_misi`
--

CREATE TABLE IF NOT EXISTS `tb_misi` (
`id_misi` int(50) NOT NULL,
  `text_misi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profil_rs`
--

CREATE TABLE IF NOT EXISTS `tb_profil_rs` (
`id_profil_rs` int(50) NOT NULL,
  `text_profil_rs` text,
  `foto_cover` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sejarah`
--

CREATE TABLE IF NOT EXISTS `tb_sejarah` (
`id_sejarah` int(50) NOT NULL,
  `text_sejarah` text,
  `foto_cover` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_slide`
--

CREATE TABLE IF NOT EXISTS `tb_slide` (
`id_slide` int(50) NOT NULL,
  `foto_slide` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_struktur`
--

CREATE TABLE IF NOT EXISTS `tb_struktur` (
`id_struktur` int(50) NOT NULL,
  `foto_struktur` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_video_profil`
--

CREATE TABLE IF NOT EXISTS `tb_video_profil` (
`id_video_profil` int(50) NOT NULL,
  `judul_video` varchar(100) DEFAULT NULL,
  `link_video` varchar(100) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_visi`
--

CREATE TABLE IF NOT EXISTS `tb_visi` (
`id_visi` int(50) NOT NULL,
  `text_visi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
MODIFY `id_akun` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_album`
--
ALTER TABLE `tb_album`
MODIFY `id_album` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
MODIFY `id_artikel` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
MODIFY `id_berita` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_besuk`
--
ALTER TABLE `tb_besuk`
MODIFY `id_besuk` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_dokter_kami`
--
ALTER TABLE `tb_dokter_kami`
MODIFY `id_dokter_kami` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
MODIFY `id_galeri` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_kategori_dokter`
--
ALTER TABLE `tb_kategori_dokter`
MODIFY `id_kategori_dokter` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_kategori_layanan`
--
ALTER TABLE `tb_kategori_layanan`
MODIFY `id_kategori_layanan` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_kerjasama`
--
ALTER TABLE `tb_kerjasama`
MODIFY `id_kerjasama` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
MODIFY `id_kontak` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
MODIFY `id_layanan` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_medsos`
--
ALTER TABLE `tb_medsos`
MODIFY `id_medsos` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_misi`
--
ALTER TABLE `tb_misi`
MODIFY `id_misi` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_profil_rs`
--
ALTER TABLE `tb_profil_rs`
MODIFY `id_profil_rs` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_sejarah`
--
ALTER TABLE `tb_sejarah`
MODIFY `id_sejarah` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_slide`
--
ALTER TABLE `tb_slide`
MODIFY `id_slide` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_struktur`
--
ALTER TABLE `tb_struktur`
MODIFY `id_struktur` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_video_profil`
--
ALTER TABLE `tb_video_profil`
MODIFY `id_video_profil` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_visi`
--
ALTER TABLE `tb_visi`
MODIFY `id_visi` int(50) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
