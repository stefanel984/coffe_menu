/*
Navicat MySQL Data Transfer

Source Server         : sm
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : restoran

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2018-04-22 13:44:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('5', 'stefan', 'e4202e6faeee14a0e1730a39fa9e2c32');

-- ----------------------------
-- Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_of_product` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `kategorija` varchar(255) NOT NULL,
  `sub_kategorija` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `description` text,
  `delete_article` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', 'Ñ˜Ð°Ñ˜Ñ†Ð° Ð½Ð° Ð¾ÐºÐ¾', '200', 'breakfast', 'breakfast', 'breakfast', 'Ð´Ð²Ðµ Ñ˜Ð°Ñ˜Ñ†Ð°, Ð¼Ð¾Ñ€ÐºÐ¾Ð²...ÐºÐ¾Ð¼Ð¿Ð¸Ñ€', '0', null);
INSERT INTO `menu` VALUES ('2', 'ÑƒÑˆÑ‚Ðµ Ð¿Ð¾Ð´Ð¾Ð±Ñ€Ð°', '450', 'salads', 'salads', 'salads', 'testing servizio', '0', 'picture/2.');
