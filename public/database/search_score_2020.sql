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
-- Table structure for table `search_score_2020`
--

CREATE TABLE `search_score_2020` (
  `STT` int(11) NOT NULL,
  `TÊN TRƯỜNG` varchar(250) NOT NULL,
  `TÊN QUẬN` varchar(250) NOT NULL,
  `ĐIỂM NV1` float NOT NULL,
  `ĐIỂM NV2` float NOT NULL,
  `ĐIỂM NV3` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search_score_2020`
--

INSERT INTO `search_score_2020` (`STT`, `TÊN TRƯỜNG`, `TÊN QUẬN`, `ĐIỂM NV1`, `ĐIỂM NV2`, `ĐIỂM NV3`) VALUES
(1, 'THPT Trưng Vương', 'Quận 1', 35, 35.25, 35.25),
(2, 'THPT Bùi Thị Xuân', 'Quận 1', 37, 38, 39),
(3, 'THPT Len Lơ Man', 'Quận 1', 29, 29.25, 30.25),
(4, 'THPT Năng Khiếu TDTT', 'Quận 1', 22, 22.25, 23.25),
(5, 'THPT Lương Thế Vinh', 'Quận 1', 35.25, 36.25, 37.25),
(6, 'THPT Giồng Ông Tố', 'Quận 2', 29.25, 30, 30.25),
(7, 'THPT Thủ Thiêm', 'Quận 2', 23.25, 23.5, 23.75),
(8, 'THPT Lê Quý Đôn', 'Quận 3', 37, 38, 39),
(9, 'THPT Nguyễn Thị Minh Khai', 'Quận 3', 38.25, 39, 39.5),
(10, 'THPT Lê Thị Hồng Gấm', 'Quận 3', 23.25, 23.5, 24),
(11, 'THPT Marie Curie', 'Quận 3', 31.25, 32.25, 32.75),
(12, 'THPT Nguyễn Thị Diệu', 'Quận 3', 24.75, 25.25, 26),
(13, 'THPT Nguyễn Trãi', 'Quận 4', 21.75, 22.5, 23),
(14, 'THPT Nguyễn Hữu Thọ', 'Quận 4', 25.75, 26, 26),
(15, 'TH Thực Hành Sài Gòn', 'Quận 5', 36.25, 36.75, 36.75),
(16, 'THPT Hùng Vương', 'Quận 5', 30.75, 30.75, 31.25),
(17, 'TH Thực Hành Đại Học Sư Phạm', 'Quận 5', 39, 39.5, 39.5),
(18, 'THPT Trần Khai Nguyên', 'Quận 5', 33.5, 33.75, 34.25),
(19, 'THPT Trần Hữu Trang', 'Quận 5', 23.25, 23.5, 24.5),
(20, 'THPT Mạc Đĩnh Chi', 'Quận 6', 37.25, 38.25, 39.25),
(21, 'THPT Bình Phú', 'Quận 6', 31.75, 32.25, 32.25),
(22, 'THPT Nguyễn Tất Thành', 'Quận 6', 27, 27.25, 27.25),
(23, 'THPT Phạm Phú Thứ', 'Quận 6', 24.5, 25.5, 26.5),
(24, 'THPT Lê Thánh Tôn', 'Quận 7', 27.25, 27.75, 28.75),
(25, 'THPT Tân Phong', 'Quận 7', 21, 21.25, 21.75),
(26, 'THPT Ngô Quyền', 'Quận 7', 32.5, 32.5, 32.5),
(27, 'THPT Nam Sài Gòn', 'Quận 7', 27.75, 28, 29),
(28, 'THPT Lương Văn Can', 'Quận 8', 21.75, 22.25, 23),
(29, 'THPT Ngô Gia Tự', 'Quận 8', 21.75, 22.25, 23),
(30, 'THPT Tạ Quang Bửu', 'Quận 8', 24.25, 25.25, 26.25),
(31, 'THPT Nguyễn Văn Linh', 'Quận 8', 19.25, 20, 20.75),
(32, 'THPT Võ Văn Kiệt', 'Quận 8', 26.25, 27, 27.5),
(33, 'THPT Chuyên Năng Khiếu TDTT Nguyễn Thị Định', 'Quận 8', 22.5, 22.5, 22.5),
(34, 'THPT Nguyễn Huệ', 'Quận 9', 24.75, 25.75, 26),
(35, 'THPT Phước Long', 'Quận 9', 26.5, 27.25, 28.25),
(36, 'THPT Long Trường', 'Quận 9', 19, 19.75, 20.5),
(37, 'THPT Nguyễn Văn Tăng', 'Quận 9', 18.75, 19.5, 20),
(38, 'THPT Tǎng Nhơn Phú A', 'Quận 9', 22.25, 22.75, 23.5),
(39, 'THPT Nguyễn Khuyến', 'Quận 10', 27.5, 28, 29),
(40, 'THPT Nguyễn Du', 'Quận 10', 34, 34.5, 34.75),
(41, 'THPT Nguyễn An Ninh', 'Quận 10', 24, 24.25, 24.5),
(42, 'THCS-THPT Diên Hồng', 'Quận 10', 23.75, 24.75, 25.5),
(43, 'THCS-THPT Sương Nguyệt Anh', 'Quận 10', 23.75, 24, 24),
(44, 'THPT Nguyễn Hiền', 'Quận 11', 30.25, 30.25, 30.5),
(45, 'THPT Trần Quang Khải', 'Quận 11', 26.75, 27.25, 27.25),
(46, 'THPT Nam Kỳ Khởi Nghĩa', 'Quận 11', 25.25, 25.75, 26.25),
(47, 'THPT Võ Trường Toản', 'Quận 12', 33.5, 34.25, 35.25),
(48, 'THPT Trường Chinh', 'Quận 12', 29, 30, 30.75),
(49, 'THPT Thạnh Lộc', 'Quận 12', 25.25, 26, 26.75),
(50, 'THPT Thanh Đa', 'Bình Thạnh', 24.25, 25, 25.25),
(51, 'THPT Võ Thị Sáu', 'Bình Thạnh', 32.5, 32.75, 33),
(52, 'THPT Gia Định', 'Bình Thạnh', 39, 39.75, 40),
(53, 'THPT Phan Đăng Lưu', 'Bình Thạnh', 25.25, 25.75, 26.5),
(54, 'THPT Trần Văn Giàu', 'Bình Thạnh', 24, 24.5, 25.25),
(55, 'THPT Hoàng Hoa Thám', 'Bình Thạnh', 29.75, 30.75, 30.75),
(56, 'THPT Gò Vấp', 'Gò Vấp', 27.75, 28, 28.75),
(57, 'THPT Nguyễn Công Trứ', 'Gò Vấp', 31.5, 31.5, 32.25),
(58, 'THPT Trần Hưng Đạo', 'Gò Vấp', 32.5, 33, 34),
(59, 'THPT Nguyễn Trung Trực', 'Gò Vấp', 27, 27.5, 27.75),
(60, 'THPT Phú Nhuận', 'Phú Nhuận', 37.5, 37.5, 38),
(61, 'THPT Hàn Thuyên', 'Phú Nhuận', 25.25, 25.75, 26.5),
(62, 'THPT Tân Bình', 'Tân Bình', 33, 33.27, 34),
(63, 'THPT Nguyễn Chí Thanh', 'Tân Bình', 33.5, 34.5, 35.25),
(64, 'THPT Trần Phú', 'Tân Bình', 38.25, 38.75, 39),
(65, 'THPT Nguyễn Thượng Hiền', 'Tân Bình', 41, 41.5, 42),
(66, 'THPT Nguyễn Thái Bình', 'Tân Bình', 29.5, 29.75, 30),
(67, 'THPT Nguyễn Hữu Huân', 'TP Thủ Đức', 36.75, 36.75, 37.75),
(68, 'THPT Thủ Đức', 'TP Thủ Đức', 33.75, 34.75, 35.75),
(69, 'THPT Tam Phú', 'TP Thủ Đức', 29, 29.25, 30.25),
(70, 'THPT Hiệp Bình', 'TP Thủ Đức', 22.25, 23, 23.5),
(71, 'THPT Đào Sơn Tây', 'TP Thủ Đức', 20.75, 21.25, 22),
(72, 'THPT Linh Trung', 'TP Thủ Đức', 25.25, 25.75, 26.75),
(73, 'THPT Bình Chiểu', 'TP Thủ Đức', 20.5, 20.75, 21.5),
(74, 'THPT Bình Chánh', 'Bình Chánh', 21, 21, 21.25),
(75, 'THPT Tân Túc', 'Bình Chánh', 21.25, 21.75, 22.25),
(76, 'THPT Vĩnh Lộc B', 'Bình Chánh', 22.75, 23, 23),
(77, 'THPT Năng Khiếu TDTT Bình Chánh', 'Bình Chánh', 20.5, 20.5, 21),
(78, 'THPT Phong Phú', 'Bình Chánh', 20, 20.25, 20.25),
(79, 'THPT Lê Minh Xuân', 'Bình Chánh', 23, 24, 24),
(80, 'THPT Đa Phước', 'Bình Chánh', 18.25, 19.25, 19.5),
(81, 'THCS-THPT Thanh An', 'Cần Giờ', 16, 16, 16),
(82, 'THPT Bình Khánh', 'Cần Giờ', 16, 16, 16),
(83, 'THPT Cần Thạnh', 'Cần Giờ', 16, 16, 16),
(84, 'THPT An Nghĩa', 'Cần Giờ', 16, 16, 16),
(85, 'THPT Củ Chi', 'Củ Chi', 22.5, 23.5, 24.5),
(86, 'THPT Quang Trung', 'Củ Chi', 19.75, 20, 20),
(87, 'THPT An Nhơn Tây', 'Củ Chi', 16.75, 17.75, 18.25),
(88, 'THPT Trung Phú', 'Củ Chi', 22.75, 23, 23.25),
(89, 'THPT Trung Lập', 'Củ Chi', 18.5, 18.75, 19),
(90, 'THPT Phú Hòa', 'Củ Chi', 19.5, 20.5, 20.5),
(91, 'THPT Tân Thông Hội', 'Củ Chi', 21.25, 21.5, 22.25),
(92, 'THPT Nguyễn Hữu Cầu', 'Hóc Môn', 36.75, 37.75, 38.75),
(93, 'THPT Lý Thường Kiệt', 'Hóc Môn', 31.5, 32.5, 33),
(94, 'THPT Bà Điểm', 'Hóc Môn', 29.25, 30.25, 31.25),
(95, 'THPT Nguyễn Văn Cừ', 'Hóc Môn', 23.5, 23.5, 24.25),
(96, 'THPT Nguyễn Hữu Tiến', 'Hóc Môn', 28.25, 29, 29.5),
(97, 'THPT Phạm Văn Sáng', 'Hóc Môn', 25, 25.5, 25.5),
(98, 'THPT Hồ Thị Bi', 'Hóc Môn', 24.25, 25.25, 26),
(99, 'THPT Long Thới', 'Nhà Bè', 18.25, 19, 19.5),
(100, 'THPT Phước Kiển', 'Nhà Bè', 19.5, 19.5, 19.75),
(101, 'THPT Dương Văn Dương', 'Nhà Bè', 20, 20.5, 21),
(102, 'THPT Tây Thạnh', 'Tân Phú', 33.75, 34.75, 35),
(103, 'THPT Lê Trọng Tấn', 'Tân Phú', 31, 31.5, 31.75),
(104, 'THPT Vĩnh Lộc', 'Bình Tân', 26, 26.75, 27.75),
(105, 'THPT Nguyễn Hữu Cảnh', 'Bình Tân', 28.75, 29.25, 30),
(106, 'THPT Bình Hưng Hòa', 'Bình Tân', 28.75, 29, 29),
(107, 'THPT Bình Tân', 'Bình Tân', 25, 25.25, 25.25),
(108, 'THPT An Lạc', 'Bình Tân', 25, 25.75, 25.75);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `search_score_2020`
--
ALTER TABLE `search_score_2020`
  ADD PRIMARY KEY (`STT`,`TÊN TRƯỜNG`,`TÊN QUẬN`,`ĐIỂM NV1`,`ĐIỂM NV2`,`ĐIỂM NV3`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



