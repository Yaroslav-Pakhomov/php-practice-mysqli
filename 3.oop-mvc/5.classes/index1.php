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

require_once './SessionShellClass.php';
$sess_sh = new SessionShellClass();


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
echo (new TagClass('input'))->setAttr('id', 'test')
    ->setAttr('class', 'input1_class1 input1_class2')
    ->setAttr('name', 'name2')
    ->open();

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

// echo $_SERVER['REQUEST_URI'];


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo '<h3>Класс HtmlList и ListItem</h3>';

require_once './tag_classes/list/HtmlListClass.php';
require_once './tag_classes/list/ListItemClass.php';

$list = new HtmlListClass('ul');

echo $list->addItem((new ListItemClass())->setText('item 1')->setAttr('class', 'first'))
    ->addItem((new ListItemClass())->setText('item 2'))
    ->addItem((new ListItemClass())->setText('item 3'));


echo '<br>';
echo '<br>';


echo '<h5>Класс Ul</h5>';
require_once './tag_classes/list/UlHtmlListClass.php';

echo (new UlHtmlListClass())->addItem((new ListItemClass())->setText('ul item 1'))
    ->addItem((new ListItemClass())->setText('ul item 2'))
    ->addItem((new ListItemClass())->setText('ul item 3'));

echo '<br>';
echo '<br>';


echo '<h5>Класс Ol</h5>';
require_once './tag_classes/list/OlHtmlListClass.php';

echo (new OlHtmlListClass())->addItem((new ListItemClass())->setText('ol item 1'))
    ->addItem((new ListItemClass())->setText('ol item 2'))
    ->addItem((new ListItemClass())->setText('ol item 3'));


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo '<h3>Класс Form</h3>';

require_once './tag_classes/form/FormClass.php';

echo (new FormClass())->setAttrs(['action' => './index1.php', 'method' => 'post']);


$form = (new FormClass())->setAttrs(['action' => './index1.php', 'method' => 'post', 'class' => 'form2']);

echo $form->open();


echo '<h5>Класс Input</h5>';
require_once './tag_classes/form/InputClass.php';

echo (new InputClass())->setAttrs(['type' => 'text', 'name' => 'name']);

echo '<br>';
echo '<br>';

echo (new InputClass())->setAttrs(['type' => 'text', 'name' => 'year', 'value' => date('Y')]);

echo '<br>';
echo '<br>';


echo '<h5>Класс Password</h5>';
require_once './tag_classes/form/PasswordClass.php';

echo (new PasswordClass())->setAttrs(['name' => 'password_field']);

echo '<br>';
echo '<br>';


echo '<h5>Класс Hidden</h5>';
require_once './tag_classes/form/HiddenClass.php';

echo (new HiddenClass())->setAttr('name', 'id')->setAttr('value', '123');

echo '<br>';
echo '<br>';


echo '<h5>Класс Textarea</h5>';
require_once './tag_classes/form/TextareaClass.php';

echo (new TextareaClass())->setText(' ')
    ->setAttr('name', 'textarea_field')
    ->setAttrs(['rows' => '10', 'cols' => '70',])
    ->setAttr('placeholder', 'Подсказка внутри textarea');

echo '<br>';
echo '<br>';


echo '<h5>Класс Checkbox</h5>';
require_once './tag_classes/form/CheckboxClass.php';

echo (new CheckboxClass())->setAttr('name', 'checkbox_field');

echo '<br>';
echo '<br>';


echo '<h5>Класс Radio</h5>';
require_once './tag_classes/form/RadioClass.php';

echo (new RadioClass())->setAttr('id', 'radio_id1')->setAttr('name', 'radio_field')->setAttr('value', '1');
echo '<br>';

echo (new RadioClass())->setAttr('id', 'radio_id2')->setAttr('name', 'radio_field')->setAttr('value', '2');
echo '<br>';

echo (new RadioClass())->setAttr('id', 'radio_id3')->setAttr('name', 'radio_field')->setAttr('value', '3');
echo '<br>';

echo '<br>';
echo '<br>';


echo '<h5>Класс Select</h5>';
require_once './tag_classes/form/SelectClass.php';
require_once './tag_classes/form/OptionClass.php';

echo (new SelectClass)->setAttr('name', 'list')
    ->addOption((new OptionClass())->setAttr('name', 'option1')
        ->setText('item1'))
    ->addOption((new OptionClass())->setAttr('name', 'option2')->setText('item2'))
    ->addOption((new OptionClass())->setAttr('name', 'option3')->setText('item3'));

echo '<br>';
echo '<br>';


echo '<h5>Класс Submit</h5>';
require_once './tag_classes/form/SubmitClass.php';

echo (new SubmitClass())->setAttrs(['value' => 'ОТПРАВИТЬ']);

echo $form->close();


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


echo '<h5>Класс TagHelper</h5>';
require_once './tag_classes/TagHelperClass.php';

$th = new TagHelperClass();
echo $th->open('div', ['id' => 'th_div', 'class' => 'th_div',]) . 'text' . $th->close('div');

echo '<br>';
echo '<br>';

echo $th->open('form', ['action' => 'test.php', 'method' => 'GET']);
echo $th->open('input', ['name' => 'year']);
echo $th->open('br');
echo $th->open('br');
echo $th->open('input', ['type' => 'submit']);
echo $th->close('form');

echo '<br>';

echo $th->show('div', 'text show', ['id' => 'th_show_div', 'class' => 'th_show_div',]);

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


echo '<h5>Класс FormHelper</h5>';
require_once './tag_classes/form/FormHelperClass.php';

$fh = new FormHelperClass();

