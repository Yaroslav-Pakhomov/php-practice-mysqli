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

$arr = range($_GET['num1'], $_GET['num2']);
try {
    echo json_encode($arr, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}
