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


// Начальные значения свойств в конструкторе


class Student {
    private string $name;
    private int $course;

    public function __construct($name) {
        $this->name = $name;
        $this->course = 1; // курс изначально равен 1
    }

    // Геттер имени:
    public function getName(): string {
        return $this->name;
    }

    // Геттер курса:
    public function getCourse(): int {
        return $this->course;
    }

    // Перевод студента на новый курс:
    public function transferToNextCourse(): void {
        ($this->course > 5) ? $this->course : $this->course++;
    }
}

$student = new Student('john'); // создаем объект класса

echo $student->getCourse(); // выведет 1 - начальное значение
$student->transferToNextCourse(); // переведем студента на следующий курс
echo $student->getCourse(); // выведет 2
