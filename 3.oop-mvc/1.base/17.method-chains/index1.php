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


// Цепочки методов в классе. Цепочки методов


class Arr {
    private array $numbers = []; // массив чисел

    public function add($number): static {
        $this->numbers[] = $number;
        return $this; // вернем ссылку сами на себя (объект)
    }

    /**
     * @param $numbers
     * @return $this
     */
    public function push($numbers): object {
        $this->numbers = array_merge($this->numbers, $numbers);
        return $this; // вернем ссылку сами на себя (объект)
    }

    public function getSum(): float|int {
        return array_sum($this->numbers);
    }
}

$arr = new Arr;

var_dump($arr->add(1));

echo '<br>';
echo '<br>';
echo '<br>';

echo $arr->add(1)->add(2)->push([3, 4])->getSum(); // выведет 10
