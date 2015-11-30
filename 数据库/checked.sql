/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : jiaxiao

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-11-30 11:11:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `checked`
-- ----------------------------
DROP TABLE IF EXISTS `checked`;
CREATE TABLE `checked` (
  `create_date` datetime NOT NULL,
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `admin_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `remark` varchar(128) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of checked
-- ----------------------------
INSERT INTO `checked` VALUES ('0000-00-00 00:00:00', '11', '1', '1', '名字格式错误', '0');
INSERT INTO `checked` VALUES ('0000-00-00 00:00:00', '12', '1', '2', '', '0');
INSERT INTO `checked` VALUES ('2015-11-29 04:47:22', '13', '1', '3', '', '0');
INSERT INTO `checked` VALUES ('2015-11-29 04:47:45', '14', '1', '4', '照片格式不对', '0');
INSERT INTO `checked` VALUES ('2015-11-30 02:11:40', '15', '1', '5', '电话号码的格式错误', '0');
INSERT INTO `checked` VALUES ('2015-11-30 10:02:09', '16', '1', '6', '身份证格式不正确', '0');
INSERT INTO `checked` VALUES ('2015-11-30 10:12:47', '17', '1', '7', '用户名格式不正确，身份证号码格式不正确', '0');
INSERT INTO `checked` VALUES ('2015-11-30 10:28:15', '18', '2', '8', '住址格式错误', '0');
INSERT INTO `checked` VALUES ('2015-11-30 10:46:28', '19', '1', '9', '', '0');
