-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2025 at 11:23 AM
-- Server version: 10.11.2-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vsgaproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `perusahaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `logo`, `name`, `perusahaan`) VALUES
(1, '../image/suzuki.png', 'Suzuki', 'Suzuki Motor Corporation'),
(2, '../image/Bridgestone Corporation.png', 'Bridgestone', 'Bridgestone Corporation'),
(3, '../image/Touratech Japan.png', 'Touratech Japan', 'Touratech Japan'),
(4, '../image/japanairlines.png', 'Japan Airlines', 'Japan Airlines Co., Ltd');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `imgsource` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `description`, `price`, `imgsource`) VALUES
(1, 'Akuma Motor Club T-Shirt', 'A comfortable and stylish T-shirt made from premium cotton, featuring the iconic Akuma Motor Club logo. Available in various sizes, it’s perfect for showing off your club pride.', 3000, '../image/acfff359e7e0716a3b9653b7b3b4b8fb.jpg'),
(2, 'Akuma Safety Helmet', 'A top-of-the-line motorcycle helmet designed with safety and comfort in mind. It meets rigorous safety standards and features a sleek design, perfect for both daily commutes and long rides.', 15000, '../image/109a71ab710b986ea20677b5e31bf581.jpg'),
(3, 'Akuma Motor Club Cap', 'A sleek, adjustable cap embroidered with the Akuma Motor Club emblem. This cap is ideal for casual wear and protecting yourself from the sun while riding.', 2000, '../image/5db5ef8927928908235ea483f24e0a07.jpg'),
(4, 'Akuma Riding Gloves', 'High-quality riding gloves made from durable leather and reinforced with protective padding. These gloves offer excellent grip and protection, enhancing your riding experience.', 800, '../image/fb879a91ca9a21e50d85becaf4d33dd0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `Email`, `Password`, `Role`) VALUES
(1, 'Akuma', 'akuma@gmail.com', '123', 'admin'),
(2, 'Crisel', 'crisel@gmail.com', 'crisel123', 'user'),
(4, 'saya', 'saya@gmail.com', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
