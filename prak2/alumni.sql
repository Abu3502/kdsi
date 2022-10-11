-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2022 at 01:38 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni_informatika`
--

CREATE TABLE `alumni_informatika` (
  `NIM` int(12) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `JUDUL_SKRIPSI` varchar(200) NOT NULL,
  `TAHUN_MASUK` int(4) NOT NULL,
  `TAHUN_LULUS` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni_informatika`
--

INSERT INTO `alumni_informatika` (`NIM`, `NAMA`, `JUDUL_SKRIPSI`, `TAHUN_MASUK`, `TAHUN_LULUS`) VALUES
(20106050, 'Joko', 'Cara jadi presiden', 2000, 2004);

-- --------------------------------------------------------

--
-- Table structure for table `detail_alumni`
--

CREATE TABLE `detail_alumni` (
  `NIK` int(16) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `TTL` varchar(100) NOT NULL,
  `ALAMAT` varchar(200) NOT NULL,
  `NAMA_AYAH` varchar(100) NOT NULL,
  `NAMA_IBU` varchar(100) NOT NULL,
  `PEKERJAAN` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_alumni`
--

INSERT INTO `detail_alumni` (`NIK`, `NAMA`, `TTL`, `ALAMAT`, `NAMA_AYAH`, `NAMA_IBU`, `PEKERJAAN`) VALUES
(1910207050, 'Joko', 'Jakarta, 19 September 1980', 'Mariat Pantai, Aimas, Kabupaten Sorong, Papua Barat', 'Tursino', 'Tukiyem', 'Presiden');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni_informatika`
--
ALTER TABLE `alumni_informatika`
  ADD PRIMARY KEY (`NIM`),
  ADD KEY `NAMA` (`NAMA`);

--
-- Indexes for table `detail_alumni`
--
ALTER TABLE `detail_alumni`
  ADD PRIMARY KEY (`NIK`),
  ADD KEY `NAMA` (`NAMA`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_alumni`
--
ALTER TABLE `detail_alumni`
  ADD CONSTRAINT `detail_alumni_ibfk_1` FOREIGN KEY (`NAMA`) REFERENCES `alumni_informatika` (`NAMA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
