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

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {
    }

    return $data;
}

// $result = dataOutput($link, $query);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


// echo basename(__FILE__);
// echo '<br>';
// echo '<br>';

// $url = $_SERVER['REQUEST_URI'];
// echo $url;
// echo '<br>';
// echo '<br>';

$url = $_SERVER['REQUEST_URI'];

$layout = file_get_contents('layout.php');
// $content = file_get_contents('view' . $url . '.php');

// echo 'view' . $url . '.php';

echo dirname(__FILE__) . '/view' . $url . '.php';
echo '<br>';
echo '<br>';
echo $_SERVER['REQUEST_URI'];
echo '<br>';
echo '<br>';
echo $layout;
