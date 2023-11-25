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
require_once './HiddenClass.php';

class RadioClass extends TagClass {

    public function __construct() {
        $this->setAttr('type', 'radio');
        // $this->setAttr('value', '1');

        // вызовем конструктор родителя
        parent::__construct('input');
    }

    /**
     * Откажемся от вызова метода show()
     *
     * @return string
     */
    public function __toString() {
        return $this->open();
    }

    /**
     * При создании чекбокса в пару к нему с помощью класса Hidden создается скрытый инпут
     *
     * @return string
     */
    public function open(): string {
        // получаем атрибут названия поля textarea
        $radioName = $this->getAttr('name');

        if ($radioName) {
            // создание скрытого инпута с помощью класса Hidden
            $hidden = (new HiddenClass())->setAttr('name', $radioName)->setAttr('value', '0');

            // сохранение состояния чекбокса после отправки формы
            if (isset($_REQUEST[$radioName])) {
                $radioValue = (int)$_REQUEST[$radioName];

                ($radioValue === 1) ? $this->setAttr('checked', TRUE) : $this->removeAttr('checked');
            }

            return $hidden->open() . parent::open();
        }

        return parent::open();
    }
}
