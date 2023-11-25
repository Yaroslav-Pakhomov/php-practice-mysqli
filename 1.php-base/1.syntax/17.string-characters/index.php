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

$str = 'abcde';
echo $str[0]; // выведет 'a'
echo $str[1]; // выведет 'b'
echo $str[2]; // выведет 'c'
echo "<br>";

$str[0] = '+';
echo $str; // выведет '+bcde'
echo "<br>";

$str = 'abcde';
$num = 3; // номер символа в переменной
echo $str[$num]; // выведет 'd'
echo "<br>";


// Последний символ строки
$last = strlen($str) - 1; // номер последнего символа
echo $str[$last]; // выведет 'e'
echo "<br>";

echo $str[strlen($str) - 1]; // выведет 'e'
echo "<br>";

$str = '12345';
echo $str[0]; // выведет '1'
echo $str[1]; // выведет '2'
echo $str[2]; // выведет '3'
echo $str[0] + $str[1]; // выведет 3
echo "<br>";

$num = 12345;
echo $num[0]; // выдаст ошибку
echo "<br>";

$str = (string)$num;
echo $str[0]; // выведет '1'
echo "<br>";
?>