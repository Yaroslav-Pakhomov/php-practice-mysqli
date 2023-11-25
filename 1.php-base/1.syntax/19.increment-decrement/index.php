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

// Инкремент

$num = 0;
$num++;    // прибавляем к переменной a число 1
echo $num; // выведет 1
echo "<br>";


// Декремент

$num = 0;
$num--;    // отнимаем от переменной $num число 1
echo $num; // выведет -1
echo "<br>";


// Префиксный и постфиксный тип

// Постфикс

$num = 0;
echo $num++; // выведет 0, тк переменная увеличится только после echo
echo $num;   // выведет 1 - переменная поменялась
echo "<br>";

$num1 = 0;
$num2 = $num1++; // в переменную $num2 запишется 0
echo $num2;      // выведет 0
echo $num1;      // выведет 1 - переменная $num1 поменялась после записи в $num2
echo "<br>";

// Префиксном

$num = 0;
echo ++$num; // выведет 1 - переменная увеличилась сразу
echo "<br>";

$num1 = 0;
$num2 = ++$num1; // в переменную $num2 запишется 1
echo $num2;      // выведет 1
echo "<br>";


$num = 0;
++$num;
$num++;
echo $num; // Выведет 2, т.к. операция выполняется на отдельной строке
echo "<br>";


// Практика

$num = 3;
echo ++$num; // выведет 4
echo "<br>";

$num = 3;
echo $num++; // выведет 3
echo "<br>";

$num = 3;
echo --$num; // выведет 2
echo "<br>";

$num = 3;
echo $num--; // выведет 3
echo "<br>";

$num1 = 3;
$num2 = ++$num1;
echo $num1; // выведет 4
echo $num2; // выведет 4
echo "<br>";

$num1 = 3;
$num2 = $num1++;
echo $num1; // выведет 4
echo $num2; // выведет 3
echo "<br>";

$num1 = 3;
$num2 = --$num1;
echo $num1; // выведет 2
echo $num2; // выведет 2
echo "<br>";

$num1 = 3;
$num2 = $num1--;
echo $num1; // выведет 2
echo $num2; // выведет 3
echo "<br>";

$num1 = 3;
$num1++;
$num2 = $num1--;
echo $num1++; // выведет 3
echo --$num2;  // выведет 3
echo "<br>";
?>