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

$one = 0;
$two = 1;

for ($i = 1; $i <= 10; $i++) {
    $current = $one + $two;

    $one = $two;
    $two = $current;

    echo $current . '<br>';
}
echo "<br>";
echo "<br>";
echo "<br>";

$one = 0;
$two = 1;
$three = 2;
for ($i = 1; $i <= 10; $i++) {
    $current = $one + $two + $three;

    $one = $two;
    $two = $three;
    $three = $current;

    echo $current . '<br>';
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

?>