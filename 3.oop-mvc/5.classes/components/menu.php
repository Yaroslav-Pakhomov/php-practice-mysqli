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


require_once '../tag_classes/LinkClass.php';

$link = new LinkClass();
$link->setText('index')->setAttr('href', 'index1.php');
// $link->activateSelf();
echo $link; // тут сработает __toString, из-за оператора echo


echo '<br>';
echo '<br>';

$link = new LinkClass();
$link->setText('page1')->setAttr('href', '1.php');
echo $link; // тут сработает __toString, из-за оператора echo

echo '<br>';
echo '<br>';

echo (new LinkClass())->setText('page2')->setAttr('href', '2.php');

echo '<br>';
echo '<br>';

echo (new LinkClass())->setText('page3')->setAttr('href', '3.php');

echo '<br>';
echo '<br>';

echo (new LinkClass())->setText('page4')->setAttr('href', '4.php');

echo '<br>';
echo '<br>';
