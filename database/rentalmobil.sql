-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 07:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalmobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `psw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `email`, `psw`) VALUES
(1, 'anisa', 'anisacantik', 'anisaaaftri@gmail.com', 'anisa123'),
(2, 'arum', 'arumcomel', 'arum0312@gmail.com', 'arum123'),
(3, 'carmen', 'carmennita', 'carmennita@gmail.com', 'carmen123'),
(4, 'jamal', 'jamal1', 'jamalludin@gmail.com', 'jamal123');

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `psw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nama`, `username`, `email`, `psw`) VALUES
(1, 'rehan', 'rehan1', 'rehanfadlur@gmail.com', 'rehan123'),
(2, 'korin', 'korina', 'korina123@gmail.com', 'korin123');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `transmisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `foto`, `name`, `harga`, `transmisi`) VALUES
(1, 'vehicle-1.png', 'Avanza', 'Rp.450.000.00', 'MANUAL'),
(2, 'inova.jpg', 'KIJANG INOVA', 'Rp.550.000.00', 'MATIC'),
(3, 'ayla.jpg', 'AYLA', 'Rp.400.000.00', 'MATIC');

-- --------------------------------------------------------

--
-- Table structure for table `rentcar`
--

CREATE TABLE `rentcar` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telpon` varchar(255) NOT NULL,
  `fotokk` varchar(255) NOT NULL,
  `fotoktp` varchar(255) NOT NULL,
  `fotosim` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rentcar`
--

INSERT INTO `rentcar` (`id`, `name`, `pesan`, `alamat`, `telpon`, `fotokk`, `fotoktp`, `fotosim`, `time`) VALUES
(1, 'rehan', '', 'suwandi', '12345678', 'car-2.png', 'car-3.png', 'car-1.png', '12-11-2022 03:54:59pm'),
(2, 'korin', 'PAJERO', 'kemuning', '98765432', 'car-8.png', 'car-7.png', 'car-5.png', '142-11-2022 07:26:09pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentcar`
--
ALTER TABLE `rentcar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rentcar`
--
ALTER TABLE `rentcar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
