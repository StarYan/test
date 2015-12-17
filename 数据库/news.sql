/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : jiaxiao

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-12-17 22:19:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) CHARACTER SET utf8 NOT NULL COMMENT '新闻标题',
  `content` varchar(512) CHARACTER SET utf8 NOT NULL COMMENT '新闻内容',
  `link` varchar(512) NOT NULL COMMENT '新闻的链接',
  `create_id` bigint(20) NOT NULL COMMENT '添加当前新闻的管理员ID',
  `create_date` datetime NOT NULL COMMENT '添加当前新闻的时间',
  `deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0代表显示，1代表不显示',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', '北理工', '百度百科北理工', 'http://www.google.com', '1', '2015-12-17 15:10:32', '0');
INSERT INTO `news` VALUES ('2', '文世业', '文世业谷歌', 'http://www.google.com', '2', '2015-12-16 16:26:16', '0');
INSERT INTO `news` VALUES ('3', '文世业', '百度文世业', 'http://www.baidu.com', '2', '2015-12-16 16:38:23', '0');
INSERT INTO `news` VALUES ('4', '北师大', '北师大谷歌', 'http://www.google.com', '2', '2015-12-16 16:39:10', '0');
INSERT INTO `news` VALUES ('5', '文世业北师大', '谷歌北师大', 'http://www.google.com', '2', '2015-12-16 16:40:14', '0');
INSERT INTO `news` VALUES ('6', 'bnuz', '北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大', 'http://www.baidu.com', '2', '2015-12-16 16:40:48', '0');
INSERT INTO `news` VALUES ('7', 'bnuz', '北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大', 'http://www.baidu.com', '2', '2015-12-16 16:41:35', '0');
INSERT INTO `news` VALUES ('8', 'bnuz', '北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大', 'http://www.baidu.com', '2', '2015-12-16 16:42:09', '1');
INSERT INTO `news` VALUES ('9', 'bnuz', '北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大', 'http://www.baidu.com', '2', '2015-12-16 16:42:48', '1');
INSERT INTO `news` VALUES ('10', '文世业', '文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业', 'http://www.google.com', '2', '2015-12-17 08:42:36', '1');
INSERT INTO `news` VALUES ('11', '文世业', '文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文世业文', 'http://www.google.com', '2', '2015-12-17 09:01:30', '1');
INSERT INTO `news` VALUES ('12', '北师大', '北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北', 'http://www.baidu.com', '2', '2015-12-17 09:02:53', '1');
INSERT INTO `news` VALUES ('13', '北师大', '北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师大北师', 'http://www.google.com', '2', '2015-12-17 09:03:22', '0');
INSERT INTO `news` VALUES ('14', '文世业', '文世业百度百科', 'http://www.google.com', '2', '2015-12-17 12:04:53', '0');
INSERT INTO `news` VALUES ('15', 'wenshiye', '新闻联播', 'http://www.baidu.com', '1', '2015-12-17 14:00:37', '0');
INSERT INTO `news` VALUES ('16', '北理工', '百度百科北师大', 'http://www.baidu.com', '1', '2015-12-17 14:44:45', '0');
INSERT INTO `news` VALUES ('17', '北理工', '百度百科北师大', 'http://www.baidu.com', '1', '2015-12-17 14:45:04', '0');
