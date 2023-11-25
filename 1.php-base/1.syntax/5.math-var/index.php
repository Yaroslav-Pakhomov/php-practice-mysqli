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

$a = 1;
$b = 2;
$c = $a + $b; // запишем сумму в переменную $c
echo $a + $b; // выведет 3
echo "<br>";
echo $c; // выведет 3


?>