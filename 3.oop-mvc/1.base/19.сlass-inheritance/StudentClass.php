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

    public function getCourse(): int {
        return $this->course;
    }

    public function setCourse(int $course): void {
        $this->course = $course;
    }
}
