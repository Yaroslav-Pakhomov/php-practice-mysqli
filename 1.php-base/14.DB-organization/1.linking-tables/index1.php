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

// Запрос
$query = 'SELECT

u.id, u.`user_name`, c.`city_name`

FROM users AS u

INNER JOIN cities AS c

ON u.city_id = c.id';

$data = dataOutput($link, $query);
echo '<br>';

foreach ($data as $user) {
    echo 'ID пользователя - ' . $user['id'] . ', имя - ' . $user['user_name'] . ', город - ' . $user['city_name'] . '.';
    echo '<br>';
    echo '<br>';
}

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// Запрос
$query = 'SELECT

p.id, p.`product_title`, pc.`category_title`, p.`price`

FROM product_products AS p

INNER JOIN product_categories AS pc

ON p.category_id = pc.id';

$data = dataOutput($link, $query);

foreach ($data as $product) {
    echo 'ID товара - ' . $product['id'] . ', название - ' . $product['product_title'] . ', категория - ' . $product['category_title'] . ', цена - ' . round((float)$product['price'], 2) . '.';
    echo '<br>';
    echo '<br>';
}


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// Запрос
$query = 'SELECT

r.id, r.`rivers_title`, s.`seas_title`

FROM aqua_rivers AS r

INNER JOIN aqua_seas AS s

ON r.seas_id = s.id';

$data = dataOutput($link, $query);

foreach ($data as $aqua) {
    echo 'ID реки - ' . $aqua['id'] . ', название реки - ' . $aqua['rivers_title'] . ', название моря, в которое впадает - ' . $aqua['seas_title'] . '.';
    echo '<br>';
    echo '<br>';
}

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// Запрос

$query = 'SELECT

c_c.id, c_c.`city_title`, c_r.`region_title`, c.`country_title`

FROM country_cities AS c_c

INNER JOIN country_regions AS c_r

INNER JOIN country_countries AS c

ON c_c.region_id = c_r.id AND c_c.country_id = c.id';

// c_c.id, c_c.`city_title` AS 'Название города', c_r.`region_title` AS 'Название области', c.`country_title`  AS 'Название страны'

$data = dataOutput($link, $query);

foreach ($data as $city) {
    echo 'ID города - ' . $city['id'] . ', название города - ' . $city['city_title'] . ', название области города - ' . $city['region_title'] . ', название страны города - ' . $city['country_title'] . '.';
    echo '<br>';
    echo '<br>';
}
