/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : jiaxiao

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-01-30 13:40:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `school_register`
-- ----------------------------
DROP TABLE IF EXISTS `school_register`;
CREATE TABLE `school_register` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(512) CHARACTER SET utf8 NOT NULL COMMENT '用户名',
  `password` varchar(512) NOT NULL COMMENT '用户密码',
  `school_name` varchar(512) CHARACTER SET utf8 NOT NULL COMMENT '驾校的名称',
  `name` varchar(512) CHARACTER SET utf8 NOT NULL COMMENT '联系人名字',
  `tel` varchar(20) NOT NULL COMMENT '联系电话',
  `licence` varchar(512) NOT NULL COMMENT '驾校营业执照',
  `img` varchar(512) NOT NULL COMMENT '驾校照片路劲',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态(0表示未审核，1表示审核合格，2表示审核不合格)',
  `remark` varchar(512) CHARACTER SET utf8 DEFAULT NULL COMMENT '备注(审核不合格的原因)',
  `create_date` datetime NOT NULL COMMENT '注册的时间',
  `update_id` bigint(20) NOT NULL COMMENT '更新信息的管理员id',
  `update_date` datetime NOT NULL COMMENT '更新时间',
  `deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否显示(0表示显示，1表示不显示)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of school_register
-- ----------------------------
INSERT INTO `school_register` VALUES ('17', 'wenshiye', 'Tt111111', '蓝光驾校', '文世业', '13631224955', '130200000037066', '11101114535548.jpg', '1', '', '2016-01-30 10:55:57', '1', '2016-01-30 10:59:38', '0');
