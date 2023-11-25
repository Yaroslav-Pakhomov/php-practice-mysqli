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

// Отправка данных методом POST. Отправка данных методом POST через CURL

// С помощью CURL можно отправлять данные методом POST, имитируя отправку формы. Для этого нужно указать, что запрос будет делаться методом POST. Это делается с помощью настроек

// curl_setopt($curl, CURLOPT_POST, 1);

// передаваемые данные в виде массива
// $data = ['field1'=>'value1', 'field2'=>'value2'];

// передаваемые данные в виде Query String
// $data = 'field1=value1&field2=value2';

// curl_setopt($curl, CURLOPT_POSTFIELDS, $data);


// Модифицируйте вашу функцию так, чтобы вторым необязательным параметром она принимала массив данных, отправляемых методом POST.

function getSite($url, ?array $data = []): bool|string {
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

    if ($data) {
        // Отправка данных методом POST через CURL
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }

    // $data2 = 'field3=value3&field4=value4';
    // curl_setopt($curl, CURLOPT_POSTFIELDS, $data2);

    // Ответ сервера сохранять в переменную
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    // Выполняем запрос
    return curl_exec($curl) ?? curl_error($curl);  // С помощью функции curl_error можно получить текст ошибки
}


// Адрес страницы для обращения
$url_site = 'http://test/2.higher-textbook/3.CURL-library/7.POST-method-send-data/test.loc/';

$data1 = ['field1' => 'value1', 'field2' => 'value2', 'num1' => '3', 'num2' => '4',];

$res_site = getSite($url_site);

// Смотрим, что в переменной
echo $res_site;

echo '<br>';
echo '<br>';
echo '<br>';
