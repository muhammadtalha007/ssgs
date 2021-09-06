-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2021 at 08:08 PM
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
-- Database: `sgss`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@ssgs.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `finish_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `places` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `places_left` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `year`, `city`, `start_date`, `finish_date`, `name`, `places`, `places_left`, `enable`, `description`, `created_at`, `updated_at`) VALUES
(3, '1996', 'Winchester', '2021-08-31', '2021-09-01', 'Physics', 'Places 1', 'Places 2', 'on', 'Description', '2021-08-31 11:02:47', '2021-09-01 09:25:59'),
(4, '1996', 'Winchester', '2021-08-31', '2021-09-01', 'Computer', 'Places 1', 'Places 2', 'on', 'Description', '2021-08-31 11:07:04', '2021-08-31 11:07:04'),
(5, '1996', 'Winchester', '2021-08-31', '2021-09-01', 'Hassan abbas', 'Places 1', 'Places 2', 'on', 'Description', '2021-08-31 11:09:37', '2021-08-31 11:09:37'),
(6, '1996', 'Winchester', '2021-08-31', '2021-08-31', 'Muhammad Talha', 'Places 1', 'Places 2', 'on', 'sadada', '2021-08-31 11:11:24', '2021-08-31 11:11:24'),
(7, '1996', 'Winchester', '2021-08-31', '2021-09-01', 'Muhammad Talha', 'Places 1', 'Places 2', 'on', 'asdsadsa', '2021-08-31 11:15:14', '2021-08-31 11:15:14'),
(8, '1996', 'Winchester', '2021-09-09', '2021-09-09', 'Hassan abbas', 'Places 1', 'Places 2', 'on', 'sadasda', '2021-08-31 11:16:55', '2021-08-31 11:16:55');

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
-- Table structure for table `families`
--

CREATE TABLE `families` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `familysurname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postalcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pets` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pets_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_gender_preference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_number` int(11) NOT NULL,
  `student_beds` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_wardrobe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_bathrooms` int(11) NOT NULL,
  `student_coeliac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_foodintolerance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_allergy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adult1_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adult1_surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adult1_occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adult2_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adult2_surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adult2_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_children` int(11) NOT NULL,
  `house_child1_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_child1_birthdate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_child1_gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_child2_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_child2_birthdate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_child2_gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_child3_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_child3_birthdate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_child3_gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_people` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_information` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankdetails_IBAN` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankdetails_SWIFT_BIC` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankdetails_sortcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankdetails_account_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datetime_register` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datetime_updated_bankdetails` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `families`
--

INSERT INTO `families` (`id`, `user_id`, `familysurname`, `city`, `address`, `postalcode`, `phone`, `pets`, `pets_desc`, `student_gender_preference`, `student_number`, `student_beds`, `student_room`, `student_wardrobe`, `house_bathrooms`, `student_coeliac`, `student_foodintolerance`, `student_allergy`, `adult1_name`, `adult1_surname`, `adult1_occupation`, `adult2_name`, `adult2_surname`, `adult2_occupation`, `house_children`, `house_child1_name`, `house_child1_birthdate`, `house_child1_gender`, `house_child2_name`, `house_child2_birthdate`, `house_child2_gender`, `house_child3_name`, `house_child3_birthdate`, `house_child3_gender`, `house_people`, `other_information`, `family_desc`, `bankdetails_IBAN`, `bankdetails_SWIFT_BIC`, `bankdetails_sortcode`, `bankdetails_account_number`, `datetime_register`, `datetime_updated_bankdetails`, `created_at`, `updated_at`) VALUES
(1, 1, 'Family Surname', 'Lahore', 'Unnamed Road, Pembroke Pines, FL 33025, USA', '54000', '+923008934616', '2', 'Pets Kind', 'Prefer boys', 2, 'Beds', 'No', 'No', 2, 'No', 'No', 'No', 'Adult 1 name', 'Adult 1 Surname', 'Adult 1 occupation', 'Adult 2 name', 'Adult 2 surname', 'Adult 2 Occupation', 3, 'Child 1 name', 'Child 1 dob', 'Child 1 gener', 'Child 2 name', 'Child 2 dob', 'Child 2 gender', 'Child 3 name', 'Child 3 dob', 'Child 3 gender', 'Other people living in the house', 'Other information', 'Description about your family and home', 'International Bank Details IBAN', 'International Bank Details SWIFT/BIC', 'National Bank Details Sort code', 'National Bank Details Account number', NULL, NULL, '2021-08-26 11:20:39', '2021-08-26 11:40:27'),
(2, 10, 'Yoyo', 'Lahore', 'House no 1', '64000', '03008934616', '5', 'Pets Kind', 'Prefer boys', 5, 'Beds', 'No', 'No', 5, 'No', 'No', 'No', 'Adult 1 name', 'Adult 1 Surname', 'Adult 1 occupation', 'Adult 2 name', 'Adult 2 surname', 'Adult 2 Occupation', 5, 'Child 1 name', 'Child 1 dob', 'Child 1 gener', 'Child 2 name', 'Child 2 dob', 'Child 2 gender', 'Child 3 name', 'Child 3 dob', 'Child 3 gender', 'Other people living in the house', 'Other information', 'Description about your family and home', 'International Bank Details IBAN', 'International Bank Details SWIFT/BIC', 'National Bank Details Sort code', 'National Bank Details Account number', '2021-09-05 14:38:25', '2021-09-05 14:38:25', '2021-09-05 09:18:45', '2021-09-05 09:38:25');

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
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2020_09_06_214323_create_passwords_table', 1),
(10, '2020_09_26_220025_create_admins_table', 1),
(11, '2021_08_24_132739_create_courses_table', 1),
(12, '2021_08_25_092556_create_families_table', 1),
(13, '2021_08_30_142741_create_students_table', 2),
(14, '2021_09_01_102144_create_students_added_in_courses_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `passwords`
--

CREATE TABLE `passwords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `surname1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postalcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medication` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medication_desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allergies` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allergies_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foodintolerances` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foodintolerances_desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_information` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `english_score` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `english_academy_years` int(11) DEFAULT NULL,
  `english_latest_teacher` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_courses_abroad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datetime_register` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_id`, `surname1`, `surname2`, `birthdate`, `dni`, `phone`, `address`, `postalcode`, `city`, `province`, `medication`, `medication_desc`, `allergies`, `allergies_desc`, `foodintolerances`, `foodintolerances_desc`, `other_information`, `school`, `course`, `english_score`, `english_academy_years`, `english_latest_teacher`, `other_courses_abroad`, `datetime_register`, `created_at`, `updated_at`) VALUES
