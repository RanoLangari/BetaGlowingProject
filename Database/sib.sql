-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 09:21 AM
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
-- Database: `sib`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderan`
--

CREATE TABLE `orderan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(256) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `harga` int(255) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `pass`, `role`) VALUES
(1, 'ranolangari24', 'langarirano@gmail.com', '$2y$10$oxR8gh3T.H/a2/XMh96iuOoX.8gbwAY55TOf/jhONpdmBhlD6NlSe', 0),
(4, 'ranolangari56', 'Admin@gmail.com', '$2y$10$PezoEVhA07C2rhejNuobI.worzisvzaN31kfEtrMrTfnofe3OmZGi', 0),
(5, 'test', 'test2@gmail.com', '$2y$10$PezoEVhA07C2rhejNuobI.worzisvzaN31kfEtrMrTfnofe3OmZGi', 0),
(6, 'test23', 'yayayakalah@gmail.com', '$2y$10$2kr.SmQ5Zgpqmarjlzlt2eKahUfviH.XvlxoRcWaP3hPzYlYFNsTy', 0),
(7, 'testapk', 'testapk@gmail.com', '$2y$10$mkALUJWPvfYg.2ZKfZFgP.T5m5fiJHZY/IykX9E5kXkq8yllC8zFy', 0),
(8, 'toni', 'test20@gmail.com', '$2y$10$14RshSkVuTTcixLok/6kTO7Zp9cV1gOY2Sbeuv2As3Fq5VhbNLPOW', 0),
(9, 'Administrator', 'admin@gmail.com', '$2y$10$LYgCPh9vOQgkVHR0gIjr3OPzAjKBri.VfxeZ7g9EhJd/spJL814YK', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderan`
--
ALTER TABLE `orderan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderan`
--
ALTER TABLE `orderan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
