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


// header('Location: https://ya.ru');
// header('Location: https://code.mu');
// die();

if (!empty($_POST)) {
    echo $_POST['num1'] + $_POST['num2'];
    echo '<br>';
    echo '<br>';
    try {
        echo json_encode($_POST, JSON_THROW_ON_ERROR);
    } catch (JsonException $e) {
    }
} else {
    echo 'Error - нет POST-запроса.';
}

echo '<br>';
echo '<br>';
echo '<br>';

if (!empty($_COOKIE)) {
    echo $_COOKIE['num1'] + $_COOKIE['num2'];
    echo '<br>';
    echo '<br>';
    try {
        echo json_encode($_COOKIE, JSON_THROW_ON_ERROR);
    } catch (JsonException $e) {
    }
} else {
    echo 'error - нет COOKIES';
}

echo '<br>';
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
