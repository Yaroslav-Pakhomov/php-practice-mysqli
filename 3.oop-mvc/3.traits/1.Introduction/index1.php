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


// Введение в трейты. Работа с трейтами в ООП
require_once './User.php';
require_once './City.php';
require_once './Country.php';

$user = new User('john', 30);

echo '<br>';
echo '<br>';

echo $user->getName(); // выведет 'john'

echo '<br>';
echo '<br>';

echo $user->getAge();  // выведет 30

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';



$city = new City('Minsk', 1000);

echo $city->getName(); // выведет 'Minsk'

echo '<br>';
echo '<br>';

echo $city->getAge();  // выведет 1000

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';



$country = new Country('Russia ', 7530, '150 000 000');

echo $country->getName();

echo '<br>';
echo '<br>';

echo $country->getAge();

echo '<br>';
echo '<br>';

echo $country->getPopulation();
