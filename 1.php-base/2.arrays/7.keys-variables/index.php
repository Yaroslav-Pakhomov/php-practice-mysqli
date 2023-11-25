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

$arr = ['a', 'b', 'c'];
$key = 0; // запишем ключ в переменную
echo $arr[$key]; // выведет 'a'
echo "<br>";

$arr = [];
$arr['a'] = 1;
$arr['b'] = 2;
$arr['c'] = 3;
$key = 'b';
echo $arr[$key]; // выведет 2
echo "<br>";

?>