/*
Navicat MySQL Data Transfer

Source Server         : 101.200.41.24
Source Server Version : 50726
Source Host           : 101.200.41.24:3306
Source Database       : yii2web

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2021-11-28 21:53:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for 2016interval_num
-- ----------------------------
DROP TABLE IF EXISTS `2016interval_num`;
CREATE TABLE `2016interval_num` (
  `my_interval` varchar(255) DEFAULT NULL,
  `my_num` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of 2016interval_num
-- ----------------------------
INSERT INTO `2016interval_num` VALUES ('less100', '211');
INSERT INTO `2016interval_num` VALUES ('100to200', '19');
INSERT INTO `2016interval_num` VALUES ('200to300', '6');
INSERT INTO `2016interval_num` VALUES ('300to400', '5');
INSERT INTO `2016interval_num` VALUES ('more400', '8');

-- ----------------------------
-- Table structure for athlete_num
-- ----------------------------
DROP TABLE IF EXISTS `athlete_num`;
CREATE TABLE `athlete_num` (
  `num` varchar(255) DEFAULT NULL,
  `Year` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of athlete_num
-- ----------------------------
INSERT INTO `athlete_num` VALUES ('380', '1896');
INSERT INTO `athlete_num` VALUES ('1936', '1900');
INSERT INTO `athlete_num` VALUES ('1301', '1904');
INSERT INTO `athlete_num` VALUES ('1733', '1906');
INSERT INTO `athlete_num` VALUES ('3101', '1908');
INSERT INTO `athlete_num` VALUES ('4040', '1912');
INSERT INTO `athlete_num` VALUES ('4292', '1920');
INSERT INTO `athlete_num` VALUES ('5233', '1924');
INSERT INTO `athlete_num` VALUES ('4992', '1928');
INSERT INTO `athlete_num` VALUES ('2969', '1932');
INSERT INTO `athlete_num` VALUES ('6506', '1936');
INSERT INTO `athlete_num` VALUES ('6405', '1948');
INSERT INTO `athlete_num` VALUES ('8270', '1952');
INSERT INTO `athlete_num` VALUES ('5127', '1956');
INSERT INTO `athlete_num` VALUES ('8119', '1960');
INSERT INTO `athlete_num` VALUES ('7702', '1964');
INSERT INTO `athlete_num` VALUES ('8588', '1968');
INSERT INTO `athlete_num` VALUES ('10304', '1972');
INSERT INTO `athlete_num` VALUES ('8641', '1976');
INSERT INTO `athlete_num` VALUES ('7191', '1980');
INSERT INTO `athlete_num` VALUES ('9454', '1984');
INSERT INTO `athlete_num` VALUES ('12037', '1988');
INSERT INTO `athlete_num` VALUES ('12977', '1992');
INSERT INTO `athlete_num` VALUES ('13780', '1996');
INSERT INTO `athlete_num` VALUES ('13821', '2000');
INSERT INTO `athlete_num` VALUES ('13443', '2004');
INSERT INTO `athlete_num` VALUES ('13602', '2008');
INSERT INTO `athlete_num` VALUES ('12920', '2012');
INSERT INTO `athlete_num` VALUES ('13688', '2016');

-- ----------------------------
-- Table structure for china_medal_num
-- ----------------------------
DROP TABLE IF EXISTS `china_medal_num`;
CREATE TABLE `china_medal_num` (
  `g` varchar(255) DEFAULT NULL,
  `s` varchar(255) DEFAULT NULL,
  `c` varchar(255) DEFAULT NULL,
  `t` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of china_medal_num
-- ----------------------------
INSERT INTO `china_medal_num` VALUES ('38', '32', '18', '2021');
INSERT INTO `china_medal_num` VALUES ('26', '18', '26', '2016');
INSERT INTO `china_medal_num` VALUES ('38', '27', '23', '2012');
INSERT INTO `china_medal_num` VALUES ('51', '21', '28', '2008');

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `news_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `comment_time` datetime DEFAULT NULL,
  `comment_content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`news_id`,`comment_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('1', '1', '2021-07-23 11:04:29', '??????????????????????????????');
INSERT INTO `comment` VALUES ('1', '2', '2021-07-28 11:06:46', '?????????????????????????????????????????????????????????????????????????????????????????????????????????');
INSERT INTO `comment` VALUES ('1', '3', '2021-07-29 11:10:03', '??????????????????');
INSERT INTO `comment` VALUES ('2', '1', '2021-10-07 11:17:01', '??????????????????????????????');
INSERT INTO `comment` VALUES ('2', '2', '2021-11-06 11:17:26', '????????????????????????');
INSERT INTO `comment` VALUES ('2', '3', '2021-07-09 11:18:32', '??????????????????????????????');
INSERT INTO `comment` VALUES ('2', '4', '2021-10-09 11:19:02', '?????????????????????????????????');
INSERT INTO `comment` VALUES ('3', '1', '2021-07-31 11:19:53', '??????2020');
INSERT INTO `comment` VALUES ('4', '1', '2021-08-12 11:20:26', '??????????????????');

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `message` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES ('1', 'John', '1234@qwer.asdf', '????????????', '?????????????????????????????????????????????????????????');
INSERT INTO `contact` VALUES ('2', '1234', '1234', '1234', '1234');
INSERT INTO `contact` VALUES ('3', '1234', 'wqer', 'asdf', 'zxcv');

-- ----------------------------
-- Table structure for country_medal_top10
-- ----------------------------
DROP TABLE IF EXISTS `country_medal_top10`;
CREATE TABLE `country_medal_top10` (
  `country` varchar(255) DEFAULT NULL,
  `GoldMedal` varchar(255) DEFAULT NULL,
  `SilverMedal` varchar(255) DEFAULT NULL,
  `BronzeMedal` varchar(255) DEFAULT NULL,
  `Total` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of country_medal_top10
-- ----------------------------
INSERT INTO `country_medal_top10` VALUES ('USA', '39', '41', '33', '113');
INSERT INTO `country_medal_top10` VALUES ('China', '38', '32', '18', '88');
INSERT INTO `country_medal_top10` VALUES ('ROC', '20', '28', '23', '71');
INSERT INTO `country_medal_top10` VALUES ('Great Britain', '22', '21', '22', '65');
INSERT INTO `country_medal_top10` VALUES ('Japan', '27', '14', '17', '58');
INSERT INTO `country_medal_top10` VALUES ('Australia', '17', '7', '22', '46');
INSERT INTO `country_medal_top10` VALUES ('Italy', '10', '10', '20', '40');
INSERT INTO `country_medal_top10` VALUES ('Germany', '10', '11', '16', '37');
INSERT INTO `country_medal_top10` VALUES ('Netherlands', '10', '12', '14', '36');
INSERT INTO `country_medal_top10` VALUES ('France', '10', '12', '11', '33');

-- ----------------------------
-- Table structure for developer
-- ----------------------------
DROP TABLE IF EXISTS `developer`;
CREATE TABLE `developer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `location` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `contact` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of developer
-- ----------------------------
INSERT INTO `developer` VALUES ('1', '?????????', 'Coding...Yead', '2021-11-27 22:49:00', '?????? ??????', 'https://bughere.github.io/');
INSERT INTO `developer` VALUES ('2', '?????????', '??????????????????', '2021-11-27 22:52:14', '?????? ??????', 'https://github.com/TheLastSavior');
INSERT INTO `developer` VALUES ('3', '?????????', '?????????????????????', '2021-11-27 22:53:06', '?????? ??????', 'https://github.com/5-456');
INSERT INTO `developer` VALUES ('4', '?????????', '??????????????????', '2021-11-27 22:53:08', '?????? ??????', 'https://github.com/Attractivehaha');

-- ----------------------------
-- Table structure for echart_test
-- ----------------------------
DROP TABLE IF EXISTS `echart_test`;
CREATE TABLE `echart_test` (
  `name` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `weight` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of echart_test
-- ----------------------------
INSERT INTO `echart_test` VALUES ('john', '20', '50');
INSERT INTO `echart_test` VALUES ('mahone', '30', '60');

-- ----------------------------
-- Table structure for info
-- ----------------------------
DROP TABLE IF EXISTS `info`;
CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of info
-- ----------------------------
INSERT INTO `info` VALUES ('1', '????????????????????????', '???????????????????????????????????????????????????11.30');
INSERT INTO `info` VALUES ('2', 'Hello', 'Hello');

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1637851105');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1637851116');
INSERT INTO `migration` VALUES ('m190124_110200_add_verification_token_column_to_user_table', '1637851116');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(255) DEFAULT NULL,
  `news_hits` int(11) DEFAULT NULL,
  `news_time` date DEFAULT NULL,
  `news_content` varchar(16000) DEFAULT NULL,
  PRIMARY KEY (`news_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', '??????????????????????????????????????????????????????????????????', '15', '2021-07-23', '????????????????????????7???23??????(?????????)??????????????????????????????????????????????????????????????????????????????5????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????\r\n\r\n?????????????????????7???23??????8???8??????????????????17???????????????????????????????????????5???????????????????????????????????????33????????????????????????339?????????????????????????????????????????????????????????????????????????????????????????????????????????\r\n\r\n??????1????????????????????????\r\n\r\n??????????????????19????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????2?????????????????????????????????????????????30???????????????7???22???????????????????????????????????????????????????111?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????\r\n\r\n2021???3???8??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????\r\n\r\n???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????\r\n\r\n???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????3????????????6??????????????????2???????????????2???????????????2???????????????\r\n\r\n??????2???????????????????????????\r\n\r\n??????????????????????????????????????????777?????????????????????431?????????????????????????????????????????????????????????????????????????????????????????????????????????138???????????????????????????25.4??????????????????????????????????????????????????????14?????????????????????????????????????????????52??????????????????????????????38??????\r\n\r\n????????????????????????431????????????????????????????????????????????????????????????????????????????????????24????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????\r\n\r\n?????????????????????????????????????????????????????????7???24???10???45???????????????10???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????\r\n\r\n?????????????????????????????????????????????????????????2000????????????????????????????????????????????????????????????????????????????????????????????????10??????????????????????????????????????????2017????????????????????????????????????????????????????????????????????????10???????????????????????????\r\n\r\n??????3?????????????????????????????????\r\n\r\n??????????????????????????????46??????????????????339???????????????????????????????????????????????????????????????\r\n\r\n???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????5???????????????????????????48????????????????????????????????????????????????????????????????????????????????????\r\n\r\n??????????????????????????????????????????35????????????????????????????????????7???25???????????????????????????????????????????????????????????????????????????????????????21????????????????????????????????????????????????????????????15????????????\r\n\r\n??????4????????????????????????????????????\r\n\r\n???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????\r\n\r\n???????????????????????????100???????????????????????????Gracenote????????????????????????????????????????????????????????????43????????????114?????????????????????????????????38????????????85????????????????????????????????????????????????34????????????59?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????\r\n\r\n????????????????????????????????????????????????????????????????????????613???????????? ????????????????????????????????????????????????1996???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????\r\n\r\n???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????\r\n\r\n???????????????????????????????????????582?????????????????????????????????????????????????????????????????????????????????????????????????????????30??????????????????????????????16?????????????????????????????????\r\n\r\n?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????30???????????????\r\n\r\n??????5????????????????????????????????????\r\n\r\n2016?????????????????????????????????????????????????????????????????????8?????????????????????????????????????????????A???????????????????????????????????????????????????????????????????????????????????????2020?????????????????????????????????????????????\r\n\r\n???????????????????????????????????????????????????????????????????????????\r\n\r\n???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????\r\n\r\n??????????????????5????????????????????????????????????????????????????????????????????????????????????????????????????????????(???)');
INSERT INTO `news` VALUES ('2', '?????????????????????????????????????????????', '300', '2021-07-24', '8???8??????????????????16?????????32????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????38????????????32????????????18??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????\r\n\r\n???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????1932??????????????????????????????????????????????????????1984??????????????????????????????????????????2008???????????????????????????2021???777????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????\r\n\r\n??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????9???98??????????????????????????????800??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????\r\n\r\n???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????\r\n\r\n??????????????????????????????????????????????????????????????????2021?????????????????????2022??????????????????????????????2024?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????');
INSERT INTO `news` VALUES ('3', '?????????????????????????????????????????????????????????', '30', '2021-07-24', '??????????????????????????????????????????12??????????????????????????????????????????????????????2024?????????2032?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????\r\n\r\n????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????80%??????????????????????????????????????????????????????');
INSERT INTO `news` VALUES ('4', '?????????????????????????????????2021???7???23?????????', '105', '2020-03-30', '3???30??????????????????????????????????????????????????????????????????????????????????????????7???23????????????????????????????????????3???30?????????????????????????????????????????????????????????????????????????????????2021???7???23??????????????????3???24????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????2020?????????????????????2021????????????????????????????????????3???30????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????2020???TOKYO2020???????????????');

-- ----------------------------
-- Table structure for news_comment
-- ----------------------------
DROP TABLE IF EXISTS `news_comment`;
CREATE TABLE `news_comment` (
  `news_id` varchar(255) DEFAULT NULL,
  `comment_id` varchar(255) DEFAULT NULL,
  `comment_time` varchar(255) DEFAULT NULL,
  `comment_content` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news_comment
-- ----------------------------
INSERT INTO `news_comment` VALUES ('1', '1', '23/7/2021 11:04:29', '??????????????????????????????');
INSERT INTO `news_comment` VALUES ('1', '2', '28/7/2021 11:06:46', '?????????????????????????????????????????????????????????????????????????????????????????????????????????');
INSERT INTO `news_comment` VALUES ('1', '3', '29/7/2021 11:10:03', '??????????????????');
INSERT INTO `news_comment` VALUES ('2', '1', '7/10/2021 11:17:01', '??????????????????????????????');
INSERT INTO `news_comment` VALUES ('2', '2', '6/11/2021 11:17:26', '????????????????????????');
INSERT INTO `news_comment` VALUES ('2', '3', '9/7/2021 11:18:32', '??????????????????????????????');
INSERT INTO `news_comment` VALUES ('2', '4', '9/10/2021 11:19:02', '?????????????????????????????????');
INSERT INTO `news_comment` VALUES ('3', '1', '31/7/2021 11:19:53', '??????2020');
INSERT INTO `news_comment` VALUES ('4', '1', '12/8/2021 11:20:26', '??????????????????');

-- ----------------------------
-- Table structure for test
-- ----------------------------
DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of test
-- ----------------------------
INSERT INTO `test` VALUES ('1', '2');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'root', 'vVmqi6053gPMXoCFVRfCc9KoUV_P-GAE', '$2y$13$8O/YSXWWy12a7l44onGhxekqcUFxysi92Deo0WAX4OqvrkjUp9Fbi', null, '1234@qwer.com', '10', '1637851178', '1637851178', '02y1Um_o94PXonLd7GwkFtgu7OY7yYJQ_1637851178');
