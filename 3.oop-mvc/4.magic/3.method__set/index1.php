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


// Метод __set. Магический метод set

// __set - вызывается при попытке изменить значение несуществующего или скрытого свойства. В качестве параметров он принимает имя свойства и значение, которое ему пытаются присвоить.


require_once './Test.php';

$test = new Test();


$test->prop = 'value'; // Магический метод __set для создания несуществующего св-ва
echo $test->prop; // Магический метод __get для получения несуществующего св-ва

echo '<br>';
echo '<br>';

$test->new_property = 'value new property'; // Магический метод __set для создания несуществующего св-ва
echo $test->new_property; // Магический метод __get для получения несуществующего св-ва

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


// записываем в приватные свойства
$test->prop1 = 1; // запишем 1
$test->prop2 = 2; // запишем 2

echo $test->prop1; // выведет 1

echo '<br>';
echo '<br>';

echo $test->prop2; // выведет 2

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


require_once './User.php';

$user = new User();

$user->name = ''; // 'Пустое имя', метод __set

echo '<br>';
echo '<br>';

$user->name = 'John'; // метод __set
echo $user->name; // John, метод __get

echo '<br>';
echo '<br>';

$user->age = 100; // 'Возраст не корректен', метод __set

echo '<br>';
echo '<br>';

$user->age = 40; // метод __set
echo $user->age; // 40, метод __get

echo '<br>';
echo '<br>';

$user->akldbajsdfhbjge = 100; // 'Такого свойства нет', метод __set
