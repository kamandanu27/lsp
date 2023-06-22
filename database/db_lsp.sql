-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2023 at 10:20 AM
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
(4, '1212', '123322', 'sfasa', 'srqxd', '1213421', 'Laki-Laki', 'Islam', 'WDW', '2023-06-10', 'SDS', 'QQWW1', '21919', '1313', 'WD', 'eee', 'qwsswe@gdg', '12345', '1686381345-3409.jpg'),
(7, '43555', '5466233', 'alvin toma', 'cbc', '08897', 'Laki-Laki', 'Kristen', 'cirebon', '2023-06-10', 'jabar', 'kota', '1954', '1978', 'ti', 'iya', 'abc@gmail.com', '123', '1686375441-3339.jpg');

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
  `foto_asesor` text NOT NULL,
  `sertifikat_asesor` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_asesor`
--

INSERT INTO `tbl_asesor` (`id_asesor`, `noregister_asesor`, `nik_asesor`, `nama_asesor`, `alamat_asesor`, `notlp_asesor`, `jeniskelamin_asesor`, `agama_asesor`, `tempatlahir_asesor`, `tanggallahir_asesor`, `provinsi_asesor`, `kotakab_asesor`, `jurusan_asesor`, `programstudi_asesor`, `email_asesor`, `password_asesor`, `foto_asesor`, `sertifikat_asesor`) VALUES
(2, '1212', '2211', 'adaaw', 'dadss', '22313', 'Laki-Laki', 'Islam', 'cirebon', '2023-06-15', 'sdfddf', 'deeea', 'jurusan', 'program', 'wrew2@dsds', '123', '1687329193-3409.jpg', 'woke');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `id_event` int NOT NULL,
  `id_pendaftaran` int NOT NULL,
  `nama_event` varchar(50) NOT NULL,
  `tanggal_event` date NOT NULL,
  `jam_event` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`id_event`, `id_pendaftaran`, `nama_event`, `tanggal_event`, `jam_event`) VALUES
(1, 0, 'mjnuwq', '2023-06-09', '15:20:00'),
(2, 0, 'asdas', '2023-06-09', '17:23:00'),
(4, 2, 'mjnuwq', '2023-06-09', '16:13:00'),
(5, 3, 'asdas', '2023-06-30', '19:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_informasi`
--

CREATE TABLE `tbl_informasi` (
  `id_informasi` int NOT NULL,
  `judul_informasi` varchar(50) NOT NULL,
  `foto_informasi` text NOT NULL,
  `isi_informasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_informasi`
--

INSERT INTO `tbl_informasi` (`id_informasi`, `judul_informasi`, `foto_informasi`, `isi_informasi`) VALUES
(1, 'adaa', '1687416680-download.jpg', 'fddwe'),
(2, 'daa32', '1687419581-3409.jpg', 'fdd2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftaran`
--

CREATE TABLE `tbl_pendaftaran` (
  `id_pendaftaran` int NOT NULL,
  `no_pendaftaran` varchar(50) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `id_asesi` int NOT NULL,
  `id_asesor` int NOT NULL,
  `id_skema` int NOT NULL,
  `apl01` int NOT NULL,
  `apl02` int NOT NULL,
  `sertifikat` varchar(50) NOT NULL,
  `status_pendaftaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_pendaftaran`
--

INSERT INTO `tbl_pendaftaran` (`id_pendaftaran`, `no_pendaftaran`, `tgl_pendaftaran`, `id_asesi`, `id_asesor`, `id_skema`, `apl01`, `apl02`, `sertifikat`, `status_pendaftaran`) VALUES
(2, '31313', '2023-06-10', 4, 1, 1, 0, 0, 'sgeseww2', 'oke'),
(3, '43342', '2023-06-10', 4, 2, 1, 0, 0, 'sges454541a', 'oke'),
(4, '31313', '2023-06-10', 7, 1, 3, 0, 0, 'sgeseww2', 'asaa'),
(5, '31313', '2023-06-22', 4, 2, 3, 0, 0, 'sgeseww2', 'oke');

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
(10, 'okee', 'yyyta', '1686372703-3339.jpg', '6664543', 5),
(13, 'isi', 'oke', '1686372715-3409.jpg', '0889', 4),
(16, 'isi', 'oke', '1687317526-download.jpg', '0889', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profil`
--

CREATE TABLE `tbl_profil` (
  `id_profil` int NOT NULL,
  `visimisi` varchar(50) NOT NULL,
  `struktur_organisasi` text NOT NULL,
  `sejarah_tugas` varchar(50) NOT NULL,
  `kontak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_profil`
--

INSERT INTO `tbl_profil` (`id_profil`, `visimisi`, `struktur_organisasi`, `sejarah_tugas`, `kontak`) VALUES
(1, 'isssi', '1687417934-3339.jpg', 'dad22', '0889');

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tuk`
--

CREATE TABLE `tbl_tuk` (
  `id_tuk` int NOT NULL,
  `kode_tuk` varchar(50) NOT NULL,
  `jenis_tuk` varchar(50) NOT NULL,
  `nama_tuk` varchar(50) NOT NULL,
  `alamat_tuk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_tuk`
--

INSERT INTO `tbl_tuk` (`id_tuk`, `kode_tuk`, `jenis_tuk`, `nama_tuk`, `alamat_tuk`) VALUES
(1, '2314', 'saaas', 'sya', 'abc');

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
-- Indexes for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `tbl_pengaturan`
--
ALTER TABLE `tbl_pengaturan`
  ADD PRIMARY KEY (`id_pengaturan`);

--
-- Indexes for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `tbl_skema`
--
ALTER TABLE `tbl_skema`
  ADD PRIMARY KEY (`id_skema`);

--
-- Indexes for table `tbl_tuk`
--
ALTER TABLE `tbl_tuk`
  ADD PRIMARY KEY (`id_tuk`);

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
  MODIFY `id_asesor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `id_event` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  MODIFY `id_informasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  MODIFY `id_pendaftaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pengaturan`
--
ALTER TABLE `tbl_pengaturan`
  MODIFY `id_pengaturan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
  MODIFY `id_profil` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_skema`
--
ALTER TABLE `tbl_skema`
  MODIFY `id_skema` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_tuk`
--
ALTER TABLE `tbl_tuk`
  MODIFY `id_tuk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
