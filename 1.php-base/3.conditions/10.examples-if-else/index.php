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

$min = 10;
if ($min >= 0 && $min <= 14) {
    echo '1 четверть';
}
if ($min >= 15 && $min <= 29) {
    echo '2 четверть';
}
if ($min >= 30 && $min <= 44) {
    echo '3 четверть';
}
if ($min >= 45 && $min <= 59) {
    echo '4 четверть';
}
echo "<br>";

$a = 10;
$b = 3;
if ($a % $b === 0) {
    echo 'делится нацело';
} else {
    echo 'делится с остатком' . $a % $b;
}
echo "<br>";

//	$a = 10;
//	$b = 3;
$rest = $a % $b;
if ($rest === 0) {
    echo 'делится нацело';
} else {
    echo 'делится с остатком ' . $rest;
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>