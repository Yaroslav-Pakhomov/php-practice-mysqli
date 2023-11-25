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

echo '1' + '2'; // выведет 3
echo "<br>";

echo '1' + 2;   // выведет 3
echo "<br>";

$a = '1';
$b = '2';
echo $a + $b;   // выведет 3
echo "<br>";

// Преобразование к строке

echo 1 . 2;    // выведет '12'
echo "<br>";

echo 1.2;     // выведет 1.2
echo "<br>";

// echo 1. 2;    // выдаст ошибку
// echo "<br>";

echo $a . $b;   // выведет 12, а не ошибку
echo "<br>";

?>