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


// API отдающее JSON.

$get_parameter = '?num1=1&num2=10';

$url = 'http://test/2.higher-textbook/4.API-work/7.API-returns-JSON/api.loc/index.php' . $get_parameter;

$res = file_get_contents($url);

// var_dump($res);
echo $res;

echo '<br>';
echo '<br>';

try {
    $arr = json_decode($res, false, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}
var_dump($arr);

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


// Сделайте API, которое будет возвращать массив дат праздников в текущем году.

$url_calendar = 'http://test/2.higher-textbook/4.API-work/7.API-returns-JSON/api.loc/calendar.php';

$res_calendar = file_get_contents($url_calendar);
// echo $res_calendar;

// echo '<br>';
// echo '<br>';

try {
    $arr = json_decode($res_calendar, false, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}
print_r($arr);
