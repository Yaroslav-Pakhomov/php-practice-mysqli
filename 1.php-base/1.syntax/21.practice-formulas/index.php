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


// Практика на формулы

$r = 5;
echo 3.14 * $r ** 2; // площадь круга
echo "<br>";

$a = 5;
echo $r ** 2; // площадь квадрата
echo "<br>";

$b = 7;
$s = $a * $b;
echo $s; // площадь прямоугольника
echo "<br>";

$p = 2 * ($a + $b);
echo $p; // периметр прямоугольника
echo "<br>";

// Tf = (9/5)*Tc+32;

$tc = 25;
echo (9 / 5) * $tc + 32; // цельсий в фаренгейт
echo "<br>";

$tf = 25;
echo (5 / 9) * ($tf - 32); // фаренгейт в цельсий
echo "<br>";


?>