(1, 2, 'Hassan', 'Abbaas', '1996/07/07', '8', '+923008934616', '5827 NW 12th Ct, Sunrise, FL 33313, USA', '54000', 'Lahore', 'Punjab', 'You need special medication', 'Describe the medication you need', 'Any allergies', 'Describe your allergies', 'Some food intolerance', 'Describe your food intolerances', 'Other information', 'Center where you study', 'What grade are you in', 'Last English Notes', 3, '3', '3', '2021-09-04 15:42:03', '2021-08-30 11:20:31', '2021-09-04 10:42:03');

-- --------------------------------------------------------

--
-- Table structure for table `students_added_in_courses`
--

CREATE TABLE `students_added_in_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `family_id` int(11) NOT NULL DEFAULT -1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students_added_in_courses`
--

INSERT INTO `students_added_in_courses` (`id`, `course_id`, `student_id`, `family_id`, `created_at`, `updated_at`) VALUES
(2, 3, 2, -1, '2021-09-01 07:17:12', '2021-09-01 07:17:12'),
(4, 3, 4, -1, '2021-09-01 07:38:11', '2021-09-01 07:38:11'),
(6, 4, 4, -1, '2021-09-01 07:57:33', '2021-09-01 07:57:33'),
(7, 5, 6, -1, '2021-09-01 07:57:43', '2021-09-01 07:57:43'),
(8, 4, 2, -1, '2021-09-01 09:24:01', '2021-09-01 09:24:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Talha', 'talhaphanna@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'family', '2021-08-26 11:18:50', '2021-08-26 11:18:50'),
(2, 'Hassan abbas', 'hassan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', '2021-08-30 09:23:50', '2021-09-04 10:42:03'),
(4, 'khizer', 'khizer@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', '2021-08-30 14:29:43', '2021-08-30 14:29:43'),
(5, 'Wahab', 'wahab@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'family', '2021-08-30 14:30:47', '2021-08-30 14:30:47'),
(6, 'Ali riaz', 'ali@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', '2021-09-01 07:13:29', '2021-09-01 07:13:29'),
(10, 'Yoyoyo', 'yo@gmail.com', '1f32aa4c9a1d2ea010adcf2348166a04', 'family', '2021-09-05 09:18:45', '2021-09-05 09:38:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `families`
--
ALTER TABLE `families`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `passwords`
--
ALTER TABLE `passwords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_added_in_courses`
--
ALTER TABLE `students_added_in_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `families`
--
ALTER TABLE `families`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `passwords`
--
ALTER TABLE `passwords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students_added_in_courses`
--
ALTER TABLE `students_added_in_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
