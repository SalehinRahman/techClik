-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 02:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techclik`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `name` varchar(70) CHARACTER SET latin1 DEFAULT NULL,
  `image` varchar(255) CHARACTER SET latin1 NOT NULL,
  `category` varchar(70) CHARACTER SET latin1 DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `name`, `image`, `category`, `price`) VALUES
(1, 'Samsung new Galaxy Z Fold3 5G', 'Samsung new Galaxy Z Fold3 5G.webp', 'Mobile', 189999),
(2, 'Iphone 11 Pro Max', 'show3.webp', 'Mobile', 75000),
(3, 'Oneplus 8 5G', 'show6.jpg', 'Mobile', 44500),
(4, 'Samsung Galaxy A32', 'show8.webp', 'Mobile', 26999),
(5, 'Iphone 11 ', 'show.webp', 'Mobile', 59999),
(7, 'Oneplus 8T', 'show5.jpg', 'Mobile', 49990),
(8, 'Samsung Galaxy A23', 'samsung_galaxy_a23.webp', 'Mobile', 18499),
(9, 'Iphone 13 Pro Max', 'iphone13promax.jpeg', 'Mobile', 150000),
(10, 'Galaxy Note20 | 20 Ultra 5G', 'Galaxy Note20.png', 'Mobile', 124987),
(11, 'Oneplus 9 Pro', 'show9.jpg', 'Mobile', 44500);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
