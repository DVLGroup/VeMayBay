-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2014 at 12:12 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci AUTO_INCREMENT=97 ;

--
-- Dumping data for table `ct_dat_ve`
--

INSERT INTO `ct_dat_ve` (`ct_dat_ve_id`, `ten_kh`, `ngay_sinh`, `hang_ve`, `hanh_ly_id`, `gio_bay`, `hang_bay`, `dat_ve_id`, `crypt`) VALUES
(1, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '05:30  - 07:30 ', 'VNairlines', '3565370dcd0c7b42', 'VNA#wk+NJTod4wAE88Mew2MQS9uTV9vp68fvZsVLwh5N8QLKHGFB/NjyOGzLfk78MHV1rYtpYW9HK9SsTuZOtim8P3+n6kzxGN4KEdMUuBGnpY/Cj6IRitk60GtoKMyqhnkr'),
(2, 'Tí Béo', '2010-01-01', 'Economy Standard  ', 1, '05:30  - 07:30 ', 'VNairlines', '3565370dcd0c7b42', 'VNA#wk+NJTod4wAE88Mew2MQS9uTV9vp68fvZsVLwh5N8QLKHGFB/NjyOGzLfk78MHV1rYtpYW9HK9SsTuZOtim8P3+n6kzxGN4KEdMUuBGnpY/Cj6IRitk60GtoKMyqhnkr'),
(3, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '3565370dcd0c7b42', 'VNA#U8Nx7QUNiLxx5LLcV6bvA6IbDjYxJ/AG6k5HLgL/fIYEHTuuWlVXSdlIubH4F5MFI086+J0A1iUuGaZy/txhOvJRB/RGrGO2doX63ma3zrTjoWtVElbDOWMiNkTSTcbY'),
(4, 'Tí Béo', '2010-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '3565370dcd0c7b42', 'VNA#U8Nx7QUNiLxx5LLcV6bvA6IbDjYxJ/AG6k5HLgL/fIYEHTuuWlVXSdlIubH4F5MFI086+J0A1iUuGaZy/txhOvJRB/RGrGO2doX63ma3zrTjoWtVElbDOWMiNkTSTcbY'),
(5, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '05:30  - 07:30 ', 'VNairlines', '326675370def4e4984', 'VNA#syzYLrFpagra49pi+rKtEMd9dtTsFYWBhwoWZsdDNV4G9jzg/hxd9W1Bz0/+yyhlnv/TqD4BEmcgSje+L31CEH6wJupPpSxrwGY0jvQgvMwTiAxZrqeIH4b+h2piKiDa'),
(6, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '326675370def4e4984', 'VNA#WR4NBjNQ8euLSy+8ioywAlLEjdXbpvJFMz/tOQNNVgv9zskK7eo96OlgXYpyFlNeaXYm9+4mu7aMuAjHt3g5rkFMLb5ASZGem/fvlrUAe8KSCio5ani00PAraTInpC6q'),
(7, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '05:30  - 07:30 ', 'VNairlines', '266775370e513dc8c2', 'VNA#QRQklmcFsEdHqhhLGFeBFBhYGGtIet1hDpAsJXXTIULh+XQiOF51zbQ91i2h9igG/qQpHqj5pO/2z9USrIEL1smdCv9i+k7KX8WHMKWCInKq8OQAHj1d3Lea/GKXQ/FG'),
(8, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '06:30  - 08:30 ', 'VNairlines', '194425370ef9eefa6a', 'VNA#Zj2JPKutKBD9axpPbv2wNZY/TY4hPQVddOl7ViVDmtjNotC26ygpN5oxbd0vfNLytayhvH0ddYde0hIMukI7dZQV5gHzqUtqJIKvPNzqo/9J5EsnyTDlx7DmjsoPmUon'),
(9, 'Trần Đức', '1920-01-01', 'Economy Standard  ', 1, '06:30  - 08:30 ', 'VNairlines', '194425370ef9eefa6a', 'VNA#Zj2JPKutKBD9axpPbv2wNZY/TY4hPQVddOl7ViVDmtjNotC26ygpN5oxbd0vfNLytayhvH0ddYde0hIMukI7dZQV5gHzqUtqJIKvPNzqo/9J5EsnyTDlx7DmjsoPmUon'),
(10, 'Tí Béo', '2010-01-01', 'Economy Standard  ', 1, '06:30  - 08:30 ', 'VNairlines', '194425370ef9eefa6a', 'VNA#Zj2JPKutKBD9axpPbv2wNZY/TY4hPQVddOl7ViVDmtjNotC26ygpN5oxbd0vfNLytayhvH0ddYde0hIMukI7dZQV5gHzqUtqJIKvPNzqo/9J5EsnyTDlx7DmjsoPmUon'),
(11, 'Minh Béo', '2010-01-01', 'Economy Standard  ', 1, '06:30  - 08:30 ', 'VNairlines', '194425370ef9eefa6a', 'VNA#Zj2JPKutKBD9axpPbv2wNZY/TY4hPQVddOl7ViVDmtjNotC26ygpN5oxbd0vfNLytayhvH0ddYde0hIMukI7dZQV5gHzqUtqJIKvPNzqo/9J5EsnyTDlx7DmjsoPmUon'),
(12, 'Zun', '2014-01-01', 'Economy Standard  ', 1, '06:30  - 08:30 ', 'VNairlines', '194425370ef9eefa6a', 'VNA#Zj2JPKutKBD9axpPbv2wNZY/TY4hPQVddOl7ViVDmtjNotC26ygpN5oxbd0vfNLytayhvH0ddYde0hIMukI7dZQV5gHzqUtqJIKvPNzqo/9J5EsnyTDlx7DmjsoPmUon'),
(13, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '194425370ef9eefa6a', 'VNA#p58ILCmUH7mpjI4tT4M0piESt3y4zeS56hc3n99/3eI8+L+rRfoawDfBfsn8ijvibIjcpe157G+92aylR4OyCZl7roy13sOUKJgG65qorHmHsdYKFgVGZDbZ3DA7dEp7'),
(14, 'Trần Đức', '1920-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '194425370ef9eefa6a', 'VNA#p58ILCmUH7mpjI4tT4M0piESt3y4zeS56hc3n99/3eI8+L+rRfoawDfBfsn8ijvibIjcpe157G+92aylR4OyCZl7roy13sOUKJgG65qorHmHsdYKFgVGZDbZ3DA7dEp7'),
(15, 'Tí Béo', '2010-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '194425370ef9eefa6a', 'VNA#p58ILCmUH7mpjI4tT4M0piESt3y4zeS56hc3n99/3eI8+L+rRfoawDfBfsn8ijvibIjcpe157G+92aylR4OyCZl7roy13sOUKJgG65qorHmHsdYKFgVGZDbZ3DA7dEp7'),
(16, 'Minh Béo', '2010-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '194425370ef9eefa6a', 'VNA#p58ILCmUH7mpjI4tT4M0piESt3y4zeS56hc3n99/3eI8+L+rRfoawDfBfsn8ijvibIjcpe157G+92aylR4OyCZl7roy13sOUKJgG65qorHmHsdYKFgVGZDbZ3DA7dEp7'),
(17, 'Zun', '2014-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '194425370ef9eefa6a', 'VNA#p58ILCmUH7mpjI4tT4M0piESt3y4zeS56hc3n99/3eI8+L+rRfoawDfBfsn8ijvibIjcpe157G+92aylR4OyCZl7roy13sOUKJgG65qorHmHsdYKFgVGZDbZ3DA7dEp7'),
(18, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '06:30  - 08:30 ', 'VNairlines', '99625370f2836a62b', 'VNA#5UbzfaU56I6+iUuiV7YdgAu8uahwiKkeYEAeWFPbnlr3BAlPI7ywCxk6+xC/pRU3sqzg/80LO3humjTETvJBrNjgjR3y14exppISjMHNVvrz1hx0MysK2uL74dcSCYQC'),
(19, 'Nguyễn Việt', '1920-01-01', 'Super Saver', 1, '21:55  - 23:55 ', 'VNairlines', '99625370f2836a62b', 'VNA#2lz0Rv5Dc+DsKHjoVkmmUlhrMCQMlKCf6N1xaCZAL9XBYEOAx1G3bQ3oj5A6nxjhachaeFi7huLAmuYBR3PeDHLm2rpnyGEARBszexhD2C5/ONpsAVlYoXlU1YYoawxK'),
(20, 'Lê Lợi', '1992-04-11', 'Business Flex', 2, '07:10  - 09:10 ', 'VNairlines', '169635370f6d91247d', 'VNA#I4lFuv9LmAI+OSi5l2pwptLKyZT3lbdUqYzgLmLbf3FetFb3lRP45PBvS/2eg37bRvp22FumK5Msie+cfcywBfUS0Tet9OWliKOxUDJmolYPVY2LkhOI25zNmduRjL4K'),
(21, 'Lê Lợi', '1992-04-11', 'Business Flex', 2, '08:30  - 10:30 ', 'VNairlines', '169635370f6d91247d', 'VNA#39qLzmo2o7I2RDvZhJ80lvZb7kMaCQe1j0vi/7Z8OzQmbQzNFQeS3J8RQX57C1+6HzBF4+4Xgc5HVyPLmlB6xS/t7Wf+mK/Rd43aFEk0FweooG69Wbrl0IAX4fVucO0P'),
(22, 'Nguyễn Việt', '1920-01-01', 'Economy Flex  ', 1, '20:20  - 22:20 ', 'VNairlines', '214355371966f6666f', 'VNA#IDoP0m+5ljzXAMK4n7xAXcI5LaSp4wccXhMgS1QI3JIyXqLMP/mxl4C5Zy6tW2sN9vxAwx+bYo2qoJ4M2otyg/Dhp9gFh67nNrBE6qQSTnm8kGcD5vSusPM172NoKY7q'),
(23, 'Trần Đức', '1920-01-01', 'Economy Flex  ', 1, '20:20  - 22:20 ', 'VNairlines', '214355371966f6666f', 'VNA#IDoP0m+5ljzXAMK4n7xAXcI5LaSp4wccXhMgS1QI3JIyXqLMP/mxl4C5Zy6tW2sN9vxAwx+bYo2qoJ4M2otyg/Dhp9gFh67nNrBE6qQSTnm8kGcD5vSusPM172NoKY7q'),
(24, 'Tí Béo', '2010-01-01', 'Economy Flex  ', 1, '20:20  - 22:20 ', 'VNairlines', '214355371966f6666f', 'VNA#IDoP0m+5ljzXAMK4n7xAXcI5LaSp4wccXhMgS1QI3JIyXqLMP/mxl4C5Zy6tW2sN9vxAwx+bYo2qoJ4M2otyg/Dhp9gFh67nNrBE6qQSTnm8kGcD5vSusPM172NoKY7q'),
(25, 'Zun', '2014-01-01', 'Economy Flex  ', 1, '20:20  - 22:20 ', 'VNairlines', '214355371966f6666f', 'VNA#IDoP0m+5ljzXAMK4n7xAXcI5LaSp4wccXhMgS1QI3JIyXqLMP/mxl4C5Zy6tW2sN9vxAwx+bYo2qoJ4M2otyg/Dhp9gFh67nNrBE6qQSTnm8kGcD5vSusPM172NoKY7q'),
(26, 'Nguyễn Việt', '1920-01-01', 'Economy Flex  ', 1, '17:30  - 19:30 ', 'VNairlines', '214355371966f6666f', 'VNA#Z7p/LV8gxYZnlcq2wndDKqdtqg2tmirkmNJPHw/keTun+9LXsAgr/5EI6cCG0+X8KUwxvR0489PESVBqNsHn0YCQjpQXgmPooIbRhLoFQTzLeIVWk7c71BKGJYDF+GVw'),
(27, 'Trần Đức', '1920-01-01', 'Economy Flex  ', 1, '17:30  - 19:30 ', 'VNairlines', '214355371966f6666f', 'VNA#Z7p/LV8gxYZnlcq2wndDKqdtqg2tmirkmNJPHw/keTun+9LXsAgr/5EI6cCG0+X8KUwxvR0489PESVBqNsHn0YCQjpQXgmPooIbRhLoFQTzLeIVWk7c71BKGJYDF+GVw'),
(28, 'Tí Béo', '2010-01-01', 'Economy Flex  ', 1, '17:30  - 19:30 ', 'VNairlines', '214355371966f6666f', 'VNA#Z7p/LV8gxYZnlcq2wndDKqdtqg2tmirkmNJPHw/keTun+9LXsAgr/5EI6cCG0+X8KUwxvR0489PESVBqNsHn0YCQjpQXgmPooIbRhLoFQTzLeIVWk7c71BKGJYDF+GVw'),
(29, 'Zun', '2014-01-01', 'Economy Flex  ', 1, '17:30  - 19:30 ', 'VNairlines', '214355371966f6666f', 'VNA#Z7p/LV8gxYZnlcq2wndDKqdtqg2tmirkmNJPHw/keTun+9LXsAgr/5EI6cCG0+X8KUwxvR0489PESVBqNsHn0YCQjpQXgmPooIbRhLoFQTzLeIVWk7c71BKGJYDF+GVw'),
(30, 'Nguyễn Việt', '1920-01-01', 'Economy Save  ', 1, '21:30  - 23:30 ', 'VNairlines', '27865537221145d630', 'VNA#IMfc7tgKxNH+WcIXI7e7AlbY6aKWZV/XpI1OTpgkp/doaGQmiD86DFrg816NnGs+aZ6lA4mDtbiCXb/m22g3kYBQ7+IN+LGIuId9EoeVBCqasJzDF8Jo/Za0WjZ8Q+7a'),
(31, 'Trần Đức', '1920-01-01', 'Economy Save  ', 1, '21:30  - 23:30 ', 'VNairlines', '27865537221145d630', 'VNA#IMfc7tgKxNH+WcIXI7e7AlbY6aKWZV/XpI1OTpgkp/doaGQmiD86DFrg816NnGs+aZ6lA4mDtbiCXb/m22g3kYBQ7+IN+LGIuId9EoeVBCqasJzDF8Jo/Za0WjZ8Q+7a'),
(32, 'Tí Béo', '2010-01-01', 'Economy Save  ', 1, '21:30  - 23:30 ', 'VNairlines', '27865537221145d630', 'VNA#IMfc7tgKxNH+WcIXI7e7AlbY6aKWZV/XpI1OTpgkp/doaGQmiD86DFrg816NnGs+aZ6lA4mDtbiCXb/m22g3kYBQ7+IN+LGIuId9EoeVBCqasJzDF8Jo/Za0WjZ8Q+7a'),
(33, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '19:30  - 21:30 ', 'VNairlines', '27865537221145d630', 'VNA#lzuq7ml/ZwyNS2QLUAHbR+/0Yj+ILboGOsudpN7/F1Y9ot7gO2uWIUn8NrZmUnFJXiSALom8LQD+HFfC7LEJt8MZjQIzf3Krc2BMITvvIu61VKeYZB7l66fCyWhxtXlN'),
(34, 'Trần Đức', '1920-01-01', 'Economy Standard  ', 1, '19:30  - 21:30 ', 'VNairlines', '27865537221145d630', 'VNA#lzuq7ml/ZwyNS2QLUAHbR+/0Yj+ILboGOsudpN7/F1Y9ot7gO2uWIUn8NrZmUnFJXiSALom8LQD+HFfC7LEJt8MZjQIzf3Krc2BMITvvIu61VKeYZB7l66fCyWhxtXlN'),
(35, 'Tí Béo', '2010-01-01', 'Economy Standard  ', 1, '19:30  - 21:30 ', 'VNairlines', '27865537221145d630', 'VNA#lzuq7ml/ZwyNS2QLUAHbR+/0Yj+ILboGOsudpN7/F1Y9ot7gO2uWIUn8NrZmUnFJXiSALom8LQD+HFfC7LEJt8MZjQIzf3Krc2BMITvvIu61VKeYZB7l66fCyWhxtXlN'),
(36, 'Nguyễn Việt', '1920-01-01', 'Economy Save  ', 1, '21:30  - 23:30 ', 'VNairlines', '95285372216c23d75', 'VNA#8SZ1qCA1LX84BZiL2W/DckyHpWba9ILuDcpRlV5rtbNOyciOG17jxYeYDMByUVN90x4Nph20MVIL6EIcZbLSwcPL54MXjnlIZzaxGmB5+d4yprJwfuIu+k26HRjOXT4n'),
(37, 'Trần Đức', '1920-01-01', 'Economy Save  ', 1, '21:30  - 23:30 ', 'VNairlines', '95285372216c23d75', 'VNA#8SZ1qCA1LX84BZiL2W/DckyHpWba9ILuDcpRlV5rtbNOyciOG17jxYeYDMByUVN90x4Nph20MVIL6EIcZbLSwcPL54MXjnlIZzaxGmB5+d4yprJwfuIu+k26HRjOXT4n'),
(38, 'Tí Béo', '2010-01-01', 'Economy Save  ', 1, '21:30  - 23:30 ', 'VNairlines', '95285372216c23d75', 'VNA#8SZ1qCA1LX84BZiL2W/DckyHpWba9ILuDcpRlV5rtbNOyciOG17jxYeYDMByUVN90x4Nph20MVIL6EIcZbLSwcPL54MXjnlIZzaxGmB5+d4yprJwfuIu+k26HRjOXT4n'),
(39, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '19:30  - 21:30 ', 'VNairlines', '95285372216c23d75', 'VNA#cSjak1wW6Azpxv7XgZZy0e1s0jCN1IqpYmzyqBBaKUFQEUVcrVAWk1hKGWNNkqDL/vZTICjJr9JnqYQbb3kzbb7XeWlfk+/if4geW6TyEhGL/UBLu8TbFt6wEGtotVy5'),
(40, 'Trần Đức', '1920-01-01', 'Economy Standard  ', 1, '19:30  - 21:30 ', 'VNairlines', '95285372216c23d75', 'VNA#cSjak1wW6Azpxv7XgZZy0e1s0jCN1IqpYmzyqBBaKUFQEUVcrVAWk1hKGWNNkqDL/vZTICjJr9JnqYQbb3kzbb7XeWlfk+/if4geW6TyEhGL/UBLu8TbFt6wEGtotVy5'),
(41, 'Tí Béo', '2010-01-01', 'Economy Standard  ', 1, '19:30  - 21:30 ', 'VNairlines', '95285372216c23d75', 'VNA#cSjak1wW6Azpxv7XgZZy0e1s0jCN1IqpYmzyqBBaKUFQEUVcrVAWk1hKGWNNkqDL/vZTICjJr9JnqYQbb3kzbb7XeWlfk+/if4geW6TyEhGL/UBLu8TbFt6wEGtotVy5'),
(42, 'Nguyễn Việt', '1920-01-01', 'Economy Save  ', 1, '21:30  - 23:30 ', 'VNairlines', '3986537221e6d022a', 'VNA#dDJTqk28qTZrr3nIah2hqN58aQy0CjgIUcxVZx6CzTG7XtWzaXfdG6SWDkoNzsmTmokob4NFNYhMXFb/tDb1GQ+hZaAW9xWRpYhNZWTM1f6q95rnxyaMOdO+j6Ix6i6V'),
(43, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '14:50  - 16:50 ', 'VNairlines', '148415375ead265bcb', 'VNA#H6aZW1lj9gftY2KiKCEid8EPLUbBPc5/v7Rs+ybIcDWwlTXFEhAB2OGV9B61zLovzJdirpQ/RXuo94PgReW8ZJuNUYMT5obn44f51crgWfcHnJcPAKp5FUp5YVdOOqvl'),
(44, 'Nguyễn Việt', '1920-01-01', 'Economy Save  ', 1, '17:40  - 19:40 ', 'VNairlines', '148415375ead265bcb', 'VNA#7Kor42PCk1TMJDkXeGMToM0vmKH8QG7NBJLXgDFk18Z/D8cKEnVdqRUcJ5y/ZEtosW6kN/CfOVvalLM+z4DFWBeHqAD4D2rTrOAqVxUjrChmKJf6o7wPnK/2gWwX93zO'),
(45, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '49625377542a529b7', 'VNA#KgN5XhdgKRNLeBP2/PEeHANv7tKOBfgzbfKnrnOW5mwEi/iOEVNtmXnCoZJYSU8Bf1v27CAVjCG76EM3HCpYUANOindGYk+heFqkxc8OHJTMh729cMKy4/QrQPTBoAR9'),
(46, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '06:00  - 08:00 ', 'VNairlines', '49625377542a529b7', 'VNA#qK6EeNUGBjqC3VPmSUwB2oimWEYT2JL6yUkFYlwbLJcklb10zG5LicyQXaj0v2Wp+Yfwn1/23ZDvp7ttSF5mI70hQFMTI6x0Vy1xCzGE4d3iT14vez+ToRCIT00A1Pa6'),
(47, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '11:30  - 13:30 ', 'VNairlines', '10583537891186deae', 'VNA#svZIljJflHeYOuyYT7z9ronx79ITL34TPKgOaHefk5GO9VzuOS8CbVFb3CAEJjtylk/WMOPafCOQQi3bdeZuLrEgrL0/hWWh5PDr5RAPMN7qubDc3j4/tVehFOmtcR7d'),
(48, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '10583537891186deae', 'VNA#yPQvIuXCDqi2NnlKJVOUEOvvw9xjUu0ONWlIGlGPgjvyLSQW2Vb6jyq7U5RW62iBSwwQJ/q6vkn1pd1MKsHsaOtn49rywu5DWwowYf+OWkYkZRcxE17RxXiZ+NPCCBsC'),
(49, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '11:30  - 13:30 ', 'VNairlines', '156725378954f4767d', 'VNA#AvEF53Ka5M/en6nAIurT93vOV9SVpIMwIuBKo2FcqDxYAWcCB5kbYdU634URmrypV2k8Y32qYpDF0eQgSTwcQKAdkM+6LYYwufmsRqR7dqO3vU+0vGfRZcFyjG5VK9vf'),
(50, 'Trần Đức', '1920-01-01', 'Economy Standard  ', 1, '11:30  - 13:30 ', 'VNairlines', '156725378954f4767d', 'VNA#AvEF53Ka5M/en6nAIurT93vOV9SVpIMwIuBKo2FcqDxYAWcCB5kbYdU634URmrypV2k8Y32qYpDF0eQgSTwcQKAdkM+6LYYwufmsRqR7dqO3vU+0vGfRZcFyjG5VK9vf'),
(51, 'Tí Béo', '2010-01-01', 'Economy Standard  ', 1, '11:30  - 13:30 ', 'VNairlines', '156725378954f4767d', 'VNA#AvEF53Ka5M/en6nAIurT93vOV9SVpIMwIuBKo2FcqDxYAWcCB5kbYdU634URmrypV2k8Y32qYpDF0eQgSTwcQKAdkM+6LYYwufmsRqR7dqO3vU+0vGfRZcFyjG5VK9vf'),
(52, 'Minh Béo', '2010-01-01', 'Economy Standard  ', 1, '11:30  - 13:30 ', 'VNairlines', '156725378954f4767d', 'VNA#AvEF53Ka5M/en6nAIurT93vOV9SVpIMwIuBKo2FcqDxYAWcCB5kbYdU634URmrypV2k8Y32qYpDF0eQgSTwcQKAdkM+6LYYwufmsRqR7dqO3vU+0vGfRZcFyjG5VK9vf'),
(53, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '156725378954f4767d', 'VNA#iuraz5XCrXBofwRSN/P/cT6it+vv5qpoYRt6FcWKE0EoM+4rnN+CrQH04S3GePDgk2MW1gNnGIatc8dFJknFHjvcxB+7ZnHL6mwVfBiXSE3AbJiEWFdp/4Kmdb0z3FnQ'),
(54, 'Trần Đức', '1920-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '156725378954f4767d', 'VNA#iuraz5XCrXBofwRSN/P/cT6it+vv5qpoYRt6FcWKE0EoM+4rnN+CrQH04S3GePDgk2MW1gNnGIatc8dFJknFHjvcxB+7ZnHL6mwVfBiXSE3AbJiEWFdp/4Kmdb0z3FnQ'),
(55, 'Tí Béo', '2010-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '156725378954f4767d', 'VNA#iuraz5XCrXBofwRSN/P/cT6it+vv5qpoYRt6FcWKE0EoM+4rnN+CrQH04S3GePDgk2MW1gNnGIatc8dFJknFHjvcxB+7ZnHL6mwVfBiXSE3AbJiEWFdp/4Kmdb0z3FnQ'),
(56, 'Minh Béo', '2010-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '156725378954f4767d', 'VNA#iuraz5XCrXBofwRSN/P/cT6it+vv5qpoYRt6FcWKE0EoM+4rnN+CrQH04S3GePDgk2MW1gNnGIatc8dFJknFHjvcxB+7ZnHL6mwVfBiXSE3AbJiEWFdp/4Kmdb0z3FnQ'),
(57, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '11:30  - 13:30 ', 'VNairlines', '212525378d74253342', 'VNA#91l+tacPPI5+D0YHOHz6Iva+eiVIUyLJsHd8g1ZTH/cJC6E1S7M9BvOrzZ4qaRa3K2a5LGMzPVCdeWwHLBNyi4Q+4hPii0pPcuOs1cRHXvSVi1RorTGH2YKYzUSeBm5E'),
(58, 'Trần Đức', '1920-01-01', 'Economy Standard  ', 1, '11:30  - 13:30 ', 'VNairlines', '212525378d74253342', 'VNA#91l+tacPPI5+D0YHOHz6Iva+eiVIUyLJsHd8g1ZTH/cJC6E1S7M9BvOrzZ4qaRa3K2a5LGMzPVCdeWwHLBNyi4Q+4hPii0pPcuOs1cRHXvSVi1RorTGH2YKYzUSeBm5E'),
(59, 'Tí Béo', '2010-01-01', 'Economy Standard  ', 1, '11:30  - 13:30 ', 'VNairlines', '212525378d74253342', 'VNA#91l+tacPPI5+D0YHOHz6Iva+eiVIUyLJsHd8g1ZTH/cJC6E1S7M9BvOrzZ4qaRa3K2a5LGMzPVCdeWwHLBNyi4Q+4hPii0pPcuOs1cRHXvSVi1RorTGH2YKYzUSeBm5E'),
(60, 'Minh Béo', '2010-01-01', 'Economy Standard  ', 1, '11:30  - 13:30 ', 'VNairlines', '212525378d74253342', 'VNA#91l+tacPPI5+D0YHOHz6Iva+eiVIUyLJsHd8g1ZTH/cJC6E1S7M9BvOrzZ4qaRa3K2a5LGMzPVCdeWwHLBNyi4Q+4hPii0pPcuOs1cRHXvSVi1RorTGH2YKYzUSeBm5E'),
(61, 'Zun', '2014-01-01', 'Economy Standard  ', 1, '11:30  - 13:30 ', 'VNairlines', '212525378d74253342', 'VNA#91l+tacPPI5+D0YHOHz6Iva+eiVIUyLJsHd8g1ZTH/cJC6E1S7M9BvOrzZ4qaRa3K2a5LGMzPVCdeWwHLBNyi4Q+4hPii0pPcuOs1cRHXvSVi1RorTGH2YKYzUSeBm5E'),
(62, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '212525378d74253342', 'VNA#hSXSb3SInwgtUnL2u3TT0cAo9qn38vmqwpzDjhE+gCoYsfS/IjvS3OcAGPqEEcDYnAMxv5OaJVXTwzi7yIiutB15QnlX6K1k2GMIBvUkOyWIoEBFQTT0Lk4zdLtFqhMa'),
(63, 'Trần Đức', '1920-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '212525378d74253342', 'VNA#hSXSb3SInwgtUnL2u3TT0cAo9qn38vmqwpzDjhE+gCoYsfS/IjvS3OcAGPqEEcDYnAMxv5OaJVXTwzi7yIiutB15QnlX6K1k2GMIBvUkOyWIoEBFQTT0Lk4zdLtFqhMa'),
(64, 'Tí Béo', '2010-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '212525378d74253342', 'VNA#hSXSb3SInwgtUnL2u3TT0cAo9qn38vmqwpzDjhE+gCoYsfS/IjvS3OcAGPqEEcDYnAMxv5OaJVXTwzi7yIiutB15QnlX6K1k2GMIBvUkOyWIoEBFQTT0Lk4zdLtFqhMa'),
(65, 'Minh Béo', '2010-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '212525378d74253342', 'VNA#hSXSb3SInwgtUnL2u3TT0cAo9qn38vmqwpzDjhE+gCoYsfS/IjvS3OcAGPqEEcDYnAMxv5OaJVXTwzi7yIiutB15QnlX6K1k2GMIBvUkOyWIoEBFQTT0Lk4zdLtFqhMa'),
(66, 'Zun', '2014-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '212525378d74253342', 'VNA#hSXSb3SInwgtUnL2u3TT0cAo9qn38vmqwpzDjhE+gCoYsfS/IjvS3OcAGPqEEcDYnAMxv5OaJVXTwzi7yIiutB15QnlX6K1k2GMIBvUkOyWIoEBFQTT0Lk4zdLtFqhMa'),
(67, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '11:30  - 13:30 ', 'VNairlines', '166215378d8faed200', 'VNA#e4STAFNrO8KZ1XGCvyCW09PyfAQBo74JHLY8+YYYaGumhp1ItZegjOeOwQ3eQsbCzymrxkEZlHPGAAxgEMg1T94EYGxmDFntU2/WJdeKyG2tQL0Q2dbDldhlGbuN5/qF'),
(68, 'Trần Đức', '1920-01-01', 'Economy Standard  ', 1, '11:30  - 13:30 ', 'VNairlines', '166215378d8faed200', 'VNA#e4STAFNrO8KZ1XGCvyCW09PyfAQBo74JHLY8+YYYaGumhp1ItZegjOeOwQ3eQsbCzymrxkEZlHPGAAxgEMg1T94EYGxmDFntU2/WJdeKyG2tQL0Q2dbDldhlGbuN5/qF'),
(69, 'Tí Béo', '2010-01-01', 'Economy Standard  ', 1, '11:30  - 13:30 ', 'VNairlines', '166215378d8faed200', 'VNA#e4STAFNrO8KZ1XGCvyCW09PyfAQBo74JHLY8+YYYaGumhp1ItZegjOeOwQ3eQsbCzymrxkEZlHPGAAxgEMg1T94EYGxmDFntU2/WJdeKyG2tQL0Q2dbDldhlGbuN5/qF'),
(70, 'Minh Béo', '2010-01-01', 'Economy Standard  ', 1, '11:30  - 13:30 ', 'VNairlines', '166215378d8faed200', 'VNA#e4STAFNrO8KZ1XGCvyCW09PyfAQBo74JHLY8+YYYaGumhp1ItZegjOeOwQ3eQsbCzymrxkEZlHPGAAxgEMg1T94EYGxmDFntU2/WJdeKyG2tQL0Q2dbDldhlGbuN5/qF'),
(71, 'Zun', '2014-01-01', 'Economy Standard  ', 1, '11:30  - 13:30 ', 'VNairlines', '166215378d8faed200', 'VNA#e4STAFNrO8KZ1XGCvyCW09PyfAQBo74JHLY8+YYYaGumhp1ItZegjOeOwQ3eQsbCzymrxkEZlHPGAAxgEMg1T94EYGxmDFntU2/WJdeKyG2tQL0Q2dbDldhlGbuN5/qF'),
(72, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '166215378d8faed200', 'VNA#eLpcEG2Li2U3B9m/8J89y+hf+QNYD5VZMLjy1c6fPPuX7UHEn5MAbI36e7qWEXhJDHi1TKnxYSFKIVHL72W9d1FKqezhAsieMDOt+WIRygSrTvYpAkELsXrARMPAcikq'),
(73, 'Trần Đức', '1920-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '166215378d8faed200', 'VNA#eLpcEG2Li2U3B9m/8J89y+hf+QNYD5VZMLjy1c6fPPuX7UHEn5MAbI36e7qWEXhJDHi1TKnxYSFKIVHL72W9d1FKqezhAsieMDOt+WIRygSrTvYpAkELsXrARMPAcikq'),
(74, 'Tí Béo', '2010-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '166215378d8faed200', 'VNA#eLpcEG2Li2U3B9m/8J89y+hf+QNYD5VZMLjy1c6fPPuX7UHEn5MAbI36e7qWEXhJDHi1TKnxYSFKIVHL72W9d1FKqezhAsieMDOt+WIRygSrTvYpAkELsXrARMPAcikq'),
(75, 'Minh Béo', '2010-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '166215378d8faed200', 'VNA#eLpcEG2Li2U3B9m/8J89y+hf+QNYD5VZMLjy1c6fPPuX7UHEn5MAbI36e7qWEXhJDHi1TKnxYSFKIVHL72W9d1FKqezhAsieMDOt+WIRygSrTvYpAkELsXrARMPAcikq'),
(76, 'Zun', '2014-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '166215378d8faed200', 'VNA#eLpcEG2Li2U3B9m/8J89y+hf+QNYD5VZMLjy1c6fPPuX7UHEn5MAbI36e7qWEXhJDHi1TKnxYSFKIVHL72W9d1FKqezhAsieMDOt+WIRygSrTvYpAkELsXrARMPAcikq'),
(77, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '11:30  - 13:30 ', 'VNairlines', '28505378df593af17', 'VNA#z83JFkGcJCOCcBUX5TK/n8Nv6y9vb5+BP60JZmM+Wxx70EI872pPQmLx9IxwAiWGpMAAn6kFolAzU4blTttX9iPcnn3N5xFtkTsEk3CmPt/6YCWHMzGJB6vfUZkWGmwd'),
(78, 'Trần Đức', '1920-01-01', 'Economy Standard  ', 1, '11:30  - 13:30 ', 'VNairlines', '28505378df593af17', 'VNA#z83JFkGcJCOCcBUX5TK/n8Nv6y9vb5+BP60JZmM+Wxx70EI872pPQmLx9IxwAiWGpMAAn6kFolAzU4blTttX9iPcnn3N5xFtkTsEk3CmPt/6YCWHMzGJB6vfUZkWGmwd'),
(79, 'Bá Đạo', '1920-01-01', 'Economy Standard  ', 1, '11:30  - 13:30 ', 'VNairlines', '28505378df593af17', 'VNA#z83JFkGcJCOCcBUX5TK/n8Nv6y9vb5+BP60JZmM+Wxx70EI872pPQmLx9IxwAiWGpMAAn6kFolAzU4blTttX9iPcnn3N5xFtkTsEk3CmPt/6YCWHMzGJB6vfUZkWGmwd'),
(80, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '28505378df593af17', 'VNA#bx2sNaM4OV49pzHxrbjbwAkD7nGMV4kjgep3CF33eJv7OyfoKRIbez3/n7ksKxK6mFmVHG9ME9jV3XPa+n0fRAFuH0nVKXS49oaNFL7V7l9mcJ34J5hDRmtPQM2inQIC'),
(81, 'Trần Đức', '1920-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '28505378df593af17', 'VNA#bx2sNaM4OV49pzHxrbjbwAkD7nGMV4kjgep3CF33eJv7OyfoKRIbez3/n7ksKxK6mFmVHG9ME9jV3XPa+n0fRAFuH0nVKXS49oaNFL7V7l9mcJ34J5hDRmtPQM2inQIC'),
(82, 'Bá Đạo', '1920-01-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '28505378df593af17', 'VNA#bx2sNaM4OV49pzHxrbjbwAkD7nGMV4kjgep3CF33eJv7OyfoKRIbez3/n7ksKxK6mFmVHG9ME9jV3XPa+n0fRAFuH0nVKXS49oaNFL7V7l9mcJ34J5hDRmtPQM2inQIC'),
(83, 'Nguyễn Việt', '1992-04-13', 'Economy Standard  ', 1, '11:30  - 13:30 ', 'VNairlines', '324895378e33633e78', 'VNA#/0GA8p/xCgQWv9gMuRv4XVElUYaDoQ0VZmGKhDRN6mdc4fS+qBiSxhoaMipryayojg81r8CKnrLRNHX8mdVTxAMqF1WVlMzMfmaWjxcwtYnQlmf0Dl77kSYDrXMroP8k'),
(84, 'Trần Đức', '1990-04-01', 'Economy Standard  ', 1, '11:30  - 13:30 ', 'VNairlines', '324895378e33633e78', 'VNA#/0GA8p/xCgQWv9gMuRv4XVElUYaDoQ0VZmGKhDRN6mdc4fS+qBiSxhoaMipryayojg81r8CKnrLRNHX8mdVTxAMqF1WVlMzMfmaWjxcwtYnQlmf0Dl77kSYDrXMroP8k'),
(85, 'Tí Béo', '2010-05-07', 'Economy Standard  ', 1, '11:30  - 13:30 ', 'VNairlines', '324895378e33633e78', 'VNA#/0GA8p/xCgQWv9gMuRv4XVElUYaDoQ0VZmGKhDRN6mdc4fS+qBiSxhoaMipryayojg81r8CKnrLRNHX8mdVTxAMqF1WVlMzMfmaWjxcwtYnQlmf0Dl77kSYDrXMroP8k'),
(86, 'Minh Béo', '2010-03-12', 'Economy Standard  ', 1, '11:30  - 13:30 ', 'VNairlines', '324895378e33633e78', 'VNA#/0GA8p/xCgQWv9gMuRv4XVElUYaDoQ0VZmGKhDRN6mdc4fS+qBiSxhoaMipryayojg81r8CKnrLRNHX8mdVTxAMqF1WVlMzMfmaWjxcwtYnQlmf0Dl77kSYDrXMroP8k'),
(87, 'Zun', '2013-01-05', 'Economy Standard  ', 1, '11:30  - 13:30 ', 'VNairlines', '324895378e33633e78', 'VNA#/0GA8p/xCgQWv9gMuRv4XVElUYaDoQ0VZmGKhDRN6mdc4fS+qBiSxhoaMipryayojg81r8CKnrLRNHX8mdVTxAMqF1WVlMzMfmaWjxcwtYnQlmf0Dl77kSYDrXMroP8k'),
(88, 'Nguyễn Việt', '1992-04-13', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '324895378e33633e78', 'VNA#ULcPAdghDDMKFiMJebkqUvKxgINRUy5IYyhiOyW7Deaq1PSa1acUTX5W8W6NTKXCy9QxoRBO4IGlp0ZmBaSPTJYhispGi0ex7NuGRbeQEVSwcgqpF2s3O2OP64bzvO1F'),
(89, 'Trần Đức', '1990-04-01', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '324895378e33633e78', 'VNA#ULcPAdghDDMKFiMJebkqUvKxgINRUy5IYyhiOyW7Deaq1PSa1acUTX5W8W6NTKXCy9QxoRBO4IGlp0ZmBaSPTJYhispGi0ex7NuGRbeQEVSwcgqpF2s3O2OP64bzvO1F'),
(90, 'Tí Béo', '2010-05-07', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '324895378e33633e78', 'VNA#ULcPAdghDDMKFiMJebkqUvKxgINRUy5IYyhiOyW7Deaq1PSa1acUTX5W8W6NTKXCy9QxoRBO4IGlp0ZmBaSPTJYhispGi0ex7NuGRbeQEVSwcgqpF2s3O2OP64bzvO1F'),
(91, 'Minh Béo', '2010-03-12', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '324895378e33633e78', 'VNA#ULcPAdghDDMKFiMJebkqUvKxgINRUy5IYyhiOyW7Deaq1PSa1acUTX5W8W6NTKXCy9QxoRBO4IGlp0ZmBaSPTJYhispGi0ex7NuGRbeQEVSwcgqpF2s3O2OP64bzvO1F'),
(92, 'Zun', '2013-01-05', 'Economy Standard  ', 1, '07:10  - 09:10 ', 'VNairlines', '324895378e33633e78', 'VNA#ULcPAdghDDMKFiMJebkqUvKxgINRUy5IYyhiOyW7Deaq1PSa1acUTX5W8W6NTKXCy9QxoRBO4IGlp0ZmBaSPTJYhispGi0ex7NuGRbeQEVSwcgqpF2s3O2OP64bzvO1F'),
(93, 'Nguyễn Việt', '1920-01-01', 'Economy Flex  ', 1, '20:35  - 22:35 ', 'VNairlines', '5496537f036b95846', 'VNA#sNLIWi2OUdqGvgLzPQPlClZspmQRvR+psmvH7aqq+uD+Go1hXG3qFy+8jFis1hdpXHL2jmaSEtFsVrth1PwZrlCjR4rzSuGsCk5ojxdLmpGl4wLDPtDf/VBvkCER9Vyn'),
(94, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '19:30  - 21:30 ', 'VNairlines', '5496537f036b95846', 'VNA#yaQlzPFJpUVBujHWwOgq6I2sLe0gaRsJV0qvzLDeuteRF2QdAqbj0k9vnvpsAyxuby51nwMLreYXtUCnXnAHcFYExqehLyGK3aiD5S6rfzJIA9cNAHD0jjZIzBbbkPO+'),
(95, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '20:20  - 22:20 ', 'VNairlines', '40135382e3e0a6968', 'VNA#073UXzkfnYBGBlu6cQ+82mAPWBH3rJ7QIP8WRLDuzD1XZ7Pj8lQVsA1VE6lUlxIkL12zaF4LtCTjx/9sPXfmHzQynWH7Zg2etsxRWXv9JwDcdE2U/O5dCV6vpZoeLDhX'),
(96, 'Nguyễn Việt', '1920-01-01', 'Economy Standard  ', 1, '20:30  - 22:30 ', 'VNairlines', '40135382e3e0a6968', 'VNA#BSPc22VpOJkPQmZf/ISRZRPt0sf7kIiyzihaLmcT8+/FQuC/+CKVOxP14EfJ1DyX/CCyWhdp4QQKSELsouBId0XGi2QY3Dx9Lo001D/PIBniHkE/XC+M9A503I3kW5+y');

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

--
-- Dumping data for table `dat_ve`
--

INSERT INTO `dat_ve` (`dat_ve_id`, `tong_gia`, `dia_diem_di`, `dia_diem_den`, `ngay_gio_di`, `ngay_gio_ve`, `ho_ten`, `so_dt`, `email`, `dia_chi`, `quoc_gia`, `thanh_pho`, `thanh_toan_id`) VALUES
('10583537891186deae', 5275000, 'SGN', 'HAN', '2014-05-19', '2014-05-19', 'Nguyễn Trung Việt', 903676222, 'vietnt134@gmail.com', '47/8/5, Đ.2, P.Bình An, Q.2', 'Việt Nam', 'TP Hồ Chí Minh', 1),
('148415375ead265bcb', 4050000, 'SGN', 'HAN', '2014-05-17', '2014-05-17', 'Nguyễn Văn Quyền', 903676222, 'vietnt134@gmail.com', '47/8/5, Đ.2, P.Bình An, Q.2', 'Việt Nam', 'TP Hồ Chí Minh', 1),
('156725378954f4767d', 17652000, 'SGN', 'HAN', '2014-05-19', '2014-05-19', 'Nguyễn Trung Việt', 903676222, 'vietnt134@gmail.com', '47/8/5, Đ.2, P.Bình An, Q.2', 'Việt Nam', 'TP Hồ Chí Minh', 2),
('166215378d8faed200', 18552000, 'SGN', 'HAN', '2014-05-19', '2014-05-19', 'Nguyễn Trung Việt', 903676222, 'vietnt134@gmail.com', '47/8/5, Đ.2, P.Bình An, Q.2', 'Việt Nam', 'TP Hồ Chí Minh', 2),
('169635370f6d91247d', 9200000, 'SGN', 'HAN', '2014-05-13', '2014-05-13', 'Nguyễn Trung Việt', 903676222, 'vietnt134@gmail.com', '47/8/5, Đ.2, P.Bình An, Q.2', 'Việt Nam', 'TP Hồ Chí Minh', 3),
('194425370ef9eefa6a', 16202000, 'SGN', 'HAN', '2014-05-13', '2014-05-13', 'Nguyễn Trung Việt', 903676222, 'vietnt134@gmail.com', '47/8/5, Đ.2, P.Bình An, Q.2', 'Việt Nam', 'TP Hồ Chí Minh', 3),
('212525378d74253342', 18552000, 'SGN', 'HAN', '2014-05-19', '2014-05-19', 'Nguyễn Trung Việt', 903676222, 'vietnt134@gmail.com', '47/8/5, Đ.2, P.Bình An, Q.2', 'Việt Nam', 'TP Hồ Chí Minh', 2),
('214355371966f6666f', 15220000, 'SGN', 'HAN', '2014-05-13', '2014-05-13', 'Nguyễn Trung Việt', 903676222, 'vietnt134@gmail.com', '47/8/5, Đ.2, P.Bình An, Q.2', 'Việt Nam', 'TP Hồ Chí Minh', 1),
('266775370e513dc8c2', 2250000, 'SGN', 'HAN', '2014-05-13', '2014-05-13', 'Nguyễn Trung Việt', 903676222, 'vietnt134@gmail.com', '47/8/5, Đ.2, P.Bình An, Q.2', 'Việt Nam', 'TP Hồ Chí Minh', 1),
('27865537221145d630', 10451000, 'SGN', 'HAN', '2014-05-14', '2014-05-14', 'Nguyễn Trung Việt', 903676222, 'vietnt134@gmail.com', '47/8/5, Đ.2, P.Bình An, Q.2', 'Việt Nam', 'TP Hồ Chí Minh', 3),
('28505378df593af17', 15150000, 'SGN', 'HAN', '2014-05-19', '2014-05-19', 'Nguyễn Trung Việt', 903676222, 'vietnt134@gmail.com', '47/8/5, Đ.2, P.Bình An, Q.2', 'Việt Nam', 'TP Hồ Chí Minh', 2),
('324895378e33633e78', 18952000, 'SGN', 'HAN', '2014-05-19', '2014-05-19', 'Lê Trọng Lợi', 988849096, 'trongloikt192@gmail.com', '47/8/5, Đ.2, P.Bình An, Q.2', 'Việt Nam', 'TP Hồ Chí Minh', 3),
('326675370def4e4984', 4500000, 'SGN', 'HAN', '2014-05-13', '2014-05-13', 'Nguyễn Trung Việt', 903676222, 'vietnt134@gmail.com', '47/8/5, Đ.2, P.Bình An, Q.2', 'Việt Nam', 'TP Hồ Chí Minh', 3),
('3565370dcd0c7b42', 7876000, 'SGN', 'HAN', '2014-05-13', '2014-05-13', 'Nguyễn Trung Việt', 903676222, 'vietnt134@gmail.com', '47/8/5, Đ.2, P.Bình An, Q.2', 'Việt Nam', 'TP Hồ Chí Minh', 2),
('3986537221e6d022a', 1550000, 'SGN', 'HAN', '2014-05-14', '2014-05-14', 'Nguyễn Trung Việt', 903676222, 'vietnt134@gmail.com', '47/8/5, Đ.2, P.Bình An, Q.2', 'Việt Nam', 'TP Hồ Chí Minh', 3),
('40135382e3e0a6968', 5050000, 'SGN', 'HAN', '2014-05-26', '2014-05-26', 'Nguyễn Trung Việt', 903676222, 'vietnt134@gmail.com', '47/8/5, Đ.2, P.Bình An, Q.2', 'Việt Nam', 'TP Hồ Chí Minh', 1),
('49625377542a529b7', 5275000, 'SGN', 'HAN', '2014-05-18', '2014-05-18', 'Lê Trọng Lợi', 903676222, 'vietnt134@gmail.com', '47/8/5, Đ.2, P.Bình An, Q.2', 'Việt Nam', 'TP Hồ Chí Minh', 2),
('5496537f036b95846', 5512000, 'SGN', 'HAN', '2014-05-23', '2014-05-23', 'Nguyễn Trung Việt', 903676222, 'vietnt134@gmail.com', '47/8/5, Đ.2, P.Bình An, Q.2', 'Việt Nam', 'TP Hồ Chí Minh', 1),
('95285372216c23d75', 10451000, 'SGN', 'HAN', '2014-05-14', '2014-05-14', 'Nguyễn Trung Việt', 903676222, 'vietnt134@gmail.com', '47/8/5, Đ.2, P.Bình An, Q.2', 'Việt Nam', 'TP Hồ Chí Minh', 2),
('99625370f2836a62b', 3650000, 'SGN', 'HAN', '2014-05-13', '2014-05-13', 'Nguyễn Trung Việt', 903676222, 'vietnt134@gmail.com', '47/8/5, Đ.2, P.Bình An, Q.2', 'Việt Nam', 'TP Hồ Chí Minh', 1);

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
-- Table structure for table `lai_ban`
--

CREATE TABLE IF NOT EXISTS `lai_ban` (
  `lai_ban_id` int(11) NOT NULL AUTO_INCREMENT,
  `hang_bay` varchar(50) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `lai_xuat` int(11) NOT NULL,
  PRIMARY KEY (`lai_ban_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lai_ban`
--

INSERT INTO `lai_ban` (`lai_ban_id`, `hang_bay`, `lai_xuat`) VALUES
(1, 'VNairlines', 50000),
(2, 'Jet-Star', 70000),
(3, 'VietJetAir', 80000);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_level_id`, `user_email`, `user_password`) VALUES
(1, 0, 'vietnt134@gmail.com', 'whatdidyoudo134'),
(2, 0, 'admin@gmail.com', 'bd18fa92a97df32d0da484fe76ad2dc2');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=41 ;

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
(38, 'Nguyễn Trung Việt', 'samurai_lonely134@yahoo.com', 903676222, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-04-30', '2014-04-30', '2014-04-30', '2014-04-30', 'VietJetAir/JetStar/VietNam-Airline', 1),
(39, 'Nguyễn Văn Quyền', 'nguyenvanquyen92@gmail.com', 903676222, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-05-16', '2014-05-16', '2014-05-16', '2014-05-16', 'VietJetAir/JetStar/VietNam-Airline', 1),
(40, 'Nguyễn Trung Việt', 'vietnt134@gmail.com', 903676222, 'HoChiMinh', 'HaNoi', 'khứ hồi', 1, '2014-05-16', '2014-05-16', '2014-05-16', '2014-05-16', 'VietJetAir/JetStar/VietNam-Airline', 1);

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
