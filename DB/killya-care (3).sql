-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 08:27 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `killya-care`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `contact_id` int(11) NOT NULL,
  `answers` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `contact_id`, `answers`, `created_at`, `updated_at`) VALUES
(1, 2, 'hi man', '2023-04-22 17:23:10', '2023-04-22 17:23:10'),
(2, 3, 'hello ser', '2023-04-22 17:23:22', '2023-04-22 17:23:22'),
(3, 6, 'تفضل على العيادة', '2023-04-24 14:43:13', '2023-04-24 14:43:13'),
(4, 7, 'الحمد الله', '2023-04-24 14:44:46', '2023-04-24 14:44:46');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` datetime NOT NULL,
  `appointment` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `l_name`, `dob`, `appointment`, `phone`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'sam sam', 'sam', '2023-04-20 00:00:00', '2023-04-16 18:13:00', '0569729873', '2023-04-04 15:14:24', '2023-04-04 15:14:24', NULL),
(2, 'sam sam', 'sam', '2023-04-20 00:00:00', '2023-04-21 18:14:00', '0569729873', '2023-04-04 15:14:56', '2023-04-04 15:14:56', NULL),
(3, 'sam sam', 'sam', '2023-04-20 00:00:00', '2023-04-28 10:15:00', '0569729873', '2023-04-04 15:15:45', '2023-04-04 15:15:45', NULL),
(4, 'rami sol', 'rami', '2023-04-20 00:00:00', '2023-04-08 18:39:00', '0522987528', '2023-04-04 15:39:45', '2023-04-04 15:39:45', NULL),
(5, 'rami sol', 'as', '2023-04-14 00:00:00', '2023-04-04 10:40:00', '0522987528', '2023-04-04 15:40:38', '2023-04-04 15:40:38', NULL),
(6, 'sdadsasd', 'SDasd', '2023-04-10 00:00:00', '2023-04-28 19:43:00', '75852564', '2023-04-04 16:43:20', '2023-04-04 16:43:20', NULL),
(7, 'sam sam', 'sam', '2023-04-20 00:00:00', '2023-04-22 19:43:00', '0569729873', '2023-04-04 16:43:50', '2023-04-04 16:43:50', 2),
(8, 'sam sam', 'sam', '2023-04-20 00:00:00', '2023-04-20 19:53:00', '0569729873', '2023-04-04 16:53:15', '2023-04-04 16:53:15', 2),
(9, 'sam sam', 'sam', '2023-04-20 00:00:00', '2023-05-01 20:08:00', '0569729873', '2023-04-04 17:09:06', '2023-04-04 17:09:06', 2),
(10, 'sam sam', 'sam', '2023-04-20 00:00:00', '2023-08-24 20:09:00', '0569729873', '2023-04-04 17:10:00', '2023-04-04 17:10:00', 2),
(11, 'rami sol', 'rami', '2023-04-20 00:00:00', '2023-04-01 20:19:00', '0522987528', '2023-04-04 17:19:43', '2023-04-04 17:19:43', 3),
(12, 'rami sol', 'rami', '2023-04-20 00:00:00', '2023-05-01 20:20:00', '0522987528', '2023-04-04 17:20:46', '2023-04-04 17:20:46', 3),
(13, 'sam sam', 'sam', '2023-04-20 00:00:00', '2023-04-20 20:46:00', '0569729873', '2023-04-04 17:46:21', '2023-04-04 17:46:21', 2),
(14, 'fff', 'ddd', '2023-04-21 00:00:00', '2023-04-13 19:23:00', '0569729873', '2023-04-22 16:23:32', '2023-04-22 16:23:32', 5),
(15, 'fff', 'ddd', '2023-04-21 00:00:00', '2023-04-03 19:23:00', '0569729873', '2023-04-22 16:23:36', '2023-04-22 16:23:36', 5),
(16, 'fff', 'ddd', '2023-04-21 00:00:00', '2023-04-21 19:29:00', '0569729873', '2023-04-22 16:29:52', '2023-04-22 16:29:52', 5),
(17, 'fff', 'ddd', '2023-04-21 00:00:00', '2023-03-28 19:43:00', '0569729873', '2023-04-22 16:43:29', '2023-04-22 16:43:29', 5),
(18, 'انس', 'ظاهر', '2023-03-27 00:00:00', '2023-04-06 17:32:00', '0569729873', '2023-04-24 14:32:38', '2023-04-24 14:32:38', NULL),
(19, 'fff', 'ddd', '2023-04-21 00:00:00', '2023-04-25 18:20:00', '0569729873', '2023-04-24 15:20:08', '2023-04-24 15:20:08', 5);

-- --------------------------------------------------------

--
-- Table structure for table `a_medicals`
--

CREATE TABLE `a_medicals` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sub_title` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a_medicals`
--

INSERT INTO `a_medicals` (`id`, `title`, `image`, `body`, `created_at`, `updated_at`, `sub_title`) VALUES
(1, 'أسباب الفشل الكلوي', 'a-medicals\\April2023\\C4v6lMYUTLvJX0TH1JNi.png', 'حدث الفشل الكلوي الحاد عندما تعجز الكلى فجأةً عن تنقية الفضلات من الدم. وعندما تفقد الكليتان وظيفتهما على القيام بعملية التنقية، فقد تتزايد مستويات الفضلات الخطرة مما قد يتسبب في إحداث خلل بالتركيب الكيميائي للدم. حدث الفشل الكلوي الحاد عندما تعجز الكلى فجأةً عن تنقية الفضلات من الدم. وعندما تفقد الكليتان وظيفتهما على القيام بعملية التنقية، فقد تتزايد مستويات الفضلات الخطرة مما قد يتسبب في إحداث خلل بالتركيب الكيميائي للدم. حدث الفشل الكلوي الحاد عندما تعجز الكلى فجأةً عن تنقية الفضلات من الدم. وعندما تفقد الكليتان وظيفتهما على القيام بعملية التنقية، فقد تتزايد مستويات الفضلات الخطرة مما قد يتسبب في إحداث خلل بالتركيب الكيميائي للدم. حدث الفشل الكلوي الحاد عندما تعجز الكلى فجأةً عن تنقية الفضلات من الدم. وعندما تفقد الكليتان وظيفتهما على القيام بعملية التنقية، فقد تتزايد مستويات الفضلات الخطرة مما قد يتسبب في إحداث خلل بالتركيب الكيميائي للدم. حدث الفشل الكلوي الحاد عندما تعجز الكلى فجأةً عن تنقية الفضلات من الدم. وعندما تفقد الكليتان وظيفتهما على القيام بعملية التنقية، فقد تتزايد مستويات الفضلات الخطرة مما قد يتسبب في إحداث خلل بالتركيب الكيميائي للدم. حدث الفشل الكلوي الحاد عندما تعجز الكلى فجأةً عن تنقية الفضلات من الدم. وعندما تفقد الكليتان وظيفتهما على القيام بعملية التنقية، فقد تتزايد مستويات الفضلات الخطرة مما قد يتسبب في إحداث خلل بالتركيب الكيميائي للدم.', '2023-04-22 17:56:12', '2023-04-22 17:57:53', 'حدث الفشل الكلوي الحاد عندما تعجز الكلى فجأةً عن تنقية الفضلات من الدم. وعندما تفقد الكليتان وظيفتهما على القيام بعملية التنقية، فقد تتزايد مستويات الفضلات الخطرة مما قد يتسبب في إحداث خلل بالتركيب الكيميائي للدم.'),
(2, '\'حقوق الطفل في مؤسسة التأمين الوطني الإسرائيلية', 'a-medicals\\April2023\\XE7Mck6AmUtpsfXCbiRl.png', 'حدث الفشل الكلوي الحاد عندما تعجز الكلى فجأةً عن تنقية الفضلات من الدم. وعندما تفقد الكليتان وظيفتهما على القيام بعملية التنقية، فقد تتزايد مستويات الفضلات الخطرة مما قد يتسبب في إحداث خلل بالتركيب الكيميائي للدم.\r\nحدث الفشل الكلوي الحاد عندما تعجز الكلى فجأةً عن تنقية الفضلات من الدم. وعندما تفقد الكليتان وظيفتهما على القيام بعملية التنقية، فقد تتزايد مستويات الفضلات الخطرة مما قد يتسبب في إحداث خلل بالتركيب الكيميائي للدم.\r\nحدث الفشل الكلوي الحاد عندما تعجز الكلى فجأةً عن تنقية الفضلات من الدم. وعندما تفقد الكليتان وظيفتهما على القيام بعملية التنقية، فقد تتزايد مستويات الفضلات الخطرة مما قد يتسبب في إحداث خلل بالتركيب الكيميائي للدم.\r\nحدث الفشل الكلوي الحاد عندما تعجز الكلى فجأةً عن تنقية الفضلات من الدم. وعندما تفقد الكليتان وظيفتهما على القيام بعملية التنقية، فقد تتزايد مستويات الفضلات الخطرة مما قد يتسبب في إحداث خلل بالتركيب الكيميائي للدم.\r\nحدث الفشل الكلوي الحاد عندما تعجز الكلى فجأةً عن تنقية الفضلات من الدم. وعندما تفقد الكليتان وظيفتهما على القيام بعملية التنقية، فقد تتزايد مستويات الفضلات الخطرة مما قد يتسبب في إحداث خلل بالتركيب الكيميائي للدم.', '2023-04-22 17:58:23', '2023-04-22 17:58:23', 'حدث الفشل الكلوي الحاد عندما تعجز الكلى فجأةً عن تنقية الفضلات من الدم. وعندما تفقد الكليتان وظيفتهما على القيام بعملية التنقية، فقد تتزايد مستويات الفضلات الخطرة مما قد يتسبب في إحداث خلل بالتركيب الكيميائي للدم.'),
(3, 'UI/UX', 'a-medicals\\April2023\\b6TwmdfSg9dEFwCk5eb2.jpg', 'ux ux ux', '2023-04-24 14:37:42', '2023-04-24 14:37:42', 'ux ux ux'),
(4, 'asd', 'a-medicals\\April2023\\8WGlYtI9p2CLk9jlHJZO.jpg', 'ux ux ux', '2023-04-24 14:38:02', '2023-04-24 14:38:02', 'ux ux ux');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `news_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `created_at`, `updated_at`, `news_id`) VALUES
(1, 'gfhjkl;', 3, '2023-04-22 18:35:39', '2023-04-22 18:35:39', 2),
(2, 'hi hi hi', 3, '2023-04-22 18:35:51', '2023-04-22 18:35:51', 2),
(3, 'fdsfsd', 3, '2023-04-22 18:40:35', '2023-04-22 18:40:35', 2),
(4, 'fghjkl;\'', 5, '2023-04-22 18:41:24', '2023-04-22 18:41:24', 2),
(5, 'hello', 5, '2023-04-24 14:39:03', '2023-04-24 14:39:03', 2),
(6, 'hi', 5, '2023-04-24 14:39:27', '2023-04-24 14:39:27', 3);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `message`, `answer_id`, `created_at`, `updated_at`, `user_id`) VALUES
(2, 'fffddd', '0569729873', 'hello', NULL, '2023-04-22 17:14:24', '2023-04-22 17:14:24', 5),
(3, 'fffddd', '0569729873', 'hi', NULL, '2023-04-22 17:19:22', '2023-04-22 17:19:22', 5),
(4, 'fffddd', '0569729873', 'hi s', NULL, '2023-04-22 17:19:56', '2023-04-22 17:19:56', 5),
(5, 'remi testrami', '056972987523', 'lkjhgfghjk', NULL, '2023-04-22 18:30:02', '2023-04-22 18:30:02', 3),
(6, 'fffddd', '0569729873', 'كيف يمكنني زيارتكم', NULL, '2023-04-24 14:40:31', '2023-04-24 14:40:31', 5),
(7, 'fffddd', '0569729873', 'كيف حالك', NULL, '2023-04-24 14:42:20', '2023-04-24 14:42:20', 5);

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, '{}', 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, '{}', 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 0, 0, 0, 0, 1, '{}', 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, '{}', 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 0, 1, 1, 1, 1, 1, '{}', 9),
(22, 1, 'email_verified_at', 'timestamp', 'Email Verified At', 0, 0, 1, 1, 1, 1, '{}', 6),
(23, 1, 'l_name', 'text', 'L Name', 1, 0, 1, 1, 1, 1, '{}', 12),
(24, 1, 'g_name', 'text', 'G Name', 1, 0, 1, 1, 1, 1, '{}', 13),
(25, 1, 'phone', 'text', 'Phone', 1, 0, 1, 1, 1, 1, '{}', 14),
(26, 1, 'dob', 'text', 'Dob', 1, 0, 1, 1, 1, 1, '{}', 15),
(27, 1, 'id_number', 'text', 'Id Number', 1, 0, 1, 1, 1, 1, '{}', 16),
(28, 4, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(29, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(30, 4, 'l_name', 'text', 'L Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(31, 4, 'dob', 'text', 'Dob', 1, 1, 1, 1, 1, 1, '{}', 4),
(32, 4, 'appointment', 'timestamp', 'Appointment', 1, 1, 1, 1, 1, 1, '{}', 5),
(33, 4, 'phone', 'text', 'Phone', 1, 1, 1, 1, 1, 1, '{}', 6),
(34, 4, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(35, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(36, 1, 'f_name', 'text', 'F Name', 1, 0, 1, 1, 1, 1, '{}', 17),
(37, 5, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(38, 5, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(39, 5, 'phone', 'text', 'Phone', 1, 1, 1, 1, 1, 1, '{}', 3),
(40, 5, 'message', 'text', 'Message', 1, 1, 1, 1, 1, 1, '{}', 4),
(41, 5, 'answer_id', 'text', 'Answer Id', 0, 0, 0, 0, 0, 1, '{}', 5),
(42, 5, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 1, '{}', 6),
(43, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(44, 6, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(45, 6, 'contact_id', 'text', 'Contact Id', 1, 1, 1, 1, 1, 1, '{}', 4),
(46, 6, 'answers', 'text', 'Answers', 1, 1, 1, 1, 1, 1, '{}', 3),
(47, 6, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 1, '{}', 5),
(48, 6, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(49, 6, 'answer_belongsto_contact_relationship', 'relationship', 'contacts', 1, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Contact\",\"table\":\"contacts\",\"type\":\"belongsTo\",\"column\":\"contact_id\",\"key\":\"id\",\"label\":\"message\",\"pivot_table\":\"answers\",\"pivot\":\"0\",\"taggable\":\"0\"}', 2),
(50, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(51, 7, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 2),
(52, 7, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 3),
(53, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(54, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(55, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(56, 13, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
(57, 13, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 3),
(58, 13, 'body', 'text_area', 'Body', 1, 1, 1, 1, 1, 1, '{}', 4),
(59, 13, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 1, '{}', 5),
(60, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(61, 13, 'sub_title', 'text', 'Sub Title', 1, 1, 1, 1, 1, 1, '{}', 7);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2023-04-04 13:34:23', '2023-04-04 15:47:43'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2023-04-04 13:34:23', '2023-04-04 13:34:23'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2023-04-04 13:34:23', '2023-04-04 13:34:23'),
(4, 'appointments', 'appointments', 'Appointment', 'Appointments', NULL, 'App\\Models\\Appointment', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":\"created_at\",\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-04-04 14:47:38', '2023-04-04 15:49:55'),
(5, 'contacts', 'contacts', 'Contact', 'Contacts', NULL, 'App\\Models\\Contact', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2023-04-22 16:39:38', '2023-04-22 16:39:38'),
(6, 'answers', 'answers', 'Answer', 'Answers', NULL, 'App\\Models\\Answer', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-04-22 17:21:28', '2023-04-22 17:22:56'),
(7, 'services', 'services', 'Service', 'Services', NULL, 'App\\Models\\Service', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-04-22 17:34:35', '2023-04-22 17:35:10'),
(13, 'a_medicals', 'a-medicals', 'A Medical', 'A Medicals', NULL, 'App\\Models\\AMedical', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-04-22 17:55:22', '2023-04-22 17:57:34');

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
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-04-04 13:34:24', '2023-04-04 13:34:24');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2023-04-04 13:34:24', '2023-04-04 13:34:24', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2023-04-04 13:34:24', '2023-04-04 13:34:24', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2023-04-04 13:34:24', '2023-04-04 13:34:24', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2023-04-04 13:34:24', '2023-04-04 13:34:24', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2023-04-04 13:34:24', '2023-04-04 13:34:24', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 10, '2023-04-04 13:34:24', '2023-04-04 13:34:24', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 11, '2023-04-04 13:34:24', '2023-04-04 13:34:24', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 12, '2023-04-04 13:34:24', '2023-04-04 13:34:24', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 13, '2023-04-04 13:34:24', '2023-04-04 13:34:24', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2023-04-04 13:34:24', '2023-04-04 13:34:24', 'voyager.settings.index', NULL),
(11, 1, 'Appointments', '', '_self', 'voyager-file-text', '#000000', NULL, 15, '2023-04-04 14:47:38', '2023-04-04 15:43:36', 'voyager.appointments.index', 'null'),
(12, 1, 'Contacts', '', '_self', NULL, NULL, NULL, 16, '2023-04-22 16:39:38', '2023-04-22 16:39:38', 'voyager.contacts.index', NULL),
(13, 1, 'Answers', '', '_self', NULL, NULL, NULL, 17, '2023-04-22 17:21:28', '2023-04-22 17:21:28', 'voyager.answers.index', NULL),
(14, 1, 'Services', '', '_self', NULL, NULL, NULL, 18, '2023-04-22 17:34:36', '2023-04-22 17:34:36', 'voyager.services.index', NULL),
(16, 1, 'A Medicals', '', '_self', NULL, NULL, NULL, 19, '2023-04-22 17:55:22', '2023-04-22 17:55:22', 'voyager.a-medicals.index', NULL);

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
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(2, 'browse_bread', NULL, '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(3, 'browse_database', NULL, '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(4, 'browse_media', NULL, '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(5, 'browse_compass', NULL, '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(6, 'browse_menus', 'menus', '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(7, 'read_menus', 'menus', '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(8, 'edit_menus', 'menus', '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(9, 'add_menus', 'menus', '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(10, 'delete_menus', 'menus', '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(11, 'browse_roles', 'roles', '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(12, 'read_roles', 'roles', '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(13, 'edit_roles', 'roles', '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(14, 'add_roles', 'roles', '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(15, 'delete_roles', 'roles', '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(16, 'browse_users', 'users', '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(17, 'read_users', 'users', '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(18, 'edit_users', 'users', '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(19, 'add_users', 'users', '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(20, 'delete_users', 'users', '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(21, 'browse_settings', 'settings', '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(22, 'read_settings', 'settings', '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(23, 'edit_settings', 'settings', '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(24, 'add_settings', 'settings', '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(25, 'delete_settings', 'settings', '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(26, 'browse_appointments', 'appointments', '2023-04-04 14:47:38', '2023-04-04 14:47:38'),
(27, 'read_appointments', 'appointments', '2023-04-04 14:47:38', '2023-04-04 14:47:38'),
(28, 'edit_appointments', 'appointments', '2023-04-04 14:47:38', '2023-04-04 14:47:38'),
(29, 'add_appointments', 'appointments', '2023-04-04 14:47:38', '2023-04-04 14:47:38'),
(30, 'delete_appointments', 'appointments', '2023-04-04 14:47:38', '2023-04-04 14:47:38'),
(31, 'browse_contacts', 'contacts', '2023-04-22 16:39:38', '2023-04-22 16:39:38'),
(32, 'read_contacts', 'contacts', '2023-04-22 16:39:38', '2023-04-22 16:39:38'),
(33, 'edit_contacts', 'contacts', '2023-04-22 16:39:38', '2023-04-22 16:39:38'),
(34, 'add_contacts', 'contacts', '2023-04-22 16:39:38', '2023-04-22 16:39:38'),
(35, 'delete_contacts', 'contacts', '2023-04-22 16:39:38', '2023-04-22 16:39:38'),
(36, 'browse_answers', 'answers', '2023-04-22 17:21:28', '2023-04-22 17:21:28'),
(37, 'read_answers', 'answers', '2023-04-22 17:21:28', '2023-04-22 17:21:28'),
(38, 'edit_answers', 'answers', '2023-04-22 17:21:28', '2023-04-22 17:21:28'),
(39, 'add_answers', 'answers', '2023-04-22 17:21:28', '2023-04-22 17:21:28'),
(40, 'delete_answers', 'answers', '2023-04-22 17:21:28', '2023-04-22 17:21:28'),
(41, 'browse_services', 'services', '2023-04-22 17:34:35', '2023-04-22 17:34:35'),
(42, 'read_services', 'services', '2023-04-22 17:34:35', '2023-04-22 17:34:35'),
(43, 'edit_services', 'services', '2023-04-22 17:34:36', '2023-04-22 17:34:36'),
(44, 'add_services', 'services', '2023-04-22 17:34:36', '2023-04-22 17:34:36'),
(45, 'delete_services', 'services', '2023-04-22 17:34:36', '2023-04-22 17:34:36'),
(51, 'browse_a_medicals', 'a_medicals', '2023-04-22 17:55:22', '2023-04-22 17:55:22'),
(52, 'read_a_medicals', 'a_medicals', '2023-04-22 17:55:22', '2023-04-22 17:55:22'),
(53, 'edit_a_medicals', 'a_medicals', '2023-04-22 17:55:22', '2023-04-22 17:55:22'),
(54, 'add_a_medicals', 'a_medicals', '2023-04-22 17:55:22', '2023-04-22 17:55:22'),
(55, 'delete_a_medicals', 'a_medicals', '2023-04-22 17:55:22', '2023-04-22 17:55:22');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2023-04-04 13:34:25', '2023-04-04 13:34:25'),
(2, 'user', 'Normal User', '2023-04-04 13:34:25', '2023-04-04 13:34:25');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(1, 'services\\April2023\\eDFbkPDr1oELcKYwZkbN.png', 'الحصول على استشارة', '2023-04-22 17:35:00', '2023-04-22 17:40:26'),
(2, 'services\\April2023\\bYzvXcUNpUznvYgWUhKE.png', '22الحصول على استشارة', '2023-04-22 17:40:00', '2023-04-22 17:40:48'),
(3, 'services\\April2023\\zGuotWq0wI3AuUUv2s0K.png', '33                   الحصول على استشارة', '2023-04-22 17:40:41', '2023-04-22 17:40:41'),
(4, 'services\\April2023\\vUQJGGb6cd35jyrNK7yd.jpg', 'UI/UX', '2023-04-24 14:35:45', '2023-04-24 14:35:45');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Killiyacare', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `l_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` datetime NOT NULL,
  `id_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_name` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`, `l_name`, `g_name`, `phone`, `dob`, `id_number`, `f_name`) VALUES
(1, 1, 'killiyacare\r\n', 'info.killiya_care@gmail.com', 'users/default.png', NULL, '$2y$10$Rr7SX39CBotjDpvuDFspBuWUaasP15yxjEbhYwxjZ2yC8o27/MXZO', NULL, NULL, '2023-04-04 13:35:45', '2023-04-04 13:35:45', 'thaher', 'diab', '0569729873', '2023-03-15 20:07:30', '0569729873', ''),
(2, 2, 'sam sam', 'sam@gmail.com', 'users/default.png', NULL, '$2y$10$NcehXmDWUMkcyAjyCt/6nusgwRsenNVxXnCbJkAXJQCOlmv4f6B9S', NULL, NULL, '2023-04-04 14:28:47', '2023-04-04 14:28:49', 'sam', 'sam', '0569729873', '2023-04-20 00:00:00', '05685', 'sam'),
(3, 2, 'remi test', 'rami@gmail.com', 'users/default.png', NULL, '$2y$10$McyGrQmH0iVi2ILvmF7KN.knfWSEY49WA7yzOEyzahiPCjSRaypUu', NULL, NULL, '2023-04-04 15:36:58', '2023-04-05 17:49:27', 'rami', 'rami', '056972987523', '2023-04-14 00:00:00', '12345678900', 'rami'),
(4, 2, 'rami sol', 'test@gmail.com', 'users/default.png', NULL, '$2y$10$W8XABANV.HmoASpKbh7cAuRRMKUwWBo3tqSNcUBCHYtJx13CJw9YC', NULL, NULL, '2023-04-04 15:38:51', '2023-04-04 15:38:51', 'rami', 'rami', '0522987528', '2023-04-20 00:00:00', '5264', 'rami'),
(5, 2, 'fff', 'fff@gmail.com', 'users/default.png', NULL, '$2y$10$TeFNDqlAzqi6Owhx1myKSuYLX/wi8smxp0tKMwyyjm6HsAPw7wug6', NULL, NULL, '2023-04-22 16:20:34', '2023-04-22 16:20:34', 'ddd', 'ddd', '0569729873', '2023-04-21 00:00:00', '12345678955', 'ddd');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_medicals`
--
ALTER TABLE `a_medicals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `a_medicals`
--
ALTER TABLE `a_medicals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
