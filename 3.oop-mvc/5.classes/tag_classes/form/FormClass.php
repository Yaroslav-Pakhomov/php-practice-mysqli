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

require_once '../TagClass.php';

class FormClass extends TagClass {

    public function __construct() {
        // вызовем конструктор родителя
        parent::__construct('form');
    }

    /**
     * Откажемся от вызова метода show()
     */
    public function __toString() {
        return $this->show();
    }
}
