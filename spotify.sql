-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 11, 2019 at 06:27 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spotify`
--

-- --------------------------------------------------------

--
-- Table structure for table `lagu`
--

CREATE TABLE `lagu` (
  `kd_lagu` int(11) NOT NULL,
  `jdl_lagu` varchar(20) NOT NULL,
  `penyanyi` varchar(20) NOT NULL,
  `album` varchar(20) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jns_lagu` varchar(15) NOT NULL,
  `negara_asal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `kd_payment` int(11) NOT NULL,
  `mtd_payment` varchar(15) NOT NULL,
  `tgl_payment` date NOT NULL,
  `nml_payment` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `kd_playlist` int(11) NOT NULL,
  `nm_playlist` varchar(50) NOT NULL,
  `kd_user` int(11) NOT NULL,
  `kd_lagu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status_users`
--

CREATE TABLE `status_users` (
  `kd_status` int(11) NOT NULL,
  `tgl_berlaku` date NOT NULL,
  `kd_user` int(11) NOT NULL,
  `kd_payment` int(11) NOT NULL,
  `status_user` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `kd_user` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(191) NOT NULL,
  `jk` char(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`kd_user`, `nama`, `email`, `password`, `jk`, `tgl_lahir`, `level`) VALUES
(1, 'fakta', 'fakta@gmail.com', '1a6fb3e0d81c89c0a796e6b9ef1fee49', 'L', '2019-11-01', 1),
(2, 'arief', 'arief@gmail.com', '079fcac7902d9fb41b269ada64a932a0', 'L', '2019-11-02', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lagu`
--
ALTER TABLE `lagu`
  ADD PRIMARY KEY (`kd_lagu`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`kd_payment`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`kd_playlist`),
  ADD KEY `fk_kd_user` (`kd_user`),
  ADD KEY `fk_kd_lagu` (`kd_lagu`);

--
-- Indexes for table `status_users`
--
ALTER TABLE `status_users`
  ADD PRIMARY KEY (`kd_status`),
  ADD KEY `fk_kode_user` (`kd_user`),
  ADD KEY `fk_kd_payment` (`kd_payment`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lagu`
--
ALTER TABLE `lagu`
  MODIFY `kd_lagu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `kd_payment` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `kd_playlist` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status_users`
--
ALTER TABLE `status_users`
  MODIFY `kd_status` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `kd_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `fk_kd_lagu` FOREIGN KEY (`kd_lagu`) REFERENCES `lagu` (`kd_lagu`),
  ADD CONSTRAINT `fk_kd_user` FOREIGN KEY (`kd_user`) REFERENCES `users` (`kd_user`);

--
-- Constraints for table `status_users`
--
ALTER TABLE `status_users`
  ADD CONSTRAINT `fk_kd_payment` FOREIGN KEY (`kd_payment`) REFERENCES `payments` (`kd_payment`),
  ADD CONSTRAINT `fk_kode_user` FOREIGN KEY (`kd_user`) REFERENCES `users` (`kd_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
