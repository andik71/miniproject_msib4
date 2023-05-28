-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 01:11 AM
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
-- Database: `miniproject_msib4`
--

-- --------------------------------------------------------

--
-- Table structure for table `beverages`
--

CREATE TABLE `beverages` (
  `id` int(11) NOT NULL,
  `name` varchar(254) NOT NULL,
  `type` enum('coffee','tea','milk') NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(11) NOT NULL,
  `name` varchar(254) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `name`, `price`, `qty`, `img`) VALUES
(1, '', 0, 0, ''),
(2, 'ade', 31513, 3, ''),
(3, 'ade', 31513, 3, ''),
(4, 'ade', 3151443, 3, ''),
(5, 'ade', 3151443, 3, 'Untitled-1-2 - M. Aldi Saputra (1qwe).png'),
(6, 'ade', 3151443, 3, 'Untitled-1-2 - M. Aldi Saputra (1).png'),
(7, 'ade', 3151443, 3, 'assets/img/424289769_Untitled-1-2 - M. Aldi Saputra (1).png'),
(8, 'adedq', 235235, 235, 'assets/img/1737429465_WhatsApp Image 2023-05-03 at 21.50.50 - Ismail.jpeg'),
(9, 'adedq', 235235, 235, 'assets/img/113919967_WhatsApp Image 2023-05-03 at 21.50.50 - Ismail.jpeg'),
(10, 'adedq', 235235, 235, 'assets/img/354517946_WhatsApp Image 2023-05-03 at 21.50.50 - Ismail.jpeg'),
(11, 'adedq', 235235, 235, 'assets/img/598661945_WhatsApp Image 2023-05-03 at 21.50.50 - Ismail.jpeg'),
(12, 'adedq', 235235, 235, 'assets/img/2132064600_WhatsApp Image 2023-05-03 at 21.50.50 - Ismail.jpeg'),
(13, 'adedq', 235235, 235, 'assets/img/356384142_WhatsApp Image 2023-05-03 at 21.50.50 - Ismail.jpeg'),
(14, 'adedq', 235235, 235, 'assets/img/1718226886_WhatsApp Image 2023-05-03 at 21.50.50 - Ismail.jpeg'),
(15, 'adedq', 235235, 235, 'assets/img/616275666_WhatsApp Image 2023-05-03 at 21.50.50 - Ismail.jpeg'),
(16, 'adedq', 235235, 235, 'assets/img/784483365_WhatsApp Image 2023-05-03 at 21.50.50 - Ismail.jpeg'),
(17, 'adedq', 235235, 235, 'assets/img/1305887807_WhatsApp Image 2023-05-03 at 21.50.50 - Ismail.jpeg'),
(18, 'adedq', 235235, 235, 'assets/img/337025570_WhatsApp Image 2023-05-03 at 21.50.50 - Ismail.jpeg'),
(19, 'adedq', 235235, 235, 'assets/img/1865197329_WhatsApp Image 2023-05-03 at 21.50.50 - Ismail.jpeg'),
(20, 'adedq', 235235, 235, 'assets/img/1365217575_WhatsApp Image 2023-05-03 at 21.50.50 - Ismail.jpeg'),
(21, 'adedq', 235235, 235, 'assets/img/268452201_WhatsApp Image 2023-05-03 at 21.50.50 - Ismail.jpeg'),
(22, 'adedq', 235235, 235, 'assets/img/885421381_WhatsApp Image 2023-05-03 at 21.50.50 - Ismail.jpeg'),
(23, 'qweqweqwe', 241, 141, 'assets/img/1543045017_20230427_163219.jpg'),
(24, 'ade', 34, 3, 'assets/img/1589342945_20230427_163219.jpg'),
(25, 'ade', 34, 3, 'assets/img/2013630448_20230427_163219.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(254) NOT NULL,
  `total` int(11) NOT NULL,
  `foods_id` int(11) DEFAULT NULL,
  `beverages_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(254) NOT NULL,
  `username` varchar(254) NOT NULL,
  `password` varchar(254) NOT NULL,
  `user_role` enum('admin','viewer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beverages`
--
ALTER TABLE `beverages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_foods` (`foods_id`),
  ADD KEY `fk_beverages` (`beverages_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beverages`
--
ALTER TABLE `beverages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`beverages_id`) REFERENCES `beverages` (`id`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`foods_id`) REFERENCES `foods` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
