<?php

declare(strict_types=1);

// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// выключение вывод всех ошибок
// error_reporting(0);
// ini_set('display_errors', 'off');

// Кодировка
mb_internal_encoding('UTF-8');

// GET-запросы - ?par1=1&par2=2 добавьте в конец адресной строки и нажмите энтер.
// Итоговый GET-запрос - ?par1=1&par2=2&number=5&number1=13&number2=202&auth=1&arr=2
var_dump($_GET);
echo "<br>";
echo "<br>";
echo "<br>";

echo (int)$_GET['number'] ** 2;
echo "<br>";
echo "<br>";
echo "<br>";

echo (int)$_GET['number1'] + (int)$_GET['number2'];
echo "<br>";
echo "<br>";
echo "<br>";

if ((int)$_GET['auth'] === 1) {
    echo 'Hello!';
} elseif ((int)$_GET['auth'] === 2) {
    echo 'Bye...';
} else {
    echo 'Введите корректное число.';
}
echo "<br>";
echo "<br>";
echo "<br>";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo $arr[(int)$_GET['arr']];
echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


