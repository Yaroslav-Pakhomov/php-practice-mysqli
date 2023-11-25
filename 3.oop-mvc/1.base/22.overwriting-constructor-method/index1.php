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


// Перезапись конструктора родителя. Перезапись конструктора родителя в потомке

require_once './StudentClass.php';


// Несколько потомков
$student = new StudentClass('john', 24, 3);

// $student->setCourse();    // установим курс

echo '<br>';
echo '<br>';
echo $student->getName(); // метод унаследован от родителя
echo '<br>';
echo '<br>';
echo $student->getAge(); // метод унаследован от родителя
echo '<br>';
echo '<br>';
echo $student->getCourse();
