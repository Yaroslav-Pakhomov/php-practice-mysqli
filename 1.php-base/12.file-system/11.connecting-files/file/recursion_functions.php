<?php

declare(strict_types=1);

// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');


// Кодировка
mb_internal_encoding('UTF-8');

/**
 * Вывод всех элементов массива
 */
function func($arr): void {
    foreach ($arr as $elem) {
        if (is_array($elem)) {
            func($elem);
        } else {
            echo $elem;
        }
    }
}


/**
 * Вывод каждого элемента массива с переходом на новую строку
 *
 * @param $arr
 * @return void
 */
function recursionArray($arr): void {
    foreach ($arr as $value) {
        if (is_array($value)) {
            recursionArray($value);
        } else {
            echo $value . '<br>';
        }
    }
}


/**
 * Сумма элементов массива
 */
function funcSummaArray($arr): int {
    $sum = 0;

    foreach ($arr as $elem) {
        if (is_array($elem)) {
            $sum += funcSummaArray($elem);
        } else {
            $sum += $elem;
        }
    }

    return $sum;
}

/**
 * Сумма элементов массива
 */
$summa = 0;
function recursionArraySumma(array $arr): int {
    global $summa;
    foreach ($arr as $value) {
        if (is_array($value)) {
            recursionArraySumma($value);
        } else {
            $summa += $value;
        }
    }
    return $summa;
}

/**
 * Соединяет все элементы в строку
 */
$string = '';
function recursionArrayString(array $arr): string {
    global $string;
    foreach ($arr as $value) {
        if (is_array($value)) {
            recursionArrayString($value);
        } else {
            $string .= $value;
        }
    }
    return $string;
}

/**
 * Добавляет к каждому элементу "!" знак
 */
function func2($arr): array {
    foreach ($arr as $i => $iValue) {
        if (is_array($iValue)) {
            $arr[$i] = func2($iValue);
        } else {
            $arr[$i] .= '!';
        }
    }

    return $arr;
}

/**
 * Возводит каждый элемент массива в квадрат
 */
function recursionDegree($arr): array {
    foreach ($arr as $i => $value) {
        if (is_array($value)) {
            $arr[$i] = recursionDegree($value);
        } else {
            $arr[$i] = $value ** 2;
        }
    }

    return $arr;
}
