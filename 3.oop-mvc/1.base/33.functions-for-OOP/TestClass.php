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

require_once './GrandTestClass.php';

class TestClass extends GrandTestClass {
    // задаем константу
    public const CONSTANT = 'test constant';

    public int $a = 1;
    public string $prop1 = 'prop1';
    public string $prop2 = 'prop2';

    public array $vars = [];

    protected int $b = 2;
    private int $c = 3;

    public function __construct() {
        $this->vars = get_class_vars(get_class($this));
    }


    // Обращение к константам внутри класса
    public static function getConstant(): string {
        return self::CONSTANT;
    }

    public static function method1(): void {
    }

    public static function method2(): void {
    }

    public static function method3(): void {
    }
}
