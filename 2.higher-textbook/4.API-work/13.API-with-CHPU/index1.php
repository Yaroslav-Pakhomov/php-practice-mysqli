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


// API с ЧПУ

// Адрес страницы для обращения
$url = 'http://test/2.higher-textbook/4.API-work/13.API-with-CHPU/api.loc';

// Инициализируем сеанс
$curl = curl_init();

// Ответ сервера сохранять в переменную
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);


$numbers_get_request = '/1/100/';

$full_url_request = $url . $numbers_get_request;

// Указываем адрес страницы
curl_setopt($curl, CURLOPT_URL, $full_url_request);

// Выполняем запрос
$res = curl_exec($curl);

echo $res;


echo '<br>';
echo '<br>';
echo '<br>';


$leap_year = '/leap/2025/';

$full_url_request = $url . $leap_year;

// Указываем адрес страницы
curl_setopt($curl, CURLOPT_URL, $full_url_request);

// Выполняем запрос
$res = curl_exec($curl);

echo $res;


echo '<br>';
echo '<br>';
echo '<br>';


$diff_years = '/diff/2025/2030/';

$full_url_request = $url . $diff_years;

// Указываем адрес страницы
curl_setopt($curl, CURLOPT_URL, $full_url_request);

// Выполняем запрос
$res = curl_exec($curl);

echo $res;
