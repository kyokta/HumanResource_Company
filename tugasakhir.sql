-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 03:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasakhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` int(11) NOT NULL,
  `id_pekerja` varchar(5) NOT NULL,
  `tanggal_cuti` date NOT NULL,
  `alasan` varchar(50) NOT NULL,
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `id_pekerja`, `tanggal_cuti`, `alasan`, `status`) VALUES
(1, 'A1234', '2023-06-19', 'Coba coba', 1),
(2, 'A1234', '2023-06-15', 'Coba 2', 1),
(3, 'D0001', '2002-10-05', 'Tidak perlu alasan', 1),
(4, 'F2382', '2023-06-15', 'Menikah', 1),
(5, 'B4', '2023-06-26', 'Dinas Luar Kota', 1);

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `id_departemen` int(11) NOT NULL,
  `departemen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id_departemen`, `departemen`) VALUES
(1, 'Keuangan'),
(2, 'Produksi'),
(3, 'Personalia');

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `id_pegawai` varchar(5) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `bulan` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`id_pegawai`, `jumlah`, `bulan`, `tahun`, `status`) VALUES
('B0001', 500000, 7, '0000', 1),
('F2378', 67890, 6, '0000', 1),
('B0001', 100000, 2, '0000', 1),
('F2379', 500000, 2, '0000', 1),
('F2382', 700000, 2, '0000', 1),
('F2382', 800000, 7, '0000', 1),
('B4', 1000000, 1, '0000', 1),
('B4', 900000, 2, '2019', 1);

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id_golongan` int(11) NOT NULL,
  `golongan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id_golongan`, `golongan`) VALUES
(2, 'Karyawan Kontrak'),
(3, 'Outsourcing'),
(5, 'Praktik Kerja Lapang'),
(9, 'Karyawan Tetap');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `kd_jabatan` char(1) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `kd_jabatan`, `jabatan`) VALUES
(2, 'B', 'Kepala Cabang'),
(3, 'C', 'Kepala Unit'),
(4, 'D', 'Kepala Seksi'),
(5, 'F', 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `tanggal` date NOT NULL,
  `aksi` varchar(50) NOT NULL,
  `data_sebelum` varchar(50) NOT NULL,
  `data_sesudah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id_pekerjaan`, `pekerjaan`) VALUES
(1, 'Admin'),
(2, 'Cleaning Service'),
(3, 'Programmer'),
(4, 'Satpam');

-- --------------------------------------------------------

--
-- Table structure for table `pribadi`
--

CREATE TABLE `pribadi` (
  `id_pegawai` varchar(5) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `seksi` int(11) NOT NULL,
  `jabatan` int(11) NOT NULL,
  `golongan` int(11) NOT NULL,
  `pekerjaan` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pribadi`
--

INSERT INTO `pribadi` (`id_pegawai`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `npwp`, `seksi`, `jabatan`, `golongan`, `pekerjaan`, `status`) VALUES
('A1234', 'Oktarinanto-edit', 'Slemannn', '2001-10-05', 'Jalan Kaliurangkwebdbed', '09876543211212', 4, 5, 5, 4, 0),
('B0001', 'Data new', 'new', '2000-01-01', 'kjec kwjec', 'xkvjjksdvV', 1, 2, 2, 2, 0),
('B2', 'Rizky Oktarinanto', 'Sleman', '1990-08-08', 'lkenc', 'jsencjsce', 3, 2, 3, 1, 0),
('B3', 'Rizky Oktarinanto', 'Sleman', '2002-10-05', 'Jalan Lembu Pala', '123456789', 1, 2, 2, 3, 0),
('B4', 'Oktarinanto', 'Yogyakarta', '2001-05-10', 'Jalan Kaliurang KM 13,5', '098765532632', 2, 2, 3, 1, 1),
('C0001', 'Ede', 'Adwd', '1990-08-08', 'kahdqd', 'ed3W', 1, 3, 2, 4, 0),
('D0001', 'Rizky', 'Sleman', '2002-05-10', 'Jalan Lembu Pala', '0985429753835', 3, 3, 2, 1, 0),
('D2', 'Rizky O', 'Sleman', '2002-05-10', 'Sapen, Umbulmartani, Ngemplak, Sleman', '0985429753835', 1, 4, 3, 1, 0),
('F2378', 'Pegawai 1', 'Sleman', '2023-05-02', 'Jalan Lembu Pala', '12345678', 1, 4, 5, 3, 0),
('F2379', 'Pegawai 1', 'Yogyakarta', '1978-05-02', 'Jalan Kaliurang', '12345678', 1, 4, 3, 1, 0),
('F2380', 'iyadvuyd', 'EJFWUF', '1990-10-10', 'krfjbwkf', 'jhbvhav', 2, 5, 2, 2, 0),
('F2381', 'Neta', 'KP', '2000-01-01', '', 'qwq', 3, 5, 3, 2, 0),
('F2382', 'Rizky Oktarinanto', 'Sleman', '2002-05-10', 'Jalan Kaliurang KM 13', '1234567890', 1, 5, 9, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seksi`
--

CREATE TABLE `seksi` (
  `id_seksi` int(11) NOT NULL,
  `seksi` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `departemen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seksi`
--

INSERT INTO `seksi` (`id_seksi`, `seksi`, `unit`, `departemen`) VALUES
(1, 'ICT', 'ICT & Akuntansi', 2),
(2, 'Tool Making A', 'Mesin', 1),
(3, 'Tes', 'Cek', 3),
(4, 'Pengelasan', 'Mesin', 2),
(8, 'Produksi Barang', 'Produksi', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`),
  ADD KEY `FK_PEGAWAI` (`id_pekerja`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_departemen`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `pribadi`
--
ALTER TABLE `pribadi`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `FK_PEKERJAAN` (`pekerjaan`),
  ADD KEY `FK_GOLONGAN` (`golongan`),
  ADD KEY `FK_JABATAN` (`jabatan`),
  ADD KEY `FK_SEKSI` (`seksi`);

--
-- Indexes for table `seksi`
--
ALTER TABLE `seksi`
  ADD PRIMARY KEY (`id_seksi`),
  ADD KEY `FK_DEPARTEMEN` (`departemen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id_departemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id_golongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seksi`
--
ALTER TABLE `seksi`
  MODIFY `id_seksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cuti`
--
ALTER TABLE `cuti`
  ADD CONSTRAINT `FK_PEGAWAI` FOREIGN KEY (`id_pekerja`) REFERENCES `pribadi` (`id_pegawai`);

--
-- Constraints for table `pribadi`
--
ALTER TABLE `pribadi`
  ADD CONSTRAINT `FK_GOLONGAN` FOREIGN KEY (`golongan`) REFERENCES `golongan` (`id_golongan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_JABATAN` FOREIGN KEY (`jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PEKERJAAN` FOREIGN KEY (`pekerjaan`) REFERENCES `pekerjaan` (`id_pekerjaan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_SEKSI` FOREIGN KEY (`seksi`) REFERENCES `seksi` (`id_seksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seksi`
--
ALTER TABLE `seksi`
  ADD CONSTRAINT `FK_DEPARTEMEN` FOREIGN KEY (`departemen`) REFERENCES `departemen` (`id_departemen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
