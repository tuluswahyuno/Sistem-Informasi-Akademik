-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 09:09 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `kode_jurusan` varchar(3) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `kode_jurusan`, `nama_jurusan`) VALUES
(13, 'IK', 'Ilmu Komputer'),
(14, 'MI', 'Manajemen Bisnis'),
(15, 'KB', 'Komunikasi dan Bahasa');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode_matakuliah` varchar(10) NOT NULL,
  `nama_matakuliah` varchar(100) NOT NULL,
  `sks` int(5) NOT NULL,
  `semester` int(10) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kode_matakuliah`, `nama_matakuliah`, `sks`, `semester`, `nama_prodi`) VALUES
('MKK01', 'Algoritma dan Pemrograman Dasar', 3, 1, 'Sistem Informasi'),
('MKK02', 'Sistem Basis Data', 3, 2, 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `kode_prodi` varchar(20) NOT NULL,
  `nama_prodi` varchar(25) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `kode_prodi`, `nama_prodi`, `nama_jurusan`) VALUES
(1, 'SI', 'Sistem Informasi', 'Ilmu Komputer'),
(2, 'TI', 'Teknik Informatika', 'Ilmu Komputer'),
(3, 'MI', 'Manajemen Informasi', 'Ilmu Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `tentang_kampus`
--

CREATE TABLE `tentang_kampus` (
  `id` int(11) NOT NULL,
  `sejarah` varchar(1000) NOT NULL,
  `visi` varchar(250) NOT NULL,
  `misi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  `id_session` varchar(255) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `level`, `blokir`, `id_session`, `last_login`, `created_at`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'admin', 'N', '', '2021-07-14 06:25:57', '2021-07-14 06:13:03'),
(2, 'tulus', '21232f297a57a5a743894a0e4a801fc3', 'tulus@gmail.com', 'admin', 'N', '', '2021-07-14 16:55:45', '2021-07-14 16:55:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `tentang_kampus`
--
ALTER TABLE `tentang_kampus`
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
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tentang_kampus`
--
ALTER TABLE `tentang_kampus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
