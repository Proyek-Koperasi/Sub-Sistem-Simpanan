-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2016 at 02:32 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `tbsimpan`
--

INSERT INTO `tbsimpan` (`id_transaksi`, `id_anggota`, `jml_simpan`, `jml_ambil`, `total`, `tgl_transaksi`, `kd_jenis_simpan`, `gambar`) VALUES
(61, 9, 8000, 0, 8000, '2016-11-23', 1, 'code.JPG'),
(58, 10, 20000, 0, 20000, '2016-11-23', 1, '1.JPG'),
(57, 9, 1000, 0, 1000, '2016-11-23', 1, '1.JPG'),
(56, 6, 89000, 0, 89000, '2016-11-23', 1, '1.JPG'),
(55, 9, 5000, 0, 5000, '2016-11-23', 1, 'tt.JPG'),
(59, 10, 9000, 0, 9000, '2016-11-23', 1, 'ff.JPG'),
(54, 6, 10000, 0, 100000, '2016-11-23', 3, 'code.JPG'),
(60, 9, 9000, 0, 9000, '2016-11-23', 1, '15049920_1308114739233134_610519827_n.jpg'),
(64, 10, 88, 8, 8, '2016-11-23', 0, '1.JPG'),
(65, 10, 88, 8, 8, '2016-11-23', 0, '1.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbsimpan`
--
ALTER TABLE `tbsimpan`
 ADD PRIMARY KEY (`id_transaksi`), ADD KEY `id_anggota` (`id_anggota`), ADD KEY `kd_jenis_simpan` (`kd_jenis_simpan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbsimpan`
--
ALTER TABLE `tbsimpan`
MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
