-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 07:31 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health`
--

-- --------------------------------------------------------

--
-- Table structure for table `childs`
--

CREATE TABLE `childs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `child_p_id` int(11) NOT NULL,
  `child_dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `child_photo_url` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `childs`
--

INSERT INTO `childs` (`id`, `uid`, `child_name`, `child_p_id`, `child_dob`, `child_photo_url`, `created_at`, `updated_at`) VALUES
(1, '12350', 'Arush kumar Gautam', 5, '\n2023-05-09', 0, NULL, NULL);

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
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hospital_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `hospital_name`, `hospital_desc`, `created_at`, `updated_at`, `address`) VALUES
(1, 'JK Hospital', 'Health Care', '2023-05-02 18:39:00', '2023-04-30 18:30:00', 'Bakshi ka talab');

-- --------------------------------------------------------

--
-- Table structure for table `immunisation_recorders`
--

CREATE TABLE `immunisation_recorders` (
  `child_name` varchar(250) NOT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `father_name` char(50) DEFAULT NULL,
  `mother_name` char(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `HepB` char(20) DEFAULT NULL,
  `HepB1` char(20) DEFAULT NULL,
  `RV` char(20) DEFAULT NULL,
  `RV2` char(40) DEFAULT NULL,
  `RV3` char(40) DEFAULT NULL,
  `DTap1` char(50) DEFAULT NULL,
  `DTap2` char(50) DEFAULT NULL,
  `DTap3` char(50) DEFAULT NULL,
  `Hib1` char(50) DEFAULT NULL,
  `Hib2` char(50) DEFAULT NULL,
  `Hib3` char(50) DEFAULT NULL,
  `PCV1` char(50) DEFAULT NULL,
  `PCV2` char(50) DEFAULT NULL,
  `PCV3` char(50) DEFAULT NULL,
  `IPV1` char(50) DEFAULT NULL,
  `IPV2` char(30) DEFAULT NULL,
  `IPV3` char(50) DEFAULT NULL,
  `Influenza` char(50) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `_token` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `immunisation_recorders`
--

INSERT INTO `immunisation_recorders` (`child_name`, `phone_no`, `father_name`, `mother_name`, `dob`, `HepB`, `HepB1`, `RV`, `RV2`, `RV3`, `DTap1`, `DTap2`, `DTap3`, `Hib1`, `Hib2`, `Hib3`, `PCV1`, `PCV2`, `PCV3`, `IPV1`, `IPV2`, `IPV3`, `Influenza`, `id`, `email`, `_token`) VALUES
('Arush', '+918853409746', 'Praveen Kumar', 'Manorma', '2023-01-02', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 7, 'praveen@gmail.com', 'UDaDV5K4RvmxfgOaSmoEBWUFbl8D6yhuugO4bLlL'),
('Anil', '+919696549839', 'Vinay Kumar', 'Raj kumari', '2023-02-02', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 8, 'Vinay@gmail.com', 'UDaDV5K4RvmxfgOaSmoEBWUFbl8D6yhuugO4bLlL'),
('Vikas', '+91800546848', 'Vinod kumar', 'Durga Devi', '2023-03-03', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 9, 'Vinod@gmail.com', 'UDaDV5K4RvmxfgOaSmoEBWUFbl8D6yhuugO4bLlL'),
('shubham gautam', '+916386550905', 'Ram Vilash', 'Vilasha Devi', '2023-03-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, 'sk.shubhamg007@gmail.com', 'UDaDV5K4RvmxfgOaSmoEBWUFbl8D6yhuugO4bLlL');

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
(5, '2023_05_09_164858_create_child_vaccinations_table', 2),
(8, '2023_05_09_170725_create_vaccine_table', 3),
(10, '2023_05_09_172047_create_hospitals_table', 4),
(11, '2023_05_09_170450_create_child_table', 5);

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'parents'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `role`) VALUES
(5, 'shubham gautam', 'sk.shubhamg1998@gmail.com', NULL, '$2y$10$moiSALMEhXcWknZN3szRmeyXhaSWsmNFmhykfn2yKRgojtF3U.mZC', NULL, '2023-05-09 08:43:15', '2023-05-09 08:43:15', '6386550905', 'parents');

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vaccine_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vaccine_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`id`, `vaccine_name`, `vaccine_desc`, `created_at`, `updated_at`) VALUES
(1, 'Red Vaccine', 'Protect from fever a child ', '2023-05-02 18:35:48', '2023-04-30 18:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `childs`
--
ALTER TABLE `childs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `immunisation_recorders`
--
ALTER TABLE `immunisation_recorders`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vaccines`
--
ALTER TABLE `vaccines`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `childs`
--
ALTER TABLE `childs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `immunisation_recorders`
--
ALTER TABLE `immunisation_recorders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
