/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : jiaxiao

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-12-29 23:03:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ranking`
-- ----------------------------
DROP TABLE IF EXISTS `ranking`;
CREATE TABLE `ranking` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(512) CHARACTER SET utf8 NOT NULL COMMENT '驾校的名字',
  `school_address` varchar(512) CHARACTER SET utf8 NOT NULL COMMENT '驾校的地址',
  `school_tel` varchar(256) NOT NULL COMMENT '驾校的联系电话',
  `school_url` varchar(512) NOT NULL COMMENT '驾校的网址',
  `pass_rate` decimal(10,2) NOT NULL COMMENT '驾校考试通过率',
  `score` decimal(10,2) NOT NULL COMMENT '驾校分数',
  `create_id` bigint(20) NOT NULL COMMENT '生成当前信息的管理员ID',
  `create_date` datetime NOT NULL COMMENT '生成当前信息的日期',
  `update_id` bigint(20) NOT NULL COMMENT '更新当前信息的管理员ID',
  `update_date` datetime NOT NULL COMMENT '更新当前信息的日期',
  `deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0表示没删除，1表示删除(默认为0)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ranking
-- ----------------------------
INSERT INTO `ranking` VALUES ('1', '珠海市铭骏驾驶员培训有限公司', '珠海市南屏大桥右侧丰华路华发容闳书院右侧（华发五期2号门对面）', '0756-6872866', 'http://www.11467.com/zhuhai/co/105527.htm', '50.00', '55.50', '1', '2015-12-28 20:36:56', '2', '2015-12-29 14:49:13', '0');
INSERT INTO `ranking` VALUES ('2', '珠海市祥顺机动车驾驶员培训有限公司', '南屏街口巴士站下车往步行街走进、鹏泰商场一楼', '8123933', 'http://www.houxue.com/xuexiao/55573/', '40.20', '44.00', '2', '2015-12-28 21:27:42', '2', '2015-12-29 14:50:40', '0');
INSERT INTO `ranking` VALUES ('3', '南京龙华驾驶员培训中心', '城南风景区菊花台公园旁安', '400-000-4040', '', '33.00', '33.00', '2', '2015-12-28 21:52:24', '2', '2015-12-28 22:19:50', '1');
INSERT INTO `ranking` VALUES ('4', '珠海市祥顺机动车驾驶员培训有限公司', '南屏街口巴士站下车往步行街走进、鹏泰商场一楼', '8123933', '', '40.20', '44.00', '2', '2015-12-28 21:52:39', '2', '2015-12-28 21:52:39', '1');
INSERT INTO `ranking` VALUES ('5', '南京龙华驾驶员培训中心', '城南风景区菊花台公园旁安', '400-000-4040', '', '33.00', '32.00', '2', '2015-12-28 22:37:15', '2', '2015-12-28 22:37:15', '1');
