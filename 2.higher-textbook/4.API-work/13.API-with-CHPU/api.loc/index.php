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

$uri = $_SERVER['REQUEST_URI'];

if (preg_match('#^/2.higher-textbook/4.API-work/13.API-with-CHPU/api.loc/([0-9]+)/([0-9]+)/?$#', $uri, $match)) {


    print_r($match);
    echo '<br>';

    if (isset($match[1], $match[2])) {
        echo '<br>';
        try {
            echo random_int((int)$match[1], (int)$match[2]);
        } catch (Exception $e) {
        }
    } else {
        echo 'error';
    }
}

// echo '<br>';
// echo '<br>';
// echo '<br>';

// preg_match('#^/2.higher-textbook/4.API-work/13.API-with-CHPU/api.loc/index.php/leap/([0-9]+)/?$#', $uri, $match);

if (preg_match('#^/2.higher-textbook/4.API-work/13.API-with-CHPU/api.loc/leap/([0-9]+)/?$#', $uri, $match)) {

    print_r($match);
    echo '<br>';

    if (isset($match[1])) {
        echo '<br>';
        echo (int)$match[1];
    } else {
        echo 'error';
    }
}


if (preg_match('#^/2.higher-textbook/4.API-work/13.API-with-CHPU/api.loc/diff/([0-9]+)/([0-9]+)/?$#', $uri, $match)) {

    print_r($match);
    echo '<br>';

    if (isset($match[1], $match[2])) {
        echo '<br>';
        echo (int)$match[2] - (int)$match[1] . ' - разница между годами.';
    } else {
        echo 'error';
    }

}
