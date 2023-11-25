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


// Константы классов. Константы классов в ООП

require_once './TestClass.php';
require_once './ChildTestClass.php';
require_once './Test1Class.php';
require_once './Test2Class.php';

// Функция get_class — Возвращает имя класса, к которому принадлежит объект
// Функция get_class_methods — Возвращает массив имён методов класса
// Функция get_class_vars — Возвращает объявленные по умолчанию свойства класса
// Функция get_object_vars — Возвращает свойства указанного объекта
// Функция class_exists — Проверяет, был ли объявлен класс
// Функция method_exists — Проверяет, существует ли метод в данном классе
// Функция property_exists — Проверяет, содержит ли объект или класс указанный атрибут
// Функция get_parent_class — Возвращает имя родительского класса для объекта или класса
// Функция is_subclass_of — Проверяет, содержит ли объект в своём дереве предков указанный класс либо прямо реализует его
// Функция is_a — Проверяет, является ли объект указанным типом или подтипом
// Функция get_declared_classes — Возвращает массив с именами объявленных классов


$test = new TestClass();

echo get_class($test);

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$name1 = new Test1Class('Name1');
$name2 = new Test1Class('Name2');
$name3 = new Test1Class('name3');

$name4 = new Test2Class('Name4');
$name5 = new Test2Class('Name5');
$name6 = new Test2Class('Name6');

$names = [$name1, $name2, $name3, $name4, $name5, $name6,];

foreach ($names as $name) {
    echo $name->name . ', класс - ' . get_class($name);

    echo '<br>';
    echo '<br>';
}

$test_class_methods = get_class_methods(new TestClass());

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

print_r($test_class_methods);

echo '<br>';
echo '<br>';

var_dump($name1);

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$test_class_vars = get_class_vars(get_class($test));

print_r($test_class_vars);

echo '<br>';
echo '<br>';

print_r($test->vars);

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

print_r(get_object_vars($test));

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

var_dump(class_exists(get_class($test)));

echo '<br>';
echo '<br>';

var_dump(class_exists('Test3Class'));

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

var_dump(method_exists(get_class($test), 'method1'));

echo '<br>';
echo '<br>';

var_dump(method_exists(get_class($test), 'method4'));

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

var_dump(property_exists($test, 'prop1'));

echo '<br>';
echo '<br>';

var_dump(property_exists($test, 'prop4'));

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$child_test = new ChildTestClass();

var_dump(get_parent_class($child_test));

echo '<br>';
echo '<br>';

echo get_parent_class($child_test);

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

var_dump(is_subclass_of($child_test, 'GrandTestClass'));

echo '<br>';
echo '<br>';

var_dump(is_subclass_of($test, 'GrandTestClass'));

echo '<br>';
echo '<br>';

var_dump(is_subclass_of($child_test, 'TestClass'));

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

var_dump(is_a($child_test, 'ChildTestClass'));

echo '<br>';
echo '<br>';

var_dump(is_a($child_test, 'TestClass'));

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

print_r(get_declared_classes());

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
