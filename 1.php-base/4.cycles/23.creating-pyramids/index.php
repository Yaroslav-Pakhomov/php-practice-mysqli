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

$str = '';
for ($i = 0; $i < 5; $i++) {
    $str .= 'x';
    echo $str . '<br>';
}
echo "<br>";
echo "<br>";
echo "<br>";

$str = '';
for ($i = 0; $i < 5; $i++) {
    $str .= 'xx';
    echo $str . '<br>';
}
echo "<br>";
echo "<br>";

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo $i; // выводит '111', потом '222', потом '333' и так далее
    }
    echo '<br>';
}
echo "<br>";
echo "<br>";

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i;
    }

    echo '<br>';
}
echo "<br>";
echo "<br>";

for ($i = 1; $i <= 9; $i++) {
    $str = ''; // каждый раз зачищаем строку

    for ($j = 1; $j <= $i; $j++) {
        $str .= $i;
    }

    echo $str . '<br>';
}
echo "<br>";
echo "<br>";

for ($i = 1; $i <= 9; $i++) {
    $str = ''; // каждый раз зачищаем строку

    for ($j = 1; $j <= $i; $j++) {
        $str .= $i;
    }
    $i++;
    echo $str . '<br>';
}
echo "<br>";

for ($i = 5; $i >= 1; $i--) {
    $str = '';

    for ($j = 0; $j < $i; $j++) {
        $str .= 'x';
    }

    echo $str . '<br>';
}
echo "<br>";
echo "<br>";

for ($i = 5; $i >= 1; $i--) {
    $str = '';

    for ($j = 0; $j < $i; $j++) {
        $str .= 'xx';
    }

    echo $str . '<br>';
}
echo "<br>";
echo "<br>";

for ($i = 9; $i >= 1; $i--) {
    $str = ''; // каждый раз зачищаем строку

    for ($j = 1; $j <= $i; $j++) {
        $str .= $i;
    }
    echo $str . '<br>';
}
echo "<br>";
echo "<br>";
echo "<br>";

?>