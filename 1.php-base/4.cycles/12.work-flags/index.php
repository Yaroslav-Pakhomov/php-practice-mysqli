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

// Флаг - это специальная переменная, которое может принимать только два значения: true или false. С помощью флагов можно решать задачи, проверяющие отсутствие чего-либо: к примеру, можно проверить, что в массиве нет элемента с определенным значением.

$arr = [1, 2, 3, 4, 3, 5];
foreach ($arr as $elem) {
    if ($elem === 3) {
        echo 'есть <br>';
    }
}
echo "<br>";
echo "<br>";
echo "<br>";

// 'Есть' выведется один раз, т.к. задействуем break
$arr = [1, 2, 3, 4, 3, 5];
foreach ($arr as $elem) {
    if ($elem === 3) {
        echo 'есть <br>';
        break;  // завершим цикл
    }
}
echo "<br>";
echo "<br>";


$arr = [1, 2, 3, 4, 5];
foreach ($arr as $elem) {
    if ($elem === 3) {
        echo 'есть <br>'; // выведет на элементе 3
    } else {
        echo 'нет <br>';  // выведет на элементах 1, 2, 4, 5
    }
}
echo "<br>";
echo "<br>";
echo "<br>";


$arr = [1, 2, 3, 4, 5];
$flag = false; // считаем, что элемента 3 нет в массиве
foreach ($arr as $elem) {
    if ($elem === 3) {
        $flag = true; // элемент есть - переопределим переменную $flag
        break;        // выйдем из цикла
    }
}
// Ответ на вопрос, есть ли в массиве 3 или нет, мы можем дать только после цикла.
// Тут переменная $flag равна или true, или false
if ($flag === true) {
    echo 'есть <br>';
} else {
    echo 'нет <br>';
}
echo "<br>";
echo "<br>";

$arr = ['a', 'b', 'c', 'd', 'e'];
$flag = false;
foreach ($arr as $elem) {
    if ($elem === 'c') {
        $flag = true;
        break;
    }
}
if ($flag) echo 'Да!!! <br>'; else echo 'Нет!!! <br>';

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>