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


// -------------------------------------------------
// Код для проверки и отладки запросов - начало
// -------------------------------------------------
$result = mysqli_query($link, $query) or die(mysqli_error($link));

// Формируем массив в цикле
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {
}

foreach ($data as $user) {
    echo 'Имя - ' . $user['name'] . ', возраст - ' . $user['age'] . ', ЗП - ' . $user['salary'] . '.';
    echo '<br>';
}
// -------------------------------------------------
// Код для проверки и отладки запросов - конец
// -------------------------------------------------


// Изучите справочник SQL (ссылка - https://www.code.mu/ru/sql/manual/). При изучении справочника особое внимание обратите на команды IN, MIN, MAX, GROUP BY, CONCAT, а также на функции для работы с датой.
