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

interface iRectangle {
    public function __construct(float $a, float $b); // конструктор с двумя параметрами

    public function getSquare(): float|int;

    public function getPerimeter(): float|int;
}

// Во-первых, мы не забудем реализовать конструктор в классе. Во-вторых, интерфейс явно указывает, что конструктор класса должен принимать два параметра: ни больше, ни меньше.

// Мы создали отдельный интерфейс iRectangle, потому что все фигуры имеют разное количество сторон и, соответственно, разное количество параметров в конструкторе.
