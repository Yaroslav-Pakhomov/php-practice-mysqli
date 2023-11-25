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

$a = 10;
$b = 3;
echo $a % $b; // выведет 1
echo "<br>";

echo 10 % 2; // выведет 0
echo "<br>";

$a = 1;
echo -$a; // выведет -1
echo "<br>";
?>