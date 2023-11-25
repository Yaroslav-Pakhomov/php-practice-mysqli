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


// Перезапись методов родителя. Перезапись методов родителя в классе потомке

require_once './StudentClass.php';


// Несколько потомков
$student = new StudentClass();

$student->setName('john'); // установим имя
$student->setCourse(3);    // установим курс
$student->setAge(24);      // установим возраст в 24

echo '<br>';
echo '<br>';
echo $student->getAge(); // метод унаследован от родителя
echo '<br>';
echo '<br>';

$student->addOneYear(); // увеличим возраст на единицу
echo $student->getAge(); // метод унаследован от родителя
echo '<br>';
echo '<br>';

$student->addOneYear(); // увеличим возраст на единицу
echo $student->getAge(); // метод унаследован от родителя
echo '<br>';
echo '<br>';

$student->addOneYear(); // увеличим возраст на единицу
echo $student->getAge(); // метод унаследован от родителя
echo '<br>';
echo '<br>';

$student->setAge(30);    // укажем некорректный возраст
echo $student->getAge(); // выведет 24 - возраст не поменялся

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo $student->getCourse(); // метод класса Student
echo '<br>';
echo '<br>';
echo $student->getName(); // метод унаследован от родителя
