/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : jiaxiao

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-12-20 20:42:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `evaluate`
-- ----------------------------
DROP TABLE IF EXISTS `evaluate`;
CREATE TABLE `evaluate` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL COMMENT '学员的ID',
  `coach_id` bigint(20) NOT NULL COMMENT '教练的ID',
  `star` tinyint(1) NOT NULL DEFAULT '0' COMMENT '星星的数量',
  `remark` varchar(512) CHARACTER SET utf8 DEFAULT NULL COMMENT '备注',
  `create_date` datetime NOT NULL COMMENT '评价的时间',
  `deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '(0表示显示，1表示不显示)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of evaluate
-- ----------------------------
INSERT INTO `evaluate` VALUES ('0', '45', '1', '3', '???', '2015-12-20 08:34:25', '0');
