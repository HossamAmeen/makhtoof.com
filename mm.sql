-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2019 at 08:42 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mkhtof`
--

-- --------------------------------------------------------

--
-- Table structure for table `gmaps_geocache`
--

CREATE TABLE `gmaps_geocache` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `main_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `welcome_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `welcome_text` text COLLATE utf8mb4_unicode_ci,
  `welcome_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Animation_title1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Animation_text1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Animation_image1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Animation_title2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Animation_text2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Animation_image2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Animation_title3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Animation_text3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Animation_image3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Animation_title4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Animation_text4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Animation_image4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallary_title1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallary_text1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallary_image1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallary_title2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallary_text2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallary_image2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallary_title3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallary_text3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallary_image3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_twiteer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `who_us` text COLLATE utf8mb4_unicode_ci,
  `mission` text COLLATE utf8mb4_unicode_ci,
  `Vision` text COLLATE utf8mb4_unicode_ci,
  `about_title1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_text1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_image1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_title2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_text2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_image2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_title3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_text3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_image3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_title4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_text4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_image4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `name`, `main_logo`, `small_logo`, `welcome_title`, `welcome_text`, `welcome_image`, `Animation_title1`, `Animation_text1`, `Animation_image1`, `Animation_title2`, `Animation_text2`, `Animation_image2`, `Animation_title3`, `Animation_text3`, `Animation_image3`, `Animation_title4`, `Animation_text4`, `Animation_image4`, `gallary_title1`, `gallary_text1`, `gallary_image1`, `gallary_title2`, `gallary_text2`, `gallary_image2`, `gallary_title3`, `gallary_text3`, `gallary_image3`, `about_phone`, `about_email`, `about_facebook`, `about_twiteer`, `about_linkedin`, `about_youtube`, `who_us`, `mission`, `Vision`, `about_title1`, `about_text1`, `about_image1`, `about_title2`, `about_text2`, `about_image2`, `about_title3`, `about_text3`, `about_image3`, `about_title4`, `about_text4`, `about_image4`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aa', 'aaaaaaaaa', '1556707916.22090146_1864403800555644_8209692982063215560_n.jpg', 'ww', 'wwwwwwwwww', '1556707916.unnamed (1).jpg', 'qq', 'qqqqqqqqqqqq', '1556707916.50496116_529273624237161_2212115874943336448_n.jpg', 'ii', 'iiiiiiiiii', '1556707916.49380443_1515014085297300_6912265107133169664_n.jpg', '2019-05-01 08:51:56', '2019-05-01 08:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `kid_posts`
--

CREATE TABLE `kid_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relative_relation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age_before` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `governate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detailed_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kid_posts`
--

INSERT INTO `kid_posts` (`id`, `name`, `relative_relation`, `age`, `age_before`, `blood_type`, `gender`, `governate`, `city`, `street`, `detailed_address`, `other_info`, `url`, `category`, `user_id`, `created_at`, `updated_at`) VALUES
(14, 'احمد', '...', '30-50', NULL, 'B-', 'ذكر', 'اسيوط', 'أبو تيج', 'مكتنتالبللا', 'ككمنتاالاى', 'سكمستكككككككك', '1556311993.58761631_2482689205115982_8051166442621501440_n.jpg', 1, 5, '2019-04-26 18:53:13', '2019-04-26 18:53:13'),
(15, NULL, NULL, '10-15', NULL, NULL, 'ذكر', 'اسيوط', 'أسيوط الجديدة', NULL, 'منتؤلر', 'كرالاتىنة', '1556312045.57602853_1593797347418973_3117907443829440512_n.jpg', 2, 5, '2019-04-26 18:54:05', '2019-04-26 18:54:05'),
(16, ';ol', NULL, '15-30', NULL, 'AB+', 'انثى', 'اسيوط', 'القوصيه', ';nlnkjhgfgcgv', ';mnfcgvb n', '.llkbjhgfc n', '1556312248.download.png', 3, 4, '2019-04-26 18:57:28', '2019-04-26 18:57:28'),
(17, 'احمد', '...', 'حديث الولادة', NULL, 'A-', 'ذكر', 'الدقهلية', 'اجا', 'الهلالى', 'كةمنىتلاالربرلا', 'مىنوتلاةارلؤبلؤشلرا لاة', '1556390168.58761631_2482689205115982_8051166442621501440_n.jpg', 1, 4, '2019-04-27 16:36:08', '2019-04-27 16:36:08'),
(18, 'سيد على', '...', '10-15', NULL, 'AB+', 'ذكر', 'اسيوط', 'الفتح', 'الفتح', 'طككمنتلاا', 'طكمنلااىسشي', '1556390297.58761631_2482689205115982_8051166442621501440_n.jpg', 1, 4, '2019-04-27 16:38:17', '2019-04-27 16:38:17'),
(19, NULL, NULL, '2-5', NULL, NULL, 'ذكر', 'اسيوط', 'أبو تيج', NULL, ';lkjbhvgcfxdzszxfcgvbhn', 'klnmbnvcxfdxfcvgbhnjmk', '1556391603.58441784_1347238222107723_547579970570944512_n.jpg', 2, 4, '2019-04-27 17:00:03', '2019-04-27 17:00:03'),
(20, 'er', '...', '2-5', NULL, 'A+', 'ذكر', 'الاقصر', 'اسنا', NULL, 'er', 'er', '1556624998.45.PNG', 1, 8, '2019-04-30 09:49:58', '2019-04-30 09:49:58'),
(21, 'er', '...', '2-5', NULL, 'A+', 'ذكر', 'الشرقية', 'ديرب نجم', NULL, 'er', 'er', '1556625048.88.PNG', 1, 8, '2019-04-30 09:50:48', '2019-04-30 09:50:48'),
(22, NULL, NULL, 'حديث الولادة', NULL, NULL, 'ذكر', 'اسوان', 'ابو سمبل', NULL, 'cv', 'df', '1556625547.56255386_2593498834004825_7683866848126828544_n.jpg', 2, 8, '2019-04-30 09:59:07', '2019-04-30 09:59:07');

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` double NOT NULL,
  `lang` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id`, `address`, `lat`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'اسيوط', 27.377788, 31.098221, NULL, NULL),
(2, 'سوهاج', 26.661919, 31.682627, NULL, NULL),
(3, 'القاهرة', 30.254144, 31.161536, NULL, NULL),
(4, 'الاسكندرية', 31.215181, 29.873935, NULL, NULL),
(5, 'اسوان', 24.180067, 32.893095, NULL, NULL),
(6, 'الاقصر', 25.775971, 32.622017, NULL, NULL),
(7, 'الاسماعيلية', 30.599308, 32.270251, NULL, NULL),
(8, 'البحرالاحمر', 30.059333, 31.253485, NULL, NULL),
(9, 'البحيرة', 30.711533, 30.049667, NULL, NULL),
(10, 'االجيزة', 30.016443, 31.207154, NULL, NULL),
(11, 'الدقهلية', 31.03522, 31.632198, NULL, NULL),
(12, 'السويس', 29.972242, 32.549605, NULL, NULL),
(13, 'الشرقية', 30.669713, 31.705424, NULL, NULL),
(14, 'الغربية', 30.905071, 30.91183, NULL, NULL),
(15, 'الفيوم', 29.308574, 30.842544, NULL, NULL),
(16, 'القليوبية', 30.246112, 31.27861, NULL, NULL),
(17, 'المنوفية', 30.510905, 30.934109, NULL, NULL),
(18, 'المنيا', 28.089305, 30.761534, NULL, NULL),
(19, 'الواددى_الجديد', 25.499795, 30.0869, NULL, NULL),
(20, 'بنى_يوسف', 29.067013, 31.083372, NULL, NULL),
(21, 'بورسعيد', 31.267285, 32.302182, NULL, NULL),
(22, 'جنوب_سيناء', 29.170014, 33.67401, NULL, NULL),
(23, 'دمياط', 31.421848, 31.799043, NULL, NULL),
(24, 'شمال_سيناء', 30.477467, 33.600614, NULL, NULL),
(25, 'قنا', 25.493547, 32.494632, NULL, NULL),
(26, 'كفرالشيخ', 31.110493, 30.916456, NULL, NULL),
(27, 'مطروح', 31.36036, 27.237148, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_03_29_154149_create_users_table', 1),
(3, '2019_04_20_083158_create_roles_table', 1),
(4, '2019_04_20_084210_create_user_roles_table', 1),
(5, '2019_04_21_104128_create_kid_posts_table', 1),
(6, '2019_04_21_104812_create_seen_posts_table', 1),
(7, '2019_04_23_061858_create_gmaps_geocache_table', 2),
(8, '2019_04_25_154020_create_maps_table', 2),
(16, '2019_04_29_183318_create_homes_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seen_posts`
--

