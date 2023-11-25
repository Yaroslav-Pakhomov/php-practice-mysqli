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


// Объекты из JSON. Преобразование объектов из JSON

$json = '{
    "a": 1,
    "b": 2,
    "c": 3
}';

try {
    $data = json_decode($json, false, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}

// var_dump($data);
print_r($data);

echo '<br>';
echo '<br>';

echo $data->a; // выведет 1

echo '<br>';

echo $data->b; // выведет 2

echo '<br>';

echo $data->c; // выведет 3


echo '<br>';
echo '<br>';
echo '<br>';


// Выведите на экран имя, фамилию и город
$json = '{
    "user": {
        "name": "john",
        "surn": "smith"
    },
    "city": "London"
}';

try {
    $data = json_decode($json, false, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}

print_r($data);

$user = $data->user; // stdClass Object ( [user] => stdClass Object ( [name] => john [surn] => smith ) [city] => London )

echo '<br>';
echo '<br>';

print_r($user); // stdClass Object ( [name] => john [surn] => smith )

echo '<br>';
echo '<br>';

echo $user->name; // john

echo '<br>';

echo $user->surn; // smith

echo '<br>';
echo '<br>';

echo $data->city; // London

echo '<br>';
echo '<br>';
echo '<br>';


// Выведите на экран русское название среды
$json = '{
    "ru": ["пн", "вт", "ср"],
    "en": ["mn", "tu", "wd"]
}';

try {
    $data = json_decode($json, false, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}


print_r($data);

echo '<br>';
echo '<br>';

echo $data->ru[2];

echo '<br>';
echo '<br>';
echo '<br>';
