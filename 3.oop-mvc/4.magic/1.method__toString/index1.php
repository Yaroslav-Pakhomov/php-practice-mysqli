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


// Метод __toString. Магический метод toString в ООП

// Методы PHP, начинающиеся с двойного подчеркивания __, называются магическим.

// Магия таких методов состоит в том, что они могут вызываться при совершении какого-то действия автоматически.

// __toString - приведения экземпляра класса к строке. Например, с помощью оператора echo.

require_once './User.php';

$user = new User('john', 25);

echo $user;

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


// Применение
require_once './Arr.php';

$arr = new Arr();
echo $arr->add(1)->add(2)->add(3)->getSum(); // выведет 6

echo '<br>';
echo '<br>';

// чтобы не писать метод getSum(), введём метод __toString
$arr1 = new Arr();
echo $arr1->add(3)->add(2)->add(3);
