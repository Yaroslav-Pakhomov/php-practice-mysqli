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


// Переменные названия свойств объектов


class Arr {
    private array $numbers; // массив чисел

    public function __construct($numbers) {
        $this->numbers = $numbers; // записываем массив $numbers в свойство
    }

    // Добавляем еще одно число в наш массив:
    public function add($number): void {
        $this->numbers[] = $number;
    }

    // Находим сумму чисел:
    public function getSum(): float|int {
        return array_sum($this->numbers);
    }
}


$arr = new Arr([1, 2, 3]); // создаем объект, записываем в него массив [1, 2, 3]
$arr->add(4); // добавляем в конец массива число 4
$arr->add(5); // добавляем в конец массива число 5

echo '<br>';

// Находим сумму элементов массива:
echo $arr->getSum(); // выведет 15

echo '<br>';
echo '<br>';
echo '<br>';

// все нужные числа мы передадим в момент создания объекта, а затем сразу захотим найти их сумму
echo (new Arr([1, 2, 3]))->getSum(); // выведет 6

echo '<br>';
echo '<br>';
echo '<br>';

// найдем сумму двух массивов
echo (new Arr([1, 2, 3]))->getSum() + (new Arr([4, 5, 6]))->getSum();
