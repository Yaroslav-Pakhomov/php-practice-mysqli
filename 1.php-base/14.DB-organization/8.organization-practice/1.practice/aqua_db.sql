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

-- Дамп структуры для таблица db_organization.aqua_rivers
CREATE TABLE IF NOT EXISTS `aqua_rivers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `rivers_title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Название реки',
  `seas_id` int(11) unsigned DEFAULT NULL,
  `tributary_id` int(11) unsigned DEFAULT NULL COMMENT 'ID притока реки',
  PRIMARY KEY (`id`),
  KEY `FK_aqua_rivers_aqua_seas` (`seas_id`),
  CONSTRAINT `FK_aqua_rivers_aqua_seas` FOREIGN KEY (`seas_id`) REFERENCES `aqua_seas` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы db_organization.aqua_rivers: ~10 rows (приблизительно)
DELETE FROM `aqua_rivers`;
INSERT INTO `aqua_rivers` (`id`, `rivers_title`, `seas_id`, `tributary_id`) VALUES
	(1, 'Река 1', 1, NULL),
	(2, 'Река 2', 2, NULL),
	(3, 'Река 3', 2, NULL),
	(4, 'Река 4', 1, NULL),
	(5, 'Река 5', NULL, 1),
	(6, 'Река 6', NULL, 1),
	(7, 'Река 7', NULL, 3),
	(8, 'Река 8', NULL, 4),
	(9, 'Река 9', NULL, 3),
	(10, 'Река 10', NULL, 4);

-- Дамп структуры для таблица db_organization.aqua_seas
CREATE TABLE IF NOT EXISTS `aqua_seas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `seas_title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Название моря',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы db_organization.aqua_seas: ~2 rows (приблизительно)
DELETE FROM `aqua_seas`;
INSERT INTO `aqua_seas` (`id`, `seas_title`) VALUES
	(1, 'Море 1'),
	(2, 'Море 2');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
