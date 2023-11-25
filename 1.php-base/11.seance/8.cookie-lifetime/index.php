<?php

declare(strict_types=1);

// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// выключение вывод всех ошибок
// error_reporting(0);
// ini_set('display_errors', 'off');

// Кодировка
mb_internal_encoding('UTF-8');

// Установим время жизни на сутки
setcookie('test', 'abcde', time() + 60 * 60 * 24);


echo "<br>";
echo "<br>";
echo "<br>";


// Установим время жизни на 5 минут
if (!isset($_COOKIE['five_minutes'])) {
    setcookie('five_minutes', 'five_minutes_time', time() + 60 * 5);
    $_COOKIE['five_minutes'] = 'five_minutes_time';
}
echo $_COOKIE['five_minutes'];
echo "<br>";

// Установим время жизни на 30 суток
if (!isset($_COOKIE['month'])) {
    setcookie('month', 'month_time', time() + 60 * 60 * 24 * 30);
    $_COOKIE['month'] = 'month_time';
}
echo $_COOKIE['month'];
echo "<br>";

// Установим время жизни на год
if (!isset($_COOKIE['year'])) {
    setcookie('year', 'year_time', time() + 60 * 60 * 24 * 365);
    $_COOKIE['year'] = 'year_time';
}
echo $_COOKIE['year'];
echo "<br>";


// Установим время жизни на 10 лет
if (!isset($_COOKIE['ten_year'])) {
    setcookie('ten_year', 'ten_year_time', time() + 60 * 60 * 24 * 365 * 10);
    $_COOKIE['ten_year'] = 'ten_year_time';
}
echo $_COOKIE['ten_year'];

// удаление куки
// setcookie('five_minutes', '', time());
// setcookie('month', '', time());
// setcookie('year', '', time());
// setcookie('ten_year', '', time());
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




