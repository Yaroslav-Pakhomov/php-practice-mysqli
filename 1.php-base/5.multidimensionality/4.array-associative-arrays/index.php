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

$users = [['name' => 'user1', 'age' => 31, 'salary' => 1000,], ['name' => 'user2', 'age' => 32, 'salary' => 2000,], ['name' => 'user3', 'age' => 33, 'salary' => 3000,],];
$users[] = ['name' => 'name4', 'age' => 34, 'salary' => 4000,];
foreach ($users as $user) {
    echo $user['name'] . ': ' . $user['salary'] . '$, ' . $user['age'] . '<br>';
}
echo "<br>";
echo "<br>";
echo "<br>";

$products = [['name' => 'мясо', 'price' => 100, 'amount' => 5,], ['name' => 'овощи', 'price' => 200, 'amount' => 6,], ['name' => 'фрукты', 'price' => 300, 'amount' => 7,],];
$products[] = ['name' => 'молоко', 'price' => 50, 'amount' => 15,];
echo '<table style="border:1px solid #000">';
foreach ($products as $product) {
    echo '<tr style="border:1px solid #000">';
    echo '<td style="border:1px solid #000; padding:5px">' . $product['name'] . '</td>';
    echo '<td style="border:1px solid #000; padding:5px">' . $product['price'] . '</td>';
    echo '<td style="border:1px solid #000; padding:5px">' . $product['amount'] . '</td>';
    echo '</tr>';
}
echo '</table>';

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

?>
