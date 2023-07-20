-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 20, 2023 at 08:16 PM
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
-- Database: `hobby`
--

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Material` varchar(35) DEFAULT NULL,
  `Price` decimal(20,2) DEFAULT NULL,
  `Img` varchar(5000) NOT NULL,
  `Description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`Id`, `Name`, `Material`, `Price`, `Img`, `Description`) VALUES
(3, 'Bag', 'Cotton', 20.00, '64b927f49d811.jpg', 'Nice handmade bag. Cool summer bag, which you can use in the beach'),
(4, 'Bag', 'Cotton', 14.00, '64b9287db5e6e.jpg', 'Nice handmade bag. Cool summer bag, which you can use in the beach'),
(5, 'Summer Bag', 'Cotton', 24.00, '64b928bfb5107.jpg', ' A lot of stuff fit there, you will be unique, because it is a handmade.'),
(6, 'Nice bag', 'Cotton', 12.00, '64b93e1392e36.jpg', 'Nice handmade bag. Cool summer bag, which you can use in the beach');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
