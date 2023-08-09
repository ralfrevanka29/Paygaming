-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 10:21 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paygaming`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(10) NOT NULL,
  `nm_bank` varchar(50) NOT NULL,
  `rekening` int(50) NOT NULL,
  `icon_bank` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id_bank`, `nm_bank`, `rekening`, `icon_bank`) VALUES
(1, 'Gopay', 828312347, 'https://cdn1.codashop.com/S/content/common/images/mno/GO_PAY_CHNL_LOGO.png'),
(2, 'Ovo', 853311232, 'https://cdn1.codashop.com/S/content/common/images/mno/OVO_CHNL_LOGO.png'),
(3, 'Dana', 86621364, 'https://cdn1.codashop.com/S/content/common/images/mno/DANA_CHNL_LOGO.png'),
(5, 'Shopee Pay', 8623213, 'https://cdn1.codashop.com/S/content/common/images/mno/SHOPEE_PAY_CHNL_LOGO.png');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id_game` char(10) NOT NULL,
  `nm_game` varchar(50) NOT NULL,
  `icon_game` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id_game`, `nm_game`, `icon_game`) VALUES
('ML', 'Mobile Legends', 'https://cdn1.codashop.com/S/content/mobile/images/product-tiles/MLBB-tile_M4_Feb23.jpg'),
('PUBGM', 'PUBG Mobile', 'https://cdn1.codashop.com/S/content/mobile/images/product-tiles/pubgm_rps_tile.jpg'),
('SG', 'Stumble Guys', 'https://cdn1.codashop.com/S/content/mobile/images/product-tiles/Stumble_Guys_Tile.png');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id_item` char(10) NOT NULL,
  `nm_item` varchar(50) NOT NULL,
  `jml_item` varchar(10) NOT NULL,
  `nominal` varchar(50) NOT NULL,
  `id_game` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id_item`, `nm_item`, `jml_item`, `nominal`, `id_game`) VALUES
('dm1', 'Diamonds', '5', 'Rp. 1.579', 'ML'),
('dm2', 'Diamonds', '11', 'Rp. 3.330', 'ML'),
('dm3', 'Diamonds', '17', 'Rp. 5.797', 'ML'),
('dm4', 'Diamonds', '25', 'Rp. 8.436', 'ML'),
('dm5', 'Diamonds', '40', 'Rp. 12.264', 'ML');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `zona_id` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_bank` int(10) NOT NULL,
  `id_game` char(10) NOT NULL,
  `id_item` char(10) NOT NULL,
  `status_transaksi` enum('Pending','Reject','Success') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `user_id`, `zona_id`, `email`, `id_bank`, `id_game`, `id_item`, `status_transaksi`) VALUES
(7, '12345678', '1234', 'test1@gmail.com', 1, 'ML', 'dm1', 'Reject'),
(8, '1232123213', '1312312', 'test3@gmail.com', 3, 'ML', 'dm4', 'Reject'),
(9, '11111111', '1234', 'test2@ps1.com', 2, 'ML', 'dm5', 'Success'),
(10, '312452421', '2312', 'test4@gmail.com', 5, 'ML', 'dm5', 'Pending'),
(11, '342325312', '23123', 'test5@gmail.com', 2, 'ML', 'dm2', 'Pending'),
(12, '12220633', '21312', 'test1@ps1.com', 1, 'ML', 'dm5', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id_game`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `id_game` (`id_game`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_game` (`id_game`,`id_item`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
