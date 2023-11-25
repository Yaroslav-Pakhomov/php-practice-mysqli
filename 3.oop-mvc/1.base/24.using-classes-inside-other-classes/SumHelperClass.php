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

class SumHelperClass {
    // Сумма чисел
    public function getSum1($arr): float|object|int {
        return $this->getSum($arr, 1);
    }

    // Сумма квадратов
    public function getSum2($arr): float|object|int {
        return $this->getSum($arr, 2);
    }

    // Сумма кубов
    public function getSum3($arr): float|object|int {
        return $this->getSum($arr, 3);
    }

    // Вспомогательная функция для нахождения суммы
    private function getSum($arr, $power): float|object|int {
        $sum = 0;

        foreach ($arr as $elem) {
            $sum += $elem ** $power;
        }

        return $sum;
    }
}
