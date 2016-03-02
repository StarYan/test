/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : jiaxiao

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-01-30 13:41:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `cartype`
-- ----------------------------
DROP TABLE IF EXISTS `cartype`;
CREATE TABLE `cartype` (
  `id` int(128) NOT NULL AUTO_INCREMENT,
  `style` varchar(128) NOT NULL,
  `brand` varchar(512) NOT NULL COMMENT '车辆的品牌',
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0表示手动，1表示自动',
  `age` int(3) NOT NULL,
  `number` varchar(128) NOT NULL,
  `car_detail` varchar(128) NOT NULL,
  `img` varchar(256) NOT NULL,
  `school_id` bigint(20) NOT NULL COMMENT '驾校ID',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='车辆类型';

-- ----------------------------
-- Records of cartype
-- ----------------------------
INSERT INTO `cartype` VALUES ('1', 'C1', '奥迪', '0', '2', '粤C9527', 'black', '', '1', '1');
INSERT INTO `cartype` VALUES ('2', 'C1', '奥迪', '1', '3', '粤B9525', 'white', '', '1', '0');
INSERT INTO `cartype` VALUES ('3', 'A1', '奥迪', '0', '1', '粤C8888', '', '1415668652055_middle7.jpg', '1', '0');
INSERT INTO `cartype` VALUES ('4', 'C1', 'SYO', '0', '1', '贵A4236学', '', 'c2fdfc039245d6881ea287fca0c27d1ed31b24c1.jpg', '8', '0');
