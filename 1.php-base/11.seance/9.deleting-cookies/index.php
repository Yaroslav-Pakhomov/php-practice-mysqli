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

// В PHP нет встроенного механизма для удаления кук. Поэтому удаляют куки хитрым способом - устанавливая время 'смерти' куки на текущий момент:
if (!isset($_COOKIE['ten_year'])) {
    setcookie('ten_year', 'ten_year_time', time() + 60 * 60 * 24 * 365 * 10);
    $_COOKIE['ten_year'] = 'ten_year_time';
}
echo $_COOKIE['ten_year'];

// Удаление кук
// setcookie('test', '', time());
// setcookie('ten_year', '', time());
echo "<br>";
echo "<br>";
echo "<br>";

// Хитрый прием
if (isset($_COOKIE['test'])) {
    setcookie('test', '', time()); // удаляем куку в браузер
    unset($_COOKIE['test']); // удаляем $_COOKIE конкретно в данном запуске PHP файла
}

if (isset($_COOKIE['ten_year'])) {
    setcookie('ten_year', '', time());
    unset($_COOKIE['ten_year']);
}

echo $_COOKIE['ten_year'];
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


echo "<br>";
echo "<br>";
echo "<br>";




