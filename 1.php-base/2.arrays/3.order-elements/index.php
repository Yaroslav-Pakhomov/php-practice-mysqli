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

$arr = [3 => 'value3', 1 => 'value1', 2 => 'value2'];
echo $arr[1]; // выведет 'value1'
echo $arr[2]; // выведет 'value2'
echo $arr[3]; // выведет 'value3'
echo "<br>";

$arr = [7 => 'value1', 50 => 'value2', 23 => 'value3'];
echo "<br>";

?>