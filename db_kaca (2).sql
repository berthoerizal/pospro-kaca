-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2020 at 06:01 PM
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
  `id_jenis` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_datasets`
--

INSERT INTO `tb_datasets` (`id`, `ri`, `na`, `mg`, `al`, `si`, `k`, `ca`, `ba`, `fe`, `id_jenis`) VALUES
(1, 1.52101, 13.64, 4.49, 1.1, 71.78, 0.06, 8.75, 0, 0, 1),
(2, 1.51761, 13.89, 3.6, 1.36, 72.73, 0.48, 7.83, 0, 0, 1),
(3, 1.51618, 13.53, 3.55, 1.54, 72.99, 0.39, 7.78, 0, 0, 1),
(4, 1.51766, 13.21, 3.69, 1.29, 72.61, 0.57, 8.22, 0, 0, 1),
(5, 1.51742, 13.27, 3.62, 1.24, 73.08, 0.55, 8.07, 0, 0, 1),
(6, 1.51596, 12.79, 3.61, 1.62, 72.97, 0.64, 8.07, 0, 0.26, 1),
(7, 1.51743, 13.3, 3.6, 1.14, 73.09, 0.58, 8.17, 0, 0, 1),
(8, 1.51756, 13.15, 3.61, 1.05, 73.24, 0.57, 8.24, 0, 0, 1),
(9, 1.51918, 14.04, 3.58, 1.37, 72.08, 0.56, 8.3, 0, 0, 1),
(10, 1.51755, 13, 3.6, 1.36, 72.99, 0.57, 8.4, 0, 0.11, 1),
(11, 1.51571, 12.72, 3.46, 1.56, 73.2, 0.67, 8.09, 0, 0.24, 1),
(12, 1.51763, 12.8, 3.66, 1.27, 73.01, 0.6, 8.56, 0, 0, 1),
(13, 1.51589, 12.88, 3.43, 1.4, 73.28, 0.69, 8.05, 0, 0.24, 1),
(14, 1.51748, 12.88, 3.56, 1.27, 73.21, 0.54, 8.38, 0, 0.17, 1),
(15, 1.51763, 12.88, 3.59, 1.31, 73.29, 0.58, 8.5, 0, 0, 1),
(16, 1.51761, 12.88, 3.54, 1.23, 73.24, 0.58, 8.39, 0, 0, 1),
(17, 1.51784, 12.88, 3.67, 1.16, 73.11, 0.61, 8.7, 0, 0, 1),
(18, 1.52196, 12.88, 3.85, 0.89, 71.36, 0.15, 9.15, 0, 0, 1),
(19, 1.51911, 12.88, 3.73, 1.18, 72.12, 0.06, 8.89, 0, 0, 1),
(20, 1.51735, 12.88, 3.54, 1.69, 72.73, 0.54, 8.44, 0, 0.07, 1),
(21, 1.5175, 12.88, 3.55, 1.49, 72.75, 0.54, 8.52, 0, 0.19, 1),
(22, 1.51966, 12.88, 3.75, 0.29, 72.02, 0.03, 9, 0, 0, 1),
(23, 1.51736, 12.88, 3.62, 1.29, 72.79, 0.59, 8.7, 0, 0, 1),
(24, 1.51751, 12.88, 3.57, 1.35, 73.02, 0.62, 8.59, 0, 0, 1),
(25, 1.5172, 12.88, 3.5, 1.15, 72.85, 0.5, 8.43, 0, 0, 1),
(26, 1.51764, 12.88, 3.54, 1.21, 73, 0.65, 8.53, 0, 0, 1),
(27, 1.51793, 12.88, 3.48, 1.41, 72.64, 0.59, 8.43, 0, 0, 1),
(28, 1.51721, 12.88, 3.48, 1.33, 73.04, 0.56, 8.43, 0, 0, 1),
(29, 1.51768, 12.88, 3.52, 1.43, 73.15, 0.57, 8.54, 0, 0, 1),
(30, 1.51784, 12.88, 3.49, 1.28, 72.86, 0.6, 8.49, 0, 0, 1),
(31, 1.51768, 12.88, 3.56, 1.3, 73.08, 0.61, 8.69, 0, 0.14, 1),
(32, 1.51747, 12.88, 3.5, 1.14, 73.27, 0.56, 8.55, 0, 0, 1),
(33, 1.51775, 12.88, 3.48, 1.23, 72.97, 0.61, 8.56, 0.09, 0.22, 1),
(34, 1.51753, 12.88, 3.47, 1.38, 73.39, 0.6, 8.55, 0, 0.06, 1),
(35, 1.51783, 12.88, 3.54, 1.34, 72.95, 0.57, 8.75, 0, 0, 1),
(36, 1.51567, 12.88, 3.45, 1.21, 72.74, 0.56, 8.57, 0, 0, 1),
(37, 1.51909, 12.88, 3.53, 1.32, 71.81, 0.51, 8.78, 0.11, 0, 1),
(38, 1.51797, 12.88, 3.48, 1.35, 72.96, 0.64, 8.68, 0, 0, 1),
(39, 1.52213, 12.88, 3.82, 0.47, 71.77, 0.11, 9.57, 0, 0, 1),
(40, 1.52213, 12.88, 3.82, 0.47, 71.77, 0.11, 9.57, 0, 0, 1),
(41, 1.51793, 12.88, 3.5, 1.12, 73.03, 0.64, 8.77, 0, 0, 1),
(42, 1.51755, 12.88, 3.42, 1.2, 73.2, 0.59, 8.64, 0, 0, 1),
(43, 1.51574, 12.88, 3.67, 1.74, 71.87, 0.16, 7.36, 0, 0.12, 2),
(44, 1.51848, 12.88, 3.87, 1.27, 71.96, 0.54, 8.32, 0, 0.32, 2),
(45, 1.51593, 12.88, 3.59, 1.52, 73.1, 0.67, 7.83, 0, 0, 2),
(46, 1.51631, 12.88, 3.57, 1.57, 72.87, 0.61, 7.89, 0, 0, 2),
(47, 1.51596, 12.88, 3.56, 1.54, 73.11, 0.72, 7.9, 0, 0, 2),
(48, 1.5159, 12.88, 3.58, 1.51, 73.12, 0.69, 7.96, 0, 0, 2),
(49, 1.51645, 12.88, 3.61, 1.54, 72.39, 0.66, 8.03, 0, 0, 2),
(50, 1.51627, 12.88, 3.58, 1.54, 72.83, 0.61, 8.04, 0, 0, 2),
(51, 1.51613, 12.88, 3.52, 1.25, 72.88, 0.37, 7.94, 0, 0.14, 2),
(52, 1.5159, 12.88, 3.52, 1.9, 72.86, 0.69, 7.97, 0, 0, 2),
(53, 1.51592, 12.88, 3.52, 2.12, 72.66, 0.69, 7.97, 0, 0, 2),
(54, 1.51593, 12.88, 3.45, 1.43, 73.17, 0.61, 7.86, 0, 0, 2),
(55, 1.51646, 12.88, 3.55, 1.25, 72.81, 0.68, 8.1, 0, 0, 2),
(56, 1.51594, 12.88, 3.52, 1.55, 72.87, 0.68, 8.05, 0, 0.09, 2),
(57, 1.51409, 12.88, 3.09, 2.08, 72.28, 1.1, 7.08, 0, 0, 2),
(58, 1.51625, 12.88, 3.58, 1.49, 72.72, 0.45, 8.21, 0, 0, 2),
(59, 1.51569, 12.88, 3.49, 1.47, 73.25, 0.38, 8.03, 0, 0, 2),
(60, 1.51645, 12.88, 3.49, 1.52, 72.65, 0.67, 8.08, 0, 0.1, 2),
(61, 1.51618, 12.88, 3.5, 1.48, 72.89, 0.6, 8.12, 0, 0, 2),
(62, 1.5164, 12.88, 3.48, 1.87, 73.23, 0.63, 8.08, 0, 0.09, 2),
(63, 1.51841, 12.88, 3.74, 1.11, 72.28, 0.64, 8.96, 0, 0.22, 2),
(64, 1.51605, 12.88, 3.44, 1.45, 73.06, 0.44, 8.27, 0, 0, 2),
(65, 1.51588, 12.88, 3.41, 1.58, 73.26, 0.07, 8.39, 0, 0.19, 2),
(66, 1.5159, 12.88, 3.34, 1.47, 73.1, 0.39, 8.22, 0, 0, 2),
(67, 1.51629, 12.88, 3.33, 1.49, 73.28, 0.67, 8.24, 0, 0, 2),
(68, 1.5186, 12.88, 3.43, 1.43, 72.26, 0.51, 8.6, 0, 0, 2),
(69, 1.51841, 12.88, 3.62, 1.06, 72.34, 0.64, 9.13, 0, 0.15, 2),
(70, 1.51743, 12.88, 3.25, 1.16, 73.55, 0.62, 8.9, 0, 0.24, 2),
(71, 1.51689, 12.88, 2.88, 1.71, 73.21, 0.73, 8.54, 0, 0, 2),
(72, 1.51811, 12.88, 2.96, 1.43, 72.92, 0.6, 8.79, 0.14, 0, 2),
(73, 1.51655, 12.88, 2.85, 1.44, 73.27, 0.57, 8.79, 0.11, 0.22, 2),
(74, 1.5173, 12.88, 2.72, 1.63, 72.87, 0.7, 9.23, 0, 0, 2),
(75, 1.5182, 12.88, 2.76, 0.83, 73.81, 0.35, 9.42, 0, 0.2, 2),
(76, 1.52725, 12.88, 3.15, 0.66, 70.57, 0.08, 11.64, 0, 0, 2),
(77, 1.5241, 12.88, 2.9, 1.17, 71.15, 0.08, 10.79, 0, 0, 2),
(78, 1.52475, 12.88, 0, 1.88, 72.19, 0.81, 13.24, 0, 0.34, 2),
(79, 1.53125, 12.88, 0, 2.1, 69.81, 0.58, 13.3, 3.15, 0.28, 2),
(80, 1.53393, 12.88, 0, 1, 70.16, 0.12, 16.19, 0, 0.24, 2),
(81, 1.52222, 12.88, 0, 1, 72.67, 0.1, 11.52, 0, 0.08, 2),
(82, 1.51818, 12.88, 0, 0.56, 74.45, 0, 10.99, 0, 0, 2),
(83, 1.52664, 12.88, 0, 0.77, 73.21, 0, 14.68, 0, 0, 2),
(84, 1.52739, 12.88, 0, 0.75, 73.08, 0, 14.96, 0, 0, 2),
(85, 1.52777, 12.88, 0, 0.67, 72.02, 0.06, 14.4, 0, 0, 2),
(86, 1.51892, 12.88, 3.83, 1.26, 72.55, 0.57, 8.21, 0, 0.14, 2),
(87, 1.51847, 12.88, 3.97, 1.19, 72.44, 0.6, 8.43, 0, 0, 2),
(88, 1.51846, 12.88, 3.89, 1.33, 72.38, 0.51, 8.28, 0, 0, 2),
(89, 1.51829, 12.88, 3.9, 1.41, 72.33, 0.55, 8.31, 0, 0.1, 2),
(90, 1.51708, 12.88, 3.68, 1.81, 72.06, 0.64, 7.88, 0, 0, 2),
(91, 1.51673, 12.88, 3.64, 1.53, 72.53, 0.65, 8.03, 0, 0.29, 2),
(92, 1.51652, 12.88, 3.57, 1.47, 72.45, 0.64, 7.96, 0, 0, 2),
(93, 1.51844, 12.88, 3.76, 1.32, 72.4, 0.58, 8.42, 0, 0, 2),
(94, 1.51663, 12.88, 3.54, 1.62, 72.96, 0.64, 8.03, 0, 0.21, 2),
(95, 1.51687, 12.88, 3.54, 1.48, 72.84, 0.56, 8.1, 0, 0, 2),
(96, 1.51707, 12.88, 3.48, 1.71, 72.52, 0.62, 7.99, 0, 0, 2),
(97, 1.52177, 12.88, 3.68, 1.15, 72.75, 0.54, 8.52, 0, 0, 2),
(98, 1.51872, 12.88, 3.66, 1.56, 72.51, 0.58, 8.55, 0, 0.12, 2),
(99, 1.51667, 12.88, 3.61, 1.26, 72.75, 0.56, 8.6, 0, 0, 2),
(100, 1.52081, 12.88, 2.28, 1.43, 71.99, 0.49, 9.85, 0, 0.17, 2),
(101, 1.51769, 12.88, 3.66, 1.11, 72.77, 0.11, 8.6, 0, 0, 3),
(102, 1.5161, 12.88, 3.53, 1.34, 72.67, 0.56, 8.33, 0, 0, 3),
(103, 1.5167, 12.88, 3.57, 1.38, 72.7, 0.56, 8.44, 0, 0.1, 3),
(104, 1.51643, 12.88, 3.52, 1.35, 72.89, 0.57, 8.53, 0, 0, 3),
(105, 1.51665, 12.88, 3.45, 1.76, 72.48, 0.6, 8.38, 0, 0.17, 3),
(106, 1.52127, 12.88, 3.9, 0.83, 71.5, 0, 9.49, 0, 0, 3),
(107, 1.51779, 12.88, 3.65, 0.65, 73, 0.06, 8.93, 0, 0, 3),
(108, 1.5161, 12.88, 3.4, 1.22, 72.69, 0.59, 8.32, 0, 0, 3),
(109, 1.51694, 12.88, 3.58, 1.31, 72.61, 0.61, 8.79, 0, 0, 3),
(110, 1.51646, 12.88, 3.4, 1.26, 73.01, 0.52, 8.58, 0, 0, 3),
(111, 1.51514, 12.88, 2.68, 3.5, 69.89, 1.68, 5.87, 2.2, 0, 5),
(112, 1.51915, 12.88, 1.85, 1.86, 72.69, 0.6, 10.09, 0, 0, 5),
(113, 1.52171, 12.88, 1.88, 1.56, 72.86, 0.47, 11.41, 0, 0, 5),
(114, 1.52151, 12.88, 1.71, 1.56, 73.44, 0.58, 11.62, 0, 0, 5),
(115, 1.51969, 12.88, 0, 1.65, 73.75, 0.38, 11.53, 0, 0, 5),
(116, 1.51666, 12.88, 0, 1.83, 73.88, 0.97, 10.17, 0, 0, 5),
(117, 1.51994, 12.88, 0, 1.76, 73.03, 0.47, 11.32, 0, 0, 5),
(118, 1.52369, 12.88, 0, 1.58, 72.22, 0.32, 12.24, 0, 0, 5),
(119, 1.51316, 12.88, 0, 3.04, 70.48, 6.21, 6.96, 0, 0, 5),
(120, 1.51321, 12.88, 0, 3.02, 70.7, 6.21, 6.93, 0, 0, 5),
(121, 1.51905, 12.88, 2.39, 1.56, 72.37, 0, 9.57, 0, 0, 6),
(122, 1.51937, 12.88, 2.41, 1.19, 72.76, 0, 9.77, 0, 0, 6),
(123, 1.51829, 12.88, 2.24, 1.62, 72.38, 0, 9.26, 0, 0, 6),
(124, 1.51852, 12.88, 2.19, 1.66, 72.67, 0, 9.32, 0, 0, 6),
(125, 1.51299, 12.88, 1.74, 1.54, 74.55, 0, 7.59, 0, 0, 6),
(126, 1.51131, 12.88, 3.2, 1.81, 72.81, 1.76, 5.43, 1.19, 0, 7),
(127, 1.51838, 12.88, 3.26, 2.22, 71.25, 1.46, 5.79, 1.63, 0, 7),
(128, 1.52315, 12.88, 3.34, 1.23, 72.38, 0.6, 8.83, 0, 0, 7),
(129, 1.52247, 12.88, 2.2, 2.06, 70.26, 0.76, 9.76, 0, 0, 7),
(130, 1.52365, 12.88, 1.83, 1.31, 70.43, 0.31, 8.61, 1.68, 0, 7),
(131, 1.51613, 12.88, 1.78, 1.79, 73.1, 0, 8.67, 0.76, 0, 7),
(132, 1.51602, 12.88, 0, 2.38, 73.28, 0, 8.76, 0.64, 0.09, 7),
(133, 1.51623, 12.88, 0, 2.79, 73.46, 0.04, 9.04, 0.4, 0.09, 7),
(134, 1.51719, 12.88, 0, 2, 73.02, 0, 8.53, 1.59, 0.08, 7),
(135, 1.51683, 12.88, 0, 1.98, 73.29, 0, 8.52, 1.57, 0.07, 7),
(136, 1.51545, 12.88, 0, 2.68, 73.39, 0.08, 9.07, 0.61, 0.05, 7),
(137, 1.51556, 12.88, 0, 2.54, 73.23, 0.14, 9.41, 0.81, 0.01, 7),
(138, 1.51727, 12.88, 0, 2.34, 73.28, 0, 8.95, 0.66, 0, 7),
(139, 1.51531, 12.88, 0, 2.66, 73.1, 0.04, 9.08, 0.64, 0, 7),
(140, 1.51609, 12.88, 0, 2.51, 73.05, 0.05, 8.83, 0.53, 0, 7),
(141, 1.51508, 12.88, 0, 2.25, 73.5, 0, 8.34, 0.63, 0, 7),
(142, 1.51653, 12.88, 0, 1.19, 75.18, 2.7, 8.93, 0, 0, 7),
(143, 1.51514, 12.88, 0, 2.42, 73.72, 0, 8.39, 0.56, 0, 7),
(144, 1.51658, 12.88, 0, 1.99, 73.11, 0, 8.28, 1.71, 0, 7),
(145, 1.51617, 12.88, 0, 2.27, 73.3, 0, 8.71, 0.67, 0, 7),
(146, 1.51732, 12.88, 0, 1.8, 72.99, 0, 8.61, 1.55, 0, 7),
(147, 1.51645, 12.88, 0, 1.87, 73.11, 0, 8.67, 1.38, 0, 7),
(148, 1.51831, 12.88, 0, 1.82, 72.86, 1.41, 6.47, 2.88, 0, 7),
(149, 1.5164, 12.88, 0, 2.74, 72.85, 0, 9.45, 0.54, 0, 7),
(150, 1.51623, 12.88, 0, 2.88, 72.61, 0.08, 9.18, 1.06, 0, 7);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

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
