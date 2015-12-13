/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : jiaxiao

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-12-13 12:27:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `num` varchar(128) NOT NULL,
  `nickname` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `sex` tinyint(1) DEFAULT '0',
  `birthday` date NOT NULL,
  `phone` varchar(128) NOT NULL,
  `qq` varchar(16) DEFAULT NULL,
  `address` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `idcard` varchar(32) NOT NULL,
  `photo` varchar(128) NOT NULL,
  `original_car_type` varchar(64) DEFAULT NULL,
  `wanted_car_type` varchar(64) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_id` bigint(20) NOT NULL,
  `update_id` bigint(20) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`num`),
  KEY `ID` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
