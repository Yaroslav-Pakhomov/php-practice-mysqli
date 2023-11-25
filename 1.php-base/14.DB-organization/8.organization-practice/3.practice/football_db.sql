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

-- Дамп структуры для таблица db_organization.football_command
CREATE TABLE IF NOT EXISTS `football_command` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `command_title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Название команды',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы db_organization.football_command: ~2 rows (приблизительно)
DELETE FROM `football_command`;
INSERT INTO `football_command` (`id`, `command_title`) VALUES
	(1, 'Команда 13'),
	(2, 'Команда 22');

-- Дамп структуры для таблица db_organization.football_footballer
CREATE TABLE IF NOT EXISTS `football_footballer` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fio` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ФИО футболиста',
  `number` int(10) unsigned DEFAULT NULL,
  `command_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__football_command` (`command_id`),
  CONSTRAINT `FK__football_command` FOREIGN KEY (`command_id`) REFERENCES `football_command` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы db_organization.football_footballer: ~13 rows (приблизительно)
DELETE FROM `football_footballer`;
INSERT INTO `football_footballer` (`id`, `fio`, `number`, `command_id`) VALUES
	(1, 'ФИО футболиста 1', 1, 1),
	(2, 'ФИО футболиста 2', 7, 1),
	(3, 'ФИО футболиста 3', 8, 1),
	(4, 'ФИО футболиста 4', 9, 1),
	(5, 'ФИО футболиста 5', 10, 1),
	(6, 'ФИО футболиста 6', 1, 2),
	(7, 'ФИО футболиста 7', 7, 2),
	(8, 'ФИО футболиста 8', 8, 2),
	(9, 'ФИО футболиста 9', 9, 2),
	(10, 'ФИО футболиста 10', 10, 2),
	(11, 'ФИО футболиста 11', 5, 1),
	(12, 'ФИО футболиста 12', 5, 2),
	(13, 'ФИО футболиста 13', 13, 1);

-- Дамп структуры для таблица db_organization.football_game
CREATE TABLE IF NOT EXISTS `football_game` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `game_date` timestamp NOT NULL,
  `command_1` int(11) unsigned DEFAULT NULL,
  `command_2` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_football_game_football_command` (`command_1`),
  KEY `FK_football_game_football_command_2` (`command_2`),
  CONSTRAINT `FK_football_game_football_command` FOREIGN KEY (`command_1`) REFERENCES `football_command` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `FK_football_game_football_command_2` FOREIGN KEY (`command_2`) REFERENCES `football_command` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы db_organization.football_game: ~1 rows (приблизительно)
DELETE FROM `football_game`;
INSERT INTO `football_game` (`id`, `game_date`, `command_1`, `command_2`) VALUES
	(1, '2022-12-05 11:04:51', 1, 2);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
