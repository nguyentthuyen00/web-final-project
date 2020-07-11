-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th7 11, 2020 lúc 09:18 AM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web-final-project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '123abc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `exam`
--

DROP TABLE IF EXISTS `exam`;
CREATE TABLE IF NOT EXISTS `exam` (
  `IdExam` int(4) NOT NULL AUTO_INCREMENT,
  `NameExam` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Link` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `IdSubject` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`IdExam`),
  KEY `IdSubject` (`IdSubject`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `exam`
--

INSERT INTO `exam` (`IdExam`, `NameExam`, `Link`, `IdSubject`) VALUES
(2, 'Bộ câu hỏi ôn thi', 'https://drive.google.com/file/d/1n5cFHoqUmpzbSM6q7HaVw73jlbwzomyI/view', 'HCM'),
(3, 'Đề cương Cuối kì', 'https://drive.google.com/file/d/1fvoSrZNGEtVtke69NPn8Cl-j_vF8JuCF/view', 'HCM'),
(7, 'Slide training Giữa kì 1 năm 2017-2018', 'https://drive.google.com/file/d/1pci-D-JF9K9lgrio9R0fD7YbbaYVGKL1/view', 'NMMMT'),
(8, 'Slide ôn tập Cuối kì phần Chia IP', 'https://drive.google.com/file/d/1ox3hFAzArWC7J-rfnAG1dMP9tQELtziD/view', 'NMMMT'),
(9, 'Slide ôn tập Cuối kì phần Data Link', 'https://drive.google.com/file/d/1hh22Qzk3CXBHuwRKhgmKtowh4s1iJbg-/view', 'NMMMT'),
(10, 'Slide ôn tập Cuối kì phần Network', 'https://drive.google.com/file/d/18h7w7TePnsdqdV_oQlXpFBw3GmKTIDoX/view', 'NMMMT'),
(11, 'Đề Thi Cuối Kì 2015-2016 ', 'https://drive.google.com/file/d/1hZQjkf7jfid7Nxlne1aIAPgr_SFJ7uiP/view', 'CTRR'),
(12, 'Đề Thi Cuối Kì 2014-2015 ', 'https://drive.google.com/file/d/1-vekRsFISldqdWmsBsf7h9yzYiz_MvPc/view', 'CTRR'),
(13, 'Đề Thi Cuối Kì 2013-2014 ', 'https://drive.google.com/file/d/1z0IrgVGin_QxGQr1w9qRB0VBjECUdipf/view', 'CTRR'),
(14, 'Đề thi Cuối kì 2016-2017', 'https://drive.google.com/file/d/1RlMHlrCXoh-sJKAq8IYjG8tQTzl__5b8/view', 'CTRR'),
(15, 'Đề Thi Giữa Kì 2015-2016\r\n', 'https://drive.google.com/file/d/16kN6RJ87_wm4joF3_rKy3sbxnX8aleML/view', 'CTRR'),
(16, 'Đề thi cuối kỳ 2016-2017 (HKII) ', 'https://drive.google.com/file/d/168mueskgfvWLkvwKOwaiQIRG2r2vWFCy/view', 'XSTK'),
(17, 'Nội dung ôn thi và đề mẫu cuối HK2, 2016-2017', 'https://drive.google.com/file/d/1WVPyqnOrZg3MD4-XorlFK0LUNp-E0F40/view', 'XSTK'),
(18, 'Đề thi giữa kỳ HKI 2016-2017 ', 'https://drive.google.com/file/d/1z-kVwb5p9HHbIjnt376K2vdQT4Y3bqk9/view', 'CSDL'),
(19, 'Đề thi cuối kỳ HKI 2014-2015', 'https://drive.google.com/file/d/1qXT5uIdoPPDTWkPvT8KVcJ1O34iyCVXA/view', 'CSDL'),
(23, 'Training Cuối kì khoa CNPM 2019-2020', 'https://drive.google.com/file/d/1T_06I10fjBjt5j8OxeZGhGhaY6_t9QkA/view?fbclid=IwAR2M9w9AF_wdDLE7IPsRvFwF8AuczNLVAsZVYZFM0nW0TMq94IHP42jgEC4', 'NMLT'),
(28, 'Slide training Giữa kì 2018 - 2019', 'https://drive.google.com/file/d/1nN3L8LUnB91ZNH8U0bincsRP1yU0pwbI/view?fbclid=IwAR1JNHVFLSj7byqnk68ycUUcXCwKsN6LPpHoKQ_viuA88YSS_watQTOXY3I', 'CTDLVGT'),
(30, 'Ngân hàng câu hỏi của UTE', 'https://drive.google.com/file/d/1EaFGMHhGHEjBhfxu2ovXAWWeB7xGnM5h/view?fbclid=IwAR16c_Fa_sbLecS3zRMdAPLiKOUViWlPyFLjUN8EuunwvWCVeGrrc8LBFwU', 'PLDC'),
(31, 'Đề thi Cuối kì I 2018 - 2019', 'https://drive.google.com/file/d/11APZamX8XQ7CU-8MEtp16DCrX9xrZaYU/view', 'GTN'),
(32, 'Đề thi Cuối kì I 2019 - 2020', 'https://drive.google.com/file/d/1E746ouOOX3UhRX9OJpqcdjKVIPHVcif-/view', 'GTN'),
(33, 'Đề thi Cuối kì I 2017-2018', 'https://drive.google.com/file/d/1UV7GcPD2gtQM26VwHNHBL0fzJTz_53Dt/view', 'LTHDT'),
(35, 'Đề thi Cuối kì I 2018 - 2019', 'https://drive.google.com/file/d/1e9QKX13U9PvruIgexs9IpVKCoIJ34PXK/view', 'LTHDT'),
(36, 'Đề thi Cuối kì II 2017 - 2018', 'https://drive.google.com/file/d/1xr6d3NKBNMkCiXzFqNQzY2q8kC87FBbg/view', 'LTHDT'),
(37, 'Đáp án Đề thi Cuối kì II 2017 - 2018', 'https://drive.google.com/file/d/1d0LjlJIyokxutO_C3cSWK_YdSmK1IktK/view', 'LTHDT'),
(38, 'Đề thi Cuối kì II 2018-2019', 'https://drive.google.com/file/d/1TBH8I92IxhPqWsRiUtXuZ0hDMyKqKsAz/view', 'CTDLVGT'),
(39, 'Đề thi Giữa kì II 2018-2019', 'https://drive.google.com/file/d/1UAB7H0VSPHsdhoYqQRW85n7BR2rVWiqr/view', 'CTDLVGT'),
(40, 'Đề thi Cuối kì I 2018-2019', 'https://drive.google.com/file/d/1Vy9Rj-3lUnFTANa8lPepdKhpT8CzgUkG/view', 'GiaiTich'),
(41, 'Đề thi Cuối kì I 2019-2020', 'https://drive.google.com/file/d/1gklNhPgJXc7dJbDM1urT2Z8uGo2xZGot/view', 'GiaiTich'),
(42, 'Đề thi Giữa kì I 2018-2019', 'https://drive.google.com/file/d/1DSkyDmEZTpEahgg4QJplWfSn5llOqvX1/view', 'GiaiTich'),
(43, 'Đề thi Giữa kì I 2017-2018', 'https://drive.google.com/file/d/1MU4Hb2ELgsviX8fyowfiFCJcBdMsph2V/view', 'DSTT'),
(44, 'Đề thi Giữa kì I 2018-2019', 'https://drive.google.com/file/d/1cHI0qetVLfR8Zr_dORIO2GGwQOqvm-yJ/view', 'DSTT'),
(45, 'Đề thi Cuối kì I 2017-2018', 'https://drive.google.com/file/d/1MTVmWjeRbH9hEB8UWPiMAu7qTmpyMBq9/view', 'DSTT'),
(46, 'Đề thi Cuối kì I 2018-2019', 'https://drive.google.com/file/d/10hHa5uysZTGwxMGJemKuQfzv-SaeuMeF/view', 'DSTT'),
(47, 'Đề thi Cuối kì I 2019 - 2020', 'https://drive.google.com/file/d/1yNaqTrfd8zOZ56QErynsI44LMwiVMaYF/view', 'NMLT'),
(48, 'Đề thi Cuối kì I 2018 - 2019', 'https://drive.google.com/file/d/1yIs9V3jmjL5hAG0P_FzXjOKOxqVRdd99/view', 'NMLT'),
(49, 'Đề thi Cuối kì I 2018 - 2019', 'https://drive.google.com/file/d/1KjpE8ALkvamM6woX4KaGfEVVPlcB9JvH/view', 'CSVN');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `IdSubject` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `NameSubject` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `TypeSubject` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`IdSubject`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `subject`
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
-- Cấu trúc bảng cho bảng `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `IdVideo` int(8) NOT NULL AUTO_INCREMENT,
  `NameVideo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Link` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `Detail` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`IdVideo`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `video`
--

INSERT INTO `video` (`IdVideo`, `NameVideo`, `Link`, `Detail`) VALUES
(1, 'Nhập Môn Lập Trình', 'https://www.youtube.com/embed/HwifdLUvn0I', 'LĐTT Lý thuyết Lưu đồ Thuật toán - Nguyễn Tấn Trần Minh Khang'),
(2, 'Lập Trình Hướng Đối Tượng', 'https://www.youtube.com/embed/ZNss-kQ5bJU', 'Bài học 01 Phần 01 - Nguyễn Tấn Trần Minh Khang'),
(3, 'Đại Số Tuyến Tính', 'https://www.youtube.com/embed/ELzEkU1gCXM', 'Lý thuyết tổng quan về ma trận - Đặng Pete'),
(4, 'Xác Suất Thống Kê', 'https://www.youtube.com/embed/Nn54QK0wdeE\"', 'Tính xác suất bằng định nghĩa - Đặng Pete');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`IdSubject`) REFERENCES `subject` (`IdSubject`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
