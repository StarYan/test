-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 12 月 13 日 04:27
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `gitjiaxiao`
--

-- --------------------------------------------------------

--
-- 表的结构 `coachandplace`
--

CREATE TABLE IF NOT EXISTS `coachandplace` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placeid` int(11) NOT NULL,
  `coachid` int(11) NOT NULL,
  `timeid` int(11) NOT NULL COMMENT '预约时间id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='教练与场地关系' AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `coachandplace`
--

INSERT INTO `coachandplace` (`id`, `placeid`, `coachid`, `timeid`) VALUES
(1, 1, 1, 1),
(2, 1, 1, 3),
(3, 2, 1, 4),
(4, 2, 1, 4),
(5, 2, 1, 4),
(6, 2, 1, 4),
(7, 2, 1, 4),
(8, 2, 1, 4),
(9, 2, 1, 4),
(10, 2, 1, 4),
(11, 2, 1, 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
