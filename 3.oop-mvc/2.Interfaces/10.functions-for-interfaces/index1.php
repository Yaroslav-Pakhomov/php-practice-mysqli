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


// Функции для интерфейсов. Функции для работы с интерфейсами в ООП
require_once './Sphere.php';

$sphere = new Sphere(10);

echo $sphere->getSquare();

echo '<br>';
echo '<br>';

echo $sphere->getVolume();

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// Функция interface_exists - проверяет, определён ли интерфейс
// Функция get_declared_interfaces - возвращает массив всех объявленных интерфейсов


var_dump(interface_exists('iSphere'));

echo '<br>';
echo '<br>';

var_dump(interface_exists('iProgrammer'));

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

print_r(get_declared_interfaces());
