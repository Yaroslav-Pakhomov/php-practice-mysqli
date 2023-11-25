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

// Чтение файла

// Функция file_get_contents позволяет выполнять чтение файла. Параметром функция принимает имя файла, а своим результатом возвращает текст этого файла.
echo file_get_contents('text.txt');
echo "<br>";
echo "<br>";
echo "<br>";

$x_1 = (int)file_get_contents('1.txt');
$x_2 = (int)file_get_contents('2.txt');
echo $x_1 + $x_2;
echo "<br>";
echo "<br>";
echo "<br>";


// Запись файла
// Для записи данных в файл предназначена функция file_put_contents. Первым параметром принимает путь к файлу, а вторым - текст, который мы хотим записать.
$arr = range(1, 24);
file_put_contents('test.txt', print_r($arr, true));
file_put_contents('summa.txt', array_sum($arr));
echo "<br>";
echo "<br>";
echo "<br>";

// Комбинация операций
$text = file_get_contents('test.txt');
file_put_contents('test.txt', $text . '!');
echo "<br>";
echo "<br>";
echo "<br>";

$number = (int)file_get_contents('3.txt');
echo $number;
file_put_contents('3.txt', $number ** 2);
echo "<br>";
echo "<br>";
echo "<br>";

$counter = (int)file_get_contents('count.txt');
$counter++;
echo $counter;
file_put_contents('count.txt', $counter);
echo "<br>";
echo "<br>";
echo "<br>";

$arr_file = ['1.txt', '2.txt', '3.txt'];
$content = '';
foreach ($arr_file as $file) {
    $content .= file_get_contents($file) . ', ';
}
file_put_contents('4.txt', $content);
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




