<?php

declare(strict_types=1);

// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');


// Кодировка
mb_internal_encoding('UTF-8');

function square(int $num): int {
    return $num ** 2;
}

function cube(int $num): int {
    return $num ** 3;
}
