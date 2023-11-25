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

// Установка HTTP заголовков. Установка HTTP заголовков через CURL

// С помощью опции CURLOPT_HTTPHEADER можно при запросе отправлять HTTP заголовки запроса. В качестве параметра эта опция принимает массив заголовков и их значений.

// установка опции, передав некоторые заголовки
// $headers = [
//     'Accept-Language: en-US',
//     'Accept: text/html'
// ];

// curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);


// Проверка, что указанные заголовки отправились на странице, на которую отправляем запрос
// var_dump($_SERVER['HTTP_ACCEPT_LANGUAGE']);
// var_dump($_SERVER['HTTP_ACCEPT']);


function getSite($url): bool|string {
    // Инициализируем сеанс
    $curl = curl_init();

    // Указываем адрес страницы
    curl_setopt($curl, CURLOPT_URL, $url);

    // команда заставляет CURL имитировать браузер, отправляя заголовок User-Agent
    $agent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)';
    curl_setopt($curl, CURLOPT_USERAGENT, $agent);

    $headers = [
        'X-Test: Значение теста X-Test',
        'Y-Test: 12345',
    ];

    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

    // Ответ сервера сохранять в переменную
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    // Выполняем запрос
    return curl_exec($curl) ?? curl_error($curl);  // С помощью функции curl_error можно получить текст ошибки
}


// Адрес страницы для обращения
$url_site = 'http://test/2.higher-textbook/3.CURL-library/10.setting-HTTP-headers/test.loc/';

$post1 = ['field1' => 'value1', 'field2' => 'value2', 'num1' => '3', 'num2' => '4',];

$cookies1 = 'name=john; login=admin; num1=5; num2=23';

// $res_site = getSite($url_site, $post1, $cookies1);
$res_site = getSite($url_site);

// Смотрим, что в переменной
echo $res_site;

echo '<br>';
echo '<br>';
echo '<br>';
