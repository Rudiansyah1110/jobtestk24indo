-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2021 at 12:28 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `k24indo`
--

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_25_204329_create_trace_record_logins_table', 2);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trace_record_logins`
--

CREATE TABLE `trace_record_logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trace_record_logins`
--

INSERT INTO `trace_record_logins` (`id`, `username`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Rudiansyah', 'rudiansyah@gmail.com', '2021-09-25 13:54:42', '2021-09-25 13:54:42'),
(2, 'Naruto Uzumaki', 'naruto@konoha.com', '2021-09-25 13:55:26', '2021-09-25 13:55:26'),
(3, 'dsfefvbtw erwgwe', 'akun.user@gmail.com', '2021-09-25 14:01:25', '2021-09-25 14:01:25'),
(4, 'regvrtwbrfgb4r grega', 'akun.user@gmail.com', '2021-09-25 16:34:53', '2021-09-25 16:34:53'),
(5, 'Rudiansyah', 'rudiansyah@gmail.com', '2021-09-25 20:23:45', '2021-09-25 22:54:02'),
(8, 'Ir. Soekarno', 'soekarno.tokoh@gmail.com', '2021-09-25 22:24:48', '2021-09-25 22:50:54'),
(9, 'Rudiansyah', 'rudiansyah@gmail.com', '2021-09-25 22:36:52', '2021-09-25 22:36:52'),
(10, 'Ahmad Yani', 'ahmad.tokoh@gmail.com', '2021-09-25 22:37:20', '2021-09-25 22:37:20'),
(11, 'Mohammad Hatta', 'hatta.tokoh@gmail.com', '2021-09-25 23:35:28', '2021-09-25 23:35:28'),
(12, 'User Account', 'akun.user@gmail.com', '2021-09-25 23:51:09', '2021-09-25 23:51:09'),
(13, 'User Account', 'akun.user@gmail.com', '2021-09-25 23:53:31', '2021-09-25 23:53:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `email_verified_at`, `role`, `phone`, `birth_day`, `gender`, `ktp`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rudiansyah', 'rudiansyah@gmail.com', '$2y$10$z7mvu5TPTDSq4bPrr0CPM.7Rjx7SuWcvonc6ZGbCLIrVB36/QGH0G', NULL, 1, '08912345678', '2020-10-11', 'laki-laki', '3123456789000123', 'default.jpg', NULL, '2021-09-25 10:25:33', '2021-09-25 10:25:33'),
(2, 'User Account', 'akun.user@gmail.com', '$2y$10$.cIzCySyb1Ngj9faQRk03uCHHrrxm9cuB5w661RSHzfJ3mu954BW.', NULL, 2, '123456789098', '2000-02-08', 'perempuan', '31120192384756123', 'default.jpg', NULL, '2021-09-25 10:33:53', '2021-09-25 10:33:53'),
(3, 'Account Admin', 'akun.admin@gmail.com', '$2y$10$WLRvCLV.PZXybSwhfhPIRuRPe3HxMG7kiJL1FaofDEr5SDUVrelCS', NULL, 1, '085712345673', '1993-01-26', 'laki-laki', '123456789065748382', 'test.jpg', NULL, '2021-09-25 12:03:03', '2021-09-25 21:49:18'),
(5, 'Naruto Uzumaki', 'naruto@konoha.com', '$2y$10$kc1qxdY5xtJ.YogRY/l72OzUmtqphq4IB5/3tzLReWRYu7Ve/1CCG', NULL, 2, '0874567890987', '2010-10-10', 'laki-laki', '3211234567890987', 'naruto.jpg', NULL, '2021-09-25 13:05:47', '2021-09-25 21:41:33'),
(8, 'Ir. Soekarno', 'soekarno.tokoh@gmail.com', '$2y$10$BeirVTmiUFp4qObOttsh0O.Obu17JXK4V4q2FxCuoYd4cwR.sXkvi', NULL, 2, '12345678909', '2021-09-09', 'laki-laki', '1234567890123546723', 'default.jpg', NULL, '2021-09-25 15:47:58', '2021-09-25 22:49:27'),
(9, 'Gatot Subroto', 'gatot.tokoh@gmail.com', '$2y$10$e6WAC/DdwEBD6oUc3i/2L.iLgB39LfeXVcOfDvdkmYi3R.aSnjr5y', NULL, 2, '1234567890908', '2021-11-09', 'laki-laki', '32456766534245653245', 'gatot.jpg', NULL, '2021-09-25 16:26:31', '2021-09-25 16:26:31'),
(10, 'Ahmad Yani', 'ahmad.tokoh@gmail.com', '$2y$10$E79UhiQEvlkz8xpRc7iHle8YWHpYokB9wMQ6lqqv/6D3WrlYcLFE2', NULL, 2, '1234567890129', '2021-04-30', 'laki-laki', '1234567890754342', 'soekarno.jpg', NULL, '2021-09-25 16:29:45', '2021-09-25 16:29:45'),
(11, 'Mohammad Hatta', 'hatta.tokoh@gmail.com', '$2y$10$mtGThgg5u.odMERCfPA6UeApSuZcSlP8p7277eVeWvX2iRmH/OWWq', NULL, 2, '086712345675', '2000-08-17', 'laki-laki', '3112345678909871', 'Hatta.jpg', NULL, '2021-09-25 23:34:19', '2021-09-25 23:34:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `trace_record_logins`
--
ALTER TABLE `trace_record_logins`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trace_record_logins`
--
ALTER TABLE `trace_record_logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
