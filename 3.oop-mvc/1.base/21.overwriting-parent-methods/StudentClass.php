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

    public function addOneYear(): void {
        // Если возраст меньше или равен 24
        if ($this->age <= 24) {
            // Работа с parent
            // Вызываем метод родителя
            parent::setAge($this->age); // в родителе выполняется проверка age >= 18
        }
    }

    // Перезаписываем метод родителя
    public function setAge(int $age): void {
        // Если возраст меньше или равен 24
        if ($age <= 24) {
            // Работа с parent
            // Вызываем метод родителя
            parent::setAge($age); // в родителе выполняется проверка age >= 18
        }
    }

    public function getCourse(): int {
        return $this->course;
    }

    public function setCourse(int $course): void {
        $this->course = $course;
    }
}


// Метод setAge потомка не использует свойство age напрямую. Это значит, что в классе-родителе можно поменять его модификатор доступа с protected обратно на private. Если данное св-во нигде больше не используется в классе-наследнике.
