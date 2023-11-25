<?php

declare(strict_types=1);

// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// выключение вывод всех ошибок
// error_reporting(0);
// ini_set('display_errors', 'off');

// Кодировка
mb_internal_encoding('UTF-8');

// С помощью функции header можно перенаправить браузер с одной страницы на другую
// header('Location: test.php');

// Адрес целевой страницы может храниться и в переменной
$addr = 'page.php';
header('Location: ' . $addr);
