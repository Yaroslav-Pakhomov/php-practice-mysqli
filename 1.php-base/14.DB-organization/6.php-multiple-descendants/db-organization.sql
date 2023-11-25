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
  PRIMARY KEY (`id`),
  KEY `FK_aqua_rivers_aqua_seas` (`seas_id`),
  CONSTRAINT `FK_aqua_rivers_aqua_seas` FOREIGN KEY (`seas_id`) REFERENCES `aqua_seas` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы db_organization.aqua_rivers: ~2 rows (приблизительно)
DELETE FROM `aqua_rivers`;
INSERT INTO `aqua_rivers` (`id`, `rivers_title`, `seas_id`) VALUES
	(1, 'Река 1', 1),
	(2, 'Река 2', 2),
	(3, 'Река 3', 2);

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

-- Дамп данных таблицы db_organization.country_regions: ~3 rows (приблизительно)
DELETE FROM `country_regions`;
INSERT INTO `country_regions` (`id`, `region_title`, `country_id`) VALUES
	(1, 'Область 1', 1),
	(2, 'Область 2', 1),
	(3, 'Область 3', 2),
	(4, 'Область 4', 2);

-- Дамп структуры для таблица db_organization.example_cities
CREATE TABLE IF NOT EXISTS `example_cities` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `city_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'Название города',
  `country_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_example_cities_example_countries` (`country_id`),
  CONSTRAINT `FK_example_cities_example_countries` FOREIGN KEY (`country_id`) REFERENCES `example_countries` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы db_organization.example_cities: ~3 rows (приблизительно)
DELETE FROM `example_cities`;
INSERT INTO `example_cities` (`id`, `city_name`, `country_id`) VALUES
	(1, 'Город 1', 1),
	(2, 'Город 2', 1),
	(3, 'Город 3', 2);

-- Дамп структуры для таблица db_organization.example_countries
CREATE TABLE IF NOT EXISTS `example_countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Название страны',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы db_organization.example_countries: ~2 rows (приблизительно)
DELETE FROM `example_countries`;
INSERT INTO `example_countries` (`id`, `country_title`) VALUES
	(1, 'Страна 1'),
	(2, 'Страна 2');

