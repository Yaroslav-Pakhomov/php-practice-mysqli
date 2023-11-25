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

if ($_GET['date1'] && $_GET['date2']) {
    $date1 = $_GET['date1'];
    $date2 = $_GET['date2'];

    $arr_date1 = explode('-', $date1);
    $arr_date2 = explode('-', $date2);

    $date1_year = (int)$arr_date1[0];
    $date1_month = (int)$arr_date1[1];
    $date1_day = (int)$arr_date1[2];

    $date2_year = (int)$arr_date2[0];
    $date2_month = (int)$arr_date2[1];
    $date2_day = (int)$arr_date2[2];

    if (checkdate($date1_month, $date1_day, $date1_year) && checkdate($date2_month, $date2_day, $date2_year)) {

        echo '<br>';
        $timestamp_date1 = strtotime($_GET['date1']);
        $timestamp_date2 = strtotime($_GET['date2']);

        $quantity_days = ($timestamp_date2 - $timestamp_date1) / (60 * 60 * 24);

        echo 'От ' . $_GET['date1'] . ' до ' . $_GET['date2'] . ' - ' . $quantity_days . ' дней.';
    } else {
        echo 'Некорректные даты.';
    }
} else {
    echo 'Данных нет.';
}
