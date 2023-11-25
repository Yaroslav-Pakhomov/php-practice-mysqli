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

$num = 3;
if ($num > 0 && $num < 10) {
    echo '+'; // сработает это
} else {
    echo '-';
}
echo "<br>";

$num1 = 2;
$num2 = 3;
if ($num1 === 2 and $num2 === 3) {
    echo '+'; // сработает это
} else {
    echo '-';
}
echo "<br>";

$num1 = 10;
$num2 = -5;
if ($num1 > 0 || $num2 > 0) {
    echo '+'; // сработает это
} else {
    echo '-';
}
echo "<br>";

$num1 = -10;
$num2 = -10;
if ($num1 >= 0 || $num2 >= 0) {
    echo '+';
} else {
    echo '-';// сработает это
}
echo "<br>";

$num1 = 0;
$num2 = 0;
if ($num1 >= 0 or $num2 >= 0) {
    echo '+';// сработает это
} else {
    echo '-';
}
echo "<br>";

$num1 = 0;
$num2 = 5;
if ($num1 >= 0 || $num2 >= 0) {
    echo '+'; // сработает это
} else {
    echo '-';
}
echo "<br>";

$num1 = -5;
$num2 = 15;
if ($num1 >= 0 || $num2 >= 0) {
    echo '+'; // сработает это
} else {
    echo '-';
}
echo "<br>";

$num = 1;
if ($num === 0 || $num === 1) {
    echo '+'; // сработает это
} else {
    echo '-';
}
echo "<br>";

$num = 2;
if ($num === 0 || $num === 1) {
    echo '+';
} else {
    echo '-'; // сработает это
}
echo "<br>";

if (true || false && true) {
    echo '+'; // сработает это
} else {
    echo '-';
}
echo "<br>";


// Группировка условий

$num = 3;
if (($num > 0 && $num < 5) || ($num > 10 && $num < 20)) {
    echo '+'; // сработает это
} else {
    echo '-';
}
echo "<br>";

?>