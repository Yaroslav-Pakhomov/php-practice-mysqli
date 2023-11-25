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

require_once './UserClass.php';

class StudentClass extends UserClass {
    private int $course; // курс

    // Конструктор объекта класса Student
    public function __construct(string $name, int $age, int $course) {
        // Вызовем конструктор родителя, передав ему два параметра
        parent::__construct($name, $age);

        // Запишем свойство course
        $this->course = $course;
    }

    public function getCourse(): int {
        return $this->course;
    }

    public function setCourse($course): void {
        $this->course = $course;
    }
}
