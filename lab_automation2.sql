-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2023 at 06:52 AM
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
-- Database: `lab_automation2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'umama', 'umama@gmail.com', '$2y$10$UoJi25uOm0TUlDdex4CcpOpiQDwjqum3O2Js4BF1HLlVaN7rLoRwe', 'admin'),
(2, 'sarim', 'sarim@gmail.com', '$2y$10$HYDgNl9SP76D5CswQjyQJOOF.ctJzhivEKpzjXr4Yxl.dfFS4wLyq', 'admin'),
(3, 'sahil', 'sahil@gmail.com', '$2y$10$JKLFLebeDEuDYQYk1T32P.HXKNZiAUF2anKa87x1yz9uxG7qUrvPO', 'department'),
(4, 'sheikhumama', 'sheikhumama@gmail.com', '$2y$10$9dXGsOcg1aJ7jpYl5WeZC.hDU9u2s79ooMcR3fRDxpXwBJkPEJS02', 'department');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(4, 'Electrical Appliances'),
(5, 'Lighting Electrical'),
(6, 'Electrical gadgets'),
(7, 'electrical accessories');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `testing` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `category`, `code`, `status`, `image`, `testing`) VALUES
(17, 'Refrigerator', 4, '#26gew', 'Active', 'frige.jpg', 3),
(18, 'Microwave', 4, '#0988734b', 'Disable', 'micro.jpg', 0),
(19, 'LCD screen', 4, '#23r211', 'Active', 'screen.webp', 0),
(20, 'Inverter', 4, '#ggg45fs', 'Disable', 'Install a DIY Mini-Split Air Conditioner _ Heat Pump.jfif', 0),
(21, 'Hair dryer', 7, '#33fggd', 'Disable', 'hair dryer.webp', 0),
(22, 'juicer', 4, '#rtety44', 'Disable', 'jicer.jpg', 0),
(23, 'Blower', 4, '#hh2ss9', 'Active', 'blower.webp', 0),
(24, 'Vaccum cleaner', 6, '#ffyy78', 'Disable', 'cleaner.jfif', 0),
(25, 'fan', 4, '#ddtt233', 'Disable', 'fans.webp', 0),
(26, 'Washing Machine', 4, '#232hii2', 'Active', 'washing machine.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk` (`category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk` FOREIGN KEY (`category`) REFERENCES `category` (`c_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
