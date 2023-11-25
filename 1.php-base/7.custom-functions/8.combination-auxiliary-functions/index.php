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

// функция getDigits, возвращающая цифры переданного числа:
function getDigits($num): array {
    $num = (string)$num;

    return str_split($num);
}

// функция getAvg, возвращающая среднее элементов переданного массива:
function getAvg($arr): float|int {
    print_r($arr);
    echo '<br>';
    echo '<br>';
    if (!empty($arr)) {
        return array_sum($arr) / count($arr);
    }

    return 0;
}

// функция getAvgDiv, возвращающая среднее элементов делителей переданного массива:
function getAvgDiv($num): float|int {
    // print_r($arr);
    // echo '<br>';
    // echo '<br>';
    $arrDiv = [];
    for ($i = 2, $iMax = $num; $i < $iMax; $i++) {
        if ($num % $i === 0) {
            $arrDiv[] = $i;
        }
    }

    if (!empty($arrDiv)) {
        print_r($arrDiv);
        echo '<br>';
        return array_sum($arrDiv) / count($arrDiv);
    }

    return 0;
}

// найдем сумму цифр какого-нибудь числа
echo getAvg(getDigits(12345));
echo "<br>";
echo "<br>";
echo "<br>";

echo getAvgDiv(6);
echo "<br>";
echo "<br>";

echo getAvgDiv(15);
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
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


