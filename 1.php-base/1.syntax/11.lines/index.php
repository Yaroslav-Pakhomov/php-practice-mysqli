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

$str = 'abc';
echo $str; // выведет 'abc'
echo "<br>";

// Сложение строк

$str = 'abc' . 'def'; // складываем две строки
echo $str;            // выведет 'abcdef'
echo "<br>";

$str1 = 'abc';
$str2 = 'def';
echo $str1 . $str2; // выведет 'abcdef'
echo "<br>";

echo $str1 . '!!!' . $str2; // выведет 'abc!!!def'
echo "<br>";

// Пробелы при сложении строк

echo $str1 . ' ' . $str2; // выведет 'abc def'
echo "<br>";

$str = 'abc';
echo $str . ' ' . 'def'; // выведет 'abc def'
echo "<br>";

echo $str . ' def'; // выведет 'abc def'
echo "<br>";

// Длина строки

echo strlen('abcde'); // выведет 5
echo "<br>";

$str = 'abcde';
echo strlen($str); // выведет 5
echo "<br>";

// Проблема с кириллицей

echo mb_strlen('абвгд'); // выведет 5
echo "<br>";
?>