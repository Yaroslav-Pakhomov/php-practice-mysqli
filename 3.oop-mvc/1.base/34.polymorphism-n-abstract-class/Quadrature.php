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

require_once './AbstractFigure.php';

class Quadrature extends AbstractFigure {
    private int $strike;


    public function __construct(int $strike) {
        $this->strike = $strike;
    }

    // Найдем площадь
    public function getSquare(): int {
        // Пи умножить на квадрат радиуса
        return $this->strike ** 2;
    }

    // Найдем длину окружности
    public function getPerimeter(): float|int {
        // 2 Пи умножить на радиус
        return 4 * $this->strike;
    }
}
