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

class TextareaClass extends TagClass {

    public function __construct() {
        // вызовем конструктор родителя
        parent::__construct('textarea');
    }

    /**
     * Откажемся от вызова метода show()
     *
     * @return string
     */
    public function __toString() {
        return $this->show();
    }

    /**
     * Реализация сохранения значений после отправки
     *
     * @return string
     */
    public function show(): string {
        // получаем атрибут названия поля textarea
        $textareaName = $this->getAttr('name');

        if ($textareaName && isset($_REQUEST[$textareaName])) {
            // получаем атрибут значение поля textarea
            $value = $_REQUEST[$textareaName];
            $this->setText($value);
        }

        return parent::show();
    }
}
