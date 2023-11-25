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

class UserClass {
    public string $name; // св-во для обращения внутри класса или в конструкторе
    public int $age; // св-во для обращения внутри класса или в конструкторе

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }
}
