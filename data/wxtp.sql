/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50539
Source Host           : localhost:3306
Source Database       : wxtp

Target Server Type    : MYSQL
Target Server Version : 50539
File Encoding         : 65001

Date: 2015-02-25 10:39:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for wx_access
-- ----------------------------
DROP TABLE IF EXISTS `wx_access`;
CREATE TABLE `wx_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_access
-- ----------------------------
INSERT INTO `wx_access` VALUES ('1', '11', '3', null);
INSERT INTO `wx_access` VALUES ('1', '3', '2', null);
INSERT INTO `wx_access` VALUES ('1', '5', '3', null);
INSERT INTO `wx_access` VALUES ('1', '6', '3', null);
INSERT INTO `wx_access` VALUES ('1', '7', '3', null);
INSERT INTO `wx_access` VALUES ('1', '4', '2', null);
INSERT INTO `wx_access` VALUES ('1', '1', '1', null);
INSERT INTO `wx_access` VALUES ('2', '10', '3', null);
INSERT INTO `wx_access` VALUES ('2', '8', '3', null);
INSERT INTO `wx_access` VALUES ('2', '9', '3', null);

-- ----------------------------
-- Table structure for wx_node
-- ----------------------------
DROP TABLE IF EXISTS `wx_node`;
CREATE TABLE `wx_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_node
-- ----------------------------
INSERT INTO `wx_node` VALUES ('1', 'Admin', '后台应用', '1', null, '1', '0', '1');
INSERT INTO `wx_node` VALUES ('2', 'Home', '前台应用', '1', null, '1', '0', '1');
INSERT INTO `wx_node` VALUES ('3', 'Index', '后台首页', '1', null, '1', '1', '2');
INSERT INTO `wx_node` VALUES ('4', 'Rbac', 'RBAC权限控制', '1', null, '1', '1', '2');
INSERT INTO `wx_node` VALUES ('5', 'index', '用户列表', '1', null, '1', '4', '3');
INSERT INTO `wx_node` VALUES ('6', 'role', '角色列表', '1', null, '1', '4', '3');
INSERT INTO `wx_node` VALUES ('7', 'node', '节点列表', '1', null, '1', '4', '3');
INSERT INTO `wx_node` VALUES ('8', 'addUser', '添加用户', '1', null, '1', '4', '3');
INSERT INTO `wx_node` VALUES ('9', 'addRole', '添加角色', '1', null, '1', '4', '3');
INSERT INTO `wx_node` VALUES ('10', 'addNode', '添加节点', '1', null, '1', '4', '3');
INSERT INTO `wx_node` VALUES ('11', 'index', '后台首页', '1', null, '1', '3', '3');

-- ----------------------------
-- Table structure for wx_role
-- ----------------------------
DROP TABLE IF EXISTS `wx_role`;
CREATE TABLE `wx_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_role
-- ----------------------------
INSERT INTO `wx_role` VALUES ('1', 'Manager', null, '1', '管理员');
INSERT INTO `wx_role` VALUES ('2', 'Editor', null, '1', '网站编辑');

-- ----------------------------
-- Table structure for wx_role_user
-- ----------------------------
DROP TABLE IF EXISTS `wx_role_user`;
CREATE TABLE `wx_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_role_user
-- ----------------------------
INSERT INTO `wx_role_user` VALUES ('1', '2');
INSERT INTO `wx_role_user` VALUES ('1', '3');
INSERT INTO `wx_role_user` VALUES ('2', '3');

-- ----------------------------
-- Table structure for wx_sysuser
-- ----------------------------
DROP TABLE IF EXISTS `wx_sysuser`;
CREATE TABLE `wx_sysuser` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `logintime` varchar(50) DEFAULT NULL,
  `loginip` varchar(50) DEFAULT NULL,
  `addtime` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_sysuser
-- ----------------------------
INSERT INTO `wx_sysuser` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1424175984', '127.0.0.1', null);
INSERT INTO `wx_sysuser` VALUES ('2', 'lisi', 'e10adc3949ba59abbe56e057f20f883e', '1420977564', '0.0.0.0', '1412568427');
INSERT INTO `wx_sysuser` VALUES ('3', 'wangwu', '9f001e4166cf26bfbdd3b4f67d9ef617', '1412646251', '127.0.0.1', '1412568510');

-- ----------------------------
-- Table structure for wx_wechatconfigs
-- ----------------------------
DROP TABLE IF EXISTS `wx_wechatconfigs`;
CREATE TABLE `wx_wechatconfigs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wechat_name` varchar(30) DEFAULT NULL COMMENT '公众号名称',
  `wechat_logourl` varchar(500) DEFAULT NULL COMMENT '公众号头像',
  `wechat_twocodeurl` varchar(500) DEFAULT NULL COMMENT '公众号二维码名片',
  `wechat_appid` varchar(255) DEFAULT NULL COMMENT '公众平台APPID',
  `wechat_appsecret` varchar(255) DEFAULT NULL COMMENT '公众平台appsecret',
  `wechat_token` varchar(255) DEFAULT NULL COMMENT '公众平台开发者模式验证token',
  `add_time` varchar(30) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_wechatconfigs
-- ----------------------------
INSERT INTO `wx_wechatconfigs` VALUES ('1', 'lampgp', 'http://www.lampgo.com', 'http://www.lampgo.com', 'appid', 'appsecret', 'token', '1424158872');

-- ----------------------------
-- Table structure for wx_wechatkeywords
-- ----------------------------
DROP TABLE IF EXISTS `wx_wechatkeywords`;
CREATE TABLE `wx_wechatkeywords` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL COMMENT '关键字类型：default（默认回复），text（文字回复），textimg（图文回复）',
  `keyword` varchar(255) DEFAULT NULL COMMENT '关键字',
  `content` text COMMENT '回复内容',
  `add_time` varchar(30) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_wechatkeywords
-- ----------------------------
INSERT INTO `wx_wechatkeywords` VALUES ('1', 'default', null, '谢谢', '1424158872');
INSERT INTO `wx_wechatkeywords` VALUES ('2', 'text', 'abc', 'aaaa', '1424158872');
