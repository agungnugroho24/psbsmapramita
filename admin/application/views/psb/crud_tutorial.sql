/*
MySQL Data Transfer
Source Host: localhost
Source Database: crud_tutorial
Target Host: localhost
Target Database: crud_tutorial
Date: 10/29/2014 12:40:03 PM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for customers
-- ----------------------------
DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `customers` VALUES ('18', 'GeekRedz', 'geeeeeek@yahoo.com', '09090909');
