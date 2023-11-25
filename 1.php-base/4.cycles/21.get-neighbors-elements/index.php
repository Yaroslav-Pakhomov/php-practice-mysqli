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

$arr = [1, 2, 3, 4, 5];
// выведем элементы этого массива
$length = count($arr);
for ($i = 0; $i < $length; $i++) {
    echo $arr[$i];
}
echo "<br>";
echo "<br>";

//$arr = [1, 2, 3, 4, 5];
// Выведем не текущие элементы, а предыдущие
// предыдущих элементов всегда на 1 меньше, чем элементов в массиве. Логично в таком случае, что и цикл должен сделать на одну итерацию меньше.
$length = count($arr);
for ($i = 1; $i < $length; $i++) {
    echo $arr[$i - 1];
}
echo "<br>";
echo "<br>";

//$arr = [1, 2, 3, 4, 5];
$length = count($arr);
// найдем сумму предыдущего и текущего элементов массива
for ($i = 1; $i < $length; $i++) {
    echo $arr[$i - 1] + $arr[$i];
}
echo "<br>";
echo "<br>";

//$arr = [1, 2, 3, 4, 5];
$length = count($arr);
// Выведем не текущие элементы, а следующий
for ($i = 0; $i < $length - 1; $i++) {
    echo $arr[$i + 1];
}
echo "<br>";
echo "<br>";

//$arr = [1, 2, 3, 4, 5];
$length = count($arr);
// найдем сумму текущего и следующего элементов массива
for ($i = 0; $i < $length - 1; $i++) {
    echo $arr[$i] + $arr[$i + 1];
}
echo "<br>";

//$arr = [1, 2, 3, 4, 5];
// Выведем не текущие элементы, а 2 предыдущих
$length = count($arr);
for ($i = 2; $i < $length; $i++) {
    echo $arr[$i - 2] . ' ' . $arr[$i - 1] . '<br>';
}
echo "<br>";

//$arr = [1, 2, 3, 4, 5];
$length = count($arr);
$prev = 1;
// Выведем сумму с $prev предыдущего по текущий элемент
for ($i = $prev; $i < $length; $i++) {
    $summ = 0;
    for ($j = $prev; $j >= 0; $j--) {
        $summ += $arr[$i - $j];
    }
    $arr1[] = $summ;
    // echo $arr[$i - 2] . ' '. $arr[$i - 1].'<br>';
}
print_r($arr1);
echo "<br>";
echo "<br>";

$arr = [1, 2, 3, 4, 5, 6];
$arr1 = [];
$length = count($arr);
$range = 2;
print_r($arr);
echo "<br>";
echo "<br>";
echo "<br>";
// Выведем сумму с $range предыдущего по $range следующий элемент
for ($i = $range; $i < $length - $range; $i++) {
    $summ = 0;
    for ($j = $range; $j > 0; $j--) {
        $summ += $arr[$i - $j];
    }
    echo $summ;
    echo "<br>";

    $summ += $arr[$i];
    echo $summ;
    echo "<br>";

    for ($j = $range; $j > 0; $j--) {
        $summ += $arr[$i + $j];
    }
    echo $summ;
    $arr1[] = $summ;
    echo "<br><br><br>";
    // echo $arr[$i - 1] + $arr[$i] + $arr[$i + 1] . '<br>';
}
print_r($arr1);
echo "<br>";

?>