-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2017 at 01:23 
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
(36, 'Hutan Negara');

-- --------------------------------------------------------

--
-- Table structure for table `kbr`
--

CREATE TABLE `kbr` (
  `id_kbr` int(10) UNSIGNED NOT NULL,
  `id_city` int(10) UNSIGNED NOT NULL,
  `unit` int(11) NOT NULL,
  `large` int(11) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `rhl`
--

CREATE TABLE `rhl` (
  `id_rhl` int(10) UNSIGNED NOT NULL,
  `id_city` int(10) UNSIGNED NOT NULL,
  `large` int(11) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'faqiharifianaji@gmail.com', '$2y$10$fnN.QrTa83pPsVPrFUrZheus0ZWntou6/w/s9kizWHz7SO3KkQVvq', 'admin'),
(4, 'faqvhack@gmail.com', '$2y$10$AIhNWxiFwKPV4mD5Dkh.lOBpaeQfJ3dLgOsvjsf9ZZs9dvnsuUE/W', 'manager'),
(5, 'adik@admin.com', '$2y$10$G/I/RX7OPDTEDdT3DW.af.vfiAERd91IvCqsDzsNPEPf9l34R8.rq', 'admin'),
(6, 'adik@manager.com', '$2y$10$G/I/RX7OPDTEDdT3DW.af.vfiAERd91IvCqsDzsNPEPf9l34R8.rq', 'manager');

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
  MODIFY `id_city` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `kbr`
--
ALTER TABLE `kbr`
  MODIFY `id_kbr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `obit`
--
ALTER TABLE `obit`
  MODIFY `id_obit` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rhl`
--
ALTER TABLE `rhl`
  MODIFY `id_rhl` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
