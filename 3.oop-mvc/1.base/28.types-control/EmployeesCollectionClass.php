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

require_once './PostClass.php';

class EmployeesCollectionClass {
    private array $employees = []; // массив работников

    // Укажем тип параметра
    public function add(PostClass $employee): void {
        $this->employees[] = $employee; // добавляем к работникам
    }

    // Получаем суммарную зарплату
    public function getTotalSalary(): int {
        $sum = 0;

        foreach ($this->employees as $employee) {
            $sum += $employee->getSalary();
        }

        return $sum;
    }
}
