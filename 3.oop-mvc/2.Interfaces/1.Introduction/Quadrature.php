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

require_once './iFigure.php';

class Quadrature implements iFigure {
    private float $strike;

    public function __construct(float $strike) {
        $this->strike = $strike;
    }

    // Найдем площадь
    public function getSquare(): float|int {
        // Пи умножить на квадрат радиуса
        return $this->strike ** 2;
    }

    // Найдем длину окружности
    public function getPerimeter(): float|int {
        // 2 Пи умножить на радиус
        return 4 * $this->strike;
    }
}
