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

$test = 1;
if ($test > 0) {
    echo '+'; // сработает это
} else {
    echo '-';
}
echo "<br>";

$test = -1; // поменяем значение переменной
if ($test > 0) {
    echo '+';
} else {
    echo '-'; // сработает это
}
echo "<br>";

$test = 0; // пусть значение переменной равно 0
if ($test > 0) {
    echo '+';
} else {
    echo '-'; // сработает это
}
echo "<br>";

if ($test >= 0) {
    echo '+'; // сработает это
} else {
    echo '-';
}
echo "<br>";

// Проверка на равенство
if ($test === 0) {
    echo '+'; // сработает это, так как переменная равна 0
} else {
    echo '-';
}
echo "<br>";

$test = 1; // пусть значение переменной равно 1
if ($test === 0) {
    echo '+';
} else {
    echo '-'; // сработает это, так как переменная НЕ равна 0
}
echo "<br>";

// Проверка на неравенство

if ($test !== 0) {
    echo '+'; // сработает это, так как переменная НЕ равна 0
} else {
    echo '-';
}
echo "<br>";

$test = 0; // пусть значение переменной равно 0
if ($test !== 0) {
    echo '+';
} else {
    echo '-'; // сработает это, так как переменная равна 0
}
echo "<br>";

// Сравнение переменных

$test1 = 1;
$test2 = 2;

if ($test2 > $test1) {
    echo '+'; // сработает это, так как $test2 больше $test1
} else {
    echo '-';
}
echo "<br>";

?>