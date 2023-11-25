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
require_once './iTetragon.php';

class Rectangle implements iFigure, iTetragon {
    private int|float $strike1;
    private int|float $strike2;

    public function __construct(float|int $strike1, float|int $strike2) {
        $this->strike1 = $strike1;
        $this->strike2 = $strike2;
    }

    public function getSquare(): float|int {
        return $this->strike1 * $this->strike2;
    }

    public function getPerimeter(): float|int {
        return 2 * $this->strike1 + 2 * $this->strike2;
    }


    public function getA(): float|int {
        return $this->strike1;
    }

    public function getB(): float|int {
        return $this->strike2;
    }

    public function getC(): float|int {
        return $this->strike1;
    }

    public function getD(): float|int {
        return $this->strike2;
    }
}
