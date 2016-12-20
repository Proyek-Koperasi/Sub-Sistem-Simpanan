-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2016 at 12:25 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simpan_pinjam_kel4`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
`id_anggota` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `username_anggota` varchar(20) NOT NULL,
  `password_anggota` varchar(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `jk`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_telp`, `username_anggota`, `password_anggota`) VALUES
(6, 'Nur Mufida', 'P', 'Malang', '2016-10-25', 'Jl Danau Kerinci, Malang ', '081111222333', 'nurmuf', '00d450d907549b34983b'),
(9, 'Fina Alfiatul J', 'P', 'Malang', '1900-08-17', 'Jl Senggani, Malang', '082123123456', 'finaaj', 'fcea920f7412b5da7be0'),
(10, 'Endyka Widyawati', 'P', 'Jakarta', '2015-01-01', 'Jl Semanggi Barat, Malang', '089123456789', 'endyka', 'fcea920f7412b5da7be0');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_simpan`
--

CREATE TABLE IF NOT EXISTS `jenis_simpan` (
`kd_jenis_simpan` int(11) NOT NULL,
  `jenis_simpan` varchar(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_simpan`
--

INSERT INTO `jenis_simpan` (`kd_jenis_simpan`, `jenis_simpan`) VALUES
(1, 'simpanan wajib'),
(3, 'simpanan pokok');

-- --------------------------------------------------------

--
-- Table structure for table `tbsimpan`
--

CREATE TABLE IF NOT EXISTS `tbsimpan` (
`id_transaksi` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `jml_simpan` int(11) NOT NULL,
  `jml_ambil` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `kd_jenis_simpan` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsimpan`
--

INSERT INTO `tbsimpan` (`id_transaksi`, `id_anggota`, `jml_simpan`, `jml_ambil`, `total`, `tgl_transaksi`, `kd_jenis_simpan`, `gambar`) VALUES
(105, 9, 12000, 1100, 1000, '2016-11-29', 1, '13224037_876928692432930_1049323941_o.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
 ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `jenis_simpan`
--
ALTER TABLE `jenis_simpan`
 ADD PRIMARY KEY (`kd_jenis_simpan`);

--
-- Indexes for table `tbsimpan`
--
ALTER TABLE `tbsimpan`
 ADD PRIMARY KEY (`id_transaksi`), ADD KEY `id_anggota` (`id_anggota`), ADD KEY `kd_jenis_simpan` (`kd_jenis_simpan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `jenis_simpan`
--
ALTER TABLE `jenis_simpan`
MODIFY `kd_jenis_simpan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbsimpan`
--
ALTER TABLE `tbsimpan`
MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=106;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
