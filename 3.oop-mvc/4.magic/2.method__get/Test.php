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


class Test {
    public int $prop1 = 1;
    private int $prop2 = 2;
    private int $prop3 = 3;

    public function __get($property) {
        return $this->$property; // возвращаем значение запрошенного свойства
        // return $property; // просто вернем имя свойства
    }
}
