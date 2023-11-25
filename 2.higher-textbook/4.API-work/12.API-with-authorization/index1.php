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


// API с авторизацией


// Адрес страницы для обращения
$url = 'http://test/2.higher-textbook/4.API-work/12.API-with-authorization/api.loc/index.php';

$token = '12345';

$get_request = '?num=5&token=';

// Инициализируем сеанс
$curl = curl_init();

// Ответ сервера сохранять в переменную
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$full_url_request = $url . $get_request . $token;

// Указываем адрес страницы
curl_setopt($curl, CURLOPT_URL, $full_url_request);

// Выполняем запрос
$res = curl_exec($curl);

echo $res;


echo '<br>';
echo '<br>';
echo '<br>';


// Сделайте API, которое параметром будет принимать дату дня рождения и возвращать сколько дней осталось до этой даты. Сделайте авторизацию по токену.

// Модифицируйте предыдущую задачу так, чтобы и параметр, и токен передавались методом POST.

// Модифицируйте предыдущую задачу так, чтобы токен передавался через HTTP заголовок X-Token.

// Сделайте так, чтобы токены хранились в базе данных и у каждого пользователя API был свой токен.

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = 'root';          // пароль
$name = 'db_organization';      // имя базы данных

// Подключение
$link = mysqli_connect($host, $user, $pass, $name);

/**
 * Функция для проверки и отладки запросов, возвращает массив данных
 *
 * @param false|mysqli $link подключение
 * @param string $query запрос
 *
 * @return array $data массив данных
 */
function dataOutput(false|mysqli $link, string $query): array {
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    //    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {
    //    }
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}

$id = 1;

// Сформируем запрос на получение этого юзера
$query = "SELECT * FROM example_users WHERE id=$id";
// echo $query;

// Выполним запрос
$result = mysqli_query($link, $query) or die(mysqli_error($link));

// Запишем данные юзера в переменную
$user = mysqli_fetch_assoc($result);

print_r($user);
echo '<br>';
echo $user['user_name'];

echo '<br>';
echo $user['user_age'];

echo '<br>';
echo $user['user_salary'];

echo '<br>';
echo $user['token'];

echo '<br>';
echo '<br>';
echo '<br>';

$url = 'http://test/2.higher-textbook/4.API-work/12.API-with-authorization/api.loc/index.php';

$user_token = $user['token'];

// Отправка данных методом POST через CURL
curl_setopt($curl, CURLOPT_POST, 1);


// $token_birth = '13315';

$headers = [
    // 'X-Test: Значение теста X-Test',
    // 'Y-Test: 12345',
    'X-Token: ' . $user_token,
];

curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);


$birth_data = '1991.03.21';

$get_request = '?token_birth=' . $user_token;


// Подготовка данных для POST запроса
$arr = ['birth' => $birth_data,];
try {
    $json = json_encode($arr, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}
$data = ['json' => $json];

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$full_url_request = $url . $get_request;


// Указываем адрес страницы
curl_setopt($curl, CURLOPT_URL, $full_url_request);

// Выполняем запрос
$res = curl_exec($curl);

echo $res;
echo '<br>';
echo '<br>';


$birth_data = '1991.06.21';

$get_request = '?token_birth=' . $user_token;

$full_url_request = $url . $get_request;


// Подготовка данных для POST запроса
$arr = ['birth' => $birth_data,];
try {
    $json = json_encode($arr, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}
$data = ['json' => $json];

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);


// Указываем адрес страницы
curl_setopt($curl, CURLOPT_URL, $full_url_request);

// Выполняем запрос
$res = curl_exec($curl);

echo $res;
echo '<br>';
echo '<br>';
