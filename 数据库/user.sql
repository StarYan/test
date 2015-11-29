/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : jiaxiao

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-11-29 09:31:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(128) NOT NULL,
  `NUM` varchar(128) NOT NULL,
  `PASSWORD` varchar(128) NOT NULL,
  `SEX` tinyint(1) DEFAULT '0',
  `BIRTHDAY` date NOT NULL,
  `PHONE` varchar(128) NOT NULL,
  `QQ` varchar(16) DEFAULT NULL,
  `ADDRESS` varchar(128) NOT NULL,
  `EMAIL` varchar(128) NOT NULL,
  `IDCARD` varchar(32) NOT NULL,
  `PHOTO` varchar(128) NOT NULL,
  `ORIGINAL_CAR_TYPE` varchar(64) DEFAULT NULL,
  `WANTED_CAR_TYPE` varchar(64) NOT NULL,
  `CREATE_DATE` datetime NOT NULL,
  `CREATE_ID` bigint(20) NOT NULL,
  `STATUS` tinyint(1) DEFAULT '0',
  `DELETED` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`NUM`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '文世业', '1201010090', 'wenshiye', '1', '1993-01-17', '13631224950', '936818307', '北京师范大珠海分校', '936818307@qq.com', '440711199301175411', 'wen.jpg', null, 'C1', '2015-11-28 23:54:01', '1', '0', '0');
