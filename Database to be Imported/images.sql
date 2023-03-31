-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 08:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `images`
--

-- --------------------------------------------------------

--
-- Table structure for table `imagedata`
--

CREATE TABLE `imagedata` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dir` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `imagedata`
--

INSERT INTO `imagedata` (`id`, `name`, `dir`) VALUES
(1, '61fe0d40a1d144.71207004.jpg', 'images/61fe0d40a1d144.71207004.jpg'),
(2, '61fe11a9474750.41182709.jpg', 'images/61fe11a9474750.41182709.jpg'),
(3, '62d1afc202ea43.62472832.png', 'images/62d1afc202ea43.62472832.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imagedata`
--
ALTER TABLE `imagedata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imagedata`
--
ALTER TABLE `imagedata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
