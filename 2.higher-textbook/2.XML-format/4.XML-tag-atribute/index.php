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

// функция simplexml_load_file загружает xml
$xml = simplexml_load_string(file_get_contents('test.xml'));

print_r($xml); // итерируемый объект

echo '<br>';
echo '<br>';

print_r($xml->tag); // итерируемый объект

echo '<br>';
echo '<br>';

echo $xml->tag; // выведет 'text'

echo '<br>';
echo '<br>';

echo $xml->tag['attr']; // выведет 'val'

echo '<br>';
echo '<br>';
echo '<br>';

print_r($xml->user);

echo '<br>';
echo '<br>';

echo $xml->user['age'];

echo '<br>';
echo '<br>';

echo $xml->user['salary'];

echo '<br>';
echo '<br>';

// echo $xml->user['salary'];
