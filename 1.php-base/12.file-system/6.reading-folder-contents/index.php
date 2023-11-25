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

// Чтение содержимого папки в PHP
// $files = scandir(__DIR__);
// print_r($files);
echo "<br>";
echo "<br>";
echo "<br>";

// Важный нюанс
// В массиве с результатом функция scandir также покажет наличие папок с именами ".." и ".". Технически первое имя соответствует ссылке на родительскую папку, а второе - на текущую.
//
// Эти имена лучше убрать из массива с результатом. Делается это следующим образом:
// $files = scandir(__DIR__);
// $files = array_diff($files, ['..', '.']);
// print_r($files);
echo "<br>";
echo "<br>";
echo "<br>";

// Можно упростить:
$files = array_diff(scandir(__DIR__), ['..', '.']);
print_r($files);
echo "<br>";
echo "<br>";
echo "<br>";

$files = array_diff(scandir(__DIR__ . '\test'), ['..', '.']);
// $files = array_diff(scandir(__DIR__.'\test'), ['..', '.']);
print_r($files);
echo "<br>";
echo "<br>";
echo "<br>";
// Пусть в корне вашего сайта лежит папка test, а в ней какие-то текстовые файлы. Переберите эти файлы циклом, откройте каждый из них и запишите в конец восклицательный знак.
foreach ($files as $file) {
    $content = file_get_contents('test\\' . $file) . ' ';
    file_put_contents('test\\' . $file, $content . '! ');
}

// echo __DIR__.'\test' ;
// Пусть в корне вашего сайта лежит папка test, а в ней какие-то текстовые файлы. Переберите эти файлы циклом и выведите их тексты в браузер.
foreach ($files as $file) {
    echo file_get_contents('test\\' . $file) . '<br>';
}
echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";




