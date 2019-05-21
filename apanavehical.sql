-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 09:24 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apanavehical`
--

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
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
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
  `status` tinyint(1) NOT NULL DEFAULT '1',
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
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `status` tinyint(1) NOT NULL DEFAULT '1',
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
(1, 1, 'User Registration', 'You have succesfully registerd', '<center>\r\n<table id=\"bodyTable\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\r\n<tbody>\r\n<tr>\r\n<td id=\"bodyCell\" align=\"center\" valign=\"top\">\r\n<table id=\"templateContainer\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\r\n<tbody>\r\n<tr>\r\n<td align=\"left\" valign=\"top\">\r\n<table id=\"templateBody\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td class=\"bodyContainer\" style=\"padding-top: 9px; padding-bottom: 9px;\" valign=\"top\">\r\n<table class=\"mcnBoxedTextBlock\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody class=\"mcnBoxedTextBlockOuter\">\r\n<tr>\r\n<td class=\"mcnBoxedTextBlockInner\" valign=\"top\">\r\n<table class=\"mcnBoxedTextContentContainer\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"left\">\r\n<tbody>\r\n<tr>\r\n<td style=\"padding: 9px 18px 9px 18px;\">\r\n<table class=\"mcnTextContentContainer\" style=\"background-color: #ffffff;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"18\">\r\n<tbody>\r\n<tr>\r\n<td class=\"mcnTextContent\" style=\"font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: left; padding: 36px; word-break: break-word;\" valign=\"top\">\r\n<div style=\"text-align: left; word-wrap: break-word;\">Thank you for joining [app_name]! To finish signing up, you just need to confirm your account. <br /> <br />To confirm your email, please click this link:&nbsp;[confirmation_link] <br /> <br />Welcome and thanks! <br />[app_name] Team\r\n<div class=\"footer\" style=\"font-size: 0.7em; padding: 0px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: right; color: #777777; line-height: 14px; margin-top: 36px;\">&copy; [app_name]</div>\r\n</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<!-- // END BODY --></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<!-- // END TEMPLATE --></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</center>', 1, 1, NULL, '2018-02-21 12:19:26', '2018-02-21 12:19:26', NULL),
(2, 2, 'Create User', 'Congratulations! your account has been created', '<center>\r\n<table id=\"bodyTable\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\r\n<tbody>\r\n<tr>\r\n<td id=\"bodyCell\" align=\"center\" valign=\"top\">\r\n<table id=\"templateContainer\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\r\n<tbody>\r\n<tr>\r\n<td align=\"left\" valign=\"top\">\r\n<table id=\"templateBody\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td class=\"bodyContainer\" style=\"padding-top: 9px; padding-bottom: 9px;\" valign=\"top\">\r\n<table class=\"mcnBoxedTextBlock\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody class=\"mcnBoxedTextBlockOuter\">\r\n<tr>\r\n<td class=\"mcnBoxedTextBlockInner\" valign=\"top\">\r\n<table class=\"mcnBoxedTextContentContainer\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"left\">\r\n<tbody>\r\n<tr>\r\n<td style=\"padding: 9px 18px 9px 18px;\">\r\n<table class=\"mcnTextContentContainer\" style=\"background-color: #ffffff;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"18\">\r\n<tbody>\r\n<tr>\r\n<td class=\"mcnTextContent\" style=\"font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: left; padding: 36px; word-break: break-word;\" valign=\"top\">\r\n<div style=\"text-align: left; word-wrap: break-word;\">Congratulations! your account has been created</div>\r\n<div style=\"text-align: left; word-wrap: break-word;\">&nbsp;</div>\r\n<div style=\"text-align: left; word-wrap: break-word;\">&nbsp;</div>\r\n<div style=\"text-align: left; word-wrap: break-word;\">Your credentials are as below</div>\r\n<div style=\"text-align: left; word-wrap: break-word;\">&nbsp;</div>\r\n<div style=\"text-align: left; word-wrap: break-word;\">Email - [email]</div>\r\n<div style=\"text-align: left; word-wrap: break-word;\">Password - [password]</div>\r\n<div style=\"text-align: left; word-wrap: break-word;\">&nbsp;</div>\r\n<div style=\"text-align: left; word-wrap: break-word;\"><br />Welcome and thanks! <br />[app_name] Team\r\n<div class=\"footer\" style=\"font-size: 0.7em; padding: 0px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: right; color: #777777; line-height: 14px; margin-top: 36px;\">&copy; [app_name]</div>\r\n</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<!-- // END BODY --></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<!-- // END TEMPLATE --></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</center>', 1, 1, NULL, '2018-02-21 12:19:26', '2018-02-21 12:19:26', NULL),
(3, 3, 'Activate / Deactivate User', 'Your account has been [status]', '<center>\r\n<table id=\"bodyTable\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\r\n<tbody>\r\n<tr>\r\n<td id=\"bodyCell\" align=\"center\" valign=\"top\">\r\n<table id=\"templateContainer\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\r\n<tbody>\r\n<tr>\r\n<td align=\"left\" valign=\"top\">\r\n<table id=\"templateBody\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td class=\"bodyContainer\" style=\"padding-top: 9px; padding-bottom: 9px;\" valign=\"top\">\r\n<table class=\"mcnBoxedTextBlock\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody class=\"mcnBoxedTextBlockOuter\">\r\n<tr>\r\n<td class=\"mcnBoxedTextBlockInner\" valign=\"top\">\r\n<table class=\"mcnBoxedTextContentContainer\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"left\">\r\n<tbody>\r\n<tr>\r\n<td style=\"padding: 9px 18px 9px 18px;\">\r\n<table class=\"mcnTextContentContainer\" style=\"background-color: #ffffff;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"18\">\r\n<tbody>\r\n<tr>\r\n<td class=\"mcnTextContent\" style=\"font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: left; padding: 36px; word-break: break-word;\" valign=\"top\">\r\n<div style=\"text-align: left; word-wrap: break-word;\">Your account has been [status].<br /> <br />Welcome and thanks! <br />[app_name] Team\r\n<div class=\"footer\" style=\"font-size: 0.7em; padding: 0px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: right; color: #777777; line-height: 14px; margin-top: 36px;\">&copy; [app_name]</div>\r\n</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<!-- // END BODY --></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<!-- // END TEMPLATE --></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</center>', 1, 1, NULL, '2018-02-21 12:19:26', '2018-02-21 12:19:26', NULL),
(4, 4, 'Change Password', 'Your passwprd has been changed successfully', '<center>\r\n<table id=\"bodyTable\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\r\n<tbody>\r\n<tr>\r\n<td id=\"bodyCell\" align=\"center\" valign=\"top\">\r\n<table id=\"templateContainer\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\r\n<tbody>\r\n<tr>\r\n<td align=\"left\" valign=\"top\">\r\n<table id=\"templateBody\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td class=\"bodyContainer\" style=\"padding-top: 9px; padding-bottom: 9px;\" valign=\"top\">\r\n<table class=\"mcnBoxedTextBlock\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody class=\"mcnBoxedTextBlockOuter\">\r\n<tr>\r\n<td class=\"mcnBoxedTextBlockInner\" valign=\"top\">\r\n<table class=\"mcnBoxedTextContentContainer\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"left\">\r\n<tbody>\r\n<tr>\r\n<td style=\"padding: 9px 18px 9px 18px;\">\r\n<table class=\"mcnTextContentContainer\" style=\"background-color: #ffffff;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"18\">\r\n<tbody>\r\n<tr>\r\n<td class=\"mcnTextContent\" style=\"font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: left; padding: 36px; word-break: break-word;\" valign=\"top\">\r\n<div style=\"text-align: left; word-wrap: break-word;\">Your password has been changed successfully.</div>\r\n<div style=\"text-align: left; word-wrap: break-word;\">&nbsp;</div>\r\n<div style=\"text-align: left; word-wrap: break-word;\">New password : [password]<br /> <br />Welcome and thanks! <br />[app_name] Team\r\n<div class=\"footer\" style=\"font-size: 0.7em; padding: 0px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: right; color: #777777; line-height: 14px; margin-top: 36px;\">&copy; [app_name]</div>\r\n</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<!-- // END BODY --></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<!-- // END TEMPLATE --></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</center>', 1, 1, NULL, '2018-02-21 12:19:26', '2018-02-21 12:19:26', NULL);

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
(1, 'app_name', '2018-02-21 12:19:26', '2018-02-21 12:19:26'),
(2, 'name', '2018-02-21 12:19:26', '2018-02-21 12:19:26'),
(3, 'email', '2018-02-21 12:19:26', '2018-02-21 12:19:26'),
(4, 'password', '2018-02-21 12:19:26', '2018-02-21 12:19:26'),
(5, 'contact-details', '2018-02-21 12:19:26', '2018-02-21 12:19:26'),
(6, 'confirmation_link', '2018-02-21 12:19:26', '2018-02-21 12:19:26'),
(7, 'password_reset_link', '2018-02-21 12:19:26', '2018-02-21 12:19:26'),
(8, 'header_logo', '2018-02-21 12:19:26', '2018-02-21 12:19:26'),
(9, 'footer_logo', '2018-02-21 12:19:26', '2018-02-21 12:19:26'),
(10, 'unscribe_link', '2018-02-21 12:19:26', '2018-02-21 12:19:26'),
(11, 'status', '2018-02-21 12:19:26', '2018-02-21 12:19:26');

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
(1, 'Registration', '2018-02-21 12:19:26', '2018-02-21 12:19:26'),
(2, 'Create User', '2018-02-21 12:19:26', '2018-02-21 12:19:26'),
(3, 'Acivate / Deactivate User', '2018-02-21 12:19:26', '2018-02-21 12:19:26'),
(4, 'Change Password', '2018-02-21 12:19:26', '2018-02-21 12:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
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
  `assets` text COLLATE utf8mb4_unicode_ci,
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
(1, 'User', '2018-02-21 12:19:25', '2018-02-21 12:19:25'),
(2, 'Role', '2018-02-21 12:19:25', '2018-02-21 12:19:25'),
(3, 'Permission', '2018-02-21 12:19:25', '2018-02-21 12:19:25'),
(4, 'CMSPage', '2018-02-21 12:19:25', '2018-02-21 12:19:25'),
(5, 'EmailTemplate', '2018-02-21 12:19:25', '2018-02-21 12:19:25'),
(6, 'BlogTag', '2018-02-21 12:19:25', '2018-02-21 12:19:25'),
(7, 'BlogCategory', '2018-02-21 12:19:25', '2018-02-21 12:19:25'),
(8, 'Blog', '2018-02-21 12:19:25', '2018-02-21 12:19:25');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` enum('backend','frontend') COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `items` text COLLATE utf8mb4_unicode_ci,
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
(1, 'backend', 'Backend Sidebar Menu', '[{\"view_permission_id\":\"view-access-management\",\"icon\":\"fa-users\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"\",\"name\":\"Access Management\",\"id\":11,\"content\":\"Access Management\",\"children\":[{\"view_permission_id\":\"view-user-management\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.access.user.index\",\"name\":\"User Management\",\"id\":12,\"content\":\"User Management\"},{\"view_permission_id\":\"view-role-management\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.access.role.index\",\"name\":\"Role Management\",\"id\":13,\"content\":\"Role Management\"},{\"view_permission_id\":\"view-permission-management\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.access.permission.index\",\"name\":\"Permission Management\",\"id\":14,\"content\":\"Permission Management\"}]},{\"view_permission_id\":\"view-module\",\"icon\":\"fa-wrench\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.modules.index\",\"name\":\"Module\",\"id\":1,\"content\":\"Module\"},{\"view_permission_id\":\"view-menu\",\"icon\":\"fa-bars\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.menus.index\",\"name\":\"Menus\",\"id\":3,\"content\":\"Menus\"},{\"view_permission_id\":\"view-page\",\"icon\":\"fa-file-text\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.pages.index\",\"name\":\"Pages\",\"id\":2,\"content\":\"Pages\"},{\"view_permission_id\":\"view-email-template\",\"icon\":\"fa-envelope\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.emailtemplates.index\",\"name\":\"Email Templates\",\"id\":8,\"content\":\"Email Templates\"},{\"view_permission_id\":\"edit-settings\",\"icon\":\"fa-gear\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.settings.edit?id=1\",\"name\":\"Settings\",\"id\":9,\"content\":\"Settings\"},{\"view_permission_id\":\"view-blog\",\"icon\":\"fa-commenting\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"\",\"name\":\"Blog Management\",\"id\":15,\"content\":\"Blog Management\",\"children\":[{\"view_permission_id\":\"view-blog-category\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.blogCategories.index\",\"name\":\"Blog Category Management\",\"id\":16,\"content\":\"Blog Category Management\"},{\"view_permission_id\":\"view-blog-tag\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.blogTags.index\",\"name\":\"Blog Tag Management\",\"id\":17,\"content\":\"Blog Tag Management\"},{\"view_permission_id\":\"view-blog\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.blogs.index\",\"name\":\"Blog Management\",\"id\":18,\"content\":\"Blog Management\"}]},{\"view_permission_id\":\"view-faq\",\"icon\":\"fa-question-circle\",\"open_in_new_tab\":0,\"url_type\":\"route\",\"url\":\"admin.faqs.index\",\"name\":\"Faq Management\",\"id\":19,\"content\":\"Faq Management\"}]', 1, NULL, '2018-02-21 12:19:27', '2018-10-20 13:20:25', NULL);

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
(34, '2017_12_28_010952_add_null_constraint_on_created_by_on_permission_table', 1);

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
(1, 'view-access-management', 'Access Management', NULL, 1, NULL, '2018-02-21 12:19:27', NULL),
(2, 'view-user-management', 'User Management', 'admin.access.user.index', 1, NULL, '2018-02-21 12:19:27', NULL),
(3, 'view-role-management', 'Role Management', 'admin.access.role.index', 1, NULL, '2018-02-21 12:19:27', NULL),
(4, 'view-permission-management', 'Permission Management', 'admin.access.permission.index', 1, NULL, '2018-02-21 12:19:27', NULL),
(5, 'view-menu', 'Menus', 'admin.menus.index', 1, NULL, '2018-02-21 12:19:27', NULL),
(6, 'view-module', 'Module', 'admin.modules.index', 1, NULL, '2018-02-21 12:19:27', NULL),
(7, 'view-page', 'Pages', 'admin.pages.index', 1, NULL, '2018-02-21 12:19:27', NULL),
(8, 'view-email-template', 'Email Templates', 'admin.emailtemplates.index', 1, NULL, '2018-02-21 12:19:27', NULL),
(9, 'edit-settings', 'Settings', 'admin.settings.edit', 1, NULL, '2018-02-21 12:19:27', NULL),
(10, 'view-blog', 'Blog Management', NULL, 1, NULL, '2018-02-21 12:19:27', NULL),
(11, 'view-blog-category', 'Blog Category Management', 'admin.blogcategories.index', 1, NULL, '2018-02-21 12:19:27', NULL),
(12, 'view-blog-tag', 'Blog Tag Management', 'admin.blogtags.index', 1, NULL, '2018-02-21 12:19:27', NULL),
(13, 'view-blog', 'Blog Management', 'admin.blogs.index', 1, NULL, '2018-02-21 12:19:27', NULL),
(14, 'view-faq', 'Faq Management', 'admin.faqs.index', 1, NULL, '2018-02-21 12:19:27', NULL),
(15, 'view-products-permission', 'Products', 'admin.products.index', 1, NULL, '2018-06-30 13:02:54', '2018-06-30 13:02:54');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 - Dashboard , 2 - Email , 3 - Both',
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `message`, `user_id`, `type`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 'User Logged In: Viral', 1, 1, 0, '2018-02-21 12:39:37', NULL),
(2, 'User Logged In: Viral', 1, 1, 0, '2018-02-22 10:50:08', NULL),
(3, 'User Logged In: Viral', 1, 1, 0, '2018-06-23 12:17:49', NULL),
(4, 'User Logged In: Viral', 1, 1, 0, '2018-06-23 12:52:58', NULL),
(5, 'User Logged In: Viral', 1, 1, 0, '2018-06-23 19:50:26', NULL),
(6, 'User Logged In: Viral', 1, 1, 0, '2018-06-25 00:23:26', NULL),
(7, 'User Logged In: Viral', 1, 1, 1, '2018-06-25 00:49:49', '2018-06-26 00:31:19'),
(8, 'User Logged In: Viral', 1, 1, 1, '2018-06-25 01:17:02', '2018-06-26 00:31:19'),
(9, 'User Logged In: Viral', 1, 1, 1, '2018-06-25 14:08:21', '2018-06-26 00:31:19'),
(10, 'User Logged In: Viral', 1, 1, 1, '2018-06-25 16:04:14', '2018-06-26 00:31:19'),
(11, 'User Logged In: Viral', 1, 1, 1, '2018-06-26 00:30:53', '2018-06-26 00:31:19'),
(12, 'User Logged In: Viral', 1, 1, 0, '2018-06-26 00:46:44', NULL),
(13, 'User Logged In: Viral', 1, 1, 0, '2018-06-30 12:51:54', NULL),
(14, 'User Logged In: Viral', 1, 1, 0, '2018-07-05 22:28:38', NULL),
(15, 'User Logged In: Viral', 1, 1, 0, '2018-07-05 22:42:06', NULL),
(16, 'User Logged In: Viral', 1, 1, 0, '2018-07-05 23:51:24', NULL),
(17, 'User Logged In: Viral', 1, 1, 0, '2018-07-06 00:33:05', NULL),
(18, 'User Logged In: Viral', 1, 1, 0, '2018-07-07 00:00:22', NULL),
(19, 'User Logged In: Viral', 1, 1, 0, '2018-07-11 01:22:39', NULL),
(20, 'User Logged In: Viral', 1, 1, 0, '2018-07-24 01:22:07', NULL),
(21, 'User Logged In: Viral', 1, 1, 0, '2018-07-24 12:57:53', NULL),
(22, 'User Logged In: Viral', 1, 1, 0, '2018-07-28 03:04:32', NULL),
(23, 'User Logged In: Viral', 1, 1, 0, '2018-07-28 03:15:29', NULL),
(24, 'User Logged In: Viral', 1, 1, 0, '2018-10-20 13:17:29', NULL),
(25, 'User Logged In: Viral', 1, 1, 0, '2018-10-20 13:53:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `cannonical_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `page_slug`, `description`, `cannonical_link`, `seo_title`, `seo_keyword`, `seo_description`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Terms and conditions', 'terms-and-conditions', 'terms and conditions', NULL, NULL, NULL, NULL, 1, 1, NULL, '2018-02-21 12:19:27', '2018-02-21 12:19:27', NULL);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
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
(1, 'view-backend', 'View Backend', 1, 1, 1, NULL, '2018-02-21 12:19:19', '2018-02-21 12:19:19', NULL),
(2, 'view-frontend', 'View Frontend', 2, 1, 1, NULL, '2018-02-21 12:19:19', '2018-02-21 12:19:19', NULL),
(3, 'view-access-management', 'View Access Management', 3, 1, 1, NULL, '2018-02-21 12:19:19', '2018-02-21 12:19:19', NULL),
(4, 'view-user-management', 'View User Management', 4, 1, 1, NULL, '2018-02-21 12:19:19', '2018-02-21 12:19:19', NULL),
(5, 'view-active-user', 'View Active User', 5, 1, 1, NULL, '2018-02-21 12:19:19', '2018-02-21 12:19:19', NULL),
(6, 'view-deactive-user', 'View Deactive User', 6, 1, 1, NULL, '2018-02-21 12:19:19', '2018-02-21 12:19:19', NULL),
(7, 'view-deleted-user', 'View Deleted User', 7, 1, 1, NULL, '2018-02-21 12:19:19', '2018-02-21 12:19:19', NULL),
(8, 'show-user', 'Show User Details', 8, 1, 1, NULL, '2018-02-21 12:19:19', '2018-02-21 12:19:19', NULL),
(9, 'create-user', 'Create User', 9, 1, 1, NULL, '2018-02-21 12:19:19', '2018-02-21 12:19:19', NULL),
(10, 'edit-user', 'Edit User', 9, 1, 1, NULL, '2018-02-21 12:19:19', '2018-02-21 12:19:19', NULL),
(11, 'delete-user', 'Delete User', 10, 1, 1, NULL, '2018-02-21 12:19:19', '2018-02-21 12:19:19', NULL),
(12, 'activate-user', 'Activate User', 11, 1, 1, NULL, '2018-02-21 12:19:19', '2018-02-21 12:19:19', NULL),
(13, 'deactivate-user', 'Deactivate User', 12, 1, 1, NULL, '2018-02-21 12:19:19', '2018-02-21 12:19:19', NULL),
(14, 'login-as-user', 'Login As User', 13, 1, 1, NULL, '2018-02-21 12:19:20', '2018-02-21 12:19:20', NULL),
(15, 'clear-user-session', 'Clear User Session', 14, 1, 1, NULL, '2018-02-21 12:19:20', '2018-02-21 12:19:20', NULL),
(16, 'view-role-management', 'View Role Management', 15, 1, 1, NULL, '2018-02-21 12:19:20', '2018-02-21 12:19:20', NULL),
(17, 'create-role', 'Create Role', 16, 1, 1, NULL, '2018-02-21 12:19:20', '2018-02-21 12:19:20', NULL),
(18, 'edit-role', 'Edit Role', 17, 1, 1, NULL, '2018-02-21 12:19:20', '2018-02-21 12:19:20', NULL),
(19, 'delete-role', 'Delete Role', 18, 1, 1, NULL, '2018-02-21 12:19:20', '2018-02-21 12:19:20', NULL),
(20, 'view-permission-management', 'View Permission Management', 19, 1, 1, NULL, '2018-02-21 12:19:20', '2018-02-21 12:19:20', NULL),
(21, 'create-permission', 'Create Permission', 20, 1, 1, NULL, '2018-02-21 12:19:20', '2018-02-21 12:19:20', NULL),
(22, 'edit-permission', 'Edit Permission', 21, 1, 1, NULL, '2018-02-21 12:19:20', '2018-02-21 12:19:20', NULL),
(23, 'delete-permission', 'Delete Permission', 22, 1, 1, NULL, '2018-02-21 12:19:20', '2018-02-21 12:19:20', NULL),
(24, 'view-page', 'View Page', 23, 1, 1, NULL, '2018-02-21 12:19:20', '2018-02-21 12:19:20', NULL),
(25, 'create-page', 'Create Page', 24, 1, 1, NULL, '2018-02-21 12:19:20', '2018-02-21 12:19:20', NULL),
(26, 'edit-page', 'Edit Page', 25, 1, 1, NULL, '2018-02-21 12:19:20', '2018-02-21 12:19:20', NULL),
(27, 'delete-page', 'Delete Page', 26, 1, 1, NULL, '2018-02-21 12:19:20', '2018-02-21 12:19:20', NULL),
(28, 'view-email-template', 'View Email Templates', 27, 1, 1, NULL, '2018-02-21 12:19:20', '2018-02-21 12:19:20', NULL),
(29, 'create-email-template', 'Create Email Templates', 28, 1, 1, NULL, '2018-02-21 12:19:20', '2018-02-21 12:19:20', NULL),
(30, 'edit-email-template', 'Edit Email Templates', 29, 1, 1, NULL, '2018-02-21 12:19:20', '2018-02-21 12:19:20', NULL),
(31, 'delete-email-template', 'Delete Email Templates', 30, 1, 1, NULL, '2018-02-21 12:19:20', '2018-02-21 12:19:20', NULL),
(32, 'edit-settings', 'Edit Settings', 31, 1, 1, NULL, '2018-02-21 12:19:20', '2018-02-21 12:19:20', NULL),
(33, 'view-blog-category', 'View Blog Categories Management', 32, 1, 1, NULL, '2018-02-21 12:19:20', '2018-02-21 12:19:20', NULL),
(34, 'create-blog-category', 'Create Blog Category', 33, 1, 1, NULL, '2018-02-21 12:19:20', '2018-02-21 12:19:20', NULL),
(35, 'edit-blog-category', 'Edit Blog Category', 34, 1, 1, NULL, '2018-02-21 12:19:20', '2018-02-21 12:19:20', NULL),
(36, 'delete-blog-category', 'Delete Blog Category', 35, 1, 1, NULL, '2018-02-21 12:19:20', '2018-02-21 12:19:20', NULL),
(37, 'view-blog-tag', 'View Blog Tags Management', 36, 1, 1, NULL, '2018-02-21 12:19:20', '2018-02-21 12:19:20', NULL),
(38, 'create-blog-tag', 'Create Blog Tag', 37, 1, 1, NULL, '2018-02-21 12:19:20', '2018-02-21 12:19:20', NULL),
(39, 'edit-blog-tag', 'Edit Blog Tag', 38, 1, 1, NULL, '2018-02-21 12:19:21', '2018-02-21 12:19:21', NULL),
(40, 'delete-blog-tag', 'Delete Blog Tag', 39, 1, 1, NULL, '2018-02-21 12:19:21', '2018-02-21 12:19:21', NULL),
(41, 'view-blog', 'View Blogs Management', 40, 1, 1, NULL, '2018-02-21 12:19:21', '2018-02-21 12:19:21', NULL),
(42, 'create-blog', 'Create Blog', 41, 1, 1, NULL, '2018-02-21 12:19:21', '2018-02-21 12:19:21', NULL),
(43, 'edit-blog', 'Edit Blog', 42, 1, 1, NULL, '2018-02-21 12:19:21', '2018-02-21 12:19:21', NULL),
(44, 'delete-blog', 'Delete Blog', 43, 1, 1, NULL, '2018-02-21 12:19:21', '2018-02-21 12:19:21', NULL),
(45, 'view-faq', 'View FAQ Management', 44, 1, 1, NULL, '2018-02-21 12:19:21', '2018-02-21 12:19:21', NULL),
(46, 'create-faq', 'Create FAQ', 45, 1, 1, NULL, '2018-02-21 12:19:21', '2018-02-21 12:19:21', NULL),
(47, 'edit-faq', 'Edit FAQ', 46, 1, 1, NULL, '2018-02-21 12:19:21', '2018-02-21 12:19:21', NULL),
(48, 'delete-faq', 'Delete FAQ', 47, 1, 1, NULL, '2018-02-21 12:19:21', '2018-02-21 12:19:21', NULL),
(49, 'ManageProductRequest', 'Manageproductrequest Permission', 0, 1, 1, NULL, '2018-06-30 13:02:52', '2018-06-30 13:02:52', NULL),
(50, 'create-product', 'Create Product Permission', 0, 1, 1, NULL, '2018-06-30 13:02:53', '2018-06-30 13:02:53', NULL),
(51, 'store-product', 'Store Product Permission', 0, 1, 1, NULL, '2018-06-30 13:02:53', '2018-06-30 13:02:53', NULL),
(52, 'edit-product', 'Edit Product Permission', 0, 1, 1, NULL, '2018-06-30 13:02:53', '2018-06-30 13:02:53', NULL),
(53, 'update-product', 'Update Product Permission', 0, 1, 1, NULL, '2018-06-30 13:02:54', '2018-06-30 13:02:54', NULL),
(54, 'delete-product', 'Delete Product Permission', 0, 1, 1, NULL, '2018-06-30 13:02:54', '2018-06-30 13:02:54', NULL);

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
(1, 1, 2),
(2, 3, 2),
(3, 4, 2),
(4, 5, 2),
(5, 6, 2),
(6, 7, 2),
(7, 8, 2),
(8, 16, 2),
(9, 20, 2),
(10, 24, 2),
(11, 25, 2),
(12, 26, 2),
(13, 27, 2),
(14, 28, 2),
(15, 29, 2),
(16, 30, 2),
(17, 31, 2),
(18, 33, 2),
(19, 34, 2),
(20, 35, 2),
(21, 36, 2),
(22, 37, 2),
(23, 38, 2),
(24, 39, 2),
(25, 40, 2),
(26, 41, 2),
(27, 42, 2),
(28, 43, 2),
(29, 44, 2),
(30, 45, 2),
(31, 46, 2),
(32, 47, 2),
(33, 48, 2),
(34, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_user`
--

INSERT INTO `permission_user` (`id`, `permission_id`, `user_id`) VALUES
(1, 42, 2),
(2, 34, 2),
(3, 38, 2),
(4, 29, 2),
(5, 46, 2),
(6, 25, 2),
(7, 44, 2),
(8, 36, 2),
(9, 40, 2),
(10, 31, 2),
(11, 48, 2),
(12, 27, 2),
(13, 43, 2),
(14, 35, 2),
(15, 39, 2),
(16, 30, 2),
(17, 47, 2),
(18, 26, 2),
(19, 8, 2),
(20, 3, 2),
(21, 5, 2),
(22, 1, 2),
(23, 33, 2),
(24, 37, 2),
(25, 41, 2),
(26, 6, 2),
(27, 7, 2),
(28, 28, 2),
(29, 45, 2),
(30, 24, 2),
(31, 20, 2),
(32, 16, 2),
(33, 4, 2),
(34, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `all` tinyint(1) NOT NULL DEFAULT '0',
  `sort` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
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
(1, 'Administrator', 1, 1, 1, 1, NULL, '2018-02-21 12:19:18', '2018-02-21 12:19:18', NULL),
(2, 'Executive', 0, 2, 1, 1, NULL, '2018-02-21 12:19:18', '2018-02-21 12:19:18', NULL),
(3, 'User', 0, 3, 1, 1, NULL, '2018-02-21 12:19:18', '2018-02-21 12:19:18', NULL);

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
(1, 1, 1),
(2, 2, 2),
(3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
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
  `seo_keyword` text COLLATE utf8mb4_unicode_ci,
  `seo_description` text COLLATE utf8mb4_unicode_ci,
  `company_contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` text COLLATE utf8mb4_unicode_ci,
  `from_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms` text COLLATE utf8mb4_unicode_ci,
  `disclaimer` text COLLATE utf8mb4_unicode_ci,
  `google_analytics` text COLLATE utf8mb4_unicode_ci,
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
(1, NULL, NULL, 'Laravel Admin Panel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `confirmation_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `is_term_accept` tinyint(1) NOT NULL DEFAULT '0' COMMENT ' 0 = not accepted,1 = accepted',
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
(1, 'Viral', 'Solani', 'admin@admin.com', '$2y$10$TZe3shhlasYNItkR7OVcCeu76nlT2H8nvpazXH3/K7prZqi.aV0ZS', 1, '69d2a3fd6d47fe409ff2d765b5c62d70', 1, 0, 'X9oZe0i3bydL1hLGRmgeoOMjQmcqOXpPGbFVKqgmz6SYmbJSd3bpGNomX5xz', 1, NULL, '2018-02-21 12:19:17', '2018-02-21 12:19:17', NULL),
(2, 'Vipul', 'Basapati', 'executive@executive.com', '$2y$10$3MCZWiDA49SuvhvJn9vBAuxlDHGzwQdg8JS1d4E858PNnQGgm.DWq', 1, 'e2af3d55506808a3b1fc8cd3c521a22f', 1, 0, NULL, 1, NULL, '2018-02-21 12:19:17', '2018-02-21 12:19:17', NULL),
(3, 'User', 'Test', 'user@user.com', '$2y$10$Mn5ai9DUmPB7PM7XARzttOQWr6cuXh22fCfDgTVjkDl3kkFmWwfMK', 1, '3405fbd99b7a258709380e4ee49fd2c7', 1, 0, NULL, 1, NULL, '2018-02-21 12:19:17', '2018-02-21 12:19:17', NULL);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `social_logins`
--
ALTER TABLE `social_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_logins_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_logins`
--
ALTER TABLE `social_logins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

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
