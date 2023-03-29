-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2023 at 10:50 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kas`
--

CREATE TABLE `tb_kas` (
  `idkas` int(11) NOT NULL,
  `kdrek` varchar(50) NOT NULL,
  `ket` text NOT NULL,
  `tgl` date NOT NULL,
  `debit` int(11) NOT NULL,
  `kredit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_kas`
--

INSERT INTO `tb_kas` (`idkas`, `kdrek`, `ket`, `tgl`, `debit`, `kredit`) VALUES
(62, 'Contoh1', 'Contoh1', '2023-03-29', 10000, 0),
(63, 'Contoh2', 'Contoh2', '2023-03-29', 100000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_paypal`
--

CREATE TABLE `tb_paypal` (
  `id_paypal` int(11) NOT NULL,
  `kdrek` varchar(50) NOT NULL,
  `ket` text NOT NULL,
  `tgl` datetime NOT NULL,
  `debit` decimal(8,2) NOT NULL,
  `kredit` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_paypal`
--

INSERT INTO `tb_paypal` (`id_paypal`, `kdrek`, `ket`, `tgl`, `debit`, `kredit`) VALUES
(32, 'Contoh1', 'Contoh1', '2023-03-29 10:22:56', '8.23', '0.00'),
(33, 'Contoh2', 'Contoh2', '2023-03-29 10:23:11', '0.00', '5.72');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(40) NOT NULL,
  `hint` varchar(40) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `username`, `password`, `hint`, `nama_lengkap`, `no_telepon`, `level`) VALUES
(1, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'Test Ubah ', '6969696', 'User'),
(2, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'test', 'test', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekening`
--

CREATE TABLE `tb_rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_rekening` varchar(50) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_rekening`
--

INSERT INTO `tb_rekening` (`id_rekening`, `nama_rekening`, `nama_bank`, `no_rekening`, `username`) VALUES
(11, 'Test', 'Test', '1293i123', 'user'),
(12, 'Test', 'Test', '2139i1293', 'user'),
(14, 'ini yang test', 'ini yang test', 'ini yang test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `kode_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`kode_user`, `username`, `password`, `pass`, `nama_lengkap`, `no_telepon`, `level`) VALUES
(27, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Administrator', '021xxxx', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kas`
--
ALTER TABLE `tb_kas`
  ADD PRIMARY KEY (`idkas`);

--
-- Indexes for table `tb_paypal`
--
ALTER TABLE `tb_paypal`
  ADD PRIMARY KEY (`id_paypal`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `tb_rekening`
--
ALTER TABLE `tb_rekening`
  ADD PRIMARY KEY (`id_rekening`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`kode_user`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kas`
--
ALTER TABLE `tb_kas`
  MODIFY `idkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `tb_paypal`
--
ALTER TABLE `tb_paypal`
  MODIFY `id_paypal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_rekening`
--
ALTER TABLE `tb_rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `kode_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_rekening`
--
ALTER TABLE `tb_rekening`
  ADD CONSTRAINT `tb_rekening_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tb_pengguna` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
