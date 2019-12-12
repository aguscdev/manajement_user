-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 02:06 AM
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
-- Database: `tests`
--

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
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usia` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `alamat`, `usia`, `no_telepon`, `email`, `user_role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'agus', 'Tangerang', '30', '085778783602', 'agus@gmail.com', 'administrator', NULL, '$2y$10$Xz91pEshig2z.qX87LIcnu5pPsHVgh.rSuLZSEUJn/ACXprckmb/G', '9GsZ3RhS5I2mT07feyt1fKGkUJm3TLWRjdi9BCjxuaQrHJZAe5E7yPaNU6b5', '2019-12-10 08:19:55', '2019-12-10 08:19:55'),
(2, 'budi', 'Cikupa', '30', '085778783607', 'budi@gmail.com', 'officer', NULL, '$2y$10$HX4vAiDcat/BkDdEfg25h.AszG67siOCmeI1cvPsgmi6dgPVYd9/m', 'CgZzTFX96fN1Mh7XczhiSYGEWQB3lkdhO0rt6br4IZUdFMeOWLSaN05jsvKh', '2019-12-10 08:20:54', '2019-12-10 08:20:54'),
(3, 'eko', 'Cikupa', '24', '085777889923', 'eko@gmail.com', 'user', NULL, '$2y$10$7BZMFZKgU2jNuNbnJ5PC9uJlbNlDuHTJD2fuakOLnGdQsrshRJsem', 'KdT8GGIqpDvc9Q1Qg4ceaxzRUCYatVtvuTr3JpB06hLaapX19t2xrdhdf5vw', '2019-12-10 08:21:45', '2019-12-10 08:21:45'),
(4, 'idham', 'Rangkas', '27', '085777889926', 'idham@gmail.com', 'user', NULL, '$2y$10$Mm01asNa5GJo3P5HzDEQA.fbyfAPhr8eUNRysvLQUX1jw8kYHur.W', 'Qkop76BO0mbl24vASoZTsICcU9UwgfoAfE3ajoWvKjFC6gTGhKHBD8kvVl4X', '2019-12-10 08:22:22', '2019-12-10 08:22:22'),
(21, 'puji', 'Rajeg', '29', '085778783602', 'pujiyati@gmail.com', 'officer', NULL, '$2y$10$7uAaPMVkWuZXyNdpltIb3O56W/Oo1aElV2BLLL7d2Rj2Z7gk7EHzC', NULL, '2019-12-11 18:03:33', '2019-12-11 18:04:59');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
