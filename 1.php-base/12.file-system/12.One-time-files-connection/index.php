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
// При

//  require 'pow.php';
//  require 'sum.php';

// Нас, однако, поджидает проблема. К файлу index.php файл pow.php будет подключен два раза: сам по себе и через файл sum.php.
// Это приведет к проблеме, так как у нас будут два набора функций с одинаковыми именами.
// Для решения проблемы следует подключать все файлы через оператор require_once - он будет подключать файл только один раз, игнорируя повторные подключения:

require_once 'file/pow.php';
require_once 'file/sum.php';
require_once 'file/string.php';

echo square(3) + squareSum([1, 2, 3]);
echo "<br>";
echo "<br>";
echo "<br>";

echo squareString([1, 2, 3]);
echo "<br>";
echo "<br>";
echo "<br>";

echo cubeString([1, 2, 3]);
echo "<br>";
echo "<br>";
echo "<br>";

echo squareString([1, 2, 3]) . ' - ' . cubeString([1, 2, 3]);
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
