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


// Классы

echo '<h1>Классы</h1>';

echo '<br>';
echo '<br>';

echo '<h3>Класс Tag</h3>';

require_once './tag_classes/TagClass.php';

$input = new TagClass('input');

// цепочка реализуется за счёт возвращение '$this'
$input->setAttr('id', 'input_id')
    // создаем атрибут
    ->setAttr('class', 'input_class')->setAttr('name', 'name1')
    // создаем атрибут без значения
    ->setAttr('disabled', TRUE)
    // добавляем класс
    ->addClass('input_new_class')->addClass('ddd')->addClass('zzz');

// Удаление класса
$input->removeClass('ddd');

// Удаление атрибутов
$input->removeAttrs(['id']);

echo $input->open();

echo '<br>';
echo '<br>';

// название тега
echo $input->getName();

echo '<br>';
echo '<br>';

// заданный атрибут тега
echo $input->getAttr('class');

echo '<br>';
echo '<br>';

// получаем все атрибуты тега
print_r($input->getAttrs());

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// Вызов методов сразу после создания объекта
echo (new TagClass('input'))->setAttr('id', 'test')->setAttr('class', 'input1_class1 input1_class2')->setAttr('name', 'name2')->open();

echo '<br>';
echo '<br>';


$div = new TagClass('div');
$div->setAttr('id', 'div_id')->setAttr('class', 'div_class');
$div->removeAttr('id');
echo $div->open() . 'text' . $div->close();

echo '<br>';
echo '<br>';


$img = new TagClass('img');
echo $img->setAttrs(['src' => './img/1.jpg', 'alt' => 'img_alt'])->setAttr('width', '100%')->open();

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo '<h3>Класс Image</h3>';

require_once './tag_classes/ImageClass.php';

echo (new ImageClass())->setAttr('src', './img/2.jpg')->setAttr('width', '100%')->open();

echo '<br>';
echo '<br>';

$img1 = new ImageClass();
$img1->setAttr('src', './img/3.jpg')->setAttr('width', '100%');

echo $img1; // тут сработает __toString, из-за оператора echo


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo '<h3>Класс Link</h3>';

// Файл для работы с классом LinkClass
require_once './components/menu.php';


echo '<br>';
echo '<br>';

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
