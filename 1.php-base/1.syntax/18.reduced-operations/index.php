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

// Сокращенные операции

$num = 1;
$num += 3; // эквивалентно $num = $num + 3;
echo "<br>";

$num = 2;
$num -= 3; // эквивалентно $num = $num - 3;
echo "<br>";

$num = 2;
$num *= 3; // эквивалентно $num = $num * 3;
echo "<br>";

$num = 2;
$num /= 3; // эквивалентно $num = $num / 3;
echo "<br>";

$str = 'a';
$str .= 'b'; // эквивалентно $str = $str . 'b';
echo "<br>";


?>