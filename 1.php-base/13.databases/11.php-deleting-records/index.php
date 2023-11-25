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

// С помощью команды DELETE можно удалять записи из таблицы.

// $query = "DELETE FROM таблица WHERE условие";


// Удалите юзера с id, равным 7.
$query = "DELETE FROM users WHERE id = 7";

// Удалите всех юзеров, у которых возраст 23 года.
$query = "DELETE FROM users WHERE age = 23";

// Удалите всех юзеров
$query = "DELETE FROM users";
// mysqli_query($link, $query) or die(mysqli_error($link));

// Отсутствующие столбцы, значение по умолчанию в таблице
// $query = "INSERT INTO users () VALUES ()";
// mysqli_query($link, $query) or die(mysqli_error($link));
