/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 5.7.33 : Database - vivo_moments
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`vivo_moments` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `vivo_moments`;

/*Table structure for table `blogs` */

DROP TABLE IF EXISTS `blogs`;

CREATE TABLE `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `blogs` */

insert  into `blogs`(`id`,`created_at`,`updated_at`,`title`,`img`,`desc`) values 
(3,'2022-03-25 22:05:26','2022-03-30 22:06:08','Blog 1','blog/uFwz4zVlhZOwqIEBZ2av8c6WaFYjrlaZ58C5ZToi.jpg','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'),
(4,'2022-03-25 22:06:54','2022-03-30 22:07:32','Blog 2','blog/H0G7wJyEOuPpeVbSpvNhMWJujrpkscCuxzFsWhq1.jpg','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'),
(5,'2022-03-27 21:15:27','2022-03-30 22:09:11','Blog 3','blog/NlqWKQg03n9oovrvqBe7GHlrpoYIXNW3iV2DgecF.jpg','<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>'),
(6,'2022-03-27 21:15:49','2022-03-30 22:09:21','Blog 4','blog/5XieLtZtzuq6QoBdOY6h6RpSmdU2f0QO6DL6ZzQN.jpg','<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>'),
(7,'2022-03-27 21:16:05','2022-03-30 22:09:34','Blog 5','blog/08RQlnCvme6zHFjvDsbUasT7bcEzIf7BB4IyGnGj.jpg','<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>'),
(8,'2022-03-27 21:16:23','2022-03-30 22:09:57','Blog 6','blog/L38DbFdfmECitM6rTOA4DAoo7Ne1bBuySnOTYSqd.jpg','<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>');

/*Table structure for table `campaigns` */

DROP TABLE IF EXISTS `campaigns`;

CREATE TABLE `campaigns` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_detail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `campaigns` */

insert  into `campaigns`(`id`,`title`,`title_detail`,`img1`,`img2`,`img3`,`desc`,`created_at`,`updated_at`) values 
(2,'vivo Moments of Nature','Photography  Contest','campaign/EoWvA3iKp8Vmw4JgSFJXvvnOlE8g6UrhBqAzak1w.jpg','app/public/campaign/Y33s Photography  Contest Campaignimg2_20220328084431.jpg','app/public/campaign/Y33s Photography  Contest Campaignimg2_20220328085704.jpg','<p>Share your best nature photographs \r\n with vivo.</p>\r\n<p>Upload photographs with watermark at vivomoments.com and win exciting prize.</p>','2022-03-28 21:44:31','2022-03-31 18:23:24');

/*Table structure for table `exibitions` */

DROP TABLE IF EXISTS `exibitions`;

CREATE TABLE `exibitions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `img5` varchar(255) NOT NULL,
  `img6` varchar(255) NOT NULL,
  `img7` varchar(255) NOT NULL,
  `img8` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `exibitions` */

insert  into `exibitions`(`id`,`img1`,`img2`,`img3`,`img4`,`img5`,`img6`,`img7`,`img8`,`created_at`,`updated_at`) values 
(7,'exibition/CZzKV6b302InJn5A08YpKli2OOBLwyaZV2Bcm8uk.jpg','exibition/WsOepk9dx29QN0V7fLCd59lbd2SlsDjgJZaPia0X.jpg','exibition/PJwipZtiYB4Ni8M7X3nBG0xh3Zu9lRdbFLfYY9Kd.jpg','exibition/oIkO0oLMGFSVezGTgMkjmIOe4MHupaWlbCwEE1AP.jpg','exibition/myeKo440bVIqQzcqikbnP4uXc6atgwoZ5YhSGwkF.jpg','exibition/JZ82yoNDojA2tfKQBR0CgOX1ELSy2XVY8K16zr4K.jpg','exibition/Sp7EsRfaKZTdjBhlySKuNWn3HxZamM7z7fL78CDV.jpg','exibition/ygYk2wJWigMMWkk8hLTci1VpYOMn7GK2390hP2r2.jpg','2022-03-25 22:10:14','2022-03-30 20:58:24');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `home_sliders` */

DROP TABLE IF EXISTS `home_sliders`;

CREATE TABLE `home_sliders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `home_sliders` */

insert  into `home_sliders`(`id`,`name`,`img`,`created_at`,`updated_at`) values 
(3,'Slider 1','images/Me2rhsQe6VjUZK5ua7ybcpgNRPvIUxZoXjMuHbxA.jpg','2022-03-25 21:58:57','2022-03-30 01:04:45'),
(4,'Slider 2','images/l8uyTooTK4CO5ZHzRpYk9oeDDmR7FmV1soqBb5Kj.jpg','2022-03-25 21:59:12','2022-03-30 20:54:28'),
(5,'Slider 3','images/6rS3yxsogD2bCnPXyaIFw2RhtjIlPi72og9cj0YT.jpg','2022-03-25 21:59:23','2022-03-30 20:54:41'),
(6,'Slider 4','images/EXPppWROtOfYjD7K9IuNf7ZVnf8LXoUOi3D9BMk7.jpg','2022-03-25 21:59:34','2022-03-30 20:54:50'),
(7,'Slider 5','images/H2whwVBOcdieVorMRquVZZqXrXD7hnheMjRRJLnl.jpg','2022-03-30 01:04:59','2022-03-30 01:04:59');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2019_08_19_000000_create_failed_jobs_table',1),
(3,'2022_03_13_080851_create_mobile_series_table',2),
(4,'2022_03_13_080909_create_mobile_series_versions_table',2),
(5,'2022_03_13_080923_create_tags_table',2),
(6,'2022_03_13_081018_create_blogs_table',2),
(7,'2022_03_13_081150_create_user_profiles_table',2),
(8,'2022_03_13_085135_create_photo_galleries_table',3),
(9,'2022_03_17_093759_create_home_sliders_table',4),
(10,'2022_03_17_094227_create_moment_of_the_months_table',4),
(11,'2022_03_17_094330_create_moment_of_the_weeks_table',4),
(12,'2022_03_17_094417_create_playlists_table',4),
(13,'2022_03_17_094440_create_campaigns_table',4);

/*Table structure for table `mobile_series` */

DROP TABLE IF EXISTS `mobile_series`;

CREATE TABLE `mobile_series` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mobile_series` */

insert  into `mobile_series`(`id`,`name`,`img`,`status`,`created_at`,`updated_at`) values 
(33,'X-series','profile_images/NVXpg9GVDPsNxBNeTyy43ZQyUZReymUK0knD7YWs.jpg',1,'2022-03-30 00:37:05','2022-03-30 00:37:05'),
(34,'V-Series','profile_images/0FWA0yutMsoCD3NFD35Vo2xl9ahFx6RUGKmrhoAi.jpg',1,'2022-03-30 00:37:30','2022-03-30 00:37:30'),
(35,'Y-Series','profile_images/55mu3fDtOVMKR9JptTpa5YZ0wxpGKax64txpSSph.jpg',1,'2022-03-30 00:37:47','2022-03-30 00:37:47');

/*Table structure for table `mobile_series_versions` */

DROP TABLE IF EXISTS `mobile_series_versions`;

CREATE TABLE `mobile_series_versions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mobile_series_id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mobile_series_versions` */

insert  into `mobile_series_versions`(`id`,`created_at`,`updated_at`,`mobile_series_id`,`name`,`img`,`status`) values 
(6,'2022-03-25 17:59:40','2022-03-31 11:52:13',34,'V23e','',1),
(7,'2022-03-25 17:59:48','2022-03-31 11:52:14',34,'V23 5G','',1),
(8,'2022-03-25 17:59:56','2022-03-31 11:52:14',34,'V21','',1),
(9,'2022-03-25 18:00:10','2022-03-31 11:52:15',33,'X70 Pro','',1),
(10,'2022-03-25 18:00:16','2022-03-31 11:52:16',35,'Y21T','',1),
(11,'2022-03-25 18:00:23','2022-03-31 11:52:16',35,'Y15s','',1),
(12,'2022-03-25 18:00:31','2022-03-31 11:52:18',35,'Y21','',1),
(13,'2022-03-25 18:00:38','2022-03-31 11:52:18',35,'Y1s','',1),
(14,'2022-03-25 18:00:44','2022-03-31 11:52:19',35,'Y53s','',1),
(15,'2022-03-31 11:03:35','2022-03-31 11:52:20',34,'V20','',1);

/*Table structure for table `moment_of_the_months` */

DROP TABLE IF EXISTS `moment_of_the_months`;

CREATE TABLE `moment_of_the_months` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title1` text COLLATE utf8mb4_unicode_ci,
  `img1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link1` text COLLATE utf8mb4_unicode_ci,
  `title2` text COLLATE utf8mb4_unicode_ci,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link2` text COLLATE utf8mb4_unicode_ci,
  `title3` text COLLATE utf8mb4_unicode_ci,
  `img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link3` text COLLATE utf8mb4_unicode_ci,
  `title4` text COLLATE utf8mb4_unicode_ci,
  `img4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link4` text COLLATE utf8mb4_unicode_ci,
  `title5` text COLLATE utf8mb4_unicode_ci,
  `img5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link5` text COLLATE utf8mb4_unicode_ci,
  `title6` text COLLATE utf8mb4_unicode_ci,
  `img6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link6` text COLLATE utf8mb4_unicode_ci,
  `title7` text COLLATE utf8mb4_unicode_ci,
  `img7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link7` text COLLATE utf8mb4_unicode_ci,
  `title8` text COLLATE utf8mb4_unicode_ci,
  `img8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link8` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `moment_of_the_months` */

insert  into `moment_of_the_months`(`id`,`title1`,`img1`,`link1`,`title2`,`img2`,`link2`,`title3`,`img3`,`link3`,`title4`,`img4`,`link4`,`title5`,`img5`,`link5`,`title6`,`img6`,`link6`,`title7`,`img7`,`link7`,`title8`,`img8`,`link8`,`created_at`,`updated_at`) values 
(11,'Title 1','momentOfTheMonth/LRnPn4aX3dS4eroWKWV4wNQBHTs7giC28geEdajT.jpg','Link 1','Title 2','momentOfTheMonth/BfqpndP3W3SqYSmmdxByhnMKQh9lX3NK5a4hL8VH.jpg','Link 2','Title 3','momentOfTheMonth/WOKIXRWnggIDB9UmXUWFAUSl1fYqyhAqLT8p8X3m.jpg','Link 3','Title 4','momentOfTheMonth/YcDm6s7AOwnog2LBwIJzuBG6DWHyoUlN1bq4rl5Y.jpg','Link 4','Title 5','momentOfTheMonth/JA88fa0bb0kCTiMqwgpQI8bJOY9nbM7EGF8FZrmQ.jpg','Link 5','Title 6','momentOfTheMonth/yNQryBkSgteoGiKVqwkhhPWqmxH513AJUOPWxkIt.jpg','Link 6','Title 7','momentOfTheMonth/BbIuZ7kEbtJ6J5ZxC84hrfdI91i0KwE1FaUaZbEn.jpg','Link 7',NULL,NULL,NULL,'2022-03-25 22:03:30','2022-03-30 21:16:30');

/*Table structure for table `moment_of_the_weeks` */

DROP TABLE IF EXISTS `moment_of_the_weeks`;

