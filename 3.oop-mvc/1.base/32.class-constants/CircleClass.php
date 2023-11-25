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


class CircleClass {
    public const PI = 3.14; // запишем число ПИ в константу
    private float $radius; // радиус круга


    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    // Найдем площадь
    public function getSquare(): float {
        // Пи умножить на квадрат радиуса
        return self::PI * $this->radius ** 2;
    }

    // Найдем длину окружности
    public function getCircuit(): float {
        // 2 Пи умножить на радиус
        return self::PI * $this->radius;
    }
}
