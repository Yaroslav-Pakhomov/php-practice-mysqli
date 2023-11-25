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


// API

// В интернете часто делают специальные сервисы, раздающие некоторую информацию всем желающим. К примеру, сервисы погоды или сервисы курсов валют.

// Эти сервисы для доступа к данным предоставляют API. Под API подразумевают набор URL, к которым можно обращаться для получения данных.

// Такие API удобно использовать при создании своего сайта. К примеру, можно сделать сайт, показывающий погоду. Для этого он может воспользоваться уже существующим сторонним API.

// Также часто удобно создавать API на своем сайте на стороне бэкенда. А фронт часть сайта будет обращаться к этому API получая и изменяя информацию.

// В данном разделе сайта мы изучим, как создавать свои API, какие при этом есть нюансы, а также научимся работать с чужими API, применяя их в своих проектах.

echo '<br>';
echo '<br>';

// API ЦБ - http://www.cbr.ru/development/SXML/
// получения котировок на заданный день - http://www.cbr.ru/scripts/XML_daily.asp?date_req=19/05/2023


echo '<br>';
echo '<br>';