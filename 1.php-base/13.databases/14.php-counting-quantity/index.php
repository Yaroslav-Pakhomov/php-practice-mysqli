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

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = 'root';      // пароль
$name = 'mydb';      // имя базы данных

// Подключение
$link = mysqli_connect($host, $user, $pass, $name);

// Запрос, если команда WHERE отсутствует, то выберутся все записи из таблицы
$query = 'SELECT * FROM `users`';

$result = mysqli_query($link, $query) or die(mysqli_error($link));

// Формируем массив в цикле

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;

var_dump($data); // здесь будет массив с результатом

echo '<br>';
echo '<br>';

// С помощью команды COUNT можно подсчитать количество строк в выборке.

// $query = "SELECT COUNT(*) FROM таблица";

// Подсчитаем всех юзеров в таблице
$query = "SELECT COUNT(*) FROM users";

// Подсчитаем всех, у кого зарплата равна 900
$query = "SELECT COUNT(*) FROM users WHERE salary=900";


// Получение количества в PHP
$query = "SELECT COUNT(*) FROM users";

$result = mysqli_query($link, $query) or die(mysqli_error($link));
$data = mysqli_fetch_assoc($result);
var_dump($data); // ['COUNT(*)' => 6]

echo '<br>';
echo '<br>';

// Чтобы ключ в этом массиве был более красивый, можно переименовать наше поле в запросе с помощью команды "as"
$query = "SELECT COUNT(*) as count FROM users";

$result = mysqli_query($link, $query) or die(mysqli_error($link));
$data = mysqli_fetch_assoc($result);
print_r($data); // ['count' => 6]

echo '<br>';
echo '<br>';

// Подсчитайте всех юзеров с зарплатой 300
$query = "SELECT COUNT(*) as count FROM users WHERE salary = 900";


// Подсчитайте всех юзеров с зарплатой 300 или возрастом 23
$query = "SELECT COUNT(*) as count FROM users WHERE salary = 900 AND age = 28";

// -------------------------------------------------
// Код для проверки и отладки запросов - начало
// -------------------------------------------------
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$data = mysqli_fetch_assoc($result);
print_r($data);
// -------------------------------------------------
// Код для проверки и отладки запросов - конец
// -------------------------------------------------


// Отсутствующие столбцы, значение по умолчанию в таблице
// $query = "INSERT INTO users () VALUES ()";
// mysqli_query($link, $query) or die(mysqli_error($link));
