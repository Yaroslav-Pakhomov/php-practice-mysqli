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


// Один класс - один файл. Хранение классов в отдельных файлах


require_once 'UserCLass.php'; // подключаем наш класс

$user = new UserClass;

echo $user->class_name;
