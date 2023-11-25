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

// Подготовка к изучению API

// При работе с API всегда есть сайт, предоставляющий это API и сайты, которые это API используют.

// Давайте для тестов сделаем два сайта на локалке: сайт api.loc, раздающий API, и сайт tst.loc, обращающийся к этому API.

// Протестируем совместную работу этих сайтов. Пусть сайт с API на главной странице отдает какой-нибудь текст


// Сделайте два описанных сайта и проверьте их работу.
$url = 'http://test/2.higher-textbook/4.API-work/2.study-preparation/api.loc/';
$res = file_get_contents($url);

var_dump($res);

echo '<br>';
echo '<br>';


echo '<br>';
echo '<br>';


$url = 'http://www.cbr.ru/scripts/XML_daily.asp?date_req=19/05/2023';

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
