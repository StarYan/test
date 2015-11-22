-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2015 at 10:20 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jiaxiao`
--

-- --------------------------------------------------------

--
-- Table structure for table `savewrongmessage`
--

CREATE TABLE IF NOT EXISTS `savewrongmessage` (
  `user_num` varchar(32) DEFAULT NULL,
  `user_name` varchar(32) NOT NULL,
  `tittle` varchar(32) NOT NULL,
  `value` varchar(32) NOT NULL,
  `wrongreason` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `savewrongmessage`
--

INSERT INTO `savewrongmessage` (`user_num`, `user_name`, `tittle`, `value`, `wrongreason`) VALUES
('151121029703', '文世业', '姓名', '文世业', '格式错误');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
