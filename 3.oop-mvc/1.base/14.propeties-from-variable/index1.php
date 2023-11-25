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


// Начальные значения свойств при объявлении


class Student {
    private string $name;
    private int $course = 1; // начальное значение курса

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function transferToNextCourse(): void {
        $this->course++;
    }
}

$student = new Student('john'); // создаем объект класса

echo $student->getCourse(); // выведет 1 - начальное значение
$student->transferToNextCourse(); // переведем студента на следующий курс
echo $student->getCourse(); // выведет 2


class Arr {
    private array $numbers = []; // задаем начальное значение свойства как []

    public function add($num): void {
        $this->numbers[] = $num;
    }

    public function getSum(): float|int {
        return array_sum($this->numbers);
    }
}

$arr = new Arr;
echo $arr->getSum(); // выведет 0
$arr->add(1);
$arr->add(2);
$arr->add(3);
