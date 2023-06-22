-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 01:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zakatfitrah1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayar_zakat`
--

CREATE TABLE `bayar_zakat` (
  `id_zakat` int(11) NOT NULL,
  `nama_kk` varchar(100) NOT NULL,
  `jumlah_tanggungan` int(10) NOT NULL,
  `jenis_bayar` enum('Beras','Uang') NOT NULL,
  `jumlah_tanggunganyangdibayar` varchar(100) NOT NULL,
  `bayar_beras` float NOT NULL,
  `bayar_uang` float(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bayar_zakat`
--

INSERT INTO `bayar_zakat` (`id_zakat`, `nama_kk`, `jumlah_tanggungan`, `jenis_bayar`, `jumlah_tanggunganyangdibayar`, `bayar_beras`, `bayar_uang`) VALUES
(18, 'Ahmad Priawan', 3, 'Beras', '3', 7.5, 0),
(19, 'Adi Prasetyo', 4, 'Beras', '4', 10, 0),
(20, 'Ani Nur', 1, 'Beras', '1', 2.5, 0),
(21, 'Candra Wijaya', 2, 'Beras', '2', 5, 0),
(22, 'Desi Ratnasari', 2, 'Beras', '2', 5, 0),
(23, 'Eka Putra', 2, 'Beras', '2', 5, 0),
(24, 'Fitri Ayu', 2, 'Beras', '2', 5, 0),
(25, 'Gatot Purwanto', 3, 'Beras', '3', 7.5, 0),
(26, 'Hadi Pranoto', 4, 'Beras', '4', 10, 0),
(27, 'Joko Susilo', 5, 'Beras', '5', 12.5, 0),
(28, 'Kusuma', 2, 'Uang', '2', 0, 60000),
(29, 'Wahyu Nugroho', 3, 'Beras', '3', 7.5, 0),
(30, 'Zainal Abidin', 2, 'Beras', '2', 5, 0),
(31, 'Aditama', 2, 'Beras', '2', 5, 0),
(32, 'Jaka Pradana', 1, 'Beras', '1', 2.5, 0),
(33, 'Ari Setiawan', 2, 'Beras', '2', 5, 0),
(34, 'Eko Prasetyo', 2, 'Beras', '2', 5, 0),
(35, 'Fajri Rmadhan', 4, 'Beras', '4', 10, 0),
(36, 'Rudi Hermawan', 3, 'Beras', '3', 7.5, 0),
(37, 'Ridwan', 4, 'Beras', '4', 10, 0),
(38, 'Arif ', 3, 'Beras', '3', 7.5, 0),
(39, 'Zulkifli', 3, 'Beras', '3', 7.5, 0),
(40, 'Tri Handayani', 3, 'Beras', '3', 7.5, 0),
(41, 'Lina Rosita', 2, 'Beras', '2', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_mustahik`
--

CREATE TABLE `kategori_mustahik` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `jumlah_hak` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori_mustahik`
--

INSERT INTO `kategori_mustahik` (`id_kategori`, `nama_kategori`, `jumlah_hak`) VALUES
(58, 'Amil', 12.4),
(59, 'Fakir I', 12.4),
(60, 'Fakir II', 13.95),
(61, 'Miskin I', 15.5),
(62, 'Miskin II', 17.05),
(63, 'Fisabillilah (Ustadz)', 9.3),
(64, 'Fisabillilah (Santri)', 7.75),
(65, 'Mampu', 6.2),
(66, 'Mualaf', 10.85),
(68, 'Ibnu Sabil', 13.95);

-- --------------------------------------------------------

--
-- Table structure for table `mustahik_lainnya`
--

CREATE TABLE `mustahik_lainnya` (
  `id_mustahiklainnya` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kategori` enum('Amil','Fisabillilah (Ustadz)','Fisabillilah (Santri)','Mualaf','Ibnu Sabil') NOT NULL,
  `hak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mustahik_lainnya`
--

INSERT INTO `mustahik_lainnya` (`id_mustahiklainnya`, `nama`, `kategori`, `hak`) VALUES
(28, 'Delta', 'Amil', '12.4'),
(29, 'Andika', 'Fisabillilah (Ustadz)', '9.3'),
(30, 'Sandiana', 'Fisabillilah (Santri)', '7.75'),
(31, 'Amelia', 'Mualaf', '10.85'),
(32, 'Delta Putik Kemuning', 'Ibnu Sabil', '13.95');

-- --------------------------------------------------------

--
-- Table structure for table `mustahik_warga`
--

CREATE TABLE `mustahik_warga` (
  `id_mustahikwarga` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kategori` enum('Fakir I','Fakir II','Miskin I','Miskin II','Mampu') NOT NULL,
  `hak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mustahik_warga`
--

INSERT INTO `mustahik_warga` (`id_mustahikwarga`, `nama`, `kategori`, `hak`) VALUES
(46, 'Ahmad Priawan', 'Mampu', '6.2');

-- --------------------------------------------------------

--
-- Table structure for table `muzakki`
--

CREATE TABLE `muzakki` (
  `id_muzakki` int(11) NOT NULL,
  `nama_muzakki` varchar(100) NOT NULL,
  `jumlah_tanggungan` int(12) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status` enum('Sudah Bayar','Belum Bayar') NOT NULL DEFAULT 'Belum Bayar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `muzakki`
--

INSERT INTO `muzakki` (`id_muzakki`, `nama_muzakki`, `jumlah_tanggungan`, `keterangan`, `status`) VALUES
(14, 'Ahmad Priawan', 3, 'Warga Tetap', 'Sudah Bayar'),
(15, 'Adi Prasetyo', 4, 'Warga Tetap', 'Sudah Bayar'),
(16, 'Ani Nur', 1, 'Warga Sementara', 'Sudah Bayar'),
(17, 'Bambang Santoso', 3, 'Warga Tetap', 'Belum Bayar'),
(18, 'Candra Wijaya', 2, 'Warga Tetap', 'Sudah Bayar'),
(19, 'Desi Ratnasari', 2, 'Warga Tetap', 'Sudah Bayar'),
(20, 'Eka Putra', 2, 'Warga Sementara', 'Sudah Bayar'),
(21, 'Fitri Ayu', 2, 'Warga Sementara', 'Sudah Bayar'),
(22, 'Gatot Purwanto', 3, 'Warga Tetap', 'Sudah Bayar'),
(23, 'Hadi Pranoto', 4, 'Warga Tetap', 'Sudah Bayar'),
(24, 'Joko Susilo', 5, 'Warga Tetap', 'Sudah Bayar'),
(25, 'Kusuma', 2, 'Warga Sementara', 'Sudah Bayar'),
(26, 'Wahyu Nugroho', 3, 'Warga Tetap', 'Sudah Bayar'),
(27, 'Zainal Abidin', 2, 'Warga Tetap', 'Sudah Bayar'),
(28, 'Aditama', 2, 'Warga Tetap', 'Sudah Bayar'),
(29, 'Jaka Pradana', 1, 'Warga Sementara', 'Sudah Bayar'),
(30, 'Lina Rosita', 2, 'Warga Sementara', 'Sudah Bayar'),
(31, 'Tri Handayani', 3, 'Warga Tetap', 'Sudah Bayar'),
(32, 'Zulkifli', 3, 'Warga Tetap', 'Sudah Bayar'),
(33, 'Arif ', 3, 'Warga Tetap', 'Sudah Bayar'),
(34, 'Ridwan', 4, 'Warga Tetap', 'Sudah Bayar'),
(35, 'Rudi Hermawan', 3, 'Warga Tetap', 'Sudah Bayar'),
(36, 'Fajri Rmadhan', 4, 'Warga Sementara', 'Sudah Bayar'),
(37, 'Eko Prasetyo', 2, 'Warga Sementara', 'Sudah Bayar'),
(38, 'Ari Setiawan', 2, 'Warga Tetap', 'Sudah Bayar'),
(40, 'Daffa Ahmad', 2, 'Warga Tetap', 'Belum Bayar');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bayar_zakat`
--
ALTER TABLE `bayar_zakat`
  ADD PRIMARY KEY (`id_zakat`);

--
-- Indexes for table `kategori_mustahik`
--
ALTER TABLE `kategori_mustahik`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `mustahik_lainnya`
--
ALTER TABLE `mustahik_lainnya`
  ADD PRIMARY KEY (`id_mustahiklainnya`);

--
-- Indexes for table `mustahik_warga`
--
ALTER TABLE `mustahik_warga`
  ADD PRIMARY KEY (`id_mustahikwarga`);

--
-- Indexes for table `muzakki`
--
ALTER TABLE `muzakki`
  ADD PRIMARY KEY (`id_muzakki`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bayar_zakat`
--
ALTER TABLE `bayar_zakat`
  MODIFY `id_zakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `kategori_mustahik`
--
ALTER TABLE `kategori_mustahik`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `mustahik_lainnya`
--
ALTER TABLE `mustahik_lainnya`
  MODIFY `id_mustahiklainnya` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `mustahik_warga`
--
ALTER TABLE `mustahik_warga`
  MODIFY `id_mustahikwarga` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `muzakki`
--
ALTER TABLE `muzakki`
  MODIFY `id_muzakki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
