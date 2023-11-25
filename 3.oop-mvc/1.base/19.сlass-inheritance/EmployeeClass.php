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

class EmployeeClass extends UserClass {
    private int $salary;

    public function getSalary(): int {
        return $this->salary;
    }

    public function setSalary(int $salary): void {
        $this->salary = $salary;
    }
}
