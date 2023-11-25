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

// Кодировка
// mysqli_query($link, "SET NAME 'utf8'");

// Запрос
$query = 'SELECT * FROM `users`';

$result = mysqli_query($link, $query) or die(mysqli_error($link));

print_r($result);

echo '<br>';
echo '<br>';

for ($i = 0; $i <= $result->num_rows; $i++) {

    $row = mysqli_fetch_assoc($result);

    print_r($row);
    echo '<br>';
    echo '<br>';
}


echo $result->num_rows;

echo '<br>';
echo '<br>';

$result = mysqli_query($link, $query) or die(mysqli_error($link));

$row1 = mysqli_fetch_assoc($result);
print_r($row1); // работник номер 1

echo '<br>';
echo '<br>';

$row2 = mysqli_fetch_assoc($result);
print_r($row2); // работник номер 2

echo '<br>';
echo '<br>';

$row3 = mysqli_fetch_assoc($result);
print_r($row3); // работник номер 3

echo '<br>';
echo '<br>';

$row4 = mysqli_fetch_assoc($result);
print_r($row4); // работник номер 4

echo '<br>';
echo '<br>';

$row5 = mysqli_fetch_assoc($result);
print_r($row5); // работник номер 5

echo '<br>';
echo '<br>';

$row6 = mysqli_fetch_assoc($result);
print_r($row6); // работник номер 6

echo '<br>';
echo '<br>';

$row7 = mysqli_fetch_assoc($result);
var_dump($row7); // выведет NULL - работники кончились

echo '<br>';
echo '<br>';


// Получение в виде массива
$result = mysqli_query($link, $query) or die(mysqli_error($link));

$row1 = mysqli_fetch_assoc($result);
$data[] = $row1;

$row2 = mysqli_fetch_assoc($result);
$data[] = $row2;

$row3 = mysqli_fetch_assoc($result);
$data[] = $row3;

$row4 = mysqli_fetch_assoc($result);
$data[] = $row4;

$row5 = mysqli_fetch_assoc($result);
$data[] = $row5;

$row6 = mysqli_fetch_assoc($result);
$data[] = $row6;

print_r($data);

echo '<br>';
echo '<br>';

// Формируем массив в цикле

$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {
}
var_dump($data); // здесь будет массив с результатом

echo '<br>';
echo '<br>';

$result = mysqli_query($link, $query) or die(mysqli_error($link));

$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
var_dump($data); // здесь будет массив с результатом

echo '<br>';
echo '<br>';

foreach ($data as $user) {
    echo 'Имя - ' . $user['name'] . ', возраст - ' . $user['age'] . ', ЗП - ' . $user['salary'] . '.';
    echo '<br>';
}

echo '<br>';
echo '<br>';

$count_data = count($data);

for ($i = 0, $j = 1; $i < $count_data; $i++, $j++) {
    ${"user_" . $j} = $data[$i];
}

echo '<br>';
echo '<br>';

echo 'Имя - ' . $user_1['name'] . ', возраст - ' . $user_1['age'] . ', ЗП - ' . $user_1['salary'] . '.';

echo '<br>';
echo '<br>';

echo 'Имя - ' . $user_2['name'] . ', возраст - ' . $user_2['age'] . ', ЗП - ' . $user_2['salary'] . '.';

echo '<br>';
echo '<br>';

echo 'Имя - ' . $user_3['name'] . ', возраст - ' . $user_3['age'] . ', ЗП - ' . $user_3['salary'] . '.';
