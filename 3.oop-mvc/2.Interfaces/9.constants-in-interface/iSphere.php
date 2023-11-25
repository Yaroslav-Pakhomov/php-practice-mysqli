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

// объектов класса AbstractUser не будет

interface iSphere {

    public const PI = 3.14; // число ПИ как константа

    // Конструктор шара:
    public function __construct(float $radius);

    // Метод для нахождения объема шара:
    public function getVolume(): float|int;

    // Метод для нахождения площади поверхности шара:
    public function getSquare(): float|int;
}
