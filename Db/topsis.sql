-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 04:48 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topsis`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kriteria`
--

CREATE TABLE `data_kriteria` (
  `id_data_krit` int(12) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `C1` decimal(10,4) NOT NULL,
  `C2` decimal(10,4) NOT NULL,
  `C3` decimal(10,4) NOT NULL,
  `C4` decimal(10,4) NOT NULL,
  `C5` decimal(10,4) NOT NULL,
  `C6` decimal(10,4) NOT NULL,
  `C7` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kriteria`
--

INSERT INTO `data_kriteria` (`id_data_krit`, `kode`, `C1`, `C2`, `C3`, `C4`, `C5`, `C6`, `C7`) VALUES
(1, 'C1', '1.0000', '9.0000', '7.0000', '7.0000', '7.0000', '7.0000', '7.0000'),
(2, 'C2', '0.1111', '1.0000', '5.0000', '1.0000', '5.0000', '1.0000', '5.0000'),
(3, 'C3', '0.1429', '0.2000', '1.0000', '0.2000', '1.0000', '0.2000', '0.3333'),
(4, 'C4', '0.1429', '1.0000', '5.0000', '1.0000', '5.0000', '1.0000', '5.0000'),
(5, 'C5', '0.1429', '0.2000', '1.0000', '0.2000', '1.0000', '0.2000', '0.3333'),
(6, 'C6', '0.1429', '1.0000', '5.0000', '1.0000', '5.0000', '1.0000', '5.0000'),
(7, 'C7', '0.1429', '0.2000', '3.0000', '0.2000', '3.0000', '0.2000', '1.0000');

-- --------------------------------------------------------

--
-- Table structure for table `tab_alternatif`
--

CREATE TABLE `tab_alternatif` (
  `id_alternatif` int(100) NOT NULL,
  `nama_alternatif` varchar(50) NOT NULL,
  `c1` text NOT NULL,
  `c2` text NOT NULL,
  `c3` text NOT NULL,
  `c4` text NOT NULL,
  `c5` text NOT NULL,
  `c6` text NOT NULL,
  `c7` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_alternatif`
--

INSERT INTO `tab_alternatif` (`id_alternatif`, `nama_alternatif`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`) VALUES
(1, 'metode diskusi', 'Afektif', 'Diskusi', '00 - 30 Menit', 'Pengeuasaan Materi', 'Informasi Verbal', 'Alat Peraga', '1 - 5 Siswa'),
(2, 'metode demonstrasi', '2,3', '0', '0', '0', '0', '0', '0'),
(3, 'metode problem solving', '2', '0', '0', '0', '0', '0', '0'),
(4, 'metode inquiry', '0', '0', '0', '0', '0', '0', '0'),
(5, 'metode ceramah', '2', '0', '0', '0', '0', '0', '0'),
(6, 'metode eksperimen', '0', '0', '0', '0', '0', '0', '0'),
(7, 'metode simulasi', '3', '0', '0', '0', '0', '0', '0'),
(8, 'metode tugas dan resitasi', '0', '0', '0', '0', '0', '0', '0'),
(10, 'Kontol', 'Afektif . Kognitif . Psikomotorik', 'Praktek . Menyimak', '00 - 30 Menit', 'Menyajikan Prosedur , langkah, dan data . Pengeuasaan Materi', 'Ketrampilan Intelektual . Sikap', 'Lembar Kerja . Alat Tulis . Tempat . Buku Paket', '1 - 5 Siswa'),
(11, 'Kintil', 'Afektif . Psikomotorik', 'Diskusi . Menyimak', '71 - 100 Menit', '', 'Informasi Verbal', 'Tempat . Bahan Experimen', '21 - 25 Siswa');

-- --------------------------------------------------------

--
-- Table structure for table `tab_data`
--

CREATE TABLE `tab_data` (
  `id` int(100) NOT NULL,
  `c1` text,
  `c2` text,
  `c3` text,
  `c4` text,
  `c5` text,
  `c6` text,
  `c7` text,
  `id_mapel` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_data`
--

INSERT INTO `tab_data` (`id`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `id_mapel`) VALUES
(1, 'Afektif . Kognitif', 'Tanya Jawab . Praktek', '101 - 130 menit', 'Menyajikan Prosedur , langkah, dan data . Pengeuasaan Materi', 'Informasi Verbal . Psikomotorik', 'Alat Peraga . Alat Ukur . Bahan Experimen', '16 - 20 siswa', 5),
(2, 'Afektif . Kognitif . Psikomotorik', 'Tanya Jawab . Diskusi . Praktek . Menyimak . Mengembangkan Kreatifitas', '61 - 70 menit', 'Memebrikan Instruksi  . Menyajikan Prosedur , langkah, dan data', 'Strategi Kognitif . Psikomotorik', 'Gambar . Tempat . Bahan Experimen', '1 - 5 siswa', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tab_data_konvert`
--

CREATE TABLE `tab_data_konvert` (
  `id` int(100) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `c1` int(10) NOT NULL,
  `c2` int(100) NOT NULL,
  `c3` int(10) NOT NULL,
  `c4` int(10) NOT NULL,
  `c5` int(10) NOT NULL,
  `c6` int(10) NOT NULL,
  `c7` int(10) NOT NULL,
  `id_mapel` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_data_konvert`
--

INSERT INTO `tab_data_konvert` (`id`, `id_alternatif`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `id_mapel`) VALUES
(1, 1, 5, 1, 1, 5, 5, 5, 1, 5),
(2, 2, 1, 1, 1, 1, 1, 1, 1, 5),
(3, 3, 1, 1, 1, 1, 1, 1, 1, 5),
(4, 4, 1, 1, 1, 1, 1, 1, 1, 5),
(5, 5, 1, 1, 1, 1, 1, 1, 1, 5),
(6, 6, 1, 1, 1, 1, 1, 1, 1, 5),
(7, 7, 1, 1, 1, 1, 1, 1, 1, 5),
(8, 8, 1, 1, 1, 1, 1, 1, 1, 5),
(9, 10, 5, 5, 1, 5, 1, 1, 1, 5),
(10, 11, 5, 1, 1, 1, 5, 5, 1, 5),
(11, 1, 5, 5, 1, 1, 1, 1, 1, 6),
(12, 2, 1, 1, 1, 1, 1, 1, 1, 6),
(13, 3, 1, 1, 1, 1, 1, 1, 1, 6),
(14, 4, 1, 1, 1, 1, 1, 1, 1, 6),
(15, 5, 1, 1, 1, 1, 1, 1, 1, 6),
(16, 6, 1, 1, 1, 1, 1, 1, 1, 6),
(17, 7, 1, 1, 1, 1, 1, 1, 1, 6),
(18, 8, 1, 1, 1, 1, 1, 1, 1, 6),
(19, 10, 5, 5, 1, 5, 1, 5, 1, 6),
(20, 11, 5, 5, 1, 1, 1, 5, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tab_kriteria`
--

CREATE TABLE `tab_kriteria` (
  `id_kriteria` varchar(10) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `bobot` float NOT NULL,
  `kode_kriteria` varchar(100) NOT NULL,
  `atribut` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_kriteria`
--

INSERT INTO `tab_kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`, `kode_kriteria`, `atribut`) VALUES
('1', 'tujuan pengajaran', 0.4853, 'C1', 'Benefit'),
('2', 'materi pembelajaran', 0.130077, 'C2', 'Benefit'),
('3', 'waktu pembelajaran', 0.0314345, 'C3', 'Cost'),
('4', 'kemampuan guru', 0.132565, 'C4', 'Benefit'),
('5', 'kemampuan siswa', 0.0314345, 'C5', 'Benefit'),
('6', 'fasilitas', 0.132565, 'C6', 'Cost'),
('7', 'jumlah siswa', 0.0566229, 'C7', 'Cost');

-- --------------------------------------------------------

--
-- Table structure for table `tab_mata_pelajaran`
--

CREATE TABLE `tab_mata_pelajaran` (
  `id_mapel` int(12) NOT NULL,
  `nama_mapel` varchar(100) NOT NULL,
  `sub_mapel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tab_mata_pelajaran`
--

INSERT INTO `tab_mata_pelajaran` (`id_mapel`, `nama_mapel`, `sub_mapel`) VALUES
(5, 'Kintil', 'KK'),
(6, 'Giri', 'wow');

-- --------------------------------------------------------

--
-- Table structure for table `tab_penilaian`
--

CREATE TABLE `tab_penilaian` (
  `id_penilaian` int(100) NOT NULL,
  `kode_kriteria` varchar(100) NOT NULL,
  `range_nilai` text NOT NULL,
  `nilai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tab_penilaian`
--

INSERT INTO `tab_penilaian` (`id_penilaian`, `kode_kriteria`, `range_nilai`, `nilai`) VALUES
(1, 'C1', '1 Tujuan Pengajaran', 2),
(2, 'C1', '2 Tujuan Pengajaran', 3),
(3, 'C1', '3 Tujuan Pengajaran', 4),
(4, 'C1', '4 Tujuan Pengajaran', 5),
(5, 'C2', '1 Materi Pembelajaran', 2),
(6, 'C2', '2 Materi Pembelajaran', 3),
(7, 'C2', '3 Materi Pembelajaran', 4),
(8, 'C2', '4 Materi Pembelajaran', 5),
(9, 'C3', '00 - 30 menit', 1),
(10, 'C3', '31 - 60 menit', 2),
(11, 'C3', '61 - 70 menit', 3),
(12, 'C3', '71 - 100 menit', 4),
(13, 'C3', '101 - 130 menit', 5),
(14, 'C4', '1 kemampuan', 1),
(15, 'C4', '2 kemampuan', 2),
(16, 'C4', '3 kemampuan', 3),
(17, 'C4', '4 kemampuan', 4),
(18, 'C4', '5 kemampuan', 5),
(19, 'C5', '1 Kemampuan Siswa', 1),
(20, 'C5', '2 Kemampuan Siswa', 2),
(21, 'C5', '3 Kemampuan Siswa', 3),
(22, 'C5', '4 Kemampuan Siswa', 4),
(23, 'C5', '5 Kemampuan Siswa', 5),
(24, 'C6', '1 fasilitas', 1),
(25, 'C6', '2 fasilitas', 2),
(26, 'C6', '3 fasilitas', 3),
(27, 'C6', '4 fasilitas', 4),
(28, 'C6', '5 fasilitas', 5),
(29, 'C7', '1 - 5 siswa', 1),
(30, 'C7', '6 - 10 siswa', 2),
(31, 'C7', '11 - 15 siswa', 3),
(32, 'C7', '16 - 20 siswa', 4),
(33, 'C7', '21 - 25 siswa 	', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tab_perangkingan`
--

CREATE TABLE `tab_perangkingan` (
  `id_rangking` int(100) NOT NULL,
  `id_alternatif` int(100) DEFAULT NULL,
  `nilai_preferensi` double(100,9) DEFAULT NULL,
  `id_mapel` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tab_perangkingan`
--

INSERT INTO `tab_perangkingan` (`id_rangking`, `id_alternatif`, `nilai_preferensi`, `id_mapel`) VALUES
(1, 1, 0.726039736, 5),
(2, 2, 0.000000000, 5),
(3, 3, 0.000000000, 5),
(4, 4, 0.000000000, 5),
(5, 5, 0.000000000, 5),
(6, 6, 0.000000000, 5),
(7, 7, 0.000000000, 5),
(8, 8, 0.000000000, 5),
(9, 10, 0.772089204, 5),
(10, 11, 0.666305491, 5),
(11, 1, 0.659603464, 6),
(12, 2, 0.000000000, 6),
(13, 3, 0.000000000, 6),
(14, 4, 0.000000000, 6),
(15, 5, 0.000000000, 6),
(16, 6, 0.000000000, 6),
(17, 7, 0.000000000, 6),
(18, 8, 0.000000000, 6),
(19, 10, 1.000000000, 6),
(20, 11, 0.718925515, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tab_poin`
--

CREATE TABLE `tab_poin` (
  `id_poin` varchar(10) NOT NULL,
  `poin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_poin`
--

INSERT INTO `tab_poin` (`id_poin`, `poin`) VALUES
('1', '1'),
('2', '2'),
('3', '3'),
('4', '4'),
('5', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tab_sub`
--

CREATE TABLE `tab_sub` (
  `id_sub` int(100) NOT NULL,
  `nama_sub` varchar(100) NOT NULL,
  `kode_kriteria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_sub`
--

INSERT INTO `tab_sub` (`id_sub`, `nama_sub`, `kode_kriteria`) VALUES
(1, 'Afektif', 'C1'),
(2, 'Kognitif', 'C1'),
(3, 'Psikomotorik', 'C1'),
(4, 'Tanya Jawab', 'C2'),
(5, 'Diskusi', 'C2'),
(6, 'Praktek', 'C2'),
(7, 'Menyimak', 'C2'),
(8, 'Mengembangkan Kreatifitas', 'C2'),
(9, '00 - 30 Menit', 'C3'),
(10, '31 - 60 Menit', 'C3'),
(11, '61 - 70 Menit', 'C3'),
(12, '71 - 100 Menit', 'C3'),
(13, '101 - 130 Menit', 'C3'),
(14, 'Memebrikan Instruksi ', 'C4'),
(15, 'Menyajikan Prosedur , langkah, dan data', 'C4'),
(16, 'Pengeuasaan Materi', 'C4'),
(17, 'Sebagai Fasilitator', 'C4'),
(18, 'Sebagai Instruktur', 'C4'),
(19, 'Ketrampilan Intelektual', 'C5'),
(20, 'Strategi Kognitif', 'C5'),
(21, 'Informasi Verbal', 'C5'),
(22, 'Sikap', 'C5'),
(23, 'Psikomotorik', 'C5'),
(24, 'Lembar Kerja', 'C6'),
(25, 'Gambar', 'C6'),
(26, 'Alat Tulis', 'C6'),
(27, 'Alat Peraga', 'C6'),
(28, 'Tempat', 'C6'),
(29, 'Alat Ukur', 'C6'),
(30, 'Data', 'C6'),
(31, 'Buku Paket', 'C6'),
(32, 'Bahan Experimen', 'C6'),
(33, 'Benda di Sekitar', 'C6'),
(34, '1 - 5 Siswa', 'C7'),
(35, '6 - 10 Siswa', 'C7'),
(36, '11 - 15 Siswa', 'C7'),
(37, '16 - 20 Siswa', 'C7'),
(38, '21 - 25 Siswa', 'C7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kriteria`
--
ALTER TABLE `data_kriteria`
  ADD PRIMARY KEY (`id_data_krit`),
  ADD KEY `kode` (`kode`);

--
-- Indexes for table `tab_alternatif`
--
ALTER TABLE `tab_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `tab_data`
--
ALTER TABLE `tab_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `tab_data_konvert`
--
ALTER TABLE `tab_data_konvert`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_alternatif` (`id_alternatif`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `tab_kriteria`
--
ALTER TABLE `tab_kriteria`
  ADD PRIMARY KEY (`id_kriteria`),
  ADD KEY `kode_kriteria` (`kode_kriteria`);

--
-- Indexes for table `tab_mata_pelajaran`
--
ALTER TABLE `tab_mata_pelajaran`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tab_penilaian`
--
ALTER TABLE `tab_penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `kode_kriteria` (`kode_kriteria`);

--
-- Indexes for table `tab_perangkingan`
--
ALTER TABLE `tab_perangkingan`
  ADD PRIMARY KEY (`id_rangking`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_alternatif` (`id_alternatif`);

--
-- Indexes for table `tab_poin`
--
ALTER TABLE `tab_poin`
  ADD PRIMARY KEY (`id_poin`);

--
-- Indexes for table `tab_sub`
--
ALTER TABLE `tab_sub`
  ADD PRIMARY KEY (`id_sub`),
  ADD KEY `kode_kriteria` (`kode_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kriteria`
--
ALTER TABLE `data_kriteria`
  MODIFY `id_data_krit` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tab_alternatif`
--
ALTER TABLE `tab_alternatif`
  MODIFY `id_alternatif` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tab_data`
--
ALTER TABLE `tab_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tab_data_konvert`
--
ALTER TABLE `tab_data_konvert`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tab_mata_pelajaran`
--
ALTER TABLE `tab_mata_pelajaran`
  MODIFY `id_mapel` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tab_penilaian`
--
ALTER TABLE `tab_penilaian`
  MODIFY `id_penilaian` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tab_perangkingan`
--
ALTER TABLE `tab_perangkingan`
  MODIFY `id_rangking` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tab_sub`
--
ALTER TABLE `tab_sub`
  MODIFY `id_sub` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tab_data`
--
ALTER TABLE `tab_data`
  ADD CONSTRAINT `tab_data_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `tab_mata_pelajaran` (`id_mapel`);

--
-- Constraints for table `tab_perangkingan`
--
ALTER TABLE `tab_perangkingan`
  ADD CONSTRAINT `tab_perangkingan_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `tab_mata_pelajaran` (`id_mapel`),
  ADD CONSTRAINT `tab_perangkingan_ibfk_2` FOREIGN KEY (`id_alternatif`) REFERENCES `tab_alternatif` (`id_alternatif`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
