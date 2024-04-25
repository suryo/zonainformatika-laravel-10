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

 Date: 25/04/2024 15:08:42
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for course_category
-- ----------------------------
DROP TABLE IF EXISTS `course_category`;
CREATE TABLE `course_category`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `deleted` enum('false','true') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of course_category
-- ----------------------------
INSERT INTO `course_category` VALUES (1, 'Web Development', 'square_html.png', 'algorithm', NULL, 'false', NULL, '2022-12-06 16:23:30');
INSERT INTO `course_category` VALUES (2, 'Mobile Development', NULL, 'php', NULL, 'false', NULL, '2022-12-06 16:23:56');
INSERT INTO `course_category` VALUES (3, 'Studi Kasus', NULL, 'codeigniter', NULL, 'false', '2022-12-06 16:24:05', '2022-12-06 16:24:05');
INSERT INTO `course_category` VALUES (4, 'Fundamental', NULL, 'laravel', NULL, 'false', '2022-12-06 16:24:12', '2022-12-06 16:24:12');
INSERT INTO `course_category` VALUES (5, 'Pemula', NULL, 'react-native', NULL, 'false', '2022-12-06 16:24:24', '2022-12-06 16:24:24');
INSERT INTO `course_category` VALUES (6, 'Menengah', NULL, 'cordova', NULL, 'false', '2022-12-06 16:24:32', '2022-12-06 16:24:32');
INSERT INTO `course_category` VALUES (7, 'Framework', NULL, 'software', NULL, 'false', '2022-12-08 01:59:25', '2022-12-08 01:59:25');
INSERT INTO `course_category` VALUES (8, 'Front End', NULL, '', NULL, 'false', NULL, NULL);
INSERT INTO `course_category` VALUES (9, 'Back End', NULL, '', NULL, 'false', NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
