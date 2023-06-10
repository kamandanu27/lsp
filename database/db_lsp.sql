-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2023 at 04:26 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `password_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_admin`, `email_admin`, `password_admin`) VALUES
(1, 'alvin', 'abc@gmail.com', '12345'),
(4, 'ijot', 'abc@gmail.com', '765'),
(5, 'toma', 'fgh@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_asesi`
--

CREATE TABLE `tbl_asesi` (
  `id_asesi` int NOT NULL,
  `nim_asesi` varchar(50) NOT NULL,
  `nik_asesi` varchar(50) NOT NULL,
  `nama_asesi` varchar(50) NOT NULL,
  `alamat_asesi` varchar(50) NOT NULL,
  `notlp_asesi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `jeniskelamin_asesi` varchar(50) NOT NULL,
  `agama_asesi` varchar(50) NOT NULL,
  `tempatlahir_asesi` varchar(50) NOT NULL,
  `tanggallahir_asesi` varchar(50) NOT NULL,
  `provinsi_asesi` varchar(50) NOT NULL,
  `kotakab_asesi` varchar(50) NOT NULL,
  `tahunmasuk_asesi` varchar(50) NOT NULL,
  `tahunlulus_asesi` varchar(50) NOT NULL,
  `jurusan_asesi` varchar(50) NOT NULL,
  `programstudi_asesi` varchar(50) NOT NULL,
  `email_asesi` varchar(50) NOT NULL,
  `password_asesi` varchar(50) NOT NULL,
  `foto_asesi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_asesi`
--

INSERT INTO `tbl_asesi` (`id_asesi`, `nim_asesi`, `nik_asesi`, `nama_asesi`, `alamat_asesi`, `notlp_asesi`, `jeniskelamin_asesi`, `agama_asesi`, `tempatlahir_asesi`, `tanggallahir_asesi`, `provinsi_asesi`, `kotakab_asesi`, `tahunmasuk_asesi`, `tahunlulus_asesi`, `jurusan_asesi`, `programstudi_asesi`, `email_asesi`, `password_asesi`, `foto_asesi`) VALUES
(4, '1212', '123322', 'sfasa', 'srqxd', '1213421', 'Laki-Laki', 'Kristen', 'WDW', '2023-06-10', 'SDS', 'QQWW1', '21919', '1313', 'WD', 'eee', 'qwsswe', '123', '1686309152-download.jpg'),
(6, '65321', '2131', 'sgdws', 'srqxd', '2131', 'Perempuan', 'Kristen', '2131', '2023-06-15', 'qwedq', 'q21s1', '83353', '233', 'af23', 'qwr', 'ewtr2@ert4', '123', '1686370190-Logo.png'),
(7, '43555', '5466233', 'alvin toma', 'cbc', '08897', 'Laki-Laki', 'Islam', 'cirebon', '2023-06-10', 'jabar', 'kota', '1954', '1978', 'ti', 'iya', 'abc@gmail.com', '12345', '1686370320-download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_asesor`
--

CREATE TABLE `tbl_asesor` (
  `id_asesor` int NOT NULL,
  `noregister_asesor` varchar(50) NOT NULL,
  `nik_asesor` varchar(50) NOT NULL,
  `nama_asesor` varchar(50) NOT NULL,
  `alamat_asesor` varchar(50) NOT NULL,
  `notlp_asesor` varchar(50) NOT NULL,
  `jeniskelamin_asesor` varchar(50) NOT NULL,
  `agama_asesor` varchar(50) NOT NULL,
  `tempatlahir_asesor` varchar(50) NOT NULL,
  `tanggallahir_asesor` date NOT NULL,
  `provinsi_asesor` varchar(50) NOT NULL,
  `kotakab_asesor` varchar(50) NOT NULL,
  `jurusan_asesor` varchar(50) NOT NULL,
  `programstudi_asesor` varchar(50) NOT NULL,
  `email_asesor` varchar(50) NOT NULL,
  `password_asesor` varchar(50) NOT NULL,
  `foto_asesor` date NOT NULL,
  `sertifikat_asesor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_asesor`
--

INSERT INTO `tbl_asesor` (`id_asesor`, `noregister_asesor`, `nik_asesor`, `nama_asesor`, `alamat_asesor`, `notlp_asesor`, `jeniskelamin_asesor`, `agama_asesor`, `tempatlahir_asesor`, `tanggallahir_asesor`, `provinsi_asesor`, `kotakab_asesor`, `jurusan_asesor`, `programstudi_asesor`, `email_asesor`, `password_asesor`, `foto_asesor`, `sertifikat_asesor`) VALUES
(1, '32425', '655657', 'toma', 'cbc', '0889', 'Laki-Laki', 'Islam', 'cirebon', '2023-06-10', 'jabar', 'kota cirebon', 'ti', 'iya', 'cbc@gmail.com', '12345', '0000-00-00', 'woke');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `id_event` int NOT NULL,
  `nama_event` varchar(50) NOT NULL,
  `tanggal_event` date NOT NULL,
  `jam_event` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`id_event`, `nama_event`, `tanggal_event`, `jam_event`) VALUES
(1, 'mjnuwq', '2023-06-09', '15:20:00'),
(2, 'asdas', '2023-06-09', '17:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengaturan`
--

CREATE TABLE `tbl_pengaturan` (
  `id_pengaturan` int NOT NULL,
  `visi` varchar(250) NOT NULL,
  `misi` varchar(250) NOT NULL,
  `struktur_organisasi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `id_admin` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_pengaturan`
--

INSERT INTO `tbl_pengaturan` (`id_pengaturan`, `visi`, `misi`, `struktur_organisasi`, `kontak`, `id_admin`) VALUES
(8, 'okee', 'yyyta', '1686306093-download.jpg', '0889', 4),
(10, 'okee', 'yyyta', '1686306500-3409.jpg', '6664543', 5),
(13, 'isi', 'oke', '1686366085-Matakoding HITAM TRANSPARAN.png', '0889', 4),
(15, 'sd', 'tyguj', '1686368331-3D Mockup MATAKODING BIRU.jpg', '6664543', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skema`
--

CREATE TABLE `tbl_skema` (
  `id_skema` int NOT NULL,
  `kode_skema` varchar(30) NOT NULL,
  `nama_skema` varchar(50) NOT NULL,
  `apl01` varchar(30) NOT NULL,
  `apl02` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_skema`
--

INSERT INTO `tbl_skema` (`id_skema`, `kode_skema`, `nama_skema`, `apl01`, `apl02`) VALUES
(1, '22', 'de', '77736ghdv', 'ubysgb'),
(3, '11', '22', '33', '44'),
(4, 'mks762b', '22dd', 'wsers', 'fefw'),
(5, 'dd', 'dfs', 'dfs', 'sdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_asesi`
--
ALTER TABLE `tbl_asesi`
  ADD PRIMARY KEY (`id_asesi`);

--
-- Indexes for table `tbl_asesor`
--
ALTER TABLE `tbl_asesor`
  ADD PRIMARY KEY (`id_asesor`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `tbl_pengaturan`
--
ALTER TABLE `tbl_pengaturan`
  ADD PRIMARY KEY (`id_pengaturan`);

--
-- Indexes for table `tbl_skema`
--
ALTER TABLE `tbl_skema`
  ADD PRIMARY KEY (`id_skema`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_asesi`
--
ALTER TABLE `tbl_asesi`
  MODIFY `id_asesi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_asesor`
--
ALTER TABLE `tbl_asesor`
  MODIFY `id_asesor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `id_event` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pengaturan`
--
ALTER TABLE `tbl_pengaturan`
  MODIFY `id_pengaturan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_skema`
--
ALTER TABLE `tbl_skema`
  MODIFY `id_skema` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
