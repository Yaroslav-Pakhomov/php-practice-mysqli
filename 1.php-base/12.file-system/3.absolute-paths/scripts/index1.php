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

// Прочитаем наш файл, используя относительный путь
echo file_get_contents('../directory/test.txt');
echo "<br>";
echo "<br>";
echo "<br>";

// Прочитаем наш файл, используя абсолютный путь:
$root = $_SERVER['DOCUMENT_ROOT'] . '/php-mysqli/1.php8-base/12.file-system/3.absolute-paths';
echo file_get_contents($root . '/directory/test.txt');
// даже если мы переместим файл со скриптом в другое место, путь к файлу не придется менять, ведь он задается от корня сайта.
echo "<br>";
echo "<br>";
echo "<br>";
