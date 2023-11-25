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


// API с POST параметрами

// Адрес страницы для обращения
$url = 'http://test/2.higher-textbook/4.API-work/8.API-POST-parameter/api.loc/index.php';

// Инициализируем сеанс
$curl = curl_init();

// Указываем адрес страницы
curl_setopt($curl, CURLOPT_URL, $url);

// Ответ сервера сохранять в переменную
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);


$data = ['num1' => '1', 'num2' => '100'];

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


// Сделайте API, которое POST данными будет принимать знак зодиака и дату, а отдавать гороскоп для этого знака на заданную дату.

$url_zodiac = 'http://test/2.higher-textbook/4.API-work/8.API-POST-parameter/api.loc/zodiac.php';

// Инициализируем сеанс
$curl_zodiac = curl_init();

// Указываем адрес страницы
curl_setopt($curl_zodiac, CURLOPT_URL, $url_zodiac);

// Ответ сервера сохранять в переменную
curl_setopt($curl_zodiac, CURLOPT_RETURNTRANSFER, 1);

$data_zodiac = ['zodiac_sign' => 'twin', 'date' => '21.06.1991'];

// Отправка данных методом POST через CURL
curl_setopt($curl_zodiac, CURLOPT_POST, 1);
curl_setopt($curl_zodiac, CURLOPT_POSTFIELDS, $data_zodiac);

$res_zodiac = curl_exec($curl_zodiac);
echo $res_zodiac;


// echo '<br>';
// echo '<br>';

// $arr_zodiac = json_decode($res_zodiac);
// print_r($arr_zodiac);
