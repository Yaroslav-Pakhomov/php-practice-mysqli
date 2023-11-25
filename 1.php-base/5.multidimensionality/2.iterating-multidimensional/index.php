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

$arr = [['a', 'b', 'c'], ['d', 'e', 'f'], ['g', 'h', 'i'],];
foreach ($arr as $sub) {
    foreach ($sub as $elem) {
        echo $elem;
    }
}
echo "<br>";
echo "<br>";
echo "<br>";

$arr = [[1, 2, 3], [4, 5, 6, 7], [8, 9]];
$summ = 0;
foreach ($arr as $sub) {
    foreach ($sub as $elem) {
        $summ += $elem;
    }
}
echo $summ;
echo "<br>";
echo "<br>";
echo "<br>";

$arr = [[['a', 'b'], ['c', 'd'],], [['e', 'f'], ['g', 'h'],], [['i', 'j'], ['k', 'l'],],];
foreach ($arr as $sub) {
    foreach ($sub as $subsub) {
        foreach ($subsub as $elem) {
            echo $elem;
        }
    }
}
echo "<br>";
echo "<br>";
echo "<br>";

$arr = [[[1, 2, 3], [6, 7, 8], [3, 8, 4], [6, 7, 9],], [[9, 1, 2], [4, 5, 6],], [[9, 1, 2], [4, 5, 6], [5, 6, 3],],];
$summ = 0;
foreach ($arr as $sub) {
    foreach ($sub as $subsub) {
        foreach ($subsub as $elem) {
            $summ += $elem;
        }
    }
}
echo $summ;
echo "<br>";
echo "<br>";

$arr = ['user1' => ['name' => 'name1', 'age' => 31,], 'user2' => ['name' => 'name2', 'age' => 32,],];
foreach ($arr as $key1 => $sub) {
    foreach ($sub as $key2 => $elem) {
        echo $key1 . ' ' . $key2 . ' ' . $elem . '<br>';
    }
}
echo "<br>";
echo "<br>";

$arr = [['name' => 'user1', 'age' => 30, 'salary' => 1000,], ['name' => 'user2', 'age' => 31, 'salary' => 2000,], ['name' => 'user3', 'age' => 32, 'salary' => 3000,],];
foreach ($arr as $sub) {
    foreach ($sub as $key2 => $elem) {
        echo $key2 . ' - ' . $elem . '<br>';
    }
    echo '<br>';
    echo '<br>';
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$arr = ['group1' => ['user11', 'user12', 'user13', 'user43'], 'group2' => ['user21', 'user22', 'user23'], 'group3' => ['user31', 'user32', 'user33'], 'group4' => ['user41', 'user42', 'user43'], 'group5' => ['user51', 'user52'],];
foreach ($arr as $key1 => $sub) {
    foreach ($sub as $elem) {
        echo $key1 . ' - ' . $elem . '<br>';
    }
    echo '<br>';
    echo '<br>';
}

echo "<br>";
echo "<br>";

?>
