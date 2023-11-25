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

require_once './iProgrammer.php';
require_once './Employee.php';

class Programmer extends Employee implements iProgrammer {

    private array $lang = [];

    public function addLang($lang): void {
        $this->lang[] = $lang;
    }

    public function getLangs(): array {
        return $this->lang;
    }
}
