-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2019 at 06:43 PM
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
(1, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-24 18:36:21', '2019-06-24 18:36:39');

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
  `police` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detailed_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'non',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kid_posts`
--

INSERT INTO `kid_posts` (`id`, `name`, `relative_relation`, `age`, `age_before`, `blood_type`, `gender`, `governate`, `police`, `city`, `street`, `detailed_address`, `other_info`, `url`, `category`, `user_id`, `status`, `message`, `created_at`, `updated_at`) VALUES
(2, NULL, NULL, '30-50', NULL, NULL, 'انثى', 'الغربية', NULL, 'بسيون', NULL, 'vb', 'vcb', '1561406693.computer-05.jpg', 2, 1, 2, 'non', '2019-06-24 18:04:53', '2019-06-24 18:04:59'),
(3, 'sayed', 'ابن - ابنه', 'حديث الولادة', NULL, 'A-', 'ذكر', 'اسيوط', 'نعم', 'أسيوط الجديدة', 'Asyut', 'شارع الجيش امام الجمعيه', 'لا يوجد', '1562067807.images.jpg', 1, 3, 2, 'non', '2019-07-02 09:43:27', '2019-07-02 09:44:28'),
(4, 'على', '(ابن-ابنه) (خال-خالة)', '30-50', NULL, 'AB+', 'ذكر', 'الفيوم', 'لا', 'مدينة الفيوم', 'Asyut', 'شارع الجيش امام الجمعيه', 'مناتاللب', '1562069599.images (1).jpg', 1, 3, 2, 'non', '2019-07-02 10:13:19', '2019-07-02 10:13:52'),
(5, NULL, NULL, '30-50', NULL, NULL, 'ذكر', 'الاقصر', NULL, 'البياضية', NULL, 'القوصية', 'lhkjghchv', '1562069690.320162617846721.jpg', 2, 3, 2, 'non', '2019-07-02 10:14:50', '2019-07-02 10:15:00'),
(6, NULL, NULL, '2-5', NULL, NULL, 'ذكر', 'الشرقية', NULL, 'فاقوس', NULL, 'تنلاتنلاتنرلان', 'kjbhv', '1562069770.1534516254.jpeg', 2, 3, 2, 'non', '2019-07-02 10:16:10', '2019-07-02 10:16:21'),
(7, NULL, NULL, '50-70', NULL, NULL, 'ذكر', 'القاهرة', NULL, 'الزيتون', NULL, 'lnkbj', 'lknjbh', '1562069841.201810280236303630.jpg', 2, 3, 2, 'non', '2019-07-02 10:17:21', '2019-07-02 10:17:39');

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
(7, '2019_04_23_061858_create_gmaps_geocache_table', 1),
(8, '2019_04_25_154020_create_maps_table', 1),
(9, '2019_04_29_183318_create_homes_table', 1),
(10, '2019_05_27_123754_create_quests_table', 1);

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
-- Table structure for table `quests`
--

CREATE TABLE `quests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `find_kidnap` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_us` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `governate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `password`, `email`, `governate`, `city`, `phone`, `gender`, `created_at`, `updated_at`) VALUES
(1, 'soltan', 'salah', '$2y$10$wljvW4NLOdfvoMh3sVaEXuNEBonmjA6JU.MWNPxs5.Q80EtN3cSne', 'sondos@yahoo.com', 'اسيوط', 'مدينة اسيوط', '01000000000', 'ذكر', '2019-06-24 17:48:13', '2019-06-24 17:48:13'),
(2, 'soltan sakah', 'ahmed@yahoo.com', '$2y$10$2Hy2XbJDRARJMDq.MOgvleCMTbWWaadcZ/M.hhexMj9eIte8XSKKq', 'ahmed@yahoo.com', 'السويس', 'حي السويس', '1060199043', 'ذكر', '2019-06-24 17:50:24', '2019-06-24 18:37:32'),
(3, 'sayed', 'mahmoud@yahoo.com', '$2y$10$YfHxao/ANSWzrHk7Y1s0F.21xhzkSBIqy4Fqy1CgtgEjImZpSoByO', 'ali@yahoo.com', NULL, NULL, NULL, NULL, '2019-06-24 18:40:53', '2019-06-24 18:41:17');

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
(1, 2, 1, NULL, NULL),
(2, 3, 1, NULL, NULL),
(3, 4, 1, NULL, NULL),
(4, 5, 1, NULL, NULL);

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
-- Indexes for table `quests`
--
ALTER TABLE `quests`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quests`
--
ALTER TABLE `quests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
