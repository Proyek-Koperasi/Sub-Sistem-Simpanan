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
-- Table structure for table `shu`
--

CREATE TABLE IF NOT EXISTS `shu` (
`id_shu` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_pinjaman` int(11) NOT NULL,
  `total_bunga` int(11) NOT NULL,
  `saldo_bunga` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `shu`
--

INSERT INTO `shu` (`id_shu`, `id_anggota`, `id_pinjaman`, `total_bunga`, `saldo_bunga`) VALUES
(2, 5, 5, 3, 25),
(7, 0, 0, 1223333, 4444),
(8, 5, 5, 120004, 110005),
(6, 5, 4, 12, 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shu`
--
ALTER TABLE `shu`
 ADD PRIMARY KEY (`id_shu`), ADD KEY `id_anggota` (`id_anggota`,`id_pinjaman`), ADD KEY `id_pinjaman` (`id_pinjaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shu`
--
ALTER TABLE `shu`
MODIFY `id_shu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
