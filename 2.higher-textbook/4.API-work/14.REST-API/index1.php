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


// REST API

// Адрес страницы для обращения
$url = 'http://test/2.higher-textbook/4.API-work/14.REST-API/api.loc/';

// Инициализируем сеанс
$curl = curl_init();

// Ответ сервера сохранять в переменную
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$full_url_request = $url;

// Указываем адрес страницы
curl_setopt($curl, CURLOPT_URL, $full_url_request);


// Выполняем запрос
$res = curl_exec($curl);

echo $res;

echo '<br>';
echo '<br>';
echo '<br>';


// PHP, и CURL поддерживают только методы GET и POST

// $method = $_SERVER['REQUEST_METHOD'];
// var_dump($method); // только GET и POST

// Поэтому для реализации REST API придется идти на хитрость. Ее суть заключается в том, что в реальности данные будут передаваться только методами GET и POST, но мы будем имитировать работу других методов с помощью пользовательского HTTP заголовка. Назовем его, например, HTTP-X-HTTP-METHOD.


// 1. Получаем всех юзеров
// GET http://api.loc/users/
// $users  = '/users/';

// Создание HTTP-заголовков
$headers = [
    'X-HTTP-METHOD: GET',
];
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

// Подготовка данных в json-формате
$data = ['user' => 'example_users', 'id' => 'users'];
try {
    $json_dates = json_encode($data, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}
$data_json_dates = ['json' => $json_dates,];

// Отправка данных методом POST через CURL
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_json_dates);

// Выполняем запрос
$res = curl_exec($curl);

try {
    $users_obj = json_decode($res, false, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}

// var_dump($users_obj);

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


// 2. Получаем одного юзера по его id
// GET http://api.loc/user/1/
// $one_user  = '/user/1/';

// Создание HTTP-заголовков
$headers = [
    'X-HTTP-METHOD: GET',
];
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

// Подготовка данных в json-формате
$data = ['user' => 'example_users', 'id' => '1'];
try {
    $json_dates = json_encode($data, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}
$data_json_dates = ['json' => $json_dates,];

// Отправка данных методом POST через CURL
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_json_dates);

// Выполняем запрос
$res = curl_exec($curl);

// Вывод
try {
    $user_obj = json_decode($res, false, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}
$user_obj = $user_obj[0];

echo 'ID ' . $user_obj->id . ', имя пользователя ' . $user_obj->user_name . ', возраст ' . $user_obj->user_age . ', ЗП ' . round((float)$user_obj->user_salary, 2);


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


// 3. Создаем юзера
// POST http://api.loc/user/
// $create_user = '/user/';

// Создание HTTP-заголовков
$headers = [
    'X-HTTP-METHOD: POST',
];
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

// Подготовка данных в json-формате
$data = [
    'user'        => 'example_users',
    'id'          => 'new',
    'user_name'   => 'Новый пользователь',
    'user_age'    => 35,
    'user_salary' => 125000,
    'city_id'     => 1,
    'token'       => time(),
];
try {
    $json_dates = json_encode($data, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}
$data_json_dates = ['json' => $json_dates,];

// Отправка данных методом POST через CURL
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_json_dates);

// Выполняем запрос
$res = curl_exec($curl);

// Вывод
echo $res;

echo '<br>';
echo '<br>';

try {
    if (json_decode($res, false, 512, JSON_THROW_ON_ERROR)) {
        echo 'Новый пользователь создан.';
    }
} catch (JsonException $e) {
}


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


// 4. Изменяем юзера по его id
// PUT http://api.loc/user/1/
// $change_user = '/user/1/';

// Создание HTTP-заголовков
$headers = [
    'X-HTTP-METHOD: PUT',
];
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

// Подготовка данных в json-формате
$data = [
    'user'        => 'example_users',
    'id'          => '30',
    'user_name'   => 'Изменённый пользователь',
    'user_age'    => 55,
    'user_salary' => 500000,
];
try {
    $json_dates = json_encode($data, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}
$data_json_dates = ['json' => $json_dates,];

// Отправка данных методом POST через CURL
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_json_dates);

// Выполняем запрос
$res = curl_exec($curl);

// Вывод
echo $res;

echo '<br>';
echo '<br>';

try {
    if (json_decode($res, false, 512, JSON_THROW_ON_ERROR)) {
        echo 'Пользователь c id ' . $data['id'] . '  изменён.';
    }
} catch (JsonException $e) {
}


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


// 5. Удаляем юзера по его id
// DELETE http://api.loc/user/1/
// $delete_user = '/user/1/';

// Создание HTTP-заголовков
$headers = [
    'X-HTTP-METHOD: DELETE',
];
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

// Подготовка данных в json-формате
$data = ['user' => 'example_users', 'id' => '13'];
try {
    $json_dates = json_encode($data, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}
$data_json_dates = ['json' => $json_dates,];

// Отправка данных методом POST через CURL
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_json_dates);

// Выполняем запрос
$res = curl_exec($curl);

// Вывод
echo $res;

echo '<br>';
echo '<br>';

try {
    if (json_decode($res, false, 512, JSON_THROW_ON_ERROR)) {
        echo 'Пользователь c id ' . $data['id'] . '  удалён.';
    }
} catch (JsonException $e) {
}
