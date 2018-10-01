-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 01, 2018 at 05:16 AM
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
-- Table structure for table `tuvan`
--

CREATE TABLE `tuvan` (
  `id` int(255) NOT NULL,
  `is_service` int(1) DEFAULT '0',
  `title` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `highlight_content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `author` int(255) DEFAULT NULL,
  `price` int(255) DEFAULT '0',
  `tags` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tuvan`
--

INSERT INTO `tuvan` (`id`, `is_service`, `title`, `link`, `image`, `highlight_content`, `content`, `author`, `price`, `tags`, `date`) VALUES
(1, 0, '10 quận huyện tại Hà Nội được tầm soát ung thư đại trực tràng miễn phí 1', '10-quan-huyen-tai-ha-noi-duoc-tam-soat-ung-thu-dai-truc-trang-mien-phi', 'http://vubi.vn/vubi/images/anh6.jpg', '', 'Chương trình tầm soát ung thư đại trực tràng miễn phí do Bệnh viện Đa khoa Quốc tế Thu Cúc phối hợp', 1, 0, '', '2018-09-03 09:22:00'),
(2, 0, '10 quận huyện tại Hà Nội được tầm soát ung thư đại trực tràng miễn phí 2', '10-quan-huyen-tai-ha-noi-duoc-tam-soat-ung-thu-dai-truc-trang-mien-phi', 'http://vubi.vn/vubi/images/anh6.jpg', '', 'Chương trình tầm soát ung thư đại trực tràng miễn phí do Bệnh viện Đa khoa Quốc tế Thu Cúc phối hợp', 1, 0, '', '2018-09-03 09:22:00'),
(3, 0, '10 quận huyện tại Hà Nội được tầm soát ung thư đại trực tràng miễn phí 3', '10-quan-huyen-tai-ha-noi-duoc-tam-soat-ung-thu-dai-truc-trang-mien-phi', 'http://vubi.vn/vubi/images/anh6.jpg', '', 'Chương trình tầm soát ung thư đại trực tràng miễn phí do Bệnh viện Đa khoa Quốc tế Thu Cúc phối hợp', 1, 0, '', '2018-09-03 09:22:00'),
(4, 0, '10 quận huyện tại Hà Nội được tầm soát ung thư đại trực tràng miễn phí 4', '10-quan-huyen-tai-ha-noi-duoc-tam-soat-ung-thu-dai-truc-trang-mien-phi', 'http://vubi.vn/vubi/images/anh6.jpg', '', 'Chương trình tầm soát ung thư đại trực tràng miễn phí do Bệnh viện Đa khoa Quốc tế Thu Cúc phối hợp', 1, 0, '', '2018-09-03 09:22:00'),
(5, 0, 'Tin moi', 'tin-moi', 'http://vubi.vn/vubi/images/anh2.jpg', '', ',iumyntbr', 1, 0, '', '2018-09-03 02:49:54'),
(6, 1, 'Dịch vụ 1', 'dich-vu-1', 'http://vubi.vn/vubi/images/anh6.jpg', '', 'Chương trình tầm soát ung thư đại trực tràng miễn phí do Bệnh viện Đa khoa Quốc tế Thu Cúc phối hợp', 1, 110, '', '2018-09-03 09:22:00'),
(7, 2, 'Dịch vụ 2', '10-quan-huyen-tai-ha-noi-duoc-tam-soat-ung-thu-dai-truc-trang-mien-phi', 'http://vubi.vn/vubi/images/anh6.jpg', '', 'Chương trình tầm soát ung thư đại trực tràng miễn phí do Bệnh viện Đa khoa Quốc tế Thu Cúc phối hợp', 1, 100, '', '2018-09-03 09:22:00'),
(8, 0, 'Tin tuc', 'tin-tuc', 'http://vubi.vn/vubi/images/slide.jpg', '', 'uy6g5tfr', 1, 0, '', '2018-09-18 04:44:17'),
(9, 0, 'Newssssssssss', 'newssssssssss', 'oi,umyntbrve', '', 'yut', 1, 0, '', '2018-09-18 04:55:31'),
(10, 0, 'Newsss', 'newsss', 'http://vubi.vn/vubi/images/slide.jpg', '', 'hiu hiu', 1, 0, '', '2018-09-17 10:44:33'),
(11, 0, 'Test editor', 'test-editor', 'http://vubi.vn/vubi/images/slide.jpg', 'Cục Quản lý Thực phẩm và Dược phẩm Mỹ cảnh cáo hơn 65 sản phẩm không hề phòng chống, chẩn đoán và chữa ung thư như quảng cáo. Nhiều sản phẩm trong số này có thể tuồn vào Việt Nam qua đường xách tay', '[color=#996633][i]hihi[/i][/color]\r\n', 1, 0, '', '2018-09-20 09:02:20'),
(12, 0, 'Test tag', 'test-tag', 'http://localhost/aaa/images/anh2.jpg', 'Blah', 'bleh\r\n', 1, 0, 'him,hiu', '2018-10-01 05:06:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tuvan`
--
ALTER TABLE `tuvan`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `tuvan` ADD FULLTEXT KEY `title` (`title`,`content`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tuvan`
--
ALTER TABLE `tuvan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
