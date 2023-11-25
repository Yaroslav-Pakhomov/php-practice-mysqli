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


class GeometryClass {

    private static float $pi = 3.14; // вынесем Пи в свойство

    // Площадь круга
    public static function getCircleSquare($radius): float|int {
        return self::$pi * $radius * $radius;
    }

    // Длина окружности
    public static function getCircle($radius): float|int {
        return 2 * self::$pi * $radius;
    }

    // Длина окружности
    public static function getBallVolume($radius): float|int {
        // return (4 / 3) * self::$pi * $radius ** 3;
        return (4 / 3) * self::$pi * ($radius ** 3);
    }
}
