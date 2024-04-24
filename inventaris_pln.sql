-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2024 at 08:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris_pln`
--

-- --------------------------------------------------------

--
-- Table structure for table `air`
--

CREATE TABLE `air` (
  `tanggal_permintaan` date DEFAULT NULL,
  `jenis_air` varchar(20) DEFAULT NULL,
  `jumlah` int(5) DEFAULT NULL,
  `keterangan` varchar(25) DEFAULT NULL,
  `gedung` varchar(20) DEFAULT NULL,
  `id_air` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `air`
--

INSERT INTO `air` (`tanggal_permintaan`, `jenis_air`, `jumlah`, `keterangan`, `gedung`, `id_air`) VALUES
('2023-12-01', 'Air Mineral Galon', 1, 'OPFKON', 'PLN UIP SUMBAGSEL', NULL),
('2023-12-01', 'Air Mineral Galon', 1, 'PENGADAAN LT 3', 'PLN UIP SUMBAGSEL', NULL),
('2023-12-01', 'Air Mineral Galon', 1, 'BUM', 'PLN UIP SUMBAGSEL', NULL),
('2023-12-01', 'Air Mineral 330 Ml', 2, 'BUM', 'PLN UIP SUMBAGSEL', NULL),
('2023-12-01', 'Air Mineral Galon', 2, 'POS', 'PLN UIP SUMBAGSEL', NULL),
('2023-12-01', 'Air Mineral Galon', 2, 'REN', 'PLN UIP SUMBAGSEL', NULL),
('2023-12-01', 'Air Mineral Galon', 4, 'R.UPPSBS 1', 'PLN UIP SUMBAGSEL', NULL),
('2023-12-01', 'Air Mineral 330 Ml', 1, 'R.RAPAT UPPS 1', 'PLN UIP SUMBAGSEL', NULL),
('2023-12-01', 'Air Mineral 600 Ml', 4, 'AULA/KEMARO', 'PLN UIP SUMBAGSEL', NULL),
('2023-12-01', 'Air Mineral Galon', 2, 'PTN', 'PLN UIP SUMBAGSEL', NULL),
('2023-12-01', 'Air Mineral 330 Ml', 2, 'PTN/GM', 'PLN UIP SUMBAGSEL', NULL),
('2023-12-01', 'Air Mineral Galon', 1, 'BADMINTON', 'PLN UIP SUMBAGSEL', NULL),
('2023-12-01', 'Air Mineral 600 Ml', 4, 'SENAM', 'PLN UIP SUMBAGSEL', NULL),
('2023-12-01', 'Air Mineral 330 Ml', 2, 'BADMINTON', 'PLN UIP SUMBAGSEL', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `perkakas`
--

CREATE TABLE `perkakas` (
  `tanggal_permintaan` date DEFAULT NULL,
  `jenis_perkakas` varchar(20) DEFAULT NULL,
  `jumlah` int(5) DEFAULT NULL,
  `keterangan` varchar(25) DEFAULT NULL,
  `gedung` varchar(20) DEFAULT NULL,
  `lantai` varchar(10) DEFAULT NULL,
  `id_perkakas` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
