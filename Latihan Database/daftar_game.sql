-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 02:22 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game_favorit`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_game`
--

CREATE TABLE `daftar_game` (
  `code_game` varchar(11) NOT NULL,
  `nama_game` text NOT NULL,
  `publisher` varchar(25) NOT NULL,
  `harga` int(11) NOT NULL,
  `tahun_rilis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar_game`
--

INSERT INTO `daftar_game` (`code_game`, `nama_game`, `publisher`, `harga`, `tahun_rilis`) VALUES
('001', 'COD : MW 2', 'Activision', 800000, 2022),
('002', 'AC Origins', 'Ubisoft', 200000, 2018);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
