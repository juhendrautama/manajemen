-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 09:24 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `level`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', '1'),
(2, 'user', '202cb962ac59075b964b07152d234b70', '2'),
(3, 'pimpinan', '202cb962ac59075b964b07152d234b70', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alkes`
--

CREATE TABLE `tbl_alkes` (
  `id_alat` int(11) NOT NULL,
  `id_lab` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah` varchar(35) NOT NULL,
  `tgl_peroleh` date NOT NULL,
  `jenis_alat` varchar(35) NOT NULL,
  `ukuran` varchar(35) NOT NULL,
  `tipe_merk` varchar(50) NOT NULL,
  `keterangan_alkes` varchar(200) NOT NULL,
  `visible` enum('Y','N') DEFAULT NULL,
  `kode_pengadaan` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alkes`
--

INSERT INTO `tbl_alkes` (`id_alat`, `id_lab`, `nama`, `jumlah`, `tgl_peroleh`, `jenis_alat`, `ukuran`, `tipe_merk`, `keterangan_alkes`, `visible`, `kode_pengadaan`, `status`) VALUES
(50, 5, 'moause', '10', '2022-06-17', 'sperpark', '80 mm', 'logitec', '-', NULL, NULL, 'Sesuai'),
(52, 5, 'keyboard', '10', '2022-06-17', 'sperpark', '80 mm', 'logitec', '-', '', '1', 'Sesuai'),
(53, 5, 'hendra', '10', '2022-06-18', 'sperpark', '80 mm', 'logitec', '-', '', '2', 'Tidak Sesuai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bahan`
--

CREATE TABLE `tbl_bahan` (
  `id_bahan` int(11) NOT NULL,
  `id_lab` varchar(35) NOT NULL,
  `nama_bahan` varchar(35) NOT NULL,
  `merk` varchar(35) NOT NULL,
  `stok_awal` varchar(35) NOT NULL,
  `satuan` varchar(35) NOT NULL,
  `visible` enum('Y','N') DEFAULT NULL,
  `kode_pengadaan` varchar(100) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bahan`
--

INSERT INTO `tbl_bahan` (`id_bahan`, `id_lab`, `nama_bahan`, `merk`, `stok_awal`, `satuan`, `visible`, `kode_pengadaan`, `tgl`, `status`) VALUES
(30, '5', 'mause', 'logitec', '10', 'Pcs', 'Y', '1', '2022-06-17', 'Sesuai'),
(34, '5', 'tes', 'logitec', '20', 'Pcs', 'Y', '2', '2022-06-17', 'Tidak Sesuai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hasil_karya`
--

CREATE TABLE `tbl_hasil_karya` (
  `id_karya` int(5) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `pembuat` varchar(35) NOT NULL,
  `id_lab` int(5) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` int(5) NOT NULL,
  `nama_jadwal` varchar(35) NOT NULL,
  `id_lab` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `id_laboran` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kegiatan`
--

CREATE TABLE `tbl_kegiatan` (
  `id_kegiatan` int(5) NOT NULL,
  `nama_kegiatan` varchar(35) NOT NULL,
  `id_lab` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `ket` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lab`
--

CREATE TABLE `tbl_lab` (
  `id_lab` int(5) NOT NULL,
  `nama_lab` varchar(35) NOT NULL,
  `kuota` int(11) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `visible` enum('Y','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lab`
--

INSERT INTO `tbl_lab` (`id_lab`, `nama_lab`, `kuota`, `keterangan`, `visible`) VALUES
(5, 'Ruang Labor Komputer', 36, 'Ruangan Laboratorium Khusus Komputer', 'Y'),
(7, 'Ruang Lab Fitokimia dan  Fisika Far', 24, 'Ruang Khusus Untuk Melakukan Analisa Fitokimia ', 'Y'),
(8, 'Ruang Lab Kimia Kualitatif dan Kuan', 72, 'Laboratorium Khusus Untuk Melakukan Analisa Kimia Kualitatif dan Kuantitatif', 'Y'),
(9, 'Ruang Lab Tekfar', 24, 'Laboratorium Khusus Untuk Analisa Teknologi Farmasi', 'Y'),
(10, 'Ruang Lab Farmakognosi', 56, 'Laboratorium Khusus Untuk Melakukan Analisa Farmakognosi', 'Y'),
(11, 'Ruang Lab Farmakologi', 56, 'jwlojusoJEWQJS', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laboran`
--

CREATE TABLE `tbl_laboran` (
  `id_laboran` int(5) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `jk` enum('Laki-laki','Perempuan','','') NOT NULL,
  `alamat` tinytext NOT NULL,
  `no_telp` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_musnah`
--

CREATE TABLE `tbl_musnah` (
  `id_musnah` int(11) NOT NULL,
  `id_lab` int(11) DEFAULT NULL,
  `id_alat` int(11) NOT NULL,
  `tgl_musnah` date NOT NULL,
  `jumlah_musnah` varchar(35) NOT NULL,
  `sebab_musnah` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_musnah`
--

INSERT INTO `tbl_musnah` (`id_musnah`, `id_lab`, `id_alat`, `tgl_musnah`, `jumlah_musnah`, `sebab_musnah`) VALUES
(6, 5, 52, '2022-06-18', '9', 'hilang');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemakaian_bahan`
--

CREATE TABLE `tbl_pemakaian_bahan` (
  `id_pemakaian` int(10) NOT NULL,
  `id_lab` int(10) DEFAULT NULL,
  `id_bahan` int(10) DEFAULT NULL,
  `tgl_pemakaian` date DEFAULT NULL,
  `stok_awal_bahan` varchar(5) DEFAULT NULL,
  `jumlah_pakai` varchar(5) DEFAULT NULL,
  `visible` enum('Y','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pemakaian_bahan`
--

INSERT INTO `tbl_pemakaian_bahan` (`id_pemakaian`, `id_lab`, `id_bahan`, `tgl_pemakaian`, `stok_awal_bahan`, `jumlah_pakai`, `visible`) VALUES
(17, 5, 30, '2022-06-18', '10', '2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peminjaman`
--

CREATE TABLE `tbl_peminjaman` (
  `id_peminjaman` int(5) NOT NULL,
  `id_alat` int(5) NOT NULL,
  `id_lab` int(5) NOT NULL,
  `jumlah` varchar(35) NOT NULL,
  `tgl` date NOT NULL,
  `status` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_peminjaman`
--

INSERT INTO `tbl_peminjaman` (`id_peminjaman`, `id_alat`, `id_lab`, `jumlah`, `tgl`, `status`) VALUES
(17, 52, 5, '5', '2022-06-17', 'Sesuai'),
(18, 52, 5, '2', '2022-06-17', 'Sesuai'),
(19, 52, 5, '1', '2022-06-18', 'Pemeriksaan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengadaan`
--

CREATE TABLE `tbl_pengadaan` (
  `id_pengadaan` int(11) NOT NULL,
  `id_alat` int(10) NOT NULL,
  `id_bahan` int(10) DEFAULT NULL,
  `jenis_pengadaan` enum('Alat','Bahan') DEFAULT NULL,
  `jumlah_pengadaan` varchar(35) NOT NULL,
  `tgl_pengadaan` date NOT NULL,
  `keterangan_pengadaan` varchar(200) DEFAULT NULL,
  `status_pengadaan` enum('Sesuai','Tidak Sesuai','Pemeriksaan') DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengadaan`
--

INSERT INTO `tbl_pengadaan` (`id_pengadaan`, `id_alat`, `id_bahan`, `jenis_pengadaan`, `jumlah_pengadaan`, `tgl_pengadaan`, `keterangan_pengadaan`, `status_pengadaan`, `kategori`) VALUES
(77, 52, NULL, 'Alat', '10', '2022-06-17', '-', 'Sesuai', 'baru'),
(78, 0, 30, 'Bahan', '10', '2022-06-17', '-', 'Sesuai', 'lama'),
(79, 50, NULL, 'Alat', '10', '2022-06-18', '-', 'Sesuai', 'lama'),
(80, 53, NULL, 'Alat', '10', '2022-06-18', '-', 'Tidak Sesuai', 'baru'),
(81, 0, 34, 'Bahan', '20', '2022-06-18', '-', 'Tidak Sesuai', 'baru'),
(82, 0, 30, 'Bahan', '10', '2022-06-18', '-', 'Sesuai', 'lama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_alkes`
--
ALTER TABLE `tbl_alkes`
  ADD PRIMARY KEY (`id_alat`),
  ADD KEY `id_lab` (`id_lab`);

--
-- Indexes for table `tbl_bahan`
--
ALTER TABLE `tbl_bahan`
  ADD PRIMARY KEY (`id_bahan`),
  ADD KEY `id_lab` (`id_lab`),
  ADD KEY `id_lab_2` (`id_lab`);

--
-- Indexes for table `tbl_hasil_karya`
--
ALTER TABLE `tbl_hasil_karya`
  ADD PRIMARY KEY (`id_karya`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `tbl_lab`
--
ALTER TABLE `tbl_lab`
  ADD PRIMARY KEY (`id_lab`),
  ADD KEY `keterangan` (`keterangan`),
  ADD KEY `keterangan_2` (`keterangan`);

--
-- Indexes for table `tbl_laboran`
--
ALTER TABLE `tbl_laboran`
  ADD PRIMARY KEY (`id_laboran`);

--
-- Indexes for table `tbl_musnah`
--
ALTER TABLE `tbl_musnah`
  ADD PRIMARY KEY (`id_musnah`),
  ADD KEY `id_alat` (`id_alat`);

--
-- Indexes for table `tbl_pemakaian_bahan`
--
ALTER TABLE `tbl_pemakaian_bahan`
  ADD PRIMARY KEY (`id_pemakaian`);

--
-- Indexes for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `tbl_pengadaan`
--
ALTER TABLE `tbl_pengadaan`
  ADD PRIMARY KEY (`id_pengadaan`),
  ADD KEY `id_bahan` (`id_alat`,`jumlah_pengadaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_alkes`
--
ALTER TABLE `tbl_alkes`
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_bahan`
--
ALTER TABLE `tbl_bahan`
  MODIFY `id_bahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_hasil_karya`
--
ALTER TABLE `tbl_hasil_karya`
  MODIFY `id_karya` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_jadwal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  MODIFY `id_kegiatan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_lab`
--
ALTER TABLE `tbl_lab`
  MODIFY `id_lab` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_laboran`
--
ALTER TABLE `tbl_laboran`
  MODIFY `id_laboran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_musnah`
--
ALTER TABLE `tbl_musnah`
  MODIFY `id_musnah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_pemakaian_bahan`
--
ALTER TABLE `tbl_pemakaian_bahan`
  MODIFY `id_pemakaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  MODIFY `id_peminjaman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_pengadaan`
--
ALTER TABLE `tbl_pengadaan`
  MODIFY `id_pengadaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
