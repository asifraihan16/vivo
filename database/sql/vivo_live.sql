-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2022 at 01:25 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vivo_live`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `created_at`, `updated_at`, `title`, `img`, `desc`) VALUES
(3, '2022-03-25 16:05:26', '2022-03-25 16:05:26', 'Blog 1', 'app/public/blog/Blog 1_20220325120526.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'),
(4, '2022-03-25 16:06:54', '2022-03-25 16:06:54', 'Blog 2', 'app/public/blog/Blog 2_20220325120654.jpg', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'),
(5, '2022-03-27 15:15:27', '2022-03-27 15:15:27', 'Blog 3', 'app/public/blog/Blog 3_20220327081527.jpg', '<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>'),
(6, '2022-03-27 15:15:49', '2022-03-27 15:15:49', 'Blog 4', 'app/public/blog/Blog 4_20220327081549.jpg', '<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>'),
(7, '2022-03-27 15:16:05', '2022-03-27 15:16:05', 'Blog 4', 'app/public/blog/Blog 4_20220327081605.jpg', '<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>'),
(8, '2022-03-27 15:16:23', '2022-03-27 15:16:23', 'Blog 6', 'app/public/blog/Blog 6_20220327081623.jpg', '<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_detail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `title`, `title_detail`, `img1`, `img2`, `img3`, `desc`, `created_at`, `updated_at`) VALUES
(2, 'Y33s Photography  Contest Campaign', 'Y33s Photography  Contest Campaign  Details', 'app/public/campaign/Y33s Photography  Contest Campaignimg1_20220328085717.jpg', 'app/public/campaign/Y33s Photography  Contest Campaignimg2_20220328084431.jpg', 'app/public/campaign/Y33s Photography  Contest Campaignimg2_20220328085704.jpg', '<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is availableIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is availableIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available</p>', '2022-03-28 15:44:31', '2022-03-28 15:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `exibitions`
--

CREATE TABLE `exibitions` (
  `id` int(11) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `img5` varchar(255) NOT NULL,
  `img6` varchar(255) NOT NULL,
  `img7` varchar(255) NOT NULL,
  `img8` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exibitions`
--

INSERT INTO `exibitions` (`id`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `created_at`, `updated_at`) VALUES
(7, 'app/public/exibition/img1_20220325121014.jpg', 'app/public/exibition/img2_20220325121014.jpg', 'app/public/exibition/img3_20220325121014.jpg', 'app/public/exibition/img4_20220325121014.jpg', 'app/public/exibition/img5_20220325121014.jpg', 'app/public/exibition/img6_20220325121014.jpg', 'app/public/exibition/img7_20220325121014.jpg', 'app/public/exibition/img8_20220325121014.jpg', '2022-03-25 16:10:14', '2022-03-25 16:10:14');

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
-- Table structure for table `home_sliders`
--

CREATE TABLE `home_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sliders`
--

