-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2022 at 02:49 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_inventaris`
--
CREATE DATABASE IF NOT EXISTS `db_inventaris` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_inventaris`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alkes`
--

CREATE TABLE IF NOT EXISTS `tbl_alkes` (
  `id_alat` int(11) NOT NULL AUTO_INCREMENT,
  `id_lab` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah` varchar(35) NOT NULL,
  `tgl_peroleh` date NOT NULL,
  `jenis_alat` varchar(35) NOT NULL,
  `ukuran` varchar(35) NOT NULL,
  `tipe_merk` varchar(50) NOT NULL,
  `keterangan_alkes` varchar(200) NOT NULL,
  `visible` enum('Y','N') DEFAULT NULL,
  PRIMARY KEY (`id_alat`),
  KEY `id_lab` (`id_lab`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbl_alkes`
--

INSERT INTO `tbl_alkes` (`id_alat`, `id_lab`, `nama`, `jumlah`, `tgl_peroleh`, `jenis_alat`, `ukuran`, `tipe_merk`, `keterangan_alkes`, `visible`) VALUES
(1, 4, 'Bejana', '14', '2021-09-10', 'Alat Ukur', '200', 'Canghong', 'Barang mudah pecah', 'Y'),
(2, 4, 'Pengukur Suhu', '25', '2021-09-09', 'Ringan', '200', 'Changhong', 'Alat ini mengandung unsur listrik yang tinggi', 'Y'),
(3, 4, 'Pengukur Radiasi1', '101', '2010-01-31', 'Alat Suhu1', '2001', 'Belleza1', 'Jangan dipegang dengan tangan kosong1', 'N'),
(4, 12, 'Jarum Inokulum', '30', '2015-12-04', 'Kawat ', '12 cm', 'Ose', 'Barang Mudah Patah', 'Y'),
(6, 12, 'Tabung Reaksi', '20', '2015-12-04', 'Kaca', '12 ml', 'Test Tube', 'Barang Mudah Pecah', 'Y'),
(7, 11, 'Accu Check', '20', '2016-12-20', 'Plastik', '160 mm', 'Mitrakulvita', 'Barang Jangan Dibanting', 'Y'),
(8, 11, 'Penjepit Anatomi', '30', '2017-12-05', 'Steinless Stell', '14 cm', 'Pinset', 'Barang Mudah Patah', 'Y'),
(9, 11, 'Baki', '21', '2020-07-07', 'Plastik', '18 x 22 cm', 'alat farmasi', 'Barang Mudah Pecah dan Meleleh Jika Terkena Panas', 'Y'),
(10, 10, 'Labu Erlenmeyer', '21', '2015-12-04', 'Kaca', '20 ml', 'alatfarmasi', 'Barang Mudah Pecah', 'Y'),
(11, 10, 'Cover Glass', '21', '2020-12-04', 'Stainlies', '15 cm', 'Kaki Tiga', 'Kaki Barang Mudah Patah', 'Y'),
(12, 9, 'Hand Blender', '12', '2015-12-04', 'Kaca dan Plastik', 'P 52 Cm', 'Philips', 'Barang Menggunakan Arus Listrik', 'Y'),
(13, 9, 'Neraca Analistis', '12', '2015-12-04', 'Metal', '12 x 24 cm', 'Klazz', 'Barang Mudah Rusak', 'Y'),
(14, 8, 'Corong', '24', '0205-12-04', 'Kaca Tahan Panas', '10 x 20 cm', 'Laqua', 'Barang Mudah Rusak', 'Y'),
(15, 8, 'Gelas Ukur', '23', '2013-11-11', 'Plastik', '10 ml', 'Klazz', 'Barang Mudah Pecah', 'Y'),
(16, 5, 'Monitor', '24', '2012-12-01', 'Monitor', '14 Inch', 'Lg', 'Monitor PC', 'Y'),
(17, 5, 'Central Processing Unit', '24', '2011-11-01', 'Cpu Komputer', '30 cm', 'Lg', 'Brang Elektronik', 'Y'),
(18, 12, 'Neraca', '3', '2022-12-12', 'Kaca', '', 'Khog u', 'Mudah Pecah', NULL),
(19, 7, 'Belerang', '2', '2021-12-12', 'Bubuk', 'Kilogram', 'Padi Emas', 'Jangan Terkena Tangan', NULL),
(20, 5, 'Mouse', '10', '2020-11-10', 'Plastik', '3', 'Inch', 'hhahhaha', NULL),
(21, 5, 'huihiuh', '66', '1111-11-11', 'ijiolo', 'nkjibiu', 'jninoiouh', 'uiiuhuiguig', NULL),
(22, 5, 'Keyborar', '12', '1111-11-11', 'Steinless Stell', 'ao-qowq', 'spqiksqoks', 'osopjsopjsopqjs', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bahan`
--

CREATE TABLE IF NOT EXISTS `tbl_bahan` (
  `id_bahan` int(11) NOT NULL AUTO_INCREMENT,
  `id_lab` varchar(35) NOT NULL,
  `nama_bahan` varchar(35) NOT NULL,
  `merk` varchar(35) NOT NULL,
  `stok_awal` varchar(35) NOT NULL,
  `satuan` varchar(35) NOT NULL,
  `visible` enum('Y','N') DEFAULT NULL,
  PRIMARY KEY (`id_bahan`),
  KEY `id_lab` (`id_lab`),
  KEY `id_lab_2` (`id_lab`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_bahan`
--

INSERT INTO `tbl_bahan` (`id_bahan`, `id_lab`, `nama_bahan`, `merk`, `stok_awal`, `satuan`, `visible`) VALUES
(1, '4', 'Mesiu', 'Canghong', '40', 'Gram', 'Y'),
(2, '4', 'Garam', 'Tiga Bola', '63', 'Pcs', 'Y'),
(3, '12', 'Fruktosa', 'Fruktosa', '100', 'Gram', 'Y'),
(4, '12', 'Glucosum', 'Glucosum', '100', 'Gram', 'Y'),
(5, '9', 'Gentamycin', 'Gentamycin', '300', 'Gram', 'Y'),
(7, 'kllklk', 'jbkbjbj', 'knkjbkjb', 'nnjkb', 'kkjjb', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hasil_karya`
--

CREATE TABLE IF NOT EXISTS `tbl_hasil_karya` (
  `id_karya` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `pembuat` varchar(35) NOT NULL,
  `id_lab` int(5) NOT NULL,
  `tgl_input` date NOT NULL,
  PRIMARY KEY (`id_karya`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_hasil_karya`
--

INSERT INTO `tbl_hasil_karya` (`id_karya`, `nama`, `pembuat`, `id_lab`, `tgl_input`) VALUES
(2, 'Penurun Berat Badan', 'Mawah', 1, '2022-05-11'),
(3, 'Obat Sakit Batuk', 'Marwah', 10, '2022-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE IF NOT EXISTS `tbl_jadwal` (
  `id_jadwal` int(5) NOT NULL AUTO_INCREMENT,
  `nama_jadwal` varchar(35) NOT NULL,
  `id_lab` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `id_laboran` int(5) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `nama_jadwal`, `id_lab`, `tgl`, `jam`, `id_laboran`) VALUES
(1, 'MM', 9, '2022-01-01', '00:13:00', 1),
(2, 'Kimia', 10, '2022-05-11', '12:00:00', 1),
(3, 'Farmasi', 6, '2021-11-11', '00:12:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kegiatan`
--

CREATE TABLE IF NOT EXISTS `tbl_kegiatan` (
  `id_kegiatan` int(5) NOT NULL AUTO_INCREMENT,
  `nama_kegiatan` varchar(35) NOT NULL,
  `id_lab` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `ket` varchar(35) NOT NULL,
  PRIMARY KEY (`id_kegiatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_kegiatan`
--

INSERT INTO `tbl_kegiatan` (`id_kegiatan`, `nama_kegiatan`, `id_lab`, `tgl`, `ket`) VALUES
(1, 'Seminar', 4, '2013-01-02', 'jjdidoidohfhf'),
(2, 'Jurnal Kimia', 7, '0000-00-00', 'Lomba');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lab`
--

CREATE TABLE IF NOT EXISTS `tbl_lab` (
  `id_lab` int(5) NOT NULL AUTO_INCREMENT,
  `nama_lab` varchar(35) NOT NULL,
  `kuota` int(11) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `visible` enum('Y','N') DEFAULT NULL,
  PRIMARY KEY (`id_lab`),
  KEY `keterangan` (`keterangan`),
  KEY `keterangan_2` (`keterangan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_lab`
--

INSERT INTO `tbl_lab` (`id_lab`, `nama_lab`, `kuota`, `keterangan`, `visible`) VALUES
(5, 'Ruang Lab Komputer', 36, 'Ruangan Laboratorium Khusus Komputer', 'Y'),
(6, 'Ruang Lab Farmasetika', 72, 'Ruang Lab Khusus Peracikan Sedian Farmasi', 'Y'),
(7, 'Ruang Lab Fitokimia dan  Fisika Far', 24, 'Ruang Khusus Untuk Melakukan Analisa Fitokimia ', 'Y'),
(8, 'Ruang Lab Kimia Kualitatif dan Kuan', 72, 'Laboratorium Khusus Untuk Melakukan Analisa Kimia Kualitatif dan Kuantitatif', 'Y'),
(9, 'Ruang Lab Tekfar', 24, 'Laboratorium Khusus Untuk Analisa Teknologi Farmasi', 'Y'),
(10, 'Ruang Lab Farmakognosi', 56, 'Laboratorium Khusus Untuk Melakukan Analisa Farmakognosi', 'Y'),
(11, 'Ruang Lab Farmakologi', 56, 'jwlojusoJEWQJS', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laboran`
--

CREATE TABLE IF NOT EXISTS `tbl_laboran` (
  `id_laboran` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `jk` enum('Laki-laki','Perempuan','','') NOT NULL,
  `alamat` tinytext NOT NULL,
  `no_telp` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  PRIMARY KEY (`id_laboran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_laboran`
--

INSERT INTO `tbl_laboran` (`id_laboran`, `nama`, `jk`, `alamat`, `no_telp`, `semester`) VALUES
(1, 'Rama Sumbarang', 'Laki-laki', 'Jambi', '0299083073', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_musnah`
--

CREATE TABLE IF NOT EXISTS `tbl_musnah` (
  `id_musnah` int(11) NOT NULL AUTO_INCREMENT,
  `id_lab` int(11) DEFAULT NULL,
  `id_alat` int(11) NOT NULL,
  `tgl_musnah` date NOT NULL,
  `jumlah_musnah` varchar(35) NOT NULL,
  `sebab_musnah` varchar(35) NOT NULL,
  PRIMARY KEY (`id_musnah`),
  KEY `id_alat` (`id_alat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_musnah`
--

INSERT INTO `tbl_musnah` (`id_musnah`, `id_lab`, `id_alat`, `tgl_musnah`, `jumlah_musnah`, `sebab_musnah`) VALUES
(2, 4, 2, '2021-11-17', '12', 'Terbanting'),
(3, 5, 17, '2022-01-02', '2', 'Rusak');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemakaian_bahan`
--

CREATE TABLE IF NOT EXISTS `tbl_pemakaian_bahan` (
  `id_pemakaian` int(10) NOT NULL AUTO_INCREMENT,
  `id_lab` int(10) DEFAULT NULL,
  `id_bahan` int(10) DEFAULT NULL,
  `tgl_pemakaian` date DEFAULT NULL,
  `stok_awal_bahan` varchar(5) DEFAULT NULL,
  `jumlah_pakai` varchar(5) DEFAULT NULL,
  `visible` enum('Y','N') DEFAULT NULL,
  PRIMARY KEY (`id_pemakaian`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_pemakaian_bahan`
--

INSERT INTO `tbl_pemakaian_bahan` (`id_pemakaian`, `id_lab`, `id_bahan`, `tgl_pemakaian`, `stok_awal_bahan`, `jumlah_pakai`, `visible`) VALUES
(5, 8, 3, '2020-12-12', NULL, '12', NULL),
(6, 10, 3, '2020-12-12', NULL, '12', NULL),
(7, 9, 2, '2022-12-12', NULL, '10', NULL),
(8, 9, 2, '2022-12-12', NULL, '10', NULL),
(9, 10, 3, '2022-12-12', NULL, '12', NULL),
(10, 9, 9, '2020-12-12', '-10', '22', NULL),
(11, 5, 5, '2022-12-12', '-10', '22', NULL),
(12, 5, 4, '2013-01-24', NULL, '34', NULL),
(13, 6, 6, '2013-01-30', '-10', '100', NULL),
(14, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peminjaman`
--

CREATE TABLE IF NOT EXISTS `tbl_peminjaman` (
  `id_peminjaman` int(5) NOT NULL AUTO_INCREMENT,
  `id_alat` int(5) NOT NULL,
  `id_lab` int(5) NOT NULL,
  `jumlah` varchar(35) NOT NULL,
  `tgl` date NOT NULL,
  `status` varchar(35) NOT NULL,
  PRIMARY KEY (`id_peminjaman`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_peminjaman`
--

INSERT INTO `tbl_peminjaman` (`id_peminjaman`, `id_alat`, `id_lab`, `jumlah`, `tgl`, `status`) VALUES
(1, 11, 10, '100', '2022-11-11', 'Belum Dikembalikan'),
(2, 15, 6, '11', '2022-11-11', 'Belum Dikembalikan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengadaan`
--

CREATE TABLE IF NOT EXISTS `tbl_pengadaan` (
  `id_pengadaan` int(11) NOT NULL AUTO_INCREMENT,
  `id_alat` int(10) NOT NULL,
  `id_bahan` int(10) DEFAULT NULL,
  `jenis_pengadaan` enum('Alat','Bahan') DEFAULT NULL,
  `jumlah_pengadaan` varchar(35) NOT NULL,
  `tgl_pengadaan` date NOT NULL,
  `keterangan_pengadaan` varchar(200) DEFAULT NULL,
  `status_pengadaan` enum('Sesuai','Tidak Sesuai','Pemeriksaan') DEFAULT NULL,
  PRIMARY KEY (`id_pengadaan`),
  KEY `id_bahan` (`id_alat`,`jumlah_pengadaan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_pengadaan`
--

INSERT INTO `tbl_pengadaan` (`id_pengadaan`, `id_alat`, `id_bahan`, `jenis_pengadaan`, `jumlah_pengadaan`, `tgl_pengadaan`, `keterangan_pengadaan`, `status_pengadaan`) VALUES
(2, 1, 0, 'Alat', '2', '2021-12-31', 'Kebutuhan Mendesak', 'Pemeriksaan'),
(3, 2, 0, 'Alat', '5', '2021-12-31', 'Kebutuhan Khusus', 'Sesuai'),
(4, 0, 2, 'Bahan', '23', '0003-12-04', 'ok2', 'Sesuai'),
(5, 0, 1, 'Bahan', '20', '2021-12-31', 'OK', 'Sesuai');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
