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


$id = $_GET['id'];
$query = 'SELECT * FROM example_users WHERE id=' . $id;
$result = mysqli_query($link, $query);
$user = mysqli_fetch_assoc($result);

header('Content-Type: application/json');
try {
    echo json_encode($user, JSON_THROW_ON_ERROR | 1);
} catch (JsonException $e) {
}
