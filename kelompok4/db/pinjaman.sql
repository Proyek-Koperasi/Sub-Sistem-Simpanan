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
-- Table structure for table `pinjaman`
--

CREATE TABLE IF NOT EXISTS `pinjaman` (
`id_pinjaman` int(11) NOT NULL,
  `tgl_pinjaman` date NOT NULL,
  `jml_pinjaman` int(11) NOT NULL,
  `kali_angsur` int(11) NOT NULL,
  `jml_angsur` int(11) NOT NULL,
  `bunga` int(11) NOT NULL,
  `total_angsur` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pinjaman`
--

INSERT INTO `pinjaman` (`id_pinjaman`, `tgl_pinjaman`, `jml_pinjaman`, `kali_angsur`, `jml_angsur`, `bunga`, `total_angsur`) VALUES
(4, '2012-12-11', 1, 2, 3, 4, 53),
(5, '2016-10-27', 3, 43, 34, 3, 333);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
 ADD PRIMARY KEY (`id_pinjaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pinjaman`
--
ALTER TABLE `pinjaman`
MODIFY `id_pinjaman` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
