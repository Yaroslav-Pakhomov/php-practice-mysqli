<meta charset="utf-8">
<?php
// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// выключение вывод всех ошибок
// error_reporting(0);
// ini_set('display_errors', 'off');

// Кодировка
mb_internal_encoding('UTF-8');

$arr = [1 => 'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
echo $arr[1]; // выведет 'пн'
echo $arr[2]; // выведет 'вт'
echo $arr[3]; // выведет 'ср'
echo "<br>";

$arr = ['user1' => 200, 'user2' => 300, 'user3' => 400];
echo $arr['user1']; // выведет 200
echo "<br>";

?>