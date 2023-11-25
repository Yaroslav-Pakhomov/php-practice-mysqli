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

class EmployeesCollectionClass {
    private array $employees = []; // массив работников, по умолчанию пустой

    // Получаем всех работников в виде массива:
    public function get(): array {
        return $this->employees;
    }

    // Подсчитываем количество хранимых работников:
    public function count(): int {
        return count($this->employees);
    }

    // Добавляем нового работника
    public function add(array $employee): void {
        $this->employees[] = $employee; // $employee - объект класса EmployeeClass
    }

    // Находим суммарную зарплату:
    public function getTotalSalary(): int {
        $sum = 0;

        // Перебираем работников циклом
        foreach ($this->employees as $employee) {
            $sum += $employee->getSalary(); // получаем з/п работника через метод getSalary()
        }

        return $sum;
    }
}
