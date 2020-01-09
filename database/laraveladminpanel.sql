-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2020 at 01:42 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laraveladminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `log_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `subject_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` int(11) DEFAULT NULL,
  `causer_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `created_at`, `updated_at`) VALUES
(1, 'default', 'updated user details', 1, 'App\\Models\\Access\\User\\User', 1, 'App\\Models\\Access\\User\\User', '{\"attributes\":{\"first_name\":\"Selvam\",\"last_name\":\"Ravichandran\",\"email\":\"admin@admin.com\",\"status\":1,\"confirmed\":1},\"old\":{\"first_name\":\"Selvam\",\"last_name\":\"Ravichandran\",\"email\":\"admin@admin.com\",\"status\":1,\"confirmed\":1}}', '2020-01-09 02:02:32', '2020-01-09 02:02:32'),
(2, 'default', 'updated user details', 1, 'App\\Models\\Access\\User\\User', 1, 'App\\Models\\Access\\User\\User', '{\"attributes\":{\"first_name\":\"Selvam\",\"last_name\":\"Ravichandran\",\"email\":\"admin@admin.com\",\"status\":1,\"confirmed\":1},\"old\":{\"first_name\":\"Selvam\",\"last_name\":\"Ravichandran\",\"email\":\"admin@admin.com\",\"status\":1,\"confirmed\":1}}', '2020-01-09 02:22:42', '2020-01-09 02:22:42'),
(3, 'default', 'updated user details', 1, 'App\\Models\\Access\\User\\User', 1, 'App\\Models\\Access\\User\\User', '{\"attributes\":{\"first_name\":\"Selvam\",\"last_name\":\"Ravichandran\",\"email\":\"admin@admin.com\",\"status\":1,\"confirmed\":1},\"old\":{\"first_name\":\"Selvam\",\"last_name\":\"Ravichandran\",\"email\":\"admin@admin.com\",\"status\":1,\"confirmed\":1}}', '2020-01-09 03:29:39', '2020-01-09 03:29:39'),
(4, 'default', 'updated user details', 1, 'App\\Models\\Access\\User\\User', 1, 'App\\Models\\Access\\User\\User', '{\"attributes\":{\"first_name\":\"Selvam\",\"last_name\":\"Ravichandran\",\"email\":\"admin@admin.com\",\"status\":1,\"confirmed\":1},\"old\":{\"first_name\":\"Selvam\",\"last_name\":\"Ravichandran\",\"email\":\"admin@admin.com\",\"status\":1,\"confirmed\":1}}', '2020-01-09 04:36:38', '2020-01-09 04:36:38'),
(5, 'default', 'updated user details', 1, 'App\\Models\\Access\\User\\User', 1, 'App\\Models\\Access\\User\\User', '{\"attributes\":{\"first_name\":\"Selvam\",\"last_name\":\"Ravichandran\",\"email\":\"admin@admin.com\",\"status\":1,\"confirmed\":1},\"old\":{\"first_name\":\"Selvam\",\"last_name\":\"Ravichandran\",\"email\":\"admin@admin.com\",\"status\":1,\"confirmed\":1}}', '2020-01-09 04:47:07', '2020-01-09 04:47:07'),
(6, 'default', 'updated user details', 1, 'App\\Models\\Access\\User\\User', 1, 'App\\Models\\Access\\User\\User', '{\"attributes\":{\"first_name\":\"Selvam\",\"last_name\":\"Ravichandran\",\"email\":\"admin@admin.com\",\"status\":1,\"confirmed\":1},\"old\":{\"first_name\":\"Selvam\",\"last_name\":\"Ravichandran\",\"email\":\"admin@admin.com\",\"status\":1,\"confirmed\":1}}', '2020-01-09 05:13:46', '2020-01-09 05:13:46'),
(7, 'default', 'updated user details', 1, 'App\\Models\\Access\\User\\User', 1, 'App\\Models\\Access\\User\\User', '{\"attributes\":{\"first_name\":\"Selvam\",\"last_name\":\"Ravichandran\",\"email\":\"admin@admin.com\",\"status\":1,\"confirmed\":1},\"old\":{\"first_name\":\"Selvam\",\"last_name\":\"Ravichandran\",\"email\":\"admin@admin.com\",\"status\":1,\"confirmed\":1}}', '2020-01-09 06:11:51', '2020-01-09 06:11:51'),
(8, 'default', 'updated user details', 1, 'App\\Models\\Access\\User\\User', 1, 'App\\Models\\Access\\User\\User', '{\"attributes\":{\"first_name\":\"Selvam\",\"last_name\":\"Ravichandran\",\"email\":\"admin@admin.com\",\"status\":1,\"confirmed\":1},\"old\":{\"first_name\":\"Selvam\",\"last_name\":\"Ravichandran\",\"email\":\"admin@admin.com\",\"status\":1,\"confirmed\":1}}', '2020-01-09 06:43:11', '2020-01-09 06:43:11'),
(9, 'default', 'updated user details', 1, 'App\\Models\\Access\\User\\User', 1, 'App\\Models\\Access\\User\\User', '{\"attributes\":{\"first_name\":\"Selvam\",\"last_name\":\"Ravichandran\",\"email\":\"admin@admin.com\",\"status\":1,\"confirmed\":1},\"old\":{\"first_name\":\"Selvam\",\"last_name\":\"Ravichandran\",\"email\":\"admin@admin.com\",\"status\":1,\"confirmed\":1}}', '2020-01-09 07:00:49', '2020-01-09 07:00:49'),
(10, 'default', 'updated user details', 1, 'App\\Models\\Access\\User\\User', 1, 'App\\Models\\Access\\User\\User', '{\"attributes\":{\"first_name\":\"Selvam\",\"last_name\":\"Ravichandran\",\"email\":\"admin@admin.com\",\"status\":1,\"confirmed\":1},\"old\":{\"first_name\":\"Selvam\",\"last_name\":\"Ravichandran\",\"email\":\"admin@admin.com\",\"status\":1,\"confirmed\":1}}', '2020-01-09 07:04:06', '2020-01-09 07:04:06');

