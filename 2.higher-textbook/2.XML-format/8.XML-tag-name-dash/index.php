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

print_r($xml);

echo '<br>';
echo '<br>';

// для обращения к тегу c дефисом
echo $xml->tag->{'elem-child'}; // 'text'

echo '<br>';
echo '<br>';


// Выведите на экран имя и фамилию юзера.
// <user-name>john</user-name>
// <user-surn>smith</user-surn>

echo $xml->{'user-name'};

echo '<br>';
echo '<br>';

echo $xml->{'user-surn'};
