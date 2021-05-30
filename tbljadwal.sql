-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 05:17 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbljadwal`
--

CREATE TABLE `tbljadwal` (
  `id` int(11) NOT NULL,
  `jadwal` int(4) NOT NULL,
  `hari` varchar(8) NOT NULL,
  `thnakademik` varchar(10) NOT NULL,
  `semester` varchar(6) NOT NULL,
  `kodemk` varchar(12) NOT NULL,
  `sesi` char(1) NOT NULL,
  `jammasuk` time NOT NULL,
  `jamkeluar` time NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `ruang` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `kelassesi` varchar(8) NOT NULL,
  `kodedosen` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
