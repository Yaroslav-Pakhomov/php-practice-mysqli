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

// API ЦБ - http://www.cbr.ru/development/SXML/
// получения котировок на заданный день - http://www.cbr.ru/scripts/XML_daily.asp?date_req=19/05/2023


// API и БД

$id = 1;

$get_parameter = '?id=' . $id;

// Адрес страницы для обращения
$url = 'http://test/2.higher-textbook/4.API-work/10.API-n-DB/api.loc/index.php' . $get_parameter;


$date = file_get_contents($url);

echo var_dump(json_decode($date));


echo '<br>';
echo '<br>';
echo '<br>';


try {
    echo json_decode($date, false, 512, JSON_THROW_ON_ERROR)->user_name;
} catch (JsonException $e) {
}
