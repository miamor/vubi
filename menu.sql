-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 18, 2018 at 02:04 AM
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
-- Database: `aaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(255) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent` int(255) NOT NULL,
  `orders` int(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `link`, `parent`, `orders`) VALUES
(1, 'Trang chủ', 'http://vubi.vn/vubi', 0, 1),
(2, 'Giới thiệu', 'http://vubi.vn/vubi/about', 0, 2),
(3, 'Tin tức', 'http://vubi.vn/vubi/news', 0, 3),
(4, 'Xét nghiệm ung thư', 'http://vubi.vn/vubi/service1', 0, 4),
(5, 'Tầm soát di truyền', 'http://vubi.vn/vubi/service2', 0, 5),
(6, 'Tư vấn', 'http://vubi.vn/vubi/tuvan', 0, 6),
(7, 'Liên hệ', 'http://vubi.vn/vubi/contact', 0, 7),

(8, 'Elsee Target 315', 'http://vubi.vn/vubi/contact', 4, 8),
(9, 'Elsee Target 415', 'http://vubi.vn/vubi/contact', 4, 9),
(10, 'Elsee Track', 'http://vubi.vn/vubi/contact', 4, 10),
(11, 'Elsee Screen', 'http://vubi.vn/vubi/contact', 5, 11),
(12, 'Elsee Screen Plus', 'http://vubi.vn/vubi/contact', 5, 12),
(13, 'Elsee Screen Premium', 'http://vubi.vn/vubi/contact', 5, 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
