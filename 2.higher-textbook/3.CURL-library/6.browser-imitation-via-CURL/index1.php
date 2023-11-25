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

// Имитация браузера через CURL

// команда заставляет CURL имитировать браузер, отправляя заголовок User-Agent
// curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)');

// Обратитесь через CURL к следующему сайту, работающему на HTTPS $url = 'https://code.mu'.
// При обращении к некоторому сайту выполните имитацию браузера.

function getSite($url): bool|string {
    // Инициализируем сеанс
    $curl = curl_init();

    // Указываем адрес страницы
    curl_setopt($curl, CURLOPT_URL, $url);

    // Команда заставляет CURL переходить по HTTP редиректам
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    // команды позволяют CURL получать текст сайтов, работающих через протокол HTTPS
    //    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    //    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);

    // команда заставляет CURL имитировать браузер, отправляя заголовок User-Agent
    // $agent = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36';
    // $agent = 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0';
    $agent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)';
    curl_setopt($curl, CURLOPT_USERAGENT, $agent);

    // Ответ сервера сохранять в переменную
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    // Выполняем запрос
    return curl_exec($curl) ?? curl_error($curl);  // С помощью функции curl_error можно получить текст ошибки
}


// Адрес страницы для обращения
$url_site = 'http://test/2.higher-textbook/3.CURL-library/6.browser-imitation-via-CURL/test.loc/';

$res_site = getSite($url_site);

// Смотрим, что в переменной
echo $res_site;

echo '<br>';
echo '<br>';
echo '<br>';
