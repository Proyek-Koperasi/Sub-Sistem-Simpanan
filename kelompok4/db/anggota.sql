-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2016 at 02:31 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `jk`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_telp`, `username_anggota`, `password_anggota`) VALUES
(6, 'Nur Mufida', 'P', 'Malang', '2016-10-25', 'Jl Danau Kerinci, Malang ', '081111222333', 'nurmuf', '00d450d907549b34983b'),
(9, 'Fina Alfiatul J', 'P', 'Malang', '1900-08-17', 'Jl Senggani, Malang', '082123123456', 'finaaj', 'fcea920f7412b5da7be0'),
(10, 'Endyka Widyawati', 'P', 'Jakarta', '2015-01-01', 'Jl Semanggi Barat, Malang', '089123456789', 'endyka', 'fcea920f7412b5da7be0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
 ADD PRIMARY KEY (`id_anggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
