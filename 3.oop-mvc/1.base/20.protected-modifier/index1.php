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


// Модификатор protected. Модификатор доступа protected в ООП

require_once './StudentClass.php';


// Несколько потомков
$student = new StudentClass();

$student->setName('john'); // установим имя
$student->setCourse(3);    // установим курс
$student->setAge(25);      // установим возраст в 25

$student->addOneYear();    // увеличим возраст на единицу

echo $student->getCourse(); // метод класса Student
echo '<br>';
echo '<br>';
echo $student->getName(); // метод унаследован от родителя
echo '<br>';
echo '<br>';
echo $student->getAge(); // метод унаследован от родителя
echo '<br>';
echo '<br>';


$student->age = 30; // выдаст ошибку
