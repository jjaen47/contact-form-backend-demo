-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2021 at 06:44 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `postcode_num` int(50) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`postcode_num`, `state`) VALUES
(35000, 'Perak'),
(50000, 'Wilayah Persekutuan KL'),
(80000, 'Johor');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `postcode` varchar(100) NOT NULL,
  `state_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `date_of_birth`, `address`, `postcode`, `state_id`) VALUES
(3, 'Andy', '1990-09-10', ' Jalan 1, 2 and 3', '35000', 'Perak'),
(4, 'Jack', '2000-01-01', ' Jalan 4, 5 and 6', '50000', 'Wilayah Persekutuan KL'),
(5, 'Ong', '1966-05-30', ' Jalan 7, 8 and 9', '80000', 'Johor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`postcode_num`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `postcode_num` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80001;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
