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

$i = 1; // задаем какую-нибудь переменную
while ($i <= 5) {
    echo $i; // выводим содержимое $i в консоль
    $i++;    // увеличиваем $i на единицу при каждом проходе цикла
}
echo "<br>";

// Более сложный цикл

$i = 2;
while ($i <= 10) {
    echo $i;
    $i += 2; // увеличиваем $i на 2 при каждом проходе цикла
}
echo "<br>";

// Обратный отсчет

$i = 10; // начальное значение 10
while ($i >= 1) { // пока $i больше 1
    echo $i;
    $i--; // уменьшаем $i на единицу
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>