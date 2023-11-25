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

// При первом заходе в $_COOKIE для нашей куки будет null, а при уже обновлении страницы - значение куки.
// Для того чтобы установленная кука сразу появилась в массиве $_COOKIE можно использовать хитрый прием.
// Чтобы кука каждый раз не отправлялась в браузер, можно запись куки сделать внутри условия. Если такой куки нет, то запишем ее:

if (!isset($_COOKIE['str'])) { // если куки нет
    setcookie('str', 'eee'); // записывает куку в браузер
    $_COOKIE['str'] = 'eee'; // добавляет $_COOKIE конкретно в данном запуске PHP файла
}

// В коде хитрого приема обе строчки кода важны - первая записывает куку в браузер, а вторая - добавляет $_COOKIE конкретно в данном запуске PHP файла.

// То есть, если просто записать что-то в массив $_COOKIE, это не запишет куку в браузер: $_COOKIE['str'] = 'eee';

echo $_COOKIE['str']; // выведет 'eee'
echo "<br>";
echo "<br>";
echo "<br>";

// Давайте сделаем счетчик обновления страницы:
if (!isset($_COOKIE['counter'])) { // первый заход на страницу
    setcookie('counter', 1);
    $_COOKIE['counter'] = 1;
} else {
    setcookie('counter', (string)++$_COOKIE['counter']);
}

echo $_COOKIE['counter'];
echo "<br>";
echo "<br>";
echo "<br>";

if (!isset($_COOKIE['time'])) {
    setcookie('time', (string)time());
    $_COOKIE['time'] = time();
} else {
    $second = time() - $_COOKIE['time'];
}
if (!empty($second)) {
    $minutes = floor($second / 60);
    if ($minutes > 0) {
        echo 'Пользователь ' . $minutes . ' минут на сайте.';
    } else {
        echo 'Пользователь ' . $second . ' секунд на сайте.';
    }
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




