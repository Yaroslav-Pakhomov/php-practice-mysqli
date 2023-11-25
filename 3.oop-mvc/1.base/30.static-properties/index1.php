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


// Статические свойства. Статические свойства в ООП

require_once './TestClass.php';
require_once './GeometryClass.php';

TestClass::$num1 = 2;
TestClass::$num2 = 3;

echo TestClass::$num1;

echo '<br>';
echo '<br>';

echo TestClass::$num2;

echo '<br>';
echo '<br>';

echo TestClass::getProperty(); // выведет 'test'

echo '<br>';
echo '<br>';

TestClass::setProperty('test');
echo TestClass::getProperty(); // выведет 'test'

echo '<br>';
echo '<br>';

echo GeometryClass::getBallVolume(3);

echo '<br>';
echo '<br>';

echo GeometryClass::getBallVolume(10);
