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

// Инициализируем сеанс
$curl = curl_init();


echo $_SERVER['HTTP_X_TEST'];

echo '<br>';
echo '<br>';

if ($_SERVER['HTTP_X_TEST'] === '12345') {
    echo 'result';
} else {
    echo 'error';
}

echo '<br>';
echo '<br>';
echo '<br>';


if ($_SERVER['HTTP_Y_TEST'] === '12345') {
    echo 'result = ' . $_SERVER['HTTP_Y_TEST'];
} else {
    echo 'error';
}

echo '<br>';
echo '<br>';
echo '<br>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Сайт test.loc</h1>
<p>Содержимое страницы index.</p>
</body>
</html>
