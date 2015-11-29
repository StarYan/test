/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : jiaxiao

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-11-29 09:47:50
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
  `password` varchar(128) NOT NULL,
  `sex` tinyint(1) DEFAULT '0',
  `birthday` date NOT NULL,
  `phone` varchar(128) NOT NULL,
  `qq` varchar(16) DEFAULT NULL,
  `address` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `idcard` varchar(32) NOT NULL,
  `photo` varchar(128) NOT NULL,
  `original_car_type` varchar(64) DEFAULT NULL COMMENT '用户原准驾车型',
  `wanted_car_type` varchar(64) NOT NULL COMMENT '用户需要培训的车型',
  `create_date` datetime NOT NULL COMMENT '注册日期',
  `create_id` bigint(20) NOT NULL COMMENT '注册人ID',
  `status` tinyint(1) DEFAULT '0' COMMENT '0代表未审核，1代表审核合格，2代表审核不合格',
  `deleted` tinyint(1) DEFAULT '0' COMMENT '0代表显示,1代表不显示',
  PRIMARY KEY (`num`),
  KEY `ID` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '文世业', '1201010090', 'wenshiye', '1', '1993-01-17', '13631224950', '936818307', '北京师范大珠海分校', '936818307@qq.com', '440711199301175411', 'wen.jpg', null, 'C1', '2015-11-28 23:54:01', '1', '0', '0');
