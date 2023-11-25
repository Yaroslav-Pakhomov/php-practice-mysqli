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

class Student extends AbstractUser {
    private float $scholarship;

    public function getScholarship(): float {
        return $this->scholarship;
    }

    public function setScholarship(float $scholarship): void {
        $this->scholarship = $scholarship;
    }

    public function increaseRevenue(float $value): void {
        $this->scholarship += $value;
    }

    public function decreaseRevenue(float $value): void {
        $this->scholarship -= $value;
    }
}