CREATE TABLE `moment_of_the_weeks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `moment_of_the_weeks` */

/*Table structure for table `photo_galleries` */

DROP TABLE IF EXISTS `photo_galleries`;

CREATE TABLE `photo_galleries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mobile_series_versions_id` int(11) DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `photo_galleries` */

insert  into `photo_galleries`(`id`,`mobile_series_versions_id`,`title`,`img`,`status`,`users_id`,`created_at`,`updated_at`) values 
(1,12,'Up n down','photo_galleries/PkBMPHznSMVkdpCSHKkuXgfKqKUcRDzQMyUhETZc.jpg',1,31,'2022-03-31 14:49:46','2022-03-31 16:28:06'),
(2,6,'River Bank','photo_galleries/u2hTTZiNCCXx4YtZgd7NvcjQ9rfkPD4VJgkp1b3b.jpg',1,30,'2022-03-31 14:50:20','2022-03-31 16:28:10'),
(3,6,'Eye','photo_galleries/9ma3a0IWPXI12s6fCUF87AUGDJklyb8pzAsTWqVl.jpg',1,30,'2022-03-31 14:51:01','2022-03-31 16:28:58'),
(4,12,'natural picture','photo_galleries/WjpQxZpZRWPpdwgsV7jlSUznZ6yTnGsD3RlK61mu.jpg',1,32,'2022-03-31 15:03:58','2022-03-31 16:28:00'),
(5,12,'Best camera in vivo','photo_galleries/v4NEuEawz37VE2g1HHsz50SMg5T6FIOncnh7ZkPv.jpg',1,32,'2022-03-31 15:06:33','2022-03-31 16:28:47'),
(6,12,'Sky','photo_galleries/fZJLESNRMnxBqkTMsg8oXvzSXstMKdDQPGp3SYLB.jpg',1,32,'2022-03-31 15:12:27','2022-03-31 16:28:15'),
(7,12,'#vivomomentsofnature #Lavevivo #vivoBangladesh','photo_galleries/9ClLRHafj3Nkd46ZvQYGhvOXXQqyfcXtL4aNzgb2.jpg',1,35,'2022-03-31 15:12:55','2022-03-31 16:28:53'),
(8,12,'Sky','photo_galleries/Ls0q4ukvRuMkqshpetc1opvD8IxKvwQPzsqlEDw9.jpg',1,32,'2022-03-31 15:13:02','2022-03-31 16:27:54'),
(9,12,'Sky','photo_galleries/pIHlqj3PGroQ43sUvVCh0PJXp3ZEQkb9xDDItNVp.jpg',1,32,'2022-03-31 15:13:35','2022-03-31 16:27:46'),
(10,6,'Night','photo_galleries/OCB4pSLMFUN5FZcBHdAnpprIC9LFXqjF4QB3IMbW.jpg',1,36,'2022-03-31 15:15:52','2022-03-31 16:27:50'),
(11,6,'Birds Love','photo_galleries/pQmmczpzRO2KnZOLYZSxRBVQ4AkE6kATQ9wzABRe.jpg',1,36,'2022-03-31 15:17:52','2022-03-31 16:27:41'),
(12,6,'Tea cup','photo_galleries/nPInMspQZzrzcP2t4LXlTL0BXZRX0jz1xLXUmBze.jpg',1,36,'2022-03-31 15:18:27','2022-03-31 16:27:24'),
(13,6,'Train','photo_galleries/PwOZ4Kr0JQDq5H2SgoHoLzyVX6x5RYibHdU8hDJz.jpg',1,36,'2022-03-31 15:22:43','2022-03-31 16:24:48'),
(14,8,'Anti Terrorism Raju Memorial Sculpture is a sculpture located in University of Dhaka campus of Bangladesh','photo_galleries/LEQryodxl2oZ8a7W0pL7kwgXJ78aKOFJHW1GSSrM.jpg',1,34,'2022-03-31 15:27:31','2022-03-31 16:13:09'),
(15,6,'Bay of bengal','photo_galleries/q6YnwUgPyl0AQ3xSDoOvLTmUaN0t5cBGO5JP1vdq.jpg',1,38,'2022-03-31 15:54:37','2022-03-31 16:13:06'),
(16,9,'Pizza Party','photo_galleries/tehpchgnZPvKMmbExAs6SvmKKXyFCmPSlotby9Fu.jpg',1,18,'2022-03-31 16:22:26','2022-03-31 16:24:52'),
(17,8,'Winter Morning','photo_galleries/QhiKldl2SE3D2vO9V4IZ4FzBMHQc6n4lk2pe0K9S.jpg',1,38,'2022-03-31 16:30:28','2022-03-31 17:46:19'),
(18,8,'Sunset','photo_galleries/doVDCnZDy8bZGNuaIXLSgQ4VsSVWcXXHscQgJ5Hp.jpg',1,39,'2022-03-31 16:46:15','2022-03-31 17:46:16'),
(19,7,'Baby Girl','photo_galleries/Xu335xowhm644eUZCMZvC4cBzPacFVSxuLEzrNe7.jpg',1,41,'2022-03-31 18:13:15','2022-03-31 18:13:33'),
(20,7,'Baby Girl Portrait','photo_galleries/xEUDlSBJSdCVN4x4S3FxDKc71jVapDgqpnG0SDuG.jpg',0,41,'2022-03-31 18:15:29','2022-03-31 18:15:29'),
(21,7,'Cute Baby Girl','photo_galleries/HsMusVXv0Y2ATwMTIWjzgXzQIxeZjskwGXhkHY3M.jpg',1,41,'2022-03-31 18:16:22','2022-03-31 18:24:18'),
(22,7,'Nature of Beauty','photo_galleries/C1v7V2ywaKFVc6PqtlAw7ZpqaaBS3W0I2FG41l5D.jpg',1,40,'2022-04-01 00:07:06','2022-04-02 09:58:21'),
(23,9,'Beauty of Flower','photo_galleries/nHaMNEA3S0ciQ5lg7gB2T9ddI4ipsUHvL4pwUnDr.jpg',0,40,'2022-04-01 00:15:20','2022-04-01 00:15:20'),
(24,8,'Kids play fun moments photo','photo_galleries/EtkQDLqOHzaE0l8ZLnYYUk5eOhReBybNiEuH9szz.jpg',0,34,'2022-04-01 13:05:13','2022-04-01 13:05:13'),
(25,12,'সূর্যের স্নানে প্রকৃতি বিমোহিত','photo_galleries/16O4ZlXHfNBDTBbrnkp9ua2VIskCozza73vZ1wHH.jpg',0,46,'2022-04-01 14:01:33','2022-04-01 14:01:33'),
(26,12,'কলাভবন, ঢাকা বিশ্ববিদ্যালয়','photo_galleries/yw5bEz7bSeCnmhsKIfTpARg5Fk4uFzawZQMJKJrE.jpg',0,47,'2022-04-01 15:23:44','2022-04-01 15:23:44'),
(27,6,'flower','photo_galleries/iDZCUmQ1K5lJfxAVYAe2J4MCYDvfMPW7ROyuqo5I.jpg',0,50,'2022-04-01 16:04:53','2022-04-01 16:04:53'),
(28,13,'Nht','photo_galleries/ciiq3ftn5Mj9A0j3g0DwOLzTajtRbmjoJ1JZO4OX.jpg',1,51,'2022-04-01 16:10:58','2022-04-02 09:58:00'),
(29,13,'Nht','photo_galleries/3L9X3K95AqRqY0Yh9RAuBXXsEgBgTO2jKy0yeRHi.jpg',0,51,'2022-04-01 16:16:29','2022-04-01 16:16:29'),
(30,13,'Nht','photo_galleries/iWrAPlMapecSY1VKCiKdGV3MW2qPB6QbbNwam1Xb.jpg',0,51,'2022-04-01 16:17:41','2022-04-01 16:17:41'),
(31,13,'Nht','photo_galleries/Y3C7jpPbwHgwmnPkaaROFYp92qG6iqpv1GFNsmc5.jpg',0,51,'2022-04-01 16:19:03','2022-04-01 16:19:03'),
(32,13,'Nht','photo_galleries/8JQUl8gePCt9Di04uogQHTluuYISpZefx6NfEZgt.jpg',0,51,'2022-04-01 16:20:04','2022-04-01 16:20:04'),
(33,13,'Nht','photo_galleries/Kj62ynJ1IabxizOZtexPztW8KH8k6E8owGIi5hpZ.jpg',0,51,'2022-04-01 16:23:47','2022-04-01 16:23:47'),
(34,13,'Nht','photo_galleries/BdjAf9ZFAZbAg38PP8GYHmGvyXDgSQBLsWl1uTDk.jpg',0,51,'2022-04-01 16:32:04','2022-04-01 16:32:04'),
(35,13,'Nht','photo_galleries/bZGCI5f8e8gIMxx4spq7AO4ndx6QZVDPfqTVfDYk.jpg',0,51,'2022-04-01 16:33:15','2022-04-01 16:33:15'),
(36,13,'Nht','photo_galleries/BpA7otzYt26qWwEferXmlFnzIscYU2EGm76VfTw4.jpg',0,51,'2022-04-01 16:34:28','2022-04-01 16:34:28'),
(37,13,'Nht','photo_galleries/sb3KheF1CxwWkquFodJLosTeYLEKhJGQDP7pVQAM.jpg',0,51,'2022-04-01 16:36:15','2022-04-01 16:36:15'),
(38,11,'Strange view','photo_galleries/f0blBjDifPwVOKhBDzDofI7uMdKWzzsylWufVBO2.jpg',0,52,'2022-04-01 17:13:25','2022-04-01 17:13:25'),
(39,15,'এই উষ্ণ শহরে,কুয়াশার চাদরে?','photo_galleries/MaOcc9XZYIENGQB4kWGEhHFqMACOPiM2EkkeCbo7.jpg',0,39,'2022-04-01 17:17:03','2022-04-01 17:17:03'),
(40,6,'Sunflower','photo_galleries/xLwlXPndOtzrQtYAO7OLaAopFd2E9AlB3Gf00As5.jpg',0,55,'2022-04-01 18:22:09','2022-04-01 18:22:09'),
(41,6,'Photography','photo_galleries/pNWjHmyQLghT8kRc4p1p92CUAasW4vQ7n0Iz1sx5.jpg',0,55,'2022-04-01 18:23:13','2022-04-01 18:23:13'),
(42,6,'Nature','photo_galleries/la8Cio3NYqqtZndoIsFTBGYINBxhzbbzCETNU1YY.jpg',1,54,'2022-04-01 18:24:58','2022-04-02 09:56:51'),
(43,14,'Moon light','photo_galleries/5DWRSlpJ5b0pk5ag3LUtkbZEPE8ujPDLxCpmDEFo.jpg',0,57,'2022-04-01 18:26:06','2022-04-01 18:26:06'),
(44,8,'লেকের পাশে','photo_galleries/LKg3Psan8XGru2hV3TfDO6H5mbnf1eJnogS4ti8H.jpg',0,58,'2022-04-01 19:16:26','2022-04-01 19:16:26'),
(45,8,'Natural beauty','photo_galleries/O78yOxp8rA7dVrOoHkUViTIfmCNwNjRFGYF1JEQt.jpg',1,59,'2022-04-01 19:59:15','2022-04-02 09:57:28'),
(46,15,'Feel High','photo_galleries/pVGwPTh3A6QA2RKgaefPpHEjBgX4BroxyEWeLVaL.jpg',0,62,'2022-04-01 21:56:11','2022-04-01 21:56:11'),
(47,15,'Temple in Clouds','photo_galleries/R4iERzfryCmZJtyxk77soOnn9M8TiJTFngDzcymI.jpg',0,65,'2022-04-01 23:15:45','2022-04-01 23:15:45'),
(48,15,'Kuakata - The daughter of Sea','photo_galleries/BvhKstw9k0yMtH5zKp97xCoolvjqXKvD9r07bHUo.jpg',1,65,'2022-04-01 23:17:22','2022-04-02 09:57:03'),
(49,15,'Dedicated for God','photo_galleries/Uw9qSM1bvuPNoiPFkV7pnBh69rOoxaOttdJv1jJ2.jpg',1,65,'2022-04-01 23:19:32','2022-04-02 09:56:38'),
(50,11,'woman has invisible wings','photo_galleries/CYBA2KszwXzevZQOgWUntE8dWaIUVfUFWKaaVYuD.jpg',0,66,'2022-04-01 23:31:11','2022-04-01 23:31:11'),
(51,11,'The woman art','photo_galleries/jeWxrygYwiOokymjKbHw0Paeh2Er6s63POvUSNrV.jpg',0,66,'2022-04-01 23:37:57','2022-04-01 23:37:57'),
(52,11,'brotherhood','photo_galleries/VYmga01sft1htwZV99bdpXSqPz324nthxSoLtN3k.jpg',0,66,'2022-04-01 23:39:14','2022-04-01 23:39:14'),
(53,11,'survival of the fittest','photo_galleries/7e6PC2kCV5VqglCjP1pMv4JHlhcFXXhJZgWNUcO1.jpg',0,66,'2022-04-01 23:39:55','2022-04-01 23:39:55'),
(54,11,'burn sun','photo_galleries/ftkeMGjexZQQgFRb2xwv1wsPDI6itO2HSgZ6SrCx.jpg',0,66,'2022-04-01 23:40:38','2022-04-01 23:40:38'),
(55,15,'Gorai River','photo_galleries/ezvA3U4PAyCspVRDoCNeMazz3fgMeqfwmICJi4Gb.jpg',1,67,'2022-04-01 23:52:24','2022-04-02 09:55:38'),
(56,12,'আমার সোনার বাংলা আমি তোমায় ভালোবাসি','photo_galleries/sRNzaAXOdNjpwcFCvIdL5WsfsoiK9NZJwnfSFpIp.jpg',0,69,'2022-04-02 01:05:07','2022-04-02 01:05:07'),
(57,12,'শিশু শ্রম','photo_galleries/SLaeXtEwdx4p4XeOtSMCCEiAiSxyLZskUnUVrpq3.jpg',0,69,'2022-04-02 01:07:31','2022-04-02 01:07:31'),
(58,12,'রাখাল বেলা শেষে বাড়ি ফেরা','photo_galleries/kDb7slOC9qDpdjgovlp20OIhO1I8SkgCP3izWtr1.jpg',1,69,'2022-04-02 01:08:36','2022-04-02 09:55:51'),
(59,12,'মসজিদ / চট্টগ্রাম','photo_galleries/KDUh5NmIUj23mANLGR6ajYJPx6bpSfyx9cvz6HkE.jpg',1,69,'2022-04-02 01:09:41','2022-04-02 09:55:22'),
(60,12,'আকাশ সাজে,  সুন্দর প্রকৃতি','photo_galleries/FIzX6lp4Y9G7xieqg1Jv3iuvDa4VLWIKpny5C4vr.jpg',1,69,'2022-04-02 01:11:18','2022-04-02 09:55:45'),
(61,12,'জীবন যুদ্ধ','photo_galleries/OCHid1JdrJGtabV18Ma5usKV691hf8MGGKmofY9S.jpg',0,69,'2022-04-02 01:15:09','2022-04-02 01:15:09'),
(62,12,'Y12','photo_galleries/xFBjBpI3ZXpRXv4fa4aXKtv1lAwHoE8t8kh6H7dk.jpg',0,71,'2022-04-02 01:21:12','2022-04-02 01:21:12'),
(63,6,'Happy Seller','photo_galleries/Z2wC6dvusNJ2eSkZne678i0RfiAUsuJHM3cjnYWZ.jpg',0,73,'2022-04-02 02:22:50','2022-04-02 02:22:50'),
(64,6,'Quite Temple','photo_galleries/xl0JqwGY8dCYQbBouGYtX19m0qkzNFBToLAXb50d.jpg',1,73,'2022-04-02 02:30:56','2022-04-02 09:56:16'),
(65,6,'Waiting.....','photo_galleries/e3S6HS54vjMCHQn4x8GeiKm8VBiANTD0zzOsyooE.jpg',0,73,'2022-04-02 02:32:29','2022-04-02 02:32:29'),
(66,6,'Sun Star','photo_galleries/yaHVQrooBciWj8ggckWw3vlSgbTMPEC1tira7Cau.jpg',0,73,'2022-04-02 02:45:21','2022-04-02 02:45:21'),
(67,15,'গ্রামীন পরিবেশ','photo_galleries/7CNAv8V5HOzwpTKhvIK8IC35Ptb5wbRxT9ZYnthX.jpg',0,70,'2022-04-02 11:22:50','2022-04-02 11:22:50'),
(68,15,'Vivo  আসলে সেরাদের সেরা ফোন ভালোবাসি তোমাকে প্রিয় যত দিন বেঁচে থাকবো তোমাকে সাথে নিয়ে থাকব।','photo_galleries/shc1wvPx83PPBMWXUhOxQXF5dtL8tP07AeX3o1Vw.jpg',0,76,'2022-04-02 11:57:55','2022-04-02 11:57:55'),
(69,7,'Flower','photo_galleries/Sz1Hky9PJCAklkkPWX0f367rGnYW5zsiJWI7QZJo.jpg',0,77,'2022-04-02 14:18:11','2022-04-02 14:18:11'),
(70,7,'Flower','photo_galleries/eWYJrFIDZl2s3jP14yOGmNJFXkYAQnG9lbMs9yjN.jpg',0,77,'2022-04-02 14:20:01','2022-04-02 14:20:01'),
(71,7,'Water on kachu leaves...','photo_galleries/5e4zpchkiLTjrChVWGzL3R4XGQcLj77yDo7NzsBs.jpg',0,77,'2022-04-02 14:22:40','2022-04-02 14:22:40'),
(72,6,'Edit','photo_galleries/zmLVxAhj3creLnHoBkj1wZSqzC6uhmLYjSZOsBWW.jpg',0,54,'2022-04-02 15:28:45','2022-04-02 15:28:45'),
(73,8,'আমার সবচেয়ে প্রিয় ফোন ভিভো আর আমার জীবনের সবচেয়ে দামী ফোন এটাই','photo_galleries/DAQbXoYfKAjZuIf8Oe47x3gXIyzGClLTqx7bgF6Q.jpg',0,79,'2022-04-02 15:31:42','2022-04-02 15:31:42'),
(74,9,'Nature','photo_galleries/B3Qih6IfP7eeIW4X8vyhtkn09lhIgqI13DhRnqRA.jpg',0,82,'2022-04-02 18:20:34','2022-04-02 18:20:34'),
(75,9,'Nature','photo_galleries/ZYrizCyONCuP5jGOqEKd1HyzVEcp7gEbx0cPdazu.jpg',0,82,'2022-04-02 18:20:37','2022-04-02 18:20:37'),
(76,12,'নদী ও জীবন\'','photo_galleries/6fuVoJLKYWAlDBpYB6n0COFzXbhp76ooqfdVYD7L.jpg',0,83,'2022-04-02 18:32:44','2022-04-02 18:32:44'),
(77,11,'জীবন ও জীবিকা','photo_galleries/MihJxVs5nz2OLohXEDRNrzOxFoNvglj09SqsCHKQ.jpg',0,83,'2022-04-02 18:36:20','2022-04-02 18:36:20'),
(78,15,'I loved to capture the nature.','photo_galleries/F6MRKdHtde45JGs74YyUcYRS909h2LOKFelDP4DF.jpg',0,85,'2022-04-02 23:01:34','2022-04-02 23:01:34'),
(79,13,'Spring Glow!','photo_galleries/BumNVWrXbah8Zta7bG8wpcG2Yfs4p5cJwvEPqCcF.jpg',0,84,'2022-04-02 23:03:17','2022-04-02 23:03:17'),
(80,15,'Nature picture','photo_galleries/EvVDYtDwcD6lWHsZWblbJ80lEZtRXwFRD7uSgyBH.jpg',0,87,'2022-04-03 00:58:39','2022-04-03 00:58:39'),
(81,15,'Natural picture','photo_galleries/0g7ArvXmuUnTlCoqwOsjsYM5EY1ox8lcGgEco8LI.jpg',0,87,'2022-04-03 01:03:56','2022-04-03 01:03:56'),
(82,8,'The flog','photo_galleries/JTv9auXYYakApi9D3RO0DKBdGq3nyJSZFsXIu4BQ.jpg',0,88,'2022-04-03 01:49:44','2022-04-03 01:49:44'),
(83,15,'জীবিকার খোঁজে','photo_galleries/gyAlIOR0lCr5mUiDZAQXwYwM3LhChncY8PUecTuQ.jpg',0,88,'2022-04-03 01:55:32','2022-04-03 01:55:32'),
(84,14,'Nature','photo_galleries/QmUcDN7s3ZQnlJSGifrklRcr6QR1Ta3dplqQ0tu3.jpg',0,91,'2022-04-03 04:23:37','2022-04-03 04:23:37'),
(85,14,'Natural of Bangladesh','photo_galleries/KPLSMDK9G1b9mHZiWVCMCxSTRwT2ToWJB4ip0ZBC.jpg',0,93,'2022-04-03 04:25:20','2022-04-03 04:25:20'),
(86,14,'Happy Friends','photo_galleries/mWy5yeTt3GykCnl3uwDlpe5lExB81hLHpFTGMQic.jpg',0,93,'2022-04-03 04:26:30','2022-04-03 04:26:30'),
(87,12,'Sunset','photo_galleries/JTipaMo7M9njORCAjQebFFsq9J0Gqd1rFCOOCwdy.jpg',0,95,'2022-04-03 04:43:27','2022-04-03 04:43:27'),
(88,10,'Nature || charming','photo_galleries/T1Qv1AbOG6lhtSZStVIzTGwWMBP01acuW1nPewmE.jpg',0,94,'2022-04-03 04:44:06','2022-04-03 04:44:06'),
(89,12,'Photo','photo_galleries/k1GVbr8TX0r6vaCVJx1ADQxoQTqNbEjJNA1xC1Kn.jpg',0,97,'2022-04-03 08:11:49','2022-04-03 08:11:49'),
(90,15,'Harvesting Water Lily','photo_galleries/wTgsUobJEwZk4ygdO6stIcLie0obDjIyDQygaqF3.jpg',0,99,'2022-04-03 11:08:56','2022-04-03 11:08:56'),
(91,15,'Harvesting Water Lily','photo_galleries/I6Ta1QoNQYSOlM41SeQfFuT2XZOcIGLueH7G3hvw.jpg',0,99,'2022-04-03 11:10:52','2022-04-03 11:10:52'),
(92,15,'Harvesting Water Lily','photo_galleries/2Wj8l1YeB9oCmFlmdhaZgzlXXkGqbHPXS2gECtoM.jpg',0,99,'2022-04-03 11:12:04','2022-04-03 11:12:04'),
(93,15,'Drying Red Chillies','photo_galleries/rbk8LlveaGn4bTgL69psai5sdJtEC12J9zrDR0SU.jpg',0,99,'2022-04-03 11:16:24','2022-04-03 11:16:24'),
(94,15,'Dying Red Chillies','photo_galleries/ckw658pCZhZYkcpJBYEfv9IoZUOlvmTK1eQjOxYe.jpg',0,99,'2022-04-03 11:17:26','2022-04-03 11:17:26'),
(95,13,'The two most beautiful things in nature are trees and sky','photo_galleries/Wul45PoTxeVdMgJETqMjGisqTj0oOW0adpahU2WO.jpg',0,104,'2022-04-03 12:41:49','2022-04-03 12:41:49'),
(96,7,'#vivomomentsofnature #lovevivo #vivoBangladesh','photo_galleries/HVgtSI5xTRGcCm3KrTy3WEmPs703qkcwyeNLJX9H.jpg',0,106,'2022-04-03 13:35:40','2022-04-03 13:35:40'),
(97,14,'Vivo Y51','photo_galleries/NTECTxooWVzxyyl24cwWui2DRGh2SIHtffzQGPdo.jpg',0,108,'2022-04-03 14:59:18','2022-04-03 14:59:18'),
(98,15,'S.B-Photographs','photo_galleries/0DfNdEu6V9DsjTLYQXy2tYJmb7NnvYa8vi59Ax6y.jpg',0,111,'2022-04-03 16:26:23','2022-04-03 16:26:23'),
(99,8,'Struggling for life','photo_galleries/nIpHCppFowRdAtIjNcTX99AVPD8qKhCNiG99J4Ln.jpg',0,112,'2022-04-03 16:29:59','2022-04-03 16:29:59'),
(100,15,'S.B-Photographs','photo_galleries/F5Ig8cQeTJIx1wnhWnAktPwvGCpqQfIEjzXNS2fQ.jpg',0,111,'2022-04-03 16:32:23','2022-04-03 16:32:23'),
(101,11,'৩ স্তর','photo_galleries/TFI7VvxSTKJJd05X3wdri32XTVlTaPPi62LTTEhe.jpg',0,110,'2022-04-03 16:37:30','2022-04-03 16:37:30'),
(102,12,'When the egg goes into the water later','photo_galleries/9UiPlGBiMTy3mJvLkKzSaNxwMyXJZgBuLmCD92MU.jpg',0,113,'2022-04-03 22:12:23','2022-04-03 22:12:23'),
(103,8,'Vivo V11 Pro','photo_galleries/brPtDcaoWJZfleG9g6cQ6f6wwW6odNNqht2ZRLyV.jpg',0,117,'2022-04-04 11:00:34','2022-04-04 11:00:34'),
(104,15,'S.B - Photographer','photo_galleries/zF0RHmLuc6sl2RhWHkGSwZrIUijXvZoogK1Iq8RG.jpg',0,111,'2022-04-04 12:49:03','2022-04-04 12:49:03'),
(105,7,'nature','photo_galleries/2ZJfEXTdizDo4bxRG4KNiEjbe4p7YI1I6fGRXICH.jpg',0,120,'2022-04-04 14:46:38','2022-04-04 14:46:38'),
(106,7,'moon','photo_galleries/IJYr0ANPleL3Wwfsxm3jjC2W5QXEN4UvvLXrIqia.jpg',0,120,'2022-04-04 14:48:18','2022-04-04 14:48:18'),
(107,12,'Stone & natural','photo_galleries/WymrC52I7RfK1V5GUIoHTjFoaoP2MEBCzGqtPfjX.jpg',1,123,'2022-04-04 17:21:16','2022-04-05 10:11:11'),
(108,12,'Stone','photo_galleries/4UynAdwmkFSknAW3zJdpGX2O9NL9yV2rT4IF2WAq.jpg',1,123,'2022-04-04 17:27:08','2022-04-05 10:10:55'),
(109,12,'Naturally of road','photo_galleries/ck4M6OIP8XZPbMqj4ko6ntNE2uQREku5StpilQRT.jpg',0,123,'2022-04-04 17:28:21','2022-04-04 17:28:21'),
(110,12,'River','photo_galleries/XUXYCHufhdqJotYqw43WHdvl2gQqTqNNgUyDLUm4.jpg',0,123,'2022-04-04 17:30:03','2022-04-04 17:30:03'),
(111,12,'Tree','photo_galleries/NImwyALsBvZE48fq2E0en6EZMCco7cQjEppVNi50.jpg',0,123,'2022-04-04 17:35:05','2022-04-04 17:35:05');

/*Table structure for table `photo_galleries_tags` */

DROP TABLE IF EXISTS `photo_galleries_tags`;

CREATE TABLE `photo_galleries_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo_galleries_id` int(11) NOT NULL,
  `tags_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8mb4;

