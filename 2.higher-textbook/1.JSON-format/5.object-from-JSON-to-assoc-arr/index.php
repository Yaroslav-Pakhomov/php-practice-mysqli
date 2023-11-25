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


// Объекты из JSON в ассоциативные массивы
// Для этого нужно второй параметр функции json_decode установить в значение true.
$json = '{
    "a": 1,
    "b": 2,
    "c": 3
}';

try {
    $data = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}

print_r($data);

echo '<br>';
echo '<br>';


// Выведите на экран английское название вторника.
$json = '{
    "ru": ["пн", "вт", "ср"],
    "en": ["mn", "tu", "wd"]
}';

try {
    $data = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}

print_r($data['en']);

echo '<br>';
echo '<br>';

echo $data['en'][1];

echo '<br>';
echo '<br>';
echo '<br>';
