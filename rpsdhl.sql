-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2017 at 07:33 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpsdhl`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id_city` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id_city`, `name`) VALUES
(1, 'Kab. Banjarnegara'),
(2, 'Kab. Banyumas'),
(3, 'Kab. Batang'),
(4, 'Kab. Blora'),
(5, 'Kab. Boyolali'),
(6, 'Kab. Brebes'),
(7, 'Kab. Cilacap'),
(8, 'Kab. Demak'),
(9, 'Kab. Grobogan'),
(10, 'Kab. Jepara'),
(11, 'Kab. Karanganyar'),
(12, 'Kab. Kebumen'),
(13, 'Kab. Kendal'),
(14, 'Kab. Klaten'),
(15, 'Kab. Kudus'),
(16, 'Kab. Magelang'),
(17, 'Kab. Pati'),
(18, 'Kab. Pekalongan'),
(19, 'Kab. Pemalang'),
(20, 'Kab. Purbalingga'),
(21, 'Kab. Purworejo'),
(22, 'Kab. Rembang'),
(23, 'Kab. Semarang'),
(24, 'Kab. Sragen'),
(25, 'Kab. Sukoharjo'),
(26, 'Kab. Tegal'),
(27, 'Kab. Temanggung'),
(28, 'Kab. Wonogiri'),
(29, 'Kab. Wonosobo'),
(30, 'Kota Magelang'),
(31, 'Kota Pekalongan'),
(32, 'Kota Salatiga'),
(33, 'Kota Semarang'),
(34, 'Kota Surakarta'),
(35, 'Kota Tegal'),
(36, 'Tahura'),
(37, 'Persemaian Permanen'),
(38, 'Hutan Negara');

-- --------------------------------------------------------

--
-- Table structure for table `kbr`
--

CREATE TABLE `kbr` (
  `id_kbr` int(10) UNSIGNED NOT NULL,
  `id_city` int(10) UNSIGNED NOT NULL,
  `unit` int(11) NOT NULL,
  `large` float NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kbr`
--

