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

// есть список юзеров
$users = [
    [
        'id'      => 11,
        'name'    => 'name11',
        'surname' => 'surname11',
    ],
    [
        'id'      => 14,
        'name'    => 'name14',
        'surname' => 'surname14',
    ],
    [
        'id'      => 17,
        'name'    => 'name17',
        'surname' => 'surname17',
    ],
];

// переформатирует наш массив вот в такой:
$usersNew = [
    11 => [
        'id'      => 11,
        'name'    => 'name11',
        'surname' => 'surname11',
    ],
    14 => [
        'id'      => 14,
        'name'    => 'name14',
        'surname' => 'surname14',
    ],
    17 => [
        'id'      => 17,
        'name'    => 'name17',
        'surname' => 'surname17',
    ],
];
$result = [];
foreach ($users as $user) {
    $result[$user['id']] = $user;
}

var_dump($result);
echo "<br>";
echo "<br>";
echo "<br>";

$countries = [
    [
        'country' => 'Россия',
        'city'    => 'Москва',
    ],
    [
        'country' => 'Беларусь',
        'city'    => 'Минск',
    ],
    [
        'country' => 'Россия',
        'city'    => 'Питер',
    ],
    [
        'country' => 'Россия',
        'city'    => 'Владивосток',
    ],
    [
        'country' => 'Украина',
        'city'    => 'Львов',
    ],
    [
        'country' => 'Беларусь',
        'city'    => 'Могилев',
    ],
    [
        'country' => 'Украина',
        'city'    => 'Киев',
    ],
];
echo '<pre>';
print_r($countries);
echo '</pre>';
echo "<br>";
echo "<br>";

$result = [];
foreach ($countries as $country) {
    $result[$country['country']][] = $country['city'];
}
echo '<pre>';
print_r($result);
echo '</pre>';
echo "<br>";
echo "<br>";
echo "<br>";

$arr = [
    [
        'date'  => '2019-12-29',
        'event' => 'name1',
    ],
    [
        'date'  => '2019-12-31',
        'event' => 'name2',
    ],
    [
        'date'  => '2019-12-29',
        'event' => 'name3',
    ],
    [
        'date'  => '2019-12-30',
        'event' => 'name4',
    ],
    [
        'date'  => '2019-12-29',
        'event' => 'name5',
    ],
    [
        'date'  => '2019-12-31',
        'event' => 'name6',
    ],
    [
        'date'  => '2019-12-29',
        'event' => 'name7',
    ],
    [
        'date'  => '2019-12-30',
        'event' => 'name8',
    ],
    [
        'date'  => '2019-12-30',
        'event' => 'name9',
    ],
];
$result = [];
foreach ($arr as $k => $v) {
    $result[$v['date']][] = $v['event'];
}
echo '<pre>';
print_r($result);
echo '</pre>';
echo "<br>";
echo "<br>";
echo "<br>";

$arr = [
    '2019-12-29' => ['name1', 'name2', 'name3', 'name4'],
    '2019-12-30' => ['name5', 'name6', 'name7'],
    '2019-12-31' => ['name8', 'name9'],
];
$result = [];
$k = 0;
foreach ($arr as $key => $value) {
    for ($i = 0, $iMax = count($value); $i < $iMax; $i++, $k++) {
        $result[$k]['date'] = $key;
        $result[$k]['event'] = $value[$i];
    }
}
echo '<pre>';
print_r($result);
echo '</pre>';
echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";

?>