INSERT INTO `home_sliders` (`id`, `name`, `img`, `created_at`, `updated_at`) VALUES
(3, 'Slider 1', 'images/Slider 1_20220325115856.jpg', '2022-03-25 15:58:57', '2022-03-25 15:58:57'),
(4, 'Slider 2', 'images/Slider 2_20220325115912.jpg', '2022-03-25 15:59:12', '2022-03-25 15:59:12'),
(5, 'Slider 3', 'images/Slider 3_20220325115923.jpg', '2022-03-25 15:59:23', '2022-03-25 15:59:23'),
(6, 'Slider 4', 'images/Slider 4_20220325115933.jpg', '2022-03-25 15:59:34', '2022-03-25 15:59:34');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2022_03_13_080851_create_mobile_series_table', 2),
(4, '2022_03_13_080909_create_mobile_series_versions_table', 2),
(5, '2022_03_13_080923_create_tags_table', 2),
(6, '2022_03_13_081018_create_blogs_table', 2),
(7, '2022_03_13_081150_create_user_profiles_table', 2),
(8, '2022_03_13_085135_create_photo_galleries_table', 3),
(9, '2022_03_17_093759_create_home_sliders_table', 4),
(10, '2022_03_17_094227_create_moment_of_the_months_table', 4),
(11, '2022_03_17_094330_create_moment_of_the_weeks_table', 4),
(12, '2022_03_17_094417_create_playlists_table', 4),
(13, '2022_03_17_094440_create_campaigns_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_series`
--

CREATE TABLE `mobile_series` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_series`
--

INSERT INTO `mobile_series` (`id`, `name`, `img`, `status`, `created_at`, `updated_at`) VALUES
(27, 'V Series', NULL, 1, '2022-03-25 11:58:33', '2022-03-25 11:58:33'),
(28, 'X Series', NULL, 1, '2022-03-25 11:58:46', '2022-03-25 11:58:46'),
(29, 'Y Series', NULL, 1, '2022-03-25 11:58:51', '2022-03-25 11:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_series_versions`
--

CREATE TABLE `mobile_series_versions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mobile_series_id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_series_versions`
--

INSERT INTO `mobile_series_versions` (`id`, `created_at`, `updated_at`, `mobile_series_id`, `name`, `img`, `status`) VALUES
(6, '2022-03-25 11:59:40', '2022-03-25 11:59:40', 27, 'V23e', '', 1),
(7, '2022-03-25 11:59:48', '2022-03-25 11:59:48', 27, 'V23 5G', '', 1),
(8, '2022-03-25 11:59:56', '2022-03-25 11:59:56', 27, 'V21', '', 1),
(9, '2022-03-25 12:00:10', '2022-03-25 12:00:10', 28, 'X70 Pro', '', 1),
(10, '2022-03-25 12:00:16', '2022-03-25 12:00:16', 29, 'Y21T', '', 1),
(11, '2022-03-25 12:00:23', '2022-03-25 12:00:23', 29, 'Y15s', '', 1),
(12, '2022-03-25 12:00:31', '2022-03-25 12:00:31', 29, 'Y21', '', 1),
(13, '2022-03-25 12:00:38', '2022-03-25 12:00:38', 29, 'Y1s', '', 1),
(14, '2022-03-25 12:00:44', '2022-03-25 12:00:44', 29, 'Y53s', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `moment_of_the_months`
--

CREATE TABLE `moment_of_the_months` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title6` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link6` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title7` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link7` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title8` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link8` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `moment_of_the_months`
--

INSERT INTO `moment_of_the_months` (`id`, `title1`, `img1`, `link1`, `title2`, `img2`, `link2`, `title3`, `img3`, `link3`, `title4`, `img4`, `link4`, `title5`, `img5`, `link5`, `title6`, `img6`, `link6`, `title7`, `img7`, `link7`, `title8`, `img8`, `link8`, `created_at`, `updated_at`) VALUES
(11, 'Title 1', 'app/public/momentOfTheMonth/Title 1_20220325120330.jpg', 'Link 1', 'Title 2', 'app/public/momentOfTheMonth/Title 2_20220325120330.jpg', 'Link 2', 'Title 3', 'app/public/momentOfTheMonth/Title 3_20220325120330.jpg', 'Link 3', 'Title 4', 'app/public/momentOfTheMonth/Title 4_20220325120330.jpg', 'Link 4', 'Title 5', 'app/public/momentOfTheMonth/_20220325120330.jpg', 'Link 5', 'Title 6', 'app/public/momentOfTheMonth/Title 6_20220325120330.jpg', 'Link 6', 'Title 7', 'app/public/momentOfTheMonth/Title 7_20220325120330.jpg', 'Link 7', NULL, NULL, NULL, '2022-03-25 16:03:30', '2022-03-25 16:03:30');

-- --------------------------------------------------------

--
-- Table structure for table `moment_of_the_weeks`
--

CREATE TABLE `moment_of_the_weeks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photographers`
--

CREATE TABLE `photographers` (
  `id` int(11) NOT NULL,
  `mobile_series_id` int(11) NOT NULL,
  `mobile_series_versions_id1` int(11) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `mobile_series_versions_id2` int(11) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `mobile_series_versions_id3` int(11) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `mobile_series_versions_id4` int(11) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `mobile_series_versions_id5` int(11) NOT NULL,
  `img5` varchar(255) NOT NULL,
  `mobile_series_versions_id6` int(11) NOT NULL,
  `img6` varchar(255) NOT NULL,
  `mobile_series_versions_id7` int(11) NOT NULL,
  `img7` varchar(255) NOT NULL,
  `mobile_series_versions_id8` int(11) NOT NULL,
  `img8` varchar(255) NOT NULL,
  `mobile_series_versions_id9` int(11) NOT NULL,
  `img9` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `photo_galleries`
--

CREATE TABLE `photo_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile_series_versions_id` int(11) DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photo_galleries`
--

INSERT INTO `photo_galleries` (`id`, `mobile_series_versions_id`, `title`, `img`, `status`, `users_id`, `created_at`, `updated_at`) VALUES
(10, 6, 'V23e', 'app/public/photo_galleries/_20220325191312.jpg', 1, 18, '2022-03-25 23:13:19', '2022-03-25 23:19:56'),
(11, 6, 'V23 5G', 'app/public/photo_galleries/_20220325191354.jpg', 1, 18, '2022-03-25 23:13:58', '2022-03-25 23:19:53'),
(12, 7, 'V21', 'app/public/photo_galleries/_20220325191422.jpg', 1, 18, '2022-03-25 23:14:24', '2022-03-25 23:19:51'),
(13, 9, 'X70 Pro', 'app/public/photo_galleries/_20220325191445.jpg', 1, 18, '2022-03-25 23:14:48', '2022-03-25 23:19:49'),
(14, 10, 'Y21T', 'app/public/photo_galleries/_20220325191516.jpg', 1, 18, '2022-03-25 23:15:19', '2022-03-25 23:19:45'),
(15, 11, 'Y15s', 'app/public/photo_galleries/_20220325191540.jpg', 1, 18, '2022-03-25 23:15:42', '2022-03-25 23:19:43'),
(16, 13, 'Y1s', 'app/public/photo_galleries/_20220325191608.jpg', 1, 18, '2022-03-25 23:16:11', '2022-03-25 23:19:38'),
(17, 6, 'interior', 'app/public/photo_galleries/_20220325204954.jpg', 0, 18, '2022-03-26 00:50:19', '2022-03-26 00:50:19'),
(18, 7, 'V21', 'app/public/photo_galleries/_20220325191422.jpg', 1, 18, '2022-03-25 23:14:24', '2022-03-25 23:19:51'),
(19, 6, 'V21', 'app/public/photo_galleries/_20220325191422.jpg', 1, 18, '2022-03-25 23:14:24', '2022-03-25 23:19:51'),
(20, 11, 'V21', 'app/public/photo_galleries/_20220325191422.jpg', 1, 18, '2022-03-25 23:14:24', '2022-03-25 23:19:51'),
(21, 14, 'V21', 'app/public/photo_galleries/_20220325191422.jpg', 1, 18, '2022-03-25 23:14:24', '2022-03-25 23:19:51'),
(22, 13, 'V21', 'app/public/photo_galleries/_20220325191422.jpg', 1, 18, '2022-03-25 23:14:24', '2022-03-25 23:19:51'),
(23, 7, 'V21', 'app/public/photo_galleries/_20220325191422.jpg', 1, 18, '2022-03-25 23:14:24', '2022-03-25 23:19:51'),
(24, 7, 'V21', 'app/public/photo_galleries/_20220325191422.jpg', 1, 18, '2022-03-25 23:14:24', '2022-03-25 23:19:51'),
(25, 7, 'V21', 'app/public/photo_galleries/_20220325191422.jpg', 1, 18, '2022-03-25 23:14:24', '2022-03-25 23:19:51'),
(26, 11, 'V21', 'app/public/photo_galleries/_20220325191422.jpg', 1, 18, '2022-03-25 23:14:24', '2022-03-25 23:19:51'),
(27, 7, 'V21', 'app/public/photo_galleries/_20220325191422.jpg', 1, 18, '2022-03-25 23:14:24', '2022-03-25 23:19:51'),
(28, 7, 'V21', 'app/public/photo_galleries/_20220325191422.jpg', 1, 18, '2022-03-25 23:14:24', '2022-03-25 23:19:51'),
(29, 11, 'V21', 'app/public/photo_galleries/_20220325191422.jpg', 1, 18, '2022-03-25 23:14:24', '2022-03-25 23:19:51'),
(30, 6, 'V21', 'app/public/photo_galleries/_20220325191422.jpg', 1, 18, '2022-03-25 23:14:24', '2022-03-25 23:19:51'),
(31, 11, 'V21', 'app/public/photo_galleries/_20220325191422.jpg', 1, 18, '2022-03-25 23:14:24', '2022-03-25 23:19:51'),
(32, 11, 'V21', 'app/public/photo_galleries/_20220325191422.jpg', 1, 18, '2022-03-25 23:14:24', '2022-03-25 23:19:51');

-- --------------------------------------------------------

--
-- Table structure for table `photo_galleries_tags`
--

CREATE TABLE `photo_galleries_tags` (
  `id` int(11) NOT NULL,
  `photo_galleries_id` int(11) NOT NULL,
  `tags_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photo_galleries_tags`
--

INSERT INTO `photo_galleries_tags` (`id`, `photo_galleries_id`, `tags_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2022-03-23 10:02:02', '2022-03-23 10:02:02'),
(2, 1, 3, '2022-03-23 10:02:02', '2022-03-23 10:02:02'),
(3, 1, 4, '2022-03-23 10:02:02', '2022-03-23 10:02:02'),
(4, 2, 1, '2022-03-23 10:06:53', '2022-03-23 10:06:53'),
(5, 2, 4, '2022-03-23 10:06:54', '2022-03-23 10:06:54'),
(6, 3, 1, '2022-03-23 10:09:26', '2022-03-23 10:09:26'),
(7, 3, 4, '2022-03-23 10:09:26', '2022-03-23 10:09:26'),
(8, 4, 1, '2022-03-23 10:13:24', '2022-03-23 10:13:24'),
(9, 4, 4, '2022-03-23 10:13:24', '2022-03-23 10:13:24'),
(10, 5, 1, '2022-03-23 10:13:41', '2022-03-23 10:13:41'),
(11, 5, 3, '2022-03-23 10:13:41', '2022-03-23 10:13:41'),
(12, 5, 4, '2022-03-23 10:13:41', '2022-03-23 10:13:41'),
(13, 6, 1, '2022-03-23 10:13:54', '2022-03-23 10:13:54'),
(14, 6, 3, '2022-03-23 10:13:54', '2022-03-23 10:13:54'),
(15, 6, 4, '2022-03-23 10:13:55', '2022-03-23 10:13:55'),
(16, 7, 1, '2022-03-23 10:18:35', '2022-03-23 10:18:35'),
(17, 7, 3, '2022-03-23 10:18:35', '2022-03-23 10:18:35'),
(18, 7, 4, '2022-03-23 10:18:35', '2022-03-23 10:18:35'),
(19, 8, 1, '2022-03-23 10:19:24', '2022-03-23 10:19:24'),
(20, 8, 3, '2022-03-23 10:19:24', '2022-03-23 10:19:24'),
(21, 8, 4, '2022-03-23 10:19:24', '2022-03-23 10:19:24'),
(22, 9, 3, '2022-03-23 14:35:54', '2022-03-23 14:35:54'),
(23, 9, 4, '2022-03-23 14:35:54', '2022-03-23 14:35:54'),
(24, 10, 5, '2022-03-25 23:13:19', '2022-03-25 23:13:19'),
(25, 10, 6, '2022-03-25 23:13:19', '2022-03-25 23:13:19'),
(26, 11, 7, '2022-03-25 23:13:58', '2022-03-25 23:13:58'),
(27, 11, 8, '2022-03-25 23:13:58', '2022-03-25 23:13:58'),
(28, 11, 9, '2022-03-25 23:13:58', '2022-03-25 23:13:58'),
(29, 12, 5, '2022-03-25 23:14:24', '2022-03-25 23:14:24'),
(30, 12, 6, '2022-03-25 23:14:24', '2022-03-25 23:14:24'),
(31, 12, 7, '2022-03-25 23:14:24', '2022-03-25 23:14:24'),
(32, 12, 8, '2022-03-25 23:14:24', '2022-03-25 23:14:24'),
(33, 13, 5, '2022-03-25 23:14:48', '2022-03-25 23:14:48'),
(34, 13, 6, '2022-03-25 23:14:48', '2022-03-25 23:14:48'),
(35, 14, 9, '2022-03-25 23:15:19', '2022-03-25 23:15:19'),
(36, 15, 7, '2022-03-25 23:15:42', '2022-03-25 23:15:42'),
(37, 15, 8, '2022-03-25 23:15:42', '2022-03-25 23:15:42'),
(38, 16, 7, '2022-03-25 23:16:11', '2022-03-25 23:16:11'),
(39, 16, 8, '2022-03-25 23:16:11', '2022-03-25 23:16:11'),
(40, 16, 9, '2022-03-25 23:16:11', '2022-03-25 23:16:11'),
(41, 17, 8, '2022-03-26 00:50:19', '2022-03-26 00:50:19');

-- --------------------------------------------------------

--
-- Table structure for table `playlist1_main_vedios`
--

CREATE TABLE `playlist1_main_vedios` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `desc` text NOT NULL,
  `link` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playlist1_main_vedios`
--

INSERT INTO `playlist1_main_vedios` (`id`, `title`, `img`, `desc`, `link`, `created_at`, `updated_at`) VALUES
(3, 'Playlist 1', 'images/Playlist 1_20220327102151.jpg', 'abhhhhhhhhhhhhhabjha', 'https://www.youtube.com/watch?v=kVkt5HEZxls', '2022-03-27 17:21:51', '2022-03-27 17:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `playlist1_other_vedios`
--

CREATE TABLE `playlist1_other_vedios` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playlist1_other_vedios`
--

INSERT INTO `playlist1_other_vedios` (`id`, `link`, `img`, `created_at`, `updated_at`) VALUES
(3, 'https://www.youtube.com/watch?v=CWCNKJ5SvWE', '', '2022-03-25 17:59:18', '2022-03-25 17:59:18'),
(4, 'https://www.youtube.com/watch?v=OUnrnOOsNao', '', '2022-03-25 17:59:34', '2022-03-25 17:59:34'),
(5, 'https://www.youtube.com/watch?v=QEFRnkFWn1k&list=PLX-fyH3pM1mh-B7qUFBA5rMHZFdqmkxuE&index=3', '', '2022-03-25 18:00:09', '2022-03-25 18:00:09'),
(6, 'https://www.youtube.com/watch?v=V5ltbNJosRw', '', '2022-03-25 18:00:37', '2022-03-25 18:00:37'),
(7, 'https://www.youtube.com/watch?v=n3KBF1l_bgY', '', '2022-03-25 18:00:52', '2022-03-25 18:00:52');

-- --------------------------------------------------------

--
-- Table structure for table `playlist2_main_vedios`
--

CREATE TABLE `playlist2_main_vedios` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `desc` text NOT NULL,
  `link` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playlist2_main_vedios`
--

INSERT INTO `playlist2_main_vedios` (`id`, `title`, `img`, `desc`, `link`, `created_at`, `updated_at`) VALUES
(2, 'Playlist 2', NULL, 'n publishing and graphic design, Lorem ipsum is a', 'https://www.youtube.com/watch?v=V5ltbNJosRw', '2022-03-27 11:01:51', '2022-03-27 11:01:51');

-- --------------------------------------------------------

--
-- Table structure for table `playlist2_other_vedios`
--

CREATE TABLE `playlist2_other_vedios` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playlist2_other_vedios`
--

INSERT INTO `playlist2_other_vedios` (`id`, `img`, `link`, `created_at`, `updated_at`) VALUES
(3, '', 'https://www.youtube.com/watch?v=gqDmGsvJyMg', '2022-03-25 18:01:24', '2022-03-25 18:01:24'),
(4, '', 'https://www.youtube.com/watch?v=ZPzvu2nV-M0', '2022-03-25 18:01:41', '2022-03-25 18:01:41'),
(6, '', 'https://www.youtube.com/watch?v=vOFKtzhUVsM', '2022-03-25 18:02:12', '2022-03-25 18:02:12'),
(7, '', 'https://www.youtube.com/watch?v=CJSA4BbeObs', '2022-03-25 18:03:43', '2022-03-25 18:03:43'),
(8, '', 'https://www.youtube.com/watch?v=YZiWW3yvCvI', '2022-03-25 22:06:09', '2022-03-25 22:06:09');

-- --------------------------------------------------------

--
-- Table structure for table `playlists`
--

CREATE TABLE `playlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Landscape', 1, '2022-03-25 12:01:03', '2022-03-25 12:01:03'),
(6, 'Portrait', 1, '2022-03-25 12:01:17', '2022-03-25 12:01:17'),
(7, 'Nature', 1, '2022-03-25 12:01:24', '2022-03-25 12:01:24'),
(8, 'Abstract', 1, '2022-03-25 12:01:31', '2022-03-25 12:01:31'),
(9, 'City Lights', 1, '2022-03-25 12:02:11', '2022-03-25 12:02:11'),
(10, 'Sunset', 1, '2022-03-25 12:02:17', '2022-03-25 12:02:17'),
(11, 'Sunraise', 1, '2022-03-25 12:02:23', '2022-03-25 12:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contact`, `provider`, `provider_id`, `google_provider`, `google_provider_id`, `email_verified_at`, `img`, `password`, `is_admin`, `remember_token`, `user_type`, `created_at`, `updated_at`) VALUES
(1, 'test 1', 'admin@admin.com', NULL, '', '', '', NULL, NULL, 'app/public/profile_image/test 1_20220324214508.jpg', '$2y$10$sYgSElpCY/u5NrMJkByAn.4ZNrr7gI/rQSIxEPkEtBgoaL9Zl/Yyq', NULL, NULL, 1, '2022-03-12 01:38:08', '2022-03-25 04:45:08'),
(2, 'Arafat', 'admin1@admin.com', NULL, '', '', '', NULL, NULL, NULL, '$2y$10$galVnjHzG06Xd1SYUbtoNewm159Fn9u1tGaVBV46lI6cl7W0nRR6m', NULL, NULL, NULL, '2022-03-12 01:46:25', '2022-03-12 01:46:25'),
(3, 'raff', 'adminq@admin.com', NULL, '', '', '', NULL, NULL, NULL, '$2y$10$O7Mn7dHb40cqyFEZhgvuN.v56nm7X9/WiAeoBuPMFtxt3dTsk1Psm', NULL, NULL, NULL, '2022-03-12 01:47:04', '2022-03-12 01:47:04'),
(14, 'Arafat Rahman', 'shetshuvro@gmail.com', NULL, 'facebook', '4712984828824310', NULL, NULL, NULL, NULL, '3a2a9aef4cbed81244820a091667c0bd', NULL, NULL, NULL, '2022-03-21 06:20:27', '2022-03-21 06:20:27'),
(15, 'Arafat Rahman', 'arafat@lasermedicalbd.com', NULL, NULL, NULL, 'google', '111748769476403630927', NULL, NULL, '1a3650aedfdd3a21444047ed2d89458f', NULL, NULL, NULL, '2022-03-21 06:20:40', '2022-03-21 06:20:40'),
(16, 'Arafat Rahman', 'projects.rahmanarafat13@gmail.com', NULL, NULL, NULL, 'google', '118266271459181393806', NULL, NULL, 'f4334c131c781e2a6f0a5e34814c8147', NULL, NULL, NULL, '2022-03-23 07:48:07', '2022-03-23 07:48:07'),
(17, 'Arafat', 'shetshuvro1@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$TAyyUGQhRxGeu.wTck6DGuQ00.0K2ry5QgAoxQ780FYAYrVe9c4pC', NULL, NULL, NULL, '2022-03-25 05:56:58', '2022-03-25 05:56:58'),
(18, 'ullash', 'ullash@gmail.com', '1234567890', NULL, NULL, NULL, NULL, NULL, 'app/public/profile_image/ullash_20220324233914.jpg', '$2y$10$eLoRjCdWHknzp9X2y3XIeuBGAGiHlQoA8gveR8SvGgLAXHWMEw7hm', NULL, NULL, NULL, '2022-03-25 06:20:55', '2022-03-26 03:47:42'),
(19, 'ullash', 'ullash1@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$Xdr5Q5avKfSZFmL07/FDyOCTDyE95xxMUiA.9RsBRLHKB9pbC1EFK', NULL, NULL, NULL, '2022-03-25 06:21:36', '2022-03-25 06:21:36'),
(20, 'final', 'final@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$mF2LhDPpqgvAOOXKzhBCxO7cRyEHboVEcI8Lqz/sOexTMtRDfCvt6', NULL, NULL, NULL, '2022-03-25 06:26:44', '2022-03-25 06:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exibitions`
--
ALTER TABLE `exibitions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sliders`
--
ALTER TABLE `home_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_series`
--
ALTER TABLE `mobile_series`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_series_versions`
--
ALTER TABLE `mobile_series_versions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moment_of_the_months`
--
ALTER TABLE `moment_of_the_months`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moment_of_the_weeks`
--
ALTER TABLE `moment_of_the_weeks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photographers`
--
ALTER TABLE `photographers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_galleries_tags`
--
ALTER TABLE `photo_galleries_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlist1_main_vedios`
--
ALTER TABLE `playlist1_main_vedios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlist1_other_vedios`
--
ALTER TABLE `playlist1_other_vedios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlist2_main_vedios`
--
ALTER TABLE `playlist2_main_vedios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlist2_other_vedios`
--
ALTER TABLE `playlist2_other_vedios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlists`
--
ALTER TABLE `playlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exibitions`
--
ALTER TABLE `exibitions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_sliders`
--
ALTER TABLE `home_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mobile_series`
--
ALTER TABLE `mobile_series`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `mobile_series_versions`
--
ALTER TABLE `mobile_series_versions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `moment_of_the_months`
--
ALTER TABLE `moment_of_the_months`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `moment_of_the_weeks`
--
ALTER TABLE `moment_of_the_weeks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photographers`
--
ALTER TABLE `photographers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `photo_galleries_tags`
--
ALTER TABLE `photo_galleries_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `playlist1_main_vedios`
--
ALTER TABLE `playlist1_main_vedios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `playlist1_other_vedios`
--
ALTER TABLE `playlist1_other_vedios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `playlist2_main_vedios`
--
ALTER TABLE `playlist2_main_vedios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `playlist2_other_vedios`
--
ALTER TABLE `playlist2_other_vedios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `playlists`
--
ALTER TABLE `playlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
