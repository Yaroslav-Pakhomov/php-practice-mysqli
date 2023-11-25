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


// Данные для подключения
$host = 'localhost';            // имя хоста
$user = 'root';                 // имя пользователя
$pass = 'root';                 // пароль
$name = 'db_organization';      // имя базы данных


// Подключение
$link = mysqli_connect($host, $user, $pass, $name);

function dataOutput(mysqli $link, string $query): array {
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}

$uri = $_SERVER['REQUEST_URI'];


// echo 'Попал';
// echo '<br>';
// echo '<br>';

$method = $_SERVER['REQUEST_METHOD'];
// var_dump($method); // только GET и POST



if (isset($_SERVER['HTTP_X_HTTP_METHOD'])) {

    $method = $_SERVER['HTTP_X_HTTP_METHOD'];

    switch ($method) {

            // GET - метод заголовка HTTP_X_HTTP_METHOD
        case 'GET':

            if (isset($_POST['json'])) {
                try {
                    $change_user_data = json_decode($_POST['json'], false, 512, JSON_THROW_ON_ERROR);
                } catch (JsonException $e) {
                }

                if ($change_user_data->id === 'users') {
                    // Получить всех пользователей
                    $query = 'SELECT * FROM ' . $change_user_data->user . ' ORDER BY user_name LIMIT 10';

                } else {
                    // Получить пользователя по id

                    $query = 'SELECT * FROM ' . $change_user_data->user . ' WHERE id=' . (int) $change_user_data->id;

                }
                $result = dataOutput($link, $query);
            }
            break;

            // POST - метод заголовка HTTP_X_HTTP_METHOD
        case 'POST':

            if (isset($_POST['json'])) {
                try {
                    $change_user_data = json_decode($_POST['json'], false, 512, JSON_THROW_ON_ERROR);
                } catch (JsonException $e) {
                }

                if ($change_user_data->id === 'new') {
                    // echo 'Создать нового пользователя.';
                    $user_name = (string) $change_user_data->user_name;
                    $user_age = (int) $change_user_data->user_age;
                    $user_salary = (float) $change_user_data->user_salary;
                    $city_id = (int) $change_user_data->city_id;
                    $token = (int) $change_user_data->token;

                    $query = "INSERT INTO " . $change_user_data->user . " SET user_name='$user_name', user_age='$user_age', user_salary='$user_salary', city_id='$city_id', token='$token'";

                    // Выполним этот запрос
                    $result = mysqli_query($link, $query) or die(mysqli_error($link));
                }
            }
            break;

            // PUT - метод заголовка HTTP_X_HTTP_METHOD
        case 'PUT':
            if (isset($_POST['json'])) {
                try {
                    $change_user_data = json_decode($_POST['json'], false, 512, JSON_THROW_ON_ERROR);
                } catch (JsonException $e) {
                }

                if ((int) $change_user_data->id) {
                    $id = (int) $change_user_data->id;
                    $user_name = (string) $change_user_data->user_name;
                    $user_age = (int) $change_user_data->user_age;
                    $user_salary = (float) $change_user_data->user_salary;
                    // echo 'Изменяем пользователя с id = ' . (int) $id . '.';


                    $query  = "UPDATE " . $change_user_data->user . " SET user_name='$user_name', user_age='$user_age', user_salary='$user_salary' WHERE id=$id";

                    $result = mysqli_query($link, $query) or die(mysqli_error($link));
                }
            }
            break;

            // DELETE - метод заголовка HTTP_X_HTTP_METHOD
        case 'DELETE':

            if (isset($_POST['json'])) {
                try {
                    $change_user_data = json_decode($_POST['json'], false, 512, JSON_THROW_ON_ERROR);
                } catch (JsonException $e) {
                }

                if ((int) $change_user_data->id) {
                    $id = (int) $change_user_data->id;

                    // Сформируем запрос на удаление
                    $query = "DELETE FROM " . $change_user_data->user . " WHERE id=" . $id;

                    // Удалим запись из базы данных
                    $result = mysqli_query($link, $query) or die(mysqli_error($link));
                }
            }
            break;
    }
}

if (isset($result)) {
    header('Content-Type: application/json');
    try {
        echo json_encode($result, JSON_THROW_ON_ERROR | 1);
    } catch (JsonException $e) {
    }
}
