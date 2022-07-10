-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2021 at 12:18 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

create database florist;
use florist;
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `florist`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `detailId` int(11) NOT NULL,
  `produkId` int(11) NOT NULL,
  `transaksiId` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `ucapan` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`detailId`, `produkId`, `transaksiId`, `jumlah`, `harga`, `total`, `ucapan`, `alamat`) VALUES
(2, 1, 35, 1, 600000, 600000, ' a', ' a'),
(3, 14, 35, 1, 500000, 500000, ' c', ' c'),
(4, 15, 35, 1, 40000, 40000, ' b', ' b'),
(5, 1, 36, 1, 600000, 600000, ' a', ' a'),
(6, 14, 36, 1, 500000, 500000, ' c', ' c'),
(7, 15, 36, 1, 40000, 40000, ' b', ' b'),
(8, 1, 37, 1, 600000, 600000, ' a', ' k'),
(9, 14, 37, 2, 500000, 1000000, ' b', ' j'),
(10, 15, 37, 3, 40000, 120000, ' c', ' l'),
(11, 1, 38, 1, 600000, 600000, ' a', ' k'),
(12, 14, 38, 2, 500000, 1000000, ' b', ' j'),
(13, 15, 38, 3, 40000, 120000, ' c', ' l'),
(14, 1, 39, 1, 600000, 600000, ' a', ' j'),
(15, 14, 39, 2, 500000, 1000000, ' b', ' e'),
(16, 15, 39, 2, 40000, 80000, ' c', ' l'),
(17, 1, 40, 1, 600000, 600000, ' a', ' j'),
(18, 14, 40, 2, 500000, 1000000, ' b', ' e'),
(19, 15, 40, 3, 40000, 120000, ' c', ' r'),
(20, 1, 41, 1, 600000, 600000, ' a', ' j'),
(21, 14, 41, 2, 500000, 1000000, ' b', ' e'),
(22, 15, 41, 3, 40000, 120000, ' c', ' r'),
(23, 1, 42, 1, 600000, 600000, ' a', ' j'),
(24, 14, 42, 2, 500000, 1000000, ' b', ' e'),
(25, 15, 42, 3, 40000, 120000, ' c', ' r'),
(26, 1, 43, 1, 600000, 600000, ' a', ' j'),
(27, 14, 43, 2, 500000, 1000000, ' b', ' e'),
(28, 15, 43, 3, 40000, 120000, ' c', ' r'),
(29, 1, 44, 1, 600000, 600000, ' a', ' j'),
(30, 14, 44, 2, 500000, 1000000, ' b', ' e'),
(31, 15, 44, 3, 40000, 120000, ' c', ' r'),
(32, 1, 45, 1, 600000, 600000, ' a', ' j'),
(33, 14, 45, 2, 500000, 1000000, ' b', ' e'),
(34, 15, 45, 3, 40000, 120000, ' c', ' r'),
(35, 1, 46, 1, 600000, 600000, ' a', ' j'),
(36, 14, 46, 2, 500000, 1000000, ' b', ' e'),
(37, 15, 46, 3, 40000, 120000, ' c', ' r'),
(38, 1, 47, 1, 600000, 600000, ' a', ' j'),
(39, 14, 47, 2, 500000, 1000000, ' b', ' e'),
(40, 15, 47, 3, 40000, 120000, ' c', ' r'),
(41, 1, 48, 1, 600000, 600000, ' a', ' j'),
(42, 14, 48, 2, 500000, 1000000, ' b', ' e'),
(43, 15, 48, 3, 40000, 120000, ' c', ' r'),
(44, 1, 49, 1, 600000, 600000, ' a', ' j'),
(45, 14, 49, 2, 500000, 1000000, ' b', ' e'),
(46, 15, 49, 3, 40000, 120000, ' c', ' r'),
(47, 1, 50, 1, 600000, 600000, ' a', ' j'),
(48, 14, 50, 2, 500000, 1000000, ' b', ' e'),
(49, 15, 50, 3, 40000, 120000, ' c', ' r'),
(50, 1, 51, 2, 600000, 1200000, ' ab', ' e'),
(51, 14, 51, 1, 500000, 500000, ' ac', ' f'),
(52, 15, 51, 3, 40000, 120000, ' df', ' g'),
(53, 1, 52, 1, 600000, 600000, ' ab', ' k'),
(54, 14, 52, 2, 500000, 1000000, ' ac', ' e'),
(55, 15, 52, 2, 40000, 80000, ' df', ' r'),
(56, 1, 53, 1, 600000, 600000, ' ab', ' k'),
(57, 14, 53, 2, 500000, 1000000, ' ac', ' e'),
(58, 15, 53, 2, 40000, 80000, ' df', ' r'),
(59, 1, 54, 1, 600000, 600000, ' ab', ' k'),
(60, 14, 54, 2, 500000, 1000000, ' ac', ' e'),
(61, 15, 54, 2, 40000, 80000, ' df', ' r'),
(62, 1, 55, 1, 600000, 600000, ' ab', ' k'),
(63, 14, 55, 2, 500000, 1000000, ' ac', ' e'),
(64, 15, 55, 2, 40000, 80000, ' df', ' r'),
(65, 1, 56, 1, 600000, 600000, ' ab', ' k'),
(66, 14, 56, 2, 500000, 1000000, ' ac', ' e'),
(67, 15, 56, 2, 40000, 80000, ' df', ' r'),
(68, 1, 59, 1, 600000, 600000, ' ab', ' k'),
(69, 14, 59, 2, 500000, 1000000, ' ac', ' j'),
(70, 15, 59, 3, 40000, 120000, ' df', ' r');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategoriId` int(11) NOT NULL,
  `namaKategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategoriId`, `namaKategori`) VALUES
(1, 'Papan Bunga'),
(3, 'Bucket Bunga'),
(4, 'Bunga Hidup ');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `bayarId` int(11) NOT NULL,
  `transaksiId` int(11) NOT NULL,
  `kodeBayar` varchar(100) NOT NULL,
  `tglBayar` date NOT NULL,
  `statusBayar` varchar(50) NOT NULL,
  `totalBayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `produkId` int(11) NOT NULL,
  `kategoriId` int(11) NOT NULL,
  `namaProduk` varchar(100) NOT NULL,
  `hargaProduk` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`produkId`, `kategoriId`, `namaProduk`, `hargaProduk`, `gambar`, `deskripsi`) VALUES
