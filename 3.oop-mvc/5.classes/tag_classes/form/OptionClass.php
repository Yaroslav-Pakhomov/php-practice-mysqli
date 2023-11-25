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

class OptionClass extends TagClass {

    public function __construct() {
        // вызовем конструктор родителя
        parent::__construct('option');
    }

    public function setSelected(): OptionClass {
        $this->setAttr('selected', TRUE);
        return $this;
    }


    // /**
    //  * Сохранение состояния select после отправки формы
    //  *
    //  * @return string
    //  */
    // public function open(): string {
    //     print_r($_REQUEST);
    //     $optionName = $this->getAttr('name');
    //     echo $optionName;

    //     if (isset($_REQUEST[$optionName])) {

    //         echo '<br>';

    //         // foreach ($this->options as $option) {
    //         //     // print_r($option->getAttr('name'));
    //         //     if ($option->getAttr('name') === $optionName) {
    //         //         $optionValue = $_REQUEST[$optionName];
    //         //         echo $optionValue;
    //         //         echo '<br>';
    //         //         $option->setSelected();
    //         //     }
    //         // }


    //         // (new OptionClass())->
    //         // return $this->setSelected() . parent::open();
    //     }

    //     return parent::open();
    // }


}
