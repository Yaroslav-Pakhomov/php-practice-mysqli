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


try {
    echo array_sum(json_decode($_POST['json'], true, 512, JSON_THROW_ON_ERROR));
} catch (JsonException $e) {
}
