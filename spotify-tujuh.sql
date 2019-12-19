-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 19, 2019 at 08:21 PM
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
(7, 'a_Tera', 'tera@gmail.com', 'bf80297bbfba71b33fc7d261bfdec8d0', '12-11-1999', 'L', 1),
(8, 'a_Giga', 'giga@gmail.com', '0e95b4a18af3de1fcdcace39a324e4d3', '12-11-1999', 'L', 2),
(9, 'a_Mega', 'mega@gmail.com', 'cd34f589fb25dd5d09de72df0dd83949', '25-11-2019', 'L', 3);

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
  `dirilis` varchar(32) DEFAULT NULL,
  `kd_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lagu`
--

INSERT INTO `lagu` (`kd_lagu`, `tgl_upload`, `penyanyi`, `judul_lagu`, `kd_genre`, `album`, `dirilis`, `kd_admin`) VALUES
(46, 1576224761, 'Denny Caknan', 'Sampe Tuwek', 1, 'Sampe Tuwek', '2019', 8),
(47, 1576224877, 'Guyon Waton', 'Korban Janji', 1, 'Korban Janji', '2018', 7),
(48, 1576224950, 'Wali', 'Yank', 1, 'Baik-Baik Sayang', '2006', 7);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `date` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `kd_user` int(11) NOT NULL,
  `nama` varchar(60) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `foto` varchar(64) NOT NULL DEFAULT 'anonim.jpg',
  `jk` char(1) DEFAULT NULL,
  `tgl_lahir` varchar(10) DEFAULT NULL,
  `level` int(1) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`kd_user`, `nama`, `email`, `password`, `foto`, `jk`, `tgl_lahir`, `level`, `status`) VALUES
(1, 'Fakta', 'faktaarief99@gmail.com', '1a6fb3e0d81c89c0a796e6b9ef1fee49', 'anonim.jpg', 'L', '20-11-2019', 1, 1),
(31, 'Andi', 'andi@gmail.com', '03339dc0dff443f15c254baccde9bece', 'anonim.jpg', 'L', '02-03-1998', 1, 1),
(32, 'Fachri Ahmad', 'fachri@gmail.com', '1c8dd89d1317c560d37fd0139aac514e', 'anonim.jpg', 'L', '04-12-2019', 1, 1),
(69, 'Fakta', 'faktaarief16@gmail.com', '1a6fb3e0d81c89c0a796e6b9ef1fee49', 'anonim.jpg', 'L', '12-12-2019', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD KEY `genre` (`kd_genre`),
  ADD KEY `kd_admin` (`kd_admin`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`kd_user`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `kd_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `genre_music`
--
ALTER TABLE `genre_music`
  MODIFY `kd_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `lagu`
--
ALTER TABLE `lagu`
  MODIFY `kd_lagu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `kd_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lagu`
--
ALTER TABLE `lagu`
  ADD CONSTRAINT `lagu_ibfk_1` FOREIGN KEY (`kd_genre`) REFERENCES `genre_music` (`kd_genre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lagu_ibfk_2` FOREIGN KEY (`kd_admin`) REFERENCES `admin` (`kd_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
