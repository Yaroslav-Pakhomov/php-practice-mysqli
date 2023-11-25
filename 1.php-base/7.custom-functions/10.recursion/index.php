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

// Выведем с помощью рекурсии числа от 1 до 10:
$i = 1;

function func(): void {
    global $i;
    echo $i . '<br>';
    $i++;

    if ($i <= 10) {
        func(); // здесь функция вызывает сама себя
    }
}

func();
echo "<br>";
echo "<br>";
echo "<br>";

function func1($arr): void {
    var_dump(array_shift($arr)); // выведет 1
    var_dump($arr); // выведет [2, 3] - массив уменьшился

    var_dump(array_shift($arr)); // выведет 2
    var_dump($arr); // выведет [3] - массив уменьшился

    var_dump(array_shift($arr)); // выведет 3
    var_dump($arr); // выведет [] - массив пуст
}

func1([1, 2, 3]);
echo "<br>";
echo "<br>";

function func2($arr): void {
    var_dump(array_shift($arr));
    var_dump($arr);

    if (count($arr) !== 0) {
        func($arr);
    }
}

func2([1, 2, 3]);
echo "<br>";
echo "<br>";
echo "<br>";

function recursion($arr): void {
    echo array_shift($arr);
    echo '<br>';
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    echo '<br>';
    echo '<br>';

    if (count($arr) !== 0) {
        recursion($arr);
    }
}

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
recursion($arr);
echo "<br>";
echo "<br>";
echo "<br>";

$summa = 0;
function recursionSumma($arr) {
    global $summa;
    $summa += array_shift($arr);

    if (count($arr) !== 0) {
        recursionSumma($arr);
    }

    return $summa;
}

$arr1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
echo recursionSumma($arr1);
echo "<br>";
echo "<br>";
echo "<br>";

function getSum($arr) {
    $sum = array_shift($arr);

    if (count($arr) !== 0) {
        $sum += getSum($arr);
    }

    return $sum;
}

var_dump(getSum([1, 2, 3]));
echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


