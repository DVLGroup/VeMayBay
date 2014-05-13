-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2014 at 01:26 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbvemaybay`
--

-- --------------------------------------------------------

--
-- Table structure for table `ct_dat_ve`
--

CREATE TABLE IF NOT EXISTS `ct_dat_ve` (
  `ct_dat_ve_id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_kh` varchar(45) COLLATE utf8_estonian_ci NOT NULL,
  `ngay_sinh` date NOT NULL,
  `hang_ve` varchar(45) COLLATE utf8_estonian_ci NOT NULL,
  `hanh_ly_id` int(11) NOT NULL,
  `gio_bay` varchar(50) CHARACTER SET utf8 NOT NULL,
  `hang_bay` varchar(45) COLLATE utf8_estonian_ci NOT NULL,
  `dat_ve_id` varchar(100) COLLATE utf8_estonian_ci NOT NULL,
  `crypt` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ct_dat_ve_id`),
  KEY `dat_ve_id` (`dat_ve_id`),
  KEY `hanh_ly_id` (`hanh_ly_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dat_ve`
--

CREATE TABLE IF NOT EXISTS `dat_ve` (
  `dat_ve_id` varchar(100) COLLATE utf8_estonian_ci NOT NULL,
  `tong_gia` int(11) NOT NULL,
  `dia_diem_di` varchar(45) CHARACTER SET utf8 NOT NULL,
  `dia_diem_den` varchar(45) CHARACTER SET utf8 NOT NULL,
  `ngay_gio_di` date DEFAULT NULL,
  `ngay_gio_ve` date DEFAULT NULL,
  `ho_ten` varchar(45) COLLATE utf8_estonian_ci NOT NULL,
  `so_dt` int(11) NOT NULL,
  `email` varchar(45) COLLATE utf8_estonian_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8_estonian_ci NOT NULL,
  `quoc_gia` varchar(45) COLLATE utf8_estonian_ci NOT NULL,
  `thanh_pho` varchar(45) COLLATE utf8_estonian_ci NOT NULL,
  `thanh_toan_id` int(11) NOT NULL,
  PRIMARY KEY (`dat_ve_id`),
  KEY `thanh_toan_id` (`thanh_toan_id`),
  KEY `dia_diem_di` (`dia_diem_di`),
  KEY `dia_diem_den` (`dia_diem_den`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hanh_ly`
--

CREATE TABLE IF NOT EXISTS `hanh_ly` (
  `hanh_ly_id` int(11) NOT NULL,
  `hanh_ly_name` varchar(50) NOT NULL,
  `hang_bay` varchar(50) NOT NULL,
  `gia_bay` int(11) NOT NULL,
  `gia_hanh_ly` int(11) NOT NULL,
  PRIMARY KEY (`hanh_ly_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hanh_ly`
--

INSERT INTO `hanh_ly` (`hanh_ly_id`, `hanh_ly_name`, `hang_bay`, `gia_bay`, `gia_hanh_ly`) VALUES
(1, 'Mỗi hành khách được mang theo tối đa 20 Kg hành lý', 'VNairlines', 1550000, 0),
(2, 'Mỗi hành khách được mang theo tối đa 30 Kg hành lý', 'VNairlines', 4600000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `san_bay`
--

CREATE TABLE IF NOT EXISTS `san_bay` (
  `san_bay_code` varchar(45) NOT NULL,
  `name` varchar(255) NOT NULL,
  `diadiem` varchar(255) NOT NULL,
  PRIMARY KEY (`san_bay_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `san_bay`
--

INSERT INTO `san_bay` (`san_bay_code`, `name`, `diadiem`) VALUES
('BMV', 'Ban Mê Thuộc', 'Ban Mê Thuộc'),
('CAH', 'Cà Mau', 'Cà Mau'),
('CXR', 'Nha Trang', 'Nha Trang'),
('DAD', 'Đà Nẵng', 'Đà Nẵng'),
('DIN', 'Điện Biên', 'Điện Biên'),
('DLI', 'Đà Lạt', 'Đà Lạt'),
('HAN', 'Nội Bài', 'Hà Nội'),
('HPH', 'Hải Phòng', 'Hải Phòng'),
('HUI', 'Huế', 'Huế'),
('SGN', 'Tân Sơn Nhất', 'Sài Gòn');

-- --------------------------------------------------------

--
-- Table structure for table `thanh_toan`
--

CREATE TABLE IF NOT EXISTS `thanh_toan` (
  `thanh_toan_id` int(11) NOT NULL AUTO_INCREMENT,
  `thanh_toan_name` varchar(50) NOT NULL,
  `mo_ta` varchar(255) NOT NULL,
  PRIMARY KEY (`thanh_toan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `thanh_toan`
--

INSERT INTO `thanh_toan` (`thanh_toan_id`, `thanh_toan_name`, `mo_ta`) VALUES
(1, 'Chuyển Khoản', 'Chuyển khoản vào tài khoản ngân hàng của giám đốc'),
(2, 'Văn Phòng', 'Đến văn phòng của VNA thanh toán'),
(3, 'Tại Nhà', 'Chuyển phát tại nhà trong phạm vi thành phố HCM, phí tùy theo độ dài đường đi.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_level_id` int(11) NOT NULL,
  `user_email` varchar(45) NOT NULL,
  `user_password` varchar(45) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`),
  KEY `user_level_id` (`user_level_id`),
  KEY `user_level_id_2` (`user_level_id`),
  KEY `user_level_id_3` (`user_level_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_level_id`, `user_email`, `user_password`) VALUES
(1, 0, 'vietnt134@gmail.com', 'whatdidyoudo134');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE IF NOT EXISTS `user_level` (
  `user_level_id` int(11) NOT NULL,
  `user_level_name` varchar(45) NOT NULL,
  PRIMARY KEY (`user_level_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`user_level_id`, `user_level_name`) VALUES
(0, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `yeu_cau`
--

CREATE TABLE IF NOT EXISTS `yeu_cau` (
  `yeu_cau_id` int(11) NOT NULL AUTO_INCREMENT,
  `ho_ten` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `so_dt` int(11) NOT NULL,
  `dia_diem_di` varchar(45) NOT NULL,
  `dia_diem_den` varchar(45) NOT NULL,
  `loai_ve` varchar(45) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `ngay_di` date DEFAULT NULL,
  `ngay_di_2` date NOT NULL,
  `ngay_ve` date DEFAULT NULL,
  `ngay_ve_2` date NOT NULL,
  `hang_bay` varchar(255) NOT NULL,
  `gui_qua_mail` int(11) DEFAULT NULL,
  PRIMARY KEY (`yeu_cau_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=39 ;

--
-- Dumping data for table `yeu_cau`
--

INSERT INTO `yeu_cau` (`yeu_cau_id`, `ho_ten`, `email`, `so_dt`, `dia_diem_di`, `dia_diem_den`, `loai_ve`, `so_luong`, `ngay_di`, `ngay_di_2`, `ngay_ve`, `ngay_ve_2`, `hang_bay`, `gui_qua_mail`) VALUES
(1, 'Nguyễn Trung Việt', 'vietnt134@gmail.com', 903676222, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-03', '2014-04-03', '2014-04-03', '2014-04-03', 'VietJetAir/JetStar/VietNam-Airline', 1),
(2, 'Nguyễn Trung Việt', 'vietnt134@gmail.com', 903676222, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-03', '2014-04-05', '2014-04-07', '2014-04-10', 'VietJetAir/VietNam-Airline', NULL),
(3, 'Nguyễn Trung Việt', 'samurai_lonely134@yahoo.com', 903676222, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-03', '2014-04-03', '2014-04-05', '2014-04-06', 'VietJetAir', 1),
(4, 'Lê Trọng Lợi', 'trongloikt192@gmail.com', 988849096, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-03', '2014-04-05', '2014-04-17', '2014-04-18', 'VietJetAir/JetStar', 1),
(5, 'Nguyễn Trung Việt', 'samurai_lonely134@yahoo.com', 903676222, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-09', '2014-04-05', '2014-04-05', '2014-04-05', 'VietJetAir/JetStar/VietNam-Airline', 1),
(6, 'Nguyễn Trung Việt', 'samurai_lonely134@yahoo.com', 903676222, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-12', '2014-04-13', '2014-04-11', '2014-04-11', 'VietJetAir/JetStar/VietNam-Airline', 1),
(7, 'Nguyễn Trung Việt', 'vietnt134@gmail.com', 903676222, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-05', '2014-04-10', '2014-04-06', '2014-04-06', 'VietJetAir/JetStar', 1),
(8, 'Lê Trọng Lợi', 'trongloikt192@gmail.com', 988849096, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-10', '2014-04-10', '2014-04-08', '2014-04-08', 'VietJetAir/JetStar/VietNam-Airline', 1),
(9, 'Lê Trọng Lợi', 'trongloikt192@gmail.com', 988849096, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-10', '2014-04-10', '2014-04-11', '2014-04-12', 'VietJetAir/JetStar/VietNam-Airline', 1),
(10, 'Lê Trọng Lợi', 'trongloikt192@gmail.com', 988849096, 'HoChiMinh', 'HaNoi', '1 chiều', 1, '2014-04-06', '2014-04-06', '2014-04-07', '2014-04-07', 'VietJetAir', NULL),
(11, 'Nguyễn Trung Việt', 'vietnt134@gmail.com', 903676222, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-09', '2014-04-11', '2014-04-11', '2014-04-11', 'VietJetAir/VietNam-Airline', 1),
(12, 'Lê Trọng Lợi', 'trongloikt192@gmail.com', 988849096, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-08', '2014-04-10', '2014-04-10', '2014-04-10', 'VietJetAir', NULL),
(13, 'Lê Trọng Lợi', 'trongloikt192@gmail.com', 988849096, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-07', '2014-04-07', '2014-04-07', '2014-04-07', 'VietJetAir/JetStar/VietNam-Airline', 1),
(14, 'Nguyễn Trung Việt', 'vietnt134@gmail.com', 903676222, 'HoChiMinh', 'HaNoi', '1 chiều', 1, '2014-04-11', '2014-04-12', '2014-04-12', '2014-04-12', 'VietJetAir/JetStar/VietNam-Airline', 1),
(15, 'Nguyễn Trung Việt', 'samurai_lonely134@yahoo.com', 903676222, 'HoChiMinh', 'HaNoi', '1 chiều', 2, '2014-04-07', '2014-04-10', '2014-04-10', '2014-04-10', 'VietJetAir/JetStar', 1),
(16, 'Lâm Chí Thiện', 'Lcthien1992@gmail.com', 942440122, 'HoChiMinh', 'HaNoi', '1 chiều', 2, '2014-04-09', '2014-04-13', '2014-04-13', '2014-04-13', 'VietJetAir', 1),
(17, 'Lâm Chí Thiện', 'Lcthien1992@gmail.com', 942440122, 'HoChiMinh', 'HaNoi', '1 chiều', 2, '2014-04-07', '2014-04-11', '2014-04-11', '2014-04-11', 'VietJetAir/VietNam-Airline', 1),
(18, 'Nguyễn Văn Quyền', 'nguyenvanquyen92@gmail.com', 933820145, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-07', '2014-04-07', '2014-04-07', '2014-04-07', 'VietJetAir/JetStar/VietNam-Airline', 1),
(19, 'Nguyễn Văn Quyền', 'nguyenvanquyen92@gmail.com', 933820145, 'HoChiMinh', 'HaNoi', 'khứ hồi', 2, '2014-04-07', '2014-04-09', '2014-04-09', '2014-04-11', 'VietJetAir', NULL),
(20, 'Nguyễn Văn Quyền', 'nguyenvanquyen92@gmail.com', 933820145, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-10', '2014-04-10', '2014-04-10', '2014-04-10', 'VietJetAir/JetStar/VietNam-Airline', 1),
(21, 'Lê Trọng Lợi', 'trongloikt192@gmail.com', 988849096, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-10', '2014-04-10', '2014-04-10', '2014-04-10', 'VietJetAir/JetStar/VietNam-Airline', 1),
(22, 'Nguyễn Trung Việt', 'vietnt134@gmail.com', 903676222, 'HoChiMinh', 'HaNoi', '1 chiều', 1, '2014-04-11', '2014-04-11', '2014-04-11', '2014-04-11', 'VietJetAir', 1),
(23, 'Nguyễn Trung Việt', 'samurai_lonely134@yahoo.com', 903676222, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-11', '2014-04-11', '2014-04-11', '2014-04-11', 'VietJetAir/JetStar/VietNam-Airline', 1),
(24, 'Nguyễn Trung Việt', 'samurai_lonely134@yahoo.com', 903676222, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-11', '2014-04-11', '2014-04-11', '2014-04-11', 'VietJetAir/JetStar/VietNam-Airline', 1),
(25, 'Nguyễn Trung Việt', 'samurai_lonely134@yahoo.com', 903676222, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-11', '2014-04-11', '2014-04-11', '2014-04-11', 'VietJetAir/JetStar/VietNam-Airline', 1),
(26, 'Nguyễn Trung Việt', 'samurai_lonely134@yahoo.com', 903676222, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-11', '2014-04-11', '2014-04-11', '2014-04-11', 'VietJetAir/JetStar/VietNam-Airline', 1),
(27, 'Nguyễn Trung Việt', 'samurai_lonely134@yahoo.com', 0, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-11', '2014-04-11', '2014-04-11', '2014-04-11', 'VietJetAir/JetStar/VietNam-Airline', 1),
(28, 'Nguyễn Trung Việt', 'samurai_lonely134@yahoo.com', 903676222, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-11', '2014-04-11', '2014-04-11', '2014-04-11', 'VietJetAir/JetStar/VietNam-Airline', 1),
(29, 'Nguyễn Trung Việt', 'samurai_lonely134@yahoo.com', 903676222, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-11', '2014-04-11', '2014-04-11', '2014-04-11', 'VietJetAir/JetStar/VietNam-Airline', 1),
(30, 'Nguyễn Trung Việt', 'samurai_lonely134@yahoo.com', 903676222, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-11', '2014-04-11', '2014-04-11', '2014-04-11', 'VietJetAir', 1),
(31, '', '', 903676222, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-11', '2014-04-11', '2014-04-11', '2014-04-11', 'VietJetAir/JetStar/VietNam-Airline', 1),
(32, 'Nguyễn Trung Việt', '', 0, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-11', '2014-04-11', '2014-04-11', '2014-04-11', 'VietJetAir/JetStar/VietNam-Airline', 1),
(33, 'Nguyễn Trung Việt', 'samurai_lonely134@yahoo.com', 903676222, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-11', '2014-04-11', '2014-04-11', '2014-04-11', 'VietJetAir/JetStar/VietNam-Airline', 1),
(34, 'Nguyễn Văn Quyền', 'nguyenvanquyen92@gmail.com', 933820145, 'HoChiMinh', 'HaNoi', '1 chiều', 2, '2014-04-13', '2014-04-13', '2014-04-13', '2014-04-13', 'VietJetAir', NULL),
(35, 'Nguyễn Trung Việt', 'samurai_lonely134@yahoo.com', 903676222, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-22', '2014-04-22', '2014-04-22', '2014-04-22', 'VietJetAir/VietNam-Airline', 1),
(36, 'Lê Trọng Lợi', 'trongloikt192@gmail.com', 988849096, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-22', '2014-04-22', '2014-04-22', '2014-04-22', 'VietJetAir', 1),
(37, 'Nguyễn Trung Việt', 'vietnt134@gmail.com', 903676222, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-28', '2014-04-29', '2014-04-29', '2014-04-29', 'VietJetAir', 1),
(38, 'Nguyễn Trung Việt', 'samurai_lonely134@yahoo.com', 903676222, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-30', '2014-04-30', '2014-04-30', '2014-04-30', 'VietJetAir/JetStar/VietNam-Airline', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ct_dat_ve`
--
ALTER TABLE `ct_dat_ve`
  ADD CONSTRAINT `ct_dat_ve_ibfk_1` FOREIGN KEY (`dat_ve_id`) REFERENCES `dat_ve` (`dat_ve_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ct_dat_ve_ibfk_2` FOREIGN KEY (`hanh_ly_id`) REFERENCES `hanh_ly` (`hanh_ly_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dat_ve`
--
ALTER TABLE `dat_ve`
  ADD CONSTRAINT `dat_ve_ibfk_1` FOREIGN KEY (`thanh_toan_id`) REFERENCES `thanh_toan` (`thanh_toan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dat_ve_ibfk_2` FOREIGN KEY (`dia_diem_di`) REFERENCES `san_bay` (`san_bay_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dat_ve_ibfk_3` FOREIGN KEY (`dia_diem_den`) REFERENCES `san_bay` (`san_bay_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`user_level_id`) REFERENCES `user_level` (`user_level_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
