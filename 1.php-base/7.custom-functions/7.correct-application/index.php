<?php

declare(strict_types=1);
// <!--<meta charset="utf-8">-->
// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// выключение вывод всех ошибок
// error_reporting(0);
// ini_set('display_errors', 'off');

// Кодировка
mb_internal_encoding('UTF-8');

$result = [];
$arr = ['1524', '1321', '4563', '7144', '2879'];


foreach ($arr as $elem) {
    if (checkDigitsPairsSum($elem)) { // используем нашу функцию
        $result[] = $elem;
    }
}

var_dump($result);

// сумма первых двух цифр в которых равна сумме вторых двух цифр.
function checkDigitsPairsSum($num): bool {
    return $num[0] + $num[1] === $num[2] + $num[3];
}

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
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


