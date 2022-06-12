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
-- Table structure for table `search_score_2019`
--

CREATE TABLE `search_score_2019` (
  `STT` int(11) NOT NULL,
  `TÊN TRƯỜNG` varchar(250) NOT NULL,
  `TÊN QUẬN` varchar(250) NOT NULL,
  `ĐIỂM NV1` float NOT NULL,
  `ĐIỂM NV2` float NOT NULL,
  `ĐIỂM NV3` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search_score_2019`
--

INSERT INTO `search_score_2019` (`STT`, `TÊN TRƯỜNG`, `TÊN QUẬN`, `ĐIỂM NV1`, `ĐIỂM NV2`, `ĐIỂM NV3`) VALUES
(1, 'THPT Trưng Vương', 'Quận 1', 32, 32.75, 33.75),
(2, 'THPT Bùi Thị Xuân', 'Quận 1', 34.25, 35.25, 36),
(3, 'THPT Len Lơ Man', 'Quận 1', 27.75, 28.25, 29.25),
(4, 'THPT Năng Khiếu TDTT', 'Quận 1', 20, 20.75, 21),
(5, 'THPT Lương Thế Vinh', 'Quận 1', 32.25, 33.25, 33.75),
(6, 'THPT Giồng Ông Tố', 'Quận 2', 26.5, 27, 27.5),
(7, 'THPT Thủ Thiêm', 'Quận 2', 22.25, 22.75, 23.25),
(8, 'THPT Lê Quý Đôn', 'Quận 3', 34.5, 35.25, 36),
(9, 'THPT Nguyễn Thị Minh Khai', 'Quận 3', 36.25, 37.25, 38),
(10, 'THPT Lê Thị Hồng Gấm', 'Quận 3', 22.25, 22.75, 23.25),
(11, 'THPT Marie Curie', 'Quận 3', 29.25, 30.25, 31.25),
(12, 'THPT Nguyễn Thị Diệu', 'Quận 3', 24.75, 24.75, 25),
(13, 'THPT Nguyễn Trãi', 'Quận 4', 22.5, 23.5, 23.5),
(14, 'THPT Nguyễn Hữu Thọ', 'Quận 4', 25.25, 25.75, 26.75),
(15, 'TH Thực Hành Sài Gòn', 'Quận 5', 33, 33.75, 34),
(16, 'THPT Hùng Vương', 'Quận 5', 28.25, 28.75, 29.25),
(17, 'TH Thực Hành Đại Học Sư Phạm', 'Quận 5', 36.75, 37.25, 38),
(18, 'THPT Trần Khai Nguyên', 'Quận 5', 31, 32, 32.5),
(19, 'THPT Trần Hữu Trang', 'Quận 5', 22.5, 23.25, 24),
(20, 'THPT Mạc Đĩnh Chi', 'Quận 6', 33.75, 33.75, 33.75),
(21, 'THPT Bình Phú', 'Quận 6', 28.5, 28.5, 29),
(22, 'THPT Nguyễn Tất Thành', 'Quận 6', 26, 26.25, 27),
(23, 'THPT Phạm Phú Thứ', 'Quận 6', 23.25, 23.5, 24.5),
(24, 'THPT Lê Thánh Tôn', 'Quận 7', 27, 27.25, 27.5),
(25, 'THPT Tân Phong', 'Quận 7', 21, 21.75, 22.25),
(26, 'THPT Ngô Quyền', 'Quận 7', 30, 31, 32),
(27, 'THPT Nam Sài Gòn', 'Quận 7', 32, 32, 32.25),
(28, 'THPT Lương Văn Can', 'Quận 8', 20.5, 21.5, 22.5),
(29, 'THPT Ngô Gia Tự', 'Quận 8', 20.25, 20.5, 21.25),
(30, 'THPT Tạ Quang Bửu', 'Quận 8', 23, 24, 24),
(31, 'THPT Nguyễn Văn Linh', 'Quận 8', 19.75, 20.25, 21.25),
(32, 'THPT Võ Văn Kiệt', 'Quận 8', 25.75, 26.5, 27),
(33, 'THPT Năng Khiếu TDTT Nguyễn Thị Định', 'Quận 8', 21.75, 21.75, 22.5),
(34, 'THPT Nguyễn Huệ', 'Quận 9', 24.75, 25, 26),
(35, 'THPT Phước Long', 'Quận 9', 25.75, 25.75, 26.5),
(36, 'THPT Long Trường', 'Quận 9', 19.5, 20, 20.25),
(37, 'THPT Nguyễn Văn Tăng', 'Quận 9', 16.75, 17, 18),
(38, 'THPT Tǎng Nhơn Phú A', 'Quận 9', 17.75, 18.25, 18.5),
(39, 'THPT Nguyễn Khuyến', 'Quận 10', 27.75, 28.75, 29.75),
(40, 'THPT Nguyễn Du', 'Quận 10', 31.5, 32, 33),
(41, 'THPT Nguyễn An Ninh', 'Quận 10', 24.25, 24.75, 25.5),
(42, 'THCS-THPT Diên Hồng', 'Quận 10', 22.75, 23.75, 24.25),
(43, 'THCS-THPT Sương Nguyệt Anh', 'Quận 10', 22.5, 23, 23.5),
(44, 'THPT Nguyễn Hiền', 'Quận 11', 27.75, 28.5, 28.25),
(45, 'THPT Trần Quang Khải', 'Quận 11', 25, 25.25, 26.25),
(46, 'THPT Nam Kỳ Khởi Nghĩa', 'Quận 11', 24.25, 25, 26),
(47, 'THPT Võ Trường Toản', 'Quận 12', 31, 31, 32),
(48, 'THPT Trường Chinh', 'Quận 12', 27.5, 28, 28.5),
(49, 'THPT Thạnh Lộc', 'Quận 12', 24.5, 25.5, 25.75),
(50, 'THPT Thanh Đa', 'Bình Thạnh', 23.5, 24.25, 24.5),
(51, 'THPT Võ Thị Sáu', 'Bình Thạnh', 29.75, 30.75, 31),
(52, 'THPT Gia Định', 'Bình Thạnh', 35.75, 36.25, 37),
(53, 'THPT Phan Đăng Lưu', 'Bình Thạnh', 24.5, 25.5, 26),
(54, 'THPT Trần Văn Giàu', 'Bình Thạnh', 24, 24.25, 24.5),
(55, 'THPT Hoàng Hoa Thám', 'Bình Thạnh', 28.25, 28.5, 29),
(56, 'THPT Gò Vấp', 'Gò Vấp', 27, 27.25, 28),
(57, 'THPT Nguyễn Công Trứ', 'Gò Vấp', 31.25, 32.25, 33.25),
(58, 'THPT Trần Hưng Đạo', 'Gò Vấp', 30.5, 31.5, 32.5),
(59, 'THPT Nguyễn Trung Trực', 'Gò Vấp', 25.75, 26.75, 27.25),
(60, 'THPT Phú Nhuận', 'Phú Nhuận', 34.25, 34.5, 35),
(61, 'THPT Hàn Thuyên', 'Phú Nhuận', 24, 24.75, 25),
(62, 'THPT Nguyễn Chí Thanh', 'Tân Bình', 31, 31.75, 32),
(63, 'THPT Nguyễn Thượng Hiền', 'Tân Bình', 37.5, 37.75, 38),
(64, 'THPT Nguyễn Thái Bình', 'Tân Bình', 27.25, 28.25, 28.5),
(65, 'THPT Nguyễn Hữu Huân', 'TP Thủ Đức', 34, 34.5, 35),
(66, 'THPT Thủ Đức', 'TP Thủ Đức', 31.25, 31.75, 32),
(67, 'THPT Tam Phú', 'TP Thủ Đức', 26.5, 27.25, 28),
(68, 'THPT Hiệp Bình', 'TP Thủ Đức', 22.75, 23.25, 24),
(69, 'THPT Đào Sơn Tây', 'TP Thủ Đức', 19.75, 20.25, 20.5),
(70, 'THPT Linh Trung', 'TP Thủ Đức', 23.5, 23.75, 23.75),
(71, 'THPT Bình Chiểu', 'TP Thủ Đức', 18, 18.5, 19.25),
(72, 'THPT Bình Chánh', 'Bình Chánh', 19, 19.5, 20.25),
(73, 'THPT Tân Túc', 'Bình Chánh', 19.75, 20.25, 21),
(74, 'THPT Vĩnh Lộc B', 'Bình Chánh', 21.5, 22.25, 23.25),
(75, 'Năng Khiếu TDTT Bình Chánh', 'Bình Chánh', 18.75, 19.25, 19.5),
(76, 'THPT Phong Phú', 'Bình Chánh', 15, 15, 15),
(77, 'THPT Lê Minh Xuân', 'Bình Chánh', 21.75, 22.5, 23),
(78, 'THPT Đa Phước', 'Bình Chánh', 16.75, 17, 18),
(79, 'THPT Bình Khánh', 'Cần Giờ', 15.75, 16.75, 17.75),
(80, 'THPT Cần Thạnh', 'Cần Giờ', 15.5, 16.25, 17),
(81, 'THPT An Nghĩa', 'Cần Giờ', 15, 15, 15),
(82, 'THPT Củ Chi', 'Củ Chi', 23.5, 24, 24.25),
(83, 'THPT Quang Trung', 'Củ Chi', 19.75, 20.5, 21),
(84, 'THPT An Nhơn Tây', 'Củ Chi', 18.75, 19.25, 19.75),
(85, 'THPT Trung Phú', 'Củ Chi', 23.25, 24.25, 24.5),
(86, 'THPT Trung Lập', 'Củ Chi', 18, 18.75, 19.25),
(87, 'THPT Phú Hòa', 'Củ Chi', 20.5, 20.75, 21),
(88, 'THPT Tân Thông Hội', 'Củ Chi', 21.75, 22.25, 22.25),
(89, 'THPT Nguyễn Hữu Cầu', 'Hóc Môn', 34, 34.25, 35.25),
(90, 'THPT Lý Thường Kiệt', 'Hóc Môn', 30.5, 30.75, 31),
(91, 'THPT Bà Điểm', 'Hóc Môn', 29, 30, 31),
(92, 'THPT Nguyễn Văn Cừ', 'Hóc Môn', 23.75, 24.75, 25.5),
(93, 'THPT Nguyễn Hữu Tiến', 'Hóc Môn', 27.5, 27.75, 28.5),
(94, 'THPT Phạm Văn Sáng', 'Hóc Môn', 26.75, 27.25, 28),
(95, 'THPT Tân Hiệp', 'Hoc Môn', 24.5, 24.5, 25),
(96, 'THPT Long Thới', 'Nhà Bè', 19.75, 20, 20.25),
(97, 'THPT Phước Kiển', 'Nhà Bè', 19.75, 20.5, 20.5),
(98, 'THPT Dương Văn Dương', 'Nhà Bè', 23.25, 23.5, 24),
(99, 'THPT Trần Phú', 'Tân Phú', 35.25, 36.25, 37.25),
(100, 'THPT Tân Bình', 'Tân Phú', 30.25, 30.5, 31.5),
(101, 'THPT Tây Thạnh', 'Tân Phú', 31, 31, 31),
(102, 'THPT Lê Trọng Tấn', 'Tân Phú', 28.75, 29.25, 29.5),
(103, 'THPT Vĩnh Lộc', 'Bình Tân', 25.25, 26, 26.5),
(104, 'THPT Nguyễn Hữu Cảnh', 'Bình Tân', 26, 26.25, 26.25),
(105, 'THPT Bình Hưng Hòa', 'Bình Tân', 26.5, 27.5, 28.25),
(106, 'THPT Bình Tân', 'Bình Tân', 23, 23.5, 24.5),
(107, 'THPT An Lạc', 'Bình Tân', 24, 24.75, 24.75);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `search_score_2019`
--
ALTER TABLE `search_score_2019`
  ADD PRIMARY KEY (`STT`,`TÊN TRƯỜNG`,`TÊN QUẬN`,`ĐIỂM NV1`,`ĐIỂM NV2`,`ĐIỂM NV3`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



