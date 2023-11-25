-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.6.7-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              12.0.0.6536
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных db_organization
CREATE DATABASE IF NOT EXISTS `db_organization` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `db_organization`;

-- Дамп структуры для таблица db_organization.example_messages
CREATE TABLE IF NOT EXISTS `example_messages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Заголовок сообщения',
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Содержание сообщения',
  `user_id` int(11) unsigned DEFAULT NULL,
  `time_comment` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_example_messages_example_users` (`user_id`),
  CONSTRAINT `FK_example_messages_example_users` FOREIGN KEY (`user_id`) REFERENCES `example_users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы db_organization.example_messages: ~5 rows (приблизительно)
DELETE FROM `example_messages`;
INSERT INTO `example_messages` (`id`, `title`, `content`, `user_id`, `time_comment`) VALUES
	(1, 'Заголовок сообщения 1', 'Содержание сообщения 1 Содержание сообщения 1 Содержание сообщения 1 Содержание сообщения 1', 1, '2022-09-14 05:35:46'),
	(2, 'Заголовок сообщения 2', 'Содержание сообщения 2 Содержание сообщения 2 Содержание сообщения 2 Содержание сообщения 2 Содержание сообщения 2', 2, '2022-09-14 05:35:51'),
	(3, 'Заголовок сообщения 3', 'Содержание сообщения 3 Содержание сообщения 3 Содержание сообщения 3 Содержание сообщения 3 Содержание сообщения 3', 1, '2022-09-14 05:35:55'),
	(4, 'Заголовок сообщения 4', 'Содержание сообщения 4 Содержание сообщения 4 Содержание сообщения 4 Содержание сообщения 4 Содержание сообщения 4 Содержание сообщения 4', 3, '2022-09-14 05:35:58'),
	(5, 'Заголовок сообщения 5', 'Содержание сообщения 5 Содержание сообщения 5 Содержание сообщения 5 Содержание сообщения 5 Содержание сообщения 5', 3, '2022-09-14 05:35:59');

-- Дамп структуры для таблица db_organization.example_users
CREATE TABLE IF NOT EXISTS `example_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Имя пользователя',
  `city_id` int(11) unsigned DEFAULT NULL,
  `son_id` int(11) unsigned DEFAULT NULL,
  `father_id` int(11) unsigned DEFAULT NULL,
  `mother_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_users_cities` (`city_id`),
  KEY `FK_example_users_example_users` (`son_id`),
  CONSTRAINT `FK_example_users_example_users` FOREIGN KEY (`son_id`) REFERENCES `example_users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `FK_users_cities` FOREIGN KEY (`city_id`) REFERENCES `example_cities` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы db_organization.example_users: ~9 rows (приблизительно)
DELETE FROM `example_users`;
INSERT INTO `example_users` (`id`, `user_name`, `city_id`, `son_id`, `father_id`, `mother_id`) VALUES
	(1, 'Пользователь 1', 1, 2, 8, 6),
	(2, 'Пользователь 2', 1, 3, 8, 6),
	(3, 'Пользователь 3', 1, 4, 8, 7),
	(4, 'Пользователь 4', 2, 5, 8, 7),
	(5, 'Пользователь 5', 2, 6, 9, 1),
	(6, 'Пользователь 6', 2, 7, 9, 1),
	(7, 'Пользователь 7', 3, 8, 9, 1),
	(8, 'Пользователь 8', 3, 9, 0, NULL),
	(9, 'Пользователь 9', 3, NULL, 0, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
