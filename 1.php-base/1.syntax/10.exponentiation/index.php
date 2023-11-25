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

// Возведение в степень в PHP
echo 10 ** 3; // выведет 1000
echo "<br>";

$a = 10;
$b = 3;
echo $a ** $b; // выведет 1000
echo "<br>";

$a = 10;
echo $a ** 3; // выведет 1000
echo "<br>";

echo 2 * 2 ** 3;// выведет 16
echo "<br>";

$a = 3 * 2 ** 3;// выведет 24
echo $a;
echo "<br>";

$a = (3 * 2) ** 3;// выведет 216
echo $a;
echo "<br>";

$a = 3 * 2 ** (3 + 1);// выведет 48
echo $a;
echo "<br>";

$a = 2 ** 3 * 3;// выведет 24
echo $a;
echo "<br>";

$a = 3 * 2 ** 3 * 3;// выведет 72
echo $a;
echo "<br>";
?>