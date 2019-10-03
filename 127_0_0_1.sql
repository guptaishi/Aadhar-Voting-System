-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2018 at 06:04 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aadhaar`
--
CREATE DATABASE IF NOT EXISTS `aadhaar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aadhaar`;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `a_id` varchar(50) NOT NULL,
  `phn_no` varchar(50) NOT NULL,
  `mail_id` varchar(50) NOT NULL,
  `dob` varchar(25) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `a_id`, `phn_no`, `mail_id`, `dob`, `pass`) VALUES
(4, 'avik', '333333333333', '8777525613', 'avik@icloud.com', '07-04-1999', '$2y$10$qaPMzD2ufya586TUY1Rm9O9kBLIvoyWKDSCA7BoPxa0lmkRTeBE.m'),
(5, 'susu', '111111111111', '9062921952', 'svchost@gmail.com', '15-02-1995', '$2y$10$mi1KTFqCDhpZShhVHLYVV.VJ0Uj4WT20iBikBToN5QcdKDUtTx3nG');

-- --------------------------------------------------------

--
-- Table structure for table `v_count`
--

CREATE TABLE `v_count` (
  `a_id` varchar(50) NOT NULL,
  `c_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `v_count`
--

INSERT INTO `v_count` (`a_id`, `c_no`) VALUES
('656666666666', '1'),
('333333333333', '2'),
('111111111111', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`,`a_id`,`phn_no`,`mail_id`,`pass`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