/*Data for the table `photo_galleries_tags` */

insert  into `photo_galleries_tags`(`id`,`photo_galleries_id`,`tags_id`,`created_at`,`updated_at`) values 
(1,55,5,'2022-03-31 12:11:37','2022-03-31 12:11:37'),
(2,55,7,'2022-03-31 12:11:37','2022-03-31 12:11:37'),
(3,1,8,'2022-03-31 14:49:46','2022-03-31 14:49:46'),
(4,2,5,'2022-03-31 14:50:20','2022-03-31 14:50:20'),
(5,2,7,'2022-03-31 14:50:20','2022-03-31 14:50:20'),
(6,3,8,'2022-03-31 14:51:01','2022-03-31 14:51:01'),
(7,4,7,'2022-03-31 15:03:58','2022-03-31 15:03:58'),
(8,5,7,'2022-03-31 15:06:33','2022-03-31 15:06:33'),
(9,6,7,'2022-03-31 15:12:27','2022-03-31 15:12:27'),
(10,7,7,'2022-03-31 15:12:55','2022-03-31 15:12:55'),
(11,8,7,'2022-03-31 15:13:02','2022-03-31 15:13:02'),
(12,9,7,'2022-03-31 15:13:35','2022-03-31 15:13:35'),
(13,10,9,'2022-03-31 15:15:52','2022-03-31 15:15:52'),
(14,11,6,'2022-03-31 15:17:52','2022-03-31 15:17:52'),
(15,12,8,'2022-03-31 15:18:27','2022-03-31 15:18:27'),
(16,13,5,'2022-03-31 15:22:43','2022-03-31 15:22:43'),
(17,14,5,'2022-03-31 15:27:31','2022-03-31 15:27:31'),
(18,15,7,'2022-03-31 15:54:37','2022-03-31 15:54:37'),
(19,16,5,'2022-03-31 16:22:26','2022-03-31 16:22:26'),
(20,17,11,'2022-03-31 16:30:28','2022-03-31 16:30:28'),
(21,18,7,'2022-03-31 16:46:15','2022-03-31 16:46:15'),
(22,19,6,'2022-03-31 18:13:15','2022-03-31 18:13:15'),
(23,20,6,'2022-03-31 18:15:29','2022-03-31 18:15:29'),
(24,21,6,'2022-03-31 18:16:22','2022-03-31 18:16:22'),
(25,22,7,'2022-04-01 00:07:06','2022-04-01 00:07:06'),
(26,23,7,'2022-04-01 00:15:20','2022-04-01 00:15:20'),
(27,24,7,'2022-04-01 13:05:13','2022-04-01 13:05:13'),
(28,25,6,'2022-04-01 14:01:33','2022-04-01 14:01:33'),
(29,25,7,'2022-04-01 14:01:33','2022-04-01 14:01:33'),
(30,25,10,'2022-04-01 14:01:33','2022-04-01 14:01:33'),
(31,26,8,'2022-04-01 15:23:44','2022-04-01 15:23:44'),
(32,27,7,'2022-04-01 16:04:53','2022-04-01 16:04:53'),
(33,28,7,'2022-04-01 16:10:58','2022-04-01 16:10:58'),
(34,29,7,'2022-04-01 16:16:29','2022-04-01 16:16:29'),
(35,30,10,'2022-04-01 16:17:41','2022-04-01 16:17:41'),
(36,31,7,'2022-04-01 16:19:03','2022-04-01 16:19:03'),
(37,32,7,'2022-04-01 16:20:04','2022-04-01 16:20:04'),
(38,33,7,'2022-04-01 16:23:47','2022-04-01 16:23:47'),
(39,34,7,'2022-04-01 16:32:04','2022-04-01 16:32:04'),
(40,35,10,'2022-04-01 16:33:15','2022-04-01 16:33:15'),
(41,36,7,'2022-04-01 16:34:28','2022-04-01 16:34:28'),
(42,37,7,'2022-04-01 16:36:15','2022-04-01 16:36:15'),
(43,38,7,'2022-04-01 17:13:25','2022-04-01 17:13:25'),
(44,39,9,'2022-04-01 17:17:03','2022-04-01 17:17:03'),
(45,40,7,'2022-04-01 18:22:09','2022-04-01 18:22:09'),
(46,41,6,'2022-04-01 18:23:13','2022-04-01 18:23:13'),
(47,42,7,'2022-04-01 18:24:58','2022-04-01 18:24:58'),
(48,42,11,'2022-04-01 18:24:58','2022-04-01 18:24:58'),
(49,43,9,'2022-04-01 18:26:06','2022-04-01 18:26:06'),
(50,44,5,'2022-04-01 19:16:26','2022-04-01 19:16:26'),
(51,44,7,'2022-04-01 19:16:26','2022-04-01 19:16:26'),
(52,45,10,'2022-04-01 19:59:15','2022-04-01 19:59:15'),
(53,46,7,'2022-04-01 21:56:11','2022-04-01 21:56:11'),
(54,47,6,'2022-04-01 23:15:45','2022-04-01 23:15:45'),
(55,47,7,'2022-04-01 23:15:45','2022-04-01 23:15:45'),
(56,48,5,'2022-04-01 23:17:22','2022-04-01 23:17:22'),
(57,48,7,'2022-04-01 23:17:22','2022-04-01 23:17:22'),
(58,49,6,'2022-04-01 23:19:32','2022-04-01 23:19:32'),
(59,49,7,'2022-04-01 23:19:32','2022-04-01 23:19:32'),
(60,49,8,'2022-04-01 23:19:32','2022-04-01 23:19:32'),
(61,50,5,'2022-04-01 23:31:11','2022-04-01 23:31:11'),
(62,51,7,'2022-04-01 23:37:57','2022-04-01 23:37:57'),
(63,52,7,'2022-04-01 23:39:14','2022-04-01 23:39:14'),
(64,53,5,'2022-04-01 23:39:55','2022-04-01 23:39:55'),
(65,54,8,'2022-04-01 23:40:38','2022-04-01 23:40:38'),
(66,55,7,'2022-04-01 23:52:24','2022-04-01 23:52:24'),
(67,56,7,'2022-04-02 01:05:07','2022-04-02 01:05:07'),
(68,57,5,'2022-04-02 01:07:31','2022-04-02 01:07:31'),
(69,57,7,'2022-04-02 01:07:31','2022-04-02 01:07:31'),
(70,57,9,'2022-04-02 01:07:31','2022-04-02 01:07:31'),
(71,58,7,'2022-04-02 01:08:36','2022-04-02 01:08:36'),
(72,59,7,'2022-04-02 01:09:41','2022-04-02 01:09:41'),
(73,60,7,'2022-04-02 01:11:18','2022-04-02 01:11:18'),
(74,61,7,'2022-04-02 01:15:09','2022-04-02 01:15:09'),
(75,61,9,'2022-04-02 01:15:09','2022-04-02 01:15:09'),
(76,62,5,'2022-04-02 01:21:12','2022-04-02 01:21:12'),
(77,62,7,'2022-04-02 01:21:12','2022-04-02 01:21:12'),
(78,62,10,'2022-04-02 01:21:12','2022-04-02 01:21:12'),
(79,63,9,'2022-04-02 02:22:50','2022-04-02 02:22:50'),
(80,64,6,'2022-04-02 02:30:56','2022-04-02 02:30:56'),
(81,65,7,'2022-04-02 02:32:29','2022-04-02 02:32:29'),
(82,66,7,'2022-04-02 02:45:21','2022-04-02 02:45:21'),
(83,67,7,'2022-04-02 11:22:50','2022-04-02 11:22:50'),
(84,68,10,'2022-04-02 11:57:55','2022-04-02 11:57:55'),
(85,69,7,'2022-04-02 14:18:11','2022-04-02 14:18:11'),
(86,70,7,'2022-04-02 14:20:01','2022-04-02 14:20:01'),
(87,71,7,'2022-04-02 14:22:40','2022-04-02 14:22:40'),
(88,72,6,'2022-04-02 15:28:45','2022-04-02 15:28:45'),
(89,72,7,'2022-04-02 15:28:45','2022-04-02 15:28:45'),
(90,72,10,'2022-04-02 15:28:45','2022-04-02 15:28:45'),
(91,73,7,'2022-04-02 15:31:42','2022-04-02 15:31:42'),
(92,74,7,'2022-04-02 18:20:34','2022-04-02 18:20:34'),
(93,74,11,'2022-04-02 18:20:34','2022-04-02 18:20:34'),
(94,75,7,'2022-04-02 18:20:37','2022-04-02 18:20:37'),
(95,75,11,'2022-04-02 18:20:37','2022-04-02 18:20:37'),
(96,76,7,'2022-04-02 18:32:44','2022-04-02 18:32:44'),
(97,77,7,'2022-04-02 18:36:20','2022-04-02 18:36:20'),
(98,78,7,'2022-04-02 23:01:34','2022-04-02 23:01:34'),
(99,78,11,'2022-04-02 23:01:34','2022-04-02 23:01:34'),
(100,79,6,'2022-04-02 23:03:17','2022-04-02 23:03:17'),
(101,80,7,'2022-04-03 00:58:39','2022-04-03 00:58:39'),
(102,81,7,'2022-04-03 01:03:56','2022-04-03 01:03:56'),
(103,82,6,'2022-04-03 01:49:44','2022-04-03 01:49:44'),
(104,83,5,'2022-04-03 01:55:32','2022-04-03 01:55:32'),
(105,83,6,'2022-04-03 01:55:32','2022-04-03 01:55:32'),
(106,84,7,'2022-04-03 04:23:37','2022-04-03 04:23:37'),
(107,85,5,'2022-04-03 04:25:20','2022-04-03 04:25:20'),
(108,85,7,'2022-04-03 04:25:20','2022-04-03 04:25:20'),
(109,86,7,'2022-04-03 04:26:30','2022-04-03 04:26:30'),
(110,87,9,'2022-04-03 04:43:27','2022-04-03 04:43:27'),
(111,87,10,'2022-04-03 04:43:27','2022-04-03 04:43:27'),
(112,88,7,'2022-04-03 04:44:06','2022-04-03 04:44:06'),
(113,89,9,'2022-04-03 08:11:49','2022-04-03 08:11:49'),
(114,90,5,'2022-04-03 11:08:56','2022-04-03 11:08:56'),
(115,90,7,'2022-04-03 11:08:56','2022-04-03 11:08:56'),
(116,91,5,'2022-04-03 11:10:52','2022-04-03 11:10:52'),
(117,91,7,'2022-04-03 11:10:52','2022-04-03 11:10:52'),
(118,92,5,'2022-04-03 11:12:04','2022-04-03 11:12:04'),
(119,92,7,'2022-04-03 11:12:04','2022-04-03 11:12:04'),
(120,93,5,'2022-04-03 11:16:24','2022-04-03 11:16:24'),
(121,93,6,'2022-04-03 11:16:24','2022-04-03 11:16:24'),
(122,94,6,'2022-04-03 11:17:26','2022-04-03 11:17:26'),
(123,95,7,'2022-04-03 12:41:49','2022-04-03 12:41:49'),
(124,96,7,'2022-04-03 13:35:40','2022-04-03 13:35:40'),
(125,97,5,'2022-04-03 14:59:18','2022-04-03 14:59:18'),
(126,97,7,'2022-04-03 14:59:18','2022-04-03 14:59:18'),
(127,97,10,'2022-04-03 14:59:18','2022-04-03 14:59:18'),
(128,97,11,'2022-04-03 14:59:18','2022-04-03 14:59:18'),
(129,98,5,'2022-04-03 16:26:23','2022-04-03 16:26:23'),
(130,99,6,'2022-04-03 16:29:59','2022-04-03 16:29:59'),
(131,100,7,'2022-04-03 16:32:23','2022-04-03 16:32:23'),
(132,101,7,'2022-04-03 16:37:30','2022-04-03 16:37:30'),
(133,102,7,'2022-04-03 22:12:23','2022-04-03 22:12:23'),
(134,103,6,'2022-04-04 11:00:34','2022-04-04 11:00:34'),
(135,104,7,'2022-04-04 12:49:03','2022-04-04 12:49:03'),
(136,105,7,'2022-04-04 14:46:38','2022-04-04 14:46:38'),
(137,106,7,'2022-04-04 14:48:18','2022-04-04 14:48:18'),
(138,107,7,'2022-04-04 17:21:16','2022-04-04 17:21:16'),
(139,108,7,'2022-04-04 17:27:08','2022-04-04 17:27:08'),
(140,109,7,'2022-04-04 17:28:21','2022-04-04 17:28:21'),
(141,110,7,'2022-04-04 17:30:03','2022-04-04 17:30:03'),
(142,111,7,'2022-04-04 17:35:05','2022-04-04 17:35:05');