(1, 1, 'Papan Bunga Dukacita', 600000, 'Logo Joina Florist.jpg', 'Papan Dukacita yang menggunakan mahkota'),
(14, 3, 'Papan Bunga Sukacita', 500000, 'photo 134 19-40-30.jpg', 'Terdiri atas papan 2 styrofoam'),
(15, 3, 'Bucket Bunga Mawar', 40000, 'photo 134 20-4-10.jpg', 'Bunga mawar segar yang sangat wangi');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksiId` int(11) NOT NULL,
  `userId` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tglOrder` timestamp NOT NULL DEFAULT current_timestamp(),
  `kodeBayar` varchar(100) NOT NULL,
  `totalTransaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaksiId`, `userId`, `status`, `tglOrder`, `kodeBayar`, `totalTransaksi`) VALUES
(1, 'martaahaan997@gmail.com', 'pending', '2021-08-05 03:55:41', '20210805105541-26d1c', 2700000),
(2, 'martaahaan997@gmail.com', 'pending', '2021-08-05 03:56:28', '20210805105628-26d1c', 2700000),
(3, 'martaahaan997@gmail.com', 'pending', '2021-08-05 03:56:43', '20210805105643-26d1c', 2700000),
(4, 'martaahaan997@gmail.com', 'pending', '2021-08-05 03:59:47', '20210805105947-26d1c', 2700000),
(5, 'martaahaan997@gmail.com', 'pending', '2021-08-05 04:01:02', '20210805110102-26d1c', 2700000),
(6, 'martaahaan997@gmail.com', 'pending', '2021-08-05 04:04:45', '20210805110445-26d1c', 2700000),
(7, 'martaahaan997@gmail.com', 'pending', '2021-08-05 04:06:22', '20210805110622-26d1c', 2700000),
(8, 'martaahaan997@gmail.com', 'pending', '2021-08-05 04:06:32', '20210805110632-26d1c', 2700000),
(9, 'martaahaan997@gmail.com', 'pending', '2021-08-05 11:42:10', '20210805184210-26d1c', 0),
(10, 'martaahaan997@gmail.com', 'pending', '2021-08-05 11:42:28', '20210805184228-26d1c', 0),
(11, 'martaahaan997@gmail.com', 'pending', '2021-08-05 11:42:32', '20210805184232-26d1c', 0),
(12, 'martaahaan997@gmail.com', 'pending', '2021-08-05 11:42:38', '20210805184238-26d1c', 0),
(13, 'martaahaan997@gmail.com', 'pending', '2021-08-05 11:45:13', '20210805184513-26d1c', 0),
(14, 'martaahaan997@gmail.com', 'pending', '2021-08-05 11:45:41', '20210805184541-26d1c', 1600000),
(15, 'martaahaan997@gmail.com', 'pending', '2021-08-05 11:49:50', '20210805184950-26d1c', 1600000),
(16, 'martaahaan997@gmail.com', 'pending', '2021-08-05 11:49:58', '20210805184958-26d1c', 1600000),
(17, 'martaahaan997@gmail.com', 'pending', '2021-08-05 11:52:11', '20210805185211-26d1c', 1600000),
(18, 'martaahaan997@gmail.com', 'pending', '2021-08-05 11:52:30', '20210805185230-26d1c', 1600000),
(19, 'martaahaan997@gmail.com', 'pending', '2021-08-05 11:52:43', '20210805185243-26d1c', 1600000),
(20, 'martaahaan997@gmail.com', 'pending', '2021-08-05 11:54:44', '20210805185444-26d1c', 1600000),
(21, 'martaahaan997@gmail.com', 'pending', '2021-08-05 11:56:00', '20210805185600-26d1c', 1600000),
(22, 'martaahaan997@gmail.com', 'pending', '2021-08-05 21:57:23', '20210806045723-26d1c', 1100000),
(23, 'martaahaan997@gmail.com', 'pending', '2021-08-05 22:00:46', '20210806050045-26d1c', 1100000),
(24, 'martaahaan997@gmail.com', 'pending', '2021-08-05 22:05:36', '20210806050536-26d1c', 1100000),
(25, 'martaahaan997@gmail.com', 'pending', '2021-08-05 22:31:52', '20210806053152-26d1c', 0),
(26, 'martaahaan997@gmail.com', 'pending', '2021-08-05 22:32:26', '20210806053226-26d1c', 1100000),
(27, 'martaahaan997@gmail.com', 'pending', '2021-08-05 22:38:05', '20210806053805-26d1c', 1100000),
(28, 'admin', 'pending', '2021-08-05 23:55:16', '20210806065516-21232', 0),
(29, 'admin', 'pending', '2021-08-05 23:55:35', '20210806065535-21232', 1140000),
(30, 'admin', 'pending', '2021-08-05 23:55:54', '20210806065554-21232', 1140000),
(31, 'admin', 'pending', '2021-08-06 00:46:16', '20210806074616-21232', 600000),
(32, 'admin', 'pending', '2021-08-06 01:20:16', '20210806082016-21232', 1640000),
(33, 'admin', 'pending', '2021-08-06 02:14:33', '20210806091433-21232', 0),
(34, 'admin', 'pending', '2021-08-06 02:15:00', '20210806091500-21232', 1140000),
(35, 'martaahaan997@gmail.com', 'pending', '2021-08-06 10:49:57', '20210806174957-26d1c', 1140000),
(36, 'martaahaan997@gmail.com', 'pending', '2021-08-06 10:50:59', '20210806175059-26d1c', 1140000),
(37, 'martaahaan997@gmail.com', 'pending', '2021-08-06 11:29:42', '20210806182942-26d1c', 1720000),
(38, 'martaahaan997@gmail.com', 'pending', '2021-08-06 11:30:34', '20210806183034-26d1c', 1720000),
(39, 'martaahaan997@gmail.com', 'pending', '2021-08-06 21:16:36', '20210807041636-26d1c', 1680000),
(40, 'martaahaan997@gmail.com', 'pending', '2021-08-07 00:23:49', '20210807072349-26d1c', 1720000),
(41, 'martaahaan997@gmail.com', 'pending', '2021-08-07 00:27:03', '20210807072703-26d1c', 1720000),
(42, 'martaahaan997@gmail.com', 'pending', '2021-08-07 00:27:12', '20210807072712-26d1c', 1720000),
(43, 'martaahaan997@gmail.com', 'pending', '2021-08-07 00:29:37', '20210807072937-26d1c', 1720000),
(44, 'martaahaan997@gmail.com', 'pending', '2021-08-07 00:29:57', '20210807072957-26d1c', 1720000),
(45, 'martaahaan997@gmail.com', 'pending', '2021-08-07 00:36:51', '20210807073651-26d1c', 1720000),
(46, 'martaahaan997@gmail.com', 'pending', '2021-08-07 00:43:28', '20210807074328-26d1c', 1720000),
(47, 'martaahaan997@gmail.com', 'pending', '2021-08-07 00:48:47', '20210807074846-26d1c', 1720000),
(48, 'martaahaan997@gmail.com', 'pending', '2021-08-07 00:50:34', '20210807075034-26d1c', 1720000),
(49, 'martaahaan997@gmail.com', 'pending', '2021-08-07 00:50:51', '20210807075051-26d1c', 1720000),
(50, 'martaahaan997@gmail.com', 'pending', '2021-08-07 00:52:22', '20210807075222-26d1c', 1720000),
(51, 'martaahaan997@gmail.com', 'pending', '2021-08-07 00:53:00', '20210807075300-26d1c', 1820000),
(52, 'martaahaan997@gmail.com', 'pending', '2021-08-07 01:06:18', '20210807080618-26d1c', 1680000),
(53, 'martaahaan997@gmail.com', 'pending', '2021-08-07 01:12:14', '20210807081214-26d1c', 1680000),
(54, 'martaahaan997@gmail.com', 'pending', '2021-08-07 01:13:57', '20210807081357-26d1c', 1680000),
(55, 'martaahaan997@gmail.com', 'pending', '2021-08-07 02:39:17', '20210807093917-26d1c', 1680000),
(56, 'martaahaan997@gmail.com', 'pending', '2021-08-07 02:39:35', '20210807093935-26d1c', 1680000),
(57, 'martaahaan997@gmail.com', 'pending', '2021-08-07 02:59:54', '20210807095954-26d1c', 0),
(58, 'martaahaan997@gmail.com', 'pending', '2021-08-07 03:00:08', '20210807100008-26d1c', 1720000),
(59, 'martaahaan997@gmail.com', 'pending', '2021-08-07 05:03:53', '20210807120353-26d1c', 1720000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` varchar(100) NOT NULL,
  `userPassword` text NOT NULL,
  `userNama` varchar(50) NOT NULL,
  `userGroup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userPassword`, `userNama`, `userGroup`) VALUES
('admin', '81dc9bdb52d04dc20036dbd8313ed055', 'Administrator', 1),
('claudyaenxy@gmail.com', 'a164feb8ce1872ad5254b017e9ee681a', 'Claudya Lorency', 2),
('martaahaan997@gmail.com', '3c2e62d52444c44fc38c117ee37552ef', 'Marta Siahaan', 2),
('martasciscilia@gmail.com', '47379aa0ad9cf99b28a114b1e0dfdc6d', 'Marta Sciscilia', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`detailId`),
  ADD KEY `produkId` (`produkId`),
  ADD KEY `transaksiId` (`transaksiId`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategoriId`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`bayarId`),
  ADD KEY `transaksiId` (`transaksiId`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produkId`),
  ADD KEY `kategoriId` (`kategoriId`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksiId`),
  ADD KEY `pelangganId` (`userId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `detailId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategoriId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `bayarId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `produkId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksiId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`produkId`) REFERENCES `produk` (`produkId`),
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`transaksiId`) REFERENCES `transaksi` (`transaksiId`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`transaksiId`) REFERENCES `transaksi` (`transaksiId`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`kategoriId`) REFERENCES `kategori` (`kategoriId`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;