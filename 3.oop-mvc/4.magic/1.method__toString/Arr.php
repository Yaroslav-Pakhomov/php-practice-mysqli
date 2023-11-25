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


class Arr {
    private array $numbers = [];

    public function add(int $num): object {
        $this->numbers[] = $num;
        return $this;
    }

    public function getSum(): float|int {
        return array_sum($this->numbers);
    }

    public function __toString() {
        return (string)array_sum($this->numbers);
    }
}