/*Table structure for table `photographers` */

DROP TABLE IF EXISTS `photographers`;

CREATE TABLE `photographers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `photographers` */

/*Table structure for table `playlist1_main_vedios` */

DROP TABLE IF EXISTS `playlist1_main_vedios`;

CREATE TABLE `playlist1_main_vedios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `desc` text NOT NULL,
  `link` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `playlist1_main_vedios` */

insert  into `playlist1_main_vedios`(`id`,`title`,`img`,`desc`,`link`,`created_at`,`updated_at`) values 
(3,'Playlist 1','images/Playlist 1_20220327102151.jpg','abhhhhhhhhhhhhhabjha','https://www.youtube.com/watch?v=kVkt5HEZxls','2022-03-27 23:21:51','2022-03-27 23:21:51');

/*Table structure for table `playlist1_other_vedios` */

DROP TABLE IF EXISTS `playlist1_other_vedios`;

CREATE TABLE `playlist1_other_vedios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `playlist1_other_vedios` */

insert  into `playlist1_other_vedios`(`id`,`link`,`img`,`created_at`,`updated_at`) values 
(3,'https://www.youtube.com/watch?v=CWCNKJ5SvWE','','2022-03-25 23:59:18','2022-03-25 23:59:18'),
(4,'https://www.youtube.com/watch?v=OUnrnOOsNao','','2022-03-25 23:59:34','2022-03-25 23:59:34'),
(5,'https://www.youtube.com/watch?v=QEFRnkFWn1k&list=PLX-fyH3pM1mh-B7qUFBA5rMHZFdqmkxuE&index=3','','2022-03-26 00:00:09','2022-03-26 00:00:09'),
(6,'https://www.youtube.com/watch?v=V5ltbNJosRw','','2022-03-26 00:00:37','2022-03-26 00:00:37'),
(7,'https://www.youtube.com/watch?v=n3KBF1l_bgY','','2022-03-26 00:00:52','2022-03-26 00:00:52');

/*Table structure for table `playlist2_main_vedios` */

DROP TABLE IF EXISTS `playlist2_main_vedios`;

CREATE TABLE `playlist2_main_vedios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `desc` text NOT NULL,
  `link` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `playlist2_main_vedios` */

