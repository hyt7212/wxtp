/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50539
Source Host           : localhost:3306
Source Database       : wxtp

Target Server Type    : MYSQL
Target Server Version : 50539
File Encoding         : 65001

Date: 2014-10-07 11:34:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tp_access
-- ----------------------------
DROP TABLE IF EXISTS `tp_access`;
CREATE TABLE `tp_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_access
-- ----------------------------
INSERT INTO `tp_access` VALUES ('1', '11', '3', null);
INSERT INTO `tp_access` VALUES ('1', '3', '2', null);
INSERT INTO `tp_access` VALUES ('1', '5', '3', null);
INSERT INTO `tp_access` VALUES ('1', '6', '3', null);
INSERT INTO `tp_access` VALUES ('1', '7', '3', null);
INSERT INTO `tp_access` VALUES ('1', '4', '2', null);
INSERT INTO `tp_access` VALUES ('1', '1', '1', null);
INSERT INTO `tp_access` VALUES ('2', '10', '3', null);
INSERT INTO `tp_access` VALUES ('2', '8', '3', null);
INSERT INTO `tp_access` VALUES ('2', '9', '3', null);

-- ----------------------------
-- Table structure for tp_node
-- ----------------------------
DROP TABLE IF EXISTS `tp_node`;
CREATE TABLE `tp_node` (
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
-- Records of tp_node
-- ----------------------------
INSERT INTO `tp_node` VALUES ('1', 'Admin', '后台应用', '1', null, '1', '0', '1');
INSERT INTO `tp_node` VALUES ('2', 'Home', '前台应用', '1', null, '1', '0', '1');
INSERT INTO `tp_node` VALUES ('3', 'Index', '后台首页', '1', null, '1', '1', '2');
INSERT INTO `tp_node` VALUES ('4', 'Rbac', 'RBAC权限控制', '1', null, '1', '1', '2');
INSERT INTO `tp_node` VALUES ('5', 'index', '用户列表', '1', null, '1', '4', '3');
INSERT INTO `tp_node` VALUES ('6', 'role', '角色列表', '1', null, '1', '4', '3');
INSERT INTO `tp_node` VALUES ('7', 'node', '节点列表', '1', null, '1', '4', '3');
INSERT INTO `tp_node` VALUES ('8', 'addUser', '添加用户', '1', null, '1', '4', '3');
INSERT INTO `tp_node` VALUES ('9', 'addRole', '添加角色', '1', null, '1', '4', '3');
INSERT INTO `tp_node` VALUES ('10', 'addNode', '添加节点', '1', null, '1', '4', '3');
INSERT INTO `tp_node` VALUES ('11', 'index', '后台首页', '1', null, '1', '3', '3');

-- ----------------------------
-- Table structure for tp_role
-- ----------------------------
DROP TABLE IF EXISTS `tp_role`;
CREATE TABLE `tp_role` (
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
-- Records of tp_role
-- ----------------------------
INSERT INTO `tp_role` VALUES ('1', 'Manager', null, '1', '管理员');
INSERT INTO `tp_role` VALUES ('2', 'Editor', null, '1', '网站编辑');

-- ----------------------------
-- Table structure for tp_role_user
-- ----------------------------
DROP TABLE IF EXISTS `tp_role_user`;
CREATE TABLE `tp_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_role_user
-- ----------------------------
INSERT INTO `tp_role_user` VALUES ('1', '2');
INSERT INTO `tp_role_user` VALUES ('1', '3');
INSERT INTO `tp_role_user` VALUES ('2', '3');

-- ----------------------------
-- Table structure for tp_sysuser
-- ----------------------------
DROP TABLE IF EXISTS `tp_sysuser`;
CREATE TABLE `tp_sysuser` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `logintime` varchar(50) DEFAULT NULL,
  `loginip` varchar(50) DEFAULT NULL,
  `addtime` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_sysuser
-- ----------------------------
INSERT INTO `tp_sysuser` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1412651912', '127.0.0.1', null);
INSERT INTO `tp_sysuser` VALUES ('2', 'lisi', 'dc3a8f1670d65bea69b7b65048a0ac40', '1412651399', '127.0.0.1', '1412568427');
INSERT INTO `tp_sysuser` VALUES ('3', 'wangwu', '9f001e4166cf26bfbdd3b4f67d9ef617', '1412646251', '127.0.0.1', '1412568510');
