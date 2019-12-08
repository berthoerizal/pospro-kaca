-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 08:15 PM
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
-- Database: `db_userlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `slug_judul` varchar(75) NOT NULL,
  `isi` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_berita` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `slug_judul`, `isi`, `id_user`, `date_berita`) VALUES
(1, 'Berita 1', 'berita-1', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Isi berita 1</p>\r\n</body>\r\n</html>', 5, '2019-12-08 07:48:23');

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id` int(11) NOT NULL,
  `name_file` varchar(25) NOT NULL,
  `file` varchar(256) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_berkas` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`id`, `name_file`, `file`, `id_user`, `date_berkas`) VALUES
(2, 'aaaaa', 'data_wisatawan_mancanegara_2018-_2014_(1)_(1).xlsx', 5, '2019-12-08 10:34:49');

-- --------------------------------------------------------

--
-- Table structure for table `countdown`
--

CREATE TABLE `countdown` (
  `id` int(11) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countdown`
--

INSERT INTO `countdown` (`id`, `waktu`) VALUES
(1, '2019-12-09 00:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `excel`
--

CREATE TABLE `excel` (
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomor_tps` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `excel`
--

INSERT INTO `excel` (`username`, `nama`, `nomor_tps`) VALUES
('100120201008', 'Aldi Yassa Pangaribuan', 1),
('100155201004', 'Azlim Nuryakin', 1),
('100155201016', 'Evaniar Rahmanindyas', 1),
('100155201036', 'Adithia Dharma Saputra', 1),
('100155201040', 'Andri', 1),
('100155201041', 'Aulia Ramadhani Chandra', 1),
('100155201043', 'Azwar', 1),
('100155201051', 'Dery Azlin Oktavi', 1),
('100155201058', 'Farid Aji Adha', 1),
('100155201060', 'Fredy Gunawan', 1),
('100155201063', 'Hardy Saputra', 1),
('100155201065', 'Indra Noven Valentinus', 1),
('100155201067', 'Juwita Linggarani', 1),
('100155201070', 'Meriyani', 1),
('100155201071', 'Miko Juzandra', 1),
('100155201075', 'Nahort Hosea Hutagaol', 1),
('100155201076', 'Novi Ade Putra', 1),
('100155201079', 'Padillah Heriyadi', 1),
('100155201086', 'Ria Fransiska Putri', 1),
('100155201087', 'Rifky Prayuda', 1),
('100155201091', 'Rintoni Van Windu Sitorus', 1),
('100155201099', 'Syaiful Bahri', 1),
('100155201102', 'Trisna Aryandi', 1),
('100155201109', 'Zumrotul Mutiah', 1),
('110120201004', 'Dakeryadi', 1),
('110120201007', 'Samuel Pangihutan H', 1),
('110120201011', 'Yopi Palintino', 1),
('110120201015', 'Ary Bastian', 1),
('110120201024', 'Jepriansyah', 1),
('110120201029', 'Janton Pakpahan', 1),
('110120201032', 'Renhat Pahotton Siahaan', 1),
('110120201037', 'Fathoni', 1),
('110120201039', 'Erial Saputra', 1),
('110120201042', 'Andawani Lumbanraja', 1),
('110120201044', 'Idel Putra Jaya', 1),
('110155201001', 'Chairoll Ramadan', 1),
('110155201008', 'Reza Kurniawan', 1),
('110155201011', 'R. Azura', 1),
('110155201013', 'Muhammad Kasim', 1),
('110155201014', 'Yuliandi', 1),
('110155201017', 'Fahrul Rozi', 1),
('110155201029', 'Sri Anisa', 1),
('110155201030', 'Eka Oktarini Hardianti', 1),
('110155201040', 'M.ryzani Suharindra', 1),
('110155201042', 'Zilawati', 1),
('110155201053', 'Nafizha Geza Anggiaputri', 1),
('110155201056', 'Devid Elroy Situmorang', 1),
('110155201059', 'Kurniadi Putra', 1),
('110155201062', 'Tetty Indah Mayasari', 1),
('110155201064', 'Kelvin Ardatama', 1),
('110155201066', 'Eko Imam Pratama', 1),
('110155201068', 'Heru Prastyo', 1),
('110155201069', 'Andi Faizal', 1),
('110155201071', 'M.firdaus', 1),
('110155201075', 'Brian Hermawan', 1),
('110155201078', 'Tuti Maharani Sunarto', 1),
('110155201081', 'Muhammad Isriyandi', 1),
('110155201084', 'Nuzul Inayah Ike', 1),
('110155201086', 'Riman Agusman', 1),
('110155201087', 'Rahmani', 1),
('110155201088', 'Ade Indra Gunawan', 1),
('110155201090', 'MIDUWAN', 1),
('110155201092', 'Arif Fadhillah', 1),
('110155201100', 'Febrabin Angga Perdana', 1),
('110155201101', 'Suswanto', 1),
('110155201111', 'Merry Imelda Agustin', 1),
('110155201122', 'Oktomo Hadiansyah', 1),
('110155201123', 'Rahmat Wijaya', 1),
('110155201131', 'Irwan Saputra', 1),
('110155201137', 'Dadan Rosdiana', 1),
('110155201138', 'Angger Setia Winata', 1),
('110155201143', 'Raja T Mubarak Siregar', 1),
('110155201146', 'Rahmad Hamdani', 1),
('110155201151', 'Erwin Samudra', 1),
('110155201152', 'Rahmat Novian', 1),
('120120201002', 'Franciskus Firdaus Saragih', 1),
('120120201006', 'Wahyudi Putra', 1),
('120120201008', 'Amru Firdaus', 1),
('120120201009', 'Afdal Apriadi Bur', 1),
('120120201010', 'Nanda Lesmana', 1),
('120120201011', 'Andy Maulana', 1),
('120120201012', 'Ade Riski Kelana', 1),
('120120201018', 'Kamarudin', 1),
('120120201020', 'KARYANO EFIANDI', 1),
('120120201021', 'Harnomanto Purba', 1),
('120120201022', 'Ismail', 1),
('120120201023', 'Murat', 1),
('120120201025', 'Triadi Supranoto', 1),
('120120201026', 'Noppi Endri', 1),
('120120201028', 'Sarmadi', 1),
('120120201031', 'Gatot Satriyo Utomo', 1),
('120120201033', 'Ristiani', 1),
('120120201037', 'Johari', 1),
('120120201039', 'Devi Afpianto', 1),
('120120201040', 'Sri Fatmawati', 1),
('120120201042', 'Randi Trinaldo', 1),
('120120201047', 'Muhammad Nor Ari Badilah', 1),
('120120201048', 'Anggi Anggara', 1),
('120120201049', 'Budiyar', 1),
('120120201050', 'Herik Rahmadana', 1),
('120120201051', 'Johan Wahyudi', 1),
('120120201052', 'Farah Dhyba', 1),
('120120201053', 'Shahiburrahman', 1),
('120120201057', 'Februyadi', 1),
('120120201058', 'Raiky Emil Sandi', 1),
('120120201059', 'Febri Supiyanto', 1),
('120120201061', 'Rahim', 1),
('120120201065', 'Evi Zamuri', 1),
('120155201002', 'Iis Rahayu', 1),
('120155201003', 'Icha Maimunah', 1),
('120155201004', 'Dico Eggy Refaxa', 1),
('120155201005', 'Achmad Hikamul Aroyah', 1),
('120155201006', 'Sherly Fitri Diani', 1),
('120155201007', 'Ferda Fandesa', 1),
('120155201008', 'Kamarudin', 1),
('120155201010', 'Mulia Parna Putri Sijabat', 1),
('120155201011', 'Pahrul Ardiwan', 1),
('120155201013', 'Siti Norjannah', 1),
('120155201014', 'Wekipriyadi', 1),
('120155201015', 'Azrie Noprizal', 1),
('120155201017', 'Marisan Afrianti', 1),
('120155201018', 'Firta', 1),
('120155201022', 'Rizka Eka Putri', 1),
('120155201025', 'Kamaludin', 1),
('120155201026', 'Hendra Gunawan', 1),
('120155201034', 'Diah Afrianti', 1),
('120155201040', 'Ratnawati', 1),
('120155201042', 'Ahmad Hafizh', 1),
('120155201045', 'Sisma Tri Wulan', 1),
('120155201046', 'Suryaman', 1),
('120155201047', 'Irma Risky Ananda', 1),
('120155201049', 'Siti Zulaikha', 1),
('120155201050', 'Whisnu Wage Rwanda', 1),
('120155201051', 'Ageng Midiatma', 1),
('120155201053', 'Jupri Alpianto', 1),
('120155201054', 'Muhamad Wahyudi', 1),
('120155201057', 'Dena Pertiwi', 1),
('120155201060', 'Muhammad Nazri', 1),
('120155201061', 'Defri Isnawan', 1),
('120155201062', 'Bondan Chorisma', 1),
('120155201064', 'Dhio Pratikno Permana', 1),
('120155201065', 'Mohammad Harris Rachmadi', 1),
('120155201068', 'Muthia Ramadhani', 1),
('120155201071', 'Tri Haryadi', 1),
('120155201072', 'Riski Einur Hasta', 1),
('120155201073', 'Eko Kurniawan', 1),
('120155201074', 'Apriliyan Prastowo', 1),
('120155201082', 'Handini Dwi Ariany', 1),
('120155201085', 'Maryani', 1),
('120155201091', 'Denny Kurniawan', 1),
('120155201093', 'Ari Dwi Rahmadi', 1),
('120155201094', 'Eli Fitri', 1),
('120155201096', 'Syaharuddin', 1),
('130120201002', 'Muhamad Nopirmansyah', 1),
('130120201003', 'Ferdiyan Nugraha', 1),
('130120201004', 'Yulius Prayitno', 1),
('130120201005', 'Sapri', 1),
('130120201006', 'Alfikzar Jabarriau', 1),
('130120201007', 'Wahyu Tri Utomo', 1),
('130120201009', 'Enggar Rizki Pramana', 1),
('130120201010', 'Waliyudin Mustafa', 1),
('130120201011', 'Belly Imansyah', 1),
('130120201012', 'Samuel Newer N S', 1),
('130120201013', 'Rizky Abiyoga Putra', 1),
('130120201015', 'Rian Anggara Saputra', 1),
('130120201016', 'Aditya Tama Caesar', 1),
('130120201018', 'Ilman Fauzi Harahap', 1),
('130120201020', 'Seka Dirgaharno', 1),
('130120201021', 'Jeremia Pardamean St', 1),
('130120201022', 'Rian Hidayat', 1),
('130120201023', 'Hasrofiddin', 1),
('130120201026', 'Habsyam', 1),
('130120201027', 'Shafrullah', 1),
('130120201028', 'Refky Armando', 1),
('130120201031', 'Reza Fernandes', 1),
('130120201033', 'Fendry Fereka', 1),
('130120201037', 'Weldy Yudiansyah', 1),
('130120201039', 'Bayu Prayuda', 1),
('130120201041', 'Ade Kanistiyo', 1),
('130120201045', 'Agustinus Tommy', 1),
('130120201046', 'Daisi Repina', 1),
('130120201048', 'Annisa Isyunita', 1),
('130120201052', 'Sugianto', 1),
('130120201053', 'Jefri Pradana', 1),
('130120201054', 'Devik Hendrikson', 1),
('130120201059', 'Rudy Septian', 1),
('130120201064', 'Musmujiyanto', 1),
('130120201068', 'Kibar Aftila', 1),
('130120201069', 'Ricky Saputra', 1),
('130120201070', 'Puthut Kurniawan', 1),
('130120201072', 'Muhammad Palestin', 1),
('130120201073', 'Afrizal Tanjung', 1),
('130120201075', 'Junjungan Mikael Pandiangan', 1),
('130120201076', 'Witono', 1),
('130155201003', 'Dika Agustia', 1),
('130155201004', 'Wulan Wahyu Lestari', 1),
('130155201005', 'Erdha Firdianty', 1),
('130155201007', 'Alsodiq', 1),
('130155201009', 'Dediani Lumban Gaol', 1),
('130155201010', 'Awaluddin', 1),
('130155201012', 'Roby Saputra', 1),
('130155201013', 'Yogo Priono', 1),
('130155201014', 'Desi Hardianti', 1),
('130155201015', 'Deci Valaksmy', 1),
('130155201017', 'Rini', 1),
('130155201019', 'Triresti Fitriyah', 1),
('130155201020', 'Ria Septiani', 1),
('130155201022', 'Rini Hervianti Julia', 1),
('130155201023', 'Daniel Tua Parlaungan Tampubol', 1),
('130155201025', 'Zuraidah', 1),
('130155201026', 'Januar Farid Dwi Jayadi', 1),
('130155201028', 'Cristine I Sitorus', 1),
('130155201030', 'Rahmad Hidayat', 1),
('130155201031', 'Sofina Indah Sari', 1),
('130155201032', 'Nopri Ardiansyah', 1),
('130155201033', 'Monalisa', 1),
('130155201034', 'Fatemawati', 1),
('130155201037', 'Sayyidah Nur Habibah', 1),
('130155201043', 'Munawir', 1),
('130155201048', 'Lisa Rosmala', 1),
('130155201049', 'Zul Apriadi', 1),
('130155201050', 'Muhammad Santoso', 1),
('130155201053', 'Desi Mardita Wayuni', 1),
('130155201055', 'Umi Kalsum', 1),
('130155201056', 'Mustari Muhammad Rifsah', 1),
('130155201057', 'Jumardian Putra', 1),
('130155201058', 'Roberto Pardosi', 1),
('130155201059', 'Gerry Andrean', 1),
('130155201060', 'Iqbal Gustianda', 1),
('130155201063', 'Azwir Pebriansyah', 1),
('130155201069', 'Lb.johanis.c.r.hutabarat', 1),
('130155201070', 'Silvia Marzalita', 1),
('130155201072', 'Rahma Andria Sapitri', 1),
('130155201074', 'Hendra Riadi', 1),
('130155201075', 'Ogi', 1),
('130155201078', 'Muhammad Rizqi Hardiansyah', 1),
('130155201079', 'Farida Astuti', 1),
('130155201082', 'Utari Putri Mirani', 1),
('130155201083', 'Okta Rahmat Kurniawan', 1),
('130155201089', 'Dian Ratna Sari', 1),
('130155201091', 'Iqrorul Hidayatul Baiti', 1),
('130155201096', 'Restu Galih Suyatno', 1),
('140120201001', 'REINHARD NABABAN', 1),
('140120201002', 'ADE FATHURRAHMAN', 1),
('140120201003', 'Vicky Adhitya Fijaya', 1),
('140120201004', 'Restu Al-khariti', 1),
('140120201006', 'Muhardi', 1),
('140120201007', 'Yusuf', 1),
('140120201008', 'ERWIN SANDI', 1),
('140120201009', 'IMAL NURDIN', 1),
('140120201010', 'VERY SANDRIA', 1),
('140120201011', 'ADE TRI FITRI', 1),
('140120201012', 'Arya Ramadiansyah', 1),
('140120201013', 'Ade Fadillah Syabri', 1),
('140120201014', 'HENDRA R HUTAGALUNG', 1),
('140120201017', 'TRIMAS MANALU', 1),
('140120201018', 'Pingkan Maharani', 1),
('140120201020', 'Syahril Arifin', 1),
('140120201021', 'Umi Asyura', 1),
('140120201022', 'Sugianto', 1),
('140120201023', 'HENDRO PRIYONO', 1),
('140120201024', 'Andi Ardianzah G', 1),
('140120201025', 'GUSRINI NELDA EVIYAN', 1),
('140120201026', 'Mustakim', 1),
('140120201028', 'Suhardi', 1),
('140120201029', 'MUHAMAD SALIHIN', 1),
('140120201030', 'Jeremya Lukmanto S', 1),
('140120201031', 'Nurul Aulia', 1),
('140120201033', 'Deny Hidayat', 1),
('140120201034', 'Irma Septiana L', 1),
('140120201035', 'Septia Pitriani', 1),
('140120201038', 'DIMAS PAKSI PALESTINA', 1),
('140120201039', 'Muhammad Rizki Priadi', 1),
('140120201040', 'Rahmad Dody', 1),
('140120201042', 'Ilham Akbar', 1),
('140120201044', 'DEDI PANDU WINATA', 1),
('140120201046', 'Zarwin', 1),
('140120201050', 'Andi Satria', 1),
('140120201801', 'Taufiqulhadi', 1),
('140120201802', 'Yoga Maskur Aslani', 1),
('140120201804', 'KHARISMA ILHAM', 1),
('140120201805', 'SEPTIAN MUHAMMAD', 1),
('140155201001', 'Sartika', 1),
('140155201002', 'Indri Junanda', 1),
('140155201003', 'Irfan Daimori', 1),
('140155201004', 'Dede Tiasha', 1),
('140155201005', 'Nadia Wahyu Wijayanti', 1),
('140155201006', 'Amelina', 1),
('140155201007', 'Eko Sutrisno', 1),
('140155201009', 'Putra Karunia', 1),
('140155201010', 'Wisnu Pebriadi', 1),
('140155201014', 'Saprizan', 1),
('140155201015', 'Siska Yunitha', 1),
('140155201018', 'Ebet Oktafiansyah', 1),
('140155201019', 'Gusti Fadhriona R', 1),
('140155201021', 'Nuryasmin Syakila', 1),
('140155201022', 'Nur Agusyani', 1),
('140155201023', 'Yantika Aritonang', 1),
('140155201024', 'AHMAD SAIFUL', 1),
('140155201025', 'Aditya Yuda Mahardik', 1),
('140155201026', 'Titi Arimba', 1),
('140155201028', 'Achmad Hasani', 1),
('140155201029', 'Ayu Sari Nurlatifah', 1),
('140155201030', 'Fajar Wahyu Wardhana', 1),
('140155201031', 'Hardi', 1),
('140155201034', 'Erna Azriyani', 1),
('140155201035', 'Charlie Limbongan', 1),
('140155201036', 'Riandi Putra', 1),
('140155201037', 'Muhammad Yasin', 1),
('140155201038', 'Harry Awanda Putra', 1),
('140155201039', 'Arief Syahfutra', 1),
('140155201040', 'Teddy Kurniawan', 1),
('140155201041', 'Angga Andarama', 1),
('140155201042', 'Rifqi Anugrah Putra', 1),
('140155201044', 'Lutfi Prayoga', 1),
('140155201045', 'Sandy Primananda', 1),
('140155201047', 'Edi Saputra', 1),
('140155201049', 'Kharomatun Nuruhul Mustofa', 1),
('140155201050', 'Wella Hasmanika', 1),
('140155201052', 'Sopiani', 1),
('140155201054', 'Ardi Setiawan', 1),
('140155201055', 'Risya Farisi', 1),
('140155201056', 'Haryadi Syahputra', 1),
('140155201057', 'Hendra Juniar', 1),
('140155201059', 'Darmawan', 1),
('140155201061', 'Kurniawan Utomo Santoso', 1),
('140155201062', 'Suparman', 1),
('140155201065', 'Muhammad Rizki Ananda Saputra', 1),
('140155201066', 'MIKHAEL PERMANTO EVANDER .R', 1),
('140155201067', 'Aris Kurniawan', 1),
('140155201069', 'Ayaturrahman', 1),
('140155201070', 'Raka Noor Aditya', 1),
('140155201071', 'Ilham Ramadani', 1),
('140155201802', 'Devira Asri Berliani', 1),
('140155201804', 'Nissia Octariyana', 1),
('140155201805', 'Angeline Sihombing', 1),
('140155201806', 'Dwi Sajiddin Lubis', 1),
('150120201001', 'Adih', 1),
('150120201004', 'Hendra Reinaldi', 1),
('150120201005', 'Indah Fatiroh', 1),
('150120201006', 'Miki Wahyudi Alamsyah', 1),
('150120201007', 'Muhammad Khoiril Annam', 1),
('150120201008', 'Nabil Fadel Muhammad', 1),
('150120201009', 'Prayogo', 1),
('150120201010', 'Remici Ferniawan', 1),
('150120201011', 'Rian Anjasmara', 1),
('150120201012', 'Romi Thomas', 1),
('150120201013', 'Andi Handrian', 1),
('150120201014', 'Anggi Sitohang', 1),
('150120201015', 'Dimas Adriansyah', 1),
('150120201016', 'Endah Kurnia Putri', 1),
('150120201017', 'Fauzan Ikhsanur Susanto', 1),
('150120201019', 'Harry Alberto Sinaga', 1),
('150120201020', 'Igo Octaviandri', 1),
('150120201021', 'Juanda Aslika', 1),
('150120201022', 'Misbah', 1),
('150120201023', 'Muhammad Candra Gunawan', 1),
('150120201025', 'Prasetya Perwira Putra Perdana', 1),
('150120201027', 'Reno Apriano', 1),
('150120201028', 'Rifki Ariandhi', 1),
('150120201030', 'Tri Ananda Putra', 1),
('150120201031', 'Wahyu Candra', 1),
('150120201032', 'Wahyu Kurniawan', 1),
('150120201033', 'Leonardo Wibawa Tambunan', 1),
('150120201034', 'Maryanto', 1),
('150120201035', 'Riandra Putra', 1),
('150120201037', 'Topan Hidayat', 1),
('150155201001', 'Aprizal', 1),
('150155201002', 'Asmarita', 1),
('150155201004', 'Dira Rahmayani', 1),
('150155201005', 'Edison Boangmanalu', 1),
('150155201006', 'Esa Fadjri Huda', 1),
('150155201007', 'Firmansyah', 1),
('150155201009', 'Muhammad Azwan', 1),
('150155201010', 'Novita', 1),
('150155201011', 'Putri Ayu Andira', 1),
('150155201013', 'Yovi Fortrano Kurniawan', 1),
('150155201014', 'Zikri', 1),
('150155201015', 'Ade Putra Nurcholik Santito', 1),
('150155201016', 'Agung Krismodian', 1),
('150155201017', 'Ary Irfandi', 1),
('150155201018', 'Atika Puspasari', 1),
('150155201019', 'Aulia Rahmi', 1),
('150155201020', 'Chandra Zulfika', 1),
('150155201021', 'Cynthia Nofentary Purba', 1),
('150155201025', 'Galuh Mayang Sari', 1),
('150155201026', 'Maizatul Akmar', 1),
('150155201027', 'Martha Puspita', 1),
('150155201029', 'Muhammad Ihsan', 1),
('150155201030', 'Muhammad Sarimin', 1),
('150155201031', 'Natanael Sijabat', 1),
('150155201033', 'Radoth Mh Tamba', 1),
('150155201034', 'Randi Rizky Kurniawan', 1),
('150155201035', 'Riko Septiadi', 1),
('150155201036', 'Silha Wildania Utami', 1),
('150155201037', 'Vanna Poibe Situmeang', 1),
('150155201040', 'Muchlis Maulana', 1),
('150155201041', 'Hadi Prasetio', 1),
('150155201042', 'Dwi Yuni Ratna Sari', 1),
('150155201043', 'Juhendar', 1),
('150155201045', 'Bahrurrohim', 1),
('150155201046', 'Agus Tonar', 1),
('150155201047', 'Danny Damarry Siregar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `alamat`) VALUES
(1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127657.8325778243!2d104.41455673631054!3d0.9170613149076923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d972f6dec85825%3A0xec4ab548c30d02a1!2sTanjungpinang%2C%20Kota%20Tanjung%20Pinang%2C%20Kepulauan%20Riau!5e0!3m2!1sid!2sid!4v1575827479509!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>');

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
(6, 'dayang@gmail.com', '1e049da799a7d2e6f2eb5415de9e5c4fa9236a74', 'Dayang Azizah', 2, '2019-12-08 06:35:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countdown`
--
ALTER TABLE `countdown`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countdown`
--
ALTER TABLE `countdown`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
