<meta charset="utf-8">
<?php
// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// выключение вывод всех ошибок
// error_reporting(0);
// ini_set('display_errors', 'off');

// Кодировка
mb_internal_encoding('UTF-8');

$num = 1; // может быть 1, 2 или 3

if ($num === 1) {
    echo 'value1'; // сработает, если $num равно 1
}
if ($num === 2) {
    echo 'value2'; // сработает, если $num равно 2
}
if ($num === 3) {
    echo 'value3'; // сработает, если $num равно 3
}
echo "<br>";

if ($num === 1) {
    echo 'value1';
} elseif ($num === 2) {
    echo 'value2';
} elseif ($num === 3) {
    echo 'value3';
}
echo "<br>";

$test = null;
if ($test == 0) echo '+'; else echo '-';
echo "<br>";

$num = 10;
if ($num === 1) {
    echo 'value1';
} elseif ($num === 2) {
    echo 'value2';
} elseif ($num === 3) {
    echo 'value3';
} else {
    echo 'неверное значение переменной $num';
}
echo "<br>";

// Вложенные if

$num = 3;

if ($num >= 0) {
    if ($num <= 5) {
        echo 'больше или равен 0 и меньше или равно 5';
    } else {
        echo 'больше 5';
    }
} else {
    echo 'меньше нуля';
}
echo "<br>";
echo "<br>";

$n = 123;
$nstr = $n . "";
//var_dump($nstr);
echo "<br>";
$sum = 0;
for ($i = 0, $iMax = strlen((string)$nstr); $i < $iMax; ++$i) {
    $sum .= $nstr[$i];
}
echo $sum;

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>