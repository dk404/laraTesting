-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.7.13 - MySQL Community Server (GPL)
-- Операционная система:         Win64
-- HeidiSQL Версия:              9.3.0.5107
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица laravelTest3.marketing_images
CREATE TABLE IF NOT EXISTS `marketing_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_extension` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `image_weight` int(11) NOT NULL DEFAULT '100',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `marketing_images_image_name_unique` (`image_name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы laravelTest3.marketing_images: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `marketing_images` DISABLE KEYS */;
REPLACE INTO `marketing_images` (`id`, `is_active`, `is_featured`, `image_name`, `image_extension`, `image_weight`, `created_at`, `updated_at`) VALUES
	(2, 1, 1, '0000000002', 'jpg', 7, '2016-11-10 20:16:32', '2016-11-11 21:09:42'),
	(4, 1, 0, 'oooo23323', 'jpg', 100, '2016-11-10 20:58:04', '2016-11-10 20:58:04'),
	(5, 1, 0, 'kjkjkj', 'jpg', 100, '2016-11-10 20:59:13', '2016-11-10 20:59:13'),
	(6, 1, 0, 'kjkjkj8', 'jpg', 100, '2016-11-10 21:00:03', '2016-11-10 21:00:03'),
	(7, 1, 0, '88888', 'png', 6, '2016-11-11 21:08:26', '2016-11-11 21:08:26');
/*!40000 ALTER TABLE `marketing_images` ENABLE KEYS */;

-- Дамп структуры для таблица laravelTest3.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы laravelTest3.migrations: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(17, '2014_10_12_000000_create_users_table', 1),
	(18, '2014_10_12_100000_create_password_resets_table', 1),
	(19, '2016_10_24_220850_add_votes_to_users_table', 1),
	(22, '2016_10_24_232346_create_widgets_table', 2),
	(23, '2016_10_29_163749_add_is_admin_and_status_id_columns_to_users_table', 3),
	(24, '2016_10_29_181427_add_is_subscribed_to_users_table', 4),
	(25, '2016_11_05_220642_create_social_providers_table', 5),
	(26, '2016_11_07_200313_create_profiles_table', 6),
	(27, '2016_11_09_113425_create_marketing_images_table', 7),
	(28, '2016_11_11_140823_add_image_weight_to_marketing_images_table', 8);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Дамп структуры для таблица laravelTest3.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы laravelTest3.password_resets: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Дамп структуры для таблица laravelTest3.profiles
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `first_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы laravelTest3.profiles: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
REPLACE INTO `profiles` (`id`, `user_id`, `first_name`, `last_name`, `birthdate`, `gender`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Сергей1111', 'Штурнев', '1987-05-01', 1, '2016-11-08 20:19:48', '2016-11-08 20:19:48');
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;

-- Дамп структуры для таблица laravelTest3.social_providers
CREATE TABLE IF NOT EXISTS `social_providers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `source` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `source_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `social_providers_source_id_unique` (`source_id`),
  KEY `social_providers_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы laravelTest3.social_providers: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `social_providers` DISABLE KEYS */;
REPLACE INTO `social_providers` (`id`, `user_id`, `source`, `source_id`, `avatar`, `created_at`, `updated_at`) VALUES
	(1, 1, 'github', '19683461', 'https://avatars.githubusercontent.com/u/19683461?v=3', '2016-11-06 21:41:19', '2016-11-06 21:41:19'),
	(2, 1, 'facebook', '1077174159069502', 'https://graph.facebook.com/v2.8/1077174159069502/picture?type=normal', '2016-11-06 21:42:21', '2016-11-06 21:42:21');
/*!40000 ALTER TABLE `social_providers` ENABLE KEYS */;

-- Дамп структуры для таблица laravelTest3.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_subscribed` tinyint(1) NOT NULL DEFAULT '0',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `status_id` int(10) unsigned NOT NULL DEFAULT '10',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы laravelTest3.users: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `email`, `is_subscribed`, `is_admin`, `status_id`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Сергей Юрьевич Штурнев', 'sht_job@ukr.net', 0, 1, 10, '$2y$10$GeDYvA1KjiUo.hXVvd8VXe0DxbdSWMwD9QvwfhOrU7bKRJD7FPLo2', 'xJyrIDNh5OnBiDTsxagTpWKqnVjZbpLr8taesdYKYJVcjKDYj9NODCqKEfnu', '2016-10-24 22:22:45', '2016-11-08 21:42:48'),
	(3, 'вас', 'test@mail.com', 1, 0, 10, '$2y$10$oJlMuasIeLopsANUbzDbq.E0lXAn9poxRQcW3zz5Vmd6HGsnc9lVC', 'nwTtgnMTWyE0E80KLDZvrU43Rl8dV8rYQM6chqyTURQmihrOJFrHYnpzd58Z', '2016-10-29 18:23:04', '2016-11-05 20:28:57');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Дамп структуры для таблица laravelTest3.widgets
CREATE TABLE IF NOT EXISTS `widgets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `widgets_name_unique` (`name`),
  UNIQUE KEY `widgets_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы laravelTest3.widgets: ~30 rows (приблизительно)
/*!40000 ALTER TABLE `widgets` DISABLE KEYS */;
REPLACE INTO `widgets` (`id`, `user_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 1, 'uptas sht aspernatur!!66', 'uptas-sht-aspernatur66', '2016-10-27 20:02:36', '2016-10-28 10:44:46'),
	(2, 1, 'voluptate quas', 'voluptate-quas', '2016-10-27 20:02:36', '2016-10-29 16:46:29'),
	(3, 1, 'ut repudiandae', 'ut-repudiandae', '2016-10-27 20:02:36', '2016-10-29 16:48:37'),
	(4, 1, 'incidunt id', 'incidunt-id', '2016-10-27 20:02:36', '2016-10-27 20:02:36'),
	(5, 1, 'ea voluptatum', 'ea-voluptatum', '2016-10-27 20:02:36', '2016-10-27 20:02:36'),
	(7, 1, 'doloremque nulla', 'doloremque-nulla', '2016-10-27 20:02:36', '2016-10-29 16:48:47'),
	(8, 1, 'cumque dignissimos', 'cumque-dignissimos', '2016-10-27 20:02:36', '2016-10-29 16:49:01'),
	(9, 1, 'voluptatibus iste', 'voluptatibus-iste', '2016-10-27 20:02:36', '2016-10-27 20:02:36'),
	(10, 2, 'dolorem sit', 'dolorem-sit', '2016-10-27 20:02:36', '2016-10-27 20:02:36'),
	(11, 2, 'perferendis cum', 'perferendis-cum', '2016-10-27 20:02:36', '2016-10-27 20:02:36'),
	(12, 1, 'a consectetur', 'a-consectetur', '2016-10-27 20:02:36', '2016-10-27 20:02:36'),
	(13, 4, 'ad minus', 'ad-minus', '2016-10-27 20:02:36', '2016-10-27 20:02:36'),
	(14, 4, 'doloribus consequatur', 'doloribus-consequatur', '2016-10-27 20:02:36', '2016-10-27 20:02:36'),
	(15, 3, 'enim vel', 'enim-vel', '2016-10-27 20:02:36', '2016-10-27 20:02:36'),
	(16, 2, 'non et', 'non-et', '2016-10-27 20:02:36', '2016-10-27 20:02:36'),
	(17, 2, 'pariatur maiores', 'pariatur-maiores', '2016-10-27 20:02:36', '2016-10-27 20:02:36'),
	(18, 2, 'omnis rerum', 'omnis-rerum', '2016-10-27 20:02:36', '2016-10-27 20:02:36'),
	(19, 3, 'dolorum eveniet', 'dolorum-eveniet', '2016-10-27 20:02:36', '2016-10-27 20:02:36'),
	(20, 4, 'qui unde', 'qui-unde', '2016-10-27 20:02:36', '2016-10-27 20:02:36'),
	(21, 3, 'eos quo', 'eos-quo', '2016-10-27 20:02:36', '2016-10-27 20:02:36'),
	(22, 1, 'in eum', 'in-eum', '2016-10-27 20:02:36', '2016-10-27 20:02:36'),
	(23, 3, 'quod officia', 'quod-officia', '2016-10-27 20:02:36', '2016-10-27 20:02:36'),
	(24, 4, 'neque quasi', 'neque-quasi', '2016-10-27 20:02:36', '2016-10-27 20:02:36'),
	(25, 4, 'magni molestiae', 'magni-molestiae', '2016-10-27 20:02:36', '2016-10-27 20:02:36'),
	(26, 4, 'itaque est', 'itaque-est', '2016-10-27 20:02:36', '2016-10-27 20:02:36'),
	(27, 2, 'nemo amet', 'nemo-amet', '2016-10-27 20:02:36', '2016-10-27 20:02:36'),
	(28, 3, 'excepturi sequi', 'excepturi-sequi', '2016-10-27 20:02:36', '2016-10-27 20:02:36'),
	(29, 3, 'perspiciatis necessitatibus', 'perspiciatis-necessitatibus', '2016-10-27 20:02:36', '2016-10-27 20:02:36'),
	(30, 2, 'repellat praesentium', 'repellat-praesentium', '2016-10-27 20:02:36', '2016-10-27 20:02:36');
/*!40000 ALTER TABLE `widgets` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