insert  into `playlist2_main_vedios`(`id`,`title`,`img`,`desc`,`link`,`created_at`,`updated_at`) values 
(2,'Playlist 2',NULL,'n publishing and graphic design, Lorem ipsum is a','https://www.youtube.com/watch?v=V5ltbNJosRw','2022-03-27 17:01:51','2022-03-27 17:01:51');

/*Table structure for table `playlist2_other_vedios` */

DROP TABLE IF EXISTS `playlist2_other_vedios`;

CREATE TABLE `playlist2_other_vedios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `playlist2_other_vedios` */

insert  into `playlist2_other_vedios`(`id`,`img`,`link`,`created_at`,`updated_at`) values 
(3,'','https://www.youtube.com/watch?v=gqDmGsvJyMg','2022-03-26 00:01:24','2022-03-26 00:01:24'),
(4,'','https://www.youtube.com/watch?v=ZPzvu2nV-M0','2022-03-26 00:01:41','2022-03-26 00:01:41'),
(6,'','https://www.youtube.com/watch?v=vOFKtzhUVsM','2022-03-26 00:02:12','2022-03-26 00:02:12'),
(7,'','https://www.youtube.com/watch?v=CJSA4BbeObs','2022-03-26 00:03:43','2022-03-26 00:03:43'),
(8,'','https://www.youtube.com/watch?v=YZiWW3yvCvI','2022-03-26 04:06:09','2022-03-26 04:06:09');

/*Table structure for table `playlists` */

DROP TABLE IF EXISTS `playlists`;

CREATE TABLE `playlists` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `playlists` */

/*Table structure for table `tags` */

DROP TABLE IF EXISTS `tags`;

CREATE TABLE `tags` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tags` */

insert  into `tags`(`id`,`name`,`status`,`created_at`,`updated_at`) values 
(5,'Landscape',1,'2022-03-25 18:01:03','2022-03-25 18:01:03'),
(6,'Portrait',1,'2022-03-25 18:01:17','2022-03-25 18:01:17'),
(7,'Nature',1,'2022-03-25 18:01:24','2022-03-25 18:01:24'),
(8,'Abstract',1,'2022-03-25 18:01:31','2022-03-25 18:01:31'),
(9,'City Lights',1,'2022-03-25 18:02:11','2022-03-25 18:02:11'),
(10,'Sunset',1,'2022-03-25 18:02:17','2022-03-25 18:02:17'),
(11,'Sunraise',1,'2022-03-25 18:02:23','2022-03-25 18:02:23');

/*Table structure for table `user_profiles` */

DROP TABLE IF EXISTS `user_profiles`;

