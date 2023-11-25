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

// В PHP переменная будет пустая, если она равна 0, '', '0', false или null.

$test = '';
if (empty($test)) {
    echo '+'; // сработает это
} else {
    echo '-';
}
echo "<br>";

if (!empty($test)) {
    echo '+';
} else {
    echo '-'; // сработает это
}
echo "<br>";

$test = null;
if (empty($test)) {
    echo '+'; // сработает это
} else {
    echo '-';
}
echo "<br>";

$test = false;
if (!empty($test)) {
    echo '+';
} else {
    echo '-'; // сработает это
}
echo "<br>";

$test = 'false';
if (!empty($test)) {
    echo '+'; // сработает это
} else {
    echo '-';
}
echo "<br>";

$test = 'null';
if (!empty($test)) {
    echo '+'; // сработает это
} else {
    echo '-';
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>