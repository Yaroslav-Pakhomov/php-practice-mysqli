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


$test = true;

if ($test === true) {
    echo '+'; // сработает это
} else {
    echo '-';
}
echo "<br>";

$test = 1;

if ($test == true) {
    echo '+'; // сработает это, тк 1 == true - это верно
} else {
    echo '-';
}
echo "<br>";

$test = 0;
if ($test == true) {
    echo '+';
} else {
    echo '-'; // сработает это, тк 0 == true - это НЕверно
}
echo "<br>";

// Сокращенный if

$test = true;
if ($test) { // эквивалентно if ($test == true)
    echo '+'; // сработает это
} else {
    echo '-';
}
echo "<br>";

if (!$test) { // используем логическое НЕ
    echo '+';
} else {
    echo '-'; // сработает это
}
echo "<br>";

if ($test != true) { // эквивалентно if ($test == false)
    echo '+';
} else {
    echo '-'; // сработает это
}
echo "<br>";

// В сокращенных операциях сравнение идет по ==, а не по ===

$test = '';
if ($test) {
    echo '+';
} else {
    echo '-'; // сработает это
}
//var_dump($test);
echo "<br>";

//$test = 3 * 'abc'; // Fatal error:
// if ($test) {
// 	echo '+';
// } else {
// 	echo '-'; // сработает это
// }
echo "<br>";

$test = null;
if ($test) {
    echo '+';
} else {
    echo '-'; // сработает это
}
//var_dump($test);
echo "<br>";

$test;
if ($test) {
    echo '+';
} else {
    echo '-'; // сработает это
}
//var_dump($test);
echo "<br>";

$test = 0;
if ($test) {
    echo '+';
} else {
    echo '-'; // сработает это
}
//var_dump($test);
echo "<br>";

$test = '0';
if ($test) {
    echo '+';
} else {
    echo '-'; // сработает это
}
//var_dump($test);
echo "<br>";

$test = -1;
if ($test) {
    echo '+'; // сработает это
} else {
    echo '-';
}
//var_dump($test);
echo "<br>";

?>