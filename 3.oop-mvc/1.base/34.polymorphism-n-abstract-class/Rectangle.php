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

class Rectangle extends AbstractFigure {
    private float $strike1;
    private float $strike2;


    public function __construct(float $strike1, float $strike2) {
        $this->strike1 = $strike1;
        $this->strike2 = $strike2;
    }

    // Найдем площадь
    public function getSquare(): float|int {
        // Пи умножить на квадрат радиуса
        return $this->strike1 * $this->strike2;
    }

    // Найдем длину окружности
    public function getPerimeter(): float|int {
        // 2 Пи умножить на радиус
        return 2 * $this->strike1 + 2 * $this->strike2;
    }
}
