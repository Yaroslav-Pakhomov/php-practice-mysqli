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


// Функции для трейтов. Функции для работы трейтами в ООП

// Функция trait_exists - проверяет, существует ли трейт
// Функция get_declared_traits - возвращает массив со всеми объявленными трейтами

require_once './Test.php';

// $test = new Test();

// echo '<br>';
// echo '<br>';

// // выведет 'TestTrait method1!!!' - сработал метод самого класса
// echo $test->method1(); // метод первого трейта

// echo '<br>';
// echo '<br>';

// // выведет 'TestTrait method2!!!', т.к. трейт имеет приоритет перед наследованием
// echo $test->method2(); // метод первого трейта

// echo '<br>';
// echo '<br>';

// // выведет 'TestTrait method3!!!', т.к. трейт имеет приоритет перед наследованием
// echo $test->method3(); // метод второго трейта

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

var_dump(trait_exists('TestTrait')); // существование

echo '<br>';
echo '<br>';

var_dump(trait_exists('TestTrait1')); // существование

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

print_r(get_declared_traits()); // список всех объявленных трейтов.
