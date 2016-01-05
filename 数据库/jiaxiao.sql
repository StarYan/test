/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : jiaxiao

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-01-05 11:41:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `qq` varchar(16) DEFAULT NULL,
  `create_id` bigint(20) NOT NULL,
  `create_date` datetime NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', '文世业', 'admin', '13631224950', '936818307', '1', '2015-11-28 21:19:18', '0', '0');
INSERT INTO `admin` VALUES ('2', 'wenshiye', '文世业', 'wenshiye', '13631224950', '936818307', '1', '2015-11-29 15:47:43', '0', '0');

-- ----------------------------
-- Table structure for `appointment`
-- ----------------------------
DROP TABLE IF EXISTS `appointment`;
CREATE TABLE `appointment` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `coachandplaceid` int(11) NOT NULL COMMENT '教练与场地关系ID',
  `userid` int(11) NOT NULL COMMENT '用户id',
  `carid` bigint(20) NOT NULL COMMENT '车型',
  `a_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='预约';

-- ----------------------------
-- Records of appointment
-- ----------------------------
INSERT INTO `appointment` VALUES ('2', '3', '46', '1', '0');
INSERT INTO `appointment` VALUES ('6', '9', '46', '1', '0');
INSERT INTO `appointment` VALUES ('7', '1', '45', '2', '1');
INSERT INTO `appointment` VALUES ('8', '3', '46', '2', '0');
INSERT INTO `appointment` VALUES ('9', '1', '45', '2', '1');
INSERT INTO `appointment` VALUES ('10', '1', '45', '2', '0');
INSERT INTO `appointment` VALUES ('11', '2', '46', '2', '0');
INSERT INTO `appointment` VALUES ('12', '1', '45', '1', '0');

-- ----------------------------
-- Table structure for `cartype`
-- ----------------------------
DROP TABLE IF EXISTS `cartype`;
CREATE TABLE `cartype` (
  `id` int(128) NOT NULL AUTO_INCREMENT,
  `type` varchar(128) NOT NULL,
  `number` varchar(128) NOT NULL,
  `car_detail` varchar(128) NOT NULL,
  `img` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='车辆类型';

-- ----------------------------
-- Records of cartype
-- ----------------------------
INSERT INTO `cartype` VALUES ('1', 'C1', '粤C9527', 'black', '');
INSERT INTO `cartype` VALUES ('2', 'C2', '粤B9527', 'white', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of checked
-- ----------------------------
INSERT INTO `checked` VALUES ('2015-12-07 08:59:31', '1', '1', '31', '', '0');
INSERT INTO `checked` VALUES ('2015-12-07 04:08:56', '2', '1', '36', '住址格式错误', '0');
INSERT INTO `checked` VALUES ('2015-12-07 09:10:49', '3', '1', '35', '住址格式错误', '0');
INSERT INTO `checked` VALUES ('2015-12-07 16:12:16', '4', '1', '34', '上传的图片格式错误', '0');
INSERT INTO `checked` VALUES ('2015-12-10 11:51:22', '5', '1', '37', '', '0');
INSERT INTO `checked` VALUES ('2015-12-10 11:56:01', '6', '1', '1', '照片不符', '0');
INSERT INTO `checked` VALUES ('2015-12-12 22:28:07', '7', '2', '41', '', '0');
INSERT INTO `checked` VALUES ('2015-12-12 22:39:43', '8', '2', '40', '相片格式错误', '0');
INSERT INTO `checked` VALUES ('2015-12-12 22:42:07', '9', '2', '39', '', '0');
INSERT INTO `checked` VALUES ('2015-12-12 22:43:48', '10', '2', '38', '', '0');

-- ----------------------------
-- Table structure for `coach`
-- ----------------------------
DROP TABLE IF EXISTS `coach`;
CREATE TABLE `coach` (
  `id` int(128) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(128) NOT NULL,
  `tel` varchar(128) NOT NULL,
  `price` varchar(128) NOT NULL COMMENT '价格',
  `star` int(11) NOT NULL COMMENT '星级',
  `img` varchar(256) NOT NULL,
  `description` varchar(512) DEFAULT NULL,
  `school_name` varchar(256) DEFAULT NULL COMMENT '所属驾校名',
  `school_url` varchar(256) DEFAULT NULL COMMENT '所属驾校网址',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='教练表';

-- ----------------------------
-- Records of coach
-- ----------------------------
INSERT INTO `coach` VALUES ('1', '王小明', '13631224955', '20', '0', '12.jpg', null, '蓝光驾校', 'http://www.languang.com', '0');
INSERT INTO `coach` VALUES ('2', '王大明', '11111111', '333', '4', '2.jpg', null, '', '', '0');
INSERT INTO `coach` VALUES ('3', '王中明', '1243523623', '332', '5', '2.jpg', null, '', '', '0');
INSERT INTO `coach` VALUES ('4', '王明', '444323452', '222', '3', '2.jpg', null, '', '', '0');
INSERT INTO `coach` VALUES ('5', '王日', '12313131313', '123', '1', '2.jpg', null, '', '', '0');
INSERT INTO `coach` VALUES ('6', '王月', '32434121', '22', '0', '2.jpg', null, '', '', '0');
INSERT INTO `coach` VALUES ('7', '王口', '12312415', '12', '3', '3.jpg', null, '', '', '0');
INSERT INTO `coach` VALUES ('8', '王大日', '2341341', '44', '5', '2.jpg', null, '', '', '0');
INSERT INTO `coach` VALUES ('9', '王小日', '2341344', '66', '3', '2.jpg', null, '', '', '0');
INSERT INTO `coach` VALUES ('10', '王中日', '2313423414', '55', '3', '2.jpg', null, '', '', '0');
INSERT INTO `coach` VALUES ('11', '王日日', '134234234', '43', '3', '2.jpg', null, '', '', '0');
INSERT INTO `coach` VALUES ('12', '王教主', '1231313', '22', '0', '1415668652055_middle38.jpg', 'good', null, null, '0');

-- ----------------------------
-- Table structure for `coachandplace`
-- ----------------------------
DROP TABLE IF EXISTS `coachandplace`;
CREATE TABLE `coachandplace` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placeid` int(11) NOT NULL,
  `coachid` int(11) NOT NULL,
  `timeid` int(11) NOT NULL COMMENT '预约时间id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='教练与场地关系';

