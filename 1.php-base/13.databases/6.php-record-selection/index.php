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

print_r($result);

// Формируем массив в цикле

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {
}

var_dump($data); // здесь будет массив с результатом

// Выборка записей при SQL запросе к базе в PHP

// $query = "SELECT * FROM таблица WHERE условие";

// В команду WHERE можно писать ограничения на выбираемые записи, в условии допустимы следующие операции сравнения: =, !=, <>, <, >, <=, >=.


// Выберем юзера с id, равным 2:
$query = "SELECT * FROM users WHERE id = 2";

// Выберем юзеров с id, большим 2:
$query = "SELECT * FROM users WHERE id > 2";

// Выберем юзеров с id, большим или равным 2:
$query = "SELECT * FROM users WHERE id >= 2";

// Выберем юзеров с id, не равным 2:
$query = "SELECT * FROM users WHERE id != 2";

// Вместо команды != можно писать команду <>:
$query = "SELECT * FROM users WHERE id <> 2";

// Выберем юзеров возрастом 23 года:
$query = "SELECT * FROM users WHERE age = 23";

// Выберем юзеров с зарплатой 500:
$query = "SELECT * FROM users WHERE salary = 500";

// Выберем юзера с именем 'user1'. Здесь нас поджидает важный нюанс: так как имя является строкой, то его необходимо взять в кавычки:
$query = "SELECT * FROM users WHERE name='user1'";


// Выберите юзера с id, равным 3.
$query = "SELECT * FROM users WHERE id = 3";

// Выберите юзеров с зарплатой 900.
$query = "SELECT * FROM users WHERE salary = 900";

// Выберите юзеров с зарплатой более 400.
$query = "SELECT * FROM users WHERE salary > 400";

// Выберите юзеров с зарплатой равной или большей 500.
$query = "SELECT * FROM users WHERE salary >= 500";

// Выберите юзеров с зарплатой НЕ равной 500.
$query = "SELECT * FROM users WHERE salary != 500";
$query = "SELECT * FROM users WHERE salary <> 500";

// Выберите юзеров с зарплатой равной или меньшей 500.
$query = "SELECT * FROM users WHERE salary <= 500";
