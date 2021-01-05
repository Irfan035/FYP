-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 08:59 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hope`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Cash', '2020-10-02 05:29:48', '2020-10-02 05:29:48'),
(2, 'Dowry', '2020-10-02 05:30:19', '2020-10-02 05:30:19'),
(3, 'Food', '2020-10-02 05:31:06', '2020-10-02 05:31:06'),
(4, 'Health Care', '2020-10-02 05:31:25', '2020-10-02 05:31:25'),
(5, 'Tents', '2020-10-02 05:31:32', '2020-10-02 05:31:32'),
(6, 'Cloth Bank', '2020-10-02 05:32:04', '2020-10-02 05:32:04');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(10) UNSIGNED NOT NULL,
  `donor_id` int(11) NOT NULL,
  `categor_id` int(10) UNSIGNED NOT NULL,
  `subCategory_id` int(10) UNSIGNED NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `donor_id`, `categor_id`, `subCategory_id`, `value`, `unit`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '40', 'Rupees', 1, '2020-10-02 06:37:31', '2020-10-02 06:38:29'),
(2, 2, 1, 1, '50000', 'Rupees', 1, '2020-10-02 08:30:29', '2020-10-02 09:33:36'),
(3, 3, 2, 5, '100000', 'Rupees', 1, '2020-10-02 08:33:48', '2020-10-02 09:33:38'),
(4, 4, 6, 11, '50', 'Quantity', 1, '2020-10-02 08:37:13', '2020-10-02 13:53:58'),
(5, 5, 3, 7, '20', 'kilogram', 1, '2020-10-02 08:42:04', '2020-10-02 09:33:40');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_18_125815_entrust_setup_tables', 1),
(5, '2020_01_30_132038_create_recipients_table', 1),
(6, '2020_02_14_061345_create_categories_table', 1),
(7, '2020_03_19_052724_create_stocks_table', 1),
(8, '2020_07_09_201305_create_sub_categories_table', 1),
(9, '2020_07_09_201916_create_donors_table', 1),
(10, '2020_07_20_100445_create_tempstocks_table', 1),
(11, '2020_07_20_155549_create_notifications_table', 1),
(12, '2020_10_01_050031_create_contacts_table', 1),
(13, '2020_10_01_202012_create_volunteers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipients`
--

CREATE TABLE `recipients` (
  `id` int(10) UNSIGNED NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `subCategory_id` int(10) UNSIGNED NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ebill` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipients`
--

INSERT INTO `recipients` (`id`, `recipient_id`, `category_id`, `subCategory_id`, `value`, `unit`, `message`, `Ebill`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '20', 'Rupees', '3456789hbvghjk', 'img/1601595487.png', 1, '2020-10-02 06:38:07', '2020-10-02 06:38:32'),
(2, 1, 1, 1, '400', 'Rupees', 'rtyuio', 'img/1601598087.png', 1, '2020-10-02 07:21:27', '2020-10-02 07:22:03'),
(3, 6, 1, 2, '10000', 'Rupees', 'no job', 'img/1601603144.png', NULL, '2020-10-02 08:45:44', '2020-10-02 08:45:44'),
(4, 7, 6, 12, '2', 'Quantity', 'jobless', 'img/1601603292.png', 1, '2020-10-02 08:48:12', '2020-10-02 09:33:44');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL, '2020-10-02 05:24:57', '2020-10-02 05:24:57'),
(2, 'Donor', NULL, NULL, '2020-10-02 05:24:57', '2020-10-02 05:24:57'),
(3, 'Recipient ', NULL, NULL, '2020-10-02 05:24:57', '2020-10-02 05:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 3),
(7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `categor_id` int(10) UNSIGNED NOT NULL,
  `subCategory_id` int(11) NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `categor_id`, `subCategory_id`, `value`, `unit`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '49620', 'Rupees', NULL, '2020-10-02 06:38:29', '2020-10-02 09:33:36'),
(2, 2, 5, '100000', 'Rupees', NULL, '2020-10-02 09:33:38', '2020-10-02 09:33:38'),
(3, 3, 7, '20', 'kilogram', NULL, '2020-10-02 09:33:40', '2020-10-02 09:33:40'),
(4, 6, 11, '50', 'Quantity', NULL, '2020-10-02 13:53:58', '2020-10-02 13:53:58');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `sub` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `sub`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 'Scholarship', NULL, '2020-10-02 05:51:20', '2020-10-02 08:23:57'),
(2, 1, 'Monthly Income Support', NULL, '2020-10-02 05:52:04', '2020-10-02 08:24:04'),
(3, 1, 'Loan', NULL, '2020-10-02 05:52:24', '2020-10-02 08:24:11'),
(4, 1, 'Orphans', NULL, '2020-10-02 05:53:16', '2020-10-02 05:53:16'),
(5, 2, 'Furniture', NULL, '2020-10-02 05:53:50', '2020-10-02 05:53:50'),
(6, 2, 'Electronics Appliances', NULL, '2020-10-02 05:55:26', '2020-10-02 05:55:26'),
(7, 3, 'Rice', NULL, '2020-10-02 05:56:30', '2020-10-02 05:56:30'),
(8, 3, 'Wheat', NULL, '2020-10-02 05:57:00', '2020-10-02 05:57:00'),
(9, 3, 'Flour', NULL, '2020-10-02 05:58:40', '2020-10-02 05:58:40'),
(10, 4, 'Medicine', NULL, '2020-10-02 06:00:34', '2020-10-02 06:00:34'),
(11, 6, 'Summer Cloth', NULL, '2020-10-02 06:01:35', '2020-10-02 06:01:35'),
(12, 6, 'Winter Cloth', NULL, '2020-10-02 06:02:39', '2020-10-02 06:02:39');

