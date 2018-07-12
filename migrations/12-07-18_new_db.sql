/*
Navicat MySQL Data Transfer

Source Server         : Vagrant_Lamp
Source Server Version : 50722
Source Host           : localhost:3306
Source Database       : new_db

Target Server Type    : MYSQL
Target Server Version : 50722
File Encoding         : 65001

Date: 2018-07-12 15:48:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `lang` enum('ru','ua','en') NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'user1', 'qwerty', 'John', 'Doe', 'a@mail.ru', 'en', '2018-06-09');
INSERT INTO `users` VALUES ('2', 'qq', 'qq', 'qq', 'qq', 'admin@lamp-dev.com', 'ru', '2018-06-08');
INSERT INTO `users` VALUES ('3', 'er', 'er', 'Andrey', 'rt', 'admin@lamp-dev.com', 'ru', '2018-06-08');
INSERT INTO `users` VALUES ('4', 'gderiyenko', 'password', 'gleb', 'deriyenko', 'gleb.deriyenko@gmail.co', '', '2018-07-10');
INSERT INTO `users` VALUES ('5', '', 'pass', 'test', 'tested', 'test@mail.com', '', '2018-07-10');
SET FOREIGN_KEY_CHECKS=1;