INSERT INTO `kbr` (`id_kbr`, `id_city`, `unit`, `large`, `year`) VALUES
(1, 2, 25, 3125, 2011),
(2, 7, 27, 3375, 2011),
(3, 1, 40, 5000, 2011),
(4, 3, 15, 1875, 2011),
(5, 5, 30, 3750, 2011),
(6, 6, 25, 3125, 2011),
(7, 12, 30, 3750, 2011),
(8, 14, 20, 2500, 2011),
(9, 16, 36, 4500, 2011),
(10, 18, 20, 2500, 2011),
(11, 19, 29, 3625, 2011),
(12, 20, 24, 3000, 2011),
(13, 23, 31, 3875, 2011),
(14, 27, 35, 4375, 2011),
(15, 28, 50, 6250, 2011),
(16, 28, 40, 5000, 2011),
(17, 21, 45, 5625, 2011),
(18, 26, 25, 3125, 2011),
(19, 13, 25, 3125, 2011),
(20, 8, 10, 1250, 2011),
(21, 15, 10, 1250, 2011),
(22, 10, 25, 3125, 2011),
(23, 17, 45, 5625, 2011),
(24, 22, 15, 1875, 2011),
(25, 4, 25, 3125, 2011),
(26, 9, 34, 4250, 2011),
(27, 11, 15, 1875, 2011),
(28, 24, 15, 1875, 2011),
(29, 25, 10, 1250, 2011),
(30, 33, 0, 0, 2011),
(31, 2, 32, 3200, 2012),
(32, 7, 52, 5200, 2012),
(33, 1, 46, 4600, 2012),
(34, 3, 20, 2000, 2012),
(35, 5, 20, 2000, 2012),
(36, 6, 50, 5000, 2012),
(37, 12, 40, 4000, 2012),
(38, 14, 30, 3000, 2012),
(39, 16, 45, 4500, 2012),
(40, 18, 40, 4000, 2012),
(41, 19, 40, 4000, 2012),
(42, 20, 30, 3000, 2012),
(43, 23, 30, 3000, 2012),
(44, 27, 41, 4100, 2012),
(45, 28, 50, 5000, 2012),
(46, 28, 48, 4800, 2012),
(47, 21, 52, 5200, 2012),
(48, 26, 30, 3000, 2012),
(49, 13, 48, 4800, 2012),
(50, 8, 10, 1000, 2012),
(51, 15, 12, 1200, 2012),
(52, 10, 49, 4900, 2012),
(53, 17, 50, 5000, 2012),
(54, 22, 35, 3500, 2012),
(55, 4, 25, 2500, 2012),
(56, 9, 50, 5000, 2012),
(57, 11, 30, 3000, 2012),
(58, 24, 20, 2000, 2012),
(59, 25, 20, 2000, 2012),
(60, 33, 0, 0, 2012),
(61, 2, 52, 4160, 2013),
(62, 7, 50, 4000, 2013),
(63, 1, 40, 3200, 2013),
(64, 3, 20, 1600, 2013),
(65, 5, 20, 1600, 2013),
(66, 6, 38, 3040, 2013),
(67, 12, 45, 3600, 2013),
(68, 14, 22, 1760, 2013),
(69, 16, 48, 3840, 2013),
(70, 18, 40, 3200, 2013),
(71, 19, 35, 2800, 2013),
(72, 20, 41, 3280, 2013),
(73, 23, 50, 4000, 2013),
(74, 27, 29, 2320, 2013),
(75, 28, 35, 2800, 2013),
(76, 28, 40, 3200, 2013),
(77, 21, 35, 2800, 2013),
(78, 26, 34, 2720, 2013),
(79, 13, 40, 3200, 2013),
(80, 8, 10, 800, 2013),
(81, 15, 17, 1360, 2013),
(82, 10, 59, 4720, 2013),
(83, 17, 46, 3680, 2013),
(84, 22, 20, 1600, 2013),
(85, 4, 38, 3040, 2013),
(86, 9, 27, 2160, 2013),
(87, 11, 17, 1360, 2013),
(88, 24, 12, 960, 2013),
(89, 25, 10, 800, 2013),
(90, 33, 6, 480, 2013),
(91, 2, 25, 1429, 2014),
(92, 7, 8, 629, 2014),
(93, 1, 20, 1143, 2014),
(94, 3, 10, 800, 2014),
(95, 5, 10, 800, 2014),
(96, 6, 20, 1600, 2014),
(97, 12, 20, 1143, 2014),
(98, 14, 5, 400, 2014),
(99, 16, 20, 1143, 2014),
(100, 18, 10, 800, 2014),
(101, 19, 10, 800, 2014),
(102, 20, 25, 1429, 2014),
(103, 23, 25, 2000, 2014),
(104, 27, 18, 1029, 2014),
(105, 28, 10, 800, 2014),
(106, 28, 18, 1029, 2014),
(107, 21, 18, 1029, 2014),
(108, 26, 15, 1200, 2014),
(109, 13, 20, 1600, 2014),
(110, 8, 0, 0, 2014),
(111, 15, 5, 400, 2014),
(112, 10, 15, 1200, 2014),
(113, 17, 25, 2000, 2014),
(114, 22, 4, 400, 2014),
(115, 4, 10, 800, 2014),
(116, 9, 20, 1600, 2014),
(117, 11, 5, 400, 2014),
(118, 24, 3, 200, 2014),
(119, 25, 3, 200, 2014),
(120, 33, 0, 0, 2014),
(121, 2, 6, 0, 2015),
(122, 7, 0, 0, 2015),
(123, 1, 10, 0, 2015),
(124, 3, 2, 80, 2015),
(125, 5, 2, 80, 2015),
(126, 6, 8, 320, 2015),
(127, 12, 17, 0, 2015),
(128, 14, 5, 200, 2015),
(129, 16, 12, 0, 2015),
(130, 18, 2, 80, 2015),
(131, 19, 2, 80, 2015),
(132, 20, 9, 0, 2015),
(133, 23, 8, 320, 2015),
(134, 27, 0, 0, 2015),
(135, 28, 12, 480, 2015),
(136, 28, 1, 0, 2015),
(137, 21, 8, 0, 2015),
(138, 26, 8, 320, 2015),
(139, 13, 8, 320, 2015),
(140, 8, 0, 0, 2015),
(141, 15, 2, 80, 2015),
(142, 10, 2, 80, 2015),
(143, 17, 14, 560, 2015),
(144, 22, 5, 200, 2015),
(145, 4, 5, 200, 2015),
(146, 9, 5, 200, 2015),
(147, 11, 4, 160, 2015),
(148, 24, 8, 320, 2015),
(149, 25, 1, 200, 2015),
(150, 33, 2, 80, 2015);

