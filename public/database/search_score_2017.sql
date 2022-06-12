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
-- Table structure for table `search_score_2017`
--

CREATE TABLE `search_score_2017` (
  `STT` int(11) NOT NULL,
  `TÊN TRƯỜNG` varchar(250) NOT NULL,
  `TÊN QUẬN` varchar(250) NOT NULL,
  `ĐIỂM NV1` float NOT NULL,
  `ĐIỂM NV2` float NOT NULL,
  `ĐIỂM NV3` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search_score_2017`
--

INSERT INTO `search_score_2017` (`STT`, `TÊN TRƯỜNG`, `TÊN QUẬN`, `ĐIỂM NV1`, `ĐIỂM NV2`, `ĐIỂM NV3`) VALUES
(1, 'THPT Trưng Vương', 'Quận 1', 34.25, 35.25, 36.25),
(2, 'THPT Bùi Thị Xuân', 'Quận 1', 37.75, 38.75, 39.75),
(3, 'THPT Len Lơ Man', 'Quận 1', 29.75, 30, 30.75),
(4, 'THPT Năng Khiếu TDTT', 'Quận 1', 18.5, 19, 19.5),
(5, 'THPT Lương Thế Vinh', 'Quận 1', 33.75, 34.75, 35.75),
(6, 'THPT Giồng Ông Tố', 'Quận 2', 27, 27.75, 28.75),
(7, 'THPT Thủ Thiêm', 'Quận 2', 22, 22, 22.75),
(8, 'THPT Lê Quý Đôn', 'Quận 3', 37, 38, 39),
(9, 'THPT Nguyễn Thị Minh Khai', 'Quận 3', 36.75, 37.75, 38.75),
(10, 'THPT Lê Thị Hồng Gấm', 'Quận 3', 23.75, 24.5, 25.25),
(11, 'THPT Marie Curie', 'Quận 3', 32.5, 32.75, 33),
(12, 'THPT Nguyễn Thị Diệu', 'Quận 3', 26.5, 27, 28),
(13, 'THPT Nguyễn Trãi', 'Quận 4', 15, 15, 15),
(14, 'THPT Nguyễn Hữu Thọ', 'Quận 4', 25.25, 25.75, 26),
(15, 'TH Thực Hành Sài Gòn', 'Quận 5', 24, 24.75, 25.25),
(16, 'THPT Hùng Vương', 'Quận 5', 30.25, 30.75, 31.75),
(17, 'TH Thực Hành Đại Học Sư Phạm', 'Quận 5', 39.25, 40.25, 41.25),
(18, 'THPT Trần Khai Nguyên', 'Quận 5', 33.5, 34.5, 35.5),
(19, 'THPT Trần Hữu Trang', 'Quận 5', 23.75, 24.5, 24.75),
(20, 'THPT Mạc Đĩnh Chi', 'Quận 6', 36.25, 37.25, 38.25),
(21, 'THPT Bình Phú', 'Quận 6', 31.25, 32, 33),
(22, 'THPT Nguyễn Tất Thành', 'Quận 6', 26.25, 27, 27.75),
(23, 'THPT Phạm Phú Thứ', 'Quận 6', 21.25, 21.75, 22.75),
(24, 'THPT Lê Thánh Tôn', 'Quận 7', 26, 27, 28),
(25, 'THPT Tân Phong', 'Quận 7', 20.5, 21.5, 21.75),
(26, 'THPT Ngô Quyền', 'Quận 7', 30.25, 31, 32),
(27, 'THPT Nam Sài Gòn', 'Quận 7', 32.5, 33.5, 34.5),
(28, 'THPT Lương Văn Can', 'Quận 8', 22.5, 23, 23.25),
(29, 'THPT Ngô Gia Tự', 'Quận 8', 19.25, 20, 20.75),
(30, 'THPT Tạ Quang Bửu', 'Quận 8', 21.75, 22.75, 23.75),
(31, 'THPT Nguyễn Văn Linh', 'Quận 8', 18.25, 19.25, 20.25),
(32, 'THPT Phường 13', 'Quận 8', 26.5, 27, 28),
(33, 'THPT Năng Khiếu TDTT Nguyễn Thị Định', 'Quận 8', 16.5, 17.5, 18.5),
(34, 'THPT Nguyễn Huệ', 'Quận 9', 25.5, 26.25, 27.25),
(35, 'THPT Phước Long', 'Quận 9', 25.25, 25.75, 26.75),
(36, 'THPT Long Trường', 'Quận 9', 20.25, 21, 21.75),
(37, 'THPT Nguyễn Văn Tăng', 'Quận 9', 19.5, 19.5, 19.75),
(38, 'THPT Nguyễn Khuyến', 'Quận 10', 33.25, 33.25, 33.25),
(39, 'THPT Nguyễn Du', 'Quận 10', 30.75, 31.25, 32.25),
(40, 'THPT Nguyễn An Ninh', 'Quận 10', 25, 25.25, 26.25),
(41, 'THPT Diên Hồng', 'Quận 10', 23.5, 24.25, 25),
(42, 'THPT Sương Nguyệt Anh', 'Quận 10', 23.25, 23.75, 24.5),
(43, 'THPT Nguyễn Hiền', 'Quận 11', 27.5, 28.5, 29),
(44, 'THPT Trần Quang Khải', 'Quận 11', 26.5, 26.5, 26.5),
(45, 'THPT Nam Kỳ Khởi Nghĩa', 'Quận 11', 24.5, 25.25, 26),
(46, 'THPT Võ Trường Toản', 'Quận 12', 33, 33.25, 34.25),
(47, 'THPT Trường Chinh', 'Quận 12', 29.25, 30.25, 30.5),
(48, 'THPT Thạnh Lộc', 'Quận 12', 24.75, 25.25, 25.75),
(49, 'THPT Thanh Đa', 'Bình Thạnh', 23.5, 23.75, 24.75),
(50, 'THPT Võ Thị Sáu', 'Bình Thạnh', 32, 32.25, 33),
(51, 'THPT Gia Định', 'Bình Thạnh', 37.5, 38.5, 39.5),
(52, 'THPT Phan Đăng Lưu', 'Bình Thạnh', 24.5, 25.5, 26.5),
(53, 'THPT Trần Văn Giàu', 'Bình Thạnh', 25.5, 26, 27),
(54, 'THPT Hoàng Hoa Thám', 'Bình Thạnh', 29.25, 29.5, 30.25),
(55, 'THPT Gò Vấp', 'Gò Vấp', 28.75, 29.75, 30.5),
(56, 'THPT Nguyễn Công Trứ', 'Gò Vấp', 35, 36, 37),
(57, 'THPT Trần Hưng Đạo', 'Gò Vấp', 32.5, 32.75, 33),
(58, 'THPT Nguyễn Trung Trực', 'Gò Vấp', 26.5, 27.5, 28),
(59, 'THPT Phú Nhuận', 'Phú Nhuận', 36.25, 36.25, 37),
(60, 'THPT Hàn Thuyên', 'Phú Nhuận', 23.75, 24.25, 24.75),
(61, 'THPT Nguyễn Chí Thanh', 'Tân Bình', 33.25, 33.75, 34),
(62, 'THPT Nguyễn Thượng Hiền', 'Tân Bình', 40, 41, 42),
(63, 'THPT Nguyễn Thái Bình', 'Tân Bình', 29, 29.25, 29.5),
(64, 'THPT Nguyễn Hữu Huân', 'TP Thủ Đức', 34.5, 35, 36),
(65, 'THPT Thủ Đức', 'TP Thủ Đức', 30.75, 31.5, 32.25),
(66, 'THPT Tam Phú', 'TP Thủ Đức', 27.5, 28, 29),
(67, 'THPT Hiệp Bình', 'TP Thủ Đức', 23, 23.25, 24),
(68, 'THPT Đào Sơn Tây', 'TP Thủ Đức', 22, 22.25, 22.25),
(69, 'THPT Bình Chánh', 'Bình Chánh', 16.5, 17, 18),
(70, 'THPT Tân Túc', 'Bình Chánh', 18.5, 18.5, 19.25),
(71, 'THPT Vĩnh Lộc B', 'Bình Chánh', 20, 20.25, 21),
(72, 'Năng Khiếu TDTT Bình Chánh', 'Bình Chánh', 15, 15, 15),
(73, 'THPT Lê Minh Xuân', 'Bình Chánh', 21.75, 21.75, 22.5),
(74, 'THPT Đa Phước', 'Bình Chánh', 19.25, 19.75, 20),
(75, 'THPT Bình Khánh', 'Cân Giờ', 15, 15, 15),
(76, 'THPT Cần Thạnh', 'Cân Giờ', 16, 16.5, 17.5),
(77, 'THPT An Nghĩa', 'Cân Giờ', 15, 15, 15),
(78, 'THPT Củ Chi', 'Củ Chi', 20.5, 21.25, 22.25),
(79, 'THPT Quang Trung', 'Củ Chi', 18.25, 19, 19.25),
(80, 'THPT An Nhơn Tây', 'Củ Chi', 17.5, 17.5, 18),
(81, 'THPT Trung Phú', 'Củ Chi', 23.75, 24.5, 25.5),
(82, 'THPT Trung Lập', 'Củ Chi', 16.75, 17.5, 18),
(83, 'THPT Phú Hòa', 'Củ Chi', 18.75, 19.5, 20),
(84, 'THPT Tân Thông Hội', 'Củ Chi', 21, 21.5, 22.5),
(85, 'THPT Nguyễn Hữu Cầu', 'Hóc Môn', 34.75, 35.75, 36.75),
(86, 'THPT Lý Thường Kiệt', 'Hóc Môn', 29.75, 30.75, 31.75),
(87, 'THPT Bà Điểm', 'Hóc Môn', 28.5, 28.75, 29.75),
(88, 'THPT Nguyễn Văn Cừ', 'Hóc Môn', 23.5, 24.25, 24.5),
(89, 'THPT Nguyễn Hữu Tiến', 'Hóc Môn', 27, 27.5, 27.5),
(90, 'THPT Phạm Văn Sáng', 'Hóc Môn', 25.25, 25.75, 25.75),
(91, 'THPT Long Thới', 'Nhà Bè', 18.25, 18.25, 18.75),
(92, 'THPT Phước Kiển', 'Nhà Bè', 17, 17.75, 18.5),
(93, 'THPT Dương Văn Dương', 'Nhà Bè', 21, 21.75, 22),
(94, 'THPT Tân Bình', 'Tân Phú', 33, 33.25, 33.25),
(95, 'THPT Trần Phú', 'Tân Phú', 37.5, 38, 39),
(96, 'THPT Tây Thạnh', 'Tân Phú', 32.5, 33, 33.5),
(97, 'THPT Lê Trọng Tấn', 'Tân Phú', 25.75, 26.5, 26.5),
(98, 'THPT Vĩnh Lộc', 'Bình Tân', 24.25, 24.75, 25.25),
(99, 'THPT Nguyễn Hữu Cảnh', 'Bình Tân', 25.5, 25.75, 26),
(100, 'THPT Bình Hưng Hòa', 'Bình Tân', 26, 26.75, 27.5),
(101, 'THPT Bình Tân', 'Bình Tân', 22, 22.25, 23),
(102, 'THPT An Lạc', 'Bình Tân', 23, 23.25, 23.25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `search_score_2017`
--
ALTER TABLE `search_score_2017`
  ADD PRIMARY KEY (`STT`,`TÊN TRƯỜNG`,`TÊN QUẬN`,`ĐIỂM NV1`,`ĐIỂM NV2`,`ĐIỂM NV3`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



