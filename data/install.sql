/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50090
Source Host           : localhost:3306
Source Database       : yii2web

Target Server Type    : MYSQL
Target Server Version : 50090
File Encoding         : 65001

Date: 2021-11-25 22:53:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) default NULL,
  PRIMARY KEY  (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1637851105');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1637851116');
INSERT INTO `migration` VALUES ('m190124_110200_add_verification_token_column_to_user_table', '1637851116');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(255) collate utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) collate utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) collate utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) collate utf8_unicode_ci default NULL,
  `email` varchar(255) collate utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL default '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'root', 'vVmqi6053gPMXoCFVRfCc9KoUV_P-GAE', '$2y$13$8O/YSXWWy12a7l44onGhxekqcUFxysi92Deo0WAX4OqvrkjUp9Fbi', null, '1234@qwer.com', '10', '1637851178', '1637851178', '02y1Um_o94PXonLd7GwkFtgu7OY7yYJQ_1637851178');
