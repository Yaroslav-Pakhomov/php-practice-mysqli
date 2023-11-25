<?php

declare(strict_types=1);

use Core\Admin\Data as AdminData;

// подключаем класс и устанавливаем псевдонимы классов
use Core\Users\Data as UsersData;

// подключаем класс и устанавливаем псевдонимы классов


// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// выключение вывод всех ошибок
// error_reporting(0);
// ini_set('display_errors', 'off');

// Кодировка
mb_internal_encoding('UTF-8');

require_once './core/admin/Data.php';
require_once './core/users/Data.php';


$adminData1 = new AdminData(1);
$adminData2 = new AdminData(2);

$usersData1 = new UsersData(1);
$usersData2 = new UsersData(2);
