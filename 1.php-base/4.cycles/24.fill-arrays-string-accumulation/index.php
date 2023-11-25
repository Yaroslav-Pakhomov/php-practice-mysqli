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

$arr = [];
$str = '';
for ($i = 0; $i < 5; $i++) {
    $str .= 'x';
    $arr[] = $str;
}
var_dump($arr); // выведет ['x', 'xx', 'xxx', 'xxxx', 'xxxxx']
echo "<br>";
echo "<br>";
echo "<br>";

$arr = [];
for ($i = 1; $i < 10; $i++) {
    $str = '';
    for ($j = 0; $j < $i; $j++) {
        $str .= $i;
    }
    $arr[] = $str;
}
var_dump($arr);
echo "<br>";
echo "<br>";

$arr = [];
for ($i = 1; $i < 6; $i++) {
    $str = '';
    for ($j = 0; $j < 5; $j++) {
        $str .= $i;
    }
    $arr[] = $str;
}
var_dump($arr);

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
echo "<br>";
echo "<br>";
echo "<br>";

?>