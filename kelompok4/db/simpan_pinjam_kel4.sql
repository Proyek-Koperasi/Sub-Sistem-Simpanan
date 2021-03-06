-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2016 at 02:24 PM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `status`) VALUES
(6, 'admin', 'admin', 'admin'),
(9, 'admin2', '89ccfac87d8d06db06bf', 'admin'),
(10, 'nurmufida', '123456', 'admin');

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

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`) VALUES
(1, '12324963_783102635148870_2025605501_n.jpg'),
(2, '12325056_1230544760295466_1039805038_n.jpg'),
(3, '12355195_1230542560295686_745878511_n.jpg'),
(4, 'IMG-20160616-WA0001.jpg'),
(5, 'IMG-20160616-WA0005.jpg'),
(6, 'cover1.jpg');

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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
 ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `angsuran`
--
ALTER TABLE `angsuran`
 ADD PRIMARY KEY (`id_angsuran`), ADD KEY `id_pinjamnan` (`id_pinjaman`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_simpan`
--
ALTER TABLE `jenis_simpan`
 ADD PRIMARY KEY (`kd_jenis_simpan`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
 ADD PRIMARY KEY (`id_pinjaman`);

--
-- Indexes for table `shu`
--
ALTER TABLE `shu`
 ADD PRIMARY KEY (`id_shu`), ADD KEY `id_anggota` (`id_anggota`,`id_pinjaman`), ADD KEY `id_pinjaman` (`id_pinjaman`);

--
-- Indexes for table `tbsimpan`
--
ALTER TABLE `tbsimpan`
 ADD PRIMARY KEY (`id_transaksi`), ADD KEY `id_anggota` (`id_anggota`), ADD KEY `kd_jenis_simpan` (`kd_jenis_simpan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `angsuran`
--
ALTER TABLE `angsuran`
MODIFY `id_angsuran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jenis_simpan`
--
ALTER TABLE `jenis_simpan`
MODIFY `kd_jenis_simpan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pinjaman`
--
ALTER TABLE `pinjaman`
MODIFY `id_pinjaman` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `shu`
--
ALTER TABLE `shu`
MODIFY `id_shu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbsimpan`
--
ALTER TABLE `tbsimpan`
MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
