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


class PostClass {
    private string $name;
    private int $salary;

    public function __construct(string $name, int $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setSalary(int $salary): void {
        $this->salary = $salary;
    }

    public function getSalary(): int {
        return $this->salary;
    }
}
