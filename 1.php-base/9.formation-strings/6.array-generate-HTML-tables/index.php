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

$arr = [
    ['name' => 'user1', 'age' => 30, 'salary' => 500],
    ['name' => 'user2', 'age' => 31, 'salary' => 600],
    ['name' => 'user3', 'age' => 32, 'salary' => 700],
];
echo '<table>';
echo '<tr>';
echo '<td>Name</td>';
echo '<td>Age</td>';
echo '<td>Salary</td>';
echo '</tr>';
foreach ($arr as $tr) {
    echo '<tr>';
    echo '<td>' . $tr['name'] . '</td>';
    echo '<td>' . $tr['age'] . '</td>';
    echo '<td>' . $tr['salary'] . '</td>';
    echo '</tr>';
}
echo '</table>';
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo '<table>';
echo '<tr>';
echo '<td>Name</td>';
echo '<td>Age</td>';
echo '<td>Salary</td>';
echo '</tr>';
foreach ($arr as $row) {
    echo '<tr>';
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo '</tr>';
}
echo '</table>';
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo '<table>';
echo '<tr>';
echo '<td>Name</td>';
echo '<td>Age</td>';
echo '<td>Salary</td>';
echo '</tr>';
foreach ($arr as $row) {
    echo '<tr>';
    foreach ($row as $key => $cell) {
        if ($key === 'salary') {
            echo "<td>$cell dollars</td>";
        } else {
            echo "<td>$cell</td>";
        }
    }
    echo '</tr>';
}
echo '</table>';
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo '<table>';
echo '<tr>';
echo '<td>Name</td>';
echo '<td>Age</td>';
echo '<td>Salary</td>';
echo '</tr>';
foreach ($arr as $row) {
    echo '<tr>';
    foreach ($row as $key => $cell) {
        if ($key === 'salary') {
            $cell .= ' dollars';
        }

        echo "<td>$cell</td>";
    }
    echo '</tr>';
}
echo '</table>';
echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";

$products = [
    [
        'name'   => 'product1',
        'price'  => 100,
        'amount' => 5,
    ],
    [
        'name'   => 'product2',
        'price'  => 200,
        'amount' => 6,
    ],
    [
        'name'   => 'product3',
        'price'  => 300,
        'amount' => 7,
    ],
];
echo '<table>';
echo '<tr>';
echo '<td>Наименование</td>';
echo '<td>Цена</td>';
echo '<td>Количество</td>';
echo '</tr>';
foreach ($products as $product) {
    echo '<tr>';
    foreach ($product as $parameter => $value) {
        if ($parameter === 'price') {
            $value .= ' руб.';
        }
        if ($parameter === 'amount') {
            $value .= ' шт.';
        }
        echo '<td>' . $value . '</td>';
    }
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

?>
