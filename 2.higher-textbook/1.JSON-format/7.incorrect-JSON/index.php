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


// Некорректный JSON. Обработка некорректности JSON
$incorrect_json = '["a", "b", "c",]';

try {
    $incorrect_data = json_decode($incorrect_json, false, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
} // выведет null

var_dump($incorrect_data);

echo '<br>';
echo '<br>';

// Некорректность из-за последней ","
$correct_json = '["a", "b", "c"]';

try {
    $correct_data = json_decode($correct_json, false, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}

// var_dump($correct_data);
print_r($correct_data);

echo '<br>';
echo '<br>';
echo '<br>';
