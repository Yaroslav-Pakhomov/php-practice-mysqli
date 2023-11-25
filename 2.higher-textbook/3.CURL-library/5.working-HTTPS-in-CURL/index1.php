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

// Работа с HTTPS в CURL

// команда заставляет CURL переходить по HTTP редиректам
// curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);

// команды позволяют CURL получать текст сайтов, работающих через протокол HTTPS
// curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);


// Обратитесь через CURL к следующему сайту, работающему на HTTPS $url = 'https://code.mu'

function getSite($url): bool|string {
    // Инициализируем сеанс
    $curl = curl_init();

    // Указываем адрес страницы
    curl_setopt($curl, CURLOPT_URL, $url);

    // Команда заставляет CURL переходить по HTTP редиректам
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);

    // команды позволяют CURL получать текст сайтов, работающих через протокол HTTPS
    //    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    //    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);

    // Ответ сервера сохранять в переменную
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    // Выполняем запрос
    return curl_exec($curl) ?? curl_error($curl);  // С помощью функции curl_error можно получить текст ошибки
}


// Адрес страницы для обращения
$url_site = 'http://test/2.higher-textbook/3.CURL-library/5.working-HTTPS-in-CURL/test.loc/';

$res_site = getSite($url_site);

// Смотрим, что в переменной
echo $res_site;

echo '<br>';
echo '<br>';
echo '<br>';
