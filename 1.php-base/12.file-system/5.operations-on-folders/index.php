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

// Создание папки
if (!file_exists('dir')) {
    throw new RuntimeException(sprintf('Directory "%s" was not created', 'dir'));
}
// mkdir('dir');
echo "<br>";
echo "<br>";
echo "<br>";

if (!file_exists('test')) {
    throw new RuntimeException(sprintf('Directory "%s" was not created', 'test'));
}
for ($i = 1; $i <= 3; $i++) {
    file_put_contents('test/' . $i . '.txt', '');
}
echo "<br>";
echo "<br>";
echo "<br>";

// Удаление папок
// if (file_exists('dir')) {
// rmdir('dir');
// }
// rmdir('test');
echo "<br>";
echo "<br>";
echo "<br>";

// Переименование и перемещение папок

// переименуем одну папку на другую
if (!file_exists('new')) {
    rename('dir', 'new');
}
// выполним перемещение папки, одновременно переименовав ее
// rename('old', 'dir/new');
echo "<br>";
echo "<br>";
echo "<br>";


$files = array_diff(scandir(__DIR__ . '\test'), ['..', '.']);
print_r($files);
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




