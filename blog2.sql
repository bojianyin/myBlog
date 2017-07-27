/*
Navicat MySQL Data Transfer

Source Server         : lbo
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : blog2

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-07-27 10:12:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for attr
-- ----------------------------
DROP TABLE IF EXISTS `attr`;
CREATE TABLE `attr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of attr
-- ----------------------------
INSERT INTO `attr` VALUES ('1', '点赞', '#0000ff');
INSERT INTO `attr` VALUES ('2', '收藏', '#ff0080');
INSERT INTO `attr` VALUES ('3', '喜欢', '#ff0000');
INSERT INTO `attr` VALUES ('4', '你你你', '#00ff00');

-- ----------------------------
-- Table structure for attr_blog
-- ----------------------------
DROP TABLE IF EXISTS `attr_blog`;
CREATE TABLE `attr_blog` (
  `aid` int(50) NOT NULL,
  `bid` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of attr_blog
-- ----------------------------
INSERT INTO `attr_blog` VALUES ('3', '11');
INSERT INTO `attr_blog` VALUES ('3', '13');
INSERT INTO `attr_blog` VALUES ('1', '13');
INSERT INTO `attr_blog` VALUES ('4', '15');
INSERT INTO `attr_blog` VALUES ('3', '15');
INSERT INTO `attr_blog` VALUES ('1', '15');
INSERT INTO `attr_blog` VALUES ('1', '16');
INSERT INTO `attr_blog` VALUES ('2', '16');
INSERT INTO `attr_blog` VALUES ('3', '16');
INSERT INTO `attr_blog` VALUES ('1', '17');
INSERT INTO `attr_blog` VALUES ('1', '18');
INSERT INTO `attr_blog` VALUES ('2', '18');
INSERT INTO `attr_blog` VALUES ('3', '19');

-- ----------------------------
-- Table structure for blog
-- ----------------------------
DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `click` int(50) NOT NULL,
  `createtime` int(50) NOT NULL,
  `cid` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog
-- ----------------------------
INSERT INTO `blog` VALUES ('16', '我们的少年时代新剧情', '今天开播地30集', '1', '1501053802', '11');
INSERT INTO `blog` VALUES ('13', '生生世世', '阿飞v地方', '6', '1500974740', '5');
INSERT INTO `blog` VALUES ('15', '小薄特大喜讯', '喜欢就点我吧', '0', '1501053543', '4');
INSERT INTO `blog` VALUES ('17', '楚乔传', '快大结局了啊\r\n', '0', '1501053893', '10');
INSERT INTO `blog` VALUES ('18', 'bobo', 'asvsd', '1', '1501059605', '6');
INSERT INTO `blog` VALUES ('19', 'xxxx', 'bfggh', '0', '1501059634', '1');

-- ----------------------------
-- Table structure for cate
-- ----------------------------
DROP TABLE IF EXISTS `cate`;
CREATE TABLE `cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pid` int(50) NOT NULL DEFAULT '0',
  `sort` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cate
-- ----------------------------
INSERT INTO `cate` VALUES ('1', '前端技术', '0', '1');
INSERT INTO `cate` VALUES ('2', '后台技术', '0', '2');
INSERT INTO `cate` VALUES ('3', 'yii', '2', '50');
INSERT INTO `cate` VALUES ('4', 'think', '2', '50');
INSERT INTO `cate` VALUES ('5', 'html+css+js', '1', '2');
INSERT INTO `cate` VALUES ('6', 'angular', '1', '1');
INSERT INTO `cate` VALUES ('7', 'vue', '1', '3');
INSERT INTO `cate` VALUES ('8', 'layui', '1', '4');
INSERT INTO `cate` VALUES ('9', '电视剧', '0', '50');
INSERT INTO `cate` VALUES ('10', '楚乔传', '9', '2');
INSERT INTO `cate` VALUES ('11', '我们的少年时代', '9', '1');
INSERT INTO `cate` VALUES ('12', '醉玲珑', '9', '3');
INSERT INTO `cate` VALUES ('13', '其他', '9', '50');
INSERT INTO `cate` VALUES ('14', '热门', '0', '50');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `logintime` int(50) DEFAULT NULL,
  `loginip` varchar(255) DEFAULT NULL,
  `tx` varchar(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('2', 'lbo', 'e10adc3949ba59abbe56e057f20f883e', '1500883057', '0.0.0.0', '59781cdc04816.jpg');
INSERT INTO `user` VALUES ('5', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1501043407', '0.0.0.0', '59781c5dcfaba.png');
