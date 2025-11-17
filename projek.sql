-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2025 at 02:11 AM
-- Server version: 8.0.43
-- PHP Version: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataseni`
--

CREATE TABLE `dataseni` (
  `ID_Seni` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `Jenis_Seni` text COLLATE utf8mb4_general_ci NOT NULL,
  `Judul_Seni` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `Nama_Seniman` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `Tahun_Pembuatan` int NOT NULL,
  `Durasi_Pembuatan` varchar(500) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dataseni`
--

INSERT INTO `dataseni` (`ID_Seni`, `Jenis_Seni`, `Judul_Seni`, `Nama_Seniman`, `Tahun_Pembuatan`, `Durasi_Pembuatan`) VALUES
('L002', 'Patung', 'The Giant Book', 'John Chris ', 1949, '12 tahun'),
('L003', 'Patung', 'The Clock', 'Evans', 1789, '5 bulan'),
('L005', 'Patung', 'The Smile', 'Smith', 1111, '20 tahun'),
('L006', 'Patung', 'Smart Boy', 'Thomas', 1345, '7 tahun'),
('L007', 'Perhiasan', 'The Crown', 'Paul', 1091, '12 tahun');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Full_Name` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Username` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `Age` int NOT NULL,
  `Email` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `Password` varchar(500) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Full_Name`, `Username`, `Age`, `Email`, `Password`) VALUES
('Clarissa ', 'siap', 11, 'siap@gmail.com', '$2y$10$3WWya3DV9tXGiFKjRSAXoeBcoyNMi6IMvtFR76x7fBFRfHp6U6JTK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataseni`
--
ALTER TABLE `dataseni`
  ADD PRIMARY KEY (`ID_Seni`),
  ADD UNIQUE KEY `Judul_Seni` (`Judul_Seni`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Full Name` (`Full_Name`),
  ADD UNIQUE KEY `Email` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
