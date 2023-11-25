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

aqua_rivers.rivers_title AS rivers_title, tributary_rivers.rivers_title AS tributary_rivers_title, aqua_seas.seas_title

FROM aqua_rivers

INNER JOIN aqua_rivers AS tributary_rivers

ON tributary_rivers.tributary_id = aqua_rivers.id

INNER JOIN aqua_seas

ON aqua_seas.id = aqua_rivers.seas_id';

$data = dataOutput($link, $query);


$res = [];

foreach ($data as $data_aqua) {
	$res[$data_aqua['seas_title']][$data_aqua['rivers_title']][] = $data_aqua['tributary_rivers_title'];
}

// print_r($data);
// echo '<br>';
// echo '<br>';
// echo '<br>';

foreach ($res as $sea => $rivers) {
	echo 'Наименование моря - "' . $sea . '": <br>';
	echo '<br>';
	foreach ($rivers as $river => $tributary) {
		echo 'Наименование реки  - "' . $river . '", наименование притока реки: ' . implode(', ', $tributary) . '.';
		echo '<br>';
		echo '<br>';
	}
	echo '<br>';
	echo '<br>';
}

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
