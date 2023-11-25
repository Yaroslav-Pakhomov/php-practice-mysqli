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

football_game.game_date AS game_date, command_1.command_title AS command_1, command_2.command_title AS command_2

FROM football_game

INNER JOIN football_command as command_1

ON command_1.id = football_game.command_1

INNER JOIN football_command as command_2

ON command_2.id = football_game.command_2';

$data = dataOutput($link, $query);

// print_r($data);
echo '<br>';


echo 'ИГРА: <br><br>';

foreach ($data as $game) {
    echo 'Время <br>' . $game['game_date'] . ' <br><br>';
    echo 'Команды: <br> ' . $game['command_1'] . ' - ' . $game['command_2'] . ' <br>';
    echo '<br>';
    echo '<br>';
}

echo '<br>';
echo '<br>';

echo 'ИГРА: <br><br>';

$query = 'SELECT

football_footballer.fio AS fio, football_footballer.number AS number, command_1.command_title AS command_title

FROM football_footballer

INNER JOIN football_command as command_1

ON command_1.id = football_footballer.command_id

WHERE football_footballer.command_id = 1

LIMIT 5';

$command_1 = dataOutput($link, $query);

$command = [];

$arr = [];

foreach ($command_1 as $player) {
    $arr['fio'] = $player['fio'];
    $arr['number'] = $player['number'];
    $command[$player['command_title']][] = $arr;
    $arr = [];
}

// print_r($command);

foreach ($command as $command_title => $players) {
    echo 'Состав команды "' . $command_title . '"<br>';
    foreach ($players as $player) {
        echo 'Имя: ' . $player['fio'] . ', номер - ' . $player['number'] . '<br>';
    }
}

echo '<br>';
echo '<br>';

$query = 'SELECT

football_footballer.fio AS fio, football_footballer.number AS number, command_2.command_title AS command_title

FROM football_footballer

INNER JOIN football_command as command_2

ON command_2.id = football_footballer.command_id

WHERE football_footballer.command_id = 2

LIMIT 5';

$command_2 = dataOutput($link, $query);

$command = [];

$arr = [];

foreach ($command_2 as $player) {
    $arr['fio'] = $player['fio'];
    $arr['number'] = $player['number'];
    $command[$player['command_title']][] = $arr;
    $arr = [];
}

// print_r($command);

foreach ($command as $command_title => $players) {
    echo 'Состав команды "' . $command_title . '"<br>';
    foreach ($players as $player) {
        echo 'Имя: ' . $player['fio'] . ', номер - ' . $player['number'] . '<br>';
    }
}

// echo '<br>';
// echo '<br>';
// echo '<br>';
// echo '<br>';


// Запрос
// $query = 'SELECT

// example_users.user_name as user_name, fathers.user_name as father_name, mothers.user_name as mother_name

// FROM example_users

// INNER JOIN example_users as fathers

// ON fathers.id = example_users.father_id

// INNER JOIN example_users as mothers

// ON mothers.id = example_users.mother_id';


// $data = dataOutput($link, $query);


// $res = [];

// foreach ($data as $data_user) {
// 	$res[$data_user['father_name']][$data_user['mother_name']][] = $data_user['user_name'];
// }


// foreach ($res as $father => $mothers) {
// 	foreach ($mothers as $mother => $user) {
// 		echo 'Отец  - ' . $father . ', Мать  - ' . $mother . ', дети: ' . implode(', ', $user) . '<br>';;
// 		echo '<br>';
// 	}
// 	echo '<br>';
// }
