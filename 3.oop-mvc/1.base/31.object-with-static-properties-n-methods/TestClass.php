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

    public static string $staticProperty = 'static'; // публичное статическое свойство
    public string $usualProperty = 'usual'; // обычное свойство

    // Обычный метод
    public function method1(): void {
        var_dump(self::$staticProperty); // выведет 'static'
        echo '<br>';
        echo '<br>';
        var_dump($this->usualProperty);  // выведет 'usual'
    }


    // Переделали на статический метод:
    public static function method2(): void {
        var_dump(self::$staticProperty); // выведет 'static'
        echo '<br>';
        echo '<br>';
        // var_dump($this->usualProperty);  // выдаст ошибку
    }
}
