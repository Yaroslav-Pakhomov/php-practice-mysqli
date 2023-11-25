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

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $elem) {
    if ($elem % 2 === 0) {
        $result = $elem * $elem;
        echo $result . '<br>';
    } elseif ($elem % 3 === 0) {
        $result = $elem * $elem * $elem;
        echo $result . '<br>';
    }
}
echo "<br>";
echo "<br>";
echo "<br>";


// Строчка echo $result повторяется два раза, вынесем ее за if

$result = null;
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $elem) {
    if ($elem % 2 === 0) {
        $result = $elem ** 2;
    } elseif ($elem % 3 === 0) {
        $result = $elem ** 3;
    }
    echo $result . '<br>'; // вынесли вывод за условие
}
// Для остальных элементов тоже будет выполнятся вывод переменной $result, который нам не нужен.
echo "<br>";
echo "<br>";
echo "<br>";


// Добавим инструкцию continue

$result = null;
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $elem) {
    if ($elem % 2 === 0) {
        $result = $elem ** 2;
    } elseif ($elem % 3 === 0) {
        $result = $elem ** 3;
    } else {
        continue; // перейдем на новую итерацию цикла
    }
    echo $result . '<br>'; // выполнится, если делится на 2 или 3
}
echo "<br>";


echo "<br>";


echo "<br>";


echo "<br>";


echo "<br>";


echo "<br>";

?>