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

if ($num > 0 && $num < 5) {
    echo '+';
} else {
    echo '-';
}
echo "<br>";

// Противоположное условие 1-ый способ
if ($num <= 0 || $num >= 5) {
    echo '+';
} else {
    echo '-';
}
echo "<br>";

// Противоположное условие 2-ой способ
if (!($num > 0 && $num < 5)) {
    echo '+';
} else {
    echo '-';
}
echo "<br>";

?>