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
require_once './AvgHelperClass.php';

class ArrClass {
    private array $nums = []; // массив чисел
    private SumHelperClass $sumHelper; // сюда запишется объект класса SumHelperClass
    private AvgHelperClass $avgHelper; // сюда запишется объект класса AvgHelperClass

    // Конструктор класса
    public function __construct() {
        // Запишем объект вспомогательного класса в свойство
        $this->sumHelper = new SumHelperClass();
        $this->avgHelper = new AvgHelperClass();
    }

    // Находим сумму квадратов и кубов элементов массива
    public function getSum23(): float|object|int {
        // Для краткости запишем $this->nums в переменную
        $nums = $this->nums;

        // Найдем описанную сумму
        return $this->sumHelper->getSum2($nums) + $this->sumHelper->getSum3($nums);
    }

    // среднее арифметическое этого массива (сумма элементов делить на количество)
    public function getAvgArray(): float|int {
        // Для краткости запишем $this->nums в переменную
        $nums = $this->nums;

        return $this->avgHelper->getAvg($nums);
    }

    // среднее квадратичное этого массива (квадратный корень, извлеченный из суммы квадратов элементов, деленной на количество)
    public function getMeanSquareArray(): float|object|int {
        // Для краткости запишем $this->nums в переменную
        $nums = $this->nums;

        return $this->avgHelper->getMeanSquare($nums);
    }

    // сумму среднего арифметического и среднего квадратичного из массива
    public function getAvgMeanSum(): float|object|int {
        return $this->getAvgArray() + $this->getMeanSquareArray();
    }

    // Добавляем число в массив
    public function add($num): void {
        $this->nums[] = $num;
    }
}
