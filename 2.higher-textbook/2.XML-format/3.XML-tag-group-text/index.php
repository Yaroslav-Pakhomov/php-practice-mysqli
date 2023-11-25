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

print_r($xml->tag); // итерируемый объект

echo '<br>';
echo '<br>';

foreach ($xml->tag as $tag) {
    echo $tag; // 'text1', 'text2', 'text3'
    echo '<br>';
}

echo '<br>';
echo '<br>';
echo '<br>';

print_r($xml->name);

echo '<br>';
echo '<br>';

foreach ($xml->name as $name) {
    echo $name;
    echo '<br>';
}
