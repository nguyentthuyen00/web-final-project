-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 09, 2020 at 03:46 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-final-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

DROP TABLE IF EXISTS `exam`;
CREATE TABLE IF NOT EXISTS `exam` (
  `IdExam` int(4) NOT NULL AUTO_INCREMENT,
  `NameExam` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Link` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `IdSubject` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`IdExam`),
  KEY `IdSubject` (`IdSubject`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`IdExam`, `NameExam`, `Link`, `IdSubject`) VALUES
(1, 'Bài thi Đường lối', 'https://drive.google.com/file/d/1IqiZ-FIoCxGWAcYSRxaa1QPskH6DREXj/view', 'CSVN'),
(2, 'Bài thi Tư tưởng', 'https://drive.google.com/file/d/1n5cFHoqUmpzbSM6q7HaVw73jlbwzomyI/view', 'HCM'),
(3, 'Bài thi MacLeNin', 't', 'maclenin'),
(4, 'Bài thi tư tưởng 2', 'https://drive.google.com/file/d/1fvoSrZNGEtVtke69NPn8Cl-j_vF8JuCF/view', 'HCM');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `IdSubject` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `NameSubject` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `TypeSubject` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`IdSubject`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`IdSubject`, `NameSubject`, `TypeSubject`) VALUES
('ATBMTMDT', 'An Toàn Và Bảo Mật TMĐT', 'Chuyên Ngành Bắt Buộc'),
('CSDL', 'Cơ Sở Dữ Liệu', 'Chuyên Ngành'),
('CSVN', 'Đường lối cách mạng của Đảng CSVN', 'Lý luận chính trị'),
('CTDLVGT', 'Cấu Trúc Dữ Liệu Và Giải Thuật', 'Chuyên Ngành'),
('CTRR', 'Cấu trúc rời rạc', 'Toán - Khoa học tự nhiên'),
('DSTT', 'Đại số tuyến tính', 'Toán - Khoa học tự nhiên'),
('GiaiTich', 'Giải tích', 'Toán - Khoa học tự nhiên'),
('GTN', 'Giới Thiệu Ngành', 'Chuyên Ngành'),
('HCM', 'Tư tưởng Hồ Chí Minh', 'Lý luận chính trị'),
('HDNLDN', 'Hoạch Định Nguồn Lực Doanh Nghiệp', 'Chuyên Ngành Tự Chọn'),
('HHTRQD', 'Hệ Hỗ Trợ Ra Quyết Định', 'Chuyên Ngành Bắt Buộc'),
('HTTTTT', 'Hệ Thống Thanh Toán Trực Tuyến', 'Chuyên Ngành Bắt Buộc'),
('KNNN', 'Kỹ năng nghề nghiệp', 'Môn học khác'),
('KTDL', 'Khai Thác Dữ Liệu', 'Cơ Sở Ngành'),
('KTHDC', 'Kinh Tế Học Đại Cương', 'Cơ Sở Ngành'),
('LTHDT', 'Lập Trình Hướng Đối Tượng', 'Chuyên Ngành'),
('maclenin', 'Những nguyên lý cơ bản của chủ nghĩa Mac-Lenin', 'Lý luận chính trị'),
('MXH', 'Mạng Xã Hội', 'Chuyên Ngành Tự Chọn'),
('NLKT', 'Nguyên Lý Kế Toán', 'Chuyên Ngành Tự Chọn'),
('NMLT', 'Nhập Môn Lập Trình', 'Chuyên Ngành'),
('NMMMT', 'Nhập Môn Mạng Máy Tính', 'Chuyên Ngành'),
('PLDC', 'Pháp luật đại cương', 'Môn học khác'),
('PLTTMDT', 'Pháp Luật Trong TMĐT', 'Chuyên Ngành Bắt Buộc'),
('PTNVDN', 'Phân Tích Thiết Kế Quy Trình Nghiệp Vụ Doanh Nghiệp', 'Cơ Sở Ngành'),
('PTUDW', 'Phát Triển Ứng Dụng Web', 'Cơ Sở Ngành'),
('QLDATMDT', 'Quản Trị Dự Án TMĐT', 'Cơ Sở Ngành'),
('QTBH', 'Quản Trị Bán Hàng', 'Chuyên Ngành Tự Chọn'),
('QTKHNCC', 'Quản Trị Quan Hệ Khách Hàng Và Nhà Cung Cấp', 'Chuyên Ngành Bắt Buộc'),
('QTNL', 'Quản Trị Nhân Lực', 'Chuyên Ngành Tự Chọn'),
('TKHTTMDT', 'Thiết Kế Hệ Thống TMĐT', 'Chuyên Ngành Bắt Buộc'),
('TMDT', 'Thương Mại Điện Tử', 'Cơ Sở Ngành'),
('TTCB', 'Tiếp Thị Căn Bản', 'Cơ Sở Ngành'),
('TTTT', 'Tiếp Thị Trực Tuyến', 'Chuyên Ngành Bắt Buộc'),
('XSTK', 'Xác suất thống kê', 'Toán - Khoa học tự nhiên');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `IdVideo` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `NameVideo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Link` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`IdVideo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`IdSubject`) REFERENCES `subject` (`IdSubject`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
