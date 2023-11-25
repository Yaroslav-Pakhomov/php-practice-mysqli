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

require_once './TagClass.php';

class LinkClass extends TagClass {

    public const ADD_URI = '/3.OOP-n-MVC/5.classes/';
    public const ACTIVE_CLASS = 'active';

    public function __construct() {
        // вызовем конструктор родителя
        parent::__construct('a');

        // установим атрибуты src и alt
        $this->setAttr('href', ' ');
    }

    /**
     * Откажемся от вызова метода show()
     */
    public function __toString() {
        return $this->show();
    }

    public function open(): string {
        $this->activateSelf();
        return parent::open();
    }

    /**
     * Проверка на совпадение href ссылки и URI
     */
    public function activateSelf(): void {
        if (self::ADD_URI . $this->getAttr('href') === $_SERVER['REQUEST_URI']) {
            $this->addClass(self::ACTIVE_CLASS);
        }
    }
}
