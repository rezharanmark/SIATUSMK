-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 09, 2014 at 03:56 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siatusmk`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensiguru`
--

CREATE TABLE IF NOT EXISTS `absensiguru` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `hari` varchar(9) COLLATE latin1_general_ci NOT NULL,
  `guruid` int(11) NOT NULL,
  `ket` varchar(7) COLLATE latin1_general_ci NOT NULL,
  `date` date NOT NULL,
  `bln` int(3) NOT NULL,
  `thn` int(5) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `absensiguru`
--

INSERT INTO `absensiguru` (`no`, `hari`, `guruid`, `ket`, `date`, `bln`, `thn`) VALUES
(1, 'Jumat ', 1, '2', '2012-06-01', 6, 2012),
(2, 'Jumat ', 11, '1', '2012-06-01', 6, 2012),
(3, 'Sabtu ', 6, '1', '2012-06-16', 6, 2012),
(4, 'Sabtu ', 4, '2', '2012-06-16', 6, 2012),
(5, 'Sabtu ', 9, '3', '2012-06-16', 6, 2012),
(6, 'Sabtu ', 11, '2', '2012-06-16', 6, 2012),
(7, 'Selasa ', 2, '1', '2014-01-20', 1, 2014),
(8, 'Selasa ', 4, '1', '2014-01-20', 1, 2014),
(9, 'Selasa ', 10, '1', '2014-01-20', 1, 2014),
(10, 'Selasa ', 3, '1', '2014-01-20', 1, 2014),
(11, 'Selasa ', 13, '1', '2014-01-20', 1, 2014),
(12, 'Selasa ', 5, '1', '2014-01-20', 1, 2014),
(13, 'Rabu ', 2, '1', '2014-01-22', 1, 2014),
(14, 'Rabu ', 10, '2', '2014-01-22', 1, 2014);

-- --------------------------------------------------------

--
-- Table structure for table `absensisiswa`
--

CREATE TABLE IF NOT EXISTS `absensisiswa` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `hari` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `date` date DEFAULT NULL,
  `tgl` varchar(3) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `bln` varchar(3) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `thn` varchar(5) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `kelas` varchar(7) DEFAULT NULL,
  `kelasid` int(5) NOT NULL,
  `nis` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `ket` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `absensisiswa`
--

INSERT INTO `absensisiswa` (`no`, `hari`, `date`, `tgl`, `bln`, `thn`, `kelas`, `kelasid`, `nis`, `nama`, `ket`) VALUES
(9, 'Sabtu ', '2014-02-01', '1', '2', '2014', '10TPM1', 1, '18418', 'Zainal Abidin', 'Sakit'),
(10, 'Sabtu ', '2014-02-01', '1', '2', '2014', '11TKR1', 9, '18419', 'Fajar', 'Sakit'),
(11, 'Sabtu ', '2014-02-01', '1', '2', '2014', '12TSM1', 17, '18872', 'MEINKA DINDA HENDARDI', 'Alpha'),
(12, 'Senin ', '2014-02-03', '3', '2', '2014', '10TPM1', 1, '19002', 'Zainal Abidin', 'Sakit'),
(13, 'Senin ', '2014-02-03', '3', '2', '2014', '10TPM1', 1, '18418', 'Sasi', 'Izin');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(9) COLLATE latin1_general_ci NOT NULL,
  `userpass` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `foto` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `userpass`, `foto`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Linkedin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `foto` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `deskripsi`, `isi`, `foto`) VALUES
