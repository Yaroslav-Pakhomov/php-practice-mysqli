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

require_once './InputClass.php';

class SubmitClass extends InputClass {

    public function __construct() {
        $this->setAttr('type', 'submit');
        // вызовем конструктор родителя
        parent::__construct();
    }
}
