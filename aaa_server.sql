-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 15, 2018 at 04:06 AM
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
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `des` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `link`, `title`, `des`, `image`) VALUES
(1, 'Nguyen Van Aa', 'nguyen-van-aa', 'Bác sĩ chuyên khoa', '', 'http://vubi.vn/vubi/images/anh1.jpg'),
(2, 'Nguyen Van B', 'nguyen-van-b', 'Bác sĩ chuyên khoa', '', 'http://vubi.vn/vubi/images/anh2.jpg'),
(3, 'Nguyen Van C', 'nguyen-van-c', 'Bác sĩ chuyên khoa', '', 'http://vubi.vn/vubi/images/anh3.jpg'),
(4, 'Nguyen Van D', 'nguyen-van-d', 'Bác sĩ chuyên khoa', '', 'http://vubi.vn/vubi/images/anh4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `cust_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `cust_name`, `image`, `content`) VALUES
(1, 'Nguyen Van A', 'http://vubi.vn/vubi/images/khachhang.jpg', 'I\'ve been using Tommus Rhodus themes for a couple of years now - they\'re always highly polished and backed up by amazing support.'),
(2, 'Nguyen Van Ba', 'http://vubi.vn/vubi/images/khachhang.jpg', 'I\'ve been using Tommus Rhodus themes for a couple of years now - they\'re always highly polished and backed up by amazing support.'),
(3, 'Nguyen Van C', 'http://vubi.vn/vubi/images/khachhang.jpg', 'I\'ve been using Tommus Rhodus themes for a couple of years now - they\'re always highly polished and backed up by amazing support.');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(1) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `des` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about` longtext COLLATE utf8_unicode_ci,
  `footer` longtext COLLATE utf8_unicode_ci,
  `header_image` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `title`, `name`, `des`, `email`, `phone`, `address`, `logo`, `about`, `footer`, `header_image`) VALUES
(1, 'CÔNG TY TNHH SẢN XUẤT TMDT SƠN VIỆT', 'CÔNG TY ABC', 'CÔNG TY TNHH SẢN XUẤT TMDT SƠN VIỆT', 'info@vubi.org', '+842583815868', 'Quang Trung - Hà Đông - Hà Nội', 'http://vubi.vn/vubi/access/css/images/logo.jpg', '\r\n                        <h1 class=\"title-name\">Thư ngỏ</h1>\r\n                        <div style=\"clear: both;\"></div>\r\n                        <div class=\"product-detail\">\r\n							<p style=\"text-align: justify;\">Công ty cổ phần Dược phẩm MEDZAVY được xây dựng quy mô 5000 m2&nbsp;trong khu công nghiệp Phố nối A với những dây chuyền</p>\r\n<p style=\"text-align: justify;\">-&nbsp;&nbsp;Dây chuyền sản xuất dược phẩm theo tiêu chuẩn GMP – WHO (Dây chuyền thuốc nước; Dây chuyền thuốc viên; Dây chuyền cốm, bột);</p>\r\n<p style=\"text-align: justify;\">-&nbsp;&nbsp;Dây chuyền thực phẩm bảo vệ sức khỏe đạt tiêu chuẩn GMP;</p>\r\n<p style=\"text-align: justify;\">-&nbsp;&nbsp;Dây chuyền mỹ phẩm;</p>\r\n<p style=\"text-align: justify;\">-&nbsp;&nbsp;Dây truyền sản xuất trang thiết bị y tế: sát trùng, sát khuẩn, bộ kít chẩn đoán…</p>\r\n<p style=\"text-align: justify;\"><img src=\"http://medzavy.com/uploads/thungo.png\" alt=\"\" width=\"563\" height=\"804\"></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>                       </div>\r\n                    ', '                <div class=\"footer-1 footer-item\">\r\n                    <div>\r\n                        \r\n                        <h3 class=\"title-footer\">CÔNG TY TNHH SẢN XUẤT ABC</h3>\r\n                        <div>Giấy chứng nhận đăng ký doanh nghiệp số 0500391400 do Sở kế hoạch và Đầu tư tỉnh Hà Tây cấp lần đầu ngày 10/01/2001</div>\r\n                        <ul>\r\n                            <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Quang Trung - Hà Đông - Hà Nội</li>\r\n                            <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> (+84). 123. 456. 789</li>\r\n                            <li><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i> contact@yourdomain.com</li>\r\n                        </ul>\r\n                    </div>\r\n                </div>\r\n                <div class=\"footer-2 footer-item\">\r\n                    <div>\r\n                        <h3 class=\"title-footer\">Chính sách</h3>\r\n                        <ul>\r\n                            <li><a href=\"#\">Bảo mật thông tin khách hàng</a></li>\r\n                            <li><a href=\"#\">Hình thức thanh toán</a></li>\r\n                            <li><a href=\"#\">Chính sách vận chuyển</a></li>\r\n                            <li><a href=\"#\">Chính sách bảo hành và đổi trả hàng</a></li>\r\n                        </ul>\r\n                    </div>\r\n                </div>\r\n                <div class=\"footer-3 footer-item\">\r\n                    <div>\r\n                        <h3 class=\"title-footer\">Về chúng tôi</h3>\r\n                        <ul>\r\n                            <li><a href=\"#\">Ban lãnh đạo</a></li>\r\n                            <li><a href=\"#\">Chuyên gia cố vấn</a></li>\r\n                            <li><a href=\"#\">Nhà máy sản xuất</a></li>\r\n                            <li><a href=\"#\">Tầm nhìn &amp; Sứ Mệnh</a></li>\r\n                        </ul>\r\n                    </div>\r\n                </div>\r\n                <div class=\"footer-3 footer-item\">\r\n                    <div>\r\n                        <h3 class=\"title-footer\">Giờ làm việc</h3>\r\n                        <ul>\r\n                            <li>From Monday to Friday</li>\r\n                            <li>8 am -  10 pm</li>\r\n                            <li>Saturday &amp; Sunday</li>\r\n                            <li>10 a.m - 8 pm</li>\r\n                        </ul>\r\n                    </div>\r\n                </div>\r\n                <div class=\"clearfix\"></div>\r\n            ', 'http://vubi.vn/vubi/images/slide.jpg,http://vubi.vn/vubi/images/slide.jpg,http://vubi.vn/vubi/images/slide.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `leftmenu`
--

CREATE TABLE `leftmenu` (
  `id` int(255) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent` int(255) NOT NULL,
  `orders` int(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `leftmenu`
--

INSERT INTO `leftmenu` (`id`, `title`, `link`, `parent`, `orders`) VALUES
(1, 'Dành cho trẻ em', 'for-children', 0, 1),
(2, 'Dành cho phụ nữ', 'for-woman', 0, 2),
(3, 'Bé gái', 'girls', 1, 1),
(4, 'Bé trai', 'boys', 1, 1),
(5, 'Dành cho người già', 'for-elderly', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(255) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`) VALUES
(1, 'miamor', '6ca13d52ca70c883e0f0bb101e425a89e8624de51db2d2392593af6a84118090');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(255) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `title`, `link`, `image`) VALUES
(1, 'Company A', 'https://infura.io/', 'http://vubi.vn/vubi/images/doitac.jpg'),
(2, 'Company B', 'https://infura.io/', 'http://vubi.vn/vubi/images/doitac.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(255) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `image`, `content`) VALUES
(1, 'Tư vấn và phân tích', 'http://vubi.vn/vubi/images/icon1.png', 'Tư vấn và phân tích gien thế hệ mới tại các phòng xét nghiệm hiện đại của Hoa Kỳ​'),
(2, 'Quy Trình Giải Mã Gien', 'http://vubi.vn/vubi/images/icon2.png', 'Quy Trình Giải Mã Gien tiên tiến từ các trung tâm ung thư và di truyền học uy tín của Hoa Kỳ'),
(3, 'Hỗ trợ từ các chuyên gia ung thư', 'http://vubi.vn/vubi/images/icon3.png', 'Tư vấn và phân tích gien thế hệ mới tại các phòng xét nghiệm hiện đại của Hoa Kỳ​');

-- --------------------------------------------------------

--
-- Table structure for table `tuvan`
--

CREATE TABLE `tuvan` (
  `id` int(255) NOT NULL,
  `is_service` int(1) NOT NULL DEFAULT '0',
  `title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `author` int(255) NOT NULL,
  `price` int(255) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tuvan`
--

INSERT INTO `tuvan` (`id`, `is_service`, `title`, `link`, `image`, `content`, `author`, `price`, `date`) VALUES
(1, 0, '10 quận huyện tại Hà Nội được tầm soát ung thư đại trực tràng miễn phí 1', '10-quan-huyen-tai-ha-noi-duoc-tam-soat-ung-thu-dai-truc-trang-mien-phi', 'http://vubi.vn/vubi/images/anh6.jpg', 'Chương trình tầm soát ung thư đại trực tràng miễn phí do Bệnh viện Đa khoa Quốc tế Thu Cúc phối hợp', 1, 0, '2018-09-03 09:22:00'),
(2, 0, '10 quận huyện tại Hà Nội được tầm soát ung thư đại trực tràng miễn phí 2', '10-quan-huyen-tai-ha-noi-duoc-tam-soat-ung-thu-dai-truc-trang-mien-phi', 'http://vubi.vn/vubi/images/anh6.jpg', 'Chương trình tầm soát ung thư đại trực tràng miễn phí do Bệnh viện Đa khoa Quốc tế Thu Cúc phối hợp', 1, 0, '2018-09-03 09:22:00'),
(3, 0, '10 quận huyện tại Hà Nội được tầm soát ung thư đại trực tràng miễn phí 3', '10-quan-huyen-tai-ha-noi-duoc-tam-soat-ung-thu-dai-truc-trang-mien-phi', 'http://vubi.vn/vubi/images/anh6.jpg', 'Chương trình tầm soát ung thư đại trực tràng miễn phí do Bệnh viện Đa khoa Quốc tế Thu Cúc phối hợp', 1, 0, '2018-09-03 09:22:00'),
(4, 0, '10 quận huyện tại Hà Nội được tầm soát ung thư đại trực tràng miễn phí 4', '10-quan-huyen-tai-ha-noi-duoc-tam-soat-ung-thu-dai-truc-trang-mien-phi', 'http://vubi.vn/vubi/images/anh6.jpg', 'Chương trình tầm soát ung thư đại trực tràng miễn phí do Bệnh viện Đa khoa Quốc tế Thu Cúc phối hợp', 1, 0, '2018-09-03 09:22:00'),
(5, 0, 'Tin moi', 'tin-moi', 'http://vubi.vn/vubi/images/anh2.jpg', ',iumyntbr', 1, 0, '2018-09-03 02:49:54'),
(6, 1, 'Dịch vụ 1', 'dich-vu-1', 'http://vubi.vn/vubi/images/anh6.jpg', 'Chương trình tầm soát ung thư đại trực tràng miễn phí do Bệnh viện Đa khoa Quốc tế Thu Cúc phối hợp', 1, 110, '2018-09-03 09:22:00'),
(7, 2, 'Dịch vụ 2', '10-quan-huyen-tai-ha-noi-duoc-tam-soat-ung-thu-dai-truc-trang-mien-phi', 'http://vubi.vn/vubi/images/anh6.jpg', 'Chương trình tầm soát ung thư đại trực tràng miễn phí do Bệnh viện Đa khoa Quốc tế Thu Cúc phối hợp', 1, 100, '2018-09-03 09:22:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leftmenu`
--
ALTER TABLE `leftmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuvan`
--
ALTER TABLE `tuvan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `leftmenu`
--
ALTER TABLE `leftmenu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tuvan`
--
ALTER TABLE `tuvan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
