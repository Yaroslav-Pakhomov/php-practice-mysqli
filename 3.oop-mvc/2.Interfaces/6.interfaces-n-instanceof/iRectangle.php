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

interface iRectangle extends iFigure {
    public function __construct(float|int $a, float|int $b); // конструктор с двумя параметрами
}

// Интерфейсы наследуются друг от друга с помощью оператора extends
