-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2014 at 03:06 PM
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
  `ngay_sinh` datetime NOT NULL,
  `hang_ve` varchar(45) COLLATE utf8_estonian_ci NOT NULL,
  `hanh_ly` int(11) NOT NULL,
  `gio_bay` time NOT NULL,
  `hang_bay` varchar(45) COLLATE utf8_estonian_ci NOT NULL,
  `dat_ve_id` int(11) NOT NULL,
  PRIMARY KEY (`ct_dat_ve_id`),
  KEY `dat_ve_id` (`dat_ve_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dat_ve`
--

CREATE TABLE IF NOT EXISTS `dat_ve` (
  `dat_ve_id` int(11) NOT NULL AUTO_INCREMENT,
  `tong_gia` int(11) NOT NULL,
  `dia_diem_di` varchar(45) COLLATE utf8_estonian_ci NOT NULL,
  `dia_diem_den` varchar(45) COLLATE utf8_estonian_ci NOT NULL,
  `ngay_gio_di` datetime DEFAULT NULL,
  `ngay_gio_ve` datetime DEFAULT NULL,
  `ho_ten` varchar(45) COLLATE utf8_estonian_ci NOT NULL,
  `so_dt` int(11) NOT NULL,
  `email` varchar(45) COLLATE utf8_estonian_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8_estonian_ci NOT NULL,
  `quoc_gia` varchar(45) COLLATE utf8_estonian_ci NOT NULL,
  `thanh_pho` varchar(45) COLLATE utf8_estonian_ci NOT NULL,
  PRIMARY KEY (`dat_ve_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=11 ;

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
(10, 'Lê Trọng Lợi', 'trongloikt192@gmail.com', 988849096, 'HoChiMinh', 'HaNoi', '1 chiều', 1, '2014-04-06', '2014-04-06', '2014-04-07', '2014-04-07', 'VietJetAir', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ct_dat_ve`
--
ALTER TABLE `ct_dat_ve`
  ADD CONSTRAINT `ct_dat_ve_ibfk_1` FOREIGN KEY (`dat_ve_id`) REFERENCES `dat_ve` (`dat_ve_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`user_level_id`) REFERENCES `user_level` (`user_level_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
