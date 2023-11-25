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


class TestClass {

    public static int $num1; // статическое свойство
    public static int $num2; // статическое свойство

    // Приватное статическое свойство
    private static string $property = 'test1'; // Начальное значение свойства

    // Статический метод для задания значения свойства
    public static function setProperty($value): void {
        self::$property = $value; // записываем данные в наше static свойство
    }

    // Статический метод для получения значения свойства
    public static function getProperty(): string {
        return self::$property; // прочитываем записанные данные
    }
}
