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


// API с POST параметрами в формате JSON


// Адрес страницы для обращения
$url = 'http://test/2.higher-textbook/4.API-work/9.API-POST-parameter-in-JSON-format/api.loc/index.php';

// Инициализируем сеанс
$curl = curl_init();

// Указываем адрес страницы
curl_setopt($curl, CURLOPT_URL, $url);

// Ответ сервера сохранять в переменную
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);


$arr = [1, 2, 3, 4, 5];
try {
    $json = json_encode($arr, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}
$data = ['json' => $json];

// Отправка данных методом POST через CURL
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

// Выполняем запрос
$res = curl_exec($curl);

var_dump((int)$res);


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


// Сделайте API, которое параметром будет принимать массив дат, а отдавать массив исторических событий, случившихся в переданные даты.

$url_historical_events = 'http://test/2.higher-textbook/4.API-work/9.API-POST-parameter-in-JSON-format/api.loc/historical_events.php';

// Инициализируем сеанс
$curl_historical_events = curl_init();

// Указываем адрес страницы
curl_setopt($curl_historical_events, CURLOPT_URL, $url_historical_events);

// Ответ сервера сохранять в переменную
curl_setopt($curl_historical_events, CURLOPT_RETURNTRANSFER, 1);

$historical_dates = ['02.02.1943', '06.08.1915', '03.07.965', '7528'];
try {
    $json_dates = json_encode($historical_dates, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}

$data_dates = ['json' => $json_dates,];

// Отправка данных методом POST через CURL
curl_setopt($curl_historical_events, CURLOPT_POST, 1);
curl_setopt($curl_historical_events, CURLOPT_POSTFIELDS, $data_dates);

$res_historical_events = curl_exec($curl_historical_events);
echo $res_historical_events;


// echo '<br>';
// echo '<br>';
