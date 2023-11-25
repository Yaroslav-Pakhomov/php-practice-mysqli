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

$arr = [[1, 2], [3, 4], [5, 6]];
$summ = 0;
$globLength = count($arr);
for ($i = 0; $i < $globLength; $i++) {
    $locLength = count($arr[$i]);
    for ($j = 0; $j < $locLength; $j++) {
        $summ += $arr[$i][$j];
    }
}
echo $summ;
echo "<br>";
echo "<br>";
echo "<br>";

$arr = [[[1, 2], [3, 4],], [[5, 6], [7, 8],],];
$summ = 0;
$globLength = count($arr);
for ($i = 0; $i < $globLength; $i++) {
    $locLength = count($arr[$i]);
    for ($j = 0; $j < $locLength; $j++) {
        $thirdLength = count($arr[$i][$j]);
        for ($z = 0; $z < $thirdLength; $z++) {
            $summ += $arr[$i][$j][$z];
        }
    }
}
echo $summ;
echo "<br>";
echo "<br>";
echo "<br>";

$arr = ['user1' => ['name' => 'name1', 'age' => 31,], 'user2' => ['name' => 'name2', 'age' => 32,],];
echo $arr['user2']['name']; // выведет 'name2'

echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>