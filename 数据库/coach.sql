/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : jiaxiao

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-01-30 13:40:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `coach`
-- ----------------------------
DROP TABLE IF EXISTS `coach`;
CREATE TABLE `coach` (
  `id` int(128) NOT NULL AUTO_INCREMENT,
  `coach_id` varchar(128) NOT NULL COMMENT '教练id',
  `c_name` varchar(128) NOT NULL COMMENT '教练的名字',
  `qualification_certificate` varchar(128) NOT NULL COMMENT '教练资格证号',
  `tel` varchar(128) NOT NULL COMMENT '教练的电话',
  `price` varchar(128) NOT NULL COMMENT '价格',
  `star` int(11) NOT NULL COMMENT '星级',
  `img` varchar(256) NOT NULL COMMENT '教练的图片',
  `description` varchar(512) DEFAULT NULL COMMENT '教练的简介',
  `school_id` bigint(20) DEFAULT NULL COMMENT '驾校ID',
  `school_name` varchar(256) DEFAULT NULL COMMENT '所属驾校名',
  `school_url` varchar(256) DEFAULT NULL COMMENT '所属驾校网址',
  `student_num` tinyint(10) NOT NULL DEFAULT '0' COMMENT '教练所带学员的数量',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COMMENT='教练表';

-- ----------------------------
-- Records of coach
-- ----------------------------
INSERT INTO `coach` VALUES ('1', '', '王小明', '22222', '13631224955', '20', '1', 'teacher-male.png', null, '1', '蓝光驾校', 'http://www.languang.com', '5', '0');
INSERT INTO `coach` VALUES ('2', '', '王大明', '13434132', '11111111', '333', '1', 'teacher-male.png', null, '1', '蓝光驾校', '', '0', '0');
INSERT INTO `coach` VALUES ('3', '', '王中明', '3443552345', '1243523623', '332', '2', 'teacher-male.png', null, '1', '蓝光驾校', '', '3', '0');
INSERT INTO `coach` VALUES ('4', '', '王明', '', '444323452', '222', '4', 'teacher-male.png', null, '1', '蓝光驾校', '', '0', '0');
INSERT INTO `coach` VALUES ('5', '', '王日', '', '12313131313', '123', '3', 'teacher-male.png', null, '1', '蓝光驾校', '', '0', '0');
INSERT INTO `coach` VALUES ('6', '', '王月', '', '32434121', '22', '4', 'teacher-male.png', null, '2', '蓝光驾校', '', '0', '0');
INSERT INTO `coach` VALUES ('7', '', '王口', '', '12312415', '12', '3', 'teacher-male.png', null, '2', '蓝光驾校', '', '0', '0');
INSERT INTO `coach` VALUES ('8', '', '王大日', '', '2341341', '44', '5', 'teacher-male.png', null, '2', '蓝光驾校', '', '0', '0');
INSERT INTO `coach` VALUES ('9', '', '王小日', '', '2341344', '66', '4', 'teacher-male.png', null, '1', '蓝光驾校', '', '0', '0');
INSERT INTO `coach` VALUES ('10', '', '王中日', '', '2313423414', '55', '3', 'teacher-male.png', null, '1', '蓝光驾校', '', '0', '0');
INSERT INTO `coach` VALUES ('11', '', '王日日', '', '134234234', '43', '3', 'teacher-male.png', null, '7', '蓝光驾校', '', '0', '1');
INSERT INTO `coach` VALUES ('12', '', '王教主', '', '1231313', '22', '4', 'teacher-male.png', 'good', '1', '蓝光驾校', null, '0', '0');
INSERT INTO `coach` VALUES ('13', '', '王小明', '11111111', '123241543534', '444', '0', 'teacher-male19.png', null, '1', null, null, '3', '0');
INSERT INTO `coach` VALUES ('14', '', '王大明', '323412313', '13135435345', '333', '0', 'teacher-male20.png', null, '3', null, null, '2', '0');
INSERT INTO `coach` VALUES ('15', '', '王大明', '23413123', '13631224955', '222', '2', 'teacher-male21.png', null, '7', null, null, '0', '0');
INSERT INTO `coach` VALUES ('16', '', '王大明', '123124353453', '13631224955', '100', '0', 'teacher-male24.png', null, '8', '蓝光驾校', null, '3', '0');
INSERT INTO `coach` VALUES ('17', '', '王小明', '123124353454', '13631224954', '120', '0', 'teacher-male25.png', null, '8', '蓝光驾校', null, '1', '0');
