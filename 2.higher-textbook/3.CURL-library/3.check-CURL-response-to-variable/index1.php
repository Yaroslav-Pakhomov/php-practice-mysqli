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

// Проверка ответа CURL на ошибку


// Внесите соответствующие исправления в вашу функцию.

function getSite($url): bool|string {
    // Инициализируем сеанс
    $curl = curl_init();

    // Указываем адрес страницы
    curl_setopt($curl, CURLOPT_URL, $url);

    // Ответ сервера сохранять в переменную
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    // Выполняем запрос
    return curl_exec($curl) ?? curl_error($curl);  // С помощью функции curl_error можно получить текст ошибки

    // Выведем ошибку
    // curl_error($curl)
}


// Адрес страницы для обращения
$url_site = 'http://test/2.higher-textbook/3.CURL-library/3.check-CURL-response-to-variable/test.loc/';
$res_site = getSite($url_site);

// Смотрим, что в переменной
var_dump($res_site);

echo '<br>';
echo '<br>';
echo '<br>';


// Попробуйте обратиться к несуществующему сайту. Изучите текст ошибки CURL для этого случая.

// Адрес страницы для обращения
$url_site1 = 'http://test/2.higher-textbook/3.CURL-library/3.check-CURL-response-to-variable/test1.loc/';
$res_site1 = getSite($url_site1);

// Смотрим, что в переменной
var_dump($res_site1);
