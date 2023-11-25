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

require_once './iSphere.php';

class Sphere implements iSphere {

    private float $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function getVolume(): float|int {
        return (4 / 3) * self::PI * $this->radius ** 3;
    }

    public function getSquare(): float|int {
        return 4 * self::PI * $this->radius ** 2;
    }
}
