-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2014 at 08:37 AM
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
-- Table structure for table `chuyen_bay`
--

CREATE TABLE IF NOT EXISTS `chuyen_bay` (
  `chuyen_bay_id` int(11) NOT NULL AUTO_INCREMENT,
  `chuyen_bay_name` varchar(45) NOT NULL,
  `chuyen_bay_ngay` date NOT NULL,
  `chuyen_bay_tg_khoihanh` time NOT NULL,
  `chuyen_bay_tg_dennoi` time NOT NULL,
  `hang_ve_id` int(11) NOT NULL,
  `san_bay_di_id` int(11) NOT NULL,
  `san_bay_den_id` int(11) NOT NULL,
  `hang_may_bay_id` int(11) NOT NULL,
  PRIMARY KEY (`chuyen_bay_id`),
  KEY `san_bay_den_id` (`san_bay_den_id`),
  KEY `san_bay_di_id` (`san_bay_di_id`),
  KEY `hang_ve_id` (`hang_ve_id`),
  KEY `hang_may_bay_id` (`hang_may_bay_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dia_diem`
--

CREATE TABLE IF NOT EXISTS `dia_diem` (
  `dia_diem_id` int(11) NOT NULL AUTO_INCREMENT,
  `dia_diem_name` varchar(45) NOT NULL,
  PRIMARY KEY (`dia_diem_id`),
  KEY `dia_diem_id` (`dia_diem_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hang_may_bay`
--

CREATE TABLE IF NOT EXISTS `hang_may_bay` (
  `hang_may_bay_id` int(11) NOT NULL AUTO_INCREMENT,
  `hang_may_bay_name` varchar(45) NOT NULL,
  PRIMARY KEY (`hang_may_bay_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hang_ve`
--

CREATE TABLE IF NOT EXISTS `hang_ve` (
  `hang_ve_id` int(11) NOT NULL AUTO_INCREMENT,
  `hang_ve_name` varchar(45) NOT NULL,
  PRIMARY KEY (`hang_ve_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `phieu_dat_ve`
--

CREATE TABLE IF NOT EXISTS `phieu_dat_ve` (
  `phieu_dat_ve_id` int(11) NOT NULL AUTO_INCREMENT,
  `phieu_dat_ve_hoten` varchar(45) NOT NULL,
  `phieu_dat_ve_email` varchar(45) NOT NULL,
  `phieu_dat_ve_dthoai` int(11) NOT NULL,
  `phieu_dat_ve_dchi` varchar(100) NOT NULL,
  `phieu_dat_ve_thanhpho` varchar(45) NOT NULL,
  `phieu_dat_ve_quocgia` varchar(45) NOT NULL,
  `thanh_toan_id` int(11) NOT NULL,
  `hang_ve_id` int(11) NOT NULL,
  `chuyen_bay_id` int(11) NOT NULL,
  PRIMARY KEY (`phieu_dat_ve_id`),
  KEY `thanh_toan_id` (`thanh_toan_id`),
  KEY `hang_ve_id` (`hang_ve_id`),
  KEY `chuyen_bay_id` (`chuyen_bay_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `san_bay`
--

CREATE TABLE IF NOT EXISTS `san_bay` (
  `san_bay_id` int(11) NOT NULL AUTO_INCREMENT,
  `san_bay_name` varchar(45) NOT NULL,
  `dia_diem_id` int(11) NOT NULL,
  PRIMARY KEY (`san_bay_id`),
  KEY `dia_diem_id` (`dia_diem_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `thanh_toan`
--

CREATE TABLE IF NOT EXISTS `thanh_toan` (
  `thanh_toan_id` int(11) NOT NULL AUTO_INCREMENT,
  `thanh_toan_name` varchar(45) NOT NULL,
  `thanh_toan_mota` varchar(255) NOT NULL,
  PRIMARY KEY (`thanh_toan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_level_id` int(11) NOT NULL,
  `user_email` varchar(45) NOT NULL,
  `user_pass_hash` varchar(45) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`),
  KEY `user_level_id` (`user_level_id`),
  KEY `user_level_id_2` (`user_level_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_level_id`, `user_email`, `user_pass_hash`) VALUES
(1, 0, 'vietnt134@gmail.com', 'whatdidyoudo134');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE IF NOT EXISTS `user_level` (
  `user_level_id` int(11) NOT NULL,
  `user_level_name` varchar(45) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`user_level_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`user_level_id`, `user_level_name`) VALUES
(0, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `ve`
--

CREATE TABLE IF NOT EXISTS `ve` (
  `hang_ve_id` int(11) NOT NULL,
  `chuyen_bay_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  PRIMARY KEY (`hang_ve_id`,`chuyen_bay_id`),
  KEY `chuyen_bay_id` (`chuyen_bay_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `yeu_cau`
--

CREATE TABLE IF NOT EXISTS `yeu_cau` (
  `yeu_cau_id` int(11) NOT NULL AUTO_INCREMENT,
  `yeu_cau_hoten` varchar(45) NOT NULL,
  `yeu_cau_email` varchar(45) NOT NULL,
  `yeu_cau_dthoai` int(11) NOT NULL,
  `yeu_cau_soluong` int(11) NOT NULL,
  `dia_diem_id` int(11) NOT NULL,
  PRIMARY KEY (`yeu_cau_id`),
  KEY `dia_diem_id` (`dia_diem_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chuyen_bay`
--
ALTER TABLE `chuyen_bay`
  ADD CONSTRAINT `chuyen_bay_ibfk_4` FOREIGN KEY (`hang_may_bay_id`) REFERENCES `hang_may_bay` (`hang_may_bay_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chuyen_bay_ibfk_2` FOREIGN KEY (`san_bay_di_id`) REFERENCES `san_bay` (`san_bay_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chuyen_bay_ibfk_3` FOREIGN KEY (`san_bay_den_id`) REFERENCES `san_bay` (`san_bay_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phieu_dat_ve`
--
ALTER TABLE `phieu_dat_ve`
  ADD CONSTRAINT `phieu_dat_ve_ibfk_3` FOREIGN KEY (`hang_ve_id`) REFERENCES `hang_ve` (`hang_ve_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phieu_dat_ve_ibfk_1` FOREIGN KEY (`thanh_toan_id`) REFERENCES `thanh_toan` (`thanh_toan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phieu_dat_ve_ibfk_2` FOREIGN KEY (`chuyen_bay_id`) REFERENCES `chuyen_bay` (`chuyen_bay_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `san_bay`
--
ALTER TABLE `san_bay`
  ADD CONSTRAINT `san_bay_ibfk_1` FOREIGN KEY (`dia_diem_id`) REFERENCES `dia_diem` (`dia_diem_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`user_level_id`) REFERENCES `user_level` (`user_level_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ve`
--
ALTER TABLE `ve`
  ADD CONSTRAINT `ve_ibfk_2` FOREIGN KEY (`hang_ve_id`) REFERENCES `hang_ve` (`hang_ve_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ve_ibfk_1` FOREIGN KEY (`chuyen_bay_id`) REFERENCES `chuyen_bay` (`chuyen_bay_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `yeu_cau`
--
ALTER TABLE `yeu_cau`
  ADD CONSTRAINT `yeu_cau_ibfk_1` FOREIGN KEY (`dia_diem_id`) REFERENCES `dia_diem` (`dia_diem_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
