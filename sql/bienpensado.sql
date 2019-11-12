/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 100134
 Source Host           : localhost:3306
 Source Schema         : bienpensado

 Target Server Type    : MySQL
 Target Server Version : 100134
 File Encoding         : 65001

 Date: 11/11/2019 19:37:51
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bodegas
-- ----------------------------
DROP TABLE IF EXISTS `bodegas`;
CREATE TABLE `bodegas`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bodega` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of bodegas
-- ----------------------------
INSERT INTO `bodegas` VALUES (1, 'Centro');
INSERT INTO `bodegas` VALUES (2, 'Oriente');
INSERT INTO `bodegas` VALUES (3, 'Occidente');
INSERT INTO `bodegas` VALUES (4, 'Sur');

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bodega_id` tinyint(3) NULL DEFAULT NULL,
  `cantidad` int(4) NULL DEFAULT NULL,
  `estado` tinyint(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES (0, 'aaaaaaa', 3, 5, 1);
INSERT INTO `productos` VALUES (1, 'Memorias ', 1, 100, 1);
INSERT INTO `productos` VALUES (2, 'Discos Duros', 1, 50, 1);
INSERT INTO `productos` VALUES (3, 'Teclados', 2, 20, 1);
INSERT INTO `productos` VALUES (4, 'Routers', 3, 10, 0);
INSERT INTO `productos` VALUES (5, 'aaaaaaa', 3, 5, 1);
INSERT INTO `productos` VALUES (6, 'bbbbb', 2, 50, 1);
INSERT INTO `productos` VALUES (7, 'hhhhhhh', 4, 70, 1);
INSERT INTO `productos` VALUES (8, 'ppppp', 3, 80, 0);
INSERT INTO `productos` VALUES (9, 'oppppp', 4, 89, 1);
INSERT INTO `productos` VALUES (10, 'eeeee', 2, 5, 0);
INSERT INTO `productos` VALUES (11, 'wwwww', 2, 5, 1);

SET FOREIGN_KEY_CHECKS = 1;
