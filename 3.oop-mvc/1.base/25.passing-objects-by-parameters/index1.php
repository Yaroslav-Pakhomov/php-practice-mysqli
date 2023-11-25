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


// Передача объектов параметрами


require_once './EmployeesCollectionClass.php';
require_once './EmployeeClass.php';


// Несколько потомков
$employeesCollection = new EmployeesCollectionClass(); // создаем объект

$employeesCollection->add(new EmployeeClass('john', 100));
$employeesCollection->add(new EmployeeClass('eric', 200));
$employeesCollection->add(new EmployeeClass('kyle', 300));

echo $employeesCollection->getTotalSalary(); // выведет 600

echo '<br>';
echo '<br>';

echo $employeesCollection->count();

echo '<br>';
echo '<br>';


print_r($employeesCollection->get());


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


require_once './ProductClass.php';
require_once './CartClass.php';

$apple = new ProductClass('яблоко', 150.50, 5);
$drink = new ProductClass('напиток', 80.70, 6);
$chocolate = new ProductClass('шоколад', 156.20, 2);

$cart = new CartClass();

$cart->addProduct($apple);
$cart->addProduct($drink);
$cart->addProduct($chocolate);

print_r($cart->getProducts());

echo '<br>';
echo '<br>';

echo $cart->getTotalCost();

echo '<br>';
echo '<br>';

echo $cart->getTotalQuantity();

echo '<br>';
echo '<br>';

echo $cart->getAvgPrice();

echo '<br>';
echo '<br>';
echo '<br>';

$cart->removeProduct($apple->getName());

print_r($cart->getProducts());

echo '<br>';
echo '<br>';

echo $cart->getTotalCost();

echo '<br>';
echo '<br>';

echo $cart->getTotalQuantity();

echo '<br>';
echo '<br>';

echo $cart->getAvgPrice();