echo $fh->openForm(['action' => '', 'method' => 'GET']);

echo $fh->input(['name' => 'year']);

echo '<br>';
echo '<br>';

echo $fh->checkbox(['name' => 'check']);

echo '<br>';
echo '<br>';

echo $fh->textarea(['name' => 'textarea_field']);

echo '<br>';
echo '<br>';

echo $fh->select(['name' => 'list', 'class' => 'eee'], [
    ['text' => 'item1', 'attrs' => ['value' => '1']],
    ['text' => 'item2', 'attrs' => ['value' => '2', 'selected' => true]],
    ['text' => 'item3', 'attrs' => ['value' => '3', 'class' => 'last']],
],

);

echo '<br>';
echo '<br>';

echo $fh->submit();

echo $fh->closeForm();


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo '<h5>Класс CookieShell</h5>';
require_once './CookieShellClass.php';

$csh = new CookieShellClass();
echo $csh->set('test', '123', 3600 * 24);

echo '<br>';
echo '<br>';

echo $csh->get('test'); // выведет 123

echo '<br>';
echo '<br>';

echo $csh->del('test');

echo '<br>';
echo '<br>';

echo $csh->get('test');             // выведет null


echo '<br>';
echo '<br>';
echo '<br>';

if (!$csh->exists('counter')) {

    echo $csh->set('counter', '1');
} else {
    $counter = (int)$csh->get('counter');
    $counter++;
    echo $csh->set('counter', '' . $counter);
}


echo '<br>';
echo '<br>';

$counter = (int)$csh->get('counter');
echo $counter;

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


echo '<h3>Класс SessionShell</h3>';

$sess_sh->set('name', 'Витёк');
echo $sess_sh->get('name');


$sess_sh->del('name');
echo $sess_sh->get('name');

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


echo '<h3>Класс FileManipulator</h3>';
require_once './FileManipulatorClass.php';

$file_man_cl = new FileManipulatorClass();

if (is_int($file_man_cl->create('File/text.txt'))) {
    echo 'Файл создан';

    echo '<br>';
    echo '<br>';
}

if (is_int($file_man_cl->create('File/text1.txt'))) {
    echo 'Файл создан';

    echo '<br>';
    echo '<br>';
}

if ($file_man_cl->rename('File/text.txt', 'rename_text.txt')) {
    echo 'Файл переименован';

    echo '<br>';
    echo '<br>';
}

if ($file_man_cl->replace('File/text1.txt', 'FileNew/text1.txt')) {
    echo 'Файл перемещён';

    echo '<br>';
    echo '<br>';
}

if (is_int($file_man_cl->weigh('FileNew/text1.txt'))) {
    echo 'Размер файла: ' . $file_man_cl->weigh('FileNew/text1.txt') . ' Мб';

    echo '<br>';
    echo '<br>';
}

if ($file_man_cl->copy('FileNew/text1.txt', 'FileNew/text2.txt')) {
    echo 'Файл скопирован';

    echo '<br>';
    echo '<br>';
}

if ($file_man_cl->copy('FileNew/text1.txt', 'FileNew/text3.txt')) {
    echo 'Файл скопирован';

    echo '<br>';
    echo '<br>';
}

if ($file_man_cl->delete('FileNew/text3.txt')) {
    echo 'Файл удалён';

    echo '<br>';
    echo '<br>';
}


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


echo '<h3>Класс Validator</h3>';
require_once './ValidatorClass.php';

$valid_cl = new ValidatorClass();

if ($valid_cl->isEmail('bob@example.com')) {
    echo 'Корректная почта';

    echo '<br>';
    echo '<br>';
}

if ($valid_cl->isDomain('http://example.com')) {
    echo 'Корректный домен';

    echo '<br>';
    echo '<br>';
}

if ($valid_cl->inRange(7, 3, 10)) {
    echo 'В диапазоне чисел';

    echo '<br>';
    echo '<br>';
}

if ($valid_cl->inLength('strl', 3, 10)) {
    echo 'Длинна строки в диапазоне';

    echo '<br>';
    echo '<br>';
}

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


echo '<h3>Класс DatabaseShell</h3>';
require_once './DatabaseShellClass.php';

// Данные для подключения
$host = 'localhost';                // имя хоста
$user = 'root';                     // имя пользователя
$password = 'root';                 // пароль
$database = 'db_organization';      // имя базы данных

$db_shell = new DatabaseShellClass($host, $user, $password, $database);

$table = 'example_users';
$data = ['user_name' => 'Созданный пользователь', 'user_age' => 28, 'user_salary' => 1000, 'city_id' => 1];

// $db_shell->save($table, $data);

echo '<pre>' . print_r($db_shell->get($table, 111), true) . '</pre>';

echo '<br>';
echo '<br>';

$records = print_r($db_shell->getAll($table, [109, 110, 111]), true);

echo '<pre>' . $records . '</pre>';

echo '<br>';
echo '<br>';

$records = print_r($db_shell->getAll($table, "where id >= 100"), true);

echo '<pre>' . $records . '</pre>';

// $db_shell->del($table, 50);

// $db_shell->delAll($table, range(51, 54));

$condition = ['user_name' => 'Пользователь 20', 'user_age' => 30];
$records = print_r($db_shell->selectAll($table, $condition), true);

echo '<pre>' . $records . '</pre>';

echo '<br>';
echo '<br>';

echo '<br>';
echo '<br>';

echo '<br>';
echo '<br>';

echo '<br>';
echo '<br>';

echo '<br>';
echo '<br>';

echo '<br>';
echo '<br>';

echo '<br>';
echo '<br>';
