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
-- Table structure for table `jenis_simpan`
--

CREATE TABLE IF NOT EXISTS `jenis_simpan` (
`kd_jenis_simpan` int(11) NOT NULL,
  `jenis_simpan` varchar(20) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `jenis_simpan`
--

INSERT INTO `jenis_simpan` (`kd_jenis_simpan`, `jenis_simpan`) VALUES
(1, 'simpanan wajib'),
(3, 'simpanan pokok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_simpan`
--
ALTER TABLE `jenis_simpan`
 ADD PRIMARY KEY (`kd_jenis_simpan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_simpan`
--
ALTER TABLE `jenis_simpan`
MODIFY `kd_jenis_simpan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
