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


// Класс как набор методов. Класс как набор методов в ООП


class ArraySumHelper {
    // Сумма элементов массива:
    public function getSum1($arr): float|object|int {
        return $this->getSum($arr, 1);
    }

    // Сумма квадратов элементов массива:
    public function getSum2($arr): float|object|int {
        return $this->getSum($arr, 2);
    }

    // Сумма кубов элементов массива:
    public function getSum3($arr): float|object|int {
        return $this->getSum($arr, 3);
    }

    // Сумма четвертых степеней элементов массива:
    public function getSum4($arr): float|object|int {
        return $this->getSum($arr, 4);
    }

    // Находит сумму первых степеней элементов массива
    public function getAvg1($arr): float|object|int {
        $sum1 = $this->getSum1($arr);
        return $this->calcSqrt($sum1, 1);
    }

    // Находит сумму вторых степеней элементов массива и извлекает из нее квадратный корень
    public function getAvg2($arr): float|object|int {
        $sum2 = $this->getSum2($arr);
        return $this->calcSqrt($sum2, 1 / 2);
    }

    // Находит сумму третьих степеней элементов массива и извлекает из нее кубический корень
    public function getAvg3($arr): float|object|int {
        $sum3 = $this->getSum3($arr);
        return $this->calcSqrt($sum3, 1 / 3);
    }

    // Находит сумму четвертых степеней элементов массива и извлекает из нее корень четвертой степени
    public function getAvg4($arr): float|object|int {
        $sum4 = $this->getSum4($arr);
        return $this->calcSqrt($sum4, 1 / 4);
    }

    /*
        Вспомогательный метод, который параметром
        принимает целое число и степень и возвращает
        корень заданной степени из числа:
    */
    private function calcSqrt($num, $power): float|object|int {
        return $num ** $power;
    }

    /*
        Вспомогательный метод, который параметром
        принимает массив и степень и возвращает
        сумму степеней элементов массива:
    */
    private function getSum($arr, $power): float|object|int {
        $sum = 0;

        foreach ($arr as $elem) {
            $sum += $elem ** $power; // возведем в степень $power
        }

        return $sum;
    }
}

$arraySumHelper = new ArraySumHelper;

$arr = [1, 2, 3];
echo $arraySumHelper->getSum1($arr);
echo '<br>';
echo '<br>';
echo $arraySumHelper->getSum2($arr);
echo '<br>';
echo '<br>';
echo $arraySumHelper->getSum3($arr);
echo '<br>';
echo '<br>';
echo $arraySumHelper->getSum4($arr);
echo '<br>';
echo '<br>';
echo $arraySumHelper->getAvg1($arr);
echo '<br>';
echo '<br>';
echo $arraySumHelper->getAvg2($arr);
echo '<br>';
echo '<br>';
echo $arraySumHelper->getAvg3($arr);
echo '<br>';
echo '<br>';
echo $arraySumHelper->getAvg4($arr);
echo '<br>';
echo '<br>';
echo $arraySumHelper->getAvg2([1, 2, 2]);
echo '<br>';
echo '<br>';
