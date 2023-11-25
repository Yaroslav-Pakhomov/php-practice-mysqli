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

// Переход по редиректам в CURL

// команда заставляет CURL переходить по HTTP редиректам
// curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);


// Обратитесь через CURL к первой странице. Убедитесь, что он проследует по редиректу при наличии соответствующей настройки.
function getSite($url): bool|string {
    // Инициализируем сеанс
    $curl = curl_init();

    // Указываем адрес страницы
    curl_setopt($curl, CURLOPT_URL, $url);

    // Команда заставляет CURL переходить по HTTP редиректам
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);

    // Ответ сервера сохранять в переменную
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    // Выполняем запрос
    return curl_exec($curl) ?? curl_error($curl);  // С помощью функции curl_error можно получить текст ошибки
}


// Адрес страницы для обращения
$url_site = 'http://test/2.higher-textbook/3.CURL-library/4.redirects-to-CURL/test.loc/';
$res_site = getSite($url_site);

// Смотрим, что в переменной
echo $res_site;

echo '<br>';
echo '<br>';
echo '<br>';
