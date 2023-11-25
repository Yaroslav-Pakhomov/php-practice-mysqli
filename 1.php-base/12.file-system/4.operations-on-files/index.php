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

// Переименовывание
// rename('test.txt', 'new test.txt');
// rename('old.txt', 'new.txt');
echo "<br>";
echo "<br>";
echo "<br>";

// Перемещение
// rename('test.txt', 'dir/new.txt'); перенесем наш файл в папку dir, одновременно переименовав его на new.txt:
// rename('new.txt', 'dir/new.txt'); // только перемещение, а сам файл не переименовываем
// rename('test.txt', 'dir/new.txt');
// rename('dir1/file.txt', 'dir1/dir2/file.txt');
echo "<br>";
echo "<br>";
echo "<br>";

// Копирование
// copy('file.txt', 'file copy.txt');
// copy('file.txt', 'dir/file copy.txt');
echo "<br>";
echo "<br>";
echo "<br>";
// С помощью цикла положите в папку dir1 пять копий файла 'file.txt'. Именем файлов копий пусть будут их порядковые номера.
// for ($i = 1; $i <= 5; $i++) {
//     copy('file.txt', 'dir1/file copy '.$i.'.txt');
// }

echo "<br>";
echo "<br>";
echo "<br>";

// Удаление
// unlink('file copy.txt');
// Пусть в корне вашего сайта лежат файлы 1.txt, 2.txt и 3.txt. Вручную сделайте массив с именами этих файлов. Переберите его циклом и удалите все эти файлы.
// $arr_file = ['1.txt', '2.txt', '3.txt',];
// foreach ($arr_file as $file) {
//    unlink("$file");
// }
echo "<br>";
echo "<br>";
echo "<br>";

// Размер файла в байтах
echo filesize('file.txt');
// в килобайты
// echo filesize('test.txt') / 1024;
// в мегабайтах
// echo filesize('test.txt') / (1024 * 1024);
// в гигабайтах
// echo filesize('test.txt') / (1024 * 1024 * 1024);
echo "<br>";
echo "<br>";
echo "<br>";

echo filesize('DL.jpg') / (1024 * 1024);
echo "<br>";
echo "<br>";
echo "<br>";

// Проверка существования
if (file_exists('file.txt')) {
    echo filesize('file.txt');
} else {
    echo 'файла не существует';
}
echo "<br>";
echo "<br>";
echo "<br>";

if (file_exists('test.txt')) {
    echo filesize('test.txt');
} else {
    file_put_contents('test.txt', '!');
    echo 'файл создан';
}
echo "<br>";
echo "<br>";
echo "<br>";

if (file_exists('new test.txt')) {
    echo file_get_contents('new test.txt');
} else {
    file_put_contents('test.txt', '!');
    echo 'файл создан';
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




