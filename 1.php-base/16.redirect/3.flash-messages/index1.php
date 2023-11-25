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

// Такое название выбрано потому, что сообщение должно показаться только один раз, а при обновлении страницы исчезнуть.
session_start();

// if (isset($_SESSION['flash'])) {
//     echo $_SESSION['flash'];
//     unset($_SESSION['flash']);
// }

if (!empty($_SESSION['flash'])) {
    foreach ($_SESSION['flash'] as $flash) {
        echo $flash . '<br>';
    }

    $_SESSION['flash'] = []; // очистим сообщения
}
