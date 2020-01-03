-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2020 at 02:18 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_dealer`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ألفا روميو', NULL, NULL),
(2, 'أوبل', NULL, NULL),
(5, 'أودي', NULL, NULL),
(6, 'أيديا', NULL, NULL),
(7, 'إيسوزو', NULL, NULL),
(8, 'اسبيرانزا', NULL, NULL),
(9, 'استون مارتن', NULL, NULL),
(10, 'ام جي', NULL, NULL),
(11, 'انفنتي', NULL, NULL),
(12, 'ايجل', NULL, NULL),
(13, 'بروتون', NULL, NULL),
(14, 'بريليانس', NULL, NULL),
(15, 'بنتلي ', NULL, NULL),
(16, 'بورش', NULL, NULL),
(17, 'بونتياك', NULL, NULL),
(18, 'بويك', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(10) UNSIGNED NOT NULL,
  `trend_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `car_type_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `manufacture_year_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `engine_capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `km` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motion_vector` enum('ناقل أوتوماتيك','ناقل يدوي','','') COLLATE utf8mb4_unicode_ci NOT NULL,
  `doors_number` enum('2 باب','4 باب','','') COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exhibition_id` int(10) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `trend_id`, `car_type_id`, `manufacture_year_id`, `engine_capacity`, `km`, `price`, `motion_vector`, `doors_number`, `car_code`, `youtube_link`, `exhibition_id`, `image`, `created_at`, `updated_at`) VALUES
(45, 5, 7, 3, '4444', '55455', '5757576', 'ناقل يدوي', '2 باب', '5557', NULL, 1, 'uploads/cars/157792577760221.jpeg', '2020-01-01 22:42:56', '2020-01-01 22:42:57'),
(46, 8, 7, 1, '2454', '24545', '545488', 'ناقل أوتوماتيك', '4 باب', '5455', NULL, 2, 'uploads/cars/157792585798459.jpg', '2020-01-01 22:44:17', '2020-01-01 22:44:17'),
(47, 13, 8, 4, '64464', '768976', '7869876', 'ناقل يدوي', '2 باب', '76867', NULL, 1, 'uploads/cars/157792593579224.jpg', '2020-01-01 22:45:35', '2020-01-01 22:45:35'),
(48, 17, 7, 3, '8797', '9877', '7987', 'ناقل أوتوماتيك', '2 باب', '7678987', NULL, 1, 'uploads/cars/157792598786014.jpg', '2020-01-01 22:46:27', '2020-01-01 22:46:28'),
(49, 18, 4, 5, '89798', '67877', '77697689', 'ناقل أوتوماتيك', '2 باب', '786868', NULL, 1, 'uploads/cars/157792604916706.jpg', '2020-01-01 22:47:29', '2020-01-01 22:47:29');

-- --------------------------------------------------------

--
-- Table structure for table `car_luxury`
--

CREATE TABLE `car_luxury` (
  `id` int(10) UNSIGNED NOT NULL,
  `car_id` int(10) UNSIGNED NOT NULL,
  `luxury_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_luxury`
--

INSERT INTO `car_luxury` (`id`, `car_id`, `luxury_id`, `created_at`, `updated_at`) VALUES
(21, 45, 1, NULL, NULL),
(22, 45, 3, NULL, NULL),
(23, 45, 5, NULL, NULL),
(24, 45, 8, NULL, NULL),
(25, 46, 1, NULL, NULL),
(26, 46, 3, NULL, NULL),
(27, 46, 4, NULL, NULL),
(28, 46, 6, NULL, NULL),
(29, 46, 10, NULL, NULL),
(30, 47, 3, NULL, NULL),
(31, 47, 6, NULL, NULL),
(32, 47, 7, NULL, NULL),
(33, 47, 9, NULL, NULL),
(34, 47, 11, NULL, NULL),
(35, 48, 3, NULL, NULL),
(36, 48, 7, NULL, NULL),
(37, 48, 11, NULL, NULL),
(38, 49, 2, NULL, NULL),
(39, 49, 4, NULL, NULL),
(40, 49, 8, NULL, NULL),
(41, 49, 9, NULL, NULL),
(42, 49, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `car_types`
--

CREATE TABLE `car_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_types`
--

INSERT INTO `car_types` (`id`, `created_at`, `updated_at`, `name`) VALUES
(1, NULL, NULL, '4x4'),
(2, NULL, NULL, 'MVP'),
(3, NULL, NULL, 'SUV'),
(4, NULL, NULL, 'رياضية'),
(5, NULL, NULL, 'ستيشن'),
(6, NULL, NULL, 'سيدان'),
(7, NULL, NULL, 'فان'),
(8, NULL, NULL, 'كابورليه'),
(9, NULL, NULL, 'كروس اوفر'),
(10, NULL, NULL, 'كوبيه'),
(11, NULL, NULL, 'ميني باص'),
(12, NULL, NULL, 'هاتشباك');

-- --------------------------------------------------------

--
-- Table structure for table `exhibitions`
--

CREATE TABLE `exhibitions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exhibitions`
--

INSERT INTO `exhibitions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '454fgsg', NULL, NULL),
(2, 'dsggs', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `luxuries`
--

CREATE TABLE `luxuries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `luxuries`
--

INSERT INTO `luxuries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, ' تكييف', NULL, NULL),
(2, ' زجاج كهربائي', NULL, NULL),
(3, ' فتحة سقف\r\n', NULL, NULL),
(4, ' نظام فرامل ABS\r\n', NULL, NULL),
(5, ' سنتر لوك\r\n', NULL, NULL),
(6, 'انذار', NULL, NULL),
(7, ' مثبت سرعة\r\n', NULL, NULL),
(8, ' توزيع اليكتروني للفرامل EBD\r\n', NULL, NULL),
(9, 'باور', NULL, NULL),
(10, ' وسائد هوائية\r\n', NULL, NULL),
(11, ' راديو كاسيت\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manufacture_years`
--

CREATE TABLE `manufacture_years` (
  `id` int(10) UNSIGNED NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufacture_years`
--

INSERT INTO `manufacture_years` (`id`, `year`, `created_at`, `updated_at`) VALUES
(1, '2000', NULL, NULL),
(2, '2001', NULL, NULL),
(3, '2002', NULL, NULL),
(4, '2003', NULL, NULL),
(5, '2004', NULL, NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_24_100032_create_brands_table', 1),
(5, '2019_12_24_100032_create_car_luxury_table', 1),
(6, '2019_12_24_100032_create_car_types_table', 1),
(7, '2019_12_24_100032_create_cars_table', 1),
(8, '2019_12_24_100032_create_exhibitions_table', 1),
(9, '2019_12_24_100032_create_luxuries_table', 1),
(10, '2019_12_24_100032_create_manufacture_years_table', 1),
(11, '2019_12_24_100032_create_trends_table', 1),
(12, '2019_12_24_100042_create_foreign_keys', 1),
(13, '2019_12_28_200355_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 2),
(2, 'App\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `routes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'web',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `routes`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'اضافه', 'user.create,user.store', 'web', NULL, NULL),
(2, 'مراجعه', 'user.show,car.show', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'lar11', 'mnlkn', 'web', '2019-12-28 18:49:50', '2019-12-28 18:49:50'),
(2, 'dev', 'lakh kjewhhwehweljhwe', 'web', '2019-12-28 18:56:04', '2019-12-28 18:56:04');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `trends`
--

CREATE TABLE `trends` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trends`
--

INSERT INTO `trends` (`id`, `name`, `brand_id`, `created_at`, `updated_at`) VALUES
(1, 'آدم', 18, NULL, NULL),
(2, 'تيجرا', 2, NULL, NULL),
(5, 'ريكورد', 1, NULL, NULL),
(6, 'جراندلاند', 9, NULL, NULL),
(7, 'آدم', 18, NULL, NULL),
(8, 'أسترا', 2, NULL, NULL),
(9, 'استرا GTC', 1, NULL, NULL),
(10, 'انسيجنيا', 9, NULL, NULL),
(11, 'زافيرا', 17, NULL, NULL),
(12, 'فيكترا', 14, NULL, NULL),
(13, 'كاديت', 12, NULL, NULL),
(14, 'كاسكادا', 15, NULL, NULL),
(15, 'كاليبرا', 16, NULL, NULL),
(16, 'كروس لاند', 7, NULL, NULL),
(17, 'كورسا', 10, NULL, NULL),
(18, 'موكا', 5, NULL, NULL);

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
(1, 'lara', 'lara@lara.com', NULL, '$2y$10$D6K7jwtdt2ySfuyKS7wEbe0THYqW98yg0VgD1NxFtlDKd9WQz9MO.', NULL, '2019-12-24 08:09:48', '2019-12-28 19:02:06'),
(2, 'latitude', 'ks@gsd.fd', NULL, '$2y$10$FGoKh8KzW8v9y0iH2A.KFev4LPGVWEr3CAYD1NrrFS0Ju3W5/ogty', NULL, '2019-12-28 19:02:38', '2019-12-28 19:02:38'),
(3, 'la', 'lara@lara001.com', NULL, '$2y$10$QDPvjSZOwjoiPSx12xVYDuGMAUKmOQaeSE6914KHtHzLSjrcFx7Kq', NULL, '2019-12-29 22:21:18', '2019-12-29 22:21:18'),
(4, 'loloo', 'lara@lara007.com', NULL, '$2y$10$yBKY4xu7wiMuk2xzt8A65eodKDLIxSLdyYuyP/3aUnG/LmCevH3Te', NULL, '2020-01-01 18:49:36', '2020-01-01 18:49:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_trend_id_foreign` (`trend_id`),
  ADD KEY `cars_car_type_id_foreign` (`car_type_id`),
  ADD KEY `cars_manufacture_year_id_foreign` (`manufacture_year_id`),
  ADD KEY `cars_exhibition_id_foreign` (`exhibition_id`);

--
-- Indexes for table `car_luxury`
--
ALTER TABLE `car_luxury`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_luxury_car_id_foreign` (`car_id`),
  ADD KEY `car_luxury_luxury_id_foreign` (`luxury_id`);

--
-- Indexes for table `car_types`
--
ALTER TABLE `car_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exhibitions`
--
ALTER TABLE `exhibitions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `luxuries`
--
ALTER TABLE `luxuries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacture_years`
--
ALTER TABLE `manufacture_years`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `trends`
--
ALTER TABLE `trends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trends_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `car_luxury`
--
ALTER TABLE `car_luxury`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `car_types`
--
ALTER TABLE `car_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `exhibitions`
--
ALTER TABLE `exhibitions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `luxuries`
--
ALTER TABLE `luxuries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `manufacture_years`
--
ALTER TABLE `manufacture_years`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trends`
--
ALTER TABLE `trends`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_car_type_id_foreign` FOREIGN KEY (`car_type_id`) REFERENCES `car_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cars_exhibition_id_foreign` FOREIGN KEY (`exhibition_id`) REFERENCES `exhibitions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cars_manufacture_year_id_foreign` FOREIGN KEY (`manufacture_year_id`) REFERENCES `manufacture_years` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cars_trend_id_foreign` FOREIGN KEY (`trend_id`) REFERENCES `trends` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `car_luxury`
--
ALTER TABLE `car_luxury`
  ADD CONSTRAINT `car_luxury_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `car_luxury_luxury_id_foreign` FOREIGN KEY (`luxury_id`) REFERENCES `luxuries` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `trends`
--
ALTER TABLE `trends`
  ADD CONSTRAINT `trends_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
