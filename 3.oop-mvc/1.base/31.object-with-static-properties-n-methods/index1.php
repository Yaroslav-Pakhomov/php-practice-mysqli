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


// Объект со статическими свойствами и методами

require_once './TestClass.php';


$test = new TestClass(); // создаем объект класса

$test->usualProperty = 'usual'; // записываем значение
echo $test->usualProperty; // выведет 'usual'

echo '<br>';
echo '<br>';

TestClass::$staticProperty = 'static'; // записываем значение
echo TestClass::$staticProperty; // выведет 'static'

echo '<br>';
echo '<br>';

$test::$staticProperty = 'static'; // записываем значение
echo $test::$staticProperty; // выведет 'static'

echo '<br>';
echo '<br>';


// Записываем значение еще ДО создания объекта:
TestClass::$staticProperty = 'static123';

// Создаем объект класса:
$test = new TestClass();

// Выводим статическое свойство:
echo $test::$staticProperty; // выведет 'static123'

echo '<br>';
echo '<br>';

// Создаем объект класса:
$test = new TestClass();

// Записываем значение в статическое свойство
$test::$staticProperty = 'static321';

// Выводим значение, обратившись к классу:
echo TestClass::$staticProperty; // выведет 'static321'

echo '<br>';
echo '<br>';

// Выводим значение, обратившись к объекту класса
echo $test::$staticProperty; // выведет 'static321'

echo '<br>';
echo '<br>';


// Несколько объектов

$test1 = new TestClass(); // первый объект
$test2 = new TestClass(); // второй объект

$test1::$staticProperty = 'static'; // запишем значение, используя первый объект

echo $test1::$staticProperty; // выведет 'static'
echo $test2::$staticProperty; // также выведет 'static'


// Статические методы и $this
$test = new TestClass();
$test->method1();

echo '<br>';
echo '<br>';

$test::method2();

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


// Применение
require_once './UserClass.php';


$user1 = new UserClass('user1');
echo UserClass::getCount(); //выведет 1

echo '<br>';
echo '<br>';

$user2 = new UserClass('user2');
echo UserClass::getCount(); //выведет 2
