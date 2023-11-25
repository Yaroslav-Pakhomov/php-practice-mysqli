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


// Передача по ссылке. Передача объектов по ссылке


require_once './UserClass.php';


// Несколько потомков
$user = new UserClass('john', 24);

$test = $user; // и $test, и $user ссылаются на один и тот же объект
$test->name = 'eric'; // поменяли переменную $test - но $user также поменялась!


echo '<br>';
echo '<br>';
// Проверим - выведем свойство name из переменной $user:
echo $user->name; // выведет 'eric'!
echo '<br>';
echo '<br>';
$user = 123;   // Теперь $test ссылается, а $user - нет
// Объект существует в памяти компьютера до тех пор, пока на него ссылается хоть кто-нибудь. В примере выше, если что-нибудь записать и в переменную $user - на наш объект больше не будет ссылаться ни одна переменная и этот объект удалится из памяти.
echo '<br>';
echo '<br>';




// $user = 1;

// $test = $user; // в переменной $test теперь 1
// $test = 2;     // в переменной $test теперь 2, а в $user - по-прежнему 1
