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

// С помощью команды LIMIT мы можем ограничить количество строк в результате.

// $query = "SELECT поля FROM таблица WHERE условие ORDER BY поле сортировки LIMIT кол-во записей";

// Выберем первых двух юзеров
$query = "SELECT * FROM users LIMIT 2";

// Выберем всех юзеров с зарплатой 500, а затем с помощью LIMIT возьмем только первых двух из выбранных
$query = "SELECT * FROM users WHERE salary=500 LIMIT 2";

// С помощью LIMIT можно выбрать несколько строк из середины результата. В примере ниже мы выберем со второй строки (нумерация строк с нуля), 5 штук
$query = "SELECT * FROM users LIMIT 1,5";

// Команду LIMIT можно комбинировать с ORDER BY. При этом сначала нужно писать команду сортировки, а потом - лимит. В следующем примере мы сначала отсортируем записи по возрастанию возраста, а потом возьмем первые 3 штуки
$query = "SELECT * FROM users ORDER BY age LIMIT 3";


// Получите первых 4 юзера
$query = "SELECT * FROM users LIMIT 4";

// Получите юзеров со второго (нумерация строк с нуля), 3 штуки
$query = "SELECT * FROM users LIMIT 1,3";

// Отсортируйте юзеров по возрастанию зарплаты и получите первых 3 работника из результата сортировки
$query = "SELECT * FROM users ORDER BY salary LIMIT 3";

// Отсортируйте юзеров по убыванию зарплаты и получите первых 3 юзера из результата сортировки
$query = "SELECT * FROM users ORDER BY salary DESC LIMIT 3";


// -----------------------------------------------
// Код для проверки и отладки запросов - начало
// -----------------------------------------------
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {
}

foreach ($data as $user) {
    echo 'Имя - ' . $user['name'] . ', возраст - ' . $user['age'] . ', ЗП - ' . $user['salary'] . '.';
    echo '<br>';
}
// --------------------------------------------------
// Код для проверки и отладки запросов - конец
// --------------------------------------------------


// Отсутствующие столбцы, значение по умолчанию в таблице
// $query = "INSERT INTO users () VALUES ()";
// mysqli_query($link, $query) or die(mysqli_error($link));
