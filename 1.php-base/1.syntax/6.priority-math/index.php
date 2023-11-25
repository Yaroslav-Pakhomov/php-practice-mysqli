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

$a = 2 * 2 + 3;
echo $a; // выведет 7 (результат 4 + 3)
echo "<br>";

// Равный приоритет
$a = 8 / 2 * 4;
echo $a; // выведет 16 (результат 4 * 4)
echo "<br>";

$a = 8 * 2 / 4;
echo $a; // выведет 4 (результат 16 / 4)
echo "<br>";

$a = 16 / 2 / 2 / 2;
echo $a; // выведет 2

?>