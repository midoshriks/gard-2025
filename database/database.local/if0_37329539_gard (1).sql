-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql100.infinityfree.com
-- Generation Time: Feb 09, 2025 at 07:00 AM
-- Server version: 10.6.19-MariaDB
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
-- Database: `if0_37329539_gard`
--

-- --------------------------------------------------------

--
-- Table structure for table `advances`
--

CREATE TABLE `advances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_employee` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advances`
--

INSERT INTO `advances` (`id`, `name_employee`, `amount`, `job_id`, `created_at`, `updated_at`) VALUES
(75, 'عادل زارع تفيان', 2000, 9, '2025-01-10 02:48:34', '2025-01-10 02:48:34'),
(85, 'محمود ماهر', 1200, 7, '2025-02-08 17:52:13', '2025-02-08 17:52:13');

-- --------------------------------------------------------

--
-- Table structure for table `big_waters`
--

CREATE TABLE `big_waters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_A` varchar(255) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `big_waters`
--

INSERT INTO `big_waters` (`id`, `date_A`, `first_term_B`, `come_in_C`, `convert_from_D`, `convert_to_E`, `harmony_F`, `sales_G`, `residual_H`, `last_term_I`, `disability_J`, `created_at`, `updated_at`) VALUES
(64, '2025-02-01', 93, NULL, NULL, NULL, NULL, 12, 81, 80, -1, '2025-02-02 13:10:29', '2025-02-06 18:01:48'),
(65, '2025-02-02', 80, NULL, NULL, NULL, NULL, 13, 67, 54, -13, '2025-02-04 00:34:49', '2025-02-06 18:01:58'),
(66, '2025-02-03', 54, NULL, NULL, NULL, NULL, 14, 40, 54, 14, '2025-02-04 05:28:15', '2025-02-06 18:02:09'),
(67, '2025-02-04', 54, 120, NULL, NULL, NULL, 13, 161, 160, -1, '2025-02-06 04:54:37', '2025-02-06 18:02:21'),
(68, '2025-02-05', 160, NULL, NULL, NULL, 1, 12, 147, 149, 2, '2025-02-06 04:54:54', '2025-02-06 18:02:31'),
(69, '2025-02-06', 149, NULL, NULL, NULL, NULL, 8, 141, 141, 0, '2025-02-08 15:30:17', '2025-02-09 06:36:36'),
(70, '2025-02-07', 141, NULL, NULL, NULL, NULL, 5, 136, 137, 1, '2025-02-08 15:30:27', '2025-02-09 06:36:44'),
(71, '2025-02-08', 137, NULL, NULL, NULL, NULL, NULL, 137, 126, -11, '2025-02-09 06:40:59', '2025-02-09 06:41:37');

-- --------------------------------------------------------

--
-- Table structure for table `dashboards`
--

CREATE TABLE `dashboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `job_id`, `code`, `status`, `created_at`, `updated_at`) VALUES
(117, 'احمد محمد ابراهيم', 1, '398', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(118, 'طارق دسوقي', 2, '1729', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(119, 'السيد على سعد', 3, '422', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(120, 'كريم مجدي محمد', 4, '4769', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(121, 'محمود ماهر', 7, '285', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(122, 'اسلام خليفة احمد', 7, '3936', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(123, 'هاني ثروت علي', 7, '5471', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(124, 'محمود احمد راضي', 7, '332', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(125, 'عبدالله محمد لطفى', 8, '449', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(126, 'محمد سعيد', 8, '3310', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(127, 'محمد مسعود موسي', 9, '2658', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(128, 'اسامة شوقي', 9, '3301', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(129, 'محمد علي خلف', 9, '5985', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(130, 'حسن سعد علي', 9, '6965', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(131, 'محمد عصام محمد', 9, '7278', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(132, 'ايمن محمد عبدالمنعم', 9, '8095', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(133, 'عادل زارع تفيان', 9, '8262', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(134, 'ابراهيم وائل ابراهيم', 9, '8293', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(135, 'عبدالرحمن ايمن', 9, '7781', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(136, 'محمد ختام محمد', 9, '8635', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(137, 'احمد محمد طه', 10, '269', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(138, 'حسين عيد حسن', 10, '1182', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(139, 'عبدالمجيد حمدي', 11, '6669', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(140, 'احمد محمد يوسف', 11, '3372', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(141, 'محمود رمضان', 11, '6432', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(142, 'زياد احمد محمود', 11, '4474', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(143, 'السيد علي السيد ', 11, '7338', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(144, 'حامد عفيفي حامد', 11, '8728', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(145, 'علاء حسن عبدالجواد', 11, '8780', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(146, 'محمود وسيم قناوي', 12, '489', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(147, 'احمد بسام شعبان', 13, '8196', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(148, 'كريم محمود محمد', 13, '6438', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(149, 'عبدالله عصام', 13, '3395', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(150, 'محمود جمال الدين محمد', 13, '5806', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(151, 'ادم محمود سامي', 17, '7904', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(152, 'محمود رمضان', 17, '8513', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(153, 'محمد فوزي عبدالستار', 17, '8596', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(154, 'السيد مكرم اسماعيل الصافي', 17, '8618', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(155, 'احمد محمد رمضان', 17, '8637', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(156, 'محمد احمد محمد', 17, '8690', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(157, 'كريم عادل عبد العزيز', 6, '1916', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(158, 'محمدفؤاد حفني', 6, '2915', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(159, 'كمال فرج محمد', 14, '7393', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(160, 'محمد العربي محمد', 14, '2477', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(161, 'عمرو احمد محمد', 14, '7129', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(162, 'حسام الدين حسن', 15, '2527', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(163, 'محمود محمد عبدة', 15, '4725', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(164, 'مصطفي عبدالرحيم', 15, '6681', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(165, 'مجدي يوسف', 15, '7107', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(166, 'باسم احمد محمد ', 15, '7132', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(167, 'عبد الله محمود عبد الله ', 15, '7272', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(168, 'احمد عبد المنعم عبدالحميد', 15, '7285', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(169, 'اسلام حسن علي ', 15, '7367', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(170, 'مؤمن احمد محمود', 15, '8306', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(171, 'احمد حماد محمد', 15, '8402', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(172, 'احمد السيد احمد', 15, '5317', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(173, 'السيد علي السيد', 16, '139', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(174, 'شكرى سليمان ابراهيم', 5, '304', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59'),
(175, 'محمد علاء', 18, '2395', '1', '2025-01-08 00:49:59', '2025-01-08 00:49:59');

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
-- Table structure for table `gards`
--

CREATE TABLE `gards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `A` varchar(255) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gards`
--

INSERT INTO `gards` (`id`, `A`, `B`, `C`, `D`, `E`, `F`, `G`, `H`, `I`, `J`, `created_at`, `updated_at`) VALUES
(1, '2025-01-05 20:38:22', 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '2025-01-05 18:38:22', '2025-01-05 18:38:22');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Manager', '2025-01-05 18:38:22', '2025-01-05 18:38:22'),
(2, 'Assistant Manager', '2025-01-05 18:38:22', '2025-01-05 18:38:22'),
(3, 'Supervisor', '2025-01-05 18:38:22', '2025-01-05 18:38:22'),
(4, 'Quality Control', '2025-01-05 18:38:22', '2025-01-05 18:38:22'),
(5, 'Control', '2025-01-05 18:38:22', '2025-01-05 18:38:22'),
(6, 'Supervisor Delivery', '2025-01-05 18:38:22', '2025-01-05 18:38:22'),
(7, 'Cashier', '2025-01-05 18:38:22', '2025-01-05 18:38:22'),
(8, 'Captain', '2025-01-05 18:38:22', '2025-01-05 18:38:22'),
(9, 'Waiter', '2025-01-05 18:38:22', '2025-01-05 18:38:22'),
(10, 'Front', '2025-01-05 18:38:22', '2025-01-05 18:38:22'),
(11, 'Salsagi', '2025-01-05 18:38:22', '2025-01-05 18:38:22'),
(12, 'Cook', '2025-01-05 18:38:22', '2025-01-05 18:38:22'),
(13, 'Assistant cook', '2025-01-05 18:38:22', '2025-01-05 18:38:22'),
(14, 'Taker', '2025-01-05 18:38:22', '2025-01-05 18:38:22'),
(15, 'Pilot', '2025-01-05 18:38:22', '2025-01-05 18:38:22'),
(16, 'Security', '2025-01-05 18:38:22', '2025-01-05 18:38:22'),
(17, 'Steward', '2025-01-05 18:38:22', '2025-01-05 18:38:22'),
(18, 'technical', '2025-01-05 18:38:22', '2025-01-05 18:38:22');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phrase` varchar(255) NOT NULL,
  `en` varchar(255) NOT NULL,
  `ar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `phrase`, `en`, `ar`) VALUES
(1, 'Manager', 'Manager', 'المدير'),
(2, 'Assistant Manager', 'Assistant Manager', 'م .المدير'),
(3, 'Supervisor Delivery', 'Supervisor Delivery', 'مشرف دليفري'),
(4, 'Quality Control', 'Quality Control', 'م. الجودة'),
(5, 'Control', 'Control', 'المراقب'),
(6, 'Cashier', 'Cashier', 'الكاشير'),
(7, 'Supervisor', 'Supervisor', 'مشرف'),
(8, 'Front', 'Front', 'فرشجي'),
(9, 'Salsagi', 'Salsagi', 'صلصجي'),
(10, 'Captain', 'Captain', 'كابتن'),
(11, 'Waiter', 'Waiter', 'ويتر'),
(12, 'Steward', 'Steward', 'استيوارد'),
(13, 'Gard Mime', 'Gard Mime', 'جرد ميامي'),
(14, 'Advances', 'Advances', 'Advances'),
(15, 'Create Advances', 'Create Advances', 'طلب سلفة'),
(16, 'Admin', 'Admin', 'Admin'),
(17, 'MIDO', 'MIDO', 'MIDO'),
(18, 'Log In', 'Log In', 'Log In'),
(19, 'Tools', 'Tools', 'Tools'),
(20, 'translate', 'Translate', 'Translate'),
(21, 'users', 'Users', 'Users'),
(22, 'jobs', 'Jobs', 'الوظائف'),
(23, 'Create Advance', 'Create Advance', 'انشاء سلفة'),
(24, 'chooes', 'Chooes', 'اختار'),
(25, 'DataTable Advances', 'DataTable Advances', 'DataTable Advances'),
(26, 'Add Advance', 'Add Advance', 'Add Advance'),
(27, 'print excel', 'Print excel', 'Print excel'),
(28, 'print pdf', 'Print pdf', 'Print pdf'),
(29, 'name employee', 'Name employee', 'اسم الموظف'),
(30, 'amount', 'Amount', 'المبلغ'),
(31, 'job', 'Job', 'الوظيفة'),
(32, 'Action', 'Action', 'Action'),
(33, 'Back', 'Back', 'Back'),
(34, 'count:-92', 'Count:-92', 'Count:-92'),
(35, 'count:-52', 'Count:-52', 'Count:-52'),
(36, 'count:-12', 'Count:-12', 'Count:-12'),
(37, 'count:-82', 'Count:-82', 'Count:-82'),
(38, 'Dashboard', 'Dashboard', 'Dashboard'),
(39, 'GARD', 'GARD', 'GARD'),
(40, 'pepsi cans', 'Pepsi cans', 'بيبسي كانز'),
(41, 'pepsi plastic', 'Pepsi plastic', 'بيبسى بلاستك'),
(42, 'small water', 'Small water', 'مياه صغيرة'),
(43, 'big water', 'Big water', 'مياه كبيرة'),
(44, 'Sweet', 'Sweet', 'الحلو'),
(45, 'Sweet production', 'Sweet production', 'أنتاج الحلو'),
(46, 'System', 'System', 'System'),
(47, 'Home', 'Home', 'Home'),
(48, 'Contact', 'Contact', 'Contact'),
(49, 'Please write your name', 'Please write your name', 'من فضلك أكتب اسمك'),
(50, 'Please write the advance amount', 'Please write the advance amount', 'برجاء كتابة المبلغ سلفة'),
(51, 'Please select the job type', 'Please select the job type', 'برجاء تحديد نوع الوظيفة'),
(52, 'DataTable languages', 'DataTable languages', 'DataTable languages'),
(53, 'Add language', 'Add language', 'Add language'),
(54, 'print', 'Print', 'Print'),
(55, 'phrase', 'Phrase', 'Phrase'),
(56, 'en', 'En', 'En'),
(57, 'ar', 'Ar', 'Ar'),
(58, 'phrase en', 'Phrase en', 'Phrase en'),
(59, 'phrase ar', 'Phrase ar', 'Phrase ar'),
(60, 'Close', 'Close', 'Close'),
(61, 'Save', 'Save', 'Save'),
(62, 'DataTable Jobs', 'DataTable Jobs', 'DataTable Jobs'),
(63, 'Add Jobs', 'Add Jobs', 'Add Jobs'),
(64, 'Create Job', 'Create Job', 'Create Job'),
(65, 'name', 'Name', 'Name'),
(66, 'Koshari Tahrir', 'Koshari Tahrir', 'كشري التحرير'),
(67, 'Al-Saeed Company for Restaurant Management and Operation', 'Al-Saeed Company for Restaurant Management and Operation', 'شركة السعيد لإدارة وتشغيل المطاعم'),
(68, 'Branch/Miami', 'Branch/Miami', 'فرع/ميامي'),
(69, 'To Mr. Human Resources Director', 'To Mr. Human Resources Director', 'الى السيد مدير الموارد البشرية'),
(70, 'Advance month', 'Advance month', 'سلفة شهر'),
(71, 'Branch manager', 'Branch manager', 'فرع مدير'),
(72, 'Tariq Muhammad and Souqi', 'Tariq Muhammad and Souqi', 'Tariq Muhammad and Souqi'),
(73, 'Total Users advance', 'Total Users advance', 'Total Users advance'),
(74, 'setting pdf', 'Setting pdf', 'Setting pdf'),
(75, 'DataTable setting pdf', 'DataTable setting pdf', 'DataTable setting pdf'),
(76, 'Add setting pdf', 'Add setting pdf', 'Add setting pdf'),
(77, 'Create setting pdf', 'Create setting pdf', 'Create setting pdf'),
(78, 'write month', 'Write month', 'Write month'),
(79, 'write Branch manager', 'Write Branch manager', 'Write Branch manager'),
(80, 'month', 'Month', 'شهر'),
(81, '**NO.1**', '**NO.1**', '**NO.1**'),
(82, 'Branch / Miami', 'Branch / Miami', 'فرع / ميامي'),
(83, 'Advance month /', 'Advance month /', 'سلفة  / شهر'),
(84, 'احمد ابراهيم', 'احمد ابراهيم', 'احمد ابراهيم'),
(85, 'Pdf Files', 'Pdf Files', 'Pdf Files'),
(86, 'pdf', 'Pdf', 'Pdf'),
(87, 'pdf sweet', 'Pdf sweet', 'Pdf sweet'),
(88, 'To the financial department', 'To the financial department', 'إلى الادارة المالية'),
(89, 'a cook', 'A cook', 'الطباخ'),
(90, 'Production of boxes', 'Production of boxes', 'انتاج العلب'),
(91, 'Pure milk', 'Pure milk', 'لبن صافى'),
(92, 'Date', 'Date', 'تاريخ'),
(93, '40', '40', '40'),
(94, 'Total Sweet', 'Total Sweet', 'مجموع الحلو'),
(95, 'DataTable Users', 'DataTable Users', 'DataTable Users'),
(96, 'Add Users', 'Add Users', 'Add Users'),
(97, 'Create Users', 'Create Users', 'Create Users'),
(98, 'Usrs', 'Usrs', 'Usrs'),
(99, 'active', 'Active', 'Active'),
(100, 'non-active', 'Non-active', 'Non-active'),
(101, 'email', 'Email', 'Email'),
(102, 'phone', 'Phone', 'Phone'),
(103, 'whatsapp', 'Whatsapp', 'Whatsapp'),
(104, 'code', 'Code', 'Code'),
(105, 'rol', 'Rol', 'Rol'),
(106, 'status', 'Status', 'Status'),
(107, 'المدير', 'المدير', 'المدير'),
(108, 'Cook', 'Cook', 'طباخ'),
(109, 'Assistant cook', 'Assistant cook', 'مساعد طباخ'),
(110, 'Taker', 'Taker', 'تيكر'),
(111, 'Pilot', 'Pilot', 'طيار'),
(112, 'Security', 'Security', 'أمن'),
(113, 'count:2', 'Count:2', 'Count:2'),
(114, 'count:-5', 'Count:-5', 'Count:-5'),
(115, 'count:-38', 'Count:-38', 'Count:-38'),
(116, '23', '23', '23'),
(117, '35', '35', '35'),
(118, '30', '30', '30'),
(119, '25', '25', '25'),
(120, '53', '53', '53'),
(121, '38', '38', '38'),
(122, 'count:-314', 'Count:-314', 'Count:-314'),
(123, 'count:-216', 'Count:-216', 'Count:-216'),
(124, 'count:7', 'Count:7', 'Count:7'),
(125, 'count:1', 'Count:1', 'Count:1'),
(126, 'count:179', 'Count:179', 'Count:179'),
(127, 'count:8', 'Count:8', 'Count:8'),
(128, 'count:60', 'Count:60', 'Count:60'),
(129, 'month /', 'Month /', 'شهر /'),
(130, '37', '37', '37'),
(131, 'DataTable', 'DataTable', 'DataTable'),
(132, 'PepsiCans', 'PepsiCans', 'بيبسي كانز'),
(133, 'Add', 'Add', 'Add'),
(134, 'Create', 'Create', 'Create'),
(135, 'First term', 'First term', 'اول مدة'),
(136, 'Come in', 'Come in', 'الوارد'),
(137, 'Convert From', 'Convert From', 'تحويل من'),
(138, 'Convert to', 'Convert to', 'تحويل الي'),
(139, 'Harmony', 'Harmony', 'الهالك'),
(140, 'Sales', 'Sales', 'المبيعات'),
(141, 'Residual', 'Residual', 'المتبقى'),
(142, 'last term', 'Last term', 'اخر المدة'),
(143, 'Disability', 'Disability', 'العجز'),
(144, 'PepsiPlastic', 'PepsiPlastic', 'بيبسى بلاستك'),
(145, 'Small Waters', 'Small Waters', 'مياه صغيرة'),
(146, 'Big Waters', 'Big Waters', 'Big Waters'),
(147, 'Bigaters', 'Bigaters', 'Bigaters'),
(148, 'Create Big Water', 'Create Big Water', 'Create Big Water'),
(149, 'Sweet Poding', 'Sweet Poding', 'Sweet Poding'),
(150, 'DataTable sweet productions', 'DataTable sweet productions', 'DataTable sweet productions'),
(151, 'Add sweet productions', 'Add sweet productions', 'Add sweet productions'),
(152, 'Total', 'Total', 'Total'),
(153, 'count:-1', 'Count:-1', 'Count:-1'),
(154, 'count:5', 'Count:5', 'Count:5'),
(155, 'count:135', 'Count:135', 'Count:135'),
(156, 'count:175', 'Count:175', 'Count:175'),
(157, 'count:-4', 'Count:-4', 'Count:-4'),
(158, 'count:124', 'Count:124', 'Count:124'),
(159, 'count:-25', 'Count:-25', 'Count:-25'),
(160, 'count:-81', 'Count:-81', 'Count:-81'),
(161, 'count:11', 'Count:11', 'Count:11'),
(162, 'count:-93', 'Count:-93', 'Count:-93'),
(163, 'count:-26', 'Count:-26', 'Count:-26'),
(164, 'count:-6', 'Count:-6', 'Count:-6'),
(165, 'count:-46', 'Count:-46', 'Count:-46'),
(166, 'count:-91', 'Count:-91', 'Count:-91'),
(167, 'count:-50', 'Count:-50', 'Count:-50'),
(168, 'count:-65', 'Count:-65', 'Count:-65'),
(169, 'count:14', 'Count:14', 'Count:14'),
(170, 'count:-90', 'Count:-90', 'Count:-90'),
(171, 'count:-27', 'Count:-27', 'Count:-27'),
(172, 'count:-14', 'Count:-14', 'Count:-14'),
(173, 'count:-58', 'Count:-58', 'Count:-58'),
(174, 'count:-10', 'Count:-10', 'Count:-10'),
(175, 'count:22', 'Count:22', 'Count:22'),
(176, 'Advance / month', 'Advance / month', 'سلفة / شهر'),
(177, 'أحمد إبراهيم', 'أحمد إبراهيم', 'أحمد إبراهيم'),
(178, 'count:-387', 'Count:-387', 'Count:-387'),
(179, 'count:3', 'Count:3', 'Count:3'),
(180, 'count:-32', 'Count:-32', 'Count:-32'),
(181, 'count:-298', 'Count:-298', 'Count:-298'),
(182, 'count:19', 'Count:19', 'Count:19'),
(183, 'count:26', 'Count:26', 'Count:26'),
(184, 'count:25', 'Count:25', 'Count:25'),
(185, 'count:215', 'Count:215', 'Count:215'),
(186, 'count:419', 'Count:419', 'Count:419'),
(187, 'count:23', 'Count:23', 'Count:23'),
(188, 'count:-87', 'Count:-87', 'Count:-87'),
(189, 'count:-37', 'Count:-37', 'Count:-37'),
(190, 'count:4', 'Count:4', 'Count:4'),
(191, 'count:-7', 'Count:-7', 'Count:-7'),
(192, 'count:-96', 'Count:-96', 'Count:-96'),
(193, 'count:-29', 'Count:-29', 'Count:-29'),
(194, 'count:-13', 'Count:-13', 'Count:-13'),
(195, 'count:-71', 'Count:-71', 'Count:-71'),
(196, 'count:-17', 'Count:-17', 'Count:-17'),
(197, 'count:-2', 'Count:-2', 'Count:-2'),
(198, 'count:-103', 'Count:-103', 'Count:-103'),
(199, 'count:-174', 'Count:-174', 'Count:-174'),
(200, 'count:-68', 'Count:-68', 'Count:-68'),
(201, 'count:-140', 'Count:-140', 'Count:-140'),
(202, 'count:10', 'Count:10', 'Count:10'),
(203, 'count:-79', 'Count:-79', 'Count:-79'),
(204, 'count:-22', 'Count:-22', 'Count:-22'),
(205, 'count:-8', 'Count:-8', 'Count:-8'),
(206, 'count:-34', 'Count:-34', 'Count:-34'),
(207, 'count:-3', 'Count:-3', 'Count:-3'),
(208, 'count:-59', 'Count:-59', 'Count:-59'),
(209, 'count:-31', 'Count:-31', 'Count:-31'),
(210, 'count:-20', 'Count:-20', 'Count:-20'),
(211, 'count:12', 'Count:12', 'Count:12'),
(212, '33', '33', '33'),
(213, '27', '27', '27'),
(214, 'count:73', 'Count:73', 'Count:73'),
(215, 'count:601', 'Count:601', 'Count:601'),
(216, 'count:9', 'Count:9', 'Count:9'),
(217, 'count:-28', 'Count:-28', 'Count:-28'),
(218, 'count:-61', 'Count:-61', 'Count:-61'),
(219, 'count:-15', 'Count:-15', 'Count:-15'),
(220, 'count:-150', 'Count:-150', 'Count:-150'),
(221, 'count:-51', 'Count:-51', 'Count:-51'),
(222, 'count:-23', 'Count:-23', 'Count:-23'),
(223, 'count:-144', 'Count:-144', 'Count:-144'),
(224, 'count:-70', 'Count:-70', 'Count:-70'),
(225, 'count:-80', 'Count:-80', 'Count:-80'),
(226, 'count:-187', 'Count:-187', 'Count:-187'),
(227, 'count:-33', 'Count:-33', 'Count:-33'),
(228, 'count:-147', 'Count:-147', 'Count:-147'),
(229, 'count:-30', 'Count:-30', 'Count:-30'),
(230, 'count:-16', 'Count:-16', 'Count:-16'),
(231, 'count:-74', 'Count:-74', 'Count:-74'),
(232, 'count:-164', 'Count:-164', 'Count:-164'),
(233, 'count:-156', 'Count:-156', 'Count:-156'),
(234, 'count:-44', 'Count:-44', 'Count:-44'),
(235, 'count:-11', 'Count:-11', 'Count:-11'),
(236, 'count:39', 'Count:39', 'Count:39'),
(237, 'count:-1163', 'Count:-1163', 'Count:-1163'),
(238, 'count:80', 'Count:80', 'Count:80'),
(239, 'count:-48', 'Count:-48', 'Count:-48'),
(240, 'count:-142', 'Count:-142', 'Count:-142'),
(241, 'count:-153', 'Count:-153', 'Count:-153'),
(242, 'count:-36', 'Count:-36', 'Count:-36'),
(243, 'count:41', 'Count:41', 'Count:41'),
(244, 'count:-72', 'Count:-72', 'Count:-72'),
(245, 'count:17', 'Count:17', 'Count:17'),
(246, 'count:110', 'Count:110', 'Count:110'),
(247, 'count:-54', 'Count:-54', 'Count:-54'),
(248, 'count:-9', 'Count:-9', 'Count:-9'),
(249, 'count:-78', 'Count:-78', 'Count:-78'),
(250, 'count:-19', 'Count:-19', 'Count:-19'),
(251, 'count:6', 'Count:6', 'Count:6'),
(252, 'count:-43', 'Count:-43', 'Count:-43'),
(253, 'count:-88', 'Count:-88', 'Count:-88'),
(254, 'count:-75', 'Count:-75', 'Count:-75'),
(255, 'count:-55', 'Count:-55', 'Count:-55'),
(256, 'count:21', 'Count:21', 'Count:21'),
(257, 'count:-63', 'Count:-63', 'Count:-63'),
(258, 'count:-53', 'Count:-53', 'Count:-53'),
(259, 'count:-99', 'Count:-99', 'Count:-99'),
(260, 'count:-42', 'Count:-42', 'Count:-42'),
(261, 'count:-67', 'Count:-67', 'Count:-67'),
(262, 'count:-222', 'Count:-222', 'Count:-222'),
(263, 'count:-73', 'Count:-73', 'Count:-73'),
(264, 'count:-141', 'Count:-141', 'Count:-141'),
(265, 'count:-126', 'Count:-126', 'Count:-126'),
(266, 'count:-45', 'Count:-45', 'Count:-45'),
(267, 'count:-102', 'Count:-102', 'Count:-102'),
(268, 'count:-66', 'Count:-66', 'Count:-66'),
(269, 'employees', 'Employees', 'Employees'),
(270, 'data employees', 'Data employees', 'Data employees'),
(271, 'Files', 'Files', 'Files'),
(272, 'note', 'Note', 'Note'),
(273, 'Report', 'Report', 'Report'),
(274, 'all', 'All', 'All'),
(275, 'note money', 'Note money', 'Note money'),
(276, 'maintenance', 'Maintenance', 'Maintenance'),
(277, 'note maintenance', 'Note maintenance', 'Note maintenance'),
(278, 'rols', 'Rols', 'Rols'),
(279, 'section', 'Section', 'Section'),
(280, 'Repot', 'Repot', 'Repot'),
(281, 'title', 'Title', 'Title'),
(282, 'branch', 'Branch', 'Branch'),
(283, 'body', 'Body', 'Body'),
(284, 'To', 'To', 'To'),
(285, '2024-12-19', '2024-12-19', '2024-12-19'),
(286, 'DataTable Rols', 'DataTable Rols', 'DataTable Rols'),
(287, 'Add Rol', 'Add Rol', 'Add Rol'),
(288, 'Create Rol', 'Create Rol', 'Create Rol'),
(289, 'Enter name Rol', 'Enter name Rol', 'Enter name Rol'),
(290, 'satuts', 'Satuts', 'Satuts'),
(291, 'Activity', 'Activity', 'Activity'),
(292, 'Enter name Report', 'Enter name Report', 'Enter name Report'),
(293, 'Enter name title', 'Enter name title', 'Enter name title'),
(294, 'Enter name branch', 'Enter name branch', 'Enter name branch'),
(295, 'yes', 'Yes', 'Yes'),
(296, 'miame', 'Miame', 'Miame'),
(297, '2025-01-05', '2025-01-05', '2025-01-05'),
(298, 'DataTable Employees', 'DataTable Employees', 'DataTable Employees'),
(299, 'Add Employees', 'Add Employees', 'Add Employees'),
(300, 'excel', 'Excel', 'Excel'),
(301, 'imoprt', 'Imoprt', 'Imoprt'),
(302, 'uploade', 'Uploade', 'Uploade'),
(303, 'file', 'File', 'File'),
(304, 'xsls', 'Xsls', 'Xsls'),
(305, 'uploade file', 'Uploade file', 'Uploade file'),
(306, 'marital_status', 'Marital_status', 'Marital_status'),
(307, 'appointment_date', 'Appointment_date', 'Appointment_date'),
(308, 'slide', 'Slide', 'Slide'),
(309, 'basic_salary', 'Basic_salary', 'Basic_salary'),
(310, 'uniform_last_received', 'Uniform_last_received', 'Uniform_last_received'),
(311, 'uniform_due_date', 'Uniform_due_date', 'Uniform_due_date'),
(312, 'tooles_one_last_received', 'Tooles_one_last_received', 'Tooles_one_last_received'),
(313, 'tooles_one_due_date', 'Tooles_one_due_date', 'Tooles_one_due_date'),
(314, 'tooles_two_last_received', 'Tooles_two_last_received', 'Tooles_two_last_received'),
(315, 'tooles_two_due_date', 'Tooles_two_due_date', 'Tooles_two_due_date'),
(316, 'medical_cardinary', 'Medical_cardinary', 'Medical_cardinary'),
(317, 'health_certificate', 'Health_certificate', 'Health_certificate'),
(318, 'insurance', 'Insurance', 'Insurance'),
(319, 'salary_type', 'Salary_type', 'Salary_type'),
(320, 'instead_allowance', 'Instead_allowance', 'Instead_allowance'),
(321, 'instead_communications', 'Instead_communications', 'Instead_communications'),
(322, 'User', 'User', 'User'),
(323, 'count:-151', 'Count:-151', 'Count:-151'),
(324, 'count:-242', 'Count:-242', 'Count:-242'),
(325, 'count:-64', 'Count:-64', 'Count:-64'),
(326, 'count:-101', 'Count:-101', 'Count:-101'),
(327, 'count:151', 'Count:151', 'Count:151'),
(328, 'count:-39', 'Count:-39', 'Count:-39'),
(329, 'count:-143', 'Count:-143', 'Count:-143'),
(330, 'count:-207', 'Count:-207', 'Count:-207'),
(331, 'مذكرة صيانة', 'مذكرة صيانة', 'مذكرة صيانة'),
(332, 'الى الموارد البشرية', 'الى الموارد البشرية', 'الى الموارد البشرية'),
(333, 'ميامي', 'ميامي', 'ميامي'),
(334, '2025-01-06', '2025-01-06', '2025-01-06'),
(335, 'Non-Activity', 'Non-Activity', 'Non-Activity'),
(336, 'none-active', 'None-active', 'None-active'),
(337, 'count:-137', 'Count:-137', 'Count:-137'),
(338, 'count:-158', 'Count:-158', 'Count:-158'),
(339, 'count:148', 'Count:148', 'Count:148'),
(340, 'صيانة', 'صيانة', 'صيانة'),
(341, 'عبد الرازق', 'عبد الرازق', 'عبد الرازق'),
(342, 'فرع ميامي', 'فرع ميامي', 'فرع ميامي'),
(343, 'count:-86', 'Count:-86', 'Count:-86'),
(344, 'checked', 'Checked', 'Checked'),
(345, 'delete all', 'Delete all', 'Delete all'),
(346, 'technical', 'Technical', 'Technical'),
(347, 'count:-76', 'Count:-76', 'Count:-76'),
(348, 'count:-104', 'Count:-104', 'Count:-104'),
(349, 'count:-248', 'Count:-248', 'Count:-248'),
(350, 'count:-161', 'Count:-161', 'Count:-161'),
(351, 'count:-210', 'Count:-210', 'Count:-210'),
(352, 'Enter name employee', 'Enter name employee', 'Enter name employee'),
(353, 'Enter Code', 'Enter Code', 'Enter Code'),
(354, 'count:-125', 'Count:-125', 'Count:-125'),
(355, 'count:-35', 'Count:-35', 'Count:-35'),
(356, 'count:-278', 'Count:-278', 'Count:-278'),
(357, 'count:-384', 'Count:-384', 'Count:-384'),
(358, 'count:32', 'Count:32', 'Count:32'),
(359, 'count:-290', 'Count:-290', 'Count:-290'),
(360, 'count:-221', 'Count:-221', 'Count:-221'),
(361, 'count:-154', 'Count:-154', 'Count:-154'),
(362, 'count:43', 'Count:43', 'Count:43'),
(363, 'count:61', 'Count:61', 'Count:61'),
(364, 'count:68', 'Count:68', 'Count:68'),
(365, 'count:106', 'Count:106', 'Count:106'),
(366, 'count:134', 'Count:134', 'Count:134'),
(367, 'count:156', 'Count:156', 'Count:156'),
(368, 'count:98', 'Count:98', 'Count:98'),
(369, 'count:95', 'Count:95', 'Count:95'),
(370, 'count:-247', 'Count:-247', 'Count:-247'),
(371, 'count:128', 'Count:128', 'Count:128'),
(372, 'count:87', 'Count:87', 'Count:87'),
(373, 'count:-84', 'Count:-84', 'Count:-84'),
(374, 'count:66', 'Count:66', 'Count:66'),
(375, 'count:-100', 'Count:-100', 'Count:-100'),
(376, 'count:74', 'Count:74', 'Count:74'),
(377, 'count:-182', 'Count:-182', 'Count:-182'),
(378, 'count:51', 'Count:51', 'Count:51'),
(379, 'count:-122', 'Count:-122', 'Count:-122'),
(380, 'count:-258', 'Count:-258', 'Count:-258'),
(381, 'count:18', 'Count:18', 'Count:18'),
(382, 'count:-184', 'Count:-184', 'Count:-184'),
(383, 'count:-159', 'Count:-159', 'Count:-159'),
(384, 'count:-77', 'Count:-77', 'Count:-77'),
(385, 'count:42', 'Count:42', 'Count:42'),
(386, 'count:-138', 'Count:-138', 'Count:-138'),
(387, 'count:13', 'Count:13', 'Count:13'),
(388, 'count:96', 'Count:96', 'Count:96'),
(389, 'count:-106', 'Count:-106', 'Count:-106'),
(390, 'count:75', 'Count:75', 'Count:75'),
(391, 'count:97', 'Count:97', 'Count:97'),
(392, 'count:-69', 'Count:-69', 'Count:-69'),
(393, 'count:16', 'Count:16', 'Count:16'),
(394, 'count:63', 'Count:63', 'Count:63'),
(395, 'count:-196', 'Count:-196', 'Count:-196'),
(396, 'count:47', 'Count:47', 'Count:47'),
(397, 'count:-139', 'Count:-139', 'Count:-139'),
(398, 'count:-114', 'Count:-114', 'Count:-114'),
(399, 'count:20', 'Count:20', 'Count:20'),
(400, 'count:-118', 'Count:-118', 'Count:-118'),
(401, 'count:64', 'Count:64', 'Count:64'),
(402, 'count:31', 'Count:31', 'Count:31'),
(403, 'count:65', 'Count:65', 'Count:65'),
(404, 'count:144', 'Count:144', 'Count:144'),
(405, 'count:336', 'Count:336', 'Count:336'),
(406, 'count:-112', 'Count:-112', 'Count:-112'),
(407, 'count:33', 'Count:33', 'Count:33'),
(408, 'count:154', 'Count:154', 'Count:154'),
(409, 'count:34', 'Count:34', 'Count:34'),
(410, 'count:-62', 'Count:-62', 'Count:-62'),
(411, 'count:521', 'Count:521', 'Count:521'),
(412, 'count:-230', 'Count:-230', 'Count:-230'),
(413, 'count:-155', 'Count:-155', 'Count:-155'),
(414, 'count:56', 'Count:56', 'Count:56'),
(415, 'count:-107', 'Count:-107', 'Count:-107'),
(416, 'count:71', 'Count:71', 'Count:71'),
(417, 'count:-98', 'Count:-98', 'Count:-98'),
(418, 'count:-254', 'Count:-254', 'Count:-254'),
(419, 'count:-130', 'Count:-130', 'Count:-130'),
(420, 'count:35', 'Count:35', 'Count:35'),
(421, 'count:-24', 'Count:-24', 'Count:-24'),
(422, 'count:-120', 'Count:-120', 'Count:-120'),
(423, 'count:-89', 'Count:-89', 'Count:-89'),
(424, 'count:72', 'Count:72', 'Count:72'),
(425, 'count:37', 'Count:37', 'Count:37'),
(426, 'count:-195', 'Count:-195', 'Count:-195'),
(427, 'count:40', 'Count:40', 'Count:40'),
(428, '43', '43', '43'),
(429, '22', '22', '22'),
(430, 'count:-299', 'Count:-299', 'Count:-299'),
(431, 'count:-276', 'Count:-276', 'Count:-276'),
(432, 'count:-337', 'Count:-337', 'Count:-337'),
(433, 'count:-148', 'Count:-148', 'Count:-148'),
(434, 'count:118', 'Count:118', 'Count:118'),
(435, 'count:150', 'Count:150', 'Count:150'),
(436, 'count:-163', 'Count:-163', 'Count:-163'),
(437, 'count:-109', 'Count:-109', 'Count:-109'),
(438, 'count:-220', 'Count:-220', 'Count:-220'),
(439, 'count:52', 'Count:52', 'Count:52'),
(440, 'count:28', 'Count:28', 'Count:28'),
(441, 'count:115', 'Count:115', 'Count:115'),
(442, 'count:-135', 'Count:-135', 'Count:-135'),
(443, 'count:-402', 'Count:-402', 'Count:-402'),
(444, 'count:-296', 'Count:-296', 'Count:-296'),
(445, 'count:-530', 'Count:-530', 'Count:-530'),
(446, 'count:-602', 'Count:-602', 'Count:-602'),
(447, 'count:-386', 'Count:-386', 'Count:-386'),
(448, 'count:-454', 'Count:-454', 'Count:-454'),
(449, 'count:-502', 'Count:-502', 'Count:-502'),
(450, 'count:-389', 'Count:-389', 'Count:-389'),
(451, 'count:-208', 'Count:-208', 'Count:-208'),
(452, 'count:-94', 'Count:-94', 'Count:-94'),
(453, 'count:27', 'Count:27', 'Count:27'),
(454, 'count:91', 'Count:91', 'Count:91'),
(455, 'count:-41', 'Count:-41', 'Count:-41'),
(456, 'count:-350', 'Count:-350', 'Count:-350'),
(457, 'count:-277', 'Count:-277', 'Count:-277'),
(458, 'count:-18', 'Count:-18', 'Count:-18'),
(459, 'count:84', 'Count:84', 'Count:84'),
(460, 'count:44', 'Count:44', 'Count:44'),
(461, 'count:-123', 'Count:-123', 'Count:-123'),
(462, 'count:-146', 'Count:-146', 'Count:-146'),
(463, 'count:-302', 'Count:-302', 'Count:-302'),
(464, 'count:99', 'Count:99', 'Count:99');

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
(818, '2014_10_12_000000_create_users_table', 1),
(819, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(820, '2019_08_19_000000_create_failed_jobs_table', 1),
(821, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(822, '2024_10_02_090359_create_gards_table', 1),
(823, '2024_10_03_215434_create_dashboards_table', 1),
(824, '2024_10_03_221330_create_sweet_productions_table', 1),
(825, '2024_10_04_214332_create_pepsi_cans_table', 1),
(826, '2024_10_05_230508_create_pepsi_plastics_table', 1),
(827, '2024_10_06_222510_create_small_waters_table', 1),
(828, '2024_10_06_232944_create_big_waters_table', 1),
(829, '2024_10_12_230555_create_sweets_table', 1),
(830, '2024_10_13_220713_create_languages_table', 1),
(831, '2024_10_20_093848_create_jobs_table', 1),
(832, '2024_10_21_092229_create_advances_table', 1),
(833, '2024_11_14_023251_create_setting_pdfs_table', 1),
(834, '2024_11_24_123516_create_rols_table', 1),
(835, '2024_11_28_234925_create_employees_table', 1),
(836, '2024_12_15_212101_create_section__reports_table', 1),
(837, '2024_12_15_213316_create_reports_table', 1);

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
-- Table structure for table `pepsi_cans`
--

CREATE TABLE `pepsi_cans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_A` varchar(255) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pepsi_cans`
--

INSERT INTO `pepsi_cans` (`id`, `date_A`, `first_term_B`, `come_in_C`, `convert_from_D`, `convert_to_E`, `harmony_F`, `sales_G`, `residual_H`, `last_term_I`, `disability_J`, `created_at`, `updated_at`) VALUES
(3, '2024-12-01', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-04 00:27:50', '2024-12-04 00:27:50'),
(4, '2024-12-02', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-04 00:28:12', '2024-12-04 00:28:12'),
(5, '2024-12-03', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-04 00:28:50', '2024-12-04 00:28:50'),
(6, '2024-12-03', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-04 15:06:57', '2024-12-04 15:06:57'),
(7, '2024-12-04', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-05 04:13:26', '2024-12-07 04:54:34'),
(8, '2024-12-05', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-05 04:13:27', '2024-12-05 04:13:27'),
(9, '2024-12-06', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-07 04:54:52', '2024-12-07 04:54:52'),
(10, '2024-12-07', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-08 04:51:05', '2024-12-08 04:51:05'),
(11, '2024-12-08', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-09 18:07:52', '2024-12-09 18:07:52'),
(12, '2024-12-09', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-10 15:36:26', '2024-12-10 15:39:38'),
(13, '2024-12-10', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-11 15:44:31', '2024-12-11 15:44:31'),
(14, '2024-12-11', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-12 04:06:49', '2024-12-12 04:06:49'),
(15, '2024-12-12', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-13 04:50:55', '2024-12-13 04:50:55'),
(16, '2024-12-13', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-14 04:10:01', '2024-12-14 04:10:01'),
(17, '2024-12-14', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-15 18:02:28', '2024-12-15 18:02:28'),
(18, '2024-12-15', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-16 06:05:58', '2024-12-16 06:05:58'),
(19, '2024-12-16', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-17 15:31:07', '2024-12-17 15:31:07'),
(20, '2024-12-18', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-19 04:15:34', '2024-12-19 04:15:34'),
(21, '2024-12-19', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-20 04:19:39', '2024-12-20 04:19:39'),
(22, '2024-12-20', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-21 22:03:20', '2024-12-21 22:03:20'),
(23, '2024-12-21', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-21 22:03:28', '2024-12-21 22:03:28'),
(24, '2024-12-22', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-22 23:24:47', '2024-12-22 23:24:47'),
(25, '2024-12-23', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-24 05:10:49', '2024-12-24 05:10:49'),
(26, '2024-12-24', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-25 04:16:15', '2024-12-25 04:16:15'),
(27, '2024-12-27', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-28 04:23:31', '2024-12-28 04:23:31'),
(28, '2024-12-28', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-29 03:54:45', '2024-12-29 03:54:45'),
(29, '2024-12-29', 72, NULL, NULL, NULL, NULL, NULL, 72, 72, 0, '2024-12-30 04:00:33', '2024-12-30 04:00:33'),
(30, '2024-12-30', 72, NULL, NULL, 72, NULL, NULL, 0, 0, 0, '2024-12-31 04:48:39', '2024-12-31 04:48:39'),
(31, '2024-12-31', 0, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '2025-01-01 05:00:15', '2025-01-01 05:00:15'),
(32, '2025-01-01', 0, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '2025-01-02 19:43:25', '2025-01-02 19:43:25'),
(33, '2025-01-06', 0, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '2025-01-06 04:01:35', '2025-01-06 04:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `pepsi_plastics`
--

CREATE TABLE `pepsi_plastics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_A` varchar(255) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pepsi_plastics`
--

INSERT INTO `pepsi_plastics` (`id`, `date_A`, `first_term_B`, `come_in_C`, `convert_from_D`, `convert_to_E`, `harmony_F`, `sales_G`, `residual_H`, `last_term_I`, `disability_J`, `created_at`, `updated_at`) VALUES
(66, '2025-02-01', 606, NULL, NULL, NULL, NULL, 113, 493, 495, 2, '2025-02-02 13:08:54', '2025-02-06 17:56:59'),
(67, '2025-02-02', 495, 240, NULL, NULL, NULL, 93, 642, 641, -1, '2025-02-04 00:32:58', '2025-02-06 17:57:13'),
(68, '2025-02-03', 641, NULL, NULL, NULL, NULL, 88, 553, 553, 0, '2025-02-04 05:27:40', '2025-02-06 17:57:23'),
(69, '2025-02-04', 553, 252, NULL, NULL, NULL, 114, 691, 677, -14, '2025-02-06 04:53:05', '2025-02-06 17:57:34'),
(70, '2025-02-05', 677, NULL, NULL, NULL, NULL, 85, 592, 605, 13, '2025-02-06 04:53:22', '2025-02-06 17:57:52'),
(71, '2025-02-06', 605, 156, 12, NULL, NULL, 64, 709, 710, 1, '2025-02-08 15:21:17', '2025-02-09 06:31:31'),
(72, '2025-02-07', 710, NULL, 12, NULL, NULL, 82, 640, 639, -1, '2025-02-08 15:22:08', '2025-02-09 06:31:48'),
(73, '2025-02-08', 639, NULL, NULL, NULL, NULL, NULL, 639, 555, -84, '2025-02-09 06:39:07', '2025-02-09 06:39:07');

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
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT 'title',
  `branch` varchar(255) NOT NULL DEFAULT 'Branch',
  `date` date NOT NULL,
  `body` text NOT NULL,
  `section_report_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `name`, `title`, `branch`, `date`, `body`, `section_report_id`, `created_at`, `updated_at`) VALUES
(1, 'note money', 'title', 'branch', '2024-12-19', 'here masaage', 1, '2025-01-05 18:38:23', '2025-01-05 18:38:23'),
(2, 'note maintenance', 'title', 'branch', '2024-12-19', 'here masaage', 2, '2025-01-05 18:38:23', '2025-01-05 18:38:23'),
(3, 'mido', 'yes', 'miame', '2025-01-05', '<p style=\"text-align: center;\"><span style=\"color: rgb(57, 123, 33);\">server test</span><span style=\"font-family: Tahoma;\">﻿</span></p>', 1, '2025-01-06 02:47:46', '2025-01-06 02:59:17'),
(4, 'مذكرة صيانة', 'الى الموارد البشرية', 'ميامي', '2025-01-06', '<p style=\"text-align: right;\"><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">﻿</span><span style=\"color: rgb(0, 255, 0); background-color: rgb(156, 198, 239);\">برجاء اراسال فنى غاز لتصليح الماكينة&nbsp;</span></p>', 1, '2025-01-06 04:48:10', '2025-01-06 15:06:03'),
(5, 'صيانة', 'عبد الرازق', 'فرع ميامي', '2025-01-06', '<u><b>تم اصلاح ماكينة رقم ١١٣٣٤ و هي الآن تعمل بحالة جيدة&nbsp;</b></u>', 1, '2025-01-06 16:44:27', '2025-01-06 16:44:27');

-- --------------------------------------------------------

--
-- Table structure for table `rols`
--

CREATE TABLE `rols` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rols`
--

INSERT INTO `rols` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '1', '2025-01-05 18:38:20', '2025-01-05 18:38:20'),
(2, 'Manager', '1', '2025-01-05 18:38:20', '2025-01-05 18:38:20'),
(3, 'user', '1', '2025-01-05 18:38:20', '2025-01-05 18:38:20'),
(4, 'Guset', '1', '2025-01-05 18:38:20', '2025-01-05 18:38:20');

-- --------------------------------------------------------

--
-- Table structure for table `section__reports`
--

CREATE TABLE `section__reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section__reports`
--

INSERT INTO `section__reports` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'note', '1', '2025-01-05 18:38:23', '2025-01-05 18:38:23'),
(2, 'maintenance', '1', '2025-01-05 18:38:23', '2025-01-05 18:38:23');

-- --------------------------------------------------------

--
-- Table structure for table `setting_pdfs`
--

CREATE TABLE `setting_pdfs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `month` varchar(255) NOT NULL,
  `branch_manager` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting_pdfs`
--

INSERT INTO `setting_pdfs` (`id`, `month`, `branch_manager`, `created_at`, `updated_at`) VALUES
(1, 'يناير', 'أحمد إبراهيم', '2025-01-06 04:44:55', '2025-01-06 04:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `small_waters`
--

CREATE TABLE `small_waters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_A` varchar(255) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `small_waters`
--

INSERT INTO `small_waters` (`id`, `date_A`, `first_term_B`, `come_in_C`, `convert_from_D`, `convert_to_E`, `harmony_F`, `sales_G`, `residual_H`, `last_term_I`, `disability_J`, `created_at`, `updated_at`) VALUES
(65, '2025-02-01', 182, NULL, NULL, NULL, NULL, 24, 158, 158, 0, '2025-02-02 13:09:26', '2025-02-06 17:58:32'),
(66, '2025-02-02', 158, NULL, NULL, NULL, NULL, 37, 121, 121, 0, '2025-02-04 00:33:45', '2025-02-06 17:58:49'),
(67, '2025-02-03', 121, NULL, NULL, NULL, NULL, 27, 94, 93, -1, '2025-02-04 05:27:54', '2025-02-06 17:59:00'),
(68, '2025-02-04', 93, 200, NULL, NULL, NULL, 41, 252, 252, 0, '2025-02-06 04:53:51', '2025-02-06 17:59:20'),
(69, '2025-02-05', 252, NULL, NULL, NULL, NULL, 23, 229, 229, 0, '2025-02-06 04:54:01', '2025-02-06 17:59:30'),
(70, '2025-02-06', 229, NULL, NULL, NULL, NULL, 26, 203, 203, 0, '2025-02-08 15:22:31', '2025-02-09 06:36:03'),
(71, '2025-02-07', 203, NULL, NULL, NULL, NULL, 21, 182, 182, 0, '2025-02-08 15:22:54', '2025-02-09 06:36:12'),
(72, '2025-02-08', 182, NULL, NULL, NULL, NULL, NULL, 182, 130, -52, '2025-02-09 06:39:47', '2025-02-09 06:39:47');

-- --------------------------------------------------------

--
-- Table structure for table `sweets`
--

CREATE TABLE `sweets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_A` varchar(255) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sweets`
--

INSERT INTO `sweets` (`id`, `date_A`, `first_term_B`, `come_in_C`, `convert_from_D`, `convert_to_E`, `harmony_F`, `sales_G`, `residual_H`, `last_term_I`, `disability_J`, `created_at`, `updated_at`) VALUES
(34, '2025-01-01', 32, 158, NULL, NULL, NULL, 75, 115, 113, -2, '2025-01-02 19:46:28', '2025-01-05 16:03:20'),
(35, '2025-01-02', 113, NULL, NULL, NULL, NULL, 73, 40, 39, -1, '2025-01-03 05:04:18', '2025-01-05 16:03:32'),
(36, '2025-01-03', 39, 190, NULL, NULL, NULL, 49, 180, 183, 3, '2025-01-06 04:29:56', '2025-01-06 15:15:59'),
(37, '2025-01-04', 183, NULL, NULL, NULL, NULL, 103, 80, 79, -1, '2025-01-06 04:30:53', '2025-01-06 15:16:09'),
(38, '2025-01-05', 79, 175, NULL, NULL, NULL, 67, 187, 190, 3, '2025-01-06 04:31:33', '2025-01-11 17:12:52'),
(39, '2025-01-06', 190, NULL, NULL, NULL, NULL, 73, 117, 94, -23, '2025-01-07 04:09:25', '2025-01-11 17:13:02'),
(40, '2025-01-07', 94, 160, NULL, NULL, NULL, 71, 183, 205, 22, '2025-01-08 03:47:02', '2025-01-11 17:13:11'),
(41, '2025-01-08', 205, NULL, NULL, NULL, NULL, 70, 135, 137, 2, '2025-01-09 02:56:06', '2025-01-11 17:13:23'),
(42, '2025-01-09', 137, 80, NULL, NULL, 44, 68, 105, 150, 45, '2025-01-11 04:59:53', '2025-01-11 17:17:41'),
(43, '2025-01-10', 150, NULL, NULL, NULL, NULL, 52, 98, 57, -41, '2025-01-11 17:16:12', '2025-01-16 17:10:07'),
(44, '2025-01-11', 57, 130, NULL, NULL, NULL, 68, 119, 121, 2, '2025-01-12 03:44:47', '2025-01-12 16:34:02'),
(45, '2025-01-12', 121, NULL, NULL, NULL, NULL, 46, 75, 73, -2, '2025-01-13 03:30:25', '2025-01-15 21:23:29'),
(46, '2025-01-13', 73, 130, NULL, NULL, NULL, 88, 115, 120, 5, '2025-01-14 19:35:02', '2025-01-15 21:23:40'),
(47, '2025-01-14', 120, NULL, NULL, NULL, NULL, 63, 57, 58, 1, '2025-01-15 03:47:00', '2025-01-16 01:04:13'),
(48, '2025-01-15', 58, 130, NULL, NULL, NULL, 68, 120, 121, 1, '2025-01-16 03:15:45', '2025-01-16 17:10:16'),
(49, '2025-01-16', 121, NULL, NULL, NULL, NULL, 85, 36, 38, 2, '2025-01-17 05:19:48', '2025-01-17 17:57:46'),
(50, '2025-01-17', 38, 130, NULL, NULL, NULL, 85, 83, 88, 5, '2025-01-18 04:27:59', '2025-01-19 16:36:56'),
(51, '2025-01-18', 88, NULL, NULL, NULL, NULL, 74, 14, 13, -1, '2025-01-19 05:35:04', '2025-01-19 16:59:03'),
(52, '2025-01-19', 13, 160, NULL, NULL, NULL, 64, 109, 118, 9, '2025-01-20 14:21:49', '2025-01-21 03:51:25'),
(53, '2025-01-20', 118, NULL, NULL, NULL, NULL, 94, 24, 28, 4, '2025-01-21 03:51:00', '2025-01-23 04:00:48'),
(54, '2025-01-21', 28, 157, NULL, NULL, NULL, 65, 120, 84, -36, '2025-01-23 04:01:10', '2025-01-23 04:01:58'),
(55, '2025-01-22', 84, NULL, NULL, NULL, NULL, 65, 19, 56, 37, '2025-01-23 04:02:52', '2025-01-24 04:28:55'),
(56, '2025-01-23', 56, 160, NULL, NULL, NULL, 69, 147, 120, -27, '2025-01-24 04:36:05', '2025-01-25 04:35:36'),
(57, '2025-01-24', 120, NULL, NULL, NULL, NULL, 70, 50, 75, 25, '2025-01-25 04:35:16', '2025-01-26 03:38:50'),
(58, '2025-01-25', 75, 160, NULL, NULL, NULL, 65, 170, 175, 5, '2025-01-26 03:38:28', '2025-01-27 17:03:53'),
(59, '2025-01-26', 175, NULL, NULL, NULL, NULL, 92, 83, 83, 0, '2025-01-27 17:03:44', '2025-01-28 03:54:44'),
(60, '2025-01-27', 83, 138, NULL, NULL, NULL, 113, 108, 111, 3, '2025-01-28 03:55:22', '2025-02-01 03:59:34'),
(61, '2025-01-28', 111, NULL, NULL, NULL, NULL, 108, 3, 0, -3, '2025-01-29 16:25:30', '2025-02-01 03:59:55'),
(62, '2025-01-29', 0, 152, NULL, NULL, NULL, 96, 56, 60, 4, '2025-01-31 17:22:49', '2025-02-01 04:00:26'),
(63, '2025-01-30', 60, NULL, NULL, NULL, NULL, 55, 5, 5, 0, '2025-02-01 04:01:10', '2025-02-01 04:01:10'),
(64, '2025-01-31', 5, 178, NULL, NULL, NULL, 104, 79, 79, 0, '2025-02-02 13:11:16', '2025-02-06 18:03:06'),
(65, '2025-02-01', 79, NULL, NULL, NULL, NULL, 73, 6, 7, 1, '2025-02-02 13:11:25', '2025-02-06 18:03:16'),
(66, '2025-02-02', 7, 190, NULL, NULL, NULL, 90, 107, 111, 4, '2025-02-04 00:36:06', '2025-02-06 18:03:31'),
(67, '2025-02-03', 111, NULL, NULL, NULL, NULL, 75, 36, 36, 0, '2025-02-04 05:30:54', '2025-02-06 18:03:40'),
(68, '2025-02-04', 36, 200, NULL, NULL, NULL, 94, 142, 146, 4, '2025-02-06 04:55:36', '2025-02-06 18:03:50'),
(69, '2025-02-05', 146, NULL, NULL, NULL, NULL, 69, 77, 78, 1, '2025-02-06 04:55:49', '2025-02-06 18:04:02'),
(70, '2025-02-06', 78, 190, NULL, NULL, 7, 77, 184, 188, 4, '2025-02-08 15:31:24', '2025-02-09 06:37:28'),
(71, '2025-02-07', 188, NULL, NULL, NULL, NULL, 102, 86, 87, 1, '2025-02-08 15:31:43', '2025-02-09 06:37:53'),
(72, '2025-02-08', 87, 140, NULL, NULL, NULL, NULL, 227, 149, -78, '2025-02-09 06:42:17', '2025-02-09 06:42:58');

-- --------------------------------------------------------

--
-- Table structure for table `sweet_productions`
--

CREATE TABLE `sweet_productions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_A` varchar(255) NOT NULL,
  `pure_milka_B` int(11) DEFAULT 0,
  `boxes_C` int(11) DEFAULT NULL,
  `convert_from_D` int(11) DEFAULT NULL,
  `convert_to_E` int(11) DEFAULT NULL,
  `harmony_F` int(11) DEFAULT NULL,
  `a_cook_G` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sweet_productions`
--

INSERT INTO `sweet_productions` (`id`, `date_A`, `pure_milka_B`, `boxes_C`, `convert_from_D`, `convert_to_E`, `harmony_F`, `a_cook_G`, `created_at`, `updated_at`) VALUES
(50, '2025-02-02', 48, 190, NULL, NULL, NULL, 'احمد بسام', '2025-02-02 13:12:03', '2025-02-02 13:12:03'),
(51, '2025-02-04', 48, 200, NULL, NULL, NULL, 'احمد بسام', '2025-02-04 05:31:27', '2025-02-04 05:31:27'),
(52, '2025-02-06', 43, 190, NULL, NULL, NULL, 'كريم محمود', '2025-02-06 04:57:24', '2025-02-06 04:57:24'),
(53, '2025-02-08', 33, 140, NULL, NULL, NULL, 'محمود وسيم', '2025-02-08 15:32:46', '2025-02-08 15:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `rol_id` bigint(20) NOT NULL DEFAULT 0,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `google_id` varchar(255) DEFAULT NULL,
  `facebook_id` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `whatsapp`, `code`, `rol_id`, `status`, `google_id`, `facebook_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mido shriks', 'midoshriks36@gmail.com', '01207200622', '01550344838', '449', 1, '1', NULL, NULL, NULL, '$2y$12$3deewPV7wjQ7YQIqahq33eByGqIsqBMU01klnI9YvSceYrf1ZiHNO', NULL, '2025-01-05 18:38:21', '2025-01-05 18:38:21'),
(2, 'moahmed said', 'moahmedsaid@gmail.com', '01143938378', '01200792739', '3310', 1, '1', NULL, NULL, NULL, '$2y$12$qNN9XhDfjdEnkIk1n65nNOnJ3NjTqvq241RxzC8bAwFjXYSY3AASu', NULL, '2025-01-05 18:38:22', '2025-01-05 18:38:22'),
(3, 'mido shriks', 'midoshriks@gmail.com', '113945055048611561558', '113945055048611561558', '113945055048611561558', 2, '1', '113945055048611561558', NULL, NULL, '$2y$12$GHBhrTex4pBIsi8XeAE5ju5FJjr0RrrhtTv4OmJOauge7qvkVnuXO', NULL, '2025-01-06 04:06:20', '2025-01-06 04:06:20'),
(4, 'mohamed said', 'said56235@gmail.com', '109462030414693890572', '109462030414693890572', '109462030414693890572', 2, '1', '109462030414693890572', NULL, NULL, '$2y$12$V4hV/676x8DY3VG8PKX6H.Vnb.4e8g4zDN3nbFV1vBKjOe6LQIzYC', NULL, '2025-01-06 04:07:24', '2025-01-06 04:07:24'),
(5, 'Tarek Dsouky', 'tarekdsouky38@gmail.com', '116181633949290271919', '116181633949290271919', '116181633949290271919', 2, '1', '116181633949290271919', NULL, NULL, '$2y$12$MHeWVy8ZAJScpGHZ8fqIxervqKVDRWhpLVxTDhvDhBtxl3sbZTfWy', NULL, '2025-01-06 16:41:31', '2025-01-06 16:41:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advances`
--
ALTER TABLE `advances`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_employee` (`name_employee`),
  ADD KEY `advances_job_id_foreign` (`job_id`);

--
-- Indexes for table `big_waters`
--
ALTER TABLE `big_waters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboards`
--
ALTER TABLE `dashboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_job_id_foreign` (`job_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `big_waters`
--
ALTER TABLE `big_waters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `dashboards`
--
ALTER TABLE `dashboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=465;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=838;

--
-- AUTO_INCREMENT for table `pepsi_cans`
--
ALTER TABLE `pepsi_cans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pepsi_plastics`
--
ALTER TABLE `pepsi_plastics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rols`
--
ALTER TABLE `rols`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `section__reports`
--
ALTER TABLE `section__reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `setting_pdfs`
--
ALTER TABLE `setting_pdfs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `small_waters`
--
ALTER TABLE `small_waters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `sweets`
--
ALTER TABLE `sweets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `sweet_productions`
--
ALTER TABLE `sweet_productions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advances`
--
ALTER TABLE `advances`
  ADD CONSTRAINT `advances_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_section_report_id_foreign` FOREIGN KEY (`section_report_id`) REFERENCES `section__reports` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
