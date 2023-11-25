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

// API несколько URL


// Сделайте API с тремя URL. Обращение к первому должно отдавать текущий день, ко второму - текущий месяц, к третьему - текущий год.

$day = 'http://test/2.higher-textbook/4.API-work/4.several-URL-API/api.loc/day.php';
$month = 'http://test/2.higher-textbook/4.API-work/4.several-URL-API/api.loc/month.php';
$year = 'http://test/2.higher-textbook/4.API-work/4.several-URL-API/api.loc/year.php';

$day_res = file_get_contents($day);
$month_res = file_get_contents($month);
$year_res = file_get_contents($year);

$res = $day_res . '/' . $month_res . '/' . $year_res;

// var_dump($res);
echo $res . '!';

echo '<br>';
echo '<br>';


echo '<br>';
echo '<br>';


$url = 'http://www.cbr.ru/scripts/XML_daily.asp?date_req=' . $res;

// Получили инф-ю
$res = file_get_contents($url);

// Записали в файл
file_put_contents('test.xml', $res);

// функция simplexml_load_file загружает xml
$valCurs_xml = simplexml_load_string(file_get_contents('test.xml'));
// var_dump($valCurs_xml); // объект

foreach ($valCurs_xml->Valute as $currency) {
    var_dump($currency); // 'text1', 'text2', 'text3'
    echo '<br>';
    echo '<br>';
}