CREATE TABLE `seen_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `age` double NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `governate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detailed_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `governate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `password`, `email`, `governate`, `city`, `phone`, `gender`, `created_at`, `updated_at`) VALUES
(4, 'محمد', 'صلاح', '$2y$10$cO2phrGFDgK7k6kp8S1/EesvblFy/ba5ZnML7esC2GEVe9yHEQOqa', 'ssas2584@gmail.com', 'الاسكندرية', 'السيوف', 1060199043, 'ذكر', '2019-04-22 03:24:07', '2019-04-29 14:32:46'),
(5, 'مينا', 'ناجى', '$2y$10$1FXprnY4zupCZvwuzIJ2v.tT8efkeK4LH.4k4feoHHokc9rGNxze2', 'mina@yahoo.com', '...', '...', 1207174241, 'ذكر', '2019-04-22 05:50:53', '2019-04-22 05:50:53'),
(6, 'اسلام', 'منصور', '$2y$10$gGr4GNkIs3Ei1rCbEpzs7.hRcfEMYtkWAY/xs1iApwwjhEwX9aEJi', 'islam@yahoo.com', '...', '...', 1060199043, 'ذكر', '2019-04-24 17:07:04', '2019-04-24 17:07:04'),
(7, 'sadas', 'sadd', '$2y$10$KYeXr96OehceP2Tcpdf0JuZ2clF/b/Dwul/UhTuFEJl6EyExZMOIW', 'i@yahoo.com', 'الشرقية', 'الابراهيمية', 1060199044, 'ذكر', '2019-04-24 18:18:42', '2019-04-24 18:18:42'),
(8, 'fg', 'gf', '$2y$10$8E9qGu1CZqI8DaywtrLSIugBBHLoZUyDikOfckMyqubHq4oBlMyh.', 'sondoee@yahoo.com', 'الفيوم', 'اطسا', 1111111111, 'ذكر', '2019-04-30 09:42:42', '2019-04-30 09:42:42');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 4, 1, NULL, NULL),
(2, 8, 2, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gmaps_geocache`
--
ALTER TABLE `gmaps_geocache`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kid_posts`
--
ALTER TABLE `kid_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seen_posts`
--
ALTER TABLE `seen_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gmaps_geocache`
--
ALTER TABLE `gmaps_geocache`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kid_posts`
--
ALTER TABLE `kid_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seen_posts`
--
ALTER TABLE `seen_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
