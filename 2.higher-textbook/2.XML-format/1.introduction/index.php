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


// Введение. Формат XML

// XML представляет собой формат для хранения данных. Этот формат часто используется для обмена данными между сайтами, либо между сервером и браузером. Технически XML похож на HTML, но с любыми тегами и атрибутами.

// функция simplexml_load_file загружает xml
$xml = simplexml_load_string(file_get_contents('test.xml'));

var_dump($xml); // объект

echo '<br>';
echo '<br>';

echo $xml->test;

echo '<br>';
echo '<br>';

echo $xml->my_tag;
