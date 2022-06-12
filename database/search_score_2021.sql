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
-- Table structure for table `search_score_2021`
--

CREATE TABLE `search_score_2021` (
  `STT` int(11) NOT NULL,
  `TÊN TRƯỜNG` varchar(250) NOT NULL,
  `TÊN QUẬN` varchar(250) NOT NULL,
  `ĐIỂM NV1` float NOT NULL,
  `ĐIỂM NV2` float NOT NULL,
  `ĐIỂM NV3` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search_score_2021`
--

INSERT INTO `search_score_2021` (`STT`, `TÊN TRƯỜNG`, `TÊN QUẬN`, `ĐIỂM NV1`, `ĐIỂM NV2`, `ĐIỂM NV3`) VALUES
(1, 'THPT Trưng Vương', 'Quận 1', 24.1, 24.3, 24.9),
(2, 'THPT Bùi Thị Xuân', 'Quận 1', 24.4, 24.7, 25.2),
(3, 'THPT Len Lơ Man', 'Quận 1', 21.5, 21.7, 21.8),
(4, 'THPT Năng Khiếu TDTT', 'Quận 1', 18, 18.2, 19),
(5, 'THPT Lương Thế Vinh', 'Quận 1', 23.8, 24.2, 24.6),
(6, 'THPT Giồng Ông Tố', 'TP Thủ Đức', 21, 21.4, 21.6),
(7, 'THPT Thủ Thiêm', 'TP Thủ Đức', 18.2, 18.5, 18.7),
(8, 'THPT Lê Quý Đôn', 'Quận 3', 24.4, 24.9, 25.2),
(9, 'THPT Nguyễn Thị Minh Khai', 'Quận 3', 25.3, 25.5, 26),
(10, 'THPT Lê Thị Hồng Gấm', 'Quận 3', 18.5, 19, 19.4),
(11, 'THPT Marie Curie', 'Quận 3', 22.8, 23.2, 23.3),
(12, 'THPT Nguyễn Thị Diệu', 'Quận 3', 20.2, 20.6, 20.8),
(13, 'THPT Nguyễn Trãi', 'Quận 4', 18.1, 18.5, 18.8),
(14, 'THPT Nguyễn Hữu Thọ', 'Quận 4', 20, 20.5, 20.6),
(15, 'TH Thực Hành Sài Gòn', 'Quận 5', 22.9, 23.2, 24),
(16, 'THPT Hùng Vương', 'Quận 5', 21.9, 22, 22.5),
(17, 'TH Thực Hành Đại Học Sư Phạm', 'Quận 5', 25, 25.2, 25.4),
(18, 'THPT Trần Khai Nguyên', 'Quận 5', 23.6, 24, 24.2),
(19, 'THPT Trần Hữu Trang', 'Quận 5', 18.3, 18.7, 19),
(20, 'THPT Mạc Đĩnh Chi', 'Quận 6', 25.2, 25.4, 25.9),
(21, 'THPT Bình Phú', 'Quận 6', 23.6, 23.8, 24.5),
(22, 'THPT Nguyễn Tất Thành', 'Quận 6', 21.1, 21.4, 21.6),
(23, 'THPT Phạm Phú Thứ', 'Quận 6', 20, 20.4, 20.6),
(24, 'THPT Lê Thánh Tôn', 'Quận 7', 22.2, 22.5, 22.7),
(25, 'THPT Tân Phong', 'Quận 7', 18.4, 18.5, 18.8),
(26, 'THPT Ngô Quyền', 'Quận 7', 24.7, 24.8, 25),
(27, 'THPT Nam Sài Gòn', 'Quận 7', 21.8, 22.1, 22.3),
(28, 'THPT Lương Văn Can', 'Quận 8', 18.9, 19.2, 19.6),
(29, 'THPT Ngô Gia Tự', 'Quận 8', 17, 17.3, 17.6),
(30, 'THPT Tạ Quang Bửu', 'Quận 8', 20.7, 21.2, 21.5),
(31, 'THPT Nguyễn Văn Linh', 'Quận 8', 17.4, 17.6, 18),
(32, 'THPT Võ Văn Kiệt', 'Quận 8', 20.4, 20.6, 20.8),
(33, 'THPT Chuyên Năng Khiếu TDTT Nguyễn Thị Định', 'Quận 8', 18, 18.6, 18.7),
(34, 'THPT Nguyễn Huệ', 'TP Thủ Đức', 20.9, 21, 21.3),
(35, 'THPT Phước Long', 'TP Thủ Đức', 20.5, 20.8, 21.4),
(36, 'THPT Long Trường', 'TP Thủ Đức', 17.2, 17.3, 18.2),
(37, 'THPT Nguyễn Văn Tăng', 'TP Thủ Đức', 16.8, 17, 17.7),
(38, 'THPT Tǎng Nhơn Phú A', 'TP Thủ Đức', 19.7, 20, 20.5),
(39, 'THPT Nguyễn Khuyến', 'Quận 10', 21.7, 22, 22.1),
(40, 'THPT Nguyễn Du', 'Quận 10', 23.5, 24.1, 24.5),
(41, 'THPT Nguyễn An Ninh', 'Quận 10', 19.1, 19.3, 19.6),
(42, 'THCS-THPT Diên Hồng', 'Quận 10', 19, 19.2, 20.1),
(43, 'THCS-THPT Sương Nguyệt Anh', 'Quận 10', 18.3, 18.5, 19.3),
(44, 'THPT Nguyễn Hiền', 'Quận 11', 22.4, 22.6, 22.9),
(45, 'THPT Trần Quang Khải', 'Quận 11', 20.4, 20.6, 20.8),
(46, 'THPT Nam Kỳ Khởi Nghĩa', 'Quận 11', 19.4, 19.8, 19.9),
(47, 'THPT Võ Trường Toản', 'Quận 12', 22.9, 23.3, 23.6),
(48, 'THPT Trường Chinh', 'Quận 12', 21, 21.2, 21.8),
(49, 'THPT Thạnh Lộc', 'Quận 12', 20, 20.2, 20.3),
(50, 'THPT Thanh Đa', 'Bình Thạnh', 18.7, 19.2, 19.6),
(51, 'THPT Võ Thị Sáu', 'Bình Thạnh', 23.1, 23.6, 24),
(52, 'THPT Gia Định', 'Bình Thạnh', 25.8, 26.3, 26.8),
(53, 'THPT Phan Đăng Lưu', 'Bình Thạnh', 19.1, 19.4, 19.6),
(54, 'THPT Trần Văn Giàu', 'Bình Thạnh', 19.8, 20.2, 20.7),
(55, 'THPT Hoàng Hoa Thám', 'Bình Thạnh', 22.3, 22.5, 22.7),
(56, 'THPT Gò Vấp', 'Gò Vấp', 20.8, 21.4, 21.9),
(57, 'THPT Nguyễn Công Trứ', 'Gò Vấp', 24, 24.2, 24.5),
(58, 'THPT Trần Hưng Đạo', 'Gò Vấp', 23.3, 23.6, 23.9),
(59, 'THPT Nguyễn Trung Trực', 'Gò Vấp', 20.9, 21.3, 21.5),
(60, 'THPT Phú Nhuận', 'Phú Nhuận', 25.4, 25.7, 26),
(61, 'THPT Hàn Thuyên', 'Phú Nhuận', 19.6, 20.1, 20.4),
(62, 'THPT Tân Bình', 'Tân Bình', 22.8, 23.1, 23.2),
(63, 'THPT Nguyễn Chí Thanh', 'Tân Bình', 22.8, 23, 23.2),
(64, 'THPT Trần Phú', 'Tân Bình', 25.3, 25.4, 26),
(65, 'THPT Nguyễn Thượng Hiền', 'Tân Bình', 26.3, 26.5, 27),
(66, 'THPT Nguyễn Thái Bình', 'Tân Bình', 21.1, 21.5, 21.6),
(67, 'THPT Nguyễn Hữu Huân', 'TP Thủ Đức', 25.9, 26.3, 26.6),
(68, 'THPT Thủ Đức', 'TP Thủ Đức', 24.4, 24.8, 25),
(69, 'THPT Tam Phú', 'TP Thủ Đức', 22, 22.2, 22.4),
(70, 'THPT Hiệp Bình', 'TP Thủ Đức', 19.1, 19.4, 19.7),
(71, 'THPT Đào Sơn Tây', 'TP Thủ Đức', 17.8, 18.1, 18.4),
(72, 'THPT Linh Trung', 'TP Thủ Đức', 20.4, 20.6, 20.9),
(73, 'THPT Bình Chiểu', 'TP Thủ Đức', 18.1, 18.5, 18.8),
(74, 'THPT Bình Chánh', 'Bình Chánh', 17.6, 18, 18.4),
(75, 'THPT Tân Túc', 'Bình Chánh', 18, 18.3, 18.6),
(76, 'THPT Vĩnh Lộc B', 'Bình Chánh', 18.8, 19, 19.8),
(77, 'THPT Năng Khiếu TDTT Bình Chánh', 'Bình Chánh', 17, 17.2, 17.6),
(78, 'THPT Phong Phú', 'Bình Chánh', 15.5, 15.6, 15.8),
(79, 'THPT Lê Minh Xuân', 'Bình Chánh', 18.6, 18.9, 19.2),
(80, 'THPT Đa Phước', 'Bình Chánh', 17, 17.2, 17.8),
(81, 'THCS-THPT Thanh An', 'Cần Giờ', 15, 15.5, 16),
(82, 'THPT Bình Khánh', 'Cần Giờ', 16, 16.5, 17),
(83, 'THPT Cần Thạnh', 'Cần Giờ', 15, 15.5, 16),
(84, 'THPT An Nghĩa', 'Cần Giờ', 15.3, 15.5, 15.8),
(85, 'THPT Củ Chi', 'Củ Chi', 21.8, 22, 22.4),
(86, 'THPT Quang Trung', 'Củ Chi', 19.6, 19.8, 20.4),
(87, 'THPT An Nhơn Tây', 'Củ Chi', 19, 19.2, 19.4),
(88, 'THPT Trung Phú', 'Củ Chi', 20.5, 21, 21.5),
(89, 'THPT Trung Lập', 'Củ Chi', 18.5, 18.8, 19.1),
(90, 'THPT Phú Hòa', 'Củ Chi', 19.2, 19.4, 19.8),
(91, 'THPT Tân Thông Hội', 'Củ Chi', 20.5, 21, 21.4),
(92, 'THPT Nguyễn Hữu Cầu', 'Hóc Môn', 25.1, 25.5, 25.8),
(93, 'THPT Lý Thường Kiệt', 'Hóc Môn', 24.2, 24.5, 24.8),
(94, 'THPT Bà Điểm', 'Hóc Môn', 23, 23.3, 23.5),
(95, 'THPT Nguyễn Văn Cừ', 'Hóc Môn', 20.2, 20.4, 20.8),
(96, 'THPT Nguyễn Hữu Tiến', 'Hóc Môn', 21.7, 22, 22.2),
(97, 'THPT Phạm Văn Sáng', 'Hóc Môn', 21.3, 21.5, 22.2),
(98, 'THPT Hồ Thị Bi', 'Hóc Môn', 21.4, 21.9, 22.4),
(99, 'THPT Long Thới', 'Nhà Bè', 18.9, 19.3, 19.5),
(100, 'THPT Phước Kiển', 'Nhà Bè', 17, 17.3, 17.6),
(101, 'THPT Dương Văn Dương', 'Nhà Bè', 18.8, 19, 19.2),
(102, 'THPT Tây Thạnh', 'Tân Phú', 23.6, 23.9, 24.3),
(103, 'THPT Lê Trọng Tấn', 'Tân Phú', 22.2, 22.5, 22.8),
(104, 'THPT Vĩnh Lộc', 'Bình Tân', 20.3, 20.6, 20.8),
(105, 'THPT Nguyễn Hữu Cảnh', 'Bình Tân', 21.4, 21.9, 22.4),
(106, 'THPT Bình Hưng Hòa', 'Bình Tân', 21.3, 21.6, 21.9),
(107, 'THPT Bình Tân', 'Bình Tân', 19.3, 19.4, 20),
(108, 'THPT An Lạc', 'Bình Tân', 19.8, 20.1, 20.4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `search_score_2021`
--
ALTER TABLE `search_score_2021`
  ADD PRIMARY KEY (`STT`,`TÊN TRƯỜNG`,`TÊN QUẬN`,`ĐIỂM NV1`,`ĐIỂM NV2`,`ĐIỂM NV3`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



