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

if ('3' == 3) {
    echo '+'; // сработает это - значения равны
} else {
    echo '-';
}
echo "<br>";

if ('3' === 3) {
    echo '+';
} else {
    echo '-'; // сработает это, тк значения не равны по типу
}
echo "<br>";

if ('3' === '3') {
    echo '+'; // сработает это
} else {
    echo '-';
}
echo "<br>";

if (3 === 3) {
    echo '+'; // сработает это
} else {
    echo '-';
}
echo "<br>";

if (2 === 3) {
    echo '+';
} else {
    echo '-'; // сработает это
}
echo "<br>";

// Неравенство по значению и типу

if (3 != 3) {
    echo '+';
} else {
    echo '-'; // сработает это, так как значения равны
}
echo "<br>";

if ('3' != 3) {
    echo '+';
} else {
    echo '-'; // сработает это, так как значения равны
}
echo "<br>";

if (3 !== 3) {
    echo '+';
} else {
    echo '-'; // сработает это, так как значения и типы равны
}
echo "<br>";

if ('3' !== 3) {
    echo '+'; // сработает это, так как значения равны, а типы НЕ равны
} else {
    echo '-';
}
echo "<br>";

if ('3' !== 3) {
    echo '+'; // сработает это, так как значения равны, а типы НЕ равны
} else {
    echo '-';
}
echo "<br>";

// Нюансы

if (0 == '') {
    echo '+'; // сработает это
} else {
    echo '-';
}
var_dump(0, '');
echo "<br>";

if (0 == '0') {
    echo '+'; // сработает это
} else {
    echo '-';
}
var_dump(0, '0');
echo "<br>";

?>