/*
Navicat MySQL Data Transfer

Source Server         : PC Local
Source Server Version : 50719
Source Host           : localhost:3306
Source Database       : ci-start

Target Server Type    : MYSQL
Target Server Version : 50719
File Encoding         : 65001

Date: 2018-04-05 12:34:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for funcionario
-- ----------------------------
DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dt_nascimento` date DEFAULT NULL,
  `sexo` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of funcionario
-- ----------------------------
INSERT INTO `funcionario` VALUES ('6', 'Fabiana Fernandes', '2010-12-12', 'Feminino');
INSERT INTO `funcionario` VALUES ('7', 'Humberto Santos', '2010-04-03', 'Masculino');
INSERT INTO `funcionario` VALUES ('8', 'Kelly Silva', '2001-01-02', 'Feminino');
INSERT INTO `funcionario` VALUES ('9', 'Maria Joaquina', '1993-08-03', 'Feminino');
INSERT INTO `funcionario` VALUES ('10', 'Cirilo', '1993-11-02', 'Masculino');

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('1', 'João Maria', 'joao@email.com', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `usuario` VALUES ('2', 'Francisca Freitas', 'fran@email.com', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `usuario` VALUES ('3', 'Jorge da Silva', 'jorge@email.com', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `usuario` VALUES ('4', 'Maria 1', 'maria1@email.com', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `usuario` VALUES ('5', 'Maria 1231', 'maria1@email.com', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `usuario` VALUES ('6', 'Maria asdf', 'maria1@email.com', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `usuario` VALUES ('7', 'Maria asdf', 'maria1@email.com', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `usuario` VALUES ('8', 'Maria 12345', 'maria1@email.com', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `usuario` VALUES ('9', 'Maria La', 'maria1@email.com', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `usuario` VALUES ('10', 'MARIA MMMM', 'af@df.com', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `usuario` VALUES ('11', 'Karla 1', 'asdfasdf@email.com', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `usuario` VALUES ('12', 'Humberto 1', 'myyyyy@email.com', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `usuario` VALUES ('13', 'Hugo 1', 'mapppp@email.com', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `usuario` VALUES ('14', 'Marcelo 1', 'maria1@email.com', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `usuario` VALUES ('15', 'Diones Francisco de Jesus', 'diones@email.com', 'c33367701511b4f6020ec61ded352059');
INSERT INTO `usuario` VALUES ('16', 'Jessica 1', 'maria1@email.com', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `usuario` VALUES ('17', 'Gabriel 1', 'maria1@email.com', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `usuario` VALUES ('18', 'Maria 1', 'maria1@email.com', 'e10adc3949ba59abbe56e057f20f883e');
