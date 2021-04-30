-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for laravel101
CREATE DATABASE IF NOT EXISTS `laravel101` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `laravel101`;

-- Dumping structure for table laravel101.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel101.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table laravel101.laboratories
CREATE TABLE IF NOT EXISTS `laboratories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pasien_id` bigint(20) NOT NULL DEFAULT '0',
  `staff_id` bigint(20) NOT NULL DEFAULT '0',
  `acty_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acty_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `units` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interval_ranges` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_periksa` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel101.laboratories: ~3 rows (approximately)
/*!40000 ALTER TABLE `laboratories` DISABLE KEYS */;
REPLACE INTO `laboratories` (`id`, `pasien_id`, `staff_id`, `acty_name`, `acty_type`, `units`, `result`, `interval_ranges`, `desc`, `tgl_periksa`, `created_at`, `updated_at`) VALUES
	(1, 1, 2, 'test', 'Reagen', '+', '-1', '-20', '-', '2021-04-28', '2021-04-28 07:55:48', '2021-04-29 09:41:41'),
	(2, 5, 2, 'Vaksin', 'PCR', '=', '09', '89', '-', '2021-04-30', '2021-04-29 03:32:25', '2021-04-29 09:41:48'),
	(3, 7, 2, 'o', 'PCR', '5', '90', '13', '-', '2021-04-30', '2021-04-29 04:02:13', '2021-04-29 09:41:56');
/*!40000 ALTER TABLE `laboratories` ENABLE KEYS */;

-- Dumping structure for table laravel101.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel101.migrations: ~7 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2021_04_27_033806_create_pasiens_table', 2),
	(5, '2021_04_27_034643_create_pasiens_table', 3),
	(6, '2021_04_28_031210_create_staff_table', 4),
	(7, '2021_04_28_062517_create_laboratories_table', 5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table laravel101.pasien
CREATE TABLE IF NOT EXISTS `pasien` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel101.pasien: ~5 rows (approximately)
/*!40000 ALTER TABLE `pasien` DISABLE KEYS */;
REPLACE INTO `pasien` (`id`, `nama`, `alamat`, `tempat_lahir`, `tgl_lahir`, `gender`, `phone_email`, `created_at`, `updated_at`) VALUES
	(1, 'Pasien 5', 'london', 'medan', '1991-09-20', 'Pria', '02854125', '2021-04-27 05:06:34', '2021-04-28 03:50:49'),
	(5, 'pasien 4', 'Batam', 'Jakarta', '1977-06-22', 'Wanita', '02854125', '2021-04-27 06:02:19', '2021-04-28 03:50:38'),
	(7, 'Pasiens 3', 'tiban', 'batam', '2021-04-15', 'Pria', '02854125', '2021-04-27 07:58:32', '2021-04-28 05:29:00'),
	(8, 'Pasiens 2', 'nongsa', 'batam', '2021-04-28', 'Pria', '02854125', '2021-04-27 07:58:57', '2021-04-28 05:28:50'),
	(9, 'pasiens 1', 'Sei Panas', 'Batam', '1998-06-28', 'Wanita', '02854125', '2021-04-27 08:14:22', '2021-04-28 05:28:44');
/*!40000 ALTER TABLE `pasien` ENABLE KEYS */;

-- Dumping structure for table laravel101.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel101.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table laravel101.staff
CREATE TABLE IF NOT EXISTS `staff` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel101.staff: ~1 rows (approximately)
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
REPLACE INTO `staff` (`id`, `nama`, `alamat`, `tempat_lahir`, `tgl_lahir`, `gender`, `phone_email`, `created_at`, `updated_at`) VALUES
	(2, 'Dokter 1', 'Bukit Palm Permai', 'batam', '1991-09-20', 'Pria', '202510022', '2021-04-28 03:41:51', '2021-04-28 03:49:20');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;

-- Dumping structure for table laravel101.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel101.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Adia Wiradana', 'superadmin', 'wiradana.adia@gmail.com', '2021-04-26 15:22:04', '$2y$10$ndfTuTXLVj96lRzAShpECuGhlfXIzITSCv5Bb4odA9y8Hjc2WAud2', '92c0p6jhWe2kYGJCvxrQaUHsPwwCkqixCwue5bmboxSv2e2EfXzbpOCqVvTY', '2021-04-26 07:44:27', '2021-04-26 07:44:27'),
	(2, 'Wiradana', 'admin', 'wiradana75@gmail.com', '2021-04-26 15:22:04', '$2y$10$ndfTuTXLVj96lRzAShpECuGhlfXIzITSCv5Bb4odA9y8Hjc2WAud2', '8YCPPWudnwYRh2dj8AHksekOBJwfoLKNSm9MUKHQVTX8eIeQ3xRHHQSB1ASy', '2021-04-26 07:44:27', '2021-04-26 07:44:27');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
