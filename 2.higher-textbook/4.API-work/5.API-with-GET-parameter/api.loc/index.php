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


// выбранная дата, либо текущая
if ($_GET['timestamp']) {
    echo date('d/m/Y', (int)$_GET['timestamp']);
} else {
    echo date('d/m/Y');
}


// echo '<br>';

// echo date('H:i');
