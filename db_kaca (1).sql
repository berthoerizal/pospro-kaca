-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2019 at 07:43 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kaca`
--

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id` int(11) NOT NULL,
  `author` varchar(25) DEFAULT NULL,
  `nama_web` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id`, `author`, `nama_web`) VALUES
(1, 'DataSains', 'KACA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_datasets`
--

CREATE TABLE `tb_datasets` (
  `id` int(11) NOT NULL,
  `ri` float DEFAULT NULL,
  `na` float DEFAULT NULL,
  `mg` float DEFAULT NULL,
  `al` float DEFAULT NULL,
  `si` float DEFAULT NULL,
  `k` float DEFAULT NULL,
  `ca` float DEFAULT NULL,
  `ba` float DEFAULT NULL,
  `fe` float DEFAULT NULL,
  `id_jenis` int(11) DEFAULT NULL,
  `jarak` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis`
--

CREATE TABLE `tb_jenis` (
  `id` int(11) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL,
  `kode_jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis`
--

INSERT INTO `tb_jenis` (`id`, `nama_jenis`, `kode_jenis`) VALUES
(10, 'building_windows_float_processed', 1),
(11, 'building_windows_non_float_processed', 2),
(12, 'vehicle_windows_float_processed', 3),
(13, 'vehicle_windows_non_float_processed', 4),
(14, 'containers', 5),
(15, 'tableware', 6),
(16, 'headlamps', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(256) NOT NULL,
  `name` varchar(25) NOT NULL,
  `akses_level` int(2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `akses_level`, `date`) VALUES
(4, 'berthoerizal21@gmail.com', '1e049da799a7d2e6f2eb5415de9e5c4fa9236a74', 'Bertho Erizal', 1, '2019-12-08 05:30:26'),
(5, 'erizal@gmail.com', '1e049da799a7d2e6f2eb5415de9e5c4fa9236a74', 'erizal', 2, '2019-12-08 05:31:55'),
(6, 'nanang@gmail.com', '100c9aea9fdef59da918237e1d3e19919f845857', 'Nanang Gusti Rama', 2, '2019-12-21 03:05:16'),
(7, 'nng@gmail.com', '100c9aea9fdef59da918237e1d3e19919f845857', 'Nanang', 2, '2019-12-21 03:15:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_datasets`
--
ALTER TABLE `tb_datasets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_jenis` (`kode_jenis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_datasets`
--
ALTER TABLE `tb_datasets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=457;

--
-- AUTO_INCREMENT for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
