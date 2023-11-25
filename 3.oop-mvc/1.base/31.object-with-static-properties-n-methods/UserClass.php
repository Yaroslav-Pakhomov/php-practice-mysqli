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
    private static int $count = 0; // счетчик объектов
    public string $name;

    public function __construct(string $name) {
        $this->name = $name;

        // Увеличиваем счетчик при создании объекта:
        self::$count++;
    }

    // Метод, возвращающий значение счетчика
    public static function getCount(): int {
        // Выводим значение счетчика
        return self::$count;
    }
}
