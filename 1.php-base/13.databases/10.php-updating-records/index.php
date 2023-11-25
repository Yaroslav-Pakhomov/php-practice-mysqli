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

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {
}

var_dump($data); // здесь будет массив с результатом

echo '<br>';
echo '<br>';

// Обновление записей через SQL запрос в PHP

// Изменять записи можно с помощью команды UPDATE.

// $query = "UPDATE таблица SET полe = значениe WHERE условие";

$query = "UPDATE users SET age = 20, salary=800 WHERE id=1";

// Нужно выполнить этот запрос через mysqli_query
mysqli_query($link, $query) or die(mysqli_error($link));

// Установим зарплату 400 и возраст 24 всем юзерам в возрасте 23
$query = "UPDATE users SET age = 24, salary = 300 WHERE age=23";

// Без команды WHERE обновления захватят всю таблицу. Например, установим всем юзерам зарплату 400 и возраст 24
$query = "UPDATE users SET age = 24, salary=300";


// Всем, у кого зарплата 500, сделайте ее 700
$query = "UPDATE users SET salary = 700 WHERE salary = 500";
mysqli_query($link, $query) or die(mysqli_error($link));

// Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23.
$query = "UPDATE users SET age = 23 WHERE id >= 2 AND id <= 5";
mysqli_query($link, $query) or die(mysqli_error($link));

// Юзеру с id 4 поставьте возраст 35 лет
$query = "UPDATE users SET age = 35 WHERE id = 4";
mysqli_query($link, $query) or die(mysqli_error($link));

// Отсутствующие столбцы, значение по умолчанию в таблице
// $query = "INSERT INTO users () VALUES ()";
// mysqli_query($link, $query) or die(mysqli_error($link));
