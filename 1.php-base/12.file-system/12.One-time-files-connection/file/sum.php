<?php

declare(strict_types=1);

// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');


// Кодировка
mb_internal_encoding('UTF-8');

require_once 'pow.php';

function squareSum($arr): int {
    $res = 0;

    foreach ($arr as $elem) {
        $res += square($elem);
    }

    return $res;
}

function cubeSum($arr): int {
    $res = 0;

    foreach ($arr as $elem) {
        $res += cube($elem);
    }

    return $res;
}
