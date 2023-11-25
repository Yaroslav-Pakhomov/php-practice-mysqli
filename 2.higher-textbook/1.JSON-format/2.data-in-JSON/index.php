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


// Данные в JSON. Преобразование данных в JSON

$data = [1, 2, 3];

// Преобразуем в JSON
try {
    $json = json_encode($data, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}

var_dump($json);

echo '<br>';
echo '<br>';

// Преобразуйте в JSON следующую структуру PHP
$data = [
    'x' => 1,
    'y' => 2,
    'z' => 3,
];

// Преобразуем в JSON
try {
    $json = json_encode($data, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}

var_dump($json);
