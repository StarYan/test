/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : jiaxiao

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-12-26 13:58:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `appointment`
-- ----------------------------
DROP TABLE IF EXISTS `appointment`;
CREATE TABLE `appointment` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `coachandplaceid` int(11) NOT NULL COMMENT '教练与场地关系ID',
  `userid` int(11) NOT NULL COMMENT '用户id',
  `carid` bigint(20) NOT NULL COMMENT '车型',
  `a_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='预约';

-- ----------------------------
-- Records of appointment
-- ----------------------------
INSERT INTO `appointment` VALUES ('2', '3', '46', '1', '0');
INSERT INTO `appointment` VALUES ('6', '9', '46', '1', '0');
INSERT INTO `appointment` VALUES ('7', '1', '45', '2', '1');
INSERT INTO `appointment` VALUES ('8', '3', '46', '2', '0');
INSERT INTO `appointment` VALUES ('9', '1', '45', '2', '1');
INSERT INTO `appointment` VALUES ('10', '1', '45', '2', '0');
INSERT INTO `appointment` VALUES ('11', '2', '46', '2', '0');
INSERT INTO `appointment` VALUES ('12', '1', '45', '1', '0');
