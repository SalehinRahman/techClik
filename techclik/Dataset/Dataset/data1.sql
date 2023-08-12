-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 02:54 PM
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
-- Table structure for table `data1`
--

CREATE TABLE `data1` (
  `name` varchar(25) NOT NULL,
  `uid` int(10) NOT NULL,
  `processor` int(10) NOT NULL,
  `ram` int(10) NOT NULL,
  `battery` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data1`
--

INSERT INTO `data1` (`name`, `uid`, `processor`, `ram`, `battery`) VALUES
('', 0, 0, 0, 7),
('', 0, 0, 0, 7),
('', 0, 0, 0, 7),
('', 0, 0, 0, 8),
('', 0, 0, 0, 8),
('', 0, 0, 0, 0),
('Samsung S21', 1, 8, 9, 7),
('Iphone 12', 3, 8, 7, 7),
('Oneplus 9R', 8, 6, 7, 7),
('Iphone 13', 5, 10, 9, 8),
('Samsung S22', 7, 9, 9, 8),
('Samsung s20', 2, 7, 7, 7);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
