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
-- Database: `hack`
--

-- --------------------------------------------------------

--
-- Table structure for table `smash`
--

CREATE TABLE `smash` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `fname` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `phone` bigint(255) NOT NULL,
  `state` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `qualification` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `branch` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `rollno` int(100) NOT NULL,
  `gender` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `birth` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `smash`
--

INSERT INTO `smash` (`id`, `name`, `fname`, `email`, `phone`, `state`, `qualification`, `branch`, `rollno`, `gender`, `birth`) VALUES
(2, 'Lecel Ann Harvey', 'Echavarre', 'lecelann8@gmail.com', 1234567890, 'ABRA', '50%', 'CS 1st year 1st sem', -6, 'Female', '1990');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `smash`
--
ALTER TABLE `smash`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `smash`
--
ALTER TABLE `smash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
