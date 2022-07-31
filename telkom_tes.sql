-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2022 at 12:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telkom_tes`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `pem_id` int(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `no_hp` varchar(25) DEFAULT NULL,
  `email_karyawan` varchar(50) NOT NULL,
  `alamat` text DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `tim` varchar(100) DEFAULT NULL,
  `area` varchar(10) DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `username` varchar(150) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `pem_id`, `nama`, `nik`, `no_hp`, `email_karyawan`, `alamat`, `jabatan`, `tim`, `area`, `foto`, `username`, `password`) VALUES
(1, NULL, 'Furqan Idifasi', '21000087', '081347776912', '', 'Jl. Kelayan B Gang Gembira No. 50', 'admin', 'ADMIN', 'ALL AREA', '58266Profilku.jpg', 'admin', 'admin'),
(2, NULL, 'Adul', '16001857', '081313242456', '', 'jl. kelayan A', 'teknisi', 'BJM', 'BJM - KYG', '39084Teknisi 1.jpg', 'adul', 'teknisi'),
(3, NULL, 'Udin', '16001858', '082223456789', '', 'Jl. Bina Karya', 'teknisi', 'BJB', 'BJB - MTP', '27281Teknisi 2.jpg', 'udin', 'teknisi'),
(4, NULL, 'Anang', '16001859', '083113134556', '', 'jl. kandangan ', 'teknisi', 'TJL', 'KDG - BRI', '10261Teknisi 1.jpg', 'anang', 'teknisi'),
(8, NULL, 'Adul', '21000087', '0813', '', 'jl. pagatan', 'pelanggan', '-', '-', '96762photo_2022-02-19_23-08-36.jpg', '21000087', '21000087'),
(34, 40, '78', '78', '78', '', '78', 'pelanggan', '-', '-', '67856ex.jpg', '78', '78'),
(35, 41, '80', '80', '80', '', '80', 'pelanggan', '-', '-', '92113ssss.jpg', '80', '80'),
(36, 42, 'Fur', '1818', '0818', '', 'jl', 'pelanggan', '-', '-', '27577download.jpg', '1818', '1818'),
(37, 43, 'Bapa Ahmadi', '123456', '0813', '', 'jl', 'pelanggan', '-', '-', '93909download.jpg', '123456', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pem_id` (`pem_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
