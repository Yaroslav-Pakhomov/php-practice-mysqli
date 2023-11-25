<?php

declare(strict_types=1);

use Admin\PageTest as AdminPageTest;
use Users\Page as UsersPage;

use Admin\Data\Page as AdminDataPage;
use Admin\View\Page as AdminViewPage;

// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// выключение вывод всех ошибок
// error_reporting(0);
// ini_set('display_errors', 'off');

// Кодировка
mb_internal_encoding('UTF-8');

require_once './admin/PageTest.php';
require_once './users/Page.php';

require_once './admin/data/Page.php';
require_once './admin/view/Page.php';

$adminPage = new AdminPageTest();
$usersPage = new UsersPage();

$adminDataPage = new AdminDataPage();
$adminViewPage = new AdminViewPage();
