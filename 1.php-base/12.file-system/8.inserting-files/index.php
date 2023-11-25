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


include 'file/test.php';
include 'file/test.php';
include 'file/test.php';
include 'file/test.php';


echo "<br>";
echo 'index';
echo "<br>";
echo "<br>";

include 'file/file1.php';
echo "<br>";
echo "<br>";
echo "<br>";

include 'file/file2.php';
echo "<br>";
echo "<br>";
echo "<br>";

include 'file/file2.php';
echo "<br>";
echo "<br>";
echo "<br>";

include 'file/file2.php';
echo "<br>";
echo "<br>";
echo "<br>";

// Подключает файл один раз и продолжает работу в любом случае, даже если возникла ошибка
include_once 'file/file3.php';
echo "<br>";
echo "<br>";
echo "<br>";

include_once 'file/file3.php';
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
