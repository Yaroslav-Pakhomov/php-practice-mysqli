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

// функция simplexml_load_file загружает xml
$xml = simplexml_load_string(file_get_contents('test.xml'));

print_r($xml);

echo '<br>';
echo '<br>';

foreach ($xml->tag as $tag) {
    print_r($tag);
    echo '<br>';
    echo $tag;
    echo '<br>';
    echo $tag['attr'];
    echo '<br>';
    echo '<br>';
}

echo '<br>';
echo '<br>';
echo '<br>';

// Выведите на экран название, цену и количество каждого продукта.
// <root>
// 	<product cost="100" amount="3">
// 		prod1
// 	</product>
// 	<product cost="200" amount="4">
// 		prod2
// 	</product>
// 	<product cost="300" amount="5">
// 		prod3
// 	</product>
// </root>

foreach ($xml->product as $product) {
    print_r($product);
    echo '<br>';
    echo $product;
    echo '<br>';
    echo $product['cost'];
    echo '<br>';
    echo $product['amount'];
    echo '<br>';
    echo '<br>';
}
