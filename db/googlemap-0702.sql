-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2018 at 06:45 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `googlemap`
--

-- --------------------------------------------------------

--
-- Table structure for table `map_form`
--

CREATE TABLE `map_form` (
  `id` int(10) NOT NULL,
  `loc_name` varchar(100) NOT NULL,
  `loc_address` varchar(200) NOT NULL,
  `loc_cat` varchar(50) NOT NULL,
  `latitude` float(10,6) DEFAULT NULL,
  `longitude` float(10,6) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map_form`
--

INSERT INTO `map_form` (`id`, `loc_name`, `loc_address`, `loc_cat`, `latitude`, `longitude`, `time_stamp`) VALUES
(6, 'Anna Nagar Tower Metro Station', '\r\n2nd Ave, AD Block, Anna Nagar, Chennai, Tamil Nadu 600040', 'a', NULL, NULL, '2018-07-01 18:51:05'),
(7, 'Thiruvalleshwarar Temple - Padi', '207/152, Raja St, Padi, Chennai, Tamil Nadu 600050', 'b', NULL, NULL, '2018-07-01 18:51:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `map_form`
--
ALTER TABLE `map_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `map_form`
--
ALTER TABLE `map_form`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
