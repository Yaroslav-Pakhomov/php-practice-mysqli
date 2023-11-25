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

require_once './StudentClass.php';
require_once './EmployeeClass.php';

class UsersCollectionClass {
    private array $employees = []; // массив работников
    private array $students = []; // массив студентов

    // Добавление в массивы
    public function add($user): void {
        // Если передан объект класса EmployeeClass
        if ($user instanceof EmployeeClass) {
            $this->employees[] = $user; // добавляем к работникам
        }

        // Если передан объект класса StudentClass
        if ($user instanceof StudentClass) {
            $this->students[] = $user; // добавляем к студентам
        }
    }


    // Получаем суммарную зарплату
    public function getTotalSalary(): int {
        $sum = 0;

        foreach ($this->employees as $employee) {
            $sum += $employee->getSalary();
        }

        return $sum;
    }

    // Получаем суммарную стипендию
    public function getTotalScholarship(): int {
        $sum = 0;

        foreach ($this->students as $student) {
            $sum += $student->getScholarship();
        }

        return $sum;
    }

    // Получаем общую сумму платежей и работникам, и студентам
    public function getTotalPayment(): int {
        return $this->getTotalScholarship() + $this->getTotalSalary();
    }
}
