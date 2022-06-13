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
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `STT` int(25) NOT NULL,
  `TÊN TRƯỜNG` varchar(250) NOT NULL,
  `TRANG CHÍNH` varchar(250) NOT NULL,
  `TRANG CHÍNH MT` varchar(50) NOT NULL,
  `FANPAGE` varchar(250) NOT NULL,
  `FANPAGE MT` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`STT`, `TÊN TRƯỜNG`, `TRANG CHÍNH`, `TRANG CHÍNH MT`, `FANPAGE`, `FANPAGE MT`) VALUES
(1, 'THPT Bùi Thị Xuân', 'https://thptbuithixuan.hcm.edu.vn', '…', '', '…'),
(2, 'THPT Chuyên Trần Đại Nghĩa', 'http://trandainghia.edu.vn/', '', '', ''),
(3, 'THPT Lương Thế Vinh', 'https://thptluongthevinh.hcm.edu.vn/', '', '', ''),
(4, 'THPT Năng Khiếu TDTT', 'https://thptnangkhieutdtt.hcm.edu.vn', '', '', ''),
(5, 'THPT Ten Lơ Man', 'https://thpttenloman.hcm.edu.vn', '', '', ''),
(6, 'THPT Trưng Vương', 'https://thpttrungvuong.hcm.edu.vn', '', '', ''),
(7, 'THPT Thủ Thiêm', 'https://thptthuthiem.hcm.edu.vn', '', '', ''),
(8, 'THPT Giồng Ông Tố', 'https://thptgiongongto.hcm.edu.vn', '', '', ''),
(9, 'THPT Lê Quí Đôn', 'https://www.thpt-lequydon-hcm.edu.vn/', '', '', ''),
(10, 'THPT Marie Curie', 'https://thptmariecurie.hcm.edu.vn', '', '', ''),
(11, 'THPT Lê Thị Hồng Gấm', 'https://thptlethihonggam.hcm.edu.vn', '', '', ''),
(12, 'THPT Nguyễn Thị Diệu', 'https://thptnguyenthidieu.hcm.edu.vn/', '', '', ''),
(13, 'THPT Nguyễn Thị Minh Khai', 'https://thptnguyenthiminhkhai.hcm.edu.vn', '', '', ''),
(14, 'THPT Nguyễn Hữu Thọ', 'https://thptnguyenhuutho.hcm.edu.vn', '', '', ''),
(15, 'THPT Nguyễn Trãi', 'https://thptnguyentrai.hcm.edu.vn', '', '', ''),
(16, 'THPT Trần Hữu Trang', 'https://thpttranhuutrang.hcm.edu.vn', '', '', ''),
(17, 'THPT Trần Khai Nguyên', 'https://thpttrankhainguyen.hcm.edu.vn', '', '', ''),
(18, 'TH Thực Hành ĐHSP', 'http://trunghocthuchanhdhsp.edu.vn/', '', '', ''),
(19, 'Trung Học Thực Hành Sài Gòn', 'http://thuchanhsaigon.edu.vn/', '', '', ''),
(20, 'THPT Hùng Vương', 'https://thpthungvuong.hcm.edu.vn', '', '', ''),
(21, 'THPT Chuyên Lê Hồng Phong', 'https://www.thpt-lehongphong-tphcm.edu.vn/', '', '', ''),
(22, 'PT Năng Khiếu Đại Học Quốc Gia', 'http://www.ptnk.edu.vn/', '', '', ''),
(23, 'THPT Bình Phú', 'https://thptbinhphuhcm.edu.vn/', '', '', ''),
(24, 'THPT Nguyễn Tất Thành', 'https://thptnguyentatthanh.hcm.edu.vn/', '', '', ''),
(25, 'THPT Mạc Đĩnh Chi', 'https://thptmacdinhchi.hcm.edu.vn/', '', '', ''),
(26, 'Trường THPT Phạm Phú Thứ', 'https://thptphamphuthu.hcm.edu.vn', '', '', ''),
(27, 'THPT Tân Phong', 'https://thpttanphong.hcm.edu.vn', '', '', ''),
(28, 'THPT Nam Sài Gòn', 'https://thptnamsaigon.hcm.edu.vn', '', '', ''),
(29, 'THPT Ngô Quyền', 'https://thptngoquyen.hcm.edu.vn/', '', '', ''),
(30, 'THPT Lê Thánh Tôn', 'https://thptlethanhton.hcm.edu.vn', '', '', ''),
(31, 'THPT Năng khiếu TDTT Nguyễn Thị Định', 'http://thptnknguyenthidinh.edu.vn/', '', '', ''),
(32, 'THPT Ngô Gia Tự', 'https://thptngogiatu.hcm.edu.vn', '', '', ''),
(33, 'THPT Lương Văn Can', 'https://thptluongvancan.hcm.edu.vn', '', '', ''),
(34, 'THPT Nguyễn Văn Linh', 'https://thptnguyenvanlinh.hcm.edu.vn', '', '', ''),
(35, 'THPT Tạ Quang Bửu', 'https://thpttaquangbuu.hcm.edu.vn', '', '', ''),
(36, 'THPT Võ Văn Kiệt', 'https://thptvovankiet.hcm.edu.vn', '', '', ''),
(37, 'THPT Nguyễn Văn Tăng', 'https://thptnguyenvantang.hcm.edu.vn/', '', '', ''),
(38, 'THPT Phước Long', 'https://thptphuoclong.hcm.edu.vn', '', '', ''),
(39, 'THPT Long Trường', 'https://thptlongtruong.hcm.edu.vn/', '', '', ''),
(40, 'THPT Nguyễn Huệ', 'https://thptnguyenhue.hcm.edu.vn/', '', '', ''),
(41, 'THPT Nguyễn An Ninh', 'http://www.thptnan.com/', '', '', ''),
(42, 'THPT Nguyễn Du', 'https://thptnguyendu.hcm.edu.vn', '', '', ''),
(43, 'THPT Nguyễn Khuyến', 'https://thptnguyenkhuyen.hcm.edu.vn', '', '', ''),
(44, 'THPT Diên Hồng', 'https://thptdienhong.hcm.edu.vn', '', '', ''),
(45, 'THPT SƯƠNG NGUYỆT ANH', 'https://thptsuongnguyetanh.hcm.edu.vn', '', '', ''),
(46, 'THPT Trần Quang Khải', 'https://thpttranquangkhai.hcm.edu.vn', '', '', ''),
(47, 'THPT Nguyễn Hiền', 'https://thptnguyenhien.hcm.edu.vn/', '', '', ''),
(48, 'THPT Nam Kỳ Khởi Nghĩa', 'https://thptnamkykhoinghia.hcm.edu.vn', '', '', ''),
(49, 'THPT Trường Chinh', 'https://thpttruongchinh.hcm.edu.vn', '', '', ''),
(50, 'THPT Võ Trường Toản', 'https://votruongtoanq12hcm.edu.vn/', '', '', ''),
(51, 'THPT Thạnh Lộc', 'https://thpt-thanhloc-tphcm.edu.vn/', '', '', ''),
(52, 'THPT Thanh Đa', 'http://www.thptthanhda.edu.vn/', '', '', ''),
(53, 'THPT Phan Đăng Lưu', 'https://thptphandangluu.hcm.edu.vn', '', '', ''),
(54, 'THPT Võ Thị Sáu', 'https://thptvothisau.hcm.edu.vn', '', '', ''),
(55, 'THPT Trần Văn Giàu', 'https://thpttranvangiau.hcm.edu.vn', '', '', ''),
(56, 'THPT Gia Định', 'https://thptgiadinh.hcm.edu.vn', '', '', ''),
(57, 'THPT Hoàng Hoa Thám', 'https://thpthoanghoatham.hcm.edu.vn/', '', '', ''),
(58, 'THPT Gò Vấp', 'https://thptgovap.hcm.edu.vn', '', '', ''),
(59, 'THPT Nguyễn Công Trứ', 'https://thptnguyencongtru.hcm.edu.vn', '', '', ''),
(60, 'THPT Nguyễn Trung Trực', 'https://thptnguyentrungtruc.hcm.edu.vn', '', '', ''),
(61, 'THPT Trần Hưng Đạo', 'https://thpttranhungdao.hcm.edu.vn', '', '', ''),
(62, 'THPT Quốc Tế Việt Úc', 'http://sic.edu.vn/', '', '', ''),
(63, 'THPT Phú Nhuận', 'https://thptphunhuan.hcm.edu.vn/', '', '', ''),
(64, 'THPT Hàn Thuyên', 'https://thpthanthuyen.hcm.edu.vn', '', '', ''),
(65, 'THPT Nguyễn Chí Thanh', 'https://www.thpt-nguyenchithanh-tphcm.edu.vn/', '', '', ''),
(66, 'THPT Nguyễn Thái Bình', 'https://thptnguyenthaibinh.hcm.edu.vn', '', '', ''),
(67, 'THPT Nguyễn Thượng Hiền', 'https://thptnguyenthuonghien.hcm.edu.vn', '', '', ''),
(68, 'THPT Lý Tự Trọng', 'https://thptlytutrong.hcm.edu.vn', '', '', ''),
(69, 'THPT Thủ Khoa Huân', 'https://thptthukhoahuan.hcm.edu.vn', '', '', ''),
(70, 'THPT Tam Phú', 'https://thpttamphu.hcm.edu.vn/', '', '', ''),
(71, 'THPT Thủ Đức', 'https://thptthuduc.hcm.edu.vn', '', '', ''),
(72, 'THPT Linh Trung', 'https://thptlinhtrung.hcm.edu.vn', '', '', ''),
(73, 'THPT Nguyễn Hữu Huân', 'http://thptnguyenhuuhuan.edu.vn/', 'Trường được thành lập vào năm 1962-1963,..', 'https://www.facebook.com/truongthptNguyenHuuHuan/', 'Là một trong top 10 trường có chất lượng..'),
(74, 'THPT Hiệp Bình', 'https://thpthiepbinh.hcm.edu.vn', '', '', ''),
(75, 'THPT Đào Sơn Tây', 'https://thptdaosontay.hcm.edu.vn', '', '', ''),
(76, 'THPT Dương Văn Thì', 'https://thptduongvanthi.hcm.edu.vn', '', '', ''),
(77, 'Trường Phổ Thông Năng Khiếu Thể Thao Olympic', 'https://nkttolympic.hcm.edu.vn', '', '', ''),
(78, 'THPT Bình Chiểu', 'https://thptbinhchieu.hcm.edu.vn', '', '', ''),
(79, 'THPT Bình Chánh', 'https://thptbinhchanh.hcm.edu.vn/', '', '', ''),
(80, 'THPT Lê Minh Xuân', 'http://thptleminhxuan.edu.vn/', '', '', ''),
(81, 'THPT ĐA PHƯỚC', 'http://thptdaphuoc.com/', '', '', ''),
(82, 'Trường THPT Năng khiếu TDTT Huyện Bình Chánh', 'https://thptnangkhieutdttbinhchanh.hcm.edu.vn', '', '', ''),
(83, 'THPT Tân Túc', 'https://thpttantuc.hcm.edu.vn', '', '', ''),
(84, 'THPT Vĩnh Lộc B', 'https://thptvinhlocb.hcm.edu.vn', '', '', ''),
(85, 'THCS-THPT Thạnh An', 'https://thcs-thptthanhan.hcm.edu.vn', '', '', ''),
(86, 'THPT An Nghĩa', 'https://thptannghia.hcm.edu.vn', '', '', ''),
(87, 'THPT Cần Thạnh', 'https://thptcanthanh.hcm.edu.vn', '', '', ''),
(88, 'THPT Bình Khánh', 'https://thptbinhkhanh.hcm.edu.vn', '', '', ''),
(89, 'THPT Củ Chi', 'https://thptcuchi.hcm.edu.vn', '', '', ''),
(90, 'THPT An Nhơn Tây', 'https://thptannhontay.hcm.edu.vn', '', '', ''),
(91, 'THPT Trung Lập', 'https://thpttrunglap.hcm.edu.vn/', '', '', ''),
(92, 'THPT Trung Phú', 'https://thpttrungphu.hcm.edu.vn', '', '', ''),
(93, 'THPT Tân Thông Hội', 'https://thpttanthonghoi.hcm.edu.vn', '', '', ''),
(94, 'THPT Quang Trung', 'https://thptquangtrung.hcm.edu.vn', '', '', ''),
(95, 'THPT Phú Hòa', 'https://thptphuhoa.hcm.edu.vn', '', '', ''),
(96, 'THPT Phạm Văn Sáng', 'https://thptphamvansang.hcm.edu.vn/', '', '', ''),
(97, 'THPT Nguyễn Văn Cừ', 'http://thpt-nvc.edu.vn/', '', '', ''),
(98, 'THPT Bà Điểm', 'https://thptbadiem.hcm.edu.vn', '', '', ''),
(99, 'THPT Hồ Thị Bi', 'https://thpthothibi.hcm.edu.vn/homegd2', '', '', ''),
(100, 'THPT Lý Thường Kiệt', 'https://thptlythuongkiet.hcm.edu.vn/', '', '', ''),
(101, 'THPT Nguyễn Hữu Tiến', 'https://thpt-nguyenhuutien-tphcm.edu.vn/', '', '', ''),
(102, 'THPT Nguyễn Hữu Cầu', 'https://thptnguyenhuucau.hcm.edu.vn', '', '', ''),
(103, 'THPT Long Thới', 'https://thptlongthoi.hcm.edu.vn', '', '', ''),
(104, 'THPT Dương Văn Dương', 'https://thptduongvanduong.hcm.edu.vn', '', '', ''),
(105, 'THPT Phước Kiển', 'https://thptphuockien.hcm.edu.vn', '', '', ''),
(106, 'THPT Tân Bình', 'https://thpttanbinh.hcm.edu.vn', '', '', ''),
(107, 'THPT Trần Phú', 'https://thpt-tranphu-tphcm.edu.vn/', '', '', ''),
(108, 'THPT Tây Thạnh', 'https://thpttaythanh.hcm.edu.vn', '', '', ''),
(109, 'Trường THPT Lê Trọng Tấn', 'https://thptletrongtan.hcm.edu.vn', '', '', ''),
(110, 'THPT Nguyễn Hữu Cảnh', 'https://thptnguyenhuucanh.hcm.edu.vn/', '', '', ''),
(111, 'THPT An Lạc', 'https://thptanlac.hcm.edu.vn/', '', '', ''),
(112, 'THPT Bình Hưng Hòa', 'https://thptbinhhunghoa.hcm.edu.vn', '', '', ''),
(113, 'THPT Bình Tân', 'https://thptbinhtan.hcm.edu.vn', '', '', ''),
(114, 'THPT Vĩnh Lộc', 'https://thptvinhloc.hcm.edu.vn', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`STT`,`TÊN TRƯỜNG`,`TRANG CHÍNH`,`FANPAGE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



