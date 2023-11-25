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

//  $_SERVER['DOCUMENT_ROOT'] - Путь от корня операционной системы до папки с нашим сайтом
// __DIR__ - константа, которая хранит путь к папке со скриптом
// __FILE__ - константа, которая хранит путь к самому файлу скрипта


echo file_get_contents('test.txt');
echo "<br>";
echo "<br>";
echo "<br>";

// file_get_contents('/test.txt');  путь станет не относительным, а абсолютным и будет искаться от корня операционной системы.
echo "<br>";
echo "<br>";
echo "<br>";

// Путь от корня операционной системы до папки с нашим сайтом
echo $_SERVER['DOCUMENT_ROOT'];
echo "<br>";
echo "<br>";
echo "<br>";

// Правильный абсолютный путь к нашему файлу
echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/php-mysqli/1.php8-base/12.file-system/3.absolute-paths' . '/test.txt');

// Преимущества
// Использование абсолютного пути удобно, когда файл с нашим скриптом и прочитываемый файл находятся в подпапках нашего сайта.
echo "<br>";
echo "<br>";
echo "<br>";

// Папка и файл скрипта
// Иногда нам нужно получить не путь к корню сайта, а путь к папке со скриптом.
// Это будут разные пути в том случае, если запускаемый скрипт находится не в корне сайта, а в подпапке.

// В этом случае путь к папке со скриптом находится в константе __DIR__:
echo __DIR__;
echo "<br>";
echo "<br>";
echo "<br>";

// Можно также получить путь к самому файлу скрипта с помощью константы __FILE__:
echo __FILE__;
echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";




