/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50539
Source Host           : localhost:3306
Source Database       : wxtp

Target Server Type    : MYSQL
Target Server Version : 50539
File Encoding         : 65001

Date: 2014-10-04 09:28:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for exp_kmd_sysuser
-- ----------------------------
DROP TABLE IF EXISTS `exp_kmd_sysuser`;
CREATE TABLE `exp_kmd_sysuser` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `userpwd` varchar(50) DEFAULT NULL,
  `usernickname` varchar(50) DEFAULT NULL,
  `rgnname` varchar(50) DEFAULT NULL,
  `usermobile` varchar(20) DEFAULT NULL,
  `useremail` varchar(50) DEFAULT NULL,
  `userqq` varchar(20) DEFAULT '',
  `userstatus` int(11) DEFAULT '0',
  `addtime` varchar(50) DEFAULT NULL,
  `comid` varchar(50) DEFAULT NULL,
  `lastlogintime` varchar(50) DEFAULT NULL,
  `userimg` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of exp_kmd_sysuser
-- ----------------------------
INSERT INTO `exp_kmd_sysuser` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', null, null, null, null, '', '0', null, null, null, null);