-- ----------------------------
-- Records of coachandplace
-- ----------------------------
INSERT INTO `coachandplace` VALUES ('1', '1', '1', '1');
INSERT INTO `coachandplace` VALUES ('2', '1', '1', '3');
INSERT INTO `coachandplace` VALUES ('3', '2', '1', '4');
INSERT INTO `coachandplace` VALUES ('9', '2', '2', '4');
INSERT INTO `coachandplace` VALUES ('10', '1', '3', '1');

-- ----------------------------
-- Table structure for `evaluate`
-- ----------------------------
DROP TABLE IF EXISTS `evaluate`;
CREATE TABLE `evaluate` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL COMMENT '学员的ID',
  `coach_id` bigint(20) NOT NULL COMMENT '教练的ID',
  `star` tinyint(1) NOT NULL DEFAULT '0' COMMENT '星星的数量',
  `remark` varchar(512) CHARACTER SET utf8 DEFAULT NULL COMMENT '备注',
  `create_date` datetime NOT NULL COMMENT '评价的时间',
  `deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '(0表示显示，1表示不显示)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of evaluate
-- ----------------------------
INSERT INTO `evaluate` VALUES ('1', '45', '1', '3', '???', '2015-12-20 08:34:25', '0');
INSERT INTO `evaluate` VALUES ('2', '45', '1', '4', '好', '2015-12-20 16:21:28', '0');
INSERT INTO `evaluate` VALUES ('3', '45', '1', '3', '好', '2015-12-20 16:22:15', '0');
INSERT INTO `evaluate` VALUES ('4', '45', '1', '4', '好', '2015-12-20 16:22:52', '0');
INSERT INTO `evaluate` VALUES ('5', '45', '1', '4', '', '2015-12-21 02:18:14', '0');
INSERT INTO `evaluate` VALUES ('6', '45', '1', '4', '', '2015-12-21 02:18:25', '0');
INSERT INTO `evaluate` VALUES ('7', '45', '1', '3', '', '2015-12-21 02:18:39', '0');
INSERT INTO `evaluate` VALUES ('8', '45', '1', '3', '', '2015-12-21 02:28:46', '0');
INSERT INTO `evaluate` VALUES ('9', '45', '3', '3', '', '2015-12-21 02:28:51', '0');
INSERT INTO `evaluate` VALUES ('10', '45', '1', '5', '', '2015-12-21 02:32:32', '0');
INSERT INTO `evaluate` VALUES ('11', '45', '2', '5', '', '2015-12-21 02:32:33', '0');
INSERT INTO `evaluate` VALUES ('12', '45', '3', '3', '', '2015-12-21 02:33:04', '0');
INSERT INTO `evaluate` VALUES ('13', '45', '1', '2', '', '2015-12-21 02:39:09', '0');
INSERT INTO `evaluate` VALUES ('14', '45', '3', '2', '', '2015-12-21 02:39:10', '0');
INSERT INTO `evaluate` VALUES ('15', '45', '1', '2', '', '2015-12-21 02:40:35', '0');
INSERT INTO `evaluate` VALUES ('16', '45', '2', '2', '', '2015-12-21 02:40:35', '0');
INSERT INTO `evaluate` VALUES ('17', '45', '3', '3', '', '2015-12-21 02:45:32', '0');
INSERT INTO `evaluate` VALUES ('18', '45', '2', '2', '', '2015-12-21 02:45:41', '0');
INSERT INTO `evaluate` VALUES ('19', '45', '6', '3', '', '2015-12-21 02:51:04', '0');
INSERT INTO `evaluate` VALUES ('20', '45', '10', '2', '', '2015-12-21 05:02:07', '0');
INSERT INTO `evaluate` VALUES ('21', '45', '11', '3', '', '2016-01-05 11:02:23', '0');

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

-- ----------------------------
-- Table structure for `place`
-- ----------------------------
DROP TABLE IF EXISTS `place`;
CREATE TABLE `place` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `description` varchar(256) NOT NULL COMMENT '描述',
  `img` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='场地表';

-- ----------------------------
-- Records of place
-- ----------------------------
INSERT INTO `place` VALUES ('1', '北师大', '北师大', '无', '');
INSERT INTO `place` VALUES ('2', '北理工', '北理工', '无', '');
INSERT INTO `place` VALUES ('3', '北师大', 'bnuz', '北师大', '1415668652055_middle20.jpg');
INSERT INTO `place` VALUES ('4', 'bnuz', '北师大珠海分校', '京华5栋', '1415668652055_middle22.jpg');

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

-- ----------------------------
-- Table structure for `time`
-- ----------------------------
DROP TABLE IF EXISTS `time`;
CREATE TABLE `time` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of time
-- ----------------------------
INSERT INTO `time` VALUES ('1', '10:00-12:00');
INSERT INTO `time` VALUES ('2', '13:00-15:00');
INSERT INTO `time` VALUES ('3', '16:00-18:00');
INSERT INTO `time` VALUES ('4', '20:00-22:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('45', '文世业', '1004566303303991520', 'wenshiye', '1', '1', '2015-12-13', '13631224950', '936818307', 'bnuz', '936818307@qq.com', '44071119931175411', '1415668652055_middle18.jpg', null, 'C1', '2015-12-13 09:11:21', '1004566303303991520', null, null, '0', '0');
INSERT INTO `user` VALUES ('48', '文世业', '1459815261280119058', 'wenshiye', 'Tt3104826', '1', '2015-12-15', '13631224950', '936818307', 'bnuz', '936818307@qq.com', '44071119931175411', '1415668652055_middle24.jpg', null, 'M', '2015-12-15 16:35:49', '1459815261280119058', null, null, '0', '0');
INSERT INTO `user` VALUES ('46', '文世业', '417912556999548290', 'parker', '1', '1', '2015-12-13', '13631224950', '936818307', 'bnuz', '936818307@qq.com', '44071119931175411', '1415668652055_middle19.jpg', null, 'C1', '2015-12-13 09:11:59', '417912556999548290', null, null, '0', '0');
INSERT INTO `user` VALUES ('47', '文世业', '580037411873286676', 'wenshiye', 'Tt3104826', '1', '2015-12-15', '13631224950', '936818307', 'bnuz', '936818307@qq.com', '44071119931175411', '1415668652055_middle23.jpg', null, 'C2', '2015-12-15 16:20:55', '580037411873286676', null, null, '0', '0');
