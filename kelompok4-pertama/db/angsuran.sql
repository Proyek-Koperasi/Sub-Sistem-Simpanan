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
-- Table structure for table `angsuran`
--

CREATE TABLE IF NOT EXISTS `angsuran` (
`id_angsuran` int(11) NOT NULL,
  `tgl_angsuran` date NOT NULL,
  `periode_angsuran` int(11) NOT NULL,
  `sisa_angsuran` int(11) NOT NULL,
  `sisa_pinjam` int(11) NOT NULL,
  `id_pinjaman` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `angsuran`
--

INSERT INTO `angsuran` (`id_angsuran`, `tgl_angsuran`, `periode_angsuran`, `sisa_angsuran`, `sisa_pinjam`, `id_pinjaman`) VALUES
(16, '2111-01-10', 1, 12, 123, 5),
(17, '2012-11-11', 1, 8, 12, 4),
(14, '2012-11-11', 1, 2, 3, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angsuran`
--
ALTER TABLE `angsuran`
 ADD PRIMARY KEY (`id_angsuran`), ADD KEY `id_pinjamnan` (`id_pinjaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `angsuran`
--
ALTER TABLE `angsuran`
MODIFY `id_angsuran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