-- --------------------------------------------------------

--
-- Table structure for table `obit`
--

CREATE TABLE `obit` (
  `id_obit` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `count` int(11) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obit`
--

INSERT INTO `obit` (`id_obit`, `name`, `count`, `year`) VALUES
(1, 'Rehabilitasi hutan dan Lahan (RHL) Sumber dana APBN (pada kawasan konservasi/lindung, mangrove)', 1749062, 2011),
(2, 'RHL Sumber dana APBD Provinsi/Kab/Kota', 2898561, 2011),
(3, 'RHL Sumber dana perimbangan keuangan (DAK Kehutanan dan DBH DR)', 5365025, 2011),
(4, 'Kebun Bibit Rakyat (KBR)', 46922754, 2011),
(5, 'Reklamasi Hutan Bekas Tambang', 20200, 2011),
(6, 'Hutan Rakyat', 5130538, 2011),
(7, 'Hutan Kota', 100119, 2011),
(8, 'Penghijauan Lingkungan (APBN)', 6560032, 2011),
(9, 'Hutan Tanaman Industri (HTI) oleh BUMS dan BUMN (INHUTANI I - V)', 0, 2011),
(10, 'Hutan Tanaman Rakyat (HTR)oleh kelompok masyarakat', 10048605, 2011),
(11, 'Reboisasi oleh perum Perhutani*', 20425828, 2011),
(12, 'lain-lain/LSM', 15618762, 2011),
(13, 'Rehabilitasi hutan dan Lahan (RHL) Sumber dana APBN (pada kawasan konservasi/lindung, mangrove)', 2431969, 2012),
(14, 'RHL Sumber dana APBD Provinsi/Kab/Kota', 5141721, 2012),
(15, 'RHL Sumber dana perimbangan keuangan (DAK Kehutanan dan DBH DR)', 5916603, 2012),
(16, 'Kebun Bibit Rakyat (KBR)', 52595775, 2012),
(17, 'Reklamasi Hutan Bekas Tambang', 20000, 2012),
(18, 'Hutan Rakyat', 4952405, 2012),
(19, 'Hutan Kota', 913966, 2012),
(20, 'Penghijauan Lingkungan (APBN)', 3356659, 2012),
(21, 'Hutan Tanaman Industri (HTI) oleh BUMS dan BUMN (INHUTANI I - V)', 0, 2012),
(22, 'Hutan Tanaman Rakyat (HTR)oleh kelompok masyarakat', 4473696, 2012),
(23, 'Reboisasi oleh perum Perhutani*', 18149776, 2012),
(24, 'lain-lain/LSM', 11621060, 2012),
(25, 'Rehabilitasi hutan dan Lahan (RHL) Sumber dana APBN (pada kawasan konservasi/lindung, mangrove)', 1779740, 2013),
(26, 'RHL Sumber dana APBD Provinsi/Kab/Kota', 3110054, 2013),
(27, 'RHL Sumber dana perimbangan keuangan (DAK Kehutanan dan DBH DR)', 4044604, 2013),
(28, 'Kebun Bibit Rakyat (KBR)', 50242604, 2013),
(29, 'Reklamasi Hutan Bekas Tambang', 18723, 2013),
(30, 'Hutan Rakyat', 9842473, 2013),
(31, 'Hutan Kota', 228049, 2013),
(32, 'Penghijauan Lingkungan (APBN)', 1416891, 2013),
(33, 'Hutan Tanaman Industri (HTI) oleh BUMS dan BUMN (INHUTANI I - V)', 0, 2013),
(34, 'Hutan Tanaman Rakyat (HTR)oleh kelompok masyarakat', 2049716, 2013),
(35, 'Reboisasi oleh perum Perhutani*', 15310800, 2013),
(36, 'lain-lain/LSM', 10514358, 2013),
(37, 'Rehabilitasi hutan dan Lahan (RHL) Sumber dana APBN (pada kawasan konservasi/lindung, mangrove)', 937871, 2014),
(38, 'RHL Sumber dana APBD Provinsi/Kab/Kota', 1748406, 2014),
(39, 'RHL Sumber dana perimbangan keuangan (DAK Kehutanan dan DBH DR)', 5704928, 2014),
(40, 'Kebun Bibit Rakyat (KBR)', 19403022, 2014),
(41, 'Reklamasi Hutan Bekas Tambang', 1655850, 2014),
(42, 'Hutan Rakyat', 10109721, 2014),
(43, 'Hutan Kota', 220644, 2014),
(44, 'Penghijauan Lingkungan (APBN)', 658418, 2014),
(45, 'Hutan Tanaman Industri (HTI) oleh BUMS dan BUMN (INHUTANI I - V)', 0, 2014),
(46, 'Hutan Tanaman Rakyat (HTR)oleh kelompok masyarakat', 2742276, 2014),
(47, 'Reboisasi oleh perum Perhutani*', 20023075, 2014),
(48, 'lain-lain/LSM', 16976287, 2014),
(49, 'Rehabilitasi hutan dan Lahan (RHL) Sumber dana APBN (pada kawasan konservasi/lindung, mangrove)', 1170689, 2015),
(50, 'RHL Sumber dana APBD Provinsi/Kab/Kota', 1233296, 2015),
(51, 'RHL Sumber dana perimbangan keuangan (DAK Kehutanan dan DBH DR)', 3479435, 2015),
(52, 'Kebun Bibit Rakyat (KBR)', 6294985, 2015),
(53, 'Reklamasi Hutan Bekas Tambang', 1319000, 2015),
(54, 'Hutan Rakyat', 760159, 2015),
(55, 'Hutan Kota', 266196, 2015),
(56, 'Penghijauan Lingkungan (APBN)', 9728363, 2015),
(57, 'Hutan Tanaman Industri (HTI) oleh BUMS dan BUMN (INHUTANI I - V)', 0, 2015),
(58, 'Hutan Tanaman Rakyat (HTR)oleh kelompok masyarakat', 2193615, 2015),
(59, 'Reboisasi oleh perum Perhutani*', 18222791, 2015),
(60, 'lain-lain/LSM', 10043196, 2015),
(61, 'Pengembangan pohon trembesi BANPRES di Daerah', 690370, 2011),
(62, 'Tanaman perkebunan (Kementerian Pertanian)**', 1607251, 2011),
(63, 'Tanaman Hortikultura (Kementerian Pertanian)', 1458717, 2011),
(64, 'Penanaman Pohon di Jalan Tol, waduk dll (kementerian PU)', 27942, 2011),
(65, 'Gerakan Perempuan Tanam dan Pelihara Oleh 7 organisasi wanita (SIKIB, PKK, DWP, APPB, DP, KOWANI dan Bhayangkari)', 378721, 2011),
(66, 'TNI/Polri', 1965351, 2011),
(67, 'Penanaman CSR BUMN/BUMD/BUMS', 6233261, 2011),
(68, 'Lain-lain Kementerian/lembaga', 3345560, 2011),
(69, 'Pengembangan pohon trembesi BANPRES di Daerah', 20250, 2012),
(70, 'Tanaman perkebunan (Kementerian Pertanian)**', 2921496, 2012),
(71, 'Tanaman Hortikultura (Kementerian Pertanian)', 172282, 2012),
(72, 'Penanaman Pohon di Jalan Tol, waduk dll (kementerian PU)', 6159, 2012),
(73, 'Gerakan Perempuan Tanam dan Pelihara Oleh 7 organisasi wanita (SIKIB, PKK, DWP, APPB, DP, KOWANI dan Bhayangkari)', 251580, 2012),
(74, 'TNI/Polri', 1761210, 2012),
(75, 'Penanaman CSR BUMN/BUMD/BUMS', 6886321, 2012),
(76, 'Lain-lain Kementerian/lembaga', 5268401, 2012),
(77, 'Pengembangan pohon trembesi BANPRES di Daerah', 11732, 2013),
(78, 'Tanaman perkebunan (Kementerian Pertanian)**', 1271389, 2013),
(79, 'Tanaman Hortikultura (Kementerian Pertanian)', 1300696, 2013),
(80, 'Penanaman Pohon di Jalan Tol, waduk dll (kementerian PU)', 31756, 2013),
(81, 'Gerakan Perempuan Tanam dan Pelihara Oleh 7 organisasi wanita (SIKIB, PKK, DWP, APPB, DP, KOWANI dan Bhayangkari)', 1069221, 2013),
(82, 'TNI/Polri', 2821079, 2013),
(83, 'Penanaman CSR BUMN/BUMD/BUMS', 9078219, 2013),
(84, 'Lain-lain Kementerian/lembaga', 4422811, 2013),
(85, 'Pengembangan pohon trembesi BANPRES di Daerah', 323132, 2014),
(86, 'Tanaman perkebunan (Kementerian Pertanian)**', 2584183, 2014),
(87, 'Tanaman Hortikultura (Kementerian Pertanian)', 2462456, 2014),
(88, 'Penanaman Pohon di Jalan Tol, waduk dll (kementerian PU)', 32330, 2014),
(89, 'Gerakan Perempuan Tanam dan Pelihara Oleh 7 organisasi wanita (SIKIB, PKK, DWP, APPB, DP, KOWANI dan Bhayangkari)', 370370, 2014),
(90, 'TNI/Polri', 264695, 2014),
(91, 'Penanaman CSR BUMN/BUMD/BUMS', 5009435, 2014),
(92, 'Lain-lain Kementerian/lembaga', 9727366, 2014),
(93, 'Pengembangan pohon trembesi BANPRES di Daerah', 0, 2015),
(94, 'Tanaman perkebunan (Kementerian Pertanian)**', 0, 2015),
(95, 'Tanaman Hortikultura (Kementerian Pertanian)', 0, 2015),
(96, 'Penanaman Pohon di Jalan Tol, waduk dll (kementerian PU)', 0, 2015),
(97, 'Gerakan Perempuan Tanam dan Pelihara Oleh 7 organisasi wanita (SIKIB, PKK, DWP, APPB, DP, KOWANI dan Bhayangkari)', 0, 2015),
(98, 'TNI/Polri', 0, 2015),
(99, 'Penanaman CSR BUMN/BUMD/BUMS', 0, 2015),
(100, 'Lain-lain Kementerian/lembaga', 0, 2015);

-- --------------------------------------------------------

--
-- Table structure for table `rhl`
--

CREATE TABLE `rhl` (
  `id_rhl` int(10) UNSIGNED NOT NULL,
  `id_city` int(10) UNSIGNED NOT NULL,
  `large` float NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rhl`
--

INSERT INTO `rhl` (`id_rhl`, `id_city`, `large`, `year`) VALUES
(1, 2, 7020, 2011),
(2, 7, 6690, 2011),
(3, 1, 7755.63, 2011),
(4, 3, 5059.76, 2011),
(5, 5, 6205, 2011),
(6, 6, 6325.25, 2011),
(7, 12, 7481.25, 2011),
(8, 14, 6260.5, 2011),
(9, 16, 7600, 2011),
(10, 18, 7808, 2011),
(11, 19, 7486.62, 2011),
(12, 20, 5504.61, 2011),
(13, 23, 6714.13, 2011),
(14, 27, 7375, 2011),
(15, 28, 9845, 2011),
(16, 29, 8365.5, 2011),
(17, 21, 5625, 2011),
(18, 26, 5400, 2011),
(19, 13, 6025, 2011),
(20, 8, 3670, 2011),
(21, 15, 5205, 2011),
(22, 10, 7080, 2011),
(23, 17, 11213.1, 2011),
(24, 22, 5684.5, 2011),
(25, 4, 7320.13, 2011),
(26, 9, 9021, 2011),
(27, 11, 4600, 2011),
(28, 24, 4587.5, 2011),
(29, 25, 4393, 2011),
(30, 33, 0, 2011),
(31, 32, 125, 2011),
(32, 31, 0, 2011),
(33, 36, 0, 2011),
(34, 37, 0, 2011),
(35, 38, 0, 2011),
(36, 2, 3290, 2012),
(37, 7, 5658, 2012),
(38, 1, 4913, 2012),
(39, 3, 2164, 2012),
(40, 5, 2546, 2012),
(41, 6, 5150, 2012),
(42, 12, 4355, 2012),
(43, 14, 3119, 2012),
(44, 16, 5187, 2012),
(45, 18, 4459, 2012),
(46, 19, 4612, 2012),
(47, 20, 3209, 2012),
(48, 23, 3838, 2012),
(49, 27, 4579, 2012),
(50, 28, 5500, 2012),
(51, 29, 5344, 2012),
(52, 21, 5507, 2012),
(53, 26, 3186, 2012),
(54, 13, 5018, 2012),
(55, 8, 1350, 2012),
(56, 15, 1250, 2012),
(57, 10, 5383, 2012),
(58, 17, 5523, 2012),
(59, 22, 3880, 2012),
(60, 4, 3205, 2012),
(61, 9, 5100, 2012),
(62, 11, 3075, 2012),
(63, 24, 2600, 2012),
(64, 25, 2168, 2012),
(65, 33, 110, 2012),
(66, 32, 25, 2012),
(67, 31, 0, 2012),
(68, 36, 337, 2012),
(69, 37, 0, 2012),
(70, 38, 0, 2012),
(71, 2, 4246.25, 2013),
(72, 7, 4175, 2013),
(73, 1, 3605, 2013),
(74, 3, 1927.58, 2013),
(75, 5, 2536.63, 2013),
(76, 6, 3826.67, 2013),
(77, 12, 4111.67, 2013),
(78, 14, 2343, 2013),
(79, 16, 4295, 2013),
(80, 18, 3487.5, 2013),
(81, 19, 3321.98, 2013),
(82, 20, 3558.15, 2013),
(83, 23, 4862.58, 2013),
(84, 27, 2669.5, 2013),
(85, 28, 3237, 2013),
(86, 29, 3934.75, 2013),
(87, 21, 3625.5, 2013),
(88, 26, 3327.5, 2013),
(89, 13, 3665.04, 2013),
(90, 8, 1147.5, 2013),
(91, 15, 1555, 2013),
(92, 10, 5532, 2013),
(93, 17, 4272.25, 2013),
(94, 22, 1961.54, 2013),
(95, 4, 3713.82, 2013),
(96, 9, 2791.25, 2013),
(97, 11, 1709.42, 2013),
(98, 24, 1529, 2013),
(99, 25, 1180, 2013),
(100, 33, 559, 2013),
(101, 32, 55, 2013),
(102, 31, 0, 2013),
(103, 36, 0, 2013),
(104, 37, 0, 2013),
(105, 38, 0, 2013),
(106, 2, 1466, 2014),
(107, 7, 977, 2014),
(108, 1, 1592, 2014),
(109, 3, 1020, 2014),
(110, 5, 998, 2014),
(111, 6, 1723, 2014),
(112, 12, 1574, 2014),
(113, 14, 601, 2014),
(114, 16, 1538, 2014),
(115, 18, 1209, 2014),
(116, 19, 1346, 2014),
(117, 20, 1744, 2014),
(118, 23, 2279, 2014),
(119, 27, 1579, 2014),
(120, 28, 1405, 2014),
(121, 29, 1352, 2014),
(122, 21, 1319, 2014),
(123, 26, 1723, 2014),
(124, 13, 1630, 2014),
(125, 8, 500, 2014),
(126, 15, 440, 2014),
(127, 10, 1586, 2014),
(128, 17, 2340, 2014),
(129, 22, 803, 2014),
(130, 4, 1123, 2014),
(131, 9, 1897, 2014),
(132, 11, 488, 2014),
(133, 24, 238, 2014),
(134, 25, 255, 2014),
(135, 33, 20, 2014),
(136, 32, 0, 2014),
(137, 31, 0, 2014),
(138, 36, 25, 2014),
(139, 37, 688, 2014),
(140, 38, 0, 2014),
(141, 2, 215, 2015),
(142, 7, 1218, 2015),
(143, 1, 1183, 2015),
(144, 3, 764, 2015),
(145, 5, 621, 2015),
(146, 6, 2044, 2015),
(147, 12, 932, 2015),
(148, 14, 500, 2015),
(149, 16, 337, 2015),
(150, 18, 758, 2015),
(151, 19, 1080, 2015),
(152, 20, 803, 2015),
(153, 23, 1259, 2015),
(154, 27, 675, 2015),
(155, 28, 7811, 2015),
(156, 29, 205, 2015),
(157, 21, 1046, 2015),
(158, 26, 961, 2015),
(159, 13, 1084, 2015),
(160, 8, 1145, 2015),
(161, 15, 289, 2015),
(162, 10, 879, 2015),
(163, 17, 2224, 2015),
(164, 22, 1202, 2015),
(165, 4, 816, 2015),
(166, 9, 923, 2015),
(167, 11, 693, 2015),
(168, 24, 226, 2015),
(169, 25, 132, 2015),
(170, 33, 287, 2015),
(171, 32, 0, 2015),
(172, 31, 56, 2015),
(173, 36, 193, 2015),
(174, 37, 576, 2015),
(175, 38, 7789, 2015);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rule` enum('admin','manager') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `email`, `password`, `rule`) VALUES
(1, 'faqih@admin.com', '$2y$10$G/I/RX7OPDTEDdT3DW.af.vfiAERd91IvCqsDzsNPEPf9l34R8.rq', 'admin'),
(2, 'faqih@manager.com', '$2y$10$G/I/RX7OPDTEDdT3DW.af.vfiAERd91IvCqsDzsNPEPf9l34R8.rq', 'manager'),
(3, 'adik@admin.com', '$2y$10$G/I/RX7OPDTEDdT3DW.af.vfiAERd91IvCqsDzsNPEPf9l34R8.rq', 'admin'),
(4, 'adik@manager.com', '$2y$10$G/I/RX7OPDTEDdT3DW.af.vfiAERd91IvCqsDzsNPEPf9l34R8.rq', 'manager'),
(5, 'dimas@admin.com', '$2y$10$G/I/RX7OPDTEDdT3DW.af.vfiAERd91IvCqsDzsNPEPf9l34R8.rq', 'admin'),
(6, 'dimas@manager.com', '$2y$10$G/I/RX7OPDTEDdT3DW.af.vfiAERd91IvCqsDzsNPEPf9l34R8.rq', 'manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id_city`);

--
-- Indexes for table `kbr`
--
ALTER TABLE `kbr`
  ADD PRIMARY KEY (`id_kbr`),
  ADD KEY `id_city` (`id_city`);

--
-- Indexes for table `obit`
--
ALTER TABLE `obit`
  ADD PRIMARY KEY (`id_obit`);

--
-- Indexes for table `rhl`
--
ALTER TABLE `rhl`
  ADD PRIMARY KEY (`id_rhl`),
  ADD KEY `id_city` (`id_city`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id_city` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `kbr`
--
ALTER TABLE `kbr`
  MODIFY `id_kbr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
--
-- AUTO_INCREMENT for table `obit`
--
ALTER TABLE `obit`
  MODIFY `id_obit` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `rhl`
--
ALTER TABLE `rhl`
  MODIFY `id_rhl` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kbr`
--
ALTER TABLE `kbr`
  ADD CONSTRAINT `kbr_ibfk_1` FOREIGN KEY (`id_city`) REFERENCES `cities` (`id_city`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rhl`
--
ALTER TABLE `rhl`
  ADD CONSTRAINT `rhl_ibfk_1` FOREIGN KEY (`id_city`) REFERENCES `cities` (`id_city`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
