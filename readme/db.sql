/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.5.12-MariaDB : Database - monitor
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`monitor` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `monitor`;

/*Table structure for table `R` */

DROP TABLE IF EXISTS `R`;

CREATE TABLE `R` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `voltage` double(8,2) DEFAULT NULL,
  `current` double(8,2) DEFAULT NULL,
  `power` double(8,2) DEFAULT NULL,
  `energy` double(8,2) DEFAULT NULL,
  `frequency` double(8,2) DEFAULT NULL,
  `pf` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `R` */

insert  into `R`(`id`,`voltage`,`current`,`power`,`energy`,`frequency`,`pf`,`created_at`,`updated_at`) values 
(8,100.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(9,90.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(10,120.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(11,80.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(12,50.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(13,170.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(14,170.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(15,100.50,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(16,111.50,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(17,111.50,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(18,70.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(19,123.50,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(20,123.50,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(21,102.50,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(22,102.50,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(23,90.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(24,100.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(25,80.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(26,110.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(27,110.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(28,120.00,90.00,60.00,30.00,80.00,100.00,NULL,NULL),
(29,120.00,70.00,60.00,30.00,80.00,100.00,NULL,NULL),
(30,100.00,80.00,50.00,50.00,40.00,130.00,NULL,NULL);

/*Table structure for table `S` */

DROP TABLE IF EXISTS `S`;

CREATE TABLE `S` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `voltage` double(8,2) DEFAULT NULL,
  `current` double(8,2) DEFAULT NULL,
  `power` double(8,2) DEFAULT NULL,
  `energy` double(8,2) DEFAULT NULL,
  `frequency` double(8,2) DEFAULT NULL,
  `pf` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `S` */

insert  into `S`(`id`,`voltage`,`current`,`power`,`energy`,`frequency`,`pf`,`created_at`,`updated_at`) values 
(1,110.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(2,110.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(3,110.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(4,100.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(5,110.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(6,110.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(7,110.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(8,110.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(9,110.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(10,100.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(11,100.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(12,110.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(13,110.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(14,120.00,90.00,60.00,30.00,80.00,100.00,NULL,NULL),
(15,120.00,90.00,60.00,30.00,80.00,100.00,NULL,NULL),
(16,110.00,70.00,50.00,20.00,70.00,130.00,NULL,NULL);

/*Table structure for table `T` */

DROP TABLE IF EXISTS `T`;

CREATE TABLE `T` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `voltage` double(8,2) DEFAULT NULL,
  `current` double(8,2) DEFAULT NULL,
  `power` double(8,2) DEFAULT NULL,
  `energy` double(8,2) DEFAULT NULL,
  `frequency` double(8,2) DEFAULT NULL,
  `pf` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `T` */

insert  into `T`(`id`,`voltage`,`current`,`power`,`energy`,`frequency`,`pf`,`created_at`,`updated_at`) values 
(1,90.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(2,90.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(3,100.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(4,90.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(5,90.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(6,90.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(7,90.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(8,90.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(9,100.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(10,100.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(11,90.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(12,90.00,80.00,50.00,20.00,70.00,90.00,NULL,NULL),
(13,100.00,90.00,60.00,30.00,80.00,100.00,NULL,NULL),
(14,100.00,100.00,60.00,30.00,80.00,100.00,NULL,NULL),
(15,103.00,130.00,70.00,50.00,50.00,115.00,NULL,NULL);

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2021_10_03_115259_create_r_s_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
