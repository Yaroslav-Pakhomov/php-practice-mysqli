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

$arr = [1, 2, 3];
echo count($arr); // выведет 3
echo "<br>";

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
echo count($arr); // выведет 4
echo "<br>";

// Последний элемент массива
$arr = [1, 2, 3];
echo $arr[count($arr) - 1]; // выведет 3
echo "<br>";

?>