/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : xwb

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2015-09-21 21:47:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `xwb_student`
-- ----------------------------
DROP TABLE IF EXISTS `xwb_student`;
CREATE TABLE `xwb_student` (
  `stdid` int(11) NOT NULL AUTO_INCREMENT,
  `stdname` varchar(256) DEFAULT NULL,
  `stdgender` varchar(32) DEFAULT NULL,
  `stdnum` varchar(256) DEFAULT NULL,
  `stdschool` varchar(512) DEFAULT NULL,
  `stdgrade` varchar(256) DEFAULT NULL,
  `stdaddress` varchar(2048) DEFAULT NULL,
  `stdpayaddress` varchar(1024) DEFAULT NULL,
  `createtime` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`stdid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xwb_student
-- ----------------------------
INSERT INTO `xwb_student` VALUES ('1', '23123123', '男', '421421444444444', '2131231231232312312131223', '四年级', '2313213221332132131231', '西安弘文教育', null);
INSERT INTO `xwb_student` VALUES ('2', '111', '男', '123', '123213', '四年级', '421214142412', '西安弘文教育', null);
INSERT INTO `xwb_student` VALUES ('3', '小明', '男', '123456', '西大', '初一年级', '边家村', '西安朗文学校子成教育', null);
INSERT INTO `xwb_student` VALUES ('4', '张三', '男', '12345', '23123123', '四年级', '3123123123123123', '西安弘文教育', null);
INSERT INTO `xwb_student` VALUES ('5', '李四', '男', '222', '222222222222222222', '四年级', '2222222222222222222222222222222222222', '西安朗文学校金博士分校', '2015-09-21 21:46:22');
