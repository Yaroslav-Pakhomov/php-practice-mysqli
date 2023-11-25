<?php

// Адрес страницы для обращения
$url = 'http://test.loc';
// http://test/2.higher-textbook/3.CURL-library/1.introduction/test.loc/

// Инициализируем сеанс
$curl = curl_init();

// Указываем адрес страницы
curl_setopt($curl, CURLOPT_URL, $url);

// Выполняем запрос
curl_exec($curl);
