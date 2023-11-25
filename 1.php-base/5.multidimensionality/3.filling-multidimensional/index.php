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

$arr = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $arr[$i][$j] = $j + 1; // заполняем подмассив числами
    }
}
print_r($arr);
echo "<br>";
echo "<br>";
echo "<br>";

$arr = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $arr[$i][$j] = $j + 1; // заполняем подмассив числами
    }
}
print_r($arr);
echo "<br>";
echo "<br>";
echo "<br>";

$arr = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $arr[$i][$j] = 'x'; // заполняем подмассив числами
    }
}
print_r($arr);
echo "<br>";
echo "<br>";
echo "<br>";

$arr = [];
for ($z = 0; $z < 3; $z++) {
    for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $arr[$z][$i][$j] = $j + 1; // заполняем подмассив числами
        }
    }
}
echo '<pre>';
print_r($arr);
echo '</pre>';
echo "<br>";
echo "<br>";

// Заполнение числами по порядку
// Для этого нужно сделать специальную переменную-счетчик, которая будет увеличивать свое значение на 1 при каждой итерации внутреннего цикла.
// [[1, 2, 3], [4, 5, 6], [7, 8, 9]]
$arr = [];
$k = 1; // счетчик
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $arr[$i][$j] = $k; // записываем счетчик
        $k++; // увеличиваем счетчик
    }
}
var_dump($arr);
echo "<br>";
echo "<br>";

$arr = [];
for ($i = 0, $k = 1; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++, $k++) {
        $arr[$i][$j] = $k;
    }
}
var_dump($arr);
echo "<br>";
echo "<br>";

$arr = [];
for ($i = 0, $k = 1; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $arr[$i][$j] = $k++;
    }
}
var_dump($arr);
echo "<br>";
echo "<br>";
echo "<br>";

$arr = [];
for ($i = 0, $k = 1; $i < 4; $i++) {
    for ($j = 0; $j < 2; $j++, $k++) {
        $arr[$i][$j] = $k;
    }
}
echo '<pre>';
print_r($arr);
echo '</pre>';
echo "<br>";
echo "<br>";
echo "<br>";

$arr = [];
for ($i = 0, $k = 2; $i < 4; $i++) {
    for ($j = 0; $j < 3; $j++, $k += 2) {
        $arr[$i][$j] = $k;
    }
}
echo '<pre>';
print_r($arr);
echo '</pre>';
echo "<br>";
echo "<br>";
echo "<br>";

$arr = [];
for ($z = 0, $k = 1; $z < 2; $z++) {
    for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 2; $j++, $k++) {
            $arr[$z][$i][$j] = $k;
        }
    }
}
echo '<pre>';
print_r($arr);
echo '</pre>';
echo "<br>";
echo "<br>";
echo "<br>";

?>
