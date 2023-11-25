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
require_once './OptionClass.php';

class SelectClass extends TagClass {

    private array $options = []; // массив для хранения пунктов

    public function __construct() {
        // вызовем конструктор родителя
        parent::__construct('select');
    }

    /**
     * Откажемся от вызова метода show()
     */
    public function __toString() {
        return $this->show();
    }

    /**
     * Добавление пунктов списка
     */
    public function addOption(OptionClass $option): object {
        $this->options[] = $option;
        return $this; // вернем $this для цепочки
    }

    /**
     * Выводит список целиком
     */
    public function show(): string {
        $result = $this->open();

        foreach ($this->options as $option) {
            $result .= $option->show(); // open()->text()->close()
        }

        $result .= $this->close();

        return $result;
    }

    /**
     * Сохранение состояния select после отправки формы
     *
     * @return string
     */
    public function open(): string {
        $optionName = $this->getAttr('name');

        if (isset($_REQUEST[$optionName])) {

            $optionValue = $_REQUEST[$optionName];

            foreach ($this->options as $option) {

                if ($option->getText() === $optionValue) {
                    $option->setSelected();
                }
            }
            return parent::open();
        }

        return parent::open();
    }
}