(1, 'Berita Alumni', 'Alumni SMK', 'Alumni sedang berkumpul', '1.jpg'),
(2, 'Berita 2', 'Keterangan 2', 'Para guru sedang berkumpul di teras SMK', '2.jpg'),
(3, 'Berita 3', 'Keterangan 3', 'Isi Berita Terbaru', '3.jpg'),
(4, 'Berita 4', 'Keterangan 4', 'Isi 4', '4.JPG'),
(5, 'Traktor Baru', 'SMK PSM 1 Kawedanan kedatangan belasan traktor baru', 'Pada hari Selasa, tepatnya tanggal 15 Januari 2014, SMK PSM 1 Kawedanan kedatangan rombongan traktor dari Yayasan PSM. ', '5.JPG'),
(6, 'Berita 6', 'Keterangan 6', 'Isi 6', '6.JPG'),
(7, 'Berita 7', 'Keterangan 7', 'Isi 7', '7.JPG'),
(8, 'Berita 8', 'Keterangan 8', 'Isi 8', '8.JPG'),
(9, 'Berita 9', 'Keterangan 9', 'Isi 9', '9.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE IF NOT EXISTS `biodata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `alamat`, `email`, `phone`) VALUES
(1, 'Zainal Arifin', 'Ds. Banjeng', 'kakzai@gmail.com', '085745158780');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(9) COLLATE latin1_general_ci NOT NULL,
  `userpass` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(17) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(128) COLLATE latin1_general_ci NOT NULL,
  `nip` varchar(64) COLLATE latin1_general_ci NOT NULL,
  `matpel` varchar(17) COLLATE latin1_general_ci NOT NULL,
  `tgl` int(11) DEFAULT NULL,
  `bln` int(11) NOT NULL,
  `thn` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `agama` int(11) NOT NULL,
  `tempat_lahir` varchar(9) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(32) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `username`, `userpass`, `password`, `nama`, `nip`, `matpel`, `tgl`, `bln`, `thn`, `gender`, `agama`, `tempat_lahir`, `alamat`) VALUES
(1, 'martini', '7f6412ea0b565ab3fb16195746cd6c97', 'martini', ' MARTINI, S.Pd ', '19541215 197601 2 001', 'PAI', 0, 0, 0, 0, 0, '', ''),
(2, 'sumarti', 'd3becf804a80fa4831800c2d2b444c8f', 'sumarti', ' SUMARTI, S.Pd ', '19580615 197803 2 012', 'PPKn', 0, 0, 0, 0, 0, '', ''),
(3, 'lilik', 'ef90d17d3ee20a6c628fa4cdc4462e5a', 'lilik', ' LILIK MARDIATI, S.Pd ', '19650613 199003 2 005', 'BIN', 0, 0, 0, 0, 0, '', ''),
(4, 'aning', 'c1901c302bd7648bffa1bef0283fe8d4', 'aning', ' ANING R, S.Pd ', '19580601 197803 2 015', 'OR', 0, 0, 0, 0, 0, '', ''),
(5, 'suparti', 'c708ca9e78cc77c808ab6f4b02338239', 'suparti', ' Hj. SUPARTI, S.Pd ', '19600712 198904 2 001', 'SBK', 0, 0, 0, 0, 0, '', ''),
(6, 'bibit', '314dc2c56b755f63359d1b43a6a2492d', 'bibit', ' BIBIT WINARTI, S.Pd ', '19590909 197907 2 004', 'MAT', 0, 0, 0, 0, 0, '', ''),
(7, 'partini', 'a7be41b19c9e8741a6ed67f41c6f36b3', 'partini', ' PARTINI, S.Pd ', '19590609 197907 2 003', 'BIG', 0, 0, 0, 0, 0, '', ''),
(8, 'sofrotun', '3d588ffaff7479d4526020b81422d8a8', 'sofrotun', ' Hj. SOFROTUN, S.Pd.I ', '19610310 198603 2 012', 'IPA', 0, 0, 0, 0, 0, '', ''),
(9, 'purwito', 'b94415f8635883b7d3b75dc574a98224', 'purwito', 'EDHI PURWITO, S.Pd ', '19630518 198504 1 003', 'KIMIA', NULL, 0, 0, 0, 0, '', ''),
(10, 'ririn', 'b84a4059d1af6c8b50bb7a28290dbd63', 'ririn', 'RIRIN WAHYU PURBANDARI, S.Pd', '000', 'FISIKA', NULL, 0, 0, 2, 0, '', ''),
(11, 'asikin', 'a7e39bbc5275c2f3bd00cdfefc3694b8', 'asikin', 'ARIF ASIKIN, A.Md ', '1234567', 'IPS', NULL, 0, 0, 1, 1, '', ''),
(12, 'kasmani', '4d928659055292266493e36f53dbd9bf', 'kasmani', 'KASMANI', '19650918 199303 1 006', 'KWU', NULL, 0, 0, 0, 0, '', ''),
(20, 'sarju', '4630ca54b2a97b637a77c733d44bf0f6', 'sarju', 'Sarju Raharju', '4567', 'MULOK', NULL, 0, 0, 1, 0, '', 'Belotan');

-- --------------------------------------------------------

--
-- Table structure for table `jumat`
--

