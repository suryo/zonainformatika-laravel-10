/*
 Navicat Premium Data Transfer

 Source Server         : xampp72
 Source Server Type    : MySQL
 Source Server Version : 100414
 Source Host           : localhost:3306
 Source Schema         : virtual_courses

 Target Server Type    : MySQL
 Target Server Version : 100414
 File Encoding         : 65001

 Date: 25/04/2024 15:09:09
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for course_technology
-- ----------------------------
DROP TABLE IF EXISTS `course_technology`;
CREATE TABLE `course_technology`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `deleted` enum('false','true') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of course_technology
-- ----------------------------
INSERT INTO `course_technology` VALUES (1, 'PHP', 'square_php_block.png', 'algorithm', NULL, 'false', NULL, '2022-12-06 16:23:30');
INSERT INTO `course_technology` VALUES (2, 'Laravel', 'square_laravel_block.png', 'php', NULL, 'false', NULL, '2022-12-06 16:23:56');
INSERT INTO `course_technology` VALUES (3, 'Javascript', 'square_javascript_block.png', 'codeigniter', NULL, 'false', '2022-12-06 16:24:05', '2022-12-06 16:24:05');
INSERT INTO `course_technology` VALUES (4, 'Java', 'square_java_block.png', 'laravel', NULL, 'false', '2022-12-06 16:24:12', '2022-12-06 16:24:12');
INSERT INTO `course_technology` VALUES (5, 'Database', 'square_database_block.png', 'react-native', NULL, 'false', '2022-12-06 16:24:24', '2022-12-06 16:24:24');
INSERT INTO `course_technology` VALUES (6, 'Codeigniter', 'square_codeigniter_block.png', 'cordova', NULL, 'false', '2022-12-06 16:24:32', '2022-12-06 16:24:32');
INSERT INTO `course_technology` VALUES (7, 'Android', 'square_android.png', 'software', NULL, 'false', '2022-12-08 01:59:25', '2022-12-08 01:59:25');
INSERT INTO `course_technology` VALUES (8, 'React', 'square_react_block.png', '', NULL, 'false', NULL, NULL);
INSERT INTO `course_technology` VALUES (9, 'Go-Lang', 'square_golang_block.png', '', NULL, 'false', NULL, NULL);
INSERT INTO `course_technology` VALUES (10, 'Python', 'square_python_block.png', '', NULL, 'false', NULL, NULL);
INSERT INTO `course_technology` VALUES (11, 'Kotlin', 'square_kotlin_block.png', '', NULL, 'false', NULL, NULL);
INSERT INTO `course_technology` VALUES (12, 'HTML', 'square_html.png', '', NULL, 'false', NULL, NULL);
INSERT INTO `course_technology` VALUES (13, 'Vue', 'square_vue.png', '', NULL, 'false', NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
