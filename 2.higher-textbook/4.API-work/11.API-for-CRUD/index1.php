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


// API для CRUD операций


// Пусть следующий URL возвращает все записи из БД
// GET http://api.loc/index.php?action=all

// Пусть следующий URL возвращает одну запись из БД по ее id
// GET http://api.loc/index.php?action=get&id=1

// Пусть следующий URL удаляет одну запись из БД по ее id
// GET http://api.loc/index.php?action=del&id=1

// Пусть следующий URL принимает новые данные записи из БД через метод POST и изменяет эту запись по ее id
// POST http://api.loc/index.php?action=edit&id=1


// Адрес страницы для обращения
$url = 'http://test/2.higher-textbook/4.API-work/11.API-for-CRUD/api.loc/index.php';

$get_request = '?action=';

// Инициализируем сеанс
$curl = curl_init();

// Ответ сервера сохранять в переменную
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);


// Read всех - Пусть следующий URL возвращает все записи из БД
$type_request_all = 'all';

$full_url_request = $url . $get_request . $type_request_all;

// Указываем адрес страницы
curl_setopt($curl, CURLOPT_URL, $full_url_request);

// Выполняем запрос
$res = curl_exec($curl);

try {
    $users_obj = json_decode($res, false, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}

$i = 0;
foreach ($users_obj as $user) {
    echo $user->user_name . ', возраст ' . $user->user_age . ', ЗП ' . round((float)$user->user_salary, 2);
    echo '<br>';
    echo '<br>';
    if ($i === 15) {
        break;
    }
    $i++;
}


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


// Read одной - Пусть следующий URL возвращает одну запись из БД по id
$id = 1;

$type_request_id = 'get&id=' . $id;

$full_url_request = $url . $get_request . $type_request_id;

// Указываем адрес страницы
curl_setopt($curl, CURLOPT_URL, $full_url_request);

// Выполняем запрос
$res = curl_exec($curl);

try {
    $user_obj = json_decode($res, false, 512, JSON_THROW_ON_ERROR)[0];
} catch (JsonException $e) {
}

// print_r($user_obj);
echo 'ID ' . $user_obj->id . ', имя пользователя ' . $user_obj->user_name . ', возраст ' . $user_obj->user_age . ', ЗП ' . round((float)$user_obj->user_salary, 2);


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


// Delete - Пусть следующий URL удаляет одну запись из БД по ее id
$id = 95;

$type_request_id_del = 'del&id=' . $id;

$full_url_request = $url . $get_request . $type_request_id_del;

// Указываем адрес страницы
curl_setopt($curl, CURLOPT_URL, $full_url_request);

// Выполняем запрос
$res = curl_exec($curl);
try {
    $json = json_decode($res, false, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}

if ($json->query_result) {
    echo 'Запись с ID ' . $json->id . ' успешно удалена.';
} else {
    echo 'Запись с ID ' . $json->id . ' не существует.';
}


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


// Update - Пусть следующий URL принимает новые данные записи из БД через метод POST и изменяет эту запись по ее id
$id = 70;

$type_request_id_edit = 'edit&id=' . $id;

$full_url_request = $url . $get_request . $type_request_id_edit;

// Подготовка данных для POST запроса
$arr = ['user_name' => 'Пользователь ' . $id, 'user_age' => 40, 'user_salary' => 500000];
try {
    $json = json_encode($arr, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}
$data = ['json' => $json];

// Отправка данных методом POST через CURL
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

// Указываем адрес страницы
curl_setopt($curl, CURLOPT_URL, $full_url_request);

// Выполняем запрос
$res = curl_exec($curl);
try {
    $json = json_decode($res, false, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}
// print_r($json);

if ($json->query_result) {
    // echo $json->query;
    // echo '<br>';
    // echo '<br>';
    echo 'Запись с ID ' . $json->id . ' успешно обновлена.';
} else {
    echo 'Запись с ID ' . $json->id . ' не существует.';
}

echo '<br>';
echo '<br>';
