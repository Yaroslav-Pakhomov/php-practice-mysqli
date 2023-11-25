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


// Константы классов. Константы классов в ООП

require_once './TestClass.php';


echo TestClass::CONSTANT;

// TestClass::CONSTANT = 'test'; // выдаст ошибку

echo '<br>';
echo '<br>';

echo TestClass::getConstant();

echo '<br>';
echo '<br>';


// Применение
require_once './CircleClass.php';

$circle = new CircleClass(10);

echo $circle->getSquare();

echo '<br>';
echo '<br>';

echo $circle->getCircuit();

echo '<br>';
echo '<br>';
