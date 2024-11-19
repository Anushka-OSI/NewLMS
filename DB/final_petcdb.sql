-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2024 at 03:14 PM
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
-- Database: `final_petcdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `allcourses_models`
--

CREATE TABLE `allcourses_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `courseId` varchar(255) NOT NULL,
  `courseName` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allcourses_models`
--

INSERT INTO `allcourses_models` (`id`, `courseId`, `courseName`, `duration`, `price`, `teacher`, `created_at`, `updated_at`) VALUES
(3, '002', 'IT', '6 months', '20000', '6', '2024-11-11 03:08:21', '2024-11-11 03:08:21');

-- --------------------------------------------------------

--
-- Table structure for table `apply_course_models`
--

CREATE TABLE `apply_course_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `studentID` int(11) NOT NULL,
  `courseID` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apply_course_models`
--

INSERT INTO `apply_course_models` (`id`, `studentID`, `courseID`, `Status`, `created_at`, `updated_at`) VALUES
(1, 5, 3, 'Approved', '2024-11-11 22:05:44', '2024-11-11 22:05:44'),
(2, 5, 2, 'Approved', '2024-11-11 22:08:52', '2024-11-11 22:08:52'),
(3, 5, 3, 'Request', '2024-11-11 22:15:06', '2024-11-11 22:15:06'),
(4, 5, 3, 'Request', '2024-11-11 22:18:41', '2024-11-11 22:18:41'),
(5, 5, 3, 'Request', '2024-11-11 22:19:18', '2024-11-11 22:19:18'),
(6, 5, 3, 'Request', '2024-11-11 22:20:33', '2024-11-11 22:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `course_material_models`
--

CREATE TABLE `course_material_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `courseId` varchar(255) NOT NULL,
  `courseName` varchar(255) NOT NULL,
  `document` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_material_models`
--

INSERT INTO `course_material_models` (`id`, `courseId`, `courseName`, `document`, `description`, `created_at`, `updated_at`) VALUES
(2, '3', 'IT', 'course_materials/2iM9IkGQT2ew9XP4QoCt0TeFZIbt6TLkyBqjEmgk.pdf', 'hgjfhm', '2024-11-13 01:07:44', '2024-11-13 01:07:44'),
(4, '3', 'IT', 'course_materials/GQ4cvvZVk876yf7qtdnvj69zZZUjpaKqQpSzeYZZ.pdf', 'jgh', '2024-11-13 01:22:52', '2024-11-13 01:22:52'),
(5, '3', 'IT', 'course_materials/8Bp7pJJPLOdFCtgJlEFz9l495fBfRBIpFy92oyt5.docx', 'word', '2024-11-13 01:50:52', '2024-11-13 01:50:52');

-- --------------------------------------------------------

--
-- Table structure for table `exam_results_models`
--

CREATE TABLE `exam_results_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `courseId` varchar(255) NOT NULL,
  `courseName` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_results_models`
--

INSERT INTO `exam_results_models` (`id`, `courseId`, `courseName`, `result`, `description`, `created_at`, `updated_at`) VALUES
(1, '3', 'IT', 'results/R2nHXGihPYbYPRYb2ow2ohfMamfxzA2W52HUXnS1.pdf', 'j', '2024-11-13 04:20:09', '2024-11-13 04:20:09');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_000000_create_users_table', 2),
(6, '2024_11_10_085530_create_allcourses_models_table', 3),
(7, '2024_11_11_150951_create_apply_course_models_table', 4),
(10, '2024_11_12_082417_create_zoomlinks_models_table', 5),
(11, '2024_11_13_051532_create_course_material_models_table', 6),
(12, '2024_11_13_074603_create_upload_assignment_models_table', 7),
(14, '2024_11_13_081833_create_exam_results_models_table', 8);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `upload_assignment_models`
--

CREATE TABLE `upload_assignment_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `courseId` varchar(255) NOT NULL,
  `courseName` varchar(255) NOT NULL,
  `assignment` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upload_assignment_models`
--

INSERT INTO `upload_assignment_models` (`id`, `courseId`, `courseName`, `assignment`, `description`, `created_at`, `updated_at`) VALUES
(1, '3', 'IT', 'assignments/FbunUySApnk3zRm9GqE1PeV1Vt5QswfaLse9t20I.pdf', 'test', '2024-11-13 02:29:54', '2024-11-13 02:29:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userID`, `role`, `firstName`, `lastName`, `email`, `password`, `confirmpassword`, `created_at`, `updated_at`) VALUES
(1, '001', 'admin', 'Gimhani', 'Chathumini', 'gimhanichathumini@gmail.com', '1234', '1234', NULL, NULL),
(3, 'gugigicyn', 'admin', 'Reagan', 'Sears', 'hejinosej@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '2024-11-09 04:25:09', '2024-11-09 04:25:09'),
(5, '003', 'student', 'imasha', 'prasadi', 'imasha@gmail.com', '1234', '1234', '2024-11-09 04:27:30', '2024-11-09 04:27:30'),
(6, '004', 'teacher', 'sk', 'silva', 'sksilva@gmail.com', '1234', '1234', '2024-11-09 06:38:29', '2024-11-09 06:38:29'),
(7, '005', 'teacher', 'Noel', 'Newton', 'vybu@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '2024-11-11 03:02:33', '2024-11-11 03:02:33');

-- --------------------------------------------------------

--
-- Table structure for table `zoomlinks_models`
--

CREATE TABLE `zoomlinks_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `courseId` varchar(255) NOT NULL,
  `courseName` varchar(255) NOT NULL,
  `zoomLink` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zoomlinks_models`
--

INSERT INTO `zoomlinks_models` (`id`, `courseId`, `courseName`, `zoomLink`, `description`, `created_at`, `updated_at`) VALUES
(1, '3', 'IT', 'https://zoom.us/j/5551112222', 'zxdcfvghjk', '2024-11-12 22:21:03', '2024-11-12 22:21:03'),
(2, '3', 'IT', 'https://zoom.us/j/5551112222', 'dcfvgbhnjmk,', '2024-11-18 06:12:33', '2024-11-18 06:12:33'),
(3, '3', 'IT', 'https://zoom.us/j/5551112222', '2345', '2024-11-18 06:13:32', '2024-11-18 06:13:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allcourses_models`
--
ALTER TABLE `allcourses_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply_course_models`
--
ALTER TABLE `apply_course_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_material_models`
--
ALTER TABLE `course_material_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_results_models`
--
ALTER TABLE `exam_results_models`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `upload_assignment_models`
--
ALTER TABLE `upload_assignment_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `zoomlinks_models`
--
ALTER TABLE `zoomlinks_models`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allcourses_models`
--
ALTER TABLE `allcourses_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `apply_course_models`
--
ALTER TABLE `apply_course_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `course_material_models`
--
ALTER TABLE `course_material_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exam_results_models`
--
ALTER TABLE `exam_results_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upload_assignment_models`
--
ALTER TABLE `upload_assignment_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `zoomlinks_models`
--
ALTER TABLE `zoomlinks_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
