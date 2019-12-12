-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2019 at 07:11 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `kd_admin` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `tgl_lahir` varchar(64) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`kd_admin`, `nama`, `email`, `password`, `tgl_lahir`, `jk`, `level`) VALUES
(1, 'admin', 'admin@spotify.com', '1a6fb3e0d81c89c0a796e6b9ef1fee49', '11-12-2019', 'L', 1);

-- --------------------------------------------------------

--
-- Table structure for table `genre_music`
--

CREATE TABLE `genre_music` (
  `kd_genre` int(11) NOT NULL,
  `tgl_buat` int(11) DEFAULT NULL,
  `genre` varchar(10) DEFAULT NULL,
  `thumbnail` varchar(128) DEFAULT NULL,
  `slug` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre_music`
--

INSERT INTO `genre_music` (`kd_genre`, `tgl_buat`, `genre`, `thumbnail`, `slug`) VALUES
(1, 0, 'Pop Indo', 'pop-indo.jpg', 'pop-indo'),
(2, 0, 'Dangdut', 'dangdut.jpg', 'dangdut'),
(3, 0, 'Lawas', 'lawas.jpg', 'lawas'),
(5, 0, 'Rock', 'rock.jpg', 'rock'),
(6, 1575878779, 'Jazz', 'jazz.jpg', 'jazz'),
(8, 1575964331, 'EDM', 'edm.jpg', 'edm'),
(10, 1576068686, 'Melodi', 'melodi.jpg', 'melodi');

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
(35, 1576042001, 'Via Vallen', 'Sayang', 2, 'Bojo Galak', '2016'),
(36, 1576068789, 'Nike Ardiles', 'Bintang Kehidupan', 3, 'Bintang Kehidupan', '1998');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `kd_user` int(11) NOT NULL,
  `nama` varchar(60) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `jk` char(1) DEFAULT NULL,
  `tgl_lahir` varchar(10) DEFAULT NULL,
  `level` int(1) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`kd_user`, `nama`, `email`, `password`, `jk`, `tgl_lahir`, `level`, `status`) VALUES
(1, 'Fakta', 'faktaarief99@gmail.com', '1a6fb3e0d81c89c0a796e6b9ef1fee49', 'L', '20-11-2019', 1, 1),
(28, 'Rina', 'rina@gmail.com', '9a1591b6e5317fb71c6032eedd5c051a', 'P', '12-12-2019', 1, 1),
(29, 'Ani', 'ani@gmail.com', 'a6c45362cf65dee14014c5396509ba22', 'P', '11-11-1999', 2, 0),
(30, 'Zian Fauzi', 'zian@gmail.com', '9e23ae2c02bc2700321c412cab795271', 'L', '12-11-1999', 1, 1),
(31, 'Andi', 'andi@gmail.com', '03339dc0dff443f15c254baccde9bece', 'L', '02-03-1998', 1, 1),
(32, 'Fachri Ahmad', 'fachri@gmail.com', '1c8dd89d1317c560d37fd0139aac514e', 'L', '04-12-2019', 1, 1),
(33, 'Rindi', 'rindi@gmail.com', '1a063bcb572a202c08ea012ab0d8c46d', 'P', '24-12-2019', 2, 0),
(34, 'Andi Saputro', 'andisaputro@gmail.com', '1d69ded7713f92f0f41ddfc0cdbcdb80', 'L', '10-12-2019', 2, 1),
(35, 'Bejo', 'bejo@gmail.com', '7a0c4c5d613a6fbfd2a015aac5df2e03', 'L', '12-12-2019', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kd_admin`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `kd_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `genre_music`
--
ALTER TABLE `genre_music`
  MODIFY `kd_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `lagu`
--
ALTER TABLE `lagu`
  MODIFY `kd_lagu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `kd_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lagu`
--
ALTER TABLE `lagu`
  ADD CONSTRAINT `lagu_ibfk_1` FOREIGN KEY (`kd_genre`) REFERENCES `genre_music` (`kd_genre`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
