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

function getPrimeDivisors(int $num): array {
    $result = [];
    $divs = getOwnDivisors($num);

    foreach ($divs as $div) {
        if (isPrime($div)) {
            $result[] = $div;
        }
    }

    return $result;
}

function getOwnDivisors(int $num): array {
    $arrDivs = [];
    for ($i = 2, $iMax = $num; $i < $iMax; $i++) {
        if ($num % $i === 0) {
            $arrDivs[] = $i;
        }
    }

    return $arrDivs;
}

function isPrime(int $div): bool {
    return count(getOwnDivisors($div)) === 0;
}


print_r(getPrimeDivisors(11));
echo "<br>";
echo "<br>";
echo "<br>";

print_r(getPrimeDivisors(8));
echo "<br>";
echo "<br>";
echo "<br>";

print_r(getPrimeDivisors(121));
echo "<br>";
echo "<br>";
echo "<br>";

print_r(getPrimeDivisors(24));
echo "<br>";
echo "<br>";
echo "<br>";

print_r(getPrimeDivisors(66));
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


