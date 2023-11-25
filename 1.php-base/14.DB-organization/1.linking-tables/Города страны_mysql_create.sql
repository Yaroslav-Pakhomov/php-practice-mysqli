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

-- Дамп структуры для таблица db_organization.country_cities
CREATE TABLE IF NOT EXISTS `country_cities` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `city_title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Название города',
  `region_id` int(11) unsigned DEFAULT NULL,
  `country_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_country_cities_country_regions` (`region_id`),
  KEY `FK_country_cities_country_countries` (`country_id`),
  CONSTRAINT `FK_country_cities_country_countries` FOREIGN KEY (`country_id`) REFERENCES `country_countries` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `FK_country_cities_country_regions` FOREIGN KEY (`region_id`) REFERENCES `country_regions` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы db_organization.country_cities: ~8 rows (приблизительно)
DELETE FROM `country_cities`;
INSERT INTO `country_cities` (`id`, `city_title`, `region_id`, `country_id`) VALUES
	(1, 'Город 1', 1, 1),
	(2, 'Город 2', 2, 1),
	(3, 'Город 3', 3, 1),
	(4, 'Город 4', 4, 1),
	(5, 'Город 5', 1, 2),
	(6, 'Город 6', 2, 2),
	(7, 'Город 7', 3, 2),
	(8, 'Город 8', 4, 2);

-- Дамп структуры для таблица db_organization.country_countries
CREATE TABLE IF NOT EXISTS `country_countries` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `country_title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Название страны',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы db_organization.country_countries: ~2 rows (приблизительно)
DELETE FROM `country_countries`;
INSERT INTO `country_countries` (`id`, `country_title`) VALUES
	(1, 'Страна 1'),
	(2, 'Страна 2');

-- Дамп структуры для таблица db_organization.country_regions
CREATE TABLE IF NOT EXISTS `country_regions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `region_title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Название области',
  `country_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_country_regions_country_countries` (`country_id`),
  CONSTRAINT `FK_country_regions_country_countries` FOREIGN KEY (`country_id`) REFERENCES `country_countries` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы db_organization.country_regions: ~4 rows (приблизительно)
DELETE FROM `country_regions`;
INSERT INTO `country_regions` (`id`, `region_title`, `country_id`) VALUES
	(1, 'Область 1', 1),
	(2, 'Область 2', 1),
	(3, 'Область 3', 2),
	(4, 'Область 4', 2);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
