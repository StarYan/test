/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : jiaxiao

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-03-15 00:40:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `school_evaluation`
-- ----------------------------
DROP TABLE IF EXISTS `school_evaluation`;
CREATE TABLE `school_evaluation` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `school_id` bigint(20) NOT NULL,
  `score` int(3) NOT NULL,
  `remark` varchar(512) CHARACTER SET utf8 NOT NULL DEFAULT 'NULL',
  `create_date` datetime NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of school_evaluation
-- ----------------------------
INSERT INTO `school_evaluation` VALUES ('1', '45', '8', '90', '科目1考试过关到今天俩个月了，但是未得上过车，半个月后又要考科目2了！谁了确保我们考试过关啊，再说补考的钱谁来承担啊！！真是上当了！', '2016-03-14 20:00:04', '0');
