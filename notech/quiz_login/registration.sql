-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2023 at 06:08 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `Gender` enum('M','F','O') NOT NULL,
  `Number` bigint(20) NOT NULL,
  `Options` varchar(30) NOT NULL,
  `Appropriate` enum('P','S') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Name`, `Address`, `Contact`, `Gender`, `Number`, `Options`, `Appropriate`) VALUES
(54, 'vishak', 'mariyam villa', 'maria school', 'F', 9845732019, '2', 'S'),
(55, 'karthu', 'welcome', 'ghss maroor', 'M', 9874367825, '4', 'P'),
(56, 'ammu', 'rosevilla', 'thss kalanjoor', 'M', 7689453210, '3', 'S'),
(57, 'ammu', 'rosevilla', 'thss kalanjoor', 'M', 7689453210, '3', 'S'),
(58, 'ammu', 'rosevilla', 'thss kalanjoor', 'M', 7689453210, '3', 'S'),
(59, 'aruS', 'elize', 'st johs school', 'O', 9977443320, '1', 'P'),
(60, 'aruS', 'elize', 'st johs school', 'O', 9977443320, '1', 'P'),
(61, 'aruS', 'elize', 'st johs school', 'O', 9977443320, '1', 'P'),
(62, 'aruS', 'elize', 'st johs school', 'O', 9977443320, '1', 'P'),
(63, 'aruS', 'elize', 'st johs school', 'O', 9977443320, '1', 'P'),
(64, 'aruS', 'elize', 'st johs school', 'O', 9977443320, '1', 'P'),
(65, 'aruS', 'elize', 'st johs school', 'O', 9977443320, '1', 'P'),
(66, 'aruS', 'elize', 'st johs school', 'O', 9977443320, '1', 'P'),
(67, 'aruS', 'elize', 'st johs school', 'O', 9977443320, '1', 'P'),
(68, 'aruS', 'elize', 'st johs school', 'O', 9977443320, '1', 'P'),
(69, 'aruS', 'elize', 'st johs school', 'O', 9977443320, '1', 'P'),
(70, 'aruS', 'elize', 'st johs school', 'O', 9977443320, '1', 'P'),
(71, 'aruS', 'elize', 'st johs school', 'O', 9977443320, '1', 'P');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
