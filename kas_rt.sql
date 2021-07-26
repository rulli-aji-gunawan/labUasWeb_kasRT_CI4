-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2021 at 08:09 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kas_rt`
--

-- --------------------------------------------------------

--
-- Table structure for table `iuran`
--

CREATE TABLE `iuran` (
  `id` int(11) NOT NULL,
  `keterangan` tinytext DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `bulan` int(2) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `jumlah` decimal(10,2) DEFAULT NULL,
  `warga_id` int(11) NOT NULL,
  `slug` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iuran`
--

INSERT INTO `iuran` (`id`, `keterangan`, `tanggal`, `bulan`, `tahun`, `jumlah`, `warga_id`, `slug`) VALUES
(1, 'Iuran Keamanan', '2020-12-08', 12, 2020, '70000.00', 1, '1'),
(2, 'Iuran Keamanan', '2020-12-08', 12, 2020, '70000.00', 2, '2'),
(3, 'Iuran Keamanan', '2020-12-09', 12, 2020, '70000.00', 3, '3'),
(4, 'Iuran Keamanan', '2020-12-09', 12, 2020, '70000.00', 4, '4'),
(5, 'Iuran Keamanan', '2020-12-09', 12, 2020, '70000.00', 5, '5'),
(6, 'Iuran Keamanan', '2020-12-09', 12, 2020, '70000.00', 6, '6'),
(7, 'Iuran Keamanan', '2020-12-10', 12, 2020, '70000.00', 7, '7'),
(8, 'Iuran Keamanan', '2020-12-10', 12, 2020, '70000.00', 8, '8'),
(9, 'Iuran Keamanan', '2020-12-10', 12, 2020, '70000.00', 9, '9'),
(10, 'Iuran Sampah', '2020-12-17', 12, 2020, '30000.00', 1, '1'),
(11, 'Iuran Sampah', '2020-12-17', 12, 2020, '30000.00', 2, '2'),
(12, 'Iuran Sampah', '2020-12-17', 12, 2021, '30000.00', 3, '3'),
(13, 'Iuran Sampah', '2020-12-17', 12, 2020, '30000.00', 5, '5'),
(14, 'Iuran Keamanan', '2021-01-06', 1, 2021, '70000.00', 1, '1'),
(15, 'Iuran Sampah', '2021-01-07', 1, 2021, '30000.00', 1, '1'),
(16, 'Iuran Keamanan', '2021-01-07', 1, 2021, '70000.00', 5, '5'),
(17, 'Iuran Keamanan', '2021-01-08', 1, 2021, '70000.00', 2, '2'),
(19, 'Iuran Keamanan', '2021-01-09', 1, 2021, '70000.00', 3, '3'),
(37, 'Iuran Keamanan', '2021-01-10', 1, 2021, '70000.00', 5, '5'),
(38, 'Iuran Keamanan', '2021-01-10', 1, 2021, '70000.00', 6, '6'),
(39, 'Iuran Keamanan', '2021-01-10', 1, 2021, '70000.00', 7, '7'),
(40, 'Iuran Keamanan', '2021-01-10', 1, 2021, '70000.00', 9, '9'),
(41, 'Iuran Keamanan', '2021-07-25', 2, 2021, '700000.00', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id` int(11) NOT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `nama` varchar(200) NOT NULL,
  `kelamin` enum('L','P') DEFAULT NULL,
  `alamat` tinytext DEFAULT NULL,
  `no_rumah` varchar(10) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL COMMENT '0 = Warga Kontrak\r\n1 = Warga Tetap',
  `slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id`, `nik`, `nama`, `kelamin`, `alamat`, `no_rumah`, `status`, `slug`) VALUES
(1, '33230790763987207', 'Alex M', 'L', 'Blok-B', '12', 0, '33230790763987207'),
(2, '33231997880722904', 'Budi', 'L', 'Blok-A', '2', 1, '33231997880722904'),
(3, '33230437100660706', 'Andre', 'L', 'Blok-A', '3', 1, '33230437100660706'),
(4, '33231185023314707', 'Firman', 'L', 'Blok-B', '1', 0, '33231185023314707'),
(5, '33230655033424002', 'Haryanto', 'L', 'Blok-B', '2', 0, '33230655033424002'),
(6, '33230892690216701', 'Intan', 'P', 'Blok-B', '3', 1, '33230892690216701'),
(7, '33230968044220703', 'Indra', 'L', 'Blok-C', '1', 1, '33230968044220703'),
(8, '33231727584024705', 'Catur', 'L', 'Blok-C', '2', 0, '33231727584024705'),
(9, '33231716137219108', 'Putri Ayu', 'P', 'Blok-C', '3', 1, '33231716137219108');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iuran`
--
ALTER TABLE `iuran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `warga_id` (`warga_id`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iuran`
--
ALTER TABLE `iuran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
