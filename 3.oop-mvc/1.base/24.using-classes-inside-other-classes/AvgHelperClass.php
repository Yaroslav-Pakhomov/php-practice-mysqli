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

require_once './SumHelperClass.php';

class AvgHelperClass extends SumHelperClass {

    // среднее арифметическое этого массива (сумма элементов делить на количество)
    public function getAvg($arr): float|int {
        return $this->getSum1($arr) / count($arr);
    }

    // среднее квадратичное этого массива (квадратный корень, извлеченный из суммы квадратов элементов, деленной на количество)
    public function getMeanSquare($arr): float|object|int {
        $avg_square = $this->getSum2($arr) / count($arr);
        return $avg_square ** (1 / 2);
    }
}
