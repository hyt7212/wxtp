/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50539
Source Host           : localhost:3306
Source Database       : wxtp

Target Server Type    : MYSQL
Target Server Version : 50539
File Encoding         : 65001

Date: 2015-01-11 23:16:37
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
INSERT INTO `wx_sysuser` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1420978034', '127.0.0.1', null);
INSERT INTO `wx_sysuser` VALUES ('2', 'lisi', 'e10adc3949ba59abbe56e057f20f883e', '1420977564', '0.0.0.0', '1412568427');
INSERT INTO `wx_sysuser` VALUES ('3', 'wangwu', '9f001e4166cf26bfbdd3b4f67d9ef617', '1412646251', '127.0.0.1', '1412568510');

-- ----------------------------
-- Table structure for wx_wechat_bindwechat
-- ----------------------------
DROP TABLE IF EXISTS `wx_wechat_bindwechat`;
CREATE TABLE `wx_wechat_bindwechat` (
  `wechatrecid` varchar(50) NOT NULL,
  `wechatnm` varchar(50) DEFAULT NULL,
  `appid` varchar(100) DEFAULT NULL,
  `appsecret` varchar(100) DEFAULT NULL,
  `wechatname` varchar(100) DEFAULT NULL,
  `wechatid` varchar(100) DEFAULT NULL,
  `rgncode` varchar(20) DEFAULT NULL,
  `rgnname` varchar(50) DEFAULT NULL,
  `serotype` varchar(20) DEFAULT NULL,
  `wechaturl` varchar(200) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `wechatemail` varchar(50) DEFAULT NULL,
  `wechatfansnum` int(11) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `comid` varchar(50) DEFAULT NULL,
  `wechatlogo` varchar(300) DEFAULT NULL,
  `userid` varchar(50) DEFAULT NULL,
  `logintype` varchar(20) DEFAULT NULL,
  `loginlivetime` int(11) DEFAULT NULL,
  `goworktime` varchar(50) DEFAULT NULL,
  `liveworktime` varchar(50) DEFAULT NULL,
  `workaddress` varchar(500) DEFAULT NULL,
  `workip` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`wechatrecid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_wechat_bindwechat
-- ----------------------------
INSERT INTO `wx_wechat_bindwechat` VALUES ('a23e2f10c1d2dfcef82bf777a6ebe7a8', '111', 'wxc7c0e4f4c69bf45b', 'f25f56bcefb28bc6536f8c59529901af', '微信ForTP', null, null, null, '', 'weixin/api?t=a23e2f10c1d2dfcef82bf777a6ebe7a8', '956727', '', '0', '2014-07-04 15:49:41', 'e9af1a213a94efabeeb59465e8e99c2f', '/rekewechat/ueditor/php/upload/e9af1a213a94efabeeb59465e8e99c2f/a/img/20140704/14044601726465.jpg', null, 'cookie', '30', null, null, null, null);

-- ----------------------------
-- Table structure for wx_wechat_contents
-- ----------------------------
DROP TABLE IF EXISTS `wx_wechat_contents`;
CREATE TABLE `wx_wechat_contents` (
  `contentid` varchar(50) NOT NULL,
  `contenttype` varchar(10) DEFAULT NULL,
  `content` text,
  `wechatrecid` varchar(50) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`contentid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_wechat_contents
-- ----------------------------
INSERT INTO `wx_wechat_contents` VALUES ('56420054edf932b6267df951e89dd49b', 'text', '正在开发中...', 'a23e2f10c1d2dfcef82bf777a6ebe7a8', '2014-12-03 11:42:36');
INSERT INTO `wx_wechat_contents` VALUES ('64f23f5eae04a25ae4bd3c9de06401c6', 'news', '[{\"detailid\":\"a12bd628d5d976b7de01637713ba92cb\",\"contentid\":\"64f23f5eae04a25ae4bd3c9de06401c6\",\"detailtitle\":\"\\u6211\\u7684\\u5730\\u76d8\",\"detailintro\":\"\\u70b9\\u51fb\\u8fdb\\u5165\\u6211\\u7684\\u5730\\u76d8\\uff0c\\u4eab\\u53d7\\u4e1c\\u539f\\u66f4\\u591a\\u6709\\u5fc3\\u6709\\u8da3\\u7684\\u4e92\\u52a8\\u4f53\\u9a8c\\u3002\",\"sortnum\":\"0\",\"detaillogo\":\"\\/dymedia\\/ueditor\\/php\\/upload\\/e9af1a213a94efabeeb59465e8e99c2f\\/a23e2f10c1d2dfcef82bf777a6ebe7a8\\/img\\/20150108\\/14206896489997.jpg\",\"linktype\":\"0\",\"detaillink\":\"http:\\/\\/server.51thekey.cn\\/dymedia\\/m\\/web\\/my_site\",\"mediaid\":\"bvCa3IkBezqdqH58p_XR28kywKbbBf3Qd-MzXflDhkhkNuPEi4bzagHhkkZtTMxs\"}]', 'a23e2f10c1d2dfcef82bf777a6ebe7a8', '2015-01-08 12:00:58');
INSERT INTO `wx_wechat_contents` VALUES ('81410a99a7ea46d1a9357570f44f3263', 'text', '欢迎您关注。', 'a23e2f10c1d2dfcef82bf777a6ebe7a8', '2014-12-24 12:08:35');

-- ----------------------------
-- Table structure for wx_wechat_reply
-- ----------------------------
DROP TABLE IF EXISTS `wx_wechat_reply`;
CREATE TABLE `wx_wechat_reply` (
  `replyid` varchar(50) NOT NULL,
  `replytype` varchar(50) DEFAULT NULL,
  `keyname` varchar(50) DEFAULT NULL,
  `contentid` varchar(50) DEFAULT NULL,
  `wechatrecid` varchar(50) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`replyid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_wechat_reply
-- ----------------------------
INSERT INTO `wx_wechat_reply` VALUES ('3777232535e196e5b64a087fa6862939', 'first', '', '81410a99a7ea46d1a9357570f44f3263', 'a23e2f10c1d2dfcef82bf777a6ebe7a8', '2014-12-24 12:08:47');
INSERT INTO `wx_wechat_reply` VALUES ('da16a5036d3cf6f2878fc43819e2e879', 'first?aid=a23e2f10c1d2dfcef82bf777a6ebe7a8', '', '81410a99a7ea46d1a9357570f44f3263', 'a23e2f10c1d2dfcef82bf777a6ebe7a8', '2014-12-24 12:12:14');
INSERT INTO `wx_wechat_reply` VALUES ('eefda180cf84f728d3a8b6293e648b9b', 'default', '', '81410a99a7ea46d1a9357570f44f3263', 'a23e2f10c1d2dfcef82bf777a6ebe7a8', '2014-12-24 12:14:55');
