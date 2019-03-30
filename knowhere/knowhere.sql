-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2019 at 04:45 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knowhere`
--

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
(1, '2019_03_11_064237_create_tbl_utype_table', 1),
(2, '2019_03_11_064615_create_tbl_status_table', 1),
(3, '2019_03_11_065651_create_tbl_cat_table', 1),
(4, '2019_03_11_070021_create_tbl_state_table', 1),
(5, '2019_03_11_065753_create_tbl_subcat_table', 2),
(6, '2019_03_11_070139_create_tbl_district_table', 2),
(7, '2019_03_11_070345_create_tbl_city_table', 2),
(8, '2019_03_11_070621_create_tbl_locality_table', 2),
(9, '2014_10_12_100000_create_password_resets_table', 3),
(11, '2019_03_11_065447_create_tbl_services_table', 3),
(17, '2019_03_07_102149_create_tbl_login_table', 4),
(19, '2019_03_11_061226_create_tbl_listing_rqst_table', 5),
(21, '2019_03_11_063953_create_tbl_owner_reg_table', 7),
(22, '2019_03_11_053705_create_tbl_user_reg_table', 8),
(24, '2019_03_11_063335_create_tbl_outlet_prof_table', 9),
(25, '2019_03_25_171042_create_verify_users_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('usernotalive@gmail.com', '$2y$10$AyZnGlk5ZNzXDEoO/k9oFO15z/liRZWO.bIEOz0QkNP4rrUlGwJiS', '2019-03-24 09:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cat`
--

