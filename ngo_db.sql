-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2026 at 06:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `excerpt` text NOT NULL,
  `content` longtext NOT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `tags` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`tags`)),
  `author_name` varchar(255) NOT NULL,
  `author_role` varchar(255) DEFAULT NULL,
  `author_avatar` varchar(255) DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `read_time` int(11) NOT NULL DEFAULT 5,
  `views` int(11) NOT NULL DEFAULT 0,
  `status` enum('draft','published','archived') NOT NULL DEFAULT 'draft',
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_description` text DEFAULT NULL,
  `seo_keywords` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`seo_keywords`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_inquiries`
--

CREATE TABLE `contact_inquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` enum('new','read','responded','closed') NOT NULL DEFAULT 'new',
  `admin_notes` text DEFAULT NULL,
  `responded_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `frequency` enum('once','monthly') NOT NULL,
  `payment_method` enum('stripe','paypal','crypto') NOT NULL,
  `status` enum('pending','completed','failed','cancelled') NOT NULL DEFAULT 'pending',
  `transaction_id` varchar(255) DEFAULT NULL,
  `payment_details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`payment_details`)),
  `processed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `first_name`, `last_name`, `email`, `amount`, `frequency`, `payment_method`, `status`, `transaction_id`, `payment_details`, `processed_at`, `created_at`, `updated_at`) VALUES
(1, 'Daniel', 'oshugbugie momoh', 'danielrichdotcom@gmail.com', 22.00, 'once', 'crypto', 'completed', 'CRYPTO_1768232240_5355', NULL, '2026-01-12 14:37:20', '2026-01-12 14:37:21', '2026-01-12 14:37:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_01_05_014004_create_donations_table', 1),
(5, '2026_01_06_051212_create_volunteers_table', 1),
(6, '2026_01_06_051233_create_programs_table', 1),
(7, '2026_01_06_051249_create_blog_posts_table', 1),
(8, '2026_01_06_051259_create_contact_inquiries_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` enum('education','environment','community','health','disaster-relief','youth-development') NOT NULL DEFAULT 'community',
  `status` enum('planning','active','completed','paused') NOT NULL DEFAULT 'planning',
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `target_amount` decimal(15,2) DEFAULT NULL,
  `raised_amount` decimal(15,2) NOT NULL DEFAULT 0.00,
  `location` varchar(255) DEFAULT NULL,
  `coordinator_name` varchar(255) DEFAULT NULL,
  `coordinator_email` varchar(255) DEFAULT NULL,
  `impact_metrics` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`impact_metrics`)),
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`images`)),
  `objectives` text DEFAULT NULL,
  `challenges` text DEFAULT NULL,
  `success_stories` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8qPqO8SBzY6nHra6fNkYknABsSktkhA6mbvV5JiL', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicmlFWGtpbEFPaUFHb2tEb3B4OGtyeDIwSnUxQWYzd05RWTVCRTZveiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1768350598),
('92r5PDlQUJzpWe79mPLcQDrHO4autPHE7CHY86UY', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVzRSU1RSSmIwY2Z4cXIwS3YzRGxjeTU3cWY2QnhUYjUxeEF6QU40WiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wYXltZW50L3N0cmlwZSI7czo1OiJyb3V0ZSI7czoxNDoicGF5bWVudC5zdHJpcGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjEzOiJkb25hdGlvbl9kYXRhIjthOjU6e3M6MTA6ImZpcnN0X25hbWUiO3M6NjoiRGFuaWVsIjtzOjk6Imxhc3RfbmFtZSI7czoxNjoib3NodWdidWdpZSBtb21vaCI7czo1OiJlbWFpbCI7czoyNjoiZGFuaWVscmljaGRvdGNvbUBnbWFpbC5jb20iO3M6NjoiYW1vdW50IjtzOjM6IjI1MCI7czo5OiJmcmVxdWVuY3kiO3M6NDoib25jZSI7fXM6MjU6Im5vd3BheW1lbnRzX2RvbmF0aW9uX2RhdGEiO2E6NTp7czoxMDoiZmlyc3RfbmFtZSI7czo2OiJEYW5pZWwiO3M6OToibGFzdF9uYW1lIjtzOjE2OiJvc2h1Z2J1Z2llIG1vbW9oIjtzOjU6ImVtYWlsIjtzOjI2OiJkYW5pZWxyaWNoZG90Y29tQGdtYWlsLmNvbSI7czo2OiJhbW91bnQiO3M6NDoiNzAwMCI7czo5OiJmcmVxdWVuY3kiO3M6NDoib25jZSI7fX0=', 1768308505),
('jJKylJVqfcAdI5GsqnE83o6mYX0tD2V8nobLY9Qg', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', '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', 1768232252),
('K6k3u8OsFS9KSE33z4OW7yw6Jer4xBrwbjunzmwc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic0taTDVpQjdxeVJLREs3VTFwVUdoMnlKbnI1NVVHQ3RyS3Q3bmxkYiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kb25hdGUiO3M6NToicm91dGUiO3M6NjoiZG9uYXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1768246746),
('OnDmwCtPCnsiW5eK69YzEe17ukQ0cNJixuF4mIYB', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiVHFSM2M3TDNqUUV5Q2hQdmxqUG5Pd09qajNwZTdBM3J3NmxQYTJFVyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czoxMzoiZG9uYXRpb25fZGF0YSI7YTo1OntzOjEwOiJmaXJzdF9uYW1lIjtzOjc6InJpY2hhcmQiO3M6OToibGFzdF9uYW1lIjtzOjc6IkhlbXBzb24iO3M6NToiZW1haWwiO3M6MTc6IlJpY2hhcmRAZ21haWwuY29tIjtzOjY6ImFtb3VudCI7czo1OiI1MDAwMCI7czo5OiJmcmVxdWVuY3kiO3M6NDoib25jZSI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1768350580),
('pOhKmzJqQwKykZk7IZT91YNDDjAA1A7OEIya1yAX', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMWRScXVncDF4OUc3VWhBcmhVaUFvaWZkNFpNSFp0WWRqUU1UaHdpMSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kb25hdGUiO3M6NToicm91dGUiO3M6NjoiZG9uYXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1768241310);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'NGO Australia Admin', 'admin@ngoaustralia.org', '2026-01-07 12:59:34', '$2y$12$35Nh4QS7poEovy7vo9Hhk.lhARm3y7GaPkgixP6HrOX9e52FTrixy', NULL, '2026-01-07 12:59:37', '2026-01-07 22:18:46');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `postcode` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `skills_interests` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`skills_interests`)),
  `availability` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`availability`)),
  `experience_level` enum('beginner','intermediate','advanced') NOT NULL DEFAULT 'beginner',
  `emergency_contact_name` varchar(255) DEFAULT NULL,
  `emergency_contact_phone` varchar(255) DEFAULT NULL,
  `motivation_statement` text DEFAULT NULL,
  `status` enum('pending','approved','rejected','active','inactive') NOT NULL DEFAULT 'pending',
  `application_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_posts_slug_unique` (`slug`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contact_inquiries`
--
ALTER TABLE `contact_inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `programs_slug_unique` (`slug`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `volunteers_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_inquiries`
--
ALTER TABLE `contact_inquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
