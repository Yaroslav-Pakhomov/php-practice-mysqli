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


class TestClass {
    // задаем константу
    public const CONSTANT = 'test constant';


    // Обращение к константам внутри класса
    public static function getConstant(): string {
        return self::CONSTANT;
    }

}
