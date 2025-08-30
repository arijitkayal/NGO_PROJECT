-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 30, 2025 at 06:58 AM
-- Server version: 5.7.24
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngo`
--

-- --------------------------------------------------------

--
-- Table structure for table `camp`
--

CREATE TABLE `camp` (
  `camp_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campDesc` text COLLATE utf8mb4_unicode_ci,
  `campImg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `camp`
--

INSERT INTO `camp` (`camp_id`, `name`, `campDesc`, `campImg`, `created_at`, `updated_at`) VALUES
(1, 'Child Education', 'Child education is a critical aspect of human development that lays the foundation for a child\'s intellectual, emotional, and social growth. It encompasses formal and informal learning experiences from early childhood through adolescence.', '1703750583IMG-20231223-WA0017.jpg', '2023-12-28 02:33:03', '2023-12-28 02:33:03'),
(2, 'Elderly Care', 'Elderly care involves providing support and assistance to older individuals, addressing their physical, emotional, and social needs. As people age, they may face various challenges, and effective elderly care aims to enhance their quality of life and overall well-being.', '17037528132.webp', '2023-12-28 03:10:13', '2023-12-28 03:10:13'),
(3, 'Women Empowerment', 'Women\'s empowerment refers to the process of providing women with the tools, resources, and opportunities to achieve their full potential and participate fully in all aspects of society. This involves addressing and challenging gender-based discrimination, stereotypes, and inequalities that have historically marginalized women.', '17037548313.jpg', '2023-12-28 03:43:51', '2023-12-28 03:43:51'),
(4, 'Distribution Of Clothes', 'The distribution of clothes through charitable initiatives is a common practice aimed at providing clothing assistance to individuals and communities in need', '170375541974442c5601e072966bac81d1005ac4b0 (1).jpg', '2023-12-28 03:53:39', '2024-01-04 00:40:25');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donor_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `pin` bigint(20) DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idNumber` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `history_id` bigint(20) UNSIGNED NOT NULL,
  `donor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `camp_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `isApproved` tinyint(1) NOT NULL DEFAULT '0',
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_28_075226_create_camp_table', 2),
(6, '2023_12_28_174122_create_news_table', 3),
(8, '2023_12_28_184038_create_picture_table', 4),
(9, '2023_12_29_052947_create_video_table', 5),
(10, '2023_12_29_085250_create_donor_table', 6),
(13, '2024_01_02_044933_create_msg_table', 8),
(14, '2023_12_29_152747_create_history_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `msg_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci,
  `newsImg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `name`, `date`, `newsImg`, `created_at`, `updated_at`) VALUES
(1, 'Bengal Bulletin', '2023-02-15', '1703786563100.jpg', '2023-12-28 12:32:43', '2023-12-28 12:32:43'),
(2, 'Bengal Bulletin', '2023-03-15', '1703786969200.jpg', '2023-12-28 12:39:29', '2024-01-11 08:32:07'),
(3, 'Bengal Bulletin', '2023-09-15', '1703787009300.jpg', '2023-12-28 12:40:09', '2023-12-28 12:40:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `pic_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`pic_id`, `name`, `created_at`, `updated_at`) VALUES
(1, '1703790626IMG-20231223-WA0002.jpg', '2023-12-28 13:40:26', '2023-12-28 13:40:26'),
(3, '1703790626IMG-20231223-WA0004.jpg', '2023-12-28 13:40:26', '2023-12-28 13:40:26'),
(4, '1703790626IMG-20231223-WA0005.jpg', '2023-12-28 13:40:26', '2023-12-28 13:40:26'),
(5, '1703790626IMG-20231223-WA0006.jpg', '2023-12-28 13:40:26', '2023-12-28 13:40:26'),
(6, '1703790626IMG-20231223-WA0007.jpg', '2023-12-28 13:40:26', '2023-12-28 13:40:26'),
(7, '1703790626IMG-20231223-WA0009.jpg', '2023-12-28 13:40:26', '2023-12-28 13:40:26'),
(8, '1703834990IMG-20231223-WA0010.jpg', '2023-12-29 01:59:50', '2023-12-29 01:59:50'),
(9, '1703834990IMG-20231223-WA0011.jpg', '2023-12-29 01:59:50', '2023-12-29 01:59:50'),
(10, '1703834990IMG-20231223-WA0012.jpg', '2023-12-29 01:59:50', '2023-12-29 01:59:50'),
(11, '1703834990IMG-20231223-WA0013.jpg', '2023-12-29 01:59:50', '2023-12-29 01:59:50'),
(12, '1703834990IMG-20231223-WA0014.jpg', '2023-12-29 01:59:50', '2023-12-29 01:59:50'),
(13, '1703834990IMG-20231223-WA0015.jpg', '2023-12-29 01:59:50', '2023-12-29 01:59:50'),
(14, '1703834990IMG-20231223-WA0016.jpg', '2023-12-29 01:59:50', '2023-12-29 01:59:50'),
(15, '1703834990IMG-20231223-WA0017.jpg', '2023-12-29 01:59:50', '2023-12-29 01:59:50'),
(17, '1704348706IMG-20231223-WA0018.jpg', '2024-01-04 00:41:46', '2024-01-04 00:41:46'),
(18, '1704348706IMG-20231223-WA0019.jpg', '2024-01-04 00:41:46', '2024-01-04 00:41:46'),
(19, '1704348706IMG-20231223-WA0020.jpg', '2024-01-04 00:41:46', '2024-01-04 00:41:46'),
(20, '1704348706IMG-20231223-WA0021.jpg', '2024-01-04 00:41:46', '2024-01-04 00:41:46'),
(21, '1704348706IMG-20231223-WA0023.jpg', '2024-01-04 00:41:46', '2024-01-04 00:41:46'),
(22, '1704348706IMG-20231223-WA0024.jpg', '2024-01-04 00:41:46', '2024-01-04 00:41:46'),
(23, '1704348706IMG-20231223-WA0025.jpg', '2024-01-04 00:41:46', '2024-01-04 00:41:46'),
(24, '1704348747IMG-20231223-WA0026.jpg', '2024-01-04 00:42:27', '2024-01-04 00:42:27'),
(25, '1704348747IMG-20231223-WA0027.jpg', '2024-01-04 00:42:27', '2024-01-04 00:42:27'),
(26, '1704348747IMG-20231223-WA0028.jpg', '2024-01-04 00:42:27', '2024-01-04 00:42:27'),
(27, '1704348747IMG-20231223-WA0029.jpg', '2024-01-04 00:42:27', '2024-01-04 00:42:27'),
(28, '1704348747IMG-20231223-WA0030.jpg', '2024-01-04 00:42:27', '2024-01-04 00:42:27'),
(29, '1704348747IMG-20231223-WA0031.jpg', '2024-01-04 00:42:27', '2024-01-04 00:42:27'),
(30, '1704348747IMG-20231223-WA0032.jpg', '2024-01-04 00:42:27', '2024-01-04 00:42:27'),
(31, '1704348747IMG-20231223-WA0033.jpg', '2024-01-04 00:42:27', '2024-01-04 00:42:27'),
(32, '1704348791IMG-20231223-WA0034.jpg', '2024-01-04 00:43:11', '2024-01-04 00:43:11'),
(33, '1704348791IMG-20231223-WA0035.jpg', '2024-01-04 00:43:11', '2024-01-04 00:43:11'),
(34, '1704348791IMG-20231223-WA0036.jpg', '2024-01-04 00:43:11', '2024-01-04 00:43:11'),
(35, '1704348791IMG-20231223-WA0037.jpg', '2024-01-04 00:43:11', '2024-01-04 00:43:11'),
(36, '1704348791IMG-20231223-WA0040.jpg', '2024-01-04 00:43:11', '2024-01-04 00:43:11'),
(37, '1704348791IMG-20231223-WA0041.jpg', '2024-01-04 00:43:11', '2024-01-04 00:43:11'),
(38, '1704349222IMG-20240102-WA0001.jpg', '2024-01-04 00:50:22', '2024-01-04 00:50:22'),
(39, '1704349222IMG-20240102-WA0002.jpg', '2024-01-04 00:50:22', '2024-01-04 00:50:22'),
(40, '1704349222IMG-20240102-WA0003.jpg', '2024-01-04 00:50:22', '2024-01-04 00:50:22'),
(41, '1704349222IMG-20240102-WA0005.jpg', '2024-01-04 00:50:22', '2024-01-04 00:50:22'),
(42, '1704349222IMG-20240102-WA0006.jpg', '2024-01-04 00:50:22', '2024-01-04 00:50:22'),
(43, '1704349222IMG-20240102-WA0007.jpg', '2024-01-04 00:50:22', '2024-01-04 00:50:22'),
(44, '1704349222IMG-20240102-WA0008.jpg', '2024-01-04 00:50:22', '2024-01-04 00:50:22'),
(45, '1704349222IMG-20240102-WA0009.jpg', '2024-01-04 00:50:22', '2024-01-04 00:50:22'),
(46, '1704349223IMG-20240102-WA0010.jpg', '2024-01-04 00:50:23', '2024-01-04 00:50:23'),
(47, '1704349223IMG-20240102-WA0011.jpg', '2024-01-04 00:50:23', '2024-01-04 00:50:23'),
(48, '1704349223IMG-20240102-WA0012.jpg', '2024-01-04 00:50:23', '2024-01-04 00:50:23'),
(49, '1704349223IMG-20240102-WA0013.jpg', '2024-01-04 00:50:23', '2024-01-04 00:50:23'),
(50, '1704349223IMG-20240102-WA0015.jpg', '2024-01-04 00:50:23', '2024-01-04 00:50:23'),
(51, '1704349223IMG-20240103-WA0001.jpg', '2024-01-04 00:50:23', '2024-01-04 00:50:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'AMAL KHAN', '9874078512', NULL, '$2y$12$PzJl.WETh1GyvlHaIL1KEODqIr73uevwQUAuKzEGtkraxKqHNnBl2', NULL, '2023-12-26 01:42:32', '2023-12-26 01:42:32'),
(2, 'ARIJIT KAYAL', '9064354776', NULL, '$2y$12$strsPyhGpdg.YkNXSSc.GeofDa4Fn871X3vXrLnby5gAXuVmiidkK', NULL, '2024-01-02 13:10:37', '2024-01-03 12:44:10');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `vid_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`vid_id`, `name`, `created_at`, `updated_at`) VALUES
(1, '1703828273WhatsApp Video 2023-12-29 at 10.55.17_31b2d7c7.mp4', '2023-12-29 00:07:53', '2023-12-29 00:07:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camp`
--
ALTER TABLE `camp`
  ADD PRIMARY KEY (`camp_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donor_id`),
  ADD UNIQUE KEY `donor_mobile_unique` (`mobile`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`history_id`),
  ADD KEY `history_donor_id_index` (`donor_id`),
  ADD KEY `history_camp_id_index` (`camp_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`vid_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camp`
--
ALTER TABLE `camp`
  MODIFY `camp_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donor_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `history_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `msg_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `pic_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `vid_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_camp_id_foreign` FOREIGN KEY (`camp_id`) REFERENCES `camp` (`camp_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `history_donor_id_foreign` FOREIGN KEY (`donor_id`) REFERENCES `donor` (`donor_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
