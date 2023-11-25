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

$str = ''; // начальное значение - пустые кавычки
for ($i = 0; $i < 10; $i++) {
    $str .= 'x';
}
echo $str; // выведет 'xxxxxxxxxx'
echo "<br>";
echo "<br>";

// Строка с цифрами
$str = '';
for ($i = 1; $i <= 5; $i++) {
    $str .= $i;
}
echo $str; // выведет '12345'

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