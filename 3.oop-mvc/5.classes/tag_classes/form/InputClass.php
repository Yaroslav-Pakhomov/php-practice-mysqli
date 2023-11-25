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

class InputClass extends TagClass {

    public function __construct() {
        // вызовем конструктор родителя
        parent::__construct('input');
    }

    /**
     * Откажемся от вызова метода open()
     *
     * @return string
     */
    public function __toString() {
        return $this->open();
    }

    /**
     * Реализация сохранения значений после отправки
     *
     * @return string
     */
    public function open(): string {
        $inputName = $this->getAttr('name');

        // Если атрибут name задан у инпута
        // Если форма была отправлена и есть данные с именем нашего инпута
        if ($inputName && isset($_REQUEST[$inputName])) {
            $value = $_REQUEST[$inputName];
            $this->setAttr('value', $value);
        }

        return parent::open();
    }
}
