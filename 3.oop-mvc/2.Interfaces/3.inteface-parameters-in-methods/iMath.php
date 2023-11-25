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

interface iMath {

    public function sum(float $a, float $b): float; // сумма

    public function subtract(float $a, float $b): float; // вычесть

    public function multiply(float $a, float $b): float; // умножить

    public function divide(float $a, float $b): float; // поделить
}
