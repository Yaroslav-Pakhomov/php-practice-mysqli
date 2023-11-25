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
    echo $tag->elem;
    echo '<br>'; // 'text1', 'text2', 'text3'
}

echo '<br>';
echo '<br>';
echo '<br>';


// Выведите на экран имя и фамилию каждого юзера.
// <user>
//     <name>john</name>
//     <surn>smith</surn>
// </user>
// <user>
//     <name>eric</name>
//     <surn>wills</surn>
// </user>
// <user>
//     <name>kyle</name>
//     <surn>tail</surn>
// </user>

foreach ($xml->user as $user) {
    print_r($user);
    echo '<br>';
    echo $user->name;
    echo '<br>';
    echo $user->surn;
    echo '<br>';
    echo '<br>';
}


echo '<br>';
echo '<br>';
echo '<br>';


// Выведите на экран название, категорию, цену и количество каждого продукта.
// <product cost="100" amount="3">
//     <name>prod1</name>
//     <category>cat1</category>
// </product>
// <product cost="200" amount="4">
//     <name>prod2</name>
//     <category>cat2</category>
// </product>
// <product cost="300" amount="5">
//     <name>prod3</name>
//     <category>cat3</category>
// </product>

foreach ($xml->product as $product) {
    print_r($product);
    echo '<br>';
    echo $product->name;
    echo '<br>';
    echo $product->category;
    echo '<br>';
    echo $product['cost'];
    echo '<br>';
    echo $product['amount'];
    echo '<br>';
    echo '<br>';
}