CREATE TABLE IF NOT EXISTS `jumat` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `jam` int(7) NOT NULL,
  `matpel` varchar(17) NOT NULL,
  `kelas` varchar(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `jumat`
--


-- --------------------------------------------------------

--
-- Table structure for table `kamis`
--

CREATE TABLE IF NOT EXISTS `kamis` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `jam` int(7) NOT NULL,
  `matpel` varchar(17) NOT NULL,
  `kelas` varchar(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `kamis`
--


-- --------------------------------------------------------

--
-- Table structure for table `minggu`
--

CREATE TABLE IF NOT EXISTS `minggu` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `jam` int(7) NOT NULL,
  `matpel` varchar(17) NOT NULL,
  `kelas` varchar(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `minggu`
--


-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(17) NOT NULL,
  `nilai` varchar(17) NOT NULL,
  `matpelid` int(3) NOT NULL,
  `jenis` varchar(17) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=104 ;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`no`, `nis`, `nilai`, `matpelid`, `jenis`) VALUES
(1, '1234', '78', 1, 'mid1pr'),
(2, '1234', '54', 1, 'mid1tugas'),
(3, '1234', '67', 1, 'mid1ujian'),
(4, '1234', '89', 1, 'sem1pr'),
(5, '1234', '67', 1, 'sem1tugas'),
(6, '1234', '77', 1, 'sem1ujian'),
(7, '1234', '87', 1, 'mid2pr'),
(8, '1234', '97', 1, 'mid2tugas'),
(9, '1234', '47', 1, 'mid2ujian'),
(10, '1234', '57', 1, 'sem2pr'),
(11, '1234', '17', 1, 'sem2tugas'),
(12, '1234', '68', 1, 'sem2ujian'),
(13, '1234', '75', 2, 'mid1pr'),
(14, '1234', '65', 3, 'mid1pr'),
(15, '1234', '7.5', 4, 'mid1pr'),
(16, '1234', '7.5', 4, 'mid1tugas'),
(17, '1234', '7.5', 4, 'mid1ujian'),
(18, '1234', '7.5', 4, 'sem1pr'),
(19, '1234', '7.5', 4, 'sem1tugas'),
(20, '1234', '7.5', 4, 'sem1ujian'),
(21, '1234', '7.5', 4, 'mid2pr'),
(22, '1234', '7.5', 4, 'mid2tugas'),
(23, '1234', '7.5', 4, 'mid2ujian'),
(24, '1234', '7.5', 4, 'sem2pr'),
(25, '1234', '7.5', 4, 'sem2tugas'),
(26, '1234', '7.5', 4, 'sem2ujian'),
(27, '1234', '75', 5, 'mid1pr'),
(28, '1234', '75', 5, 'mid1tugas'),
(29, '1234', '75', 5, 'mid1ujian'),
(30, '1234', '75', 5, 'sem1pr'),
(31, '1234', '75', 5, 'sem1tugas'),
(32, '1234', '75', 5, 'sem1ujian'),
(33, '1234', '75', 5, 'mid2pr'),
(34, '1234', '75', 5, 'mid2tugas'),
(35, '1234', '75', 5, 'mid2ujian'),
(36, '1234', '75', 5, 'sem2pr'),
(37, '1234', '75', 5, 'sem2tugas'),
(38, '1234', '75', 5, 'sem2ujian'),
(39, '1234', '50', 6, 'mid1pr'),
(40, '1234', '50', 6, 'mid1tugas'),
(41, '1234', '50', 6, 'mid1ujian'),
(42, '1234', '50', 6, 'sem1pr'),
(43, '1234', '50', 6, 'sem1tugas'),
(44, '1234', '50', 6, 'sem1ujian'),
(45, '1234', '50', 6, 'mid2pr'),
(46, '1234', '50', 6, 'mid2tugas'),
(47, '1234', '50', 6, 'mid2ujian'),
(48, '1234', '50', 6, 'sem2pr'),
(49, '1234', '50', 6, 'sem2tugas'),
(50, '1234', '50', 6, 'sem2ujian'),
(51, '1234', '60', 7, 'mid1pr'),
(52, '1234', '60', 7, 'mid1tugas'),
(53, '1234', '60', 7, 'mid1ujian'),
(54, '1234', '60', 7, 'sem1pr'),
(55, '1234', '60', 7, 'sem1tugas'),
(56, '1234', '60', 7, 'sem1ujian'),
(57, '1234', '60', 7, 'mid2pr'),
(58, '1234', '60', 7, 'mid2tugas'),
(59, '1234', '60', 7, 'mid2ujian'),
(60, '1234', '60', 7, 'sem2pr'),
(61, '1234', '60', 7, 'sem2tugas'),
(62, '1234', '60', 7, 'sem2ujian'),
(63, '1234', '60', 21, 'mid1pr'),
(64, '1234', '60', 21, 'mid1tugas'),
(65, '1234', '60', 21, 'mid1ujian'),
(66, '1234', '60', 21, 'sem1pr'),
(67, '1234', '60', 21, 'sem1tugas'),
(68, '1234', '60', 21, 'sem1ujian'),
(69, '1234', '60', 21, 'mid2pr'),
(70, '1234', '60', 21, 'mid2tugas'),
(71, '1234', '60', 21, 'mid2ujian'),
(72, '1234', '60', 21, 'sem2pr'),
(73, '1234', '60', 21, 'sem2tugas'),
(74, '1234', '60', 21, 'sem2ujian'),
(75, '1234', '90', 8, 'mid1pr'),
(76, '1234', '90', 8, 'mid1pr'),
(77, '1234', '90', 8, 'mid1tugas'),
(78, '1234', '90', 8, 'mid1ujian'),
(79, '1234', '90', 8, 'sem1pr'),
(80, '1234', '90', 8, 'sem1tugas'),
(81, '1234', '90', 8, 'sem1ujian'),
(82, '1234', '90', 8, 'mid2pr'),
(83, '1234', '90', 8, 'mid2tugas'),
(84, '1234', '90', 8, 'mid2ujian'),
(85, '1234', '90', 8, 'sem2pr'),
(86, '1234', '90', 8, 'sem2tugas'),
(87, '1234', '90', 8, 'sem2ujian'),
(88, '1234', '90', 18, 'mid1pr'),
(89, '1234', '90', 18, 'mid1tugas'),
(90, '1234', '90', 18, 'mid1ujian'),
(91, '1234', '90', 18, 'sem1pr'),
(92, '1234', '90', 18, 'sem1tugas'),
(93, '1234', '90', 18, 'sem1ujian'),
(94, '1234', '90', 18, 'mid2pr'),
(95, '1234', '90', 18, 'mid2tugas'),
(96, '1234', '90', 18, 'mid2ujian'),
(97, '1234', '90', 18, 'sem2pr'),
(98, '1234', '90', 18, 'sem2tugas'),
(99, '1234', '90', 18, 'sem2ujian'),
(100, '5678', '78', 17, 'mid1pr'),
(102, '674', '49', 17, 'mid1pr'),
(103, '3456', '77', 11, 'mid1pr');

-- --------------------------------------------------------

--
-- Table structure for table `rabu`
--

CREATE TABLE IF NOT EXISTS `rabu` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `jam` int(7) NOT NULL,
  `matpel` varchar(17) NOT NULL,
  `kelas` varchar(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `rabu`
--


-- --------------------------------------------------------

--
-- Table structure for table `sabtu`
--

CREATE TABLE IF NOT EXISTS `sabtu` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `jam` int(7) NOT NULL,
  `matpel` varchar(17) NOT NULL,
  `kelas` varchar(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sabtu`
--


-- --------------------------------------------------------

--
-- Table structure for table `selasa`
--

CREATE TABLE IF NOT EXISTS `selasa` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `jam` int(7) NOT NULL,
  `matpel` varchar(17) NOT NULL,
  `kelas` varchar(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `selasa`
--

INSERT INTO `selasa` (`id`, `jam`, `matpel`, `kelas`) VALUES
(4, 1, 'PAI', '10TPM1'),
(5, 2, 'OR', '10TPM1'),
(6, 3, 'MAT', '10TPM1'),
(7, 4, 'MAT', '10TPM1'),
(8, 5, 'Istirahat', '10TPM1'),
(9, 6, 'PRO2', '10TPM1'),
(10, 7, 'KWU', '10TPM1'),
(11, 8, 'OR', '10TPM1'),
(12, 9, 'PSM', '10TPM1'),
(13, 10, 'BIN', '10TPM1');

-- --------------------------------------------------------

--
-- Table structure for table `senin`
--

CREATE TABLE IF NOT EXISTS `senin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jam` int(11) NOT NULL,
  `matpel` varchar(17) NOT NULL,
  `kelas` varchar(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `senin`
--

INSERT INTO `senin` (`id`, `jam`, `matpel`, `kelas`) VALUES
(6, 1, 'PAI', '10TPM1'),
(7, 2, 'PPKn', '10TPM1'),
(8, 3, 'BIN', '10TPM1'),
(9, 4, 'OR', '10TPM1'),
(10, 5, 'SBK', '10TPM1'),
(11, 6, 'Istirahat', '10TPM1'),
(12, 7, 'BIG', '10TPM1'),
(13, 8, 'PSM', '10TPM1'),
(14, 9, 'PRO4', '10TPM1'),
(15, 10, 'FISIKA', '10TPM1');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nisn` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `gender` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `unsd` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `ket` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `nama_ayah` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `kerja_ayah` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `kerja_ibu` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `kelas` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `kelasid` int(5) NOT NULL,
  `foto` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=50 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`no`, `nisn`, `nama`, `gender`, `tempat_lahir`, `tgl_lahir`, `agama`, `alamat`, `unsd`, `ket`, `nama_ayah`, `kerja_ayah`, `nama_ibu`, `kerja_ibu`, `kelas`, `kelasid`, `foto`) VALUES
(35, '674', 'Zahra', 'P', 'Jakarta', '2002-01-18', 'Islam', 'Bogem', '78', 'Pindahan dari Jakarta', 'Zahroni', 'Pegawai', 'Ziya', 'Pedagang', '12TSM2', 18, ''),
(45, '34', 'Sumadi', 'L', 'Kediren', '1990-02-02', 'Islam', 'Lembeyan', '79', 'Pindahan dari Lembeyan', 'Ratno', 'Tukang', 'Katiyem', 'Petani', '10TSM2', 6, ''),
(48, '5678', 'Zainal Abidin', 'L', 'Magetan', '2000-01-19', 'Islam', 'Banjeng', '87', 'Pindahan dari SMA N 1 Magetan', 'Affandi', 'Pedagang', 'Katini', 'Guru', '10TPM1', 1, 'Facebook.jpg'),
(49, '1234', 'Fajar', 'L', 'Magetan', '1999-03-02', 'Islam', 'Mojopurno', '89', 'Pindahan dari SMK YKP Magetan', 'Satro', 'Petani', 'Sumirah', 'Petani', '11TKR1', 9, 'Linkedin.jpg'),
(5, '3456', 'Zainab', 'P', 'Probolinggo', '1992-02-19', 'Islam', 'Mojorejo', '89', 'Pindahan dari Gresik', 'Idin', 'Polisi', 'Umi', 'Penjaga Toko', '10TPM1', 1, 'Woman.png'),
(6, '4567', 'Zaro', 'L', 'Solo', '1992-05-11', 'Hindu', 'Banjeng', '75', '', 'Holik', 'Nelayan', 'Siti', 'Penjual Soto', '10TPM2', 2, 'Man.png'),
(7, '7890', 'Ayumai', 'P', 'Jepang', '1997-03-18', '', 'Bogem', '90', '', 'Sinok', 'Pengusaha', 'Aliko', 'Koki', '11TSM2', 12, 'Smile1.png'),
(8, '5657', 'Gino', 'L', 'Norwegia', '2000-08-17', 'Islam', 'Jambangan', '90', '', 'Soju', 'Petani', 'Hamidah', 'Penjahit', '12TSM1', 17, 'Smile3.png'),
(9, '5657', 'Gino', 'L', 'Norwegia', '2000-08-17', 'Islam', 'Jambangan', '90', '', 'Soju', 'Petani', 'Hamidah', 'Penjahit', '12TSM1', 17, 'Smile6.png'),
(10, '3435', 'Zainab', 'L', 'Makeni', '2003-04-17', 'Islam', 'Kawedanan', '90', '', 'Ayah', 'Kerja Ayah', 'Ibu', 'Kerja Ibu', '11TKR2', 10, 'Linkedin1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `submatpel`
--

CREATE TABLE IF NOT EXISTS `submatpel` (
  `subid` int(11) NOT NULL,
  `subname` varchar(15) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `submatpel`
--

INSERT INTO `submatpel` (`subid`, `subname`) VALUES
(1, 'PAI'),
(2, 'PPKn'),
(3, 'BIN'),
(4, 'OR'),
(5, 'SBK'),
(6, 'MAT'),
(7, 'BIG'),
(8, 'IPA'),
(9, 'KIMIA'),
(10, 'FISIKA'),
(11, 'IPS'),
(12, 'KWU'),
(13, 'KKPI'),
(14, 'MULOK'),
(15, 'PSM'),
(16, 'PRO1'),
(17, 'PRO2'),
(18, 'PRO3'),
(19, 'PRO4'),
(20, 'PRO5'),
(21, 'PRO6');
