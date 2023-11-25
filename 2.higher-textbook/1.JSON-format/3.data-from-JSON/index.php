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


// Данные из JSON. Преобразование данных из JSON

$json = '[1, 2, 3]';

// Преобразуем данные в PHP
try {
    $data = json_decode($json, false, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}

// var_dump($data);
print_r($data);

echo '<br>';
echo '<br>';


$json = '[
    "x",
    "y",
    "z"
]';

// Преобразуем данные в PHP
try {
    $data = json_decode($json, false, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}

print_r($data);
