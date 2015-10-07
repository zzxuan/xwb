/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : xwb

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2015-10-03 18:19:44
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
  `stdstate` int(11) DEFAULT NULL,
  `stdtype` int(11) DEFAULT NULL,
  `stdphone` varchar(256) DEFAULT NULL,
  `stdqq` varchar(256) DEFAULT NULL,
  `stdvalue1` varchar(256) DEFAULT NULL,
  `stdvalue2` varchar(256) DEFAULT NULL,
  `stdvalue3` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`stdid`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xwb_student
-- ----------------------------

-- ----------------------------
-- Procedure structure for `p8`
-- ----------------------------
DROP PROCEDURE IF EXISTS `p8`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `p8`()
BEGIN 
DECLARE a INT;
END
;;
DELIMITER ;
