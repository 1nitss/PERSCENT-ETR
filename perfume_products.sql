-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 04:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perscent`
--

-- --------------------------------------------------------

--
-- Table structure for table `perfume_products`
--

CREATE TABLE `perfume_products` (
  `id` int(11) NOT NULL,
  `perfume_name` varchar(200) NOT NULL,
  `perfume_desc` varchar(400) NOT NULL,
  `perfume_price` double(10,2) NOT NULL,
  `stocks` int(10) NOT NULL,
  `perfume_image` varchar(300) NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perfume_products`
--

INSERT INTO `perfume_products` (`id`, `perfume_name`, `perfume_desc`, `perfume_price`, `stocks`, `perfume_image`, `updated_at`) VALUES
(1, 'Versace', 'For Men with captivating fragrance', 150.99, 90, 'versace.jpg', NULL),
(6, 'Chance', 'BAGOONG v2', 299.99, 1000, '1687274348.jpg', NULL),
(7, 'Chance v3', 'Mabango sobra', 111.00, 23, '1687274409.jpg', '2023-06-23 14:26:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perfume_products`
--
ALTER TABLE `perfume_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perfume_products`
--
ALTER TABLE `perfume_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
