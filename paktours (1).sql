-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2019 at 08:06 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paktours`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Test', 'test@gmail.com', '$2y$10$6G8k7mP/71N60eDxkuofhOuOsJfQIoQ3XhOb7kaPdlzNvj/nKY05K', 'qW4yYMSuhs4QVyJbpBXYoICLnI6Iwp5YeRwDY04b6juKW4XsIDsOrkCrIsDJ', '2018-04-12 00:14:45', '2018-04-12 00:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `id` int(11) NOT NULL,
  `tt_id` int(11) DEFAULT NULL,
  `Budget` int(255) DEFAULT NULL,
  `NSA` int(100) DEFAULT NULL,
  `Details` longtext,
  `Company_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `tt_id`, `Budget`, `NSA`, `Details`, `Company_id`, `updated_at`, `created_at`) VALUES
(1, 1, 20000, 40, 'dsakldkasldasdlasjd;asdkl', 1, '2018-12-17 06:45:11', '2018-12-17 06:45:11');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `tour_id` int(11) DEFAULT NULL,
  `seats` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `tour_id`, `seats`, `updated_at`, `created_at`) VALUES
(1, 2, 1, 1, '2018-11-08 20:27:41', '2018-11-08 20:27:41'),
(2, 1, 1, 1, '2018-11-08 20:29:16', '2018-11-08 20:29:16'),
(3, 1, 3, 10, '2018-11-08 22:50:02', '2018-11-08 22:50:02'),
(4, 1, 2, 40, '2018-11-09 00:01:47', '2018-11-09 00:01:47'),
(5, 2, 3, 5, '2018-11-09 00:18:08', '2018-11-09 00:18:08'),
(8, 1, 8, 25, '2018-12-09 15:51:27', '2018-12-09 15:51:27'),
(9, 1, 4, 25, '2018-12-09 15:54:57', '2018-12-09 15:54:57'),
(10, 1, 5, 25, '2018-12-09 15:57:46', '2018-12-09 15:57:46'),
(11, 1, 6, 20, '2018-12-15 12:21:24', '2018-12-15 12:21:24'),
(12, 1, 6, 20, '2019-01-01 07:41:05', '2019-01-01 07:41:05');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` longtext,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `name`, `email`, `message`, `updated_at`, `created_at`) VALUES
(1, 1, 'adnan', 'hadi@gmail.com', 'hola', '2019-01-01 16:38:44', '2019-01-01 16:38:44'),
(2, 1, 'Faizan', 'Faizan@gmail.com', 'Hola Adnan', '2019-01-01 16:46:30', '2019-01-01 16:46:30'),
(3, 1, 'Jp', 'jp@gmail.com', 'Hola Adnan!', '2019-01-01 16:47:20', '2019-01-01 16:47:20'),
(4, 1, 'faizan', 'fazi@gmail.com', 'hola', '2019-01-01 16:48:24', '2019-01-01 16:48:24');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `CompanyName` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(244) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `CompanyName`, `email`, `password`, `Image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adnan', 'test@gmail.com', '$2y$10$7kbbrFfyr7JedQ0SFkDtjeGvPh8U5aI5Le0eAe5tFzTO/BNtI.wxu', 'MysticHills.jpg', 'Xz2SmHPIFC5OLg95y3ojVYLFEWsPHPBEdrIG0SdMI7Wpcfb3cjQTxfjOmGRC', '2018-04-12 00:14:45', '2018-10-22 21:30:02'),
(2, 'Mana', 'test1@gmail.com', '$2y$10$Rn6NHvf.VJ3jbP.d8jN.l.dexJy1aOAaEewkorj9vpbBBcWoBFTIO', 'TourCompany.jpg', 'rqN1mr3QLP7KUE4Bd92s1abEadGVWG7x3Wmm87DEwsjppYsO9NOMnSBjOURV', '2018-10-22 21:31:52', '2018-10-22 21:31:52'),
(3, 'Noob Travels', 'Test2@gmail.com', '$2y$10$h90P.ABC4Sdqc6ftuOhc2uhbH.EDgR7xpSQ7Y8EAADZZOhwJ2bBnG', 'MysticHills.jpg', NULL, '2018-10-24 16:08:44', '2018-10-24 16:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` longtext,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_id`, `name`, `last_name`, `email`, `phone`, `subject`, `message`, `updated_at`, `created_at`) VALUES
(1, 1, 'adnan', 'haider', 'adnan.haider71@gmail.com', 3213217, 'asdjl', 'lallalalla', '2019-01-01 15:53:11', '2019-01-01 15:53:11');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `company_id`, `value`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 0, '2019-01-12 14:06:15', '2019-01-12 13:36:54'),
(2, 1, 2, 1, '2019-01-12 13:50:49', '2019-01-12 13:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2017_05_02_022957_create_cruds_table', 1),
(10, '2018_03_15_161856_create_admins_table', 1),
(11, '2018_04_10_152923_create_threads_table', 1),
(12, '2018_04_19_170556_create_questions', 1),
(13, '2018_05_16_170816_create_question2_table', 2),
(14, '2018_05_16_180835_create_questions2_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temptours`
--

CREATE TABLE `temptours` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `CompanyId` int(11) DEFAULT NULL,
  `Image` varchar(250) NOT NULL DEFAULT 'TourCompany.jpg',
  `days` varchar(255) NOT NULL,
  `Details` varchar(600) DEFAULT NULL,
  `Budget` int(255) DEFAULT NULL,
  `departure` date NOT NULL,
  `NSA` int(100) DEFAULT NULL,
  `NRP` int(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temptours`
--

INSERT INTO `temptours` (`id`, `user_id`, `name`, `CompanyId`, `Image`, `days`, `Details`, `Budget`, `departure`, `NSA`, `NRP`, `created_at`, `updated_at`) VALUES
(1, 1, 'naran', NULL, 'TourCompany.jpg', '10', 'yhgjkhkjhfrtdfghjgh', NULL, '2018-12-28', NULL, 20, '2018-12-17 06:39:08', '2018-12-17 06:39:08');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `CompanyId` int(11) NOT NULL,
  `Image` varchar(250) NOT NULL,
  `days` varchar(255) NOT NULL,
  `Details` varchar(600) DEFAULT NULL,
  `Budget` int(255) DEFAULT NULL,
  `departure` date NOT NULL,
  `NSA` int(100) DEFAULT NULL,
  `NRP` int(100) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `name`, `CompanyId`, `Image`, `days`, `Details`, `Budget`, `departure`, `NSA`, `NRP`, `created_at`, `updated_at`) VALUES
(1, 'Aaaaa', 1, 'pack-1.jpg', '10', 'wdasfasfas', 100000, '2018-11-23', 50, 2, '2018-10-30 20:59:54', '2018-11-21 13:06:37'),
(2, 'Muree', 1, 'TourCompany.jpg', '10 Days -- 9 Nights - 10 Days', 'Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah', 50000, '2018-10-10', 40, 40, '2018-10-30 21:00:24', '2018-11-09 00:13:20'),
(3, 'Hunza Valley', 2, 'MysticHills.jpg', '4 Nights -- 4 Days', 'Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah', 25000, '2018-10-10', 45, 15, '2018-10-30 21:01:48', '2018-11-09 00:18:08'),
(5, 'Swat', 1, 'TourCompany.jpg', '10', 'blah blah', 25000, '1111-11-11', 30, 25, '2018-12-09 15:57:46', '2018-12-09 15:57:46'),
(6, 'muree', 1, 'TourCompany.jpg', '15', 'dsakldkasldasdlasjd;asdkl', 25000, '2018-11-29', 25, 20, '2019-01-01 07:41:05', '2019-01-01 07:41:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `phone_no` bigint(255) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone_no`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Abdul Rehman', 90078601, 'test@gmail.com', '$2y$10$iHGVTb8aHf7cYLz75tZkBOgIU8YN/O6KdwCs4EfU4jF4ks.Jijxk.', 'Ep1JNhFKhLaAGzSGtvQKTJFF5C00xsLrvm7citm5BSKs7hYswstytnCmWgkq', '2018-05-07 14:30:55', '2018-11-08 19:34:08'),
(2, 'Hassan', 900786011, 'test1@gmail.com', '$2y$10$iHGVTb8aHf7cYLz75tZkBOgIU8YN/O6KdwCs4EfU4jF4ks.Jijxk.', 'LKDYresUwAHTg1b3XFhNz1vbJfffTBP8DP2AfbyV18JzsY4qvhoHsjB2l9ee', '2018-05-07 14:30:55', '2018-11-08 19:34:08'),
(3, 'Adnan', 3364403025, 'test3@gmail.com', '$2y$10$64fmzwtmE6uQymsfpgv8X.hzou6LGldwRrzfLCWowko.jBwA7EcGm', 'sUrPbZ9LsEZfyU79t18x0fabGCkz8tQJCV4ey6QYLNyWwY0O9hrRXC94oExK', '2018-11-08 21:35:19', '2018-11-08 21:35:19'),
(4, 'Hamza Qamar', 900786011, 'test41@gmail.com', '$2y$10$sBP94Qg55OnKmqtsVpcDnecO8G5zzg.Gr.CXWu8U/C4Ml4nIaZBLC', NULL, '2018-11-08 21:57:31', '2018-11-08 21:59:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
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
-- Indexes for table `temptours`
--
ALTER TABLE `temptours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `temptours`
--
ALTER TABLE `temptours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
