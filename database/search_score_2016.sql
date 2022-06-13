-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220528.6201c7f2ba
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2022 at 04:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `search_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `search_score_2016`
--

CREATE TABLE `search_score_2016` (
  `STT` int(11) NOT NULL,
  `TÊN TRƯỜNG` varchar(250) NOT NULL,
  `TÊN QUẬN` varchar(250) NOT NULL,
  `ĐIỂM NV1` float NOT NULL,
  `ĐIỂM NV2` float NOT NULL,
  `ĐIỂM NV3` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search_score_2016`
--

INSERT INTO `search_score_2016` (`STT`, `TÊN TRƯỜNG`, `TÊN QUẬN`, `ĐIỂM NV1`, `ĐIỂM NV2`, `ĐIỂM NV3`) VALUES
(1, 'THPT Trưng Vương', 'Quận 1', 36.75, 36.75, 37.75),
(2, 'THPT Bùi Thị Xuân', 'Quận 1', 37.75, 38.75, 39.75),
(3, 'THPT Len Lơ Man', 'Quận 1', 30.25, 30.5, 31.5),
(4, 'THPT Năng Khiếu TDTT', 'Quận 1', 21.75, 22, 23),
(5, 'THPT Lương Thế Vinh', 'Quận 1', 36.5, 37.5, 38.5),
(6, 'THPT Giồng Ông Tố', 'Quận 2', 24.75, 25.5, 26.5),
(7, 'THPT Thủ Thiêm', 'Quận 2', 20.75, 21.75, 22),
(8, 'THPT Lê Quý Đôn', 'Quận 3', 37.5, 37.5, 38.5),
(9, 'THPT Nguyễn Thị Minh Khai', 'Quận 3', 39.5, 40.5, 41.5),
(10, 'THPT Lê Thị Hồng Gấm', 'Quận 3', 23.25, 24.25, 24.75),
(11, 'THPT Marie Curie', 'Quận 3', 33.75, 34.5, 35.5),
(12, 'THPT Nguyễn Thị Diệu', 'Quận 3', 26.5, 27.5, 28),
(13, 'THPT Nguyễn Trãi', 'Quận 4', 27.5, 28.5, 29.5),
(14, 'THPT Nguyễn Hữu Thọ', 'Quận 4', 26.75, 27.5, 28.25),
(15, 'TH Thực Hành Sài Gòn', 'Quận 5', 25.25, 26.25, 27.25),
(16, 'THPT Hùng Vương', 'Quận 5', 32, 32.25, 33.25),
(17, 'TH Thực Hành Đại Học Sư Phạm', 'Quận 5', 40.25, 41.25, 42.25),
(18, 'THPT Trần Khai Nguyên', 'Quận 5', 34.5, 35.5, 36.5),
(19, 'THPT Trần Hữu Trang', 'Quận 5', 22, 23, 24),
(20, 'THPT Mạc Đĩnh Chi', 'Quận 6', 37.5, 38.5, 39.5),
(21, 'THPT Bình Phú', 'Quận 6', 32, 32.75, 33.75),
(22, 'THPT Nguyễn Tất Thành', 'Quận 6', 26.75, 27.25, 28.25),
(23, 'THPT Lê Thánh Tôn', 'Quận 7', 27.5, 28.5, 29.5),
(24, 'THPT Tân Phong', 'Quận 7', 22, 22.5, 23.5),
(25, 'THPT Ngô Quyền', 'Quận 7', 32, 33, 34),
(26, 'THPT Nam Sài Gòn', 'Quận 7', 33, 34, 35),
(27, 'THPT Lương Văn Can', 'Quận 8', 23.25, 24, 25),
(28, 'THPT Ngô Gia Tự', 'Quận 8', 19.5, 20.5, 21.5),
(29, 'THPT Tạ Quang Bửu', 'Quận 8', 25.75, 26.75, 27.75),
(30, 'THPT Nguyễn Văn Linh', 'Quận 8', 18, 19, 20),
(31, 'THPT Phường 13', 'Quận 8', 24.5, 25.25, 26.25),
(32, 'THPT Năng Khiếu TDTT Nguyễn Thị Định', 'Quận 8', 20.5, 21.5, 22.25),
(33, 'THPT Nguyễn Huệ', 'Quận 9', 27.25, 28.25, 29.25),
(34, 'THPT Phước Long', 'Quận 9', 25.25, 26.25, 27.25),
(35, 'THPT Long Trường', 'Quận 9', 18.75, 18.75, 19.75),
(36, 'THPT Nguyễn Văn Tăng', 'Quận 9', 17.5, 18.5, 19.25),
(37, 'THPT Nguyễn Khuyến', 'Quận 10', 35.25, 35.25, 36.25),
(38, 'THPT Nguyễn Du', 'Quận 10', 31.75, 32, 33),
(39, 'THPT Nguyễn An Ninh', 'Quận 10', 25, 25.5, 25.5),
(40, 'THPT Diên Hồng', 'Quận 10', 25, 25.75, 26.75),
(41, 'THPT Sương Nguyệt Anh', 'Quận 10', 20, 20.5, 21.5),
(42, 'THPT Nguyễn Hiền', 'Quận 11', 25, 26, 27),
(43, 'THPT Trần Quang Khải', 'Quận 11', 29.5, 30, 30.25),
(44, 'THPT Nam Kỳ Khởi Nghĩa', 'Quận 11', 26.5, 27.5, 28.5),
(45, 'THPT Võ Trường Toản', 'Quận 12', 35.25, 36.25, 37.25),
(46, 'THPT Trường Chinh', 'Quận 12', 31, 31.75, 32.75),
(47, 'THPT Thạnh Lộc', 'Quận 12', 25.25, 26, 27),
(48, 'THPT Thanh Đa', 'Bình Thạnh', 23, 24, 24.75),
(49, 'THPT Võ Thị Sáu', 'Bình Thạnh', 33.5, 33.75, 34.75),
(50, 'THPT Gia Định', 'Bình Thạnh', 39, 40, 41),
(51, 'THPT Phan Đăng Lưu', 'Bình Thạnh', 27.75, 28.75, 29.75),
(52, 'THPT Trần Văn Giàu', 'Bình Thạnh', 27, 28, 29),
(53, 'THPT Hoàng Hoa Thám', 'Bình Thạnh', 29.75, 30.75, 31.75),
(54, 'THPT Gò Vấp', 'Gò Vấp', 31.25, 31.75, 32.75),
(55, 'THPT Nguyễn Công Trứ', 'Gò Vấp', 37.25, 38.25, 39.25),
(56, 'THPT Trần Hưng Đạo', 'Gò Vấp', 34.75, 35.25, 36.25),
(57, 'THPT Nguyễn Trung Trực', 'Gò Vấp', 27, 27.75, 28.75),
(58, 'THPT Phú Nhuận', 'Phú Nhuận', 38, 39, 40),
(59, 'THPT Hàn Thuyên', 'Phú Nhuận', 27.5, 28.25, 29.25),
(60, 'THPT Nguyễn Chí Thanh', 'Tân Bình', 36, 37, 38),
(61, 'THPT Nguyễn Thượng Hiền', 'Tân Bình', 41.25, 42.25, 43.25),
(62, 'THPT Nguyễn Thái Bình', 'Tân Bình', 31.75, 32, 32),
(63, 'THPT Nguyễn Hữu Huân', 'TP Thủ Đức', 37.5, 38.5, 39.5),
(64, 'THPT Thủ Đức', 'TP Thủ Đức', 33.5, 34, 35),
(65, 'THPT Tam Phú', 'TP Thủ Đức', 29.5, 30.5, 31.5),
(66, 'THPT Hiệp Bình', 'TP Thủ Đức', 25.25, 26.25, 26.5),
(67, 'THPT Đào Sơn Tây', 'TP Thủ Đức', 22.25, 23.25, 24),
(68, 'THPT Bình Chánh', 'Bình Chánh', 19.5, 20, 20.75),
(69, 'THPT Tân Túc', 'Bình Chánh', 18.75, 19.25, 19.75),
(70, 'THPT Vĩnh Lộc B', 'Bình Chánh', 21.25, 22.25, 23.25),
(71, 'THPT Lê Minh Xuân', 'Bình Chánh', 22.75, 23.5, 24.5),
(72, 'THPT Đa Phước', 'Bình Chánh', 13.5, 13.5, 13.5),
(73, 'THPT Bình Khánh', 'Cần Giờ', 13.25, 13.25, 14.25),
(74, 'THPT Cần Thạnh', 'Cần Giờ', 13.25, 13.25, 13.25),
(75, 'THPT An Nghĩa', 'Cần Giờ', 15, 16, 17),
(76, 'THPT Củ Chi', 'Củ Chi', 23.25, 24.25, 25.25),
(77, 'THPT Quang Trung', 'Củ Chi', 17.25, 18, 19),
(78, 'THPT An Nhơn Tây', 'Củ Chi', 16, 16.5, 17.5),
(79, 'THPT Trung Phú', 'Củ Chi', 23, 24, 25),
(80, 'THPT Trung Lập', 'Củ Chi', 13.25, 13.25, 13.25),
(81, 'THPT Phú Hòa', 'Củ Chi', 18, 18.5, 18.5),
(82, 'THPT Tân Thông Hội', 'Củ Chi', 19.25, 20.25, 21.25),
(83, 'THPT Nguyễn Hữu Cầu', 'Hóc Môn', 37.5, 38.5, 39.5),
(84, 'THPT Lý Thường Kiệt', 'Hóc Môn', 30.25, 31.25, 32.25),
(85, 'THPT Bà Điểm', 'Hóc Môn', 30, 31, 32),
(86, 'THPT Nguyễn Văn Cừ', 'Hóc Môn', 23.75, 24.25, 25),
(87, 'THPT Nguyễn Hữu Tiến', 'Hóc Môn', 26.5, 27.5, 28.5),
(88, 'THPT Phạm Văn Sáng', 'Hóc Môn', 26.5, 27, 28),
(89, 'THPT Long Thới', 'Nhà Bè', 15, 15.25, 15.25),
(90, 'THPT Phước Kiển', 'Nhà Bè', 13.5, 13.5, 13.5),
(91, 'THPT Dương Văn Dương', 'Nhà Bè', 17.5, 18.5, 18.75),
(92, 'THPT Tân Bình', 'Tân Phú', 34.5, 34.75, 35.75),
(93, 'THPT Trần Phú', 'Tân Phú', 39, 39.25, 40.25),
(94, 'THPT Tây Thạnh', 'Tân Phú', 33.5, 34, 35),
(95, 'THPT Vĩnh Lộc', 'Bình Tân', 26, 27, 28),
(96, 'THPT Nguyễn Hữu Cảnh', 'Bình Tân', 28.5, 28.5, 29.5),
(97, 'THPT Bình Hưng Hòa', 'Bình Tân', 28.75, 29.5, 29.75),
(98, 'THPT Bình Tân', 'Bình Tân', 24.75, 25.75, 26.5),
(99, 'THPT An Lạc', 'Bình Tân', 26.25, 27, 28);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `search_score_2016`
--
ALTER TABLE `search_score_2016`
  ADD PRIMARY KEY (`STT`,`TÊN TRƯỜNG`,`TÊN QUẬN`,`ĐIỂM NV1`,`ĐIỂM NV2`,`ĐIỂM NV3`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



