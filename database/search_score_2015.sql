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
-- Table structure for table `search_score_2015`
--

CREATE TABLE `search_score_2015` (
  `STT` int(11) NOT NULL,
  `TÊN TRƯỜNG` varchar(250) NOT NULL,
  `TÊN QUẬN` varchar(250) NOT NULL,
  `ĐIỂM NV1` float NOT NULL,
  `ĐIỂM NV2` float NOT NULL,
  `ĐIỂM NV3` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search_score_2015`
--

INSERT INTO `search_score_2015` (`STT`, `TÊN TRƯỜNG`, `TÊN QUẬN`, `ĐIỂM NV1`, `ĐIỂM NV2`, `ĐIỂM NV3`) VALUES
(1, 'THPT Trưng Vương', 'Quận 1', 37, 38, 39),
(2, 'THPT Bùi Thị Xuân', 'Quận 1', 40, 41, 42),
(3, 'THPT Len Lơ Man', 'Quận 1', 30.25, 31, 32),
(4, 'THPT Năng Khiếu TDTT', 'Quận 1', 23, 24, 25),
(5, 'THPT Lương Thế Vinh', 'Quận 1', 36.5, 37.25, 38.25),
(6, 'THPT Giồng Ông Tố', 'Quận 2', 25.75, 26.75, 27.75),
(7, 'THPT Thủ Thiêm', 'Quận 2', 23.5, 24, 24.75),
(8, 'THPT Lê Quý Đôn', 'Quận 3', 38.25, 39, 40),
(9, 'THPT Nguyễn Thị Minh Khai', 'Quận 3', 39.5, 40.5, 41.5),
(10, 'THPT Lê Thị Hồng Gấm', 'Quận 3', 27.5, 28.25, 29),
(11, 'THPT Marie Curie', 'Quận 3', 34, 34.75, 35.25),
(12, 'THPT Nguyễn Thị Diệu', 'Quận 3', 29.75, 30.5, 31),
(13, 'THPT Nguyễn Trãi', 'Quận 4', 29.75, 30.75, 31.25),
(14, 'THPT Nguyễn Hữu Thọ', 'Quận 4', 26.5, 27.5, 28.5),
(15, 'TH Thực Hành Sài Gòn', 'Quận 5', 39, 40, 41),
(16, 'THPT Hùng Vương', 'Quận 5', 33.25, 33.5, 34.5),
(17, 'TH Thực Hành Đại Học Sư Phạm', 'Quận 5', 40.5, 41.5, 42.5),
(18, 'THPT Trần Khai Nguyên', 'Quận 5', 34.5, 35.5, 36.5),
(19, 'THPT Trần Hữu Trang', 'Quận 5', 29, 29.75, 30.25),
(20, 'THPT Mạc Đĩnh Chi', 'Quận 6', 38.25, 38.5, 39.5),
(21, 'THPT Bình Phú', 'Quận 6', 34.25, 34.75, 35.75),
(22, 'THPT Nguyễn Tất Thành', 'Quận 6', 29.25, 30.25, 31),
(23, 'THPT Lê Thánh Tôn', 'Quận 7', 27.75, 28.75, 29.75),
(24, 'THPT Tân Phong', 'Quận 7', 23.75, 24.25, 25),
(25, 'THPT Ngô Quyền', 'Quận 7', 32, 32.25, 33.25),
(26, 'THPT Nam Sài Gòn', 'Quận 7', 31.25, 31.5, 32),
(27, 'THPT Lương Văn Can', 'Quận 8', 26, 27, 27.75),
(28, 'THPT Ngô Gia Tự', 'Quận 8', 24.75, 25.75, 26.5),
(29, 'THPT Tạ Quang Bửu', 'Quận 8', 27.25, 28.25, 29.25),
(30, 'THPT Nguyễn Văn Linh', 'Quận 8', 21, 22, 22.75),
(31, 'THPT Phường 13', 'Quận 8', 22.5, 23, 24),
(32, 'THPT Năng Khiếu TDTT Nguyễn Thị Định', 'Quận 8', 24, 25, 26),
(33, 'THPT Nguyễn Huệ', 'Quận 9', 26, 27, 27.5),
(34, 'THPT Phước Long', 'Quận 9', 26.5, 27.5, 28),
(35, 'THPT Long Trường', 'Quận 9', 20.25, 21.25, 22),
(36, 'THPT Nguyễn Văn Tăng', 'Quận 9', 14.5, 15.5, 16.5),
(37, 'THPT Nguyễn Khuyến', 'Quận 10', 35.25, 36.25, 37.25),
(38, 'THPT Nguyễn Du', 'Quận 10', 32.75, 33.75, 34.75),
(39, 'THPT Nguyễn An Ninh', 'Quận 10', 28, 28.75, 29.5),
(40, 'THPT Diên Hồng', 'Quận 10', 27.25, 28.25, 28.75),
(41, 'THPT Sương Nguyệt Anh', 'Quận 10', 27.25, 28.25, 29),
(42, 'THPT Nguyễn Hiền', 'Quận 11', 34.75, 35.75, 36.75),
(43, 'THPT Trần Quang Khải', 'Quận 11', 31.25, 32.25, 33.25),
(44, 'THPT Nam Kỳ Khởi Nghĩa', 'Quận 11', 30, 30.75, 31.75),
(45, 'THPT Võ Trường Toản', 'Quận 12', 34.25, 34.75, 35.75),
(46, 'THPT Trường Chinh', 'Quận 12', 31.25, 32, 33),
(47, 'THPT Thạnh Lộc', 'Quận 12', 26.25, 27.25, 28.25),
(48, 'THPT Thanh Đa', 'Bình Thạnh', 26, 26.75, 27.75),
(49, 'THPT Võ Thị Sáu', 'Bình Thạnh', 32.75, 33, 34),
(50, 'THPT Gia Định', 'Bình Thạnh', 39.5, 40.5, 41.5),
(51, 'THPT Phan Đăng Lưu', 'Bình Thạnh', 28.75, 29.75, 30.75),
(52, 'THPT Trần Văn Giàu', 'Bình Thạnh', 29.5, 30.25, 31.25),
(53, 'THPT Hoàng Hoa Thám', 'Bình Thạnh', 35, 35.25, 36.25),
(54, 'THPT Gò Vấp', 'Gò Vấp', 31.5, 32.25, 32.25),
(55, 'THPT Nguyễn Công Trứ', 'Gò Vấp', 37.5, 38.5, 39.5),
(56, 'THPT Trần Hưng Đạo', 'Gò Vấp', 34.5, 34.75, 35.75),
(57, 'THPT Nguyễn Trung Trực', 'Gò Vấp', 27.5, 28, 28.75),
(58, 'THPT Phú Nhuận', 'Phú Nhuận', 38.5, 39.5, 40.5),
(59, 'THPT Hàn Thuyên', 'Phú Nhuận', 27.25, 28, 29),
(60, 'THPT Nguyễn Chí Thanh', 'Tân Bình', 35.5, 35.75, 36.75),
(61, 'THPT Nguyễn Thượng Hiền', 'Tân Bình', 41.25, 42.25, 43.25),
(62, 'THPT Nguyễn Thái Bình', 'Tân Bình', 30.25, 31.25, 32.25),
(63, 'THPT Nguyễn Hữu Huân', 'TP Thủ Đức', 38, 39, 40),
(64, 'THPT Thủ Đức', 'TP Thủ Đức', 32.75, 33.25, 34.25),
(65, 'THPT Tam Phú', 'TP Thủ Đức', 28.75, 29.75, 30.25),
(66, 'THPT Hiệp Bình', 'TP Thủ Đức', 24.25, 25, 25.75),
(67, 'THPT Đào Sơn Tây', 'TP Thủ Đức', 21.5, 22.25, 23.25),
(68, 'THPT Bình Chánh', 'Bình Chánh', 13, 13, 13),
(69, 'THPT Tân Túc', 'Bình Chánh', 13, 13, 13),
(70, 'THPT Vĩnh Lộc B', 'Bình Chánh', 20, 21, 21.75),
(71, 'THPT Lê Minh Xuân', 'Bình Chánh', 23.5, 23.5, 24),
(72, 'THPT Đa Phước', 'Bình Chánh', 13.5, 13.5, 13.5),
(73, 'THPT Bình Khánh', 'Cần Giờ', 13.25, 14.25, 15.25),
(74, 'THPT Cần Thạnh', 'Cần Giờ', 13, 14, 15),
(75, 'THPT An Nghĩa', 'Cần Giờ', 13, 14, 15),
(76, 'THPT Củ Chi', 'Củ Chi', 24.75, 25.75, 26.75),
(77, 'THPT Quang Trung', 'Củ Chi', 18.25, 19, 19.5),
(78, 'THPT An Nhơn Tây', 'Củ Chi', 16.5, 17.5, 18.25),
(79, 'THPT Trung Phú', 'Củ Chi', 22, 22.5, 23.5),
(80, 'THPT Trung Lập', 'Củ Chi', 14, 15, 16),
(81, 'THPT Phú Hòa', 'Củ Chi', 18.25, 19, 20),
(82, 'THPT Tân Thông Hội', 'Củ Chi', 20.25, 21.25, 22.25),
(83, 'THPT Nguyễn Hữu Cầu', 'Hóc Môn', 37.75, 38.75, 39.75),
(84, 'THPT Lý Thường Kiệt', 'Hóc Môn', 32, 32, 33),
(85, 'THPT Bà Điểm', 'Hóc Môn', 30, 31, 32),
(86, 'THPT Nguyễn Văn Cừ', 'Hóc Môn', 24, 24.75, 25.25),
(87, 'THPT Nguyễn Hữu Tiến', 'Hóc Môn', 28.25, 29, 30),
(88, 'THPT Phạm Văn Sáng', 'Hóc Môn', 26.25, 27.25, 27.75),
(89, 'THPT Long Thới', 'Nhà Bè', 13.25, 14.25, 15),
(90, 'THPT Phước Kiển', 'Nhà Bè', 15.5, 16.5, 16.75),
(91, 'THPT Dương Văn Dương', 'Nhà Bè', 18.75, 19.75, 20.75),
(92, 'THPT Tân Bình', 'Tân Phú', 33, 33.5, 34.5),
(93, 'THPT Trần Phú', 'Tân Phú', 39.5, 40.5, 41.5),
(94, 'THPT Tây Thạnh', 'Tân Phú', 34.25, 35.25, 36.25),
(95, 'THPT Vĩnh Lộc', 'Bình Tân', 27, 27.75, 28.5),
(96, 'THPT Nguyễn Hữu Cảnh', 'Bình Tân', 28.5, 29, 30),
(97, 'THPT Bình Hưng Hòa', 'Bình Tân', 28.75, 29.75, 30.25),
(98, 'THPT Bình Tân', 'Bình Tân', 25, 26, 26.75),
(99, 'THPT An Lạc', 'Bình Tân', 27.5, 28.5, 29.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `search_score_2015`
--
ALTER TABLE `search_score_2015`
  ADD PRIMARY KEY (`STT`,`TÊN TRƯỜNG`,`TÊN QUẬN`,`ĐIỂM NV1`,`ĐIỂM NV2`,`ĐIỂM NV3`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



