-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql104.infinityfree.com
-- Generation Time: Apr 06, 2026 at 09:19 PM
-- Server version: 11.4.10-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_39445514_gard_2025`
--

-- --------------------------------------------------------

--
-- Table structure for table `advances`
--

CREATE TABLE `advances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_employee` varchar(191) NOT NULL,
  `amount` int(11) NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advances`
--

INSERT INTO `advances` (`id`, `name_employee`, `amount`, `job_id`, `created_at`, `updated_at`) VALUES
(367, 'أحمد أبو الفتوح', 5000, 6, '2026-04-07 06:41:44', '2026-04-07 06:41:44'),
(366, 'محمود محمد عبده', 2000, 15, '2026-04-07 02:27:46', '2026-04-07 02:27:46'),
(365, 'اسلام حسن علي', 5000, 15, '2026-04-07 00:12:08', '2026-04-07 00:12:08'),
(364, 'مؤمن احمد محمود', 3000, 15, '2026-04-06 23:23:17', '2026-04-06 23:23:17'),
(362, 'كريم عادل عبد العزيز', 3000, 15, '2026-04-06 19:29:02', '2026-04-06 19:29:02'),
(363, 'عبد الله محمود عبد الله', 3500, 15, '2026-04-06 20:44:00', '2026-04-06 20:44:00'),
(361, 'أمير أحمد جابر', 5000, 15, '2026-04-06 19:04:03', '2026-04-06 19:04:03'),
(359, 'مصطفي عبدالرحيم', 5000, 15, '2026-04-06 18:32:48', '2026-04-06 18:32:48'),
(360, 'محمد احمد عثمان', 4100, 9, '2026-04-06 18:33:14', '2026-04-06 18:33:14'),
(358, 'اسلام محسن سرحان', 4000, 14, '2026-04-06 17:54:36', '2026-04-06 17:54:36'),
(357, 'حسام الدين حسن', 5500, 15, '2026-04-06 17:49:41', '2026-04-06 17:49:41'),
(356, 'احمد السيد احمد', 2000, 15, '2026-04-06 17:48:55', '2026-04-06 17:48:55'),
(355, 'محمد على المصري', 3500, 6, '2026-04-06 17:48:46', '2026-04-06 17:48:46'),
(353, 'عمار عماد هنيدي', 5000, 9, '2026-04-06 07:55:03', '2026-04-06 07:55:03'),
(354, 'هاني ثروت علي', 7000, 7, '2026-04-06 13:15:42', '2026-04-06 18:31:31'),
(352, 'محمد عصام محمد', 2000, 9, '2026-04-06 07:08:59', '2026-04-06 07:08:59'),
(346, 'عادل زارع تغيان', 3000, 9, '2026-04-06 02:57:53', '2026-04-06 02:57:53'),
(347, 'ابراهيم وائل ابراهيم', 2000, 9, '2026-04-06 03:37:14', '2026-04-06 03:37:14'),
(348, 'محمد علي خلف', 1300, 9, '2026-04-06 04:44:16', '2026-04-06 04:44:16'),
(349, 'محمود احمد راضي', 5000, 7, '2026-04-06 04:49:20', '2026-04-06 04:49:20'),
(350, 'ايهاب محمود جابر', 600, 7, '2026-04-06 04:59:03', '2026-04-06 04:59:03'),
(351, 'كريم محمود محمد', 4000, 13, '2026-04-06 06:42:58', '2026-04-06 06:42:58'),
(343, 'محمد سعيد', 5000, 8, '2026-04-06 02:33:58', '2026-04-06 02:33:58'),
(344, 'كمال فرج محمد', 2000, 14, '2026-04-06 02:36:54', '2026-04-06 02:36:54'),
(345, 'محمد مسعود موسي', 2000, 9, '2026-04-06 02:42:17', '2026-04-06 02:42:17'),
(342, 'عبدالله محمد لطفى', 5000, 8, '2026-04-06 02:33:35', '2026-04-06 02:33:35'),
(341, 'عبدالله عصام', 2000, 13, '2026-04-06 02:18:16', '2026-04-06 02:18:16'),
(340, 'ادم محمود سامي', 3000, 13, '2026-04-06 02:08:58', '2026-04-06 02:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `big_waters`
--

CREATE TABLE `big_waters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_A` varchar(191) NOT NULL,
  `first_term_B` int(11) DEFAULT 0,
  `come_in_C` int(11) DEFAULT NULL,
  `convert_from_D` int(11) DEFAULT NULL,
  `convert_to_E` int(11) DEFAULT NULL,
  `harmony_F` int(11) DEFAULT NULL,
  `sales_G` int(11) DEFAULT NULL,
  `residual_H` int(11) DEFAULT 0,
  `last_term_I` int(11) DEFAULT NULL,
  `disability_J` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cashier_posts`
--

CREATE TABLE `cashier_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `mandate` decimal(8,2) NOT NULL,
  `memoirs` decimal(8,2) NOT NULL,
  `purchases` decimal(8,2) NOT NULL,
  `totalepost` decimal(8,2) NOT NULL,
  `employe_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cashier_posts`
--

INSERT INTO `cashier_posts` (`id`, `date`, `name`, `mandate`, `memoirs`, `purchases`, `totalepost`, `employe_id`, `created_at`, `updated_at`) VALUES
(3, '2025-12-27', 'محمود ماهر', '1300.00', '760.00', '60.00', '18000.00', 52, '2025-12-27 10:21:44', '2025-12-27 10:21:44'),
(4, '2025-12-27', 'اسلام خليفة احمد', '1000.00', '400.00', '0.00', '15000.00', 53, '2025-12-28 03:33:51', '2025-12-28 03:35:01'),
(5, '2025-12-27', 'هاني ثروت علي', '10000.00', '500.00', '1000.00', '10000.00', 54, '2025-12-28 03:37:28', '2025-12-28 03:37:28');

-- --------------------------------------------------------

--
-- Table structure for table `dashboards`
--

CREATE TABLE `dashboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `day_offs`
--

CREATE TABLE `day_offs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `day_offs`
--

INSERT INTO `day_offs` (`id`, `employee_id`, `date`, `status`, `created_at`, `updated_at`) VALUES
(2, 6, '2026-04-09', 'rejected', '2026-04-06 22:31:18', '2026-04-06 22:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) DEFAULT NULL,
  `slide_id` bigint(20) UNSIGNED NOT NULL DEFAULT 3,
  `status` varchar(191) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `job_id`, `code`, `slide_id`, `status`, `created_at`, `updated_at`) VALUES
(81, 'محمود جمال الدين محمد', 13, '5806', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(80, 'عبدالله عصام', 13, '3395', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(79, 'كريم محمود محمد', 13, '6438', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(138, 'كريم ذكي أبراهيم', 14, '0000', 3, '1', '2026-04-02 22:12:58', '2026-04-02 22:12:58'),
(76, 'علاء حسن عبدالجواد', 11, '8780', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(75, 'حامد عفيفي حامد', 11, '8728', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(126, 'اسلام محسن سرحان', 14, '0000', 3, '1', '2025-12-07 01:29:46', '2025-12-07 01:29:46'),
(127, 'أنس أبراهيم علي', 14, '0000', 3, '1', '2025-12-07 01:42:30', '2025-12-07 01:42:30'),
(124, 'عاطف ابراهيم', 15, '0000', 3, '1', '2025-10-07 22:01:19', '2025-10-07 22:01:19'),
(125, 'محمود وسيم قناوي', 12, '0000', 3, '1', '2025-10-08 01:03:29', '2025-10-08 01:03:29'),
(71, 'احمد محمد يوسف', 11, '3372', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(70, 'عبدالمجيد حمدي', 11, '6669', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(69, 'حسين عيد حسن', 10, '1182', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(68, 'احمد محمد طه', 10, '269', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(67, 'محمد ختام محمد', 9, '8635', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(108, 'محمد السيد', 11, '0000', 3, '1', '2025-07-14 05:56:05', '2025-11-06 18:39:59'),
(65, 'ابراهيم وائل ابراهيم', 9, '8293', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(64, 'عادل زارع تغيان', 9, '8262', 1, '1', '2025-07-13 08:12:42', '2025-09-09 04:23:41'),
(62, 'محمد عصام محمد', 9, '7278', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(129, 'أمير أحمد جابر', 15, '5072', 3, '1', '2025-12-07 23:34:49', '2025-12-07 23:34:49'),
(60, 'محمد علي خلف', 9, '5985', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(137, 'محمد جعفر', 10, '0000', 3, '1', '2026-02-03 21:47:30', '2026-02-03 21:47:30'),
(136, 'الهامي غنيم', 12, '0000', 3, '1', '2026-01-09 20:53:29', '2026-01-09 20:53:29'),
(58, 'محمد مسعود موسي', 9, '2658', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(57, 'محمد سعيد', 8, '3310', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(56, 'عبدالله محمد لطفى', 8, '449', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(55, 'محمود احمد راضي', 7, '332', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(54, 'هاني ثروت علي', 7, '5471', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(140, 'ايهاب محمود جابر', 7, '0000', 3, '1', '2026-04-06 04:52:55', '2026-04-06 04:55:50'),
(53, 'احمد حمدي محمد', 7, '0000', 1, '1', '2025-07-13 08:12:42', '2026-04-06 04:52:04'),
(52, 'محمود ماهر', 7, '285', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(51, 'كريم مجدي محمد', 4, '4769', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(50, 'السيد على سعد', 3, '422', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(49, 'طارق دسوقي', 2, '1729', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(48, 'احمد محمد ابراهيم', 1, '398', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(82, 'ادم محمود سامي', 13, '7904', 1, '1', '2025-07-13 08:12:42', '2025-09-09 04:21:28'),
(83, 'محمود رمضان', 13, '8513', 1, '1', '2025-07-13 08:12:42', '2025-09-09 04:12:11'),
(122, 'محمد محمود عشري', 11, '000', 3, '1', '2025-09-09 04:23:20', '2025-09-09 04:23:20'),
(85, 'السيد مكرم اسماعيل الصافي', 11, '8618', 1, '1', '2025-07-13 08:12:42', '2025-09-09 04:21:59'),
(86, 'احمد محمد رمضان', 11, '8637', 1, '1', '2025-07-13 08:12:42', '2025-09-09 04:21:46'),
(87, 'محمد احمد محمد', 17, '8690', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(88, 'كريم عادل عبد العزيز', 15, '1916', 1, '1', '2025-07-13 08:12:42', '2025-08-05 20:50:19'),
(118, 'بكر ابو المجد', 17, '0000', 3, '1', '2025-09-09 04:08:26', '2025-09-09 04:08:26'),
(90, 'كمال فرج محمد', 14, '7393', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(91, 'أحمد أبو الفتوح', 6, '577', 1, '1', '2025-07-13 08:12:42', '2025-10-08 19:39:08'),
(117, 'محمد طه  أسمعايل', 17, '0000', 3, '1', '2025-09-09 04:07:49', '2025-12-08 00:11:13'),
(93, 'حسام الدين حسن', 15, '2527', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(94, 'محمود محمد عبده', 15, '4725', 1, '1', '2025-07-13 08:12:42', '2025-09-09 04:23:58'),
(95, 'مصطفي عبدالرحيم', 15, '6681', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(123, 'احمد ممدوح', 15, '0000', 3, '1', '2025-10-07 22:00:57', '2025-10-07 22:00:57'),
(97, 'باسم احمد محمد ', 15, '7132', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(98, 'عبد الله محمود عبد الله ', 15, '7272', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(99, 'احمد عبد المنعم عبدالحميد', 15, '7285', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(100, 'اسلام حسن علي ', 15, '7367', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(101, 'مؤمن احمد محمود', 15, '8306', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(102, 'احمد السيد احمد', 15, '5317', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(103, 'السيد علي السيد', 16, '139', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(104, 'شكرى سليمان ابراهيم', 5, '304', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(105, 'محمد علاء', 18, '2395', 1, '1', '2025-07-13 08:12:42', '2025-07-13 08:12:42'),
(135, 'عمر دسوقي', 4, '6803', 3, '1', '2026-01-09 20:35:59', '2026-01-09 20:57:02'),
(128, 'محمد وائل عبد الحليم', 15, '0000', 3, '1', '2025-12-07 23:33:56', '2025-12-07 23:33:56'),
(113, 'محمد على المصري', 6, '0000', 3, '1', '2025-08-05 20:49:58', '2025-08-05 20:49:58'),
(114, 'احمد مدحت خليفة', 14, '0000', 3, '1', '2025-08-05 20:50:51', '2025-08-05 20:50:51'),
(115, 'على محمد على', 15, '0000', 3, '1', '2025-08-05 20:51:08', '2025-08-05 20:51:08'),
(116, 'محمد حسن محمد', 14, NULL, 3, '1', '2025-08-05 20:51:45', '2025-08-05 20:51:45'),
(119, 'احمد عثمان', 17, '000', 3, '1', '2025-09-09 04:08:47', '2025-09-09 04:08:47'),
(120, 'احمد علي', 17, '0000', 3, '1', '2025-09-09 04:10:21', '2025-09-09 04:10:21'),
(121, 'فارس حربي', 17, '000', 3, '1', '2025-09-09 04:10:57', '2025-09-09 04:10:57'),
(139, 'اسامة أشرف ابو الراي', 9, '0000', 3, '1', '2026-04-02 22:13:27', '2026-04-02 22:13:27'),
(132, 'يوسف شريف على', 19, '0000', 3, '1', '2025-12-21 05:44:43', '2025-12-27 06:59:28'),
(133, 'عمار عماد هنيدي', 9, '0000', 3, '1', '2025-12-21 05:45:58', '2026-02-03 21:46:58'),
(134, 'محمد احمد عثمان', 9, '0000', 3, '1', '2025-12-26 22:39:17', '2025-12-26 22:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gards`
--

CREATE TABLE `gards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `A` varchar(191) NOT NULL,
  `B` int(11) DEFAULT 0,
  `C` int(11) DEFAULT NULL,
  `D` int(11) DEFAULT NULL,
  `E` int(11) DEFAULT NULL,
  `F` int(11) DEFAULT NULL,
  `G` int(11) DEFAULT NULL,
  `H` int(11) DEFAULT 0,
  `I` int(11) DEFAULT NULL,
  `J` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gards`
--

INSERT INTO `gards` (`id`, `A`, `B`, `C`, `D`, `E`, `F`, `G`, `H`, `I`, `J`, `created_at`, `updated_at`) VALUES
(1, '2025-07-13 01:10:08', 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2025-07-13 08:10:08', '2025-07-13 08:10:08');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Manager', '2025-07-13 08:10:08', '2025-07-13 08:10:08'),
(2, 'Assistant Manager', '2025-07-13 08:10:08', '2025-07-13 08:10:08'),
(3, 'Supervisor Delivery', '2025-07-13 08:10:08', '2025-07-13 08:10:08'),
(4, 'engineer Control', '2025-07-13 08:10:08', '2026-01-09 20:38:18'),
(5, 'Control', '2025-07-13 08:10:08', '2025-07-13 08:10:08'),
(6, 'Supervisor', '2025-07-13 08:10:08', '2025-07-13 08:10:08'),
(7, 'Cashier', '2025-07-13 08:10:08', '2025-07-13 08:10:08'),
(8, 'Captain', '2025-07-13 08:10:08', '2025-07-13 08:10:08'),
(9, 'Waiter', '2025-07-13 08:10:08', '2025-07-13 08:10:08'),
(10, 'Front', '2025-07-13 08:10:08', '2025-07-13 08:10:08'),
(11, 'Salsagi', '2025-07-13 08:10:08', '2025-07-13 08:10:08'),
(12, 'Cook', '2025-07-13 08:10:08', '2025-07-13 08:10:08'),
(13, 'Assistant cook', '2025-07-13 08:10:08', '2025-07-13 08:10:08'),
(14, 'Taker', '2025-07-13 08:10:08', '2025-07-13 08:10:08'),
(15, 'Pilot', '2025-07-13 08:10:08', '2025-07-13 08:10:08'),
(16, 'Security', '2025-07-13 08:10:08', '2025-07-13 08:10:08'),
(17, 'Steward', '2025-07-13 08:10:08', '2025-07-13 08:10:08'),
(18, 'Technical', '2025-07-13 08:10:08', '2025-07-13 08:10:08'),
(19, 'Bus Boy', '2025-07-14 05:51:47', '2025-07-14 05:51:47');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phrase` varchar(191) NOT NULL,
  `en` varchar(191) NOT NULL,
  `ar` varchar(191) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `phrase`, `en`, `ar`) VALUES
(1, 'Manager', 'Manager', 'المدير'),
(2, 'Assistant Manager', 'Assistant Manager', 'مساعد مدير'),
(3, 'Supervisor Delivery', 'Supervisor Delivery', 'مشرف'),
(4, 'Quality Control', 'Quality Control', 'مراقب الجودة'),
(5, 'Control', 'Control', 'المراقب'),
(6, 'Supervisor', 'Supervisor', 'مشرف دليفري'),
(7, 'Cashier', 'Cashier', 'الكاشير'),
(8, 'Captain', 'Captain', 'كابتن'),
(9, 'Waiter', 'Waiter', 'ويتر'),
(10, 'Front', 'Front', 'فرشجي'),
(11, 'Salsagi', 'Salsagi', 'صلصجي'),
(12, 'cook', 'Cook', 'طباخ'),
(13, 'Assistant cook', 'Assistant cook', 'مساعد طبارخ'),
(14, 'Taker', 'Taker', 'تيكر'),
(15, 'pilot', 'Pilot', 'طيار'),
(16, 'security', 'Security', 'أمن'),
(17, 'Steward', 'Steward', 'أستيوارد'),
(18, 'technical', 'Technical', 'Technical'),
(19, 'slide', 'Slide', 'Slide'),
(20, 'Admin', 'Admin', 'Admin'),
(21, 'MIDO', 'MIDO', 'MIDO'),
(22, 'Log In', 'Log In', 'Log In'),
(23, 'DataTable Advances', 'DataTable Advances', 'DataTable Advances'),
(24, 'Add Advance', 'Add Advance', 'Add Advance'),
(25, 'print excel', 'Print excel', 'Print excel'),
(26, 'print pdf', 'Print pdf', 'Print pdf'),
(27, 'Create Advance', 'Create Advance', 'Create Advance'),
(28, 'chooes', 'Chooes', 'Chooes'),
(29, 'checked', 'Checked', 'Checked'),
(30, 'name employee', 'Name employee', 'Name employee'),
(31, 'amount', 'Amount', 'Amount'),
(32, 'job', 'Job', 'Job'),
(33, 'Action', 'Action', 'Action'),
(34, 'delete all', 'Delete all', 'Delete all'),
(35, 'Home', 'Home', 'Home'),
(36, 'Contact', 'Contact', 'Contact'),
(37, 'Dashboard', 'Dashboard', 'Dashboard'),
(38, 'GARD', 'GARD', 'GARD'),
(39, 'Gard Mime', 'Gard Mime', 'Gard Mime'),
(40, 'pepsi cans', 'Pepsi cans', 'Pepsi cans'),
(41, 'pepsi plastic', 'Pepsi plastic', 'Pepsi plastic'),
(42, 'small water', 'Small water', 'Small water'),
(43, 'big water', 'Big water', 'Big water'),
(44, 'Sweet', 'Sweet', 'Sweet'),
(45, 'Sweet production', 'Sweet production', 'Sweet production'),
(46, 'SYSTEM', 'SYSTEM', 'SYSTEM'),
(47, 'Advances', 'Advances', 'Advances'),
(48, 'Create Advances', 'Create Advances', 'Create Advances'),
(49, 'setting pdf', 'Setting pdf', 'Setting pdf'),
(50, 'employees', 'Employees', 'Employees'),
(51, 'data employees', 'Data employees', 'Data employees'),
(52, 'Tip', 'Tip', 'Tip'),
(53, 'Tip  employee', 'Tip  employee', 'Tip  employee'),
(54, 'leaderboard Tip ', 'Leaderboard Tip ', 'Leaderboard Tip '),
(55, 'Files', 'Files', 'Files'),
(56, 'note', 'Note', 'Note'),
(57, 'Create', 'Create', 'Create'),
(58, 'Report', 'Report', 'Report'),
(59, 'all', 'All', 'All'),
(60, 'note money', 'Note money', 'Note money'),
(61, 'maintenance', 'Maintenance', 'Maintenance'),
(62, 'note maintenance', 'Note maintenance', 'Note maintenance'),
(63, 'Pdf', 'Pdf', 'Pdf'),
(64, 'pdf sweet', 'Pdf sweet', 'Pdf sweet'),
(65, 'Tools', 'Tools', 'Tools'),
(66, 'translate', 'Translate', 'Translate'),
(67, 'users', 'Users', 'Users'),
(68, 'rols', 'Rols', 'Rols'),
(69, 'jobs', 'Jobs', 'Jobs'),
(70, 'section', 'Section', 'Section'),
(71, 'DataTable Employees', 'DataTable Employees', 'DataTable Employees'),
(72, 'Add Employees', 'Add Employees', 'Add Employees'),
(73, 'excel', 'Excel', 'Excel'),
(74, 'imoprt', 'Imoprt', 'Imoprt'),
(75, 'uploade', 'Uploade', 'Uploade'),
(76, 'file', 'File', 'File'),
(77, 'xsls', 'Xsls', 'Xsls'),
(78, 'uploade file', 'Uploade file', 'Uploade file'),
(79, 'name', 'Name', 'Name'),
(80, 'code', 'Code', 'Code'),
(81, 'status', 'Status', 'Status'),
(82, 'Activity', 'Activity', 'Activity'),
(83, 'Enter name employee', 'Enter name employee', 'Enter name employee'),
(84, 'Enter Code', 'Enter Code', 'Enter Code'),
(85, 'Close', 'Close', 'Close'),
(86, 'Save', 'Save', 'Save'),
(87, 'DataTable Jobs', 'DataTable Jobs', 'DataTable Jobs'),
(88, 'Add Jobs', 'Add Jobs', 'Add Jobs'),
(89, 'print', 'Print', 'Print'),
(90, 'Create Job', 'Create Job', 'Create Job'),
(91, 'باص بوي', 'باص بوي', 'باص بوي'),
(92, 'Table', 'Table', 'Table'),
(93, 'Add Tip', 'Add Tip', 'Add Tip'),
(94, 'CreateTipDay', 'CreateTipDay', 'CreateTipDay'),
(95, 'Enter name Report', 'Enter name Report', 'Enter name Report'),
(96, 'Enter name title', 'Enter name title', 'Enter name title'),
(97, 'Enter name branch', 'Enter name branch', 'Enter name branch'),
(98, 'DataTable languages', 'DataTable languages', 'DataTable languages'),
(99, 'Add language', 'Add language', 'Add language'),
(100, 'phrase', 'Phrase', 'Phrase'),
(101, 'en', 'En', 'En'),
(102, 'ar', 'Ar', 'Ar'),
(103, 'phrase en', 'Phrase en', 'Phrase en'),
(104, 'phrase ar', 'Phrase ar', 'Phrase ar'),
(105, 'marital_status', 'Marital_status', 'Marital_status'),
(106, 'appointment_date', 'Appointment_date', 'Appointment_date'),
(107, 'basic_salary', 'Basic_salary', 'Basic_salary'),
(108, 'uniform_last_received', 'Uniform_last_received', 'Uniform_last_received'),
(109, 'uniform_due_date', 'Uniform_due_date', 'Uniform_due_date'),
(110, 'tooles_one_last_received', 'Tooles_one_last_received', 'Tooles_one_last_received'),
(111, 'tooles_one_due_date', 'Tooles_one_due_date', 'Tooles_one_due_date'),
(112, 'tooles_two_last_received', 'Tooles_two_last_received', 'Tooles_two_last_received'),
(113, 'tooles_two_due_date', 'Tooles_two_due_date', 'Tooles_two_due_date'),
(114, 'medical_cardinary', 'Medical_cardinary', 'Medical_cardinary'),
(115, 'health_certificate', 'Health_certificate', 'Health_certificate'),
(116, 'insurance', 'Insurance', 'Insurance'),
(117, 'phone', 'Phone', 'Phone'),
(118, 'salary_type', 'Salary_type', 'Salary_type'),
(119, 'instead_allowance', 'Instead_allowance', 'Instead_allowance'),
(120, 'instead_communications', 'Instead_communications', 'Instead_communications'),
(121, '**NO.1**', '**NO.1**', '**NO.1**'),
(122, 'Koshari Tahrir', 'Koshari Tahrir', 'Koshari Tahrir'),
(123, 'Al-Saeed Company for Restaurant Management and Operation', 'Al-Saeed Company for Restaurant Management and Operation', 'Al-Saeed Company for Restaurant Management and Operation'),
(124, 'Branch / Miami', 'Branch / Miami', 'Branch / Miami'),
(125, 'To Mr. Human Resources Director', 'To Mr. Human Resources Director', 'To Mr. Human Resources Director'),
(126, 'Total', 'Total', 'Total'),
(127, 'Table sweet productions', 'Table sweet productions', 'Table sweet productions'),
(128, 'Add Gard', 'Add Gard', 'Add Gard'),
(129, 'Date', 'Date', 'Date'),
(130, 'Pure milk', 'Pure milk', 'Pure milk'),
(131, 'Production of boxes', 'Production of boxes', 'Production of boxes'),
(132, 'Convert from', 'Convert from', 'Convert from'),
(133, 'Convert to', 'Convert to', 'Convert to'),
(134, 'harmony', 'Harmony', 'Harmony'),
(135, 'a cook', 'A cook', 'A cook'),
(136, 'DataTable', 'DataTable', 'DataTable'),
(137, 'PepsiCans', 'PepsiCans', 'PepsiCans'),
(138, 'Add', 'Add', 'Add'),
(139, 'First term', 'First term', 'First term'),
(140, 'Come in', 'Come in', 'Come in'),
(141, 'Sales', 'Sales', 'Sales'),
(142, 'Residual', 'Residual', 'Residual'),
(143, 'last term', 'Last term', 'Last term'),
(144, 'Disability', 'Disability', 'Disability'),
(145, 'Bus Boy', 'Bus Boy', 'Bus Boy'),
(146, 'DataTable CashierPost', 'DataTable CashierPost', 'DataTable CashierPost'),
(147, 'Add CashierPost', 'Add CashierPost', 'Add CashierPost'),
(148, 'mandate', 'Mandate', 'العهدة'),
(149, 'purchases', 'Purchases', 'المصروفات'),
(150, 'memoirs', 'Memoirs', 'المذكرات'),
(151, 'totalepost', 'Totalepost', 'أجمالي التسليم'),
(152, 'net income', 'Net income', 'صافي الدخل'),
(153, 'محمود احمد راضي', 'محمود احمد راضي', 'محمود احمد راضي'),
(154, 'هاني ثروت علي', 'هاني ثروت علي', 'هاني ثروت علي'),
(155, 'اسلام خليفة احمد', 'اسلام خليفة احمد', 'اسلام خليفة احمد'),
(156, 'محمود ماهر', 'محمود ماهر', 'محمود ماهر'),
(157, 'Enter Totale Post', 'Enter Totale Post', 'Enter Totale Post'),
(158, 'Enter Totale Mandate', 'Enter Totale Mandate', 'Enter Totale Mandate'),
(159, 'Enter Totale Memoirs', 'Enter Totale Memoirs', 'Enter Totale Memoirs'),
(160, 'Enter Totale Purchases', 'Enter Totale Purchases', 'Enter Totale Purchases'),
(161, 'Cashier Posts', 'Cashier Posts', 'Cashier Posts'),
(162, 'Cashier Mime', 'Cashier Mime', 'Cashier Mime'),
(163, 'engineer Control', 'Engineer Control', 'مهندس  جودة'),
(164, 'day off', 'Day off', 'Day off');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(139, '2014_10_12_000000_create_users_table', 1),
(140, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(141, '2014_10_12_100000_create_password_resets_table', 1),
(142, '2019_08_19_000000_create_failed_jobs_table', 1),
(143, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(144, '2024_10_02_090359_create_gards_table', 1),
(145, '2024_10_03_215434_create_dashboards_table', 1),
(146, '2024_10_03_221330_create_sweet_productions_table', 1),
(147, '2024_10_04_214332_create_pepsi_cans_table', 1),
(148, '2024_10_05_230508_create_pepsi_plastics_table', 1),
(149, '2024_10_06_222510_create_small_waters_table', 1),
(150, '2024_10_06_232944_create_big_waters_table', 1),
(151, '2024_10_12_230555_create_sweets_table', 1),
(152, '2024_10_13_220713_create_languages_table', 1),
(153, '2024_10_20_093848_create_jobs_table', 1),
(154, '2024_10_21_092229_create_advances_table', 1),
(155, '2024_11_14_023251_create_setting_pdfs_table', 1),
(156, '2024_11_17_093424_create_slides_table', 1),
(157, '2024_11_24_123516_create_rols_table', 1),
(158, '2024_11_28_234925_create_employees_table', 1),
(159, '2024_12_15_212101_create_section__reports_table', 1),
(160, '2024_12_15_213316_create_reports_table', 1),
(161, '2025_07_03_001233_create_tips_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pepsi_cans`
--

CREATE TABLE `pepsi_cans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_A` varchar(191) NOT NULL,
  `first_term_B` int(11) DEFAULT 0,
  `come_in_C` int(11) DEFAULT NULL,
  `convert_from_D` int(11) DEFAULT NULL,
  `convert_to_E` int(11) DEFAULT NULL,
  `harmony_F` int(11) DEFAULT NULL,
  `sales_G` int(11) DEFAULT NULL,
  `residual_H` int(11) DEFAULT 0,
  `last_term_I` int(11) DEFAULT NULL,
  `disability_J` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pepsi_plastics`
--

CREATE TABLE `pepsi_plastics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_A` varchar(191) NOT NULL,
  `first_term_B` int(11) DEFAULT 0,
  `come_in_C` int(11) DEFAULT NULL,
  `convert_from_D` int(11) DEFAULT NULL,
  `convert_to_E` int(11) DEFAULT NULL,
  `harmony_F` int(11) DEFAULT NULL,
  `sales_G` int(11) DEFAULT NULL,
  `residual_H` int(11) DEFAULT 0,
  `last_term_I` int(11) DEFAULT NULL,
  `disability_J` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `title` varchar(191) NOT NULL DEFAULT 'title',
  `branch` varchar(191) NOT NULL DEFAULT 'Branch',
  `date` date NOT NULL,
  `body` text NOT NULL,
  `section_report_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `name`, `title`, `branch`, `date`, `body`, `section_report_id`, `created_at`, `updated_at`) VALUES
(1, 'note money', 'title', 'branch', '2024-12-19', 'here masaage', 1, '2025-07-13 08:10:08', '2025-07-13 08:10:08'),
(2, 'note maintenance', 'title', 'branch', '2024-12-19', 'here masaage', 2, '2025-07-13 08:10:08', '2025-07-13 08:10:08');

-- --------------------------------------------------------

--
-- Table structure for table `rols`
--

CREATE TABLE `rols` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `status` varchar(191) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rols`
--

INSERT INTO `rols` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '1', '2025-07-13 08:10:07', '2025-07-13 08:10:07'),
(2, 'Manager', '1', '2025-07-13 08:10:07', '2025-07-13 08:10:07'),
(3, 'user', '1', '2025-07-13 08:10:07', '2025-07-13 08:10:07'),
(4, 'Guset', '1', '2025-07-13 08:10:07', '2025-07-13 08:10:07');

-- --------------------------------------------------------

--
-- Table structure for table `section__reports`
--

CREATE TABLE `section__reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `status` varchar(191) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section__reports`
--

INSERT INTO `section__reports` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'note', '1', '2025-07-13 08:10:08', '2025-07-13 08:10:08'),
(2, 'maintenance', '1', '2025-07-13 08:10:08', '2025-07-13 08:10:08');

-- --------------------------------------------------------

--
-- Table structure for table `setting_pdfs`
--

CREATE TABLE `setting_pdfs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `month` varchar(191) NOT NULL,
  `branch_manager` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'A', '2025-07-13 08:10:08', '2025-07-13 08:10:08'),
(2, 'B', '2025-07-13 08:10:08', '2025-07-13 08:10:08'),
(3, 'C', '2025-07-13 08:10:08', '2025-07-13 08:10:08');

-- --------------------------------------------------------

--
-- Table structure for table `small_waters`
--

CREATE TABLE `small_waters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_A` varchar(191) NOT NULL,
  `first_term_B` int(11) DEFAULT 0,
  `come_in_C` int(11) DEFAULT NULL,
  `convert_from_D` int(11) DEFAULT NULL,
  `convert_to_E` int(11) DEFAULT NULL,
  `harmony_F` int(11) DEFAULT NULL,
  `sales_G` int(11) DEFAULT NULL,
  `residual_H` int(11) DEFAULT 0,
  `last_term_I` int(11) DEFAULT NULL,
  `disability_J` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sweets`
--

CREATE TABLE `sweets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_A` varchar(191) NOT NULL,
  `first_term_B` int(11) DEFAULT 0,
  `come_in_C` int(11) DEFAULT NULL,
  `convert_from_D` int(11) DEFAULT NULL,
  `convert_to_E` int(11) DEFAULT NULL,
  `harmony_F` int(11) DEFAULT NULL,
  `sales_G` int(11) DEFAULT NULL,
  `residual_H` int(11) DEFAULT 0,
  `last_term_I` int(11) DEFAULT NULL,
  `disability_J` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sweet_productions`
--

CREATE TABLE `sweet_productions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_A` varchar(191) NOT NULL,
  `pure_milka_B` int(11) DEFAULT 0,
  `boxes_C` int(11) DEFAULT NULL,
  `convert_from_D` int(11) DEFAULT NULL,
  `convert_to_E` int(11) DEFAULT NULL,
  `harmony_F` int(11) DEFAULT NULL,
  `a_cook_G` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE `tips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(191) NOT NULL,
  `employe_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tips`
--

INSERT INTO `tips` (`id`, `date`, `employe_id`, `amount`, `created_at`, `updated_at`) VALUES
(1677, '2026-04-06', 60, '30.00', '2026-04-07 01:44:28', '2026-04-07 01:44:28'),
(1678, '2026-04-06', 58, '15.00', '2026-04-07 01:44:28', '2026-04-07 01:44:28'),
(1676, '2026-04-06', 62, '5.00', '2026-04-07 01:44:28', '2026-04-07 01:44:28'),
(1675, '2026-04-06', 64, '15.00', '2026-04-07 01:44:28', '2026-04-07 01:44:28'),
(1674, '2026-04-06', 65, '10.00', '2026-04-07 01:44:28', '2026-04-07 01:44:28'),
(1673, '2026-04-06', 56, '30.00', '2026-04-07 01:44:28', '2026-04-07 01:44:28'),
(1672, '2026-04-05', 132, '10.00', '2026-04-06 02:05:47', '2026-04-06 02:05:47'),
(1671, '2026-04-05', 60, '30.00', '2026-04-06 02:05:47', '2026-04-06 02:05:47'),
(1670, '2026-04-05', 62, '10.00', '2026-04-06 02:05:47', '2026-04-06 02:05:47'),
(1669, '2026-04-05', 56, '30.00', '2026-04-06 02:05:47', '2026-04-06 02:05:47'),
(1668, '2026-04-05', 57, '45.00', '2026-04-06 02:05:47', '2026-04-06 02:05:47'),
(1667, '2026-04-04', 62, '10.00', '2026-04-06 02:04:19', '2026-04-06 02:04:19'),
(1666, '2026-04-04', 56, '20.00', '2026-04-06 02:04:19', '2026-04-06 02:04:19'),
(1657, '2026-04-03', 56, '40.00', '2026-04-04 19:57:59', '2026-04-04 19:57:59'),
(1658, '2026-04-03', 60, '70.00', '2026-04-04 19:57:59', '2026-04-04 19:57:59'),
(1659, '2026-04-03', 58, '10.00', '2026-04-04 19:57:59', '2026-04-04 19:57:59'),
(1660, '2026-04-03', 133, '20.00', '2026-04-04 19:57:59', '2026-04-04 19:57:59'),
(1661, '2026-04-04', 57, '65.00', '2026-04-05 19:28:32', '2026-04-05 19:28:32'),
(1662, '2026-04-04', 65, '15.00', '2026-04-05 19:28:32', '2026-04-05 19:28:32'),
(1663, '2026-04-04', 60, '10.00', '2026-04-05 19:28:32', '2026-04-05 19:28:32'),
(1664, '2026-04-04', 58, '10.00', '2026-04-05 19:28:32', '2026-04-05 19:28:32'),
(1665, '2026-04-04', 134, '10.00', '2026-04-05 19:28:32', '2026-04-05 19:28:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `whatsapp` varchar(191) NOT NULL,
  `code` varchar(191) NOT NULL,
  `rol_id` bigint(20) NOT NULL DEFAULT 0,
  `status` varchar(191) NOT NULL DEFAULT '1',
  `google_id` varchar(191) DEFAULT NULL,
  `facebook_id` varchar(191) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `whatsapp`, `code`, `rol_id`, `status`, `google_id`, `facebook_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mido shriks', 'midoshriks36@gmail.com', '01207200622', '01550344838', '449', 1, '1', NULL, NULL, NULL, '$2y$12$UlAPuUZXi679DF3Lz2z.JujuOXH3Hmmznj4VKJkGmb6Gfdz117BPq', NULL, '2025-07-13 08:10:07', '2025-07-13 08:10:07'),
(2, 'moahmed said', 'moahmedsaid@gmail.com', '01143938378', '01200792739', '3310', 1, '1', NULL, NULL, NULL, '$2y$12$qOYaAjX2mD2Xnf8edY9KLeRNOhrpMdYAwXXVmpIGrPg1YeYT/H.GC', NULL, '2025-07-13 08:10:08', '2025-07-13 08:10:08'),
(3, 'mohamed said', 'said56235@gmail.com', '109462030414693890572', '109462030414693890572', '109462030414693890572', 2, '1', '109462030414693890572', NULL, NULL, '$2y$12$DarPDxfVsJGtJHdMqknkpOiL4bh8ZH281WUCGpx44V19Q6nbtZKB.', NULL, '2025-10-13 03:28:22', '2025-10-13 03:28:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advances`
--
ALTER TABLE `advances`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `advances_name_employee_unique` (`name_employee`),
  ADD KEY `advances_job_id_foreign` (`job_id`);

--
-- Indexes for table `big_waters`
--
ALTER TABLE `big_waters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashier_posts`
--
ALTER TABLE `cashier_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cashier_posts_employe_id_foreign` (`employe_id`);

--
-- Indexes for table `dashboards`
--
ALTER TABLE `dashboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day_offs`
--
ALTER TABLE `day_offs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `day_offs_date_unique` (`date`),
  ADD KEY `day_offs_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_job_id_foreign` (`job_id`),
  ADD KEY `employees_slide_id_foreign` (`slide_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gards`
--
ALTER TABLE `gards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pepsi_cans`
--
ALTER TABLE `pepsi_cans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pepsi_plastics`
--
ALTER TABLE `pepsi_plastics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reports_section_report_id_foreign` (`section_report_id`);

--
-- Indexes for table `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section__reports`
--
ALTER TABLE `section__reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_pdfs`
--
ALTER TABLE `setting_pdfs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `small_waters`
--
ALTER TABLE `small_waters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sweets`
--
ALTER TABLE `sweets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sweet_productions`
--
ALTER TABLE `sweet_productions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tips_employe_id_foreign` (`employe_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advances`
--
ALTER TABLE `advances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=368;

--
-- AUTO_INCREMENT for table `big_waters`
--
ALTER TABLE `big_waters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cashier_posts`
--
ALTER TABLE `cashier_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dashboards`
--
ALTER TABLE `dashboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `day_offs`
--
ALTER TABLE `day_offs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gards`
--
ALTER TABLE `gards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `pepsi_cans`
--
ALTER TABLE `pepsi_cans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pepsi_plastics`
--
ALTER TABLE `pepsi_plastics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rols`
--
ALTER TABLE `rols`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `section__reports`
--
ALTER TABLE `section__reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `setting_pdfs`
--
ALTER TABLE `setting_pdfs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `small_waters`
--
ALTER TABLE `small_waters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sweets`
--
ALTER TABLE `sweets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sweet_productions`
--
ALTER TABLE `sweet_productions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tips`
--
ALTER TABLE `tips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1679;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
