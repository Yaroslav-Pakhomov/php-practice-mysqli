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


// Наследование классов. Класс как набор методов в ООП

require_once './EmployeeClass.php';
require_once './StudentClass.php';


$employee = new EmployeeClass;

$employee->setSalary(1000); // метод класса Employee
$employee->setName('john'); // метод унаследован от родителя
$employee->setAge(25); // метод унаследован от родителя

echo $employee->getSalary(); // метод класса Employee
echo '<br>';
echo '<br>';
echo $employee->getName(); // метод унаследован от родителя
echo '<br>';
echo '<br>';
echo $employee->getAge(); // метод унаследован от родителя
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


// Несколько потомков
$student = new StudentClass;

$student->setCourse(3); // метод класса Student
$student->setName('john'); // метод унаследован от родителя
$student->setAge(25); // метод унаследован от родителя

echo $student->getCourse(); // метод класса Student
echo '<br>';
echo '<br>';
echo $student->getName(); // метод унаследован от родителя
echo '<br>';
echo '<br>';
echo $student->getAge(); // метод унаследован от родителя
echo '<br>';
echo '<br>';



// Наследование от наследников