CREATE TABLE `user_profiles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(11) DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `user_profiles` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` text COLLATE utf8mb4_unicode_ci,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`contact`,`provider`,`provider_id`,`google_provider`,`google_provider_id`,`email_verified_at`,`img`,`password`,`is_admin`,`remember_token`,`user_type`,`created_at`,`updated_at`) values 
(1,'test 1','admin@admin.com',NULL,'','','',NULL,NULL,'app/public/profile_image/test 1_20220324214508.jpg','$2y$10$sYgSElpCY/u5NrMJkByAn.4ZNrr7gI/rQSIxEPkEtBgoaL9Zl/Yyq',NULL,NULL,1,'2022-03-12 07:38:08','2022-03-25 10:45:08'),
(2,'Arafat','admin1@admin.com',NULL,'','','',NULL,NULL,NULL,'$2y$10$galVnjHzG06Xd1SYUbtoNewm159Fn9u1tGaVBV46lI6cl7W0nRR6m',NULL,NULL,NULL,'2022-03-12 07:46:25','2022-03-12 07:46:25'),
(3,'raff','adminq@admin.com',NULL,'','','',NULL,NULL,NULL,'$2y$10$O7Mn7dHb40cqyFEZhgvuN.v56nm7X9/WiAeoBuPMFtxt3dTsk1Psm',NULL,NULL,NULL,'2022-03-12 07:47:04','2022-03-12 07:47:04'),
(14,'Arafat Rahman','shetshuvro@gmail.com',NULL,'facebook','4712984828824310',NULL,NULL,NULL,NULL,'3a2a9aef4cbed81244820a091667c0bd',NULL,NULL,NULL,'2022-03-21 12:20:27','2022-03-21 12:20:27'),
(15,'Arafat Rahman','arafat@lasermedicalbd.com',NULL,NULL,NULL,'google','111748769476403630927',NULL,NULL,'1a3650aedfdd3a21444047ed2d89458f',NULL,NULL,NULL,'2022-03-21 12:20:40','2022-03-21 12:20:40'),
(16,'Arafat Rahman','projects.rahmanarafat13@gmail.com',NULL,NULL,NULL,'google','118266271459181393806',NULL,NULL,'f4334c131c781e2a6f0a5e34814c8147',NULL,NULL,NULL,'2022-03-23 13:48:07','2022-03-23 13:48:07'),
(17,'Arafat','shetshuvro1@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$TAyyUGQhRxGeu.wTck6DGuQ00.0K2ry5QgAoxQ780FYAYrVe9c4pC',NULL,NULL,NULL,'2022-03-25 11:56:58','2022-03-25 11:56:58'),
(18,'ullash','ullash@gmail.com','1234567890',NULL,NULL,NULL,NULL,NULL,'app/public/profile_image/ullash_20220324233914.jpg','$2y$10$eLoRjCdWHknzp9X2y3XIeuBGAGiHlQoA8gveR8SvGgLAXHWMEw7hm',1,NULL,1,'2022-03-25 12:20:55','2022-03-26 09:47:42'),
(19,'ullash','ullash1@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$Xdr5Q5avKfSZFmL07/FDyOCTDyE95xxMUiA.9RsBRLHKB9pbC1EFK',NULL,NULL,NULL,'2022-03-25 12:21:36','2022-03-25 12:21:36'),
(20,'final','final@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$mF2LhDPpqgvAOOXKzhBCxO7cRyEHboVEcI8Lqz/sOexTMtRDfCvt6',NULL,NULL,NULL,'2022-03-25 12:26:44','2022-03-25 12:26:44'),
(21,'Tahmidur Rahman','tahmidrana@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$ooTYvwT7bf1mNkZE3jFKsO/rc.L1ifsJfK/Q9oi8NNzH5rijSx2pS',NULL,NULL,NULL,'2022-03-29 21:58:54','2022-03-29 21:58:54'),
(22,'Tahmidur Rahman','appinion.tahmid@gmail.com',NULL,NULL,NULL,'google','104394318069770170101',NULL,NULL,'c5b270a763686e776039618cc709f3a6',NULL,NULL,NULL,'2022-03-31 01:24:52','2022-03-31 01:24:52'),
(23,'Tahmid','tahmid@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$L3BlAab0ebSKOF7ZvNIMwOoQlVuNO3Exn9lyGX50FRKkP5EvHwnGu',NULL,NULL,NULL,'2022-03-31 01:30:20','2022-03-31 01:30:20'),
(24,'Asifraihan','asif08016@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$bqcbYIR5TnB5Db2oLHDGXeMHbu6IuAUJK78Q1GFgHuG6ktuEMyOkW',NULL,NULL,NULL,'2022-03-31 01:31:02','2022-03-31 01:31:02'),
(25,'rumin','rumin@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$qDhM23nca1C27K2kbnTPQOay6qVbvYKOf8tlSi7Oe0EU491HZtuRC',NULL,NULL,NULL,'2022-03-31 02:14:07','2022-03-31 02:14:07'),
(26,'Farhan','farhan.vivohq@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$d1vKlnesXd8.OtEqJsaflO7zmzJm0IzMRF7luBq7voIwkZ8SFHNbK',NULL,NULL,NULL,'2022-03-31 09:12:55','2022-03-31 09:12:55'),
(27,'Junayed Khan','junayed.vivo@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$60DDBPtqZjCTVjQL/fJb2e2MiNx712qou.iP3lX3kOCX3/a49EKzO',NULL,NULL,NULL,'2022-03-31 09:13:28','2022-03-31 09:13:28'),
(28,'tamim','tamimsarker@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$6juiQxF0S9.kb608n4izt.bnwxVeDjN5vVkBMRIGEhVhwQR1EUk2G',NULL,NULL,NULL,'2022-03-31 10:00:03','2022-03-31 10:00:03'),
(29,'Ann','anthonyvivo54@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$sU75xRRmYUxzvQ7YcOYaRuZ6niyjZidHjrsX439zXbyYCGn0vSknC',NULL,NULL,NULL,'2022-03-31 12:10:18','2022-03-31 12:10:18'),
(30,'MD Habib Ullah','kingsamrat60@gmail.com','01722079381',NULL,NULL,NULL,NULL,NULL,'profile_image/TnS0lTLXpyklc3kskcb9PbM3faxb7n81KSotqFtU.jpg','$2y$10$GLV3wGKA7laTF64cIopJO.Kj974y40G3XzjSqCbbUK2dzW7jE0Syu',NULL,NULL,NULL,'2022-03-31 14:45:45','2022-03-31 14:52:53'),
(31,'Samaun Ahmed Tajim','tajimsamaun@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$0RuBYUjMGbyBdTSQI4bLe.AlwTm2M5XrVw1x7HDK605M66BnwaEFy',NULL,NULL,NULL,'2022-03-31 14:47:46','2022-03-31 14:47:46'),
(32,'Rabiul Rakib','rakibrobiul16@gmail.com','01738613778',NULL,NULL,NULL,NULL,NULL,'profile_image/GTdA9Keu23VJFcltbiSQl2dTBqL6MWDIjYAIywKP.jpg','$2y$10$4Jg4CwC9Vjl2QjL8ImhrXOiUvrKCHOIXR3EaaUWgELzVQAu02femi',NULL,NULL,NULL,'2022-03-31 14:52:13','2022-03-31 15:05:02'),
(33,'Sanaul Karim Mridul','skmridul14699@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$Qsi0iTxlC3Zn/wMidZz1BOLJtBtDOLgiHoncnVl5WOAZeeZh38lv6',NULL,NULL,NULL,'2022-03-31 14:56:13','2022-03-31 14:56:13'),
(34,'Md. Ali Hossain','ali.hussain64@gmail.com','01819062260',NULL,NULL,NULL,NULL,NULL,'profile_image/YWnWlSvve91y4lMlZN3hY3rgb6Abj0VBXcb5sGni.jpg','$2y$10$Rkeo0/GAiSDEk2F2cawYw.W/h0woOVL0Ok0yBdvrj0.eKPlB2a5Ge',NULL,NULL,NULL,'2022-03-31 15:02:02','2022-04-01 15:49:03'),
(35,'Md Monower Hossain','mdmonowerhossain291@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$aEA8wqinlJRyWafGe1PebedL6MjUx8wnsmWohehWvSqgZZb7vS8Va',NULL,NULL,NULL,'2022-03-31 15:07:03','2022-03-31 15:07:03'),
(36,'rumel','rumel.ahmed19@gmail.com','01671081592',NULL,NULL,NULL,NULL,NULL,'profile_image/Dg1RDCPBAwRxqS55pfSUUmPZwnBpFPiibptms8dx.jpg','$2y$10$wS5iljfTVgImhPkrs5mddet9OzVqS7oNIHKmlOwOSj5EOG.URrRUu',NULL,NULL,NULL,'2022-03-31 15:10:23','2022-03-31 15:30:41'),
(37,'Md Hasan','hasanahmed7884@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$6Z4Ws/HRSZvM191GNX8mHON.NtDPhJ5R/HFKyzBA0JUFJYrV7pafK',NULL,NULL,NULL,'2022-03-31 15:20:29','2022-03-31 15:20:29'),
(38,'Md Asifur Rahman','asifur94@gmail.com','01755202096',NULL,NULL,NULL,NULL,NULL,'profile_image/zIT6znyBX2bntFyyc6BjXBr26Ea0ldaDubMg3PEg.jpg','$2y$10$cZkH4mAZj4fGVRirLSZpmetxSmaRPXpbMtYy3mxN.JnKtHuStR54.',NULL,NULL,NULL,'2022-03-31 15:50:24','2022-03-31 16:31:41'),
(39,'Rafsan Jahan Chowdhury','jahanchowdhury333@gmail.com','01874696933',NULL,NULL,NULL,NULL,NULL,'profile_image/rSXcRxSHhMvbURRkN5Q5mdIfDRp6adKbhqGkPFKM.jpg','$2y$10$NhwTpTEBrgIJC/gtTGKyS.bZmQzsimexy.rNjR3gw/4G53XUrxBJe',NULL,NULL,NULL,'2022-03-31 16:42:59','2022-04-01 19:47:36'),
(40,'Tarek Hossain','hasantareq050@gmail.com','01731532244',NULL,NULL,NULL,NULL,NULL,'profile_image/38MCkLtwD2SUkPBT2JWaTzvwcYxS9KSJscZI6sAa.jpg','$2y$10$AsPRbuvBz8SOk0xXRMetCuoxhEGytti8a/qbRCdm0VK5xh4RAdYLm',NULL,NULL,NULL,'2022-03-31 16:47:18','2022-04-01 00:09:37'),
(41,'Rabindranath Das','pbbijoyraj@gmail.com','01711389254',NULL,NULL,NULL,NULL,NULL,'profile_image/2QpFEvnUdy4mJxe9Hyuluxal3bEh9aGzRENjRrVe.jpg','$2y$10$cuT/H8Jt/s.35cdkKElo8OLIb1DKeCGQG0Z71vaOW2wXA7yopIOe6',NULL,NULL,NULL,'2022-03-31 18:08:49','2022-03-31 18:11:27'),
(42,'Touhidul Islam Shishir','touhidul.shishir@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$ywZzw8.N.wvse2RLgWcnYubSmR46NdIghmGrcJ5s16St.urbPdnom',NULL,NULL,NULL,'2022-03-31 23:42:30','2022-03-31 23:42:30'),
(43,'sabit hafizzi','sabithafizzi@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$F.hkyeWFgchdjUdGCCQ.H.5DbXSpEClktZm8qGW2se0yFItgC5L7a',NULL,NULL,NULL,'2022-04-01 07:30:33','2022-04-01 07:30:33'),
(44,'sabit hafizzi','sr99975@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$vl2uEeoyrsppgg9ucIchKO9pCYTfIPw82mfq0H3JBLyumgy/DbPx2',NULL,NULL,NULL,'2022-04-01 07:31:36','2022-04-01 07:31:36'),
(45,'Kamrul islam','kamrul904108@gmail.com','+8801708525897',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$VwsiU33J/HVvCKmalOStq.FuVoX9zT2s/O20nsMCOoWDC8iZoAgmm',NULL,NULL,NULL,'2022-04-01 11:46:40','2022-04-01 11:52:09'),
(46,'Sheikh Ismail','ismailhossain818439@gmail.com','01836903753',NULL,NULL,NULL,NULL,NULL,'profile_image/SAzYtcn2oWkbmOQjXlYpN30e7g3hjHAeHOipXfIi.jpg','$2y$10$0OIVX4vQ8qxyNKrmu7rybuiPKKy3Am/JIaR3Q8KpyZwHQTVGOTixW',NULL,NULL,NULL,'2022-04-01 13:33:31','2022-04-01 14:02:57'),
(47,'Shakil Khan','smshakil309@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$At8qm6CeKQZbcc3NZiUu9OTwxXOy1wKtJ1GJZxsxIsueIjKItFnVG',NULL,NULL,NULL,'2022-04-01 15:20:21','2022-04-01 15:20:21'),
(48,'Milon','milonabit2020@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$P/nKst5KlQ2pCBqSDHWgQePiPqfzmraF/WceLekxqS7A8aNodElLS',NULL,NULL,NULL,'2022-04-01 15:25:05','2022-04-01 15:25:05'),
(49,'M R SuMoN','mrsumonbd.com@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$OhFI7LXtFvbP7Psl9nkuU.JAw354TG0wIo2kJs4TOvgibDUx6sgum',NULL,NULL,NULL,'2022-04-01 15:54:01','2022-04-01 15:54:01'),
(50,'Nayem Afridi','mknaeimislam2018@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$HbZqQrM.Mh0008Wo4vMYMOE1GkNhnKdZW0SHJYokI93nx.ioRqwhC',NULL,NULL,NULL,'2022-04-01 16:01:13','2022-04-01 16:01:13'),
(51,'Titu','tti5294@gmail.com','01778565350',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$GlkY7701gqbQGea.DNnaOuBSG9ay3xihn83EjvFAtMP5Jj.yZmCu2',NULL,NULL,NULL,'2022-04-01 16:06:15','2022-04-01 16:28:04'),
(52,'Raihan Ahmed','raihaan0107@gamil.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$5vgDQvr5VSeRKNXT9MK60OF1V8WMrFUlTGdh4B5iEkxGZwvJDRwSW',NULL,NULL,NULL,'2022-04-01 17:10:42','2022-04-01 17:10:42'),
(53,'Nusrat Zahan','nusratnupur5140@gmail.com','01319882684',NULL,NULL,NULL,NULL,NULL,'profile_image/MbvnbKxjXwEQwQtwuYb8lYlQrtjPW9e1B6M0fL1O.jpg','$2y$10$p8qmXf5vtiB0p6DH6MgqqemUH/wB.hMUc0ZRAm.uSCaNt6clNt8IK',NULL,NULL,NULL,'2022-04-01 17:50:07','2022-04-01 18:04:52'),
(54,'Raiyan samin','raiyaniasirsamin@gmail.com','01773998765',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$EO8FarLB0gxjRpBw/SwKLeXIotCgAqrBhJFyB2IbssjLcLE4/NSv6',NULL,NULL,NULL,'2022-04-01 18:18:56','2022-04-02 18:54:25'),
(55,'Fayaz','fayazmuktadin@gmail.com','+8801869366209',NULL,NULL,NULL,NULL,NULL,'profile_image/lpGmytgNuufY4XJJTSjjCN78S6bGLLaP4hVx8xr6.jpg','$2y$10$v9gnA383.LE4qCvLEQV2XetWIem.5S8IK/Q3KxmUdAHBLGQqGNqK.',NULL,NULL,NULL,'2022-04-01 18:19:18','2022-04-01 18:24:45'),
(56,'Nasif Hasnat Talukder','nasifhasnatt@gmail.com','01684392230',NULL,NULL,NULL,NULL,NULL,'profile_image/VoCqpiMVroX3E1S5poyVSWLKn00oOYgPFlfG9O7f.jpg','$2y$10$uVN3AflQ62FOY4mGa1qUgeeTFzrTUB/RmIce9CEVTH/.bRnyiuoCi',NULL,NULL,NULL,'2022-04-01 18:22:50','2022-04-01 18:25:26'),
(57,'Adnan hossain','adnan20962@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$hGtsDO8us6XKOwg4toqqBOvRyUknFG6WpRUdPUiGq2p7UdtKF/bke',NULL,NULL,NULL,'2022-04-01 18:23:50','2022-04-01 18:23:50'),
(58,'tamim','shawontanvir942@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$8ct9qu3kSY6C1cp0umEW9uTPoFLfS4szIkXNnyykLK3LxA7qnEDEa',NULL,NULL,NULL,'2022-04-01 19:14:07','2022-04-01 19:14:07'),
(59,'Forhat Hossain','forhat137@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'profile_image/0Y6IhTlSRbYnlPzn183SwjvjC9vK6WQC35r7LioU.jpg','$2y$10$6KgRULACd9AnO5eJSenEkO4qAThyjxmUF3Wz2emDMosfYGu2BbvTa',NULL,NULL,NULL,'2022-04-01 19:41:29','2022-04-01 19:49:06'),
(60,'Pial roy','pialroy10@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$71uDVUsitFSP6MY8q7QNoeiANJcKETn.GBwessSwp28D6YFP7hIg.',NULL,NULL,NULL,'2022-04-01 20:30:12','2022-04-01 20:30:12'),
(61,'Rashed Khan','rashedkhan1830@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$mTJTEsxpmJptM3YGxRGSYeumfDpQQp86L8XtCd4AJoyJj3Kf5eudm',NULL,NULL,NULL,'2022-04-01 20:36:27','2022-04-01 20:36:27'),
(62,'Mahmul Kabir','kabir3652fb@gmail.com','+8801685029009',NULL,NULL,NULL,NULL,NULL,'profile_image/07mmSJFMCNVJRfH5aMYcciN3Uk1F46kL8rguiVit.jpg','$2y$10$U/tUweMu40DIAO7d.Az5SO/V6oPFqcSYqn.Ogk1UT7NrsOZJB8eHe',NULL,NULL,NULL,'2022-04-01 21:46:32','2022-04-01 22:40:11'),
(63,'Md Arifur Rahman','arifurrahmnarahul@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$krsoOnRHLqiY1WasQi17V.6BkzQGflzueTh/xZjCQM5vZVL5yYkui',NULL,NULL,NULL,'2022-04-01 22:23:05','2022-04-01 22:23:05'),
(64,'Gloriya','gloriyadew7912@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$r5BcmcGFwYR/R.yQclcanuIkr6nGKZsBZ1inN0Opng9e3AW/ZT4LS',NULL,NULL,NULL,'2022-04-01 22:51:21','2022-04-01 22:51:21'),
(65,'Bony Saha','bonysaha77@gmail.com','01960020506',NULL,NULL,NULL,NULL,NULL,'profile_image/6DvHv5bVoqEmhn3NMGupfWj7j7AQJcst8afoDIE8.jpg','$2y$10$7yZd70lS0s7HvObrMZdlBOxSzAjS87Stku1MYD7.TFackzeLoNO6C',NULL,NULL,NULL,'2022-04-01 23:13:49','2022-04-01 23:22:16'),
(66,'mohazer mahbub samee','sa9124701@gmail.com','01306408258',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$sTAikv8Hy0oieqJn9KxeN.PgCu2HMCJU2u0tT2UpsV.UtJT4hM7m.',NULL,NULL,NULL,'2022-04-01 23:30:04','2022-04-01 23:31:31'),
(67,'Akash khandoker','akashkhandoker22@gmail.com','01799035523',NULL,NULL,NULL,NULL,NULL,'profile_image/4TvwGar4hEG7fHls5vFpl1UEnRNTT6eVNfgbE79W.jpg','$2y$10$pDgGb0Xo945.7kEsq.0qIeaazdqV6Db2y5Zo2u/GzvzReBibgov7O',NULL,NULL,NULL,'2022-04-01 23:49:14','2022-04-01 23:51:21'),
(68,'Jannatul Ferdousi','jfevabd@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$4jVWyp1NMhKWsWNZFmukLuPZIItW86BBHNCtZJNX9DU8RhBWN5qZu',NULL,NULL,NULL,'2022-04-01 23:53:35','2022-04-01 23:53:35'),
(69,'Abul Bashar','badshaphotography71@gmail.com','01777342070',NULL,NULL,NULL,NULL,NULL,'profile_image/TG5L9KuMj9mTI7U5rQrhVzIFXtXeYjIzSz00TAiD.jpg','$2y$10$CLzvb3x.lYUoyljdrFVL1ei5J3N24THmxdTiB44SUpN52PVu644JW',NULL,NULL,NULL,'2022-04-02 01:00:37','2022-04-02 01:13:17'),
(70,'Hasan Al Banna','bannahasanal208@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jNXuvyIb9yfgXWZzz60G..I9V0pM5gFb8iaU38HedGgf01.xrmDei',NULL,NULL,NULL,'2022-04-02 01:00:42','2022-04-02 01:00:42'),
(71,'MD.Amanullah Aman','mdamanurrohoman41@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$dXbpikN1f.o9Y12lPYVdMecv6Ph4U5.GQKh4hUGQcxiotKu2LckaW',NULL,NULL,NULL,'2022-04-02 01:12:38','2022-04-02 01:12:38'),
(72,'Nil Mollah','nilmollah15@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$8DLLkfFUZ164m2CkTjJVsOJSMyDjSXcnOOwi05EeF2ytMiyskM/QS',NULL,NULL,NULL,'2022-04-02 01:37:43','2022-04-02 01:37:43'),
(73,'Md Asif Khan','asifkhansunnyakr@gmail.com','01716761712',NULL,NULL,NULL,NULL,NULL,'profile_image/vp5PRNyJfkKj6RYoMjfwIrUVr6ngirctZYElyrVg.jpg','$2y$10$bEZGL0.ZNyHunEgU90GLne9l6.0tqGpaPnDSc49Uui21sDj6mc/Iu',NULL,NULL,NULL,'2022-04-02 02:20:53','2022-04-03 00:12:23'),
(74,'Al Imran Akando','alimranakando1000@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$Os7vzowxrDofp1rCPsf6BexDMvtH8MsT85.OmdpEljYfoEFC75VB6',NULL,NULL,NULL,'2022-04-02 07:39:05','2022-04-02 07:39:05'),
(75,'Faruk Ahmed','mdfarukahmed712@gmail.com','01893511618',NULL,NULL,NULL,NULL,NULL,'profile_image/R8MqEKL5IgZZuTjTEFUodcpabG7jpFLnJsYZFzdJ.jpg','$2y$10$Kb9Q7PnqV0xwHeH8MJ/iyeS4Kg3CmgLydRsWB36jyKszfuxkfHHli',NULL,NULL,NULL,'2022-04-02 09:58:09','2022-04-02 10:00:32'),
(76,'Md Shakil','www.shakilkhan57670@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$WTq/L6TAs/x1OvveBg8jTOY69nZWpwutbmKpcYuzrgVUVNS4.0376',NULL,NULL,NULL,'2022-04-02 11:38:02','2022-04-02 11:38:02'),
(77,'Minhaj Bin Maher','minhajchowdhury963@gmail.com','01743894608',NULL,NULL,NULL,NULL,NULL,'profile_image/TM9LzvwkYOqDWM1wyxnMb1mmy1mJln28GLwy3hTj.jpg','$2y$10$11zwGBJ5I.zMgb3W1LarBOU64ohyEUT0CMMuunCrgpFq9An2QCUi6',NULL,NULL,NULL,'2022-04-02 14:14:39','2022-04-02 21:35:55'),
(78,'আছবারুল হক মুমিন','asrarulhaquemumin27@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$KozA3dk26J16ICbQkSqnWuyhOjoX0U7DqO.y9aBEiFVLKvv5HxsW.',NULL,NULL,NULL,'2022-04-02 15:01:53','2022-04-02 15:01:53'),
(79,'Md ibrahim','isalamabesta@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$dM3Bn4X7hXu072QyA4PVzui4Xltfau2JAqmb0Zocq/2CkmbcJI7tu',NULL,NULL,NULL,'2022-04-02 15:24:11','2022-04-02 15:24:11'),
(80,'Monjur Hasan','monjur.jsr@gmail.com','01521396615',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$eLMbUeJ31zpf9lOS1c3guek29yHd.ZO7Pk9pp/Kl5ale4WLW/Ie12',NULL,NULL,NULL,'2022-04-02 17:58:48','2022-04-02 18:00:26'),
(81,'Wasif Chowdhury','wchowdhury186@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$FIpt11EZiTPExPlHQ1i.WekDBV5N/LVpQcrGKuYz6vjmeRGZ2ssLm',NULL,NULL,NULL,'2022-04-02 18:12:23','2022-04-02 18:12:23'),
(82,'Dr Aminul islam','draminulislam255@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$YxD8sryf8Oq7AHMJ9UWlIe2Cb2WLbZsipMatg9tJElWjy6olFZ1Yu',NULL,NULL,NULL,'2022-04-02 18:17:12','2022-04-02 18:17:12'),
(83,'Shahariar Nerov','nerov297@gmail.com','01817995246',NULL,NULL,NULL,NULL,NULL,'profile_image/4zqI6jl88JMsviBLk2TfvomOPk2eMbm08BisqgAx.jpg','$2y$10$9fzp.Rhd.F5kyGb00sNpmuGb7nas.eJCmBwW1USJuRtRjvxThqWTm',NULL,NULL,NULL,'2022-04-02 18:28:19','2022-04-02 18:38:28'),
(84,'Somudro','somudro1971@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$l5KSOZneHNCcbUSpfw8ybeEE01YMVgXWZM5ygyjTulzUnpIg/usLq',NULL,NULL,NULL,'2022-04-02 22:41:51','2022-04-02 22:41:51'),
(85,'BILASH ROY','bilashroy890@gmail.com','01743501840',NULL,NULL,NULL,NULL,NULL,'profile_image/U1bEq1FRdH9CF8nWOkwVjoxJMf8YmEBKRejricbi.jpg','$2y$10$TNwnFVTKz1THK0sdf6nO7uiau0iuEnefHjWnMHY.RMue20NGKdYq6',NULL,NULL,NULL,'2022-04-02 22:57:04','2022-04-02 23:04:56'),
(86,'Md Rafat Hossain','rafathossin15@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$XpNa5A7UJelR2ue4mqk3q.2Wpqw4.aTlj9MfRExBngR7N63rOMSki',NULL,NULL,NULL,'2022-04-02 23:53:28','2022-04-02 23:53:28'),
(87,'Evan','estiakmahmudevan@gmail.com','01743254138',NULL,NULL,NULL,NULL,NULL,'profile_image/9rUyYFsfXr7jiT8YYQCIjQSS9kWGz3klHSBr1rEh.jpg','$2y$10$hI7shG.tninJtczs.vmmpuoESTcOzqmQvYYpmZoE3pk89ssnFF9WO',NULL,NULL,NULL,'2022-04-03 00:54:45','2022-04-03 00:56:18'),
(88,'Elahi','elahirakib@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$9LK9C16JC/.0WchL55g9ye.JE9li9o6MEjNrwHd20fTJBWMLlyoXK',NULL,NULL,NULL,'2022-04-03 01:46:45','2022-04-03 01:46:45'),
(89,'Masum Billah','billah01705189132@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$qEEs0UWBjm/yP4OZd1w1ee9cLBQ23xRja3bDeipwGuPOTpIoR9CY6',NULL,NULL,NULL,'2022-04-03 03:11:27','2022-04-03 03:11:27'),
(90,'Amena Binte Ainul','amenabinteainul811@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$DX9nO31VvUS/9Ua3mREUOeje.4ftFx0zDVnmT3nltCV3tm7vY4IX6',NULL,NULL,NULL,'2022-04-03 04:03:52','2022-04-03 04:03:52'),
(91,'Isfakul Ripon','isfakulalamripon@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$Xir3zoxBwroeCwL57g/CCOZJUHQeQ39XYSXF8sxbAtDl.LHuGc7Mm',NULL,NULL,NULL,'2022-04-03 04:12:13','2022-04-03 04:12:13'),
(92,'Md Shahin Alom','princeshahinkhan7585@gmail.com','01615802024',NULL,NULL,NULL,NULL,NULL,'profile_image/UsmuGlv41jcaT6YRAGyBbDOTvR6XB2FsLEvPW2XP.jpg','$2y$10$65aBqkbxOlDbujs9PHo4SOJMtPMUr3CwsbU3p3nWr9fY8G/GsYGnG',NULL,NULL,NULL,'2022-04-03 04:15:50','2022-04-03 04:36:32'),
(93,'Adnan Hossain','adnan20968@gmail.com','01741720962',NULL,NULL,NULL,NULL,NULL,'profile_image/mrAyUXeAE6AY3EeWM0W5iQPYsvsAQZoQQRpUzuGd.jpg','$2y$10$N21gE36L8W7jwwYNmmQjpedkMQrm1boHv3zRfGs9BL4CKXuXaEova',NULL,NULL,NULL,'2022-04-03 04:17:04','2022-04-03 04:27:39'),
(94,'Abir Hossain','contact.abirhossain@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$YIyClKZ4eZqz/vb6Ic4pPuDSbodOeJr49xM8r1SjzU3VbYv4WZhoK',NULL,NULL,NULL,'2022-04-03 04:22:28','2022-04-03 04:22:28'),
(95,'Satratull Jannat Monira','moniraa778@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$h2dw3V/Hr.EibFhPQUhUnOxpPqBH.ZYR/R9RaoIQ5I7rHfPSsnxyi',NULL,NULL,NULL,'2022-04-03 04:29:23','2022-04-03 04:29:23'),
(96,'Sabbir Hossain','sh787039@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$0VDhxZHq4OAbfCRgZcXXWeFG24ReTa2Qs9tF33QmLLDOBCHw/3KUG',NULL,NULL,NULL,'2022-04-03 05:15:29','2022-04-03 05:15:29'),
(97,'Rasel','raselwahid74@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$hiBFdjiCn03DQZUrLRnHGe6stCSJp/VnsZ45Q0nV8hshRkaqV27Vy',NULL,NULL,NULL,'2022-04-03 08:04:09','2022-04-03 08:04:09'),
(98,'Sourav chakma','souravchakma711@gmail.com','01571213025',NULL,NULL,NULL,NULL,NULL,'profile_image/YRKDNsK9oUvduFEWrpYPpTPlFFwhHiYfWYOm3D9Y.jpg','$2y$10$zek7iPnKh/lfznOzMUDqOOW5d/tuRSZJJadVNrjOXi4KkqdDBRvLW',NULL,NULL,NULL,'2022-04-03 08:21:23','2022-04-03 08:31:53'),
(99,'Ahsanul Haque Nayem','mdahsanulhaquenayem@gmail.com','01794661921',NULL,NULL,NULL,NULL,NULL,'profile_image/ouiayNSODy9r0G7LfXVLOp9BIk98Bg9CH4j5nfis.jpg','$2y$10$xxS49JrKKg6J5CjzvVcLVuzjURlpv5YXk.cXYef8NqWFpl1sPOi1e',NULL,NULL,NULL,'2022-04-03 11:05:48','2022-04-03 11:13:19'),
(100,'Atik Ahsan','atikbd9864@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$uUMCtzhlgF6soyf7xoLhl.8vhKmBnrQxo1SgckqHtzMURXkeLxUKa',NULL,NULL,NULL,'2022-04-03 11:59:56','2022-04-03 11:59:56'),
(101,'Wasif Chowdhury','wasifchowdhury425@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$Y4negF4GUrAQxh9M2JzupOuslPQLASZXRNa2qq0Aup75HaQbzI1am',NULL,NULL,NULL,'2022-04-03 12:06:30','2022-04-03 12:06:30'),
(102,'galib','aftabemon3@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$8pQ4SOH/GAM.T39BHy0c3uP917J1E2Vb01Xt.ARZGJM.q.sC19brS',NULL,NULL,NULL,'2022-04-03 12:28:14','2022-04-03 12:28:14'),
(103,'Shohel Rana','sr0749281@gmail.com','01644043827',NULL,NULL,NULL,NULL,NULL,'profile_image/w72TWgiHOZFk9DeV7Xh61fsOGq9sCa9H0ypP2SB0.jpg','$2y$10$HmyvGgiy2IVvvn56GCY8VOgXubY9blC9JFICEii4HZq8wfrTDWppy',NULL,NULL,NULL,'2022-04-03 12:29:47','2022-04-03 12:35:15'),
(104,'Wasif Chowdhury','chowdhurywasif094@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$Y7wo0yV.4F4JUr95OS5LnuytM6ivTIHoTIZrgP7OH1BfP5mzvVJQ.',NULL,NULL,NULL,'2022-04-03 12:32:31','2022-04-03 12:32:31'),
(105,'Mohammed Azgor Ali Riaz','rehanrias63@gmail.com','01690011638',NULL,NULL,NULL,NULL,NULL,'profile_image/hSMRPtzEfAxXhbwPl16S9qKVqbcDmtObbyi7Gh8E.jpg','$2y$10$ptnfaRvbWEe4zoSqRTkvT.nSXCyoLi9.q4aYxfsrKz5mwzTWgeZDW',NULL,NULL,NULL,'2022-04-03 12:51:27','2022-04-03 12:57:11'),
(106,'Mir Jakaria','mirazin@1213gmail.com','01972165564',NULL,NULL,NULL,NULL,NULL,'profile_image/HCQwaNwgARcizPktXIWnD3lxo6FvVo1T937k7kdp.jpg','$2y$10$TeRtlaXt3VKDHfWwlpKVSeUVOHKsDOuaazHl0nlO608bqiAe8MSeS',NULL,NULL,NULL,'2022-04-03 13:32:53','2022-04-03 13:37:09'),
(107,'Aj asad','russelmd363@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$zTg4HpQ6MrgOCbuWelMk9O.ek77M2lPo5vIuysFjDz3zzsMsxmNY2',NULL,NULL,NULL,'2022-04-03 14:30:28','2022-04-03 14:30:28'),
(108,'SAIFUL islam','Symphonyv4949@gmail.com','01627200341',NULL,NULL,NULL,NULL,NULL,'profile_image/659CUbEr0xinfDUUXlPjgknECz1CFJdeTmX2VvEe.jpg','$2y$10$n3VTXEEBqL.3Csp7nJ/D/uZoy8hY.xPMYGLTivPkMWJO9sQ/ZV5ve',NULL,NULL,NULL,'2022-04-03 14:57:13','2022-04-03 15:00:39'),
(109,'Maruf Billah','maruf100a@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$y8m1c9cZpgWkkgNMuGYSEewjRKQDKZN38A0xojsdwVu1sbcxi/ffK',NULL,NULL,NULL,'2022-04-03 14:59:40','2022-04-03 14:59:40'),
(110,'Sony dey','www.sanydey520@gmail.com','01756464604',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$WurAOwEPOl/udJTwNYnAaOLuuRLATQDthDhhDDA7JY7GVFRuH1dh2',NULL,NULL,NULL,'2022-04-03 16:21:19','2022-04-03 16:26:54'),
(111,'Shagar Bhowmik','sagarbhowmik.sb@gmail.com','01834693757',NULL,NULL,NULL,NULL,NULL,'profile_image/18hrbRDDbILjCqkxgyswzChpAjcIAjk3nBzD4NFw.jpg','$2y$10$YKLHIqYmALDDC2P.LpiiceNxX.8RZgLpJtaOy6466I3q6CZdaS9Om',NULL,NULL,NULL,'2022-04-03 16:23:28','2022-04-03 16:30:30'),
(112,'Ranghin Mro','ranghin15@gmail.com','+8801841291095',NULL,NULL,NULL,NULL,NULL,'profile_image/zAWYjI8yEK8Eg81AmmjCwO0hZtXuOHxlfBWqYaHv.jpg','$2y$10$DaavDxd39SeSHYZhWwekIOZrY9XK3NOfosu3ZtINcsP.J9TLtvuL2',NULL,NULL,NULL,'2022-04-03 16:26:23','2022-04-03 16:32:16'),
(113,'Nur Islam','nurislam.ix4@gmail.com','01750828906',NULL,NULL,NULL,NULL,NULL,'profile_image/BrcwSoc73Gm7cAqfmyv8lQteykmY6s6S2EkF5HGI.jpg','$2y$10$1QQOzu9hQk3rMhUuWJ2DMeEXsMbdcLObciFHvEn/i15OcWddaKPGa',NULL,NULL,NULL,'2022-04-03 21:52:20','2022-04-04 11:16:28'),
(114,'Pabel Ahmed','Pabel93mi@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$cm3oqI4cQgz/Frhxel5gV.kdR6Wp6GxyivH0mfSFOiqyPacVISEQ.',NULL,NULL,NULL,'2022-04-03 23:02:40','2022-04-03 23:02:40'),
(115,'Shadhinnill4@gmail.com','shadhinnill4@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$bE8/bguP8NMJqbQOvAKFBOOnKY.cfix6/SQfoCSmwX9Kho4NqWhmi',NULL,NULL,NULL,'2022-04-03 23:06:51','2022-04-03 23:06:51'),
(116,'S m Masum','billhamasum394@gmail.c',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$kbjcjyKCV9m1M7Y.iMhN4ehn10Rn/Ch..59Sx87AoflzoEY8XhYrC',NULL,NULL,NULL,'2022-04-04 10:42:01','2022-04-04 10:42:01'),
(117,'Naiyemur Rahman Durjoy','onlinebackupuse@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$I5VeEaLXYmh8NeM0oq6GhujkAoDx88B0aQJaEzQEp28ihzc7sEWsG',NULL,NULL,NULL,'2022-04-04 10:58:27','2022-04-04 10:58:27'),
(118,'MD MOJAMMEL HOSSAIN','mdrimon32742@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$IgwUzaQneQ33UPo52wOI0OMAAapzTNO7YjNypWtu4CHYlolmgZcHK',NULL,NULL,NULL,'2022-04-04 11:19:14','2022-04-04 11:19:14'),
(119,'Taibur Rahman','rmilon481@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$JjGqgr3DjVsu00yblAIG2ORq4mHVUp2fqwy4pwqxRitJQ6noKVwFa',NULL,NULL,NULL,'2022-04-04 13:22:28','2022-04-04 13:22:28'),
(120,'shuvo','mdmdalamin191@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$42NTvuD5lz9inAmCJifpLewwuXdYKlvf45jC.N47gkcyg9HU7CC.O',NULL,NULL,NULL,'2022-04-04 14:45:26','2022-04-04 14:45:26'),
(121,'shahidul islam shuvo','shahidulshuvo59@mail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$LyydYe/p7dTGR3FgZwok6es/I3dAbS9D80408XDwmch.aKS.q.zZu',NULL,NULL,NULL,'2022-04-04 15:21:14','2022-04-04 15:21:14'),
(122,'Joni','jonirahat667@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$SYpbh3mF0yfP4nI068H6guGfm4YbcHBQsyio3Mqcq8HCSBFTUq1QS',NULL,NULL,NULL,'2022-04-04 16:07:49','2022-04-04 16:07:49'),
(123,'Sohel Arman Raju','sohelarman4374@gmail.com','01721615152',NULL,NULL,NULL,NULL,NULL,'profile_image/YQN6VkoszdGfr1R2SYG0lhI4PNKETjy2EnwLXdPu.jpg','$2y$10$/PrQdvPVAKzfmrJ4FOKG/.GhaDJtUFfuOQoATduVoxeC/Dim1YyUm',NULL,NULL,NULL,'2022-04-04 17:16:23','2022-04-04 17:32:24'),
(124,'Shawon','shawonhasan388@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$cNwNgdC9qcBUrb/ABdqfcejxUHqR72ryJ9u89Yn1vSEe2DvReWriy',NULL,NULL,NULL,'2022-04-04 22:57:33','2022-04-04 22:57:33'),
(125,'Mysql','faruk@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$aaXW6HA68UlnwbyhRXa8BuCt8lSCqtdW0.cvTiYSqDtJmB0ax4pnS',NULL,NULL,NULL,'2022-04-10 14:30:53','2022-04-10 14:30:53');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
