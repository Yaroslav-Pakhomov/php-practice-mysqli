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


// Отправка данных в формате JSON.
// Некоторые URL отдают не HTML код, а JSON, при этом отдают соответствующий HTTP заголовок

$data = [1, 2, 3];

try {
    $json = json_encode($data, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}

// HTTP заголовок
header('Content-Type: application/json');

echo $json;

echo '<br>';
echo '<br>';


// По обращению к некоторому файлу создайте массив с числами от 1 до 100 и отдайте его в формате JSON.
$arr_data = range(1, 100);

try {
    $arr_json = json_encode($arr_data, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}

// HTTP заголовок
header('Content-Type: application/json');

echo $arr_json;
