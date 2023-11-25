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


header('Content-Type: application/json'); // укажем MIME


$historical_events = [
    '02.02.1943' => 'Cталинградская битва окончание',
    '06.08.1915' => 'Атака мертвецов Осовец',
    '03.07.965'  => 'Победа Святослава над Хазарским каганатом',
    '7528'       => 'Сотворения Мира в Звездном Храме в день осеннего равноденствия',
];

try {
    $historical_dates = json_decode($_POST['json'], false, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}

// print_r($historical_dates);

foreach ($historical_dates as $historical_date) {
    echo $historical_events[$historical_date] . ' - ' . $historical_date;
    echo '<br>';
    echo '<br>';
}
