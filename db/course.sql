/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : db_zonainformatika

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 12/05/2024 17:52:01
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for course
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `image_landscape` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `image_square` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `price` int NULL DEFAULT NULL,
  `video` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `quote_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `quote_author` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `author` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `images_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `order` int NULL DEFAULT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `technology_id` int NULL DEFAULT NULL,
  `deleted` enum('false','true') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of course
-- ----------------------------
INSERT INTO `course` VALUES (1, 'HTML', 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman HTML sehingga kamu akan paham gimana cara menggunakan tag-tag pada HTML.', 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar tag HTML. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.', '-', 'html.png', NULL, NULL, NULL, 0, '', NULL, NULL, 'Suryo Atmojo', 'html', 'active', NULL, NULL, 1, 1, 'false', '2024-05-12 10:46:35', '2024-05-12 10:46:35');
INSERT INTO `course` VALUES (2, 'CSS', 'Pada tutorial ini, kita akan belajar dasar-dasar CSS sehingga kamu akan paham gimana cara menggunakan CSS.', 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar CSS. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.', '-', 'css.png', NULL, NULL, NULL, 50000, '', NULL, NULL, 'Suryo Atmojo', 'css', 'active', NULL, NULL, 1, 1, 'false', '2024-05-12 10:46:35', '2024-05-12 10:46:35');
INSERT INTO `course` VALUES (3, 'JAVASCRIPT', 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman HTML sehingga kamu akan paham gimana cara menggunakan tag-tag pada HTML.', 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar tag HTML. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.', '-', 'javascript.png', NULL, NULL, NULL, 50000, '', NULL, NULL, 'Suryo Atmojo', 'javascript', 'active', NULL, NULL, 1, 1, 'false', '2024-05-12 10:46:35', '2024-05-12 10:46:35');
INSERT INTO `course` VALUES (4, 'BOOTSTRAP', 'Pada tutorial ini, kita akan belajar dasar-dasar Bootstrap sehingga kamu akan paham gimana cara menggunakan Bootstrap.', 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar Bootstrap. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.', '-', 'bootstrap.png', NULL, NULL, NULL, 50000, '', NULL, NULL, 'Suryo Atmojo', 'bootstrap', 'active', NULL, NULL, 1, 1, 'false', '2024-05-12 10:46:35', '2024-05-12 10:46:35');
INSERT INTO `course` VALUES (5, 'JQUERY', 'Pada tutorial ini, kita akan belajar dasar-dasar JQuery sehingga kamu akan paham gimana cara menggunakan JQuery.', 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar JQuery. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.', '-', 'jquery.png', NULL, NULL, NULL, 50000, '', NULL, NULL, 'Suryo Atmojo', 'jquery', 'inactive', NULL, NULL, 1, 1, 'false', '2024-05-12 10:46:35', '2024-05-12 10:46:35');
INSERT INTO `course` VALUES (6, 'PHP', 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman PHP sehingga kamu akan paham gimana cara coding di PHP.', 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar Bahasa Pemrograman PHP. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.', '-', 'php.png', NULL, NULL, NULL, 0, '', NULL, NULL, 'Suryo Atmojo', 'php', 'inactive', NULL, NULL, 1, 1, 'false', '2024-05-12 10:46:35', '2024-05-12 10:46:35');
INSERT INTO `course` VALUES (7, 'Laravel', 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman framework Laravel sehingga kamu akan paham gimana cara menggunakan framework Laravel.', 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar framework Laravel. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.', '-', 'laravel.png', NULL, NULL, NULL, 50000, '', NULL, NULL, 'Suryo Atmojo', 'laravel', 'inactive', NULL, NULL, 1, 1, 'false', '2024-05-12 10:46:35', '2024-05-12 10:46:35');
INSERT INTO `course` VALUES (8, 'Typescript', 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman Typescript sehingga kamu akan paham gimana cara coding di typescript.', 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar Bahasa Pemrograman Typescript. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.', '-', 'typescript.png', NULL, NULL, NULL, 50000, '', NULL, NULL, 'Suryo Atmojo', 'typescript', 'inactive', NULL, NULL, 1, 1, 'false', '2024-05-12 10:46:35', '2024-05-12 10:46:35');
INSERT INTO `course` VALUES (9, 'Node.JS', 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman Node.JS sehingga kamu akan paham gimana cara coding di Node.JS.', 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar Node.JS. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.', '-', 'nodejs.png', NULL, NULL, NULL, 50000, '', NULL, NULL, 'Suryo Atmojo', 'nodejs', 'inactive', NULL, NULL, 1, 1, 'false', '2024-05-12 10:46:35', '2024-05-12 10:46:35');
INSERT INTO `course` VALUES (10, 'REACT', 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman react sehingga kamu akan paham gimana cara coding di react.', 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar react. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.', '-', 'react.png', NULL, NULL, NULL, 50000, '', NULL, NULL, 'Suryo Atmojo', 'react', 'inactive', NULL, NULL, 1, 1, 'false', '2024-05-12 10:46:35', '2024-05-12 10:46:35');
INSERT INTO `course` VALUES (11, 'VUE', 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman vue sehingga kamu akan paham gimana cara coding di vue.', 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar vue. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.', '-', 'vue.png', NULL, NULL, NULL, 50000, '', NULL, NULL, 'Suryo Atmojo', 'vue', 'inactive', NULL, NULL, 1, 1, 'false', '2024-05-12 10:46:35', '2024-05-12 10:46:35');
INSERT INTO `course` VALUES (12, 'SQL', 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman SQL sehingga kamu akan paham gimana cara menggunakan SQL pada database.', 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar SQL. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.', '-', 'sql.png', NULL, NULL, NULL, 50000, '', NULL, NULL, 'Suryo Atmojo', 'sql', 'inactive', NULL, NULL, 1, 1, 'false', '2024-05-12 10:46:35', '2024-05-12 10:46:35');
INSERT INTO `course` VALUES (13, 'Git', 'Pada tutorial ini, kita akan belajar dasar-dasar menggunakan Git.', 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar penggunaan Git. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.', '-', 'git.png', NULL, NULL, NULL, 50000, '', NULL, NULL, 'Suryo Atmojo', 'git', 'inactive', NULL, NULL, 1, 1, 'false', '2024-05-12 10:46:35', '2024-05-12 10:46:35');
INSERT INTO `course` VALUES (14, 'DART', 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman dart sehingga kamu akan paham gimana cara coding di dart.', 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar dart. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.', '-', 'dart.png', NULL, NULL, NULL, 50000, '', NULL, NULL, 'Suryo Atmojo', 'dart', 'inactive', NULL, NULL, 1, 1, 'false', '2024-05-12 10:46:35', '2024-05-12 10:46:35');
INSERT INTO `course` VALUES (15, 'FLUTTER', 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman flutter sehingga kamu akan paham gimana cara coding di flutter.', 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar flutter. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.', '-', 'flutter.png', NULL, NULL, NULL, 50000, '', NULL, NULL, 'Suryo Atmojo', 'flutter', 'inactive', NULL, NULL, 1, 1, 'false', '2024-05-12 10:46:35', '2024-05-12 10:46:35');
INSERT INTO `course` VALUES (16, 'Python', 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman Python sehingga kamu akan paham gimana cara coding di Python.', 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar Bahasa Pemrograman Python. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.', '-', 'python.png', NULL, NULL, NULL, 50000, '', NULL, NULL, 'Suryo Atmojo', 'python_for_beginner', 'inactive', NULL, NULL, 1, 1, 'false', '2024-05-12 10:46:35', '2024-05-12 10:46:35');
INSERT INTO `course` VALUES (17, 'GO', 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman GO sehingga kamu akan paham gimana cara coding di GO.', 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar Bahasa Pemrograman GO. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.', '-', 'go.png', NULL, NULL, NULL, 50000, '', NULL, NULL, 'Suryo Atmojo', 'go', 'inactive', NULL, NULL, 1, 1, 'false', '2024-05-12 10:46:35', '2024-05-12 10:46:35');
INSERT INTO `course` VALUES (18, 'JAVA', 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman Java sehingga kamu akan paham gimana cara coding di Java.', 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar Bahasa Pemrograman Java. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.', '-', 'java.png', NULL, NULL, NULL, 50000, '', NULL, NULL, 'Suryo Atmojo', 'java', 'inactive', NULL, NULL, 1, 1, 'false', '2024-05-12 10:46:35', '2024-05-12 10:46:35');
INSERT INTO `course` VALUES (19, 'C++', 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman C++ sehingga kamu akan paham gimana cara coding di Java.', 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar Bahasa Pemrograman C++. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.', '-', 'cplusplus.png', NULL, NULL, NULL, 50000, '', NULL, NULL, 'Suryo Atmojo', 'cplusplus', 'inactive', NULL, NULL, 1, 1, 'false', '2024-05-12 10:46:35', '2024-05-12 10:46:35');
INSERT INTO `course` VALUES (20, 'R', 'Pada tutorial ini, kita akan belajar dasar-dasar pemrograman R sehingga kamu akan paham gimana cara coding di R.', 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar Bahasa Pemrograman R. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.', '-', 'r.png', NULL, NULL, NULL, 50000, '', NULL, NULL, 'Suryo Atmojo', 'r', 'inactive', NULL, NULL, 1, 1, 'false', '2024-05-12 10:46:35', '2024-05-12 10:46:35');
INSERT INTO `course` VALUES (21, 'LINUX', 'Pada tutorial ini, kita akan belajar dasar-dasar sistem operasi linux sehingga kamu akan paham gimana cara menggunakan sistem operasi linux.', 'Dalam kelas online ini kamu akan belajar langkah praktis penggunaan sistem operasi linux. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.', '-', 'linux.png', NULL, NULL, NULL, 50000, '', NULL, NULL, 'Suryo Atmojo', 'linux', 'inactive', NULL, NULL, 1, 1, 'false', '2024-05-12 10:46:35', '2024-05-12 10:46:35');

SET FOREIGN_KEY_CHECKS = 1;