-- --------------------------------------------------------

--
-- Table structure for table `blogmodels`
--

CREATE TABLE `blogmodels` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_datetime` datetime NOT NULL,
  `featured_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cannonical_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Published','Draft','InActive','Scheduled') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_map_categories`
--

CREATE TABLE `blog_map_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_map_tags`
--

CREATE TABLE `blog_map_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `format` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exchange_rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `code`, `symbol`, `format`, `exchange_rate`, `active`, `created_at`, `updated_at`) VALUES
(1, 'US Dollar', 'USD', '$', '$1,0.00', '0', 0, '2018-05-29 23:06:43', '2018-05-29 23:06:43'),
(2, 'Indian Rupee', 'INR', '₹', '1,0.00₹', '0', 1, '2018-05-29 23:12:56', '2018-05-30 01:16:01'),
(6, 'Euro', 'EUR', '€', '1.0,00 €', '0', 0, '2018-05-30 01:08:00', '2018-05-30 01:08:00'),
(7, 'Australian Dollar', 'AUD', '$', '$1,0.00', '0', 0, '2018-05-30 01:08:08', '2018-05-30 01:08:08'),
(8, 'Canadian Dollar', 'CAD', '$', '$1,0.00', '0', 0, '2018-05-30 01:08:13', '2018-05-30 01:08:13'),
(9, 'Singapore Dollar', 'SGD', '$', '$1,0.00', '0', 0, '2018-05-30 01:08:22', '2018-05-30 01:08:22'),
(10, 'Swiss Franc', 'CHF', 'CHF', '1\'0.00 CHF', '0', 0, '2018-05-30 01:08:27', '2018-05-30 01:08:27'),
(11, 'Malaysian Ringgit', 'MYR', 'RM', 'RM1,0.00', '0', 0, '2018-05-30 01:08:31', '2018-05-30 01:08:31'),
(12, 'Japan, Yen', 'JPY', '¥', '¥1,0.', '0', 0, '2018-05-30 01:08:36', '2018-05-30 01:08:36'),
(13, 'China Yuan Renminbi', 'CNY', '¥', '¥1,0.00', '0', 0, '2018-05-30 01:08:41', '2018-05-30 01:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Brian', 'Albert', 'brain@mailinator.com', 2147483647, 'uuuu', 1, '2020-01-09 06:32:43', '2020-01-09 06:32:43'),
(2, 'selvam', 'ravichandran', 'selvam@strawberryboxmedia.com', 2147483647, '26/8, Bharathiyar Nagar, Hosur - 635109', 1, '2020-01-09 06:33:40', '2020-01-09 06:33:40'),
(3, 'Raghavendra', 'Ranngaswamy', 'raghavendra@innocirc.com', 2147483647, '3rd Floor, Kheny Plaza, 736, Chinmaya Mission Hospital Rd, Indira Nagar 1st Stage, Stage 1, Indiranagar, Bengaluru, Karnataka 560038', 1, '2020-01-09 06:35:58', '2020-01-09 06:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_specialities`
--

