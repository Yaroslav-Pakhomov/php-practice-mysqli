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

// Подключаем файл один раз, если есть ошибка в исполнении, то дальнейшее исполнение скрипта прекращается
require_once 'file/functions.php';

require_once 'file/recursion_functions.php';


echo square(3) + cube(4);
echo "<br>";
echo "<br>";
echo "<br>";

func([1, [2, 7, 8], [3, 4, [5, [6, 7]]]]);
echo "<br>";
echo "<br>";
echo "<br>";

$arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
recursionArray($arr);
echo "<br>";
echo "<br>";
echo "<br>";

var_dump(funcSummaArray([1, [2, 7, 8], [3, 4, [5, [6, 7]]]]));
echo "<br>";
echo "<br>";
echo "<br>";

$arr1 = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
echo recursionArraySumma($arr1);
echo "<br>";
echo "<br>";
echo "<br>";

$arr2 = ['a', ['b', 'c', 'd'], ['e', 'f', ['g', ['j', 'k']]]];
echo recursionArrayString($arr2);
echo "<br>";
echo "<br>";
echo "<br>";

var_dump(func2([1, [2, 7, 8], [3, 4, [5, 6]]]));
echo "<br>";
echo "<br>";
echo "<br>";

var_dump(recursionDegree([1, [2, 7, 8], [3, 4, [5, 6]]]));
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
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";
