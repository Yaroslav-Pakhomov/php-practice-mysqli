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


class MathClass {

    // Статические методы внутри класса
    public static function getDoubleSum(float $a, float $b): float|int {
        return 2 * self::getSum($a, $b); // используем другой метод
    }

    // Находит сумму
    public static function getSum(float $a, float $b): float|int {
        return $a + $b;
    }

    // Находит произведение
    public static function getProduct(float $a, float $b): float|int {
        return $a * $b;
    }
}