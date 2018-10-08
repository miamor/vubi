-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 08, 2018 at 04:07 AM
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
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `id` int(255) NOT NULL,
  `title` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `image` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orders` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`id`, `title`, `content`, `image`, `orders`) VALUES
(1, 'Đặt xe chỉ với 2 thao tác đơn giản', 'Đừng quên chọn điểm đến của bạn để nhận thông báo ước lượng về giá cước cho chuyến đi.', 'https://cdn.grab.com/vn/wp-content/uploads/sites/11/2016/05/1_step-1.jpg', 1),
(2, 'Tài xế đón liền tay!', 'Grab sẽ giúp bạn tìm tài xế (có xe trống) gần nhất.', 'https://cdn.grab.com/vn/wp-content/uploads/sites/11/2016/05/2_step-1.jpg', 2),
(3, 'Dõi theo tài xế', 'Bạn có thể dõi theo di chuyển của tài xế và biết trước thời điểm bạn sẽ được ngồi lên xe!', 'https://cdn.grab.com/vn/wp-content/uploads/sites/11/2016/05/3_step-1.jpg', 3),
(4, 'Kết thúc hành trình an toàn mỹ mãn', 'Bạn thậm chí còn có thể chia sẻ hành trình của mình với người thân để thêm phần an tâm trong chuyến đi nha!', 'https://cdn.grab.com/vn/wp-content/uploads/sites/11/2016/05/4_step-1.jpg', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
