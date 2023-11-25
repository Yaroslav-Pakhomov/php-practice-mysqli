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

$test = (int)'1';
//	var_dump($test); // выведет 1 - число
echo "<br>";

//   var_dump((int) '1');
echo "<br>";

$test = '1';
//	var_dump((int) $test);
echo "<br>";

// Дробные числа

$test = (float)'1.2';
//	var_dump($test); // выведет 1.2
echo "<br>";


// Преобразование дроби к целому числу

$test = (int)'1.2';
//	var_dump($test); // выведет 1
echo "<br>";

$test = (int)1.2;
//	var_dump($test); // выведет 1
echo "<br>";


// Преобразование к строке

$test = (string)123;
//	var_dump($test); // выведет '123'
echo "<br>";

$test = (string)1.2;
//	var_dump($test); // выведет '1.2'
echo "<br>";

?>