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


$test = null;
if ($test === null) {
    echo '+';
} else {
    echo '-'; // сработает это
}
echo "<br>";

$test = null;
if (isset($test)) {
    echo '+';
} else {
    echo '-'; // сработает это
}
echo "<br>";

$test1;
if (isset($test1)) {
    echo $test;
} else {
    echo 'variable does not exist'; // сработает это
}
echo "<br>";

$test = null;
if (!isset($test)) {
    echo '+'; // сработает это
} else {
    echo '-';
}
echo "<br>";

$arr = ['a', 'b', 'c'];
if (isset($arr['5'])) {
    echo $arr['5'];
} else {
    echo 'element does not exist'; // сработает это
}
echo "<br>";

if (isset($arr1['5'])) {
    echo $arr1['5'];
} else {
    echo 'array or element does not exist'; // сработает это
}
echo "<br>";

$test = 0;
if (isset($test)) {
    echo '+'; // сработает это
} else {
    echo '-';
}
echo "<br>";

$test = null;
if (!isset($test)) {
    echo '+'; // сработает это
} else {
    echo '-';
}
echo "<br>";

$test = null;
if (isset($test)) {
    echo '+';
} else {
    echo '-'; // сработает это
}
echo "<br>";

$test2;
if (isset($test2)) {
    echo '+';
} else {
    echo '-'; // сработает это
}
echo "<br>";

$test = false;
if (isset($test)) {
    echo '+'; // сработает это
} else {
    echo '-';
}
echo "<br>";

// $arr = [1, 2, 3, 4, 5];
// if (isset($arr[])) { // Fatal error
// 	echo '+';
// } else {
// 	echo '-';
// }
// echo "<br>";


echo "<br>";

?>