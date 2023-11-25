<?php

declare(strict_types=1);

namespace Core\Admin;

// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// выключение вывод всех ошибок
// error_reporting(0);
// ini_set('display_errors', 'off');

// Кодировка
mb_internal_encoding('UTF-8');


// При одинаковом пространстве имён можно не указывать use

class Data extends Controller {

    public function __construct($num) {

    }

}
