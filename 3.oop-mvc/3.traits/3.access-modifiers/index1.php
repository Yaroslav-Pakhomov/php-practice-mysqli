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


// Модификаторы доступа. Модификаторы доступа и трейты

require_once './Test.php';

$test = new Test();

echo '<br>';
echo '<br>';

// Поменяли модификатор доступа за счёт этого можно обращаться к методу на прямую
echo $test->method();