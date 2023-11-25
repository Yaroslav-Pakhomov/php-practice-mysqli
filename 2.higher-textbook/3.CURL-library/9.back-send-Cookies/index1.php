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

// Обратная отправка куки. Обратная отправка кук через CURL

// Сохраненные в файле куки можно автоматически отправлять назад при следующем запросе. Это делается с помощью двух опций: опция CURLOPT_COOKIEJAR командует принимать и сохранять куки в файл, а опция CURLOPT_COOKIEFILE командует отправлять сохраненные куки на сервер.

// $cookieFilePath = $_SERVER['DOCUMENT_ROOT'] . '/cookie.txt';

// curl_setopt($curl, CURLOPT_COOKIEFILE, $cookieFilePath);
// curl_setopt($curl, CURLOPT_COOKIEJAR,  $cookieFilePath);


function getSite($url, ?array $post = [], ?string $cookies = ''): bool|string {
    // Инициализируем сеанс
    $curl = curl_init();

    // Указываем адрес страницы
    curl_setopt($curl, CURLOPT_URL, $url);

    // // Команда заставляет CURL переходить по HTTP редиректам
    // curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    // curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    // // команды позволяют CURL получать текст сайтов, работающих через протокол HTTPS
    // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    // curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

    // команда заставляет CURL имитировать браузер, отправляя заголовок User-Agent
    $agent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)';
    curl_setopt($curl, CURLOPT_USERAGENT, $agent);

    if ($post) {
        // Отправка данных методом POST через CURL
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
    }

    if ($cookies) {
        curl_setopt($curl, CURLOPT_COOKIE, $cookies);
    } else {
        echo __DIR__;

        $cookieFilePath = __DIR__ . '/cookie.txt';

        curl_setopt($curl, CURLOPT_COOKIEFILE, $cookieFilePath);
	    curl_setopt($curl, CURLOPT_COOKIEJAR,  $cookieFilePath);

    }

    // $data2 = 'field3=value3&field4=value4';
    // curl_setopt($curl, CURLOPT_POSTFIELDS, $data2);

    // Ответ сервера сохранять в переменную
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    // Выполняем запрос
    return curl_exec($curl) ?? curl_error($curl);  // С помощью функции curl_error можно получить текст ошибки
}


// Адрес страницы для обращения
$url_site = 'http://test/2.higher-textbook/3.CURL-library/9.back-send-Cookies/test.loc/';

$post1 = ['field1' => 'value1', 'field2' => 'value2', 'num1' => '3', 'num2' => '4',];

$cookies1 = 'name=john; login=admin; num1=5; num2=23';

// $res_site = getSite($url_site, $post1, $cookies1);
$res_site = getSite($url_site);

// Смотрим, что в переменной
echo $res_site;

echo '<br>';
echo '<br>';
echo '<br>';
