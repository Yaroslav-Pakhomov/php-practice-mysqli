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

$dates = [
    '01.01 - Новый год',
    '23.02 - День защитника Отечества',
    '08.03 - Международный женский день',
    '01.05 - День весны и труда',
    '09.05 - День Победы',
    '12.06 - День России	',
    '04.11 - День народного единства в России',
    '19.11 - День ракетных войск и артиллерии',
    '12.12 - День Конституции РФ',
];


try {
    echo json_encode($dates, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}
