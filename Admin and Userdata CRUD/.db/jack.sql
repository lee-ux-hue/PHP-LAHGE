-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 13, 2022 at 04:31 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jack`
--

-- --------------------------------------------------------

--
-- Table structure for table `slack`
--

CREATE TABLE `slack` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `phone` int(100) NOT NULL,
  `state` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `qualification` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `branch` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `gender` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slack`
--

INSERT INTO `slack` (`id`, `name`, `email`, `phone`, `state`, `qualification`, `branch`, `gender`) VALUES
(1, 'Lecel', '123lecel@teacher.com', 1234567890, 'KAY LORD', 'Diploma', 'CS', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slack`
--
ALTER TABLE `slack`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slack`
--
ALTER TABLE `slack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
