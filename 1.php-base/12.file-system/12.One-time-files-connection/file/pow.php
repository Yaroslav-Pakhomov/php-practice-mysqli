<?php

declare(strict_types=1);

// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');


// Кодировка
mb_internal_encoding('UTF-8');

function square($num): int {
    return $num ** 2;
}

function cube($num): int {
    return $num ** 3;
}