-- --------------------------------------------------------

--
-- Table structure for table `tempstocks`
--

CREATE TABLE `tempstocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `categor_id` int(10) UNSIGNED NOT NULL,
  `subCategory_id` int(10) UNSIGNED NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `cnic`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Irfan', 'admin@gmail.com', NULL, '$2y$10$06/o3ENE.Ca.xmIAnI0bTeA0Z2ba253F8wH.bDe86yJlFLW9m5qV.', '46546565454', '4654654654654', '4654654654654', 'GnQ1HRwMapoQUd5IC5mlMz8RTboRFtQisJffAsimN41d1Pl8MnPBAy7TfxX8', '2020-10-02 05:24:57', '2020-10-02 05:24:57'),
(2, 'saif', 'saifrafaqat555@gmail.com', NULL, '$2y$10$KZqVwi6zWFOtCzOZEdaHhutApoUtoMviqc.8SZGpB5KNoCv2vQBIy', '03083218273', '3520118286293', NULL, 'gC4Hvrgvz0HFvLvsVzLwmSatPj1HR9x9s37s2kvUwlDU42jygcxbXbMHWqyw', '2020-10-02 08:26:37', '2020-10-02 08:26:37'),
(3, 'rizwan', 'rizwan123@gmail.com', NULL, '$2y$10$PN6/HbSPHypA8bovF6KV0ehq3GYuwL5VHJUbF9BMLU6cB8WErLGh.', '03128090311', '3520126549823', NULL, '2wue3uhWmVY7YNAgWZ8zY4mfIcLFCUXngn5ESNfupK5xcrM56Lay2nwAIl9U', '2020-10-02 08:32:06', '2020-10-02 08:32:06'),
(4, 'ayesha', 'ayesha123@gmail.com', NULL, '$2y$10$eH53UpypKjgILIg/BeM2d.xU6aqzXj.onj.EvcD2hq//DJc76bQjK', '03111156951', '3520118286294', NULL, 'r5G3321ZOitwcFiIMbDEx3kFcNFVhPMjihUzXhLl91OeLZ9MFHIhZeOJAJJy', '2020-10-02 08:36:12', '2020-10-02 08:36:12'),
(5, 'hina', 'hina123@gmail.com', NULL, '$2y$10$/R57yHH42qTtEoZXJ04xsu0aiZ2lDno9Rf8Epl4uN1KiiQSCp/Hga', '03004261994', '3450276299406', NULL, 'BfRsCd2C5wBeUPYgWsdfuLFJXgFEoU7XbDjMh5ROufjI5Fa4BREFApEmDXtx', '2020-10-02 08:41:16', '2020-10-02 08:41:16'),
(6, 'ahmad', 'ahmad123@gmail.com', NULL, '$2y$10$4IBigWAWGUBRul6yoi65au2MGkFOKnZg/IBnNYgMe/WuKEIjtG7gG', '03336542952', '3520142516983', NULL, 'A7ncljSOcW680pK1JANP7bP4OvLsBzemPsW4jBEqNBBNzq6ymm4S1r5AAWqM', '2020-10-02 08:44:15', '2020-10-02 08:44:15'),
(7, 'haseeb', 'haseeb123@gmail.com', NULL, '$2y$10$YM.gQVy7EMY1LS1v4oGg5uKcSUIKh80SF9x4M/Xx/o03HRd2uHmXm', '03214563965', '3520178963251', NULL, '1GBNgKt9CD4lpyltS9JjzHyDizcAUwDgkVnfywMBetGvVqZJHVeh2AIbRE7C', '2020-10-02 08:46:56', '2020-10-02 08:46:56');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `name`, `province`, `email`, `email_verified_at`, `phone`, `skill`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Irfan', NULL, 'Irfangujjar035@gmail.com', NULL, '03004261994', 'dfghjk', 'cvbn', '2020-10-02 04:49:00', '2020-10-02 04:49:00'),
(2, 'Muhammad Irfan', NULL, 'Irfangujjar035@gmail.com', NULL, '03004261994', 'dfghjk', 'cvbn', '2020-10-02 04:51:42', '2020-10-02 04:51:42'),
(3, 'Muhammad Irfan', 'Punjab', 'rizwan@gmail.com', NULL, '03004261994', 'dfyuiop;lkjh', 'fghjklkjhgfghjkl', '2020-10-02 04:51:57', '2020-10-02 04:51:57'),
(4, 'Muhammad Irfan', 'Punjab', 'rizwan@gmail.com', NULL, '03004261994', 'dfyuiop;lkjh', 'fghjklkjhgfghjkl', '2020-10-02 04:57:26', '2020-10-02 04:57:26'),
(5, 'Muhammad Irfan', 'Punjab', 'Irfangujjar035@gmail.com', NULL, '03004261994', '2334', 'hjk', '2020-10-02 04:57:42', '2020-10-02 04:57:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `recipients`
--
ALTER TABLE `recipients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stocks_categor_id_foreign` (`categor_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempstocks`
--
ALTER TABLE `tempstocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_cnic_unique` (`cnic`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recipients`
--
ALTER TABLE `recipients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tempstocks`
--
ALTER TABLE `tempstocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_categor_id_foreign` FOREIGN KEY (`categor_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
