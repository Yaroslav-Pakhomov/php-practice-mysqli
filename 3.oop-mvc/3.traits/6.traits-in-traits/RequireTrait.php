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

trait RequireTrait {

    // Метод с именем method
    public function method1(): string {
        return 'TestTrait method1!!!';
    }

    // Метод с именем method3
    public function method2(): string {
        return 'TestTrait method2!!!';
    }
}
