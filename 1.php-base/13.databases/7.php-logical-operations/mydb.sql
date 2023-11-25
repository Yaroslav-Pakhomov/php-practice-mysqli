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


-- Дамп структуры базы данных mydb
CREATE DATABASE IF NOT EXISTS `mydb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `mydb`;

-- Дамп структуры для таблица mydb.new
CREATE TABLE IF NOT EXISTS `new` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL DEFAULT 0,
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Дамп данных таблицы mydb.new: ~0 rows (приблизительно)
DELETE FROM `new`;

-- Дамп структуры для таблица mydb.new_users
CREATE TABLE IF NOT EXISTS `new_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL DEFAULT 0,
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы mydb.new_users: ~6 rows (приблизительно)
DELETE FROM `new_users`;
INSERT INTO `new_users` (`id`, `name`, `surname`, `age`, `birthday`) VALUES
	(1, 'Петр', 'Петров', 21, '2001-11-08'),
	(2, 'Николай', 'Смирнов', 23, '1999-09-18'),
	(3, 'Сергей', 'Иванов', 30, '1992-05-18'),
	(4, 'Илья', 'Сидров', 30, '1992-02-11'),
	(5, 'Александр', 'Ворон', 30, '1992-07-14'),
	(7, 'Алексей', 'Коршун', 30, '1992-06-01');

-- Дамп структуры для таблица mydb.new_users_worker
CREATE TABLE IF NOT EXISTS `new_users_worker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL DEFAULT 0,
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы mydb.new_users_worker: ~5 rows (приблизительно)
DELETE FROM `new_users_worker`;
INSERT INTO `new_users_worker` (`id`, `name`, `surname`, `age`, `birthday`) VALUES
	(1, 'Петр', 'Петров', 21, '2001-11-08'),
	(2, 'Николай', 'Смирнов', 23, '1999-09-18'),
	(3, 'Сергей', 'Иванов', 30, '1992-05-18'),
	(4, 'Илья', 'Сидров', 30, '1992-02-11'),
	(5, 'Александр', 'Ворон', 30, '1992-07-14'),
	(7, 'Алексей', 'Коршун', 30, '1992-06-01');

-- Дамп структуры для таблица mydb.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(26) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL DEFAULT 0,
  `salary` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы mydb.users: ~6 rows (приблизительно)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `age`, `salary`) VALUES
	(1, 'user1', 23, 400),
	(2, 'user2', 25, 500),
	(3, 'user3', 23, 500),
	(4, 'user4', 30, 900),
	(5, 'user5', 27, 500),
	(6, 'user6', 28, 900);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
