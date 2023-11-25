<?php

declare(strict_types=1);

use Admin\Page as AdminPage;


// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// выключение вывод всех ошибок
// error_reporting(0);
// ini_set('display_errors', 'off');

// Кодировка
mb_internal_encoding('UTF-8');

require_once './admin/Page.php';


$adminPage = new AdminPage();

// Относительные пути

// Со слэшем
// namespace Admin\Data;

// new \Core\Controller;


// Без слэша
// namespace Admin\Data;

// new Core\Controller; // эквивалентно \Admin\Data\Core\Controller
