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


// Объекты в массиве. Хранение объектов в массивах в ООП


require_once './UserCLass.php'; // подключаем наш класс

$user1 = new UserCLass('john', 21);
$user2 = new UserCLass('eric', 22);
$user3 = new UserCLass('kyle', 23);

// echo $user->class_name;

$users[] = new UserCLass('john', 21);
$users[] = new UserCLass('eric', 22);
$users[] = new UserCLass('kyle', 23);

var_dump($users);

echo '<br>';
echo '<br>';
echo '<br>';

$users = [
    new UserCLass('john', 21),
    new UserCLass('eric', 22),
    new UserCLass('kyle', 23),
];

// Переберем созданный массив циклом:
foreach ($users as $user) {
    echo $user->name . ' ' . $user->age . '<br>';
}
