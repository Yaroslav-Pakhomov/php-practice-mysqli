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

$a = 1 + 2;
echo $a; // выведет 3
echo "<br>";

$b = 3 - 2;
echo $b; // выведет 1
echo "<br>";

$c = 3 * 2;
echo $c; // выведет 6
echo "<br>";

$d = 4 / 2;
echo $d; // выведет 2
echo "<br>";

?>