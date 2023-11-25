<meta charset="utf-8">
<?php
// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// выключение вывод всех ошибок
// error_reporting(0);
// ini_set('display_errors', 'off');

// Кодировка
mb_internal_encoding('UTF-8');

// Цикл
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 2; $j++) {
        echo '1-й цикл: ' . $i . ' 2-й цикл: ' . $j . '<br>';
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

//Массивы
$arr = [1, 2, 3, 4, 5];
foreach ($arr as $elem) {
    echo 'xxx ' . $elem . ' yyy <br>';
}
echo "<br>";
echo "<br>";
echo "<br>";

//Ассоциативные массивы
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
foreach ($arr as $key => $elem) {
    echo 'pair: key - ' . $key . ' elem - ' . $elem . '<br>';
}
echo "<br>";
echo "<br>";
echo "<br>";

// Многомерные массивы
$users = [
    [
        'name' => 'user1',
        'age'  => 30,
    ],
    [
        'name' => 'user2',
        'age'  => 31,
    ],
    [
        'name' => 'user3',
        'age'  => 32,
    ],
];
foreach ($users as $user) {
    echo $user['name'] . ': ' . $user['age'] . '<br>';
}
echo "<br>";
echo "<br>";
foreach ($users as $user) {
    echo "{$user['name']}: {$user['age']}<br>";
}
echo "<br>";
echo "<br>";
foreach ($users as $user) {
    echo "$user[name]: $user[age]<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

$products = [
    [
        'name'   => 'product-1',
        'price'  => 100,
        'amount' => 5,
    ],
    [
        'name'   => 'product-2',
        'price'  => 200,
        'amount' => 6,
    ],
    [
        'name'   => 'product-3',
        'price'  => 300,
        'amount' => 7,
    ],
];

foreach ($products as $product) {
    echo 'Наименование: ' . $product['name'] . '; цена: ' . $product['price'] . '; количество: ' . $product['amount'] . ' <br>';
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

?>
