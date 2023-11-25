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


// Ошибки парсера JSON. Ошибки парсера при разборе JSON
$incorrect_json = '["a", "b", "c",]';

try {
    $incorrect_data = json_decode($incorrect_json, false, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
} // выведет null

var_dump($incorrect_data);

echo '<br>';
echo '<br>';

// При возникновении ошибок, метод json_last_error при вызове выдаст номер этой ошибки
$error = json_last_error();

var_dump($error); // номер ошибки

echo '<br>';
echo '<br>';

echo match (json_last_error()) {
    JSON_ERROR_NONE => 'ошибок нет',
    JSON_ERROR_DEPTH => 'достигнута максимальная глубина стека',
    JSON_ERROR_STATE_MISMATCH => 'некорректные разряды или несоответствие режимов',
    JSON_ERROR_CTRL_CHAR => 'некорректный управляющий символ',
    JSON_ERROR_SYNTAX => 'синтаксическая ошибка, некорректный JSON',
    JSON_ERROR_UTF8 => 'некорректные символы UTF-8, возможно неверно закодирован',
    default => 'неизвестная ошибка',
};
