-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2019 at 01:14 PM
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
-- Table structure for table `genre_music`
--

CREATE TABLE `genre_music` (
  `kd_genre` int(11) NOT NULL,
  `genre` varchar(10) NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `slug` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre_music`
--

INSERT INTO `genre_music` (`kd_genre`, `genre`, `thumbnail`, `slug`) VALUES
(1, 'Pop Indo', 'pop-indo.jpg', 'pop-indo'),
(2, 'Dangdut', 'dangdut.jpg', 'dangdut'),
(3, 'Lawas', 'lawas.jpg', 'lawas');

-- --------------------------------------------------------

--
-- Table structure for table `lagu`
--

CREATE TABLE `lagu` (
  `kd_lagu` int(11) NOT NULL,
  `tgl_upload` int(11) NOT NULL,
  `penyanyi` varchar(30) DEFAULT NULL,
  `judul_lagu` varchar(50) DEFAULT NULL,
  `kd_genre` int(11) DEFAULT NULL,
  `album` varchar(64) DEFAULT NULL,
  `dirilis` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lagu`
--

INSERT INTO `lagu` (`kd_lagu`, `tgl_upload`, `penyanyi`, `judul_lagu`, `kd_genre`, `album`, `dirilis`) VALUES
(25, 1575864637, 'Wali Band', 'Yank', 1, 'Baik-Baik Sayang', '2008'),
(26, 1575865324, 'Nike Ardila', 'Bintang Kehidupan', 3, 'Ku Tak Akan Bersuara', '1998'),
(27, 1575865706, 'Via Vallen', 'Sayang', 2, 'Sayang', '2018');

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
  `kd_lagu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status_users`
--

CREATE TABLE `status_users` (
  `id` int(11) NOT NULL,
  `kd_status` int(11) DEFAULT NULL,
  `tgl_berlaku` date DEFAULT NULL,
  `kd_user` int(11) DEFAULT NULL,
  `status_user` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_users`
--

INSERT INTO `status_users` (`id`, `kd_status`, `tgl_berlaku`, `kd_user`, `status_user`) VALUES
(1, NULL, NULL, 27, NULL);

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
  `tgl_lahir` varchar(10) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`kd_user`, `nama`, `email`, `password`, `jk`, `tgl_lahir`, `level`) VALUES
(1, 'fakta', 'fakta@gmail.com', '1a6fb3e0d81c89c0a796e6b9ef1fee49', 'L', '2019-11-01', 1),
(2, 'arief', 'arief@gmail.com', '079fcac7902d9fb41b269ada64a932a0', 'L', '2019-11-02', 2),
(27, 'Zian', 'zian@gmail.com', 'f311f0f605240e7a6a8f8f217aaac06d', 'L', '17-11-2019', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genre_music`
--
ALTER TABLE `genre_music`
  ADD PRIMARY KEY (`kd_genre`);

--
-- Indexes for table `lagu`
--
ALTER TABLE `lagu`
  ADD PRIMARY KEY (`kd_lagu`),
  ADD KEY `genre` (`kd_genre`);

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
  ADD KEY `fk_kd_lagu` (`kd_lagu`);

--
-- Indexes for table `status_users`
--
ALTER TABLE `status_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kd_user` (`kd_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genre_music`
--
ALTER TABLE `genre_music`
  MODIFY `kd_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lagu`
--
ALTER TABLE `lagu`
  MODIFY `kd_lagu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `kd_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lagu`
--
ALTER TABLE `lagu`
  ADD CONSTRAINT `lagu_ibfk_1` FOREIGN KEY (`kd_genre`) REFERENCES `genre_music` (`kd_genre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `fk_kd_lagu` FOREIGN KEY (`kd_lagu`) REFERENCES `lagu` (`kd_lagu`);

--
-- Constraints for table `status_users`
--
ALTER TABLE `status_users`
  ADD CONSTRAINT `kd_user` FOREIGN KEY (`kd_user`) REFERENCES `users` (`kd_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
