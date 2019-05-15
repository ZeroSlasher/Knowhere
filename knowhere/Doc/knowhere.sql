-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2019 at 08:52 PM
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
(27, '2019_04_02_170228_tbl_users_reg', 11),
(30, '2019_04_08_155926_tbl_review', 12),
(31, '2019_04_22_043938_tbl_verify_mail', 12),
(32, '2019_04_29_165139_tbl_package', 13),
(33, '2019_05_03_160411_tbl_paymets', 14),
(34, '2019_05_08_055356_tbl_ad_images', 15),
(35, '2019_05_09_095543_tbl_report', 16),
(36, '2019_05_09_171835_tbl_suggest', 17);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advert`
--

CREATE TABLE `tbl_advert` (
  `ad_id` int(10) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `outletid` bigint(20) UNSIGNED NOT NULL,
  `ad_content` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pkg_id` int(10) UNSIGNED NOT NULL,
  `validity` int(20) NOT NULL,
  `expiring_in` int(20) UNSIGNED DEFAULT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `p_status` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_advert`
--

INSERT INTO `tbl_advert` (`ad_id`, `id`, `outletid`, `ad_content`, `description`, `pkg_id`, `validity`, `expiring_in`, `status_id`, `p_status`) VALUES
(36, 19, 1, NULL, NULL, 1, 10, 10, 1, 11),
(37, 19, 1, '1557932144ad 1.jpg', NULL, 2, 20, 20, 1, 10),
(38, 19, 4, '1557932156ad 2.jpg', NULL, 2, 20, 20, 1, 10),
(39, 19, 4, '1557932168ad 3.jpg', NULL, 2, 20, 20, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ad_images`
--