-- Дамп структуры для таблица db_organization.example_shop
CREATE TABLE IF NOT EXISTS `example_shop` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `shop_title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы db_organization.example_shop: ~4 rows (приблизительно)
DELETE FROM `example_shop`;
INSERT INTO `example_shop` (`id`, `shop_title`) VALUES
	(1, 'Магазин 1'),
	(2, 'Магазин 2'),
	(3, 'Магазин 3'),
	(4, 'Магазин 4');

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

-- Дамп структуры для таблица db_organization.example_users_shop
CREATE TABLE IF NOT EXISTS `example_users_shop` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL DEFAULT 0,
  `shop_id` int(11) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `FK_example_users_shop_example_users` (`user_id`),
  KEY `FK_example_users_shop_example_shop` (`shop_id`),
  CONSTRAINT `FK_example_users_shop_example_shop` FOREIGN KEY (`shop_id`) REFERENCES `example_shop` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_example_users_shop_example_users` FOREIGN KEY (`user_id`) REFERENCES `example_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы db_organization.example_users_shop: ~7 rows (приблизительно)
DELETE FROM `example_users_shop`;
INSERT INTO `example_users_shop` (`id`, `user_id`, `shop_id`) VALUES
	(2, 1, 1),
	(3, 1, 2),
	(4, 1, 4),
	(5, 2, 2),
	(6, 2, 3),
	(7, 2, 4),
	(8, 3, 1),
	(9, 3, 3);

-- Дамп структуры для таблица db_organization.product_categories
CREATE TABLE IF NOT EXISTS `product_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Название катерии',
  `par_category` int(10) unsigned DEFAULT NULL,
  `parpar_category` int(10) unsigned DEFAULT NULL,
  `parparpar_category` int(10) unsigned DEFAULT NULL,
  `parparparpar_category` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_product_categories_product_categories` (`par_category`),
  KEY `FK_product_categories_product_categories_2` (`parpar_category`),
  KEY `FK_product_categories_product_categories_3` (`parparpar_category`),
  KEY `FK_product_categories_product_categories_4` (`parparparpar_category`),
  CONSTRAINT `FK_product_categories_product_categories` FOREIGN KEY (`par_category`) REFERENCES `product_categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `FK_product_categories_product_categories_2` FOREIGN KEY (`parpar_category`) REFERENCES `product_categories` (`par_category`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `FK_product_categories_product_categories_3` FOREIGN KEY (`parparpar_category`) REFERENCES `product_categories` (`parpar_category`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `FK_product_categories_product_categories_4` FOREIGN KEY (`parparparpar_category`) REFERENCES `product_categories` (`parparpar_category`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы db_organization.product_categories: ~9 rows (приблизительно)
DELETE FROM `product_categories`;
INSERT INTO `product_categories` (`id`, `category_title`, `par_category`, `parpar_category`, `parparpar_category`, `parparparpar_category`) VALUES
	(1, 'Категория 1', NULL, NULL, NULL, NULL),
	(2, 'Категория 2', 1, NULL, NULL, NULL),
	(3, 'Категория 3', 2, 1, NULL, NULL),
	(4, 'Категория 4', 3, 2, 1, NULL),
	(5, 'Категория 5', 4, 3, 2, 1),
	(6, 'Категория 6', 5, 4, 3, 2),
	(7, 'Категория 7', 6, 5, 4, 3),
	(8, 'Категория 8', 7, 6, 5, 4),
	(9, 'Категория 9', 8, 7, 6, 5);

-- Дамп структуры для таблица db_organization.product_parameter
CREATE TABLE IF NOT EXISTS `product_parameter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parameter_title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Название параметра',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы db_organization.product_parameter: ~4 rows (приблизительно)
DELETE FROM `product_parameter`;
INSERT INTO `product_parameter` (`id`, `parameter_title`) VALUES
	(1, 'Параметр 1'),
	(2, 'Параметр 2'),
	(3, 'Параметр 3'),
	(4, 'Параметр 4');

-- Дамп структуры для таблица db_organization.product_products
CREATE TABLE IF NOT EXISTS `product_products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Наименование продукта',
  `subcategory_id` int(11) unsigned DEFAULT NULL,
  `price` decimal(20,6) DEFAULT NULL,
  `quantity` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_product_products_product_categories` (`subcategory_id`) USING BTREE,
  CONSTRAINT `FK_product_products_product_subcategories` FOREIGN KEY (`subcategory_id`) REFERENCES `product_subcategories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы db_organization.product_products: ~5 rows (приблизительно)
DELETE FROM `product_products`;
INSERT INTO `product_products` (`id`, `product_title`, `subcategory_id`, `price`, `quantity`) VALUES
	(3, 'Продукт 1', 1, 153.550000, 20),
	(4, 'Продукт 2', 1, 255.550000, 7),
	(5, 'Продукт 3', 2, 12055.050000, 11),
	(6, 'Продукт 4', 3, 2055.050000, 11),
	(7, 'Продукт 5', 3, 55.000000, 22),
	(8, 'Продукт 6', 4, 755.000000, 1);

-- Дамп структуры для таблица db_organization.product_products_parameter
CREATE TABLE IF NOT EXISTS `product_products_parameter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL DEFAULT 0,
  `parameter_id` int(10) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `FK__product_products` (`product_id`),
  KEY `FK__product_parameter` (`parameter_id`),
  CONSTRAINT `FK__product_parameter` FOREIGN KEY (`parameter_id`) REFERENCES `product_parameter` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK__product_products` FOREIGN KEY (`product_id`) REFERENCES `product_products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы db_organization.product_products_parameter: ~8 rows (приблизительно)
DELETE FROM `product_products_parameter`;
INSERT INTO `product_products_parameter` (`id`, `product_id`, `parameter_id`) VALUES
	(1, 3, 1),
	(2, 3, 3),
	(4, 3, 4),
	(5, 4, 2),
	(6, 5, 1),
	(7, 5, 4),
	(8, 5, 3),
	(9, 7, 3),
	(11, 7, 4);

-- Дамп структуры для таблица db_organization.product_subcategories
CREATE TABLE IF NOT EXISTS `product_subcategories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `subcategory_title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Наименование категории',
  `category_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_product_subcategories_product_categories` (`category_id`),
  CONSTRAINT `FK_product_subcategories_product_categories` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы db_organization.product_subcategories: ~4 rows (приблизительно)
DELETE FROM `product_subcategories`;
INSERT INTO `product_subcategories` (`id`, `subcategory_title`, `category_id`) VALUES
	(1, 'Подкатегория 1', 1),
	(2, 'Подкатегория 2', 2),
	(3, 'Подкатегория 3', 2),
	(4, 'Подкатегория 4', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
