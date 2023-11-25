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


// Использование объектов в другом классе. Использование классов внутри других классов


require_once './ArrClass.php';


// Несколько потомков
$arr = new ArrCLass(); // создаем объект

$arr->add(1); // добавляем в массив число 1
$arr->add(2); // добавляем в массив число 2
$arr->add(3); // добавляем в массив число 3

// Находим сумму квадратов и кубов:
echo $arr->getSum23();
echo '<br>';
echo '<br>';
echo $arr->getAvgArray();
echo '<br>';
echo '<br>';
echo $arr->getMeanSquareArray();
echo '<br>';
echo '<br>';
echo $arr->getAvgMeanSum();
echo '<br>';
echo '<br>';
