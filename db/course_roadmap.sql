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

 Date: 25/04/2024 15:08:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for course_roadmap
-- ----------------------------
DROP TABLE IF EXISTS `course_roadmap`;
CREATE TABLE `course_roadmap`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `image_landscape` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `image_square` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `price_buy` decimal(15, 0) NULL DEFAULT NULL,
  `price_rent` decimal(15, 2) NULL DEFAULT NULL,
  `video` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `quote_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `quote_author` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `author` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `blog_category_id_foreign`(`category_id` ASC) USING BTREE,
  CONSTRAINT `course_roadmap_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `news_category` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of course_roadmap
-- ----------------------------
INSERT INTO `course_roadmap` VALUES (1, 'Computer Science', 'Mengenal dan belajar dasar-dasar HTML untuk fondasi awal belajar web development', 'Dalam kelas online ini kamu akan belajar dasar-dasar HTML. HTML merupakan pengetahuan umum yang harus dimiliki oleh setiap orang yang menggeluti bidang web programming. Dalam kelas ini, kamu akan belajar mulai dari bagaimana konsep dasar dan cara kerja dari HTML serta bagaimana penggunaannya dalam membangun sebuah tampilan website.', '', 'roadmap_computerscience.png', 'landscape_html.png', 'square_html.png', 'beginner', 0, 0.00, NULL, NULL, NULL, 'Suryo Atmojo', '', 'published', '', 0, 4, NULL, NULL);
INSERT INTO `course_roadmap` VALUES (2, 'Software Architech', 'Panduan langkah demi langkah untuk belajar JavaScript', 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar JavaScript. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.', '', 'roadmap_softwarearchitech.png', 'landscape_javascript.png', 'square_javascript.png', 'beginner', 0, 0.00, NULL, NULL, NULL, 'Suryo Atmojo', '', 'published', '', 0, 4, NULL, NULL);
INSERT INTO `course_roadmap` VALUES (3, 'Frontend Developer', 'Panduan langkah demi langkah untuk belajar dasar PHP', 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar PHP. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.', '', 'roadmap_frontenddeveloper.png', 'landscape_php.png', 'square_php.png', 'beginner', 0, 0.00, NULL, NULL, NULL, 'Suryo Atmojo', '', 'published', '', 0, 3, NULL, NULL);
INSERT INTO `course_roadmap` VALUES (4, 'DevOps', 'Panduan langkah demi langkah untuk belajar MySQL', 'Dalam kelas online ini kamu akan belajar langkah demi langkah dasar-dasar MySQL. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.', '', 'roadmap_devops.png', 'landscape_sql.png', 'square_sql.png', 'beginner', 0, 0.00, NULL, NULL, NULL, 'Suryo Atmojo', '', 'published', '', 0, 4, '2023-02-06 14:16:34', '2023-02-06 14:33:27');
INSERT INTO `course_roadmap` VALUES (5, 'Android Developer', 'Panduan langkah demi langkah untuk belajar Framework CodeIgniter', 'Dalam kelas online ini kamu akan belajar langkah demi langkah untuk menguasai framework CodeIgniter. Kamu akan belajar dasar-dasar CodeIgniter, mengintegrasikannya dengan Bootstrap dan mencoba membuat aplikasi sederhana menggunakan Framework CodeIgniter. Kelas ini menggunakan CI 3', '', 'roadmap_androiddeveloper.png', 'landscape_codeigniter.png', 'square_codeigniter.png', 'beginner', 0, 0.00, NULL, NULL, NULL, 'Suryo Atmojo', '', 'published', '', 0, 4, '2023-02-06 14:16:34', '2023-02-06 14:33:27');
INSERT INTO `course_roadmap` VALUES (6, 'Backend Developer', 'Panduan belajar library React.Js', 'Tahun 2022 masih didominasi oleh React.js untuk kelas library javascript yang digunakan untuk membangun website yang interaktif. Peluang pekerjaan yang kamu dapatkan pun semakin luas dengan luasnya pasar atau permintaan seseorang yang ahli di bidang React.js Developer. Jika kamu ingin menjadi expert di bidang ini, maka sudah tepat untuk mengikuti kelas ini.\r\n\r\nReact.js adalah library yang memudahkan sobatdev membuat website yang interaktif. Di kelas ini kamu akan belajar React.js dari dasar, penggunakan Hook dan Context API. Dikemas dengan studi kasus membuat Kalulator Body Mass Index atau menghitung idel tubuh dan tinggi badan. Serta, akan membuat aplikasi Agenda di mana kamu bisa mencatat event di tanggal tertentu dengan localstorage.\r\n\r\nDengan studi kasus BMI Calculator dan Agenda diharapkan teman-teman lebih mudah untuk memahami dan sebagai contoh untuk project selanjutnya. Selamat belajar', '', 'roadmap_backenddeveloper.png', 'landscape_react.png', 'square_react.png', 'beginner', 0, 0.00, NULL, NULL, NULL, 'Suryo Atmojo', '', 'published', '', 0, 4, NULL, NULL);
INSERT INTO `course_roadmap` VALUES (7, 'Flutter Developer', 'Dalam course ini kamu akan belajar memahami dan menggunakan framework JavaScript Vue.js', 'Dalam course ini kamu akan belajar memahami dan menggunakan framework JavaScript Vue.js', '', 'roadmap_flutterdeveloper.png', 'landscape_vue.png', 'square_vue.png', 'beginner', 0, 0.00, NULL, NULL, NULL, 'Suryo Atmojo', '', 'published', '', 0, 4, NULL, NULL);
INSERT INTO `course_roadmap` VALUES (8, 'React Native Developer', 'Panduan langkah demi langkah untuk belajar dasar Laravel.', 'Dalam kelas online ini kamu akan belajar dasar-dasar Laravel. Materi belajar telah disusun sedemikian rupa agar kamu mudah dalam memahaminya.', 'standard', 'roadmap_reactdeveloper.png', 'landscape_laravel.png', 'square_laravel.png', 'beginner', 0, 0.00, NULL, NULL, NULL, 'Suryo Atmojo', 'saftware', 'published', 'post_2038', 1, 4, '2022-12-01 00:00:54', '2023-02-06 14:05:47');

SET FOREIGN_KEY_CHECKS = 1;
