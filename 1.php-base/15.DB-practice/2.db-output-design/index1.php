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
 * @param false|mysqli $link подключение
 * @param string $query запрос
 *
 * @return array $data массив данных
 */
function dataOutput(false|mysqli $link, string $query): array {
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {
    }

    return $data;
}

// Запрос
$query = 'SELECT * FROM example_users';

$data = dataOutput($link, $query);
?>
<?php foreach ($data as $elem) : ?>
    <p>
        <b><?= $elem['user_name'] ?></b>
        <b><?= $elem['user_age'] ?></b>
        <b><?= round((float)$elem['user_salary'], 2) ?></b>
    </p>
<?php endforeach; ?>

<br>
<br>

<?php
$result = '';

foreach ($data as $elem) {
    $result .= '<p>';

    $result .= '<b>' . $elem['user_name'] . '</b> ';
    $result .= ' <b>' . $elem['user_age'] . '</b> ';
    $result .= ' <b>' . round((float)$elem['user_salary'], 2) . '</b>';

    $result .= '</p>';
}

echo $result;
?>

<br>
<br>

<?php foreach ($data as $elem) : ?>
    <div>
        <h2><?= $elem['user_name'] ?></h2>
        <p>
            <?= $elem['user_age'] ?> years, <b><?= round((float)$elem['user_salary'], 2) ?>$</b>
        </p>
    </div>
<?php endforeach; ?>

<br>
<br>

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>salary</th>
    </tr>
    <?php foreach ($data as $elem) : ?>
        <tr>
            <th><?= $elem['id'] ?></th>
            <th><?= $elem['user_name'] ?></th>
            <th><?= $elem['user_age'] ?></th>
            <th><?= round((float)$elem['user_salary'], 2) ?></th>
        </tr>
    <?php endforeach; ?>
</table>


<ul>
    <?php foreach ($data as $elem) : ?>
        <li><?= $elem['user_name'] ?></li>
    <?php endforeach; ?>
</ul>
