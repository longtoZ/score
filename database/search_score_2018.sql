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
-- Table structure for table `search_score_2018`
--

CREATE TABLE `search_score_2018` (
  `STT` int(11) NOT NULL,
  `TÊN TRƯỜNG` varchar(250) NOT NULL,
  `TÊN QUẬN` varchar(250) NOT NULL,
  `ĐIỂM NV1` float NOT NULL,
  `ĐIỂM NV2` float NOT NULL,
  `ĐIỂM NV3` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search_score_2018`
--

INSERT INTO `search_score_2018` (`STT`, `TÊN TRƯỜNG`, `TÊN QUẬN`, `ĐIỂM NV1`, `ĐIỂM NV2`, `ĐIỂM NV3`) VALUES
(1, 'THPT Trưng Vương', 'Quận 1', 34.75, 35.75, 36.75),
(2, 'THPT Bùi Thị Xuân', 'Quận 1', 36.75, 37.5, 38.5),
(3, 'THPT Len Lơ Man', 'Quận 1', 29.25, 30.25, 31),
(4, 'THPT Năng Khiếu TDTT', 'Quận 1', 22.25, 22.25, 23),
(5, 'THPT Lương Thế Vinh', 'Quận 1', 34.25, 35, 35.5),
(6, 'THPT Giồng Ông Tố', 'Quận 2', 27, 27.25, 28.25),
(7, 'THPT Thủ Thiêm', 'Quận 2', 22.5, 23, 23.75),
(8, 'THPT Lê Quý Đôn', 'Quận 3', 36.25, 37.25, 38.25),
(9, 'THPT Nguyễn Thị Minh Khai', 'Quận 3', 38, 39, 39.5),
(10, 'THPT Lê Thị Hồng Gấm', 'Quận 3', 24.75, 25, 25.25),
(11, 'THPT Marie Curie', 'Quận 3', 33, 33.5, 33.75),
(12, 'THPT Nguyễn Thị Diệu', 'Quận 3', 28.25, 28.5, 29),
(13, 'THPT Nguyễn Trãi', 'Quận 4', 22.75, 23, 23.5),
(14, 'THPT Nguyễn Hữu Thọ', 'Quận 4', 25, 25.5, 26),
(15, 'TH Thực Hành Sài Gòn', 'Quận 5', 32, 32, 33),
(16, 'THPT Hùng Vương', 'Quận 5', 30, 30.25, 31.25),
(17, 'TH Thực Hành Đại Học Sư Phạm', 'Quận 5', 39.5, 40, 40.5),
(18, 'THPT Trần Khai Nguyên', 'Quận 5', 32, 33, 34),
(19, 'THPT Trần Hữu Trang', 'Quận 5', 22.75, 23.25, 23.75),
(20, 'THPT Mạc Đĩnh Chi', 'Quận 6', 36.75, 36.75, 37.25),
(21, 'THPT Bình Phú', 'Quận 6', 33, 33.25, 34),
(22, 'THPT Nguyễn Tất Thành', 'Quận 6', 28, 28.5, 28.5),
(23, 'THPT Phạm Phú Thứ', 'Quận 6', 24.75, 24.75, 25.75),
(24, 'THPT Lê Thánh Tôn', 'Quận 7', 26.25, 26.5, 27),
(25, 'THPT Tân Phong', 'Quận 7', 20.5, 21.5, 22.5),
(26, 'THPT Ngô Quyền', 'Quận 7', 30.75, 31.75, 32.75),
(27, 'THPT Nam Sài Gòn', 'Quận 7', 32, 32, 33),
(28, 'THPT Lương Văn Can', 'Quận 8', 22.75, 23, 24),
(29, 'THPT Ngô Gia Tự', 'Quận 8', 21.25, 21.25, 22),
(30, 'THPT Tạ Quang Bửu', 'Quận 8', 23, 24, 24),
(31, 'THPT Nguyễn Văn Linh', 'Quận 8', 17.75, 18.75, 19.5),
(32, 'THPT Võ Văn Kiệt', 'Quận 8', 26.75, 27.25, 28),
(33, 'THPT Năng Khiếu TDTT Nguyễn Thị Định', 'Quận 8', 21.5, 22.25, 22.5),
(34, 'THPT Nguyễn Huệ', 'Quận 9', 26, 26.5, 27.5),
(35, 'THPT Phước Long', 'Quận 9', 25.5, 26, 27),
(36, 'THPT Long Trường', 'Quận 9', 21, 21.25, 21.25),
(37, 'THPT Nguyễn Văn Tăng', 'Quận 9', 19.25, 19.5, 20.25),
(38, 'THPT Nguyễn Khuyến', 'Quận 10', 32.75, 33, 34),
(39, 'THPT Nguyễn Du', 'Quận 10', 32, 32.25, 33.25),
(40, 'THPT Nguyễn An Ninh', 'Quận 10', 24.75, 25, 26),
(41, 'THCS-THPT Diên Hồng', 'Quận 10', 23.5, 24.5, 24.5),
(42, 'THCS-THPT Sương Nguyệt Anh', 'Quận 10', 23, 23.5, 24.5),
(43, 'THPT Nguyễn Hiền', 'Quận 11', 29, 29.75, 30.75),
(44, 'THPT Trần Quang Khải', 'Quận 11', 24.75, 25.5, 26.25),
(45, 'THPT Nam Kỳ Khởi Nghĩa', 'Quận 11', 24.25, 24.75, 25.25),
(46, 'THPT Võ Trường Toản', 'Quận 12', 32.75, 33.75, 34),
(47, 'THPT Trường Chinh', 'Quận 12', 29.75, 30, 30),
(48, 'THPT Thạnh Lộc', 'Quận 12', 25.75, 26.5, 27),
(49, 'THPT Thanh Đa', 'Bình Thạnh', 25.5, 25.5, 25.75),
(50, 'THPT Võ Thị Sáu', 'Bình Thạnh', 33.25, 33.75, 34),
(51, 'THPT Gia Định', 'Bình Thạnh', 38.75, 39.75, 40),
(52, 'THPT Phan Đăng Lưu', 'Bình Thạnh', 26.25, 27, 28),
(53, 'THPT Trần Văn Giàu', 'Bình Thạnh', 25.5, 26, 26.5),
(54, 'THPT Hoàng Hoa Thám', 'Bình Thạnh', 30.25, 30.75, 31.5),
(55, 'THPT Gò Vấp', 'Gò Vấp', 29.75, 30.25, 31),
(56, 'THPT Nguyễn Công Trứ', 'Gò Vấp', 37, 37.5, 37.5),
(57, 'THPT Trần Hưng Đạo', 'Gò Vấp', 33.75, 34.75, 35.25),
(58, 'THPT Nguyễn Trung Trực', 'Gò Vấp', 28, 29, 29.5),
(59, 'THPT Phú Nhuận', 'Phú Nhuận', 36.75, 37.75, 38),
(60, 'THPT Hàn Thuyên', 'Phú Nhuận', 25.25, 25.75, 26.25),
(61, 'THPT Nguyễn Chí Thanh', 'Tân Bình', 33.75, 34.75, 35.5),
(62, 'THPT Nguyễn Thượng Hiền', 'Tân Bình', 41, 42, 43),
(63, 'THPT Nguyễn Thái Bình', 'Tân Bình', 29.25, 29.75, 30.5),
(64, 'THPT Nguyễn Hữu Huân', 'TP Thủ Đức', 37.25, 38.25, 38.25),
(65, 'THPT Thủ Đức', 'TP Thủ Đức', 33, 33, 34),
(66, 'THPT Tam Phú', 'TP Thủ Đức', 28.25, 28.5, 29.5),
(67, 'THPT Hiệp Bình', 'TP Thủ Đức', 23.25, 23.75, 24.5),
(68, 'THPT Đào Sơn Tây', 'TP Thủ Đức', 21.5, 22.25, 22.25),
(69, 'THPT Linh Trung', 'TP Thủ Đức', 22.25, 22.75, 23),
(70, 'THPT Bình Chánh', 'Bình Chánh', 20, 20.75, 20.75),
(71, 'THPT Tân Túc', 'Bình Chánh', 20.25, 20.5, 21.25),
(72, 'THPT Vĩnh Lộc B', 'Bình Chánh', 22.25, 22.5, 22.75),
(73, 'Năng Khiếu TDTT Bình Chánh', 'Bình Chánh', 18, 18.5, 19),
(74, 'THPT Lê Minh Xuân', 'Bình Chánh', 22.25, 22.75, 22.75),
(75, 'THPT Đa Phước', 'Bình Chánh', 16, 17, 17),
(76, 'THPT Bình Khánh', 'Cân Giờ', 15, 15, 15),
(77, 'THPT Cần Thạnh', 'Cân Giờ', 16.5, 17, 18),
(78, 'THPT An Nghĩa', 'Cân Giờ', 15, 15, 15),
(79, 'THPT Củ Chi', 'Củ Chi', 22, 23, 24),
(80, 'THPT Quang Trung', 'Củ Chi', 18.5, 18.75, 19.25),
(81, 'THPT An Nhơn Tây', 'Củ Chi', 17, 17.25, 18),
(82, 'THPT Trung Phú', 'Củ Chi', 22.5, 23.25, 23.5),
(83, 'THPT Trung Lập', 'Củ Chi', 16.25, 16.75, 17),
(84, 'THPT Phú Hòa', 'Củ Chi', 18.5, 19.5, 19.5),
(85, 'THPT Tân Thông Hội', 'Củ Chi', 19.5, 20.25, 20.5),
(86, 'THPT Nguyễn Hữu Cầu', 'Hóc Môn', 33.75, 34.75, 35.75),
(87, 'THPT Lý Thường Kiệt', 'Hóc Môn', 30.25, 30.5, 31),
(88, 'THPT Bà Điểm', 'Hóc Môn', 29, 29, 29),
(89, 'THPT Nguyễn Văn Cừ', 'Hóc Môn', 23.25, 24, 24.5),
(90, 'THPT Nguyễn Hữu Tiến', 'Hóc Môn', 27, 27.75, 28.75),
(91, 'THPT Phạm Văn Sáng', 'Hóc Môn', 25.25, 26.25, 26.75),
(92, 'THPT Long Thới', 'Nhà Bè', 18.25, 19, 19.5),
(93, 'THPT Phước Kiển', 'Nhà Bè', 18.75, 19.25, 20),
(94, 'THPT Dương Văn Dương', 'Nhà Bè', 20, 20.5, 21),
(95, 'THPT Tân Bình', 'Tân Phú', 33, 33.5, 34),
(96, 'THPT Tran Phú', 'Tân Phú', 38.25, 38.25, 39),
(97, 'THPT Lê Trọng Tấn', 'Tân Phú', 29.5, 30, 30.5),
(98, 'THPT Vĩnh Lộc', 'Bình Tân', 25.75, 26, 27),
(99, 'THPT Nguyễn Hữu Cảnh', 'Bình Tân', 26.75, 27.75, 28.75),
(100, 'THPT Bình Hưng Hòa', 'Bình Tân', 26.75, 27.25, 28),
(101, 'THPT Bình Tân', 'Bình Tân', 24, 24, 25),
(102, 'THPT An Lạc', 'Bình Tân', 24.5, 25.25, 25.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `search_score_2018`
--
ALTER TABLE `search_score_2018`
  ADD PRIMARY KEY (`STT`,`TÊN TRƯỜNG`,`TÊN QUẬN`,`ĐIỂM NV1`,`ĐIỂM NV2`,`ĐIỂM NV3`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



