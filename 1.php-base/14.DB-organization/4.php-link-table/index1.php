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

// Данные для подключения
$host = 'localhost';            // имя хоста
$user = 'root';                 // имя пользователя
$pass = 'root';                 // пароль
$name = 'db_organization';      // имя базы данных


// Подключение
$link = mysqli_connect($host, $user, $pass, $name);

/**
 * Функция для проверки и отладки запросов, возвращает массив данных
 *
 * @param mysqli $link подключение
 * @param string $query запрос
 * @return array $data массив данных
 */
function dataOutput(mysqli $link, string $query): array {
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}

// Получение данных из связанных таблиц в PHP

// SELECT поля FROM имя_таблицы
// 	LEFT JOIN имя_связанной_таблицы ON условие_связи
// WHERE условие_выборки


// Отдельные части синтаксиса этой команды:

// Поля:
// SELECT users.*, cities.* - выбираем данные из всех таблиц, SELECT users.name, cities.name as city_name - можно перечислить нужные нам поля с указанием имени таблицы перед ними, для решения проблемы нужно конфликтные имена переименовывать через команду as.

// Связь:
// ON cities.id=users.city_id - после команды ON мы должны указать поля из двух таблиц, по которым осуществляется связь. В нашем случае это будет поле id из таблицы с городами и поле city_id из таблицы с юзерами


// Запрос
$query = 'SELECT

example_users.user_name as user_name, example_shop.shop_title as shop_title

FROM example_users

INNER JOIN example_shop

INNER JOIN example_users_shop

ON example_users_shop.shop_id = example_shop.id

ON example_users_shop.user_id = example_users.id';


$data = dataOutput($link, $query);

$res = [];

foreach ($data as $elem) {
    $res[$elem['user_name']][] = $elem['shop_title'];
}

// print_r($res);

echo '<br>';
echo '<br>';
echo '<br>';

foreach ($res as $user => $shops) {
    echo 'Имя - ' . $user . ', <br> посещаемые магазины: <br> ';
    foreach ($shops as $shop) {
        echo '			' . $shop . '<br>';
    }
    echo '<br>';
    echo '<br>';
}

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


// Запрос
$query = 'SELECT

pp.`product_title`, ppar.`parameter_title`

FROM product_products AS pp

INNER JOIN product_parameter AS ppar

INNER JOIN product_products_parameter AS ppp

ON ppp.parameter_id = ppar.id

ON ppp.product_id = pp.id';


$data = dataOutput($link, $query);

$res = [];

foreach ($data as $elem) {
    $res[$elem['product_title']][] = $elem['parameter_title'];
}

// print_r($res);

echo '<ul>';
foreach ($res as $product => $parameters) {
    echo '<li>';
    echo $product . ': ' . implode(', ', $parameters) . '.';
    echo '</li>';
    echo '<br>';
}
echo '</ul>';

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
