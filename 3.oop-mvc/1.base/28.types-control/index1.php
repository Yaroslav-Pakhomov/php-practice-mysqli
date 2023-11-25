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


// Контроль типов. Контроль типов при работе с объектами

// require_once './EmployeesCollectionClass.php';
require_once './PostClass.php';
require_once './EmployeeClass.php';

// $employees_collection = new EmployeesCollectionClass();

$programmer = new PostClass('программист', 300000);
$manager = new PostClass('менеджер', 150000);
$driver = new PostClass('водитель', 100000);

$employee_programmer = new EmployeeClass('Вася', 'Васильев', $programmer);

echo '<br>';
echo '<br>';
echo $employee_programmer->getName();
echo '<br>';
echo '<br>';
echo $employee_programmer->getSurname();
echo '<br>';
echo '<br>';
echo $employee_programmer->getPostName();
echo '<br>';
echo '<br>';
echo $employee_programmer->getPostSalary();
echo '<br>';
echo '<br>';
$senior_programmer = new PostClass('старший программист', 400000);
$employee_programmer->changePost($senior_programmer);
echo '<br>';
echo '<br>';
echo $employee_programmer->getPostName();
echo '<br>';
echo '<br>';
echo $employee_programmer->getPostSalary();
echo '<br>';
echo '<br>';


// $employees_collection->add($programmer);
// $employees_collection->add($manager);
// $employees_collection->add($driver);

// echo $employees_collection->getTotalSalary();
