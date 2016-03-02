/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : jiaxiao

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-01-30 13:40:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `school`
-- ----------------------------
DROP TABLE IF EXISTS `school`;
CREATE TABLE `school` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(512) CHARACTER SET utf8 DEFAULT NULL,
  `licence` varchar(512) NOT NULL COMMENT '驾校的营业执照',
  `school_introduction` varchar(512) CHARACTER SET utf8 DEFAULT NULL COMMENT '驾校的介绍内容',
  `school_img` varchar(512) DEFAULT NULL COMMENT '驾校图片的路劲',
  `school_address` varchar(512) CHARACTER SET utf8 DEFAULT NULL COMMENT '驾校的地址',
  `school_tel` varchar(256) DEFAULT NULL COMMENT '驾校的联系电话',
  `school_url` varchar(512) DEFAULT NULL COMMENT '驾校的网址',
  `pass_rate` decimal(10,2) DEFAULT NULL COMMENT '驾校考试通过率',
  `score` decimal(10,2) DEFAULT NULL COMMENT '驾校分数',
  `create_id` bigint(20) DEFAULT NULL COMMENT '生成当前信息的管理员ID',
  `create_date` datetime DEFAULT NULL COMMENT '生成当前信息的日期',
  `update_id` bigint(20) DEFAULT NULL COMMENT '更新当前信息的管理员ID',
  `update_date` datetime DEFAULT NULL COMMENT '更新当前信息的日期',
  `deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0表示没删除，1表示删除(默认为0)',
  PRIMARY KEY (`id`,`licence`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of school
-- ----------------------------
INSERT INTO `school` VALUES ('8', '蓝光驾校', '130200000037066', '蓝光驾校蓝光驾校蓝光驾校蓝光驾校蓝光驾校蓝光驾校蓝光驾校蓝光驾校蓝光驾校蓝光驾校蓝光驾校蓝光驾校蓝光', 'u2612783298,263391411fm21gp0.jpg', '珠海市', '13631224955', null, '44.00', '45.00', null, null, null, null, '0');
