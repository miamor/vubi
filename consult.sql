-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 25, 2018 at 03:21 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vubi`
--

-- --------------------------------------------------------

--
-- Table structure for table `consult`
--

CREATE TABLE `consult` (
  `id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `email` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nhombenh` int(2) DEFAULT NULL,
  `title` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `reply` longtext COLLATE utf8_unicode_ci,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `consult`
--

INSERT INTO `consult` (`id`, `name`, `phone`, `age`, `email`, `address`, `nhombenh`, `title`, `content`, `reply`, `date`) VALUES
(1, 'Nguyen Van A', '0987654321', 27, 'nguyenvana@gmail.com', 'Hanoi', 1, 'Hiu hiu', 'Content~~~', 'Answered!', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consult`
--
ALTER TABLE `consult`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consult`
--
ALTER TABLE `consult`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
