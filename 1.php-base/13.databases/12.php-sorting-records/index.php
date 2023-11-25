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

// С помощью команды ORDER BY можно сортировать строки результата.

// $query = "SELECT поля FROM таблица ORDER BY поле сортировки";


// Отсутствующие столбцы, значение по умолчанию в таблице
// $query = "INSERT INTO users () VALUES ()";
// mysqli_query($link, $query) or die(mysqli_error($link));

// Выберем из нашей таблицы users всех юзеров и отсортируем их по возрасту от меньшего к большему
$query = "SELECT * FROM users ORDER BY age";

// Поменяем порядок сортировки с помощью команды DESC (убывание)
$query = "SELECT * FROM users ORDER BY age DESC";

// Выберем всех юзеров с зарплатой 500 и отсортируем их по возрасту от меньшего к большему
$query = "SELECT * FROM users WHERE salary=500 ORDER BY age";

// Можно сортировать не по одному полю, а по нескольким. Выберем всех юзеров и отсортируем их сначала по возрастанию возраста, а юзеров с одинаковыми возрастами отсортируем по возрастанию зарплаты
$query = "SELECT * FROM users ORDER BY age, salary";


// Достаньте всех юзеров и отсортируйте их по возрастанию зарплаты
$query = "SELECT * FROM users ORDER BY salary";

// Достаньте всех юзеров и отсортируйте их по убыванию зарплаты.
$query = "SELECT * FROM users ORDER BY salary DESC";

// ------------------------------------------------
// Код для проверки и отладки запросов - начало
// ------------------------------------------------
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {
}

foreach ($data as $user) {
    echo 'Имя - ' . $user['name'] . ', возраст - ' . $user['age'] . ', ЗП - ' . $user['salary'] . '.';
    echo '<br>';
}
// -------------------------------------------------
// Код для проверки и отладки запросов - конец
// -------------------------------------------------

// Достаньте всех юзеров и отсортируйте их по имени
$query = "SELECT * FROM users ORDER BY name";

// Достаньте юзеров с зарплатой 700 и отсортируйте их по возрасту
$query = "SELECT * FROM users WHERE salary = 700 ORDER BY age";

// Достаньте всех юзеров и отсортируйте их по имени и по зарплате
$query = "SELECT * FROM users ORDER BY name, salary";
