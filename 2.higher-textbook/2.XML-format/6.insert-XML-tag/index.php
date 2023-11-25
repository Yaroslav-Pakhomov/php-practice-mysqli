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

print_r($xml->tag);

echo '<br>';
echo '<br>';

echo $xml->tag->elem;

echo '<br>';
echo '<br>';
echo '<br>';

// Выведите на экран текст самого внутреннего тега.
// <tag1>
//     <tag2>
//         <tag3>
//             text
//         </tag3>
//     </tag2>
// </tag1>

print_r($xml->tag1);

echo '<br>';
echo '<br>';

print_r($xml->tag1->tag2);

echo '<br>';
echo '<br>';

echo $xml->tag1->tag2->tag3;
