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


// Абстрактные методы. Абстрактные методы трейтов

require_once './Test.php';
require_once './TestTrait.php';

$test = new Test();

echo '<br>';
echo '<br>';

// выведет 'test class' - сработал метод самого класса
echo $test->method1();

echo '<br>';
echo '<br>';

// выведет 'TestTrait method1!!!', т.к. трейт имеет приоритет перед наследованием
echo $test->method2();
