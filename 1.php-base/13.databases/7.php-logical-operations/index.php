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

// В условии выборки можно делать более сложные комбинации с помощью команд OR и AND. Работают они так же, как и их аналоги в PHP конструкции if.


// Выберем юзеров с зарплатой 500 И возрастом 23 года
$query = "SELECT * FROM users WHERE salary = 500 AND age = 23";

// Выберем юзеров с зарплатой 500 ИЛИ возрастом 23 года.
$query = "SELECT * FROM users WHERE salary = 500 OR age = 23";

// Выберем юзеров с зарплатой от 450 до 900
$query = "SELECT * FROM users WHERE salary > 450 AND salary < 900";

// Выберем юзеров с возрастом от 23 до 27 лет включительно
$query = "SELECT * FROM users WHERE age >= 23 AND age <= 27";

// Сложные комбинации команд OR и AND можно группировать с помощью круглых скобок, чтобы показать приоритет условий
$query = "SELECT * FROM users WHERE (age < 20 AND age > 27) OR (salary > 300 AND salary < 500)";


// Выберите юзеров в возрасте от 25 (не включительно) до 28 лет (включительно)
$query = "SELECT * FROM users WHERE age > 25 AND age <= 28";

// Выберите юзера user1
$query = "SELECT * FROM users WHERE name = 'user1'";

// Выберите юзеров user1 и user2
$query = "SELECT * FROM users WHERE name = 'user1' AND name = 'user2'";

// Выберите всех, кроме юзера user3
$query = "SELECT * FROM users WHERE name != 'user3'";

// Выберите всех юзеров в возрасте 27 лет или с зарплатой 1000
$query = "SELECT * FROM users WHERE age = 27 OR salary = 1000";

// Выберите всех юзеров в возрасте 27 лет или с зарплатой не равной 400
$query = "SELECT * FROM users WHERE age = 27 OR salary != 400";

// Выберите всех юзеров в возрасте от 23 лет (включительно) до 27 лет (не включительно) или с зарплатой 1000
$query = "SELECT * FROM users WHERE (age >= 23 AND age < 27) OR (salary = 400)";

// Выберите всех юзеров в возрасте от 23 лет до 27 лет или с зарплатой от 400 до 1000
$query = "SELECT * FROM users WHERE (age > 23 AND age < 27) OR (salary > 400 AND salary < 1000)";
