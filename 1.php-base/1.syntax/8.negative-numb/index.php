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

$a = -1;
echo $a; // выведет -1
echo "<br>";

$a = 1;
$b = -$a; // записали в $b содержимое $a с обратным знаком
echo $b;  // выведет -1
echo "<br>";

$a = 1;
echo -$a; // выведет -1
echo "<br>";
?>