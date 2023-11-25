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

$result = [];

if ($_GET['action'] === 'all') {
    // echo 'all';

    $query = 'SELECT * FROM example_users';

    $result = dataOutput($link, $query);
}


if ($_GET['action'] === 'get') {
    // echo 'get';

    $id = $_GET['id'];
    $query = 'SELECT * FROM example_users WHERE id=' . $id;

    $result = dataOutput($link, $query);
}


if ($_GET['action'] === 'del') {
    // echo 'del';
    $id = $_GET['id'];

    $query = 'DELETE FROM example_users WHERE id=' . $id;

    $query_result = mysqli_query($link, $query) or die(mysqli_error($link));

    $result = ['query_result' => $query_result, 'id' => $id];
}


if ($_GET['action'] === 'edit') {
    // echo 'del';
    $id = $_GET['id'];

    try {
        $user_data = json_decode($_POST['json'], true, 512, JSON_THROW_ON_ERROR);
    } catch (JsonException $e) {
    }

    // print_r($user_data);

    $user_name = $user_data['user_name'];
    $user_age = $user_data['user_age'];
    $user_salary = $user_data['user_salary'];

    $query = "UPDATE example_users SET user_name='$user_name', user_age='$user_age', user_salary='$user_salary' WHERE id=$id";

    // $query_result = TRUE;

    $query_result = mysqli_query($link, $query) or die(mysqli_error($link));

    // $result = ['query_result' => $query_result, 'id' => $id, 'query' => $query];
    $result = ['query_result' => $query_result, 'id' => $id, 'query' => $query];
}

header('Content-Type: application/json');
try {
    echo json_encode($result, JSON_THROW_ON_ERROR | 1);
} catch (JsonException $e) {
}
