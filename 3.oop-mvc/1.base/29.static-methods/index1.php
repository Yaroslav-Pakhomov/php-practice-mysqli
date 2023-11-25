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


// Статические методы. Статические методы в ООП

require_once './MathClass.php';
require_once './ArraySumHelperClass.php';


echo MathClass::getSum(1, 2) + MathClass::getProduct(3, 4);

echo '<br>';
echo '<br>';

echo MathClass::getDoubleSum(1, 2);

echo '<br>';
echo '<br>';

echo ArraySumHelperClass::getSum4([1, 3, 5]);

echo '<br>';
echo '<br>';

echo ArraySumHelperClass::getSum3([1, 3, 5]);

echo '<br>';
echo '<br>';

echo ArraySumHelperClass::getSum2([1, 3, 5]);

echo '<br>';
echo '<br>';

echo ArraySumHelperClass::getSum1([1, 3, 5]);
