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


class StudentClass {
    private string $name;
    private int $scholarship; // стипендия

    // Конструктор объекта класса Student
    public function __construct(string $name, int $scholarship) {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getScholarship(): int {
        return $this->scholarship;
    }
}
