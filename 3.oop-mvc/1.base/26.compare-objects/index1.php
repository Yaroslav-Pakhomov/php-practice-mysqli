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


// Сравнение объектов. Сравнение объектов в ООП


require_once './UserClass.php';

$user1 = new UserClass('john', 30);
$user2 = new UserClass('john', 30);

var_dump($user1 == $user2); // выведет true
echo compare($user1, $user2);

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$user1 = new UserClass('john', 30); // возраст - число
$user2 = new UserClass('john', '30'); // возраст - строка

var_dump($user1 == $user2); // выведет true
echo compare($user1, $user2);

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$user1 = new UserClass('john', 30);
$user2 = new UserClass('john', 25);

var_dump($user1 == $user2); // выведет true
echo compare($user1, $user2);


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$user1 = new UserClass('john', 30);
$user2 = new UserClass('john', 30);

var_dump($user1 === $user2); // выведет false
echo compare($user1, $user2);

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// Чтобы две переменных с объектами действительно были равными при сравнении через ===, они должны указывать на один и тот же объект.
$user1 = new UserClass('john', 30);
$user2 = $user1; // передача объекта по ссылке

var_dump($user1 === $user2); // выведет true
echo compare($user1, $user2);


// Сделайте функцию compare, которая параметром будет принимать два объекта и сравнивать их.

// Функция должна возвращать 1, если переданные переменные ссылаются на один и тот же объект.

// Функция должна возвращать 0, если объекты разные, но одного и того же класса и с теми же свойствами и их значениями.

// Функция должна возвращать -1 в противном случае.

function compare(object $obj1, object $obj2): int {
    if ($obj1 === $obj2) {
        return 1;
    } elseif ($obj1 == $obj2) {
        return 0;
    } else {
        return -1;
    }
}


// Применение
require_once './EmployeesCollectionClass.php';
require_once './EmployeeClass.php';

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$employeesCollection = new EmployeesCollectionClass();

$employeesCollection->add(new EmployeeClass('john', 100));
$employeesCollection->add(new EmployeeClass('john', 100)); // Второго такого же не добавит, т.к. есть ==

var_dump($employeesCollection->get()); // убедимся в этом

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$employee = new EmployeeClass('john', 101);

$employeesCollection->add($employee);
$employeesCollection->add($employee); // не добавит, т.к. есть ===, тот же объект

var_dump($employeesCollection->get());
