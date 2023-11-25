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

// Вставка записей через SQL запрос в PHP

// Добавляются новые записи в таблицу с помощью команды INSERT INTO.

// $query = "INSERT INTO таблица (поле1, поле2...) VALUES (значение1, значение2...)";

// Не указываем столбец id и его значение, так как значение этого столбца проставится базой автоматически.

// В таблицу users добавим нового юзера
$query = "INSERT INTO users (name, age, salary) VALUES ('user7', 30, 1000)";

// Нюансы вставки

// Нужно выполнить этот запрос через mysqli_query
mysqli_query($link, $query) or die(mysqli_error($link));


// Отсутствующие столбцы
$query = "INSERT INTO users (name, age) VALUES ('user8', 31)";

mysqli_query($link, $query) or die(mysqli_error($link));
// В таком случае не указанные столбцы возьмут значение по умолчанию. Если такое значение не указано в PhpMyAdmin, то это приведет к ошибке и такой запрос не будет выполнятся.


$query = "INSERT INTO users (name, age, salary) VALUES ( 'user9', 26, 300)";

mysqli_query($link, $query) or die(mysqli_error($link));

// Отсутствующие столбцы
$query = "INSERT INTO users () VALUES ()";

mysqli_query($link, $query) or die(mysqli_error($link));
