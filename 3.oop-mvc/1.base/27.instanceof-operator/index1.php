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


// Оператор instanceof. Определение принадлежности объекта к классу

// Первый класс:
class Class1 {
}

// Второй класс:
class Class2 {
}


$obj = new Class1;

// Выведет true, тк объект принадлежит классу Class1:
var_dump($obj instanceof Class1);

echo '<br>';
echo '<br>';
echo '<br>';

// Выведет false, тк объект НЕ принадлежит классу Class2:
var_dump($obj instanceof Class2);

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


// Родительский класс:
class ParentClass {
}

// Дочерний класс:
class ChildClass extends ParentClass {
}


$obj = new ChildClass;

var_dump($obj instanceof ChildClass);  // выведет true

echo '<br>';
echo '<br>';
echo '<br>';

var_dump($obj instanceof ParentClass); // тоже выведет true

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$obj = new ParentClass; // объект родительского класса

var_dump($obj instanceof ParentClass); // выведет true

echo '<br>';
echo '<br>';
echo '<br>';

var_dump($obj instanceof ChildClass); // выведет false

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


// Применение
require_once './UsersCollectionClass.php';
require_once './EmployeeClass.php';
require_once './StudentClass.php';

$usersCollection = new UsersCollectionClass();

$usersCollection->add(new StudentClass('eric', 100));  // попадет к студентам
$usersCollection->add(new StudentClass('kyle', 100));
$usersCollection->add(new StudentClass('luis', 200));


$usersCollection->add(new EmployeeClass('john', 200)); // попадет к работникам
$usersCollection->add(new EmployeeClass('john', 300));
$usersCollection->add(new EmployeeClass('eric', 400));

// Получим полную сумму стипендий
echo $usersCollection->getTotalScholarship();

echo '<br>';
echo '<br>';
echo '<br>';

// Получим полную сумму зарплат
echo $usersCollection->getTotalSalary();

echo '<br>';
echo '<br>';
echo '<br>';

// Получим полную сумму платежей
echo $usersCollection->getTotalPayment();

echo '<br>';
echo '<br>';
echo '<br>';