CREATE TABLE `tbl_cat` (
  `Cat_id` int(10) UNSIGNED NOT NULL,
  `catagory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_cat`
--

INSERT INTO `tbl_cat` (`Cat_id`, `catagory`, `created_at`, `updated_at`) VALUES
(1, 'Bank', '2019-03-18 10:43:00', '2019-03-18 10:43:00'),
(2, 'Hospital', '2019-03-18 10:43:00', '2019-03-18 10:43:00'),
(3, 'Market', '2019-03-18 10:43:00', '2019-03-18 10:43:00'),
(4, 'Education', '2019-03-18 10:43:00', '2019-03-18 10:43:00'),
(5, 'Restaurant', '2019-03-24 07:39:13', '2019-03-24 07:39:13'),
(6, 'Lodging', '2019-03-24 07:39:13', '2019-03-24 07:39:13'),
(7, 'Culture', '2019-03-24 07:39:13', '2019-03-24 07:39:13'),
(8, 'Shopping', '2019-03-24 07:39:13', '2019-03-24 07:39:13'),
(9, 'Drink', '2019-03-24 07:39:13', '2019-03-24 07:39:13'),
(10, 'Cafe', '2019-03-24 07:39:13', '2019-03-24 07:39:13'),
(11, 'Electronics', '2019-03-25 15:00:48', '2019-03-25 15:00:48'),
(12, 'Training', '2019-03-25 15:00:48', '2019-03-25 15:00:48'),
(13, 'Automobile', '2019-03-25 15:00:48', '2019-03-25 15:00:48'),
(14, 'Technology', '2019-03-25 15:00:48', '2019-03-25 15:00:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `city_id` int(10) UNSIGNED NOT NULL,
  `dist_id` int(10) UNSIGNED NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`city_id`, `dist_id`, `city`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kattappana', '2019-03-18 11:00:30', '2019-03-18 11:00:30'),
(2, 1, 'Cherutoni', '2019-03-18 11:00:30', '2019-03-18 11:00:30'),
(3, 2, 'Kanjirappally', '2019-03-18 11:00:30', '2019-03-18 11:00:30'),
(4, 2, 'Ponkunnam', '2019-03-18 11:00:30', '2019-03-18 11:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `dist_id` int(10) UNSIGNED NOT NULL,
  `state_id` int(10) UNSIGNED NOT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`dist_id`, `state_id`, `district`, `created_at`, `updated_at`) VALUES
(1, 1, 'Idukki', '2019-03-18 10:58:58', '2019-03-18 10:58:58'),
(2, 1, 'Kottayam', '2019-03-18 10:58:58', '2019-03-18 10:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_listing_rqst`
--

CREATE TABLE `tbl_listing_rqst` (
  `rqst_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outletname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ownername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcat_id` int(10) UNSIGNED NOT NULL,
  `Proof1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Proof2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Proof3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_listing_rqst`
--

INSERT INTO `tbl_listing_rqst` (`rqst_id`, `email`, `outletname`, `city_id`, `phone`, `ownername`, `subcat_id`, `Proof1`, `Proof2`, `Proof3`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 'bigboystuffs@gmail.com', 'ZeroCorp', 1, '8547880393', 'zero', 1, '1552929495screenshot.jpg', '1552929495screenshot.jpg', '1552929495screenshot.jpg', 4, '2019-03-18 11:48:15', '2019-03-18 11:48:15'),
(2, 'usernotalive@gmail.com', 'a', 1, '1234567890', 'aasdfe', 8, '1552929562screenshot.jpg', '1552929562screenshot.jpg', '1552929562screenshot.jpg', 4, '2019-03-18 11:49:22', '2019-03-18 11:49:22'),
(3, 'asdc@asdf.sdf', 'sdfv', 1, '1234567890', 'asdf', 7, '155323937815524764941789_PCbjOr_Tables-resubmission_Explore Nearby_Albin Salu-RLMCA-04.pdf', '155323937815524764941789_PCbjOr_Tables-resubmission_Explore Nearby_Albin Salu-RLMCA-04.pdf', '155323937815524764941789_PCbjOr_Tables-resubmission_Explore Nearby_Albin Salu-RLMCA-04.pdf', 3, '2019-03-22 01:52:58', '2019-03-22 01:52:58'),
(4, 'sdfg@asdf.ggg', 'sdfg', 2, '1234567890', 'sdfg', 9, '155323972015524764941789_PCbjOr_Tables-resubmission_Explore Nearby_Albin Salu-RLMCA-04.pdf', '155323972015524764941789_PCbjOr_Tables-resubmission_Explore Nearby_Albin Salu-RLMCA-04.pdf', '155323972015524764941789_PCbjOr_Tables-resubmission_Explore Nearby_Albin Salu-RLMCA-04.pdf', 3, '2019-03-22 01:58:40', '2019-03-22 01:58:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_locality`
--

CREATE TABLE `tbl_locality` (
  `loc_id` int(10) UNSIGNED NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `locality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utype_id` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `email`, `password`, `utype_id`, `status_id`, `verified`, `remember_token`, `created_at`, `updated_at`) VALUES
(18, 'albinsalu@gmail.com', '$2y$10$WNAd.yptn2kDTzU589kV1OXPM7C0OL1zo.qXtll/wU8yk3BH1fl/G', 1, 1, 0, 'Ml9NBaskNPYHW2ly13LG4VXoMBc6DZpYNg4eUitQ1W86T4h9Am9y00D7QHeD', '2019-03-18 11:08:58', '2019-03-19 08:44:39'),
(19, 'bigboystuffs@gmail.com', '$2y$10$SdZ0nsyLto4aVTyefREfqu.T19GRlAnkvAgaQJHCciSaL87uSYl.2', 2, 1, 0, 'L1pYXrRkUqHuRJ6JjYSWykDgoqXobVVFb0VTjiDRsGO400SNrQFkGMdPs9Gk', '2019-03-22 02:01:34', '2019-03-24 22:40:05'),
(20, 'usernotalive@gmail.com', '$2y$10$Z6sQvPvQk7wxpvGM61SuKeh2e2szCjaKCrUggqVPn8x9.Xwr2iZni', 2, 1, 0, NULL, '2019-03-24 00:09:59', '2019-03-24 00:09:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_outlet_prof`
--

CREATE TABLE `tbl_outlet_prof` (
  `outletid` bigint(20) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `oregid` int(10) UNSIGNED NOT NULL,
  `outletname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ownername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `subcat_id` int(10) UNSIGNED NOT NULL,
  `Service_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_outlet_prof`
--

INSERT INTO `tbl_outlet_prof` (`outletid`, `id`, `oregid`, `outletname`, `ownername`, `address`, `description`, `website`, `city_id`, `subcat_id`, `Service_id`, `phone1`, `phone2`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 19, 1, 'ZeroCorp pvt.', 'zeroslasher', 'address updated', '<p><em><strong>description</strong></em></p>', 'website.com', 1, 1, '1,2,10,14', '8547880393', '1234567890', 3, '2019-03-22 02:01:34', '2019-03-28 09:49:31'),
(2, 19, 1, 'a', 'aasdfe', 'address1', 'description', NULL, 1, 8, NULL, '1234567890', NULL, 3, '2019-03-24 00:09:59', '2019-03-24 00:09:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_owner_reg`
--

CREATE TABLE `tbl_owner_reg` (
  `oregid` int(10) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_owner_reg`
--

INSERT INTO `tbl_owner_reg` (`oregid`, `id`, `name`, `city_id`, `phone`, `address`, `image`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 19, 'zero', 1, '1234567890', 'addressswdfergthjyku', '155388508419.jpg', 1, '2019-03-22 02:01:34', '2019-03-22 02:01:34'),
(2, 20, 'Owner1', 1, '1234567890', 'address', NULL, 1, '2019-03-24 00:09:59', '2019-03-24 00:09:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prof_images`
--

CREATE TABLE `tbl_prof_images` (
  `imgid` int(11) NOT NULL,
  `outletid` bigint(20) UNSIGNED NOT NULL,
  `imgname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prof_images`
--

INSERT INTO `tbl_prof_images` (`imgid`, `outletid`, `imgname`) VALUES
(4, 1, '1553791851plants_sunset_nature_sky_53687_3840x2160.jpg'),
(5, 1, '1553792380leaves_branches_frost_snow_49789_3840x2160.jpg'),
(6, 1, '1553792852winter_branches_snow_spruce_tree_ball_christmas_decorations_reflection_new_year_76497_3840x2160.jpg'),
(8, 2, '1553793366leaves_branches_frost_snow_49789_3840x2160.jpg'),
(9, 2, '1553793377raspberry_berry_ripe_sweet_106384_3840x2160.jpg'),
(17, 2, '15538509365.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `service_id` int(10) UNSIGNED NOT NULL,
  `service` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Subcat_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`service_id`, `service`, `Subcat_id`, `created_at`, `updated_at`) VALUES
(1, 'service1', 1, '2019-03-28 05:22:48', '2019-03-28 05:22:48'),
(2, 'service2', 1, '2019-03-28 05:22:48', '2019-03-28 05:22:48'),
(3, 'service11', 9, '2019-03-28 05:22:48', '2019-03-28 05:22:48'),
(4, 'service22', 9, '2019-03-28 05:22:48', '2019-03-28 05:22:48'),
(5, 'service111', 2, '2019-03-28 05:22:48', '2019-03-28 05:22:48'),
(6, 'service222', 2, '2019-03-28 05:22:48', '2019-03-28 05:22:48'),
(7, 'service1115', 7, '2019-03-28 05:22:48', '2019-03-28 05:22:48'),
(8, 'service1114', 5, '2019-03-28 05:22:48', '2019-03-28 05:22:48'),
(9, 'service111df', 5, '2019-03-28 05:22:48', '2019-03-28 05:22:48'),
(10, 'service 454', 1, '2019-03-28 05:23:59', '2019-03-28 05:23:59'),
(11, 'service 34e5', 9, '2019-03-28 05:23:59', '2019-03-28 05:23:59'),
(14, 'atm service', 1, '2019-03-28 08:40:25', '2019-03-28 08:40:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `state_id` int(10) UNSIGNED NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`state_id`, `state`, `created_at`, `updated_at`) VALUES
(1, 'KERALA', NULL, NULL),
(2, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `status_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`status_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'active', '2019-03-18 10:41:28', '2019-03-18 10:41:28'),
(2, 'block', '2019-03-18 10:41:28', '2019-03-18 10:41:28'),
(3, 'disapproved', '2019-03-18 10:41:28', '2019-03-18 10:41:28'),
(4, 'approved', '2019-03-18 10:41:28', '2019-03-18 10:41:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcat`
--

CREATE TABLE `tbl_subcat` (
  `subcat_id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `subcatagory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_subcat`
--

INSERT INTO `tbl_subcat` (`subcat_id`, `cat_id`, `subcatagory`, `created_at`, `updated_at`) VALUES
(1, 1, 'ATM', '2019-03-18 10:44:35', '2019-03-18 10:44:35'),
(2, 1, 'CDM', '2019-03-18 10:44:35', '2019-03-18 10:44:35'),
(3, 1, 'Finance institution', '2019-03-18 10:44:35', '2019-03-18 10:44:35'),
(4, 4, 'school', '2019-03-18 10:52:39', '2019-03-18 10:52:39'),
(5, 4, 'College', '2019-03-18 10:52:39', '2019-03-18 10:52:39'),
(6, 4, 'Tution center', '2019-03-18 10:52:39', '2019-03-18 10:52:39'),
(7, 2, 'Clinic', '2019-03-18 10:53:32', '2019-03-18 10:53:32'),
(8, 2, 'vetenery', '2019-03-18 10:53:32', '2019-03-18 10:53:32'),
(9, 3, 'Bakery', '2019-03-18 10:56:16', '2019-03-18 10:56:16'),
(10, 3, 'Provisional', '2019-03-18 10:56:16', '2019-03-18 10:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_reg`
--

CREATE TABLE `tbl_user_reg` (
  `uregid` int(10) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_utype`
--

CREATE TABLE `tbl_utype` (
  `utype_id` int(10) UNSIGNED NOT NULL,
  `utype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_utype`
--

INSERT INTO `tbl_utype` (`utype_id`, `utype`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-03-18 10:34:53', '2019-03-18 10:34:53'),
(2, 'owner', '2019-03-18 10:34:53', '2019-03-18 10:34:53'),
(3, 'user', '2019-03-18 10:34:53', '2019-03-18 10:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `verify_users`
--

CREATE TABLE `verify_users` (
  `vid` bigint(20) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `tbl_cat`
--
ALTER TABLE `tbl_cat`
  ADD PRIMARY KEY (`Cat_id`),
  ADD UNIQUE KEY `tbl_cat_catagory_unique` (`catagory`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`city_id`),
  ADD UNIQUE KEY `tbl_city_city_unique` (`city`),
  ADD KEY `tbl_city_dist_id_foreign` (`dist_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`dist_id`),
  ADD UNIQUE KEY `tbl_district_district_unique` (`district`),
  ADD KEY `tbl_district_state_id_foreign` (`state_id`);

--
-- Indexes for table `tbl_listing_rqst`
--
ALTER TABLE `tbl_listing_rqst`
  ADD PRIMARY KEY (`rqst_id`),
  ADD UNIQUE KEY `tbl_listing_rqst_email_unique` (`email`),
  ADD KEY `tbl_listing_rqst_city_id_foreign` (`city_id`),
  ADD KEY `tbl_listing_rqst_subcat_id_foreign` (`subcat_id`),
  ADD KEY `tbl_listing_rqst_status_id_foreign` (`status_id`);

--
-- Indexes for table `tbl_locality`
--
ALTER TABLE `tbl_locality`
  ADD PRIMARY KEY (`loc_id`),
  ADD UNIQUE KEY `tbl_locality_locality_unique` (`locality`),
  ADD KEY `tbl_locality_city_id_foreign` (`city_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_login_email_unique` (`email`),
  ADD KEY `tbl_login_utype_id_foreign` (`utype_id`),
  ADD KEY `tbl_login_status_id_foreign` (`status_id`);

--
-- Indexes for table `tbl_outlet_prof`
--
ALTER TABLE `tbl_outlet_prof`
  ADD PRIMARY KEY (`outletid`),
  ADD KEY `tbl_outlet_prof_id_foreign` (`id`),
  ADD KEY `tbl_outlet_prof_oregid_foreign` (`oregid`),
  ADD KEY `tbl_outlet_prof_city_id_foreign` (`city_id`),
  ADD KEY `tbl_outlet_prof_subcat_id_foreign` (`subcat_id`),
  ADD KEY `tbl_outlet_prof_service_id_foreign` (`Service_id`),
  ADD KEY `tbl_outlet_prof_status_id_foreign` (`status_id`);

--
-- Indexes for table `tbl_owner_reg`
--
ALTER TABLE `tbl_owner_reg`
  ADD PRIMARY KEY (`oregid`),
  ADD KEY `tbl_owner_reg_id_foreign` (`id`),
  ADD KEY `tbl_owner_reg_city_id_foreign` (`city_id`),
  ADD KEY `tbl_owner_reg_status_id_foreign` (`status_id`);

--
-- Indexes for table `tbl_prof_images`
--
ALTER TABLE `tbl_prof_images`
  ADD PRIMARY KEY (`imgid`),
  ADD KEY `tbl_prof_images_outletid_foreign` (`outletid`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`service_id`),
  ADD UNIQUE KEY `tbl_services_service_unique` (`service`),
  ADD KEY `tbl_services_subcat_id_foreign` (`Subcat_id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`state_id`),
  ADD UNIQUE KEY `tbl_state_state_unique` (`state`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`status_id`),
  ADD UNIQUE KEY `tbl_status_status_unique` (`status`);

--
-- Indexes for table `tbl_subcat`
--
ALTER TABLE `tbl_subcat`
  ADD PRIMARY KEY (`subcat_id`),
  ADD UNIQUE KEY `tbl_subcat_subcatagory_unique` (`subcatagory`),
  ADD KEY `tbl_subcat_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `tbl_user_reg`
--
ALTER TABLE `tbl_user_reg`
  ADD PRIMARY KEY (`uregid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `tbl_user_reg_id_foreign` (`id`),
  ADD KEY `tbl_user_reg_status_id_foreign` (`status_id`);

--
-- Indexes for table `tbl_utype`
--
ALTER TABLE `tbl_utype`
  ADD PRIMARY KEY (`utype_id`),
  ADD UNIQUE KEY `tbl_utype_utype_unique` (`utype`);

--
-- Indexes for table `verify_users`
--
ALTER TABLE `verify_users`
  ADD PRIMARY KEY (`vid`),
  ADD KEY `verify_users_id_foreign` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_cat`
--
ALTER TABLE `tbl_cat`
  MODIFY `Cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `city_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `dist_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_listing_rqst`
--
ALTER TABLE `tbl_listing_rqst`
  MODIFY `rqst_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_locality`
--
ALTER TABLE `tbl_locality`
  MODIFY `loc_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_outlet_prof`
--
ALTER TABLE `tbl_outlet_prof`
  MODIFY `outletid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_owner_reg`
--
ALTER TABLE `tbl_owner_reg`
  MODIFY `oregid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_prof_images`
--
ALTER TABLE `tbl_prof_images`
  MODIFY `imgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `service_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `state_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `status_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_subcat`
--
ALTER TABLE `tbl_subcat`
  MODIFY `subcat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_user_reg`
--
ALTER TABLE `tbl_user_reg`
  MODIFY `uregid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_utype`
--
ALTER TABLE `tbl_utype`
  MODIFY `utype_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `verify_users`
--
ALTER TABLE `verify_users`
  MODIFY `vid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD CONSTRAINT `tbl_city_dist_id_foreign` FOREIGN KEY (`dist_id`) REFERENCES `tbl_district` (`dist_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD CONSTRAINT `tbl_district_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `tbl_state` (`state_id`);

--
-- Constraints for table `tbl_listing_rqst`
--
ALTER TABLE `tbl_listing_rqst`
  ADD CONSTRAINT `tbl_listing_rqst_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `tbl_city` (`city_id`),
  ADD CONSTRAINT `tbl_listing_rqst_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `tbl_status` (`status_id`),
  ADD CONSTRAINT `tbl_listing_rqst_subcat_id_foreign` FOREIGN KEY (`subcat_id`) REFERENCES `tbl_subcat` (`subcat_id`);

--
-- Constraints for table `tbl_locality`
--
ALTER TABLE `tbl_locality`
  ADD CONSTRAINT `tbl_locality_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `tbl_city` (`city_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD CONSTRAINT `tbl_login_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `tbl_status` (`status_id`),
  ADD CONSTRAINT `tbl_login_utype_id_foreign` FOREIGN KEY (`utype_id`) REFERENCES `tbl_utype` (`utype_id`);

--
-- Constraints for table `tbl_outlet_prof`
--
ALTER TABLE `tbl_outlet_prof`
  ADD CONSTRAINT `tbl_outlet_prof_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `tbl_city` (`city_id`),
  ADD CONSTRAINT `tbl_outlet_prof_id_foreign` FOREIGN KEY (`id`) REFERENCES `tbl_login` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_outlet_prof_oregid_foreign` FOREIGN KEY (`oregid`) REFERENCES `tbl_owner_reg` (`oregid`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_outlet_prof_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `tbl_status` (`status_id`),
  ADD CONSTRAINT `tbl_outlet_prof_subcat_id_foreign` FOREIGN KEY (`subcat_id`) REFERENCES `tbl_subcat` (`subcat_id`);

--
-- Constraints for table `tbl_owner_reg`
--
ALTER TABLE `tbl_owner_reg`
  ADD CONSTRAINT `tbl_owner_reg_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `tbl_city` (`city_id`),
  ADD CONSTRAINT `tbl_owner_reg_id_foreign` FOREIGN KEY (`id`) REFERENCES `tbl_login` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_owner_reg_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `tbl_status` (`status_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_prof_images`
--
ALTER TABLE `tbl_prof_images`
  ADD CONSTRAINT `tbl_prof_images_outletid_foreign` FOREIGN KEY (`outletid`) REFERENCES `tbl_outlet_prof` (`outletid`);

--
-- Constraints for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD CONSTRAINT `tbl_services_subcat_id_foreign` FOREIGN KEY (`Subcat_id`) REFERENCES `tbl_subcat` (`subcat_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_subcat`
--
ALTER TABLE `tbl_subcat`
  ADD CONSTRAINT `tbl_subcat_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `tbl_cat` (`Cat_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_user_reg`
--
ALTER TABLE `tbl_user_reg`
  ADD CONSTRAINT `tbl_user_reg_id_foreign` FOREIGN KEY (`id`) REFERENCES `tbl_login` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_user_reg_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `tbl_status` (`status_id`) ON DELETE CASCADE;

--
-- Constraints for table `verify_users`
--
ALTER TABLE `verify_users`
  ADD CONSTRAINT `verify_users_id_foreign` FOREIGN KEY (`id`) REFERENCES `tbl_login` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
