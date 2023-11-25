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

require_once './TestTrait.php';

// Класс наследует метод method1 от родительского
class Test {

    // подключаем трейт
    use TestTrait;

    // Такой же метод с именем method:
    public function method2(): string {
        return 'test class method2';
    }
}
