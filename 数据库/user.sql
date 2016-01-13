/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : jiaxiao

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-01-13 22:53:47
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
  `school` varchar(512) NOT NULL COMMENT '报名驾校',
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
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('45', '文世业', '1004566303303991520', 'wenshiye', '1', '1', '2015-12-13', '13631224950', '936818307', 'bnuz', '936818307@qq.com', '44071119931175411', '1415668652055_middle18.jpg', '', null, 'C1', '2015-12-13 09:11:21', '1004566303303991520', null, null, '0', '0');
INSERT INTO `user` VALUES ('48', '文世业', '1459815261280119058', 'wenshiye', 'Tt3104826', '1', '2015-12-15', '13631224950', '936818307', 'bnuz', '936818307@qq.com', '44071119931175411', '1415668652055_middle24.jpg', '', null, 'M', '2015-12-15 16:35:49', '1459815261280119058', null, null, '0', '0');
INSERT INTO `user` VALUES ('55', '文世业', '1512881145812273664', 'admin6', 'Tt1111111', '0', '2016-01-13', '13631224950', '936818307', '江门', '936818307@qq.com', '440711199301175411', '1415668652055_middle2.jpg', '01', null, 'A3', '2016-01-13 21:34:45', '1512881145812273664', null, null, '0', '0');
INSERT INTO `user` VALUES ('53', '文世业', '256779294400363700', 'admin3', 'Tt111111', '0', '2016-01-13', '13631224950', '936818307', '江门', '936818307@qq.com', '440711199301175411', '1415668652055_middle.jpg', '01', null, 'A2', '2016-01-13 21:31:44', '256779294400363700', null, null, '0', '0');
INSERT INTO `user` VALUES ('49', '文世业', '258222137183405258', 'wenshiye2', 'Tt3104826', '0', '2016-01-13', '13631224950', '936818307', '江门', '936818307@qq.com', '440711199301175411', '', '01', null, 'A1', '2016-01-13 12:43:45', '258222137183405258', null, null, '0', '0');
INSERT INTO `user` VALUES ('54', '文世业', '2716390039342921552', 'admin5', 'tT1111111', '0', '2016-01-13', '13631224950', '936818307', '江门', '936818307@qq.com', '440711199301175411', '1415668652055_middle1.jpg', '01', null, 'A1', '2016-01-13 21:33:35', '2716390039342921552', null, null, '0', '0');
INSERT INTO `user` VALUES ('51', '文世业', '3277811294504796784', 'admin', 'Tt3104826', '0', '2016-01-13', '13631224950', '936818307', '江门', '936818307@qq.com', '440711199301175411', '', '01', null, 'A1', '2016-01-13 20:05:36', '3277811294504796784', null, null, '0', '0');
INSERT INTO `user` VALUES ('50', '文世业', '3738169762834638712', 'wenshiye3', 'Tt3104826', '0', '2016-01-13', '13631224950', '936818307', '江门', '936818307@qq.com', '440711199301175411', 'teacher-male.png', '01', null, 'M', '2016-01-13 19:58:24', '3738169762834638712', null, null, '0', '0');
INSERT INTO `user` VALUES ('52', '文世业', '3766584886076133450', 'admin1', 'Tt111111111', '0', '2016-01-13', '13631224950', '936818307', '江门', '936818307@qq.com', '440711199301175411', '', '01', null, 'A1', '2016-01-13 20:09:18', '3766584886076133450', null, null, '0', '0');
INSERT INTO `user` VALUES ('57', '文世业', '385273631387070250', 'admin8', 'Tt1111111', '0', '2016-01-13', '13631224950', '936818307', '江门', '936818307@qq.com', '440711199301175411', 'teacher-male2.png', '01', null, '道路旅客运输', '2016-01-13 21:43:27', '385273631387070250', null, null, '0', '0');
INSERT INTO `user` VALUES ('46', '文世业', '417912556999548290', 'parker', '1', '1', '2015-12-13', '13631224950', '936818307', 'bnuz', '936818307@qq.com', '44071119931175411', '1415668652055_middle19.jpg', '', null, 'C1', '2015-12-13 09:11:59', '417912556999548290', null, null, '0', '0');
INSERT INTO `user` VALUES ('47', '文世业', '580037411873286676', 'wenshiye', 'Tt3104826', '1', '2015-12-15', '13631224950', '936818307', 'bnuz', '936818307@qq.com', '44071119931175411', '1415668652055_middle23.jpg', '', null, 'C2', '2015-12-15 16:20:55', '580037411873286676', null, null, '0', '0');
INSERT INTO `user` VALUES ('56', '文世业', '66423555078231899', 'admin7', 'Tt111111', '0', '2016-01-13', '13631224950', '936818307', '江门', '936818307@qq.com', '440711199301175411', 'teacher-male1.png', '01', null, 'A2', '2016-01-13 21:42:18', '66423555078231899', null, null, '0', '0');
INSERT INTO `user` VALUES ('58', '文世业', '67654940155854996', 'wenshiye9', 'Tt111111', '0', '2016-01-13', '13631224950', '936818307', '江门', '936818307@qq.com', '440711199301175411', '1415668652055_middle3.jpg', '01', null, 'A1', '2016-01-13 22:48:33', '67654940155854996', null, null, '0', '0');
