-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 07:28 PM
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
(25, '2019_03_25_171042_create_verify_users_table', 10),
(26, '2019_03_11_101207_create_regs_table', 11),
(27, '2019_04_02_170228_tbl_users_reg', 11);

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
('usernotalive@gmail.com', '$2y$10$AyZnGlk5ZNzXDEoO/k9oFO15z/liRZWO.bIEOz0QkNP4rrUlGwJiS', '2019-03-24 09:44:19'),
('albinsalu@gmail.com', '$2y$10$UJT82jKbbsb8B9EyueF6AOQsDaSk4NVf5uxW27NwtFTuJGMgiMlcS', '2019-04-07 11:44:58');

-- --------------------------------------------------------

--
-- Table structure for table `regs`
--

CREATE TABLE `regs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, 2, 'Ponkunnam', '2019-03-18 11:00:30', '2019-03-18 11:00:30'),
(5, 3, 'ggg', NULL, NULL);

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
(2, 1, 'Kottayam', '2019-03-18 10:58:58', '2019-03-18 10:58:58'),
(3, 1, 'Kochi', '2019-04-04 07:29:14', '2019-04-04 07:29:14');

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
(2, 'usernotalive@gmail.com', 'choice', 1, '1234567890', 'john', 8, '1552929562screenshot.jpg', '1552929562screenshot.jpg', '1552929562screenshot.jpg', 4, '2019-03-18 11:49:22', '2019-03-18 11:49:22'),
(3, 'albinsalu@mca.ajce.in', 'Revolt', 1, '1234567890', 'william', 7, '155323937815524764941789_PCbjOr_Tables-resubmission_Explore Nearby_Albin Salu-RLMCA-04.pdf', '155323937815524764941789_PCbjOr_Tables-resubmission_Explore Nearby_Albin Salu-RLMCA-04.pdf', '155323937815524764941789_PCbjOr_Tables-resubmission_Explore Nearby_Albin Salu-RLMCA-04.pdf', 4, '2019-03-22 01:52:58', '2019-03-22 01:52:58'),
(4, 'thomasjoseph@mca.ajce.in', 'blazer', 2, '1234567890', 'shrike', 9, '155323972015524764941789_PCbjOr_Tables-resubmission_Explore Nearby_Albin Salu-RLMCA-04.pdf', '155323972015524764941789_PCbjOr_Tables-resubmission_Explore Nearby_Albin Salu-RLMCA-04.pdf', '155323972015524764941789_PCbjOr_Tables-resubmission_Explore Nearby_Albin Salu-RLMCA-04.pdf', 3, '2019-03-22 01:58:40', '2019-03-22 01:58:40');

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
(19, 'bigboystuffs@gmail.com', '$2y$10$ihz.kVKq9.Ko7VH8bgRP.uWT1k6EEqVltjtw2ijljrBk/WFEyY00m', 2, 1, 0, 't9OFIBgCiVwgQgrnxSdYxQmxnwWbltfup3hKsIDL9J2jNoKUS32lbXGPVBDj', '2019-03-22 02:01:34', '2019-03-30 01:53:11'),
(21, 'fiend@gmail.com', '$2y$10$UPpi7.YhYF4n4OBvel7qMOhf/sj0G0liBjKFLJYHTr1/XpeZ82g0u', 3, 1, 0, NULL, '2019-03-31 10:02:43', '2019-03-31 10:02:43'),
(22, 'usernotalive@gmail.com', '$2y$10$QdZecyrHEa92Po7eqzkDPO2AS8UlM6zMyBgNLyh1W22bfQXSbL.Ci', 2, 1, 0, NULL, '2019-04-10 22:35:44', '2019-04-10 22:35:44'),
(23, 'albinsalu@mca.ajce.in', '$2y$10$fK7piQz95FyN11vLV5B9g.1i8mi5lCAM/D8NDvBhbs9c9WM8TXM8K', 2, 1, 0, NULL, '2019-04-10 22:41:57', '2019-04-10 22:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_outlet_prof`
--

