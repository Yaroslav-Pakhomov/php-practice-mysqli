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


// Конфликты методов. Разрешение конфликтов в трейтах

require_once './Trait1.php';
require_once './Trait2.php';

class Test {

    // подключаем трейты
    use Trait1, Trait2 {
        // С помощью оператора insteadof (пер. 'вместо чего-то') используем метод method трейта Trait1 вместо такого же метода трейта Trait2
        Trait1::method insteadof Trait2;
        // Trait2::method insteadof Trait1; - наоборот

        Trait1::method as method1; // метод первого трейта будет доступен как method1
        Trait2::method as method2; // метод второго трейта будет доступен как method2
    }

    public function __construct() {
        echo $this->method1() + $this->method2(); // выведет 3
    }
}