CREATE TABLE `tbl_ad_images` (
  `adimg_id` int(10) UNSIGNED NOT NULL,
  `ad_id` int(10) UNSIGNED NOT NULL,
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
(1, 2, 'kattappana', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 'ponkunnam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 2, 'cherutoni', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 2, 'kanjirappally', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 2, 'Kidangoor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 2, 'Kondoor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 2, 'Kuravilangad', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 2, 'Kurichithanam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 2, 'Lalam (Part)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 2, 'Meenachil', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 2, 'Meenachil (Part)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 2, 'Melukavu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 2, 'Monippally', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 2, 'Moonilavu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 2, 'Palai', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 2, 'Poonjar Nadubhagam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 2, 'Poonjar Thekkekara', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 2, 'Poonjar Vadakkekara', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 2, 'Poovarany', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 2, 'Puliyannoor (Part)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 2, 'Ramapuram', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 2, 'Teekoy', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 2, 'Thalappalam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 2, 'Uzhavoor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 2, 'Vallichira', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 2, 'Veliyannoor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 2, 'Vellilappally', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 2, 'Chempu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 2, 'Kaduthuruthy', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 2, 'Kallara', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 2, 'Kothanalloor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 2, 'Kulasekharamangalam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 2, 'Manjoor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 2, 'Mulakulam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 2, 'Muttuchira', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 2, 'Naduvile (Part)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 2, 'Njeezhoor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 2, 'Thalayazham', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 2, 'Vadakkemuri (Part)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 2, 'Vadayar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 2, 'Vaikom', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 2, 'Vaikom (Part)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 2, 'Vechoor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 2, 'Velloor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 2, 'Aimanam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 2, 'Akalakunnam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 2, 'Anikkad', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 2, 'Arpookara', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 2, 'Athirampuzha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 2, 'Ayarkunnam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 2, 'Chengalam East', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 2, 'Chengalam South', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 2, 'Ettumanoor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 2, 'Kaipuzha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 2, 'Kooroppada', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 2, 'Kottayam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 2, 'Kumarakam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 2, 'Manarcad', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 2, 'Meenadam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 2, 'Muttampalam (Part)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 2, 'Onamthuruth', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 2, 'Pampady', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 2, 'Panachikkad', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 2, 'Peroor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 2, 'Perumbaikad', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 2, 'Puthuppally', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 2, 'Thiruvarpu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 2, 'Veloor (Part)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 2, 'Changanassery', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 2, 'Changanassery (Part)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 2, 'Chethipuzha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 2, 'Kangazha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 2, 'Karukachal', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 2, 'Kurichy', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 2, 'Madappally', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 2, 'Nedumkunnam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 2, 'Paippad', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 2, 'Thottackad', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 2, 'Thrikkodithanam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 2, 'Vakathanam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 2, 'Vazhappally Padinjaru (Part)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 2, 'Vazhoor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 2, 'Vellavoor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 2, 'Cheruvally', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 2, 'Chirakkadavu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 2, 'Edakkunnam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 2, 'Elamgulam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 2, 'Elikkulam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 2, 'Erumeli North', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 2, 'Erumeli South', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 2, 'Kanjirappally', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 2, 'Koottickal', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 2, 'Koovappally', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 2, 'Manimala', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 2, 'Mundakayam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 1, 'Anaviratty', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 1, 'Kannan Devan Hills', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 1, 'Kanthalloor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 1, 'Keezhanthoor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 1, 'Kottakamboor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 1, 'Kunjithanny', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 1, 'Mankulam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 1, 'Mannamkandam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 1, 'Marayoor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 1, 'Pallivasal', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 1, 'Vattavada', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 1, 'Vellathuval', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 1, 'Anakkara', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 1, 'Anavilasam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 1, 'Ayyappancoil', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 1, 'Baisonvally', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 1, 'Chakkupallam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 1, 'Chathurangapara', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 1, 'Chinnakanal', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 1, 'Kalkoonthal', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 1, 'Kanthippara', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 1, 'Karunapuram', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 1, 'Kattappana', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 1, 'Konnathady', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 1, 'Pampadumpara', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 1, 'Parathodu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 1, 'Poopara', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 1, 'Rajakkad', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 1, 'Rajakumari', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 1, 'Santhanpara', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 1, 'Thankamony (Part)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 1, 'Udumbanchola', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 1, 'Upputhode', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 1, 'Vandanmedu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 1, 'Vathikudy', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 1, 'Alacode', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 1, 'Arakkulam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 1, 'Elappally', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 1, 'Idukki (Part)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 1, 'Kanjikuzhi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 1, 'Karikkode (Part)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 1, 'Karimannoor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 1, 'Karimkunnam (Part)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 1, 'Kodikulam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, 1, 'Kudayathoor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 1, 'Kumaramangalam (Part)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 1, 'Manakkad (Part)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 1, 'Muttom', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 1, 'Neyyasseri', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 1, 'Purapuzha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 1, 'Thodupuzha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 1, 'Thodupuzha (Part)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 1, 'Udumbannoor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 1, 'Vannapuram', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 1, 'Velliyamattom', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 1, 'Elappara', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 1, 'Kokkayar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 1, 'Kumily', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 1, 'Manjumala', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 1, 'Mlappara', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 1, 'Peerumade', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, 1, 'Periyar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, 1, 'Peruvanthanam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, 1, 'Upputhara', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, 1, 'Vagamon', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, 3, 'Unselected', '2019-04-28 17:37:17', '2019-04-28 17:37:17');

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
(3, 2, 'Unselected', '2019-04-28 17:36:28', '2019-04-28 17:36:28');

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
(3, 'albinsalu@mca.ajce.in', 'Revolt', 1, '1234567890', 'william', 7, '155323937815524764941789_PCbjOr_Tables-resubmission_Explore Nearby_Albin Salu-RLMCA-04.pdf', '155323937815524764941789_PCbjOr_Tables-resubmission_Explore Nearby_Albin Salu-RLMCA-04.pdf', '155323937815524764941789_PCbjOr_Tables-resubmission_Explore Nearby_Albin Salu-RLMCA-04.pdf', 3, '2019-03-22 01:52:58', '2019-03-22 01:52:58'),
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

--
-- Dumping data for table `tbl_locality`
--

INSERT INTO `tbl_locality` (`loc_id`, `city_id`, `locality`, `created_at`, `updated_at`) VALUES
(1, 96, 'test', '2019-05-07 14:42:57', '2019-05-07 14:42:57');

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
(18, 'albinsalu@gmail.com', '$2y$10$yKxpwrnwMQKP4ilaao8cB.rRk2XmEgIcAcwrINg0zIJgzm6JM37Z6', 1, 1, 0, 'pwyJUWiGR41MIitwnH5usY4doSOH4tIcqAXOIoxDLfQcGs59YWitCeeYHbKH', '2019-03-18 11:08:58', '2019-04-28 21:58:51'),
(19, 'bigboystuffs@gmail.com', '$2y$10$ihz.kVKq9.Ko7VH8bgRP.uWT1k6EEqVltjtw2ijljrBk/WFEyY00m', 2, 1, 0, 't9OFIBgCiVwgQgrnxSdYxQmxnwWbltfup3hKsIDL9J2jNoKUS32lbXGPVBDj', '2019-03-22 02:01:34', '2019-03-30 01:53:11'),
(21, 'albinsalu24@gmail.com', '$2y$10$7WAwFgbJoMiifUl6G0Mw1e9D3h6KZauZucR/mo5V6eoy3FZ.YSVjK', 3, 1, 0, 'QTLrbYZWu7yHPl8opYb5J2cDtKkZs3ASms7wRJUBbXa8KXFlAdYp6UPdP9f1', '2019-03-31 10:02:43', '2019-05-15 11:04:27');

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
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `otitle` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `website` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oemail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `subcat_id` int(10) UNSIGNED NOT NULL,
  `Service_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rcount` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_outlet_prof`
--

INSERT INTO `tbl_outlet_prof` (`outletid`, `id`, `regid`, `outletname`, `ownername`, `address`, `latitude`, `longitude`, `otitle`, `description`, `website`, `oemail`, `city_id`, `subcat_id`, `Service_id`, `phone1`, `phone2`, `rcount`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 19, 4, 'ZeroCorp pvt.', 'zeroslasher', 'Dhanya Remya Theater\r\nDhanya Complex, Near NSS College\r\nSH 1, Perunna\r\nChanganassery, Kerala 686101\r\nIndia', 9.4419497982654, 76.544494628906, 'East Coast Road has plenty of clothes stores and factory outlets', '<p>It&#39;s just so cool when you meet people who are different than you are. That can give you a different <strong>perspective</strong>, a <strong>viewpoint </strong>on life, or <strong>inspire</strong> you. I mean, what would the world be like if we were all the same? I think it would be very boring.<br />\r\n&nbsp;</p>', 'website.com', 'mail@mail.bb', 1, 10, '23,24', '8547880393', '7410852096', 0, 5, '2019-03-22 02:01:34', '2019-03-28 09:49:31'),
(2, 19, 4, 'Nifty corp.', 'HeadKnocker', 'Contour Backwaters\r\nAC Road Changanassery\r\nKottayam\r\nKerala, 686101\r\nIndia', 9.4329748859744, 76.528701782227, 'Everyone’s favourite family shoe shop,', '<p>Larry Price was a small-time hood, who stole cars when he wasn&#39;t collecting unemployment. His world changed the day he was jumpstarted by&nbsp;<a href=\"https://en.wikipedia.org/wiki/The_Entity_(comics)\">the Entity</a>, the damaged computer of an alien spaceship that had crashed landed on the moon centuries ago. Larry&#39;s skin turned white, his hair green and his muscles expanded. Unlike members of&nbsp;<a href=\"https://en.wikipedia.org/w/index.php?title=The_Squad_(comics)&amp;action=edit&amp;redlink=1\">the Squad</a>&nbsp;who went public with their abilities, Larry waited to test his powers.</p>\r\n\r\n<p>A year later, Larry, calling himself <strong>Headknocker</strong>, decided to use his powers to rob a bank. Overpowering the police, he would have succeeded if&nbsp;<a href=\"https://en.wikipedia.org/wiki/Hardcase\">Hardcase</a>&nbsp;had not intervened. The two battled and though Headknocker was stronger, Hardcase rendered him unconscious. Headknocker was turned over to&nbsp;<a href=\"https://en.wikipedia.org/wiki/Aladdin_(comics)\">Aladdin</a>, who placed him in their holding facility at Groom Lake.</p>\r\n\r\n<p>When Hardcase and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Choice_(comics)\">Choice</a>&nbsp;set out to break into Groom Lake facility, Headknocker was given the opportunity to repay Hardcase. Aladdin agent Malik offered to erase Headknocker&#39;s record if he would work for Aladdin and kill the heroes. Headknocker agreed and teamed with the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Aladdin_Assault_Squad_(comics)\">Aladdin Assault Squad</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Hardwire_(comics)\">Hardwire</a>&nbsp;to complete the assignment. They failed, but Headknocker and Hardwire used the opportunity t&#39;o escape.</p>', 'headknocker.com', 'mail@mail.bb', 1, 9, '3,11', '1234567890', '0987654321', 0, 5, '2019-03-24 00:09:59', '2019-03-24 00:09:59'),
(3, 19, 4, 'city bank', 'MicroManzer', 'Canara Bank\r\nKureekad - Kandanad Rd\r\nKureekad\r\nKerala 682305\r\nIndia', 9.926115461065548, 76.37351989746094, 'Wählen Sie aus einer Vielzahl ähnlicher Szenen aus.', '<p>This is what we call smart power. Using every possible tool and partner to advance peace and security. Leaving no one on the <em>sidelines</em>. Showing respect even for one&#39;s enemies. Trying to understand, in so far as psychologically <em><strong>possible</strong></em>, empathize with their <strong>perspective </strong>and point of view. Helping to define the problems, determine the solutions.&nbsp;</p>', 'micromanzer.cc', 'mail', 1, 2, '5,6', '1234567890', '1234567890', 0, 5, '2019-03-30 05:42:14', '2019-03-30 05:42:14'),
(4, 19, 2, 'Arya', 'Arya v nair', 'Meenkunnam, Ernakulam, Kerala, India', 9.9309768128818, 76.552906036377, 'test title', '<blockquote>Infuse your life with <strong>action</strong>. Don&#39;t wait for it to <strong>happen</strong>. <em>Make it happen</em>. <em>Make your own future.</em> Make your own <strong>hope</strong>. Make your own <strong>love</strong>. <s>And whatever your beliefs, honor your creator,</s> not by passively waiting for grace to come down from upon high, but by doing what you can to make grace happen... yourself, <span class=\"marker\">right now, right down here on Earth.&nbsp; </span></blockquote>', 'webxx.com', 'cmail@mail.c', 96, 4, '20,21', '74185296303', '9865784563', 2, 5, '2019-04-03 00:22:55', '2019-04-03 00:22:55'),
(5, 21, 4, 'Faru', 'Farhana', 'Farhana\r\naddress\r\naddress', 0, 0, 'a', '<p>Trust your own <strong>instincts</strong>, go inside, follow your heart. <em>Right from the start.</em> go ahead and stand up for what you believe in. As I&#39;ve learned, that&#39;s the path to <strong>happiness</strong>.&nbsp;<br />\r\n&nbsp;</p>', 'faru.com', NULL, 2, 9, '3,4', '7896345851', '9637418520', 0, 6, '2019-04-03 03:36:42', '2019-04-03 03:36:42'),
(6, 21, 4, 'Ajil', 'Ajil sunny', 'ajil\'s outlet\r\naddress\r\naddress', 0, 0, 'a', '<p>Real education enhances the <strong>dignity </strong>of a human being and <strong>increases </strong>his or her self-respect. If only the real sense of education could be realized by each <em>individual</em> and carried forward in every field of human activity, the world will be so much a <em>better place to live in</em><br />\r\n&nbsp;</p>', 'webxx.com', NULL, 4, 7, '7', '8520741063', '9874106352', 0, 6, '2019-04-03 09:42:58', '2019-04-03 09:42:58'),
(13, 21, 4, 'SC Bank', 'norwary', 'SC Bank\r\nThekkethu Kavala - Chamampathal Road\r\nThekkethukavala\r\nChirakkadavu, Kerala 686519\r\nIndia', 9.536426155197, 76.756067276001, 'bank of everyone', '<p>Holen Sie sich ein 8 zweites mumbai, india - 7 november Stockvideo mit 25FPS. 4K- und HD-Video, sofort in jedem NLE einsatzbereit. W&auml;hlen Sie aus einer Vielzahl &auml;hnlicher Szenen aus.&nbsp;</p>', 'fghjk', 'hhh.23@HH.kk', 1, 3, '25,26', '841085296', '748529652', 0, 6, '2019-04-03 11:39:14', '2019-04-03 11:39:14'),
(14, 21, 4, 'Mouth Melters', 'xyz johns', 'Mar Dionysius School,Rishi Valley, Kottayam-Kozhencherry Highway, Ottaplackal, Karukachal, Kottayam, Kerala, 689594, India', 9.446352499965, 76.646547317505, 'This Cafe Is Best For A Quick Bite On A Budget!', '<p>Work break calls for munchies. Isn&#39;t that almost like a norm? The next step is to look for a cafe where you can get them on a budget. Enter Mouth Melters, that has opened a second outlet on Mount Road.&nbsp;</p>', 'dfgh', 'mail@MK.KK', 1, 2, '6', '741963852', '8571245678', 0, 6, '2019-04-07 09:54:37', '2019-04-07 09:54:37'),
(15, 21, 4, 'Morni Couture', 'Morni', 'Praavinkoodu Pigeon Hut Alleppey\r\nKollam -Theni Hwy\r\nPravinkoodu\r\nMazhukeer, Kerala 689106\r\nIndia', 9.349141342793292, 76.59453392028809, 'Get Your Glamour On With Outfits From This Store', '<p>jLocated in one of the busiest markets in the city, Morni Couture in Sowcarpet stands tall against the smaller boutiques and iconic complexes that attract hundreds of people every day. Filled with designer ethnic outfits, you would feel the need to blow your money here. Guys, they have everything you may need from fusion outfits and <em>sherwanis </em>to <em>bandhgalas </em>and tuxedos.&nbsp;</p>', 'webmmm.com', 'aa@bb.cc', 1, 1, '1,2', '852789525', '956653565', 1, 6, '2019-04-07 10:03:45', '2019-04-07 10:03:45'),
(16, 21, 4, 'atm number 1', 'imposs bankers', 'Church Road, Manimala, Kottayam, Kerala, India', 9.494697109730948, 76.7484530620626, 'Bordier & Cie reclaims Best Boutique Private Bank title', '<p>Sutex Bank was the first Co-operative bank in Surat to provide ATM Services to its customers.</p>\r\n\r\n<p>We Offer The Best Of Rupay Card Services Where In All Atm Transactions Can Be Performed&nbsp; From 2,16,425 NFS Atm&#39;s</p>\r\n\r\n<p>Across India.</p>', 'aaa.vv', 'mnailm.vv', 1, 1, '1,2', '741968524', '874584578', 0, 6, '2019-04-07 10:05:33', '2019-04-07 10:05:33'),
(17, 21, 4, 'New Smartwork', 'k & k loans', 'Mannanam, Ettumanoor, Kottayam, Kerala, 686631, India', 9.6712603294511, 76.551365514509, 'A New Smartworks Co-Working Space Is Coming To Town', '<p>We loved the pastel sherwanis here. With intricate work around the neck, statement buttons and a neat finish, these can help you bring your A game to the table. They also have lovely <em>nawabi</em>suits, kurta pajamas and suiting fabrics from Raymond&#39;s, Digjam, Siyaram&#39;s which you and get customized here with the help of their tailoring unit. Their staff is particularly well-versed with the latest trends and can help pick out fabrics that best suit your taste and requirement.&nbsp;</p>', 'newweb.cc', 'mail.ccc', 1, 4525, '14', '78542102', '875421075', 0, 6, '2019-04-07 10:06:36', '2019-04-07 10:06:36'),
(21, 19, 2, 'Amal Jyothi Engineering College', 'Amal Jyothi Engineering College', 'Amal Jyothi Engineering College, Koovappalli - Vizhikkathodu Road, Pattimattam, Vizhikkathodu, Kottayam, Kerala, 686507, India', 9.528384828281808, 76.82226419448853, 'Amal Jyothi Engineering College', '<p>Amal Jyothi Engineering College</p>', 'ajce.in', 'amaljyothi@mail.com', 1, 5, '8,9', '8520741096', '9638527410', 0, 5, '2019-04-13 04:41:48', '2019-04-13 04:41:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `pkg_id` int(10) UNSIGNED NOT NULL,
  `pkg_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`pkg_id`, `pkg_name`, `duration`, `amount`) VALUES
