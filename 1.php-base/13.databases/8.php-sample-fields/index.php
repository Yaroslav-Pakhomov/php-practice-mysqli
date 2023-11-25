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

// print_r($result);

// Формируем массив в цикле

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;

var_dump($data); // здесь будет массив с результатом

echo '<br>';
echo '<br>';

// Выборка записей при SQL запросе к базе в PHP

// $query = "SELECT * FROM таблица WHERE условие";

// В команду WHERE можно писать ограничения на выбираемые записи, в условии допустимы следующие операции сравнения: =, !=, <>, <, >, <=, >=.

// В условии выборки можно делать более сложные комбинации с помощью команд OR и AND. Работают они так же, как и их аналоги в PHP конструкции if.

// Вместо звездочки, которую мы ставим после команды SELECT, через запятую можно перечислить имена нужных полей.

$query = "SELECT name, age FROM users WHERE id >= 3";

// Выберите из таблицы users имя, возраст и зарплату для каждого работника
$query = "SELECT name, age, salary FROM users";

$result = mysqli_query($link, $query) or die(mysqli_error($link));

// Формируем массив в цикле

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;

var_dump($data);

echo '<br>';
echo '<br>';

// Выберите из таблицы users имена всех работников
$query = "SELECT name FROM users";

$result = mysqli_query($link, $query) or die(mysqli_error($link));

// Формируем массив в цикле

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;

var_dump($data);