CREATE TABLE `tbl_outlet_prof` (
  `outletid` bigint(20) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `regid` int(10) UNSIGNED NOT NULL,
  `outletname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ownername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otitle` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `website` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oemail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `tbl_outlet_prof` (`outletid`, `id`, `regid`, `outletname`, `ownername`, `address`, `otitle`, `description`, `website`, `oemail`, `city_id`, `subcat_id`, `Service_id`, `phone1`, `phone2`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 19, 1, 'ZeroCorp pvt.', 'zeroslasher', 'addresss', 'test edit', '<p>It&#39;s just so cool when you meet people who are different than you are. That can give you a different <strong>perspective</strong>, a <strong>viewpoint </strong>on life, or <strong>inspire</strong> you. I mean, what would the world be like if we were all the same? I think it would be very boring.<br />\r\n&nbsp;</p>', 'website.com', NULL, 1, 9, '11', '8547880393', '7410852096', 5, '2019-03-22 02:01:34', '2019-03-28 09:49:31'),
(2, 19, 1, 'Nifty corp.', 'HeadKnocker', 'Address Line1\r\nAddress Line1\r\nAddress Line1\r\nAddress Line1', 'a', '<p>Larry Price was a small-time hood, who stole cars when he wasn&#39;t collecting unemployment. His world changed the day he was jumpstarted by&nbsp;<a href=\"https://en.wikipedia.org/wiki/The_Entity_(comics)\">the Entity</a>, the damaged computer of an alien spaceship that had crashed landed on the moon centuries ago. Larry&#39;s skin turned white, his hair green and his muscles expanded. Unlike members of&nbsp;<a href=\"https://en.wikipedia.org/w/index.php?title=The_Squad_(comics)&amp;action=edit&amp;redlink=1\">the Squad</a>&nbsp;who went public with their abilities, Larry waited to test his powers.</p>\r\n\r\n<p>A year later, Larry, calling himself <strong>Headknocker</strong>, decided to use his powers to rob a bank. Overpowering the police, he would have succeeded if&nbsp;<a href=\"https://en.wikipedia.org/wiki/Hardcase\">Hardcase</a>&nbsp;had not intervened. The two battled and though Headknocker was stronger, Hardcase rendered him unconscious. Headknocker was turned over to&nbsp;<a href=\"https://en.wikipedia.org/wiki/Aladdin_(comics)\">Aladdin</a>, who placed him in their holding facility at Groom Lake.</p>\r\n\r\n<p>When Hardcase and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Choice_(comics)\">Choice</a>&nbsp;set out to break into Groom Lake facility, Headknocker was given the opportunity to repay Hardcase. Aladdin agent Malik offered to erase Headknocker&#39;s record if he would work for Aladdin and kill the heroes. Headknocker agreed and teamed with the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Aladdin_Assault_Squad_(comics)\">Aladdin Assault Squad</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Hardwire_(comics)\">Hardwire</a>&nbsp;to complete the assignment. They failed, but Headknocker and Hardwire used the opportunity t&#39;o escape.</p>', 'headknocker.com', NULL, 1, 9, '3,11', '1234567890', '0987654321', 5, '2019-03-24 00:09:59', '2019-03-24 00:09:59'),
(3, 19, 1, 'Micromedia', 'MicroManzer', 'address here', 'a', '<p>This is what we call smart power. Using every possible tool and partner to advance peace and security. Leaving no one on the <em>sidelines</em>. Showing respect even for one&#39;s enemies. Trying to understand, in so far as psychologically <em><strong>possible</strong></em>, empathize with their <strong>perspective </strong>and point of view. Helping to define the problems, determine the solutions.&nbsp;</p>', 'micromanzer.cc', NULL, 1, 2, '5,6', '1234567890', '1234567890', 5, '2019-03-30 05:42:14', '2019-03-30 05:42:14'),
(4, 19, 2, 'Arya', 'Arya v nair', 'Arya V Nair', 'a', '<blockquote>Infuse your life with <strong>action</strong>. Don&#39;t wait for it to <strong>happen</strong>. <em>Make it happen</em>. <em>Make your own future.</em> Make your own <strong>hope</strong>. Make your own <strong>love</strong>. <s>And whatever your beliefs, honor your creator,</s> not by passively waiting for grace to come down from upon high, but by doing what you can to make grace happen... yourself, <span class=\"marker\">right now, right down here on Earth.&nbsp; </span></blockquote>', 'webxx.com', NULL, 4, 5, '8,9', '7418529630', '9865784563', 5, '2019-04-03 00:22:55', '2019-04-03 00:22:55'),
(5, 21, 1, 'Faru', 'Farhana', 'Farhana\r\naddress\r\naddress', 'a', '<p>Trust your own <strong>instincts</strong>, go inside, follow your heart. <em>Right from the start.</em> go ahead and stand up for what you believe in. As I&#39;ve learned, that&#39;s the path to <strong>happiness</strong>.&nbsp;<br />\r\n&nbsp;</p>', 'faru.com', NULL, 2, 9, '3,4', '7896345851', '9637418520', 6, '2019-04-03 03:36:42', '2019-04-03 03:36:42'),
(6, 21, 1, 'Ajil', 'Ajil sunny', 'ajil\'s outlet\r\naddress\r\naddress', 'a', '<p>Real education enhances the <strong>dignity </strong>of a human being and <strong>increases </strong>his or her self-respect. If only the real sense of education could be realized by each <em>individual</em> and carried forward in every field of human activity, the world will be so much a <em>better place to live in</em><br />\r\n&nbsp;</p>', 'webxx.com', NULL, 4, 7, '7', '8520741063', '9874106352', 6, '2019-04-03 09:42:58', '2019-04-03 09:42:58'),
(13, 21, 1, 'sdfgh', 'dfghj', 'dfghj', 'a', '<p>dfghjk</p>', 'fghjk', NULL, 1, 1, '1,14', 'fghj', 'fgbn', 6, '2019-04-03 11:39:14', '2019-04-03 11:39:14'),
(14, 21, 1, 'asdfghjkl', 'h', 'h', 'a', '<p>h</p>', 'dfgh', NULL, 3, 2, '6', 'hhh', 'hhh', 6, '2019-04-07 09:54:37', '2019-04-07 09:54:37'),
(15, 21, 1, 'j', 'j', 'j', 'a', '<p>j</p>', 'fgh', NULL, 1, 1, '1,2', 'gfhj', 'fghj', 6, '2019-04-07 10:03:45', '2019-04-07 10:03:45'),
(16, 21, 1, 'k', 'k', 'k', 'a', '<p>k</p>', 'aaa', NULL, 4, 1, '1,2', 'ghjk', 'ghj', 6, '2019-04-07 10:05:33', '2019-04-07 10:05:33'),
(17, 21, 1, 'k', 'k', 'k', 'a', '<p>k</p>', 'fgh', NULL, 1, 1, '14', 'h', 'g', 6, '2019-04-07 10:06:36', '2019-04-07 10:06:36'),
(18, 22, 3, 'choice', 'john', NULL, 'a', NULL, NULL, NULL, 1, 8, NULL, '1234567890', NULL, 3, '2019-04-10 22:35:44', '2019-04-10 22:35:44'),
(19, 23, 4, 'Revolt', 'william', NULL, 'a', NULL, NULL, NULL, 1, 7, NULL, '1234567890', NULL, 3, '2019-04-10 22:41:57', '2019-04-10 22:41:57'),
(20, 19, 2, 'fghjk', 'ghjkl', 'ghjkl', 'gfhjk', '<p>fghjk</p>', 'vbnm.com', NULL, 1, 1, '1,2,10,14', '7410852096', '8520963741', 5, '2019-04-11 11:55:10', '2019-04-11 11:55:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prof_images`
--

CREATE TABLE `tbl_prof_images` (
  `imgid` int(11) NOT NULL,
  `outletid` bigint(20) UNSIGNED NOT NULL,
  `imgname` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prof_images`
--

INSERT INTO `tbl_prof_images` (`imgid`, `outletid`, `imgname`, `created_at`, `updated_at`) VALUES
(4, 1, '1553791851plants_sunset_nature_sky_53687_3840x2160.jpg', '2019-04-03 17:08:33', '2019-04-03 17:08:33'),
(5, 1, '1553792380leaves_branches_frost_snow_49789_3840x2160.jpg', '2019-04-03 17:08:33', '2019-04-03 17:08:33'),
(6, 1, '1553792852winter_branches_snow_spruce_tree_ball_christmas_decorations_reflection_new_year_76497_3840x2160.jpg', '2019-04-03 17:08:33', '2019-04-03 17:08:33'),
(8, 2, '1553793366leaves_branches_frost_snow_49789_3840x2160.jpg', '2019-04-03 17:08:33', '2019-04-03 17:08:33'),
(9, 2, '1553793377raspberry_berry_ripe_sweet_106384_3840x2160.jpg', '2019-04-03 17:08:33', '2019-04-03 17:08:33'),
(17, 2, '15538509365.jpg', '2019-04-03 17:08:33', '2019-04-03 17:08:33'),
(19, 1, '1553939982_linux_wallpaper.jpg', '2019-04-03 17:08:33', '2019-04-03 17:08:33'),
(22, 3, '1554264471595156.jpg', '2019-04-03 17:08:33', '2019-04-03 17:08:33'),
(23, 3, '1554264480devil_may_cry_art_man_face_105920_3840x2160.jpg', '2019-04-03 17:08:33', '2019-04-03 17:08:33'),
(24, 3, '1554264765syndicate_ea_eurocorp_shuter_103585_3840x2160.jpg', '2019-04-03 17:08:33', '2019-04-03 17:08:33'),
(29, 3, '155427066336.jpg', '2019-04-03 17:08:33', '2019-04-03 17:08:33'),
(30, 3, '1554270677516707.jpg', '2019-04-03 17:08:33', '2019-04-03 17:08:33'),
(31, 3, '1554270689Virtualjebb _9).jpg', '2019-04-03 17:08:33', '2019-04-03 17:08:33'),
(32, 4, '1554271575Crazytut0s _97).jpg', '2019-04-03 17:08:33', '2019-04-03 17:08:33'),
(33, 4, '1554271580Crazytut0s _25).jpg', '2019-04-03 17:08:33', '2019-04-03 17:08:33'),
(34, 5, '15542826939.jpg', '2019-04-03 17:08:33', '2019-04-03 17:08:33'),
(35, 6, '155430705655.jpg', '2019-04-03 17:08:33', '2019-04-03 17:08:33'),
(36, 6, '1554307067borntorunlinux.jpg', '2019-04-03 17:08:33', '2019-04-03 17:08:33'),
(37, 13, 'Placeholder.jpg', '2019-04-03 11:39:14', '2019-04-03 11:39:14'),
(38, 13, '155453836353.jpg', '2019-04-06 08:12:43', '2019-04-06 08:12:43'),
(39, 14, 'Placeholder.jpg', '2019-04-07 09:54:37', '2019-04-07 09:54:37'),
(40, 15, 'Placeholder.jpg', '2019-04-07 10:03:46', '2019-04-07 10:03:46'),
(41, 16, 'Placeholder.jpg', '2019-04-07 10:05:33', '2019-04-07 10:05:33'),
(42, 17, 'Placeholder.jpg', '2019-04-07 10:06:36', '2019-04-07 10:06:36'),
(43, 20, 'Placeholder.jpg', '2019-04-11 11:55:11', '2019-04-11 11:55:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `rev_id` bigint(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outlet_id` bigint(20) UNSIGNED NOT NULL,
  `review` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` float NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`rev_id`, `email`, `name`, `outlet_id`, `review`, `rating`, `title`, `created_at`, `updated_at`) VALUES
(22, 'fiend@gmail.com', 'Fiend', 3, 'new edit', 1, 'Sucks big time - 1 star', '2019-04-10 11:15:14', '2019-04-10 11:16:46'),
(23, 'hyjk@hhh.nnn', 'ghjk', 3, 'hjk', 4, 'Pretty good - 4 stars', '2019-04-10 12:51:02', '2019-04-10 12:51:02'),
(24, 'hjk@hhh.cc', 'ghj', 3, 'fghj', 3, 'Meh - 3 stars', '2019-04-10 12:51:25', '2019-04-10 12:51:25'),
(25, 'fghj', 'ghj', 3, 'tyuj', 0.5, 'Sucks big time - 0.5 stars', '2019-04-10 12:51:53', '2019-04-10 12:51:53'),
(26, 'rtyhjRTYH@HH.HGJK', 'RFTGHJ', 3, 'fghj', 4.5, 'Pretty good - 4.5 stars', '2019-04-10 13:10:57', '2019-04-10 13:10:57'),
(32, 'bigboystuffs@gmail.com', 'zeroZero', 2, 'asertyj', 2.5, 'Kinda bad - 2.5 starssdfghj', '2019-04-11 10:13:43', '2019-04-11 10:15:33'),
(33, 'albinsalu@gmail.com', 'ALBIN SALU', 2, 'test 2', 4.5, 'Pretty good - 4.5 stars', '2019-04-11 10:36:28', '2019-04-11 10:37:38');

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
(1, 'KERALA', NULL, NULL);

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
(4, 'approved', '2019-03-18 10:41:28', '2019-03-18 10:41:28'),
(5, 'Validated', '2019-04-03 05:58:42', '2019-04-03 05:58:42'),
(6, 'invalidated', '2019-04-03 05:58:42', '2019-04-03 05:58:42'),
(7, 'hidden', '2019-04-03 10:35:43', '2019-04-03 10:35:43');

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
-- Table structure for table `tbl_users_reg`
--

CREATE TABLE `tbl_users_reg` (
  `regid` int(10) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `oaddress` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_users_reg`
--

INSERT INTO `tbl_users_reg` (`regid`, `id`, `name`, `city_id`, `phone`, `title`, `oaddress`, `image`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 21, 'Fiend', 1, '6222345678', 'you dont know me', 'hhh', '1554543668[Linux Wallpaper] 5 elements [Little gift from DNG-FGG Tux User].jpg', 1, '2019-04-02 17:10:41', '2019-04-02 17:10:41'),
(2, 19, 'zeroZero', 4, '7410852096', 'You dont know me.. Youre about to!!', 'Address\r\naddress \r\naddress', '155496555741.jpg', 1, '2019-04-02 17:10:41', '2019-04-02 17:10:41'),
(3, 22, 'john', 1, '1234567890', NULL, NULL, NULL, 1, '2019-04-10 22:35:44', '2019-04-10 22:35:44'),
(4, 23, 'william', 1, '1234567890', NULL, NULL, NULL, 1, '2019-04-10 22:41:57', '2019-04-10 22:41:57');

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
-- Indexes for table `regs`
--
ALTER TABLE `regs`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `tbl_outlet_prof_city_id_foreign` (`city_id`),
  ADD KEY `tbl_outlet_prof_subcat_id_foreign` (`subcat_id`),
  ADD KEY `tbl_outlet_prof_service_id_foreign` (`Service_id`),
  ADD KEY `tbl_outlet_prof_status_id_foreign` (`status_id`),
  ADD KEY `tbl_outlet_prof_regid_foreign` (`regid`);

--
-- Indexes for table `tbl_prof_images`
--
ALTER TABLE `tbl_prof_images`
  ADD PRIMARY KEY (`imgid`),
  ADD KEY `tbl_prof_images_outletid_foreign` (`outletid`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`rev_id`),
  ADD KEY `tbl_review_outletid_foreign` (`outlet_id`);

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
-- Indexes for table `tbl_users_reg`
--
ALTER TABLE `tbl_users_reg`
  ADD PRIMARY KEY (`regid`),
  ADD KEY `tbl_users_reg_id_foreign` (`id`),
  ADD KEY `tbl_users_reg_city_id_foreign` (`city_id`),
  ADD KEY `tbl_users_reg_status_id_foreign` (`status_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `regs`
--
ALTER TABLE `regs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_cat`
--
ALTER TABLE `tbl_cat`
  MODIFY `Cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `city_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `dist_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_outlet_prof`
--
ALTER TABLE `tbl_outlet_prof`
  MODIFY `outletid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_prof_images`
--
ALTER TABLE `tbl_prof_images`
  MODIFY `imgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `rev_id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `service_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `state_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `status_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_subcat`
--
ALTER TABLE `tbl_subcat`
  MODIFY `subcat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_users_reg`
--
ALTER TABLE `tbl_users_reg`
  MODIFY `regid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  ADD CONSTRAINT `tbl_outlet_prof_regid_foreign` FOREIGN KEY (`regid`) REFERENCES `tbl_users_reg` (`regid`),
  ADD CONSTRAINT `tbl_outlet_prof_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `tbl_status` (`status_id`),
  ADD CONSTRAINT `tbl_outlet_prof_subcat_id_foreign` FOREIGN KEY (`subcat_id`) REFERENCES `tbl_subcat` (`subcat_id`);

--
-- Constraints for table `tbl_prof_images`
--
ALTER TABLE `tbl_prof_images`
  ADD CONSTRAINT `tbl_prof_images_outletid_foreign` FOREIGN KEY (`outletid`) REFERENCES `tbl_outlet_prof` (`outletid`);

--
-- Constraints for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD CONSTRAINT `tbl_review_outletid_foreign` FOREIGN KEY (`outlet_id`) REFERENCES `tbl_outlet_prof` (`outletid`);

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
-- Constraints for table `tbl_users_reg`
--
ALTER TABLE `tbl_users_reg`
  ADD CONSTRAINT `tbl_users_reg_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `tbl_city` (`city_id`),
  ADD CONSTRAINT `tbl_users_reg_id_foreign` FOREIGN KEY (`id`) REFERENCES `tbl_login` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_users_reg_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `tbl_status` (`status_id`) ON DELETE CASCADE;

--
-- Constraints for table `verify_users`
--
ALTER TABLE `verify_users`
  ADD CONSTRAINT `verify_users_id_foreign` FOREIGN KEY (`id`) REFERENCES `tbl_login` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