(1, 'SILVER', 10, 100),
(2, 'STANDARD', 20, 200),
(3, 'PLATINUM', 30, 300);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payments`
--

CREATE TABLE `tbl_payments` (
  `pay_id` int(10) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `ad_id` int(10) UNSIGNED NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cc_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ctype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cvv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_payments`
--

INSERT INTO `tbl_payments` (`pay_id`, `id`, `ad_id`, `amount`, `cname`, `cc_number`, `ctype`, `cvv`, `month`, `year`, `status_id`) VALUES
(1, 19, 36, '100', 'jhn', '4048344905738876', 'not specified', '121', '01', '30', 10),
(2, 19, 37, '300', 'zero', '4048344905738876', 'not specified', '123', '01', '19', 10),
(3, 19, 37, '300', 'zero', '4048344905738876', 'not specified', '123', '01', '19', 10),
(4, 19, 37, '200', 'zero', '4048344905738876', 'not specified', '123', '01', '23', 10),
(5, 19, 37, '200', 'aa', '4048344905738876', 'not specified', '123', '02', '23', 10),
(6, 18, 36, '100', 'qqq', '6759649826438453', 'not specified', '122', '02', '22', 10),
(7, 18, 36, '100', 'rider', '4048344905738876', 'not specified', '456', '02', '25', 10),
(8, 19, 37, '200', 'Rider', '4048344905738876', 'not specified', '123', '02', '30', 10),
(9, 19, 36, '100', 'test', '4048344905738876', NULL, '123', '02', '30', 10),
(10, 19, 37, '200', 'aa', '4111111111111111', 'visa', '123', '02', '25', 10),
(11, 19, 38, '200', 'arya', '4111111111111111', 'visa', '222', '05', '28', 10),
(12, 19, 39, '200', 'albin', '4048344905738876', 'visa', '123', '02', '26', 10);

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
(46, 21, '15564662761088_logo.png', '2019-04-28 15:44:36', '2019-04-28 15:44:36'),
(51, 4, '1557936385Outlet+Malls+Crocs.jpg', '2019-05-15 16:06:25', '2019-05-15 16:06:25'),
(52, 4, '1557936386Outlet-+WE+Group+Factory.jpg', '2019-05-15 16:06:26', '2019-05-15 16:06:26'),
(53, 1, '1557936698download.jpg', '2019-05-15 16:11:38', '2019-05-15 16:11:38'),
(54, 1, '1557936699Outletswb---Fashion-Outlet-Dec15web _1).jpg', '2019-05-15 16:11:39', '2019-05-15 16:11:39'),
(55, 1, '1557936700ECR-Bata.jpg', '2019-05-15 16:11:40', '2019-05-15 16:11:40'),
(56, 2, '15579374185ba1353384815e4522c747ee_1537291571704.jpg', '2019-05-15 16:23:38', '2019-05-15 16:23:38'),
(57, 2, '15579374195ba1353384815e4522c747eb_1537291571702.jpg', '2019-05-15 16:23:39', '2019-05-15 16:23:39'),
(58, 2, '15579374205ba1353384815e4522c747ec_1537291571703.jpg', '2019-05-15 16:23:40', '2019-05-15 16:23:40'),
(59, 2, '15579374205ba1353384815e4522c747ed_1537291571704.jpg', '2019-05-15 16:23:40', '2019-05-15 16:23:40'),
(60, 3, '1557937617images _1).jpg', '2019-05-15 16:26:57', '2019-05-15 16:26:57'),
(61, 3, '1557937619images.jpg', '2019-05-15 16:26:59', '2019-05-15 16:26:59'),
(62, 3, '1557937620images _2).jpg', '2019-05-15 16:27:00', '2019-05-15 16:27:00'),
(63, 21, '1557937742download.jpg', '2019-05-15 16:29:02', '2019-05-15 16:29:02'),
(64, 21, '1557937743Gallery-widget_ajce.jpg', '2019-05-15 16:29:03', '2019-05-15 16:29:03'),
(65, 21, '1557937743maxresdefault.jpg', '2019-05-15 16:29:03', '2019-05-15 16:29:03'),
(66, 21, '1557937744slide02.jpg', '2019-05-15 16:29:04', '2019-05-15 16:29:04'),
(67, 5, '15579382095ca189322e5c06302cf47e30_1554090290317.jpg', '2019-05-15 16:36:49', '2019-05-15 16:36:49'),
(68, 5, '15579382105ba1353384815e4522c747ed_1537291571704.jpg', '2019-05-15 16:36:50', '2019-05-15 16:36:50'),
(69, 5, '15579382105ba1353384815e4522c747ee_1537291571704.jpg', '2019-05-15 16:36:50', '2019-05-15 16:36:50'),
(70, 5, '15579382115ca1893e74d36d0f5f21180a_1554090302792.jpg', '2019-05-15 16:36:51', '2019-05-15 16:36:51'),
(71, 5, '15579382125ba1353384815e4522c747ec_1537291571703.jpg', '2019-05-15 16:36:52', '2019-05-15 16:36:52'),
(72, 5, '15579382135ba1353384815e4522c747eb_1537291571702.jpg', '2019-05-15 16:36:53', '2019-05-15 16:36:53'),
(73, 5, '15579382145b55f5ce06da9c3abb6d034d_1532360142304.jpg', '2019-05-15 16:36:54', '2019-05-15 16:36:54'),
(74, 6, '1557938304download _1).jpg', '2019-05-15 16:38:24', '2019-05-15 16:38:24'),
(75, 6, '1557938305download _2).jpg', '2019-05-15 16:38:25', '2019-05-15 16:38:25'),
(76, 6, '1557938306download _3).jpg', '2019-05-15 16:38:26', '2019-05-15 16:38:26'),
(77, 13, '1557938605D_Article small img_bank.jpg', '2019-05-15 16:43:25', '2019-05-15 16:43:25'),
(78, 13, '1557938607gold-bank-sign-at-the-entrance-to-a-banking-institute-in-the-centre-EANPB6.jpg', '2019-05-15 16:43:27', '2019-05-15 16:43:27'),
(79, 14, '15579389185cacdc7bc0c3e5361353dfac_1554832507149.jpg', '2019-05-15 16:48:38', '2019-05-15 16:48:38'),
(80, 14, '15579389185cd8e33b482ba30f652776a0_1557717819946.jpg', '2019-05-15 16:48:38', '2019-05-15 16:48:38'),
(81, 14, '15579389205cd8e37fcf942a0f54c89776_1557717887424.jpg', '2019-05-15 16:48:40', '2019-05-15 16:48:40'),
(82, 15, '1557939311images _3).jpg', '2019-05-15 16:55:11', '2019-05-15 16:55:11'),
(83, 15, '1557939313download _4).jpg', '2019-05-15 16:55:13', '2019-05-15 16:55:13'),
(84, 16, '1557939332images _3).jpg', '2019-05-15 16:55:32', '2019-05-15 16:55:32'),
(85, 17, '1557940388download _5).jpg', '2019-05-15 17:13:08', '2019-05-15 17:13:08'),
(86, 17, '1557940388restmb_idxmake.jpg', '2019-05-15 17:13:08', '2019-05-15 17:13:08'),
(87, 17, '1557940389superior-room.jpg', '2019-05-15 17:13:09', '2019-05-15 17:13:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_report`
--

CREATE TABLE `tbl_report` (
  `rid` int(10) UNSIGNED NOT NULL,
  `outletid` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_report`
--

INSERT INTO `tbl_report` (`rid`, `outletid`, `email`, `name`, `reason`, `created_at`, `updated_at`) VALUES
(1, 4, 'albinsalu@gmail.com', 'ALBIN SALU', 'other', NULL, NULL),
(2, 4, 'albinsalu24@gmail.com', 'rider', 'Posted in error', NULL, NULL),
(3, 15, 'bigboystuffs@gmail.com', 'zeroZero', 'other', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `rev_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outlet_id` bigint(20) UNSIGNED NOT NULL,
  `review` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` double(8,2) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`rev_id`, `email`, `name`, `outlet_id`, `review`, `rating`, `title`, `created_at`, `updated_at`) VALUES
(1, 'albinsalu@gmail.com', 'ALBIN SALU', 1, 'kollulllaaaa', 1.00, 'Sucks big time - 1 star', '2019-04-26 22:25:28', '2019-04-28 07:44:57'),
(2, 'bigboystuffs@gmail.com', 'zeroZero', 1, 'powliii', 5.00, 'Awesome - 5 stars', '2019-04-26 23:27:10', '2019-04-28 07:42:57'),
(3, 'vinayanav836@gmail.com', 'Vinayyy', 1, 'fghj', 1.50, 'Meh - 1.5 stars', '2019-04-26 23:29:55', '2019-04-27 01:46:13'),
(4, 'ajilsunny007@gmail.com', 'Ajil sunny', 6, 'good', 4.00, 'Pretty good - 4 stars', '2019-04-27 12:53:03', '2019-04-27 12:54:52'),
(5, 'bigboystuffs@gmail.com', 'zeroZero', 13, 'vvvv', 3.00, 'Meh - 3 stars', '2019-05-03 01:51:08', '2019-05-03 01:51:16'),
(6, 'albinsalu@gmail.com', 'ALBIN SALU', 4, 'Powliii', 5.00, 'Awesome - 5 stars', '2019-05-09 02:00:27', '2019-05-09 02:00:27');

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
(14, 'atm service', 1, '2019-03-28 08:40:25', '2019-03-28 08:40:25'),
(15, 'service new 25', 8, '2019-05-15 15:13:08', '2019-05-15 15:13:08'),
(16, 'service new  852', 8, '2019-05-15 15:13:08', '2019-05-15 15:13:08'),
(17, 'service new 526', 8, '2019-05-15 15:17:06', '2019-05-15 15:17:06'),
(18, 'service new 5636', 6, '2019-05-15 15:17:06', '2019-05-15 15:17:06'),
(19, 'service new 563', 6, '2019-05-15 15:17:06', '2019-05-15 15:17:06'),
(20, 'service new 365', 4, '2019-05-15 15:17:06', '2019-05-15 15:17:06'),
(21, 'service new 5932', 4, '2019-05-15 15:17:06', '2019-05-15 15:17:06'),
(22, 'service new 256', 4, '2019-05-15 15:17:06', '2019-05-15 15:17:06'),
(23, 'service new 5463', 10, '2019-05-15 15:17:06', '2019-05-15 15:17:06'),
(24, 'service new 266', 10, '2019-05-15 15:17:06', '2019-05-15 15:17:06'),
(25, 'service new 5432', 3, '2019-05-15 15:17:06', '2019-05-15 15:17:06'),
(26, 'service new  5464', 3, '2019-05-15 15:17:06', '2019-05-15 15:17:06'),
(27, 'service new 5465', 5, '2019-05-15 15:17:06', '2019-05-15 15:17:06'),
(28, 'service new 546', 5, '2019-05-15 15:17:06', '2019-05-15 15:17:06'),
(29, 'service new 5454', 7, '2019-05-15 15:17:06', '2019-05-15 15:17:06'),
(30, 'service new 5145', 7, '2019-05-15 15:17:06', '2019-05-15 15:17:06'),
(31, 'service new 3216', 2, '2019-05-15 15:17:06', '2019-05-15 15:17:06'),
(32, 'aasaa1', 11, NULL, NULL),
(33, 'aasaa1sd', 12, NULL, NULL),
(34, 'aasaa1dfc', 13, NULL, NULL),
(35, 'sdcsacas', 13, NULL, NULL),
(36, 'sc dvc', 13, NULL, NULL),
(37, 'asdcfvb', 14, NULL, NULL),
(38, 'asdafvs', 863535, NULL, NULL);

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
(2, 'Unselected', '2019-04-28 17:35:56', '2019-04-28 17:35:56');

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
(7, 'hidden', '2019-04-03 10:35:43', '2019-04-03 10:35:43'),
(8, 'yes', '2019-04-27 05:10:17', '2019-04-27 05:10:17'),
(9, 'no', '2019-04-27 05:10:17', '2019-04-27 05:10:17'),
(10, 'complete', '2019-04-30 07:11:20', '2019-04-30 07:11:20'),
(11, 'incomplete', '2019-04-30 07:11:20', '2019-04-30 07:11:20'),
(12, 'read', '2019-05-10 16:22:26', '2019-05-10 16:22:26'),
(13, 'unread', '2019-05-10 16:22:26', '2019-05-10 16:22:26');

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
(10, 3, 'Provisional', '2019-03-18 10:56:16', '2019-03-18 10:56:16'),
(11, 13, 'auto 1', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(12, 13, 'auto 12', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(13, 13, 'auto 13', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(14, 1, 'bank1', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(65, 7, ' culture 1', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(74, 10, 'cafe 1', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(525, 9, 'drink 1156', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(852, 9, 'drink 11', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(3687, 10, 'cafe 14', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(4525, 6, 'lodge 54', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(5275, 2, 'hosptial 363521', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(5435, 6, 'lodge 54 634', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(8542, 5, 'restaurant 21', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(8753, 11, 'electronics 863', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(53275, 3, 'market 644', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(65365, 11, 'electronics 56', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(75425, 5, 'restaurant 21 4532', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(76542, 8, 'shopping 8652', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(85274, 4, 'edu11', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(256345, 6, 'lodge 54 42', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(532074, 3, 'market 644 42', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(538357, 11, 'electronics 45', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(754287, 8, 'restaurant 21 85742', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(863535, 10, 'cafe 12', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(7542852, 8, 'shopping 7542', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(7685421, 8, 'shiopping 75421', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(7857528, 7, 'culture 45', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(8568765, 10, 'cafe 13', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(8765825, 9, 'drink 115', '2019-05-15 15:49:58', '2019-05-15 15:49:58'),
(8796525, 7, 'culture 12', '2019-05-15 15:49:58', '2019-05-15 15:49:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suggest`
--

CREATE TABLE `tbl_suggest` (
  `sid` int(10) UNSIGNED NOT NULL,
  `outletid` bigint(20) UNSIGNED NOT NULL,
  `uid` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `response` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rstatus` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_suggest`
--

INSERT INTO `tbl_suggest` (`sid`, `outletid`, `uid`, `email`, `comment`, `response`, `subject`, `rstatus`, `created_at`, `updated_at`) VALUES
(1, 4, 19, 'bigboystuffss@gmail.com', 'fghjk', '', 'dfghj', 12, NULL, NULL),
(2, 15, 21, 'bigboystuffs@gmail.com', 'asdfv', NULL, 'sdwfv', 12, NULL, NULL),
(3, 3, 21, 'usernotalive@gmail.com', '⁷Selected markets. See your operator for details.\r\n\r\n⁸Requires an Internet connection and a Google Account.\r\n\r\nThe Bluetooth® word mark and logos are registered trademarks owned by Bluetooth ', '⁵Charging rates are based on use of the included charger. Actual results may vary.\r\n\r\n⁶Pixel 3a and 3a XL are unlocked phones and work on major operators\' networks. In the US, Pixel 3a and 3a', '¹Android version updates for at least 3 years from when the device first became available in the Google Store. Please see g.co/pixel/updates for details.', 13, '2019-05-11 16:51:55', '2019-05-11 16:51:55'),
(4, 3, 21, 'usernotalive@gmail.com', 'Qualcomm is a trademark of Qualcomm Incorporated, registered in the United States and other countries, used with permission.', '⁵Charging rates are based on use of the included charger. Actual results may vary.In the US, Pixel 3a and 3a XL are compatible with all GSM-based networks and CDMA-based networks.', '¹Android version updates for at least 3 years from when the devetails.', 13, '2019-05-11 16:53:02', '2019-05-11 16:53:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_reg`
--

CREATE TABLE `tbl_users_reg` (
  `regid` int(10) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int(10) UNSIGNED DEFAULT NULL,
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
(1, 18, 'ZeroSlasher', 161, '8547880393', 'stay low key, let em just wonder bout your magic', 'some where near nowhere\r\nstay low key, let em just wonder bout your magic', 'admin.jpg', 1, '2019-05-07 08:52:50', '2019-05-07 08:52:50'),
(2, 19, 'zeroZero', 96, '7410852096', 'You dont know me.. Youre about to!!', 'Address\r\naddress \r\naddress', '155496555741.jpg', 1, '2019-04-02 17:10:41', '2019-04-02 17:10:41'),
(4, 21, 'Fiend', 1, '6222345678', 'you dont know me', 'hhh', '1554543668[Linux Wallpaper] 5 elements [Little gift from DNG-FGG Tux User].jpg', 1, '2019-04-02 17:10:41', '2019-04-02 17:10:41');

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
-- Table structure for table `tbl_verify_mail`
--

CREATE TABLE `tbl_verify_mail` (
  `eid` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isverified` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_verify_mail`
--

INSERT INTO `tbl_verify_mail` (`eid`, `email`, `code`, `isverified`, `created_at`, `updated_at`) VALUES
(1, 'albinsalu24@gmail.com', '', 8, NULL, NULL),
(37, 'vinayanav836@gmail.com', '', 8, '2019-04-27 04:57:58', '2019-04-27 04:57:58'),
(38, 'albinsalu@gmail.com', 'lhZSOnR0', 9, '2019-04-27 06:22:36', '2019-04-27 06:22:36'),
(47, 'ajilsunny007@gmail.com', '', 8, '2019-04-27 16:00:00', '2019-04-27 16:00:00'),
(48, 'ajilsunny@mca.ajce.in', '', 8, '2019-04-27 16:35:17', '2019-04-27 16:35:17'),
(49, 'qwefrgt@sdfg.hg', '', 9, '2019-04-27 18:04:11', '2019-04-27 18:04:11'),
(50, 'ALBINSALU244@GMAIL.COM', '', 9, '2019-04-30 09:08:42', '2019-04-30 09:08:42'),
(51, 'usernotalive@gmail.com', 'K7tM1QWW', 9, '2019-05-13 06:20:12', '2019-05-13 06:20:12'),
(52, 'bigboystuffs@gmail.com', 'jTjyAktF', 9, '2019-05-15 14:53:47', '2019-05-15 14:53:47');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tbl_advert`
--
ALTER TABLE `tbl_advert`
  ADD PRIMARY KEY (`ad_id`),
  ADD KEY `tbl_advert_id_foreign` (`id`),
  ADD KEY `tbl_advert_outletid_foreign` (`outletid`),
  ADD KEY `tbl_advert_pkg_id_foreign` (`pkg_id`),
  ADD KEY `tbl_advert_status_id_foreign` (`status_id`),
  ADD KEY `tbl_advert_p_status_foreign` (`p_status`);

--
-- Indexes for table `tbl_ad_images`
--
ALTER TABLE `tbl_ad_images`
  ADD PRIMARY KEY (`adimg_id`),
  ADD KEY `tbl_ad_images_ad_id_foreign` (`ad_id`);

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
  ADD KEY `tbl_outlet_prof_city_id_foreign` (`city_id`),
  ADD KEY `tbl_outlet_prof_subcat_id_foreign` (`subcat_id`),
  ADD KEY `tbl_outlet_prof_service_id_foreign` (`Service_id`),
  ADD KEY `tbl_outlet_prof_status_id_foreign` (`status_id`),
  ADD KEY `tbl_outlet_prof_id_foreign` (`id`),
  ADD KEY `tbl_outlet_prof_regid_foreign` (`regid`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`pkg_id`);

--
-- Indexes for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `tbl_payments_id_foreign` (`id`),
  ADD KEY `tbl_payments_ad_id_foreign` (`ad_id`),
  ADD KEY `tbl_payments_status_id_foreign` (`status_id`);

--
-- Indexes for table `tbl_prof_images`
--
ALTER TABLE `tbl_prof_images`
  ADD PRIMARY KEY (`imgid`),
  ADD KEY `tbl_prof_images_outletid_foreign` (`outletid`);

--
-- Indexes for table `tbl_report`
--
ALTER TABLE `tbl_report`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `tbl_report_outletid_foreign` (`outletid`);

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
-- Indexes for table `tbl_suggest`
--
ALTER TABLE `tbl_suggest`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `tbl_suggest_outletid_foreign` (`outletid`),
  ADD KEY `tbl_suggest_uid_foreign` (`uid`),
  ADD KEY `tbl_suggest_rstatus_foreign` (`rstatus`);

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
-- Indexes for table `tbl_verify_mail`
--
ALTER TABLE `tbl_verify_mail`
  ADD PRIMARY KEY (`eid`),
  ADD KEY `tbl_verify_mail_email_index` (`email`),
  ADD KEY `tbl_verify_mail_isverified_foreign` (`isverified`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_advert`
--
ALTER TABLE `tbl_advert`
  MODIFY `ad_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_ad_images`
--
ALTER TABLE `tbl_ad_images`
  MODIFY `adimg_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_cat`
--
ALTER TABLE `tbl_cat`
  MODIFY `Cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `city_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

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
  MODIFY `loc_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_outlet_prof`
--
ALTER TABLE `tbl_outlet_prof`
  MODIFY `outletid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `pkg_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  MODIFY `pay_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_prof_images`
--
ALTER TABLE `tbl_prof_images`
  MODIFY `imgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `tbl_report`
--
ALTER TABLE `tbl_report`
  MODIFY `rid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `rev_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `service_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `state_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `status_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_subcat`
--
ALTER TABLE `tbl_subcat`
  MODIFY `subcat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8796526;

--
-- AUTO_INCREMENT for table `tbl_suggest`
--
ALTER TABLE `tbl_suggest`
  MODIFY `sid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `tbl_verify_mail`
--
ALTER TABLE `tbl_verify_mail`
  MODIFY `eid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `verify_users`
--
ALTER TABLE `verify_users`
  MODIFY `vid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_advert`
--
ALTER TABLE `tbl_advert`
  ADD CONSTRAINT `tbl_advert_id_foreign` FOREIGN KEY (`id`) REFERENCES `tbl_login` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_advert_outletid_foreign` FOREIGN KEY (`outletid`) REFERENCES `tbl_outlet_prof` (`outletid`),
  ADD CONSTRAINT `tbl_advert_p_status_foreign` FOREIGN KEY (`p_status`) REFERENCES `tbl_status` (`status_id`),
  ADD CONSTRAINT `tbl_advert_pkg_id_foreign` FOREIGN KEY (`pkg_id`) REFERENCES `tbl_package` (`pkg_id`),
  ADD CONSTRAINT `tbl_advert_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `tbl_status` (`status_id`);

--
-- Constraints for table `tbl_ad_images`
--
ALTER TABLE `tbl_ad_images`
  ADD CONSTRAINT `tbl_ad_images_ad_id_foreign` FOREIGN KEY (`ad_id`) REFERENCES `tbl_advert` (`ad_id`);

--
-- Constraints for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD CONSTRAINT `tbl_city_dist_id_foreign` FOREIGN KEY (`dist_id`) REFERENCES `tbl_district` (`dist_id`);

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
  ADD CONSTRAINT `tbl_outlet_prof_id_foreign` FOREIGN KEY (`id`) REFERENCES `tbl_login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_outlet_prof_regid_foreign` FOREIGN KEY (`regid`) REFERENCES `tbl_users_reg` (`regid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_outlet_prof_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `tbl_status` (`status_id`),
  ADD CONSTRAINT `tbl_outlet_prof_subcat_id_foreign` FOREIGN KEY (`subcat_id`) REFERENCES `tbl_subcat` (`subcat_id`);

--
-- Constraints for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  ADD CONSTRAINT `tbl_payments_ad_id_foreign` FOREIGN KEY (`ad_id`) REFERENCES `tbl_advert` (`ad_id`),
  ADD CONSTRAINT `tbl_payments_id_foreign` FOREIGN KEY (`id`) REFERENCES `tbl_login` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_payments_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `tbl_status` (`status_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_prof_images`
--
ALTER TABLE `tbl_prof_images`
  ADD CONSTRAINT `tbl_prof_images_outletid_foreign` FOREIGN KEY (`outletid`) REFERENCES `tbl_outlet_prof` (`outletid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_report`
--
ALTER TABLE `tbl_report`
  ADD CONSTRAINT `tbl_report_outletid_foreign` FOREIGN KEY (`outletid`) REFERENCES `tbl_outlet_prof` (`outletid`);

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
-- Constraints for table `tbl_suggest`
--
ALTER TABLE `tbl_suggest`
  ADD CONSTRAINT `tbl_suggest_outletid_foreign` FOREIGN KEY (`outletid`) REFERENCES `tbl_outlet_prof` (`outletid`),
  ADD CONSTRAINT `tbl_suggest_rstatus_foreign` FOREIGN KEY (`rstatus`) REFERENCES `tbl_status` (`status_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_suggest_uid_foreign` FOREIGN KEY (`uid`) REFERENCES `tbl_login` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_users_reg`
--
ALTER TABLE `tbl_users_reg`
  ADD CONSTRAINT `tbl_users_reg_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `tbl_city` (`city_id`),
  ADD CONSTRAINT `tbl_users_reg_id_foreign` FOREIGN KEY (`id`) REFERENCES `tbl_login` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_users_reg_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `tbl_status` (`status_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_verify_mail`
--
ALTER TABLE `tbl_verify_mail`
  ADD CONSTRAINT `tbl_verify_mail_isverified_foreign` FOREIGN KEY (`isverified`) REFERENCES `tbl_status` (`status_id`);

--
-- Constraints for table `verify_users`
--
ALTER TABLE `verify_users`
  ADD CONSTRAINT `verify_users_id_foreign` FOREIGN KEY (`id`) REFERENCES `tbl_login` (`id`) ON DELETE CASCADE;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `expiry` ON SCHEDULE EVERY 24 HOUR STARTS '2019-05-08 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE tbl_advert set expiring_in = (expiring_in-1)$$

CREATE DEFINER=`root`@`localhost` EVENT `reset otp verify mail` ON SCHEDULE EVERY 10 MINUTE STARTS '2019-05-08 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE tbl_verify_mail set code = null$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
