-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2018 at 08:02 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fantasy`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(10) UNSIGNED NOT NULL,
  `begins` datetime DEFAULT NULL,
  `result1` int(10) UNSIGNED DEFAULT NULL,
  `result2` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `home_team_id` int(10) UNSIGNED DEFAULT NULL,
  `away_team_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `begins`, `result1`, `result2`, `created_at`, `updated_at`, `deleted_at`, `home_team_id`, `away_team_id`) VALUES
(1, '2018-08-01 11:00:00', NULL, NULL, '2018-07-31 16:35:49', '2018-07-31 16:35:49', NULL, 1, 2),
(2, '2018-07-18 08:30:00', 90, 80, '2018-07-31 16:35:49', '2018-07-31 16:35:49', NULL, 2, 1);

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
(3, '2018_07_31_122155_create_1533028915_roles_table', 1),
(4, '2018_07_31_122157_create_1533028916_users_table', 1),
(5, '2018_07_31_122158_add_5b602a34bea8f_relationships_to_user_table', 1),
(6, '2018_07_31_123950_create_1533029990_teams_table', 1),
(7, '2018_07_31_124709_create_1533030428_players_table', 1),
(8, '2018_07_31_124710_add_5b60301d9776d_relationships_to_player_table', 1),
(9, '2018_07_31_125549_create_1533030948_games_table', 1),
(10, '2018_07_31_125550_add_5b6032258c5f5_relationships_to_game_table', 1);

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
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `team_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `name`, `birth`, `created_at`, `updated_at`, `deleted_at`, `team_id`) VALUES
(1, 'SS Jamal', '1989-06-14', '2018-07-31 16:35:49', '2018-07-31 16:35:49', NULL, 1),
(2, 'Wole Tunde', '1988-09-14', '2018-07-31 16:35:49', '2018-07-31 16:35:49', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Administrator (can create other users)', '2018-07-31 16:35:49', '2018-07-31 16:35:49'),
(2, 'Simple user', '2018-07-31 16:35:49', '2018-07-31 16:35:49');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Skilz FC', '2018-07-31 16:35:49', '2018-07-31 16:35:49', NULL),
(2, 'Wolves Gang', '2018-07-31 16:35:49', '2018-07-31 16:35:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$D3LxYAxwks2/pqmIfZThmuzc8.ADMnwHGrSkyYaQ6ltCZwl4.lOp2', 'G8SOQVizVJXO1VsVeK8zA9Wnkx9SAQXuTrFddBv2ijf0QOEbrR6knVXFmPMH', '2018-07-31 16:35:50', '2018-07-31 16:35:50', 1),
(2, 'Wole Tunde', 'wole@email.com', '$2y$10$VDGt7/eDSYhByW5j4uGn1unIn.M3ZQY35kxfGZ2Fw6jCw..x4NEmG', 'qsTwzEl9mwxzKyuLcXYZ8Wjdo7YJV2oQ40Ok5YTKfdf9RvGBc1qB0TwYvZkl', '2018-08-01 06:31:19', '2018-08-01 06:31:19', NULL),
(3, 'tunde bode', 'tunde@email.com', '$2y$10$XRLdh2rJ.0tMavHDH8h/fexR5fcLx6UTDHq8eQLMTfzdjyGrveECK', 'ZNogjqMJQwb9cs4pN4tG8uhhL6C70I66K03orUZ58kDjIuYub3mesKnwy7qJ', '2018-08-01 07:51:23', '2018-11-04 21:49:19', 2),
(4, 'ajayi', 'ajayi@email.com', '$2y$10$oeNreq0FsvedGj8bBKPqtugkkN3tIRYh.c5dd6Uu7H/TlHJW8tNV2', 'HMdo710UGgsh7xh4Iemu59WVXC8nU8YvQuyJCCYO6qugPNu9Yyd3vbDOOKMA', '2018-08-01 07:53:59', '2018-08-01 07:53:59', NULL),
(5, 'tayo', 'tayo@email.com', '$2y$10$QnyyGrgrOY7zn3oqeeN3duw5rELOHa6yJgt6bHqWqhpEnEDEdeyRe', 'yNdsk9ccikGjT0RKksf89b2ig78YvirZV9FkeXEjB1PxeOowUphOVnphhqiL', '2018-08-01 09:12:55', '2018-08-01 09:12:55', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `games_deleted_at_index` (`deleted_at`),
  ADD KEY `190464_5b60322523327` (`home_team_id`),
  ADD KEY `190464_5b60322531073` (`away_team_id`);

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
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`),
  ADD KEY `players_deleted_at_index` (`deleted_at`),
  ADD KEY `190463_5b60301d4b714` (`team_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `190450_5b602a3471466` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `190464_5b60322523327` FOREIGN KEY (`home_team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `190464_5b60322531073` FOREIGN KEY (`away_team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `190463_5b60301d4b714` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `190450_5b602a3471466` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
