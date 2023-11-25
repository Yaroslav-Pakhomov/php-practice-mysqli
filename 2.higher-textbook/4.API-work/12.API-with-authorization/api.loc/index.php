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

$token = '12345';

// print_r($_GET);

// echo '<br>';
// echo '<br>';
// echo '<br>';
// echo '<br>';

if (isset($_GET['token']) && $_GET['token'] === $token) {
    if (isset($_GET['num'])) {
        echo $_GET['num'] ** 2;
    } else {
        echo 'error';
    }
    echo '<br>';
}
// else {
//     echo 'incorrect token';
//     echo '<br>';
// }


$token = '13315';

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = 'root';          // пароль
$name = 'db_organization';      // имя базы данных

// Подключение
$link = mysqli_connect($host, $user, $pass, $name);

/**
 * Функция для проверки и отладки запросов, возвращает массив данных
 *
 * @param false|mysqli $link подключение
 * @param string $query запрос
 *
 * @return array $data массив данных
 */
function dataOutput(false|mysqli $link, string $query): array {
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    //    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {
    //    }
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}


if (isset($_SERVER['HTTP_X_TOKEN']) && $_SERVER['HTTP_X_TOKEN'] === $token) {
    // echo 'result HTTP_X_TOKEN - ' . ' ' . $_SERVER['HTTP_X_TOKEN'];
    // echo '<br>';

    if (isset($_GET['token_birth']) && $_GET['token_birth'] === $token) {
        if (isset($_POST['json'])) {
            try {
                $json = json_decode($_POST['json'], false, 512, JSON_THROW_ON_ERROR);
            } catch (JsonException $e) {
            }

            // print_r($json);

            $arr_birth = explode('.', $json->birth);

            $birth_day = $arr_birth[2];
            $birth_month = $arr_birth[1];

            $current_year = date('Y');

            $current_date = time();
            $birth_date = (int)strtotime($current_year . '-' . $birth_month . '-' . $birth_day . 'T00:00:00 UTC');

            $remain_time = $birth_date - $current_date;

            $remain_day = $remain_time / (60 * 60 * 24);
            if ($remain_time > 0) {
                echo 'До Вашего Дня Рождения осталось: ' . ceil($remain_day) . ' дн.';
            } else {
                echo 'Ваше День Рождение прошло ' . abs(ceil($remain_day)) . ' дн. назад.';
            }
            echo '<br>';
        } else {
            echo 'error';
        }
    } else {
        echo 'incorrect GET token';
    }
} else {
    echo 'error header token';
    echo '<br>';
}
