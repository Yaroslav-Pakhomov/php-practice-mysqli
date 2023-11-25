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

interface iTetragon {

    public function getA(): float|int;

    public function getB(): float|int;

    public function getC(): float|int;

    public function getD(): float|int;
}