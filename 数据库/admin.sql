/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : jiaxiao

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-11-30 11:12:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `qq` varchar(16) DEFAULT NULL,
  `create_id` bigint(20) NOT NULL,
  `create_date` datetime NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', '文世业', 'admin', '13631224950', '936818307', '1', '2015-11-28 21:19:18', '0', '0');
INSERT INTO `admin` VALUES ('2', 'wenshiye', '文世业', 'wenshiye', '13631224950', '936818307', '1', '2015-11-29 15:47:43', '0', '0');
