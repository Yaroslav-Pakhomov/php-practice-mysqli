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


// Полиморфизм и Абстрактные классы. Полиморфизм и Абстрактные классы в ООП

require_once './Employee.php';
require_once './Student.php';

$employee = new Employee();
$employee->setName('john');  // метод родителя, т.е. класса User
$employee->setSalary(1000);  // свой метод, т.е. класса Employee

echo $employee->getName();   // выведет 'john'

echo '<br>';
echo '<br>';

echo $employee->getSalary(); // выведет 1000

echo '<br>';
echo '<br>';

$employee->increaseRevenue(2000);
echo $employee->getSalary();

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


$student = new Student();
$student->setName('mick');  // метод родителя, т.е. класса User
$student->setScholarship(500);

echo $student->getName();

echo '<br>';
echo '<br>';

echo $student->getScholarship();

echo '<br>';
echo '<br>';

$student->increaseRevenue(500);
echo $student->getScholarship();

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

require_once './Quadrature.php';

$quadrature = new Quadrature(2);

echo $quadrature->getSquare();    // выведет 4

echo '<br>';
echo '<br>';

echo $quadrature->getPerimeter(); // выведет 8

echo '<br>';
echo '<br>';

echo $quadrature->getRatio();     // выведет 0.5

echo '<br>';
echo '<br>';

echo $quadrature->getSquarePerimeterSum();     // выведет 12
