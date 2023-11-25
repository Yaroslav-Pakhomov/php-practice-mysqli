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


// Константы в интерфейсах. Константы в интерфейсе в ООП

require_once './Sphere.php';

$sphere = new Sphere(10);

echo $sphere->getSquare();

echo '<br>';
echo '<br>';

echo $sphere->getVolume();

echo '<br>';
echo '<br>';