CREATE TABLE `doctor_specialities` (
  `id` int(10) UNSIGNED NOT NULL,
  `speciality_id` int(11) UNSIGNED NOT NULL,
  `doctor_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor_specialities`
--

INSERT INTO `doctor_specialities` (`id`, `speciality_id`, `doctor_id`, `created_at`, `updated_at`) VALUES
(1, 7, 1, '2020-01-09 06:32:43', NULL),
(2, 4, 1, '2020-01-09 06:32:43', NULL),
(3, 6, 1, '2020-01-09 06:32:43', NULL),
(4, 2, 1, '2020-01-09 06:32:43', NULL),
(5, 1, 1, '2020-01-09 06:32:43', NULL),
(6, 3, 1, '2020-01-09 06:32:43', NULL),
(7, 7, 2, '2020-01-09 06:33:40', NULL),
(8, 4, 2, '2020-01-09 06:33:40', NULL),
(9, 6, 2, '2020-01-09 06:33:40', NULL),
(10, 4, 3, '2020-01-09 06:35:58', NULL),
(11, 6, 3, '2020-01-09 06:35:58', NULL),
(12, 2, 3, '2020-01-09 06:35:58', NULL),
(13, 1, 3, '2020-01-09 06:35:58', NULL),
(14, 3, 3, '2020-01-09 06:35:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `type_id`, `title`, `subject`, `body`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'User Registration', 'You have succesfully registerd', '<center>\r\n<table id=\"bodyTable\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\r\n<tbody>\r\n<tr>\r\n<td id=\"bodyCell\" align=\"center\" valign=\"top\">\r\n<table id=\"templateContainer\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\r\n<tbody>\r\n<tr>\r\n<td align=\"left\" valign=\"top\">\r\n<table id=\"templateBody\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td class=\"bodyContainer\" style=\"padding-top: 9px; padding-bottom: 9px;\" valign=\"top\">\r\n<table class=\"mcnBoxedTextBlock\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody class=\"mcnBoxedTextBlockOuter\">\r\n<tr>\r\n<td class=\"mcnBoxedTextBlockInner\" valign=\"top\">\r\n<table class=\"mcnBoxedTextContentContainer\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"left\">\r\n<tbody>\r\n<tr>\r\n<td style=\"padding: 9px 18px 9px 18px;\">\r\n<table class=\"mcnTextContentContainer\" style=\"background-color: #ffffff;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"18\">\r\n<tbody>\r\n<tr>\r\n<td class=\"mcnTextContent\" style=\"font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: left; padding: 36px; word-break: break-word;\" valign=\"top\">\r\n<div style=\"text-align: left; word-wrap: break-word;\">Thank you for joining [app_name]! To finish signing up, you just need to confirm your account. <br /><br />To confirm your email, please click this link:&nbsp;[confirmation_link] <br /><br />Welcome and thanks! <br />[app_name] Team\r\n<div class=\"footer\" style=\"font-size: 0.7em; padding: 0px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: right; color: #777777; line-height: 14px; margin-top: 36px;\">&copy; [app_name]</div>\r\n</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<!-- // END BODY --></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<!-- // END TEMPLATE --></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</center>', 1, 1, 1, '2018-05-29 03:22:18', '2018-06-07 06:36:52', NULL),
(2, 2, 'Create User', 'Congratulations! your account has been created', '<center>\n<table id=\"bodyTable\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\n<tbody>\n<tr>\n<td id=\"bodyCell\" align=\"center\" valign=\"top\">\n<table id=\"templateContainer\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\n<tbody>\n<tr>\n<td align=\"left\" valign=\"top\">\n<table id=\"templateBody\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td class=\"bodyContainer\" style=\"padding-top: 9px; padding-bottom: 9px;\" valign=\"top\">\n<table class=\"mcnBoxedTextBlock\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody class=\"mcnBoxedTextBlockOuter\">\n<tr>\n<td class=\"mcnBoxedTextBlockInner\" valign=\"top\">\n<table class=\"mcnBoxedTextContentContainer\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"left\">\n<tbody>\n<tr>\n<td style=\"padding: 9px 18px 9px 18px;\">\n<table class=\"mcnTextContentContainer\" style=\"background-color: #ffffff;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"18\">\n<tbody>\n<tr>\n<td class=\"mcnTextContent\" style=\"font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: left; padding: 36px; word-break: break-word;\" valign=\"top\">\n<div style=\"text-align: left; word-wrap: break-word;\">Congratulations! your account has been created</div>\n<div style=\"text-align: left; word-wrap: break-word;\">&nbsp;</div>\n<div style=\"text-align: left; word-wrap: break-word;\">&nbsp;</div>\n<div style=\"text-align: left; word-wrap: break-word;\">Your credentials are as below</div>\n<div style=\"text-align: left; word-wrap: break-word;\">&nbsp;</div>\n<div style=\"text-align: left; word-wrap: break-word;\">Email - [email]</div>\n<div style=\"text-align: left; word-wrap: break-word;\">Password - [password]</div>\n<div style=\"text-align: left; word-wrap: break-word;\">&nbsp;</div>\n<div style=\"text-align: left; word-wrap: break-word;\"><br />Welcome and thanks! <br />[app_name] Team\n<div class=\"footer\" style=\"font-size: 0.7em; padding: 0px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: right; color: #777777; line-height: 14px; margin-top: 36px;\">&copy; [app_name]</div>\n</div>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n<!-- // END BODY --></td>\n</tr>\n</tbody>\n</table>\n<!-- // END TEMPLATE --></td>\n</tr>\n</tbody>\n</table>\n</center>', 1, 1, NULL, '2018-05-29 03:22:18', '2018-05-29 03:22:18', NULL),
(3, 3, 'Activate / Deactivate User', 'Your account has been [status]', '<center>\n<table id=\"bodyTable\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\n<tbody>\n<tr>\n<td id=\"bodyCell\" align=\"center\" valign=\"top\">\n<table id=\"templateContainer\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\n<tbody>\n<tr>\n<td align=\"left\" valign=\"top\">\n<table id=\"templateBody\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td class=\"bodyContainer\" style=\"padding-top: 9px; padding-bottom: 9px;\" valign=\"top\">\n<table class=\"mcnBoxedTextBlock\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody class=\"mcnBoxedTextBlockOuter\">\n<tr>\n<td class=\"mcnBoxedTextBlockInner\" valign=\"top\">\n<table class=\"mcnBoxedTextContentContainer\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"left\">\n<tbody>\n<tr>\n<td style=\"padding: 9px 18px 9px 18px;\">\n<table class=\"mcnTextContentContainer\" style=\"background-color: #ffffff;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"18\">\n<tbody>\n<tr>\n<td class=\"mcnTextContent\" style=\"font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: left; padding: 36px; word-break: break-word;\" valign=\"top\">\n<div style=\"text-align: left; word-wrap: break-word;\">Your account has been [status].<br /> <br />Welcome and thanks! <br />[app_name] Team\n<div class=\"footer\" style=\"font-size: 0.7em; padding: 0px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: right; color: #777777; line-height: 14px; margin-top: 36px;\">&copy; [app_name]</div>\n</div>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n<!-- // END BODY --></td>\n</tr>\n</tbody>\n</table>\n<!-- // END TEMPLATE --></td>\n</tr>\n</tbody>\n</table>\n</center>', 1, 1, NULL, '2018-05-29 03:22:18', '2018-05-29 03:22:18', NULL),
(4, 4, 'Change Password', 'Your passwprd has been changed successfully', '<center>\n<table id=\"bodyTable\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\n<tbody>\n<tr>\n<td id=\"bodyCell\" align=\"center\" valign=\"top\">\n<table id=\"templateContainer\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\n<tbody>\n<tr>\n<td align=\"left\" valign=\"top\">\n<table id=\"templateBody\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody>\n<tr>\n<td class=\"bodyContainer\" style=\"padding-top: 9px; padding-bottom: 9px;\" valign=\"top\">\n<table class=\"mcnBoxedTextBlock\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tbody class=\"mcnBoxedTextBlockOuter\">\n<tr>\n<td class=\"mcnBoxedTextBlockInner\" valign=\"top\">\n<table class=\"mcnBoxedTextContentContainer\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"left\">\n<tbody>\n<tr>\n<td style=\"padding: 9px 18px 9px 18px;\">\n<table class=\"mcnTextContentContainer\" style=\"background-color: #ffffff;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"18\">\n<tbody>\n<tr>\n<td class=\"mcnTextContent\" style=\"font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: left; padding: 36px; word-break: break-word;\" valign=\"top\">\n<div style=\"text-align: left; word-wrap: break-word;\">Your password has been changed successfully.</div>\n<div style=\"text-align: left; word-wrap: break-word;\">&nbsp;</div>\n<div style=\"text-align: left; word-wrap: break-word;\">New password : [password]<br /> <br />Welcome and thanks! <br />[app_name] Team\n<div class=\"footer\" style=\"font-size: 0.7em; padding: 0px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: right; color: #777777; line-height: 14px; margin-top: 36px;\">&copy; [app_name]</div>\n</div>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n</td>\n</tr>\n</tbody>\n</table>\n<!-- // END BODY --></td>\n</tr>\n</tbody>\n</table>\n<!-- // END TEMPLATE --></td>\n</tr>\n</tbody>\n</table>\n</center>', 1, 1, NULL, '2018-05-29 03:22:18', '2018-05-29 03:22:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `email_template_placeholders`
--

CREATE TABLE `email_template_placeholders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_template_placeholders`
--

INSERT INTO `email_template_placeholders` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'app_name', '2018-05-29 03:22:18', '2018-05-29 03:22:18'),
(2, 'name', '2018-05-29 03:22:18', '2018-05-29 03:22:18'),
(3, 'email', '2018-05-29 03:22:18', '2018-05-29 03:22:18'),
(4, 'password', '2018-05-29 03:22:18', '2018-05-29 03:22:18'),
(5, 'contact-details', '2018-05-29 03:22:18', '2018-05-29 03:22:18'),
(6, 'confirmation_link', '2018-05-29 03:22:18', '2018-05-29 03:22:18'),
(7, 'password_reset_link', '2018-05-29 03:22:18', '2018-05-29 03:22:18'),
(8, 'header_logo', '2018-05-29 03:22:18', '2018-05-29 03:22:18'),
(9, 'footer_logo', '2018-05-29 03:22:18', '2018-05-29 03:22:18'),
(10, 'unscribe_link', '2018-05-29 03:22:18', '2018-05-29 03:22:18'),
(11, 'status', '2018-05-29 03:22:18', '2018-05-29 03:22:18');

-- --------------------------------------------------------

--
-- Table structure for table `email_template_types`
--

CREATE TABLE `email_template_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_template_types`
--

INSERT INTO `email_template_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Registration', '2018-05-29 03:22:18', '2018-05-29 03:22:18'),
(2, 'Create User', '2018-05-29 03:22:18', '2018-05-29 03:22:18'),
(3, 'Acivate / Deactivate User', '2018-05-29 03:22:18', '2018-05-29 03:22:18'),
(4, 'Change Password', '2018-05-29 03:22:18', '2018-05-29 03:22:18');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `entity_id` int(10) UNSIGNED DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assets` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history_types`
--

CREATE TABLE `history_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history_types`
--

INSERT INTO `history_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'User', '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(2, 'Role', '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(3, 'Permission', '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(4, 'CMSPage', '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(5, 'EmailTemplate', '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(6, 'BlogTag', '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(7, 'BlogCategory', '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(8, 'Blog', '2020-01-09 06:29:39', '2020-01-09 06:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `is_rtl` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `language_code`, `status`, `is_rtl`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', 1, 0, '2020-01-09 06:29:39', '2020-01-09 06:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` enum('backend','frontend') COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `items` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `type`, `name`, `items`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'backend', 'Backend Sidebar Menu', '[{\"view_permission_id\":\"view-speciality-permission\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.specialities.index\",\"name\":\"Speciality\",\"id\":28,\"content\":\"Speciality\"},{\"view_permission_id\":\"view-doctor-permission\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.doctors.index\",\"name\":\"Doctor\",\"id\":29,\"content\":\"Doctor\"}]', 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL);

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
(1, '2017_11_02_060149_create_blog_categories_table', 1),
(2, '2017_11_02_060149_create_blog_map_categories_table', 1),
(3, '2017_11_02_060149_create_blog_map_tags_table', 1),
(4, '2017_11_02_060149_create_blog_tags_table', 1),
(5, '2017_11_02_060149_create_blogs_table', 1),
(6, '2017_11_02_060149_create_email_template_placeholders_table', 1),
(7, '2017_11_02_060149_create_email_template_types_table', 1),
(8, '2017_11_02_060149_create_email_templates_table', 1),
(9, '2017_11_02_060149_create_faqs_table', 1),
(10, '2017_11_02_060149_create_history_table', 1),
(11, '2017_11_02_060149_create_history_types_table', 1),
(12, '2017_11_02_060149_create_modules_table', 1),
(13, '2017_11_02_060149_create_notifications_table', 1),
(14, '2017_11_02_060149_create_pages_table', 1),
(15, '2017_11_02_060149_create_password_resets_table', 1),
(16, '2017_11_02_060149_create_permission_role_table', 1),
(17, '2017_11_02_060149_create_permission_user_table', 1),
(18, '2017_11_02_060149_create_permissions_table', 1),
(19, '2017_11_02_060149_create_role_user_table', 1),
(20, '2017_11_02_060149_create_roles_table', 1),
(21, '2017_11_02_060149_create_sessions_table', 1),
(22, '2017_11_02_060149_create_settings_table', 1),
(23, '2017_11_02_060149_create_social_logins_table', 1),
(24, '2017_11_02_060149_create_users_table', 1),
(25, '2017_11_02_060152_add_foreign_keys_to_history_table', 1),
(26, '2017_11_02_060152_add_foreign_keys_to_notifications_table', 1),
(27, '2017_11_02_060152_add_foreign_keys_to_permission_role_table', 1),
(28, '2017_11_02_060152_add_foreign_keys_to_permission_user_table', 1),
(29, '2017_11_02_060152_add_foreign_keys_to_role_user_table', 1),
(30, '2017_11_02_060152_add_foreign_keys_to_social_logins_table', 1),
(31, '2017_12_10_122555_create_menus_table', 1),
(32, '2017_12_24_042039_add_null_constraint_on_created_by_on_user_table', 1),
(33, '2017_12_28_005822_add_null_constraint_on_created_by_on_role_table', 1),
(34, '2017_12_28_010952_add_null_constraint_on_created_by_on_permission_table', 1),
(37, '2018_05_29_094825_create_smtps_table', 3),
(38, '2018_05_29_103105_create_activity_log_table', 4),
(39, '2013_11_26_161501_create_currency_table', 5),
(40, '2018_05_29_132715_create_currencymanagers_table', 6),
(41, '2018_05_30_074147_create_payments_table', 7),
(52, '2018_05_30_090958_create_seos_table', 8),
(53, '2018_05_30_092205_create_seo_translations_table', 8),
(54, '2018_06_01_092248_create_languages_table', 9),
(55, '2020_01_06_144215_create_coupons_table', 10),
(56, '2020_01_09_073630_create_doctors_table', 11),
(57, '2020_01_09_073656_create_doctor_specialities_table', 12),
(58, '2020_01_09_9900_create_specialities_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `view_permission_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'view_route',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `view_permission_id`, `name`, `url`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'view-access-management', 'Access Management', NULL, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(2, 'view-user-management', 'User Management', 'admin.access.user.index', 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(3, 'view-role-management', 'Role Management', 'admin.access.role.index', 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(4, 'view-permission-management', 'Permission Management', 'admin.access.permission.index', 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(5, 'view-menu', 'Menus', 'admin.menus.index', 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(6, 'view-module', 'Module', 'admin.modules.index', 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(7, 'view-page', 'Pages', 'admin.pages.index', 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(8, 'view-email-template', 'Email Templates', 'admin.emailtemplates.index', 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(9, 'edit-settings', 'Settings', 'admin.settings.edit', 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(10, 'view-blog', 'Blog Management', 'admin.blogs.index', 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(11, 'view-blog-category', 'Blog Category Management', 'admin.blogcategories.index', 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(12, 'view-blog-tag', 'Blog Tag Management', 'admin.blogtags.index', 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(13, 'view-blog', 'Blog Management', 'admin.blogs.index', 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(14, 'view-faq', 'Faq Management', 'admin.faqs.index', 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(15, 'view-language-permission', 'Language', 'admin.languages.index', 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(17, 'view-smtp-permission', 'SMTP', 'admin.smtps.index', 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(20, 'view-currencymanager-permission', 'CurrencyManger', 'admin.currencymanagers.index', 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(21, 'view-payment-permission', 'Payment', 'admin.payments.index', 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(22, 'view-seo-permission', 'SEO', 'admin.seos.index', 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(23, 'view-coupon-permission', 'coupon', 'admin.coupons.index', 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(24, 'view-doctor-permission', 'Doctor', 'admin.doctors.index', 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(25, 'view-speciality-permission', 'Speciality', 'admin.specialities.index', 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 - Dashboard , 2 - Email , 3 - Both',
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `message`, `user_id`, `type`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 'User Logged In: Selvam', 1, 1, 1, '2020-01-09 07:04:16', '2020-01-09 07:04:26');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cannonical_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `gateway_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_secret` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_env` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `gateway_name`, `account_id`, `account_key`, `api_key`, `account_secret`, `account_password`, `account_env`, `active`, `created_at`, `updated_at`) VALUES
(1, 'PayTM', 'NtJRRd69Dn', 'dOq2CWWgqg', '7DTVC10gX1KYJeU498b6', 'KYJeU498b6KYJeU498b6KYJeU498b6', 'KYJeU498b6', 0, 1, '0000-00-00 00:00:00', '2020-01-09 06:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` smallint(5) UNSIGNED NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `sort`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'view-backend', 'View Backend', 1, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(2, 'view-frontend', 'View Frontend', 2, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(3, 'view-access-management', 'View Access Management', 3, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(4, 'view-user-management', 'View User Management', 4, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(5, 'view-active-user', 'View Active User', 5, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(6, 'view-deactive-user', 'View Deactive User', 6, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(7, 'view-deleted-user', 'View Deleted User', 7, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(8, 'show-user', 'Show User Details', 8, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(9, 'create-user', 'Create User', 9, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(10, 'edit-user', 'Edit User', 9, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(11, 'delete-user', 'Delete User', 10, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(12, 'activate-user', 'Activate User', 11, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(13, 'deactivate-user', 'Deactivate User', 12, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(14, 'login-as-user', 'Login As User', 13, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(15, 'clear-user-session', 'Clear User Session', 14, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(16, 'view-role-management', 'View Role Management', 15, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(17, 'create-role', 'Create Role', 16, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(18, 'edit-role', 'Edit Role', 17, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(19, 'delete-role', 'Delete Role', 18, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(20, 'view-permission-management', 'View Permission Management', 19, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(21, 'create-permission', 'Create Permission', 20, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(22, 'edit-permission', 'Edit Permission', 21, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(23, 'delete-permission', 'Delete Permission', 22, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(24, 'view-page', 'View Page', 23, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(25, 'create-page', 'Create Page', 24, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(26, 'edit-page', 'Edit Page', 25, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(27, 'delete-page', 'Delete Page', 26, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(28, 'view-email-template', 'View Email Templates', 27, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(29, 'create-email-template', 'Create Email Templates', 28, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(30, 'edit-email-template', 'Edit Email Templates', 29, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(31, 'delete-email-template', 'Delete Email Templates', 30, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(32, 'edit-settings', 'Edit Settings', 31, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(33, 'view-blog-category', 'View Blog Categories Management', 32, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(34, 'create-blog-category', 'Create Blog Category', 33, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(35, 'edit-blog-category', 'Edit Blog Category', 34, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(36, 'delete-blog-category', 'Delete Blog Category', 35, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(37, 'view-blog-tag', 'View Blog Tags Management', 36, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(38, 'create-blog-tag', 'Create Blog Tag', 37, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(39, 'edit-blog-tag', 'Edit Blog Tag', 38, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(40, 'delete-blog-tag', 'Delete Blog Tag', 39, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(41, 'view-blog', 'View Blogs Management', 40, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(42, 'create-blog', 'Create Blog', 41, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(43, 'edit-blog', 'Edit Blog', 42, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(44, 'delete-blog', 'Delete Blog', 43, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(45, 'view-faq', 'View FAQ Management', 44, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(46, 'create-faq', 'Create FAQ', 45, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(47, 'edit-faq', 'Edit FAQ', 46, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(48, 'delete-faq', 'Delete FAQ', 47, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(49, 'ManageLanguageRequest', 'Managelanguagerequest Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(50, 'create-language', 'Create Language Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(51, 'store-language', 'Store Language Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(52, 'edit-language', 'Edit Language Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(53, 'update-language', 'Update Language Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(54, 'delete-language', 'Delete Language Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(55, 'create-smtp', 'Create Smtp Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(56, 'store-smtp', 'Store Smtp Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(57, 'edit-smtp', 'Edit Smtp Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(58, 'update-smtp', 'Update Smtp Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(59, 'delete-smtp', 'Delete Smtp Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(60, 'create-companymetum', 'Create Companymetum Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(61, 'store-companymetum', 'Store Companymetum Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(62, 'edit-companymetum', 'Edit Companymetum Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(63, 'update-companymetum', 'Update Companymetum Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(64, 'delete-companymetum', 'Delete Companymetum Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(65, 'create-brandmetum', 'Create Brandmetum Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(66, 'store-brandmetum', 'Store Brandmetum Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(67, 'edit-brandmetum', 'Edit Brandmetum Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(68, 'update-brandmetum', 'Update Brandmetum Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(69, 'delete-brandmetum', 'Delete Brandmetum Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(70, 'create-currencymanager', 'Create Currencymanager Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(71, 'store-currencymanager', 'Store Currencymanager Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(72, 'edit-currencymanager', 'Edit Currencymanager Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(73, 'update-currencymanager', 'Update Currencymanager Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(74, 'delete-currencymanager', 'Delete Currencymanager Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(75, 'create-payment', 'Create Payment Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(76, 'store-payment', 'Store Payment Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(77, 'edit-payment', 'Edit Payment Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(78, 'update-payment', 'Update Payment Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(79, 'delete-payment', 'Delete Payment Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(80, 'create-seo', 'Create Seo Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(81, 'store-seo', 'Store Seo Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(82, 'edit-seo', 'Edit Seo Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(83, 'update-seo', 'Update Seo Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(84, 'delete-seo', 'Delete Seo Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(85, 'create-coupon', 'Create Coupon Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(86, 'store-coupon', 'Store Coupon Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(87, 'edit-coupon', 'Edit Coupon Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(88, 'update-coupon', 'Update Coupon Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(89, 'delete-coupon', 'Delete Coupon Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(90, 'create-doctor', 'Create Doctor Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(91, 'store-doctor', 'Store Doctor Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(92, 'edit-doctor', 'Edit Doctor Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(93, 'update-doctor', 'Update Doctor Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(94, 'delete-doctor', 'Delete Doctor Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(95, 'create-speciality', 'Create Speciality Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(96, 'store-speciality', 'Store Speciality Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(97, 'edit-speciality', 'Edit Speciality Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(98, 'update-speciality', 'Update Speciality Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(99, 'delete-speciality', 'Delete Speciality Permission', 0, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`) VALUES
(34, 2, 3),
(35, 1, 2),
(36, 24, 2),
(37, 25, 2),
(38, 26, 2),
(39, 27, 2);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `all` tinyint(1) NOT NULL DEFAULT 0,
  `sort` smallint(5) UNSIGNED NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `all`, `sort`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrator', 1, 1, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(2, 'Executive', 0, 2, 0, 1, 1, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL),
(3, 'User', 0, 3, 1, 1, NULL, '2020-01-09 06:29:39', '2020-01-09 06:29:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `created_at`, `updated_at`) VALUES
(21, '2020-01-09 06:29:39', '2020-01-09 06:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `seo_translation`
--

CREATE TABLE `seo_translation` (
  `id` int(10) UNSIGNED NOT NULL,
  `seo_id` int(11) NOT NULL,
  `locale` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_owner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `geocode_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyrights` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_translation`
--

INSERT INTO `seo_translation` (`id`, `seo_id`, `locale`, `site_name`, `site_description`, `site_owner`, `email`, `mobile`, `address`, `geocode_address`, `meta_title`, `meta_keywords`, `meta_description`, `footer_text`, `copyrights`, `active`, `created_at`, `updated_at`) VALUES
(19, 21, 'en', 'My English admin panel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-01-09 06:29:39', '2020-01-09 06:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disclaimer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_video1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_video2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_video3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_video4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `explanation1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `explanation2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `explanation3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `explanation4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `favicon`, `seo_title`, `seo_keyword`, `seo_description`, `company_contact`, `company_address`, `from_name`, `from_email`, `facebook`, `linkedin`, `twitter`, `google`, `copyright_text`, `footer_text`, `terms`, `disclaimer`, `google_analytics`, `home_video1`, `home_video2`, `home_video3`, `home_video4`, `explanation1`, `explanation2`, `explanation3`, `explanation4`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Admin Panel', 'Admin, Panel', 'Admin panel created as boilerplate', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-09 06:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `smtps`
--

CREATE TABLE `smtps` (
  `id` int(10) UNSIGNED NOT NULL,
  `smtp_enabled` tinyint(1) NOT NULL,
  `mail_driver` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smtp_hostname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smtp_username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smtp_password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smtp_port` int(11) NOT NULL,
  `smtp_encryption` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smtps`
--

INSERT INTO `smtps` (`id`, `smtp_enabled`, `mail_driver`, `smtp_hostname`, `smtp_username`, `smtp_password`, `smtp_port`, `smtp_encryption`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'Gmail', 'gmail', 'gmail', 'gmail', 24, 'SSL', 1, 1, '2020-01-09 06:29:39', '2020-01-09 06:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `social_logins`
--

CREATE TABLE `social_logins` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provider` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `specialities`
--

CREATE TABLE `specialities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialities`
--

INSERT INTO `specialities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Dental Hygenist', '2020-01-09 06:29:39', '2020-01-09 06:29:39'),
(2, 'Dentist/Dental Practisioner', '2020-01-09 06:29:52', '2020-01-09 06:29:52'),
(3, 'Dental Assistant', '2020-01-09 06:30:28', '2020-01-09 06:30:28'),
(4, 'Front Desk Agent', '2020-01-09 06:30:40', '2020-01-09 06:30:40'),
(5, 'Anesthesiology', '2020-01-09 06:31:09', '2020-01-09 06:31:09'),
(6, 'Diagnostic radiology', '2020-01-09 06:31:24', '2020-01-09 06:31:24'),
(7, 'Medical genetics', '2020-01-09 06:31:37', '2020-01-09 06:31:37'),
(9, 'Test  dental', '2020-01-09 06:43:53', '2020-01-09 06:43:53'),
(11, 'Jabalpur', '2020-01-09 06:52:32', '2020-01-09 06:52:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `confirmation_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `is_term_accept` tinyint(1) NOT NULL DEFAULT 0 COMMENT ' 0 = not accepted,1 = accepted',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `status`, `confirmation_code`, `confirmed`, `is_term_accept`, `remember_token`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Selvam', 'Ravichandran', 'admin@admin.com', '$2y$10$Y/TYgGiZ/XYstdJ18M9r/.snLaizAhdNgob7OJYIWFU0CSuH1WiXm', 1, 'ab7e10a752fb3fd20cb91ad6c105aa03', 1, 0, 'HAM4IhYydXmTdlV4BmHahBJK43sf6QLW00x0fQomWSdzSrDZpeWIk0wpuE4Y', 1, 1, '2020-01-09 03:22:11', '2020-01-09 01:53:39', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `blogmodels`
--
ALTER TABLE `blogmodels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_map_categories`
--
ALTER TABLE `blog_map_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_map_categories_blog_id_index` (`blog_id`),
  ADD KEY `blog_map_categories_category_id_index` (`category_id`);

--
-- Indexes for table `blog_map_tags`
--
ALTER TABLE `blog_map_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_map_tags_blog_id_index` (`blog_id`),
  ADD KEY `blog_map_tags_tag_id_index` (`tag_id`);

--
-- Indexes for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coupons_code_index` (`code`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `currencies_code_index` (`code`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doctors_email_unique` (`email`);

--
-- Indexes for table `doctor_specialities`
--
ALTER TABLE `doctor_specialities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_doctor_id` (`doctor_id`),
  ADD KEY `fk_specialty_id` (`speciality_id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_templates_type_id_index` (`type_id`);

--
-- Indexes for table `email_template_placeholders`
--
ALTER TABLE `email_template_placeholders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_template_types`
--
ALTER TABLE `email_template_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_type_id_foreign` (`type_id`),
  ADD KEY `history_user_id_foreign` (`user_id`);

--
-- Indexes for table `history_types`
--
ALTER TABLE `history_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_page_slug_unique` (`page_slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_translation`
--
ALTER TABLE `seo_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_translation_locale_index` (`locale`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smtps`
--
ALTER TABLE `smtps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_logins`
--
ALTER TABLE `social_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_logins_user_id_foreign` (`user_id`);

--
-- Indexes for table `specialities`
--
ALTER TABLE `specialities`
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
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blogmodels`
--
ALTER TABLE `blogmodels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_map_categories`
--
ALTER TABLE `blog_map_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_map_tags`
--
ALTER TABLE `blog_map_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_tags`
--
ALTER TABLE `blog_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctor_specialities`
--
ALTER TABLE `doctor_specialities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `email_template_placeholders`
--
ALTER TABLE `email_template_placeholders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `email_template_types`
--
ALTER TABLE `email_template_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history_types`
--
ALTER TABLE `history_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `seo_translation`
--
ALTER TABLE `seo_translation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `smtps`
--
ALTER TABLE `smtps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_logins`
--
ALTER TABLE `social_logins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specialities`
--
ALTER TABLE `specialities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor_specialities`
--
ALTER TABLE `doctor_specialities`
  ADD CONSTRAINT `fk_doctor_id` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_specialty_id` FOREIGN KEY (`speciality_id`) REFERENCES `specialities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `history_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `history_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `social_logins`
--
ALTER TABLE `social_logins`
  ADD CONSTRAINT `social_logins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
