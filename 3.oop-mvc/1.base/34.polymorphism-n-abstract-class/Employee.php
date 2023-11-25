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

require_once './AbstractUser.php';

class Employee extends AbstractUser {
    private float $salary;

    public function getSalary(): float {
        return $this->salary;
    }

    public function setSalary(float $salary): void {
        $this->salary = $salary;
    }

    public function increaseRevenue($value): void {
        $this->salary += $value;
    }

    public function decreaseRevenue($value): void {
        $this->salary -= $value;
    }
}
