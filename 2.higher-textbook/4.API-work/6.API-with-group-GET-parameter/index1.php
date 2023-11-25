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


// API с несколькими GET параметрами


// Сделайте API с адресом, на который двумя параметрами будут передаваться даты в формате год-месяц-день, а в ответ будет отдаваться количество дней между этими датами.

$date1 = '2023-05-02';
$date2 = '2023-05-10';

$get_date1 = 'date1=' . '2023-05-02';
$get_date2 = 'date2=' . '2023-05-10';

$url_quantity_days = 'http://test/2.higher-textbook/4.API-work/6.API-with-group-GET-parameter/api.loc/quantity_days.php?' . $get_date1 . '&' . $get_date2;

$date = file_get_contents($url_quantity_days);

echo $date;


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


// Сделайте API, которое будет возвращать текущее время в формате день-месяц-год.

// получаем кол-во секунд
$timestamp = strtotime('2023-05-15');

$get_parameter = '?timestamp=' . $timestamp;

$url = 'http://test/2.higher-textbook/4.API-work/6.API-with-group-GET-parameter/api.loc/index.php' . $get_parameter;

$date = file_get_contents($url);

// var_dump($res);
echo $date;

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


$url = 'http://www.cbr.ru/scripts/XML_daily.asp?date_req=' . $date;

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
