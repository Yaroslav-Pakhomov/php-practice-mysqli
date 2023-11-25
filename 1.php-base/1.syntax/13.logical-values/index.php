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

$isAdult = true;
//	var_dump($isAdult); // выведет true
echo "<br>";

$isAdult = false;
//	var_dump($isAdult); // выведет true
echo "<br>";

echo true;  // выведет 1
echo "<br>";

echo false; // выведет пустоту
echo "<br>";

?>